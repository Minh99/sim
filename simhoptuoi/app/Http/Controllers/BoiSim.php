<?php

namespace App\Http\Controllers;

use App\Services\FunctionCommonService;
use DateTime;
use Google\Service\AdExchangeBuyerII\Date;
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
            return view('layouts.application_sim.boi_so_dien_thoai');
        } else {
            $sdt = $request->get('sdt');

            // validate phone number
            $validated = $request->validate([
                'sdt' => [
                    'required',
                    'regex:/^(0)[0-9]{9,10}$/',
                    'min:10',
                    'max:11'
                ]
            ]);

            $data = $this->functionCommonService->getThongTinPhongThuyBangSdt($sdt);
    
            return view('layouts.application_sim.boi_so_dien_thoai', ['data' => $data, 'sdt' => $sdt]);
        }
    }
}
