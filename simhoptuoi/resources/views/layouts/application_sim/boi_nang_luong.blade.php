@extends('app')

@section('title', 'Bảng tra sao hạn tuổi')

@section('content')
    <script>
        $(document).ready(function () {
            $('.btn_xemngay_nang_luong').click(function (e) {
                e.preventDefault();
                $('#form-boi-nang-luong').submit();
            });

            $('#submit_code').click(function (e) {
                e.preventDefault();
                $('#code').val($('#code_input').val());
                $('#form-boi-nang-luong').submit();
            });

            $('#code_input').on('input', function (e) {
                e.preventDefault();
                if ($(this).val().length > 0) {
                    $('#submit_code').removeAttr('disabled');
                } else {
                    $('#submit_code').attr('disabled', 'disabled');
                }
            });
            var is_show = "{{ $data['show_tinh_chat'] ?? '' }}" ?? 0;
            if (is_show == 1) {
                document.getElementById('tinh_chats').scrollIntoView();
            }
        });
    </script>
    <section class="contentPage">
        <h1 class="title_h1 text-center mb-4">Bói sim năng lượng</h1>
        <section class="boxForm">
            <div class="bodyForm">
                <div class="row">
                    <div class="col-12 col-md-12">
                        <form method="post" id="form-boi-nang-luong" name="search_xemsaohan" action="{{ route('boi-sim-nang-luong-so') }}">
                            @csrf
                            <div class="row">
                                <div class="col-3 col-md-3 col-sm-3 col-xs-3">
                                    <p class="title_label"><label>Số điện thoại</label></p>
                                </div>
                                <div class="col-9 col-md-9 col-sm-9 col-xs-9">
                                    <input style="max-width: 100%" id="xpts_phone" class="myinput w-100" name="sdt" placeholder="Mời nhập số sim" value="@if(!empty($data['sdt'])){{$data['sdt']}}@endif">
                                    @error('sdt')
                                    <p class="text-white"> <i> Định dạng không hợp lệ </i></p>
                                    @enderror
                                </div>
                                <input type="hidden" name="code" id="code" value="@if(!empty($data['code'])){{$data['code']}}@endif">
                                <div class="col-md-12 col-sm-12 col-12 text-center mt-4">
                                    <div class="headPositionButton">
                                        <button type="button" class="btn_xemngay bg-danger btn_xemngay_nang_luong"><span>Xem ngay</span></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </section>



        @if (isset($data['contents']) && !empty($data['contents']))
            <h4 class="text_center h4 boidam">Từ trường mạnh nhất</h4>
        @php $idd = 1 @endphp
            @foreach($data['contents'] as $k => $v)
            <div class="item mt-4" style="
                    width: 100%;
                    overflow: scroll;
                ">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th colspan="2" style="position: relative; border: 1px solid #af0007">
                                <h2 class="text-center" style="font-size: 18px">
                                    {{ $k }}
                                </h2>
                                <a id="hide_show_{{$idd}}" style="position: absolute; left: 10px; top: 0" href="#">xem/ẩn</a>
                                <script>
                                    $(document).ready(function () {
                                        $('#hide_show_{{$idd}}').click(function (e) {
                                            e.preventDefault();
                                            $('#content_{{$idd}}').toggle();
                                        });
                                    });
                                </script>
                            </th>
                        </tr>
                    </thead>
                    <tbody style="display: none" id="content_{{$idd}}">
                        @foreach($v as $k1 => $v1)
                            @if ($k1 == 'id' || $k1 == '')
                                @continue
                            @endif

                            @if ($k1 == 'y_nghia')
                                @php $k1 = 'Ý nghĩa'; @endphp

                            @endif

                            @switch($k1)
                                @case('y_nghia')
                                    @php $k1 = 'Ý nghĩa'; @endphp
                                    @break
                                @case('tinh_cach_tot')
                                    @php $k1 = 'Tính cách tốt'; @endphp
                                    @break
                                @case('tinh_cach_xau')
                                    @php $k1 = 'Tính cách xấu'; @endphp
                                    @break
                                @case('tai_van_tien_bac')
                                    @php $k1 = 'Tài vận tiền bạc'; @endphp
                                    @break
                                @case('cong_danh')
                                    @php $k1 = 'Công danh sự nghiệp'; @endphp
                                    @break
                                @case('tinh_dam')
                                    @php $k1 = 'Tình cảm hôn nhân'; @endphp
                                    @break
                                @case('benh_tat')
                                    @php $k1 = 'Sức khoẻ bệnh tật'; @endphp
                                    @break
                            @endswitch

                            <tr>
                                <td style="vertical-align: middle; border: 1px solid #af0007" class="text-center">{{ $k1 }}</td>
                                <td style="vertical-align: middle; border: 1px solid #af0007">
                                    <pre style="
                                        font-size: unset;
                                        font-family: unset;"
                                    > {{ $v1 }}
                                    </pre>
                                </td>
                            </tr>
                            @php
                                $idd++;
                            @endphp
                        @endforeach
                    </tbody>

                </table>


            </div>
            @endforeach
        @endif

        @if (isset($data) && !empty($data))
            @if (count($data['listTinhChat']) > 0)
                <h4 class="text_center h4 boidam mt-4">Tính chất 3 số liền kề</h4>

                @if(isset($data['show_tinh_chat']) && $data['show_tinh_chat'] == '1')
                    <div id="tinh_chats" class="mt-4 text-center" style="
                    font-size: 18px;
                    margin: 0 10px;
                    padding: 20px 10px;" >
                        @php
                            $index = 1;
                        @endphp
                        @foreach($data['listTinhChat'] as $k => $v)
                            <div class="my-2 row align-items-center justify-content-around justify-items-start">
                                <span class="col-3" style="color: #910101; height: 100%"> {{ $v['id'] }} </span>
                                <pre style="text-wrap: wrap;" class="col-9 text-left">{{ $v['content'] }}</pre>
                            </div>
                            @if($index < count($data['listTinhChat']))
                                <hr>
                            @endif
                            @php
                                $index++;
                            @endphp
                        @endforeach
                    </div>
                @else
                    @if(isset($data['show_tinh_chat']) && $data['show_tinh_chat'] == '2')
                        <div class="text-center">
                            <p class="text-center text-danger">Code bạn nhập không chính xác!</p>
                        </div>
                    @endif
                    <div class="w-100 d-flex justify-items-center">
                        <button type="button" class="btn btn-danger mx-auto" data-toggle="modal" data-target="#exampleModalCenter">
                            Xem thêm
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                <path fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Vui lòng nhập code để xem thêm</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <input id="code_input" class="px-2" style="width: 100%; height: 40px; border-radius: 5px; border: 1px solid #e51c4a" type="text" placeholder="Nhập code">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                    <button disabled type="button" id="submit_code" class="btn btn-danger">Tiêp tục</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endif
        @endif
    </section>
@endsection
