
@extends('app')

@section('title', 'Sim hợp tuổi 2000 - Bí quyết chọn sim phong thủy hút vận may & tài lộc')

@section('content')
    <section class="contentPage">
        <h1 class="title_h1">Xem nam/nữ sinh năm 1971 hợp số điện thoại nào Chính Xác nhất?</h1>

        <input type="hidden" name="url_string" value="Chon-sim-hop-tuoi-1971-mang-lai-nhieu-may-man/142">
        <div class="bodyPage">
            <div class="siteBodyContent">
                <div class="row">
                    <div class="col-md-12">
                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">"<strong><u><a href="https://simhoptuoi.com.vn/Chon-sim-hop-tuoi-1971-mang-lai-nhieu-may-man/142.html">Sinh năm 1971 hợp số điện thoại nào</a></u>?</strong>" là một trong những câu hỏi được nhiều người quan tâm trong việc lựa chọn số điện thoại phù hợp với tuổi của mình. Theo phong thủy, việc chọn số điện thoại phù hợp với tuổi Tân Hợi sẽ giúp tăng cường vận may, tài lộc và thành công trong cuộc sống. Vậy, để tìm hiểu thêm về chủ đề này, chúng ta hãy cùng đi sâu vào tìm hiểu về các dạng số điện thoại hợp với những người sinh năm 1971.</span></span></p>                    </div>
                </div>
            </div>
        </div>




        <p class="h3 text-center">Bảng sim hợp tuổi 1971</p>


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
                        <h2 dir="ltr" style="text-align: justify; margin-bottom: 1.3em; border-bottom: 2px solid rgb(22, 51, 87);"><span style="color:#FF0000"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><span id="1-khia-canh-tai-loc-va-cong-viec-cua-nguoi-tuoi-1971-">1. Khía cạnh tài lộc và công việc của người tuổi 1971&nbsp;</span></span></span></strong></span></h2>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Người sinh năm 1971 thuộc thiên can Tân, địa chi Hợi, ngũ hành nạp âm Thoa Kim Xuyến - mệnh Kim. Tuổi Tân Hợi là mẫu người có hoài bão, ước mơ lớn, sống tự lập không thích phụ thuộc hay dựa dẫm vào ai. Đường đời tuổi Hợi 1971 khá thuận lợi, bằng phẳng tuy nhiên công danh và tài lộc không thu lợi được nhiều. Nếu biết tu tâm dưỡng tính, giữ được tinh thần lạc quan vững vàng thì có thể gặt hái được thành tựu.</span></span></p>

                        <p dir="ltr" style="text-align:justify"><em><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">&gt;&gt;&gt; Tham khảo nội dung hữu ích khác:</span></span></strong></em></p>

                        <ul dir="ltr">
                            <li style="text-align:justify">
                                <p><a href="https://simhoptuoi.com.vn/tin-tuc/nam-nu-tuoi-tan-hoi-sinh-nam-1971-cung-gi.html"><u><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">1971 cung gì</span></span></strong></u></a></p>
                            </li>
                            <li style="text-align:justify">
                                <p><a href="https://simhoptuoi.com.vn/tin-tuc/tuoi-tan-hoi-1971-hop-mau-gi.html"><u><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">1971 hợp màu gì</span></span></strong></u></a></p>
                            </li>
                            <li style="text-align:justify">
                                <p><a href="https://simhoptuoi.com.vn/tin-tuc/han-tam-tai-tuoi-1971.html"><u><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">1971 tam tai năm nào</span></span></strong></u></a></p>
                            </li>
                        </ul>

                        <h2 dir="ltr" style="text-align: justify; margin-bottom: 1.3em; border-bottom: 2px solid rgb(22, 51, 87);"><span style="color:#FF0000"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><span id="2-bi-quyet-xem-sinh-nam-1971-hop-so-dien-thoai-nao-chinh-xac">2. Bí quyết xem sinh năm 1971 hợp số điện thoại nào chính xác?</span></span></span></strong></span></h2>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Trên thị trường sim hiện nay, tùy thuộc vào nhu cầu sử dụng của người dùng tuổi 1971, trên thị trường có 2 dòng sim mang lại cát lợi cho chủ sở hữu bao gồm sim phong thủy hợp tuổi 1971 và sim số đẹp phong thủy hợp tuổi 1971. Cụ thể phương pháp lựa chọn hai loại sim này, chủ mệnh Tân Hợi có thể tham khảo dưới đây:</span></span></p>



                        <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><img alt="sim hợp tuổi 1971" src="https://simhoptuoi.com.vn/media/images/news/142/sim-hop-tuoi-1971.png"></span></span><br>
                            &nbsp;</p>

                        <h3 dir="ltr" style="text-align:justify"><em><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">2.1 Cách chọn sim hợp tuổi 1971 theo phong thủy</span></span></strong></em></h3>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Sim phong thủy hợp tuổi 1971 là số điện thoại được luận giải dựa vào các yếu tố phong thủy và dịch học cổ Phương Đông. Cụ thể:</span></span></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- <strong>Chọn số điện thoại hợp tuổi 1971 theo Âm - Dương: </strong>Sim phải có sự cân bằng về mặt âm dương, tỷ lệ hoàn hảo nhất là 5 số lẻ : 5 số chẵn. Ngoài ra, người tuổi Tân Hợi thuộc Âm mạng nên có thể chọn các dãy sim vượng Dương theo tỷ lệ 6 số lẻ : 4 số chẵn để nhận được sự bổ trợ của dãy sim.&nbsp;</span></span></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- <strong>Chọn sim hợp tuổi 1971 theo ngũ hành: </strong>Ngũ hành của một dãy sim được xác định thông qua xác định ngũ hành can chi lục thập hoa giáp. Theo đó, người tuổi này có thể chọn dãy sim có ngũ hành tương sinh hoặc tương trợ cho bản mệnh, cụ thể là sim ngũ hành Thổ (tương sinh), hoặc sim ngũ hành Kim (tương trợ) vì bản mệnh tuổi 1971 thuộc Kim.</span></span></p>



                        <p dir="ltr" style="text-align:center"><em><strong><img alt="mũi tên" src="https://simhoptuoi.com.vn/media/images/news/141/mui-ten-gif-do.gif"></strong></em></p>

                        <p dir="ltr" style="text-align:center"><span style="font-size:16px"><span style="font-family:comic sans ms,cursive"><u><a href="https://simhoptuoi.com.vn/Sim-hop-menh-Kim.html"><em><strong>Sim hợp mệnh Kim</strong></em></a></u></span></span></p>



                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">-<strong> Chọn sim phong thủy hợp tuổi 1971 theo Cửu Tinh đồ pháp: </strong>Hiện nay đang là thời đại Bát vận - Hạ nguyên có con số thời đại là 8. Chính vì vậy, tuổi Tân Hợi khi chọn sim phong thủy hợp tuổi nên ưu tiên những dãy sim chứa nhiều số 8.&nbsp;</span></span></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- <strong>Chọn số điện thoại hợp tuổi 1971 theo Quẻ Dịch: </strong>Mỗi dãy số điện thoại đều có một quẻ chủ và một quẻ hỗ. Nhờ vào việc tính quẻ dịch, người dùng tuổi 1971 có thể đánh giá được tính hung - cát của dãy sim. Tốt nhất là số sim có cả quẻ chủ lẫn quẻ hỗ đều cát lợi. Hoặc ít nhất có 1 quẻ tốt phù hợp mục đích của bản mệnh như: quẻ Địa Phong Thăng tốt cho thăng tiến; quẻ Thiên Hỏa Đồng Nhân, Lôi Thiên Đại Tráng,... tốt cho tài lộc; quẻ Phong Hỏa Gia Nhân, Trạch Sơn Hàm, Lôi Phong Hằng,... tốt cho gia đạo tình duyên,…</span></span></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">-<strong> Chọn số điện thoại hợp tuổi Tân Hợi theo quan niệm dân gian: </strong>Những dãy sim phong thủy hợp tuổi 1971 nên có số nút nằm trong khoảng từ 8 đến 10 điểm. Bên cạnh đó, dãy sim sẽ càng may mắn hơn nếu chứa bộ số đẹp theo quan niệm dân gian như: 38 - 78, 39 - 79, 68 - 86,...</span></span></p>


                        <h3 dir="ltr" style="text-align:justify"><em><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">2.2. Cách chọn sim số đẹp phong thủy hợp tuổi 1971</span></span></strong></em></h3>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Loại sim số đẹp phong thủy ngoài việc phải tuân thủ 5 yếu tố nêu trên thì còn cần kết hợp thêm yếu tố về số đẹp. Theo đó,&nbsp; Chọn sim này theo&nbsp; nên lựa chọn có thể chứa:</span></span></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Đuôi số đẹp theo <a href="https://simhoptuoi.com.vn/sim-tam-hoa.html">tam hoa</a>, <a href="https://simhoptuoi.com.vn/sim-tu-quy.html">tứ quý</a>, <a href="https://simhoptuoi.com.vn/sim-ngu-quy.html">ngũ quý</a>, <a href="https://simhoptuoi.com.vn/sim-luc-quy.html">lục quý</a>: là sự lặp đi lặp lại của các con số ba lần, bốn lần, năm lần, sáu lần. Sim chứa các bộ số này có hình thức đẹp, dễ đọc dễ nhớ giúp chủ mệnh khẳng định bản ngã của bản thân trong cả công việc lẫn cuộc sống.</span></span></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Đuôi số chứa bộ số đẹp theo dịch nghĩa con số: Phương pháp chọn sim này dựa trên ý nghĩa tốt lành hoặc dựa vào hình thức hay cách phát âm độc đáo, dễ đọc dễ nhớ để chọn sim.&nbsp;</span></span></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Ví dụ: Đuôi sim 6789 - “san bằng tất cả”, đuôi 2378 - “lộc về đất đai”, đuôi 77779 - “Tứ quý thần tài”, đuôi 33338 - “tứ quý ông địa”, đuôi 26836 - “mưu sự thuận thành”,...</span></span></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Cặp lộc phát, thần tài, ông địa: Đây là các cặp số có mang ý nghĩa cát lợi, may mắn theo quan niệm của người Việt Nam. Có thể kể đến một số cặp số tốt đẹp như: 68&nbsp; - 86 (Lộc Phát - Phát Lộc), 38 - 78 (Ông Địa Nhỏ - Ông Địa Lớn), 39 - 79 (Thần Tài Nhỏ - Thần Tài Lớn),...</span></span></p>

                        <ul dir="ltr">
                            <li style="text-align:justify">
                                <p><u><strong><a href="https://simhoptuoi.com.vn/sim-than-tai.html"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Sim thần tài</span></span></a></strong></u></p>
                            </li>
                            <li style="text-align:justify">
                                <p><u><strong><a href="https://simhoptuoi.com.vn/sim-loc-phat.html"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Sim lộc phát</span></span></a></strong></u></p>
                            </li>
                            <li style="text-align:justify">
                                <p><u><strong><a href="https://simhoptuoi.com.vn/sim-ong-dia.html"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Sim ông địa</span></span></a></strong></u></p>
                            </li>
                        </ul>

                        <h2 dir="ltr" style="text-align: justify; margin-bottom: 1.3em; border-bottom: 2px solid rgb(22, 51, 87);"><span style="color:#FF0000"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><span id="3--06-cach-xem-sinh-nam-1971-hop-so-dien-thoai-nao-sai">3. +06 cách xem sinh năm 1971 hợp số điện thoại nào sai?</span></span></span></strong></span></h2>

                        <h3 dir="ltr" style="text-align:justify"><em><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">3.1 Chọn sim hợp tuổi 1971 theo con số hợp tuổi</span></span></strong></em></h3>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">⇒ <strong>Nguyên lý chọn:</strong> Nam nữ sinh năm 1971 có ngũ hành nạp âm là Thoa Kim Xuyến thuộc mệnh Kim, trong đó Thổ sinh Kim, Kim trợ Kim và Hỏa khắc Kim. Chính vì thế, người sinh năm 1971 có các số hợp - khắc tuổi như sau:</span></span></p>

                        <ul>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Các số hợp tuổi thuộc hành Thổ và Kim bao gồm: 2, 5, 8 và 6, 7.&nbsp;</span></span></p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Các số khắc tuổi thuộc hành Hỏa là số 9.&nbsp;</span></span></p>
                            </li>
                        </ul>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">⇒ <strong>Đánh giá: </strong>Các số hợp tuổi 1971 là các con số riêng lẻ trong khi sim hợp tuổi cần đánh giá tổng hòa 10 con số. Do đó, một vài con số hợp tuổi Tân Hợi không thể quyết ý nghĩa tốt - xấu của cả dãy sim.</span></span></p>



                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><em><strong><img alt="MŨI TÊN" src="https://simhoptuoi.com.vn/media/images/news/143/mui-ten.gif" style="height:26px; width:50px">&nbsp;Sử dụng phần mềm [<a href="https://simhoptuoi.com.vn/con-so-hop-tuoi.html"><u>SỐ HỢP TUỔI</u></a>] để tìm hiểu chi tiết các con số hợp tuổi cho người thân và bạn bè bạn.</strong></em></span></span></p>



                        <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><em><strong><img alt="sim hợp tuổi 1971" src="https://simhoptuoi.com.vn/media/images/news/142/sim-hop-tuoi-1971-1.png"></strong></em></span></span><br>
                            &nbsp;</p>

                        <h3 dir="ltr" style="text-align:justify"><em><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">3.2 Chọn sim phong thủy hợp tuổi 1971 theo quẻ dịch</span></span></strong></em></h3>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">⇒ <strong>Nguyên lý chọn:</strong> Phương pháp chọn này dựa vào nguyên lý tính quẻ dịch để xác định tính hung - hay cát của số điện thoại. Dãy sim tốt nhất sẽ có cả quẻ chủ lẫn quẻ hỗ đều là quẻ Cát hoặc ít nhất một trong hai quẻ phải mang ý nghĩa Cát lành. Dãy sim không nên khi có cả hai quẻ đều hung.&nbsp;</span></span></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">⇒ <strong>Đánh giá: </strong>Phương pháp này đánh giá được nội tại sim tốt hay xấu, tuy nhiên chưa đánh giá được mức độ hợp khắc của số sim với người dùng.</span></span></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><em><strong><img alt="MŨI TÊN" src="https://simhoptuoi.com.vn/media/images/news/143/mui-ten.gif" style="height:26px; width:50px">Số điện thoại bạn đang sở hữu chứa quẻ dịch nào, ý nghĩa hung hay cát. Sử dụng ngay phần mềm [<u><a href="https://simhoptuoi.com.vn/tin-sim/xem-boi-sim-kinh-dich.html">XEM SIM&nbsp;KINH DỊCH</a></u>] của đội ngũ chuyên gia {{ $nameSite }} </strong></em></span></span></p>

                        <p dir="ltr" style="text-align:justify"><em><strong></strong></em></p><section class="boxFormSim"><em><strong>
                                    <div class="bgFormSim">
                                        <div class="title" style="text-align: center;margin-bottom: 10px;font-weight: bold;">
                                            XEM SIM KINH DỊCH
                                        </div>
                                        <form class="form_boisimkinhdich_pts" name="boisimkinhdich" action="https://simhoptuoi.com.vn/tin-sim/xem-boi-sim-kinh-dich.html" method="post">
                                            <input type="hidden" name="action_form" value="boisimkinhdich">
                                            <div style="display:none"></div>
                                            <div class="row">
                                                <div class="col-3 col-md-3 col-sm-3 col-xs-3">
                                                    <p class="title_label"><label>Số điện thoại</label></p>
                                                </div>
                                                <div class="col-9 col-md-9 col-sm-9 col-xs-9">
                                                    <input id="xpts_phone" class="myinput" name="sosim" placeholder="Mời nhập số sim" value="">
                                                </div>
                                                <div class="col-12 col-md-12">
                                                    <div class="row">
                                                        <div class="col-3 col-md-3 col-sm-3 col-xs-3">
                                                            <p class="title_label"><label>Ngày sinh</label></p>
                                                        </div>
                                                        <div class="col-3 col-md-3 col-sm-3 col-xs-3">
                                                            <select id="xpts_ngay" name="ngay" class="myinput" required="">
                                                                <option value="">Ngày</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8" selected="">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                                <option value="13">13</option>
                                                                <option value="14">14</option>
                                                                <option value="15">15</option>
                                                                <option value="16">16</option>
                                                                <option value="17">17</option>
                                                                <option value="18">18</option>
                                                                <option value="19">19</option>
                                                                <option value="20">20</option>
                                                                <option value="21">21</option>
                                                                <option value="22">22</option>
                                                                <option value="23">23</option>
                                                                <option value="24">24</option>
                                                                <option value="25">25</option>
                                                                <option value="26">26</option>
                                                                <option value="27">27</option>
                                                                <option value="28">28</option>
                                                                <option value="29">29</option>
                                                                <option value="30">30</option>
                                                                <option value="31">31</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-3 col-md-3 col-sm-3 col-xs-3">
                                                            <select id="xpts_thang" name="thang" class="myinput" required="">
                                                                <option value="">Tháng</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8" selected="">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-3 col-md-3 col-sm-3 col-xs-3">
                                                            <select id="xpts_nam" name="nam" class="myinput" required="">
                                                                <option value="">Năm</option>
                                                                <option value="1950">1950</option>
                                                                <option value="1951">1951</option>
                                                                <option value="1952">1952</option>
                                                                <option value="1953">1953</option>
                                                                <option value="1954">1954</option>
                                                                <option value="1955">1955</option>
                                                                <option value="1956">1956</option>
                                                                <option value="1957">1957</option>
                                                                <option value="1958">1958</option>
                                                                <option value="1959">1959</option>
                                                                <option value="1960">1960</option>
                                                                <option value="1961">1961</option>
                                                                <option value="1962">1962</option>
                                                                <option value="1963">1963</option>
                                                                <option value="1964">1964</option>
                                                                <option value="1965">1965</option>
                                                                <option value="1966">1966</option>
                                                                <option value="1967">1967</option>
                                                                <option value="1968">1968</option>
                                                                <option value="1969">1969</option>
                                                                <option value="1970">1970</option>
                                                                <option value="1971" selected="">1971</option>
                                                                <option value="1972">1972</option>
                                                                <option value="1973">1973</option>
                                                                <option value="1974">1974</option>
                                                                <option value="1975">1975</option>
                                                                <option value="1976">1976</option>
                                                                <option value="1977">1977</option>
                                                                <option value="1978">1978</option>
                                                                <option value="1979">1979</option>
                                                                <option value="1980">1980</option>
                                                                <option value="1981">1981</option>
                                                                <option value="1982">1982</option>
                                                                <option value="1983">1983</option>
                                                                <option value="1984">1984</option>
                                                                <option value="1985">1985</option>
                                                                <option value="1986">1986</option>
                                                                <option value="1987">1987</option>
                                                                <option value="1988">1988</option>
                                                                <option value="1989">1989</option>
                                                                <option value="1990">1990</option>
                                                                <option value="1991">1991</option>
                                                                <option value="1992">1992</option>
                                                                <option value="1993">1993</option>
                                                                <option value="1994">1994</option>
                                                                <option value="1995">1995</option>
                                                                <option value="1996">1996</option>
                                                                <option value="1997">1997</option>
                                                                <option value="1998">1998</option>
                                                                <option value="1999">1999</option>
                                                                <option value="2000">2000</option>
                                                                <option value="2001">2001</option>
                                                                <option value="2002">2002</option>
                                                                <option value="2003">2003</option>
                                                                <option value="2004">2004</option>
                                                                <option value="2005">2005</option>
                                                                <option value="2006">2006</option>
                                                                <option value="2007">2007</option>
                                                                <option value="2008">2008</option>
                                                                <option value="2009">2009</option>
                                                                <option value="2010">2010</option>
                                                                <option value="2011">2011</option>
                                                                <option value="2012">2012</option>
                                                                <option value="2013">2013</option>
                                                                <option value="2014">2014</option>
                                                                <option value="2015">2015</option>
                                                                <option value="2016">2016</option>
                                                                <option value="2017">2017</option>
                                                                <option value="2018">2018</option>
                                                                <option value="2019">2019</option>
                                                                <option value="2020">2020</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-2 col-md-2 col-sm-2 col-xs-2">
                                                    <input type="radio" name="gioitinh" value="nam" checked=""> Nam
                                                </div>
                                                <div class="col-2 col-md-2 col-sm-2 col-xs-2">
                                                    <input type="radio" name="gioitinh" value="nu"> Nữ
                                                </div>
                                                <div class="col-3 col-md-2 col-sm-2 col-xs-2">
                                                    <p class="title_label"><label>Giờ sinh</label></p>
                                                </div>
                                                <div class="col-5 col-md-6 col-sm-6 col-xs-6">
                                                    <select id="xpts_giosinh" class="myinput" name="giosinh" required="">
                                                        <option value="">Chọn giờ sinh</option>
                                                        <option value="1" selected="">Tý (23g - 1g)</option>
                                                        <option value="2">Sửu (1g - 3g)</option>
                                                        <option value="3">Dần (3g - 5g)</option>
                                                        <option value="4">Mão (5g - 7g)</option>
                                                        <option value="5">Thìn (7g - 9g)</option>
                                                        <option value="6">Tỵ (9g - 11g)</option>
                                                        <option value="7">Ngọ (11g - 13g)</option>
                                                        <option value="8">Mùi (13g - 15g)</option>
                                                        <option value="9">Thân (15g - 17g)</option>
                                                        <option value="10">Dậu (17g - 19g)</option>
                                                        <option value="11">Tuất (19g - 21g)</option>
                                                        <option value="12">Hợi (21g - 23g)</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                                    <button id="" type="button" class="btn_xemngay xemboisimkinhdich"><span>Bói sim kinh
                            dịch</span></button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </strong></em></section>

                        <h3 dir="ltr" style="text-align:justify"><em><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">3.3 Cách xem sinh năm 1971 hợp số điện thoại nào theo du niên</span></span></strong></em></h3>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">⇒<strong> Nguyên lý chọn:</strong> Chia dãy số điện thoại thành 5 cặp số liên tiếp sau đó đối chiếu với tám cung của du niên để tìm ra số tốt - xấu bao gồm:</span></span></p>

                        <ul>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">4 cung được cát tinh chiếu mệnh là: Sinh Khí, Phúc Đức, Thiên Y, Phục Vị.</span></span></p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">4 cung được hung tinh chiếu mệnh là: Tuyệt Mệnh, Ngũ Quỷ, Lục Sát, Họa Hại</span></span></p>
                            </li>
                        </ul>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Theo phương pháp này thì chọn sim hợp tuổi 1971 khi chứa nhiều cung sao tốt hơn so với cung xấu theo du niên.</span></span></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">⇒<strong> Đánh giá:</strong> Đây là cách chọn sai bởi Du niên không xác định được số 0, số 5. Vì thế sim điện thoại xuất hiện 1 trong 2 con số sẽ không thể xác định được cặp. Từ đó không thể đánh giá toàn diện dãy sim theo du niên.</span></span></p>

                        <h3 dir="ltr" style="text-align:justify"><em><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">3.4 Chọn số điện thoại hợp tuổi 1971 theo quan niệm dân gian</span></span></strong></em></h3>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">⇒<strong> Nguyên lý chọn: </strong>Chọn sim theo quan niệm dân gian tức là chọn những dãy sim chứa các con số hoặc các bộ số mang ý nghĩa may mắn, tài lộc cho chủ sở hữu như số 2, 6, 8, 9, 68, 86, 38, 39, 78, 79,....&nbsp;</span></span></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">⇒<strong> Đánh giá: </strong>Đây là phương pháp ứng dụng quan niệm dân gian lưu truyền lâu đời để chọn sim. Tuy người dùng có thể dùng phương pháp này như 1 yếu tố để chọn sim vì ý nghĩa dân gian thôi chưa đủ, dãy sim cần phải có sự cân bằng âm dương và hợp phong thủy của chủ nhân thông qua ngũ hành.</span></span></p>

                        <h3 dir="ltr" style="text-align:justify"><em><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">3.5 Cách xem sinh năm 1971 hợp số điện thoại nào theo chia 80</span></span></strong></em></h3>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">⇒ <strong>Nguyên lý chọn:</strong> Không ít người tuổi 1971 chọn sim hợp tuổi thông qua phương pháp chia 80. Các bước tiến hành gồm có:</span></span></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Bước 1: Lấy 4 số cuối điện thoại chia cho 80.</span></span></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Bước 2: Dùng phần thập phân của kết quả ở bước 1 nhân với 80.</span></span></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Bước 3: Đối chiếu kết quả ở bước 2 với bảng ý nghĩa để đánh giá hung - cát của sim.</span></span></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Ở phương pháp này kết quả đối chiếu là cát tức là hợp với người tuổi 1971 và ngược lại tránh dùng số điện thoại có kết quả hung.</span></span></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">⇒ <strong>Đánh giá:</strong> Đây là cách tính chỉ xét tới 4 số cuối điện thoại, trong khi bất kỳ số sim nào cũng có 10 con số. Vì thế cách chọn sim này thiếu tính toàn diện.</span></span></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><img alt="MŨI TÊN" src="https://simhoptuoi.com.vn/media/images/news/143/mui-ten.gif" style="height:26px; width:50px"><em><strong>Ứng dụng phép chia này, mời quý bạn hãy đến ngay công cụ <a href="{{ route('boi-sim-4-so') }}"><u>xem 4 số cuối điện thoại</u></a>&nbsp;để luận hung cát 4 số đuôi số điện thoại bạn đang dùng.</strong></em></span></span></p>

                        <h3 dir="ltr" style="text-align:justify"><em><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">3.6 Chọn sim hợp tuổi 1971 theo đuôi năm sinh</span></span></strong></em></h3>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">⇒ <strong>Nguyên lý chọn: </strong>Chọn sim hợp tuổi theo đuôi năm sinh là dựa vào đuôi sim chứa năm sinh 1971 hoặc có chứa cả ngày tháng năm sinh của người dùng tuổi Kỷ Hợi.&nbsp;</span></span></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">⇒ <strong>Đánh giá: </strong>Đây là cách chọn sim không chính xác, bởi chỉ chứa con số thời gian sinh về mặt hình thức, còn về phong thủy thì không có căn cứ hợp tuổi.</span></span></p>

                        <h2 dir="ltr" style="text-align: justify; margin-bottom: 1.3em; border-bottom: 2px solid rgb(22, 51, 87);"><span style="color:#FF0000"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><span id="4-huong-dan-dung-phan-mem-xem-so-dien-thoai-hop-tuoi-1971">4. Hướng dẫn dùng phần mềm xem số điện thoại hợp tuổi 1971</span></span></span></strong></span></h2>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Muốn chọn được sim phong thủy hợp tuổi 1971 cần nắm chắc kiến thức phức tạp về 5 bộ môn phong thủy và dịch học cổ Phương Đông. Do đó, để tối ưu trải nghiệm cho người dùng, Simhoptuoi.com.vn đã nghiên cứu và đưa ra công cụ chấm điểm sim phong thuỷ khá tiện ích, chuẩn xác dựa trên 5 yếu tố về Âm Dương, Ngũ Hành, Kinh Dịch, Cửu tinh đồ pháp và Quan niệm dân gian.&nbsp;</span></span></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Người dùng chỉ cần nhập đầy đủ và chính xác các thông tin về giới tình, giờ sinh, ngày tháng năm sinh, sau đó ấn chọn kết quả. Công cụ sẽ thay bạn tính toán và đưa ra phân tích cụ thể về các yếu tố tốt xấu của dãy sim cho chủ sở hữu tuổi 1971.</span></span></p>

                        <p dir="ltr" style="text-align:center"><img alt="mũi tên" src="https://simhoptuoi.com.vn/media/images/news/143/mui-ten1.gif" style="height:100px; width:100px"></p>

                        <p dir="ltr" style="text-align:center"><span style="font-size:16px"><span style="font-family:comic sans ms,cursive"><em><strong>Phần mềm</strong></em></span></span></p>

                        <p dir="ltr" style="text-align:center"><a href="{{ route('boi-sim') }}"><span style="font-size:14px"><strong><em><u>PHONG THỦY SIM</u></em></strong></span></a></p>

                        <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><em>(Dự đoán hung cát số sim đang dùng theo #5 tiêu chí Vàng)</em></span></span></p>

                        <h2 dir="ltr" style="text-align: justify; margin-bottom: 1.3em; border-bottom: 2px solid rgb(22, 51, 87);"><span style="color:#FF0000"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><span id="5-goi-y-mot-so-day-sim-hop-tuoi-1971-tan-hoi">5. Gợi ý một số dãy sim hợp tuổi 1971 Tân Hợi</span></span></span></strong></span></h2>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Với người tuổi Tân Hợi thuộc ngũ hành Kim có thể lựa chọn một số dãy sim phong thuỷ hợp tuổi 1971 như sau:</span></span></p>

                        <ul>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Nam giới sinh năm 1971</span></span></strong></p>
                            </li>
                        </ul>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Nam giới thường chú trọng đến phát triển công danh sự nghiệp cho nên trong khi chọn sim phong thủy hợp tuổi Tân Hợi nên ưu tiên lựa chọn những dãy sim có quẻ dịch tốt cho công danh - sự nghiệp hay Tài lộc như: 0815.565.565, 0794.079.289, 0833.923.679, 0769.168.589, 0836.92.7799, 0938.191.789,....</span></span></p>

                        <ul>
                            <li dir="ltr">
                                <p dir="ltr" style="text-align:justify"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Nữ giới sinh năm 1971</span></span></strong></p>
                            </li>
                        </ul>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Với nữ giới thường quan tâm nhiều hơn đến tình duyên, mối quan hệ vợ chồng, con cái cũng như hóa giải vận hạn. Chính vì vậy, nữ mạng tuổi Tân Hợi nên tham khảo một số dãy sim như sau: 0817.913.663, 0835.179.279, 0838.759.759, 0327.567.895, 0868.355.557, 0966.55.99.44,...</span></span></p>

                        <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Như vậy, khi xem sinh năm 1971 hợp số điện thoại nào, người dùng cần kết hợp đồng thời 5 yếu tố về ngũ hành - quẻ dịch - âm dương - cửu tinh - quan niệm dân gian. Bên cạnh đó, để tránh áp dụng sai lầm cũng như thuận tiện hơn trong việc chọn sim, người dùng Tân Hợi có thể sử dụng công cụ tìm sim hợp tuổi của <strong><u><a href="{{ route('home') }}">{{ $nameSite }} </a></u></strong>.</span></span></p>
                    </div>
                </div>
            </div>
        </div>
        

    </section>
@endsection
