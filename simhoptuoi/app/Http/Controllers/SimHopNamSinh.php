<?php

namespace App\Http\Controllers;

use App\Services\FunctionCommonService;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class SimHopNamSinh extends Controller
{
    protected $functionCommonService;

    public function __construct(FunctionCommonService $functionCommonService)
    {
        $this->functionCommonService = $functionCommonService;
    }

    public function index(Request $request, string $slug)
    {
        $viewPath = "layouts.birthday_pages.$slug";

        $nguHanh = $this->nguHanh[$this->cungPhi[$slug][1]] ?? [];

        $results = $this->functionCommonService->getListSimData();
        $data = [];
        foreach ($results as $key => $value) {
            if (!empty($value['ngu_hanh']) && in_array(trim($value['ngu_hanh']), $nguHanh)) {
                $data[] = $value;
            }
        }

        if (view()->exists($viewPath)) {
            return view($viewPath, compact('data', 'slug'));
        } else {
            throw new NotFoundHttpException();
        }
    }
}
