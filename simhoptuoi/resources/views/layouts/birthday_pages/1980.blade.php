@extends('app')

@section('title', 'Sim hợp tuổi 2000 - Bí quyết chọn sim phong thủy hút vận may & tài lộc')

@section('content')
    <section class="contentPage">
        <h1 class="title_h1">Tuổi Canh Thân 1980 hợp số điện thoại nào hút trọn may mắn?</h1>
        <audio controls="">
            <source src="https://simhoptuoi.com.vn/media/audio/cach-chon-sim-hop-tuoi-1980 (2).mp3">
        </audio>

        <input type="hidden" name="url_string" value="Chon-sim-phong-thuy-hop-tuoi-Canh-Than-sinh-nam-1980/29">
        <div class="bodyPage">
            <div class="siteBodyContent">
                <div class="row">
                    <div class="col-md-12">
                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif"><strong>Tuổi
                                                Canh Thân 1980 hợp số điện thoại nào</strong>? Làm sao để gia chủ
                                    chọn lựa được số điện thoại hợp tuổi 1980? Đó có phải là dãy sim xuất hiện nhiều cặp số
                                    đẹp trong Du Niên <strong>(Phúc Đức, Sinh Khí, Diên Niên, Phục Vị)</strong> hay dãy sim
                                    có 4 số cuối ứng với linh số Đại Cát theo phép chia 80. Để phù trợ công việc, hoàn thành
                                    kế hoạch công việc, gia tăng năng suất hiệu quả thì những người tuổi này hãy sử dụng
                                    ngay sim phong thủy hợp tuổi 1980.</span></span></p>
                    </div>
                </div>
            </div>
        </div>




        <p class="h3 text-center">Bảng sim hợp tuổi 1980</p>


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
                            <span style="font-size:18px"><strong><span style="font-family:arial,helvetica,sans-serif"><span
                                            id="1-dac-diem-nhan-biet-so-dien-thoai-hop-tuoi-1980">1. Đặc điểm nhận biết số
                                            điện thoại hợp tuổi 1980</span></span></strong></span></h2>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">Theo chuyên gia<strong>Lý Hồng
                                                Lượng</strong>, số điện thoại phong thủy hợp với tuổi 1980 là một
                                    dãy số sim gồm 10 con số được đánh giá, luận giải theo 5 bộ môn Cổ Học Phương Đông với
                                    tứ trụ ngày giờ tháng năm sinh của người tuổi Canh Thân. Do đó dãy sim hợp tuổi 1980 là
                                    dãy số điện thoại hội tụ 5 yếu tố phong thủy gồm có: </span></span></p>

                        <p style="text-align:center"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif"><img alt="sim phong thủy hợp tuổi 1980"
                                        src="https://simhoptuoi.com.vn/media/images/news/29/sim-phong-thuy-hop-tuoi-1980%20(3).png"></span></span>
                        </p>



                        <div style="overflow-x:auto;">
                            <table border="1" cellpadding="10" cellspacing="1" style="width:100%">
                                <tbody>
                                    <tr>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><strong><span
                                                        style="font-size:14px"><span
                                                            style="font-family:arial,helvetica,sans-serif">05 Yếu Tố Chọn
                                                            Sim Phong Thủy Hợp Tuổi 1980</span></span></strong></p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><strong><span
                                                        style="font-size:14px"><span
                                                            style="font-family:arial,helvetica,sans-serif">Đặc
                                                            điểm</span></span></strong></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Ngũ
                                                        hành</span></span></p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Ngũ hành Thủy (Thủy
                                                        sinh Mộc) hoặc Mộc (Mộc tương hợp với Mộc)</span></span></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Quẻ
                                                        Dịch</span></span></p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Quẻ dịch Cát, Đạt Cát
                                                        mang đến may mắn</span></span></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Âm
                                                        Dương</span></span></p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Cân bằng với Dương
                                                        Mạng</span></span></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Cửu
                                                        Tinh</span></span></p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:justify"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Xuất hiện con số
                                                        thời vận</span></span></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p dir="ltr" style="text-align:justify"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Quan Niệm Dân
                                                        Gian</span></span></p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:justify"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Tổng nút cao và xuất
                                                        hiện các cặp bộ số đẹp</span></span></p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <blockquote>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                        style="font-family:arial,helvetica,sans-serif">Như phần trên chúng tôi đã đề cập
                                        việc chọn sim hợp tuổi 1980 theo Du Niên hay 4 số cuối điện thoại là phương thức
                                        được nhiều người sử dụng. Tuy nhiên các cách này đều sai lệch vì một vài con số chưa
                                        thể kết luận ý nghĩa cả dãy sim. Số điện thoại hợp tuổi 1980 nên được tìm chọn dựa
                                        theo tứ trụ của người tuổi Canh Thân và theo #5 yếu tố phong
                                        thủy.&nbsp;</span></span></p>
                        </blockquote>

                        <h2 dir="ltr"
                            style="text-align: justify; margin-bottom: 1.3em; border-bottom: 2px solid rgb(22, 51, 87);">
                            <span style="font-size:18px"><strong><span
                                        style="font-family:arial,helvetica,sans-serif"><span
                                            id="2-cach-chon-so-dien-thoai-phong-thuy-hop-voi-tuoi-1980-theo-05-yeu-to">2.
                                            Cách chọn số điện thoại phong thủy hợp với tuổi 1980 theo 05 yếu
                                            tố</span></span></strong></span></h2>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">Dựa vào 5 quy luật gồm Âm Dương - Ngũ
                                    Hành - Quẻ Dịch - Cửu Tinh Đồ Pháp - Quan Niệm Dân Gian, quý vị sẽ chọn được sim phong
                                    thủy hợp tuổi 1980 chính xác. Từ đó dãy sim sẽ mang đến may mắn, tài lộc bổ trợ cho gia
                                    chủ tuổi Canh Thân.</span></span></p>

                        <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif"><img alt="chọn sim hợp tuổi 1980"
                                        src="https://simhoptuoi.com.vn/media/images/news/29/sim-hop-tuoi-1980.png"></span></span>
                        </p>

                        <h3 dir="ltr" style="text-align:justify"><span style="font-size:16px"><strong><span
                                        style="font-family:arial,helvetica,sans-serif">a. Tuổi canh thân 1980 hợp số điện
                                        thoại nào theo yếu tố âm dương</span></strong></span></h3>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">Sim hợp tuổi 1980 theo Âm - Dương là dãy
                                    sim có 6 số chẵn (0, 2, 4, 6, 8), 4 số lẻ (1, 3, 5, 7, 9) vì số chẵn tượng trưng cho
                                    năng lượng Âm, số lẻ tượng trưng cho năng lượng Dương, Âm - Dương cân bằng chính là
                                    trạng thái vô cùng lý tưởng của vũ trụ (Âm Thịnh - Dương Suy; Dương Thịnh – Âm Suy).
                                    Ngoài ra nếu dãy sim phong thủy hợp tuổi 1980 có tỷ lệ số chẵn với số lẻ là 50 - 50 cũng
                                    tốt vì nội tại dãy sim đã tự cân bằng, sẽ mang đến may mắn cho người sử
                                    dụng.&nbsp;</span></span></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">Ví dụ: Một số dãy sim có Âm - Dương cân
                                    bằng:&nbsp;</span></span></p>

                        <ul>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif"><strong>0762035186 </strong>(6
                                            số chẵn - 4 số lẻ)</span></span></p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif"><strong>0901895288</strong> (6
                                            số chẵn - 4 số lẻ)</span></span></p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif"><strong>0779728800</strong> (6
                                            số chẵn - 4 số lẻ)</span></span></p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif"><strong>0342828999 (</strong>6
                                            số chẵn - 4 số lẻ)</span></span></p>
                            </li>
                        </ul>

                        <blockquote>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                        style="font-family:arial,helvetica,sans-serif"><strong>Kết luận: </strong>Chọn số
                                        điện thoại phong thủy hợp với tuổi 1980 theo Âm - Dương là yếu tố trọng yếu, tốt, dễ
                                        dàng chọn lựa nếu quý bạn nắm được Âm Dương Niên Mệnh của gia chủ tuổi Canh Thân là
                                        Dương Mạng</span></span></p>
                        </blockquote>

                        <h3 dir="ltr" style="text-align:justify"><span style="font-size:16px"><strong><span
                                        style="font-family:arial,helvetica,sans-serif">b. Chọn sim phong thủy hợp tuổi 1980
                                        theo ngũ hành sinh khắc</span></strong></span></h3>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">Theo ngũ hành muốn chọn sim hợp tuổi
                                    1980 thì quý bạn cần xét theo 3 tiêu chí sau:</span></span></p>

                        <p dir="ltr" style="text-align:justify"><em><strong><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">- Thứ nhất: Chọn <a
                                                href="{{ route('menu-page', ['slug' => 'sim_menh_moc']) }}">sim phong thủy hợp
                                                mệnh Mộc</a> cho tuổi Canh Thân&nbsp;phải có ngũ hành Thủy hoặc Mộc vì Thủy
                                            sinh cho Mộc, Mộc tương trợ với Mộc.&nbsp;</span></span></strong></em></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">Cách xác định ngũ hành dãy sim như
                                    sau:</span></span></p>

                        <ul>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">Chia 10 con số thành 5 cặp số,
                                            sau đó xét thiên can, địa chi từng cặp theo bảng lục thập hoa giáp (lưu ý nếu
                                            cặp số có giá trị lớn hơn 60 thì hãy lấy hiệu số của cặp số với 60 để
                                            chọn)</span></span></p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">Xét ngũ hành thiên can, địa chi
                                            của 5 cặp số&nbsp;</span></span></p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">Xét số lần xuất hiện các ngũ
                                            hành, ngũ hành nào xuất hiện nhiều nhất thì đó chính là ngũ hành dãy
                                            sim.</span></span></p>
                            </li>
                        </ul>

                        <p dir="ltr" style="text-align:justify"><em><strong><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">- Thứ hai: Ngũ hành sim là dụng
                                            thần với tứ trụ của người dùng, tức có ngũ hành giống với hành suy của tứ trụ
                                            mệnh.&nbsp;</span></span></strong></em></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">Cách xác định hành suy trong tứ trụ
                                    mệnh:</span></span></p>

                        <ul>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">Xác định chính xác tứ trụ giờ -
                                            ngày - tháng - năm sinh của gia chủ sinh năm 1980.&nbsp;</span></span></p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">Xác định thiên can, địa chi của
                                            tứ trụ</span></span></p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">Xác định ngũ hành suy (hành yếu
                                            nhất); hành vượng (hành mạnh nhất) trong tứ trụ</span></span></p>
                            </li>
                        </ul>

                        <div style="overflow-x:auto;">
                            <table border="1" cellpadding="10" cellspacing="1" style="width:100%">
                                <tbody>
                                    <tr>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><strong><span
                                                        style="font-size:14px"><span
                                                            style="font-family:arial,helvetica,sans-serif">Địa
                                                            chi</span></span></strong></p>
                                        </td>
                                        <td colspan="3">
                                            <p dir="ltr" style="text-align:center"><strong><span
                                                        style="font-size:14px"><span
                                                            style="font-family:arial,helvetica,sans-serif">Can chi tàng
                                                            ẩn</span></span></strong></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Tý</span></span></p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Quý</span></span>
                                            </p>
                                        </td>
                                        <td style="text-align:center">&nbsp;</td>
                                        <td style="text-align:center">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Sửu</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Kỷ</span></span></p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Quý</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Tân</span></span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Dần</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Giáp</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Bính</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Mậu</span></span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Mão</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Ất</span></span></p>
                                        </td>
                                        <td style="text-align:center">&nbsp;</td>
                                        <td style="text-align:center">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Thìn</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Mậu</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Ất</span></span></p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Quý</span></span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Tỵ</span></span></p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Bính</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Mậu</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Canh</span></span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Ngọ</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Đinh</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Kỷ</span></span></p>
                                        </td>
                                        <td style="text-align:center">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Mùi</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Kỷ</span></span></p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Đinh</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Ất</span></span></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Thân</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Canh</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Nhâm</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Mậu</span></span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Dậu</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Tân</span></span>
                                            </p>
                                        </td>
                                        <td style="text-align:center">&nbsp;</td>
                                        <td style="text-align:center">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Tuất</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Mậu</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Tân</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Đinh</span></span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Hợi</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Nhâm</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Giáp</span></span>
                                            </p>
                                        </td>
                                        <td style="text-align:justify">&nbsp;</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <p dir="ltr" style="text-align:justify"><em><span style="font-size:14px"><span
                                        style="font-family:arial,helvetica,sans-serif">Ví dụ: Người tuổi Canh Thân sinh vào
                                        giờ 23h ngày 8 tháng 8 năm 1980 Dương Lịch. Xét hành suy của người này như
                                        sau:</span></span></em></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif"><strong>+ Tứ trụ: </strong>giờ Tý (23h);
                                    ngày Quý Sửu (ngày 8); tháng Quý Mùi (tháng 8) năm Canh Thân (1980)</span></span></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">+ <strong>Theo thuật can chi tàng ẩn của
                                        hàng Chi:</strong></span></span></p>

                        <ul>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">Chi Tý =&gt; Can Quý (hành
                                            Thủy)</span></span></p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">Chi Sửu =&gt; can Kỷ - Quý - Tân
                                            (hành Thổ - Thủy - Kim)</span></span></p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">Chi Mùi =&gt;&nbsp; can Kỷ -
                                            Đinh - Ất (hành Thổ - Hỏa - Mộc)</span></span></p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">Chi Thân =&gt; can Canh - Nhâm -
                                            Mậu (hành Kim -&nbsp; Thủy - Thổ)</span></span></p>
                            </li>
                        </ul>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">+<strong> Xét ngũ hành hàng can:
                                    </strong>Quý (hành Thủy); Quý (hành Thủy); Canh (hành Kim)</span></span></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">Theo đó tứ trụ mệnh gồm có: 3 Kim, 1
                                    Mộc, 5 Thủy, 1 Hỏa, 2 Thổ</span></span></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">=&gt; Hành suy của người này là hành
                                    Hỏa, Mộc; Hành Vượng là hành Kim. Số điện thoại phù hợp với những người này sẽ có ngũ
                                    hành Hỏa hoặc Mộc.</span></span></p>

                        <p dir="ltr" style="text-align:justify"><em><strong><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">- Thứ ba: Nội tại ngũ hành các
                                            con số trong sim từ trái qua phải cần có nhiều mối quan hệ tương sinh hơn tương
                                            khắc.</span></span></strong></em></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">Cách xác định nội tại ngũ hành các con
                                    số:</span></span></p>

                        <ul>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">Xác định ngũ hành các con số
                                            trong sim:&nbsp;</span></span></p>
                            </li>
                        </ul>

                        <div style="overflow-x:auto;">
                            <table border="1" cellpadding="10" cellspacing="1" style="width:100%">
                                <tbody>
                                    <tr>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">0</span></span></p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">1</span></span></p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">2</span></span></p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">3</span></span></p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">4</span></span></p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">5</span></span></p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">6</span></span></p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">7</span></span></p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">8</span></span></p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">9</span></span></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><strong><span
                                                        style="color:#0000FF"><span style="font-size:14px"><span
                                                                style="font-family:arial,helvetica,sans-serif">Thủy</span></span></span></strong>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><strong><span
                                                        style="color:#008000"><span style="font-size:14px"><span
                                                                style="font-family:arial,helvetica,sans-serif">Mộc</span></span></span></strong>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><strong><span
                                                        style="color:#008000"><span style="font-size:14px"><span
                                                                style="font-family:arial,helvetica,sans-serif">Mộc</span></span></span></strong>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span
                                                    style="color:#FF0000"><strong><span style="font-size:14px"><span
                                                                style="font-family:arial,helvetica,sans-serif">Hỏa</span></span></strong></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span
                                                    style="color:#FF0000"><strong><span style="font-size:14px"><span
                                                                style="font-family:arial,helvetica,sans-serif">Hỏa</span></span></strong></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span
                                                    style="color:#8B4513"><strong><span style="font-size:14px"><span
                                                                style="font-family:arial,helvetica,sans-serif">Thổ</span></span></strong></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><span
                                                    style="color:#8B4513"><strong><span style="font-size:14px"><span
                                                                style="font-family:arial,helvetica,sans-serif">Thổ</span></span></strong></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><strong><span
                                                        style="font-size:14px"><span
                                                            style="font-family:arial,helvetica,sans-serif">Kim</span></span></strong>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><strong><span
                                                        style="font-size:14px"><span
                                                            style="font-family:arial,helvetica,sans-serif">Kim</span></span></strong>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><strong><span
                                                        style="color:#0000FF"><span style="font-size:14px"><span
                                                                style="font-family:arial,helvetica,sans-serif">Thủy</span></span></span></strong>
                                            </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <ul>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">Xét từ trái qua phải, xem có bao
                                            nhiêu mối quan hệ tương sinh, tương khắc</span></span></p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">Nếu mối quan hệ tương sinh nhiều
                                            hơn tương khắc thì đó nội tại dãy sim đó tốt</span></span></p>
                            </li>
                        </ul>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">Ví dụ: Một số dãy sim có Ngũ Hành tương
                                    sinh với bản mệnh:</span></span></p>

                        <ul>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif"><strong>0762108969</strong>
                                            (hành Thủy)</span></span></p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif"><strong>0522136136
                                            </strong>(hành Thủy)</span></span></p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif"><strong>0929366969</strong>
                                            (hành Thủy)</span></span></p>
                            </li>
                        </ul>

                        <blockquote>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                        style="font-family:arial,helvetica,sans-serif"><strong>Kết luận: </strong>Chọn số
                                        điện thoại hợp tuổi 1980 theo ngũ hành là yếu tố trọng yếu giúp gia chủ tuổi Canh
                                        Thân chọn được dãy sim tương hợp với người dùng tuy nhiên đòi hỏi gia chủ cần có
                                        kiến thức chuyên môn để phân tích, chọn lựa</span></span></p>
                        </blockquote>

                        <h3 dir="ltr" style="text-align:justify"><span style="font-size:16px"><strong><span
                                        style="font-family:arial,helvetica,sans-serif">c. Theo hành quẻ bát quái tuổi canh
                                        thân 1980 hợp số điện thoại nào?</span></strong></span></h3>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">Số điện thoại phong thủy hợp với tuổi
                                    1980 theo quẻ dịch là dãy sim chứa quẻ dịch Cát, Đại Cát. Chẳng hạn như Thuần Càn - Hỏa
                                    Địa Tấn - Lôi Thủy Giải - Trạch Phong Đại Quái - Địa Phong Thăng,...</span></span></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">Với mỗi mục đích mong cầu sẽ có những
                                    quẻ dịch cát đại diện đặc trưng riêng. Cách xác định những quẻ cát này như
                                    sau:&nbsp;</span></span></p>

                        <ul>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">Chia dãy sim 10 số thành hai
                                            phần bằng nhau, nửa đầu để xác định Thượng Quái, nửa sau để xác định Hạ
                                            Quái.</span></span></p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">&nbsp;Ghép Thượng Quái và Hạ
                                            Quái bạn sẽ tìm được quẻ dịch đại diện cho dãy số điện thoại bạn đang sở
                                            hữu.</span></span></p>
                            </li>
                        </ul>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">Ví dụ: Một số dãy sim có quẻ dịch Cát
                                    tốt cho người tuổi Canh Thân:</span></span></p>

                        <ul>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif"><strong>0395090090:
                                            </strong>Thiên Trạch Lý</span></span></p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif"><strong>0828699699: </strong>Địa
                                            Trạch Lâm</span></span></p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif"><strong>0916201234:
                                            </strong>Thuần Đoài</span></span></p>
                            </li>
                        </ul>

                        <blockquote>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                        style="font-family:arial,helvetica,sans-serif"><strong>Kết luận: </strong>Chọn sim
                                        hợp tuổi 1980 theo quẻ dịch là yếu tố quan trọng để quý gia chủ chọn lựa những dãy
                                        sim theo mục đích sử dụng, điển hình như sim tốt cho công danh sự nghiệp, tài vận,
                                        tình duyên hoặc giúp giảm trừ vận hạn. Tuy nhiên không phải ai cũng tính được quẻ
                                        dịch đại diện dãy sim, nắm được ý nghĩa tiềm ẩn đằng sau.</span></span></p>
                        </blockquote>


                        <h3 dir="ltr" style="text-align:justify"><span style="font-size:16px"><strong><span
                                        style="font-family:arial,helvetica,sans-serif">d. Tuổi canh thân hợp số điện thoại
                                        nào theo cửu tinh đồ pháp?</span></strong></span></h3>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">Áp dụng phương pháp này giúp người Canh
                                    Thân được số hưởng phúc khí của sao chiếu vận thời kỳ này. Hiện nay chúng ta đang tồn
                                    tại trong thời kỳ hạ nguyên vận 8 nên sao Bát Bạch sẽ là sao chủ quản chiếu vận, và con
                                    số 8 chính là con số đương kim thời vận, nhận được nguồn năng lượng cát lành từ sao bát
                                    bạch. Nên sim phong thủy hợp tuổi 1980 nên xuất hiện càng nhiều con số 8 thì càng
                                    tốt.</span></span></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">Ví dụ: Một số dãy sim chứa con số thời
                                    vận tốt cho tuổi Canh Thân</span></span></p>

                        <ul>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif"><strong>0898882999 </strong>(4
                                            số thời vận)</span></span></p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif"><strong>0984289289</strong> (3
                                            số thời vận)</span></span></p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif"><strong>0848858585</strong> (3
                                            số thời vận)</span></span></p>
                            </li>
                        </ul>

                        <blockquote>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                        style="font-family:arial,helvetica,sans-serif"><strong>Kết luận: </strong>Chọn số
                                        điện thoại phong thủy hợp với tuổi 1980 theo cửu tinh là yếu tố góp phần giúp gia
                                        chủ tuổi Canh Thân chọn được dãy sim có nội tại cát lợi.</span></span></p>
                        </blockquote>

                        <h3 dir="ltr" style="text-align:justify"><span style="font-size:16px"><strong><span
                                        style="font-family:arial,helvetica,sans-serif">e. Chọn sim hợp tuổi 1980 theo quan
                                        niệm dân gian</span></strong></span></h3>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">Cuối cùng để có được một dãy sim phong
                                    thủy hoàn hảo đạt 10/10 điểm thì quý bạn cần áp dụng yếu tố điểm nút và các cặp bộ số
                                    đẹp. Trong đó:</span></span></p>

                        <ul>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif"><strong>Tổng nút</strong>: cộng
                                            tổng 10 chữ số lại với nhau, chữ số cuối trong kết quả đạt trên 7 điểm thì giá
                                            trị may mắn càng tăng cao.&nbsp;</span></span></p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif"><strong>Các cặp bộ số
                                            </strong>sở hữu ý nghĩa tốt đẹp như 68, 86, 39, 79, tam hoa, tứ quý…. thì càng
                                            tốt.</span></span></p>
                            </li>
                        </ul>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">Kết luận: Một số dãy sim phong thủy hợp
                                    tuổi 1980 có yếu tố quan niệm dân gian đẹp là một điểm cộng góp phần gia tăng may mắn,
                                    tạo vẻ đẹp hình thức bên ngoài. Tuy nhiên nếu chỉ áp dụng duy nhất một yếu tố này thì
                                    chưa đủ.</span></span></p>

                                    <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span
                                        style="font-family:arial,helvetica,sans-serif">VÍ DỤ VỀ MỘT SỐ ĐIỆN THOẠI HỢP TUỔI
                                        1980 ĐÁP ỨNG ĐẦY ĐỦ 5 YẾU TỐ</span></span></strong></p>

                        <div style="overflow-x:auto;">
                            <table border="1" cellpadding="10" cellspacing="1" style="width:100%">
                                <tbody>
                                    <tr>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><strong><span
                                                        style="font-size:14px"><span
                                                            style="font-family:arial,helvetica,sans-serif">Số điện
                                                            thoại</span></span></strong></p>

                                            <p dir="ltr" style="text-align:center"><strong><span
                                                        style="color:#FF0000"><span style="font-size:18px"><span
                                                                style="font-family:arial,helvetica,sans-serif">0796.270.089</span></span></span></strong>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><strong><span
                                                        style="font-size:14px"><span
                                                            style="font-family:arial,helvetica,sans-serif">Đánh
                                                            giá</span></span></strong></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p dir="ltr" style="text-align:justify"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif"><strong>Ngũ hành
                                                            sim</strong>: Thủy</span></span></p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:justify"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Tương sinh với mệnh
                                                        Mộc</span></span></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p dir="ltr" style="text-align:justify"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif"><strong>Quẻ Dịch:
                                                        </strong>Thuần Khôn</span></span></p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:justify"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Quẻ dịch
                                                        Cát</span></span></p>

                                            <p dir="ltr" style="text-align:justify"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">“Hanh thông, nhu
                                                        thuận”</span></span></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p dir="ltr" style="text-align:justify"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif"><strong>Âm
                                                            Dương:</strong> Sim Vượng Âm (6 số chẵn - 4 số lẻ)</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:justify"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Cân bằng với Dương
                                                        Mạng</span></span></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p dir="ltr" style="text-align:justify"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif"><strong>Cửu
                                                            Tinh:</strong> một số 8</span></span></p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:justify"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Xuất hiện con số
                                                        thời vận</span></span></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p dir="ltr" style="text-align:justify"><strong><span
                                                        style="font-size:14px"><span
                                                            style="font-family:arial,helvetica,sans-serif">Quan Niệm Dân
                                                            Gian:</span></span></strong></p>

                                            <p dir="ltr" style="text-align:justify"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">- Tổng nút:
                                                        8</span></span></p>

                                            <p dir="ltr" style="text-align:justify"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">- Cặp số đẹp:
                                                        79</span></span></p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:justify"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">- Tổng nút:
                                                        cao</span></span></p>

                                            <p dir="ltr" style="text-align:justify"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">- Chứa cặp số đẹp 79
                                                        (Thần Tài Lớn)</span></span></p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <h2 dir="ltr"
                            style="text-align: justify; margin-bottom: 1.3em; border-bottom: 2px solid rgb(22, 51, 87);">
                            <span style="font-size:18px"><strong><span
                                        style="font-family:arial,helvetica,sans-serif"><span
                                            id="3-cach-chon-sim-phong-thuy-hop-tuoi-1980-theo-con-so-hop-tuoi">3. Cách chọn
                                            sim phong thủy hợp tuổi 1980 theo con số hợp tuổi</span></span></strong></span>
                        </h2>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">Số điện thoại phong thủy hợp với tuổi
                                    1980 theo số hợp tuổi là dãy sim có những con số hành Thủy (0, 1) và hành Mộc (3, 4)
                                    xuất hiện càng nhiều càng tốt. Vì những con số hợp tuổi chính là con số mang cát khí,
                                    may mắn cho tuổi Canh Thân, những con số này sẽ có ngũ hành tương sinh, tương hỗ với bản
                                    mệnh người tuổi canh thân.&nbsp;</span></span></p>

                        <p dir="ltr" style="text-align:justify"><strong><span style="font-size:14px"><span
                                        style="font-family:arial,helvetica,sans-serif">Ví dụ:</span></span></strong></p>

                        <ul>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">Dãy số chỉ có số 0 và số 1:
                                            0901112412; 0808.00.11.00;...</span></span></p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">Dãy số chỉ có số 3 và số 4:
                                            0384764444; 0934343434;...</span></span></p>
                            </li>
                        </ul>

                        <blockquote>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                        style="font-family:arial,helvetica,sans-serif"><strong>Kết luận: </strong>Tuy nhiên
                                        chuyên gia đánh giá phương pháp cách chọn số điện thoại hợp tuổi canh thân theo con
                                        số hợp mệnh có điểm bất cập là: Một vài con số chưa đủ quyết định ý nghĩa cả dãy
                                        sim, muốn chính xác thì quý bạn cần xét tổng hòa 10 con số cũng như phải áp dụng đầy
                                        đủ 5 yếu tố phong thủy.</span></span></p>
                        </blockquote>


                        <h2 dir="ltr"
                            style="text-align: justify; margin-bottom: 1.3em; border-bottom: 2px solid rgb(22, 51, 87);">
                            <span style="font-size:18px"><strong><span
                                        style="font-family:arial,helvetica,sans-serif"><span
                                            id="4-theo-duoi-nam-sinh-tuoi-canh-than-1980-hop-so-dien-thoai-nao">4. Theo
                                            đuôi năm sinh tuổi Canh Thân 1980 hợp số điện thoại
                                            nào?</span></span></strong></span></h2>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">Sim hợp tuổi Canh Thân là dãy sim chứa
                                    đuôi năm sinh hoặc ngày tháng năm sinh của người sinh năm 1980. Ví dụ người sinh ngày 12
                                    tháng 9 năm 1980 nên dùng dãy sim chứa đuôi 1980 hoặc đuôi 1291980; cụ thể: 09*1980 hoặc
                                    09*1291980</span></span></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">Kết luận: Tuy nhiên quan điểm này hoàn
                                    toàn sai lầm vì đuôi số chỉ quyết định một phần dãy sim, cũng như đuôi năm sinh chưa thể
                                    xét mức độ tương hợp tương hợp với người dùng, cần áp dụng ngũ hành bản mệnh và âm dương
                                    niên mệnh thì mời chọn được dãy sim phù hợp nhất</span></span></p>

                        <h2 dir="ltr"
                            style="text-align: justify; margin-bottom: 1.3em; border-bottom: 2px solid rgb(22, 51, 87);">
                            <span style="font-size:18px"><strong><span
                                        style="font-family:arial,helvetica,sans-serif"><span
                                            id="5-cach-chon-sim-hop-tuoi-1980-theo-yeu-to-du-nien">5. Cách chọn sim hợp
                                            tuổi 1980 theo yếu tố Du Niên</span></span></strong></span></h2>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">Theo Du Niên, số điện thoại phong thủy
                                    hợp với tuổi 1980 là dãy sim chứa nhiều cặp số tương ứng với Cát Tinh hơn cặp số tương
                                    ứng với Hung Tinh. Cụ thể:</span></span></p>

                        <ul>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif"><strong>4 Cát Tinh:</strong>
                                            Sinh Khí, Diên Niên, Thiên Y, Phục Vị</span></span></p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif"><strong>4 Hung Tinh:</strong>
                                            Ngũ Quỷ, Lục Sát, Họa Hại, Tuyệt Mạng</span></span></p>
                            </li>
                        </ul>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">Các cặp số tương ứng với các Cát Tinh -
                                    Hung Tinh trên:</span></span></p>



                        <div style="overflow-x:auto;">
                            <table border="1" cellpadding="10" cellspacing="1" style="width:100%">
                                <tbody>
                                    <tr>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><strong><span
                                                        style="font-size:14px"><span
                                                            style="font-family:arial,helvetica,sans-serif">Sao</span></span></strong>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><strong><span
                                                        style="font-size:14px"><span
                                                            style="font-family:arial,helvetica,sans-serif">Cặp số tương
                                                            ứng</span></span></strong></p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:center"><strong><span
                                                        style="font-size:14px"><span
                                                            style="font-family:arial,helvetica,sans-serif">Ý
                                                            nghĩa</span></span></strong></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p dir="ltr" style="text-align:justify"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Sinh
                                                        Khí</span></span></p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:justify"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Đại diện cho sức
                                                        khỏe dồi dào, năng lượng tràn đầy</span></span></p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:justify"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">28 – 82, 14 – 41, 39
                                                        – 93, 67 – 76</span></span></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p dir="ltr" style="text-align:justify"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Diên
                                                        Niên</span></span></p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:justify"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Sao chủ về hòa
                                                        thuận, được phần âm phù hộ độ trì, xuất hành sẽ được quý nhân giúp
                                                        đỡ,</span></span></p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:justify"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">19 – 91, 34 – 43, 26
                                                        – 62, 78 – 87</span></span></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p dir="ltr" style="text-align:justify"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Thiên
                                                        Y</span></span></p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:justify"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Chủ về lộc tài,
                                                        thịnh vượng, tiền bạc thăng tiến, có của ăn của để</span></span></p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:justify"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">27 – 72, 68 – 86, 49
                                                        – 94, 13 – 31</span></span></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p dir="ltr" style="text-align:justify"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Phục
                                                        Vị</span></span></p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:justify"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Chủ về bình yên, cát
                                                        lành, hạnh phúc, được hưởng đức từ gia tiên, từ đó kéo theo tài lộc
                                                        may mắn</span></span></p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:justify"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">11, 22, 33, 44, 66,
                                                        77, 88, 99</span></span></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p dir="ltr" style="text-align:justify"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Ngũ
                                                        Quỷ</span></span></p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:justify"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Các mối quan hệ
                                                        không được như ý, xuất hiện nhiều vết rạn, gặp chuyện tai bay vạ
                                                        gió.</span></span></p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:justify"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">36 – 63, 79 – 97, 24
                                                        – 42, 18 – 81.</span></span></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p dir="ltr" style="text-align:justify"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Lục
                                                        Sát</span></span></p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:justify"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Mang đến nhiều tai
                                                        ương, gây cản trở công việc, gia đình nội tộc bất hòa</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:justify"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">29 – 92, 16 – 61, 83
                                                        – 38, 47 – 74</span></span></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p dir="ltr" style="text-align:justify"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Họa
                                                        Hại</span></span></p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:justify"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Không may mắn, gia
                                                        chủ hay gặp nhiều tai tiếng, dễ bị hàm oan</span></span></p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:justify"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">89 – 98, 23 – 32, 17
                                                        – 71, 46 – 64</span></span></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p dir="ltr" style="text-align:justify"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Tuyệt
                                                        Mạng</span></span></p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:justify"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">Mang năng lượng xấu
                                                        nhất, ảnh hưởng đến sức khỏe</span></span></p>
                                        </td>
                                        <td>
                                            <p dir="ltr" style="text-align:justify"><span
                                                    style="font-size:14px"><span
                                                        style="font-family:arial,helvetica,sans-serif">69 – 96, 12 – 21, 37
                                                        – 73, 48 – 84</span></span></p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <p style="text-align:justify"><em><span style="font-size:14px"><span
                                        style="font-family:arial,helvetica,sans-serif">Ví dụ như số điện thoại
                                        <strong>0927283489</strong></span></span></em></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">&nbsp;92 - Lục Sát; 27 - Thiên Y; 72 -
                                    Thiên Y; 28 - Sinh Khí; 83 - Lục Sát; 34 - Diên Niên; 48 - Tuyệt Mạng; 89 - Họa
                                    Hại</span></span></p>

                        <blockquote>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                        style="font-family:arial,helvetica,sans-serif"><strong>Kết luận: </strong>theo du
                                        niên sim hợp tuổi 1980 là dãy sim chứa nhiều cặp số tương ứng cát tinh hơn cặp số
                                        tương ứng với hung tinh. Tuy nhiên cách xác định người tuổi Canh Thân 1980 hợp số
                                        điện thoại nào theo du niên là hoàn toàn sai vì số 0 và số 5 không thể xét theo du
                                        niên. Nên việc áp dụng này sẽ mang tính khiên cưỡng, dãy sim nếu xuất hiện một trong
                                        hai con số này sẽ không thể phân tích ý nghĩa chính xác.&nbsp;</span></span></p>
                        </blockquote>

                        <h2 dir="ltr"
                            style="text-align: justify; margin-bottom: 1.3em; border-bottom: 2px solid rgb(22, 51, 87);">
                            <strong><span style="font-size:16px"><span
                                        style="font-family:arial,helvetica,sans-serif"><span
                                            id="6-theo-phep-chia-80-tuoi-canh-than-hop-so-dien-thoai-nao">6. Theo phép chia
                                            80 tuổi canh thân hợp số điện thoại nào?</span></span></span></strong></h2>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">Sim phong thủy hợp tuổi 1980 theo phép
                                    chia 80 là dãy số điện thoại có 4 số cuối ứng với linh số Đại Cát, Cát. Phép chia này
                                    khá đơn giản, quý bạn cần sử dụng phần mềm [<u><strong><a
                                                href="{{ route('boi-sim-4-so') }}">XEM PHONG THỦY 4 SỐ CUỐI ĐIỆN
                                                THOẠI</a></strong></u>] hoặc áp dụng theo các bước</span></span></p>

                        <ul>
                            <li dir="ltr">
                                <p dir="ltr"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif"><strong>Bước 1</strong>: Lấy 4
                                            số cuối chia cho 80, sau đó lấy kết quả trừ đi phần nguyên của nó.</span></span>
                                </p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif"><strong>Bước
                                                2:</strong>&nbsp;Sau lấy hiệu số ở bước 1 nhân ngược với 80</span></span>
                                </p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif"><strong>Bước
                                                3:</strong>&nbsp;Đối chiếu kết quả bước 2 với 80 con số phong thủy, quý bạn
                                            sẽ xác định ý nghĩa hung cát của dãy sim đang dùng.</span></span></p>
                            </li>
                        </ul>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif"><em><strong>Ví dụ: Số điện thoại
                                            098.483.7208 có 4 số cuối là 7208</strong></em></span></span></p>

                        <ul>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">7208&nbsp; : 80 =
                                            90.1</span></span></p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">90.1-90=0.1</span></span></p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">0.1*80=8 (linh số 8 - Cát,
                                            chiêm đoán “Vượt qua gian nan sẽ tới thành công”)</span></span></p>
                            </li>
                        </ul>

                        <blockquote>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                        style="font-family:arial,helvetica,sans-serif"><strong>Kết luận:&nbsp;</strong>Tuy
                                        nhiên cách xác định sim phong thủy hợp tuổi 1980 theo phép chia 80 chỉ mang tính
                                        truyền miệng, chưa có đủ chứng cứ thuyết phục có thể giúp bạn tìm được dãy sim phong
                                        thủy. Ngoài ra 4 số cuối cũng chưa đủ quyết định cả dãy sim, cần áp dụng tổng hòa
                                        dãy số</span></span></p>
                        </blockquote>


                        <h2 dir="ltr"
                            style="text-align: justify; margin-bottom: 1.3em; border-bottom: 2px solid rgb(22, 51, 87);">
                            <strong><span style="font-size:18px"><span
                                        style="font-family:arial,helvetica,sans-serif"><span
                                            id="7-gioi-thieu-4-loai-so-dien-thoai-hop-tuoi-1980-canh-than">7. Giới
                                            thiệu&nbsp;4 loại số điện thoại hợp tuổi 1980 Canh
                                            Thân</span></span></span></strong></h2>

                        <p dir="ltr" style="text-align:center"><strong><span style="font-size:18px"><span
                                        style="font-family:arial,helvetica,sans-serif"><img
                                            alt="các loại sim hợp tuổi 1980"
                                            src="https://simhoptuoi.com.vn/media/images/news/29/sim-hop-tuoi-1980(1).png"></span></span></strong>
                        </p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">Theo hành quẻ bát quái, quý bạn sẽ xác
                                    định được những loại sim hợp tuổi 1980 Canh Thân theo từng mục đích sử dụng, cụ thể có
                                    bốn loại sim đang được nhiều người săn tìm hiện nay như sau:</span></span></p>

                        <ul>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif"><strong>Sim phong thủy kích tài
                                                lộc</strong>: Là dãy sim phù trợ tốt cho người Canh Thân phát triển cung tài
                                            vận nhờ có quẻ dịch tốt chủ về cung này. Điển hình gồm các quẻ như: Địa Thiên
                                            Thái, Sơn Thiên Đại Súc, Phong Lôi Ích;...</span></span></p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif"><strong>Sim phong thủy kích
                                                công danh - sự nghiệp</strong>: Tương tự là sim hợp tuổi canh thân có quẻ
                                            dịch tốt mang ý nghĩa bổ trợ cho người sinh năm 1980 phát triển tốt con đường
                                            công danh sự nghiệp. Ví dụ gồm các quẻ như: Thuần Càn, Thuần Khôn, Thiên Trạch
                                            Lý, Địa Phong Thăng, Hỏa Địa Tấn,...</span></span></p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif"><strong>Số điện thoại kích tình
                                                - duyên gia đạo</strong>: Phù hợp với những đương số mong muốn cải thiện
                                            tình cảm gia đình, tránh cự cãi xung đột. Nhờ có quẻ dịch tốt cho tình duyên gia
                                            đạo của tuổi 1980. Điển hình gồm các quẻ như: Lôi Phong Hằng, Thủy Thiên Nhu,
                                            Địa Sơn Khiêm, Phong Hỏa Gia Nhân,...</span></span></p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif"><strong>Sim phong thủy hóa giải
                                                vận hạn</strong>: Những người Canh Thân nếu cảm thấy vận trình cuộc sống quá
                                            vất vả có nhiều tai ương bất ngờ thì nhất định không thể bỏ lỡ dãy số sim hợp
                                            tuổi canh thân 1980 có quẻ dịch giúp hóa giải vận hạn này. Ví dụ gồm những quẻ
                                            gồm: Phong Trạch Trung Phu, Thiên Hỏa Đồng Nhân, Trạch Hỏa Cách,..</span></span>
                                </p>
                            </li>
                        </ul>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">Như vậy có thể thấy mỗi loại sim phong
                                    thủy hợp tuổi 1980 trên lại đem đến một giá trị phù trợ, tương hỗ khác nhau tùy theo mỗi
                                    mục đích sử dụng. Việc lựa chọn loại sim nào, dãy sim nào cần phải xét đầy đủ 05 yếu tố
                                    phong thủy trong đó lưu ý phải chọn dãy sim chứa quẻ dịch phù hợp.</span></span></p>

                        <div style="overflow-x:auto;">
                            <table border="0" cellpadding="10" cellspacing="1">
                                <tbody>
                                    <tr>
                                        <td style="text-align:center"><a
                                                href="{{ route('menu-page', ['slug' => 'sim_thang_quan']) }}"><img
                                                    alt="SIM THĂNG QUAN TIẾN CHỨC"
                                                    src="https://simhoptuoi.com.vn/media/images/seolink/1.png"></a></td>
                                        <td style="text-align:center"><a
                                                href="{{ route('menu-page', ['slug' => 'sim_tinh_duyen_gia_dao']) }}"><img
                                                    alt="SIM KÍCH TÌNH DUYÊN GIA ĐẠO"
                                                    src="https://simhoptuoi.com.vn/media/images/seolink/2.png"></a></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center"><a
                                                href="{{ route('menu-page', ['slug' => 'sim_tai_van']) }}"><img
                                                    alt="SIM KÍCH TÀI VẬN"
                                                    src="https://simhoptuoi.com.vn/media/images/seolink/3.png"></a></td>
                                        <td style="text-align:center"><a
                                                href="{{ route('menu-page', ['slug' => 'sim_xoa_giai_han']) }}"><img
                                                    alt="SIM HÓA GIẢI VẬN HẠN"
                                                    src="https://simhoptuoi.com.vn/media/images/seolink/4.png"></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <p dir="ltr" style="text-align:justify"><em><strong><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif"><img alt="điều hướng"
                                                src="https://simhoptuoi.com.vn/media/images/news/29/Arrow-icon.png"
                                                style="height:25px; width:25px"> Ngoài số điện thoại hợp tuổi 1980 thì màu
                                            sắc, ngành nghề cũng là một yếu tố giúp gia chủ gặp nhiều may mắn nếu ứng dụng
                                            đúng cách.</span></span></strong></em></p>


                        <p dir="ltr" style="text-align:justify"><em><strong><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif">Lưu ý: Sau khi đặt mua, quý vị
                                            hãy chuẩn bị ảnh căn cước, chứng minh hai mặt kèm ảnh chân dung chính diện để
                                            chuyên viên hỗ trợ đăng ký chính chủ cho bạn.</span></span></strong></em></p>

                        <h2 dir="ltr"
                            style="text-align: justify; margin-bottom: 1.3em; border-bottom: 2px solid rgb(22, 51, 87);">
                            <span style="font-size:18px"><strong><span
                                        style="font-family:arial,helvetica,sans-serif"><span
                                            id="9-cau-chuyen-thanh-cong-cua-viec-su-dung-sim-hop-tuoi-1980">8. Câu chuyện
                                            thành công của việc sử dụng sim hợp tuổi 1980</span></span></strong></span></h2>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">Nhiều khách hàng của simhoptuoi.com.vn
                                    sau khi sử dụng sim phong thủy hợp tuổi 1980 được tìm chọn dựa theo 5 bộ môn cổ Học
                                    phương Đông đã có những phản hồi tích cực về khả năng thay đổi cuộc sống, hỗ trợ công
                                    việc thăng tiến cũng như tài vận dồi dào. Để khẳng định sự uy tín cũng như tạo niềm tin
                                    khi quý vị mua số điện thoại hợp tuổi 1980 tại website, chúng tôi xin được kể một câu
                                    chuyện thành công của một quý khách hàng xin được giấu tên sau khi sử dụng sim hợp tuổi
                                    Canh Thân:</span></span></p>

                        <p dir="ltr" style="text-align:justify"><em><span style="font-size:14px"><span
                                        style="font-family:arial,helvetica,sans-serif">“Anh A sinh năm 1980, làm công việc
                                        Kinh Doanh của một công ty Nội Thất, ở độ tuổi tứ tuần đáng ra anh phải có vị trí,
                                        chỗ đứng ổn định trong công ty. Nhưng bản thân anh là người hướng nội mà công việc
                                        đòi hỏi phải có tính ngoại giao, cho nên trong công việc anh bị bỏ lỡ khá nhiều đơn
                                        hàng cũng như có hội thăng tiến. Nhận thấy không thể như vậy mãi, anh A đã tìm nhiều
                                        cách để bản thân thay đổi cũng như tìm đến các yếu tố liên quan đến phong thủy để
                                        thay đổi đường công danh sự nghiệp.</span></span></em></p>

                        <p dir="ltr" style="text-align:justify"><em><span style="font-size:14px"><span
                                        style="font-family:arial,helvetica,sans-serif">Sau khi tìm tòi, được bạn bè giới
                                        thiệu thì anh A đã tìm đến chuyên gia Lý Hồng Lượng, cố vấn phong thủy
                                        của{{ $nameSite }}. Sau khi được thầy tư vấn, xem phong thủy sim đang dùng thì
                                        nhận thấy dãy sim anh sở hữu khắc chế bản mệnh của anh, chứa quẻ dịch hung Sơn Thủy
                                        Mông (chiêm đoán công việc mở mịt, tương lai u ám). Theo đó anh đã quyết định thay
                                        sim đổi số phong thủy, nhờ thầy chọn lựa một số điện thoại hợp tuổi Canh Thân có ngũ
                                        hành Thủy, quẻ dịch Địa Thiên Thái (chiêm đoán công việc thăng tiến); cân bằng âm
                                        dương, xuất hiện cặp số 86 (Phát Lộc) ở đuôi sim. Sau một thời gian sử dụng thì công
                                        việc của anh có sự khởi sắc, có nhiều cơ hội kinh doanh, đạt được nhiều thành tích
                                        trong việc bán hàng, đang được cân nhắc lên làm trưởng phòng kinh doanh của một chi
                                        nhánh nhỏ của công ty”</span></span></em></p>

                        <h2 dir="ltr"
                            style="text-align: justify; margin-bottom: 1.3em; border-bottom: 2px solid rgb(22, 51, 87);">
                            <span style="font-size:18px"><strong><span
                                        style="font-family:arial,helvetica,sans-serif"><span
                                            id="10-xem-day-sim-dang-dung-co-thuc-su-hop-tuoi-1980-hay-khong">9. Xem dãy
                                            sim đang dùng có thực sự hợp tuổi 1980 hay không?</span></span></strong></span>
                        </h2>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">Với 5 yếu tố phong thủy phía trên thì
                                    quý bạn nên kiểm tra dãy sim đang sở hữu có thực sự bổ trợ cho bản mệnh của người tuổi
                                    Canh Thân hay không? Tuy nhiên nếu muốn tự mình chấm điểm thì quý bạn phải nghiên cứu
                                    những yếu tố phong thủy cổ học trên. Tuy nhiên không phải ai cũng có kinh nghiệm cũng
                                    như thời gian. Do vậy để giảm trừ những mặt hạn chế trên thì mời quý bạn hãy sử dụng
                                    phần mềm <strong><a href="{{ route('boi-sim') }}">XEM SIM PHONG THỦY</a></strong>
                                    của{{ $nameSite }}. Đây chính là phần mềm căn cứ vào 5 yếu tố phong thủy dự báo cổ,
                                    được đội ngũ chuyên gia đánh giá cao, mỗi yếu tố sẽ được công cụ luận giải rõ ràng,
                                    tường minh, dễ hiểu. Hứa hẹn sẽ giúp quý bạn có góc nhìn tổng quan nhất về ý nghĩa dãy
                                    sim bạn đang sở hữu.</span></span></p>

                        <h2 dir="ltr"
                            style="text-align: justify; margin-bottom: 1.3em; border-bottom: 2px solid rgb(22, 51, 87);">
                            <span style="font-size:18px"><span
                                    style="font-family:arial,helvetica,sans-serif"><strong>10.
                                    </strong></span></span><strong>Ưu nhược điểm của người tuổi Canh Thân 1980</strong></h2>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">Trong tử vi, Canh Thân là sự kết hợp
                                    đứng thứ 57 trong hệ thống đánh số Can Chi của người Á Đông, được kết hợp bởi thiên can
                                    Canh, địa chi Thân, bắt đầu từ ngày&nbsp;<strong>16/2/1980</strong>&nbsp;đến
                                    ngày&nbsp;<strong>14/2/1981</strong>. Người sinh vào giai đoạn này sẽ có ngũ hành nạp âm
                                    Thạch Lựu Mộc, thuộc mệnh Mộc, mang ý nghĩa cây lựu đã kết trái. Trong cuộc sống, bản
                                    thân người này có tính cách nhanh nhẹn, hoạt bát, biết đánh giá, nhìn nhận nên từ thuở
                                    bé người sinh năm 1980 đã gặt hái nhiều thành tích đáng nể trong khía cạnh học tập. Còn
                                    đến khi trưởng thành, tuổi Canh Thân học được cách giao tiếp, ngoại giao tốt cũng như có
                                    nền tảng kiến thức, kinh nghiệm vững chắc nên sẽ đạt được nhiều thành công trong phương
                                    diện công việc. Tuy nhiên, người này có điểm yếu là quá tự mãn, tự cao, tự đại, luôn coi
                                    bản thân là cái rốn của vũ trụ, không đặt ai trong mắt nên cũng ít nhiều gặp một số cản
                                    trở, khó khăn nhất định.</span></span></p>

                        <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif"><img alt="tuổi canh thân"
                                        src="https://simhoptuoi.com.vn/media/images/news/29/tuoi-canh-than%20(1).png"></span></span>
                        </p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">Còn xét về phương diện tình cảm thì
                                    người này có số đào hoa, phải chia tay vài mối tình mới gặp được ý chung nhân. Đến khi
                                    kết hôn thì cũng gặp nhiều sóng gió, gian nan trong gia đình. Bởi vậy để gia tăng may
                                    mắn trong cuộc sống, giảm trừ khó khăn, xui rủi thì người này nên sử dụng số điện thoại
                                    hợp tuổi canh thân, đây là một trong những vật phẩm phong thủy hiện đang được nhiều
                                    người tin dùng.</span></span></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif">Tóm lại,&nbsp;<strong>số điện thoại
                                        phong thủy hợp với tuổi 1980&nbsp;</strong>là vật phong thủy may mắn dành riêng cho
                                    người tuổi canh thân. Tuy nhiên muốn nhận lại nguồn năng lượng tích cực thì phải áp dụng
                                    5 yếu tố phong thủy xem tuổi canh thân 1980 hợp số điện thoại nào phù hợp. Sau cùng,
                                    trung tâm Sim Hợp Tuổi kính chúc quý bạn sớm sở hữu cho bản thân một dãy sim may mắn,
                                    trợ mệnh, hút tài chiêu lộc,...</span></span></p>


                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                    style="font-family:arial,helvetica,sans-serif"><em><strong>Ngoài ra bài luận này còn
                                            giải đáp những câu hỏi sau:</strong></em></span></span></p>

                        <ul>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif"><em>sinh năm 1980 hợp với số
                                                điện thoại nào</em></span></span></p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif"><em>so dien thoai hop tuoi
                                                1980</em></span></span></p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif"><em>so dien thoai hop voi tuoi
                                                canh than</em></span></span></p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif"><em>so sim nao hop voi tuoi
                                                canh than</em></span></span></p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif"><em>số điện thoại hợp tuổi
                                                1980</em></span></span></p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif"><em>số điện thoại hợp tuổi canh
                                                thân</em></span></span></p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif"><em>số điện thoại hợp với tuổi
                                                canh thân</em></span></span></p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif"><em>tuoi canh than hop voi so
                                                dien thoai nao</em></span></span></p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span
                                            style="font-family:arial,helvetica,sans-serif"><em>tuổi canh thân hợp với số
                                                điện thoại nào</em></span></span></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


    </section>
@endsection
