<?php

namespace App\Http\Controllers;

use App\Services\FunctionCommonService;
use DateTime;
use Google\Service\AdExchangeBuyerII\Date;
use Illuminate\Http\Request;

class BoiSim extends Controller
{
    public $nguHanh = [
        'Kim' => ['Thổ', 'Kim'],
        'Thuỷ' => ['Kim', 'Thuỷ'],
        'Mộc' => ['Thuỷ', 'Mộc'],
        'Hoả' => ['Mộc', 'Hoả'],
        'Thổ' => ['Hoả', 'Thổ'],
    ];
    protected $functionCommonService;

    public function __construct(FunctionCommonService $functionCommonService)
    {
        $this->functionCommonService = $functionCommonService;
    }

    function index(Request $request)
    {
        $timeBorn = [
            '2' => 'Sửu (1g - 3g)',
            '3' => 'Dần (3g - 5g)',
            '4' => 'Mão (5g - 7g)',
            '5' => 'Thìn (7g - 9g)',
            '6' => 'Tỵ (9g - 11g)',
            '7' => 'Ngọ (11g - 13g)',
            '8' => 'Mùi (13g - 15g)',
            '9' => 'Thân (15g - 17g)',
            '10' => 'Dậu (17g - 19g)',
            '11' => 'Tuất (19g - 21g)',
            '12' => 'Hợi (21g - 23g)',
        ];

        if ($request->isMethod('GET')) {
            return view('layouts.application_sim.boi_so_dien_thoai', [
                'timeBorn' => $timeBorn,
                'info' => [
                    'sdt' => '',
                    'gioitinh' => '',
                    'ngay' => '',
                    'thang' => '',
                    'nam' => '',
                    'giosinh' => ''
                ]
            ]);
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
            $dataSim = $this->functionCommonService->getListSimData();
            $mappingNguHanhWithSlug = $this->nguHanh[$request->get('sinh_menh_input')];

            $results = [];
            foreach ($dataSim as $key => $value) {
                if (in_array($value['ngu_hanh'], $mappingNguHanhWithSlug)) {
                    $results[] = $value;
                }
            }

            return view('layouts.application_sim.boi_so_dien_thoai', [
                'data' => $data,
                'info' => $request->all(),
                'timeBorn' => $timeBorn,
                'results' => $results
            ]);
        }
    }
}
