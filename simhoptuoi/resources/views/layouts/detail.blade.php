@extends('app')

@section('title', 'Thông tin chi tiết sim')

@section('content')
<article class=" sim-detail-page">
    <div class="wapper-page-sim">
        <div class="container_sim">
            <section class="row">
                <section class="col-12 col-md-12 main_left">
                    <h1 class="title_h1">Chi tiết sim {{ $data['sdt'] }}</h1>
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
                                            <div class="value_row"><span class=" giasim">{{ $data['gia_ban'] }} vnđ</span></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-5 col-md-3 dpt"><span class="label">Điểm phong thủy : </span></div>
                                        <div class="col-7 col-md-9"><span class="label"><strong>{{ $data['diem_phong_thuy'] }}</strong></span></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-3 sim-price col-md-3"><span class="label">Nhà mạng: </span></div>
                                        <div class="col-9 tragop col-md-9"><span class="value_row" style="text-transform: capitalize"> {{ $data['nha_mang'] }} </span></div>
                                        <input type="hidden" class="value_gtag" value="1980000">
                                    </div>
                                    <div class="row">
                                        <div class="col-3 col-md-3">
                                            <strong><span class="label label-desktop">Tình trạng:</span><span class="label label-mobile">Tình trạng:</span></strong>
                                        </div>
                                        <div class="col-9 col-md-9">
                                            <span class="value value_row"><span class="text-rendered-green" style="text-transform: capitalize"> {{ $data['tinh_trang'] }}</span></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-12">
                                            <div class="shipping-policy label">Miễn phí vận chuyển toàn quốc</div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-12 link-mua">
                                            <div class="p-20">
                                                <a href="{{ route('checkout', ['sdt' => $data['sdt']]) }}" class="btn-mua">Mua ngay</a>
                                            </div>

                                        </div>
                                        <div class="col-12 col-md-12 text-center">
                                            <div class="note-text">Gọi mua <a href="tel:xxxxxxxx" class="btn-call-button phone click_hotline"><strong class="green-text">xxxx.xxx.xxx</strong></a> (7:30 - 19:00)</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                </section>
            </section>
        </div>
    </div>

    <div class="chi-tiet-sim">
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="row">
                    <div class="col-12 col-md-12 ">
                        <p class="heading-box">PHONG THỦY SỐ SIM {{ $data['sdt'] }}</p>
                    </div>
                </div>
                <div class="row no-padding">
                    <div class="col-12 col-md-12 ">
                        <div class="des">
                            <div class="wapper_que">
                                <p class="que_so  text-center text-bold">Quẻ số {{ $boi['so_que'] }}</p>
                                <p class="ten_que tot text-center">{{ $boi['ten_que'] }}</p>
                                <p class="y_nghia text-center">{{ $boi['tong_quat'] }}</p>
                                <p class="quai_que text-center">{{ $boi['que'] }}</p>
                                <p class="anh_que text-center"><img src="{{ $boi['hinh_que'] }}"></p>
                            </div>
                
                            @php
                                $index = 1;
                            @endphp
                
                            @if (!empty($boi['chiem_nghiem_ve_van_the']))
                                <h2 style="font-weight: bold; font-size: 18px; margin-top: 5px"> {{ $index }}. CHIÊM NGHIỆM VỀ VẬN THẾ</h2>
                                <p class="pl-4">
                                    {{ $boi['chiem_nghiem_ve_van_the'] }}
                                </p>
                                @php
                                    $index++;
                                @endphp
                            @endif
                
                            @if (!empty($boi['xet_ve_gia_dao_tinh_cam']))
                                <h2 style="font-weight: bold; font-size: 18px; margin-top: 5px"> {{ $index }}. VỀ GIA ĐẠO TÌNH CẢM</h2>
                                <p class="pl-4">
                                    {{ $boi['xet_ve_gia_dao_tinh_cam'] }}
                                </p>
                                @php
                                    $index++;
                                @endphp
                            @endif
                
                            @if (!empty($boi['luan_giai_sim']))
                                <h2 style="font-weight: bold; font-size: 18px; margin-top: 5px"> {{ $index }}. LUẬN GIẢI SIM</h2>
                                <p class="pl-4">
                                    {{ $boi['luan_giai_sim'] }}
                                </p>
                                @php
                                    $index++;
                                @endphp
                            @endif
                
                            @if (!empty($boi['dong_hao_1']))
                                <h2 style="font-weight: bold; font-size: 18px; margin-top: 5px"> {{ $index }}. ĐỘNG HÀO 1</h2>
                                <p class="pl-4">
                                    {{ $boi['dong_hao_1'] }}
                                </p>
                                @php
                                    $index++;
                                @endphp
                            @endif
                
                            @if (!empty($boi['dong_hao_2']))
                                <h2 style="font-weight: bold; font-size: 18px; margin-top: 5px"> {{ $index }}. ĐỘNG HÀO 2</h2>
                                <p class="pl-4">
                                    {{ $boi['dong_hao_2'] }}
                                </p>
                                @php
                                    $index++;
                                @endphp
                            @endif
                
                            @if (!empty($boi['dong_hao_3']))
                                <h2 style="font-weight: bold; font-size: 18px; margin-top: 5px"> {{ $index }}. ĐỘNG HÀO 3</h2>
                                <p class="pl-4">
                                    {{ $boi['dong_hao_3'] }}
                                </p>
                                @php
                                    $index++;
                                @endphp
                            @endif
                
                            @if (!empty($boi['dong_hao_4']))
                                <h2 style="font-weight: bold; font-size: 18px; margin-top: 5px"> {{ $index }}. ĐỘNG HÀO 4</h2>
                                <p class="pl-4">
                                    {{ $boi['dong_hao_4'] }}
                                </p>
                                @php
                                    $index++;
                                @endphp
                            @endif
                
                            @if (!empty($boi['dong_hao_5']))
                                <h2 style="font-weight: bold; font-size: 18px; margin-top: 5px"> {{ $index }}. ĐỘNG HÀO 5</h2>
                                <p class="pl-4">
                                    {{ $boi['dong_hao_5'] }}
                                </p>
                                @php
                                    $index++;
                                @endphp
                            @endif
                
                            @if (!empty($boi['dong_hao_6']))
                                <h2 style="font-weight: bold; font-size: 18px; margin-top: 5px"> {{ $index }}. ĐỘNG HÀO 6</h2>
                                <p class="pl-4">
                                    {{ $boi['dong_hao_6'] }}
                                </p>
                                @php
                                    $index++;
                                @endphp
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>
@endsection