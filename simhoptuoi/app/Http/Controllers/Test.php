<?php

namespace App\Http\Controllers;

use App\Services\FunctionCommonService;
use Illuminate\Http\Request;

class Test extends Controller
{
    protected $functionCommonService;

    public function __construct(FunctionCommonService $functionCommonService)
    {
        $this->functionCommonService = $functionCommonService;
    }

    function getThongTinPhongThuyBangSdt(Request $request)
    {

        $sdt = $request->get('sdt') ?? '0393444030';

        $data = $this->functionCommonService->getThongTinPhongThuyBangSdt($sdt);

        dd($data);
    }

    function getListSimData(Request $request)
    {

        $data = $this->functionCommonService->getListSimData();

        dd($data);
    }

    function getDetailSimData(Request $request)
    {

        $sdt = $request->get('sdt') ?? '0944.394.194';

        $data = $this->functionCommonService->getDetailSimData($sdt);

        dd($data);
    }
}
