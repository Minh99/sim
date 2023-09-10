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
        'sim_menh_thuy' => ['Kim', 'Thủy'],
        'sim_menh_moc' => ['Thủy', 'Mộc'],
        'sim_menh_hoa' => ['Mộc', 'Hỏa'],
        'sim_menh_tho' => ['Hỏa', 'Thổ'],
        'sim_thang_quan' => ['Sim Thăng Tiến'],
        'sim_tai_van' => ['Sim Tài Lộc'],
        'sim_tinh_duyen_gia_dao' => ['Sim Tình Duyên'],
        'sim_xoa_giai_han' => ['Sim Cải Vận'],
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
            if (in_array($value['ngu_hanh'], $mappingNguHanhWithSlug)
                || in_array($value['loai_1'], $mappingNguHanhWithSlug)
                || in_array($value['loai_2'], $mappingNguHanhWithSlug)
                || in_array($value['loai_3'], $mappingNguHanhWithSlug)
            ) {
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
