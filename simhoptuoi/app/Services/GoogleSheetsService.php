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
     * Only use by admin
     */
    public function downloadFileExcelFromDriver($spreadsheetId)
    {
        $driveService = new Drive($this->client);
        
        $response = $driveService->files->export($spreadsheetId, 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', ['alt' => 'media']);
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
        $spreadsheetId,
        $sheetIndex = 0,
        $header,
        $rowStart,
        $rowEnd,
        $colStart,
        $colEnd
    ) {
        $spreadsheet = IOFactory::load($excelFilePath);
        $sheetName = $spreadsheet->getSheetNames()[$sheetIndex];
        $worksheet = $spreadsheet->getSheetByName($sheetName);

        $data = [];
        

        for ($row = $rowStart; $row <= $rowEnd; $row++) {
            $rowData = [];
            for ($col = $colStart; $col <= $colEnd; $col++) {
                $cellValue = $worksheet->getCell($col . $row)->getFormattedValue();
                $rowData[$header[$col]] = utf8_encode($cellValue);
            }
            $data[] = $rowData;
        }
        
        $jsonData = json_encode($data, JSON_PRETTY_PRINT);

        $isSaved = Storage::disk('public')->put($spreadsheetId . '.json', $jsonData);

        if (!$isSaved) {
            throw new \Exception("Cannot save json file $spreadsheetId  to storage");
        }
        
        $jsonFilePath = Storage::disk('public')->path($spreadsheetId . '.xlsx');
        
        return [$jsonFilePath, $jsonData];
    }

    public function getJsonData($spreadsheetId)
    {
        $jsonData = Storage::disk('public')->get($spreadsheetId . '.json');

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
