<?php

namespace App\Http\Controllers;

use App\Services\FunctionCommonService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Sim extends Controller
{
    protected $functionCommonService;

    public function __construct(FunctionCommonService $functionCommonService)
    {
        $this->functionCommonService = $functionCommonService;
    }

    function index(Request $request)
    {
        $data = $this->functionCommonService->getListSimData();
        
        $duoi_sim = $request->get('duoi_sim');
        $gia_max = $request->get('gia_max');
        $dau_so = $request->get('dau_so');
        $diem_tu = $request->get('diem_tu');
        $diem_den = $request->get('diem_den');
        $loai_sim = $request->get('loai_sim');
        $nha_mang = $request->get('nha_mang');

        $isFilter = false;
        if (!empty($duoi_sim) || !empty($gia_max) || !empty($dau_so) || !empty($diem_tu) || !empty($diem_den) || !empty($loai_sim) || !empty($nha_mang)) {
            $isFilter = true;
        }
        $results = [];
        foreach ($data as $key => $value) {
            if (!empty($duoi_sim) && !empty($value['sdt'])) {
                if (strpos($value['sdt'], $duoi_sim) !== false) {
                    $results[] = $value;
                    continue;
                }
            }

            if (!empty($gia_max) && !empty($value['gia_ban'])) {
                $gia_max .= '000';
                $gia_max = $this->functionCommonService->formatGiaBan($gia_max);
                if (floatval($value['gia_ban']) <= floatval($gia_max)) {
                    $results[] = $value;
                    continue;
                }
            }

            if (!empty($dau_so) && !empty($value['sdt'])) {
                $twoFirstChar = substr($value['sdt'], 0, 2);
                if (in_array($twoFirstChar, $dau_so)) {
                    $results[] = $value;
                    continue;
                }
            }

            if (!empty($diem_tu) && !empty($diem_den) && !empty($value['diem_phong_thuy'])) {
                $diem = explode('/', $value['diem_phong_thuy']);
                if (isset($diem[0])) {
                    $diem = intval($diem[0]);
                    $diem_tu = intval($diem_tu);
                    $diem_den = intval($diem_den);

                    if ($diem >= $diem_tu && $diem <= $diem_den) {
                        $results[] = $value;
                        continue;
                    }

                }
            }

            if (!empty($loai_sim) && !empty($value['loai_sim'])) {
            //    TODO
            }

            if (!empty($nha_mang) && !empty($value['nha_mang'])) {
                $network = match ($value['nha_mang']) {
                    'viettel' => '1',
                    'mobi' => '3',
                    'vinaphone' => '2',
                    'vietnamobile' => '4',
                    'gmobile' => '5',
                    default => '0',
                };

                if (in_array($network, $nha_mang)) {
                    $results[] = $value;
                    continue;
                }
            }
        }

        $response = $isFilter ? $results : $data;

        usort($response, function($a, $b) {
            return $a['gia_ban'] <=> $b['gia_ban'];
        });

        return $response;
    }

    function detail(Request $request, $sdt)
    {
        $data = $this->functionCommonService->getDetailSimData($sdt);
        $boi = $this->functionCommonService->getThongTinPhongThuyBangSdt($sdt);

        return view('layouts.detail', ['data' => $data, 'boi' => $boi]);
    }

    function checkout(Request $request, $sdt)
    {

        if ($request->isMethod('GET')) {
            $data = $this->functionCommonService->getDetailSimData($sdt);
            return view('layouts.checkout', ['data' => $data]);
        }


        try {
            $spreadsheetId = env('GOOGLE_SHEETS_SPREADSHEET_ID_INVOICE');
            $data = $request->except([
                '_token',
                'g-recaptcha-response',
                'gclid_field'
            ]);

            $data['addressInfor'] = $data['address'] . ' - ' . $data['sl_address_phuongxa'] . ' - ' . $data['sl_address_quanhuyen'] . ' - ' . $data['sl_address_tinhtp'];
            unset($data['sl_address_phuongxa']);
            unset($data['sl_address_quanhuyen']);
            unset($data['sl_address_tinhtp']);
            unset($data['address']);
            if ($data['httt'] == "2") {
                $data['tt'] = "Thanh toán khi nhận hàng";
            } else {
                $data['tt'] = "Chuyển khoản";
            }
            unset($data['httt']);

            $data['sim'] = str_replace('.', '', $data['sim']);

            $this->functionCommonService->writeDataToGoogleSheetsInvoice($spreadsheetId, 'invoice', array_values($data));
        } catch (\Exception $e) {
            return $e->getMessage();
        }

        Session::flash('success', 'Đặt hàng thành công');
        return redirect()->route('home');
    }
}
