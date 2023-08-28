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
            $rowStart = env('BOI_SIM_ROW_START');
            $rowEnd = env('BOI_SIM_ROW_END');
            $colStart = env('BOI_SIM_COL_START');
            $colEnd = env('BOI_SIM_COL_END');
            $header = [
                'B' => 'id',
                'C' => 'so_que',
                'D' => 'ten_que',
                'E' => 'hinh_que',
                'F' => 'tong_quat',
                'G' => 'que',
                'H' => 'danh_gia',
                'I' => 'y_nghia_que',
                'J' => 'luan_giai_sim',
                'K' => 'chiem_nghiem_ve_van_the',
                'L' => 'xet_ve_gia_dao_tinh_cam',
                'M' => 'dong_hao_1',
                'N' => 'dong_hao_2',
                'O' => 'dong_hao_3',
                'P' => 'dong_hao_4',
                'Q' => 'dong_hao_5',
                'R' => 'dong_hao_6',
                'S' => 'nx_ve_mqh_giua_chu_va_sim',
            ];

            $excelFilePath = $this->googleSheetsService->downloadFileExcelFromDriver($spreadsheetId);
            list($link, $jsonData) = $this->googleSheetsService->convertExcelToJson(
                $excelFilePath, 
                $spreadsheetId,
                0,
                $header,
                $rowStart,
                $rowEnd,
                $colStart,
                $colEnd
            );

            Log::info($link);
        } catch (\Exception $e) {
            Log::error($e->getMessage());

            throw new \Exception("Sync Boi Sim failed:". $e->getMessage(), 400);
        }
    }
    
    function syncSimData()
    {
        try {
            $spreadsheetId = env('GOOGLE_SHEETS_SPREADSHEET_ID_SIM_DATA');
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
                'H' => 'que_chinh',
                'I' => 'que_bien',
                'J' => 'gia_ban',
                'K' => 'diem_phong_thuy',
                'L' => 'tinh_trang',
            ];

            $excelFilePath = $this->googleSheetsService->downloadFileExcelFromDriver($spreadsheetId);
            list($link, $jsonData) = $this->googleSheetsService->convertExcelToJson(
                $excelFilePath, 
                $spreadsheetId,
                1,
                $header,
                $rowStart,
                $rowEnd,
                $colStart,
                $colEnd
            );

            Log::info($link);
        } catch (\Exception $e) {
            Log::error($e->getMessage());

            throw new \Exception("Sync Boi Sim failed:". $e->getMessage(), 400);
        }
    }
}
