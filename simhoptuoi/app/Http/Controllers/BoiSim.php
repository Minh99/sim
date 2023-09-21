<?php

namespace App\Http\Controllers;

use App\Services\FunctionCommonService;
use DateTime;
use Google\Service\AdExchangeBuyerII\Date;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BoiSim extends Controller
{
    public $thangKetHon = [
        'Tý' => [6,12],
        'Sửu' => [5,11],
        'Dần' => [2,8],
        'Mão' => [1,7],
        'Thìn' => [4,10],
        'Tỵ' => [3,9],
        'Ngọ' => [6,12],
        'Mùi' => [5,11],
        'Thân' => [2,8],
        'Dậu' => [1,7],
        'Tuất' => [4,10],
        'Hợi' => [3,9],
    ];



    public $menh = [
        0 => ['Canh Thân', 'Thạch Lựu Mộc', 'Bích Thượng Thổ'],
        1 => ['Tân Dậu', 'Thạch Lựu Mộc', 'Bích Thượng Thổ'],
        2 => ['Nhâm Tuất', 'Đại Hải Thủy', 'Thiên Thượng Hoả'],
        3 => ['Quý Hợi', 'Đại Hải Thủy', 'Thiên Thượng Hoả'],
        4 => ['Giáp Tý', 'Hải Trung Kim', 'Bình Địa Mộc'],
        5 => ['Ất Sửu', 'Hải Trung Kim', 'Bình Địa Mộc'],
        6 => ['Bính Dần', 'Lư Trung Hoả', 'Kiếm Phong Kim'],
        7 => ['Đinh Mão', 'Lư Trung Hoả', 'Kiếm Phong Kim'],
        8 => ['Mậu Thìn', 'Đại Lâm Mộc', 'Đại Trạch Thổ'],
        9 => ['Kỷ Tỵ', 'Đại Lâm Mộc', 'Đại Trạch Thổ'],
        10 => ['Canh Ngọ', 'Lộ Bàn Thổ', 'Tuyền Trung Thủy'],
        11 => ['Tân Mùi', 'Lộ Bàn Thổ', 'Tuyền Trung Thủy'],
        12 => ['Nhâm Thân', 'Kiếm Phong Kim', 'Phúc Đăng Hoả'],
        13 => ['Quý Dậu', 'Kiếm Phong Kim', 'Phúc Đăng Hoả'],
        14 => ['Giáp Tuất', 'Sơn Đầu Hoả', 'Sa Trung Kim'],
        15 => ['Ất Hợi', 'Sơn Đầu Hoả', 'Sa Trung Kim'],
        16 => ['Bính Tý', 'Giáng Hạ Thủy', 'Thiên Thượng Hoả'],
        17 => ['Đinh Sửu', 'Giáng Hạ Thủy', 'Thiên Thượng Hoả'],
        18 => ['Mậu Dần', 'Thành Đầu Thổ', 'Thiên Thượng Thủy'],
        19 => ['Kỷ Mão', 'Thành Đầu Thổ', 'Thiên Thượng Thủy'],
        20 => ['Canh Thìn', 'Bạch Lạp Kim', 'Phúc Đăng Hoả'],
        21 => ['Tân Tỵ', 'Bạch Lạp Kim', 'Phúc Đăng Hoả'],
        22 => ['Nhâm Ngọ', 'Dương Liễu Mộc', 'Lộ Bàn Thổ'],
        23 => ['Quý Mùi', 'Dương Liễu Mộc', 'Lộ Bàn Thổ'],
        24 => ['Giáp Thân', 'Tuyền Trung Thuỷ', 'Thiên Thượng Hoả'],
        25 => ['Ất Dậu', 'Tuyền Trung Thuỷ', 'Thiên Thượng Hoả'],
        26 => ['Bính Tuất', 'Ốc Thượng Thổ', 'Thiên Thượng Thủy'],
        27 => ['Đinh Hợi', 'Ốc Thượng Thổ', 'Thiên Thượng Thủy'],
        28 => ['Mậu Tý', 'Thích Lịch Hoả', 'Thiên Thượng Thủy'],
        29 => ['Kỷ Sửu', 'Thích Lịch Hoả', 'Thiên Thượng Thủy'],
        30 => ['Canh Dần', 'Tòng Bá Mộc', 'Lộ Bàn Thổ'],
        31 => ['Tân Mão', 'Tòng Bá Mộc', 'Lộ Bàn Thổ'],
        32 => ['Nhâm Thìn', 'Trường Lưu Thủy', 'Thiên Thượng Hoả'],
        33 => ['Quý Tỵ', 'Trường Lưu Thủy', 'Thiên Thượng Hoả'],
        34 => ['Giáp Ngọ', 'Sa Trung Kim', 'Thạch Lựu Mộc'],
        35 => ['Ất Mùi', 'Sa Trung Kim', 'Thạch Lựu Mộc'],
        36 => ['Bính Thân', 'Sơn Hạ Hoả', 'Thích Lịch Hoả'],
        37 => ['Đinh Dậu', 'Sơn Hạ Hoả', 'Thích Lịch Hoả'],
        38 => ['Mậu Tuất', 'Bình Địa Mộc', 'Sa Trung Kim'],
        39 => ['Kỷ Hợi', 'Bình Địa Mộc', 'Sa Trung Kim'],
        40 => ['Canh Tý', 'Bích Thượng Thổ', 'Thiên Thượng Thủy'],
        41 => ['Tân Sửu', 'Bích Thượng Thổ', 'Thiên Thượng Thủy'],
        42 => ['Nhâm Dần', 'Kim Bạch Kim', 'Lư Trung Hoả'],
        43 => ['Quý Mão', 'Kim Bạch Kim', 'Lư Trung Hoả'],
        44 => ['Giáp Thìn', 'Phúc Đăng Hoả', 'Xoa Xuyến Kim'],
        45 => ['Ất Tỵ', 'Phúc Đăng Hoả', 'Xoa Xuyến Kim'],
        46 => ['Bính Ngọ', 'Thiên Hà Thủy', 'Thiên Thượng Hoả'],
        47 => ['Đinh Mùi', 'Thiên Hà Thủy', 'Thiên Thượng Hoả'],
        48 => ['Mậu Thân', 'Đại Trạch Thổ', 'Thiên Thượng Thủy'],
        49 => ['Kỷ Dậu', 'Đại Trạch Thổ', 'Thiên Thượng Thủy'],
        50 => ['Canh Tuất', 'Xoa Xuyến Kim', 'Đại Lâm Mộc'],
        51 => ['Tân Hợi', 'Xoa Xuyến Kim', 'Đại Lâm Mộc'],
        52 => ['Nhâm Tý', 'Tang Đố Mộc', 'Ốc Thượng Thổ'],
        53 => ['Quý Sửu', 'Tang Đố Mộc', 'Ốc Thượng Thổ'],
        54 => ['Giáp Dần', 'Đại Khe Thủy', 'Sơn Hạ Hoả'],
        55 => ['Ất Mão', 'Đại Khe Thủy', 'Sơn Hạ Hoả'],
        56 => ['Bính Thìn', 'Sa Trung Thổ', 'Dương Liễu Mộc'],
        57 => ['Đinh Tỵ', 'Sa Trung Thổ', 'Dương Liễu Mộc'],
        58 => ['Mậu Ngọ', 'Thiên Thượng Hoả', 'Sa Trung Kim'],
        59 => ['Kỷ Mùi', 'Thiên Thượng Hoả', 'Sa Trung Kim'],
    ];

    public $gioitinh = [
        'nam' => [
            'Mộc Ðức',
            'La Hầu',
            'Thổ Tú',
            'Thủy Diệu',
            'Thái Bạch',
            'Thái Dương',
            'Vân Hán',
            'Kế Ðô',
            'Thái Âm',
        ],
        'nu' => [
            'Thủy Diệu',
            'Kế Ðô',
            'Vân Hán',
            'Mộc Ðức',
            'Thái Âm',
            'Thổ Tú',
            'La Hầu',
            'Thái Dương',
            'Thái Bạch',
        ],
    ];

    public $gioitinh2 = [
        10 => ['Huỳnh tuyền', 'Tán tận'],
        11 => ['Tam kheo', 'Thiên tinh'],
        12 => ['Ngũ mộ', 'Ngũ mộ'],
        13 => ['Thiên tinh', 'Tam kheo'],
        14 => ['Tán tận', 'Huỳnh tuyền'],
        15 => ['Thiên la', 'Diêm vương'],
        16 => ['Địa võng', 'Địa võng'],
        17 => ['Diêm vương', 'Thiên la'],
        18 => ['Huỳnh tuyền', 'Tán tận'],
        19 => ['Tam kheo', 'Thiên tinh'],
        20 => ['Tam kheo', 'Thiên tinh'],
        21 => ['Ngũ mộ', 'Ngũ mộ'],
        22 => ['Thiên tinh', 'Tam kheo'],
        23 => ['Tán tận', 'Huỳnh tuyền'],
        24 => ['Thiên la', 'Diêm vương'],
        25 => ['Địa võng', 'Địa võng'],
        26 => ['Diêm vương', 'Thiên la'],
        27 => ['Huỳnh tuyền', 'Tán tận'],
        28 => ['Tam kheo', 'Thiên tinh'],
        29 => ['Ngũ mộ', 'Ngũ mộ'],
        30 => ['Ngũ mộ', 'Ngũ mộ'],
        31 => ['Thiên tinh', 'Tam kheo'],
        32 => ['Tán tận', 'Huỳnh tuyền'],
        33 => ['Thiên la', 'Diêm vương'],
        34 => ['Địa võng', 'Địa võng'],
        35 => ['Diêm vương', 'Thiên la'],
        36 => ['Huỳnh tuyền', 'Tán tận'],
        37 => ['Tam kheo', 'Thiên tinh'],
        38 => ['Ngũ mộ', 'Ngũ mộ'],
        39 => ['Thiên tinh', 'Tam kheo'],
        40 => ['Thiên tinh', 'Tam kheo'],
        41 => ['Tán tận', 'Huỳnh tuyền'],
        42 => ['Thiên la', 'Diêm vương'],
        43 => ['Địa võng', 'Địa võng'],
        44 => ['Diêm vương', 'Thiên la'],
        45 => ['Huỳnh tuyền', 'Tán tận'],
        46 => ['Tam kheo', 'Thiên tinh'],
        47 => ['Ngũ mộ', 'Ngũ mộ'],
        48 => ['Thiên tinh', 'Tam kheo'],
        49 => ['Tán tận', 'Huỳnh tuyền'],
        50 => ['Tán tận', 'Huỳnh tuyền'],
        51 => ['Thiên la', 'Diêm vương'],
        52 => ['Địa võng', 'Địa võng'],
        53 => ['Diêm vương', 'Thiên la'],
        54 => ['Huỳnh tuyền', 'Tán tận'],
        55 => ['Tam kheo', 'Thiên tinh'],
        56 => ['Ngũ mộ', 'Ngũ mộ'],
        57 => ['Thiên tinh', 'Tam kheo'],
        58 => ['Tán tận', 'Huỳnh tuyền'],
        59 => ['Thiên la', 'Diêm vương'],
        60 => ['Thiên la', 'Diêm vương'],
        61 => ['Địa võng', 'Địa võng'],
        62 => ['Diêm vương', 'Thiên la'],
        63 => ['Huỳnh tuyền', 'Tán tận'],
        64 => ['Tam kheo', 'Thiên tinh'],
        65 => ['Ngũ mộ', 'Ngũ mộ'],
        66 => ['Thiên tinh', 'Tam kheo'],
        67 => ['Tán tận', 'Huỳnh tuyền'],
        68 => ['Thiên la', 'Diêm vương'],
        69 => ['Địa võng', 'Địa võng'],
        70 => ['Địa võng', 'Địa võng'],
        71 => ['Diêm vương', 'Thiên la'],
        72 => ['Huỳnh tuyền', 'Tán tận'],
        73 => ['Tam kheo', 'Thiên tinh'],
        74 => ['Ngũ mộ', 'Ngũ mộ'],
        75 => ['Thiên tinh', 'Tam kheo'],
        76 => ['Tán tận', 'Huỳnh tuyền'],
        77 => ['Thiên la', 'Diêm vương'],
        78 => ['Địa võng', 'Địa võng'],
        79 => ['Diêm vương', 'Thiên la'],
        80 => ['Diêm vương', 'Thiên la'],
        81 => ['Huỳnh tuyền', 'Tán tận'],
        82 => ['Tam kheo', 'Thiên tinh'],
        83 => ['Ngũ mộ', 'Ngũ mộ'],
        84 => ['Thiên tinh', 'Tam kheo'],
        85 => ['Tán tận', 'Huỳnh tuyền'],
        86 => ['Thiên la', 'Diêm vương'],
        87 => ['Địa võng', 'Địa võng'],
        88 => ['Diêm vương', 'Thiên la'],
        89 => ['Huỳnh tuyền', 'Tán tận'],
        90 => ['Huỳnh tuyền', 'Tán tận'],
        91 => ['Tam kheo', 'Thiên tinh'],
        92 => ['Ngũ mộ', 'Ngũ mộ'],
        93 => ['Thiên tinh', 'Tam kheo'],
        94 => ['Tán tận', 'Huỳnh tuyền'],
        95 => ['Thiên la', 'Diêm vương'],
        96 => ['Địa võng', 'Địa võng'],
        97 => ['Diêm vương', 'Thiên la'],
        98 => ['Huỳnh tuyền', 'Tán tận'],
        99 => ['Tam kheo', 'Thiên tinh'],
        100 => ['Tam kheo', 'Thiên tinh'],
        101 => ['Ngũ mộ', 'Tán tận'],
        102 => ['Thiên tinh', 'Thiên tinh'],
        103 => ['Tán tận', 'Tán tận'],
        104 => ['Thiên la', 'Thiên tinh'],
        105 => ['Địa võng', 'Địa võng'],
        106 => ['Diêm vương', 'Thiên la'],
        107 => ['Huỳnh tuyền', 'Tán tận'],
        108 => ['Tam kheo', 'Thiên tinh'],
        109 => ['Thiên la', 'Tán tận'],
        110 => ['Thiên la', 'Tán tận'],
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
            $gioitinh = $request->get('gioitinh');

            // validate phone number
            $validated = $request->validate([
                'sdt' => [
                    'required',
                    'regex:/^(0)[0-9]{9,10}$/',
                    'min:10',
                    'max:11'
                ]
            ]);

            $data = $this->functionCommonService->getThongTinPhongThuyBangSdt($sdt, $gioitinh);
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

    public function boi4so(Request $request) {
        if ($request->isMethod('GET')) {
            return view('layouts.application_sim.boi_4');
        } else {
            $sdt = $request->get('sdt');
            $validated = $request->validate([
                'sdt' => [
                    'required',
                    'regex:/^[0-9]{3,4}$/',
                    'min:4',
                    'max:4'
                ]
            ]);

            $calBoi4 = $this->functionCommonService->calBoi4($request->get('sdt'));
            $results = [];
            if ($request->get('type') == 1) { // hung cat
                $results = [
                    'soly' => $calBoi4['soLy'],
                    'content' => $this->functionCommonService->boi4[$calBoi4['soLy']][0],
                    'ketLuan' => $this->functionCommonService->boi4[$calBoi4['soLy']][1],
                ];
            } elseif ($request->get('type') == 2) { // que_dich
                $results = $this->functionCommonService->getThongTinPhongThuyBang4Or6Sdt($sdt, $calBoi4, 4);
            } else {// nawng luwong so
                $results = $this->functionCommonService->getThongTinNangLuong4Or6Sdt($sdt, $calBoi4, 4);
            }

            $data = $this->functionCommonService->getListSimData();
            $simData = [];
            foreach ($data as $key => $value) {
                if (!empty($sdt) && !empty($value['sdt'])) {
                    $valSdt = str_replace('.', '', substr($value['sdt'], -5));
                    if ($valSdt === $sdt) {
                        $simData[] = $value;
                        continue;
                    }
                }
            }

            return view('layouts.application_sim.boi_4', [
                'results' => $results,
                'type' => $request->get('type'),
                'sdt' => $sdt,
                'calBoi4' => $calBoi4,
                'simData' => $simData,
            ]);
        }
    }

    public function boi6so(Request $request) {
        if ($request->isMethod('GET')) {
            return view('layouts.application_sim.boi_6');
        } else {
            $sdt = $request->get('sdt');

            $calBoi6 = $this->functionCommonService->calBoi6($request->get('sdt'));
            $results = [];
            if ($request->get('type') == 1) { // hung cat
                $results = [
                    'soly' => $calBoi6['soLy'],
                    'content' => $this->functionCommonService->boi4[$calBoi6['soLy']][0],
                    'ketLuan' => $this->functionCommonService->boi4[$calBoi6['soLy']][1],
                ];
            } elseif ($request->get('type') == 2) { // que_dich
                $results = $this->functionCommonService->getThongTinPhongThuyBang4Or6Sdt($sdt, $calBoi6, 6);
            } else {// nawng luwong so
                $results = $this->functionCommonService->getThongTinNangLuong4Or6Sdt($sdt, $calBoi6, 6);
            }

            $data = $this->functionCommonService->getListSimData();
            $simData = [];
            foreach ($data as $key => $value) {
                if (!empty($sdt) && !empty($value['sdt'])) {
                    $valSdt = str_replace('.', '', substr($value['sdt'], -7));
                    if ($valSdt === $sdt) {
                        $simData[] = $value;
                        continue;
                    }
                }
            }

            return view('layouts.application_sim.boi_6', [
                'results' => $results,
                'type' => $request->get('type'),
                'sdt' => $sdt,
                'calBoi4' => $calBoi6,
                'simData' => $simData,
            ]);
        }
    }

    public function saohan(Request $request) {
        if ($request->isMethod('GET')) {
            return view('layouts.application_sim.xem_sao_han_tuoi');
        } else {
            $namsinh = $request->get('namsinh');
            $namxem = $request->get('namxem');
            $gioitinh = $request->get('gioitinh');

            $tuoiNumber = $namxem - $namsinh + 1;
            $tuoiTxt = $this->menh[$namsinh % 60][0];
            $menh = $this->menh[$namsinh % 60][1];

            $saoNumber = ($tuoiNumber + 11 - 11) % 9;
            $saoTxt = ($gioitinh === 'nam') ? $this->gioitinh['nam'][$saoNumber] : $this->gioitinh['nu'][$saoNumber];

            $hanNumber = $tuoiNumber + 11 - 11;
            $hanTxt = ($gioitinh === 'nam') ? $this->gioitinh2[$hanNumber][0] : $this->gioitinh2[$hanNumber][1];

            $saoContent = $this->functionCommonService->getSaoHanContent($saoTxt, 1);
            $hanContent = $this->functionCommonService->getSaoHanContent($hanTxt, 2);

            return view('layouts.application_sim.xem_sao_han_tuoi', [
                'data' => [
                    'namsinh' => $namsinh,
                    'namxem' => $namxem,
                    'gioitinh' => $gioitinh,
                    'tuoiNumber' => $tuoiNumber,
                    'tuoiTxt' => $tuoiTxt,
                    'menh' => $menh,
                    'saoContent' => $saoContent,
                    'hanContent' => $hanContent,
                ]
            ]);
        }
    }

    public function xemtuoiam(Request $request) {
        if ($request->isMethod('GET')) {
            return view('layouts.application_sim.xem_tuoi_am_lich');
        } else {
            $namsinh = $request->get('namsinh');

            $tuoiNumber = intval(date('Y')) - intval($namsinh) + 1;
            $tuoiTxt = $this->menh[$namsinh % 60][0];
            $menh = $this->menh[$namsinh % 60][1];

            $cungPhiNam = $this->cungPhi[$namsinh][2];
            $cungPhiNu = $this->cungPhi[$namsinh][3];

            $num = 1;

            $data  = $this->functionCommonService->getTuoiAmLich($tuoiTxt . $num);

            return view('layouts.application_sim.xem_tuoi_am_lich', [
                'data' => [
                    'namsinh' => $namsinh,
                    'tuoiNumber' => $tuoiNumber,
                    'tuoiTxt' => $tuoiTxt,
                    'menh' => $menh,
                    'id' => $data['id'] ?? '',
                    'content' => $data['content'] ?? '',
                    'cungPhiNam' => $cungPhiNam,
                    'cungPhiNu' => $cungPhiNu,
                ]
            ]);
        }
    }

    public function xemtuoikethon(Request $request) {
        if ($request->isMethod('GET')) {
            return view('layouts.application_sim.xem_tuoi_ket_hon');
        } else {
            $namsinh = $request->get('namsinh');
            $gioitinh = $request->get('gioitinh');

            $tuoiNumber = intval(date('Y')) - intval($namsinh) + 1;
            $tuoiTxt = $this->menh[$namsinh % 60][0];
            $menh = $this->menh[$namsinh % 60][1];
            $cungPhi = ($gioitinh === 'nam') ? $this->cungPhi[$namsinh][2] : $this->cungPhi[$namsinh][3];

            $keys = explode(' ', $tuoiTxt);
            $tuoiTxtSort1 = $keys[0];
            $tuoiTxtSort2 = end($keys);
            $thangKetHon = implode(', ', $this->thangKetHon[$tuoiTxtSort2]);




            $hoptuoi = $this->tuoiHop[$tuoiTxtSort2];
            $son = $this->son[$tuoiTxtSort1];
            $son2 = $this->son[$tuoiTxtSort2];
            $can = $this->can[$tuoiTxtSort1];

            $contentTable = [
                'luc_hop' => $hoptuoi['Nhị hợp'] ?? '',
                'tam_hop' => $hoptuoi['Tam hợp'] ?? '',
                'tuong_hoa' => $can['Hóa'] ?? '',
                'hinh' => $hoptuoi['Hình'] ?? '',
                'luc_xung' => $hoptuoi['Lục xung'] ?? '',
                'sat' => $hoptuoi['Sát'] ?? '',
                'hai' => $hoptuoi['Tương hại'] ?? '',
                'xung_pha' => ($can['Xung']  ?? '') . '; '. ($can['Phá'] ?? ''),
                'do_thien' => $can['Đô thiên'] ?? '',
                'loc' => $son['Lộc'] ?? '',
                'ma' => $son2['Mã'] ?? '',
                'quy_nhan' => $son['Quý nhân'] ?? '',
                'v_xuong_khuc' => $son['Văn xương, Văn khúc'] ?? '',
            ];

            return view('layouts.application_sim.xem_tuoi_ket_hon', [
                'data' => [
                    'namsinh' => $namsinh,
                    'tuoiNumber' => $tuoiNumber,
                    'tuoiTxt' => $tuoiTxt,
                    'gioitinh' => $gioitinh,
                    'menh' => $menh,
                    'cungPhi' => $cungPhi,
                    'thangKetHon' => $thangKetHon,
                    'contentTable' => $contentTable,
                ]
            ]);
        }
    }

    public function boinangluong(Request $request) {
        if ($request->isMethod('GET')) {
            return view('layouts.application_sim.boi_nang_luong');
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

            $sdt = substr($sdt, -9);
            $lienke2s = [];
            for ($i = 0; $i < strlen($sdt) - 1; $i++) {
                $lienke2s[] = $sdt[$i] . $sdt[$i+1];
            }


            $matrixData = [];
            foreach ($lienke2s as $ke => $lienke2) {
                $item = [];
                foreach ($this->tutruong as $key => $value) {
                    $item[$key] = $value[$lienke2] ?? '';
                }
                $matrixData["$ke" . "_$lienke2"] = $item;
            }

            $sumTuTruong = [];
            foreach (array_keys($this->tutruong) as $key => $value) {
                $sumTuTruong[$value] = array_sum(array_column($matrixData, $value));
            }

            $maxTuTruong = max($sumTuTruong);
            $dacDiemCacTuTruong = json_decode($this->functionCommonService->getDacDiemCacTuTruong(), true);

            $contents = function ($sumTuTruong, $maxTuTruong) use ($dacDiemCacTuTruong) {
                $result = [];
                foreach ($sumTuTruong as $key => $value) {
                    if ($value === $maxTuTruong) {
                        foreach ($dacDiemCacTuTruong as $i) {
                            if ($i['id'] === $key) {
                                $result[$key] = array_filter($i, 'trim');
                            }
                        }
                    }
                }
                return $result;
            };

            $listTinhChat = $this->functionCommonService->calNangLuongSo($request->get('sdt'));

            $code = $request->get('code');
            $codeCore = Storage::disk('public')->get('code.json');
            $codeCore = json_decode($codeCore, true);

            $show_tinh_chat = empty($code) ? '0' : (($code == $codeCore['code']) ? '1' : '2');

            return view('layouts.application_sim.boi_nang_luong', [
                'data' => [
                    'sdt' => '0'. $sdt,
                    'listTinhChat' => $listTinhChat,
                    'maxTuTruong' => $maxTuTruong,
                    'contents' => $contents->call($this, $sumTuTruong, $maxTuTruong),
                    'show_tinh_chat' => $show_tinh_chat,
                ]
            ]);
        }
    }
}
