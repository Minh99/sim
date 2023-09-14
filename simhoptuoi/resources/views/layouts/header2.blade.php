<div class="menuMobile" style="right: 0px; z-index: 1000">
    <ul class="ul">
        <li class="active">
            <a href="/">Trang chủ</a>
        </li>
        <li><a href="{{ route('boi-sim')}}">Xem phong thủy sim</a></li>
        <li><a href="{{ route('coming-soon') }}">Bói sim kinh dịch</a></li>
        <li><a href="{{ route('boi-sim-4-so') }}">Xem bói sim 4 số cuối</a></li>
        <li><a href="{{ route('boi-sim-6-so') }}">Xem bói sim 6 số cuối</a></li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="simHopMenh" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Sim hợp mệnh
            </a>
            <div class="dropdown-menu" aria-labelledby="simHopMenh">
                <a href="{{ route('menu-page', ['slug' => 'sim_menh_kim']) }}">Sim mệnh Kim</a>
                <a href="{{ route('menu-page', ['slug' => 'sim_menh_moc']) }}">Sim mệnh Mộc</a>
                <a href="{{ route('menu-page', ['slug' => 'sim_menh_thuy']) }}">Sim mệnh Thủy</a>
                <a href="{{ route('menu-page', ['slug' => 'sim_menh_hoa']) }}">Sim mệnh Hỏa</a>
                <a href="{{ route('menu-page', ['slug' => 'sim_menh_tho']) }}">Sim mệnh Thổ</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="simTheoMongCau" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Sim theo mong cầu
            </a>
            <div class="dropdown-menu" aria-labelledby="simTheoMongCau">
                <a href="{{ route('menu-page', ['slug' => 'sim_thang_quan']) }}">Sim
                    thăng quan tiến chức</a>
                <a href="{{ route('menu-page', ['slug' => 'sim_tai_van']) }}">Sim phong thủy
                    kích tài vận</a>
                <a href="{{ route('menu-page', ['slug' => 'sim_tinh_duyen_gia_dao']) }}">Sim kích
                    gia đạo tình duyên</a>
                <a href="{{ route('menu-page', ['slug' => 'sim_xoa_giai_han']) }}">Sim hóa giải
                    vận hạn theo tuổi</a>
            </div>
        </li>
{{--        <li>--}}
{{--            <b class="sht_item">Sim hợp tuổi 200x</b>--}}
{{--            <ul class="sht_item_ul" style="display: none;">--}}
{{--                <li><a href="{{ route('coming-soon') }}">Sim hợp tuổi--}}
{{--                        2000</a></li>--}}
{{--                <li><a href="{{ route('coming-soon') }}">Sim hợp tuổi--}}
{{--                        2001</a></li>--}}
{{--                <li><a href="{{ route('coming-soon') }}">Sim hợp tuổi--}}
{{--                        2002</a></li>--}}
{{--                <li><a href="{{ route('coming-soon') }}">Sim hợp tuổi--}}
{{--                        2003</a></li>--}}
{{--                <li><a href="{{ route('coming-soon') }}">Sim hợp tuổi--}}
{{--                        2004</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <b class="sht_item">Sim hợp tuổi 199x</b>--}}
{{--            <ul class="sht_item_ul" style="display: none;">--}}
{{--                <li><a href="{{ route('coming-soon') }}">Sim hợp tuổi--}}
{{--                        1990</a></li>--}}
{{--                <li><a href="{{ route('coming-soon') }}">Sim hợp tuổi--}}
{{--                        1991</a></li>--}}
{{--                <li><a href="{{ route('coming-soon') }}">Sim hợp tuổi--}}
{{--                        1992</a></li>--}}
{{--                <li><a href="{{ route('coming-soon') }}">Sim hợp tuổi--}}
{{--                        1993</a></li>--}}
{{--                <li><a href="{{ route('coming-soon') }}">Sim hợp tuổi--}}
{{--                        1994</a></li>--}}
{{--                <li><a href="{{ route('coming-soon') }}">Sim hợp tuổi--}}
{{--                        1995</a></li>--}}
{{--                <li><a href="{{ route('coming-soon') }}">Sim hợp tuổi--}}
{{--                        1996</a></li>--}}
{{--                <li><a href="{{ route('coming-soon') }}">Sim hợp tuổi--}}
{{--                        1997</a></li>--}}
{{--                <li><a href="{{ route('coming-soon') }}">Sim hợp tuổi--}}
{{--                        1998</a></li>--}}
{{--                <li><a href="{{ route('coming-soon') }}">Sim hợp tuổi--}}
{{--                        1999</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <b class="sht_item">Sim hợp tuổi 198x</b>--}}
{{--            <ul class="sht_item_ul" style="display: none;">--}}
{{--                <li><a href="{{ route('coming-soon') }}">Sim hợp tuổi--}}
{{--                        1980</a></li>--}}
{{--                <li><a href="{{ route('coming-soon') }}">Sim hợp tuổi--}}
{{--                        1981</a></li>--}}
{{--                <li><a href="{{ route('coming-soon') }}">Sim hợp tuổi--}}
{{--                        1982</a></li>--}}
{{--                <li><a href="{{ route('coming-soon') }}">Sim hợp tuổi--}}
{{--                        1983</a></li>--}}
{{--                <li><a href="{{ route('coming-soon') }}">Sim hợp tuổi--}}
{{--                        1984</a></li>--}}
{{--                <li><a href="{{ route('coming-soon') }}">Sim hợp tuổi--}}
{{--                        1985</a></li>--}}
{{--                <li><a href="{{ route('coming-soon') }}">Sim hợp tuổi--}}
{{--                        1986</a></li>--}}
{{--                <li><a href="{{ route('coming-soon') }}">Sim hợp tuổi--}}
{{--                        1987</a></li>--}}
{{--                <li><a href="{{ route('coming-soon') }}">Sim hợp tuổi--}}
{{--                        1988</a></li>--}}
{{--                <li><a href="{{ route('coming-soon') }}">Sim hợp tuổi--}}
{{--                        1989</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <b class="sht_item">Sim hợp tuổi 197x</b>--}}
{{--            <ul class="sht_item_ul" style="display: none;">--}}
{{--                <li><a href="{{ route('coming-soon') }}">Sim hợp tuổi--}}
{{--                        1970</a></li>--}}
{{--                <li><a href="{{ route('coming-soon') }}">Sim hợp tuổi--}}
{{--                        1971</a></li>--}}
{{--                <li><a href="{{ route('coming-soon') }}">Sim hợp tuổi--}}
{{--                        1972</a></li>--}}
{{--                <li><a href="{{ route('coming-soon') }}">Sim hợp tuổi--}}
{{--                        1973</a></li>--}}
{{--                <li><a href="{{ route('coming-soon') }}">Sim hợp tuổi--}}
{{--                        1974</a></li>--}}
{{--                <li><a href="{{ route('coming-soon') }}">Sim hợp tuổi--}}
{{--                        1975</a></li>--}}
{{--                <li><a href="{{ route('coming-soon') }}">Sim hợp tuổi--}}
{{--                        1976</a></li>--}}
{{--                <li><a href="{{ route('coming-soon') }}">Sim hợp tuổi--}}
{{--                        1977</a></li>--}}
{{--                <li><a href="{{ route('coming-soon') }}">Sim hợp tuổi--}}
{{--                        1978</a></li>--}}
{{--                <li><a href="{{ route('coming-soon') }}">Sim hợp tuổi--}}
{{--                        1979</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <b class="sht_item">Sim hợp tuổi 196x</b>--}}
{{--            <ul class="sht_item_ul" style="display: none;">--}}
{{--                <li><a href="{{ route('coming-soon') }}">Sim hợp tuổi--}}
{{--                        1960</a></li>--}}
{{--                <li><a href="{{ route('coming-soon') }}">Sim hợp tuổi--}}
{{--                        1961</a></li>--}}
{{--                <li><a href="{{ route('coming-soon') }}">Sim hợp tuổi--}}
{{--                        1962</a></li>--}}
{{--                <li><a href="{{ route('coming-soon') }}">Sim hợp tuổi--}}
{{--                        1963</a></li>--}}
{{--                <li><a href="{{ route('coming-soon') }}">Sim hợp tuổi--}}
{{--                        1964</a></li>--}}
{{--                <li><a href="{{ route('coming-soon') }}">Sim hợp tuổi--}}
{{--                        1965</a></li>--}}
{{--                <li><a href="{{ route('coming-soon') }}">Sim hợp tuổi--}}
{{--                        1966</a></li>--}}
{{--                <li><a href="{{ route('coming-soon') }}">Sim hợp tuổi--}}
{{--                        1967</a></li>--}}
{{--                <li><a href="{{ route('coming-soon') }}">Sim hợp tuổi--}}
{{--                        1968</a></li>--}}
{{--                <li><a href="{{ route('coming-soon') }}">Sim hợp tuổi--}}
{{--                        1969</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <b class="sht_item">Sim hợp tuổi 195x</b>--}}
{{--            <ul class="sht_item_ul" style="display: none;">--}}
{{--                <li><a href="{{ route('coming-soon') }}">Sim hợp tuổi--}}
{{--                        1950</a></li>--}}
{{--                <li><a href="{{ route('coming-soon') }}">Sim hợp tuổi--}}
{{--                        1951</a></li>--}}
{{--                <li><a href="{{ route('coming-soon') }}">Sim hợp tuổi--}}
{{--                        1952</a></li>--}}
{{--                <li><a href="{{ route('coming-soon') }}">Sim hợp tuổi--}}
{{--                        1953</a></li>--}}
{{--                <li><a href="{{ route('coming-soon') }}">Sim hợp tuổi--}}
{{--                        1954</a></li>--}}
{{--                <li><a href="{{ route('coming-soon') }}">Sim hợp tuổi--}}
{{--                        1955</a></li>--}}
{{--                <li><a href="{{ route('coming-soon') }}">Sim hợp tuổi--}}
{{--                        1956</a></li>--}}
{{--                <li><a href="{{ route('coming-soon') }}">Sim hợp tuổi--}}
{{--                        1957</a></li>--}}
{{--                <li><a href="{{ route('coming-soon') }}">Sim hợp tuổi--}}
{{--                        1958</a></li>--}}
{{--                <li><a href="{{ route('coming-soon') }}">Sim hợp tuổi--}}
{{--                        1959</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li><a href="/danh-sach-sim">Sim số đẹp</a></li>--}}
        <li><a href="{{ route('coming-soon') }}">Tin tức sim số</a></li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="linkXemTuoi" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Xem Tuổi
            </a>
            <div class="dropdown-menu" aria-labelledby="linkXemTuoi">
                <a href="{{ route('coming-soon') }}">Xem số hợp tuổi</a>
                <a href="{{ route('coming-soon') }}">Xem màu hợp tuổi</a>
                <a href="{{ route('coming-soon') }}">Xem tuổi vợ chồng</a>
                <a href="{{ route('coming-soon') }}">Xem tuổi kết hôn</a>
                <a href="{{ route('coming-soon') }}">Xem nghề hợp tuổi</a>
                <a href="{{ route('coming-soon') }}">Xem tuổi làm ăn</a>
                <a href="{{ route('coming-soon') }}">Xem hướng nhà</a>
                <a href="{{ route('coming-soon') }}">Sao hạn hợp tuổi</a>
                <a href="{{ route('coming-soon') }}">Tra mệnh theo năm sinh</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="linkXemNgay" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Xem Ngày
            </a>
            <div class="dropdown-menu" aria-labelledby="linkXemNgay">
                <a href="{{ route('coming-soon') }}">Xem ngày tốt xấu</a>
                <a href="{{ route('coming-soon') }}">Lịch vạn niên</a>
                <a href="{{ route('coming-soon') }}">Đồi ngày âm sang dương</a>
                <a href="{{ route('coming-soon') }}">Đổi ngày dương sang âm</a>
                <a href="{{ route('coming-soon') }}">Thước lỗ ban</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="linkXemBoi" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Xem Bói
            </a>
            <div class="dropdown-menu" aria-labelledby="linkXemBoi">
                <a href="{{ route('coming-soon') }}">Bói quẻ kinh dịch</a>
                <a href="{{ route('coming-soon') }}">Bói ngày tháng năm sinh</a>
                <a href="{{ route('coming-soon') }}">Bói tình yêu</a>
                <a href="{{ route('coming-soon') }}">Bói cung mệnh</a>
                <a href="{{ route('coming-soon') }}">Bói biển số xe</a>
            </div>
        </li>
        <li><a href="{{ route('coming-soon') }}">Tin tức phong thủy</a></li>
    </ul>
</div>
<div class="wapper_header">
    <div class="container header-2">
        <header id="mobi_menu_top" class="main-header">
            <button type="button" name="button-menu" class="btnMenu d-block d-sm-none">
                <span class="fa-solid fa-bars fa-fw"></span>
            </button>
            <div class="d-flex justify-items-center align-items-center">
                <div class="top-logo text-center w-100">
                    <a style="font-size: 22px" class="text-white text-bold pl-4 text-center" href="/">
                         <img src="{{  asset('common/templates/site/images/logo_ngang.png')}}" alt="Bói sim kinh dịch">
                    </a>
                </div>
            </div>
        </header>
    </div>
</div>
