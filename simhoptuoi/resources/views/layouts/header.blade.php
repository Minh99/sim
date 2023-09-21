<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>
<div class="sticky-top bg-main">
    <header class="site-navbar site-navbar-target" role="banner" style="font-size: 14px; font-weight: 600">
        <div class="container">
            <div class="row align-items-center position-relative">
                <div class="col-lg-5">
                    <nav class="site-navigation text-right ml-auto " role="navigation">
                        <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                            <li>
                                <div class="dropdown">
                                    <a href="#" id="dropdownMenu1" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Sim hợp phong thuỷ
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                        <a class="dropdown-item" href="{{ route('menu-page', ['slug' => 'sim_menh_kim']) }}">Sim mệnh Kim</a>
                                        <a class="dropdown-item" href="{{ route('menu-page', ['slug' => 'sim_menh_moc']) }}">Sim mệnh Mộc</a>
                                        <a class="dropdown-item" href="{{ route('menu-page', ['slug' => 'sim_menh_thuy']) }}">Sim mệnh Thủy</a>
                                        <a class="dropdown-item" href="{{ route('menu-page', ['slug' => 'sim_menh_hoa']) }}">Sim mệnh Hỏa</a>
                                        <a class="dropdown-item" href="{{ route('menu-page', ['slug' => 'sim_menh_tho']) }}">Sim mệnh Thổ</a>
                                        <a class="dropdown-item" href="{{ route('menu-page', ['slug' => 'sim_thang_quan']) }}">Sim thăng quan tiến chức</a>
                                        <a class="dropdown-item" href="{{ route('menu-page', ['slug' => 'sim_tai_van']) }}">Sim phong thủy kích tài vận</a>
                                        <a class="dropdown-item" href="{{ route('menu-page', ['slug' => 'sim_tinh_duyen_gia_dao']) }}">Sim kích gia đạo tình duyên</a>
                                        <a class="dropdown-item" href="{{ route('menu-page', ['slug' => 'sim_xoa_giai_han']) }}">Sim hóa giải vận hạn theo tuổi</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sim hợp năm sinh</a>
                                    <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                                        <li class="dropdown-submenu">
                                            <a class="nav-link" tabindex="-1" href="#">195X</a>
                                            <ul class="dropdown-menu text-center">
                                                @for($i = 0; $i < 10; $i++)
                                                    <li><a class="nav-item" href="{{ route('sim-hop-nam-sinh', ['slug' => "195$i"])  }}">195{{ $i  }}</a></li>
                                                @endfor
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="nav-link" tabindex="-1" href="#">196X</a>
                                            <ul class="dropdown-menu text-center">
                                                @for($i = 0; $i < 10; $i++)
                                                    <li><a class="nav-item" href="{{ route('sim-hop-nam-sinh', ['slug' => "196$i"])  }}">196{{ $i  }}</a></li>
                                                @endfor
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="nav-link" tabindex="-1" href="#">197X</a>
                                            <ul class="dropdown-menu text-center">
                                                @for($i = 0; $i < 10; $i++)
                                                    <li><a class="nav-item" href="{{ route('sim-hop-nam-sinh', ['slug' => "197$i"])  }}">197{{ $i  }}</a></li>
                                                @endfor
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="nav-link" tabindex="-1" href="#">198X</a>
                                            <ul class="dropdown-menu text-center">
                                                @for($i = 0; $i < 10; $i++)
                                                    <li><a class="nav-item" href="{{ route('sim-hop-nam-sinh', ['slug' => "198$i"])  }}">198{{ $i  }}</a></li>
                                                @endfor
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="nav-link" tabindex="-1" href="#">199X</a>
                                            <ul class="dropdown-menu text-center">
                                                @for($i = 0; $i < 10; $i++)
                                                    <li><a class="nav-item" href="{{ route('sim-hop-nam-sinh', ['slug' => "199$i"])  }}">199{{ $i  }}</a></li>
                                                @endfor
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="nav-link" tabindex="-1" href="#">200X</a>
                                            <ul class="dropdown-menu text-center">
                                                @for($i = 0; $i < 5; $i++)
                                                    <li><a class="nav-item" href="{{ route('sim-hop-nam-sinh', ['slug' => "200$i"])  }}">200{{ $i  }}</a></li>
                                                @endfor
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-2 text-center d-flex justify-items-center justify-content-around">
                    <div class="site-logo top-logo">
                        <a href="{{ route('home')  }}"><img src="{{  asset('common/templates/site/images/logo_ngang1.png')}}" alt="Bói sim kinh dịch"></a>
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
                            <li><a href="{{ route('mua-hang-va-thanh-toan') }}" class="nav-link">Mua hàng & thanh toán</a></li>
                            <li><a href="#footers" class="nav-link">Liên hệ</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
</div>
