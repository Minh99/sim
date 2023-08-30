$(document).ready(function() {
    var winHeight = $(window).height(); //view page
    var winWidth = $(window).width(); //view page

    var docHeight = $(document).height(); //real page ( > winheight)
    var docWidth = $(document).width(); //real page ( > winheight)

    $('.item_mang input[name="mang"]').change(function() {
        filter_mang_headphone_2();
    });
    $('#locgia input[name="forprice"]').change(function() {
        var a = $('#locgia input[name="forprice"]:checked').attr('data-text');
        $('#choice_gia').text(a);
    });

    $('.result-total').click(function() {
        let needOffsetScroll = $(".list_sim").offset().top - 40;
        $('html,body').animate({
            scrollTop: needOffsetScroll
        }, 'slow');
    })

    $('.btn_toogle_limit').click(function() {
        var flag = $(this).attr('data-click');
        var main = $(this).parent().find('.box_limit');
        var screen = winHeight;
        var a = main.innerHeight();
        var b = main[0].scrollHeight;

        if (flag == 0) {
            main.removeClass('enable_limit');
            if (b > a) {
                main.css({
                    'max-height': a + screen,
                    'overflow': 'hidden',
                });
            } else {
                $(this).find('.icon_chevron').html('<i class="fa fa-chevron-left"></i>&nbsp;');
                $(this).find('.btn_label').text('Lược bớt');
                $(this).attr('data-click', 1);
            }

        } else {
            main.css({
                'max-height': 'unset',
            });
            main.addClass('enable_limit');
            $(this).find('.icon_chevron').html('&nbsp;<i class="fa fa-chevron-right"></i>');
            $(this).find('.btn_label').text('Xem thêm');
            $(this).attr('data-click', 0);
            scrollToBox(this, -160);
        }


        show_iconLocsim(); //change height 'limit content box' => update position off 'locsim btn'
    });


    $(".viewMoreLuansim, .aLuanphongthuy_mb").click(function() {
        var sosim = $(this).attr('data-sim');
        var frm = document.form_boi_sim_hidden;
        frm.sosim.value = sosim;
        document.form_boi_sim_hidden.submit();
        return false;
    });
    $(".btnSimHopLuanSim").click(function() {
        $('.btnXemsimphongthuyHoptuoi').click();
        return false;
    });
    var btn_ac_click_value = true;
    $('.btn_ac_click').click(function() {
        if (btn_ac_click_value) {
            $('.show_acount').stop().slideDown("slow");
            btn_ac_click_value = false;
        } else {
            $('.show_acount').stop().slideUp("slow");
            btn_ac_click_value = true;
        }
    });

    var show_ms = true;
    $('.chat_fb').click(function() {
        if (show_ms) {
            $('.chat_ms').stop().slideDown("slow");
            show_ms = false;
        } else {
            $('.chat_ms').stop().slideUp("slow");
            show_ms = true;
        }
    });

    /** Update search form header **/
    $('.iSeaHead').click(function() {
        var iPhone = $(this).parent().find('input[name=phone]').val();
        var dataAja = $(this).attr('data-aja');
        // Kiem tra sim trong bang sim
        $.post(
            dataAja, {
                phone: iPhone,
            },
            function(data, status) {
                if (status == "success") {
                    data_response = data.response;
                    data_msg = data.msg;
                    // data_isset_sim = data.isset_sim;
                    data_redi_url = data.redi_url;

                    if (data_msg == 1) {
                        window.location.href = data_redi_url;
                    } else {
                        alert(data_response);
                    }
                } else {
                    alert('Có lỗi từ hệ thống vui lòng thử lại sau ít phút nhé!');
                }
                // alert("Data: " + data + "\nStatus: " + status);
            },
            "json",
        );
    });

    scrollToBox('.dathang_ok', -100);
});

function scrollToBox(box, distance = 0) {
    if ($(box).length != 0) {
        var x = $(box).offset();
        var height_x = x.top;
        $("html, body").animate({
            scrollTop: height_x + distance
        }, 0);
    }
}

var arr_mang = {
    '1': 'viettel',
    '2': 'vinaphone',
    '3': 'mobifone',
    '4': 'vietnamobile',
    '5': 'gmobile',
};
var arr_mang_2 = {
    '1': 'Viettel',
    '2': 'Vinaphone',
    '3': 'Mobifone',
    '4': 'Vietnamobile',
    '5': 'Gmobile',
};
var arr_dauso = {
    '096': '1',
    '097': '1',
    '098': '1',
    '032': '1',
    '033': '1',
    '034': '1',
    '035': '1',
    '036': '1',
    '037': '1',
    '038': '1',
    '039': '1',
    '086': '1',
    '094': '2',
    '091': '2',
    '083': '2',
    '084': '2',
    '085': '2',
    '081': '2',
    '082': '2',
    '088': '2',
    '090': '3',
    '093': '3',
    '070': '3',
    '079': '3',
    '077': '3',
    '076': '3',
    '078': '3',
    '089': '3',
    '092': '4',
    '052': '4',
    '056': '4',
    '058': '4',
    '059': '5',
    '099': '5',
};

function backPage() {
    history.back();
}

function filter_mang_headphone() {
    var x = $('.filterMang').val();
    var k = [];
    if (x != "") {}
    var text = "<option value=''>Ch?n d?u s?</option>";
    for (i = 0; i < Object.keys(arr_dauso).length; i++) {
        if (x != "") {
            if (Object.values(arr_dauso)[i] == x) {
                k.push(Object.keys(arr_dauso)[i]);
                text += "<option value='" + Object.keys(arr_dauso)[i] + "'>" + Object.keys(arr_dauso)[i] + "</option>";
            }
        } else {
            k.push(Object.keys(arr_dauso)[i]);
            text += "<option value='" + Object.keys(arr_dauso)[i] + "'>" + Object.keys(arr_dauso)[i] + "</option>";
        }
    }
    $('.filterHeadphone').html(text);
}

function filter_mang_headphone_2() {
    var x = $('.item_mang input[name="mang"]:checked').val();
    var k = [];
    if (x != "") {}
    var text = "<option value=''>Lọc đầu số</option>";
    for (i = 0; i < Object.keys(arr_dauso).length; i++) {
        if (x != "") {
            if (Object.values(arr_dauso)[i] == x) {
                k.push(Object.keys(arr_dauso)[i]);
                text += "<option value='" + Object.keys(arr_dauso)[i] + "'>" + Object.keys(arr_dauso)[i] + "</option>";
            }
        } else {
            k.push(Object.keys(arr_dauso)[i]);
            text += "<option value='" + Object.keys(arr_dauso)[i] + "'>" + Object.keys(arr_dauso)[i] + "</option>";
        }
    }
    $('.reload_head_mang').html(text);

    $('#choice_mang').text(arr_mang_2[x]);
    fil_nangcao();
}

function luanSimScroll(box) {
    var x = $(box).offset();
    var height_x = x.top;
    $("html, body").animate({
        scrollTop: height_x
    }, 800);
}

function tableSimScroll() {}

function onchangeSelected(param) {
    var valCS = param;
    window.location.href = valCS;
}

function fil_nangcao() {
    var a = $('#locnangcao select[name="headphone"]').val();
    var b = $('#locnangcao select[name="nut"]').val();
    var c = $('#locnangcao select[name="quechu"] option:selected').text();
    if (c == "Chọn quẻ") {
        c = '';
    }
    if (a != "") {
        a = a + '/';
    }
    if (b != "" && c != "") {
        b = b + '/';
    }
    $('#choice_nangcao').text(a + b + c);
}


// Validate form field by field custommize
function jsValidateForm(formName, input) {
    // VD:     requiredVal-ngaysinh-ngày sinh,// case - field - label of field
    // requiredVal-thangsinh-tháng sinh,
    // ...

    var validate = [];
    var arrInput = input.split(',');

    for (var i = 0; i < arrInput.length; i++) {
        var input = arrInput[i].split('-');
        var element = $('form[name="' + formName + '"] [name="' + input[1] + '"]'); //xac dinh the tu ten truong du lieu can validte theo tung form name
        var str = '';

        element.parent().removeClass('warning'); //xoa style bao loi truoc khi thuc hien validate moi(tranh trung lap style lan validate truoc)
        switch (input[0]) {
            case 'requiredVal': //yeu cau khong de trong (dung cho input/ text area)
                str = element.val() == "" ? 'Vui lòng nhập đủ ' + input[2] : '';
                break;
            case 'requiredCheck': //yeu cau chon ( giong voi yeu cau khong de trong == khac message thong bao)
                str = element.val() == "" ? 'Vui lòng chọn ' + input[2] : '';
                break;
            case 'isPhoneNumber':
                str = /^(([0])([0-9]){9,10})$/.test(element.val()) ? 'Nhập đúng số điện thoại (gồm 10 số)' : '';
                break;
            case 'requiredAndIsPhoneNumber': //neu 1 truong du lieu can validate nhieu dieu kien => viet 'case' moi. tranh viec bi xoa style bao loi truoc do
                str = (element.val() == "" || !/^(([0])([0-9]){9,10})$/.test(element.val())) ? 'Hãy nhập đúng số điện thoại' : '';
                break;
        }

        if (str != '') {
            validate.push(str);
            element.parent().addClass('warning');
        }
    }
    if (validate.length != 0) {
        return validate;
    }
    return 'valid';
}

// End Validate form field by field custommize


$(function() {
    /** XỬ LÝ BỘ FILTER MOBILE*/
    // Sự kiện Bật popup filter
    $('.filter_bt_pp').click(function() {
        $('.mobi_popup').removeClass('not_active');
    });
    // Sự kiện đóng popup filter
    $(".mobi_popup_close").click(function() {
        $('.mobi_popup').addClass('not_active');
    });
    // Sự kiện đóng mở các mục chọn
    $('.mobi_popup_ft_tt').click(function() {
        var event = $(this).attr('data');
        if (event == 'slideDown') {
            $('.mobi_popup_ft_tt').attr('data', 'slideDown');
            $('.mobi_popup_ft_gr ul').slideUp();
            $(this).next('ul').slideDown("slow");
            $(this).attr('data', 'slideUp');
            $('.mobi_popup_ft_tt').removeClass('slideUp');
            $(this).addClass('slideUp');
        } else {
            $(this).next('ul').slideUp("slow");
            $(this).attr('data', 'slideDown');
            $('.mobi_popup_ft_tt').removeClass('slideUp');
        }
    });

    // Sự kiện thay đổi tùy chọn
    $(".mobi_popup_rm_cs").click(function() {
        $(this).parent().remove();
    });
    // Sự kiện chọn 1 tùy chọn
    $('.mobi_popup_ft_gr ul li').click(function() {
        var text = $(this).text();
        var name = $(this).attr('name');
        var value = $(this).attr('value');
        $('#hidden_' + name).val(value);
        var html = '<div id="cs_' + name + '" class="mobi_popup_cs"><span>' + text + '</span><span class="mobi_popup_rm_cs" onclick="change_option(\'' + name + '\')">Thay đổi</span></div>';
        $(this).parent().slideUp();
        $(this).parent().before(html);
        // Kiểm tra nếu tùy chọn là mạng thì điều chỉnh đầu số
        if (name == 'mang') {
            $('.li_mang').hide();
            $('.mang_' + value).show();
            $('#cs_headphone').remove();
            $('#label_loc_dau_so').removeClass('slideUp');
            $('#label_loc_dau_so').attr('data', 'slideDown');
        }
        // Kiểm tra nếu tùy chọn là công việc thì điều chỉnh quẻ
        if (name == 'congviec') {
            $('.li_cong_viec').hide();
            $('.cong_viec_' + value).show();
            $('#cs_loc_que').remove();
            $('#label_loc_que').removeClass('slideUp');
            $('#label_loc_que').attr('data', 'slideDown');
        }
    });
    // Sự kiện xóa tất cả các tùy chọn
    $('.mobi_popup_clear_all').click(function() {
        $('.mobi_popup_cs').remove();
        $('.mobi_popup_ft_tt').removeClass('slideUp');
        $('.mobi_popup_ft_tt').attr('data', 'slideDown');
        $('.mobi_popup_ft_gr ul').slideUp();
        $('.hidden_ft').val('');
    });
    // Sự kiện click thêm vào lọc
    $('.mobi_popup_footer').click(function() {

        query = '';

        var values = $("input[name='mang[]']").map(function() {
            return $(this).val();
        }).get();
        $.each(values, function(key, value) {
            if (value != '') {
                if (key == 0) {
                    query += 'mang%5B%5D=' + value;
                } else {
                    query += '&mang%5B%5D=' + value;
                }
            }
        });
        var values = $("input[name='forprice[]']").map(function() {
            return $(this).val();
        }).get();
        $.each(values, function(key, value) {
            if (value != '') {
                query += '&forprice%5B%5D=' + value;
            }
        });

        var values = $("input[name='congviec[]']").map(function() {
            return $(this).val();
        }).get();
        $.each(values, function(key, value) {
            if (value != '') {
                query += '&congviec%5B%5D=' + value;
            }
        });

        var values = $("input[name='headphone[]']").map(function() {
            return $(this).val();
        }).get();
        $.each(values, function(key, value) {
            if (value != '') {
                query += '&headphone%5B%5D=' + value;
            }
        });

        var values = $("input[name='quechu[]']").map(function() {
            return $(this).val();
        }).get();
        $.each(values, function(key, value) {
            if (value != '') {
                query += '&quechu%5B%5D=' + value;
            }
        });

        var values = $("input[name='nut[]']").map(function() {
            return $(this).val();
        }).get();
        $.each(values, function(key, value) {
            if (value != '') {
                query += '&nut%5B%5D=' + value;
            }
        });

        var values = $("input[name='diem[]']").map(function() {
            return $(this).val();
        }).get();
        $.each(values, function(key, value) {
            if (value != '') {
                query += '&diem%5B%5D=' + value;
            }
        });

        var domain = window.location.origin + window.location.pathname;

        var url = domain + '?' + query;
        //console.log(url);

        window.location = url;

    });
    // Sự kiện click mạng, giá, công việc, default
    $('.filter_select_item').click(function() {
        var id = $(this).attr('data');
        var status = $(this).attr('down_up');
        $('.filter_select_item_ct').addClass('not_active');
        $('.filter_select_item_ct').hide();
        if (status == 'down') {
            $('.filter_select_item').attr('down_up', 'down');
            $('#' + id).slideDown('slow');
            $(this).attr('down_up', 'up');
        } else {
            $('#' + id).slideUp('slow');
            $(this).attr('down_up', 'down');
        }
    });
    // Lọc theo lựa chọn
    $('.filter_select_item_ct li').click(function() {
        var domain = window.location.origin + window.location.pathname;
        var query = $(this).attr('value');
        var url = domain + '?' + query;
        window.location = url;
    });
    // Xóa lựa chọn
    $('.mobi_filter .filter_is_select span').click(function() {
        var query = $(this).attr('data');
        var domain = window.location.origin + window.location.pathname;
        var url = domain + '?' + query;
        window.location = url;
    });

    // XỬ LÝ CLICK KHUYẾN MÃI, CHÍNH SÁCH GIỎ HÀNG
    $('.ttcs_control li').click(function() {
        var id_key = $(this).attr('data');
        $('.ttcs_control li').removeClass('cart_control_active');
        $(this).addClass('cart_control_active');
        $('.cart_tab_it').removeClass('cart_tab_active');
        $('#cart_tab_' + id_key).addClass('cart_tab_active');
    });
    // xu ly fix menu top khi scroll web

    if ($('#mobi_menu_top').length > 0) {
        var mobi_menu_top_height = $('#mobi_menu_top').offset().top;

        $(window).scroll(function() {
            if ($(this).scrollTop() > 10) {
                $('.wapper_header').addClass('wapper_header_fix');
            } else {
                $('.wapper_header').removeClass('wapper_header_fix');
            }


        });
        // $(window).scroll(function () {
        //     console.log('vao')
        //     if ($(this).scrollTop() > (window.innerHeight / 2 - 95)) {
        //         $('#mobi_menu_top').addClass('mobi_menu_top_fix');
        //         $('#mobi_menu_top').addClass('show');
        //     } else {
        //         $('#mobi_menu_top').removeClass('mobi_menu_top_fix');
        //         $('#mobi_menu_top').removeClass('show');
        //     }



        //     if($('.wapper_anchor_heading').length >0){
        //        // alert('test');
        //         if ($(this).scrollTop() > $('.wapper_anchor_heading').offset().top -55 ) {
        //             $('.anchor-heading').addClass('anchor-heading-fix');
        //         } else {
        //             $('.anchor-heading').removeClass('anchor-heading-fix')
        //         }                    

        //     }
        //     if($('.result_fillter').length >0){
        //         if ($(this).scrollTop() > $('.result_fillter').offset().top - 55) {
        //             $('.search_header').addClass('search-scroll-fix');
        //         } else {
        //             $('.search_header').removeClass('search-scroll-fix')
        //         }
        //     }else{
        //         if($('.result_fillter').length == 0 && !$('.wraper-search')){
        //             console.log('vao')
        //             if ($(this).scrollTop() > $('.search_header').offset().top) {
        //                                 $('.search_header').addClass('search-scroll-fix');
        //                             } else {
        //                                 $('.search_header').removeClass('search-scroll-fix')
        //                             }
        //         }
        //         if($('.wraper-search').length > 0 ){
        //             if ($(this).scrollTop() > $('.wraper-search').offset().top) {
        //                                 $('.search_header').addClass('search-scroll-fix');
        //                             } else {
        //                                 $('.search_header').removeClass('search-scroll-fix')
        //                             }
        //         }
        //     }

        // });
    }
    if ($(".search-form-inside-pts").length > 0) {
        var top_offset = $('.search-form-inside-pts').offset().top;
        $(window).scroll(function() {
            if ($(this).scrollTop() > $('.search-form-inside-pts').offset().top - 55) {
                $('.filter_list').addClass('search-fixed');
            } else {
                $('.filter_list').removeClass('search-fixed')
            }
        });
    }
    if ($("#header-search-xpts-mobile").length > 0) {
        var top_offset = $('#header-search-xpts-mobile').offset().top;
        $(window).scroll(function() {
            if ($(this).scrollTop() > $('#header-search-xpts-mobile').offset().top - 55) {
                $('.search_header').addClass('search-scroll-fix');
            } else {
                $('.search_header').removeClass('search-scroll-fix')
            }
        });
    }

    if ($('.filter_list').length > 0 && $('.filter_categories').length > 0) {
        $(window).scroll(function() {
            if ($(this).scrollTop() > $('.result-filter').offset().top) {
                $('.filter_list.in-main').css('display', 'flex')
            } else {
                $('.filter_list.in-main').css('display', 'none')
            }
        })
    }
    // xu ly hien thi banner tu vi 20201 mobile
    if ($('.close_banner_tv').length == 0 && $('#mobi_menu_top').length) {
        var mobi_menu_top_height = $('#mobi_menu_top').offset().top;
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('.banner_tv_2021').addClass('banner_tv_2021_active');
            }
        });
    }
    $('.btn_close_banner_tv_2021').click(function() {
        $('.banner_tv_2021').remove();
    });
    // xu ly menu nam sinh mobile click slide down
    $('.sht_item').click(function() {
        var data_click = $(this).attr('data_click');
        $('.sht_item_ul').slideUp();
        $('.sht_item').attr('data_click', 'slideDown');
        if (data_click == 'slideDown') {
            $(this).next('ul').slideDown();
            $(this).attr('data_click', 'slideUp');
        } else {
            $(this).next('ul').slideUp();
            $(this).attr('data_click', 'slideDown');
        }
    });
    // submit form xem ngay nhan chuc sang xem ngay tot xau
    $('a.mylink').click(function() {
        var ngay = $(this).attr('data-ngay');
        var thang = $(this).attr('data-thang');
        var nam = $(this).attr('data-nam');
        var frm = document.form_xntx_hidden;
        frm.ngay.value = ngay;
        frm.thang.value = thang;
        frm.nam.value = nam;
        return frm.submit();

    });
});

// xử lý bộ lọc fillter
function change_option(name) {
    $('#cs_' + name).remove();
    $('#ul_' + name).slideDown();
    $('#hidden_' + name).val('');
    if (name == 'mang') {

        $('#cs_headphone').remove();
        $('#label_loc_dau_so').removeClass('slideUp');
        $('#label_loc_dau_so').attr('data', 'slideDown');
        $('.li_mang').show();
        $('#hidden_headphone').val('');
    }

    if (name == 'congviec') {
        $('#cs_quechu').remove();
        $('#label_loc_que').removeClass('slideUp');
        $('#label_loc_que').attr('data', 'slideDown');
        $('.li_cong_viec').show();
        $('#hidden_quechu').val('');
    }

}

function chon_ngu_hanh_sim(url) {
    window.location.href = url;
}

function mua_sim() {
    if ($('#g-recaptcha-response')) {
        var recapcha = $('#g-recaptcha-response').val()
    } else {
        recapcha = ''
    }
    var data = {
        'sim': document.frm_dat_hang.sim.value,
        'fullname': document.frm_dat_hang.fullname.value,
        'phone': document.frm_dat_hang.phone.value,
        'sl_address_tinhtp': document.frm_dat_hang.sl_address_tinhtp.value,
        'sl_address_quanhuyen': document.frm_dat_hang.sl_address_quanhuyen.value,
        'sl_address_phuongxa': document.frm_dat_hang.sl_address_phuongxa.value,
        'address': document.frm_dat_hang.address.value,
        'note': document.frm_dat_hang.note.value,
        'httt': document.frm_dat_hang.httt.value,
        'gclid_field': document.frm_dat_hang.gclid_field.value,
        'hascapcha': document.frm_dat_hang.hascapcha.value,
        'recapcha': recapcha
    }
    url = 'dat-mua-sim-phong-thuy?sim=' + document.frm_dat_hang.sim.value + '';
    // $('button').on('click', function (){
    //     // var button = $(this);
    //     // button.html("");
    //     $('button').prop('disabled', true);
    // });
    $.ajax({
        url: url,
        data: data,
        type: "POST",
        dataType: 'json',
        beforeSend: function(data) {
            $("#loader").show();
            $('button').prop('disabled', true);
        },
        complete: function(resurt) {
            // console.log(resurt);
            $("#loader").hide();


            // window.location.href = resurt.redirect;
            $('button').prop('disabled', false);
        },
        success: function(response) {
            // console.log('status:');
            // console.log(response);

            if (response.code == 1) {
                $('#frm_dat_hang')[0].reset();
                window.location.href = response.redirect;
            }
            if (response.code == 0) {
                console.log(response.msg);
                $('#mess_err').html(response.msg);
            }

            // var load = document.getElementById('loader');
            // load.remove();
        },
        error: function(response) {
            console.log(response);
        }
    });
}

function setSessionFormXemPhongThuySim(data) {
    var dataPost = {};
    if (typeof(data['ngay_sinh']) != "undefined" && data['ngay_sinh'] !== null) {
        dataPost['ngay_sinh'] = data['ngay_sinh']
    }
    if (typeof(data['thang_sinh']) != "undefined" && data['thang_sinh'] !== null) {
        dataPost['thang_sinh'] = data['thang_sinh'];
    }
    if (typeof(data['nam_sinh']) != "undefined" && data['nam_sinh'] !== null) {
        dataPost['nam_sinh'] = data['nam_sinh'];
    }
    if (typeof(data['gio_sinh']) != "undefined" && data['gio_sinh'] !== null) {
        dataPost['gio_sinh'] = data['gio_sinh'];
    }
    if (typeof(data['gioi_tinh']) != "undefined" && data['gioi_tinh'] !== null) {
        dataPost['gioi_tinh'] = data['gioi_tinh'];
    }

    if (typeof(data['so_sim']) != "undefined" && data['so_sim'] !== null) {
        dataPost['so_sim'] = data['so_sim'];
        dataPost['submitXPTS'] = 1;
    }
    jQuery.ajax({
        url: '/set-session-request-form',
        data: dataPost,
        type: "POST",
        //dataType: 'json',
        timeout: 30000,
        success: function(data) {

        },
        error: function(e) {
            console.log(e)
            console.log('error submit')
        }
    });


}

// update filter
$('.item_network').click(function() {
    $(".read-more").data('page', 1);
    check_active($(this))
})
$('.item_sim_type').click(function() {
    $(".read-more").data('page', 1);
    check_active($(this))
})
$('.price-item').click(function() {
    // $(".read-more").data('page', 1);
    // check_active($(this))
    // active_drop_down($(this))
    // add_value_input_price($(this))
})
$('.dauso-item').click(function() {
    // $(".read-more").data('page', 1);
    check_active($(this))
        // active_drop_down($(this))
})
$('.diemso-item').click(function() {
        $(".read-more").data('page', 1);
        check_active($(this))
        active_drop_down($(this))
    })
    // search duoi so
$('.search_phone_last').keyup(function() {
    $(".read-more").data('page', 1);
    if ($(this).val() != '') {
        addNumberPhoneToList($(this).val())
        let arr = get_arr_filter();
        arr.push([7, $(this).val()])
            // doCall(arr)
    } else {
        $('.list_filter_item').find('.searchDuoiSo').remove()
        let arr = get_arr_filter();
        // doCall(arr)
    }
    var lists = count_item_filter();
    if (lists > 1) {
        $('.remove-all').css('display', 'block')
    } else {
        $('.remove-all').css('display', 'none')
    }
    $('#number_search').val($(this).val())
    $('.search-key').val($(this).val())

})

function addNumberPhoneToList(value) {
    //var id = value.replace("*", '');
    var html = `<div class="wraper-item-select item-checked searchDuoiSo"><div class="search_number" id="${value}" type="7" data-number="${value}">${value}<i class="fa-solid fa-xmark remove-item-filter"></i></div></div>`;
    if ($('.list_filter_item').children().hasClass('searchDuoiSo') == true) {
        $('.search_number').attr('id', value)
        $('.search_number').html(value + `<i class="fa-solid fa-xmark remove-item-filter"></i>`)
    } else {
        $('.list_filter_item').prepend(html)
    }
}
// input price 
// desktop
// $('.priceStartPc').keyup(function() {
//     $(".read-more").data('page', 1);
//     $(this).val(labelInputPrice($(this).val()))
//     var label = '';
//     var value = '';
//     if ($('.priceEndPc').val() != '') {
//         label = labelPricePC($(this).val()) + ' - ' + labelPricePC($(this).val())
//         value = ($(this).val()).replaceAll('.', '') * 1000 + '-' + ($('.priceEndPc').val()).replaceAll('.', '') * 1000
//     } else {
//         label = 'Trên ' + labelPricePC($(this).val())
//         value = ($(this).val()).replaceAll('.', '') * 1000 + '-' + 1000000000000
//     }
//     addCustomPriceToList(label, value)
// })
// $('.priceEndPc').keyup(function() {
//         $(".read-more").data('page', 1);
//         $(this).val(labelInputPrice($(this).val()))
//         var label = '';
//         var value = '';
//         if ($('.priceStartPc').val() != '') {
//             label = labelPricePC($('.priceStartPc').val()) + ' - ' + labelPricePC($(this).val())
//             value = ($('.priceStartPc').val()).replaceAll('.', '') * 1000 + '-' + ($(this).val()).replaceAll('.', '') * 1000
//         } else {
//             label = 'Dưới ' + labelPricePC($(this).val())
//             value = '0-' + ($(this).val()).replaceAll('.', '') * 1000
//         }
//         addCustomPriceToList(label, value)
//     })
// mobile
// $('.priceStart').keyup(function() {
//     $(".read-more").data('page', 1);
//     $(this).val(labelInputPrice($(this).val()))
//     var label = '';
//     var value = '';
//     if ($('.priceEnd').val() != '') {
//         label = labelPrice($(this).val()) + ' - ' + labelPrice($(this).val())
//         value = ($(this).val()).replaceAll('.', '') + '-' + ($('.priceEnd').val()).replaceAll('.', '')
//     } else {
//         label = 'Trên ' + labelPrice($(this).val())
//         value = ($(this).val()).replaceAll('.', '') + '-' + 1000000000000
//     }
//     addCustomPriceToList(label, value)
// })
// $('.priceEnd').keyup(function() {
//     $(".read-more").data('page', 1);
//     $(this).val(labelInputPrice($(this).val()))
//     var label = '';
//     var value = '';
//     if ($('.priceStart').val() != '') {
//         label = labelPrice($('.priceStart').val()) + ' - ' + labelPrice($(this).val())
//         value = ($('.priceStart').val()).replaceAll('.', '') + '-' + ($(this).val()).replaceAll('.', '')
//     } else {
//         label = 'Dưới ' + labelPrice($(this).val())
//         value = '0-' + ($(this).val()).replaceAll('.', '')
//     }
//     addCustomPriceToList(label, value)
// })

function labelInputPrice(price) {
    return price.replaceAll(/\D/g, "").replaceAll(/\B(?=(\d{3})+(?!\d))/g, ".");
}

function labelInputPriceItem(price) {
    var dot = price.indexOf('.')
    if (dot != -1) {
        var pr = price.slice(0, dot);
    } else {
        pr = price
    }
    return pr.replaceAll(/\D/g, "").replaceAll(/\B(?=(\d{3})+(?!\d))/g, ",");
}

function labelPrice(value) {
    value = value.replaceAll('.', '')
    if (value >= 1000000) {
        var num = value / 1000000;
        var dv = 'triệu'
    } else {
        num = value / 1000;
        dv = 'k'
    }
    return num + ' ' + dv
}

function labelPricePC(value) {
    value = value.replaceAll('.', '')
    if (value >= 1000) {
        var num = value / 1000;
        var dv = 'triệu'
    } else {
        num = value;
        dv = 'k'
    }
    return num + ' ' + dv
}

function addCustomPriceToList(label, value) {
    // $(".read-more").data('page', 1);
    var html = `<div class="item-checked customPrice" id="${value}" type="3">${label}<i class="fa-solid fa-xmark remove-item-filter"></i></div>`;
    if ($('.list_filter_item').children().hasClass('customPrice') == true) {
        $('.customPrice').attr('id', value)
        $('.customPrice').html(label + `<i class="fa-solid fa-xmark remove-item-filter"></i>`)
    } else {
        $('.list_filter_item').prepend(html)
    }
    var lists = count_item_filter();
    if (lists > 1) {
        $('.remove-all').css('display', 'block')
    } else {
        $('.remove-all').css('display', 'none')
    }
    let arr = get_arr_filter();
    // doCall(arr)
}
// end
// custom điểm sim
$('.diemStart').keyup(function() {
    $(".read-more").data('page', 1);
    if ($('.diemEnd').val() != '') {
        var label = $(this).val() + '-' + $('.diemEnd').val() + ' điểm'
        var value = $(this).val() + '-' + $('.diemEnd').val()
    } else {
        var label = $(this).val() + '- 10 điểm'
        var value = $(this).val() + '-10'
    }
    addCustomDiemToList(label, value)
})
$('.diemEnd').keyup(function() {
    $(".read-more").data('page', 1);
    if ($('.diemStart').val() != '') {
        var label = $('.diemStart').val() + '-' + $(this).val() + ' điểm'
        var value = $('.diemStart').val() + '-' + $(this).val()
    } else {
        var label = '0-' + $(this).val() + ' điểm'
        var value = '0-' + $(this).val()
    }
    addCustomDiemToList(label, value)
})

function addCustomDiemToList(label, value) {
    var html = `<div class="item-checked customDiem" id="${value}" type="5">${label}<i class="fa-solid fa-xmark remove-item-filter"></i></div>`;
    if ($('.list_filter_item').children().hasClass('customDiem') == true) {
        $('.customDiem').attr('id', value)
        $('.customDiem').html(label + `<i class="fa-solid fa-xmark remove-item-filter"></i>`)
    } else {
        $('.list_filter_item').prepend(html)
    }
    var lists = count_item_filter();
    if (lists > 1) {
        $('.remove-all').css('display', 'block')
    } else {
        $('.remove-all').css('display', 'none')
    }
    let arr = get_arr_filter();
    // doCall(arr)
}
//end 
function active_drop_down(elm) {
    if ($(elm).parents('.dropdown').find('.active').length > 0) {
        $(elm).parents('.dropdown').children('.dropdown-toggle').addClass('active')
    } else {
        $(elm).parents('.dropdown').children('.dropdown-toggle').removeClass('active')
    }
}

function count_item_filter() {
    return $('.list_filter_item').children().length;
}

function check_active(elm) {
    //$(".read-more").data('page', 1);
    var page = $(this).data('page', 1);
    if ($(elm).hasClass("active") == true) {
        remove_item_to_list_filter_html(elm)
        var lists = count_item_filter();
        if (lists > 1) {
            $('.remove-all').css('display', 'block')
        } else {
            $('.remove-all').css('display', 'none')
        }
        $(elm).removeClass('active')
    } else {
        $(elm).addClass('active')
        add_item_to_list_filter_html(elm)
        var lists = count_item_filter();
        if (lists > 1) {
            $('.remove-all').css('display', 'block')
        } else {
            $('.remove-all').css('display', 'none')
        }
    }
    // doCall(get_arr_filter())
}
const nguHanh = {
        1: 'Kim',
        2: 'Mộc',
        3: 'Thủy',
        4: 'Hỏa',
        5: 'Thổ'
    }
    // xử lý delay khi thao tác nhanh
const apiCall = () => new Promise(res => setTimeout(res, 200));

let lastReject;

function doCall(array_filter) {
    console.log(array_filter)
    if (lastReject) lastReject();
    Promise.race([
            apiCall(),
            new Promise((_, rej) => {
                lastReject = rej;
            })
        ])
        .then((resp) => {
            post_filter(array_filter)
        })
        .catch(() => {
            console.log('Quick click: previous ongoing API call will be ignored');
        });
}
//
function post_filter(array) {
    var page = $('.read-more').data('page')
    array.push(['page', page])
    var data = array.length > 0 ? {
        filter: array
    } : {
        filter: ['null']
    };
    var url = window.location.href;
    $.ajax({
        type: "POST",
        url: url,
        dataType: 'json',
        data: data,
        beforeSend: function() {
            $('.loading').css('display', 'block');
            $('.count_result').css('display', 'none');
        },
        success: function(result) {
            $('.loading').css('display', 'none');
            $('.count_result').html(String(result.total).replaceAll(/\D/g, "").replaceAll(/\B(?=(\d{3})+(?!\d))/g, ","));
            if (result.data.length < 100) {
                $('.total-sim-read-more').html(0)
                $(".read-more").css('display', 'none')
            } else {
                $('.total-sim-read-more').html(String(result.total - 100 * $('.read-more').data('page')).replaceAll(/\D/g, "").replaceAll(/\B(?=(\d{3})+(?!\d))/g, ","))
                $(".read-more").css('display', 'flex')
            }
            $('.count_result').css('display', 'block');
            let html_list = '';
            if (result.data.length > 0) {
                console.log(result)
                result.data.map((elm, idx) => {
                    html_list += `
                <div class="col-6 col-sm-6 col-md-6">
                    <div class="main_box_sim_item">
                        <div class="wapper_sim_content">
                        <div class="row">
                        <div class="col-6 col-sm-6 col-md-6">
                            <p class="so"><a href="${window.location.origin}/dat-sim-phong-thuy-${elm.sim}.html">${elm.sim1}</a></p>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 logoNhaMang"><img src="${window.location.origin}/templates/site/images/icon/${elm.mang}.gif"></div>
                        </div>
                        <div class="row">
                        <div class="col-12 col-sm-12 col-md-12">
                                            <p class="vuong"><strong><span>Điểm phong thủy : </span></strong> ${elm.tong_diem}/10</p>
                                            <p class="price"><b>Giá: </b>${labelInputPriceItem(String(elm.giaban * 1000000))} VND</p>
                            <p class="que"><strong>Sim ngũ hành: </strong> <span class="nguhanh">${nguHanh[elm.nguhanh]}</span></p>
                            <p class="yn"><span class="quekinhdich"><strong>Quẻ Kinh dịch: </strong></span>${elm.que_chu_name}</p>
                        </div>
                        </div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-sm-6 col-md-6 logoNhaMang datMuaSim">
                                <p class="btnmua"><a href="${window.location.origin}/dat-sim-phong-thuy-${elm.sim}.html" class="btn_mua">Chi tiết <b>>></b></a></p>
                            </div>
                            <div class="col-6 col-sm-6 col-md-6 logoNhaMang datMuaSim">
                                <p class="btnmua"><a href="${window.location.origin}/dat-sim-phong-thuy-${elm.sim}.html" class="btn_mua btn_mua2">Đặt mua <b>>></b></a></p>
                            </div>                        
                        </div>

                    </div>
                </div>
                `;
                })
                $('.listSim').html(html_list);

            } else {
                //alert('test');
                $('.listSim').html(`<div class="text-center khongcosim">
                <label>Hiện tại các số <b>sim hợp tuổi</b> theo yêu cầu của bạn chưa về! Mời chọn lại trường lọc để có số sim tốt hơn!</label>
              </div>`)
            }
        },
        error: function(e) {
            console.log(e)
        }
    });
}

function read_more(array) {
    var page = $('.read-more').data('page')
    array.push(['page', page])
    var data = array.length > 0 ? {
        filter: array
    } : {
        filter: ['null']
    };
    var url = window.location.href;
    $.ajax({
        type: "POST",
        url: url,
        dataType: 'json',
        data: data,
        beforeSend: function() {
            $('.loading').css('display', 'block');
            $('.count_result').css('display', 'none');
        },
        success: function(result) {
            $('.loading').css('display', 'none');
            $('.count_result').html(String(result.total).replaceAll(/\D/g, "").replaceAll(/\B(?=(\d{3})+(?!\d))/g, ","));
            if (result.data.length < 100) {
                $('.total-sim-read-more').html(0)
                $(".read-more").css('display', 'none')
            } else {
                $('.total-sim-read-more').html(String(result.total - 100 * $('.read-more').data('page')).replaceAll(/\D/g, "").replaceAll(/\B(?=(\d{3})+(?!\d))/g, ","))
                $(".read-more").css('display', 'flex')
            }
            $('.count_result').css('display', 'block');
            let html_list = '';
            result.data.map((elm, idx) => {
                html_list += `
                <div class="col-6 col-sm-6 col-md-6">
                    <div class="main_box_sim_item">
                        <div class="wapper_sim_content">
                        <div class="row">
                        <div class="col-6 col-sm-6 col-md-6">
                            <p class="so"><a href="${window.location.origin}/dat-sim-phong-thuy-${elm.sim}.html">${elm.sim1}</a></p>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 logoNhaMang"><img src="${window.location.origin}/templates/site/images/icon/${elm.mang}.gif"></div>
                        </div>
                        <div class="row">
                        <div class="col-12 col-sm-12 col-md-12">
                                            <p class="vuong"><strong><span>Điểm phong thủy :</span></strong> ${elm.tong_diem}/10</p>
                                            <p class="price"><b>Giá: </b>${labelInputPriceItem(String(elm.giaban * 1000000))} VND</p>
                            <p class="que"><strong>Sim ngũ hành: </strong><span class="nguhanh">${nguHanh[elm.nguhanh]}</span></p>
                            <p class="yn"><span class="quekinhdich"><strong>Quẻ Kinh dịch: </strong></span>${elm.que_chu_name}</p>
                        </div>
                        </div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-sm-6 col-md-6 logoNhaMang datMuaSim">
                                <p class="btnmua"><a href="${window.location.origin}/dat-sim-phong-thuy-${elm.sim}.html" class="btn_mua">Chi tiết <b>>></b></a></p>
                            </div>
                            <div class="col-6 col-sm-6 col-md-6 logoNhaMang datMuaSim">
                                <p class="btnmua"><a href="${window.location.origin}/dat-sim-phong-thuy-${elm.sim}.html" class="btn_mua btn_mua2">Mua ngay <b>>></b></a></p>
                            </div>                        
                        </div>
                    </div>
                </div>
                `;
            })
            $(html_list).appendTo('.listSim')
        },
        error: function(e) {
            console.log(e)
        }
    });
}
$('.read-more').click(function() {
    var page = $(this).data('page', $(this).data('page') + 1)
    var pageNum = $('.read-more').data('page')
    var array = get_arr_filter()
    array.push(['page', pageNum])
    read_more(array);
})
$('.remove-all').click(function() {
    $('.filter_categories').find('.active').removeClass('active');
    $(".read-more").data('page', 1);
    $(this).parent().children().not($('.remove-all')).remove();
    $(this).css('display', 'none');
    $(".search_phone_last").val("");
    $('.search-key').val('')
    if ($("#number_search").length > 0) {
        $("#number_search").val("");
    }
    post_filter(get_arr_filter())
})
$('.list_filter_item').on('click', '.remove-item-filter', function() {
    if (!$(this).parent().hasClass('searchDuoiSo')) {
        $('.filter_categories').find('#' + $(this).parent().attr('id')).removeClass('active')
    }

    $(this).parent().parent().remove();
    if ($(this).parent().hasClass("searchDuoiSo")) {
        $(".search_phone_last").val("");
        $('#number_search').val('')
    }
    var lists = count_item_filter();
    if (lists > 1) {
        $('.remove-all').css('display', 'block')
    } else {
        $('.remove-all').css('display', 'none')
    }
    // doCall(get_arr_filter())
})
$('.reset').click(function() {
    var parent = $(this).parents('.dropdown-menu').children('.drop-select').data('type');
    $('.list_filter_item').find("[type='" + parent + "']").remove();
    $(this).parents('.dropdown-menu').find('.active').removeClass('active')
    $(this).parents('.dropdown').children('.dropdown-toggle').css('border', 'solid 0.5px #d1d1d1')
    var lists = count_item_filter();
    if (lists > 1) {
        $('.remove-all').css('display', 'block')
    } else {
        $('.remove-all').css('display', 'none')
    }
    // doCall(get_arr_filter())
})

function add_item_to_list_filter_html(elm) {
    var html = `<div class="wraper-item-select"><div class="item-checked" id="${$(elm).data('id')}" type="${$(elm).parent().data('type')}">${$(elm).attr('name')}<i class="fa-solid fa-xmark remove-item-filter"></i></div></div>`;
    $('.list_filter_item').prepend(html)
}


function remove_item_to_list_filter_html(elm) {
    $('.list_filter_item').find('#' + $(elm).data('id')).parent().remove()
}
var i = 1;
$('.filter-price').click(function() {
    if (i == 1) {
        $($(this).children()[i]).css('display', 'flex')
        $($(this).children()[i - 1]).css('display', 'none')
        $($(this).children()[i + 1]).css('display', 'none')
        $(this).attr('filter', 'giaGiam')
        i++;
    } else if (i == 2) {
        $($(this).children()[i]).css('display', 'flex')
        $($(this).children()[i - 1]).css('display', 'none')
        $($(this).children()[i - 2]).css('display', 'none')
        $(this).attr('filter', 'giaTang')
        i = i - 2;
    } else {
        $($(this).children()[i]).css('display', 'flex')
        $($(this).children()[i + 1]).css('display', 'none')
        $($(this).children()[i + 2]).css('display', 'none')
        $(this).attr('filter', 'default')
        i = i + 1;
    }
    let sort = $(this).attr('filter');
    let arr = get_arr_filter();
    // arr.push([6, sort])
    // doCall(arr)
})
var j = 1;
$('.sort-price').click(function() {
    $(".read-more").data('page', 1);
    if (j == 1) {
        $('.label-sort').html('Giá giảm')
        $('.sort-action').removeClass('fa-chevron-up')
        $('.sort-action').addClass('fa-chevron-down')
        $(this).data('action', 'giaGiam')
        j++;
    } else if (j == 2) {
        $('.label-sort').html('Giá tăng')
        $('.sort-action').removeClass('fa-chevron-down')
        $('.sort-action').addClass('fa-chevron-up')
        $(this).data('action', 'giaTang')
        j = j - 2;
    } else {
        $('.label-sort').html('Sắp xếp')
        $(this).data('action', 'default')
        j = j + 1;
    }
    let sort = $(this).data('action')
    let arr = get_arr_filter();
    arr.push([6, sort])
        // doCall(arr)
})

var j = 1;
$('.sort-price-twomode').click(function() {
    $(".read-more").data('page', 1);
    if (j == 1) {
        $('.label-sort').html('Giá giảm')
        $('.sort-action').removeClass('fa-chevron-up')
        $('.sort-action').addClass('fa-chevron-down')
        $(this).data('action', 'giaGiam')
        j = 0;
    } else {
        $('.label-sort').html('Giá tăng')
        $(this).data('action', 'giaTang')
        j = 1;
    }
    let sort = $(this).data('action')
    let arr = get_arr_filter();
    arr.push([6, sort])
        // doCall(arr)
})

$('.dropdown-menu').click(function(event) {
    return event.stopPropagation()
})
$('.dropdown-toggle').click(function() {
    // $('html,body').animate({
    //     scrollTop: $(".main_left_tt_hd").offset().top
    // }, 'slow');
})
$('.result').click(function() {
    $('.dropdown-toggle').dropdown('hide')
})
$('.close-menu').click(function() {
    $('.dropdown-toggle').dropdown('hide')
})
$('.select-date').click(function() {
    $('.rolldate-panel').css('display', 'block')
    $('.rolldate-panel').css('height', '300px')
    $('.rolldate-mask').css('display', 'block')
})

function get_arr_filter() {
    var list = $('.list_filter_item').children().children().not($('.remove-all'));
    var arr_filter = [];
    list.map((idx, elm) => {
        switch ($(elm).attr('type')) {
            case '1': // loại sim
                arr_filter.push([1, $(elm).attr('id')])
                break;
            case '2': // nhà mạng
                arr_filter.push([2, $(elm).attr('id')])
                break;
            case '3': // khoảng giá
                arr_filter.push([3, $(elm).attr('id')])
                break;
            case '4': // đầu số
                arr_filter.push([4, $(elm).attr('id')])
                break;
            case '5': // điểm sim
                arr_filter.push([5, $(elm).attr('id')])
                break;
            case '7': // đuôi số
                arr_filter.push([7, $(elm).attr('id')])
                break;
            case '10': // đuôi số
                arr_filter.push([10, $(elm).attr('id')])
                break;
            default:
                break;
        }
    });
    let sort = $('.filter-price').attr('filter')
    if (sort != "")
        arr_filter.push([6, sort])
    return arr_filter;
}

function add_value_input_price(elm) {
    var arrPrice = [];
    var list = $('.price_item').children('.active');
    list.map((idx, elm) => {
        switch ($(elm).data('id')) {
            case '0to2':
                arrPrice.push(0, 2000000)
                break;
            case '2to3':
                arrPrice.push(2000000, 3000000)
                break;
            case '3to5':
                arrPrice.push(3000000, 5000000)
                break;
            case '5to8':
                arrPrice.push(5000000, 8000000)
                break;
            case '8to10':
                arrPrice.push(8000000, 10000000)
                break;
            case '10tomax':
                arrPrice.push(10000000, 100000000000)
                break;
            default:
                break;
        }
    })
    arrPrice.sort(function(a, b) {
        return a - b
    });
    var start = String(arrPrice[0])
    var end = String(arrPrice[arrPrice.length - 1])
    var startPc = String(arrPrice[0] / 1000)
    var endPc = String(arrPrice[arrPrice.length - 1] / 1000)
    $('.priceStart').val(labelInputPrice(start))
    $('.priceEnd').val(labelInputPrice(end))
    $('.priceStartPc').val(labelInputPrice(startPc))
    $('.priceEndPc').val(labelInputPrice(endPc))
}

function tim_sim() {
    if (document.form_tim_sin.nam_sinh.value == "") {
        alert("Vui lòng chọn năm sinh.");
        return false;
    }
    gioSinh = {
        '23-gio-den-1-gio': 1,
        '1-gio-den-3-gio': 2,
        '3-gio-den-5-gio': 3,
        '5-gio-den-7-gio': 4,
        '7-gio-den-9-gio': 5,
        '9-gio-den-11-gio': 6,
        '11-gio-den-13-gio': 7,
        '13-gio-den-15-gio': 8,
        '15-gio-den-17-gio': 9,
        '17-gio-den-19-gio': 10,
        '19-gio-den-21-gio': 11,
        '21-gio-den-23-gio': 12,
    }
    data = {
        //'fullname': frm.fullname.value.trim(),
        'gioi_tinh': document.form_tim_sin.gioi_tinh.value,
        'gio_sinh': gioSinh[document.form_tim_sin.gio_sinh.value],
        'ngay_sinh': document.form_tim_sin.ngay_sinh.value,
        'thang_sinh': document.form_tim_sin.thang_sinh.value,
        'nam_sinh': document.form_tim_sin.nam_sinh.value,
    }
    var current_title = $(document).attr('title');
    history.pushState({
        'data': data
    }, ' | ' + current_title, window.location.href);
    setSessionGetListSim(data)
}

function setSessionGetListSim(data) {

    gioSinh = {
        1: '23-gio-den-1-gio',
        2: '1-gio-den-3-gio',
        3: '3-gio-den-5-gio',
        4: '5-gio-den-7-gio',
        5: '7-gio-den-9-gio',
        6: '9-gio-den-11-gio',
        7: '11-gio-den-13-gio',
        8: '13-gio-den-15-gio',
        9: '15-gio-den-17-gio',
        10: '17-gio-den-19-gio',
        11: '19-gio-den-21-gio',
        12: '21-gio-den-23-gio',
    }

    jQuery.ajax({
        url: '/setSession',
        data: data,
        type: "POST",
        timeout: 30000,
        success: function(resurt) {
            if (resurt['status'] == 1) {
                console.log(resurt)
                var slug = "/xem-phong-thuy-sim/sim-hop-tuoi-" + data['nam_sinh'] + ".html"
                if (slug != '') {

                    window.location = slug;
                    return;
                }
            }
        },
        error: function(e) {
            console.log('error submit')
        }
    });

}
$(document).ready(function() {
    $('.icon-search').click(function() {
        gioSinh = {
            '23-gio-den-1-gio': 1,
            '1-gio-den-3-gio': 2,
            '3-gio-den-5-gio': 3,
            '5-gio-den-7-gio': 4,
            '7-gio-den-9-gio': 5,
            '9-gio-den-11-gio': 6,
            '11-gio-den-13-gio': 7,
            '13-gio-den-15-gio': 8,
            '15-gio-den-17-gio': 9,
            '17-gio-den-19-gio': 10,
            '19-gio-den-21-gio': 11,
            '21-gio-den-23-gio': 12,
        }
        var data = {
            'gioi_tinh': $('input[name="gioiTinh"]').val(),
            'gio_sinh': gioSinh[$('#gio_sinh').val()],
            'ngay_sinh': $('#ngay_sinh').val(),
            'thang_sinh': $('#thang_sinh').val(),
            'nam_sinh': $('#nam_sinh').val(),
            'number': $('#number_search').val()
        }
        setSessionSubmitForm(data)
    });

    $(".number_search_destop").keypress(function(event) {
        if (event.which == 13) {
            gioSinh = {
                '23-gio-den-1-gio': 1,
                '1-gio-den-3-gio': 2,
                '3-gio-den-5-gio': 3,
                '5-gio-den-7-gio': 4,
                '7-gio-den-9-gio': 5,
                '9-gio-den-11-gio': 6,
                '11-gio-den-13-gio': 7,
                '13-gio-den-15-gio': 8,
                '15-gio-den-17-gio': 9,
                '17-gio-den-19-gio': 10,
                '19-gio-den-21-gio': 11,
                '21-gio-den-23-gio': 12,
            }
            var data = {
                'gioi_tinh': $('input[name="gioiTinh"]').val(),
                'gio_sinh': gioSinh[$('#gio_sinh').val()],
                'ngay_sinh': $('#ngay_sinh').val(),
                'thang_sinh': $('#thang_sinh').val(),
                'nam_sinh': $('#nam_sinh').val(),
                'number': $('#number_search').val()
            }
            setSessionSubmitForm(data)
        }
    });

    $('.icon-search2').click(function() {
        gioSinh = {
            '23-gio-den-1-gio': 1,
            '1-gio-den-3-gio': 2,
            '3-gio-den-5-gio': 3,
            '5-gio-den-7-gio': 4,
            '7-gio-den-9-gio': 5,
            '9-gio-den-11-gio': 6,
            '11-gio-den-13-gio': 7,
            '13-gio-den-15-gio': 8,
            '15-gio-den-17-gio': 9,
            '17-gio-den-19-gio': 10,
            '19-gio-den-21-gio': 11,
            '21-gio-den-23-gio': 12,
        }
        var data = {
            'gioi_tinh': $('input[name="gioiTinh2"]').val(),
            'gio_sinh': gioSinh[$('#gio_sinh2').val()],
            'ngay_sinh': $('#ngay_sinh2').val(),
            'thang_sinh': $('#thang_sinh2').val(),
            'nam_sinh': $('#nam_sinh2').val(),
            'number': $('#number_search2').val()
        }
        setSessionSubmitForm(data)
    });

    $(".number_search_destop2").keypress(function(event) {
        if (event.which == 13) {
            gioSinh = {
                '23-gio-den-1-gio': 1,
                '1-gio-den-3-gio': 2,
                '3-gio-den-5-gio': 3,
                '5-gio-den-7-gio': 4,
                '7-gio-den-9-gio': 5,
                '9-gio-den-11-gio': 6,
                '11-gio-den-13-gio': 7,
                '13-gio-den-15-gio': 8,
                '15-gio-den-17-gio': 9,
                '17-gio-den-19-gio': 10,
                '19-gio-den-21-gio': 11,
                '21-gio-den-23-gio': 12,
            }
            var data = {
                'gioi_tinh': $('input[name="gioiTinh2"]').val(),
                'gio_sinh': gioSinh[$('#gio_sinh2').val()],
                'ngay_sinh': $('#ngay_sinh2').val(),
                'thang_sinh': $('#thang_sinh2').val(),
                'nam_sinh': $('#nam_sinh2').val(),
                'number': $('#number_search2').val()
            }
            setSessionSubmitForm(data)
        }
    });

    $('.search_icon_mobile').click(function() {
        var ngay_thang_nam = $('#date-group1-2').val().split('-')
        gioSinh = {
            '23-gio-den-1-gio': 1,
            '1-gio-den-3-gio': 2,
            '3-gio-den-5-gio': 3,
            '5-gio-den-7-gio': 4,
            '7-gio-den-9-gio': 5,
            '9-gio-den-11-gio': 6,
            '11-gio-den-13-gio': 7,
            '13-gio-den-15-gio': 8,
            '15-gio-den-17-gio': 9,
            '17-gio-den-19-gio': 10,
            '19-gio-den-21-gio': 11,
            '21-gio-den-23-gio': 12,
        }
        data = {
            'gioi_tinh': $('#gioi_tinh_mobile').val(),
            'gio_sinh': gioSinh[$('#gio_sinh_mobile').val()],
            'ngay_sinh': Number(ngay_thang_nam[0]),
            'thang_sinh': Number(ngay_thang_nam[1]),
            'nam_sinh': Number(ngay_thang_nam[2]),
            'number': $('.search-key').val()
        }
        setSessionSubmitForm(data);
    });

    $('.search_icon_mobile2').click(function() {
        var ngay_thang_nam = $('#date-group2-2').val().split('-')
        gioSinh = {
            '23-gio-den-1-gio': 1,
            '1-gio-den-3-gio': 2,
            '3-gio-den-5-gio': 3,
            '5-gio-den-7-gio': 4,
            '7-gio-den-9-gio': 5,
            '9-gio-den-11-gio': 6,
            '11-gio-den-13-gio': 7,
            '13-gio-den-15-gio': 8,
            '15-gio-den-17-gio': 9,
            '17-gio-den-19-gio': 10,
            '19-gio-den-21-gio': 11,
            '21-gio-den-23-gio': 12,
        }
        data = {
            'gioi_tinh': $('#gioi_tinh_mobile').val(),
            'gio_sinh': gioSinh[$('#gio_sinh_mobile').val()],
            'ngay_sinh': Number(ngay_thang_nam[0]),
            'thang_sinh': Number(ngay_thang_nam[1]),
            'nam_sinh': Number(ngay_thang_nam[2]),
            'number': $('.search-key2').val()
        }
        setSessionSubmitForm(data);
    });
    new Rolldate({
        el: '#date-group2-2',
        format: 'DD-MM-YYYY',
        beginYear: 1950,
        endYear: 2030,
    });


});

main = {
    layngaythangnam: function() {

        $("body").on("click", ".select-gt", function() {
            $('#gioi_tinh_mobile').val($(this).val())
        });

        $("body").on("change", "#gioSinh", function() {
            $('#gio_sinh_mobile').val($(this).val())
            $(this).attr('checked', true)
        });
    }
};

$(function() {
    main.layngaythangnam();
    $('.sht_item').click(function() {
        var data_click = $(this).data('click');
        if (data_click) {
            if (data_click == 'slideDown' || data_click == "") {
                $(this).next('ul').slideDown();
                $(this).data('click', 'slideUp');
            } else {
                $(this).next('ul').slideUp();
                $(this).data('click', 'slideDown');
            }
        } else {
            $(this).next('ul').slideDown();
            $(this).data('click', 'slideUp');
        }
    });

    $('#xemThem_phongthuy_sim').click(function() {
        $("#chitiet_phongthuy_sim").slideDown();
        $("#xemThem_chitiet_sim").hide();
    });



});

$(function() {
    $('#submit_form_xpt').click(function() {
        console.log('vaopasdasdasd')
        var sosim_data = $("#xpts_phone").val();
        if (sosim_data.length != 10) {
            alert("Bạn vui lòng nhập đúng số sim!");
            return false;
        }
        if ($("#xpts_ngay").val() == "" || $("#xpts_thang").val() == "" || $("#xpts_nam").val() == "") {
            alert("Bạn vui lòng chọn ngày tháng năm sinh!");
            return false;
        }
        $.ajax({
            url: '/checkInStockSim',
            method: 'post',
            data: {
                sosim: $("#xpts_phone").val()
            },
            datatype: 'json',
            success: function(data) {
                var sosim = $("#xpts_phone").val();
                var ngay_sinh = $("#xpts_ngay").val() + "-" + $("#xpts_thang").val() + '-' + $("#xpts_nam").val();
                var gioi_tinh = $('input[name="gioitinh"]:checked').val();
                var gio_sinh = $('#xpts_giosinh').val();
                var url_form = $("#form_xpts").attr("action");
                if (data.instock) {
                    url_form += '?sosim=' + sosim + '&tk=1&ns=' + ngay_sinh + '&gt=' + gioi_tinh + '&gs=' + gio_sinh;
                } else {
                    url_form += '?sosim=' + sosim + '&tk=0&ns=' + ngay_sinh + '&gt=' + gioi_tinh + '&gs=' + gio_sinh;
                }
                //alert(url_form);
                window.location = url_form;
                //$('#form_xpts').attr('action', url_form).submit();
            },
            error: function() {
                console.log('error');
            }
        })
    });
    $('.xemboisimkinhdich').click(function() {
        var form = $(this).parents('.form_boisimkinhdich_pts')
        var sosim_data = $(form).find("#xpts_phone").val();
        if (sosim_data.length != 10) {
            alert("Bạn vui lòng nhập đúng số sim!");
            return false;
        }
        if ($(form).find("#xpts_ngay").val() == "" || $(form).find("#xpts_thang").val() == "" || $(form).find("#xpts_nam").val() == "") {
            alert("Bạn vui lòng chọn ngày tháng năm sinh!");
            return false;
        }
        $.ajax({
            url: '/checkInStockSim',
            method: 'post',
            data: {
                sosim: $(form).find("#xpts_phone").val()
            },
            datatype: 'json',
            success: function(data) {
                var sosim = $(form).find("#xpts_phone").val();
                var ngay_sinh = $(form).find("#xpts_ngay").val() + "-" + $(form).find("#xpts_thang").val() + '-' + $(form).find("#xpts_nam").val();
                var gioi_tinh = $(form).find('input[name="gioitinh"]:checked').val();
                var gio_sinh = $(form).find('#xpts_giosinh').val();
                var url_form = $(form).attr("action");
                if (data.instock) {
                    url_form += '?sosim=' + sosim + '&tk=1&ns=' + ngay_sinh + '&gt=' + gioi_tinh + '&gs=' + gio_sinh;
                } else {
                    url_form += '?sosim=' + sosim + '&tk=0&ns=' + ngay_sinh + '&gt=' + gioi_tinh + '&gs=' + gio_sinh;
                }
                console.log(url_form)
                    //alert(url_form);
                window.location = url_form;
                //$('#form_xpts').attr('action', url_form).submit();
            },
            error: function() {
                console.log('error');
            }
        })
    })
    $('#submit_form_xptboi').click(function() {
        var sosim_data = $("#xptsboi_phone").val();
        if (sosim_data.length != 10) {
            alert("Bạn vui lòng nhập đúng số sim!");
            return false;
        }
        if ($("#xptsboi_ngay").val() == "" || $("#xptsboi_thang").val() == "" || $("#xptsboi_nam").val() == "") {
            alert("Bạn vui lòng chọn ngày tháng năm sinh!");
            return false;
        }
        $.ajax({
            url: '/checkInStockSim',
            method: 'post',
            data: {
                sosim: $("#xptsboi_phone").val()
            },
            datatype: 'json',
            success: function(data) {
                var sosim = $("#xptsboi_phone").val();
                var ngay_sinh = $("#xptsboi_ngay").val() + "-" + $("#xptsboi_thang").val() + '-' + $("#xptsboi_nam").val();
                var gioi_tinh = $('input[name="bgioitinh"]:checked').val();
                var gio_sinh = $('#xptsboi_giosinh').val();
                var url_form = $("#form_xptsboi").attr("action");
                if (data.instock) {
                    url_form += '?sosim=' + sosim + '&tk=1&ns=' + ngay_sinh + '&gt=' + gioi_tinh + '&gs=' + gio_sinh;
                } else {
                    url_form += '?sosim=' + sosim + '&tk=0&ns=' + ngay_sinh + '&gt=' + gioi_tinh + '&gs=' + gio_sinh;
                }
                //alert(url_form);
                window.location = url_form;
                //$('#form_xpts').attr('action', url_form).submit();
            },
            error: function() {
                console.log('error');
            }
        })
    });
});



$(document).ready(function() {
    $("#toc a").click(function() {
        var x = $(this).attr("href");
        x = x.replace("#", "");
        // do khoang cach tu id toi top
        var hei = $("#" + x).offset();
        var height_x = hei.top;
        $("html, body").animate({
            scrollTop: height_x
        }, 800);
    });
    $('p').each(function() {
        const $this = $(this);
        if ($this.html().replace(/\s|&nbsp;/g, '').length === 0)
            $this.remove();
    });
});


function setSessionSubmitForm(data) {

    jQuery.ajax({
        url: '/setSession',
        data: data,
        type: "POST",
        dataType: 'json',
        timeout: 30000,
        success: function(result) {
            console.log(result);
            if (result['status'] == 1) {
                if (data.number) {
                    var slug = "/xem-phong-thuy-sim/sim-hop-tuoi-" + data['nam_sinh'] + ".html" + '?number=' + data.number;
                } else {
                    var slug = "/xem-phong-thuy-sim/sim-hop-tuoi-" + data['nam_sinh'] + ".html";
                }
                window.location = slug;
            }
        },
        error: function(e) {
            console.log('error submit')
        }
    });
}
$('.action-tb-content').click(function() {
    if ($('.wraper-tb-contents').hasClass('hide') == false) {
        $('.wraper-tb-contents').addClass('hide')
        $(this).css('transform', 'rotate(-90deg)')
        console.log($(this))
    } else {
        $(this).css('transform', 'rotate(0deg)')
        $('.wraper-tb-contents').removeClass('hide')
    }
})
$('.readMoreContent').click(function() {
    $('.text_content_main').css('display', 'block')
})
$('.siteBodyContent').find('table').wrap('<div style="overflow-x:auto;"></div>')
$('.boxHadview').find('h2').css({
    "margin-bottom": "1.3em",
    "border-bottom": "2px solid #163357"
})
$('.siteBodyContent').find('h2').css({
    "margin-bottom": "1.3em",
    "border-bottom": "2px solid #163357"
})
$('.textTopHome').find('h2').css({
    "margin-bottom": "1.3em",
    "border-bottom": "2px solid #163357"
})
$('.btn-box-search-pc').click(function() {
    var search = $('#input-box-search-pc').val()
    if (search) {
        if (isNaN(search)) {
            if (search.indexOf('*') != -1 && !isNaN(search.replaceAll('*', ''))) {
                window.location.href = '/sim-so-dep.html?number=' + search
            } else {
                alert("Đuôi số không hợp lệ!");
            }
        } else {
            window.location.href = '/sim-so-dep.html?number=' + search
        }
    } else {
        alert('Bạn cần nhập đuôi số để tìm kiếm')
    }
})

$('#input-box-search-pc').on("keyup", function(e) {
    if (e.keyCode == 13) {
        var search = $(this).val()
        if (search) {
            if (isNaN(search)) {
                if (search.indexOf('*') != -1 && !isNaN(search.replaceAll('*', ''))) {
                    window.location.href = '/sim-so-dep.html?number=' + search
                } else {
                    alert("Đuôi số không hợp lệ!");
                }
            } else {
                window.location.href = '/sim-so-dep.html?number=' + search
            }
        } else {
            alert('Bạn cần nhập đuôi số để tìm kiếm')
        }
    }
});