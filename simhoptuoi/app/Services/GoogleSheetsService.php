<?php
namespace App\Services;

use Google\Client;
use Google\Service\Sheets;

class GoogleSheetsService
{
    protected $client;
    protected $service;

    public function __construct()
    {
        $this->client = new Client();
        $this->client->setAuthConfig(storage_path('service_account.json'));
        $this->client->setScopes([Sheets::SPREADSHEETS]);
        $this->service = new Sheets($this->client);
    }

    public function readSheet($spreadsheetId, $range)
    {
        $response = $this->service->spreadsheets_values->get($spreadsheetId, $range);
        return $response->getValues();
    }

    public function writeSheet($spreadsheetId, $range, $values)
    {
        $body = new \Google\Service\Sheets\ValueRange([
            'values' => $values,
        ]);

        $params = [
            'valueInputOption' => 'RAW',
        ];

        $this->service->spreadsheets_values->update($spreadsheetId, $range, $body, $params);
    }

    public function downloadSheetAsCSV($spreadsheetId, $sheet)
    {
        $response = $this->service->spreadsheets_values->get($spreadsheetId, $sheet);

        $values = $response->getValues();

        $csvData = '';
        foreach ($values as $row) {
            $csvData .= implode(',', $row) . "\n";
        }

        return $csvData;
    }

}
