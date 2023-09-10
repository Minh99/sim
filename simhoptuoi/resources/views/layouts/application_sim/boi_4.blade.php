@extends('app')

@section('title', 'Bói sim 4 so cuoi')

@section('content')
    <script>
        $(document).ready(function () {

        });
    </script>
    <section class="contentPage luanSim">
        <h1 class="title_h1">Xem bói sim 4 số cuối</h1>
        <div class="bodyPage bodyLuanSim boi_sim_inputs">
            <section class="boxFormSim">
                <div class="bgFormSim">
                    <form novalidate id="form_xpts" name="form_xpts" action="{{ route('boi-sim-4-so') }}" method="post" accept-charset="UTF-8">
                        @csrf
                        <div style="display:none"></div>
                        <div class="row">
                            <input type="text" id="sinh_menh_input" name="sinh_menh_input" hidden>
                            <div class="col-3 col-md-3 col-sm-3 col-xs-3">
                                <p class="title_label"><label>Số điện thoại</label></p>
                            </div>
                            <div class="col-9 col-md-9 col-sm-9 col-xs-9">
                                <input id="xpts_phone" class="myinput" name="sdt" placeholder="Mời nhập số sim" value="{{ $sdt ?? '' }}">
                                @error('sdt')
                                <p class="text-white"> <i> Định dạng không hợp lệ </i></p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" value="1" type="radio" name="type" id="flexRadioDefault1" checked>
                            <label class="form-check-label" for="flexRadioDefault1">
                                Theo 80 số hung cát
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" value="2" type="radio" name="type" id="flexRadioDefault2" >
                            <label class="form-check-label" for="flexRadioDefault2">
                                Theo quẻ dịch
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" value="3" type="radio" name="type" id="flexRadioDefault3" >
                            <label class="form-check-label" for="flexRadioDefault3">
                                Theo năng lượng số
                            </label>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                <button type="submit" class="btn_xemngay"><span>Xem</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </section>

    @if(!empty($results) && count($results) > 0)
        {{--   Hung cat      --}}
        @if ($type == 1)
            <div class="text-center" style="
                font-size: 18px;
                border: 2px solid #e51c4a;
                border-radius: 10px;
                margin: 0 10px;
                padding: 20px 10px;"
            >
                <p style="font-size: 20px; font-weight: bold; color: #d19c21">Đuôi số {{ $sdt }} - Số Lý {{ $results['soly'] }}</p>
                <p class="my-2">"{{ $results['content'] }}"</p>
                <p style="text-transform: uppercase">Kết luận: <span style="color: #910101">{{  $results['ketLuan'] }}</span></p>
            </div>
        {{--   que dich      --}}
        @elseif($type == 2)
            <div class="row no-padding">
                <div class="col-12 col-md-12 ">
                    <div class="des">
                        <div class="wapper_que">
                            <p class="que_so  text-center text-bold">Quẻ số {{ $results['so_que'] }}</p>
                            <p class="ten_que tot text-center">{{ $results['ten_que'] }}</p>
                            <p class="y_nghia text-center">{{ $results['tong_quat'] }}</p>
                            <p class="quai_que text-center">{{ $results['que'] }}</p>
                            @php
                                $indexImage = $results['so_que'] . '.jpg';
                            @endphp

                            <p class="anh_que text-center">
                                <img style="width: 50px" src="{{ asset("common/templates/site/images/ques/$indexImage") }}">
                            </p>
                        </div>

                        @php
                            $index = 1;
                        @endphp

                        @if (!empty($results['danh_gia']))
                            <h2 class="title_h1 text-left" style="font-weight: bold; margin-top: 5px; text-transform: capitalize"> {{ $index }}. Đánh giá</h2>
                            <p class="pl-4">
                                {{ $results['danh_gia'] }}
                            </p>
                            @php
                                $index++;
                            @endphp
                        @endif

                        @if (!empty($results['y_nghia_que']))
                            <h2 class="title_h1 text-left" style="font-weight: bold; margin-top: 5px; text-transform: capitalize"> {{ $index }}. Ý Nghĩa</h2>
                            <p class="pl-4">
                                {{ $results['y_nghia_que'] }}
                            </p>
                            @php
                                $index++;
                            @endphp
                        @endif

                        @if (!empty($results['luan_giai_sim']))
                            <h2 class="title_h1 text-left" style="font-weight: bold; margin-top: 5px; text-transform: capitalize"> {{ $index }}. Luận giải sim</h2>
                            <p class="pl-4">
                                {{ $results['luan_giai_sim'] }}
                            </p>
                            @php
                                $index++;
                            @endphp
                        @endif

                        @if (!empty($results['chiem_nghiem_ve_van_the']))
                            <h2 class="title_h1 text-left" style="font-weight: bold; margin-top: 5px; text-transform: capitalize"> {{ $index }}. Chiêm nghiệm về vận thế</h2>
                            <p class="pl-4">
                                {{ $results['chiem_nghiem_ve_van_the'] }}
                            </p>
                            @php
                                $index++;
                            @endphp
                        @endif

                        @if (!empty($results['xet_ve_gia_dao_tinh_cam']))
                            <h2 class="title_h1 text-left" style="font-weight: bold; margin-top: 5px; text-transform: capitalize"> {{ $index }}. Về giao đạo tình cảm</h2>
                            <p class="pl-4">
                                {{ $results['xet_ve_gia_dao_tinh_cam'] }}
                            </p>
                            @php
                                $index++;
                            @endphp
                        @endif
                    </div>
                </div>
            </div>
        {{--   nang luong      --}}
        @else
            <div class="text-center" style="
                font-size: 18px;
                border: 2px solid #e51c4a;
                border-radius: 10px;
                margin: 0 10px;
                padding: 20px 10px;"
            >
                <p style="font-size: 20px; font-weight: bold; color: #d19c21">Đuôi số {{ $sdt }}</p>
                @php
                    $index = 1;
                @endphp
                @foreach($results as $k => $v)
                    <div class="my-2 row align-items-center justify-content-around justify-items-start">
                        <span class="col-3" style="color: #910101; height: 100%"> {{ $v['id'] }} </span>
                        <pre style="text-wrap: wrap;" class="col-9 text-left">{{ $v['content'] }}</pre>
                    </div>
                    @if($index < count($results))
                        <hr>
                    @endif
                    @php
                        $index++;
                    @endphp
                @endforeach
            </div>
        @endif

        @if(!empty($simData) && count($simData) > 0)
            <hr>
            <div class="nopadding sim_collection mt-2">
                <section class="list_sim">
                    <!-- khi vào link page sẽ tự động scroll xuống phần bảng sim -->
                    <h2 class="title_h1">Kho sim đuôi {{ $sdt }}</h2>
                    <div class="row listSim list_sim_item">
                        @foreach ($simData as $item)
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
                                        <div class="col-6 col-sm-6 col-md-6">
                                            <p class="btnmua"><a href="{{ route('detail-sim', ['sdt' => $item['sdt']]) }}" class="btn_mua">Mua ngay <b>>></b></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>
            </div>
        @endif
    @endif
@endsection
