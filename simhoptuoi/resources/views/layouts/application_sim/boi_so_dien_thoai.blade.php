@extends('app')

@section('title', 'Xem phong thủy sim')

@section('content')
<script>

    $(document).ready(function () {
        var phone = $('#xpts_phone').val();
        var ngay = $('#xpts_ngay').val();
        var thang = $('#xpts_thang').val();
        var nam = $('#xpts_nam').val();
        if (phone != '' && ngay != '' && thang != '' && nam != '') {
            $('.thongtin_thanchu').attr('style', 'display: block !important; margin-top: 2.5rem;');
            $('.content-post').attr('style', 'display: block !important;');
            var gioitinh = $('input[name="gioitinh"]:checked').val();
            var gioSinh = $('#xpts_giosinh').children("option:selected").text();
            var gioSinh = parseInt(gioSinh.split('(')[1].slice(0, 2));

            if (gioSinh >= 23) {
                var newDate = new Date(nam, thang, ngay);
                newDate.setDate(newDate.getDate() + 1);
                ngay = newDate.getDate();
                thang = newDate.getMonth();
                nam = newDate.getFullYear();
            }

            var lunar = new AmLich(ngay, thang, nam);

            console.log(lunar);
            // $G17 = $time1[((($E23*12) + intval(($gio/2) + 0.5) - 2) % 10)]; // Can giờ sinh

            // $H17 = $time2[((($E23*12) + intval(($gio/2) + 0.5)) % 12)]; // Chi giờ sinh

            var cY = CanChi(lunar.year-1900+36);
            var nY = CanChiNapAm(cY);
            var cM = CanChi((nam-1900)*12+(thang-1)+12);
            if (ngay >= lunar.t) cM = CanChi((nam-1900)*12+(thang-1)+13);
            var nM = CanChiNapAm(cM);
            var cD = CanChi(lunar.days);
            var nD = CanChiNapAm(cD);
            var cH = ThienCan(((nam-1900)*12) + parseInt((gioSinh/2) + 0.5) - 2);
            var nH = DiaChi(((nam-1900)*12) + parseInt((gioSinh/2) + 0.5));
            var can = canVi(ThienCan(lunar.days));
            var chi = chiVi(DiaChi(lunar.days));
            // var HK = napAmHanhKhac(can, chi);

            $(".date_dl").text($('#xpts_ngay').val() + '/' + $('#xpts_thang').val() + '/' + $('#xpts_nam').val());
            $(".date_al").text(lunar.day+'/'+lunar.month+'/'+lunar.year);
            $(".sex").text(gioitinh == 'nam' ? 'Nam' : 'Nữ');
            $(".tu_tru").text('Giờ ' + cH + ' ' + nH + ', Ngày ' + cD + ', Tháng ' + cM + ', Năm ' + cY);
            $(".age").text(cY);
            $(".ban_menh").text(nY);
            $(".sinh_menh").text(cungPhi[nam][1]);
            $(".cung_phi").text(gioitinh == 'nam' ? cungPhi[lunar.year][2] : cungPhi[lunar.year][3]);

            const images = {
                'Tý' : 'ty',
                'Sửu': 'suu',
                'Dần': 'dan',
                'Mão': 'mao',
                'Thìn': 'thin',
                'Tỵ' : 'ty_',
                'Ngọ': 'ngo',
                'Mùi': 'mui',
                'Thân': 'than',
                'Dậu': 'dau',
                'Tuất': 'tuat',
                'Hợi': 'hoi',
            };

            var png = cY.split(' ')[1];
            console.log("{{ asset('common/templates/site/images/') }}/" + images[png] + ".png");
            $(".image_nam_sinh").attr("src", "{{ asset('common/templates/site/images/') }}/" + images[png] + ".png");

            $('.title_h1_sim').text('Xem thêm sim hợp tuổi ' + cY);
        }

        $('#btn_xem_ngay_boi_sim').on('click', function (e) {
            e.preventDefault();
            var phone = $('#xpts_phone').val();
            var ngay = $('#xpts_ngay').val();
            var thang = $('#xpts_thang').val();
            var nam = $('#xpts_nam').val();

            var gioSinh = $('#xpts_giosinh').children("option:selected").text();
            var gioSinh = parseInt(gioSinh.split('(')[1].slice(0, 2));
            if (gioSinh >= 23) {
                var newDate = new Date(nam, thang, ngay);
                newDate.setDate(newDate.getDate() + 1);
                ngay = newDate.getDate();
                thang = newDate.getMonth();
                nam = newDate.getFullYear();
            }
            var lunar = new AmLich(ngay, thang, nam);

            var can = canVi(ThienCan(lunar.days));
            var chi = chiVi(DiaChi(lunar.days));
            // var HK = napAmHanhKhac(can, chi);

            $('#sinh_menh_input').val(cungPhi[nam][1]);
            $('#form_xpts').submit();
        });
    });

</script>
<section class="contentPage luanSim">
    <h1 class="title_h1">Xem bói số điện thoại</h1>
    <div class="bodyPage bodyLuanSim boi_sim_inputs">
        <section class="boxFormSim">
            <div class="bgFormSim">
                <form novalidate id="form_xpts" name="form_xpts" action="{{ route('boi-sim') }}" method="post" accept-charset="UTF-8">
                    @csrf
                    <div style="display:none"></div>
                    <div class="row">
                        <input type="text" id="sinh_menh_input" name="sinh_menh_input" hidden>
                        <div class="col-3 col-md-3 col-sm-3 col-xs-3">
                            <p class="title_label"><label>Số điện thoại</label></p>
                        </div>
                        <div class="col-9 col-md-9 col-sm-9 col-xs-9">
                            <input id="xpts_phone" class="myinput" name="sdt" placeholder="Mời nhập số sim" value="{{ $info['sdt'] ?? '' }}">
                            @error('sdt')
                                <p class="text-white"> <i>Định dạng số điện thoại không hợp lệ</i></p>
                            @enderror
                        </div>
                        <div class="col-12 col-md-12">
                            <div class="row">
                                <div class="col-3 col-md-3 col-sm-3 col-xs-3">
                                    <p class="title_label"><label>Ngày sinh</label></p>
                                </div>
                                <div class="col-3 col-md-3 col-sm-3 col-xs-3">
                                    <select id="xpts_ngay" name="ngay" class="myinput" required>
                                        <option value="" >Ngày</option>
                                        <option value="1" selected >1</option>
                                        @for($i = 2; $i<=31; $i++)
                                            <option value="{{ $i }}" @if($i == $info['ngay'] ?? '') selected @endif>{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                                <div class="col-3 col-md-3 col-sm-3 col-xs-3">
                                    <select id="xpts_thang" name="thang" class="myinput" required>
                                        <option value="" >Tháng</option>
                                        <option value="1" selected >1</option>
                                        @for($ii = 2; $ii<=12; $ii++)
                                            <option value="{{ $ii }}" @if($ii == $info['thang'] ?? '') selected @endif >{{ $ii }}</option>
                                        @endfor
                                    </select>
                                </div>
                                <div class="col-3 col-md-3 col-sm-3 col-xs-3">
                                    <select id="xpts_nam" name="nam" class="myinput" required>
                                        <option value="" >Năm</option>
                                        <option value="1950" selected >1950</option>
                                        @for($iii = 1951; $iii<=2020; $iii++)
                                            <option value="{{ $iii }}" @if($iii == $info['nam'] ?? '') selected @endif >{{ $iii }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 col-md-2 col-sm-2 col-xs-2">
                            <input type="radio" name="gioitinh" value="nam" checked /> Nam
                        </div>
                        <div class="col-2 col-md-2 col-sm-2 col-xs-2">
                            <input type="radio" name="gioitinh" value="nu" @if(!empty($info['gioitinh']) && $info['gioitinh'] === 'nu') checked @endif /> Nữ
                        </div>
                        <div class="col-3 col-md-2 col-sm-2 col-xs-2">
                            <p class="title_label"><label>Giờ sinh</label></p>
                        </div>
                        <div class="col-5 col-md-6 col-sm-6 col-xs-6">
                            <select id="xpts_giosinh" class="myinput" name="giosinh" required>
                                <option value="">Chọn giờ sinh</option>
                                <option value="1" selected >Tý (23g - 1g)</option>
                                @foreach($timeBorn as $key => $value )
                                    <option value="{{ $key }}" @if($key == $info['giosinh'] ?? '') selected @endif >{{ $value }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-12 col-sm-12 col-xs-12 text-center">
                            <button id="btn_xem_ngay_boi_sim" type="button" class="btn_xemngay bg-danger"><span>Luận phong thuỷ sim</span></button>
                        </div>
                    </div>
                    <div class="text-left">
                        <p style="margin: 0">Hướng dẫn cách xem phong thủy sim:</p>
                        <p style="margin: 0">- B.1: Nhập số điện thoại cần xem</p>
                        <p style="margin: 0">- B.2: Chọn ngày - tháng - năm sinh Dương Lịch của gia chủ</p>
                        <p style="margin: 0">- B.3: Chọn giới tính, giờ sinh</p>
                        <p style="margin: 0">- B.4: Nhấp "Luận phong thủy sim"</p>
                    </div>
                </form>
            </div>
        </section>
    </div>

    <div class="thongtin_thanchu" style="display: none">
        <div class="row">
            <div class="col-12 col-md-4 luansim_new_sim d-block d-sm-block">
                <div class="congiap_thanchu">
                    <img class="image_nam_sinh" src="{{ asset('common/templates/site/images/ty.png') }}">
                </div>
            </div>
            <div class="col-12 col-md-8 luansim_new_than_chu">
                <div>
                    <p>
                        <b><span>Ngày sinh (DL):</span></b>
                        <span class="date_dl"></span>
                    </p>
                    <p>
                        <b><span>Ngày sinh (AL):</span></b>
                        <span class="date_al"></span>
                    </p>
                    <p>
                        <b><span>Giới tính:</span></b>
                        <span class="sex"></span>
                    </p>
                    <p>
                        <b><span>Tứ Trụ Ngày Sinh:</span></b>
                        <span class="tu_tru"></span>
                    </p>
                    <p>
                        <b><span>Tuổi:</span></b>
                        <span class="age"></span>
                    </p>
                    <p>
                        <b><span>Ngũ hành bản mệnh:</span></b>
                        <span class="ban_menh"></span>
                    </p>
                    <p>
                        <b><span>Ngũ hành sinh mệnh:</span></b>
                        <span class="sinh_menh"></span>
                    </p>
                    <p>
                        <b><span>Cung phi:</span></b>
                        <span class="cung_phi"></span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    @if (isset($data) && !empty($data))
        <section class="boxFormSim content-post" style="display: none">
            <h3 class="title_h1 mt-4">* LUẬN THEO KINH DỊCH</h3>
            <div class="wapper_que boxFormSim contentBox" style="width: 100%; max-width: 100%">
                @php
                    $indexImage = $data['so_que'] . '.jpg';
                @endphp

                <div class="row border rounded">
                    <div class="col-3 col-md-3 col-sm-3 col-xs-3 images-flex-only">
                        <p class="anh_que text-center"><img style="width: 50px" src="{{ asset("common/templates/site/images/ques/$indexImage") }}"></p>
                    </div>
                    <div class="col-9 col-md-9 col-sm-9 col-xs-9">
                        <p class="que_so"><strong> Số sim: </strong> {{ $info['sdt'] }}</p>
                        {{-- <p class="que_so  text-center text-bold">Quẻ số {{ $data['so_que'] }}</p> --}}
                        <p class="tot text-left"><strong> Tên Quẻ: </strong> {{ $data['ten_que'] }}</p>
                        <p class="tot text-left"><strong>Cung Phi: </strong> {{ $data['cung_phi'] }}</p>
                        <p class="text-left"><strong>Quái: </strong> {{ $data['que'] }}</p>
                        <p class="text-left">{{ $data['tong_quat'] }}</p>
                    </div>
                </div>

            </div>

            @php
                $index = 1;
            @endphp

            @if (!empty($data['danh_gia']))
                <h2 class="title_h1 text-left" style="font-weight: bold; margin-top: 5px; text-transform: capitalize"> {{ $index }}. Đánh giá</h2>
                <p class="pl-4">
                    {{ $data['danh_gia'] }}
                </p>
                @php
                    $index++;
                @endphp
            @endif

            @if (!empty($data['y_nghia_que']))
                <h2 class="title_h1 text-left" style="font-weight: bold; margin-top: 5px; text-transform: capitalize"> {{ $index }}. Ý Nghĩa</h2>
                <p class="pl-4">
                    {{ $data['y_nghia_que'] }}
                </p>
                @php
                    $index++;
                @endphp
            @endif

            @if (!empty($data['luan_giai_sim']))
                <h2 class="title_h1 text-left" style="font-weight: bold; margin-top: 5px; text-transform: capitalize"> {{ $index }}. Luận giải sim</h2>
                <p class="pl-4">
                    {{ $data['luan_giai_sim'] }}
                </p>
                @php
                    $index++;
                @endphp
            @endif

            @if (!empty($data['chiem_nghiem_ve_van_the']))
                <h2 class="title_h1 text-left" style="font-weight: bold; margin-top: 5px; text-transform: capitalize"> {{ $index }}. Chiêm nghiệm về vận thế</h2>
                <p class="pl-4">
                    {{ $data['chiem_nghiem_ve_van_the'] }}
                </p>
                @php
                    $index++;
                @endphp
            @endif

            @if (!empty($data['xet_ve_gia_dao_tinh_cam']))
                <h2 class="title_h1 text-left" style="font-weight: bold; margin-top: 5px; text-transform: capitalize"> {{ $index }}. Về giao đạo tình cảm</h2>
                <p class="pl-4">
                    {{ $data['xet_ve_gia_dao_tinh_cam'] }}
                </p>
                @php
                    $index++;
                @endphp
            @endif

            @if (!empty($data['dong_hao_chinh']))
                <h2 class="title_h1 text-left" style="font-weight: bold; margin-top: 5px; text-transform: capitalize"> {{ $index }}. Động hào - {{ $data['dong_hao']}}</h2>
                <p class="pl-4">
                    {{ $data['dong_hao_chinh'] }}
                </p>
                @php
                    $index++;
                @endphp
            @endif

            @if (!empty($data['hop_tuoi']))
                <h2 class="title_h1 text-left" style="font-weight: bold; margin-top: 5px; text-transform: capitalize"> {{ $index }}. Nhận xét về mối quan hệ giữa thân chủ và sim</h2>
                <p class="pl-4">
                    {{ $data['hop_tuoi'] }}
                </p>
                @php
                    $index++;
                @endphp
            @endif

            <p class="text-danger mx-4">Đánh giá: +{{ $data['diem_danh_gia'] }} điểm</p>

            <p class="text-primary text-center">
                Trong quẻ dịch còn chứa nhiều ẩn ý, quý khách không am hiểu Kinh Dịch sẽ không thể luận được. Mọi thắc mắc xin hãy đặt câu hỏi qua ZALO: <a href="https://zalo.me/0934553038">0934553038</a> để được giải đáp.
            </p>


            @if(!empty($data['sum_tan_suat']))
                <div class="text-left mt-4">
                    <h3 class="title_h1">* LUẬN THEO HUYỀN KHÔNG</h3>
                    <div class="pl-4">
                        <p>(Yếu tố phụ)</p>
                        <p>
                            Theo Huyền Không, trái đất chịu sự chi phối của 9 ngôi sao (sao còn gọi là tinh): Nhất Bạch, Nhị Hắc, Tam Bích, Tứ Lục, Ngũ Hoàng, Lục Bạch, Thất Xích, Bát Bạch, Cửu Tử. Với mỗi sao sẽ có được quy luật di chuyển và cùng nắm giữ những đại vận khác nhau. Mỗi sao đó tương ứng với các con số từ 1 đến 9. Các chuyên gia phong thủy cho rằng, các con số trong dãy số điện thoại khi truyền qua dạng sóng trong không gian cũng ảnh hưởng bởi các sao này.
                        </p>

                        <p>
                            Số điện thoại: {{ $info['sdt'] }}
                            @if(!empty($data['van_8']))
                                <br>
                                - {{ $data['van_8'] }}
                            @endif
                            @if(!empty($data['van_9']))
                                <br>
                                - {{ $data['van_9'] }}
                            @endif
                            @if(!empty($data['van_6']))
                                <br>
                                - {{ $data['van_6'] }}
                            @endif
                            @if(!empty($data['van_1']))
                                <br>
                                - {{ $data['van_1'] }}
                            @endif
                            <br>
                            Tổng số lần xuất hiện số tam cát, vượng khí và sinh khí là: {{ $data['sum_tan_suat'] ?? 0 }} lần.
                            <br>
                            Kết luận: {{ $data['ket_luan_tan_suat'] ?? ' - ' }}
                            <br>
                            <font class="text-danger"> Đánh giá: +{{ $data['diem_tan_suat'] ?? 0 }} điểm </font>
                        </p>
                    </div>
                </div>
            @endif

            @if(!empty($data['van_content']))
                <div class="text-left mt-4">
                    <h3 class="title_h1">* ÂM DƯƠNG TƯƠNG PHỐI</h3>
                    <div class="pl-4">
                        <p>(Yếu tố tham khảo)</p>
                        <p>
                            Nguồn gốc của vạn vật trong trời đất là Thái Cực, nguyên nhân căn bản thúc đẩy sinh sôi và biến hóa của tất cả sự vật chính là âm dương. Sự hình thành, phát triển và thay đổi biến hóa của mọi sự vật đều bắt nguồn từ sự chuyển động của hai khí âm-dương. Ở đây, âm được biểu thị bằng dấu "-" và dương biểu thị bằng dấu "+".
                        </p>

                        <p>
                            Số điện thoại: {{ $info['sdt'] }} có âm dương tương phối như sau:
                        </p>
                        <table class="mt-4 table table-striped table-bordered" style="width: 90% !important;">
                            <thead>
                            <tr>
                                @for($j = 0 ; $j < strlen($info['sdt']) ; $j++)
                                    <th class="text-center" style="vertical-align: middle">{{ $info['sdt'][$j] }}</th>
                                @endfor
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                @for($j = 0 ; $j < strlen($info['sdt']) ; $j++)
                                    @if($info['sdt'][$j] == 1 || $info['sdt'][$j] == 3 || $info['sdt'][$j] == 5 || $info['sdt'][$j] == 7 || $info['sdt'][$j] == 9)
                                        <td class="text-center" style="vertical-align: middle">+</td>
                                    @else
                                        <td class="text-center" style="vertical-align: middle">-</td>
                                    @endif
                                @endfor
                            </tr>
                        </table>
                        <p>
                            @if(!empty($data['van_am']))
                                - Có {{ $data['van_am'] }} số mang vận Âm, chiếm {{ $data['van_am'] * 10 }}%
                            @endif
                            @if(!empty($data['van_duong']))
                                <br>
                                - Có {{ $data['van_duong'] }} số mang vận Dương, chiếm {{ $data['van_duong'] * 10 }}%
                            @endif
                            <br>
                             {{ $data['van_content'] }}
                            <br>
                            <font class="text-danger"> Đánh giá: +{{ $data['diem_van'] ?? 0 }} điểm </font>
                        </p>
                    </div>
                </div>
            @endif

            @if(!empty($data['content_4']))
                <div class="text-left mt-4">
                    <h3 class="title_h1">* XÉT PHONG THỦY 4 SỐ CUỐI</h3>
                    <div class="pl-4">
                        <p>(Yếu tố phụ)</p>
                        <p>
                            Phong thủy 4 số cuối chỉ là một yếu tố rất nhỏ, nên chúng tôi xem nó như là 1 yếu tố phụ cộng thêm.
                        </p>

                        <p>
                            Số điện thoại: {{ $info['sdt'] }}
                        </p>

                        <p>
                            - Số lý: {{ $data['soly_4'] }}
                            <br>
                            - Kết luận: {{ $data['ketLuan_4'] }}
                            <br>
                            {{ $data['content_4'] }}
                            <br>
                            <font class="text-danger"> Đánh giá: +{{ $data['diem_4'] ?? 0 }} điểm </font>
                        </p>
                    </div>
                </div>
            @endif

            <div class="text-center mt-4" style="border: 1px solid #6a1700">
                <h3 class="title_h1 text-center">KẾT LUẬN</h3>
                <div class="pl-4">
                    <p style="font-size: 20px; font-weight: bold">
                        {{ $info['sdt'] }}
                    </p>

                    <p style="font-weight: bold">
                        @if($data['diem_final'] > 7)
                            Bạn có được số Sim tốt, chúc mừng bạn.
                        @elseif($data['diem_final'] > 4)
                            Sim chỉ ở mức trung bình. Có thể tạm dùng được.
                        @else
                            Sim có năng lượng xấu. Bạn nên cân nhắc đổi Sim
                        @endif
                        <br>
                        <font style="font-size: 20px; font-weight: bold" class="text-danger"> Điểm đánh giá: {{ $data['diem_final'] }}/10 </font>
                    </p>
                </div>
            </div>

            @if (count($results) > 0)
                <div class="nopadding sim_collection mt-4">
                    <section class="list_sim">
                        <h2 class="title_h1_sim">Xem thêm sim hợp tuổi </h2>
                        <div class="row listSim list_sim_item">
                            @foreach ($results as $item)
                                @php
                                    $logo_nha_mang = 'common/templates/site/images/icon/1.gif';
                                    if ($item['nha_mang'] == "mobi") {
                                        $logo_nha_mang = 'common/templates/site/images/icon/3.gif';
                                    } else if ($item['nha_mang'] == "vinaphone") {
                                        $logo_nha_mang = 'common/templates/site/images/icon/2.gif';
                                    } else if ($item['nha_mang'] == "gmobile") {
                                        $logo_nha_mang = 'common/templates/site/images/icon/5.gif';
                                    } else if ($item['nha_mang'] == "vietnamobile") {
                                        $logo_nha_mang = 'common/templates/site/images/icon/4.gif';
                                    }
                                @endphp
                                <div class="col-6 col-sm-6 col-md-6">
                                    <div class="main_box_sim_item">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-6">
                                                <p class="so"><a href="{{ route('detail-sim', ['sdt' => $item['sdt']]) }}">{{ $item['sdt'] }}</a></p>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-6 logoNhaMang"><img alt="" src="{{ asset($logo_nha_mang) }}" /></div>
                                        </div>
                                        <p class="vuong"><strong>Điểm phong thủy sim: </strong> {{ $item['diem_phong_thuy'] }}</p>
                                        <p class="price"><b>Giá: </b>{{ $item['gia_ban'] }}</p>
                                        <p class="que"><strong>Sim ngũ hành: </strong> <span class="nguhanh">{{ $item['ngu_hanh'] }}</span></p>
                                        <p class="yn"><strong>Quẻ Kinh dịch: </strong>{{ $item['que'] }}</p>
                                        <div class="row">
                                            <div class="col-6 col-sm-6 col-md-6">
                                                <p class="btnmua"><a href="{{ route('detail-sim', ['sdt' => $item['sdt']]) }}" class="btn_mua">Chi tiết <b>>></b></a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </section>
                </div>
            @endif
        </section>

    @else
        <section class=" boxHadview">
        <!-- text trên -->
        <section class="box_shadow">
            <div class="tableContent">
                <div class="row">
                    <div class="col-md-6">

                    </div>
                    <div class="col-md-6"></div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer"
                        />
                        <style>
                            #toc {
                                border: 1px solid #bba;
                                background-color: #f7f8ff;
                                margin-bottom: 10px !important;
                                padding: 1em;
                                font-size: 14px;
                                text-align: center;
                                width: 80%;
                                margin: 0px auto;
                                line-height: 25px;
                            }

                            #toc-header {
                                display: inline;
                                padding: 0;
                                font-size: 100%;
                                font-weight: bold;
                                color: #ff0000;
                                font-size: 18px;
                                margin-left: 5px;
                            }

                            #toc ul {
                                list-style-type: none;
                                margin-left: 0;
                                padding-left: 0;
                                text-align: left;
                            }

                            .toc3 {
                                margin-left: 2em;
                            }

                            .toc4 {
                                margin-left: 3em;
                            }

                            .toc5 {
                                margin-left: 4em;
                            }

                            .toc6 {
                                margin-left: 5em;
                            }

                            #toc img {
                                width: 20px;
                                margin-bottom: 10px;
                            }

                            @media only screen and (max-width: 568px) {
                                #toc {
                                    width: 100%;
                                }
                            }
                        </style>
                        <section id="toc">
                            <div class="d-flex justify-content-between" style="margin-bottom: 5px;">
                                <div class="icon-table-of-contents">
                                    <img src="https://simhoptuoi.com.vn/templates/site/images/icon/table-of-contents.png" alt="mục lục">
                                    <p id="toc-header">Nội dung chính</p>
                                </div>
                                <div class="action-tb-content">
                                    <i class="fa-solid fa-chevron-left"></i><i class="fa-solid fa-chevron-left"></i>
                                </div>
                            </div>
                            <ul class="wraper-tb-contents">
                                <li class="toc2"><a class="toc2" href="#i-tai-sao-can-phai-xem-b-oiso-dien-thoai">I.&nbsp; Tại sao cần phải xem b&oacute;i số điện thoại?</a></li>
                                <li class="toc2"><a href="#ii-cach-xem-b-oiso-dien-thoai-chinh-xac-theo-05-quy-luat-co-hoc-trong-vu-tru">II. C&aacute;ch xem b&oacute;i số điện thoại ch&iacute;nh x&aacute;c theo 05 quy luật cổ học trong Vũ Trụ</a></li>
                                <li class="toc2"><a href="#iii-mot-so-phuong-phap-coi-b-oiso-dien-thoai-khong-chinh-xac">III. Một số phương ph&aacute;p coi b&oacute;i số điện thoại kh&ocirc;ng ch&iacute;nh x&aacute;c</a></li>
                            </ul>
                        </section>
                    </div>
                </div>
            </div>
            <div class="box_limit">
                <div class="row">
                    <div class="col-md-12">
                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><strong>Xem b&oacute;i số điện thoại</strong> l&agrave; việc đ&aacute;nh gi&aacute;, ph&acirc;n t&iacute;ch d&atilde;y sim đang sở hữu c&oacute; hợp với bản mệnh hay kh&ocirc;ng dựa tr&ecirc;n quy luật &Acirc;m Dương, Ngũ h&agrave;nh, Tứ trụ luận đo&aacute;n, Kinh dịch. Từ đ&oacute; luận đo&aacute;n được năng lượng số sim c&oacute; bổ trợ cho chủ sự, gi&uacute;p đem lại vận kh&iacute; tốt hay kh&ocirc;ng. Việc coi b&oacute;i số điện thoại bạn sẽ biết được c&aacute;c yếu tố phong thủy c&oacute; trong sim như:&nbsp;</span></span>
                        </p>

                        <ul>
                            <li dir="ltr">
                                <p style="text-align:justify"><em><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Ngũ h&agrave;nh của sim</span></span></strong></em></p>
                            </li>
                            <li dir="ltr">
                                <p style="text-align:justify"><em><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Tỷ lệ &acirc;m dương trong d&atilde;y sim</span></span></strong></em></p>
                            </li>
                            <li dir="ltr">
                                <p style="text-align:justify"><em><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Quẻ dịch sim</span></span></strong></em></p>
                            </li>
                            <li dir="ltr">
                                <p style="text-align:justify"><em><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Con số may mắn theo quan niệm d&acirc;n gian</span></span></strong></em></p>
                            </li>
                            <li dir="ltr">
                                <p style="text-align:justify"><em><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Con số hợp với thời vận</span></span></strong></em></p>
                            </li>
                        </ul>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Xem b&oacute;i số điện thoại từ đ&oacute; cũng c&oacute; nhiều kh&oacute; khăn bởi c&aacute;c yếu tố tương đối phức tạp. Với mỗi phương ph&aacute;p xem b&oacute;i sim kh&aacute;c nhau sẽ cho ra kết quả kh&aacute;c nhau. Người d&ugrave;ng n&ecirc;n c&acirc;n nhắc lựa chọn phương ph&aacute;p b&oacute;i số sim ph&ugrave; hợp để nhận được may mắn từ năng lượng sim mang lại.</span></span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="box_limit">
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <h2 dir="ltr" style="text-align:justify"><span style="font-size:18px"><strong><span style="font-family:arial,helvetica,sans-serif"><span id="i-tai-sao-can-phai-xem-b-oiso-dien-thoai">I.&nbsp; Tại sao cần phải xem b&oacute;i số điện thoại?</span></span>
                                </strong>
                                </span>
                            </h2>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Sim điện thoại l&agrave; d&atilde;y sim được kết hợp bởi 10 con số kh&aacute;c nhau, mỗi con số đại diện những nguồn năng lượng ri&ecirc;ng, t&aacute;c động phần n&agrave;o đến vận mệnh của chủ nh&acirc;n. Phải nắm &yacute; nghĩa sim thật thấu đ&aacute;o mới hiểu hết được những tinh t&uacute;y của những con số mang lại. Kh&ocirc;ng chỉ dừng lại ở việc c&oacute; vẻ đẹp h&igrave;nh thức b&ecirc;n ngo&agrave;i, dễ đọc, dễ nhớ, người d&ugrave;ng sim cần xem b&oacute;i qua số điện thoại để biết được:</span></span>
                            </p>

                            <ul>
                                <li dir="ltr">
                                    <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">X&aacute;c định số điện thoại đang sở hữu c&oacute; hợp với b&aacute;t tự ng&agrave;y th&aacute;ng năm sinh hay kh&ocirc;ng. Nếu hợp sẽ gi&uacute;p xua đuổi vận đen, chi&ecirc;u t&agrave;i rước may mắn cho bản mệnh. Ngược lại, nếu sim kh&ocirc;ng hợp người d&ugrave;ng c&oacute; thể đem tới những bất lợi trong c&ocirc;ng việc v&agrave; cuộc sống.&nbsp;</span></span>
                                    </p>
                                </li>
                                <li dir="ltr">
                                    <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Đ&aacute;nh gi&aacute; số điện thoại hợp với phương diện n&agrave;o trong cuộc sống để c&oacute; hướng sử dụng ch&iacute;nh x&aacute;c nhằm bổ trợ ph&aacute;t triển to&agrave;n vẹn hơn. Ngo&agrave;i ra, nếu số điện thoại kh&ocirc;ng mang tới tốt đẹp người d&ugrave;ng c&oacute; thể thay sim đổi số kh&aacute;c.&nbsp;</span></span>
                                    </p>
                                </li>
                            </ul>

                            <h2 dir="ltr" style="text-align:justify"><span style="font-size:18px"><strong><span style="font-family:arial,helvetica,sans-serif"><span id="ii-cach-xem-b-oiso-dien-thoai-chinh-xac-theo-05-quy-luat-co-hoc-trong-vu-tru">II. C&aacute;ch xem b&oacute;i số điện thoại ch&iacute;nh x&aacute;c theo 05 quy luật cổ học trong Vũ Trụ</span></span>
                                </strong>
                                </span>
                            </h2>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Coi b&oacute;i số điện thoại (đ&aacute;nh gi&aacute; mức độ C&aacute;t - Hung) dựa theo b&aacute;t tự năm/th&aacute;ng/ng&agrave;y/giờ l&agrave; một c&ocirc;ng việc kh&aacute; phức tạp, đ&ograve;i hỏi người d&ugrave;ng cần c&oacute; mức độ hiểu biết về nguy&ecirc;n l&yacute; chấm điểm sim.Theo đ&oacute; để b&oacute;i số điện thoại ch&iacute;nh x&aacute;c cần dựa theo 5 bộ m&ocirc;n dịch cổ sau:</span></span>
                            </p>

                            <h3 dir="ltr" style="text-align:justify"><span style="font-size:16px"><strong><span style="font-family:arial,helvetica,sans-serif">1. Xem b&oacute;i số điện thoại theo bộ m&ocirc;n &Acirc;m Dương Tương Phối</span></strong>
                                </span>
                            </h3>

                            <p dir="ltr" style="text-align:justify"><u><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">&Acirc;m dương tương phối l&agrave; g&igrave;?</span></span></strong></u></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">&Acirc;m Dương l&agrave; hai th&aacute;i cực đối lập nhau trong Vũ Trụ. Tuy đối lập nhưng phải nương tựa, gắn kết hợp với nhau th&igrave; th&igrave; vạn vật trong vũ trụ mới tồn tại, ph&aacute;t triển được (&Acirc;m thịnh th&igrave; Dương suy, Dương thịnh th&igrave; &Acirc;m suy). Nếu thi&ecirc;n lệch về bất cứ th&aacute;i cực n&agrave;o sẽ mất thế c&acirc;n bằng, vạn vật sẽ lụi t&agrave;n, suy tho&aacute;i.&nbsp;</span></span>
                            </p>

                            <p dir="ltr" style="text-align:justify"><u><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">B&oacute;i số điện thoại tốt xấu theo &Acirc;m - Dương</span></span></strong></u></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">L&agrave; việc đ&aacute;nh gi&aacute; năng lượng &Acirc;m (Dương) của số sim đem lại c&acirc;n bằng hay thi&ecirc;n lệch qu&aacute; mức với &acirc;m dương ni&ecirc;n mệnh của người sử dụng sim. T&iacute;nh &Acirc;m - Dương trong sim số điện thoại được x&aacute;c định theo tần suất xuất hiện của số chẵn - số lẻ trong sim. C&oacute; nghĩa l&agrave;:</span></span>
                            </p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Số chẵn (0, 2, 4, 6, 8) mang năng lượng &Acirc;m, xuất hiện nhiều số chẵn trong d&atilde;y sim th&igrave; d&atilde;y sim đ&oacute; vượng &Acirc;m</span></span>
                            </p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Số lẻ (1, 3, 5, 7, 9) mang năng lượng Dương, xuất hiện nhiều số lẻ trong sim th&igrave; d&atilde;y sim đ&oacute; vượng Dương</span></span>
                            </p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Sim c&oacute; số chẵn (5 số) c&acirc;n bằng với số lẻ (5 số) th&igrave; d&atilde;y sim c&acirc;n bằng tuyệt đối, c&oacute; nội tại h&agrave;i h&ograve;a, tốt cho người sử dụng.&nbsp;</span></span>
                            </p>

                            <p dir="ltr" style="text-align:justify"><em><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">C&ograve;n &acirc;m dương ni&ecirc;n mệnh của tuổi sẽ căn cứ v&agrave;o thi&ecirc;n can của tuổi. Cụ thể:</span></span></strong></em></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Thi&ecirc;n can Gi&aacute;p - B&iacute;nh - Mậu - Canh - Nh&acirc;m thuộc năm Dương</span></span>
                            </p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Thi&ecirc;n can Ất - Đinh - Kỷ - T&acirc;n - Qu&yacute; thuộc năm &Acirc;m</span></span>
                            </p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">V&iacute; dụ như người tuổi Mậu Th&igrave;n c&oacute; thi&ecirc;n can Mậu thuộc năm Dương n&ecirc;n người tuổi n&agrave;y sẽ thuộc Dương Mạng. Như vậy khi xem b&oacute;i số điện thoại nếu d&atilde;y sim mang t&iacute;nh &Acirc;m (xuất hiện nhiều hơn 6 số lẻ) th&igrave; sẽ c&acirc;n bằng với Dương mạng của mệnh chủ, d&atilde;y sim c&oacute; &yacute; nghĩa c&aacute;t l&agrave;nh. Ngược lại nếu d&atilde;y sim mang t&iacute;nh Dương (xuất hiện nhiều hơn 6 số lẻ) th&igrave; d&atilde;y sim mang t&iacute;nh vượng Dương, g&acirc;y mất c&acirc;n bằng trầm trọng với &acirc;m dương ni&ecirc;n mệnh của tuổi, kh&ocirc;ng tốt.</span></span>
                            </p>

                            <h3 dir="ltr" style="text-align:justify"><span style="font-size:16px"><strong><span style="font-family:arial,helvetica,sans-serif">2. Xem b&oacute;i số điện thoại chuẩn nhất theo bộ m&ocirc;n Ngũ H&agrave;nh</span></strong>
                                </span>
                            </h3>

                            <p dir="ltr" style="text-align:justify"><u><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Ngũ h&agrave;nh l&agrave; g&igrave;?</span></span></strong></u></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Ngũ h&agrave;nh l&agrave; 5 trạng th&aacute;i tồn tại cấu tạo n&ecirc;n vạn vật trong vũ trụ gồm Kim, Mộc, Thủy, Hỏa, Thổ. Giữa c&aacute;c trạng th&aacute;i n&agrave;y c&oacute; mối quan hệ sinh - khắc, c&oacute; &yacute; nghĩa th&uacute;c đẩy v&agrave; k&igrave;m h&atilde;m nhau. Trong vũ trụ phải tồn tại song song những mối quan hệ n&agrave;y th&igrave; vạn vật mới c&oacute; thể ph&aacute;t triển, tồn tại được. Trong đ&oacute;:</span></span>
                            </p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Mối quan hệ tương sinh c&oacute; &yacute; nghĩa bổ trợ, th&uacute;c đẩy: Kim sinh Thủy, Thủy sinh Mộc, Mộc sinh Hỏa, Hỏa sinh Thổ, Thổ sinh kim</span></span>
                            </p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Mối quan hệ tương khắc c&oacute; &yacute; nghĩa khắc chế, k&igrave;m h&atilde;m: Kim khắc Mộc, Mộc khắc Thổ, Thổ khắc Thủy, Thủy khắc Hỏa, Hỏa khắc Kim</span></span>
                            </p>

                            <p dir="ltr" style="text-align:justify"><u><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Xem b&oacute;i số điện thoại theo ngũ h&agrave;nh</span></span></strong></u></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">C&aacute;ch xem b&oacute;i số điện thoại theo ngũ h&agrave;nh l&agrave; việc đ&aacute;nh gi&aacute; mức độ Hợp - Khắc của sim với mệnh chủ, mức độ Bổ Trợ trong tứ trụ bổ khuyết v&agrave; ngũ h&agrave;nh nội tại sim. Trong đ&oacute;:</span></span>
                            </p>

                            <h4 dir="ltr" style="text-align:justify"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">2.1. Xem b&oacute;i số điện thoại theo mức độ Hợp - Khắc với mệnh chủ</span></span></strong></h4>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Theo yếu tố n&agrave;y th&igrave; nếu d&atilde;y số điện thoại đang d&ugrave;ng c&oacute; ngũ h&agrave;nh tương sinh với mệnh chủ l&agrave; tốt nhất. Ngược lại nếu d&atilde;y sim c&oacute; ngũ h&agrave;nh tương khắc với mệnh chủ l&agrave; kh&ocirc;ng tốt, tr&aacute;nh d&ugrave;ng, nếu sử dụng sẽ gặp nhiều rắc rối.&nbsp;</span></span>
                            </p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">V&iacute; dụ: Người tuổi Canh Ngọ sinh năm 1990 mệnh Lộ B&agrave;ng Thổ n&ecirc;n nếu sử dụng d&atilde;y sim c&oacute; ngũ h&agrave;nh Hỏa l&agrave; tốt nhất (v&igrave; ngũ h&agrave;nh Hỏa tương sinh cho bản mệnh chủ sim). Nhưng nếu người n&agrave;y sử dụng sim c&oacute; ngũ h&agrave;nh Mộc th&igrave; lại rất xấu do Mộc tương khắc với Thổ, gia chủ sẽ gặp nhiều điều kh&ocirc;ng may mắn.&nbsp;</span></span>
                            </p>

                            <h4 dir="ltr" style="text-align:justify"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">2.2. Xem b&oacute;i số điện thoại theo mức độ Bổ Trợ trong Tứ Trụ Mệnh</span></span></strong></h4>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Tứ trụ l&agrave; bốn trụ gồm c&aacute;c th&ocirc;ng tin gắn kết với mỗi con người như giờ sinh, ng&agrave;y sinh, th&aacute;ng sinh, năm sinh. Để x&eacute;t tứ trụ mệnh th&igrave; ch&uacute;ng ta cần quy đổi ra can chi theo bảng lục thập hoa gi&aacute;p. Sau đ&oacute; dựa v&agrave;o thuyết can chi t&agrave;ng ẩn để quy đổi ra thi&ecirc;n can t&agrave;ng ẩn trong địa chi. Như sau</span></span>
                            </p>

                            <table class="table table-responsive table-bordered">
                                <tbody>
                                    <tr>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Địa chi</span></span></strong></p>
                                        </td>
                                        <td colspan="3">
                                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thi&ecirc;n Can t&agrave;ng ẩn</span></span></strong></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">T&yacute;</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Qu&yacute;</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">&nbsp;</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">&nbsp;</span></span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Sửu</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Kỷ</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Qu&yacute;</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">T&acirc;n</span></span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Dần</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Gi&aacute;p</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">B&iacute;nh</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Mậu</span></span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">M&atilde;o</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Ất</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">&nbsp;</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">&nbsp;</span></span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Th&igrave;n</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Mậu</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Ất</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Qu&yacute;</span></span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Tỵ</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">B&iacute;nh</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Mậu</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Canh</span></span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Ngọ</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Đinh</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Kỷ</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">&nbsp;</span></span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">M&ugrave;i</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Kỷ</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Đinh</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Ất</span></span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Th&acirc;n</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Canh</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Nh&acirc;m</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Mậu</span></span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Dậu</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">T&acirc;n</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">&nbsp;</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">&nbsp;</span></span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Tuất</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Mậu</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">T&acirc;n</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Đinh</span></span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Hợi</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Nh&acirc;m</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Gi&aacute;p</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">&nbsp;</span></span>
                                            </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Nếu t&igrave;m được thi&ecirc;n can t&agrave;ng ẩn th&igrave; cần phải quy đổi ra ngũ h&agrave;nh, từ đ&oacute; x&aacute;c định được H&agrave;nh Vượng cũng như h&agrave;nh Suy trong tứ trụ mệnh. Theo đ&oacute; khi xem b&oacute;i số điện thoại theo tứ trụ mệnh th&igrave;:&nbsp;</span></span>
                            </p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Nếu ngũ h&agrave;nh Sim tr&ugrave;ng với h&agrave;nh Suy sẽ bổ trợ sự suy yếu ngũ h&agrave;nh trong Tứ Trụ Mệnh, hướng đến sự c&acirc;n bằng n&ecirc;n sẽ gi&uacute;p mệnh chủ gặp nhiều may mắn.</span></span>
                            </p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Nếu ngũ h&agrave;nh Sim tr&ugrave;ng với h&agrave;nh Vượng th&igrave; sẽ l&agrave;m tăng l&ecirc;n t&iacute;nh thi&ecirc;n lệch về ngũ h&agrave;nh trong tứ trụ mệnh n&ecirc;n sẽ kh&ocirc;ng tốt.</span></span>
                            </p>

                            <h4 dir="ltr" style="text-align:justify"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">2.3. Xem b&oacute;i số điện thoại ch&iacute;nh x&aacute;c đang d&ugrave;ng theo ngũ h&agrave;nh nội tại số sim</span></span></strong></h4>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Ngũ h&agrave;nh nội tại số sim được đ&aacute;nh gi&aacute; từ tr&aacute;i qua phải, nếu giữa c&aacute;c con số xuất hiện nhiều mối quan hệ tương sinh hơn tương khắc th&igrave; tốt. C&ograve;n nếu xuất hiện nhiều mối quan hệ tương khắc hơn tương sinh th&igrave; xấu, kh&ocirc;ng tốt. Để việc b&oacute;i số điện thoại theo ngũ h&agrave;nh c&aacute;c con số nội tại sim dễ d&agrave;ng hơn th&igrave; cần nắm vững ngũ h&agrave;nh c&aacute;c con số trong sim như sau:</span></span>
                            </p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Số 1, 2 h&agrave;nh Mộc</span></span>
                            </p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Số 3, 4 h&agrave;nh Hỏa</span></span>
                            </p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Số 5, 6 h&agrave;nh Thổ</span></span>
                            </p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Số 7, 8 h&agrave;nh Kim</span></span>
                            </p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Số 9, 0 h&agrave;nh Thủy</span></span>
                            </p>

                            <p dir="ltr" style="text-align:justify"><em><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">V&iacute; dụ: xem b&oacute;i ngũ h&agrave;nh nội tại d&atilde;y sim 0766093689 thấy:</span></span></strong></em></p>

                            <table border="1" cellpadding="1" cellspacing="1" style="width:100%">
                                <tbody>
                                    <tr>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">0</span></span></strong></p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">7</span></span></strong></p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">6</span></span></strong></p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">6</span></span></strong></p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">0</span></span></strong></p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">9</span></span></strong></p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">3</span></span></strong></p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">6</span></span></strong></p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">8</span></span></strong></p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">9</span></span></strong></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thủy</span></span></strong></p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Kim</span></span></strong></p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thổ</span></span></strong></p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thổ</span></span></strong></p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thủy</span></span></strong></p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thủy</span></span></strong></p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Hỏa</span></span></strong></p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thổ</span></span></strong></p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Kim</span></span></strong></p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thủy</span></span></strong></p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">=&gt; Trong d&atilde;y sim n&agrave;y c&oacute; cặp 3 cặp tương sinh Hỏa sinh Thổ, Thổ sinh Kim, Kim sinh Thủy v&agrave; 1 cặp tương khắc Thủy khắc Hỏa. Do đ&oacute; ngũ h&agrave;nh nội tại của d&atilde;y số 0766093689 v&ocirc; c&ugrave;ng h&agrave;i h&ograve;a, sinh kh&iacute;.&nbsp;</span></span>
                            </p>

                            <h3 dir="ltr" style="text-align:justify"><span style="font-size:16px"><strong><span style="font-family:arial,helvetica,sans-serif">3. Xem b&oacute;i số điện thoại theo bộ m&ocirc;n Kinh Dịch</span></strong>
                                </span>
                            </h3>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Kinh dịch l&agrave; bộ m&ocirc;n phong thủy kinh điển, l&agrave; hệ thống tư tưởng triết học của người Trung Quốc cổ đại, được x&acirc;y dựng tr&ecirc;n 64 h&agrave;nh quẻ kinh dịch, sử dụng để chi&ecirc;m đo&aacute;n tương lai, sự vật sự việc Hung hay C&aacute;t. Việc ứng dụng 64 quẻ kinh dịch v&agrave;o xem b&oacute;i sim số điện thoại sẽ gi&uacute;p qu&yacute; bạn &yacute; nghĩa C&aacute;t - Hung của d&atilde;y sim đối với cuộc sống h&agrave;ng ng&agrave;y trong c&aacute;c phương Diện như C&ocirc;ng Danh Sự Nghiệp - T&igrave;nh Duy&ecirc;n Gia Đạo - Tiền Bạc Của Cải - Vận Hạn.</span></span>
                            </p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Khi b&oacute;i số điện thoại nếu d&atilde;y sim chứa quẻ dịch C&aacute;t, Đại C&aacute;t th&igrave; sẽ mang đến nhiều may mắn cho từng phương diện kh&aacute;c nhau. V&iacute; dụ như quẻ: Thuần C&agrave;n, Thủy Thi&ecirc;n Nhu, Địa Thủy Sư, Địa Thi&ecirc;n Th&aacute;i,...</span></span>
                            </p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Khi xem b&oacute;i số sim điện thoại nếu d&atilde;y sim chứa quẻ dịch Hung, Đại Hung th&igrave; kh&ocirc;ng tốt, cuộc sống gặp nhiều điều kh&ocirc;ng may mắn. V&iacute; dụ như c&aacute;c quẻ: Thủy L&ocirc;i Tru&acirc;n; Sơn Thủy M&ocirc;ng, Sơn Phong Cổ, Sơn Địa B&aacute;c,...</span></span>
                            </p>

                            <h3 dir="ltr" style="text-align:justify"><span style="font-size:16px"><strong><span style="font-family:arial,helvetica,sans-serif">4. Coi b&oacute;i số điện thoại theo bộ m&ocirc;n Cửu Tinh Đồ Ph&aacute;p</span></strong>
                                </span>
                            </h3>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Hiện tại đang l&agrave; thời kỳ B&aacute;t vận (2004 - 2023) do B&aacute;t bạch Thổ tinh cai quản c&oacute; con số chủ đạo l&agrave; số 8. Đồng thời, thời kỳ kế tiếp từ năm 2024 đến 2043 được sao Cửu Tử chủ quản c&oacute; số chủ đạo l&agrave; số 9. V&igrave; vậy, nếu d&atilde;y số điện thoại chứa số 8 v&agrave; 9 sẽ tốt, xuất hiện c&agrave;ng nhiều th&igrave; gi&aacute; trị c&agrave;ng tăng cao.&nbsp;</span></span>
                            </p>

                            <h3 dir="ltr" style="text-align:justify"><span style="font-size:16px"><strong><span style="font-family:arial,helvetica,sans-serif">5. Xem b&oacute;i qua số điện thoại theo bộ m&ocirc;n Quan niệm D&acirc;n Gian</span></strong>
                                </span>
                            </h3>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Đ&acirc;y l&agrave; yếu tố cuối c&ugrave;ng gi&uacute;p xem b&oacute;i sim điện thoại ch&iacute;nh x&aacute;c được luận giải th&ocirc;ng qua 2 phương diện bao gồm:&nbsp;</span></span>
                            </p>

                            <ul dir="ltr">
                                <li style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><strong>&nbsp;Tổng n&uacute;t:</strong> Sim số điện thoại c&oacute; điểm số trong khoảng từ 7 đến 10 điểm, số điểm c&agrave;ng cao th&igrave; sim c&agrave;ng tốt đẹp. Ngược lại nếu d&atilde;y sim c&oacute; tổng n&uacute;t thấp từ 1 - 4 điểm th&igrave; sẽ kh&ocirc;ng tốt, gặp nhiều điều xui rủi. C&ograve;n nếu d&atilde;y sim từ 5 - 6 điểm l&agrave; điểm b&igrave;nh h&ograve;a, cần kết hợp c&aacute;c yếu tố kh&aacute;c để kết luận d&atilde;y sim c&aacute;t hay hung.</span></span>
                                </li>
                                <li style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">&nbsp;<strong>Số điện thoại c&oacute; chứa c&aacute;c bộ số may mắn theo quan niệm d&acirc;n gian </strong>để tăng th&ecirc;m yếu tố số đẹp của sim: cặp Lộc ph&aacute;t 68 - 86, cặp &Ocirc;ng Địa 38 - 78, cặp Thần T&agrave;i 39 - 79, bộ tam hoa, bộ tứ qu&yacute;, lục qu&yacute;,...</span></span>
                                </li>
                            </ul>

                            <blockquote>
                                <p dir="ltr" style="text-align:justify"><em><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Tr&ecirc;n đ&acirc;y l&agrave; hướng dẫn c&aacute;ch xem b&oacute;i số điện thoại ch&iacute;nh x&aacute;c, chi tiết được đội ngũ chuy&ecirc;n gia phong thủy c&oacute; h&agrave;ng chục năm kinh nghiệm nghi&ecirc;n cứu. Tuy nhi&ecirc;n qu&yacute; bạn cần nắm vững nguy&ecirc;n l&yacute;, c&aacute;ch ứng dụng từng ti&ecirc;u ch&iacute;.</span></span></strong></em></p>
                            </blockquote>

                            <h2 dir="ltr" style="text-align:justify"><span style="font-size:18px"><strong><span style="font-family:arial,helvetica,sans-serif"><span id="iii-mot-so-phuong-phap-coi-b-oiso-dien-thoai-khong-chinh-xac">III. Một số phương ph&aacute;p coi b&oacute;i số điện thoại kh&ocirc;ng ch&iacute;nh x&aacute;c</span></span>
                                </strong>
                                </span>
                            </h2>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Việc b&oacute;i số điện thoại kh&ocirc;ng hề đơn giản, bởi hiện nay xuất hiện nhiều c&aacute;ch thức kh&aacute;c nhau với độ tin cậy chưa được kiểm chứng, g&acirc;y bối rối cho người sử dụng. Để c&oacute; phương hướng b&oacute;i ch&iacute;nh x&aacute;c xin mời qu&yacute; bạn lưu &yacute; một số c&aacute;ch b&oacute;i số điện thoại sai lầm khiến nhiều người lầm tưởng như sau:</span></span>
                            </p>

                            <h3 dir="ltr" style="text-align:justify"><span style="font-size:16px"><strong><span style="font-family:arial,helvetica,sans-serif">1. B&oacute;i số điện thoại theo &yacute; nghĩa c&aacute;c con số trong d&acirc;n gian</span></strong>
                                </span>
                            </h3>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">B&oacute;i sim theo quan niệm d&acirc;n gian l&agrave; c&aacute;ch luận giải từng số trong sim theo &yacute; nghĩa h&aacute;n - việt. &Yacute; nghĩa sim tốt hay xấu đều dựa v&agrave;o mức độ xuất hiện của c&aacute;c con số c&aacute;t v&agrave; hung theo d&acirc;n gian, v&iacute; dụ:</span></span>
                            </p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Nếu d&atilde;y sim xuất hiện 4 số tốt - 6 số xấu (số tốt &iacute;t hơn số xấu) th&igrave; d&atilde;y sim n&agrave;y c&oacute; &yacute; nghĩa kh&ocirc;ng tốt.</span></span>
                            </p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Nếu d&atilde;y sim xuất hiện 5 số tốt - 5 số xấu (số tốt c&acirc;n bằng với số xấu) th&igrave; d&atilde;y sim c&oacute; &yacute; nghĩa b&igrave;nh h&ograve;a, kh&ocirc;ng tốt kh&ocirc;ng xấu</span></span>
                            </p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Nếu d&atilde;y sim xuất hiện 6 số tốt - 4 số xấu (số tốt nhiều hơn số xấu) th&igrave; d&atilde;y sim n&agrave;y c&oacute; &yacute; nghĩa tốt.</span></span>
                            </p>

                            <p dir="ltr" style="text-align:justify"><em><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">&Yacute; nghĩa c&aacute;c số tốt - xấu từ 0 đến 9 theo nghĩa H&aacute;n - Việt được hiểu như sau:</span></span></strong></em></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Số 0: Đ&acirc;y l&agrave; nguồn gốc của khởi đầu mới, hai b&agrave;n tay trắng lập nghiệp.</span></span>
                            </p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Số 1: Tượng trưng cho những điều mới mẻ, cũng như đại diện cho sự mạnh mẽ v&agrave; đơn độc.</span></span>
                            </p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Số 2: Tượng trưng cho c&acirc;n bằng &acirc;m dương, hạnh ph&uacute;c trọn vẹn.</span></span>
                            </p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Số 3: Tượng trưng to&agrave;n t&agrave;i, to&agrave;n năng v&agrave; sự vững v&agrave;ng như kiềng 3 ch&acirc;n.</span></span>
                            </p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Số 4: Tượng trưng cho sự chết ch&oacute;c.</span></span>
                            </p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Số 5: Tượng trưng cho ph&uacute;c thọ d&agrave;i l&acirc;u.</span></span>
                            </p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Số 6: Tượng trưng cho t&agrave;i lộc đủ đầy, sự nghiệp thăng tiến.</span></span>
                            </p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Số 7: Tượng trưng cho sức mạnh đất trời, đẩy l&ugrave;i xui xẻo.</span></span>
                            </p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Số 8: Tượng trưng cho sự ph&aacute;t t&agrave;i, ph&aacute;t lộc v&agrave; ph&aacute;t triển thăng tiến.</span></span>
                            </p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Số 9: Tượng trưng cho sức mạnh v&agrave; quyền uy tối thượng.</span></span>
                            </p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Tuy nhi&ecirc;n c&aacute;ch n&agrave;y x&eacute;t về mặt phong thủy sim th&igrave; c&ograve;n nhiều thiếu s&oacute;t dẫn tới kết quả nhận được kh&ocirc;ng ch&iacute;nh x&aacute;c. Một v&agrave;i con số kh&ocirc;ng thể quyết định &yacute; nghĩa cả d&atilde;y sim, muốn b&oacute;i số điện thoại ch&iacute;nh x&aacute;c cần dựa v&agrave;o b&aacute;t tự ng&agrave;y th&aacute;ng năm sinh của người d&ugrave;ng c&ugrave;ng x&eacute;t tổng h&ograve;a 10 con số trong sim.</span></span>
                            </p>

                            <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><img alt="bói số điện thoại" src="https://simhoptuoi.com.vn/media/images/seolink/boi-so-dien-thoai%20(2).png" /></span></span><br
                                /> &nbsp;
                            </p>

                            <h3 dir="ltr" style="text-align:justify"><span style="font-size:16px"><strong><span style="font-family:arial,helvetica,sans-serif">2. Xem b&oacute;i số điện thoại tốt hay xấu theo 4 số cuối</span></strong>
                                </span>
                            </h3>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">C&aacute;ch luận giải &yacute; nghĩa số điện thoại theo bộ 4 số đu&ocirc;i c&oacute; c&aacute;ch sử dụng đơn giản, gần gũi cho n&ecirc;n được nhiều người sử dụng. Tuy vậy, độ ch&iacute;nh x&aacute;c kh&ocirc;ng cao, chỉ n&ecirc;n tham khảo, giải tr&iacute;. Theo 4 số cuối th&igrave; hiện nay c&oacute; nhiều c&aacute;ch để xem b&oacute;i sim tốt xấu như:</span></span>
                            </p>

                            <h4 dir="ltr" style="text-align:justify"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">2.1. B&oacute;i số điện thoại 4 số cuối theo ph&eacute;p chia 80</span></span></strong></h4>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">B&oacute;i sim theo ph&eacute;p chia 80 được hiểu l&agrave; lấy 4 số cuối điện thoại chia cho số 80, loại bỏ phần nguy&ecirc;n, lấy phần thập ph&acirc;n nh&acirc;n ngược với 80. Rồi đối s&aacute;nh với 80 linh số phong thủy, nếu tương ứng với linh số C&aacute;t, Đại C&aacute;t th&igrave; &yacute; nghĩa sim v&ocirc; c&ugrave;ng c&aacute;t l&agrave;nh, sử dụng sẽ gặp nhiều may mắn. B&ecirc;n cạnh đ&oacute;, nếu tương ứng với linh số Hung, Đại Hung th&igrave; &yacute; nghĩa sim xấu, kh&ocirc;ng may mắn nếu sử dụng. C&ograve;n nếu ứng với linh số B&igrave;nh H&ograve;a th&igrave; &yacute; nghĩa sim kh&ocirc;ng tốt kh&ocirc;ng xấu. Danh s&aacute;ch 80 con số phong thủy, mời qu&yacute; bạn xem tại: 80 linh số phong thủy hung - c&aacute;t?</span></span>
                            </p>

                            <p dir="ltr" style="text-align:justify"><em><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">V&iacute; dụ: B&oacute;i số điện thoại 0778291079 c&oacute; 4 số cuối l&agrave; 1079</span></span></strong></em></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Lấy 1079 chia 80 được 13,4875</span></span>
                            </p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Loại bỏ phần nguy&ecirc;n được 0,4875</span></span>
                            </p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Lấy 0,4875*80 được 39. Linh số 39 trong 80 con số phong thủy c&oacute; &yacute; nghĩa B&igrave;nh H&ograve;a n&ecirc;n d&atilde;y sim 0778291079 kh&ocirc;ng tốt kh&ocirc;ng xấu, chi&ecirc;m đo&aacute;n người sử dụng thời vận thịnh suy bất thường.&nbsp;</span></span>
                            </p>


                            <h4 dir="ltr" style="text-align:justify"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">2.2. B&oacute;i số điện thoại&nbsp;tốt xấu 4 số cuối theo quan niệm d&acirc;n gian&nbsp;</span></span></strong></h4>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">D&acirc;n gian truyền miệng rằng 4 số cuối l&agrave; những bộ số đẹp th&igrave; d&atilde;y sim đ&oacute; mang &yacute; nghĩa c&aacute;t lợi, sinh kh&iacute;. C&ograve;n nếu 4 số cuối xấu th&igrave; d&atilde;y sim kh&ocirc;ng may mắn, hung hiểm cho người sử dụng. Xem b&oacute;i số điện thoại theo 4 số cuối trong d&acirc;n gian c&oacute; thể kể đến những bộ số đẹp - xấu như:</span></span>
                            </p>

                            <p dir="ltr" style="text-align:justify"><em><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Danh s&aacute;ch 4 số đu&ocirc;i điện thoại đẹp:</span></span></strong></em></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Đu&ocirc;i 4 số cuối tứ qu&yacute;: l&agrave; những d&atilde;y c&oacute; đu&ocirc;i l&agrave; 4 số giống nhau đem tới t&agrave;i lộc, may mắn cho chủ sở hữu.</span></span>
                            </p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">V&iacute; dụ:&nbsp;</span></span>
                            </p>

                            <ul>
                                <li dir="ltr">
                                    <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Đu&ocirc;i sim 33333: Đại diện t&agrave;i năng vượt trội, sự nghiệp hanh th&ocirc;ng, quan lộ hiển đạt.&nbsp;</span></span>
                                    </p>
                                </li>
                                <li dir="ltr">
                                    <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Đu&ocirc;i sim 6666: Đại diện cho t&agrave;i lộc vượng ph&aacute;t, kinh doanh bu&ocirc;n b&aacute;n sở cầu như &yacute;.&nbsp;&nbsp;</span></span>
                                    </p>
                                </li>
                                <li dir="ltr">
                                    <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Đu&ocirc;i sim 8888: Đại diện cho ph&uacute;c lộc bền l&acirc;u, l&agrave;m ăn ph&aacute;t t&agrave;i ph&aacute;t lộc.</span></span>
                                    </p>
                                </li>
                            </ul>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Sim đu&ocirc;i 4 số đẹp theo &yacute; nghĩa d&acirc;n gian: l&agrave; những bộ số được gh&eacute;p lại với nhau biểu thị c&aacute;t lợi, tốt l&agrave;nh theo quan niệm d&acirc;n gian.</span></span>
                            </p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">V&iacute; dụ:</span></span>
                            </p>

                            <ul>
                                <li dir="ltr">
                                    <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Đu&ocirc;i số 1368: Biểu thị sinh t&agrave;i lộc ph&aacute;t, trọn đời lộc ph&aacute;t.</span></span>
                                    </p>
                                </li>
                                <li dir="ltr">
                                    <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Đu&ocirc;i số 6789: Biểu thị san bằng tất cả, sống bằng t&igrave;nh cảm.</span></span>
                                    </p>
                                </li>
                                <li dir="ltr">
                                    <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Đu&ocirc;i số 6688: Biểu thị song lộc, song ph&aacute;t.</span></span>
                                    </p>
                                </li>
                            </ul>

                            <p dir="ltr" style="text-align:justify"><em><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Danh s&aacute;ch 4 số đu&ocirc;i điện thoại xấu: Những bộ số đặc biệt kết hợp với nhau c&oacute; &yacute; nghĩa kh&ocirc;ng may mắn, xui xẻo.</span></span></strong></em></p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">V&iacute; dụ:&nbsp;</span></span>
                            </p>

                            <ul>
                                <li dir="ltr">
                                    <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Đu&ocirc;i số 7749: Tương ứng hậu vận bế tắc.</span></span>
                                    </p>
                                </li>
                                <li dir="ltr">
                                    <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Đu&ocirc;i số 4953: Tương ứng hậu họa kh&ocirc;ng lường hay 49 chưa qua 53 đ&atilde; tới.</span></span>
                                    </p>
                                </li>
                                <li dir="ltr">
                                    <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Đu&ocirc;i số 1353: Tương ứng c&ocirc;ng việc c&oacute; tiểu nh&acirc;n ph&aacute; hoại, sức khỏe suy giảm.</span></span>
                                    </p>
                                </li>
                            </ul>

                            <h3 dir="ltr" style="text-align:justify"><span style="font-size:18px"><strong><span style="font-family:arial,helvetica,sans-serif">3. Xem b&oacute;i số điện thoại theo 64 quẻ Kinh Dịch</span></strong>
                                </span>
                            </h3>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Xem b&oacute;i bằng số điện thoại dựa v&agrave;o 64 quẻ dịch l&agrave; c&aacute;ch b&oacute;i được một số nơi &aacute;p dụng. Tuy nhi&ecirc;n những&nbsp; địa chỉ n&agrave;y đang thần th&aacute;nh qu&aacute; yếu tố Kinh Dịch trong khi đ&acirc;y chỉ l&agrave; một trong những yếu tố trọng yếu để xem &yacute; nghĩa sim. Đặc điểm chung của những địa chỉ n&agrave;y l&agrave; chỉ cần &aacute;p dụng DUY NHẤT kinh dịch l&agrave; qu&aacute; đủ để việc b&oacute;i số điện thoại ch&iacute;nh x&aacute;c. Lấy 5 số đầu được x&aacute;c định Nội Qu&aacute;i, 5 số cuối để x&aacute;c định Ngoại Qu&aacute;i. Gh&eacute;p Nội Qu&aacute;i v&agrave; Ngoại Qu&aacute;i t&igrave;m quẻ dịch đại diện cho d&atilde;y sim rồi x&eacute;t &yacute; nghĩa để luận &yacute; hung c&aacute;t của quẻ để kết luận d&atilde;y sim ảnh hưởng đến mệnh chủ tốt hay xấu, ảnh hưởng về phương diện g&igrave; trong cuộc sống.&nbsp;</span></span>
                            </p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">T&oacute;m lại, b&oacute;i số điện thoại theo 64 quẻ Kinh Dịch tuy đ&aacute;nh gi&aacute; được &yacute; nghĩa hung c&aacute;t trong nhiều phương diện cuộc sống nhưng chưa đủ. Cần kết hợp b&aacute;t tự ng&agrave;y th&aacute;ng năm sinh theo c&aacute;c yếu tố phong thủy kh&aacute;c mới thực sự chấm điểm d&atilde;y số ch&iacute;nh x&aacute;c.</span></span>
                            </p>

                            <h3 dir="ltr" style="text-align:justify"><span style="font-size:16px"><strong><span style="font-family:arial,helvetica,sans-serif">4. B&oacute;i số điện thoại theo Du Ni&ecirc;n</span></strong>
                                </span>
                            </h3>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Xem b&oacute;i số điện thoại theo Du Ni&ecirc;n tức l&agrave; chia 10 số trong sim th&agrave;nh 5 cặp số li&ecirc;n tiếp. Sau đ&oacute; tiến h&agrave;nh đối chiếu c&aacute;c cặp số n&agrave;y với t&aacute;m sao trong du ni&ecirc;n để luận giải hung c&aacute;t. Tức l&agrave;:</span></span>
                            </p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">+ Nếu d&atilde;y sim c&oacute; nhiều cặp số tương ứng với c&aacute;c sao Tốt (&gt;3 cặp)&nbsp; hơn sao Xấu (&lt;2 cặp) th&igrave; nội tại sim h&agrave;i h&ograve;a, c&aacute;t l&agrave;nh.&nbsp;</span></span>
                            </p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">+ Nếu sim c&oacute; nhiều cặp số đại diện sao Xấu (&gt;3 cặp) hơn sao Tốt (&lt;2 cặp) th&igrave; nội tại sim hung hiểm, kh&ocirc;ng may mắn nếu sử dụng.&nbsp;</span></span>
                            </p>

                            <p dir="ltr" style="text-align:justify"><em><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Cụ thể:&nbsp;</span></span></strong></em></p>

                            <ul>
                                <li dir="ltr">
                                    <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">C&aacute;c cặp số thuộc sao tốt Thi&ecirc;n Y: 31, 49, 72, 86, 13, 27, 94, 68</span></span>
                                    </p>
                                </li>
                                <li dir="ltr">
                                    <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">C&aacute;c cặp số thuộc sao tốt Ph&uacute;c Đức: 26, 78, 43, 87, 19, 34, 62, 91</span></span>
                                    </p>
                                </li>
                                <li dir="ltr">
                                    <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">C&aacute;c cặp số thuộc sao tốt Sinh Kh&iacute;: 39, 67, 41, 76, 82, 14, 28, 93</span></span>
                                    </p>
                                </li>
                                <li dir="ltr">
                                    <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">C&aacute;c cặp số thuộc sao tốt Phục Vị: 44, 66, 88, 11, 77, 22, 88, 99</span></span>
                                    </p>
                                </li>
                                <li dir="ltr">
                                    <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">C&aacute;c cặp số thuộc sao xấu Lục S&aacute;t: 16, 38, 47, 61, 74, 29, 92, 83</span></span>
                                    </p>
                                </li>
                                <li dir="ltr">
                                    <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">C&aacute;c cặp số thuộc sao xấu Tuyệt Mệnh: 21, 48, 69, 73, 84, 12, 37, 96</span></span>
                                    </p>
                                </li>
                                <li dir="ltr">
                                    <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">C&aacute;c cặp số thuộc sao xấu Ngũ Quỷ: 36, 42, 63, 79, 18, 24, 81, 97</span></span>
                                    </p>
                                </li>
                                <li dir="ltr">
                                    <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">C&aacute;c cặp số thuộc sao xấu Họa Hại: 46, 32, 64, 71, 17, 23, 89, 98</span></span>
                                    </p>
                                </li>
                            </ul>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">B&oacute;i số điện thoại theo Du Ni&ecirc;n c&ograve;n nhiều hạn chế v&igrave; chưa đ&aacute;nh gi&aacute; được t&aacute;c động qua lại giữa to&agrave;n bộ d&atilde;y số cũng như giữa sim với bản mệnh người d&ugrave;ng. Cũng như Du Ni&ecirc;n B&aacute;t Biến trong phong thủy chỉ được sử dụng trong Dương Trạch v&agrave; &Acirc;m Trạch, thực sự qu&aacute; khi&ecirc;n cưỡng nếu sử dụng Du Ni&ecirc;n v&agrave;o b&oacute;i số điện thoại.</span></span>
                            </p>

                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Như vậy, <strong>xem b&oacute;i số điện thoại</strong> sẽ gi&uacute;p người d&ugrave;ng biết được d&atilde;y sim c&oacute; hợp với bản mệnh hay kh&ocirc;ng từ đ&oacute; c&oacute; những phương hướng sử dụng ph&ugrave; hợp gi&uacute;p h&oacute;a giải vận hạn, chi&ecirc;u t&agrave;i rước lộc. Tuy nhiều phương ph&aacute;p gi&uacute;p x&aacute;c định &yacute; nghĩa số điện thoại kh&aacute;c nhau nhưng dựa tr&ecirc;n 5 yếu tố về: Ngũ h&agrave;nh - Kinh Dịch - &Acirc;m Dương - Cửu Tinh - Quan niệm d&acirc;n gian mới ch&iacute;nh x&aacute;c nhất.&nbsp;</span></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- text trên -->
    </section>
    @endif

</section>
@endsection
