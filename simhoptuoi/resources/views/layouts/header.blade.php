<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>
<div class="fixed-top bg-main">
    <header class="site-navbar site-navbar-target" role="banner" style="font-size: 14px; font-weight: 600">
        <div class="container">
            <div class="row align-items-center position-relative" style="height: 100px">
                <div class="col-lg-5">
                    <nav class="site-navigation text-right ml-auto " role="navigation">
                        <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                            <li>
                                <a href="{{ route('boi-sim') }}" class="nav-link">Xem Sim Phong Thuỷ</a>
                            </li>
                            <li>
                                <a href="{{ route('boi-sim-nang-luong-so') }}" class="nav-link">Xem Sim Năng Lượng Số</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-2 text-center d-flex justify-items-center justify-content-around">
                    <div class="site-logo top-logo">
                        <a href="{{ route('home')  }}"><img src="{{  asset('common/templates/site/images/logo_ngang1.png')}}" alt="Xem sim kinh dịch"></a>
                    </div>
                    <div class="ml-auto toggle-button d-inline-block d-lg-none">
                        <a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black">
                            <span class="icon-menu h3 text-black"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <nav class="site-navigation text-left mr-auto " role="navigation">
                        <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                            <li>
                                <a href="{{ route('boi-sim-4-so') }}" class="nav-link">Xem Sim 4 Số Cuối</a>
                            </li>
                            <li>
                                <a href="{{ route('boi-sim-6-so') }}" class="nav-link">Xem Sim 6 Số Cuối</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-5 d-none">
                    <nav class="site-navigation text-left mr-auto " role="navigation">
                        <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                            <li>
                                <h3><a href="{{ route('menu-page', ['slug' => 'sim_menh_kim']) }}">Sim hợp mệnh Kim</a>
                                </h3>
                            </li>
                            <li>
                                <h3><a href="{{ route('menu-page', ['slug' => 'sim_menh_moc']) }}">Sim hợp mệnh Mộc</a>
                                </h3>
                            </li>
                            <li>
                                <h3><a href="{{ route('menu-page', ['slug' => 'sim_menh_thuy']) }}">Sim hợp mệnh Thủy</a>
                                </h3>
                            </li>
                            <li>
                                <h3><a href="{{ route('menu-page', ['slug' => 'sim_menh_hoa']) }}">Sim hợp mệnh Hỏa</a>
                                </h3>
                            </li>
                            <li>
                                <h3><a href="{{ route('menu-page', ['slug' => 'sim_menh_tho']) }}">Sim hợp mệnh Thổ</a>
                                </h3>
                            </li>
                            <li>
                                <h3><a href="{{ route('menu-page', ['slug' => 'sim_thang_quan']) }}">Sim thăng quan tiến chức</a>
                                </h3>
                            </li>
                            <li>
                                <h3><a href="{{ route('menu-page', ['slug' => 'sim_tai_van']) }}">Sim phong thủy kích tài vận</a>
                                </h3>
                            </li>
                            <li>
                                <h3><a href="{{ route('menu-page', ['slug' => 'sim_tinh_duyen_gia_dao']) }}">Sim kích gia đạo tình duyên</a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="{{ route('menu-page', ['slug' => 'sim_xoa_giai_han']) }}">Sim hóa giải vận hạn theo tuổi</a>
                                </h3>
                            </li>
                            <li>
                                <a href="#" id="195xx_title" class="nav-link">Sim hợp tuổi 195x</a>
                                <ul id="195xx_items" style="display: none">
                                    @for($i = 0; $i < 10; $i++)
                                        <li class="">
                                            <a class="nav-link pl-6" style="font-size:12px" href="{{ route('sim-hop-nam-sinh', ['slug' => "195$i"])  }}">Sim hợp tuổi 195{{ $i  }}</a>
                                        </li>
                                    @endfor
                                </ul>
                            </li>
                            <li>
                                <a href="#" id="196xx_title" class="nav-link">Sim hợp tuổi 196x</a>
                                <ul id="196xx_items" style="display: none">
                                    @for($i = 0; $i < 10; $i++)
                                        <li class="">
                                            <a class="nav-link pl-6" style="font-size:12px" href="{{ route('sim-hop-nam-sinh', ['slug' => "196$i"])  }}">Sim hợp tuổi 196{{ $i  }}</a>
                                        </li>
                                    @endfor
                                </ul>
                            </li>
                            <li>
                                <a href="#" id="197xx_title" class="nav-link">Sim hợp tuổi 197x</a>
                                <ul id="197xx_items" style="display: none">
                                    @for($i = 0; $i < 10; $i++)
                                        <li class="">
                                            <a class="nav-link pl-6" style="font-size:12px" href="{{ route('sim-hop-nam-sinh', ['slug' => "197$i"])  }}">Sim hợp tuổi 197{{ $i  }}</a>
                                        </li>
                                    @endfor
                                </ul>
                            </li>
                            <li>
                                <a href="#" id="198xx_title" class="nav-link">Sim hợp tuổi 198x</a>
                                <ul id="198xx_items" style="display: none">
                                    @for($i = 0; $i < 10; $i++)
                                        <li class="">
                                            <a class="nav-link pl-6" style="font-size:12px" href="{{ route('sim-hop-nam-sinh', ['slug' => "198$i"])  }}">Sim hợp tuổi 198{{ $i  }}</a>
                                        </li>
                                    @endfor
                                </ul>
                            </li>
                            <li>
                                <a href="#" id="199xx_title" class="nav-link">Sim hợp tuổi 199x</a>
                                <ul id="199xx_items" style="display: none">
                                    @for($i = 0; $i < 10; $i++)
                                        <li class="">
                                            <a class="nav-link pl-6" style="font-size:12px" href="{{ route('sim-hop-nam-sinh', ['slug' => "199$i"])  }}">Sim hợp tuổi 199{{ $i  }}</a>
                                        </li>
                                    @endfor
                                </ul>
                            </li>
                            <li>
                                <a href="#" id="200xx_title" class="nav-link">Sim hợp tuổi 200x</a>
                                <ul id="200xx_items" style="display: none">
                                    @for($i = 0; $i < 10; $i++)
                                        <li class="">
                                            <a class="nav-link pl-6" style="font-size:12px" href="{{ route('sim-hop-nam-sinh', ['slug' => "200$i"])  }}">Sim hợp tuổi 200{{ $i  }}</a>
                                        </li>
                                    @endfor
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="titleHead container">
            <section class="search-header-wapper">
                <div class="search-desktop d-none d-md-block">
                    <div class="in-main">
                        <form id="header_search_form_desktop" action="{{ route('data-search') }}" method="POST">
                            @csrf
                            <div class="d-flex justify-content-center">
                                <div class="form-group">
                                    <input type="radio" name="gioiTinh_header" id="select-nam" value="nam" checked="">
                                    <label for="select-nam">
                                        Nam
                                    </label>
                                </div>
                                <div class="form-group">
                                    <input type="radio" name="gioiTinh_header" id="select-nu" value="nu">
                                    <label for="select-nu">
                                        Nữ
                                    </label>
                                </div>

                                <div class="form-group">
                                    <select class="form-control" name="gio_sinh_header" required="" id="gio_sinh_header">
                                        <option>Giờ sinh</option>
                                        <option value="1" selected="">Tý (23g - 1g)</option>
                                        <option value="2">Sửu (1g - 3g)</option>
                                        <option value="3">Dần (3g - 5g)</option>
                                        <option value="4">Mão (5g - 7g)</option>
                                        <option value="5">Thìn (7g - 9g)</option>
                                        <option value="6">Tỵ (9g - 11g)</option>
                                        <option value="7">Ngọ (11g - 13g)</option>
                                        <option value="8">Mùi (13g - 15g)</option>
                                        <option value="9">Thân (15g - 17g)</option>
                                        <option value="10">Dậu (17g - 19g)</option>
                                        <option value="11">Tuất (19g - 21g)</option>
                                        <option value="12">Hợi (21g - 23g)</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select class="form-control" id="ngay_sinh_header">
                                        <option>Ngày</option>
                                        <option value="1" selected="">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8" >8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                    </select>
                                </div>


                                <div class="form-group ">
                                    <select class="form-control" id="thang_sinh_header">
                                        <option>Tháng</option>
                                        <option value="1" selected="">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8" >8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </div>


                                <div class="form-group" data-namsinh="1988">
                                    <select class="form-control" id="nam_sinh_header" name="nam_sinh_header">
                                        @php
                                            $year = session('nam_sinh_header') ?? date('Y');
                                        @endphp
                                        @for($ii = date('Y') ; $ii >= 1950 ; $ii--)
                                            <option value="{{ $ii }}" @if($ii == $year) selected="" @endif>{{ $ii }}</option>
                                        @endfor
                                    </select>
                                </div>

                                <div class="form-group">
                                    @if (!session('duoi_sim_header'))
                                    <input type="tel" name="duoi_sim_header" id="number_search" class="form-control number_search_destop" placeholder="Nhập đuôi sim" value="">
                                    @else
                                    <input type="tel" name="duoi_sim_header" id="number_search" class="form-control number_search_destop" placeholder="Nhập đuôi sim" value="{{ session('duoi_sim_header') }}">
                                    @endif
                                </div>

                                <input hidden type="text" name="ngu_hanh_header" id="ngu_hanh_header">

                                <div class="align-items-center justify-content-center">
                                    <button id="btn_submit_header" type="button" style="background: transparent; border: none">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="search-mobile d-block d-sm-none">
                    <div class="search_header">
                        <form id="header_search_form_mobile" action="{{ route('data-search') }}" method="POST">
                            @csrf
                            <div class="form-group row m-0 align-items-center justify-content-between">
                                <div class="col-7 col-sm-7 dateInfo" style="position: relative;">
                                    @if(!session('ngay_than_nam_sinh_header'))
                                    <input type="datetime-local" name="ngay_than_nam_sinh_header" id="ngay_than_nam_sinh_header" class="form-control" placeholder="Ngày sinh" value="2023-01-01T01:30">
                                    @else
                                    <input type="datetime-local" name="ngay_than_nam_sinh_header" id="ngay_than_nam_sinh_header" class="form-control" placeholder="Ngày sinh" value="{{ session('ngay_than_nam_sinh_header') }}">
                                    @endif
                                </div>
                                <div class="col-4 col-sm-4">
                                    @if(!session('duoi_sim_header_mobile'))
                                    <input name="duoi_sim_header_mobile" type="tel" class="search-key form-control" placeholder="Nhập đuôi sim" value="">
                                    @else
                                    <input name="duoi_sim_header_mobile" type="tel" class="search-key form-control" placeholder="Nhập đuôi sim" value="{{ session('duoi_sim_header_mobile') }}">
                                    @endif
                                </div>
                                <div class="col-1 col-sm-1">
                                    <div class="search_icon_mobile">
                                        <button type="button" id="btn_submit_header_mobile" style="background: transparent; border: none">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" id="gioi_tinh_header_mobile" value="nam">
                            <input type="hidden" id="gio_sinh_header_mobile" value="5-gio-den-7-gio">
                            <input hidden type="text" name="ngu_hanh_header_mobile" id="ngu_hanh_header_mobile">
                        </form>
                    </div>
                </div>
            </section>
        </div>

        <script>
            const cungPhi = {
                1924 : ['Giáp Tý', 'Kim', 'Tốn', 'Khôn'],
                1925 : ['Ất Sửu', 'Kim', 'Chấn', 'Chấn'],
                1926 : ['Bính Dần', 'Hỏa', 'Khôn', 'Tốn'],
                1927 : ['Đinh Mão', 'Hỏa', 'Khảm', 'Cấn'],
                1928 : ['Mậu Thìn', 'Mộc', 'Ly', 'Càn'],
                1929 : ['Kỷ Tỵ', 'Mộc', 'Cấn', 'Đoài'],
                1930 : ['Canh Ngọ', 'Thổ', 'Đoài', 'Cấn'],
                1931 : ['Tân Mùi', 'Thổ', 'Càn', 'Ly'],
                1932 : ['Nhâm Thân', 'Kim', 'Khôn', 'Khảm'],
                1933 : ['Quý Dậu', 'Kim', 'Tốn', 'Khôn'],
                1934 : ['Giáp Tuất', 'Hỏa', 'Chấn', 'Chấn'],
                1935 : ['Ất Hợi', 'Hỏa', 'Khôn', 'Tốn'],
                1936 : ['Bính Tý', 'Thủy', 'Khảm', 'Cấn'],
                1937 : ['Đinh Sửu', 'Thủy', 'Ly', 'Càn'],
                1938 : ['Mậu Dần', 'Thổ', 'Cấn', 'Đoài'],
                1939 : ['Kỷ Mão', 'Thổ', 'Đoài', 'Cấn'],
                1940 : ['Canh Thìn', 'Kim', 'Càn', 'Ly'],
                1941 : ['Tân Tỵ', 'Kim', 'Khôn', 'Khảm'],
                1942 : ['Nhâm Ngọ', 'Mộc', 'Tốn', 'Khôn'],
                1943 : ['Quý Mùi', 'Mộc', 'Chấn', 'Chấn'],
                1944 : ['Giáp Thân', 'Thủy', 'Khôn', 'Tốn'],
                1945 : ['Ất Dậu', 'Thủy', 'Khảm', 'Cấn'],
                1946 : ['Bính Tuất', 'Thổ', 'Ly', 'Càn'],
                1947 : ['Đinh Hợi', 'Thổ', 'Cấn', 'Đoài'],
                1948 : ['Mậu Tý', 'Hỏa', 'Đoài', 'Cấn'],
                1949 : ['Kỷ Sửu', 'Hỏa', 'Càn', 'Ly'],
                1950 : ['Canh Dần', 'Mộc', 'Khôn', 'Khảm'],
                1951 : ['Tân Mão', 'Mộc', 'Tốn', 'Khôn'],
                1952 : ['Nhâm Thìn', 'Thủy', 'Chấn', 'Chấn'],
                1953 : ['Quý Tỵ', 'Thủy', 'Khôn', 'Tốn'],
                1954 : ['Giáp Ngọ', 'Kim', 'Khảm', 'Cấn'],
                1955 : ['Ất Mùi', 'Kim', 'Ly', 'Càn'],
                1956 : ['Bính Thân', 'Hỏa', 'Cấn', 'Đoài'],
                1957 : ['Đinh Dậu', 'Hỏa', 'Đoài', 'Cấn'],
                1958 : ['Mậu Tuất', 'Mộc', 'Càn', 'Ly'],
                1959 : ['Kỷ Hợi', 'Mộc', 'Khôn', 'Khảm'],
                1960 : ['Canh Tý', 'Thổ', 'Tốn', 'Khôn'],
                1961 : ['Tân Sửu', 'Thổ', 'Chấn', 'Chấn'],
                1962 : ['Nhâm Dần', 'Kim', 'Khôn', 'Tốn'],
                1963 : ['Quý Mão', 'Kim', 'Khảm', 'Cấn'],
                1964 : ['Giáp Thìn', 'Hỏa', 'Ly', 'Càn'],
                1965 : ['Ất Tỵ', 'Hỏa', 'Cấn', 'Đoài'],
                1966 : ['Bính Ngọ', 'Thủy', 'Đoài', 'Cấn'],
                1967 : ['Đinh Mùi', 'Thủy', 'Càn', 'Ly'],
                1968 : ['Mậu Thân', 'Thổ', 'Khôn', 'Khảm'],
                1969 : ['Kỷ Dậu', 'Thổ', 'Tốn', 'Khôn'],
                1970 : ['Canh Tuất', 'Kim', 'Chấn', 'Chấn'],
                1971 : ['Tân Hợi', 'Kim', 'Khôn', 'Tốn'],
                1972 : ['Nhâm Tý', 'Mộc', 'Khảm', 'Cấn'],
                1973 : ['Quý Sửu', 'Mộc', 'Ly', 'Càn'],
                1974 : ['Giáp Dần', 'Thủy', 'Cấn', 'Đoài'],
                1975 : ['Ất Mão', 'Thủy', 'Đoài', 'Cấn'],
                1976 : ['Bính Thìn', 'Thổ', 'Càn', 'Ly'],
                1977 : ['Đinh Tỵ', 'Thổ', 'Khôn', 'Khảm'],
                1978 : ['Mậu Ngọ', 'Hỏa', 'Tốn', 'Khôn'],
                1979 : ['Kỷ Mùi', 'Hỏa', 'Chấn', 'Chấn'],
                1980 : ['Canh Thân', 'Mộc', 'Khôn', 'Tốn'],
                1981 : ['Tân Dậu', 'Mộc', 'Khảm', 'Cấn'],
                1982 : ['Nhâm Tuất', 'Thủy', 'Ly', 'Càn'],
                1983 : ['Quý Hợi', 'Thủy', 'Cấn', 'Đoài'],
                1984 : ['Giáp Tý', 'Kim', 'Đoài', 'Cấn'],
                1985 : ['Ất Sửu', 'Kim', 'Càn', 'Ly'],
                1986 : ['Bính Dần', 'Hỏa', 'Khôn', 'Khảm'],
                1987 : ['Đinh Mão', 'Hỏa', 'Tốn', 'Khôn'],
                1988 : ['Mậu Thìn', 'Mộc', 'Chấn', 'Chấn'],
                1989 : ['Kỷ Tỵ', 'Mộc', 'Khôn', 'Tốn'],
                1990 : ['Canh Ngọ', 'Thổ', 'Khảm', 'Cấn'],
                1991 : ['Tân Mùi', 'Thổ', 'Ly', 'Càn'],
                1992 : ['Nhâm Thân', 'Kim', 'Cấn', 'Đoài'],
                1993 : ['Quý Dậu', 'Kim', 'Đoài', 'Cấn'],
                1994 : ['Giáp Tuất', 'Hỏa', 'Càn', 'Ly'],
                1995 : ['Ất Hợi', 'Hỏa', 'Khôn', 'Khảm'],
                1996 : ['Bính Tý', 'Thủy', 'Tốn', 'Khôn'],
                1997 : ['Đinh Sửu', 'Thủy', 'Chấn', 'Chấn'],
                1998 : ['Mậu Dần', 'Thổ', 'Khôn', 'Tốn'],
                1999 : ['Kỷ Mão', 'Thổ', 'Khảm', 'Cấn'],
                2000 : ['Canh Thìn', 'Kim', 'Ly', 'Càn'],
                2001 : ['Tân Tỵ', 'Kim', 'Cấn', 'Đoài'],
                2002 : ['Nhâm Ngọ', 'Mộc', 'Đoài', 'Cấn'],
                2003 : ['Quý Mùi', 'Mộc', 'Càn', 'Ly'],
                2004 : ['Giáp Thân', 'Thủy', 'Khôn', 'Khảm'],
                2005 : ['Ất Dậu', 'Thủy', 'Tốn', 'Khôn'],
                2006 : ['Bính Tuất', 'Thổ', 'Chấn', 'Chấn'],
                2007 : ['Đinh Hợi', 'Thổ', 'Khôn', 'Tốn'],
                2008 : ['Mậu Tý', 'Hỏa', 'Khảm', 'Cấn'],
                2009 : ['Kỷ Sửu', 'Hỏa', 'Ly', 'Càn'],
                2010 : ['Canh Dần', 'Mộc', 'Cấn', 'Đoài'],
                2011 : ['Tân Mão', 'Mộc', 'Đoài', 'Cấn'],
                2012 : ['Nhâm Thìn', 'Thủy', 'Càn', 'Ly'],
                2013 : ['Quý Tỵ', 'Thủy', 'Khôn', 'Khảm'],
                2014 : ['Giáp Ngọ', 'Kim', 'Tốn', 'Khôn'],
                2015 : ['Ất Mùi', 'Kim', 'Chấn', 'Chấn'],
                2016 : ['Bính Thân', 'Hỏa', 'Khôn', 'Tốn'],
                2017 : ['Đinh Dậu', 'Hỏa', 'Khảm', 'Cấn'],
                2018 : ['Mậu Tuất', 'Mộc', 'Ly', 'Càn'],
                2019 : ['Kỷ Hợi', 'Mộc', 'Cấn', 'Đoài'],
                2020 : ['Canh Tý', 'Thổ', 'Đoài', 'Cấn'],
                2021 : ['Tân Sửu', 'Thổ', 'Càn', 'Ly'],
                2022 : ['Nhâm Dần', 'Kim', 'Khôn', 'Khảm'],
                2023 : ['Qúy Mão', 'Kim', 'Tốn', 'Khôn'],
                2024 : ['Giáp Thìn', 'Hỏa', 'Chấn', 'Chấn'],
                2025 : ['Ất Tỵ', 'Hỏa', 'Khôn', 'Tốn'],
                2026 : ['Bính Ngọ', 'Thủy', 'Khảm', 'Cấn'],
                2027 : ['Đinh Mùi', 'Thủy', 'Ly', 'Càn'],
                2028 : ['Mậu Thân', 'Thổ', 'Cấn', 'Đoài'],
                2029 : ['Kỷ Dậu', 'Thổ', 'Đoài', 'Cấn'],
                2030 : ['Canh Tuất', 'Kim', 'Càn', 'Ly'],
            };
            $(document).ready(function () {
                var ngu_hanh = '';
                $('#btn_submit_header').click(function (event) {
                    event.preventDefault();
                    var ngay = $('#ngay_sinh_header').val();
                    var thang = $('#thang_sinh_header').val();
                    var nam = $('#nam_sinh_header').val();

                    var gioSinh = $('#gio_sinh_header').children("option:selected").text();

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
                    // var HK = napAmHanhKhac(can, chi);

                    console.log(cungPhi[nam][1]);
                    ngu_hanh = cungPhi[nam][1];

                    $('#ngu_hanh_header').val(ngu_hanh);

                    $('#header_search_form_desktop').submit();
                });

                $('#btn_submit_header_mobile').click(function (event) {
                    event.preventDefault();
                    var birthdayTime = $('#ngay_than_nam_sinh_header').val();
                    if (birthdayTime.length > 1) {
                        var ngay = birthdayTime.slice(8, 10);
                        var thang = birthdayTime.slice(5, 7);
                        var nam = birthdayTime.slice(0, 4);
                        var gio = birthdayTime.slice(11, 13);

                        if (gio) gio = parseInt(gio);
                        if (gio >= 23) {
                            var newDate = new Date(nam, thang, ngay);
                            newDate.setDate(newDate.getDate() + 1);
                            ngay = newDate.getDate();
                            thang = newDate.getMonth();
                            nam = newDate.getFullYear();
                        }

                        console.log(ngay, thang, nam);
                        var lunar = new AmLich(ngay, thang, nam);
                        // console.log(ngay, thang, nam);
                        // console.log(lunar.day+'/'+lunar.month+'/'+lunar.year);

                        var can = canVi(ThienCan(lunar.days));
                        var chi = chiVi(DiaChi(lunar.days));
                        // var HK = napAmHanhKhac(can, chi);
                        ngu_hanh = cungPhi[nam][1];
                        console.log(ngu_hanh);

                        $('#ngu_hanh_header_mobile').val(ngu_hanh);
                    }

                    $('#header_search_form_mobile').submit();
                });
            });
        </script>

        <div class="item-ung-dung-sim">
            <a class="btn btn-danger rounded" href="{{ route('boi-sim') }}">
                Xem sim <br> phong thuỷ
            </a>
            <a class="btn btn-danger rounded" href="{{ route('boi-sim-nang-luong-so') }}">
                Xem năng <br> lượng sim
            </a>
            <a class="btn btn-danger rounded" href="{{ route('boi-sim-4-so') }}">
                Xem 4 <br> số cuối
            </a>
            <a class="btn btn-danger rounded" href="{{ route('boi-sim-6-so') }}">
                Xem 6 <br> số cuối
            </a>
        </div>
    </header>
</div>
