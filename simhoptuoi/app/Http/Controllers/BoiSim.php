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
        'Thủy' => ['Kim', 'Thủy'],
        'Mộc' => ['Thủy', 'Mộc'],
        'Hỏa' => ['Mộc', 'Hỏa'],
        'Thổ' => ['Hỏa', 'Thổ'],
    ];

    public $boi4 = [
        1 => ['Đại triển hồng đô, khả được thành công', 'Cát'],
        2 => ['Thăng trầm không số, về già vô công', 'Bình thường'],
        3 => ['Ngày ngày tiến tới, vạn sự thuận toàn', 'Đại cát'],
        4 => ['Tiền đồ gai góc, dâu khổ theo đuổi', 'Hung'],
        5 => ['Làm ăn phát đạt, lợi danh đều có', 'Đại cát'],
        6 => ['Trời cho số phận có thể thành công', 'Cát'],
        7 => ['Ôn hòa êm dịu nhất phải thành công', 'Cát'],
        8 => ['Qua giai đoạn gian nan, có ngày thành công', 'Cát'],
        9 => ['Tự làm có sức thất bại khó lường', 'Hung'],
        10 => ['Tâm sức làm không, không được đến bờ', 'Hung'],
        11 => ['Vững đi từng bước, được người trọng vọng', 'Cát'],
        12 => ['Gầy gò yếu đuối, mọi việc khó thành', 'Hung'],
        13 => ['Trời cho cát vận, được người kính trọng', 'Cát'],
        14 => ['Nửa được nửa bại, dựa vào nghị lực', 'Bình thường'],
        15 => ['Đại sự thành tựu, nhất điịnh hưng vương', 'Cát'],
        16 => ['Thành tựu to lớn, tên tuổi lừng danh', 'Đại cát'],
        17 => ['Quý nhân trợ giúp, sẽ được thành công', 'Cát'],
        18 => ['Thuận lợi xương thịnh, trăm việc trôi chảy', 'Đại cát'],
        19 => ['Nội ngoại bất hòa, khó khăn muôn phát', 'Hung'],
        20 => ['Vượt mọi gian nan, lo xa nghĩ hoài Đại', 'Hung'],
        21 => ['Chuyên tâm kinh doanh hay dung trí', 'Cát'],
        22 => ['Có tài không vận, việc không gặp may', 'Hung'],
        23 => ['Tên tuổi 4 phương, sẽ thành đại nghiệp', 'Đại cát'],
        24 => ['Phải dựa tự lập sẽ thành đại nghiệp', 'Cát'],
        25 => ['Thiên thời địa lợi vì được nhân cách', 'Cát'],
        26 => ['Bảo táp phong ba qua được hiểm nguy', 'Hung'],
        27 => ['Lúc thắng lúc thua giữ được thành công', 'Cát'],
        28 => ['Tiến mãi không lùi trí tuệ được dung', 'Đại cát'],
        29 => ['Cát hung chia đổ, được thua mỗi nữa', 'Hung'],
        30 => ['Danh lợi được mùa đại sự thành công', 'Đại cát'],
        31 => ['Con rồng trong nước thành công sẽ đến', 'Đại cát'],
        32 => ['Dùng trí lâu dài, sẽ được thịnh vượng', 'Cát'],
        33 => ['Rủi ro không ngừng khó có thành công', 'Hung'],
        34 => ['Số phận trung cất tiến lùi bảo thủ', 'Bình thường'],
        35 => ['Trôi nổi bập bùng thường hay gặp nạn', 'Hung'],
        36 => ['Tránh được điểm ác, thuận buồm xuôi gió', 'Cát'],
        37 => ['Danh thì được tiếng lợi thì bằng không', 'Bình thường'],
        38 => ['Đường rộng thênh thang nhìn thấy tương lai', 'Đại cát'],
        39 => ['Lúc thịnh lúc suy chìm nổi vô định', 'Bình thường'],
        40 => ['Thiên ý cất vận tiền đồ sang sủa', 'Đại cát'],
        41 => ['Sự nghiệp không chuyên hầu như không thành', 'Hung'],
        42 => ['Nhẫn nhịn chịu đựng, xấu sẽ thành tốt', 'Cát'],
        43 => ['Cây xanh trổ lá đột nhiên thành công', 'Cát'],
        44 => ['Ngược với ý mình tham công lỡ việc', 'Hung'],
        45 => ['Quanh co khúy khỷu khó khăn kéo dài', 'Hung'],
        46 => ['Quý nhân giúp đỡ thành công đại sự', 'Đại cát'],
        47 => ['Danh lợu đều có thành công tốt đẹp', 'Đại cát'],
        48 => ['Cặp cát được cát gặp hung thì hung', 'Bình thường'],
        49 => ['Hung cát cùng có, một thành một bại', 'Bình thường'],
        50 => ['Một thịnh một suy bập bùn sóng gió', 'Bình thường'],
        51 => ['Trời quanh mây tạnh nay được thành công', 'Cát'],
        52 => ['Sướng thịnh nửa số cát trước hung sau', 'Hung'],
        53 => ['Nổ lực hết mình thành công ích ỏi', 'Bình thường'],
        54 => ['Bề ngoài tươi sang ẩn họa sẽ tới', 'Hung'],
        55 => ['Ngược lại ý mình, có có thành công', 'Đại hung'],
        56 => ['Nổ lực phấn đấu phận tốt quay về', 'Cát'],
        57 => ['Bấp bênh nhiều chuyến hung trước tốt sau', 'Bình thường'],
        58 => ['Gặp việc do dự khó có thành công', 'Hung'],
        59 => ['Mơ mơ hồ hồ khó có định phương hướng', 'Bình thường'],
        60 => ['Mây che nửa trăng dấu hiệu phong ba', 'Hung'],
        61 => ['Lo nghỉ nhiều điều mọi việc không thành', 'Hung'],
        62 => ['Biết hướng nổ lực con đường phồn vinh', 'Cát'],
        63 => ['Mười việc chín không mất công mất sức', 'Hung'],
        64 => ['Cát vận tự đến, có được thành công', 'Cát'],
        65 => ['Nội ngoại bất hòa thiếu thốn tín nhiệm', 'Bình thường'],
        66 => ['Mọi việc như ý phú quý tự đến', 'Đại cát'],
        67 => ['Nắm được thời cơ, thành công sẽ đến', 'Cát'],
        68 => ['Lo trước nghĩ sau thường hay gặp nạn', 'Hung'],
        69 => ['Bập bên khó tránh vất vả', 'Hung'],
        70 => ['Cát hung đều có chỉ dự chí khí', 'Bình thường'],
        71 => ['Được rồi lại mất khó có bình yên', 'Hung'],
        72 => ['An lạc tự đến tự nhiên cát tường', 'Cát'],
        73 => ['Như là vô mưu khó được thành đạt', 'Bình thường'],
        74 => ['Trong lành có hung tiến không bằng lùi', 'Bình thường'],
        75 => ['Nhiều điều đại hung, hiện tượng phân tán', 'Đại hung'],
        76 => ['Khổ trước sướng sau, không bị thất bại', 'Cát'],
        77 => ['Nửa được nửa mất sang mà không thực', 'Bình thường'],
        78 => ['Tiền đồ tươi sang trăm đầy hy vọng', 'Đại cát'],
        79 => ['Được rồi lại mất lo cũng bằng không', 'Hung'],
        80 => ['Số phận cao nhất, sẽ được thành công', 'Đại cát'],
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
                    'content' => $this->boi4[$calBoi4['soLy']][0],
                    'ketLuan' => $this->boi4[$calBoi4['soLy']][1],
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
                    'content' => $this->boi4[$calBoi6['soLy']][0],
                    'ketLuan' => $this->boi4[$calBoi6['soLy']][1],
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
}
