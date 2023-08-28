<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <!-- Fonts -->

        <!-- Styles -->
        <link rel="icon" type="image/png" href="{{  asset('common/templates/site/images/Favicon.png')}}" />
        <link rel="stylesheet" href="{{  asset('common/templates/site/plugins/bootstrap/css/bootstrap.min.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{  asset('common/templates/site/css/global-style.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{  asset('common/templates/site/css/response.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{  asset('common/templates/site/css/style-menu.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{  asset('common/templates/site/plugins/font-awesome-4.6.3/css/font-awesome.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{  asset('common/templates/site/plugins/slick/slick.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{  asset('common/templates/site/css/hover.css')}}" />
    
        <link rel="stylesheet" type="text/css" href="{{  asset('common/templates/site/css/styleMore.css')}}" />
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

        {{-- JS --}}
        <script type="text/javascript" src="{{  asset('common/templates/site/js/jquery-3.4.1.min.js')}}"></script>
    </head>
    <body class="desktop simphongthuy  simphongthuy_simhopmenh">
        @include('layouts.header')

        <div class="container">
            
            <section class="main-content">
                <div class="wapper_breadcumb"></div>
                <div class="row">
                    <div class="col-md-3 left-sizebar ">
                        @include('layouts.left_sizebar')
                    </div>
                    <div class="col-md-6 main-content-wrap">
                        <script>
                            function getParam(p) {
                                var match = RegExp('[?&]' + p + '=([^&]*)').exec(window.location.search);
                                return match && decodeURIComponent(match[1].replace(/\+/g, ' '));
                            }
                    
                            function getExpiryRecord(value) {
                                var expiryPeriod = 90 * 24 * 60 * 60 * 1000; // 90 day expiry in milliseconds
                                var expiryDate = new Date().getTime() + expiryPeriod;
                                return {
                                    value: value,
                                    expiryDate: expiryDate
                                };
                            }
                    
                            function addGclid() {
                                var gclidParam = getParam('gclid');
                                var gclidFormFields = ['gclid_field', 'foobar']; // all possible gclid form field ids here
                                var gclidRecord = null;
                                var currGclidFormField;
                                var gclsrcParam = getParam('gclsrc');
                                var isGclsrcValid = !gclsrcParam || gclsrcParam.indexOf('aw') !== -1;
                                gclidFormFields.forEach(function(field) {
                                    if (document.getElementById(field)) {
                                        currGclidFormField = document.getElementById(field);
                                    }
                                });
                                if (gclidParam && isGclsrcValid) {
                                    gclidRecord = getExpiryRecord(gclidParam);
                                    localStorage.setItem('gclid', JSON.stringify(gclidRecord));
                                }
                                var gclid = gclidRecord || JSON.parse(localStorage.getItem('gclid'));
                                var isGclidValid = gclid && new Date().getTime() < gclid.expiryDate;
                                if (currGclidFormField && isGclidValid) {
                                    currGclidFormField.value = gclid.value;
                                }
                            }
                            window.addEventListener('load', addGclid);
                        </script>
                        @yield('content')
                    </div>
                    <div class="col-md-3">
                        @include('layouts.right_sizebar')
                    </div>
                </div>
            </section>
        </div>

        @include('layouts.footer')

        <script type="text/javascript" src="{{  asset('common/templates/site/js/jquery.slimscroll.min.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
        </script>
        <script src="{{  asset('common/templates/site/js/functions.js')}}"></script>
        <script type="text/javascript">
            //$('.slimContentText').slimScroll();
        </script>
        <script type="text/javascript" src="{{  asset('common/templates/site/js/jquery-migrate-1.2.1.min.js')}}"></script>
        <script type="text/javascript" src="{{  asset('common/templates/site/plugins/bootstrap/js/bootstrap.js')}}"></script>
        <script type="text/javascript" src="{{  asset('common/templates/site/plugins/slick/slick.min.js')}}"></script>

        <script src="{{  asset('common/templates/site/js/jquery-ui.min.js')}}"></script>
        <script src="{{  asset('common/templates/site/js/jsmobile.js')}}"></script>
        <script type="text/javascript" src="{{  asset('common/templates/site/js/rolldate.min.js')}}"></script>
        <script type="text/javascript" src="{{  asset('common/templates/site/js/readmore.min.js')}}"></script>
        <style type="text/css">
            .readmore_content_js {
                overflow: hidden;
            }
            
            .readmore_content_js1 {
                overflow: hidden;
            }
        </style>
        <script>
            $(document).ready(function() {
                if ($(this).scrollTop() > 10) {
                    $('.wapper_header').addClass('wapper_header_fix');
                } else {
                    $('.wapper_header').removeClass('wapper_header_fix');
                }

                $('.readmore_content_js').readmore({
                    speed: 75,
                    collapsedHeight: 650,
                    heightMargin: 20,
                    lessLink: "",
                    embedCSS: true,

                    blockCSS: 'display: block; width: 100%;',
                    moreLink: '<div class="div_xemthem xem-them-luansim" ><p class="readMoreContent js_xemthem"><span class="arrow"><span></span></span>Xem thêm</p></div>'
                });
                $('.readmore_content_js1').readmore({
                    speed: 75,
                    heightMargin: 20,
                    embedCSS: true,
                    blockCSS: 'display: block; width: 100%;',
                    afterToggle: function(trigger, element, expanded) {
                        $(".readmore_content_js1").css({
                            height: "auto"
                        });
                    },
                    collapsedHeight: 350,
                    lessLink: '',
                    moreLink: '<div class="div_xemthem xem-them-luansim" ><p class="readMoreContent js_xemthem"><span class="arrow"><span></span></span>Xem thêm</p></div>'
                });

            });
            $(document).ready(function() {
                const isMobile = {
                    Android: function() {
                        return navigator.userAgent.match(/Android/i);
                    },
                    BlackBerry: function() {
                        return navigator.userAgent.match(/BlackBerry/i);
                    },
                    iOS: function() {
                        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
                    },
                    Opera: function() {
                        return navigator.userAgent.match(/Opera Mini/i);
                    },
                    Windows: function() {
                        return navigator.userAgent.match(/IEMobile/i) || navigator.userAgent.match(
                            /WPDesktop/i);
                    },
                    any: function() {
                        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile
                            .Opera() || isMobile.Windows());
                    }
                };
                if (isMobile.any()) {
                    if ($('#mobi_menu_top').length > 0) {
                        // var mobi_menu_top_height = $('#wapper_breadcumb').offset().top;
                        $(window).scroll(function() {
                            // console.log($(this).scrollTop());
                            if ($(this).scrollTop() > 40) {
                                $('#mobi_menu_top').addClass('mobi_menu_top_fix');
                                $('#mobi_menu_top').addClass('show');
                                $('.chuongbao').addClass('fixed')
                            } else {
                                $('#mobi_menu_top').removeClass('mobi_menu_top_fix');
                                $('#mobi_menu_top').removeClass('show');
                                $('.chuongbao').removeClass('fixed')

                            }

                        });
                    };
                }

                new Rolldate({
                    el: '#date-group1-2',
                    format: 'DD-MM-YYYY',
                    beginYear: 1950,
                    endYear: 2030,
                });



            })
        </script>
    </body>
</html>