<?php
namespace App\Services;

use Google\Client;
use Google\Service\Drive;
use Google\Service\Sheets;
use Illuminate\Support\Facades\Storage;
use PhpOffice\PhpSpreadsheet\IOFactory;

class FunctionCommonService {

    public $que64 = [
        ['Càn', 'Quải', 'Đ.Hữu', 'Đ.Tráng', 'T.Súc', 'Nhu', 'Đ.Súc', 'Thái'],
        ['Lý', 'Đoài', 'Khuể', 'Q.Muội', 'T.Phu', 'Tiết', 'Tổn', 'Lâm'],
        ['Đ.Nhân', 'Cách', 'Ly', 'Phong', 'G.Nhân', 'K.Tế', 'Bí', 'M.Di'],
        ['V.Vọng', 'Tùy', 'P.Hạp', 'Chấn', 'Ích', 'Truân', 'Di', 'Phục'],
        ['Cấu', 'Đ.Quá', 'Đỉnh', 'Hằng', 'Tốn', 'Tỉnh', 'Cổ', 'Thăng'],
        ['Tụng', 'Khốn', 'V.Tế', 'Giải', 'Hoán', 'Khảm', 'Mông', 'Sư'],
        ['Độn', 'Hàm', 'Lữ', 'T.Quá', 'Tiệm', 'Kiển', 'Cấn', 'Khiêm'],
        ['Bĩ', 'Tụy', 'Tấn', 'Dự', 'Quan', 'Tỷ', 'Bác', 'Khôn'],
    ];

    protected $GoogleSheetsService;

    public function __construct(GoogleSheetsService $GoogleSheetsService)
    {
        $this->GoogleSheetsService = $GoogleSheetsService;
    }

    public function writeDataToGoogleSheetsInvoice($spreadsheetId, $sheetName = 'invoice', $data)
    {
        return $this->GoogleSheetsService->writeDataToGoogleSheetsInvoice($spreadsheetId, $sheetName = 'invoice', $data);
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
        $spreadsheetId = env('GOOGLE_SHEETS_SPREADSHEET_ID_BOI_SIM_SHEET');
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
        $totalFullNumber = $this->totalDigit($sdt, 6);

        $id = ($totalFourFirstNumber * 10) + $totalFiveLastNumber;

        $boiSimData = json_decode($this->getBoiSimData(), true);

        
        $convertedArray = array_map(function ($row) {
            return array_map(function ($item) {
                return utf8_encode($item);
            }, $row);
        }, $this->que64);

        foreach ($boiSimData as $item) {
            if (intval($item['id']) == $id) {
                $item = array_map("utf8_decode", $item);
                $item['ten_que'] = $convertedArray[$totalFourFirstNumber - 1][$totalFourFirstNumber - 1];
                $item['dong_hao_chinh'] = $item['dong_hao_' . $totalFullNumber];
                $item['dong_hao'] = $totalFullNumber;
                $item['kq'] =  utf8_decode(utf8_encode('Số điện thoại 0'. $sdt . ' có Quẻ Chính ')) . $item['danh_gia'];
                $item['hop_tuoi'] = str_contains($item['danh_gia'], utf8_decode(utf8_encode('quẻ tốt'))) && $totalFiveLastNumber %2 == 0 ? utf8_decode(utf8_encode('và phù hợp với bạn')) : utf8_decode(utf8_encode('không phù hợp với bạn'));
                
                return $item;
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
            if ($item['tinh_trang'] !== 'còn hàng') {
                unset($result[$key]);
            }
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

    
    private function totalDigit($string, $mod = 8)
    {
        $total = 0;
        for ($i = 0; $i < strlen($string); $i++) {
            $total += intval($string[$i]);
        }

        $total = $total % $mod;

        if ($total == 0) {
            $total = $mod;
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

    public function formatGiaBan($gia) {
        $gia = str_replace(' ', '', $gia);
        $gia = str_replace('.', '', $gia);
        $gia = str_replace(',', '', $gia);
        $gia = str_replace('-', '', $gia);
        $gia = str_replace('đ', '', $gia);

        return number_format(floatval($gia), 0, ',', '.');
    }

    
}