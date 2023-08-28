<?php

namespace App\Http\Controllers;

use App\Services\GoogleSheetsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Google\Client;
use Google\Service\Drive;
use Google\Service\Sheets;
use PhpOffice\PhpSpreadsheet\IOFactory;

class GoogleSheetsController extends Controller
{
    protected $googleSheetsService;

    public function __construct(GoogleSheetsService $googleSheetsService)
    {
        $this->googleSheetsService = $googleSheetsService;
    }

    public function readSheet()
    {
        $spreadsheetId = env('GOOGLE_SHEETS_SPREADSHEET_ID_BOI_SIM');
        $range = 'Sheet1!A1:B2';
        $data = $this->googleSheetsService->readSheet($spreadsheetId, $range);
        
        // Xử lý dữ liệu đọc được từ Google Sheets
        dd($data);
    }

    public function writeSheet()
    {
        $spreadsheetId = 'your_spreadsheet_id';
        $range = 'Sheet1!A1';
        $values = [
            ['Hello', 'World'],
        ];
        
        $this->googleSheetsService->writeSheet($spreadsheetId, $range, $values);
        
        return "Data written to Google Sheets!";
    }

    public function downloadAndConvertToJSON()
    {
          // Khởi tạo Google Client
          $client = new Client();
          $client->setAuthConfig(storage_path('service_account.json'));
          $client->setScopes([Drive::DRIVE_READONLY]);
  
          // Khởi tạo Drive Service
          $driveService = new Drive($client);
  
          // ID của tệp Google Sheets
          $spreadsheetId = env('GOOGLE_SHEETS_SPREADSHEET_ID_BOI_SIM');
  
          // Tải xuống tệp Google Sheets dưới dạng Excel (XLSX)
          $response = $driveService->files->get($spreadsheetId, ['alt' => 'media']);
          $excelData = $response->getBody()->getContents();
  
          // Lưu tệp Excel vào thư mục tạm
          $excelFilePath = storage_path($spreadsheetId . '.xlsx');
          file_put_contents($excelFilePath, $excelData);
  
          // Sử dụng PhpSpreadsheet để đọc tệp Excel
          $spreadsheet = IOFactory::load($excelFilePath);
          $worksheet = $spreadsheet->getActiveSheet();
  
          $data = [];
          $highestRow = $worksheet->getHighestDataRow();
          $highestColumn = $worksheet->getHighestDataColumn();
  
          // Lặp qua từng dòng để đọc dữ liệu
          for ($row = 1; $row <= $highestRow; $row++) {
              $rowData = [];
              for ($col = 'A'; $col <= $highestColumn; $col++) {
                  $cellValue = $worksheet->getCell($col . $row)->getValue();
                  $rowData[$col] = $cellValue;
              }
              $data[] = $rowData;
          }
          dd($data);

  
          // Chuyển đổi dữ liệu thành JSON
          $jsonData = json_encode($data, JSON_PRETTY_PRINT);
  
          // Lưu dữ liệu JSON vào tệp
          $jsonFilePath = storage_path('converted_data.json');
          file_put_contents($jsonFilePath, $jsonData);
  
          // Xóa tệp Excel tạm sau khi đã đọc và chuyển đổi
          unlink($excelFilePath);
  
          return response()->download($jsonFilePath)->deleteFileAfterSend();
    }
}
