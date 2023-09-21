<?php
namespace App\Services;

use Google\Client;
use Google\Service\Drive;
use Google\Service\Sheets;
use Illuminate\Support\Facades\Storage;
use PhpOffice\PhpSpreadsheet\IOFactory;

class FunctionCommonService {

    public $boi4 = [
        0 => ["Tứ Đại Giai Không; cho dù hiện tại có giàu có cỡ nào, thành công cỡ nào, cuối cùng cũng là 0, tứ đại giai không.", "Đại hung"],
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
    public $que64 = [
        ['Càn', 'Quải', 'Đ.Hữu', 'Đ.Tráng', 'T.Súc', 'Nhu', 'Đ.Súc', 'Thái'],
        ['Lý', 'Đoài', 'Khuể', 'Q.Muội', 'T.Phu', 'Tiết', 'Tổn', 'Lâm'],
        ['Đ.Nhân', 'Cách', 'Ly', 'Phong', 'G.Nhân', 'K.Tế', 'Bí', 'M.Di'],
        ['V.Vọng', 'Tùy', 'P.Hạp', 'Chấn', 'Ích', 'Truân', 'Di', 'Phục'],
        ['Cấu', 'Đ.Quá', 'Đỉnh', 'Hằng', 'Tốn', 'Tỉnh', 'Cổ', 'Thăng'],
        ['Tụng', 'Khốn', 'V.Tế', 'Giải', 'Hoán', 'Khảm', 'Mông', 'Sư'],
        ['Độn', 'Hàm', 'Lữ', 'T.Quá', 'Tiệm', 'Kiển', 'Cấn', 'Khiêm'],
        ['Bĩ', 'Tụy', 'Tấn', 'Dự', 'Quan', 'Tỷ', 'Bác', 'Khôn'],
    ];

    public $cung = ['Càn', 'Càn', 'Đoài', 'Ly', 'Chấn', 'Tốn', 'Khảm', 'Khôn', 'Khôn'];

    protected $GoogleSheetsService;

    public function __construct(GoogleSheetsService $GoogleSheetsService)
    {
        $this->GoogleSheetsService = $GoogleSheetsService;
    }

    public function writeDataToGoogleSheetsInvoice($spreadsheetId, $sheetName = 'invoice', $data)
    {
        return $this->GoogleSheetsService->writeDataToGoogleSheetsInvoice($spreadsheetId, $sheetName = 'invoice', $data);
    }

    public function getDataBySpreadsheetId($spreadsheetId)
    {
        return $this->GoogleSheetsService->getJsonData($spreadsheetId);
    }

    public function getSimData()
    {
        $spreadsheetId = 'sdt';
        $jsonData = $this->getDataBySpreadsheetId($spreadsheetId);
        return $jsonData;
    }

    public function getBoiSimData()
    {
        $spreadsheetId = env('GOOGLE_SHEETS_SPREADSHEET_ID_BOI_SIM_SHEET');
        $jsonData = $this->getDataBySpreadsheetId($spreadsheetId);
        return $jsonData;
    }

    public function getBoiSimDataNangLuong46()
    {
        $spreadsheetId = 'nang_luong_so_46';
        $jsonData = $this->getDataBySpreadsheetId($spreadsheetId);
        return $jsonData;
    }

    public function getDacDiemCacTuTruong()
    {
        $spreadsheetId = 'dac_diem_cac_tu_truong';
        $jsonData = $this->getDataBySpreadsheetId($spreadsheetId);
        return $jsonData;
    }

    public function getBoiSimDataNangLuong()
    {
        $spreadsheetId = 'nang_luong_so';
        $jsonData = $this->getDataBySpreadsheetId($spreadsheetId);
        return $jsonData;
    }

    public function getThongTinPhongThuyBangSdt($sdt, $gioitinh = null)
    {
        if (substr($sdt, 0, 1) == '0') {
            $sdt = substr($sdt, 1);
        }
        $sdt = str_replace('.', '', $sdt);

        $fourFirstNumber = substr($sdt, 0, 4);
        $fiveLastNumber = substr($sdt, -5);

        $totalFourFirstNumber = $this->totalDigit($fourFirstNumber);
        $totalFiveLastNumber = $this->totalDigit($fiveLastNumber);
        $totalFullNumber = $this->totalDigit($sdt, 6);

        $id = ($totalFourFirstNumber * 10) + $totalFiveLastNumber;

        $boiSimData = json_decode($this->getBoiSimData(), true);

        $convertedArray = array_map(function ($row) {
            return mb_convert_encoding($row, 'UTF-8', 'auto');
        }, $this->que64);

        foreach ($boiSimData as $item) {
            if (intval($item['id']) == $id) {
                $item['ten_que'] = $convertedArray[$totalFiveLastNumber - 1][$totalFourFirstNumber-1];
                $item['dong_hao_chinh'] = $item['dong_hao_' . $totalFullNumber];
                $item['dong_hao'] = $totalFullNumber;
                $item['kq'] =  'Số điện thoại 0'. $sdt . ' có Quẻ Chính ' . $item['danh_gia'];

                $diemTotXau = str_contains($item['danh_gia'], 'quẻ tốt') ? 5 : (str_contains($item['danh_gia'], 'quẻ xấu') ? 0 : 2.5);

                $tuongsinh = [
                    'CÀN' => 'Kim',
                    'ĐOÀI' => 'Kim',
                    'LY' => 'Hỏa',
                    'CHẤN' => 'Mộc',
                    'TỐN' => 'Mộc',
                    'KHẢM' => 'Thủy',
                    'CẤN' => 'Thổ',
                    'KHÔN' => 'Thổ',
                ];

                $tuongsinh2 = [
                    'Kim' => ['Tương Hợp','Tương Khắc','Tương Sinh','Tương Khắc','Tương Sinh'],
                    'Mộc' => ['Tương Khắc','Tương Hợp','Tương Sinh','Tương Sinh','Tương Khắc'],
                    'Thủy' => ['Tương Sinh','Tương Sinh','Tương Hợp','Tương Khắc','Tương Khắc'],
                    'Hỏa' => ['Tương Khắc','Tương Sinh','Tương Khắc','Tương Hợp','Tương Sinh'],
                    'Thổ' => ['Tương Sinh','Tương Khắc','Tương Khắc','Tương Sinh','Tương Hợp'],
                ];

                $diemContent = [
                    "-2" => "có Quẻ xấu và Ngũ hành Sim tương Khắc với Ngũ hành bản mệnh của Thân chủ => Đại Hung, Về lâu dài, không nên tiếp tục dùng sim này. Nếu không sim sẽ ảnh hưởng xấu đến bạn!",
                    "1"	=>  "có Ngũ hành Tương Hợp với Ngũ hành bản mệnh của Thân chủ, Nhưng Quẻ lại rất xấu, về lâu dài sẽ tác động xấu tới Thân chủ => Về lâu dài, không nên tiếp tục dùng sim này. Nếu không sim sẽ ảnh hưởng xấu đến bạn! chỉ nên sử dụng tạm thời, hoặc để làm số phụ",
                    "2"	=>  "có Ngũ hành Tương Sinh với Ngũ hành bản mệnh của Thân chủ, Nhưng Quẻ lại rất xấu, về lâu dài sẽ tác động xấu tới Thân chủ => Về lâu dài, không nên tiếp tục dùng sim này. Nếu không sim sẽ ảnh hưởng xấu đến bạn! chỉ nên sử dụng tạm thời, hoặc để làm số phụ",
                    "0.5"	=>  "có Quẻ̉ Trung Bình, và Ngũ hành Sim tương Khắc với Ngũ hành bản mệnh của Thân chủ => Đại Hung, về lâu dài, không nên tiếp tục dùng sim này. Nếu không sim sẽ ảnh hưởng xấu đến bạn!",
                    "3.5"	=>  "có Quẻ̉ Trung Bình, và Ngũ hành Sim tương Hợp với Ngũ hành bản mệnh của Thân chủ => Tiểu Cát, số này có thể tạm dùng được",
                    "4.5"=> 	 "có Quẻ̉ Trung Bình, và Ngũ hành Sim tương Sinh với Ngũ hành bản mệnh của Thân chủ => Tiểu Cát, số này có thể tạm dùng được",
                    "3"=> 	 "có Quẻ̉ Tốt, tuy nhiên Ngũ hành Sim tương Khắc với Ngũ hành bản mệnh của Thân chủ => chỉ nên sử dụng làm số phụ",
                    "6"	=>  "có Quẻ̉ Tốt, và Ngũ hành Sim tương Hợp với Ngũ hành bản mệnh của Thân chủ => Cát, số này có thể sử dụng được",
                    "7"	=>  "có Quẻ Tốt, và Ngũ hành Sim tương Sinh với Ngũ hành bản mệnh của Thân chủ => Đại Cát, số này có thể sử dụng được",
                ];

                $diemTuongSinh = $tuongsinh[$item['cung_phi']] ?? 'Kim';

                switch ($diemTuongSinh) {
                    case 'Kim':
                        $diemTuongSinh = $tuongsinh2['Kim'][0];
                        break;
                    case 'Mộc':
                        $diemTuongSinh = $tuongsinh2['Mộc'][1];
                        break;
                    case 'Thủy':
                        $diemTuongSinh = $tuongsinh2['Thủy'][2];
                        break;
                    case 'Hỏa':
                        $diemTuongSinh = $tuongsinh2['Hỏa'][3];
                        break;
                    default:
                        $diemTuongSinh = $tuongsinh2['Thổ'][4];
                        break;
                }

                $diemTuongSinh = ($diemTuongSinh === 'Tương Hợp') ? 1 : (($diemTuongSinh == 'Tương Sinh') ? 2 : -2);

                $item['diem_danh_gia'] = ($diemTotXau) + ($diemTuongSinh);
                $item['hop_tuoi'] = "Số điện thoại 0". $sdt . " " . $diemContent[$item['diem_danh_gia']];

                //                 Luaan theo huyen khong ===================

                $tansosuathien = [];
                $sdt = "0" . $sdt;
                for($i = 0 ; $i < strlen($sdt) ; $i++){
                    $tansosuathien["$sdt[$i]"] = isset($tansosuathien[$sdt[$i]]) ? $tansosuathien[$sdt[$i]] + 1 : 1;
                }

                $item['van_8'] = '';
                $item['van_9'] = '';
                $item['van_6'] = '';
                $item['van_1'] = '';

                if (isset($tansosuathien[8]) && $tansosuathien[8] !== 0) {
                    $item['van_8'] = "Vận này là vận 8, nên dãy số có sự xuất hiện của $tansosuathien[8] số 8, biểu tượng cho vượng khí và 8 lại là số tam cát: rất tốt.";
                }
                if (isset($tansosuathien[9]) && $tansosuathien[9] !== 0) {
                    $item['van_9'] = "Số 9 là số sinh khí của vận 8, dãy số có $tansosuathien[9] số 9 là biểu tượng của sinh khí: rất tốt.";
                }
                if (isset($tansosuathien[6]) && $tansosuathien[6] !== 0) {
                    $item['van_6'] = "Số tam cát 6 xuất hiện $tansosuathien[6] lần: tốt.";
                }
                if (isset($tansosuathien[1]) && $tansosuathien[1] !== 0) {
                    $item['van_1'] = "Số tam cát 1 xuất hiện $tansosuathien[8] lần: tốt.";
                }

                $item['sum_tan_suat'] = ($tansosuathien[1] ?? 0) + ($tansosuathien[6] ?? 0) + ($tansosuathien[8] ?? 0) + ($tansosuathien[9] ?? 0);
                $item['diem_tan_suat'] = $item['sum_tan_suat'] !== 0 ? 1 : 0;
                $item['ket_luan_tan_suat'] = $item['sum_tan_suat'] !== 0 ? "Tốt" : "Xấu" ;

                //                 am duong tuong phoi ===================
                $item['van_duong'] = array_sum([
                    $tansosuathien[1] ?? 0,
                    $tansosuathien[3] ?? 0,
                    $tansosuathien[5] ?? 0,
                    $tansosuathien[7] ?? 0,
                    $tansosuathien[9] ?? 0,
                ]);
                $item['van_am'] = (10 - $item['van_duong']);

                $vanContentsNam = [
                    1 => "Số này vượng Dương, thân chủ lại là Nam, nên không phù hợp - XẤU.",
                    2 => "Số này vượng Dương, thân chủ lại là Nam, nên không phù hợp - XẤU.",
                    3 => "Số này vượng Dương, thân chủ lại là Nam, nên không phù hợp - XẤU.",
                    4 => "Số này Âm Dương hài hòa - TỐT.",
                    5 => "Số này Âm Dương hài hòa - TỐT.",
                    6 => "Số này Âm Dương hài hòa - TỐT.",
                    7 => "Số này vượng âm, thân chủ là Nam, nên phù hợp - TỐT.",
                    8 => "Số này vượng âm, thân chủ là Nam, nên phù hợp - TỐT.",
                    9 => "Số này vượng âm, thân chủ là Nam, nên phù hợp - TỐT.",
                    10 => "Số này vượng âm, thân chủ là Nam, nên phù hợp - TỐT.",
                ];
                $vanContentsNu = [
                    1 => "Số này vượng Dương, thân chủ lại là Nữ, nên phù hợp - TỐT.",
                    2 => "Số này vượng Dương, thân chủ lại là Nữ, nên phù hợp - TỐT.",
                    3 => "Số này vượng Dương, thân chủ lại là Nữ, nên phù hợp - TỐT.",
                    4 => "Số này Âm Dương hài hòa - TỐT.",
                    5 => "Số này Âm Dương hài hòa - TỐT.",
                    6 => "Số này Âm Dương hài hòa - TỐT.",
                    7 => "Số này vượng âm, thân chủ là Nữ, nên không phù hợp - XẤU.",
                    8 => "Số này vượng âm, thân chủ là Nữ, nên không phù hợp - XẤU.",
                    9 => "Số này vượng âm, thân chủ là Nữ, nên không phù hợp - XẤU.",
                    10 => "Số này vượng âm, thân chủ là Nữ, nên không phù hợp - XẤU.",
                ];

                $item['van_content'] = $vanContentsNam[$item['van_am']];
                if (!empty($gioitinh) && $gioitinh === 'nu') {
                    $item['van_content'] = $vanContentsNu[$item['van_am']];
                }

                $item['diem_van'] = 0;
                if (str_contains($item['van_content'], 'TỐT')) {
                    $item['diem_van'] = 1;
                }

            // XÉT PHONG THỦY 4 SỐ CUỐI
                $sdtt = $sdt;
                $sdtt = substr($sdtt, -4);
                $calBoi4 = $this->calBoi4($sdtt);
                $item['soly_4'] = $calBoi4['soLy'];
                $item['content_4'] = $this->boi4[$calBoi4['soLy']][0];
                $item['ketLuan_4'] = $this->boi4[$calBoi4['soLy']][1];

                $item['diem_4'] = 0;
                if (str_contains($item['ketLuan_4'], 'cát') || str_contains($item['ketLuan_4'], 'Cát')) {
                    $item['diem_4'] = 1;
                }

                $item['diem_final'] = $item['diem_4'] + $item['diem_van'] + $item['diem_tan_suat'] + $item['diem_danh_gia'];

                return $item;
            }
        }

        return [];
    }

    public function getThongTinPhongThuyBang4Or6Sdt($sdt, $options = [], $type = 4)
    {
        $boiSimData = json_decode($this->getBoiSimData(), true);
        foreach ($boiSimData as $item) {
            if (intval($item['id']) === $options['id']) {
                return $item;
            }
        }

        return [];
    }

    public function getThongTinNangLuong4Or6Sdt($sdt, $options = [], $type = 4)
    {
        $boiSimDataNangLuong = json_decode($this->getBoiSimDataNangLuong46(), true);
        if ($type === 4) {
            $mid1 = substr($sdt, 0, 3);
            $mid2 = substr($sdt, 1, 3);
        } else {
            $mid1 = substr($sdt, 0, 3);
            $mid2 = substr($sdt, 1, 3);
            $mid3 = substr($sdt, 2, 3);
            $mid4 = substr($sdt, 3, 3);
        }

        $res = [];
        foreach ($boiSimDataNangLuong as $item) {
            if ($type === 4) {
                if (intval($item['id']) === intval($mid1) || intval($item['id']) === intval($mid2)) {
                    $res[$item['id']] = $item;
                }
            } else {
                if (intval($item['id']) === intval($mid1) || intval($item['id']) === intval($mid2) || intval($item['id']) === intval($mid3) || intval($item['id']) === intval($mid4)) {
                    $res[$item['id']] = $item;
                }
            }
        }

        return $res;
    }

    function getListSimData()
    {
        $simData = json_decode($this->getSimData(), true);

        $result = [];

        foreach ($simData as $item) {
            $result[] = mb_convert_encoding($item, 'UTF-8', 'auto');
        }


        foreach ($result as $key => $item) {
            if ($item['tinh_trang'] !== 'còn hàng') {
                unset($result[$key]);
            }
            $result[$key]['sdt'] = $this->formatPhoneNumber($item['sdt']);
            $result[$key]['gia_ban'] = $this->formatGiaBan($item['gia_ban']);
        }

        return $result;
    }

    function getDetailSimData($sdt)
    {
        $simData = json_decode($this->getSimData(), true);

        $result = [];

        foreach ($simData as $item) {
            $result[] = mb_convert_encoding($item, 'UTF-8', 'auto');
        }

        foreach ($result as $key => $item) {
            $result[$key]['sdt'] = $this->formatPhoneNumber($item['sdt']);
            $result[$key]['gia_ban'] = $this->formatGiaBan($item['gia_ban']);

            if ($result[$key]['sdt'] == $sdt) {
                return $result[$key];
            }
        }

        return [];
    }


    private function totalDigit($string, $mod = 8)
    {
        $total = 0;
        for ($i = 0; $i < strlen($string); $i++) {
            $total += intval($string[$i]);
        }

        $total = $total % $mod;

        if ($total == 0) {
            $total = $mod;
        }

        return $total;
    }

    private function formatPhoneNumber($sdt) {
        $sdt = str_replace(' ', '', $sdt);
        $sdt = str_replace('.', '', $sdt);
        $sdt = str_replace('-', '', $sdt);
        $sdt = str_replace('+84', '0', $sdt);
        $sdt = str_replace('0084', '0', $sdt);

        for ($i = 0; $i < strlen($sdt); $i++) {
            if ($i == 4) {
                $sdt = substr_replace($sdt, '.', $i, 0);
            }

            if ($i == 8) {
                $sdt = substr_replace($sdt, '.', $i, 0);
            }
        }

        return $sdt;
    }

    public function formatGiaBan($gia) {
        $gia = str_replace(' ', '', $gia);
        $gia = str_replace('.', '', $gia);
        $gia = str_replace(',', '', $gia);
        $gia = str_replace('-', '', $gia);
        $gia = str_replace('đ', '', $gia);

        return number_format(floatval($gia), 0, ',', '.');
    }

    public function calBoi4($sdt) {
        $twoNumber = substr($sdt, 0, 2);
        $twoLastNumber = substr($sdt, -2);

        $totalTwoFirstNumber = $this->totalDigit($twoNumber);
        $totalTwoLastNumber = $this->totalDigit($twoLastNumber);

        $id = ($totalTwoFirstNumber * 10) + $totalTwoLastNumber;
        return [
            'id' => $id,
            'totalTwoFirstNumber' => $totalTwoFirstNumber,
            'totalTwoLastNumber' => $totalTwoLastNumber,
            'soLy' => intval($sdt) % 80,
        ];
    }

    public function calBoi6($sdt) {
        $threeNumber = substr($sdt, 0, 3);
        $threeLastNumber = substr($sdt, -3);

        $totalThreeFirstNumber = $this->totalDigit($threeNumber);
        $totalThreeLastNumber = $this->totalDigit($threeLastNumber);

        $id = ($totalThreeFirstNumber * 10) + $totalThreeLastNumber;
        return [
            'id' => $id,
            'totalThreeFirstNumber' => $totalThreeFirstNumber,
            'totalThreeLastNumber' => $totalThreeLastNumber,
            'soLy' => intval($sdt) % 80,
        ];
    }

    public function getSaoHanContent($id, $type = 1)
    {
        if ($type === 1) {
            $data = json_decode($this->getDataBySpreadsheetId('giai_doan_sao'), true);
        } else {
            $data = json_decode($this->getDataBySpreadsheetId('giai_doan_han'), true);
        }

        foreach ($data as $item) {
            if (strtolower($item['id']) === strtolower($id)) {
                return $item;
            }
        }

        return [];
    }

    public function getTuoiAmLich($id)
    {
        $data = json_decode($this->getDataBySpreadsheetId('data_xem_tuoi_am'), true);

        foreach ($data as $item) {
            if (strpos(strtolower($id), strtolower($item['id']) ) !== false) {
                return $item;
            }
        }

        return [];
    }

    public function calNangLuongSo($sdt) {
        $sdt = substr($sdt, -9);
        $data = [];
        for ($i = 0; $i < strlen($sdt) - 2; $i++) {
            $data[] = $sdt[$i] . $sdt[$i+1] . $sdt[$i + 2];
        }

        $result = [];
        $boiSimDataNangLuong = json_decode($this->getBoiSimDataNangLuong46(), true);

        foreach ($boiSimDataNangLuong as $key => $item) {
            if (in_array($item['id'], $data)) {
                $result[] = $item;
            }
        }

        $dataNull = array_diff($data, array_column($result, 'id'));

        foreach ($dataNull as $key => $item) {
            $result[] = [
                'id' => $item,
                'content' => '',
            ];
        }

        return $result;
    }
}
