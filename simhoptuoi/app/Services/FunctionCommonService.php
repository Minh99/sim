<?php
namespace App\Services;

use Google\Client;
use Google\Service\Drive;
use Google\Service\Sheets;
use Illuminate\Support\Facades\Storage;
use PhpOffice\PhpSpreadsheet\IOFactory;

class FunctionCommonService {

    protected $GoogleSheetsService;

    public function __construct(GoogleSheetsService $GoogleSheetsService)
    {
        $this->GoogleSheetsService = $GoogleSheetsService;
    }

    public function getDataBySpreadsheetId($spreadsheetId)
    {
        return $this->GoogleSheetsService->getJsonData($spreadsheetId);
    }

    public function getSimData()
    {
        $spreadsheetId = env('GOOGLE_SHEETS_SPREADSHEET_ID_SIM_DATA');
        $jsonData = $this->getDataBySpreadsheetId($spreadsheetId);
        return $jsonData;
    }

    public function getBoiSimData()
    {
        $spreadsheetId = env('GOOGLE_SHEETS_SPREADSHEET_ID_BOI_SIM');
        $jsonData = $this->getDataBySpreadsheetId($spreadsheetId);
        return $jsonData;
    }

    public function getThongTinPhongThuyBangSdt($sdt)
    {
        if (substr($sdt, 0, 1) == '0') {
            $sdt = substr($sdt, 1);
        }

        $fourFirstNumber = substr($sdt, 0, 4);
        $fiveLastNumber = substr($sdt, -5);

        $totalFourFirstNumber = $this->totalDigit($fourFirstNumber);
        $totalFiveLastNumber = $this->totalDigit($fiveLastNumber);

        $id = ($totalFourFirstNumber * 10) + $totalFiveLastNumber;

        $boiSimData = json_decode($this->getBoiSimData(), true);

        foreach ($boiSimData as $item) {
            if (intval($item['id']) == $id) {
                return array_map("utf8_decode", $item);
            }
        }

        return [];
    }

    function getListSimData() 
    {
        $simData = json_decode($this->getSimData(), true);

        $result = [];

        foreach ($simData as $item) {
            $result[] = array_map("utf8_decode", $item);
        }


        foreach ($result as $key => $item) {
            $result[$key]['sdt'] = $this->formatPhoneNumber($item['sdt']);
            $result[$key]['gia_ban'] = $this->formatGiaBan($item['gia_ban']);
        }

        return $result;
        
    }

    function getDetailSimData($sdt) 
    {
        $simData = json_decode($this->getSimData(), true);

        $result = [];

        foreach ($simData as $item) {
            $result[] = array_map("utf8_decode", $item);
        }

        foreach ($result as $key => $item) {
            $result[$key]['sdt'] = $this->formatPhoneNumber($item['sdt']);
            $result[$key]['gia_ban'] = $this->formatGiaBan($item['gia_ban']);

            if ($result[$key]['sdt'] == $sdt) {
                return $result[$key];
            }
        }

        return [];
    }

    
    private function totalDigit($string)
    {
        $total = 0;
        for ($i = 0; $i < strlen($string); $i++) {
            $total += intval($string[$i]);
        }

        $total = $total % 8;

        if ($total == 0) {
            $total = 8;
        }

        return $total;
    }

    private function formatPhoneNumber($sdt) {
        $sdt = str_replace(' ', '', $sdt);
        $sdt = str_replace('.', '', $sdt);
        $sdt = str_replace('-', '', $sdt);
        $sdt = str_replace('+84', '0', $sdt);
        $sdt = str_replace('0084', '0', $sdt);

        for ($i = 0; $i < strlen($sdt); $i++) {
            if ($i == 4) {
                $sdt = substr_replace($sdt, '.', $i, 0);
            }

            if ($i == 8) {
                $sdt = substr_replace($sdt, '.', $i, 0);
            }
        }

        return $sdt;
    }

    private function formatGiaBan($gia) {
        $gia = str_replace(' ', '', $gia);
        $gia = str_replace('.', '', $gia);
        $gia = str_replace(',', '', $gia);
        $gia = str_replace('-', '', $gia);
        $gia = str_replace('đ', '', $gia);

        return number_format(floatval($gia), 0, ',', '.');
    }

    
}