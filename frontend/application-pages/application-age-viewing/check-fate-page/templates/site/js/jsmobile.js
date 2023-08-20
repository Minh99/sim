$(document).ready(function() {
    $(".scrollToTop").click(function() {
        $("html, body").animate({
            scrollTop: 0
        }, 800);
        return false
    });

    $(".scrollTobottom").click(function() {
        $("html, body").animate({
            scrollTop: $(document).height()
        }, 800);
        return false
    });

    var menushow = true;
    $('.btnMenuMobile').click(function() {
        if (menushow) {
            $('#wrap').animate({
                left: '280px'
            }, 'slow');
            $('#wrap').addClass('open');
            $('.bgMenu').addClass('bgMenuShow');
            menushow = false;
        } else {
            $('#wrap').animate({
                left: '0px'
            }, 'slow');
            $('#wrap').removeClass('open');
            $('.bgMenu').removeClass('bgMenuShow');
            menushow = true;
        }
        return false;
    });

    $('.bgMenu').click(function() {
        if (menushow) {

            $('#wrap').animate({
                right: '280px'
            }, 'slow');
            $('#wrap').addClass('open');
            $('.bgMenu').addClass('bgMenuShow');
            $('.menuMobile').animate({
                right: '280px'
            }, 'slow');
            menushow = false;
        } else {

            $('#wrap').animate({
                right: '0px'
            }, 'slow');
            $('#wrap').removeClass('open');
            $('.bgMenu').removeClass('bgMenuShow');
            $('.menuMobile').animate({
                right: '0px'
            }, 100);
            menushow = true;
        }
        return false;
    });

    /*customer menu*/
    $('.btnMenu').click(function() {
        if (menushow) {

            $('#wrap').animate({
                right: '280px'
            }, 'slow');
            $('#wrap').addClass('open');
            $('.bgMenu').addClass('bgMenuShow');
            $('.menuMobile').animate({
                right: '280px'
            }, 'slow');
            menushow = false;
        } else {

            $('#wrap').animate({
                right: '0px'
            }, 'slow');
            $('#wrap').removeClass('open');
            $('.bgMenu').removeClass('bgMenuShow');

            $('.menuMobile').animate({
                right: '0px'
            }, 100);
            menushow = true;
        }
        return false;
    });

    $('.box12congiapSlide ul').slick({
        slidesToShow: 6,
        slidesToScroll: 6,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: false,
    });


    $('.box12congiapSlide').removeClass('hidden');



    // menubot
    $('.open_menubot').click(function() {
        if (!$('.cart_content').hasClass('hidden')) {
            $('.cart_content').addClass('hidden');
            $('#m_header').addClass('fixed_menuMobile');
            $('#m_header').css('display', 'block');
            $('body').addClass('bodyDisableScroll'); //disable scroll
            $('#wrap').addClass('mobilewrap');
        }
        if ($('.menu_content').hasClass('hidden')) {
            $('.menu_content').removeClass('hidden');
            $('#wrap').removeClass('mobilewrap');
            $('body').addClass('bodyDisableScroll'); //disable scroll
            open = 1;
        } else {
            $('.menu_content').addClass('hidden');
            $('body').removeClass('bodyDisableScroll'); //enable scroll
            open = 0;
        }

        if (!$('.menu_content').hasClass('hidden')) {
            $('.div_ul_children').addClass('hidden');
            $('#wrap').removeClass('mobilewrap');
            $('body').removeClass('bodyDisableScroll'); //enable scroll
        }
    });

    $('.menu_content_inner .ul_parent li').click(function(e) {
        $(this).find('.div_ul_children').removeClass('hidden');
        $('#m_header').addClass('fixed_menuMobile');
        $('#m_header').css('display', 'block');
        $('body').addClass('bodyDisableScroll'); //disable scroll
        $('#wrap').addClass('mobilewrap');
    });

    $('.menu_content_close').click(function() {
        $('.menu_content').addClass('hidden');
        $('body').removeClass('bodyDisableScroll'); //enable scroll
        return false;
    });

    $('.close_ul_children').click(function() {
        $('.div_ul_children').addClass('hidden');
        $('#wrap').removeClass('mobilewrap');
        $('body').removeClass('bodyDisableScroll'); //enable scroll
        return false;
    });

    //simhoptuoi
    for (var i = 0; i <= 10; i++) {
        $('.ul_listsimhoptuoi li[data-pos = "' + i + '"]').removeClass('hidden');
    }
    var last_show = 10;
    var step_show = 10;
    var total_sht = $('.ul_listsimhoptuoi li:last-child').attr('data-pos');

    $('#viewmove_simhoptuoi').click(function() {
        $('.ul_listsimhoptuoi li').addClass('hidden');
        for (var i = last_show + 1; i <= last_show + step_show; i++) {
            $('.ul_listsimhoptuoi li[data-pos = "' + i + '"]').removeClass('hidden').animate({
                opacity: "0"
            }, 10).animate({
                opacity: "1"
            }, 1000);
        }
        last_show = last_show + step_show;
        if (last_show >= total_sht) {
            last_show = 0;
        }
    });

    // cartbot
    $('.open_cart').click(function() {
        if (!$('.menu_content').hasClass('hidden')) {
            $('.menu_content').addClass('hidden');
            $('body').removeClass('bodyDisableScroll'); //enable scroll
        }
        if ($('.cart_content').hasClass('hidden')) {
            $('.cart_content').removeClass('hidden');
            $('#m_header').addClass('fixed_menuMobile');
            $('#m_header').css('display', 'block');
            $('#wrap').addClass('mobilewrap');
            $('body').addClass('bodyDisableScroll'); //disable scroll
        } else {
            $('.cart_content').addClass('hidden');
            $('#wrap').removeClass('mobilewrap');
            $('body').removeClass('bodyDisableScroll'); //enable scroll
        }
    });

    $('.close_cart').click(function() {
        $('.cart_content').addClass('hidden');
        $('#wrap').removeClass('mobilewrap');
        $('body').removeClass('bodyDisableScroll'); //enable scroll
    });

    // click body => close menucontent
    $('body').click(function(e) {
        var target = $(e.target);
        var a = target.closest('.menu_content').length;
        var b = target.closest('.open_menubot').length;
        if (!a && !b && open == 1) { //khong click ben trong menu va nut menu o chan trang
            $('.menu_content').addClass('hidden');
        }
    });

    //show_hide_form
    $('.click_showformsht').click(function() {
        var myform = $(this).parent().find('.main_form');
        if (myform.length != 0) {
            if (myform.hasClass('hidden')) {
                myform.removeClass('hidden');
            } else {
                myform.addClass('hidden');
            }
        }
    });

    //xem them bang hop menh
    $('#xemthem_tbl_shm').click(function() {
        if ($(this).attr('data-click') == 0) {
            $('.tbl_bodySHM tbody tr').removeClass('hidden');
            $(this).text('Ẩn bớt');
            $(this).attr('data-click', 1);
        } else {
            $('.tbl_bodySHM tbody tr').addClass('hidden');
            for (var i = 1; i < 6; i++) {
                $('.tbl_bodySHM tbody tr[data-row="' + i + '"]').removeClass('hidden');
            }
            $(this).text('Xem thêm');
            $(this).attr('data-click', 0);
        }
    });

    // filter sim
    $('.fil_left').click(function() {
        if ($('.fil_toggle').hasClass('hidden')) {
            $('.fil_toggle').removeClass('hidden');
            $('.fil_right').css('width', '70%');
            $(this).css('width', '30%');
            $(this).find('.txt_disable').addClass('hidden');
        } else {
            $('.fil_toggle').addClass('hidden');
            $('.fil_right').css('width', 'unset');
            $(this).css('width', 'unset');
            $(this).find('.txt_disable').removeClass('hidden');
        }
    });

    $('.fil_content .close-tab').click(function() {
        $('.tab-content').addClass('hidden');
        $(this).addClass('hidden');
    });

    $('.fil_content .nav-tabs').click(function() {
        $('.tab-content').removeClass('hidden');
        $('.fil_content .close-tab').removeClass('hidden');
    });

    // fixed icon loc sim
    show_iconLocsim();

    $('.icon_loc_fixed').click(function() {
        scrollToBox('.fil_sim_mobile');
    });

    // show hide menu fixed top

    var lastScrollTop = 1;
    $(window).scroll(function(event) {
        var st = parseInt($(this).scrollTop()) + 100;
        if (st > lastScrollTop) {
            // downscroll
            $('#m_header').css('display', 'none');
        } else {
            // upscroll
            $('#m_header').css('display', 'block');
        }
        if (st < 200) {
            $('#m_header').removeClass('fixed_menuMobile');
            $('#m_header').css('display', 'block');
            $('#m_header').stop().fadeIn('fast');
        }
        lastScrollTop = st;
    });

    $(window).scroll(function(event) {
        var point = $(this).scrollTop();
        if (point < 200) {
            $('#m_header').removeClass('fixed_menuMobile');
            $('#m_header').css('display', 'block');
            $('#m_header').stop().fadeIn('fast');
        } else {
            $('#m_header').addClass('fixed_menuMobile');
        }
    });
    // end show hide menu fixed top
});

function show_iconLocsim() {


}