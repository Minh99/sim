@extends('app')

@section('title', 'Tìm Mua Sim Hợp Tuổi Uy Tín.')

@section('content')
    <section class="main-content-wapper">
        @if (count($results) > 0)
            <div class="nopadding sim_collection">
                <section class="list_sim">
                    <div class="row listSim list_sim_item">
                        @if (isset($results['results1']) && count($results['results1']) > 0)
                            <h2 style="font-size: 20px; font-weight: bold" class="text-center mb-4 w-100">
                                Sim duoi {{ $duoi_sim }}
                            </h2>
                            @foreach ($results['results1'] as $item1)
                                @php
                                    $logo_nha_mang = 'common/templates/site/images/icon/1.gif';
                                    if ($item1['nha_mang'] == "mobi") {
                                        $logo_nha_mang = 'common/templates/site/images/icon/3.gif';
                                    } else if ($item1['nha_mang'] == "vinaphone") {
                                        $logo_nha_mang = 'common/templates/site/images/icon/2.gif';
                                    } else if ($item1['nha_mang'] == "gmobile") {
                                        $logo_nha_mang = 'common/templates/site/images/icon/5.gif';
                                    } else if ($item1['nha_mang'] == "vietnamobile") {
                                        $logo_nha_mang = 'common/templates/site/images/icon/4.gif';
                                    }
                                @endphp
                                <div class="col-6 col-sm-6 col-md-6">
                                    <div class="main_box_sim_item">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-6">
                                                <p class="so"><a href="{{ route('detail-sim', ['sdt' => $item1['sdt']]) }}">{{ $item1['sdt'] }}</a></p>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-6 logoNhaMang"><img alt="" src="{{ asset($logo_nha_mang) }}" /></div>
                                        </div>
                                        <p class="vuong"><strong>Điểm phong thủy sim: </strong> {{ $item1['diem_phong_thuy'] }}</p>
                                        <p class="price"><b>Giá: </b>{{ $item1['gia_ban'] }}</p>
                                        <p class="que"><strong>Sim ngũ hành: </strong> <span class="nguhanh">{{ $item1['ngu_hanh'] }}</span></p>
                                        <p class="yn"><strong>Quẻ Kinh dịch: </strong>{{ $item1['que'] }}</p>
                                        <div class="row">
                                            <div class="col-6 col-sm-6 col-md-6">
                                                <p class="btnmua"><a href="{{ route('detail-sim', ['sdt' => $item1['sdt']]) }}" class="btn_mua">Chi tiết <b>>></b></a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                        @if (isset($results['results2']) && count($results['results2']) > 0)
                            <h2 style="font-size: 20px; font-weight: bold" class="text-center mb-4 w-100">
                                Sim phong thuỷ hợp tuổi {{ $tuoi }}
                            </h2>
                            @foreach ($results['results2'] as $item2)
                                @php
                                    $logo_nha_mang = 'common/templates/site/images/icon/1.gif';
                                    if ($item2['nha_mang'] == "mobi") {
                                        $logo_nha_mang = 'common/templates/site/images/icon/3.gif';
                                    } else if ($item2['nha_mang'] == "vinaphone") {
                                        $logo_nha_mang = 'common/templates/site/images/icon/2.gif';
                                    } else if ($item2['nha_mang'] == "gmobile") {
                                        $logo_nha_mang = 'common/templates/site/images/icon/5.gif';
                                    } else if ($item2['nha_mang'] == "vietnamobile") {
                                        $logo_nha_mang = 'common/templates/site/images/icon/4.gif';
                                    }
                                @endphp
                                <div class="col-6 col-sm-6 col-md-6">
                                    <div class="main_box_sim_item">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-6">
                                                <p class="so"><a href="{{ route('detail-sim', ['sdt' => $item2['sdt']]) }}">{{ $item2['sdt'] }}</a></p>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-6 logoNhaMang"><img alt="" src="{{ asset($logo_nha_mang) }}" /></div>
                                        </div>
                                        <p class="vuong"><strong>Điểm phong thủy sim: </strong> {{ $item2['diem_phong_thuy'] }}</p>
                                        <p class="price"><b>Giá: </b>{{ $item2['gia_ban'] }}</p>
                                        <p class="que"><strong>Sim ngũ hành: </strong> <span class="nguhanh">{{ $item2['ngu_hanh'] }}</span></p>
                                        <p class="yn"><strong>Quẻ Kinh dịch: </strong>{{ $item2['que'] }}</p>
                                        <div class="row">
                                            <div class="col-6 col-sm-6 col-md-6">
                                                <p class="btnmua"><a href="{{ route('detail-sim', ['sdt' => $item2['sdt']]) }}" class="btn_mua">Chi tiết <b>>></b></a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                        @if (!isset($results['results1']) && !isset($results['results2']))
                            <h2 style="font-size: 20px; font-weight: bold" class="text-center mb-4 w-100">
                                Danh sách sim phong thuỷ
                            </h2>
                            @foreach ($results as $item)
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
                        @endif
                    </div>
                </section>
            </div>
        @endif
    </section>
@endsection
