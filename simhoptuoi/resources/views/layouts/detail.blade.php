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
                                            <div class="note-text">Gọi mua <a href="tel:0768781313" class="btn-call-button phone click_hotline"><strong class="green-text">0768781313</strong></a> (7:30 - 19:00)</div>
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
                                @php
                                    $indexImage = $boi['so_que'] . '.jpg';
                                @endphp

                                <p class="anh_que text-center">
                                    <img style="width: 50px" src="{{ asset("common/templates/site/images/ques/$indexImage") }}">
                                </p>
                            </div>

                            @php
                                $index = 1;
                            @endphp

                            @if (!empty($boi['danh_gia']))
                                <h2 class="title_h1 text-left" style="font-weight: bold; margin-top: 5px; text-transform: capitalize"> {{ $index }}. Đánh giá</h2>
                                <p class="pl-4">
                                    {{ $boi['danh_gia'] }}
                                </p>
                                @php
                                    $index++;
                                @endphp
                            @endif

                            @if (!empty($boi['y_nghia_que']))
                                <h2 class="title_h1 text-left" style="font-weight: bold; margin-top: 5px; text-transform: capitalize"> {{ $index }}. Ý Nghĩa</h2>
                                <p class="pl-4">
                                    {{ $boi['y_nghia_que'] }}
                                </p>
                                @php
                                    $index++;
                                @endphp
                            @endif

                            @if (!empty($boi['luan_giai_sim']))
                                <h2 class="title_h1 text-left" style="font-weight: bold; margin-top: 5px; text-transform: capitalize"> {{ $index }}. Luận giải sim</h2>
                                <p class="pl-4">
                                    {{ $boi['luan_giai_sim'] }}
                                </p>
                                @php
                                    $index++;
                                @endphp
                            @endif

                            @if (!empty($boi['chiem_nghiem_ve_van_the']))
                                <h2 class="title_h1 text-left" style="font-weight: bold; margin-top: 5px; text-transform: capitalize"> {{ $index }}. Chiêm nghiệm về vận thế</h2>
                                <p class="pl-4">
                                    {{ $boi['chiem_nghiem_ve_van_the'] }}
                                </p>
                                @php
                                    $index++;
                                @endphp
                            @endif

                            @if (!empty($boi['xet_ve_gia_dao_tinh_cam']))
                                <h2 class="title_h1 text-left" style="font-weight: bold; margin-top: 5px; text-transform: capitalize"> {{ $index }}. Về giao đạo tình cảm</h2>
                                <p class="pl-4">
                                    {{ $boi['xet_ve_gia_dao_tinh_cam'] }}
                                </p>
                                @php
                                    $index++;
                                @endphp
                            @endif

                            @if (!empty($boi['dong_hao_chinh']))
                                <h2 class="title_h1 text-left" style="font-weight: bold; margin-top: 5px; text-transform: capitalize"> {{ $index }}. Động hào - {{ $boi['dong_hao']}}</h2>
                                <p class="pl-4">
                                    {{ $boi['dong_hao_chinh'] }}
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
