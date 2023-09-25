<?php

namespace App\Http\Controllers;

use App\Services\FunctionCommonService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    protected $functionCommonService;

    public function __construct(FunctionCommonService $functionCommonService)
    {
        $this->functionCommonService = $functionCommonService;
    }
    
    public function index(Request $request)
    {
        $isMobile = $request->get('duoi_sim_header_mobile') || $request->get('ngay_than_nam_sinh_header');
        if ($isMobile) {
            return $this->index2($request);
        }
        $data = $this->functionCommonService->getListSimData();

        $duoi_sim = $request->get('duoi_sim_header');
        $ngu_hanh = $request->get('ngu_hanh_header');
        $nam_sinh_header = $request->get('nam_sinh_header');

        $isFilter = false;
        if (!empty($duoi_sim) || !empty($ngu_hanh) || !empty($nam_sinh_header)) {
            $isFilter = true;
        }

        $results = [];
        foreach ($data as $key => $value) {
            if (!empty($duoi_sim) && !empty($value['sdt'])) {
                $aaa = str_replace('.', '', $value['sdt']);
                $bbb = str_replace('.', '', $duoi_sim);

                $lentb = strlen($bbb);

                if (substr($aaa, -$lentb) == $bbb) {
                    $results[] = $value;
                    continue;
                }
            }

            if (!empty($ngu_hanh) && !empty($value['ngu_hanh'])) {
                $ar = $this->nguHanhHopMenh[$ngu_hanh];
                if (in_array(trim($value['ngu_hanh']), $ar)) {
                    $results[] = $value;
                    continue;
                }
            }
        }

        $response = $isFilter ? $results : $data;


        usort($response, function($a, $b) {
            return $a['gia_ban'] <=> $b['gia_ban'];
        });

        Session::flash('nam_sinh_header', $nam_sinh_header);
        Session::flash('duoi_sim_header', $duoi_sim);

        return view('layouts.data_search_header', [
            'results' => $response,
            'tuoi' => $nam_sinh_header,
        ]);
    }

    public function index2(Request $request)
    {
        $data = $this->functionCommonService->getListSimData();

        $duoi_sim = $request->get('duoi_sim_header_mobile');
        $ngu_hanh = $request->get('ngu_hanh_header_mobile');
        $nam_sinh_header = $request->get('ngay_than_nam_sinh_header');
        $nam = strlen($nam_sinh_header) > 4 ? substr($nam_sinh_header, 0, 4) : '';

        $isFilter = false;
        if (!empty($duoi_sim) || !empty($ngu_hanh) || !empty($nam_sinh_header)) {
            $isFilter = true;
        }

        $results = [];
        foreach ($data as $key => $value) {
            if (!empty($duoi_sim) && !empty($value['sdt'])) {
                $aaa = str_replace('.', '', $value['sdt']);
                $bbb = str_replace('.', '', $duoi_sim);

                $lentb = strlen($bbb);

                if (substr($aaa, -$lentb) == $bbb) {
                    $results[] = $value;
                    continue;
                }
            }

            if (!empty($ngu_hanh) && !empty($value['ngu_hanh'])) {
                $ar = $this->nguHanhHopMenh[$ngu_hanh];
                if (in_array(trim($value['ngu_hanh']), $ar)) {
                    $results[] = $value;
                    continue;
                }
            }
        }

        $response = $isFilter ? $results : $data;


        usort($response, function($a, $b) {
            return $a['gia_ban'] <=> $b['gia_ban'];
        });

        Session::flash('ngay_than_nam_sinh_header', $nam_sinh_header);
        Session::flash('duoi_sim_header_mobile', $duoi_sim);

        return view('layouts.data_search_header', [
            'results' => $response,
            'tuoi' => $nam,
        ]);
    }
}
