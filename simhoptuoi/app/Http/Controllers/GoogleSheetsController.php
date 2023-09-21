<?php

namespace App\Http\Controllers;

use App\Services\GoogleSheetsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class GoogleSheetsController extends Controller
{
    protected $googleSheetsService;

    const TYPE_BOI_SIM = 1;
    const TYPE_SIM_DATA = 2;

    const TYPE_SIM_NANG_LUONG46 = 3;
    const TYPE_GIAI_DOAN = 4;

    const TYPE_XEM_TUOI_AM = 5;

    const TYPE_SIM_NANG_LUONG = 6;



    public function __construct(GoogleSheetsService $googleSheetsService)
    {
        $this->googleSheetsService = $googleSheetsService;
    }

    public function changeCode(Request $request)
    {
        $code = $request->get('code');

        Storage::disk('public')->put('code.json', json_encode(['code' => $code]));

        return redirect()->route('admin.home')->with('success', 'Change code successfully');
    }

    public function sync(Request $request)
    {
        $syncType = $request->get('sync_type');

        switch ($syncType) {
            case self::TYPE_BOI_SIM:
                $this->syncBoiSim();
                break;
            case self::TYPE_SIM_NANG_LUONG46:
                $this->syncBoiSimNangLuong();
                break;
            case self::TYPE_SIM_DATA:
                $this->syncSimData();
                break;
            case self::TYPE_GIAI_DOAN:
                $this->syncGiaiDoan();
                break;
            case self::TYPE_XEM_TUOI_AM:
                $this->syncXemTuoiAm();
                break;
            default:
                $jsonData = [];
                break;
        }

        return redirect()->route('admin.home')->with('success', 'Sync successfully');
    }

    function syncBoiSim()
    {
        try {
            $spreadsheetId = env('GOOGLE_SHEETS_SPREADSHEET_ID_BOI_SIM');
            $excelFilePath = $this->googleSheetsService->downloadFileExcelFromDriver($spreadsheetId);

            $rowStart = 3;
            $rowEnd = 66;
            $colStart = 'B';
            $colEnd = 'T';
            $header = [
                'B' => 'id',
                'C' => 'so_que',
                'D' => 'ten_que',
                'E' => 'cung_phi',
                'F' => 'hinh_que',
                'G' => 'tong_quat',
                'H' => 'que',
                'I' => 'danh_gia',
                'J' => 'y_nghia_que',
                'K' => 'luan_giai_sim',
                'L' => 'chiem_nghiem_ve_van_the',
                'M' => 'xet_ve_gia_dao_tinh_cam',
                'N' => 'dong_hao_1',
                'O' => 'dong_hao_2',
                'P' => 'dong_hao_3',
                'Q' => 'dong_hao_4',
                'R' => 'dong_hao_5',
                'S' => 'dong_hao_6',
                'T' => 'nx_ve_mqh_giua_chu_va_sim',
            ];

            list($link, $jsonData) = $this->googleSheetsService->convertExcelToJson(
                $excelFilePath,
                'que_dich',
                $header,
                $rowStart,
                $rowEnd,
                $colStart,
                $colEnd
            );

            // Log::info($link);
        } catch (\Exception $e) {
            Log::error($e->getMessage());

            throw new \Exception("Sync Boi Sim failed:". $e->getMessage(), 400);
        }
    }

    function syncSimData()
    {
        try {
            $spreadsheetId = env('GOOGLE_SHEETS_SPREADSHEET_ID_SIM_DATA');
            $excelFilePath = $this->googleSheetsService->downloadFileExcelFromDriver($spreadsheetId);

            $rowStart = env('SIM_DATA_ROW_START');
            $rowEnd = env('SIM_DATA_ROW_END');
            $colStart = env('SIM_DATA_COL_START');
            $colEnd = env('SIM_DATA_COL_END');
            $header = [
                'C' => 'nha_mang',
                'D' => 'loai_sim',
                'E' => 'sdt',
                'F' => 'sdt',
                'G' => 'que',
                'H' => 'ngu_hanh',
                'I' => 'que_chinh',
                'J' => 'que_bien',
                'K' => 'gia_ban',
                'L' => 'diem_phong_thuy',
                'M' => 'tinh_trang',
                'N' => 'loai_1',
                'O' => 'loai_2',
                'P' => 'loai_3',
            ];

            list($link, $jsonData) = $this->googleSheetsService->convertExcelToJson(
                $excelFilePath,
                'sdt',
                $header,
                $rowStart,
                $rowEnd,
                $colStart,
                $colEnd
            );

            // Log::info($link);
        } catch (\Exception $e) {
            Log::error($e->getMessage());

            throw new \Exception("Sync Boi Sim failed:". $e->getMessage(), 400);
        }
    }

    function syncBoiSimNangLuong()
    {
        try {
            $spreadsheetId = env('GOOGLE_SHEETS_SPREADSHEET_ID_BOI_SIM_NANG_LUONG_4_6');
            $excelFilePath = $this->googleSheetsService->downloadFileExcelFromDriver($spreadsheetId);

            $rowStart = 20;
            $rowEnd = 1000;
            $colStart = 'D';
            $colEnd = 'E';
            $header = [
                'D' => 'id',
                'E' => 'content',
            ];

            list($link, $jsonData) = $this->googleSheetsService->convertExcelToJson(
                $excelFilePath,
                'Trang tính5',
                $header,
                $rowStart,
                $rowEnd,
                $colStart,
                $colEnd,
                'nang_luong_so_46'
            );


            $rowStart = 3;
            $rowEnd = 10;
            $colStart = 'B';
            $colEnd = 'Q';
            $header = [
                'B' => 'id',
                'C' => '',
                'D' => '',
                'E' => '',
                'F' => '',
                'G' => '',
                'H' => '',
                'I' => '',
                'J' => '',
                'K' => 'y_nghia',
                'L' => 'tinh_cach_tot',
                'M' => 'tinh_cach_xau',
                'N' => 'tai_van_tien_bac',
                'O' => 'cong_danh',
                'P' => 'tinh_dam',
                'Q' => 'benh_tat',
            ];

            list($link, $jsonData) = $this->googleSheetsService->convertExcelToJson(
                $excelFilePath,
                'dac_diem_cac_tu_truong',
                $header,
                $rowStart,
                $rowEnd,
                $colStart,
                $colEnd,
                'dac_diem_cac_tu_truong'
            );

            // Log::info($link);
        } catch (\Exception $e) {
            Log::error($e->getMessage());

            throw new \Exception("Sync Boi Sim Nang Luong failed:". $e->getMessage(), 400);
        }
    }

    function syncGiaiDoan()
    {
        try {
            $spreadsheetId = env('GOOGLE_SHEETS_SPREADSHEET_ID_GIAI_DOAN');
            $excelFilePath = $this->googleSheetsService->downloadFileExcelFromDriver($spreadsheetId);

            $rowStart = 21;
            $rowEnd = 50;
            $colStart = 'B';
            $colEnd = 'C';
            $header = [
                'B' => 'id',
                'C' => 'content',
            ];

            list($link, $jsonData) = $this->googleSheetsService->convertExcelToJson(
                $excelFilePath,
                'Giải đoán',
                $header,
                $rowStart,
                $rowEnd,
                $colStart,
                $colEnd,
                'giai_doan_sao'
            );

            $rowStart = 21;
            $rowEnd = 50;
            $colStart = 'F';
            $colEnd = 'G';
            $header = [
                'F' => 'id',
                'G' => 'content',
            ];

            list($link, $jsonData) = $this->googleSheetsService->convertExcelToJson(
                $excelFilePath,
                'Giải đoán',
                $header,
                $rowStart,
                $rowEnd,
                $colStart,
                $colEnd,
                'giai_doan_han'
            );

            // Log::info($link);
        } catch (\Exception $e) {
            Log::error($e->getMessage());

            throw new \Exception("Sync GIAI DOAN failed:". $e->getMessage(), 400);
        }
    }


    function syncXemTuoiAm()
    {
        try {
            $spreadsheetId = env('GOOGLE_SHEETS_SPREADSHEET_ID_GIAI_DOAN');
            $excelFilePath = $this->googleSheetsService->downloadFileExcelFromDriver($spreadsheetId);

            $rowStart = 3;
            $rowEnd = 100;
            $colStart = 'B';
            $colEnd = 'C';
            $header = [
                'B' => 'id',
                'C' => 'content',
            ];

            list($link, $jsonData) = $this->googleSheetsService->convertExcelToJson(
                $excelFilePath,
                'Data',
                $header,
                $rowStart,
                $rowEnd,
                $colStart,
                $colEnd,
                'data_xem_tuoi_am'
            );

            // Log::info($link);
        } catch (\Exception $e) {
            Log::error($e->getMessage());

            throw new \Exception("Sync GIAI DOAN failed:". $e->getMessage(), 400);
        }
    }
}
