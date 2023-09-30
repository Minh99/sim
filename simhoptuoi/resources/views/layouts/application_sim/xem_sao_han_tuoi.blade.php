@extends('app')

@section('title', 'Bảng tra sao hạn tuổi')

@section('content')
    <script>
        $(document).ready(function () {
            $('.btn_xemngay_sao_han').click(function (e) {
                e.preventDefault();
                $('#form-sao-han').submit();
            });

        });
    </script>
    <section class="contentPage">
        <h1 class="title_h1">Xem sao hạn, sao chiếu mệnh theo tuổi</h1>
        <section class="boxForm">
            <div class="headForm">
                <p class="title_p" style="color:#fff">Nhập đầy đủ thông tin để xem kết quả chính xác nhất! </p>
            </div>
            <div class="bodyForm">
                <div class="row">
                    <div class="col-12 col-md-12">
                        <form method="post" id="form-sao-han" name="search_xemsaohan" action="{{ route('sao-han-theo-tuoi') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-12">
                                    <div class="row">
                                        <div class="col-6 col-md-6 col-sm-6 col-6">
                                            <p class="title_label text-center"><label>Năm sinh(AL)</label></p>
                                        </div>
                                        <div class="col-6 col-md-6 col-sm-6 col-6 text-center">

                                            <select name="namsinh" class="namsinh myinput w-100" required="">
                                                <option value="1950" selected >1950</option>
                                                @for($iii = 1951; $iii<=2020; $iii++)
                                                    <option value="{{ $iii }}" @if(($data['namsinh'] ?? '') == $iii) selected @endif >{{ $iii }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                        <div class="col-6 col-md-6 col-sm-6 col-6">
                                            <p class="title_label text-center"><label>Năm xem</label></p>
                                        </div>
                                        <div class="col-6 col-md-6 col-sm-6 col-6 text-center">
                                            <select name="namxem" class="myinput w-100" required="">
                                                <option value="2010" selected >2010</option>
                                                @for($ii = 2011; $ii<=2030; $ii++)
                                                    <option value="{{ $ii }}" @if(($data['namxem'] ?? '') == $ii) selected @endif>{{ $ii }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                        <div class="col-6 col-md-6 col-sm-6 col-6">
                                            <p class="title_label text-center"><label>Giới tính</label></p>
                                        </div>
                                        <div class="col-6 col-md-6 col-sm-6 col-6 text-center">
                                            <select name="gioitinh" class="myinput w-100" required="">
                                                <option @if(!empty($data['gioitinh']) && $data['gioitinh'] === 'nam') selected @endif value="nam">Nam
                                                </option>
                                                <option @if(!empty($data['gioitinh']) && $data['gioitinh'] === 'nu') selected @endif value="nu">Nữ
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-12 text-center">
                                    <div class="headPositionButton">
                                        <button type="button" class="btn_xemngay bg-danger btn_xemngay_sao_han"><span>Xem ngay</span></button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>

        @if (isset($data) && !empty($data))
            <div class="col-md-12">
                <div class="bodyPage">
                    <div class="siteBodyContent">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div style="overflow-x:auto;"><table class="table table-hover table-bordered table_cuatui">
                                                <tbody style="background: transparent">
                                                <tr>
                                                    <td colspan="2" style="background: transparent; border: 1px solid #af0007">
                                                        <h3 class="text_center h4 boidam">Thông tin về người tuổi {{ $data['namsinh'] }}</h3>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="background: transparent; border: 1px solid #af0007">
                                                        <label>Năm sinh âm lịch:</label>
                                                    </td>
                                                    <td style="background: transparent; border: 1px solid #af0007">
                                                        <p>{{ $data['namsinh'] }}</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="background: transparent; border: 1px solid #af0007">
                                                        <label>Tuổi:</label>
                                                    </td>
                                                    <td style="background: transparent; border: 1px solid #af0007"      >
                                                        <p>{{ $data['tuoiNumber'] }} ( {{ $data['tuoiTxt'] }} )</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="background: transparent; border: 1px solid #af0007">
                                                        <label>Mệnh ngũ hành:</label>
                                                    </td>
                                                    <td style="background: transparent; border: 1px solid #af0007">
                                                        <p>{{ $data['menh'] }}</p>
                                                    </td >
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div id="result">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2 class="title_c title_h1 h3" style="margin-bottom: 1.3em; border-bottom: 2px solid rgb(22, 51, 87);">
                                                Năm {{ $data['namxem'] }} bạn tuổi
                                                {{ $data['tuoiTxt'] }} gặp sao {{ $data['saoContent']['id'] }}
                                            </h2>
                                            <div>
                                                <p dir="ltr" style="text-align:center; text-transform: capitalize">{{ $data['saoContent']['content'] }}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2 class="title_c title_h1 h3" style="margin-bottom: 1.3em; border-bottom: 2px solid rgb(22, 51, 87);">
                                                Năm {{ $data['namxem'] }} bạn tuổi
                                                {{ $data['tuoiTxt'] }} gặp hạn {{ $data['hanContent']['id'] }}
                                            </h2>
                                            <div>
                                                <p dir="ltr" style="text-align:center; text-transform: capitalize">{{ $data['hanContent']['content'] }}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="alert alert-warning info_new">
                                                @php
                                                $namsinh = $data['namsinh'];
                                                @endphp
                                                <p>
                                                    <img src="https://simhoptuoi.com.vn/templates/site/images/star.gif" alt="star"> Để hóa giải hạn {{ $data['hanContent']['id'] }} cho tuổi
                                                    {{ $data['tuoiTxt'] }} trong năm {{ $data['namxem'] }} quý
                                                    bạn nên sử dụng sim phong thủy giúp cải biến vận mệnh :
                                                    <a href="{{ route('sim-hop-nam-sinh', ['slug' => "$namsinh"]) }}" style="font-weight: bold;">
                                                        SIM HỢP TUỔI {{ $data['namsinh'] }}
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
        <div class="col-md-12">
            <div class="textTopHome readmore_content_js" data-readmore="" aria-expanded="false" id="undefined1" style="max-height: none; height: 14830.8px;">
                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><strong>Sao chiếu mệnh</strong>, hạn năm thay đổi theo từng năm của mỗi tuổi. Trong đó, sao chiếu chia thành 3 loại sao tốt, sao trung tính, sao xấu. Hạn năm cũng chia thành đại hạn, tiểu hạn và hạn xấu. Những ảnh hưởng của mức độ các sao cũng khác nhau. Nắm được sao và ảnh hưởng sẽ chủ động được công việc và có những kế hoạch hiệu quả.</span></span></p>

                <h2 dir="ltr" style="text-align: justify; margin-bottom: 1.3em; border-bottom: 2px solid rgb(22, 51, 87);"><span style="font-size:18px"><strong><span style="font-family:arial,helvetica,sans-serif"><span id="i-bang-tra-sao-han-han-xau-chieu-menh-nam-2023">I. Bảng tra sao hạn, hạn xấu chiếu mệnh năm 2023</span></span></strong></span></h2>

                <h3 dir="ltr" style="text-align:justify"><span style="font-size:16px"><strong><span style="font-family:arial,helvetica,sans-serif">1. Bảng tra sao hạn, hạn xấu cho người tuổi Tý</span></strong></span></h3>

                <table class="table table-responsive table-bordered">
                    <tbody>
                    <tr>
                        <td rowspan="2">
                            <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><strong>Tuổi</strong></span></span></p>
                        </td>
                        <td colspan="2">
                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">NAM</span></span></strong></p>
                        </td>
                        <td colspan="2">
                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">NỮ</span></span></strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Sao chiếu</span></span></strong></p>
                        </td>
                        <td style="text-align:center"><span style="font-family:arial,helvetica,sans-serif"><span style="font-size:14px"><strong>Hạn năm</strong></span></span></td>
                        <td>
                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Sao chiếu</span></span></strong></p>
                        </td>
                        <td style="text-align:center"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><strong>Hạn năm</strong></span></span></td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Canh Tý</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">La Hầu</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Tam Kheo</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Kế Đô</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thiên Tinh</span></span></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Nhâm Tý</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Kế Đô</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Địa Võng</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thái Dương</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Địa Võng</span></span></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Giáp Tý</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thái Bạch</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thiên Tinh</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thái Âm</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Tam Kheo</span></span></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Bính Tý</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">La Hầu</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Tam Kheo</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Kế Đô</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thiên Tinh</span></span></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Mậu Tý</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Kế Đô</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Địa Võng</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thái Dương</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Địa Võng</span></span></p>
                        </td>
                    </tr>
                    </tbody>
                </table>



                <h3 dir="ltr" style="text-align:justify"><span style="font-size:16px"><strong><span style="font-family:arial,helvetica,sans-serif">2. Bảng tính sao hạn, hạn xấu cho người tuổi Sửu</span></strong></span></h3>

                <table class="table table-responsive table-bordered">
                    <tbody>
                    <tr>
                        <td rowspan="2">
                            <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">T<strong>uổi</strong></span></span></p>
                        </td>
                        <td colspan="2">
                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">NAM</span></span></strong></p>
                        </td>
                        <td colspan="2">
                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">NỮ</span></span></strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Sao chiếu</span></span></strong></p>
                        </td>
                        <td style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Hạn năm</span></span></strong></td>
                        <td>
                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Sao chiếu</span></span></strong></p>
                        </td>
                        <td style="text-align:justify"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Hạn năm</span></span></strong></td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Tân Sửu</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Mộc Đức</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Huỳnh Tuyền</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thủy Diệu</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Toán Tận</span></span></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Quý Sửu</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Vân Hớn</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thiên La</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">La Hầu</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Diêm Vương</span></span></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Ất Sửu</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thủy Diệu</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thiên Tinh</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Mộc Đức</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Tam Kheo</span></span></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Đinh Sửu</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Mộc Đức</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Huỳnh Tuyền</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thủy Diệu</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Toán Tận</span></span></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Kỷ Sửu</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Vân Hớn</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thiên La</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">La Hầu</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Diêm Vương</span></span></p>
                        </td>
                    </tr>
                    </tbody>
                </table>



                <h3 dir="ltr" style="text-align:justify"><span style="font-size:16px"><strong><span style="font-family:arial,helvetica,sans-serif">3. Bảng tra sao hạn, hạn xấu cho người tuổi Dần</span></strong></span></h3>

                <table class="table table-responsive table-bordered">
                    <tbody>
                    <tr>
                        <td rowspan="2">
                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Tuổi</span></span></strong></p>
                        </td>
                        <td colspan="2">
                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">NAM</span></span></strong></p>
                        </td>
                        <td colspan="2">
                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">NỮ</span></span></strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Sao chiếu</span></span></strong></p>
                        </td>
                        <td style="text-align:center"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><strong>Hạn năm</strong></span></span></td>
                        <td>
                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Sao chiếu</span></span></strong></p>
                        </td>
                        <td style="text-align:center"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><strong>Hạn năm</strong></span></span></td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Nhâm Dần</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thái Âm</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Diêm Vương</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thái Bạch</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thiên La</span></span></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Giáp Dần</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thái Dương</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Toán Tận</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thổ Tú</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Huỳnh Tuyền</span></span></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Bính Dần</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thổ Tú</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Ngũ Mộ</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Vân Hớn</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Ngũ Mộ</span></span></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Mậu Dần</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thái Âm</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Diêm Vương</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thái Bạch</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thiên La</span></span></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Canh Dần</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thái Dương</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Toán Tận</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thổ Tú</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Huỳnh Tuyền</span></span></p>
                        </td>
                    </tr>
                    </tbody>
                </table>



                <h3 dir="ltr" style="text-align:justify"><span style="font-size:16px"><strong><span style="font-family:arial,helvetica,sans-serif">4. Bảng tính sao hạn, hạn xấu cho người tuổi Mão</span></strong></span></h3>

                <table class="table table-responsive table-bordered">
                    <tbody>
                    <tr>
                        <td rowspan="2">
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Tuổi</span></span></p>
                        </td>
                        <td colspan="2">
                            <p dir="ltr" style="text-align:center"><span style="font-size:14px"><strong>NAM</strong></span></p>
                        </td>
                        <td colspan="2">
                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">NỮ</span></span></strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Sao chiếu</span></span></strong></p>
                        </td>
                        <td style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Hạn năm</span></span></strong></td>
                        <td>
                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Sao chiếu</span></span></strong></p>
                        </td>
                        <td style="text-align:justify"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Hạn năm</span></span></strong></td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Quý Mão</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Kế Đô</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Địa Võng</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thái Dương</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Địa Võng</span></span></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Ất Mão</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thái Bạch</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Toán Tận</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thái Âm</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Huỳnh Tuyền</span></span></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Đinh Mão</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">La Hầu</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Tam Kheo</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Kế Đô</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thiên Tinh</span></span></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Kỷ Mão</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Kế Đô</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Địa Võng</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thái Dương</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Địa Võng</span></span></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Tân Mão</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thái Bạch</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thiên Tinh</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thái Âm</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Tam Kheo</span></span></p>
                        </td>
                    </tr>
                    </tbody>
                </table>



                <h3 dir="ltr" style="text-align:justify"><span style="font-size:16px"><strong><span style="font-family:arial,helvetica,sans-serif">5. Bảng tra sao hạn, hạn xấu cho người tuổi Thìn</span></strong></span></h3>

                <table class="table table-responsive table-bordered">
                    <tbody>
                    <tr>
                        <td rowspan="2">
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Tuổi</span></span></p>
                        </td>
                        <td colspan="2">
                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">NAM</span></span></strong></p>
                        </td>
                        <td colspan="2">
                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">NỮ</span></span></strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Sao chiếu</span></span></strong></p>
                        </td>
                        <td style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Hạn năm</span></span></strong></td>
                        <td>
                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Sao chiếu</span></span></strong></p>
                        </td>
                        <td style="text-align:justify"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Hạn năm</span></span></strong></td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Nhâm Thìn</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Mộc Đức</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Huỳnh Tuyền</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thủy Diệu</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Toán Tận</span></span></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Giáp Thìn</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Vân Hớn</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thiên La</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">La Hầu</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Diêm Vương</span></span></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Bính Thìn</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thủy Diệu</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thiên Tinh</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Mộc Đức</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Tam Kheo</span></span></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Mậu Thìn</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Mộc Đức</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Huỳnh Tuyền</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thủy Diệu</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Toán Tận</span></span></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Canh Thìn</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Vân Hớn</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thiên La</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">La Hầu</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Diêm Vương</span></span></p>
                        </td>
                    </tr>
                    </tbody>
                </table>



                <h3 dir="ltr" style="text-align:justify"><span style="font-size:16px"><strong><span style="font-family:arial,helvetica,sans-serif">6. Bảng tính sao hạn, hạn xấu cho người tuổi Tỵ</span></strong></span></h3>

                <table class="table table-responsive table-bordered">
                    <tbody>
                    <tr>
                        <td rowspan="2">
                            <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">T<strong>uổi</strong></span></span></p>
                        </td>
                        <td colspan="2">
                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">NAM</span></span></strong></p>
                        </td>
                        <td colspan="2">
                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">NỮ</span></span></strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Sao chiếu</span></span></strong></p>
                        </td>
                        <td style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Hạn năm</span></span></strong></td>
                        <td>
                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Sao chiếu</span></span></strong></p>
                        </td>
                        <td style="text-align:justify"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Hạn năm</span></span></strong></td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Quý Tỵ</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thái Âm</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Diêm Vương</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thái Bạch</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thiên La</span></span></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Ất Tỵ</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thái Dương</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thiên La</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thổ Tú</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Diêm Vương</span></span></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Đinh Tỵ</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thổ Tú</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Ngũ Mộ</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Vân Hớn</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Ngũ Mộ</span></span></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Kỷ Tỵ</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thái Âm</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Diêm Vương</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thái Bạch</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thiên La</span></span></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Tân Tỵ</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thái Dương</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Toán Tận</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thổ Tú</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Huỳnh Tuyền</span></span></p>
                        </td>
                    </tr>
                    </tbody>
                </table>



                <h3 dir="ltr" style="text-align:justify"><span style="font-size:16px"><strong><span style="font-family:arial,helvetica,sans-serif">7. Bảng tra sao hạn, hạn xấu cho người tuổi Ngọ</span></strong></span></h3>

                <table class="table table-responsive table-bordered">
                    <tbody>
                    <tr>
                        <td rowspan="2">
                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Tuổi</span></span></strong></p>
                        </td>
                        <td colspan="2">
                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">NAM</span></span></strong></p>
                        </td>
                        <td colspan="2">
                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">NỮ</span></span></strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Sao chiếu</span></span></strong></p>
                        </td>
                        <td style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Hạn năm</span></span></strong></td>
                        <td>
                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Sao chiếu</span></span></strong></p>
                        </td>
                        <td style="text-align:justify"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Hạn năm</span></span></strong></td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Giáp Ngọ</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Kế Đô</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Địa Võng</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thái Dương</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Địa Võng</span></span></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Bính Ngọ</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thái Bạch</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Toán Tận</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thái Âm</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Huỳnh Tuyền</span></span></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Mậu Ngọ</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">La Hầu</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Tam Kheo</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Kế Đô</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thiên Tinh</span></span></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Canh Ngọ</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Kế Đô</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Địa Võng</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thái Dương</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Địa Võng</span></span></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Nhâm Ngọ</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thái Bạch</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thiên Tinh</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thái Âm</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Tam Kheo</span></span></p>
                        </td>
                    </tr>
                    </tbody>
                </table>



                <h3 dir="ltr" style="text-align:justify"><span style="font-size:16px"><strong><span style="font-family:arial,helvetica,sans-serif">8. Bảng tính sao hạn, hạn xấu cho người tuổi Mùi</span></strong></span></h3>

                <table class="table table-responsive table-bordered">
                    <tbody>
                    <tr>
                        <td rowspan="2">
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Tuổi</span></span></p>
                        </td>
                        <td colspan="2">
                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">NAM</span></span></strong></p>
                        </td>
                        <td colspan="2">
                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">NỮ</span></span></strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Sao chiếu</span></span></strong></p>
                        </td>
                        <td style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Hạn năm</span></span></strong></td>
                        <td>
                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Sao chiếu</span></span></strong></p>
                        </td>
                        <td style="text-align:justify"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Hạn năm</span></span></strong></td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Ất Mùi</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Vân Hớn</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Địa Võng</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">La Hầu</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Địa Võng</span></span></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Đinh Mùi</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thủy Diệu</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thiên Tinh</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Mộc Đức</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Tam Kheo</span></span></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Kỷ Mùi</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Mộc Đức</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Huỳnh Tuyền</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thủy Diệu</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Toán Tận</span></span></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Tân Mùi</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Vân Hớn</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thiên La</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">La Hầu</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Diêm Vương</span></span></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Quý Mùi</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thủy Diệu</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Ngũ Mộ</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Mộc Đức</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Ngũ Mộ</span></span></p>
                        </td>
                    </tr>
                    </tbody>
                </table>



                <h3 dir="ltr" style="text-align:justify"><span style="font-size:16px"><strong><span style="font-family:arial,helvetica,sans-serif">9. Bảng tra sao hạn, hạn xấu cho người tuổi Thân</span></strong></span></h3>

                <table class="table table-responsive table-bordered">
                    <tbody>
                    <tr>
                        <td rowspan="2">
                            <p dir="ltr" style="text-align:center"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Tu<strong>ổi</strong></span></span></p>
                        </td>
                        <td colspan="2">
                            <p dir="ltr" style="text-align:center"><span style="font-size:14px"><strong>NAM</strong></span></p>
                        </td>
                        <td colspan="2">
                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">NỮ</span></span></strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Sao chiếu</span></span></strong></p>
                        </td>
                        <td style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Hạn năm</span></span></strong></td>
                        <td>
                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Sao chiếu</span></span></strong></p>
                        </td>
                        <td style="text-align:justify"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Hạn năm</span></span></strong></td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Bính Thân</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thái Dương</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thiên La</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thổ Tú</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Diêm Vương</span></span></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Mậu Thân</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thổ Tú</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Ngũ Mộ</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Vân Hớn</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Ngũ Mộ</span></span></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Canh Thân</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thái Âm</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Diêm Vương</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thái Bạch</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thiên La</span></span></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Nhâm Thân</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thái Dương</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Toán Tận</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thổ Tú</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Huỳnh Tuyền</span></span></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Giáp Thân</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thổ Tú</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Tam Kheo</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Vân Hớn</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thiên Tinh</span></span></p>
                        </td>
                    </tr>
                    </tbody>
                </table>



                <h3 dir="ltr" style="text-align:justify"><span style="font-size:16px"><strong><span style="font-family:arial,helvetica,sans-serif">10. Bảng tính sao hạn, hạn xấu cho người tuổi Dậu</span></strong></span></h3>

                <table class="table table-responsive table-bordered">
                    <tbody>
                    <tr>
                        <td rowspan="2">
                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Tuổi</span></span></strong></p>
                        </td>
                        <td colspan="2">
                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">NAM</span></span></strong></p>
                        </td>
                        <td colspan="2">
                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">NỮ</span></span></strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Sao chiếu</span></span></strong></p>
                        </td>
                        <td style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Hạn năm</span></span></strong></td>
                        <td>
                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Sao chiếu</span></span></strong></p>
                        </td>
                        <td style="text-align:justify"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Hạn năm</span></span></strong></td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Đinh Dậu</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thái Bạch</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Toán Tận</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thái Âm</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Huỳnh Tuyền</span></span></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Kỷ Dậu</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">La Hầu</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Tam Kheo</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Kế Đô</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thiên Tinh</span></span></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Tân Dậu</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Kế Đô</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Địa Võng</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thái Dương</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Địa Võng</span></span></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Quý Dậu</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thái Bạch</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thiên Tinh</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thái Âm</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Tam Kheo</span></span></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Ất Dậu</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">La Hầu</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Tam Kheo</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Kế Đô</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thiên Tinh</span></span></p>
                        </td>
                    </tr>
                    </tbody>
                </table>



                <h3 dir="ltr" style="text-align:justify"><span style="font-size:16px"><strong><span style="font-family:arial,helvetica,sans-serif">11. Bảng tra sao hạn, hạn xấu cho người tuổi Tuất</span></strong></span></h3>

                <table class="table table-responsive table-bordered">
                    <tbody>
                    <tr>
                        <td rowspan="2">
                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Tuổi</span></span></strong></p>
                        </td>
                        <td colspan="2">
                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">NAM</span></span></strong></p>
                        </td>
                        <td colspan="2">
                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">NỮ</span></span></strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Sao chiếu</span></span></strong></p>
                        </td>
                        <td style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Hạn năm</span></span></strong></td>
                        <td>
                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Sao chiếu</span></span></strong></p>
                        </td>
                        <td style="text-align:justify"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Hạn năm</span></span></strong></td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Mậu Tuất</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thủy Diệu</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thiên Tinh</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Mộc Đức</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Tam Kheo</span></span></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Canh Tuất</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Mộc Đức</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Huỳnh Tuyền</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thủy Diệu</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Toán Tận</span></span></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Nhâm Tuất</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Vân Hớn</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thiên La</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">La Hầu</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Diêm Vương</span></span></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Giáp Tuất</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thủy Diệu</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Ngũ Mộ</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Mộc Đức</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Ngũ Mộ</span></span></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Bính Tuất</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Mộc Đức</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Huỳnh Tuyền</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thủy Diệu</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Toán Tận</span></span></p>
                        </td>
                    </tr>
                    </tbody>
                </table>



                <h3 dir="ltr" style="text-align:justify"><span style="font-size:16px"><strong><span style="font-family:arial,helvetica,sans-serif">12. Bảng tính sao hạn, hạn xấu cho người tuổi Hợi</span></strong></span></h3>

                <table class="table table-responsive table-bordered">
                    <tbody>
                    <tr>
                        <td rowspan="2">
                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Tuổi</span></span></strong></p>
                        </td>
                        <td colspan="2">
                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">NAM</span></span></strong></p>
                        </td>
                        <td colspan="2">
                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">NỮ</span></span></strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Sao chiếu</span></span></strong></p>
                        </td>
                        <td style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Hạn năm</span></span></strong></td>
                        <td>
                            <p dir="ltr" style="text-align:center"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Sao chiếu</span></span></strong></p>
                        </td>
                        <td style="text-align:justify"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Hạn năm</span></span></strong></td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Kỷ Hợi</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thổ Tú</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Ngũ Mộ</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Vân Hớn</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Ngũ Mộ</span></span></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Tân Hợi</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thái Âm</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Diêm Vương</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thái Bạch</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thiên La</span></span></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Quý Hợi</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thái Dương</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Toán Tận</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thổ Tú</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Huỳnh Tuyền</span></span></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Ất Hợi</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thổ Tú</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Ngũ Mộ</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Vân Hớn</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Ngũ Mộ</span></span></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Đinh Hợi</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thái Âm</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Diêm Vương</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thái Bạch</span></span></p>
                        </td>
                        <td>
                            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Thiên La</span></span></p>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <h2 dir="ltr" style="text-align: justify; margin-bottom: 1.3em; border-bottom: 2px solid rgb(22, 51, 87);"><span style="font-size:18px"><strong><span style="font-family:arial,helvetica,sans-serif"><span id="ii-sao-chieu-menh-la-gi">II. Sao chiếu mệnh là gì?</span></span></strong></span></h2>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Mỗi năm, mỗi người ứng với một ngôi sao chiếu mệnh khác nhau, riêng của năm đó. Có 0 ngôi sao chiếu được gọi là “Cửu Diệu Tinh Quân”, đan xen là sao tốt, sao xấu và sao trung tính. Cửu Diệu Tinh Quân đóng vai trò theo dõi cũng như quản lý về số mệnh của con người. Chính vì thế, vì Tinh Tú này được đặt tên gọi là Sao chiếu mệnh.</span></span></p>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Từng năm khác nhau, mỗi con giáp sẽ gặp sao chiếu tương ứng. Nếu được sao tốt chiếu thì ý nghĩa mang tới trong năm là sự hanh thông, vận may và mọi việc thuận lợi. Còn gặp năm sao xấu chiếu mệnh thì nên chú ý về những chuyện xui rủi, không may mắn.&nbsp;</span></span></p>

                <p dir="ltr" style="text-align:justify"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Gồm các sao (liệt kê)</span></span></strong></p>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Cửu Diệu Tinh Quân là 9 sao chiếu thay phiên trở lại một lần. Trong đó lần lượt các sao chiếu theo quy luật như sau: Bắt đầu là sao Thái Dương, tới Thái Âm, sao Thái Bạch, sao Vân Hớn, sao Mộc Đức, sao Thổ Tú, sao Thủy Diệu, sao La Hầu và sao Kế Đô.&nbsp;</span></span></p>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">+ Sao tốt: Gồm 3 sao tốt là sao Thái Âm, sao Thái Dương và sao Mộc Đức</span></span></p>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">+ Sao trung tính: Có 3 sao là sao La Hớn, Thổ Tú, Thủy Diệu</span></span></p>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">+ Sao xấu: 3 sao mang ý nghĩa xấu là sao La Hầu, sao Kế Đô và sao Thái Bạch</span></span></p>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Trong số các sao chiếu mệnh thì 2 trường hợp đặc biệt nhất là sao La Hầu với nam mạng, sao Kế Đô với nữ mạng. Vì thế mới phổ biến câu nói “Nam La Hầu, nữ Kế Đô”. Tương ứng với giới tính thì đây là sao chiều mệnh mang ý nghĩa xấu nhất, đồng thời cũng nặng nhất. Ngoài ra, cũng có nhiều quan niệm lưu truyền về sao Thái Bạch như “Thái Bạch sạch bách cửa nhà”. Ý nghĩa về năm sao chiếu Thái Bạch thì người đó chủ về hao tán tiền bạc, mất mát của cải hoặc kinh doanh làm ăn thua lỗ.</span></span></p>

                <h2 dir="ltr" style="text-align: justify; margin-bottom: 1.3em; border-bottom: 2px solid rgb(22, 51, 87);"><span style="font-size:18px"><strong><span style="font-family:arial,helvetica,sans-serif"><span id="iii--y-nghia-cua-sao-chieu-menh">III. Ý nghĩa của sao chiếu mệnh</span></span></strong></span></h2>

                <h3 dir="ltr" style="text-align:justify"><span style="font-size:16px"><strong><span style="font-family:arial,helvetica,sans-serif">1. Sao Vân Hớn</span></strong></span></h3>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Sao chiếu chủ về rối rắm, chân tay và đi lại cẩn thận, làm ăn ở mức trung bình. Nam gặp sao này làm ăn kinh doanh trung bình, đề phòng ốm đau, mồm miệng, tai hình, kiện thưa và bất lợi vào tháng 2, tháng 8 Âm lịch là xấu nhất. Chú ý trong những tháng này chuyện quan sự, chăn nuôi và tình cảm gia đạo. Nữ Vân Hớn chiếu sức khỏe thai sản không tốt, làm việc gì cũng khẩu thiệt. Tai hình hoặc bất lợi thưa kiện. Giống như nam giới tháng 2, tháng 8 là xấu nhất.</span></span></p>

                <h3 dir="ltr" style="text-align:justify"><span style="font-size:16px"><strong><span style="font-family:arial,helvetica,sans-serif">2.&nbsp; Sao Kế Đô</span></strong></span></h3>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Chủ về chuyện buồn phiền, rối rắm đưa tới, tháng xấu nhất là tháng 3, tháng 9 Âm lịch. Nam mạng gặp Kế Đô mọi việc trung bình, cẩn thận tiền bạc hao tốn, bệnh tật, thị phi, chuyện buồn rầu hoặc không may đưa tới cho gia đạo. Đối với nữ mạng thì đây là hung tinh, dễ vướng vào nạn tai, tang sự, thị phi, bệnh tật, họa vô đơn chí. Tuy nhiên nếu gặp sao này mà mang thai thì lại “hên may lạ thường”. Người nữ mạng sinh sản yên lành và cái hên mang tới cả cho chồng. Còn không mang thai thì chủ về lao đao, lận đận đủ đường.</span></span></p>

                <h3 dir="ltr" style="text-align:justify"><span style="font-size:16px"><strong><span style="font-family:arial,helvetica,sans-serif">3. Sao Thái Âm</span></strong></span></h3>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Đây là sao chiếu tốt chủ về phúc lộc, may mắn, tin vui đưa tới và lộc về nhà cửa đất cát. Nam mạng sao chiếu này được quý nhân giúp đỡ về tiền bạc, vì thế Thái Âm còn được gọi là Tài Tinh. Đối với người còn độc thân gặp Thái Âm dễ gặp được duyên kỳ ngộ. Tháng tốt nhất trong năm là tháng 9. Nữ mạng được Thái Âm chiếu mệnh cuộc sống hạnh phúc, an yên, vui vẻ, toại như mơ ước. Tuy nhiên chú ý sức khỏe tháng 11.</span></span></p>

                <h3 dir="ltr" style="text-align:justify"><span style="font-size:16px"><strong><span style="font-family:arial,helvetica,sans-serif">4. Sao Thái Dương</span></strong></span></h3>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Cũng là cát tinh ý nghĩa về cầu danh, cầu lộc may mắn, quý nhân hỗ trợ. Nam mạng Thái Dương chiếu mệnh thì mọi việc tốt lành, công danh thăng tiến, làm ăn phát đạt. Tháng đại kiết là tháng 6, tháng 10 Âm lịch. Nữ mạng cuộc sống hân hoan, kinh doanh thuận lợi, bạn hữu giúp đỡ. Nếu mang thai thì bình an, em bé khỏe mạnh, duyên dáng. Người nữ độc thân dễ gặp được duyên lành trong năm. Tuy nhiên người nữ dễ đau ốm trong tháng 6, tháng 10.</span></span></p>

                <h3 dir="ltr" style="text-align:justify"><span style="font-size:16px"><strong><span style="font-family:arial,helvetica,sans-serif">5. Sao Mộc Đức</span></strong></span></h3>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Cát tinh này chủ về may mắn, có danh có lộc và mở mang thêm về công việc. Tháng tốt nhất là tháng 10 cũng như tháng Chạp. Người nam mạng sao chiếu mang tới an vui, may mắn, nhất cho phương diện hôn sự. Cẩn thận trong năm dễ bệnh về mắt. Sao chiếu này với nữ mạng cũng vô cùng may mắn cho chuyện tình cảm. Đề phòng bệnh máu huyết.</span></span></p>

                <h3 dir="ltr" style="text-align:justify"><span style="font-size:16px"><strong><span style="font-family:arial,helvetica,sans-serif">6. Sao Thủy Diệu</span></strong></span></h3>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Sao chiếu có sự đan xen giữa ý nghĩa tốt và xấu. Đó là có tin vui tới nhưng lại khẩu thiệt và chủ về thị phi. Chủ về đón được tài lộc và hỷ sự trong nhà năm này. Đặc biệt là mạng Mộc, mạng Kim mọi việc đều tốt. Kỵ nhất là tháng 4, tháng 8 Âm lịch dễ gặp chuyện thị phi, mất mát về của cải. khẩu thiệt hoặc bị nói xấu sau lưng.</span></span></p>

                <h3 dir="ltr" style="text-align:justify"><span style="font-size:16px"><strong><span style="font-family:arial,helvetica,sans-serif">7. Sao La Hầu</span></strong></span></h3>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Sao này chủ về mọi việc rối rắm, dễ đau ốm hoặc làm ăn gặp nhiều khó khăn. Chú ý về chuyện phiền muộn nhất vào tháng 1 hoặc tháng 7 Âm lịch người mạng Mộc có thể bị ảnh hưởng nhiều và nặng hơn sao khác, bởi sao thuộc hành Kim. Đối với nam mạng sao La Hầu chiếu dễ gặp chuyện không may, cẩn thận công quyền, luật phá hoặc bệnh về tai mắt, tiền bạc hao tán. Sao chiếu này đối với nữ mạng là hung tinh, mang tới điều dữ, có thể vướng vào thị phi hoặc công quyền luật pháp. Trong năm có thể bị bệnh về mắt hoặc máu huyết.</span></span></p>

                <h3 dir="ltr" style="text-align:justify"><span style="font-size:16px"><strong><span style="font-family:arial,helvetica,sans-serif">8. Sao Thổ Tú</span></strong></span></h3>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Là sao xấu thể hiện sự rối rắm, tình cảm của gia đạo nhiều chuyện không như ý, nạn tai. Chiếu mệnh sao này mang đến sự xung khắc, trở ngại, xuất hành không thuận, bất hòa trong gia đạo, thua lỗ chăn nuôi, sức khỏe kém đi. Xấu nhất trong năm là tháng 4, tháng 8 theo lịch Âm lịch.</span></span></p>

                <h3 dir="ltr" style="text-align:justify"><span style="font-size:16px"><strong><span style="font-family:arial,helvetica,sans-serif">9. Sao Thái Bạch</span></strong></span></h3>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Đây là sao xấu chủ về hao tán tiền bạc, sức khỏe dễ đau ốm. Công danh bất lợi. Công việc trong năm dễ bị quấy phá, tiền của hao tán tới mức trắng tay và đề phòng về chuyện quân sự. Những tháng xấu nhất của tháng là này là tháng 2, tháng 5 và tháng 8, đặc biệt xấu với người có ngũ hành Mộc và kỵ với màu trắng.</span></span></p>

                <h2 dir="ltr" style="text-align: justify; margin-bottom: 1.3em; border-bottom: 2px solid rgb(22, 51, 87);"><span style="font-size:18px"><strong><span style="font-family:arial,helvetica,sans-serif"><span id="iv-kh-aiquat-ve-han-nam">IV. Khái quát về hạn năm</span></span></strong></span></h2>

                <h3 dir="ltr" style="text-align:justify"><span style="font-size:16px"><strong><span style="font-family:arial,helvetica,sans-serif">1. Hạn năm là gì?</span></strong></span></h3>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Khái niệm: Hạn chính là những tai ương, rủi ro, bất lợi, thậm chí là tai nạn mang tới cho chủ mệnh. Hạn năm tương ứng với tai ương, bất lợi đưa tới cho chủ nhân trong một năm. Hạn này thay đổi theo các năm cho từng tuổi.</span></span></p>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Gồm các sao (liệt kê)</span></span></p>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Hạn năm chia thành 8 hạn là Huỳnh Tuyền, Ngũ Mộ, Tam Kheo, Thiên Tinh, Thiên La, Toán Tận, Địa Võng, Diêm Vương. Các hạn này được chia thành 3 loại là đại hạn, tiểu hạn và hạn xấu. Cụ thể như sau:</span></span></p>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">+ Đại Hạn: bao gồm hạn Huỳnh Tuyền, hạn Toán Tận</span></span></p>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">+ Tiểu Hạn: Tam Kheo, Ngũ Mộ</span></span></p>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">+ Hạn Xấu: Thiên Tinh, Thiên La, Địa Võng, Diêm Vương.</span></span></p>

                <h3 dir="ltr" style="text-align:justify"><span style="font-size:16px"><strong><span style="font-family:arial,helvetica,sans-serif">2. Tác động ảnh hưởng của từng hạn năm</span></strong></span></h3>

                <p dir="ltr" style="text-align:justify"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">1. HẠN: Tam Kheo (Tiểu hạn):</span></span></strong></p>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Gặp hạn này chủ mệnh chú ý về tay chân, cẩn thận trong việc đi lại. Bên cạnh đó đề phòng sức khỏe dễ bị phong thấp, chứng mỏi mắt hoặc bệnh về xương khớp.</span></span></p>

                <p dir="ltr" style="text-align:justify"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">2. HẠN: Ngũ Mộ (Tiểu hạn):&nbsp;</span></span></strong></p>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Hạn này chủ về tinh thần bất an, hao tán về tiền của. Trong năm không nên cho người khác ngủ nhờ, chớ mua sắm đồ lậu hoặc tai bay vạ gió. Không nên mua đồ mà không có hóa đơn. Đề phòng mất của.</span></span></p>

                <p dir="ltr" style="text-align:justify"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">3. HẠN:Thiên Tinh (Xấu):&nbsp;</span></span></strong></p>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Đề phòng trong năm có chứng ngộ độc. Khi ra ngoài cẩn thận có thể dễ bị tai bay vạ gió. Cẩn thận về tiếng nói. Nữ mạng mang thai trong năm gặp hạn Thiên Tinh cẩn thận bị té ngã, đau ốm. Đau ốm làm lễ sẽ nhanh chóng khỏi được bệnh.</span></span></p>

                <p dir="ltr" style="text-align:justify"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">4. HẠN: Toán Tận</span></span></strong></p>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Gặp hạn Toán Tận chủ về trong năm đau ốm, bệnh tật. Cẩn thận đi xe cộ có thể gặp chuyện không được may mắn. Đây cũng là năm không nên khai thác lâm sản, chủ về những điều không tốt.</span></span></p>

                <p dir="ltr" style="text-align:justify"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">5. HẠN: Thiên La (Xấu):&nbsp;</span></span></strong></p>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Gặp sao chiếu Thiên La chủ mệnh dễ đau ốm và lâu ngày khó khỏi bệnh. Nếu bệnh tật thì thường do có quỷ ma quấy phá nên sức khỏe không được tốt.</span></span></p>

                <p dir="ltr" style="text-align:justify"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">6. HẠN: Địa Võng (Xấu):&nbsp;</span></span></strong></p>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Địa Võng là hạn chiếu chủ về trong năm nếu xuất hành đi chơi xa vào giờ và ngày xấu như giờ tuất, ngày tuất sẽ dễ gặp phải chuyện buồn phiền. Bên cạnh đó lời ăn tiếng nói cũng nên cẩn thận. Làm ăn khó khăn, công việc dễ bỏ dở và chú ý trong họ có tang gia.</span></span></p>

                <p dir="ltr" style="text-align:justify"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">7. HẠN: Diêm Vương</span></span></strong></p>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Đây là hạn chiếu mang ý nghĩa về tiền bạc mất mát, tình cảm của vợ chồng dễ có sự bất hòa. Tuy nhiên về mưu cầu làm ăn kinh doanh có lộc đưa tới. Đối với nữ mạng gặp hạn này thì sinh đẻ có thể gặp bất lợi.</span></span></p>

                <p dir="ltr" style="text-align:justify"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">9. HẠN: Huỳnh Tuyền (Đại hạn):</span></span></strong></p>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Hạn Huỳnh Tuyền thể hiện ý nghĩa về trong năm có thể bị bệnh nghiêm trọng, khó có thể qua khỏi được. Bên cạnh đó việc mưu cầu danh lợi còn chủ về thất bại.</span></span></p>

                <h2 dir="ltr" style="text-align: justify; margin-bottom: 1.3em; border-bottom: 2px solid rgb(22, 51, 87);"><span style="font-size:18px"><strong><span style="font-family:arial,helvetica,sans-serif"><span id="v-cach-hoa-giai-sao-xau-han-xau-theo-chuyen-gia">V. Cách hóa giải sao xấu, hạn xấu theo chuyên gia</span></span></strong></span></h2>

                <h3 dir="ltr" style="text-align:justify"><span style="font-size:16px"><strong><span style="font-family:arial,helvetica,sans-serif">1. Cách dâng sao giải hạn xấu</span></strong></span></h3>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><strong>+ Cúng giải sao Thái Bạch (</strong>ngày giờ tốt, hướng cúng, màu bài vị, chữ ghi trên bài vị, số lượng nến)</span></span></p>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Mỗi tháng nhằm ngày 15 Âm lịch chủ mệnh nên cúng giải hạn sao Thái Bạch. Khoảng thời gian cúng khoảng từ 21 cho tới 23 giờ. Bài vị sử dụng có giấy trắng, ghi thêm dòng chữ “Tây Phương Canh Tân Kim Đức Tinh Quân”. Hướng tốt làm lễ là hướng Tây.</span></span></p>

                <p dir="ltr" style="text-align:justify"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">+ Cúng giải sao La Hầu:</span></span></strong></p>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Cúng giải hạn sao La Hầu vào ngày mùng 8 Âm lịch hàng tháng. Thắp 9 ngọn đèn vào 21 tới 23 giờ và chuẩn bị bài vị giấy vàng. Trên bài vị ghi như sau “Thiên Cung Thần Thủ La Hầu Tinh Quân”. Rồi sau đó nhằm hướng Bắc để tiến hành làm lễ.</span></span></p>

                <p dir="ltr" style="text-align:justify"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">+ Cung giải sao Kế Đô:&nbsp;</span></span></strong></p>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Đầu năm, mỗi tháng, đặc biệt vào những tháng Kỵ như tháng 1, tháng 3, tháng 9 Âm lịch nên tiến hành cũng giải hạn vào ngày 18. Chuẩn bị 21 ngọn đèn, nhằm hướng Tây làm lễ. Thời gian cúng lễ nên vào khoảng 21 cho đến 23 giờ. Bài vị sử dụng có giấy vàng, ghi lên dòng chữ&nbsp; “Thiên Vỉ Cung Phân Kế Đô tinh quân”.</span></span></p>

                <p dir="ltr" style="text-align:justify"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">+ Cúng giải sao Mộc Đức:</span></span></strong></p>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Cầu tài lộc đầu năm, cúng giải hạn mỗi tháng nhằm vào ngày 25 Âm lịch. Việc cúng nên tiến hành từ khoảng 19 đến 21 giờ. Bài vị sử dụng có giấy xanh và ghi “Đông Phương Giáp Ất Mộc Đức Tinh Quân”. Ngoài ra cần chuẩn bị đủ 20 ngọn đèn để làm lễ và nhằm hướng Đông để cúi lạy.</span></span></p>

                <p dir="ltr" style="text-align:justify"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">+ Cúng giải sao Thái Dương:&nbsp;</span></span></strong></p>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Sao chiếu này cầu tài, cầu lộc mỗi tháng nên nhằm ngày 27 Âm lịch trong khoảng từ 21 cho đến khoảng 23 giờ. Ngọn đèn thắp lên nên chuẩn bị đủ 12 chiếc và nhằm theo hướng Đông tiến hành làm lễ. Sử dụng bài vị giấy màu vàng và trên bài vị có ghi “Nhật Cung Thái Dương Thiên Tử Tinh Quân”. Tiếp đó thì khấn cung thỉnh.</span></span></p>

                <p dir="ltr" style="text-align:justify"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">+ Cúng giải sao Vân hớn:&nbsp;</span></span></strong></p>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Cầu an đầu năm, mỗi tháng giải hạn, đặc biệt là vào tháng 4, tháng 5 Âm lịch cúng vào ngày 29. Thời gian cúng lễ từ 21 - 23 giờ, theo hướng Tây và thắp 15 ngọn đèn. Sử dụng bài vị có giấy hồng, ghi trên bài vị dòng chữ “Nam Phương Bính Đinh Hỏa Đức Tinh Quân”.&nbsp;</span></span></p>

                <p dir="ltr" style="text-align:justify"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">+ Cúng giải sao Thổ Tú:</span></span></strong></p>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Giải hạn sao Thổ Tú vào mỗi tháng chủ mệnh cúng vào ngày 19 Âm lịch. Tốt nhất nên tiến hành cúng lễ vào khoảng 21 giờ. Hướng tốt làm lễ là hướng Tây và thắp lên 15 ngọn đèn. Bài vị sử dụng giấy có màu vàng và ghi “Trung Ương Mậu&nbsp; Kỷ Thổ Đức Tinh Quân”.&nbsp;</span></span></p>

                <p dir="ltr" style="text-align:justify"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">+ Cúng giải sao Thủy Diệu:&nbsp;</span></span></strong></p>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Chủ mệnh cúng giải hạn vào mỗi tháng, hoặc có thể cúng vào những tháng khắc kỵ với tuổi như tháng 4, tháng 8 Âm lịch. Thời gian cúng nhằm ngày 21 Âm lịch, trong khoảng từ 21 cho đến 23 giờ. Sử dụng 7 ngọn đèn nhằm theo hướng Bắc để làm lễ. Cùng với đó tiến hành khấn cung thỉnh.</span></span></p>

                <p dir="ltr" style="text-align:justify"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">+ Cúng giải sao Thái Âm:&nbsp;</span></span></strong></p>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Đầu năm bên cạnh việc cầu an, chủ mệnh tiến hành cúng giải sao mỗi tháng vào ngày 26 Âm lịch. Trong khoảng từ 19 đến 21 giờ và nhằm hướng Tây để làm lễ. Bên cạnh đó chuẩn bị đủ 7 ngọn đèn. Bài vị sử dụng làm lễ có giấy vàng, ghi lên dòng chữ “Nguyệt Cung Thái&nbsp; Âm Hoàng Hậu Tinh Quân”.&nbsp;&nbsp;</span></span></p>

                <h3 dir="ltr" style="text-align:justify"><span style="font-size:16px"><strong><span style="font-family:arial,helvetica,sans-serif">2. Lễ vật cúng sao giải hạn</span></strong></span></h3>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Việc cúng sao giải hạn cần chuẩn bị đầy đủ trước khi tiến hành. Kỹ lưỡng trong khâu lựa chọn, sắp xếp lễ vật sẽ giúp chủ mệnh có buổi lễ giải hạn trang trọng, tôn nghiêm và đạt hiệu quả cao nhất.&nbsp;</span></span></p>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Những lễ vật cần chuẩn bị cho lễ cúng bao gồm đèn hoặc nến (đèn, nến tùy theo việc cúng sao gì, đã có liệt kê đầy đủ ở trên); Bài vị (giấy bài vị có màu gì tùy vào sao cúng), nội dung viết trên bài vị cũng tương tự tùy thuộc vào sao hạn; Mũ vàng; Gạo, muối; Trầu, cau; Nước (chuẩn bị 1 chai nước); Tiền vàng (nên chuẩn bị 1 đinh tiền vàng với số lượng tùy theo ý muốn, tuy nhiên không nên quá nhiều); Hoa tươi, trái cây, oản phẩm.&nbsp;</span></span></p>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Sau khi đã chuẩn bị đầy đủ các lễ vật cúng sao giải hạn thì chủ mệnh sắp lễ. Tiếp đó tiến hành cúng lễ, đọc văn khấn. Sau khi làm lễ hoàn thành thì đem tiền vàng, văn khấn, bài vị đi hóa.&nbsp;</span></span></p>

                <h3 dir="ltr" style="text-align:justify"><span style="font-size:16px"><strong><span style="font-family:arial,helvetica,sans-serif">3. Văn khấn cúng sao giải hạn</span></strong></span></h3>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Con lạy chín phương Trời, mười phương Chư Phật, Chư Phật mười phương.</span></span></p>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Nam mô Hiệu Thiên chí tôn Kim Quyết Ngọc Hoàng Thượng đế.</span></span></p>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Con kính lạy Đức Trung Thiện tinh chúa Bắc cực Tử Vi Tràng Sinh Đại đế.</span></span></p>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Con kính lạy Ngài Tả Nam Tào Lục Ty Duyên Thọ Tinh quân.</span></span></p>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Con kính lạy Đức Hữu Bắc Đẩu cửu hàm Giải ách Tinh quân.</span></span></p>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Con kính lạy (riêng phần này trong gia đình có người sao nào chiếu mệnh thì viết dòng khấn sao đó, còn các sao khác thì không viết):</span></span></p>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Đức Nhật cung Thái Dương Thiên tử Tinh quân (nếu có người sao Thái Dương chiếu mệnh);</span></span></p>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Đức Nguyệt cung Thái Âm Hoàng hậu Tinh quân (nếu có người sao Thái Âm chiếu mệnh);</span></span></p>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Đức Đông phương Giáp Ất Mộc Đức Tinh quân (nếu có người sao Mộc Đức chiếu mệnh);</span></span></p>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Đức Nam phương Bính Đinh Hỏa Đức Tinh quân (nếu có người sao Vân Hán chiếu mệnh);</span></span></p>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Đức Trung ương Mậu Kỷ Thổ Đức Tinh quân (nếu có người sao Thổ Tú chiếu mệnh);</span></span></p>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Đức Tây phương Canh Tân Kim đức Thái Bạch Tinh quân (nếu có người sao Thái Bạch chiếu mệnh);</span></span></p>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Đức Bắc phương Nhâm Quý Thủy đức Tinh quân (nếu có người sao Thủy Diệu chiếu mệnh);</span></span></p>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Đức Thiên cung Thần chủ La Hầu Tinh quân (nếu có người sao La Hầu chiếu mệnh);</span></span></p>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Đức Địa cung Thần Vỹ Kế Đô Tinh quân (nếu có người sao Kế Đô chiếu mệnh).</span></span></p>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Con kính lạy Đức Thượng Thanh Bản mệnh Nguyên Thần Chân quân.</span></span></p>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Tín chủ (chúng) con là:.............................tuổi......................................................................</span></span></p>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Cùng các thành viên trong gia đình là (liệt kê họ tên, tuổi từng thành viên trong gia đình):</span></span></p>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- ................................................................................................................................</span></span></p>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- ................................................................................................................................</span></span></p>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- ...............................................................................................................................</span></span></p>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- ...............................................................................................................................</span></span></p>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Hôm nay là ngày...........tháng......... năm Quý Mão 2023, tín chủ con thành tâm sắm lễ, hương hoa trà quả, đốt nén tâm hương, thiết lập linh án tại (địa chỉ)........................... để làm lễ giải hạn sao (phần này viết tên các sao chiếu mệnh các thành viên trong gia đình trong năm nay)....................... chiếu mệnh.</span></span></p>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Cúi mong chư vị chấp kỳ lễ bạc phù hộ độ trì giải trừ vận hạn; ban phúc, lộc, thọ cho chúng con gặp mọi sự lành, tránh mọi sự dữ, gia nội bình yên, an khang thịnh vượng.</span></span></p>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Tín chủ con lễ bạc tâm thành, trước án kính lễ, cúi xin được phù hộ độ trì.</span></span></p>

                <p dir="ltr" style="text-align:right"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Phục duy cẩn cáo!</span></span></p>

                <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Nắm được sao hạn, sao chiếu của năm chính là cách giúp người dùng có thể chủ động trong nhiều công việc. Đó là dự đoán trước những bất lợi, lên kế hoạch công việc phù hợp và lựa chọn, tính toán thời điểm tốt nhất để tiến hành.&nbsp;</span></span></p>
                <p dir="ltr" style="text-align:justify"><br>
                    &nbsp;</p>            </div>
        </div>
        @endif
    </section>
@endsection
