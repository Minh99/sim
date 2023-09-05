@extends('app')

@section('title', 'Thông tin chi tiết sim')

@section('content')
<section>
    <h1 class="title_h1">Thông tin số sim</h1>
    <div class="chi-tiet-sim">
        <section class="row">
            <div class="col-12 col-md-12">
                <div class="sim-detail">
                    <div class="row">
                        <div class="col-3 col-sm-3 col-md-3"><span class="label">Số sim: </span></div>
                        <div class="col-9 col-md-9">
                            <h2 class="sim-number value_row">{{ $data['sdt'] }}</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3 sim-price col-md-3"><span class="label">Giá bán</span></div>
                        <div class="col-9 col-md-9">
                            <div class="value_row">
                                <span class="giasim">{{ $data['gia_ban'] }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3 sim-price col-md-3"><span class="label">Nhà mạng: </span></div>
                        <div class="col-9 tragop col-md-9"><span class="value_row" style="text-transform: capitalize"> {{ $data['nha_mang'] }} </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5 col-md-3"><span class="label">Điểm phong thủy : </span></div>
                        <div class="col-7 col-md-9"><span class="label"><strong>{{ $data['diem_phong_thuy'] }}</strong></span></div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="shipping-policy label">Miễn phí vận chuyển toàn quốc</div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
    <section class="row dat_mua_sim">
        <div class="col-md-12 cart_box_form">
            <form name="frm_dat_hang" id="" action="" method="post">
                @csrf
                <div class="cart_form">
                    <div class="heading-checkout-form">
                        <p class="cart_box_tt">Thông tin khách hàng</p>
                    </div>
                    <span for="" id="mess_err" style="color: red;"></span>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="label-input"><span>Họ và tên:</span><span class="required">*</span>
                            </div>
                            <div class="input-form">
                                <input type="text" name="fullname" value="" placeholder="Nhập họ tên(*)" required="">
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="label-input"><span>Số điện thoại:</span><span class="required">*</span>
                            </div>
                            <div class="input-form"><input type="text" onkeyup="this.value=this.value.replace(/[^\d]/,'')" maxlength="10" name="phone" value="" placeholder="Nhập số điện thoại (*)" required=""></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-sm-6">
                            <div class="input-form input-form-select">
                                <select name="sl_address_tinhtp" class="address_tinh-select" required>
                                    <option class="select-tinh-item" value="">Chọn tỉnh thành</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6">
                            <div class="input-form input-form-select">
                                <select class="address_huyen-select" name="sl_address_quanhuyen" required>
                                    <option class="select-huyen-item" value="">Chọn quận huyện</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12">
                            <div class="input-form input-form-select">
                                <select class="address_xa-select" name="sl_address_phuongxa" required>
                                    <option class="select-xa-item" value="">Chọn phường xã</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="dms_form-wapper">
                        <div class="label-input"><span>Địa chỉ nhận hàng:<span class="required">*</span></span>
                        </div>
                        <div class="input-form"><input name="address" value="" placeholder="Số nhà, tên Đường (*)" required=""></input>
                        </div>
                    </div>
                    <div class="dms_form-wapper">
                        <div class="label-input"><span>Ghi chú:</span></div>
                        <div class="input-form"><input name="note" value="" placeholder="Nhập ghi chú"></input>
                        </div>
                    </div>
                    <div class="dms_form_httt">

                        <label>Lựa chọn hình thức thanh toán:</label>
                        <div class="row">
                            <div class="col-md-4">
                                <input type="radio" name="httt" value="1" required=""><span>Chuyển khoản</span>
                            </div>
                            <div class="col-md-4">
                                <input type="radio" name="httt" value="2" required="" checked="">
                                <span>Trả tiền khi nhận hàng</span>
                            </div>
                        </div>
                    </div>
                    <div class="cart_total">
                        <div class="row ">
                            <div class="col-6 col-sm-6 col-md-6">
                                <div class="total_label">Tổng tiền</div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-6">
                                <div class="total_value">{{ $data['gia_ban' ]}} vnđ
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="g-recaptcha-response" value="1" />
                    <div class="cart_form_action">
                        <button class="action-form" type="submit">
                            <div id='loader' style='display: none;'>
                                <img src="https://simhoptuoi.com.vn/templates/site/images/icon/loading.gif" alt=""
                                    width="20px">
                            </div>
                            Đặt hàng
                        </button>
                    </div>
                    <input type="hidden" name="sim" value="{{ $data['sdt'] }}">
                    <input type="hidden" id="gclid_field" name="gclid_field" value="">
                    <div class="row">
                        <div class="col-12 col-md-12 text-center">
                            <div class="note-text">Gọi mua <a href="tel:0865194419" class="btn-call-button phone click_hotline">
                                <strong class="green-text">0865194419</strong></a> (7:30 - 19:00)</div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <script>
        $(document).ready(function () {
            $.ajax({
                url: "https://vn-public-apis.fpo.vn/provinces/getAll?limit=-1",
                type: "GET",
                dataType: "json",
                success: function (data) {
                    $.each(data.data.data, function (index, value) {
                        let html = '<option data-id="' + value.code + '" class="select-tinh-item" value="' + value.name + '">' + value.name + '</option>';
                        $('.address_tinh-select').append(html);
                    });
                },
                error: function (data) {
                    console.log(data);
                }
            });

            $('.address_tinh-select').on('change', function () {
                $('.address_huyen-select').html('');
                var tinhItems = $('.select-tinh-item');
                var code = '';
                tinhItems.each(function (index, item) {
                    if ($(item).is(':selected') == true) {
                        code = $(item).attr('data-id');
                    }
                });

                if (code == '') {
                    return;
                }
                $.ajax({
                    url: `https://vn-public-apis.fpo.vn/districts/getByProvince?provinceCode=${code}&limit=-1`,
                    type: "GET",
                    dataType: "json",
                    success: function (data) {
                        var option = '<option class="select-huyen-item" value="">Chọn quận huyện</option>';
                        $('.address_huyen-select').append(option);
                        $.each(data.data.data, function (index, value) {
                            let html = '<option data-id="' + value.code + '" class="select-huyen-item" value="' + value.name + '">' + value.name + '</option>';
                            $('.address_huyen-select').append(html);
                        });
                    },
                    error: function (data) {
                        console.log(data);
                    }
                });
            });

            $('.address_huyen-select').on('change', function () {
                $('.address_xa-select').html('');
                var huyenItems = $('.select-huyen-item');
                var code = '';
                huyenItems.each(function (index, item) {
                    if ($(item).is(':selected')) {
                        code = $(item).attr('data-id');
                    }
                });
                
                if (code == '') {
                    return;
                }
                $.ajax({
                    url: `https://vn-public-apis.fpo.vn/wards/getByDistrict?districtCode=${code}&limit=-1`,
                    type: "GET",
                    dataType: "json",
                    success: function (data) {
                        var option = '<option class="select-xa-item" value="">Chọn phường xã</option>';
                        $('.address_xa-select').append(option);
                        $.each(data.data.data, function (index, value) {
                            let html = '<option data-id="' + value.code + '" class="select-xa-item" value="' + value.name + '">' + value.name + '</option>';
                            $('.address_xa-select').append(html);
                        });
                    },
                    error: function (data) {
                        console.log(data);
                    }
                });
            });
        });
    </script>
@endsection