@extends('app')

@section('title')
 Sim hợp tuổi {{ $slug }} - Bí quyết chọn sim phong thủy hút vận may & tài lộc
@endsection

@section('content')
    <section class="contentPage">
        <h1 class="title_h1">Tuổi Canh Tuất xài số điện thoại nào tốt để tăng cường vận may?</h1>

        <input type="hidden" name="url_string" value="Chon-sim-hop-tuoi-1970-mang-lai-nhieu-may-man/141">
        <div class="bodyPage">
            <div class="siteBodyContent">
                <div class="row">
                    <div class="col-md-12">
                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">Nguyên do nên xem <strong><u>tuổi canh
                                            tuất xài số điện thoại nào tốt</u> </strong>bởi vì sim phong thủy hợp tuổi 1970
                                    được coi là một vật phẩm phong thủy đắc lực, vừa có tác dụng đẩy lùi vận hạn, kích cầu
                                    may mắn lại vừa giúp chủ sở hữu tự tin hơn khi sử dụng. Chính vì lý do này, không ít nam
                                    nữ sinh năm 1970 tìm kiếm và sở hữu riêng một chiếc số điện thoại hợp tuổi 1970. Sau đây
                                    là một vài phương pháp giúp lựa chọn số điện thoại hợp tuổi xin mời quý bạn Canh Tuất
                                    tham khảo.&nbsp;</span></span></p>
                    </div>
                </div>
            </div>
        </div>




        <p class="h3 text-center">Bảng sim hợp tuổi 1970</p>


        <!-- khi vào link page sẽ tự động scroll xuống phần bảng sim -->
        @if (count($data) > 0)
            <div class="nopadding sim_collection">
                <section class="list_sim">
                    <div class="row listSim list_sim_item">
                        @foreach ($data as $item)
                            @php
                                $logo_nha_mang = 'common/templates/site/images/icon/1.gif';
                                if ($item['nha_mang'] == 'mobi') {
                                    $logo_nha_mang = 'common/templates/site/images/icon/3.gif';
                                } elseif ($item['nha_mang'] == 'vinaphone') {
                                    $logo_nha_mang = 'common/templates/site/images/icon/2.gif';
                                } elseif ($item['nha_mang'] == 'gmobile') {
                                    $logo_nha_mang = 'common/templates/site/images/icon/5.gif';
                                } elseif ($item['nha_mang'] == 'vietnamobile') {
                                    $logo_nha_mang = 'common/templates/site/images/icon/4.gif';
                                }
                            @endphp
                            <div class="col-6 col-sm-6 col-md-6">
                                <div class="main_box_sim_item">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-6">
                                            <p class="so"><a
                                                    href="{{ route('detail-sim', ['sdt' => $item['sdt']]) }}">{{ $item['sdt'] }}</a>
                                            </p>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 logoNhaMang"><img alt=""
                                                src="{{ asset($logo_nha_mang) }}" /></div>
                                    </div>
                                    <p class="vuong"><strong>Điểm phong thủy sim: </strong> {{ $item['diem_phong_thuy'] }}
                                    </p>
                                    <p class="price"><b>Giá: </b>{{ $item['gia_ban'] }}</p>
                                    <p class="que"><strong>Sim ngũ hành: </strong> <span
                                            class="nguhanh">{{ $item['ngu_hanh'] }}</span></p>
                                    <p class="yn"><strong>Quẻ Kinh dịch: </strong>{{ $item['que'] }}</p>
                                    <div class="row">
                                        <div class="col-6 col-sm-6 col-md-6">
                                            <p class="btnmua"><a href="{{ route('detail-sim', ['sdt' => $item['sdt']]) }}"
                                                    class="btn_mua">Chi tiết <b>>></b></a></p>
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
                        <h2 dir="ltr"
                            style="text-align: justify; margin-bottom: 1.3em; border-bottom: 2px solid rgb(22, 51, 87);">
                            <span style="color:#FF0000"><strong><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif"><span
                                                id="1-vai-net-ve-nguoi-tuoi-canh-tuat">1. Vài nét về người tuổi Canh
                                                Tuất</span></span></span></strong></span></h2>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">Người sinh năm 1970 thuộc thiên can Canh,
                                    địa chi Tuất, ngũ hành mệnh Kim, nạp âm Thoa Xuyến Kim. Những người tuổi này được đánh
                                    giá là có tư chất thông minh, bản tính ngay thẳng, cương trực, sống nhân nghĩa và giàu
                                    lòng vị tha.&nbsp;</span></span></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">Trong công việc, họ rất có trách nhiệm,
                                    giỏi tính toán cho nên dễ dàng gặt hái được những thành quả như mong đợi. Tuy nhiên, nam
                                    nữ Canh Tuất có nhược điểm là hay suy nghĩ xa xôi cho nên tinh thần không yên, cuộc sống
                                    khó được an nhàn, thư thái.&nbsp;</span></span></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">Do đó, để mọi việc được thuận lợi, tinh
                                    thần thoải mái, bản mệnh tự tin và vững tâm hơn, người tuổi Tuất 1970 được khuyên là nên
                                    sở hữu một chiếc sim số điện thoại hợp với tuổi canh tuất. Đây chính là vật phẩm trợ
                                    mệnh, giúp kích phong thủy, đón tài lộc, may mắn và vững vàng trước mọi sóng gió cuộc
                                    sống.</span></span></p>

                        <p dir="ltr" style="text-align:justify"><em><strong><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">&gt;&gt;&gt; Xem chi
                                            tiết:</span></span></strong></em></p>


                        <h2 dir="ltr"
                            style="text-align: justify; margin-bottom: 1.3em; border-bottom: 2px solid rgb(22, 51, 87);">
                            <span style="color:#FF0000"><strong><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif"><span
                                                id="2-ap-dung-con-so-hop-tuoi-de-xem-tuoi-canh-tuat-xai-so-dien-thoai-nao-tot-co-dung-khong">2.
                                                Áp dụng con số hợp tuổi để xem tuổi canh tuất xài số điện thoại nào tốt có
                                                đúng không?</span></span></span></strong></span></h2>

                        <h3 dir="ltr" style="text-align:justify"><em><strong><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">2.1 Số hợp tuổi 1970 là những số
                                            nào?</span></span></strong></em></h3>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">Để chọn được số hợp tuổi 1970 cần căn cứ
                                    vào nguyên lý hợp - khắc giữa ngũ hành mệnh niên người dùng và ngũ hành con số. Trong
                                    đó, số hợp tuổi Canh Tuất là số có ngũ hành tương sinh hoặc tương trợ cho người tuổi
                                    này. Ngược lại, số khắc tuổi 1970 là số có ngũ hành tương khắc với bản mệnh người
                                    dùng.&nbsp;</span></span></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">Theo đó, nam nữ Canh Tuất sinh vào năm có
                                    ngũ hành nạp âm là Thoa Kim Xuyến - mệnh Kim. Chiếu theo quan hệ ngũ hành thì Thổ sinh
                                    Kim, Kim trợ Kim và Hỏa khắc Kim. Chính vì thế, người sinh năm 1970 có các số hợp - khắc
                                    tuổi như sau:</span></span></p>

                        <ul>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">Các số hợp tuổi thuộc hành Thổ và
                                            Kim bao gồm: 2, 5, 8 và 6, 7.</span></span></p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">Các số khắc tuổi thuộc hành Hỏa
                                            là số 9.&nbsp;</span></span></p>
                            </li>
                        </ul>


                        <h3 dir="ltr" style="text-align:justify"><em><strong><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">2.2. Giải đáp xem tuổi canh tuất
                                            xài số điện thoại nào tốt theo con số hợp tuổi có đúng
                                            không?</span></span></strong></em></h3>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">Nhiều quan điểm cho rằng số điện thoại
                                    hợp với tuổi canh tuất là dãy 10 số chứa nhiều con số hợp với tuổi này. Tuy nhiên, theo
                                    luận giải phong thủy thì quan niệm này là SAI bởi lẽ:</span></span></p>

                        <ul>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">Các số hợp tuổi được xem xét
                                            riêng lẻ trong khi sim điện thoại cần đánh giá tác động qua lại của 10 con số
                                            với nhau. Cho nên một vài con số không thể quyết định tính tốt - xấu của cả dãy
                                            sim.</span></span></p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">Bên cạnh đó, khi đánh giá tính
                                            phong thủy hợp tuổi của sim, chủ sở hữu tuổi Canh Tuất còn cần xem xét đồng thời
                                            5 yếu tố phong thủy bao gồm: ngũ hành, âm dương phối, cửu tinh, quẻ dịch và quan
                                            niệm dân gian.</span></span></p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">Ngoài ra, khi chọn số điện thoại
                                            hợp tuổi 1970 cần lưu ý tránh áp dụng những cách chọn sai như theo quẻ dịch,
                                            theo du niên, theo phép chia 80,....</span></span></p>
                            </li>
                        </ul>

                        <h2 dir="ltr"
                            style="text-align: justify; margin-bottom: 1.3em; border-bottom: 2px solid rgb(22, 51, 87);">
                            <span style="color:#FF0000"><strong><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif"><span
                                                id="3-cach-xem-tuoi-canh-tuat-xai-so-dien-thoai-nao-tot-sai-lech">3. Cách
                                                xem tuổi canh tuất xài số điện thoại nào tốt sai
                                                lệch?</span></span></span></strong></span></h2>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">Hiện nay, có rất nhiều phương pháp được
                                    cho là nhanh chóng, tiện lợi để chọn sim hợp tuổi Canh Tuất. Tuy nhiên, tính đúng - sai
                                    của các phương pháp này chưa được kiểm chứng rõ ràng cho nên còn nhiều thiếu sót. Sau
                                    đây là một số cách chọn sim hợp tuổi cho gia chủ 1970:&nbsp;</span></span></p>



                        <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif"><img alt="sim hợp tuổi 1970"
                                        src="https://simhoptuoi.com.vn/media/images/news/141/sim-hop-tuoi-1970-1.png"></span></span><br>
                            &nbsp;</p>

                        <h3 dir="ltr" style="text-align:justify"><em><strong><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">3.1 Chọn số điện thoại hợp với
                                            tuổi canh tuất theo quẻ dịch</span></span></strong></em></h3>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">Thông qua tính quẻ dịch của sim, người
                                    dùng tuổi Canh Tuất có thể xác định số điện thoại đó là hung - hay cát. Cách xác định
                                    này trong chọn sim là đúng nhưng chưa đủ bởi còn cần xem xét đồng thời với nhiều yếu tố
                                    khác nữa.</span></span></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">Muốn chọn sim hợp tuổi 1970 theo phương
                                    pháp Kinh Dịch, nam nữ sinh năm này thực hiện theo các bước tính toán như
                                    sau:</span></span></p>

                        <ul>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">Bước 1: Chia số điện thoại thành
                                            5 số đầu và 5 số cuối để tính thượng quái và hạ quái.&nbsp;</span></span></p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">Bước 2: Tính thượng quái bằng
                                            cách chia 5 số đầu cho 8 lấy phần dư. Đối chiều phần dư với bảng giá trị quái để
                                            tìm ra quái tương ứng.</span></span></p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">Bước 3: Tính hạ quái bằng cách
                                            tương tự, chia 5 số cuối cho 8 lấy phần dư và tìm ra quái tương
                                            ứng.</span></span></p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">Bước 4: Xếp chồng thượng quái
                                            lên trên hạ quái đối chiếu với 64 quẻ dịch sẽ tìm được quẻ chủ của dãy
                                            sim.</span></span></p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">Bước 5: Từ quẻ chủ tìm được ở
                                            bước 4 sẽ suy ra được quẻ hỗ bằng cách lấy hào của quẻ chủ chồng lên
                                            hào&nbsp;</span></span></p>
                            </li>
                        </ul>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">Kết Luận: Nếu cả quẻ chủ và quẻ hỗ đều
                                    là quẻ Cát thì rất may mắn và tốt đẹp cho chủ sở hữu tuổi 1970. Trường hợp một trong hai
                                    quẻ là quẻ cát thì vẫn chấp nhận được. Tuy nhiên nếu cả hai quẻ đều hung thì cực xấu,
                                    nên thay số điện thoại khác để giảm bớt ảnh hưởng không tốt lành lên bản
                                    mệnh.&nbsp;</span></span></p>



                        <h3 dir="ltr" style="text-align:justify"><em><strong><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">3.2 Xem tuổi canh tuất xài số
                                            điện thoại nào tốt theo du niên?</span></span></strong></em></h3>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">Luận giải ý nghĩa tốt xấu của dãy sim
                                    theo Du Niên tức là người dùng tuổi 1970 chia 10 số trong sim thành 5 cặp số liên tiếp.
                                    Các cặp số này sẽ thuộc vào một trong tám cung của du niên bao gồm:</span></span></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">+ Các cặp số nằm tại cung tốt Thiên Y:
                                    13, 27, 31, 49, 72, 86, 94, 68</span></span></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">+ Các cặp số nằm tại cung tốt Phúc Đức:
                                    19, 34, 26, 78, 43, 87, 62, 91</span></span></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">+ Các cặp số nằm tại cung tốt Sinh Khí:
                                    14, 28, 39, 67, 41, 76, 82, 93</span></span></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">+ Các cặp số nằm tại cung tốt Phục Vị:
                                    22, 44, 66, 88, 11, 77, 88, 99</span></span></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">+ Các cặp số nằm tại cung xấu Lục Sát:
                                    29, 16, 38, 47, 61, 74, 92, 83</span></span></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">+ Các cặp số nằm tại cung xấu Tuyệt
                                    Mệnh: 12, 37, 21, 48, 69, 73, 84, 96</span></span></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">+ Các cặp số nằm tại cung xấu Ngũ Quỷ:
                                    18, 24, 36, 42, 63, 79, 81, 97</span></span></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">+ Các cặp số nằm tại cung xấu Họa Hại:
                                    17, 23, 46, 32, 64, 71, 89, 98</span></span></p>

                        <h3 dir="ltr" style="text-align:justify"><em><strong><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">3.3 Chọn số điện thoại hợp với
                                            tuổi canh tuất theo quan niệm dân gian</span></span></strong></em></h3>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">Người dùng tuổi Canh Tuất chọn sim theo
                                    quan niệm dân gian nghĩa là trong dãy sim có chứa các con số có ý nghĩa may mắn, tài lộc
                                    như số 2, 6, 8, 9,…. Các số này sẽ kết hợp với nhau hoặc kết hợp với các số khác tạo nên
                                    những cặp số hoặc bộ số tam hoa, tứ quý, sảnh tiến, ngũ quý, lục quý, taxi,…. mang ý ngụ
                                    ý đặc biệt, cát lợi cho chủ sở hữu.&nbsp;</span></span></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">Chọn sim phong thủy hợp tuổi 1970 theo
                                    cách này sẽ góp phần tăng giá trị thẩm mỹ, hình thức, thể hiện đẳng cấp độc đáo của
                                    người dùng. Thế nhưng nếu chỉ chọn sim hợp tuổi 1970 theo quan niệm dân gian thì chưa
                                    đủ, cần phải xét đồng thời với các yếu tố khác.&nbsp;</span></span></p>

                        <h3 dir="ltr" style="text-align:justify"><em><strong><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">3.4 Chọn số điện thoại hợp tuổi
                                            1970 theo chia 80</span></span></strong></em></h3>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">Đây là phương pháp luận giải ý nghĩa tốt
                                    hay xấu của sim số khá phổ biến ngày nay. Bởi lẽ phương pháp tính toán khá đơn giản, dễ
                                    thực hiện cho nên nhiều người truyền tai nhau áp dụng. Các bước thực hiện chọn sim theo
                                    phép chia 80 như sau:</span></span></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">- Bước 1: Lấy 4 số cuối điện thoại chia
                                    cho 80.</span></span></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">- Bước 2: Lấy phần thập phân của kết quả
                                    tìm được tại bước 1 nhân với 80.</span></span></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">- Bước 3: Đối chiếu kết quả ở bước 2 với
                                    bảng ý nghĩa để đánh giá sim là cát lợi, bình hòa hay hung hiểm với tuổi Canh
                                    Tuất.</span></span></p>

                        <p dir="ltr" style="text-align:justify"><em><strong><img alt="MŨI TÊN"
                                        src="https://simhoptuoi.com.vn/media/images/news/143/mui-ten.gif"
                                        style="height:31px; width:60px"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">Ứng dụng phép chia này, mời quý
                                            bạn hãy đến ngay công cụ <u><a href="{{ route('boi-sim-4-so') }}">xem ý nghĩa 4
                                                    số cuối điện thoại</a></u> để luận hung cát 4 số đuôi bạn đang
                                            dùng.</span></span></strong></em></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif"></span></span></p>
                        <div class="">
                            <section class="row text-center">
                                <div class="col-md-10 offset-md-2 form_xem_phong_thuy_sim form-4-so-cuoi" id="chonlai">
                                    <form name="xem_phong_thuy_sim" id="xem_phong_thuy_sim"
                                        action="{{ route('boi-sim-4-so') }}" method="POST">
                                        <div class="title-form">
                                            <h2 style="margin-bottom: 1.3em; border-bottom: 2px solid rgb(22, 51, 87);">TRA
                                                CỨU 4 SỐ CUỐI ĐIỆN THOẠI</h2>
                                        </div>
                                        <div class="row d-flex justify-content-center align-items-center">
                                            <div class="col-md-6 pdl0 pdr0">
                                                <input type="text" class="last_phone" name="last_phone"
                                                    placeholder="Nhập 4 số cuối điện thoại" required=""
                                                    value="">
                                            </div>
                                            <div class="col-md-6 pd0 sex">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input checked="" type="radio" name="option"
                                                            class="form-check-input" value="hung_cat" required="">
                                                        Theo 80 số hung cát
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" name="option" class="form-check-input"
                                                            value="kinh_dich" required="">
                                                        Theo 64 quẻ kinh dịch
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" class="last_phone" name="type_post" value="4">
                                        <div class="row">
                                            <div class="col-md-6 offset-md-3 text-center">
                                                <button class="fxpts_btn">Tra cứu</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </section>
                        </div>


                        <h3 dir="ltr" style="text-align:justify"><em><strong><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">3.5 Theo đuôi năm sinh tuổi Canh
                                            Tuất xài số điện thoại nào tốt?</span></span></strong></em></h3>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">Đây là cách chọn sim có chứa năm sinh
                                    1970 hoặc có chứa cả ngày tháng năm sinh của chủ sở hữu. Tuy nhiên, những dãy sim này
                                    chỉ mang hình thức cá nhân hóa còn xét về mặt ý nghĩa phong thủy hay hợp tuổi thì không
                                    mang lại may mắn hay thuận lợi về công việc và cuộc sống.&nbsp;</span></span></p>

                        <h2 dir="ltr"
                            style="text-align: justify; margin-bottom: 1.3em; border-bottom: 2px solid rgb(22, 51, 87);">
                            <span style="color:#FF0000"><strong><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif"><span
                                                id="4-huong-dan-cach-xem-tuoi-canh-tuat-xai-so-dien-thoai-nao-tot-chinh-xac">4.
                                                Hướng dẫn cách xem tuổi Canh Tuất xài số điện thoại nào tốt chính
                                                xác</span></span></span></strong></span></h2>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">Trên thị trường sim hiện nay, tùy thuộc
                                    vào nhu cầu sử dụng của người dùng tuổi 1970, trên thị trường có 2 dòng sim mang lại cát
                                    lợi cho chủ sở hữu bao gồm sim phong thủy hợp tuổi 1970 và sim số đẹp phong thủy hợp
                                    tuổi 1970. Cụ thể phương pháp lựa chọn hai loại sim này, chủ mệnh Canh Tuất có thể tham
                                    khảo dưới đây:</span></span></p>



                        <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif"><img alt="sim hợp tuổi 2000"
                                        src="https://simhoptuoi.com.vn/media/images/news/141/sim-hop-tuoi-1970.png"></span></span><br>
                            &nbsp;</p>

                        <h3 dir="ltr" style="text-align:justify"><em><strong><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">4.1 Cách chọn số điện thoại hợp
                                            với tuổi canh tuất</span></span></strong></em></h3>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">Sim phong thủy hợp tuổi Canh Tuất là số
                                    điện thoại mang lại may mắn, cát lành dựa trên bộ môn dự báo cổ học phương đông, bao gồm
                                    5 yếu tố trụ cột chính:</span></span></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">- Chọn số điện thoại hợp tuổi 1970 theo
                                    <strong>yếu tố Âm - Dương</strong>: Sim phong thủy phải có sự cân bằng về mặt âm dương
                                    giữa các con số và bản mệnh tuổi 1970. Tỷ lệ cân bằng hoàn hảo nhất nên lựa chọn là 5 số
                                    lẻ : 5 số chẵn, tuy nhiên rất khó để chọn được dãy sim này. Vì vậy, tuổi Canh Tuất thuộc
                                    Dương mạng có thể chọn các dãy sim vượng Âm theo tỷ lệ 6 số chẵn : 4 số lẻ để bản mệnh
                                    nhận được sự bổ trợ âm dương của dãy sim.&nbsp;</span></span></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">- Xem tuổi Canh Tuất xài số điện thoại
                                    nào tốt theo <strong>yếu tố Ngũ Hành</strong>: Trong sim số, ngũ hành của dãy số điện
                                    thoại được xác định dựa trên ngũ hành của thập lục hoa giáp. Sau đó, tiến hành đánh giá
                                    mối quan hệ giữa ngũ hành sim với ngũ hành bản mệnh Kim của tuổi
                                    1970.&nbsp;</span></span></p>

                        <p dir="ltr" style="text-align: center;"><em><strong><img alt="mũi tên"
                                        src="https://simhoptuoi.com.vn/media/images/news/141/mui-ten-gif-do.gif"
                                        style="height:60px; width:60px"></strong></em></p>


                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">- Chọn số điện thoại hợp với tuổi canh
                                    tuất theo <strong>yếu tố Cửu Tinh Đồ Pháp</strong>: Bây giờ chúng ta đang sống trong
                                    thời đại Bát vận - Hạ nguyên. Do đó, để nhận được may mắn và thuận lợi, người tuổi Tuất
                                    1970 nên chọn những dãy sim có chứa con số thời đại là số 8.&nbsp;</span></span></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">- Chọn sim hợp tuổi 1970 theo<strong>
                                        yếu tố Quẻ Dịch</strong>: Tính quẻ dịch của số điện thoại sẽ giúp gia chủ 1970 đánh
                                    giá được tính hung - cát của dãy sim. Trong đó số điện thoại tốt phải chứa 2 quẻ cát
                                    hoặc ít nhất 1 quẻ cát phù hợp với mục đích của bản mệnh như: tốt cho thăng tiến, tài
                                    lộc, gia đạo, học hành, tình duyên,….</span></span></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">- Xem sinh năm 1970 hợp số điện thoại
                                    nào theo<strong> yếu tố Quan Niệm Dân Gian</strong>: Những dãy sim phong thủy hợp tuổi
                                    Canh Tuất phải có tổng nút nằm trong khoảng từ 7 đến 10 điểm. Đồng thời dãy sim nếu chứa
                                    các bộ số đẹp theo quan niệm dân gian như: 38 - 78, 39 - 79, 68 - 86,... thì lại càng
                                    may mắn.</span></span></p>


                        <h3 dir="ltr" style="text-align:justify"><em><strong><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">4.2. Cách chọn sim số đẹp phong
                                            thủy hợp tuổi 1970</span></span></strong></em></h3>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">Tương tự như các yếu tố phong thủy hợp
                                    tuổi 1970 như ở cách trên. Tuy nhiên loại sim này còn lưu tâm thêm ở yếu tố số đẹp. Theo
                                    đó số sim có thể chứa:</span></span></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">- Đuôi số đẹp theo tam hoa, tứ quý, ngũ
                                    quý, lục quý: là sự lặp đi lặp lại của các con số ba lần, bốn lần, năm lần, sáu lần tạo
                                    thành các bộ số đẹp tam hoa, tứ quý, ngũ quý và lục quý. Các bộ số này không những có
                                    hình thức đẹp, dễ đọc dễ nhớ mà có ý nghĩa may mắn, cát lợi với chủ sở hữu cả trong công
                                    việc lẫn trong cuộc sống.</span></span></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">Ví dụ:&nbsp;</span></span></p>

                        <ul>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">Bộ số 222, 2222, 22222, 222222:
                                            Biểu thị về sự trường tồn, mọi thứ đều thuận lợi bền lâu, hạnh phúc mãi
                                            mãi.</span></span></p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">Bộ số 666, 6666, 66666, 666666:
                                            Biểu thị cho tài lộc, phú quý, vô cùng cát lợi với người làm kinh doanh buôn
                                            bán.</span></span></p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">Bộ số 888, 8888, 88888, 888888:
                                            Biểu thị cho sự phát triển thăng tiến về công danh, quan hộ, mưu cầu địa
                                            vị.</span></span></p>
                            </li>
                        </ul>


                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">- Đuôi số chứa bộ số đẹp theo dịch nghĩa
                                    con số: Tức là chủ sở hữu tuổi 1970 chọn những dãy sim có chứa các con số có cách phát
                                    âm đặc biệt hoặc ý nghĩa độc đáo, tốt lành.&nbsp;</span></span></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">Ví dụ:&nbsp;</span></span></p>

                        <ul>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">Đuôi sim 1234: Ngụ ý mong cầu
                                            mọi điều tốt đẹp về danh vọng, tiền bạc đầy đủ và tình cảm hạnh phúc bền
                                            vững.</span></span></p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">Đuôi sim 6789: Đây là bộ số tiến
                                            được yêu thích nhất trong dòng sim biến bởi ý nghĩa độc đáo đó là “san bằng tất
                                            cả” hay “sống bằng tình cảm”</span></span></p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">Đuôi sim 2378: Bộ số mang ý
                                            nghĩa về cát lợi, đưa tới tiền của cho người sở hữu Canh Tuất, nhất là về đất
                                            cát, nhà cửa.</span></span></p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">Đuôi sim 77779: Đây là bộ số “Tứ
                                            quý thần tài” biểu trưng cho tiền bạc, của cải dồi dào, rủng rỉnh.</span></span>
                                </p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">Đuôi sim 33338: Đây là bộ số “Tứ
                                            quý ông địa” ngụ ý công việc làm ăn phát tài phát lộc.</span></span></p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">Đuôi sim 26836: Đại ý chỉ mưu sự
                                            thuận thành, quan lộ hanh thông, tiền tài như ý.&nbsp;</span></span></p>
                            </li>
                        </ul>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">- Cặp lộc phát, thần tài, ông địa: Đây
                                    là các cặp số có ngụ ý tốt đẹp theo quan niệm của người dân Việt Nam. Có thể kể đến các
                                    cặp số như:&nbsp;</span></span></p>

                        <ul>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">Cặp số 68, 86: Cặp số “Lộc Phát
                                            - Phát Lộc”, biểu thị cho tài lộc, sự phát triển, mở ra một cuộc sống giàu sang,
                                            hưng thịnh.&nbsp;</span></span></p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">Cặp số 38, 78: Cặp số “Ông Địa
                                            Nhỏ - Ông Địa Lớn” mang đến cát lợi cho những người làm trong lĩnh vực kinh
                                            doanh nhà đất, bất động sản.</span></span></p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">Cặp số 39, 79: Cặp số “Thần Tài
                                            Nhỏ - Thần Tài Lớn”, đem tới vinh hoa, phú quý cho chủ sở hữu tuổi 1970, phù hợp
                                            với những người đang mong cầu tài lộc.</span></span></p>
                            </li>
                        </ul>

                        <h2 dir="ltr"
                            style="text-align: justify; margin-bottom: 1.3em; border-bottom: 2px solid rgb(22, 51, 87);">
                            <span style="color:#FF0000"><strong><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif"><span
                                                id="5-huong-dan-kiem-tra-day-sim-dang-dung-co-hop-voi-tuoi-canh-tuat-1970-khong">5.
                                                Hướng dẫn kiểm tra dãy sim đang dùng có hợp với tuổi Canh Tuất 1970
                                                không?</span></span></span></strong></span></h2>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">Chọn sim phong thủy hợp tuổi 1970 không
                                    phải dễ dàng mà cần có sự hiểu biết sâu rộng, nắm chắc các kiến thức phức tạp về Kinh
                                    dịch, Âm Dương, Ngũ Hành, Cửu tinh đồ pháp,…</span></span></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">Do đó, để phục vụ nhu cầu tìm, chọn
                                    những dãy sim phong thuỷ hợp tuổi Canh Tuất đơn giản, nhanh chóng, tiện lợi,
                                    Simhoptuoi.com.vn đã nghiên cứu và đưa ra công cụ chấm điểm sim phong thuỷ: CHUẨN XÁC -
                                    KHÁCH QUAN - HIỆU QUẢ hội tụ đầy đủ 5 yếu tố. Người xem chỉ cần nhập đầy đủ và đúng
                                    thông tin về dãy số điện thoại đang dùng, ngày tháng năm sinh, giờ sinh và giới tính,
                                    sau đó ấn chọn kết quả. Phần mềm tính toán, đưa ra phân tích chi tiết đồng thời gợi ý
                                    một số dãy sim tốt cho chủ mệnh 1970 tham khảo và lựa chọn.&nbsp;</span></span></p>

                        <p dir="ltr" style="text-align:center"><img alt="mũi tên"
                                src="https://simhoptuoi.com.vn/media/images/news/143/mui-ten1.gif"
                                style="height:100px; width:100px"></p>

                        <p dir="ltr" style="text-align:center"><em><strong><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">Phần
                                            mềm</span></span></strong></em></p>

                        <p dir="ltr" style="text-align:center"><a href="{{ route('boi-sim') }}"><em><strong><span
                                            style="font-size:14px"><span
                                                style="font-family:arial,helvetica,sans-serif">CHẤM ĐIỂM SIM PHONG
                                                THỦY</span></span></strong></em></a></p>

                        <p dir="ltr" style="text-align:center"><em><span style="font-size:14px"><span
                                        style="font-family:arial,helvetica,sans-serif">(Dự đoán hung cát số sim đang dùng
                                        theo #5 tiêu chí Vàng)</span></span></em></p>

                        <h2 dir="ltr"
                            style="text-align: justify; margin-bottom: 1.3em; border-bottom: 2px solid rgb(22, 51, 87);">
                            <span style="color:#FF0000"><strong><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif"><span
                                                id="6-goi-y-mot-so-day-so-dien-thoai-hop-tuoi-canh-tuat">6. Gợi ý một số
                                                dãy số điện thoại hợp tuổi Canh Tuất</span></span></span></strong></span>
                        </h2>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">Với người sinh năm 1970 thuộc ngũ hành
                                    Kim nên lựa chọn một số dãy điện thoại phong thuỷ hợp tuổi sau đây để chiêu tài rước
                                    lộc:</span></span></p>

                        <ul>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><strong><span style="font-size:14px"><span
                                                style="font-family:arial,helvetica,sans-serif">Ví dụ:
                                                0847.79.3883</span></span></strong></p>
                            </li>
                        </ul>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">- Âm dương: có "5" số dương (số lẻ) và
                                    "5" số âm (số chẵn) đảm bảo cân bằng năng lượng cho tuổi Canh Tuất.</span></span></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">- Ngũ hành sinh khắc: Sim có ngũ
                                    hành Thổ tương sinh cho gia chủ Canh Tuất mệnh "Kim".</span></span></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">- Kinh dịch: Quẻ chủ: Trạch Sơn Hàm là
                                    quẻ Cát mang ý nghĩa vạn vật hóa sinh, trời đất giao hòa, sinh sôi nảy
                                    nở.</span></span></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">- Cửu tinh đồ pháp: Trong dãy sim chứa
                                    con số thời đại Bát vận - Hạ nguyên là số 8.</span></span></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">- Cặp số đặc biệt</span></span></p>

                        <ul>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">Dãy số chứa cặp: 79 - Thần tài
                                            lớn là dãy số mang lại may mắn về của cải, tài lộc</span></span></p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">Dãy số chứa cặp: 38 - Ông địa
                                            nhỏ là dãy số mang lại may mắn, hung tan - cát tới</span></span></p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">Dãy số chứa cặp: 88 mang ý
                                            nghĩa Song phát - là dãy số mang lại phát triển, thăng tiến</span></span>
                                </p>
                            </li>
                        </ul>

                        <ul>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><strong><span style="font-size:14px"><span
                                                style="font-family:arial,helvetica,sans-serif">Ví dụ:
                                                0794.079.289</span></span></strong></p>
                            </li>
                        </ul>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">- Âm dương: có "5" số dương (số lẻ) và
                                    "5" số âm (số chẵn) đảm bảo cân bằng năng lượng cho tuổi Canh Tuất.&nbsp;</span></span>
                        </p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">- Ngũ hành sinh khắc: Sim ngũ hành
                                    Thổ tương sinh gia chủ mệnh "Kim" giúp bản mệnh nhận được Cát lợi.&nbsp;</span></span>
                        </p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">- Kinh dịch:&nbsp;</span></span></p>

                        <ul>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">Quẻ chủ: Lôi Hỏa Phong là quẻ
                                            Cát chủ về thịnh vượng, chuyến biến sáng lạn, quý nhân trợ.</span></span></p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">Quẻ hỗ: Trạch Phong Đại Quá là
                                            quẻ Cát chủ về công việc tiến triển thuận lợi.</span></span></p>
                            </li>
                        </ul>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">- Cửu tinh đồ pháp: Sim có chứa số 8 là
                                    hiện thân của sao bát bạch cai quản vận thế đương kim Bát vận - Hạ nguyên.</span></span>
                        </p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">- Cặp số đặc biệt: 79 - Thần tài lớn là
                                    dãy số mang lại may mắn về của cải, tài lộc.</span></span></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">Như vậy, khi xem <strong>tuổi canh tuất
                                        xài số điện thoại nào tốt</strong>, người dùng cần có sự lựa chọn thông minh, áp
                                    dụng phương pháp đúng để có những phán đoán chính xác. Tốt nhất nên kết hợp 5 yếu tố về
                                    ngũ hành - quẻ dịch - âm dương - cửu tinh - quan niệm dân gian để chọn sim phong thuỷ
                                    hợp tuổi Canh Tuất. Ngoài ra, muốn tối ưu hoá thời gian và công sức thì người dùng hoàn
                                    toàn có thể lựa chọn phần mềm tìm sim hợp tuổi của <u><strong><a
                                                href="{{ route('home') }}">{{ $nameSite }}
                                            </a></strong></u>.</span></span></p>
                    </div>
                </div>
            </div>
        </div>


    </section>
@endsection
