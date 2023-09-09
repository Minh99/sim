<?php
namespace App\Services;

use Google\Client;
use Google\Service\Drive;
use Google\Service\Sheets;
use Illuminate\Support\Facades\Storage;
use PhpOffice\PhpSpreadsheet\IOFactory;

class GoogleSheetsService
{
    protected $client;
    protected $service;

    public function __construct()
    {
        $this->client = new Client();
        $this->client->setAuthConfig(storage_path('service_account.json'));
        $this->client->setScopes([Drive::DRIVE_READONLY]);
        $this->service = new Sheets($this->client);
    }


    /**
     * Write data to google sheets
     */
    public function writeDataToGoogleSheetsInvoice($spreadsheetId, $sheetName = 'invoice', $data)
    {
        $this->client->setScopes([Sheets::SPREADSHEETS]);
        $this->client->setAccessType('offline');

        $sheetsService = new Sheets($this->client);

        $range = "$sheetName!A:A";
        $response = $sheetsService->spreadsheets_values->get($spreadsheetId, $range);
        $values = $response->getValues();

        // Determine the next empty row
        $nextRow = empty($values) ? 1 : count($values) + 1;

        // Data to be written
        $valuesToWrite = [
            $data
        ];


        $rangeToWrite = "$sheetName!A$nextRow";

        $body = new \Google\Service\Sheets\ValueRange([
            'values' => $valuesToWrite,
        ]);

        $result = $sheetsService->spreadsheets_values->update($spreadsheetId, $rangeToWrite, $body, [
            'valueInputOption' => 'RAW',
        ]);

        return "Data written successfully to Google Sheets!";
    }

    /**
     * Only use by admin
     */
    public function downloadFileExcelFromDriver($spreadsheetId)
    {
        $this->client->addScope(Drive::DRIVE);
        $driveService = new Drive($this->client);

        try {
            $response = $driveService->files->get($spreadsheetId, ['alt' => 'media']); #->export($spreadsheetId, 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', ['alt' => 'media']);
        } catch (\Exception $e) {
            $response = $driveService->files->export($spreadsheetId, 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', ['alt' => 'media']);
        }
        $excelData = $response->getBody()->getContents();
        $isSaved = Storage::disk('public')->put($spreadsheetId . '.xlsx', $excelData);

        if (!$isSaved) {
            throw new \Exception("Cannot save excel file $spreadsheetId to storage");
        }

        $excelFilePath = Storage::disk('public')->path($spreadsheetId . '.xlsx');

        return $excelFilePath;
    }

    /**
     * Only use by admin
     */
    public function convertExcelToJson(
        $excelFilePath,
        $sheetName,
        $header,
        $rowStart,
        $rowEnd,
        $colStart,
        $colEnd
    ) {
        $spreadsheet = IOFactory::load($excelFilePath);
        $worksheet = $spreadsheet->getSheetByName($sheetName);

        $data = [];


        for ($row = $rowStart; $row <= $rowEnd; $row++) {
            $rowData = [];
            for ($col = $colStart; $col <= $colEnd; $col++) {
                $cellValue = $worksheet->getCell($col . $row)->getFormattedValue();
                $rowData[$header[$col]] = ($cellValue);
            }
            $data[] = $rowData;
        }

        $jsonData = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

        $isSaved = Storage::disk('public')->put($sheetName . '.json', $jsonData);

        if (!$isSaved) {
            throw new \Exception("Cannot save json file $sheetName  to storage");
        }

        $jsonFilePath = Storage::disk('public')->path($sheetName . '.json');

        return [$jsonFilePath, $jsonData];
    }

    public function getJsonData($fileName)
    {
        $jsonData = Storage::disk('public')->get($fileName . '.json');

        $jsonData = json_decode($jsonData, true);

        $strings = "";
        foreach ($jsonData as $key => $item) {
            foreach ($item as $i => $value) {
                $strings .= $value;
            }
            if ($strings == "") {
                unset($jsonData[$key]);
            }
            $strings = "";
        }

        return json_encode($jsonData, JSON_PRETTY_PRINT);
    }
}
