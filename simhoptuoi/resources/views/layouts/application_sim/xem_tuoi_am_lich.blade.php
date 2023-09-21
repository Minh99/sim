@extends('app')

@section('title', 'Bảng tra sao hạn tuổi')

@section('content')
    <script>
        $(document).ready(function () {
            $('.btn_xemngay_tuoi_am').click(function (e) {
                e.preventDefault();
                $('#form-tuoi-am').submit();
            });
        });
    </script>
    <section class="contentPage">
        <h1 class="title_h1">Xem tuổi âm lịch</h1>
        <section class="boxForm">
            <div class="bodyForm">
                <div class="row">
                    <div class="col-12 col-md-12">
                        <form method="post" id="form-tuoi-am" name="search_xemsaohan" action="{{ route('xem-tuoi-am-lich') }}">
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
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-12 text-center">
                                    <div class="headPositionButton">
                                        <button type="button" class="btn_xemngay bg-danger btn_xemngay_tuoi_am"><span>Xem ngay</span></button>
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
                                                <tr>
                                                    <td style="background: transparent; border: 1px solid #af0007">
                                                        <label>Cung phi:</label>
                                                    </td>
                                                    <td style="background: transparent; border: 1px solid #af0007">
                                                        <p> Nam ({{ $data['cungPhiNam'] }}) - Nữ ({{ $data['cungPhiNu'] }})</p>
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
                                                Tổng quát người tuổi {{ $data['tuoiTxt'] }}
                                            </h2>
                                            <div>
                                                <p dir="ltr" style="text-align:center; text-transform: capitalize">
                                                    {{ $data['content'] }}</p>
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
                                                    <img src="https://simhoptuoi.com.vn/templates/site/images/star.gif" alt="star"> Xem thêm sim hợp cho tuổi {{ $data['tuoiTxt'] }} :
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
        @endif
    </section>
@endsection
