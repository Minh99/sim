<?php

namespace App\Http\Controllers;

use App\Services\FunctionCommonService;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class MenuPageController extends Controller
{
    protected $functionCommonService;

    public $nguHanh = [
        'sim_menh_kim' => ['Thổ', 'Kim'],
        'sim_menh_thuy' => ['Kim', 'Thuỷ'],
        'sim_menh_moc' => ['Thuỷ', 'Mộc'],
        'sim_menh_hoa' => ['Mộc', 'Hoả'],
        'sim_menh_tho' => ['Hoả', 'Thổ'],
    ];

    public function __construct(FunctionCommonService $functionCommonService)
    {
        $this->functionCommonService = $functionCommonService;
    }
    
    public function index(Request $request, string $slug)
    {
        $viewPath = "layouts.menu_pages.$slug";

        $data = $this->functionCommonService->getListSimData();
        
        $mappingNguHanhWithSlug = $this->nguHanh[$slug];

        $results = [];
        foreach ($data as $key => $value) {
            if (in_array($value['ngu_hanh'], $mappingNguHanhWithSlug)) {
                $results[] = $value;
            }
        }

        if (view()->exists($viewPath)) {
            return view($viewPath, ['data' => $results]);
        } else {
            throw new NotFoundHttpException();
        }
    }
}
