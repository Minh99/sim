
@extends('app')

@section('title', 'Sim hợp tuổi 2000 - Bí quyết chọn sim phong thủy hút vận may & tài lộc')

@section('content')
    <section class="contentPage">
        <h1 class="title_h1">Sim hợp tuổi Canh Dần 1950</h1>
        <input type="hidden" name="url_string" value="sim-hop-tuoi-canh-dan-1950/205">
        <div class="bodyPage">
            <div class="siteBodyContent">
                <div class="row">
                    <div class="col-md-12">
                        <p dir="ltr" style="text-align: justify;"><span style="color:#FF0000"><span style="font-size:16px"><span style="font-family:times new roman,times,serif"><strong>1. Nguyên lý chọn sim phong thủy hợp tuổi 1950:</strong></span></span></span></p>

                        <p dir="ltr" style="text-align: justify;"><span style="color:#000000"><span style="font-size:16px"><span style="font-family:times new roman,times,serif">Con người trong xã hội hiện đại để vươn tới tầm cao công danh, xán lạn sự nghiệp, <span id="-">&nbsp;</span>hòa thuận gia đạo, bền vững sức khỏe,... rất nhiều người đã sử dụng biện pháp hỗ trợ vận khí, trong đó có sử dụng sim phong thủy hợp tuổi.</span></span></span></p>

                        <p dir="ltr" style="text-align: justify;"><span style="color:#000000"><span style="font-size:16px"><span style="font-family:times new roman,times,serif">Người sinh năm 1950 tuổi Canh Dần, có ngũ hành mệnh Mộc (Tùng Bách Mộc). Người tuổi này Dương mạng nạp âm sẽ cho bản mệnh vận khí tốt lành. Tiêu chuẩn dãy sim hợp tuổi 1950 cần có bao gồm: </span></span></span></p>


                        <p dir="ltr" style="text-align: justify;"><span style="color:#000000"><span style="font-size:16px"><span style="font-family:times new roman,times,serif">1. “Nhất Âm, nhất Dương âu nhất đạo lớn”. Dãy sim thông thường sẽ là chuỗi con số chẵn lẻ. Vì tuổi Canh Dần mạng Dương nên tạo thế cân bằng tốt nhất bằng nhiều con số lẻ. Sự xuất hiện càng nhiều số lẻ tạo nên âm dương tương hỗ cân bằng thỏa mãn cả lý luận và thực tiễn. </span></span></span></p>


                        <p dir="ltr" style="text-align: justify;"><span style="color:#000000"><span style="font-size:16px"><span style="font-family:times new roman,times,serif">2. Những người tuổi 1950 mệnh Mộc, gặp các con số thuộc mệnh Thủy (Thủy sinh Mộc) và mệnh Mộc mọi việc sẽ tốt đẹp, chảy trôi hơn nhiều. Số hợp mệnh Mộc là số 3, số 4. Số hợp mệnh Thủy là số 0, số 1. Số thuộc hành mệnh tương sinh thì dung dưỡng bản mệnh. Số thuộc hành mệnh thì tương hòa với bản mệnh Mộc của người sinh năm này.</span></span></span></p>


                        <p dir="ltr" style="text-align: justify;"><span style="color:#000000"><span style="font-size:16px"><span style="font-family:times new roman,times,serif">3. Chúng ta đang sống trong thời kỳ 8 Hạ Nguyên tức là năm 2004 đến năm 2023. Do vậy chọn sim phong thủy hợp tuổi 1950 là các sao Bát Bạch sẽ vượng khí. Những con số lý tưởng sinh khí trong thời kỳ này là số 8, số 9. </span></span></span></p>


                        <p dir="ltr" style="text-align: justify;"><span style="color:#000000"><span style="font-size:16px"><span style="font-family:times new roman,times,serif">Do vậy, chọn số điện thoại hợp tuổi 1950 ưu tiên số 0, số 1, số 3, số 4. Ngoài ra, cần kết hợp với những yếu tố khác trong sim như quẻ dịch, tứ trụ, cặp số may mắn,... Để nhanh chóng sở hữu dãy sim hợp tuổi 1950 tốt lành đừng bỏ qua gợi ý danh sách bảng sim ngay dưới đây bạn nhé!</span></span></span></p>


                        <h2 dir="ltr" style="text-align: justify; margin-bottom: 1.3em; border-bottom: 2px solid rgb(22, 51, 87);"><span style="color:#FF0000"><strong><span style="font-size:16px"><span style="font-family:times new roman,times,serif">2.<span id="-">&nbsp;</span>Tra cứu sim phong thủy hợp tuổi 1950:</span></span></strong></span></h2>


                        <p dir="ltr" style="text-align: justify;"><span style="color:#000000"><span style="font-size:16px"><span style="font-family:times new roman,times,serif">Mặc dù bạn đã biết nguyên lý chọn sim phong thủy hợp với tuổi mình, nhưng để chọn được sim phù hợp nhất còn phải dựa vào ngày tháng năm sinh, giới tính, giờ sinh,... nên bạn hãy hãy nhập thông tin <span id="-">&nbsp;</span>ngày tháng năm sinh vào box tra dưới đây.</span></span></span></p>                    </div>
                </div>
            </div>
        </div>

        <p class="h3 text-center">Bảng sim hợp tuổi 1950</p>
        <!-- khi vào link page sẽ tự động scroll xuống phần bảng sim -->
        @if (count($data) > 0)
            <div class="nopadding sim_collection">
                <section class="list_sim">
                    <div class="row listSim list_sim_item">
                        @foreach ($data as $item)
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

        <div class="bodyPage">
            <div class="siteBodyContent">
                <div class="row">
                    <div class="col-md-12">
                        <h3><strong><span style="font-size:16px"><span style="font-family:times new roman,times,serif">Cách kiểm tra số điện thoại tốt hay xấu</span></span></strong></h3>

                        <p><span style="font-size:16px"><span style="font-family:times new roman,times,serif">Bạn đã thử qua công cụ trực tuyến nào để kiểm tra sim – số điện thoại bạn đang dùng có hợp tuổi, hợp mệnh với mình chưa. Rất đơn giản và nhanh chóng, chỉ với một vài thao tác, bạn có thể có ngay kết quả về con số hợp tuổi 1950, số điện thoại hợp với tuổi Canh Dần cũng như những tuổi khác là bao nhiêu điểm. Cùng tham khảo cách mà <em>{{ $nameSite }} </em> đưa dưới đây nhé.</span></span></p>


                        <h3><strong><span style="font-size:16px"><span style="font-family:times new roman,times,serif">·Cách kiểm tra Sim – Số điện thoại bạn đang dùng có hợp tuổi 1950 không?</span></span></strong></h3>

                        <p><span style="font-size:16px"><span style="font-family:times new roman,times,serif"><strong>Bước 1: Tiếp cận công cụ tra sim phong thủy hợp tuổi trực tuyến</strong></span></span></p>

                        <p><span style="font-size:16px"><span style="font-family:times new roman,times,serif">Sau <span id="-">&nbsp;</span>khi bạn truy cập vào Website: <a href="{{ route('home') }}">{{ $nameSite  }}</a> , bạn theo đường dẫn tới danh mục: <a href="{{ route('boi-sim') }}"><span id="-">&nbsp;</span><strong>Xem Bói Số Điện Thoại</strong></a></span></span></p>


                        <p><span style="font-size:16px"><span style="font-family:times new roman,times,serif"><strong>Bước 2: Bạn nhập thông tin cần thiết có trong từng ô mục trống như:</strong></span></span></p>

                        <p><span style="font-size:16px"><span style="font-family:times new roman,times,serif">- <span id="-">&nbsp;</span><span id="-">&nbsp;</span><span id="-">&nbsp;</span><span id="-">&nbsp;</span><span id="-">&nbsp;</span><span id="-">&nbsp;</span><span id="-">&nbsp;</span><span id="-">&nbsp;</span><span id="-">&nbsp;</span> Số điện thoại bạn đang dùng ( số điện thoại bạn yêu thích hay sim số đẹp bạn đang có ý định muốn mua ) vào mục Nhập số điện thoại.</span></span></p>

                        <p><span style="font-size:16px"><span style="font-family:times new roman,times,serif">- <span id="-">&nbsp;</span><span id="-">&nbsp;</span><span id="-">&nbsp;</span><span id="-">&nbsp;</span><span id="-">&nbsp;</span><span id="-">&nbsp;</span><span id="-">&nbsp;</span><span id="-">&nbsp;</span><span id="-">&nbsp;</span> Nhập thông tin ngày tháng năm sinh (theo Dương lịch ) của bạn vào mục Ngày sinh của bạn.</span></span></p>

                        <p><span style="font-size:16px"><span style="font-family:times new roman,times,serif">- <span id="-">&nbsp;</span><span id="-">&nbsp;</span><span id="-">&nbsp;</span><span id="-">&nbsp;</span><span id="-">&nbsp;</span><span id="-">&nbsp;</span><span id="-">&nbsp;</span><span id="-">&nbsp;</span><span id="-">&nbsp;</span> Mục giới tính, bạn lựa chọn Nam hoặc Nữ theo thanh cuộn đã có.</span></span></p>

                        <p><span style="font-size:16px"><span style="font-family:times new roman,times,serif">- <span id="-">&nbsp;</span><span id="-">&nbsp;</span><span id="-">&nbsp;</span><span id="-">&nbsp;</span><span id="-">&nbsp;</span><span id="-">&nbsp;</span><span id="-">&nbsp;</span><span id="-">&nbsp;</span><span id="-">&nbsp;</span> Mục giờ sinh bạn chọn chính xác theo cung giờ sinh của bạn thì độ chuẩn xác của kết quả trả về sẽ cao hơn</span></span></p>


                        <p><span style="font-size:16px"><span style="font-family:times new roman,times,serif"><strong>Bước 3: Xem kết quả <span id="-">&nbsp;</span>- Xem sim hợp với tuổi của bạn được bao nhiêu điểm</strong></span></span></p>

                        <p><span style="font-size:16px"><span style="font-family:times new roman,times,serif">Sau khi nhập hết các thông tin tại bước 2, bạn nhấp chuột vào mục Xem ở bên cạnh, kết quả sẽ trả về cho bạn hoàn toàn đầy đủ, bạn kéo chuột xuống và đọc các thông tin vừa kiểm tra được nhé.</span></span></p>


                        <h3><strong><span style="font-size:16px"><span style="font-family:times new roman,times,serif">·Chọn sim hợp tuổi Canh Dần 1950</span></span></strong></h3>

                        <p><span style="font-size:16px"><span style="font-family:times new roman,times,serif">Bạn đã kiểm tra số điện thoại của mình, thấy sim bạn dùng không hợp tuổi với bạn? thật tệ nếu như điểm số trả về còn dưới mức trung bình. Bạn có ý định muốn tìm kiếm những sim phong thủy khác hợp với tuổi hợp với mệnh của mình hơn? Xem ngay sim hợp tuổi 1950, số điện thoại hợp tuổi 1950 ngay dựa vào ngày tháng năm sinh.</span></span></p>


                        <h3><strong><span style="font-size:16px"><span style="font-family:times new roman,times,serif">·Tìm sim hợp tuổi dựa theo ngày tháng năm sinh:</span></span></strong></h3>

                        <p><span style="font-size:16px"><span style="font-family:times new roman,times,serif"><strong>Bước 1: </strong>Truy cập danh mục: <span id="-">&nbsp;</span><a href="{{ route('boi-sim') }}"><strong>Xem sim phong thủy</strong></a></span></span></p>

                        <p><span style="font-size:16px"><span style="font-family:times new roman,times,serif"><strong>Bước 2</strong>: Bạn nhập các thông tin ngày tháng năm sinh theo lịch dương, chọn giới tính, giờ sinh sẽ mang đến kết quả chuẩn xác hơn.</span></span></p>

                        <p><span style="font-size:16px"><span style="font-family:times new roman,times,serif"><strong>Bước 3:</strong> Bước cuối cùng, nhấp chuột vào Xem kết quả, bảng số sim hợp tuổi kèm theo thông tin về Phối quẻ dịch bát quái, điểm số chi tiết nhất sẽ xuất hiện.</span></span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
