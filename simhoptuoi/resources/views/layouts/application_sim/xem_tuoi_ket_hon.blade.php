@extends('app')

@section('title', 'Bảng tra sao hạn tuổi')

@section('content')
    <script>
        $(document).ready(function () {
            $('.btn_xemngay_tuoi_ket_hon').click(function (e) {
                e.preventDefault();
                $('#form-tuoi-am').submit();
            });
        });
    </script>
    <section class="contentPage">
        <h1 class="title_h1">Xem tuổi hợp kết hôn</h1>
        <section class="boxForm">
            <div class="bodyForm">
                <div class="row">
                    <div class="col-12 col-md-12">
                        <form method="post" id="form-tuoi-am" name="search_xemsaohan" action="{{ route('xem-tuoi-ket-hon') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-12">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-6">
                                            <p class="title_label text-center"><label>Năm sinh(AL)</label></p>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-6 text-center">
                                            <select name="namsinh" class="namsinh myinput w-100" required="">
                                                <option value="1950" selected >1950</option>
                                                @for($iii = 1951; $iii<=2020; $iii++)
                                                    <option value="{{ $iii }}" @if(($data['namsinh'] ?? '') == $iii) selected @endif >{{ $iii }}</option>
                                                @endfor
                                            </select>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-6">
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
                                        <button type="button" class="btn_xemngay bg-danger btn_xemngay_tuoi_ket_hon"><span>Xem ngay</span></button>
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
                                        <div style="overflow-x:auto;">
                                            <table class="table table-hover table-bordered table_cuatui">
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
                                                        <label>Mệnh ngũ hành:</label>
                                                    </td>
                                                    <td style="background: transparent; border: 1px solid #af0007">
                                                        <p>{{ $data['menh'] }}</p>
                                                    </td >
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
                                                        <label>Cung phi:</label>
                                                    </td>
                                                    <td style="background: transparent; border: 1px solid #af0007"      >
                                                        <p>{{ $data['cungPhi'] }}</p>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <table class="table table-hover table-bordered table_cuatui">
                                    <thead>
                                        <tr>
                                            <th colspan="1" style="background: transparent; border: 1px solid #af0007">
                                                <h3 class="text_center h4 boidam">Header 1?</h3>
                                            </th>
                                            <th colspan="1" style="background: transparent; border: 1px solid #af0007">
                                                <h3 class="text_center h4 boidam">Header 2?</h3>
                                            </th>
                                            <th colspan="1" style="background: transparent; border: 1px solid #af0007">
                                                <h3 class="text_center h4 boidam">Đánh giá</h3>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody style="background: transparent">
                                        @if (!empty($data['contentTable']['luc_hop']))
                                            <tr>
                                                <td  style="background: transparent; border: 1px solid #af0007">
                                                    <h3 class="text_center">Lục hợp:</h3>
                                                </td>
                                                <td style="background: transparent; border: 1px solid #af0007; text-align: center;">
                                                    <h3 class="text_center">{{ $data['contentTable']['luc_hop'] }}</h3>
                                                </td>
                                                <td  style="background: transparent; border: 1px solid #af0007; text-align: center;">
                                                    <h3 class="text_center">Tốt</h3>
                                                </td>
                                            </tr>
                                        @endif

                                        @if (!empty($data['contentTable']['tam_hop']))
                                            <tr>
                                                <td  style="background: transparent; border: 1px solid #af0007">
                                                    <h3 class="text_center">Tam hợp:</h3>
                                                </td>
                                                <td style="background: transparent; border: 1px solid #af0007; text-align: center;">
                                                    <h3 class="text_center">{{ $data['contentTable']['tam_hop'] }}</h3>
                                                </td>
                                                <td  style="background: transparent; border: 1px solid #af0007; text-align: center;">
                                                    <h3 class="text_center">Tốt</h3>
                                                </td>
                                            </tr>
                                        @endif

                                        @if (!empty($data['contentTable']['tuong_hoa']))
                                            <tr>
                                                <td  style="background: transparent; border: 1px solid #af0007">
                                                    <h3 class="text_center">Tương hóa:</h3>
                                                </td>
                                                <td style="background: transparent; border: 1px solid #af0007; text-align: center;">
                                                    <h3 class="text_center">{{ $data['contentTable']['tuong_hoa'] }}</h3>
                                                </td>
                                                <td  style="background: transparent; border: 1px solid #af0007; text-align: center;">
                                                    <h3 class="text_center">Tốt</h3>
                                                </td>
                                            </tr>
                                        @endif

                                        @if (!empty($data['contentTable']['loc']))
                                            <tr>
                                                <td  style="background: transparent; border: 1px solid #af0007">
                                                    <h3 class="text_center">Lộc:</h3>
                                                </td>
                                                <td style="background: transparent; border: 1px solid #af0007; text-align: center;">
                                                    <h3 class="text_center">{{ $data['contentTable']['loc'] }}</h3>
                                                </td>
                                                <td  style="background: transparent; border: 1px solid #af0007; text-align: center;">
                                                    <h3 class="text_center">Tốt</h3>
                                                </td>
                                            </tr>
                                        @endif

                                        @if (!empty($data['contentTable']['ma']))
                                            <tr>
                                                <td  style="background: transparent; border: 1px solid #af0007">
                                                    <h3 class="text_center">Mã:</h3>
                                                </td>
                                                <td style="background: transparent; border: 1px solid #af0007; text-align: center;">
                                                    <h3 class="text_center">{{ $data['contentTable']['ma'] }}</h3>
                                                </td>
                                                <td  style="background: transparent; border: 1px solid #af0007; text-align: center;">
                                                    <h3 class="text_center">Tốt</h3>
                                                </td>
                                            </tr>
                                        @endif

                                        @if (!empty($data['contentTable']['quy_nhan']))
                                            <tr>
                                                <td  style="background: transparent; border: 1px solid #af0007">
                                                    <h3 class="text_center">Quý nhân:</h3>
                                                </td>
                                                <td style="background: transparent; border: 1px solid #af0007; text-align: center;">
                                                    <h3 class="text_center">{{ $data['contentTable']['quy_nhan'] }}</h3>
                                                </td>
                                                <td  style="background: transparent; border: 1px solid #af0007; text-align: center;">
                                                    <h3 class="text_center">Tốt</h3>
                                                </td>
                                            </tr>
                                        @endif

                                        @if (!empty($data['contentTable']['v_xuong_khuc']))
                                            <tr>
                                                <td  style="background: transparent; border: 1px solid #af0007">
                                                    <h3 class="text_center">Văn xương, Văn khúc:</h3>
                                                </td>
                                                <td style="background: transparent; border: 1px solid #af0007; text-align: center;">
                                                    <h3 class="text_center">{{ $data['contentTable']['v_xuong_khuc'] }}</h3>
                                                </td>
                                                <td  style="background: transparent; border: 1px solid #af0007; text-align: center;">
                                                    <h3 class="text_center">Tốt</h3>
                                                </td>
                                            </tr>
                                        @endif

                                        @if (!empty($data['contentTable']['hinh']))
                                            <tr>
                                                <td  style="background: transparent; border: 1px solid #af0007">
                                                    <h3 class="text_center">Hình:</h3>
                                                </td>
                                                <td style="background: transparent; border: 1px solid #af0007; text-align: center;">
                                                    <h3 class="text_center">{{ $data['contentTable']['hinh'] }}</h3>
                                                </td>
                                                <td  style="background: transparent; border: 1px solid #af0007; text-align: center;">
                                                    <h3 class="text_center">Trung Bình</h3>
                                                </td>
                                            </tr>
                                        @endif

                                        @if (!empty($data['contentTable']['sat']))
                                            <tr>
                                                <td  style="background: transparent; border: 1px solid #af0007">
                                                    <h3 class="text_center">Sát:</h3>
                                                </td>
                                                <td style="background: transparent; border: 1px solid #af0007; text-align: center;">
                                                    <h3 class="text_center">{{ $data['contentTable']['sat'] }}</h3>
                                                </td>
                                                <td  style="background: transparent; border: 1px solid #af0007; text-align: center;">
                                                    <h3 class="text_center">Trung Bình</h3>
                                                </td>
                                            </tr>
                                        @endif

                                        @if (!empty($data['contentTable']['hai']))
                                            <tr>
                                                <td  style="background: transparent; border: 1px solid #af0007">
                                                    <h3 class="text_center">Tương hại:</h3>
                                                </td>
                                                <td style="background: transparent; border: 1px solid #af0007; text-align: center;">
                                                    <h3 class="text_center">{{ $data['contentTable']['hai'] }}</h3>
                                                </td>
                                                <td  style="background: transparent; border: 1px solid #af0007; text-align: center;">
                                                    <h3 class="text_center">Trung Bình</h3>
                                                </td>
                                            </tr>
                                        @endif

                                        @if (!empty($data['contentTable']['xung_pha']))
                                            <tr>
                                                <td  style="background: transparent; border: 1px solid #af0007">
                                                    <h3 class="text_center">Xung/Phá:</h3>
                                                </td>
                                                <td style="background: transparent; border: 1px solid #af0007; text-align: center;">
                                                    <h3 class="text_center">{{ $data['contentTable']['xung_pha'] }}</h3>
                                                </td>
                                                <td  style="background: transparent; border: 1px solid #af0007; text-align: center;">
                                                    <h3 class="text_center">Trung Bình</h3>
                                                </td>
                                            </tr>
                                        @endif

                                        @if (!empty($data['contentTable']['do_thien']))
                                            <tr>
                                                <td  style="background: transparent; border: 1px solid #af0007">
                                                    <h3 class="text_center">Đô thiên:</h3>
                                                </td>
                                                <td style="background: transparent; border: 1px solid #af0007; text-align: center;">
                                                    <h3 class="text_center">{{ $data['contentTable']['do_thien'] }}</h3>
                                                </td>
                                                <td  style="background: transparent; border: 1px solid #af0007; text-align: center;">
                                                    <h3 class="text_center">Trung Bình</h3>
                                                </td>
                                            </tr>
                                        @endif

                                        @if (!empty($data['contentTable']['luc_xung']))
                                            <tr>
                                                <td  style="background: transparent; border: 1px solid #af0007">
                                                    <h3 class="text_center">Lục xung:</h3>
                                                </td>
                                                <td style="background: transparent; border: 1px solid #af0007; text-align: center;">
                                                    <h3 class="text_center">{{ $data['contentTable']['luc_xung'] }}</h3>
                                                </td>
                                                <td  style="background: transparent; border: 1px solid #af0007; text-align: center;">
                                                    <h3 class="text_center">Xấu</h3>
                                                </td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>

                                <br>
                                <div id="result">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2 class="title_c title_h1 h3" style="margin-bottom: 1.3em; border-bottom: 2px solid rgb(22, 51, 87);">
                                                Tháng hợp tuổi kết hôn cho {{ $data['tuoiTxt'] }}
                                            </h2>
                                            <div>
                                                <p dir="ltr" style="text-align:center; text-transform: capitalize; font-weight: bold">
                                                    {{ $data['thangKetHon'] }}</p>
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
        @else
            <section class="boxForm fullwidth">
                <div class="bodyForm">
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="textTopHome readmore_content_js1" data-readmore="" aria-expanded="false" id="undefined1" style="max-height: none; height: 632.984px;">
                                <h2 style="text-align: center; margin-bottom: 1.3em; border-bottom: 2px solid rgb(22, 51, 87);"><strong><span style="color:#FF0000"><span style="font-size:16px"><span style="font-family:times new roman,times,serif"><span id="xem-b-oihop-tuoi-ket-hon-theo-ngay-thang-nam-sinh">Xem bói hợp tuổi kết hôn theo ngày tháng năm sinh</span></span></span></span></strong></h2>
                                <p dir="ltr"><span style="font-size:16px"><span style="font-family:times new roman,times,serif">Người Việt từ xưa đến nay rất coi trọng việc xem tuổi hợp nhau, trước khi kết hôn thì việc đầu tiên cần làm chính là xem bói hợp tuổi để kết hôn. Để xem tuổi có hợp nhau không, xem tuổi hợp nhau theo ngày tháng năm sinh sẽ được được phân tích mức độ hợp khắc dựa trên nhiều yếu tố như niên mệnh, thiên can, địa chi, về cung, thiên mệnh năm sinh…. rất phức tạp. </span></span></p>
                                <ul>
                                    <li>
                                        <h3><strong><span style="font-size:16px"><span style="font-family:times new roman,times,serif">Xem tuổi hợp kết hôn với mục đích gì?</span></span></strong></h3>
                                    </li>
                                </ul>
                                <p dir="ltr"><span style="font-size:16px"><span style="font-family:times new roman,times,serif">Phần mềm Xem hợp tuổi kết hôn sẽ giúp bạn biết được tuổi bạn và người ấy có hợp nhau trong tình yêu để tiến đến hôn nhân hay không một cách đơn giản nhất, chỉ cần nhập tuổi của bạn thì ngay lập tức công cụ sẽ trả về kết quả theo nghĩa tương minh để bạn có thể dễ dàng tìm hiểu.</span></span></p>                            <p><span style="font-size:16px"><span style="font-family:times new roman,times,serif">Công cụ xem tuổi hợp nhau để kết hôn giúp mang đến hạnh phúc và sự hòa hợp nhất của bạn và người ấy trên cả đường tình duyên và sự nghiệp, con cái....</span></span></p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        @endif
    </section>
@endsection
