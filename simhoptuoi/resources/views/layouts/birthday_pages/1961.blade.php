
@extends('app')

@section('title')
 Sim hợp tuổi {{ $slug }} - Bí quyết chọn sim phong thủy hút vận may & tài lộc
@endsection

@section('content')
    <section class="contentPage">
        <h1 class="title_h1">Sim hợp tuổi Tân Sửu 1961</h1>

        <input type="hidden" name="url_string" value="sim-hop-tuoi-tan-suu-1961/171">
        <div class="bodyPage">
            <div class="siteBodyContent">
                <div class="row">
                    <div class="col-md-12">
                        <h2 dir="ltr" style="text-align: justify; margin-bottom: 1.3em; border-bottom: 2px solid rgb(22, 51, 87);"><span style="color:#FF0000"><span style="font-size:16px"><span style="font-family:times new roman,times,serif"><strong><span id="1-nguyen-ly-chon-sim-hop-tuoi-1961">1. Nguyên lý chọn sim hợp tuổi 1961:</span></strong></span></span></span></h2>



                        <p style="text-align: justify;"><span style="font-size:16px"><span style="font-family:times new roman,times,serif">Mọi vật tuân theo quy luật của tự nhiên mà vận động. Quy luật đó không bị nhiễu loạn cũng không bị xô lệch. Sim hợp tuổi cũng thế. Sim hợp tuổi tuân thủ theo những quy luật rõ ràng. Đó là phải hợp mệnh, mối quan hệ bản mệnh và dãy sim sinh vượng.</span></span></p>



                        <p dir="ltr" style="text-align: justify;"><span style="font-size:16px"><span style="font-family:times new roman,times,serif">Mỗi người sinh ra có năm sinh thuộc hành mệnh nhất định. Kim - Mộc - Thủy - Hỏa -Thổ. Người tuổi 1961 có năm sinh thuộc mệnh Thổ, chọn sim hợp tuổi 1961 ắt chọn sim hợp mệnh Thổ. Số điện thoại hợp mệnh Thổ sẽ ẩn chứa nguồn năng lượng mệnh Thổ sinh khí dồi dào, vạn sự hanh thông, cát lợi.</span></span></p>



                        <p dir="ltr" style="text-align: justify;"><span style="font-size:16px"><span style="font-family:times new roman,times,serif">Gốc ngọn của vinh - nhục, sinh - diệt, thành - bại của nhân gian đều do quan hệ bổn trạch Âm - Dương sinh xuất, khắc nhập để phát sinh, biến hóa. Dương là tích cực, cứng cỏi, nhiệt liệt. Âm là lạnh nhạt, là nhu nhược,... Hai thế lực này tác động lẫn nhau tạo những lợi ích cho con người. Bởi thế cân bằng bản mệnh với dãy sim là tất yếu không thể bỏ qua. Tuổi 1961 Âm mạng nên sim hợp tuổi 1961 phải hòa hợp với Âm mạng của người tuổi này. Dãy sim càng vượng Dương càng tốt. Hợp mệnh khi kết hợp cân bằng tất thảy sẽ là nền tảng vững chắc giúp hành động luôn được bổ trợ từ kế hoạch tới thành công cuối cùng.</span></span></p>



                        <p dir="ltr" style="text-align: justify;"><span style="font-size:16px"><span style="font-family:times new roman,times,serif">Dưới đây là danh sách sim điện thoại hợp tuổi 1961 tổ hợp đầy đủ những yếu tố tiên quyết tích vượng khí đương vận trên cho người sinh năm 1961. Không mất nhiều công sức luận giải sim phức tạp, với danh sách sim này việc lựa chọn dãy sim hợp tuổi, hợp mệnh 1961 như ý muốn hoàn toàn nằm trong tầm tay bạn.</span></span></p>



                        <h2 dir="ltr" style="text-align: justify; margin-bottom: 1.3em; border-bottom: 2px solid rgb(22, 51, 87);"><span style="color:#FF0000"><span style="font-size:16px"><span style="font-family:times new roman,times,serif"><strong><span id="2-tra-cuu-sim-phong-thuy-hop-tuoi-tan-suu-1961-">2. Tra cứu sim phong thủy hợp tuổi Tân Sửu (1961):</span></strong></span></span></span></h2>



                        <p dir="ltr" style="text-align: justify;"><span style="font-size:16px"><span style="font-family:times new roman,times,serif">Mặc dù bạn đã biết những nguyên lý chọn sim phong thủy hợp tuổi 1961&nbsp;nhưng để có thể có kết quả sim phong thủy hợp tuổi chính xác nhất và phù hợp với nhu cầu của bạn, bạn hãy hãy nhập thông tin&nbsp; ngày tháng năm sinh vào box tra dưới đây.</span></span><br>
                            &nbsp;</p>                    </div>
                </div>
            </div>
        </div>




        <p class="h3 text-center">Bảng sim hợp tuổi 1961</p>


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

                        <p><span style="font-size:16px"><span style="font-family:times new roman,times,serif">Bạn đã thử qua công cụ trực tuyến nào để kiểm tra sim – số điện thoại bạn đang dùng có hợp tuổi, hợp mệnh với mình chưa. Rất đơn giản và nhanh chóng, chỉ với một vài thao tác, bạn có thể có ngay kết quả về con số hợp tuổi 1961, số điện thoại hợp với tuổi Tân Sửu cũng như những tuổi khác là bao nhiêu điểm. Cùng tham khảo cách mà <em>{{ $nameSite }} </em> đưa dưới đây nhé.</span></span></p>



                        <h3><strong><span style="font-size:16px"><span style="font-family:times new roman,times,serif">·Cách kiểm tra Sim – Số điện thoại bạn đang dùng có hợp tuổi 1961 không?</span></span></strong></h3>

                        <p><span style="font-size:16px"><span style="font-family:times new roman,times,serif"><strong>Bước 1: Tiếp cận công cụ tra sim phong thủy hợp tuổi trực tuyến</strong></span></span></p>

                        <p><span style="font-size:16px"><span style="font-family:times new roman,times,serif">Sau &nbsp;khi bạn truy cập vào Website: <a href="{{ route('home') }}">{{ $nameSite }} </a> , bạn theo đường dẫn tới danh mục: <a href="{{ route('boi-sim') }}">&nbsp;<strong>Xem Bói Số Điện Thoại</strong></a></span></span></p>



                        <p><span style="font-size:16px"><span style="font-family:times new roman,times,serif"><strong>Bước 2: Bạn nhập thông tin cần thiết có trong từng ô mục trống như:</strong></span></span></p>

                        <p><span style="font-size:16px"><span style="font-family:times new roman,times,serif">- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Số điện thoại bạn đang dùng ( số điện thoại bạn yêu thích hay sim số đẹp bạn đang có ý định muốn mua ) vào mục Nhập số điện thoại.</span></span></p>

                        <p><span style="font-size:16px"><span style="font-family:times new roman,times,serif">- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nhập thông tin ngày tháng năm sinh (theo Dương lịch ) của bạn vào mục Ngày sinh của bạn.</span></span></p>

                        <p><span style="font-size:16px"><span style="font-family:times new roman,times,serif">- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mục giới tính, bạn lựa chọn Nam hoặc Nữ theo thanh cuộn đã có.</span></span></p>

                        <p><span style="font-size:16px"><span style="font-family:times new roman,times,serif">- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mục giờ sinh bạn chọn chính xác theo cung giờ sinh của bạn thì độ chuẩn xác của kết quả trả về sẽ cao hơn</span></span></p>



                        <p><span style="font-size:16px"><span style="font-family:times new roman,times,serif"><strong>Bước 3: Xem kết quả &nbsp;- Xem sim hợp với tuổi của bạn được bao nhiêu điểm</strong></span></span></p>

                        <p><span style="font-size:16px"><span style="font-family:times new roman,times,serif">Sau khi nhập hết các thông tin tại bước 2, bạn nhấp chuột vào mục Xem ở bên cạnh, kết quả sẽ trả về cho bạn hoàn toàn đầy đủ, bạn kéo chuột xuống và đọc các thông tin vừa kiểm tra được nhé.</span></span></p>



                        <h3><strong><span style="font-size:16px"><span style="font-family:times new roman,times,serif">·Chọn sim hợp tuổi Tân Sửu 1961</span></span></strong></h3>

                        <p><span style="font-size:16px"><span style="font-family:times new roman,times,serif">Bạn đã kiểm tra số điện thoại của mình, thấy sim bạn dùng không hợp tuổi với bạn? thật tệ nếu như điểm số trả về còn dưới mức trung bình. Bạn có ý định muốn tìm kiếm những sim phong thủy khác hợp với tuổi hợp với mệnh của mình hơn? Xem ngay sim hợp tuổi 1961, số điện thoại hợp tuổi 1961 ngay dựa vào ngày tháng năm sinh.</span></span></p>



                        <h3><strong><span style="font-size:16px"><span style="font-family:times new roman,times,serif">·Tìm sim hợp tuổi dựa theo ngày tháng năm sinh:</span></span></strong></h3>

                        <p><span style="font-size:16px"><span style="font-family:times new roman,times,serif"><strong>Bước 1: </strong>Truy cập danh mục: &nbsp;<a href="{{ route('boi-sim') }}"><strong>Xem sim phong thủy</strong></a></span></span></p>

                        <p><span style="font-size:16px"><span style="font-family:times new roman,times,serif"><strong>Bước 2</strong>: Bạn nhập các thông tin ngày tháng năm sinh theo lịch dương, chọn giới tính, giờ sinh sẽ mang đến kết quả chuẩn xác hơn.</span></span></p>

                        <p><span style="font-size:16px"><span style="font-family:times new roman,times,serif"><strong>Bước 3:</strong> Bước cuối cùng, nhấp chuột vào Xem kết quả, bảng số sim hợp tuổi kèm theo thông tin về Phối quẻ dịch bát quái, điểm số chi tiết nhất sẽ xuất hiện.</span></span></p>


                    </div>
                </div>
            </div>
        </div>
        

    </section>
@endsection
