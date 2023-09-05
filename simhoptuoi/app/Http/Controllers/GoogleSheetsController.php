<?php

namespace App\Http\Controllers;

use App\Services\GoogleSheetsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class GoogleSheetsController extends Controller
{
    protected $googleSheetsService;

    const TYPE_BOI_SIM = 1;
    const TYPE_SIM_DATA = 2;

    public function __construct(GoogleSheetsService $googleSheetsService)
    {
        $this->googleSheetsService = $googleSheetsService;
    }

    public function sync(Request $request)
    {
        $syncType = $request->get('sync_type');

        switch ($syncType) {
            case self::TYPE_BOI_SIM:
                $this->syncBoiSim();
                break;
            case self::TYPE_SIM_DATA:
                $this->syncSimData();
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
}
