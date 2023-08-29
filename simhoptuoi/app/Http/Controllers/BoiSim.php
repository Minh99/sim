<?php

namespace App\Http\Controllers;

use App\Services\FunctionCommonService;
use Illuminate\Http\Request;

class BoiSim extends Controller
{

    protected $functionCommonService;

    public function __construct(FunctionCommonService $functionCommonService)
    {
        $this->functionCommonService = $functionCommonService;
    }

    function index(Request $request)
    {
        if ($request->isMethod('GET')) {
            return view('layouts.application-sim.boi_so_dien_thoai');
        } else {
            $sdt = $request->get('sdt');

            $data = $this->functionCommonService->getThongTinPhongThuyBangSdt($sdt);
    
            return view('layouts.application-sim.boi_so_dien_thoai', ['data' => $data, 'sdt' => $sdt]);
        }
    }
}
