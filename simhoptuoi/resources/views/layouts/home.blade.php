@extends('app')

@section('title', 'Tìm Mua Sim Hợp Tuổi Uy Tín.')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <section class="main-content-wapper">
        <div class="form-timsim">
            <p class="headding-box">Nhập thông tin có ngay Sim hợp tuổi</p>
            <section class="boxFormSim">
                <div class="bgFormSim">
                    <form method="post" name="form_tim_sin">
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="row">
                                    <div class="col-4 col-md-3 col-sm-3 col-xs-3">
                                        <p class="title_label"><label>Ngày sinh</label></p>
                                    </div>
                                    <div class="col-2 col-md-3 col-sm-3 col-xs-3">
                                        <select id="ngay_sinh_home" name="ngay_sinh" class="myinput">
                                            <option value="" >Ngày</option>
                                            <option value="1" selected >1</option>
                                            @for($i = 2; $i<=31; $i++)
                                                <option value="{{ $i }}">{{ $i }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                    <div class="col-2 col-md-3 col-sm-3 col-xs-3">
                                        <select id="thang_sinh_home" name="thang_sinh" class="myinput">
                                            <option value="" >Tháng</option>
                                            <option value="1" selected >1</option>
                                            @for($ii = 2; $ii<=12; $ii++)
                                                <option value="{{ $ii }}" >{{ $ii }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                    <div class="col-4 col-md-3 col-sm-3 col-xs-3">
                                        <select id="nam_sinh_home" name="nam_sinh"  class="myinput">
                                            <option value="" >Năm</option>
                                            <option value="1950" selected >1950</option>
                                            @for($iii = 1951; $iii<=2020; $iii++)
                                                <option value="{{ $iii }}" >{{ $iii }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row form_info">
                            <div class="col-2 col-md-2 col-sm-2 col-xs-2 justify-content-around">
                                <input type="radio" name="gioi_tinh" value="nam" checked /> Nam
                            </div>
                            <div class="col-2 col-md-2 col-sm-2 col-xs-2 justify-content-around">
                                <input type="radio" name="gioi_tinh" value="nu" /> Nữ
                            </div>
                            <div class="col-3 col-md-2 col-sm-2 col-xs-2">
                                <p class="title_label"><label class="m-0">Giờ sinh</label></p>
                            </div>
                            <div class="col-5 col-md-6 col-sm-6 col-xs-6 select_time">
                                <select class="myinput" name="gio_sinh_home">
                                    <option value="">Chọn giờ sinh</option>
                                    <option value="1"  >Tý (23g - 1g)</option>
                                    <option value="2" selected="" >Sửu (1g - 3g)</option>
                                    <option value="3"  >Dần (3g - 5g)</option>
                                    <option value="4"  >Mão (5g - 7g)</option>
                                    <option value="5"  >Thìn (7g - 9g)</option>
                                    <option value="6"  >Tỵ (9g - 11g)</option>
                                    <option value="7"  >Ngọ (11g - 13g)</option>
                                    <option value="8"  >Mùi (13g - 15g)</option>
                                    <option value="9"  >Thân (15g - 17g)</option>
                                    <option value="10"  >Dậu (17g - 19g)</option>
                                    <option value="11"  >Tuất (19g - 21g)</option>
                                    <option value="12"  >Hợi (21g - 23g)</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                <button id="btn_xem_nam_sinh" class="btn_xemngay bg-danger" type="button"><span>Sim phong thủy hợp tuổi</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
        <div class="sim_collection">
            <h1 class="headding-box">Sim phong thủy hợp tuổi</h1>
            <div class="filter_lists filter_categories">
                <div class="d-flex select-item">
                    <div class="filter-number">
                        <div class="search_number_last form-control">
                            <input type="tel" class="search_phone_last" placeholder="Nhập đuôi sim" value="">
                        </div>
                    </div>
                    <div class="dropdown">
                        <div class="dropdown-toggle no-coppy" id="khoang-gia" data-display="static" data-toggle="dropdown" aria-expanded="false">
                            Khoảng giá
                            <div class="destination-point"></div>
                        </div>
                        <div class="dropdown-menu dropdown-menu-center">
                            <div class="close-menu">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square-fill" viewBox="0 0 16 16">
                                    <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z"/>
                                </svg>
                            </div>
                            <div class="custom-price col-10 col-md-10 align-items-center justify-content-between row d-flex">
                                {{-- <div class="col-5 col-md-5" id="start-price">
                                    <input type="text" class="priceStartPc" value="" placeholder="100">
                                    <label class="place-holder">.000đ</label>
                                </div> --}}
                                <label for="">Giá dưới</label>
                                <div class="col-12 col-md-12" id="end-price">
                                    <input type="text" class="priceEndPc" value="">
                                    <label class="place-holder">.000đ</label>
                                </div>
                            </div>
                            {{-- <div class="drop-select col-12 col-md-12 row price_item justify-content-center m-0 p-0" data-type="3" style="padding-right: 10px !important">
                                <div class="col-3 no-coppy price-item" data-id="0to2" id="0to2" name="Dưới 2 triệu">
                                    Dưới 2 triệu
                                </div>
                                <div class="col-3 col-md-3 no-coppy price-item" data-id="2to3" id="2to3" name="2 - 3 triệu">
                                    2 - 3 triệu
                                </div>
                                <div class="col-3 col-md-3 no-coppy price-item" data-id="3to5" id="3to5" name="3 - 5 triệu">
                                    3 - 5 triệu
                                </div>
                                <div class="col-3 col-md-3 no-coppy price-item" data-id="5to8" id="5to8" name="5 - 8 triệu">
                                    5 - 8 triệu
                                </div>
                                <div class="col-3 col-md-3 no-coppy price-item" data-id="8to10" id="8to10" name="8 - 10 triệu">
                                    8 - 10 triệu
                                </div>
                                <div class="col-3 col-md-3 no-coppy price-item" data-id="10tomax" id="10tomax" name="Trên 10 triệu">
                                    Trên 10 triệu
                                </div>
                            </div> --}}
                            <div class="row action-result col-10 col-md-10">
                                {{-- <div class="col-5 col-md-5 reset no-coppy">Bỏ chọn</div> --}}
                                <div class="col-5 col-md-5 result no-coppy p-3 search-sim">
                                    Chọn
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown">
                        <div class="dropdown-toggle no-coppy" id="dau-so" data-display="static" data-toggle="dropdown" aria-expanded="false">
                            Đầu số
                            <div class="destination-point"></div>
                        </div>
                        <div class="dropdown-menu dropdown-menu-center">
                            <div class="close-menu">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square-fill" viewBox="0 0 16 16">
                                    <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z"/>
                                </svg>
                            </div>
                            <div class="drop-select dau-so d-flex flex-column m-4" data-type="4">
                                <div class="dauso-item " data-id="09" id="09" name="Đầu số 09">09x</div>
                                <div class="dauso-item " data-id="08" id="08" name="Đầu số 08">08x</div>
                                <div class="dauso-item " data-id="07" id="07" name="Đầu số 07">07x</div>
                                <div class="dauso-item " data-id="05" id="05" name="Đầu số 05">05x</div>
                                <div class="dauso-item " data-id="03" id="03" name="Đầu số 03">03x</div>
                            </div>
                            <div class=" action-result col-10 col-md-10">
                                <div class="col-5 col-md-5 result search-sim p-3">
                                    Chọn
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown">
                        <div class="dropdown-toggle no-coppy" data-display="static" id="diem-so" data-toggle="dropdown" aria-expanded="false">
                            Điểm sim
                            <div class="destination-point"></div>
                        </div>
                        <div class="dropdown-menu dropdown-menu-center m-4">
                            <div class="custom-diem align-items-center justify-content-between row d-flex">
                                <div class="d-flex justify-items-center">
                                    <div class="mt-2">
                                        <div class="p-2" id="start-diem">
                                            <input type="number" class="diemStart" value="" placeholder="0 điểm" step="0.25">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="p-2" id="end-diem">
                                            <input type="number" class="diemEnd" value="" placeholder="10 điểm" step="0.25">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="close-menu">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square-fill" viewBox="0 0 16 16">
                                    <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z"/>
                                </svg>
                            </div>
                            <div class="row action-result col-10 col-md-10">
                                <div class="col-5 col-md-5 result search-sim p-3">
                                    Chọn
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="sim-type hide-mobile" data-type="1">
                        <div class="item_sim_type no-coppy" id="sim_tai_loc" data-id="sim_tai_loc" name="Sim Tài lộc">
                            Sim Tài lộc
                        </div>
                    </div>
                    <div class="sim-type hide-mobile" data-type="1">
                        <div class="item_sim_type no-coppy" id="sim_thang_tien" data-id="sim_thang_tien" name="Sim Thăng tiến">
                            Sim Thăng tiến
                        </div>
                    </div>
                </div>
                <div class="d-flex select-item sim-types">
{{--                    <div class="sim-type hide-desktop" data-type="10">--}}
{{--                        <div class="item_sim_type no-coppy" id="ngu_hanh_tuong_sinh" data-id="ngu_hanh_tuong_sinh" name="Ngũ hành tương sinh">--}}
{{--                            Ngũ hành tương sinh--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="sim-type hide-desktop" data-type="10">--}}
{{--                        <div class="item_sim_type no-coppy" id="ngu_hanh_binh_hoa" data-id="ngu_hanh_binh_hoa" name="Ngũ hành bình hòa">--}}
{{--                            Ngũ hành bình hòa--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="sim-type hide-desktop" data-type="1">
                        <div class="item_sim_type no-coppy" id="sim_tai_loc" data-id="sim_tai_loc" name="Sim Tài lộc">
                            Sim Tài lộc
                        </div>
                    </div>
                    <div class="sim-type hide-desktop" data-type="1">
                        <div class="item_sim_type no-coppy" id="sim_thang_tien" data-id="sim_thang_tien" name="Sim Thăng tiến">
                            Sim Thăng tiến
                        </div>
                    </div>
                    <div class="sim-type" data-type="1">
                        <div class="item_sim_type no-coppy" id="sim_cai_van" data-id="sim_cai_van" name="Sim Cải vận">
                            Sim Cải vận
                        </div>
                    </div>
                    <div class="sim-type" data-type="1">
                        <div class="item_sim_type no-coppy" id="sim_tinh_duyen" data-id="sim_tinh_duyen" name="Sim Tình duyên">
                            Sim Tình duyên
                        </div>
                    </div>
{{--                    <div class="sim-type hide-mobile" data-type="10">--}}
{{--                        <div class="item_sim_type no-coppy" id="ngu_hanh_tuong_sinh" data-id="ngu_hanh_tuong_sinh" name="Ngũ hành tương sinh">--}}
{{--                            Ngũ hành tương sinh--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="sim-type hide-mobile" data-type="10">--}}
{{--                        <div class="item_sim_type no-coppy" id="ngu_hanh_binh_hoa" data-id="ngu_hanh_binh_hoa" name="Ngũ hành bình hòa">--}}
{{--                            Ngũ hành bình hòa--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
                <div class="wapper_scroll">
                    <div class="d-flex select-item-network">

                        <div class="select-network" data-type="2">
                            <div class="item_network" data-id="1" id="1" name="viettel">
                                <img src="{{ asset('common/templates/site/images/logo_network/viettel.png')}}" alt="">
                            </div>
                        </div>
                        <div class="select-network" data-type="2">
                            <div class="item_network" data-id="3" id="3" name="mobifone">
                                <img src="{{  asset('common/templates/site/images/logo_network/mobifone.png')}}" alt="">
                            </div>
                        </div>
                        <div class="select-network" data-type="2">
                            <div class="item_network" data-id="2" id="2" name="vinaphone">
                                <img src="{{  asset('common/templates/site/images/logo_network/vinaphone.png')}}" alt="">
                            </div>
                        </div>
                        {{-- <div class="select-network" data-type="2">
                            <div class="item_network" data-id="6" id="6" name="itelecom">
                                <img src="{{  asset('common/templates/site/images/logo_network/itelecom.png')}}" alt="">
                            </div>
                        </div> --}}
                        <div class="select-network" data-type="2">
                            <div class="item_network" data-id="5" id="5" name="gmobile">
                                <img src="{{  asset('common/templates/site/images/logo_network/gmobile.png')}}" alt="">
                            </div>
                        </div>
                        <div class="select-network" data-type="2">
                            <div class="item_network" data-id="4" id="4" name="vietnamobile">
                                <img src="{{  asset('common/templates/site/images/logo_network/vietnammobile.png')}}" alt="">
                            </div>
                        </div>
                        {{-- <div class="select-network" data-type="2">
                            <div class="item_network" data-id="7" id="7" name="reddi">
                                <img src="{{  asset('common/templates/site/images/logo_network/reddi.png')}}" alt="">
                            </div>
                        </div> --}}

                    </div>
                </div>
                <div class="d-flex selected-item-filter list_item_check">
                    <div class="list_filter_item">
                        <div class="remove-all no-coppy">Xoá hết
                            <i class="fa-solid fa-xmark"></i>
                        </div>
                    </div>
                </div>
                <div class="row result-filter d-flex">
                    <div class="col-12 col-md-12">
                        <div class="result-total no-coppy bg-danger">
                            Xem Kết Quả
                        </div>
                    </div>
                </div>
            </div>
            <style type="text/css">
                .select-item>div:first-child {
                    cursor: pointer;
                }
            </style>

            <section class="list_sim mb-4">
                <div style="margin: 1rem auto; text-align: center; width: 30px; height: 30px;" class="bg-danger spinner-border text-light loading" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                <div class="row listSim list_sim_item">
                    {{-- list sim auto gender --}}
                </div>
            </section>
        </div>

        <script>


            function getList(submit = false) {
                var dauso_item = $('.dauso-item');
                var dau_so = [];
                dauso_item.each(function() {
                    if ($(this).hasClass('active')) {
                        dau_so.push($(this).attr('data-id'));
                    }
                });

                var duoi_sim = $('.search_phone_last').val();
                var gia_max = $('.priceEndPc').val();
                var diem_tu = $('.diemStart').val();
                var diem_den = $('.diemEnd').val();

                var loai_sim = [];
                var loai_sim_active = $('.item_sim_type');
                loai_sim_active.each(function() {
                    if ($(this).hasClass('active')) {
                        loai_sim.push($(this).attr('data-id'));
                    }
                });

                var nha_mang = [];
                $nha_mang_active = $('.item_network');
                $nha_mang_active.each(function() {
                    if ($(this).hasClass('active')) {
                        nha_mang.push($(this).attr('data-id'));
                    }
                });
                var ngu_hanh = '';
                if (submit) {
                    var ngay = $('#ngay_sinh_home').val();
                    var thang = $('#thang_sinh_home').val();
                    var nam = $('#nam_sinh_home').val();

                    var gioSinh = $('input[name=gio_sinh_home]').children("option:selected").text();
                    if (gioSinh) gioSinh = parseInt(gioSinh.split('(')[1].slice(0, 2));
                    if (gioSinh >= 23) {
                        var newDate = new Date(nam, thang, ngay);
                        newDate.setDate(newDate.getDate() + 1);
                        ngay = newDate.getDate();
                        thang = newDate.getMonth();
                        nam = newDate.getFullYear();
                    }
                    var lunar = new AmLich(ngay, thang, nam);
                    // console.log(ngay, thang, nam);
                    // console.log(lunar.day+'/'+lunar.month+'/'+lunar.year);

                    var can = canVi(ThienCan(lunar.days));
                    var chi = chiVi(DiaChi(lunar.days));
                    var HK = napAmHanhKhac(can, chi);
                    ngu_hanh = cungPhi[nam][1];
                }

                $.ajax({
                    url:  "{{ route('danh-sach-sim') }}",
                    type: 'GET',
                    data: {
                        'duoi_sim': duoi_sim,
                        'gia_max': gia_max,
                        'dau_so': dau_so,
                        'diem_tu': diem_tu,
                        'diem_den': diem_den,
                        'loai_sim' : loai_sim,
                        'nha_mang': nha_mang,
                        'ngu_hanh': ngu_hanh,
                    },
                    dataType: 'json',
                    beforeSend: function() {
                        $('.list_sim_item').html('');
                        $('.loading').show();
                    },
                    success: function(data) {
                        $('.loading').hide();
                        if (data.length == 0) {
                            $('.list_sim_item').html('<p id="no-data" class="text-center w-100 text-danger">Không có sim nào phù hợp</p>');
                            $('.result-filter').attr('style', 'display: none !important');
                            return;
                        } else {
                            $('#no-data').remove();
                            $('.list_sim_item').html('');
                            $('.result-filter').attr('style', 'display: flex !important');
                            data.forEach(function(item) {
                            let logo_nha_mang = '1.gif';
                            if (item['nha_mang'] == "mobi") {
                                logo_nha_mang = '3.gif';
                            } else if (item['nha_mang'] == "vinaphone") {
                                logo_nha_mang = '2.gif';
                            } else if (item['nha_mang'] == "gmobile") {
                                logo_nha_mang = '5.gif';
                            } else if (item['nha_mang'] == "vietnamobile") {
                                logo_nha_mang = '4.gif';
                            }

                            var sdt = item['sdt'];
                            var linkDetail = "{{ route('detail-sim', ['sdt' => 'PLACEHOLDER']) }}";
                            linkDetail = linkDetail.replace('PLACEHOLDER', sdt);

                            var html = '<div class="col-6 col-sm-6 col-md-6">';
                            html += '<div class="main_box_sim_item">';
                            html += '<div class="wapper_sim_content">';
                            html += '<div class="row">';
                            html += '<div class="col-12 col-sm-12 col-md-6">';
                            html += `<p class="so"><a href="${linkDetail}">${sdt}</a></p>`;
                            html += '</div>';
                            html += `<div class="col-12 col-sm-12 col-md-6 logoNhaMang"><img alt="" src="{{  asset('common/templates/site/images/icon/` + logo_nha_mang +`')}}" /></div>`;
                            html += '</div>';
                            html += `<p class="vuong"><strong>Điểm phong thủy sim: </strong> ${item['diem_phong_thuy']}</p>`;
                            html += `<p class="price"><b>Giá: </b>${item['gia_ban']} VND</p>`;
                            html += `<p class="que"><strong>Sim ngũ hành: </strong> <span class="nguhanh">${item['ngu_hanh']}</span></p>`;
                            html += `<p class="yn"><strong>Quẻ Kinh dịch: </strong>${item['que']}</p>`;
                            html += '</div>';
                            html += '<div class="row">';
                            html += '<div class="col-6 col-sm-6 col-md-6">';
                            html += `<p class="btnmua pt-2"><a href="${linkDetail}" class="btn_mua">Chi tiết <b>>></b></a></p>`;
                            html += '</div>';
                            html += '</div>';
                            html += '</div>';
                            html += '</div>';
                            html += '</div>';
                            $('.list_sim_item').append(html);
                        });
                        }

                    }
                });
            }

            $(document).ready(function() {
                getList();

                $('.search_phone_last').on('input', function(event) {
                    var lastChar = $(this).val().slice(-1);
                    if (isNaN(lastChar)) {
                        $(this).val($(this).val().slice(0, -1));
                        return;
                    }

                    var inputValue = $(this).val();
                    $(this).val(inputValue.replace(/[^0-9]/g, ''));
                    getList();
                });

                $('.search-sim').click(function() {
                    getList();
                });

                $('.item_network').click(function() {
                    getList();
                })

                $('.item_sim_type, .remove-all').click(function() {
                    getList();
                });

                $('#btn_xem_nam_sinh').on('click', function() {
                    getList(true);
                });
            });

        </script>

        <div class="content_home">
            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><strong><u>Sim hợp tuổi</u></strong> đ&atilde; kh&ocirc;ng c&ograve;n qu&aacute; xa lạ với phần lớn người sử dụng điện thoại. Bởi đ&acirc;y l&agrave; loại sim sở hữu đầy đủ c&aacute;c yếu tố phong thủy ph&ugrave; hợp với người d&ugrave;ng n&ecirc;n sẽ c&oacute; khả năng thu h&uacute;t c&aacute;t kh&iacute;, tăng may giải xui. Tuy nhi&ecirc;n, d&atilde;y sim phong thủy hợp tuổi chỉ thực sự ph&aacute;t huy khả năng của m&igrave;nh khi được lựa chọn v&agrave; sử dụng đ&uacute;ng c&aacute;ch.</span></span>
            </p>

            <h2 dir="ltr" style="text-align:justify"><span style="color:#FF0000"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">I. Sim hợp tuổi l&agrave; g&igrave;?</span></span>
                </strong>
                </span>
            </h2>

            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Sim phong thuỷ theo tuổi l&agrave; vật phẩm phong thủy được lựa chọn dựa tr&ecirc;n c&aacute;c học thuyết cổ phương Đ&ocirc;ng. Đồng thời, đảm bảo ph&ugrave; hợp với b&aacute;t tự ng&agrave;y sinh của người d&ugrave;ng (năm, th&aacute;ng, ng&agrave;y, giờ sinh). Những học thuyết phong thủy được sử dụng khi chọn sim hợp tuổi gồm:</span></span>
            </p>

            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- <strong>&Acirc;m dương c&acirc;n bằng: </strong>Vạn vật trong vũ trụ đều được tạo th&agrave;nh từ năng lượng &acirc;m v&agrave; năng lượng dương. Trong đ&oacute;, trạng th&aacute;i l&yacute; tưởng để kh&ocirc;ng ngừng ph&aacute;t triển, lớn mạnh theo học thuyết n&agrave;y ch&iacute;nh l&agrave; &acirc;m dương c&acirc;n bằng, sim số hợp tuổi cũng kh&ocirc;ng nằm ngo&agrave;i quy luật n&agrave;y. Cụ thể l&agrave; con số chẵn mang năng lượng &acirc;m, con số lẻ mang năng lượng dương.&nbsp;</span></span>
            </p>

            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- <strong>Ngũ h&agrave;nh sinh khắc: </strong>Con người t&aacute;c động qua lại với mọi thứ theo quy luật ngũ h&agrave;nh, trong đ&oacute; c&oacute; quan hệ tương sinh, tương trợ (t&iacute;ch cực) v&agrave; quan hệ xung khắc (xấu). Do đ&oacute;, khi chọn sim phong thủy hợp tuổi muốn mang lại năng lượng c&aacute;t kh&iacute; nhất định phải thỏa m&atilde;n mối quan hệ ngũ h&agrave;nh bổ trợ cho bản mệnh của chủ nh&acirc;n.</span></span>
            </p>

            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- <strong>Kinh dịch: </strong>Kinh dịch l&agrave; bộ m&ocirc;n được ph&aacute;t triển nhằm gi&uacute;p con người dự đo&aacute;n tương đối ch&iacute;nh x&aacute;c diễn biến, sự ph&aacute;t triển cũng như t&aacute;c động của sự vật, sự việc với con người trong tương lai. Do đ&oacute;, sim theo tuổi muốn mang lại thay đổi t&iacute;ch cực cho người d&ugrave;ng cũng kh&ocirc;ng thể thiếu yếu tố kinh dịch.</span></span>
            </p>

            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- <strong>Cửu tinh đồ ph&aacute;p: </strong>Huyền kh&ocirc;ng phi tinh l&agrave; phương ph&aacute;p x&aacute;c định thời gian, được người xưa ứng dụng để t&igrave;m ra được yếu tố thuận lợi ở thời điểm hiện tại. V&igrave; thế, một số điện thoại hợp tuổi cũng cần chứa con số mang vượng kh&iacute; tương ứng với thời vận.</span></span>
            </p>
            <h2 dir="ltr" style="text-align:justify"><span style="color:#FF0000"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">II. T&aacute;c dụng của việc d&ugrave;ng sim phong thủy hợp tuổi?</span></span>
                </strong>
                </span>
            </h2>

            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Những t&aacute;c dụng m&agrave; người d&ugrave;ng c&oacute; thể nhận được khi sử dụng số sim hợp tuổi trong thực tế phải kể đến như:</span></span>
            </p>

            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Gi&uacute;p duy tr&igrave; kết nối v&agrave; li&ecirc;n lạc như sim th&ocirc;ng thường: D&atilde;y sim phong thuỷ theo tuổi c&oacute; đầy đủ chức năng sử dụng như một d&atilde;y sim điện thoại th&ocirc;ng thường, gi&uacute;p người d&ugrave;ng giữ li&ecirc;n lạc với người th&acirc;n v&agrave; giải quyết c&ocirc;ng việc một c&aacute;ch nhanh ch&oacute;ng.</span></span>
            </p>

            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Gi&uacute;p mang &yacute; nghĩa như vật phẩm hộ th&acirc;n: số điện thoại hợp tuổi cũng sở hữu đầy đủ năng lượng phong thủy t&iacute;ch cực, gi&uacute;p người d&ugrave;ng thay đổi vận số, gia tăng may mắn cũng như giảm bớt điềm xui rủi kh&ocirc;ng mong muốn.</span></span>
            </p>

            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">- Gi&uacute;p g&acirc;y ấn tượng trong mắt người kh&aacute;c: Với những d&atilde;y sim theo tuổi sở hữu h&igrave;nh thức đẹp: cặp số đẹp, số tam hoa, số tứ qu&yacute;, số năm sinh,... cũng gi&uacute;p người d&ugrave;ng g&acirc;y ấn tượng mạnh với người kh&aacute;c bởi gắn liền với &yacute; nghĩa được biệt hay dễ nhớ.</span></span>
            </p>

            <h2 dir="ltr" style="text-align:justify"><span style="color:#FF0000"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">III. C&aacute;ch t&igrave;m chọn sim hợp tuổi ch&iacute;nh x&aacute;c</span></span>
                </strong>
                </span>
            </h2>

            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Người d&ugrave;ng muốn t&igrave;m sim theo tuổi ch&iacute;nh x&aacute;c nhất v&agrave; ph&ugrave; hợp với nhu cầu sử dụng c&oacute; thể lựa chọn 1 trong 2 phương ph&aacute;p sau:</span></span>
            </p>

            <h3 dir="ltr" style="text-align:justify"><em><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">1. T&igrave;m sim phong thủy hợp tuổi theo 5 yếu tố dự b&aacute;o cổ</span></span></strong></em></h3>

            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Bộ m&ocirc;n phong thủy cổ học Phương Đ&ocirc;ng được vận dụng coi sim phong thủy hợp tuổi dựa tr&ecirc;n sự kết hợp h&agrave;i h&ograve;a giữa 05 yếu tố gồm:</span></span>
            </p>

            <p dir="ltr" style="text-align:justify"><em><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">a. Chọn số điện thoại hợp tuổi theo ngũ h&agrave;nh</span></span></em></p>

            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Sim hợp tuổi l&agrave; d&atilde;y sim c&oacute; ngũ h&agrave;nh tương sinh (tốt nhất) hoặc tương trợ (tốt) với ngũ h&agrave;nh nạp &acirc;m của người d&ugrave;ng. Do đ&oacute;, khi sử dụng người d&ugrave;ng c&oacute; thể nhận lại nguồn năng lượng phong thủy t&iacute;ch cực gi&uacute;p mọi sự trong cuộc sống được thuận lợi hơn. Cụ thể:</span></span>
            </p>

            <ul>
                <li dir="ltr">
                    <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Người mệnh Kim n&ecirc;n chọn sim ngũ h&agrave;nh Thổ hoặc ngũ h&agrave;nh Kim</span></span>
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Người mệnh Thủy n&ecirc;n chọn sim ngũ h&agrave;nh Kim hoặc ngũ h&agrave;nh Thủy</span></span>
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Người mệnh Mộc n&ecirc;n chọn sim ngũ h&agrave;nh Thủy hoặc ngũ h&agrave;nh Mộc</span></span>
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Người mệnh Thổ n&ecirc;n chọn sim ngũ h&agrave;nh Hỏa hoặc ngũ h&agrave;nh Thổ</span></span>
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Người mệnh Hỏa n&ecirc;n chọn sim ngũ h&agrave;nh Mộc hoặc ngũ h&agrave;nh Hỏa.</span></span>
                    </p>
                </li>
            </ul>

            <p dir="ltr" style="text-align:justify"><em><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">b. T&igrave;m sim hợp tuổi theo &acirc;m dương</span></span></em></p>

            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Theo học thuyết &acirc;m dương th&igrave; sim phong thủy hợp tuổi n&ecirc;n c&oacute; nội tại sim c&acirc;n bằng &acirc;m dương hoặc tương phối với &acirc;m/dương mạng của người d&ugrave;ng. Cụ thể:</span></span>
            </p>

            <ul>
                <li dir="ltr">
                    <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Sim c&acirc;n bằng &acirc;m dương - tỉ lệ số chẵn v&agrave; số lẻ trong sim điện thoại l&agrave; 50%.</span></span>
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Sim tương phối với &acirc;m/dương mạng của người d&ugrave;ng l&agrave;: người &Acirc;m Mạng n&ecirc;n chọn sim lệch dương (6 số lẻ) v&agrave; ngược lại với người thuộc Dương Mạng.</span></span>
                    </p>
                </li>
            </ul>

            <p dir="ltr" style="text-align:justify"><em><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">c. Mua sim số hợp tuổi theo quẻ dịch</span></span></em></p>

            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Mỗi số điện thoại sẽ tương ứng với 1 quẻ chủ v&agrave; 1 quẻ hỗ, dựa v&agrave;o &yacute; nghĩa của quẻ dịch m&agrave; người d&ugrave;ng chọn được d&atilde;y sim hợp với tuổi ph&ugrave; hợp với nhu cầu của m&igrave;nh: k&iacute;ch t&agrave;i lộc, k&iacute;ch t&igrave;nh duy&ecirc;n, k&iacute;ch c&ocirc;ng danh hay h&oacute;a giải vận hạn. Trong đ&oacute;, quẻ chủ l&agrave; yếu tố trọng yếu (chọn quẻ C&aacute;t hoặc Đại c&aacute;t), quẻ hỗ giữ vai tr&ograve; trợ gi&uacute;p (chọn quẻ B&igrave;nh h&ograve;a, C&aacute;t hoặc Đại c&aacute;t).</span></span>
            </p>

            <p dir="ltr" style="text-align:justify"><em><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">d. Chọn số điện thoại hợp tuổi theo cửu tinh</span></span></em></p>

            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">T&iacute;nh theo Huyền Kh&ocirc;ng Phi Tinh th&igrave; năm 2004 - 2023 thuộc thời kỳ Hạ Nguy&ecirc;n - vận 8 do sao B&aacute;t Bạch chủ quản n&ecirc;n d&atilde;y số điện thoại hợp với tuổi muốn nhận được c&aacute;t kh&iacute; của thời vận th&igrave; phải xuất hiện số 8. Tương tự, từ 2024 - 2043 do sao Cửu Tử chủ quản th&igrave; d&atilde;y sim n&ecirc;n xuất hiện số 9.</span></span>
            </p>

            <p dir="ltr" style="text-align:justify"><em><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">e. T&igrave;m sim phong thủy hợp tuổi theo quan niệm d&acirc;n gian</span></span></em></p>

            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Theo quan niệm d&acirc;n gian th&igrave; một d&atilde;y số sim hợp tuổi c&oacute; thể mang lại năng lượng t&iacute;ch cực cho người d&ugrave;ng khi:</span></span>
            </p>

            <ul>
                <li dir="ltr">
                    <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><strong>Tổng n&uacute;t cao:</strong> Tổng n&uacute;t khi cộng dần 10 số trong sim hợp tuổi lại với nhau tốt nhất n&ecirc;n nằm trong khoảng 8 - 10 n&uacute;t, thấp nhất l&agrave; 1 n&uacute;t.</span></span>
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><strong>Cặp số đẹp:</strong> Một số cặp số c&oacute; &yacute; nghĩa tốt đẹp theo quan niệm d&acirc;n gian cũng được đ&aacute;nh gi&aacute; cao khi xuất hiện trong sim phong thuỷ theo tuổi gồm: 38, 78 - &ocirc;ng địa, 39, 79 - thần t&agrave;i, 38, 36 - t&agrave;i lộc, t&agrave;i ph&aacute;t,....</span></span>
                    </p>
                </li>
            </ul>

            <h3 dir="ltr" style="text-align:justify"><em><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">2. Theo phần mềm t&igrave;m bói sim kinh dịch</span></span></strong></em></h3>

            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">C&oacute; thể thấy việc luận sim theo 05 yếu tổ cổ học phương đ&ocirc;ng sau đ&oacute; tổng hợp lại v&agrave; đưa ra lựa chọn d&atilde;y sim hợp tuổi tương đối phức tạp, n&oacute; đ&ograve;i hỏi người luận phải am hiểu kiến thức phong thủy. Do đ&oacute;, kh&ocirc;ng phải bất cứ ai cũng c&oacute; thể tự m&igrave;nh luận giải v&agrave; cho ra được kết quả ch&iacute;nh x&aacute;c n&ecirc;n sử dụng phần mềm chọn số điện thoại hợp tuổi online l&agrave; một giải ph&aacute;p tối ưu hơn cả. Những ưu điểm khi sử dụng phần mềm chọn sim theo tuổi như sau:</span></span>
            </p>

            <ul>
                <li dir="ltr">
                    <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Phần mềm gi&uacute;p người d&ugrave;ng t&igrave;m được những d&atilde;y số điện thoại nhanh ch&oacute;ng v&agrave; ch&iacute;nh x&aacute;c theo 05 yếu tố của phong thủy cổ học.</span></span>
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Từng yếu tố đều được chuy&ecirc;n gia luận giải r&otilde; r&agrave;ng gồm: căn cứ học thuyết, ph&acirc;n t&iacute;ch đ&aacute;nh gi&aacute; chi tiết theo từng ti&ecirc;u ch&iacute; phong thủy.&nbsp;</span></span>
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Sử dụng phần mềm t&igrave;m sim phong thủy hợp tuổi cũng tương đối đơn giản n&ecirc;n người d&ugrave;ng c&oacute; thể dễ d&agrave;ng thực hiện chỉ bằng v&agrave;i thao t&aacute;c đơn giản:</span></span>
                    </p>
                </li>
            </ul>

            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">+ <strong>Bước 1:</strong> Nhập đầy đủ th&ocirc;ng tin b&aacute;t tự ng&agrave;y th&aacute;ng năm sinh, giới t&iacute;nh</span></span>
            </p>

            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">+<strong> Bước 2:</strong> Nhấp phần &ocirc; t&igrave;m sim hợp tuổi</span></span>
            </p>

            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">+ <strong>Bước 3: </strong>Đọc kết quả v&agrave; đưa ra lựa chọn ph&ugrave; hợp.</span></span>
            </p>

            <p dir="ltr" style="text-align:justify"><em><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">&gt;&gt;&gt;Hoặc qu&yacute; bạn c&oacute; thể sử dụng ngay phần mềm&nbsp;<u><strong><a href="{{ route('boi-sim') }}">SIM PHONG THỦY</a></strong></u>&nbsp;để chấm điểm d&atilde;y sim đang sở hữu theo 5 yếu tố dự b&aacute;o cổ tr&ecirc;n.</span></span></em></p>

            <h2 dir="ltr" style="text-align:justify"><span style="color:#FF0000"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">V. Những c&aacute;ch t&igrave;m mua sim hợp tuổi kh&ocirc;ng ch&iacute;nh x&aacute;c</span></span>
                </strong>
                </span>
            </h2>

            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Một số c&aacute;ch t&igrave;m sim phong thủy hợp tuổi kh&ocirc;ng ch&iacute;nh x&aacute;c nhưng kh&aacute; phổ biến m&agrave; người d&ugrave;ng n&ecirc;n tr&aacute;nh gồm:</span></span>
            </p>

            <h3 dir="ltr" style="text-align:justify"><em><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">1. C&aacute;ch chọn sim hợp tuổi theo số hợp tuổi</span></span></strong></em></h3>

            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Số hợp tuổi l&agrave; con số c&oacute; ngũ h&agrave;nh tương sinh, tương trợ với bản mệnh của người d&ugrave;ng. Theo c&aacute;ch n&agrave;y th&igrave; sim phong thuỷ theo tuổi l&agrave; d&atilde;y sim xuất hiện nhiều con số hợp tuổi theo ngũ h&agrave;nh. Cụ thể ngũ h&agrave;nh con số hợp với người d&ugrave;ng như sau:</span></span>
            </p>

            <ul>
                <li dir="ltr">
                    <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Người mệnh Kim hợp số thuộc h&agrave;nh Thổ (2, 5, 8) hoặc h&agrave;nh Kim (6, 7)</span></span>
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Người mệnh Thổ hợp số thuộc h&agrave;nh Hỏa (9) hoặc h&agrave;nh Thổ (2, 5, 8)</span></span>
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Người mệnh Thủy hợp số thuộc h&agrave;nh Kim (6, 7) hoặc h&agrave;nh Thủy (0, 1)</span></span>
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Người mệnh Mộc hợp số thuộc h&agrave;nh Thủy (0, 1) hoặc h&agrave;nh Mộc (3, 4)</span></span>
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Người mệnh Hỏa hợp số thuộc h&agrave;nh Mộc (3, 4) hoặc h&agrave;nh Hỏa (9).</span></span>
                    </p>
                </li>
            </ul>

            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">&rarr; <strong>Điểm bất cập:</strong> Kh&ocirc;ng thể dựa v&agrave;o ngũ h&agrave;nh của 1 hay 1 v&agrave;i con số để x&aacute;c định ngũ h&agrave;nh của d&atilde;y sim. Ngũ h&agrave;nh sim số hợp tuổi phải x&aacute;c định dựa tr&ecirc;n tổng h&ograve;a 10 con số theo phương ph&aacute;p Lục Thập Hoa Gi&aacute;p.</span></span>
            </p>

            <h3 dir="ltr" style="text-align:justify"><em><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">2. C&aacute;ch chọn sim hợp tuổi theo năm sinh</span></span></strong></em></h3>

            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Sim hợp với tuổi theo năm sinh l&agrave; d&atilde;y sim c&oacute; 4 số cuối tr&ugrave;ng với năm sinh của người d&ugrave;ng. V&iacute; dụ: người sinh năm 1992 th&igrave; hợp với d&atilde;y sim c&oacute; dạng 0*****1992.</span></span>
            </p>

            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><strong>&rarr; Điểm bất cập:</strong> Việc dựa v&agrave;o 4 số cuối để đ&aacute;nh gi&aacute; mức độ hợp khắc của sim với người d&ugrave;ng l&agrave; kh&ocirc;ng ch&iacute;nh x&aacute;c, bởi &yacute; nghĩa 4 con số kh&ocirc;ng thể đại diện cho d&atilde;y sim 10 con số. Hơn nữa, c&aacute;ch t&iacute;nh sim hợp tuổi n&agrave;y chỉ mang t&iacute;nh truyền miệng chứ kh&ocirc;ng c&oacute; căn cứ x&aacute;c định r&otilde; r&agrave;ng.</span></span>
            </p>

            <h3 dir="ltr" style="text-align:justify"><em><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">3. Chọn số điện thoại hợp tuổi theo phong thủy 4 số cuối:</span></span></strong></em></h3>

            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Một phương ph&aacute;p x&aacute;c định sim phong thủy hợp tuổi dựa tr&ecirc;n &yacute; nghĩa 4 số cuối c&ugrave;ng được rất nhiều người d&ugrave;ng. C&aacute;ch t&iacute;nh &yacute; nghĩa sim đại c&aacute;t theo 4 số cuối điện thoại như sau:</span></span>
            </p>

            <ul>
                <li dir="ltr">
                    <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><strong>Bước 1: </strong>Lấy 4 số cuối sim chia cho 80</span></span>
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><strong>Bước 2: </strong>Sử dụng số dư để tra cứu &yacute; nghĩa trong bảng kết quả chia sim 80</span></span>
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><strong>Bước 3:</strong> Nhận định &yacute; nghĩa sim l&agrave; hung hay c&aacute;t v&agrave; nếu tốt th&igrave; tốt cho phương diện g&igrave;?</span></span>
                    </p>
                </li>
            </ul>

            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">V&iacute; dụ: &Yacute; nghĩa sim 0963718266 khi t&iacute;nh theo c&aacute;ch chia 80 như sau:</span></span>
            </p>

            <ul>
                <li dir="ltr">
                    <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Bước 1: 8266 : 80 = 103 dư 26</span></span>
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Bước 2: Tra cứu &yacute; nghĩa sim với số dư 26</span></span>
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Bước 3: Kết quả 36 l&agrave; &yacute; nghĩa Hung - Cuộc đời chịu nhiều phong ba b&atilde;o t&aacute;p l&agrave; xấu.</span></span>
                    </p>
                </li>
            </ul>

            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">&rarr;<strong> Điểm bất cập: </strong>&Yacute; nghĩa của 4 số cuối kh&ocirc;ng thể quyết định &yacute; nghĩa của d&atilde;y sim (10 con số) với người d&ugrave;ng. Hơn nữa, c&aacute;ch luận hung - c&aacute;t sim chia 80 cũng chỉ l&agrave; c&aacute;ch t&iacute;nh sim được người d&ugrave;ng truyền miệng chứ kh&ocirc;ng c&oacute; căn cứ r&otilde; r&agrave;ng hay c&oacute; chuy&ecirc;n gia đứng ra nhận định đ&uacute;ng sai.</span></span>
            </p>

            <h2 dir="ltr" style="text-align:justify"><span style="color:#FF0000"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">VI. Những vấn đề bạn phải đọc trước khi t&igrave;m mua sim hợp tuổi</span></span>
                </strong>
                </span>
            </h2>

            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">B&ecirc;n cạnh c&aacute;ch chọn sim phong thủy hợp tuổi ch&iacute;nh x&aacute;c th&igrave; trước khi t&igrave;m mua sim người d&ugrave;ng cũng n&ecirc;n nắm được những th&ocirc;ng tin sau:</span></span>
            </p>

            <h3 dir="ltr" style="text-align:justify"><em><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">1. C&oacute; n&ecirc;n mua sim phong thủy hợp tuổi gi&aacute; rẻ được kh&ocirc;ng?</span></span></strong></em></h3>

            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Với những người d&ugrave;ng hạn hẹp về kinh tế c&oacute; thể tham khảo một số d&atilde;y sim phong thủy gi&aacute; rẻ. Theo đ&oacute;, đ&acirc;y l&agrave; loại sim hợp theo ngũ h&agrave;nh v&agrave; quẻ dịch c&aacute;t c&ograve;n 03 yếu tố c&ograve;n lại (&acirc;m dương tương phối, cửu tinh đồ ph&aacute;p v&agrave; quan niệm d&acirc;n gian) dừng lại ở mức trung b&igrave;nh, kh&ocirc;ng tốt nhưng cũng kh&ocirc;ng qu&aacute; xấu. Tất nhi&ecirc;n hiệu quả sử dụng của nh&oacute;m sim n&agrave;y c&ugrave;ng sẽ kh&ocirc;ng tốt bằng sim phong thủy hợp tuổi c&oacute; 05 yếu tố mang c&aacute;t kh&iacute;.</span></span>
            </p>

            <h3 dir="ltr" style="text-align:justify"><em><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">2. T&igrave;m sim hợp tuổi chỉ cần dựa v&agrave;o quẻ dịch c&oacute; đ&uacute;ng kh&ocirc;ng?</span></span></strong></em></h3>

            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Kh&ocirc;ng! Việc chỉ dựa v&agrave;o &yacute; nghĩa quẻ dịch để khẳng định d&atilde;y sim sẽ mang lại t&aacute;c động tốt khi sử dụng l&agrave; chưa đủ. Bởi d&atilde;y sim c&oacute; quẻ dịch tốt nhưng phạm xung khắc ngũ h&agrave;nh hoặc qu&aacute; thi&ecirc;n lệch &acirc;m dương cũng sẽ mang tới những ảnh hưởng ti&ecirc;u cực. Do đ&oacute;, đ&acirc;y l&agrave; c&aacute;ch chọn sim phong thuỷ theo tuổi kh&ocirc;ng ch&iacute;nh x&aacute;c người d&ugrave;ng kh&ocirc;ng n&ecirc;n sử dụng.</span></span>
            </p>

            <h3 dir="ltr" style="text-align:justify"><em><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">3. Sử dụng quy luật &Acirc;m - Dương để t&igrave;m chọn số điện thoại hợp tuổi c&oacute; đ&uacute;ng kh&ocirc;ng?</span></span></strong></em></h3>

            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Học thuyết &acirc;m dương l&agrave; một trong những học thuyết cổ, l&agrave; khởi nguồn của ngũ h&agrave;nh v&agrave; kinh dịch. Do đ&oacute;, t&igrave;m sim phong thủy hợp tuổi với mong muốn cải biến vận số m&agrave; kh&ocirc;ng x&eacute;t c&acirc;n bằng &acirc;m dương ch&iacute;nh l&agrave; sự thiếu s&oacute;t lớn. Bởi &acirc;m dương tương phối ch&iacute;nh l&agrave; yếu tố ti&ecirc;n quyết để biết d&atilde;y sim c&oacute; ph&ugrave; hợp với người d&ugrave;ng kh&ocirc;ng.</span></span>
            </p>

            <h2 dir="ltr" style="text-align:justify"><span style="color:#FF0000"><strong><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">VII. boisimkinhdich.com - Địa chỉ t&igrave;m mua số điện thoại hợp với tuổi uy t&iacute;n</span></span>
                </strong>
                </span>
            </h2>

            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Nếu bạn muốn t&igrave;m chọn sim theo tuổi th&igrave; c&oacute; thể tham khảo kho sim của boisimkinhdich.com. Những lợi &iacute;ch khi mua sim tại Sim Hợp Tuổi c&oacute; thể kể đến như:</span></span>
            </p>

            <ul>
                <li dir="ltr">
                    <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Đơn vị kinh doanh sim phong thủy l&acirc;u lắm n&ecirc;n c&oacute; quy tr&igrave;nh phục vụ v&agrave; bảo h&agrave;nh hậu m&atilde;i chuy&ecirc;n nghiệp. Đảm bảo quyền lợi của người d&ugrave;ng lu&ocirc;n l&agrave; tốt nhất từ thanh to&aacute;n, giao sim,...</span></span>
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Kho sim lớn mang tới cho người d&ugrave;ng nhiều lựa chọn với nhiều loại sim v&agrave; nhiều khoảng gi&aacute; kh&aacute;c nhau. Do đ&oacute;, người d&ugrave;ng c&oacute; thể dễ d&agrave;ng t&igrave;m được d&atilde;y sim phong thủy hợp tuổi một c&aacute;ch nhanh ch&oacute;ng, ch&iacute;nh x&aacute;c.</span></span>
                    </p>
                </li>
                <li dir="ltr">
                    <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">To&agrave;n bộ sim số hợp tuổi trong kho sim của boisimkinhdich.com đều được chuy&ecirc;n gia phong thủy trực tiếp luận giải v&agrave; lựa chọn dựa tr&ecirc;n 05 yếu tố phong thủy. V&igrave; thế, đảm bảo người d&ugrave;ng c&oacute; thể nhận được kết quả tốt nhất khi chọn mua v&agrave; sử dụng sim điện thoại tại Sim Hợp Tuổi.</span></span>
                    </p>
                </li>
            </ul>

            <p dir="ltr" style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Với những th&ocirc;ng tin về c&aacute;ch t&igrave;m <strong>sim hợp tuổi</strong> m&agrave; chuy&ecirc;n gia phong thủy của boisimkinhdich.com cung cấp th&igrave; người d&ugrave;ng c&oacute; thể biết c&aacute;ch chọn sim ch&iacute;nh x&aacute;c để vận dụng v&agrave; t&igrave;m cho m&igrave;nh một số điện thoại ưng &yacute;. Sử dụng phần mềm chọn số điện thoại hợp tuổi l&agrave; c&aacute;ch gi&uacute;p người d&ugrave;ng r&uacute;t ngắn thời gian luận giải v&agrave; chọn sim ch&iacute;nh x&aacute;c v&agrave; c&oacute; thể đem lại hiệu quả cao trong qu&aacute; tr&igrave;nh sử dụng.</span></span>
            </p>
        </div>
    </section>
@endsection
