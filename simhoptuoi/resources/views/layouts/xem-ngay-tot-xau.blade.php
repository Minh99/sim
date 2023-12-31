@extends('app')

@section('title', "Xem ngày tốt xấu năm - Xem ngày tốt xấu theo tuổi chính xác nhất")

@section('style')
<STYLE TYPE="text/css">
    table td {
        background: none !important;
    }

    .calbase {
        BACKGROUND: #0088AA !important;
    }

    table caption {
        caption-side: top;
    }

    #calendar.calendar-inside {
        width: auto !important;
    }

    #calendar.calendar-inside #month, #year {
        FONT-SIZE: 13pt;
        text-align: center;
    }

    .normal {
        font-size: 120%;
        BACKGROUND: #ffffff
    }

    .offday {
        font-size: 120%;
        color: #7F7F7F;
        background: #E3E3DC !important;
    }

    .today {
        font-size: 120%;
        font-weight: bold;
        BACKGROUND: gold !important;
    }

    .selected {
        font-size: 120%;
        font-weight: bold;
        BACKGROUND: #aaffaa !important;
    }

    .sunday {
        color: red;
        font-size: 120%
    }

    .weekday {
        font-size: 120%
    }

    .satday {
        color: green;
        font-size: 120%
    }

    .days {
        font-weight: bold;
        font-size: 110%;
        line-height: 100%;
        BACKGROUND: #DDFFDD
    }

    .XEM0 {
        color: Navy;
        font-size: 17px;
        BACKGROUND: #DDFFDD
    }

    .XEM1 {
        color: Navy;
        font-size: 18px;
        BACKGROUND: #DDFFDD
    }

    .xem2 {
        color: Navy;
        font-size: 18px
    }

    .lich_t {
        font-size: 14pt;
        font-weight: bold;
        BACKGROUND: gold
    }

    .nhat {
        font-size: 17px;
        color: blue
    }

    .thoi {
        font-size: 17px;
        color: blue;
    }

    .thoi tbody tr:first-child {
        BACKGROUND: #DDFFDD;
    }

    .sonhuong {
        font-family: "Times New Roman";
        font-size: 17px;
        color: blue
    }

    .dlich {
        text-align: center;
        font-size: 110%;
        line-height: 100%
    }

    .alich {
        text-align: right;
        font-size: 60%;
        line-height: 95%
    }

    A.lnk0:link {
        font-size: 17px;
        color: green;
        text-decoration: none;
    }

    A.lnk0:visited {
        font-size: 17px;
        text-decoration: none;
    }

    A.lnk0:active {
        text-decoration: none;
    }

    A.lnk0:hover {
        text-decoration: underline;
        color: blue;
    }

    A.lnk1:link {
        font-size: 17px;
        color: green;
        text-decoration: none;
    }

    A.lnk1:visited {
        font-size: 17px;
        color: green;
        text-decoration: none;
    }

    A.lnk1:active {
        text-decoration: none;
    }

    A.lnk1:hover {
        text-decoration: underline;
        color: blue;
    }

    A.lnk2:link {
        font-size: 17px;
        color: brown;
        text-decoration: none;
    }

    A.lnk2:visited {
        font-size: 17px;
        color: brown;
        text-decoration: none;
    }

    A.lnk2:active {
        text-decoration: none;
    }

    A.lnk2:hover {
        text-decoration: underline;
        color: blue;
    }

    A.lnk3:link {
        font-size: 17px;
        color: green;
        font-weight: bold;
        text-decoration: none;
    }

    A.lnk3:visited {
        font-size: 17px;
        color: green;
        font-weight: bold;
        text-decoration: none;
    }

    A.lnk3:active {
        text-decoration: none;
    }

    A.lnk3:hover {
        text-decoration: underline;
        color: blue;
    }

    A.lnk4:link {
        font-size: 17px;
        color: brown;
        font-weight: bold;
        text-decoration: none;
    }

    A.lnk4:visited {
        font-size: 17px;
        color: brown;
        font-weight: bold;
        text-decoration: none;
    }

    A.lnk4:active {
        text-decoration: none;
    }

    A.lnk4:hover {
        text-decoration: underline;
        color: blue;
    }

    A.butn:link {
        font-size: 110%;
        line-height: 100%;
        color: white;
        text-decoration: none;
    }

    A.butn:visited {
        font-size: 110%;
        line-height: 100%;
        color: white;
        text-decoration: none;
    }

    A.butn:active {
        text-decoration: none;
    }

    A.butn:hover {
        text-decoration: underline;
        color: gold;
    }
</STYLE>
@endsection

@section('root-content')
    <DIV id=tooltip style="Z-INDEX: 3; FILTER: shadow(color=#333333,direction=135); WIDTH: 280px; POSITION: absolute; HEIGHT: 120px; visibility: hidden;">
    </DIV>
@endsection

@section('content')
<section class="contentPage" onunload=term() onmousemove="mEvnt(event);">
    <SCRIPT LANGUAGE="JavaScript">
        $('body').css({"z-index": "0", "position": "relative"});

        //////////////////////////////////////////////////////////////////////////////
        // ToolTip section //
        var tt_OffsetX = 2;
        var tt_OffsetY = 18;
        var tt_X = 0;
        var tt_Y = 0;
        var tt_Style;
        var tt_type = 1;

        var agent = navigator.userAgent;
        var navVer = 0;
        var navName = '';

        if (agent.indexOf("MSIE") != -1) {
            navVer = agent.replace(/^.+MSIE ([0-9\.]+).*$/i, "$1");
            navName = 'IE';
        }

        if (agent.indexOf("Firefox") != -1) {
            navVer = agent.replace(/^.+Firefox\/([0-9\.]+).*$/i, "$1");
            navName = 'Firefox';
        }

        if (agent.indexOf("Gecko") != -1) {
            navVer = agent.replace(/^.*Mozilla\/([0-9\.]+).*$/i, "$1");
            navName = 'Mozilla';
        }

        if (navVer == 0 || (navName == 'IE' && navVer < 4)) {
            document.write("<h1>Lịch bằng JavaScript này không thích hợp với Browser mà quí vị dùng.</h1>Dùng IE4 hoặc cấp mới hơn!");
            document.close;
        }

        var i_day = 0;
        var i_mon = 0;
        var i_year = 0;
        var today = new Date();
        var lunar;
        var First = 1;
        var fileName = '';

        if (First) {
            var name = '',
                temp = '';
            var c, i;
            name += window.location;
            var k, j = name.length;
            k = name.indexOf('.htm');
            //alert(name+' k='+k+' len='+j);
            for (i = k; i > 0; i--) {
                c = name.charAt(i);
                if (c == '\\' || c == '/') break;
            }
            if (i) k = i + 1;
            for (i = k; i < j; i++) {
                c = name.charAt(i);
                if (c == '?') break;
                temp += c;
            }
            if (temp.length)
                fileName += temp;
        }

        function init() {
            tt_Style = document.getElementById("tooltip").style;
            if (navName != 'IE') tt_OffsetY = 12;

            var val = getCookie('tt_opt');
            if (val.length) {
                tt_type = eval(val);
                if (tt_type != 1)
                    for (var i = 0; i < 4; i++) {
                        document.indicators.hienThi[i].checked = ((tt_type == i) ? true : false);
                    }
            }
        }

        function term() {
            setCookie('tt_opt', tt_type);
        }

        function GetParam() {
            var start = location.search.indexOf("?");
            if (start < 0) return '';
            start += 1;
            var end = location.search.indexOf("&", start) - 1;
            if (end < 0) end = location.search.length;
            var result = '';
            for (var i = start; i <= end; i++) {
                var c = location.search.charAt(i);
                result = result + (c == '+' ? ' ' : c);
            }
            return unescape(result);
        }

        if (location.search != '') {
            var s = GetParam();
            var p = [0, 0, 0];
            var r = '';
            var j = 0;
            for (var i = 0; i < s.length; i++) {
                var c = s.charAt(i)
                if (c == '/') {
                    p[j++] = parseInt(r);
                    r = '';
                } else r += c;
            }
            p[j++] = parseInt(r);
            if (0 < p[1] && p[1] <= 12) i_mon = p[1];
            if (1900 <= p[2] && p[2] <= 2100) i_year = p[2];
            if (i_mon && i_year) {
                var days = getDays(i_mon - 1, i_year);
                if (0 < p[0] && (p[0] <= days)) i_day = p[0];
                else if (p[0] > days) i_day = days;
                else if (p[0] <= 0) i_day = 1;
            }
        } else {
            i_day = today.getDate();
            i_mon = today.getMonth() + 1;
            i_year = today.getFullYear();
        }

        function setCookie(name, value) {
            var expires = new Date();
            expires.setTime(today.getTime() + 1000 * 60 * 60 * 24 * 365);
            document.cookie = name + "=" + escape(value) + "; expires=" + expires.toGMTString();
        }

        function getCookie(Name) {
            var search = Name + "=";
            if (document.cookie.length > 0) {
                offset = document.cookie.indexOf(search);
                if (offset != -1) {
                    offset += search.length;
                    end = document.cookie.indexOf(";", offset);
                    if (end == -1) end = document.cookie.length;
                    return unescape(document.cookie.substring(offset, end));
                } else return ('');
            } else return ('');
        }

        function getDays(month, year) // month: 0-11
        {
            var daysInMonth = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

            if (month == 1) return ((year % 4 == 0) && (year % 100 != 0)) || (year % 400 == 0) ? 29 : 28;
            else return daysInMonth[month];
        }

        function makeCalendar() {
            var iYear = document.getElementById('year').selectedIndex + 1900;
            var iMon = document.getElementById('month').selectedIndex;
            var calObj = new Date(iYear, iMon, 1);
            var TODAY = -1;
            var startDay = calObj.getDay();
            var daily = 0;
            var dd = -1;
            if (i_day == 0 || i_mon == 0 || i_year == 0) dd = -1;
            else dd = i_day;
            if ((today.getFullYear() == calObj.getFullYear()) && (today.getMonth() == calObj.getMonth()))
                TODAY = today.getDate();
            var tableCal = document.getElementById('calendar').tBodies.dayList;
            var iDaysInMonth = getDays(calObj.getMonth(), calObj.getFullYear());
            var iPrev = 0;
            var m = iMon;
            var y = iYear;
            var d;
            if (startDay) {
                if (m > 0) m--;
                else if (m == 0 && y > 1901) {
                    m = 11;
                    y--;
                }
                iPrev = getDays(m, y);
                iPrev = iPrev - startDay;
            }
            var iNext = 0;
            for (var iWeek = 0; iWeek < tableCal.rows.length; iWeek++) {
                for (var iDay = 0; iDay < tableCal.rows[iWeek].cells.length; iDay++) {
                    var cell = tableCal.rows[iWeek].cells[iDay];
                    if ((iDay == startDay) && (daily == 0)) daily = 1;
                    if (TODAY == daily) cell.className = "today";
                    else if (daily == dd) cell.className = "selected";
                    else if (iDay == 6) cell.className = "satday";
                    else if (iDay == 0) cell.className = "sunday";
                    else cell.className = "normal";
                    cell.width = "32";

                    var dc = '';
                    if ((daily > 0) && (daily <= iDaysInMonth)) {
                        m = i_mon;
                        y = i_year;
                        d = daily;
                        daily++;
                    } else {
                        cell.className = "offday";
                        if (iWeek) {
                            iNext++;
                            m = i_mon + 1;
                            y = i_year;
                            if (m > 12) {
                                m = 1;
                                y++;
                            }
                            d = iNext;
                        } else {
                            iPrev++;
                            m = i_mon;
                            y = i_year;
                            if (m > 0) m--;
                            else if (m == 0 && y > 1901) {
                                m = 11;
                                y--;
                            }
                            d = iPrev;
                        }
                    }
                    var Lunar = new AmLich(d, m, y);
                    var al = ''
                    if (Lunar.day == 1)
                        al = Lunar.day + '/' + Lunar.month;
                    else
                        al = Lunar.day;

                    if (Lunar.sDay == (daily - 1)) {
                        var i;
                        for (i in solarFest) {
                            if (solarFest[i].match(/^(\d{2})(.{2})([\s\*])(.+)$/)) {
                                if (Lunar.sMonth == eval(RegExp.$1) && Lunar.sDay == eval(RegExp.$2))
                                    if (((daily - 1) != dd) && ((RegExp.$3) == '*')) cell.className = "sunday";
                            }
                        }
                        for (i in lunarFest) {
                            if (lunarFest[i].match(/^(\d{2})(.{2})([\s\*])(.+)$/)) {
                                if (Lunar.month == eval(RegExp.$1) && Lunar.day == eval(RegExp.$2))
                                    if (((daily - 1) != dd) && ((RegExp.$3) == '*')) cell.className = "sunday";
                            }
                        }
                        dc = '<div class="dlich" style="cursor:pointer" onMouseOver="mOvr(event)" onMouseOut="untip()" ONCLICK="getDate(event)">' + Lunar.sDay + '</div><div class="alich">' + al + '</div>'
                    } else
                        dc = '<div class="dlich">' + Lunar.sDay + '</div><div class="alich">' + al + '</div>'
                    cell.innerHTML = dc;
                    delete Lunar;
                }
                if (daily > iDaysInMonth) break;
            }
        }

        function getCalendar() {
            var iYear = document.getElementById('year').value;
            var iMon = document.getElementById('month').value;
            var sDate = (i_day ? i_day : today.getDate()) + '/' + iMon + '/' + iYear;
            window.location = fileName + '?' + sDate;
        }

        function getDate(ev) {
            var sDate;
            var iYear = document.getElementById('year').value;
            var iMon = document.getElementById('month').value;
            var obj = (ev.srcElement) ? ev.srcElement : ev.target;
            if (obj.tagName == "DIV") {
                var day = obj.innerHTML;
                var off = obj.className;
                if (day && off != 'offday') {
                    sDate = day + '/' + iMon + '/' + iYear;
                    window.location = fileName + '?' + sDate;
                }
            }
        }

        // Có Cát Thần nào không ?
        function thuCatThan(thisday, truc) {
            var cat = new Array();
            if (thisday) {
                var Tiet = layTiet(thisday.sYear, thisday.sMonth, thisday.sDay);
                var THau = tietHau(thisday.sYear, thisday.sMonth, thisday.sDay);
                var KHau = khiHau(thisday.sYear, thisday.sMonth, thisday.sDay);
                var T4 = lay4Thoi(thisday.sYear, thisday.sMonth, thisday.sDay);
                var c;

                // === TESTING ===
                //iTest('test1');

                c = thienAn(thisday.days)
                if (c) cat.push("Thiên Ân");

                c = thienQuy(T4, thisday.days)
                if (c) cat.push("Thiên Quý");

                c = tuTuong(T4, thisday.days)
                if (c) cat.push("Tứ Tướng");

                c = thienXa(T4, thisday.days)
                if (c) cat.push("Thiên Xá");

                //c = thienAtQuiNhan(Tiet, thisday.days) // ***
                //if (c) cat.push("Thiên Ất Quí Nhân");

                c = mauThuong(T4, thisday.days)
                if (c) cat.push("Mẫu Thương");

                c = giaiThan(Tiet, thisday.days)
                if (c) cat.push("Giải Thần");

                c = nguyetAn(Tiet, thisday.days)
                if (c) cat.push("Nguyệt Ân");

                c = nguyetDuc(Tiet, thisday.days)
                if (c) cat.push("Nguyệt Đức");

                c = nguyetDucHop(Tiet, thisday.days)
                if (c) cat.push("Nguyệt Đức Hợp");

                //c = nguyetDucQuiNhan(Tiet, thisday.days) // ***
                //if (c) cat.push("Nguyệt Đức Quí Nhân");

                c = nguyetKhong(Tiet, thisday.days)
                if (c) cat.push("Nguyệt Không");

                c = thienDuc(Tiet, thisday.days)
                if (c) cat.push("Thiên Đức");

                c = thienDucHop(Tiet, thisday.days)
                if (c) cat.push("Thiên Đức Hợp");

                c = thienThanh(Tiet, thisday.days)
                if (c) cat.push("Thiên Thành");

                c = tamHop(Tiet, thisday.days)
                if (c) cat.push("Tam Hợp");

                c = lucHop(Tiet, thisday.days)
                if (c) cat.push("Lục Hợp");

                c = thoiDuc(T4, thisday.days)
                if (c) cat.push("Thời Đức");

                c = nguHop(thisday.days)
                if (c) cat.push("Ngũ Hợp");

                c = lamNhat(Tiet, thisday.days)
                if (c) cat.push("Lâm Nhật");

                c = dichMa(Tiet, thisday.days)
                if (c) cat.push("Dịch Mã");
                if (c) cat.push("Thiên Hậu");

                c = nguyetTai(Tiet, thisday.days)
                if (c) cat.push("Nguyệt Tài");

                c = minhTinh(Tiet, thisday.days)
                if (c) cat.push("Thiên Nhạc");
                if (c) cat.push("Minh Tinh");

                c = catKhanh(Tiet, thisday.days) // Res ***
                if (c) cat.push("Cát Khánh");

                c = locKho(Tiet, thisday.days) // Res ***
                if (c) cat.push("Lộc Khố");

                c = thanhLong(Tiet, thisday.days)
                if (c) cat.push("Thanh Long");

                c = minhDuong(Tiet, thisday.days)
                if (c) cat.push("Minh Đường");

                c = kimQuy(Tiet, thisday.days)
                if (c) cat.push("Kim Quỹ");
                if (c) cat.push("Thiên Tài Tinh"); // DGTNH ***

                c = thienDucHD(Tiet, thisday.days)
                if (c) cat.push("Thiên Đức hoàng đạo");
                if (c) cat.push("Địa Tài Tinh"); // DGTNH ***
                if (c) cat.push("Bảo Quang"); // DGTNH ***

                c = ngocDuong(Tiet, thisday.days)
                if (c) cat.push("Ngọc Đường");

                c = kimDuong(Tiet, thisday.days) // DGTNH ***
                if (c) cat.push("Kim Đường");

                c = tuMenh(Tiet, thisday.days)
                if (c) cat.push("Tư Mệnh");
                if (c) cat.push("Dương Đức");

                c = phucSinh(Tiet, thisday.days)
                if (c) cat.push("Phúc Sinh");

                c = minhPhe(thisday.days)
                if (c) cat.push("Minh Phệ");

                c = minhPheDoi(thisday.days)
                if (c) cat.push("Minh Phệ Đối");

                c = nguPhu(Tiet, thisday.days)
                if (c) cat.push("Ngũ Phú");

                c = vuongNhat(T4, thisday.days)
                if (c) cat.push("Vương Nhật");
                if (c) cat.push("Phúc Hậu");

                c = vuongNhat100(T4, thisday.days)
                if (c) cat.push("Vượng Nhật");

                c = quanNhat(T4, thisday.days)
                if (c) cat.push("Quan Nhật");

                c = thuNhat(T4, thisday.days)
                if (c) cat.push("Thủ Nhật");

                c = tuongNhat(T4, thisday.days)
                if (c) cat.push("Tướng Nhật");

                c = danNhat(T4, thisday.days)
                if (c) cat.push("Dân Nhật");

                c = catKyNhat(Tiet, truc, thisday.days)
                if (c) cat.push("Cát Kì");

                c = phucDuc(Tiet, truc, thisday.days)
                if (c) cat.push("Phúc Đức");
                if (c) cat.push("Thiên Phú");
                if (c) cat.push("Thiên Vu");

                c = thoiAm(Tiet, truc, thisday.days)
                if (c) cat.push("Thời Âm");

                c = chiDuc(Tiet, truc, thisday.days)
                if (c) cat.push("Chi Đức");

                c = thienY(Tiet, truc, thisday.days)
                if (c) cat.push("Thiên Y");
                if (c) cat.push("Thiên Hỷ");

                c = thoiDuong(Tiet, truc, thisday.days)
                if (c) cat.push("Thời Dương");
                if (c) cat.push("Sinh Khí");

                c = thienMa(Tiet, thisday.days)
                if (c) cat.push("Thiên Mã");

                c = thienNhac(Tiet, thisday.days)
                if (c) cat.push("Thiên Nhạc");

                c = yeuYen(Tiet, thisday.days)
                if (c) cat.push("Yếu Yên");

                c = ngocVu(Tiet, thisday.days) // DGTNH ***
                if (c) cat.push("Ngọc Vũ");

                c = kinhAn(Tiet, thisday.days)
                if (c) cat.push("Kính An");
                if (c) cat.push("Kính Tâm"); // DGTNH ***

                c = phoHo(Tiet, thisday.days)
                if (c) cat.push("Phổ Hộ");

                c = thanhTam(Tiet, thisday.days)
                if (c) cat.push("Thánh Tâm");

                c = ichHau(Tiet, thisday.days)
                if (c) cat.push("Ích Hậu");

                c = tucThe(Tiet, thisday.days)
                if (c) cat.push("Tục Thế");

                c = thienNguyen(Tiet, thisday.days)
                if (c) cat.push("Thiên Nguyện");

                c = lucNghi(Tiet, thisday.days)
                if (c) cat.push("Lục Nghi");

                c = thienThuong(Tiet, thisday.days)
                if (c) cat.push("Thiên Thương");

                c = batTuong(Tiet, thisday.days)
                if (c) cat.push("Bất Tướng");

                c = amDuc(Tiet, thisday.days)
                if (c) cat.push("Âm Đức");

                c = thanTai(thisday.days)
                if (c) cat.push("Thần Tại");

                c = truThan(thisday.days)
                if (c) cat.push("Trừ Thần");

                c = thienPhuc(thisday.days)
                if (c) cat.push("Thiên Phúc");

                c = thienThuy(thisday.days) // DGTNH ***
                if (c) cat.push("Thiên Thụy");

                // c = bangChanhPhe(T4, thisday.days) // NHK ***
                // if (c) cat.push("Bàng Chánh Phế");

                c = daiMinhCatNhat(thisday.days) // NHK ***
                if (c) cat.push("Đại Minh");

                c = daiThauTuNhat(thisday.days) // NHK ***
                if (c) cat.push("Đại Thâu");

                c = thienQuan(Tiet, thisday.days)
                if (c) cat.push("Thiên Quan");

                c = hienTinh(Tiet, thisday.days)
                if (c) cat.push("Hiển Tinh");
                if (c) cat.push("Thiên Hoàng");

                c = khucTinh(Tiet, thisday.days) // DGTNH ***
                if (c) cat.push("Khúc Tinh");
                if (c) cat.push("Ngọc Hoàng");

                c = phoTinh(Tiet, thisday.days) // DGTNH ***
                if (c) cat.push("Phó Tinh");
                if (c) cat.push("Tử Vi");

                c = thatThanh(thisday.days)
                if (c) cat.push("Thất Thánh");

                c = tueDuc(thisday.tue, thisday.days)
                if (c) cat.push("Tuế Đức");

                c = tueDucHop(thisday.tue, thisday.days)
                if (c) cat.push("Tuế Đức Hợp");

                c = tueLoc(thisday.tue, thisday.days) // DGTNH ***
                if (c) cat.push("Tuế Lộc");

                c = manDuc(Tiet, thisday.days)
                if (c) cat.push("Mãn Đức");

                // c = thienDe(KHau, thisday.days) // PSD ***
                // if (c) cat.push("Thiên Đế");

                // c = thienHau(Tiet, thisday.days) // PSD ***
                // if (c) cat.push("Thiên Hậu");

                c = uViTinh(KHau, thisday.days)
                if (c) cat.push("U Vi Tinh");

                c = daiHongSa(T4, thisday.days)
                if (c) cat.push("Đại Hồng Sa");

                c = nguDeSinh(thisday.days) // DGTNH ***
                if (c) cat.push("Ngũ Đế Sinh");

                c = laThienDaiTien(thisday.day, thisday.days) // Res ***
                if (c) cat.push("La Thiên Đại Tiến");

                c = hoiDong(thisday.days) // DGTNH ***
                if (c) cat.push("Hội Đồng");

            }
            return cat;
        }

        // Có Hung Thần nào không ?
        function thuHungThan(thisday, truc) {
            var ki = new Array();
            if (lunar) {
                var Tiet = layTiet(thisday.sYear, thisday.sMonth, thisday.sDay);
                var THau = tietHau(thisday.sYear, thisday.sMonth, thisday.sDay);
                var KHau = khiHau(thisday.sYear, thisday.sMonth, thisday.sDay);
                var T4 = lay4Thoi(thisday.sYear, thisday.sMonth, thisday.sDay);
                var D = ngayKhoiTiet(thisday.sYear, thisday.sMonth, thisday.sDay);
                var k;

                k = tamNuong(thisday.day)
                if (k) ki.push("Tam Nương");

                k = tuDaiKy(thisday.day)
                switch (k) {
                    case 1:
                        ki.push("Tứ Đại Kị (giá thú)");
                        break;
                    case 2:
                        ki.push("Tứ Đại Kị (xây cất)");
                        break;
                    case 3:
                        ki.push("Tứ Đại Kị (an táng)");
                        break;
                    case 4:
                        ki.push("Tứ Đại Kị (di cư)");
                        break;
                }

                k = tuBatTuong(thisday.day)
                if (k) ki.push("Tứ Bất Tường");

                k = tieuHongSa(Tiet, thisday.days)
                if (k) ki.push("Hồng Sa");

                //k = ngamThan(Tiet, thisday.days) // DG (phương vị) ***
                //if (k) ki.push("Ngâm Thần");

                k = satChu(Tiet, thisday.days)
                if (k) ki.push("Sát Chủ");

                var kv = daiKhongVong(thisday.month);
                for (i = 0; i < kv.length; i++) {
                    if (kv[i] == thisday.day) {
                        ki.push("Đại Không Vong");
                        break;
                    }
                }

                k = tuLy(thisday.sYear, thisday.sMonth, thisday.sDay)
                if (k) ki.push("Tứ Ly");

                k = tuTuyetNhat(thisday.sYear, thisday.sMonth, thisday.sDay)
                if (k) ki.push("Tứ Tuyệt");

                k = nguyetKy(thisday.day)
                if (k) ki.push("Nguyệt Kị");

                k = thuTu(Tiet, thisday.days)
                if (k) ki.push("Thụ Tử");

                k = hoangSa(Tiet, thisday.days)
                if (k) ki.push("Hoàng Sa");

                k = thienTac(Tiet, thisday.days)
                if (k) ki.push("Thiên Tặc");

                k = nguyetYem(Tiet, thisday.days)
                if (k) ki.push("Nguyệt Yếm"); // Nguyệt Áp
                if (k) ki.push("Đại Họa");
                if (k) ki.push("Địa Hỏa");

                k = bangTieuNgoaHam(Tiet, thisday.days)
                if (k) ki.push("Băng Tiêu Ngõa Hãm"); // Băng đá tan ra phá hoại

                k = bangTieuNgoaGiai(thisday.year, thisday.month, thisday.day)
                if (k == 1) ki.push("Băng Tiêu"); // Nước băng đá tan ra
                if (k == 2) ki.push("Ngõa Giải"); // Vỡ hoặc lở ra

                k = thienHinh(Tiet, thisday.days) //Đi chung với Thanh Long (12 tinh)
                if (k) ki.push("Thiên Hình");

                k = chuTuoc(Tiet, thisday.days)
                if (k) ki.push("Chu Tước");

                k = bachHo(Tiet, thisday.days)
                if (k) ki.push("Bạch Hổ");
                if (k) ki.push("Thiên Bồng");

                k = thienLao(Tiet, thisday.days)
                if (k) ki.push("Thiên Lao");

                k = huyenVu(Tiet, thisday.days)
                if (k) ki.push("Huyền Vũ");
                //if (k) ki.push("Nguyên Vũ");

                k = cauTran(Tiet, thisday.days)
                if (k) ki.push("Câu Trần");

                k = bachHoTrungCung(thisday.days) // (DCTN ***)
                if (k) ki.push("Bạch Hổ Nhập Trung");

                k = cuuThoQuyNhat(thisday.days)
                if (k) ki.push("Cửu Thổ Quỷ");

                k = thienCach(Tiet, thisday.days)
                if (k) ki.push("Thiên Cách");

                k = lamCach(Tiet, thisday.days)
                if (k) ki.push("Lâm Cách");

                k = diaCach(Tiet, thisday.days)
                if (k) ki.push("Địa Cách");

                k = thanCach(Tiet, thisday.days)
                if (k) ki.push("Thần Cách");

                k = hoaCach(Tiet, thisday.days)
                if (k) ki.push("Hỏa Cách");

                k = sonCach(Tiet, thisday.days)
                if (k) ki.push("Sơn Cách");

                k = quyCach(Tiet, thisday.days)
                if (k) ki.push("Quỷ Cách");

                k = nhanCach(Tiet, thisday.days)
                if (k) ki.push("Nhân Cách");

                k = thuyCach(Tiet, thisday.days)
                if (k) ki.push("Thủy Cách");

                k = chauCach(Tiet, thisday.days)
                if (k) ki.push("Châu Cách");

                k = nguyetSat(Tiet, thisday.days)
                if (k) ki.push("Nguyệt Sát");
                if (k) ki.push("Nguyệt Hư");

                k = nguyetHai(Tiet, thisday.days)
                if (k) ki.push("Nguyệt Hại");
                if (k) ki.push("Nguyệt Hỏa");
                if (k) ki.push("Độc Hỏa");

                k = nguyetHinh(Tiet, thisday.days)
                if (k) ki.push("Nguyệt Hình");

                k = uongBai(Tiet, thisday.days)
                if (k) ki.push("Ương Bại");

                k = kiepSat(Tiet, thisday.days)
                if (k) ki.push("Kiếp Sát");

                k = taiSatPhiMa(Tiet, thisday.days)
                if (k) ki.push("Thiên Hỏa");
                if (k) ki.push("Thiên Ngục");
                if (k) ki.push("Tai Sát");
                if (k) ki.push("Phi Ma Sát");

                k = moKhoSat(Tiet, thisday.days) // ***
                if (k) ki.push("Mộ Khố Sát");

                k = duongCong(thisday.month, thisday.day)
                if (k) ki.push("Dương Công Kị");

                k = thienDiaHungBai(thisday.month, thisday.day)
                if (k) ki.push("Thiên Địa Hung Bại");

                k = xichTungTu(thisday.month, thisday.day)
                if (k) ki.push("Xích Tùng Tử");

                k = tuKhi(Tiet, thisday.days)
                if (k) ki.push("Tử Khí");
                if (k) ki.push("Quan Phù");

                k = tieuHao(Tiet, truc, thisday.days)
                if (k) ki.push("Tiểu Hao");

                k = thienCau(Tiet, truc, thisday.days)
                if (k) ki.push("Thiên Cẩu");
                if (k) ki.push("Thổ Ôn");
                if (k) ki.push("Địa Thư");

                k = daiHao(Tiet, truc, thisday.days)
                if (k) ki.push("Đại Hao");
                if (k) ki.push("Nguyệt Phá");

                k = vangVong(Tiet, thisday.days)
                if (k) ki.push("Vãng Vong");
                if (k) ki.push("Thổ Kị");

                k = khiVangVong(Tiet, D, thisday.days)
                if (k) ki.push("Khí Vãng Vong");

                k = thoCam(T4, thisday.days)
                if (k) ki.push("Thổ Cấm");
                if (k) ki.push("Phục Tội");
                if (k) ki.push("Kim Đao");

                k = hoaTinh(Tiet, thisday.days)
                if (k) ki.push("Hỏa Tinh");

                k = batPhong(T4, thisday.days)
                if (k) ki.push("Bát Phong");

                // k = khuocSat(thisday.days)
                // if (k) ki.push("Khước Sát");

                kv = tieuKhongVong(thisday.month);
                for (i = 0; i < kv.length; i++) {
                    if (kv[i] == thisday.day) {
                        ki.push("Tiểu Không Vong");
                        break;
                    }
                }

                k = thanHieu(Tiet, thisday.days) // FSD **
                if (k) ki.push("Thần Hiệu");

                k = quyKhoc(Tiet, thisday.days) // FSD **
                if (k) ki.push("Quỷ Khốc");

                k = thuongSoc(thisday.tue, thisday.days)
                if (k) ki.push("Thượng Sóc");

                k = xichKhau(thisday.year, thisday.month, thisday.day) // DGTNH ***
                if (k) ki.push("Xích Khẩu");

                k = tuePha(thisday.year, thisday.days)
                if (k) ki.push("Tuế Phá");

                k = daiThoi(Tiet, thisday.days)
                if (k) ki.push("Đại Thời");
                if (k) ki.push("Đại Bại");
                if (k) ki.push("Hàm Trì");

                k = nguMo(Tiet, thisday.days)
                if (k) ki.push("Ngũ Mộ");

                k = tuyetYenHoa(Tiet, thisday.days)
                if (k) ki.push("Tuyệt Yên Hỏa");

                k = thienLai(Tiet, thisday.days)
                if (k) ki.push("Thiên Lại");
                if (k) ki.push("Trí Tử");

                k = duHoa(Tiet, thisday.days)
                if (k) ki.push("Du Họa");

                k = thoPhu(Tiet, thisday.days)
                if (k) ki.push("Thổ Phù");

                k = cuuKhong(Tiet, thisday.days)
                if (k) ki.push("Cửu Không");

                k = nhatLuuTai(Tiet, thisday.days) // DGTNH ***
                if (k) ki.push("Nhật Lưu Tài");

                k = vongDoanh(Tiet, thisday.days) // DGTNH ***
                if (k) ki.push("Vong Doanh");

                k = thienCung(Tiet, thisday.days) // DGTNH ***
                if (k) ki.push("Thiên Cùng");

                k = yemDoi(Tiet, thisday.days)
                if (k) ki.push("Yếm Đối");
                if (k) ki.push("Chiêu Diêu"); // DGTNH ***

                k = cuuXu(thisday.days)
                if (k) ki.push("Cửu Xú");

                k = batChuyen(thisday.days)
                if (k) ki.push("Bát Chuyên");

                k = voLoc(thisday.year, Tiet, thisday.days)
                if (k) ki.push("Thập Ác Đại Bại");

                k = nguLy(thisday.days)
                if (k) ki.push("Ngũ Ly");

                k = tuHao(T4, thisday.days)
                if (k) ki.push("Tứ Hao");

                k = tuKi(T4, thisday.days)
                if (k) ki.push("Tứ Kị");

                k = tuCung(T4, thisday.days)
                if (k) ki.push("Tứ Cùng");

                k = batLong7Dieu9Ho6Xa(T4, thisday.days) // DGTNH ***
                switch (k) {
                    case 1:
                        ki.push("Bát Long");
                        break;
                    case 2:
                        ki.push("Thất Điểu");
                        break;
                    case 3:
                        ki.push("Cửu Hổ");
                        break;
                    case 4:
                        ki.push("Lục Xà");
                        break;
                }

                k = tuPhe(T4, thisday.days)
                if (k) ki.push("Tứ Phế");

                k = thapPhuong(thisday.days)
                if (k) ki.push("Mộ Nhật");

                k = cuuTieu(thisday.days)
                if (k) ki.push("Cửu Tiêu");
                if (k) ki.push("Cửu Không");

                k = taiLyTueKhong(thisday.days)
                if (k) ki.push("Tài Ly");
                if (k) ki.push("Tuế Không");

                k = laThienDaiThoai(thisday.day, thisday.days) // Res ***
                if (k) ki.push("La Thiên Đại Thoái");

                k = nguHu(T4, thisday.days)
                if (k) ki.push("Ngũ Hư");
                if (k) ki.push("Hoang Vu");
                if (k) ki.push("Cửu Khổ Bát Cùng"); // NHK ***

                k = loBanSat(T4, thisday.days)
                if (k) ki.push("Lỗ Ban Sát");
                if (k) ki.push("Bất Cử");
                if (k) ki.push("Đao Châm");
                if (k) ki.push("Bại Nhật");

                k = nguyetKien(Tiet, thisday.days)
                if (k) ki.push("Nguyệt Kiến");
                if (k) ki.push("Thổ Phủ");
                if (k) ki.push("Tiểu Thời");

                k = thuNhatDiaPha(Tiet, truc, thisday.days) // DGTNH ***
                if (k) ki.push("Địa Phá");
                //if (k) ki.push("Âm Nguyệt Hà Khôi");
                //if (k) ki.push("Dương Nguyệt Thiên Cương");

                k = thienCuong(Tiet, thisday.days) // Thiên Cương Câu Giảo
                if (k) ki.push("Thiên Cương");

                k = tuThan(Tiet, truc, thisday.days)
                if (k) ki.push("Tử Thần");
                //if (k) ki.push("Âm Nguyệt Thiên Cương"); // DGTNH ***
                //if (k) ki.push("Dương Nguyệt Hà Khôi"); // DGTNH ***

                k = haKhoi(Tiet, thisday.days) // Hà Khôi Câu Giảo
                if (k) ki.push("Hà Khôi");

                k = tuHu(Tiet, truc, thisday.days)
                if (k) ki.push("Tứ Hư");
                if (k) ki.push("Long Hội");

                k = thienHung(Tiet, truc, thisday.days)
                if (k) ki.push("Thiên Hùng");

                k = huyetChi(Tiet, truc, thisday.days) // DGTNH ***
                if (k) ki.push("Huyết Chi");
                if (k) ki.push("Hiệp Tỷ");

                k = diaNang(Tiet, thisday.days)
                if (k) ki.push("Địa Nang");

                k = quyKi(Tiet, thisday.days)
                if (k) ki.push("Quy Kị");

                k = huyetKi(Tiet, thisday.days)
                if (k) ki.push("Huyết Kị");

                k = trungNhat(thisday.days)
                if (k) ki.push("Trùng Nhật");

                k = phucNhat(Tiet, thisday.days)
                if (k) ki.push("Phục Nhật");

                k = trungTang(Tiet, thisday.days)
                if (k) ki.push("Trùng Tang");

                k = trungPhuc(Tiet, thisday.days)
                if (k) ki.push("Phục Tang");

                k = tamTang(T4, thisday.days)
                if (k) ki.push("Tam Tang");

                k = diaTac(Tiet, truc)
                if (k) ki.push("Địa Tặc");

                k = thienOn(Tiet, truc)
                if (k) ki.push("Thiên Ôn");

                k = mocMaSat(Tiet, thisday.days)
                if (k) ki.push("Mộc Mã Sát");

                k = giaoLong(Tiet, thisday.days) // DGTNH ***
                if (k) ki.push("Giao Long");

                k = nguBatNgo(Tiet, thisday.days)
                if (k) ki.push("Ngũ Bất Ngộ");

                k = tamBatPhan(Tiet, thisday.days)
                if (k) ki.push("Tam Bất Phản");

                k = lyBiet(Tiet, thisday.days)
                if (k) ki.push("Ly Biệt");

                k = xucThuyLong(thisday.days)
                if (k) ki.push("Xúc Thủy Long");

                k = truongTinh(thisday.month, thisday.day)
                if (k) ki.push("Trường Tinh");

                k = doanTinh(thisday.month, thisday.day)
                if (k) ki.push("Đoản Tinh");

                k = tuBietNhat(T4, thisday.days) // DGTNH ***
                if (k) ki.push("Tử Biệt");
                if (k) ki.push("Tứ Kích");

                k = trachKhong(T4, thisday.days) // DGTNH ***
                if (k) ki.push("Trạch Không");

                k = doDai(T4, thisday.days) // DGTNH ***
                if (k) ki.push("Đồ Đãi");

                k = hinhNguc(T4, thisday.days) // DGTNH ***
                if (k) ki.push("Hình Ngục");
                if (k) ki.push("Tội Hình");

                k = satSuNhat(T4, thisday.days) // 3 ***
                if (k) ki.push("Sát Sư Nhật");

                k = tonSuNhat(Tiet, thisday.days) // 3 ***
                if (k) ki.push("Tổn Sư Nhật");

                k = laoNhat(T4, thisday.days) // DGTNH ***
                if (k) ki.push("Lao Nhật");

                k = tuHuBai(T4, thisday.days)
                if (k) ki.push("Tứ Hư Bại");

                k = phanKich(T4, thisday.days) // DGTNH ***
                if (k) ki.push("Phản Kích");

                k = phucThi(T4, thisday.days) // DGTNH ***
                if (k) ki.push("Phục Thi");

                k = thienDiaChuyen(T4, thisday.days)
                if (k) ki.push("Thiên Địa Chánh Chuyển");

                k = thienDiaChuyenSat(T4, thisday.days)
                if (k) ki.push("Thiên Địa Chuyển Sát");

                k = ngucNhat(T4, thisday.days) // DGTNH ***
                if (k) ki.push("Ngục Nhật");
                if (k) ki.push("Phân Hài");

                k = nguyetKienChuyenSat(T4, thisday.days)
                if (k) ki.push("Nguyệt Kiến Chuyển Sát");
                if (k) ki.push("Thiên Chuyển Địa Chuyển");

                k = phiLiem(Tiet, truc)
                if (k) ki.push("Phi Liêm");
                if (k) ki.push("Đại Sát");

                k = tuThoiDaiMo(T4, thisday.days)
                if (k) ki.push("Tứ Thời Đại Mộ");

                k = lucBatThanh(Tiet, truc)
                if (k) ki.push("Lục Bất Thành");

                k = longHo(Tiet, truc) // DGTNH ***
                if (k) ki.push("Long Hổ");

                k = thienDiaTranhHung(Tiet, truc) // DGTNH ***
                if (k) ki.push("Thiên Địa Tranh Hùng");

                k = daiTieuKhoc(Tiet, truc) // FSD ***
                if (k) ki.push("Đại Tiểu Khốc Nhật");

                k = phaBai(Tiet, truc)
                if (k) ki.push("Phá Bại Tinh");

                k = loiCong(Tiet, truc)
                if (k) ki.push("Lôi Công");

                // conflict with 'lục hợp'
                //k = voKieu(Tiet, thisday.days) // DGTNH ***
                //if (k) ki.push("Vô Kiều");

                k = duongThac(Tiet, truc) // DGTNH ***
                if (k) ki.push("Dương Thác");

                k = amThac(Tiet, truc) // DGTNH ***
                if (k) ki.push("Âm Thác");

                k = nguBatQuy(thisday.days) // DGTNH ***
                if (k) ki.push("Ngũ Bất Quy");

                k = lyKhoa(thisday.days) // DGTNH ***
                if (k) ki.push("Ly Khoa");

                k = thienThuongDaiKV(thisday.days) // DGTNH ***
                if (k) ki.push("Thiên Thượng ĐKV");

                k = phanChi(thisday.day, thisday.days) // DGTNH ***
                if (k) ki.push("Phản Chi");

                k = batToa(Tiet, thisday.days) // DGTNH ***
                if (k) ki.push("Bát Tọa");

                // k = tangMon(Tiet, thisday.days) // DGTNH (phương vị) ***
                // if (k) ki.push("Tang Môn");

                k = nguQuy(Tiet, thisday.days) // NHK ***
                if (k) ki.push("Ngũ Quỷ");

                k = daoKhamSat(T4, thisday.days) // NHK ***
                if (k) ki.push("Đao Khảm Sát");

                k = phuDauSat(T4, thisday.days)
                if (k) ki.push("Phủ Đầu Sát");

                k = thoNgan(thisday.day, thisday.full) // DGTNH ***
                if (k) ki.push("Thổ Ngân");

                k = dienNgan(thisday.day, thisday.full) // DGTNH ***
                if (k) ki.push("Điền Ngân");

                k = thuyNgan(thisday.day, thisday.full) // DGTNH ***
                if (k) ki.push("Thủy Ngân");

                k = kimNgan(thisday.day, thisday.full) // DGTNH ***
                if (k) ki.push("Kim Ngân");

                k = sonNgan(thisday.day, thisday.full) // DGTNH ***
                if (k) ki.push("Sơn Ngân");

                k = thienBinh(Tiet, thisday.days)
                if (k) ki.push("Thiên Binh");

                k = dietMon(thisday.year, Tiet, thisday.days) // DGTNH ***
                if (k) ki.push("Diệt Môn");

                k = tuPhuongHao(thisday.month, thisday.day) // DGTNH ***
                if (k) ki.push("Tứ Phương Hao");

                k = onNhap(thisday.month, thisday.day) // DGTNH ***
                if (k) ki.push("Ôn Nhập");

                k = onXuat(thisday.month, thisday.day) // DGTNH ***
                if (k) ki.push("Ôn Xuất");

                k = coThan(Tiet, thisday.days) // DGTNH ***
                if (k) ki.push("Cô Thần");

                k = quaTu(Tiet, thisday.days) // DGTNH ***
                if (k) ki.push("Quả Tú");

                k = diaQua(T4, thisday.days) // DGTNH ***
                if (k) ki.push("Địa Quả");

                k = tuQuyBatToa(T4, thisday.days) // DGTNH ***
                if (k) ki.push("Tứ Quý Bát Tọa");

                k = toiChi(Tiet, thisday.days) // DGTNH ***
                if (k) ki.push("Tội Chí");

                k = keHoan(thisday.days) // DGTNH ***
                if (k) ki.push("Kê Hoãn");

                k = thamBenh(thisday.days) // DGTNH ***
                if (k) ki.push("Thám Bệnh");

                k = hoanhThienChuTuoc(thisday.day)
                if (k) ki.push("Hoành Thiên Chu Tước");

                k = chuyenNhat(thisday.days) // DGTNH ***
                if (k) ki.push("Chuyên Nhật");

                k = phatNhat(thisday.days) // DGTNH ***
                if (k) ki.push("Phạt Nhật");
            }
            return ki;
        }

        // '<a class=lnk3 href=cat_tinh.htm#'+iCatNhat(than[i])+'>'+than[i]+'</a>'
        function LC1(name) {
            var loc = iCatNhat(name);
            var L = '<a onMouseOver="tipN1(' + loc + ')" onMouseOut="untip()" class="lnk3" href="javascript:void(0)">' + name + '</a>';
            return L;
        }

        function LC2(name) {
            var loc = iCatNhat(name);
            var L = '<a onMouseOver="tipN1(' + loc + ')" onMouseOut="untip()" class="lnk1" href="javascript:void(0)">' + name +'</a>';
            return L;
        }

        //'<a class=lnk4 href=hung_tinh.htm#'+iHungNhat(than[i])+'>'+than[i]+'</a>'
        function LH1(name) {
            var loc = iHungNhat(name);
            var L = '<a onMouseOver="tipN2(' + loc + ')" onMouseOut="untip()" class="lnk4" href="javascript:void(0)">' + name + '</a>';
            return L;
        }

        function LH2(name) {
            var loc = iHungNhat(name);
            var L = '<a onMouseOver="tipN2(' + loc + ')" onMouseOut="untip()" class="lnk2" href="javascript:void(0)">' + name + '</a>';
            return L;
        }

        function TC1(name1, name2) {
            var loc = iCatThoi(name1);
            var L = '<a onMouseOver="tipT1(' + loc + ')" onMouseOut="untip()" class="lnk3" href="javascript:void(0)"'
            if (name2 == '')
                L += '>' + name1 + '</a>';
            else
                L += '>' + name1 + '</a> <I>' + name2 + '</I>';
            return L;
        }

        function TC2(name1, name2) {
            var loc = iCatThoi(name1);
            var L = '<a onMouseOver="tipT1(' + loc + ')" onMouseOut="untip()" class="lnk1" href="javascript:void(0)"'
            if (name2 == '')
                L += '>' + name1 + '</a>';
            else
                L += '>' + name1 + '</a> <I>' + name2 + '</I>';
            return L;
        }

        function TH1(name1, name2) {
            var loc = iHungThoi(name1);
            var L = '<a onMouseOver="tipT2(' + loc + ')" onMouseOut="untip()" class="lnk4" href="javascript:void(0)"'
            loc += 50;
            if (name2 == '')
                L += '>' + name1 + '</a>';
            else
                L += '>' + name1 + '</a> <I>' + name2 + '</I>';
            return L;
        }

        function TH2(name1, name2) {
            var loc = iHungThoi(name1);
            var L = '<a onMouseOver="tipT2(' + loc + ')" onMouseOut="untip()" class="lnk2" href="javascript:void(0)"'
            loc += 50;
            if (name2 == '')
                L += '>' + name1 + '</a>';
            else
                L += '>' + name1 + '</a> <I>' + name2 + '</I>';
            return L;
        }

        // Xem Thời Thần bằng Can & Chi ngày
        function layGio() {
            //var can_n = (lunar.year-1900+36)%10; // Can Vị của năm
            var can_t = ((i_year - 1900) * 12 + (i_mon - 1) + 12) % 10; // Can Vị của tháng
            if (i_day >= lunar.t) can_t = ((i_year - 1900) * 12 + (i_mon - 1) + 13) % 10;
            var can = canVi(ThienCan(lunar.days));
            var chi = chiVi(DiaChi(lunar.days));
            var Tiet = layTiet(lunar.sYear, lunar.sMonth, lunar.sDay);
            var KHau = khiHau(lunar.sYear, lunar.sMonth, lunar.sDay);
            var i, j = 0,
                k, f = 0,
                c;
            var quidang = quiDangThienMon(KHau, lunar.days);
            var dai4thoi = tuDaiCatThoi(KHau);
            var hythan = thoiHyThan(can);
            var thxa = thoiThienXa(can);
            var taqn = thoiThienAtQuiNhan(can);
            var tqqn = thoiThienQuanQuiNhan(can);
            var ptqn = thoiPhucTinhQuiNhan(can);
            var dquy = thoiDuongQuy(can);
            var aquy = thoiAmQuy(can);
            var dthai = thoiThaiDuong(can);
            var athai = thoiThaiAm(can);
            var trsinh = thoiTruongSinh(can);
            var dvuong = thoiDeVuong(can);
            var daitien = thoiLaThienDaiTien(can);
            var chop = thoiNguHop(can);
            var p5 = thoiNguPhu(can);
            var dphu = thoiDuongPhu(can);
            var quoc = thoiQuocAn(can);
            var bloc = thoiBatLoc(can);
            var thuy = thoiThuyTinh(can);
            var moc = thoiMocTinh(can);
            var hoa = thoiHoaTinh(can);
            var tho = thoiThoTinh(can);
            var kim = thoiKimTinh(can);
            var mt = thoiMinhTinh(Tiet);
            var tt = layHHD(chi);
            var hh = layTHD(chi);
            var tk = thoiKien(chi);
            var h6 = thoiLucHop(chi);
            var h3 = thoiTamHop(chi);
            var dma = thoiDichMa(chi);
            var vuk = thoiVuKhuc(chi);
            var tham = thoiThamLang(chi);
            var hbat = thoiHuuBat(chi);
            var tphu = thoiTaPhu(chi);

            var bat5 = thoiNguBatNgo(can);
            var quy = thoiNguQuy(can);
            var kdo = thoiKeDo(can);
            var lhau = thoiLaHau(can);
            var daithoai = thoiLaThienDaiThoai(can);
            var mau6 = thoiLucMau(can);
            var mokho = thoiMoKho(can);
            var pha = thoiXungPha(chi);
            var hinh = thoi3Hinh(chi);
            var hinh6 = thoi6Hinh(chi);
            var hai = thoi6Hai(chi);
            var tcuong = thoiThienCuong(chi);
            var hkhoi = thoiHaKhoi(chi);
            var cthan = thoiCoThan(chi);
            var quatu = thoiQuaTu(chi);
            var cauthuc = thoiThienCauHaThuc(chi);
            var tuan = khongVong(CAN[can], CHI[chi]);
            var triet = gioKhongVong(CAN[can]);
            var comosat = thoiCoMoSat(chi);
            var kiepsat = thoiKiepSat(chi);
            var bthien = thoiThienBinh(can);
            var bdia = thoiDiaBinh(can);
            var bloi = thoiLoiBinh(can);
            var thtac = thoiThienTac(can);
            var s;
            var percent;

            for (i = 0; i < 12; i++) {
                var cat = new Array();
                var hung = new Array();
                var CanGio = ThoiCan(CAN[can], i);
                var canchi = CanGio + ' ' + CHI[i];
                var id = 'cc' + ((i + 1) < 10 ? '0' : '') + (i + 1);
                var xc = 0;
                var CS = new Array(); // cát sự
                var HS = new Array(); // hung sự
                var su = ''
                var can_g = canVi(CanGio);

                document.getElementById(id).innerHTML = canchi;

                id = 'tt' + ((i + 1) < 10 ? '0' : '') + (i + 1);
                j = hh[i];
                k = tt[i] - 1;
                // Hoàng Hắc Đạo
                var name = H_H_DAO[k];
                if (j) {
                    f = 1;
                    s = '<font color=green>' + TC1(name, '(' + H_D_CT[j - 1] + ' tinh)');
                    su = iCatThoi3(name);
                    if (su.length) CS = countTag(CS, su);
                } else {
                    f = 0;
                    s = '<font color=brown>' + TH1(name, '(' + H_D_HT[k] + ')');
                    su = iHungThoi3(name);
                    if (su.length) HS = countTag(HS, su);
                }

                if (i == taqn[0] || i == taqn[1]) {
                    cat.push(TC1('Thiên Ất', 'Quí Nhân'));
                    su = iCatThoi3('Thiên Ất');
                    if (su.length) CS = countTag(CS, su);
                    xc += 3;
                }
                if (i == tqqn[0] || i == tqqn[1]) {
                    cat.push(TC1('Thiên Quan', 'Quí Nhân'));
                    su = iCatThoi3('Thiên Quan');
                    if (su.length) CS = countTag(CS, su);
                    xc += 3;
                }
                if (i == ptqn) {
                    cat.push(TC1('Phúc Tinh', 'Quí Nhân'));
                    su = iCatThoi3('Phúc Tinh');
                    if (su.length) CS = countTag(CS, su);
                    xc += 2;
                }
                if (i == quidang[0] || i == quidang[1]) {
                    cat.push(TC1('Quý Đăng', 'Thiên Môn'));
                    su = iCatThoi3('Quý Đăng');
                    if (su.length) CS = countTag(CS, su);
                    xc += 3;
                }
                if (i == dai4thoi[0] || i == dai4thoi[1] || i == dai4thoi[2] || i == dai4thoi[3]) {
                    cat.push(TC1('Tứ Đại', 'Cát Thời'));
                    su = iCatThoi3('Tứ Đại');
                    if (su.length) CS = countTag(CS, su);
                    xc += 3;
                }
                //if (i==dquy) cat.push(TC2('Dương Quý', 'Nhân'));
                //if (i==aquy) cat.push(TC2('Âm Quý', 'Nhân'));

                xc += (cat.length * 2); // đặc biệt 2 điểm cho những thần này

                if (i == h3[0] || i == h3[1]) {
                    cat.push(TC1('Tam Hợp', ''));
                    su = iCatThoi3('Tam Hợp');
                    if (su.length) CS = countTag(CS, su);
                    xc += 2;
                }

                if (i == hythan) {
                    cat.push(TC2('Hỷ Thần', ''));
                    su = iCatThoi3('Hỷ Thần');
                    if (su.length) CS = countTag(CS, su);
                }
                if (i == thxa[0] || i == thxa[1]) {
                    cat.push(TC2('Thiên Xá', ''));
                    su = iCatThoi3('Thiên Xá');
                    if (su.length) CS = countTag(CS, su);
                }
                if (i == dthai[0] || i == dthai[1]) {
                    cat.push(TC2('Thái Dương', ''));
                    su = iCatThoi3('Thái Dương');
                    if (su.length) CS = countTag(CS, su);
                }
                if (i == athai[0] || i == athai[1]) {
                    cat.push(TC2('Thái Âm', ''));
                    su = iCatThoi3('Thái Âm');
                    if (su.length) CS = countTag(CS, su);
                }
                if (i == trsinh) {
                    cat.push(TC2('Trường Sinh', ''));
                    su = iCatThoi3('Trường Sinh');
                    if (su.length) CS = countTag(CS, su);
                }
                if (i == dvuong) {
                    cat.push(TC2('Đế Vượng', ''));
                    su = iCatThoi3('Đế Vượng');
                    if (su.length) CS = countTag(CS, su);
                }
                if (i == daitien) {
                    cat.push(TC2('La Thiên', 'Đại Tiến'));
                    su = iCatThoi3('La Thiên');
                    if (su.length) CS = countTag(CS, su);
                }
                if (i == chop) {
                    cat.push(TC2('Ngũ Hợp', ''));
                    su = iCatThoi3('Ngũ Hợp');
                    if (su.length) CS = countTag(CS, su);
                }
                if (i == p5) {
                    cat.push(TC2('Ngũ Phù', ''));
                    su = iCatThoi3('Ngũ Phù');
                    if (su.length) CS = countTag(CS, su);
                }
                if (i == dphu) {
                    cat.push(TC2('Đường Phù', ''));
                    su = iCatThoi3('Đường Phù');
                    if (su.length) CS = countTag(CS, su);
                }
                if (i == quoc) {
                    cat.push(TC2('Quốc Ấn', ''));
                    su = iCatThoi3('Quốc Ấn');
                    if (su.length) CS = countTag(CS, su);
                }
                if (i == bloc) {
                    cat.push(TC2('Nhật Lộc', ''));
                    su = iCatThoi3('Nhật Lộc');
                    if (su.length) CS = countTag(CS, su);
                }
                if (i == tk) {
                    cat.push(TC2('Thời Kiến', ''));
                    su = iCatThoi3('Thời Kiến');
                    if (su.length) CS = countTag(CS, su);
                }
                if (i == h6) {
                    cat.push(TC2('Lục Hợp', ''));
                    su = iCatThoi3('Lục Hợp');
                    if (su.length) CS = countTag(CS, su);
                }
                if (i == dma) {
                    cat.push(TC2('Dịch Mã', ''));
                    su = iCatThoi3('Dịch Mã');
                    if (su.length) CS = countTag(CS, su);
                }
                if (i == vuk[0] || i == vuk[1]) {
                    cat.push(TC2('Vũ Khúc', ''));
                    su = iCatThoi3('Vũ Khúc');
                    if (su.length) CS = countTag(CS, su);
                }
                if (i == tham[0] || i == tham[1]) {
                    cat.push(TC2('Tham Lang', ''));
                    su = iCatThoi3('Tham Lang');
                    if (su.length) CS = countTag(CS, su);
                }
                if (i == tphu[0] || i == tphu[1]) {
                    cat.push(TC2('Tả Phụ', ''));
                    su = iCatThoi3('Tả Phụ');
                    if (su.length) CS = countTag(CS, su);
                }
                if (i == hbat[0] || i == hbat[1]) {
                    cat.push(TC2('Hữu Bật', ''));
                    su = iCatThoi3('Hữu Bật');
                    if (su.length) CS = countTag(CS, su);
                }
                if (i == thuy[0] || i == thuy[1]) {
                    cat.push(TC2('Thủy Tinh', ''));
                    su = iCatThoi3('Thủy Tinh');
                    if (su.length) CS = countTag(CS, su);
                }
                if (i == moc[0] || i == moc[1]) {
                    cat.push(TC2('Mộc Tinh', ''));
                    su = iCatThoi3('Mộc Tinh');
                    if (su.length) CS = countTag(CS, su);
                }
                if (i == kim[0] || i == kim[1]) {
                    cat.push(TC2('Kim Tinh', ''));
                    su = iCatThoi3('Kim Tinh');
                    if (su.length) CS = countTag(CS, su);
                }
                if (thoiTyKien(can, canVi(ThoiCan(CAN[can], i)))) {
                    cat.push(TC2('Tỷ Kiên', ''));
                    su = iCatThoi3('Tỷ Kiên');
                    if (su.length) CS = countTag(CS, su);
                }
                if (i == mt) cat.push(TC2('Minh Tinh', ''));

                if (ThoiCan(CAN[can], i) == CAN[bat5]) {
                    hung.push(TH2('Ngũ Bất Ngộ', ''));
                    su = iHungThoi3('Ngũ Bất Ngộ');
                    if (su.length) HS = countTag(HS, su);
                }
                if (i == quy[0] || i == quy[1]) {
                    hung.push(TH2('Ngũ Quỷ', ''));
                    su = iHungThoi3('Ngũ Quỷ');
                    if (su.length) HS = countTag(HS, su);
                }
                if (i == kdo) {
                    hung.push(TH2('Kế Đô', ''));
                    su = iHungThoi3('Kế Đô');
                    if (su.length) HS = countTag(HS, su);
                }
                if (i == lhau[0] || i == lhau[1]) {
                    hung.push(TH2('La Hầu', ''));
                    su = iHungThoi3('La Hầu');
                    if (su.length) HS = countTag(HS, su);
                }
                if (i == pha) {
                    hung.push(TH1('Thời Phá', ''));
                    su = iHungThoi3('Thời Phá');
                    if (su.length) HS = countTag(HS, su);
                    xc -= 2;
                }
                if (i == hinh || i == hinh6) {
                    hung.push(TH2('Thời Hình', ''));
                    su = iHungThoi3('Thời Hình');
                    if (su.length) HS = countTag(HS, su);
                }
                if (i == hai) {
                    hung.push(TH2('Thời Hại', ''));
                    su = iHungThoi3('Thời Hại');
                    if (su.length) HS = countTag(HS, su);
                }
                if (i == tcuong) {
                    hung.push(TH2('Thiên Cương', ''));
                    su = iHungThoi3('Thiên Cương');
                    if (su.length) HS = countTag(HS, su);
                }
                if (i == hkhoi) {
                    hung.push(TH2('Hà Khôi', ''));
                    su = iHungThoi3('Hà Khôi');
                    if (su.length) HS = countTag(HS, su);
                }
                if (i == cthan) {
                    hung.push(TH2('Cô Thần', ''));
                    su = iHungThoi3('Cô Thần');
                    if (su.length) HS = countTag(HS, su);
                }
                if (i == quatu) {
                    hung.push(TH2('Quả Tú', ''));
                    su = iHungThoi3('Quả Tú');
                    if (su.length) HS = countTag(HS, su);
                }
                if (i == daithoai) {
                    hung.push(TH2('La Thiên', 'Đại Thoái'));
                    su = iHungThoi3('La Thiên');
                    if (su.length) HS = countTag(HS, su);
                }
                if (i == cauthuc) {
                    hung.push(TH2('Thiên Cẩu', 'Hạ Thực'));
                    su = iHungThoi3('Thiên Cẩu');
                    if (su.length) HS = countTag(HS, su);
                }
                if (i == mau6) {
                    hung.push(TH2('Lục Mậu', ''));
                    su = iHungThoi3('Lục Mậu');
                    if (su.length) HS = countTag(HS, su);
                }
                if (i == mokho) {
                    hung.push(TH2('Nhật Mộ', ''));
                    su = iHungThoi3('Nhật Mộ');
                    if (su.length) HS = countTag(HS, su);
                }
                if (i == tuan || i == (tuan + 1)) {
                    hung.push(TH2('Tuần Trung', 'Không Vong'));
                    su = iHungThoi3('Tuần Trung');
                    if (su.length) HS = countTag(HS, su);
                }
                if (i == triet || i == (triet + 1)) {
                    hung.push(TH2('Triệt Lộ', 'Không Vong'));
                    su = iHungThoi3('Triệt Lộ');
                    if (su.length) HS = countTag(HS, su);
                }
                if (i == hoa[0] || i == hoa[1]) {
                    hung.push(TH2('Hỏa Tinh', ''));
                    su = iHungThoi3('Hỏa Tinh');
                    if (su.length) HS = countTag(HS, su);
                }
                if (i == tho[0] || i == tho[1]) {
                    hung.push(TH2('Thổ Tinh', ''));
                    su = iHungThoi3('Thổ Tinh');
                    if (su.length) HS = countTag(HS, su);
                }
                if (i == comosat) {
                    hung.push(TH2('Cổ Mộ Sát', ''));
                    su = iHungThoi3('Cổ Mộ Sát');
                    if (su.length) HS = countTag(HS, su);
                }
                if (i == kiepsat) {
                    hung.push(TH2('Kiếp Sát', ''));
                    su = iHungThoi3('Kiếp Sát');
                    if (su.length) HS = countTag(HS, su);
                }
                if (i == bthien[0] || i == bthien[1]) {
                    hung.push(TH2('Thiên Binh', ''));
                    su = iHungThoi3('Thiên Binh');
                    if (su.length) HS = countTag(HS, su);
                }
                if (i == bdia[0] || i == bdia[1]) {
                    hung.push(TH2('Địa Binh', ''));
                    su = iHungThoi3('Địa Binh');
                    if (su.length) HS = countTag(HS, su);
                }
                if (i == bloi[0] || i == bloi[1]) {
                    hung.push(TH2('Lôi Binh', ''));
                    su = iHungThoi3('Lôi Binh');
                    if (su.length) HS = countTag(HS, su);
                }
                if (i == thtac[0] || i == thtac[1]) {
                    hung.push(TH2('Thiên Tặc', ''));
                    su = iHungThoi3('Thiên Tặc');
                    if (su.length) HS = countTag(HS, su);
                }
                if (thoiCuuXu(canVi(ThoiCan(CAN[can], i)), i)) {
                    hung.push(TH2('Cửu Xú', ''));
                    su = iHungThoi3('Cửu Xú');
                    if (su.length) HS = countTag(HS, su);
                }

                if (f) {
                    for (c = 0; c < cat.length; c++)
                        s += '; ' + cat[c];
                    s += '</font><font color=brown>'
                    for (c = 0; c < hung.length; c++)
                        s += '; ' + hung[c];
                    percent = ((3 + xc + cat.length - hung.length) / (3 + xc + cat.length + hung.length)) * 100
                } else {
                    for (c = 0; c < hung.length; c++)
                        s += '; ' + hung[c];
                    s += '</font><font color=green>'
                    for (c = 0; c < cat.length; c++)
                        s += '; ' + cat[c];
                    percent = ((xc + cat.length - hung.length - 3) / (3 + xc + cat.length + hung.length)) * 100
                }
                s += '</font></td></tr></table>'
                document.getElementById(id).innerHTML = s;

                compareTag(CS, HS);
                su = tag2Str(CS, '***');
                if (su != '') {
                    s = '<FONT COLOR=#003399>' + su + '</FONT>';
                } else
                    s = 'Bất nghi';
                id = 'tn' + ((i + 1) < 10 ? '0' : '') + (i + 1);
                document.getElementById(id).innerHTML = s;
                su = tag2Str(HS, 'bách sự bất lợi');
                var s3 = thoi3SatMenh(i);
                s = '';
                if (su != '') {
                    s = '<FONT COLOR=#AA22CC>' + su + '</FONT>';
                }
                if (i == chi && s3.length) {
                    if (s.length) s += '<br>'
                    s += '<font color=red>Giờ ' + CHI[i] + ' Tam Sát kị mệnh tuổi ';
                    for (var j = 0; j < 3; j++) s += CHI[s3[j]] + ((j + 1) == 3 ? '.' : ', ');
                    s += '</font>'
                }
                if (s == '')
                    s = 'Bất kị';
                id = 'tk' + ((i + 1) < 10 ? '0' : '') + (i + 1);
                document.getElementById(id).innerHTML = s;

                percent = parseInt(percent);
                if (percent < 0) percent = 0;
                id = 'kq' + ((i + 1) < 10 ? '0' : '') + (i + 1);
                document.getElementById(id).innerHTML = percent + '%';
                for (c = 0; c < cat.length; c++) cat.pop();
                for (c = 0; c < hung.length; c++) hung.pop();
                delete cat[0];
                delete cat;
                delete hung[0];
                delete hung;
            }
        }

        function choose() {
            var i = 0;
            for (i = 0; i < 3; i++)
                if (document.indicators.hienThi[i].checked) break;

            tt_type = i;
        }

        function mOvr(ev) {
            var iYear = document.getElementById('year').value;
            var iMon = document.getElementById('month').value;
            var obj = (ev.srcElement) ? ev.srcElement : ev.target;
            if (obj.tagName == "DIV") {
                var day = obj.innerHTML;
                var off = obj.className;
                if (day && off != 'offday' && tt_type) {
                    var i;
                    var Lunar = new AmLich(day, iMon, iYear);
                    var cY = CanChi(Lunar.year - 1900 + 36);
                    var cM = CanChi((iYear - 1900) * 12 + (iMon - 1) + 12);
                    if (parseInt(day) >= Lunar.t) cM = CanChi((iYear - 1900) * 12 + (iMon - 1) + 13);
                    var cD = CanChi(Lunar.days);
                    var khi = TietKhi(iYear, (iMon - 1) * 2 + 1); // tiết khí
                    var iTruc = TrucKien(1, iMon, iYear);
                    var iTinh = Tinh28Tu(iYear, iMon);
                    var s = '';
                    if (tt_type == 1) {
                        s = '<TABLE WIDTH="280" BORDER=1 CELLPADDING=0 CELLSPACING=0 BGCOLOR="#000066" ' +
                            'style="filter:Alpha(opacity=80)"><TR><TD>' +
                            '<TABLE WIDTH=100% BORDER=0 CELLPADDING=0 CELLSPACING=0 CLASS=XEM0>' +
                            '<TR><TD ALIGN=CENTER COLSPAN=3><I>DL</I>: <B>' + day + '/' + iMon + '/' + iYear +
                            '</B>, <I>ÂL</I>: <B>' + Lunar.day + '/' + Lunar.month + '/' + Lunar.year + '</B>' +
                            (Lunar.isLeap ? ' <font color=red>nhuận</font>' : '') +
                            '<BR><I>Trực</I> <B>' + TRUC12[iTruc[day - 1]] + '</B>, <I>Sao</I> <B>' + TINH28[iTinh[day - 1]] + '</B></TD></TR>' +
                            '<TR><TD ALIGN=CENTER><I>ngày</I></TD>' +
                            '<TD ALIGN=CENTER><I>tháng</I> ' + Lunar.month + '</TD>' +
                            '<TD ALIGN=CENTER><I>năm</I></TD></TR>' +
                            '<TR><TD ALIGN=CENTER>' + cD + '</TD><TD ALIGN=CENTER>' + cM + '</TD><TD ALIGN=CENTER>' + cY + '</TD></TR>';
                        if (Lunar.sDay == Lunar.t && Lunar.tn == 1) { // trùng tiết
                            i = Lunar.tiet * 2;
                            if (i > 23) i = 0;
                            s += '<TR><TD ALIGN=CENTER COLSPAN=3><I>Tiết</I>: <FONT COLOR=RED>' + TIET[i] + '</FONT></TD></TR>';
                        } else if (Lunar.sDay == khi) { // trùng tiết khí
                            i = Lunar.tiet * 2 + 1;
                            if (i > 23) i = 1;
                            s += '<TR><TD ALIGN=CENTER COLSPAN=3><I>Tiết khí</I>: <FONT COLOR=RED>' + TIET[i] + '</FONT></TD></TR>';
                        }
                        for (i in solarFest) {
                            if (solarFest[i].match(/^(\d{2})(.{2})([\s\*])(.+)$/)) {
                                if (Lunar.sMonth == eval(RegExp.$1) && Lunar.sDay == eval(RegExp.$2)) {
                                    if (!Lunar.isLeap)
                                        s += '<TR><TD ALIGN=CENTER COLSPAN=3><FONT COLOR=RED>' + RegExp.$4 + '</FONT></TD></TR>';
                                }
                            }
                        }
                        for (i in lunarFest) {
                            if (lunarFest[i].match(/^(\d{2})(.{2})([\s\*])(.+)$/)) {
                                if (Lunar.day == eval(RegExp.$1) && Lunar.month == eval(RegExp.$2)) {
                                    if (!Lunar.isLeap)
                                        s += '<TR><TD ALIGN=CENTER COLSPAN=3><FONT COLOR=RED>' + RegExp.$4 + '</FONT></TD></TR>';
                                }
                            }
                        }
                        s += '</TABLE></TD></TR></TABLE>';
                    }
                    if (tt_type == 2) {
                        s = '<TABLE WIDTH="280" BORDER=1 CELLPADDING=0 CELLSPACING=0 BGCOLOR="#000066" ' +
                            'style="filter:Alpha(opacity=80)"><TR><TD>' +
                            '<TABLE WIDTH=100% BORDER=0 CELLPADDING=0 CELLSPACING=0 CLASS=XEM0>' +
                            '<TR><TD ALIGN=CENTER><I>DL</I>: <B>' + day + '/' + iMon + '/' + iYear +
                            '</B>, <I>ÂL</I>: <B>' + Lunar.day + '/' + Lunar.month + '/' + Lunar.year + '</B>' +
                            (Lunar.isLeap ? ' <font color=red>nhuận</font>' : '') + '<BR><font color=green><B>Cát thần</B></font></TD></TR>'
                        var than = thuCatThan(Lunar, iTruc[day - 1]);
                        if (than.length) {
                            than.sort();
                            TS = ''; // Thần Sát
                            for (i = 0; i < than.length; i++) {
                                TS += than[i] + ((i + 1) < than.length ? ', ' : '.');
                            }
                            s += '<TR><TD ALIGN=CENTER>' + TS + '</TD></TR>';
                            for (i = 0; i < than.length; i++) than.pop();
                            delete than[0];
                            delete than;
                        }
                        s += '</TABLE></TD></TR></TABLE>';
                    }
                    if (tt_type == 3) {
                        s = '<TABLE WIDTH="280" BORDER=1 CELLPADDING=0 CELLSPACING=0 BGCOLOR="#000066" ' +
                            'style="filter:Alpha(opacity=80)"><TR><TD>' +
                            '<TABLE WIDTH=100% BORDER=0 CELLPADDING=0 CELLSPACING=0 CLASS=XEM0>' +
                            '<TR><TD ALIGN=CENTER><I>DL</I>: <B>' + day + '/' + iMon + '/' + iYear +
                            '</B>, <I>ÂL</I>: <B>' + Lunar.day + '/' + Lunar.month + '/' + Lunar.year + '</B>' +
                            (Lunar.isLeap ? ' <font color=red>nhuận</font>' : '') + '<BR><font color=red><B>Hung thần</B></font></TD></TR>'
                        var than = thuHungThan(Lunar, iTruc[day - 1]);
                        if (than.length) {
                            than.sort();
                            TS = ''; // Thần Sát
                            for (i = 0; i < than.length; i++) {
                                TS += than[i] + ((i + 1) < than.length ? ', ' : '.');
                            }
                            s += '<TR><TD ALIGN=CENTER><font color=brown>' + TS + '</color></TD></TR>';
                            for (i = 0; i < than.length; i++) than.pop();
                            delete than[0];
                            delete than;
                        }
                        s += '</TABLE></TD></TR></TABLE>';
                    }
                    if (tt_type) {
                        document.getElementById("tooltip").innerHTML = s;
                        if (tt_Style) {
                            tt_Style.width = "290px";

                            if (tt_Style.visibility != "visible") {
                                var width = tt_Style.width;
                                var w = parseInt(width.substring(0, width.indexOf('px')));
                                tt_Style.left = tt_X + tt_OffsetX - (w / 2) + 'px';

                                tt_Style.top = tt_Y + tt_OffsetY + 'px';
                                tt_Style.visibility = "visible";
                            }
                        }
                    }
                } else tt_Style.visibility = "hidden";
            }
        }

        // Mouse moved out
        function untip() {
            if (tt_Style.visibility == 'visible') {
                tt_Style.visibility = "hidden";
                tt_Style.left = '0px';
                tt_Style.top = '0px';
            }
        }

        function mOvr2(ev, t) {
            if (tt_type == 0) return;
            var x = chiViXung(t);
            var can = canVi(ThienCan(lunar.days));
            var tc = canVi(ThoiCan(CAN[can], t));
            var xc = napAmCanXung(tc);
            var s = '<TABLE WIDTH="140" BORDER=1 CELLPADDING=0 CELLSPACING=0 BGCOLOR="#000066" ' +
                'style="filter:Alpha(opacity=80)"><TR><TD>' +
                '<TABLE WIDTH=100% BORDER=0 CELLPADDING=0 CELLSPACING=0 CLASS=XEM0>' +
                '<TR><TD ALIGN=CENTER><font color=blue><I>Giờ</I></font> ' + ' ' + CAN[tc] + ' ' + CHI[t] + '</TD></TR>' +
                '<TR><TD ALIGN=CENTER><font color=red><I>xung</I></font> ' + CAN[xc] + ' ' + CHI[x] + '</TD></TR>'
            s += '</TABLE></TD></TR></TABLE>';

            document.getElementById("tooltip").innerHTML = s;
            tt_Style.width = "150px";

            if (tt_Style.visibility != "visible") {
                if (navName == 'IE')
                    tt_Style.left = tt_X + tt_OffsetX - 4 + 'px';
                else
                    tt_Style.left = tt_X + tt_OffsetX - 10 + 'px';
                tt_Style.top = tt_Y + tt_OffsetY + 'px';
                tt_Style.visibility = "visible";
            }
        }

        function tipT(title, su) {
            if (su.length == 0) return;
            var CHS = new Array(); // cát hung sự
            CHS = countTag(CHS, su);
            su = title + tag2Str(CHS, '*');
            var s = '<TABLE WIDTH="260" BORDER=1 CELLPADDING=0 CELLSPACING=0 BGCOLOR="#000066" ' +
                'style="filter:Alpha(opacity=80)"><TR><TD>' +
                '<TABLE WIDTH=100% BORDER=0 CELLPADDING=0 CELLSPACING=0 CLASS=XEM0>' +
                '<TR><TD ALIGN=CENTER>' + su + '</TD></TR>' +
                '</TABLE></TD></TR></TABLE>';
            document.getElementById("tooltip").innerHTML = s;
            if (tt_Style) {
                tt_Style.width = "270px";

                if (tt_Style.visibility != "visible") {
                    var width = tt_Style.width;
                    var w = parseInt(width.substring(0, width.indexOf('px')));
                    tt_Style.left = tt_X + tt_OffsetX - (w / 2);
                    tt_Style.top = tt_Y + tt_OffsetY;
                    tt_Style.visibility = "visible";
                }
            }
        }

        function tipN1(i) {
            if (tt_type == 0) return;
            if (i) {
                var name = iCatNhatTu(i);
                tipT('<font color=green>Nghi</font>: ', iCatNhat3(name));
            }
        }

        function tipN2(i) {
            if (tt_type == 0) return;
            if (i) {
                var name = iHungNhatTu(i);
                tipT('<font color=red>Kị</font>: ', iHungNhat3(name));
            }
        }

        function tipT1(i) {
            if (tt_type == 0) return;
            var su = ''
            if (i) {
                var name = iCatThoiTu(i);
                su = iCatThoi3(name);
            } else
                su = 'giải hung thần';

            tipT('<font color=green>Nghi</font>: ', su);
        }

        function tipT2(i) {
            if (tt_type == 0) return;
            if (i) {
                var name = iHungThoiTu(i);
                tipT('<font color=red>Kị</font>: ', iHungThoi3(name));
            }
        }

        // Nạp Âm
        function tipNA(na) {
            if (tt_type == 0) return;
            var na5h = napAm5Hanh[na] + '<br>(' + napAmNghiaVi(na) + ')';
            tipT('<font color=green>Nạp âm ngũ hành</font>: ', na5h);
        }

        // Mouse event
        function mEvnt(event) {
            if (navName == 'IE') {
                tt_X = event.x;
                tt_Y = event.y;
            } else {
                tt_X = event.clientX;
                tt_Y = event.clientY;
            }

            if (document.body.scrollLeft) tt_X += document.body.scrollLeft;
            if (document.documentElement.scrollTop) tt_Y += document.documentElement.scrollTop;

            if (tt_Style && tt_Style.visibility == "visible") {
                if (tt_Style.width != "290px") {
                    if (tt_X > (document.body.clientWidth / 2)) {
                        tt_Style.left = tt_X + tt_OffsetX - 260 + ((navName == 'IE') ? 0 : -6) + 'px';
                    } else {
                        tt_Style.left = tt_X + tt_OffsetX + ((navName == 'IE') ? 0 : -4) + 'px';
                    }
                } else {
                    var width = tt_Style.width;
                    var w = parseInt(width.substring(0, width.indexOf('px')));
                    tt_Style.left = tt_X + tt_OffsetX - (w / 2) + 'px';
                }
                tt_Style.top = tt_Y + tt_OffsetY + 'px';
            }
        }

        // handle all control buttons
        function change(a) {
            var d = i_day;
            var m = i_mon;
            var y = i_year;
            var n = 0;
            switch (a) {
                case 0:
                    d = today.getDate();
                    m = today.getMonth() + 1;
                    y = today.getFullYear();
                    break;
                case 1:
                    if (d > 1) d--;
                    else if (m > 1) {
                        m--;
                        d = getDays(m - 1, y);
                    } else if (m == 1 && y > 1901) {
                        m = 12, y--;
                        d = getDays(m - 1, y);
                    }
                    break;
                case 2:
                    n = getDays(m - 1, y);
                    if (d < n) d++;
                    else if (d == n && m < 12) {
                        d = 1;
                        m++
                    } else if (d == n && m == 12 && y < 2100) {
                        d = 1;
                        m = 1;
                        y++;
                    }
                    break;
                case 3:
                    if (m > 1) m--;
                    else if (y > 1901) {
                        m = 12;
                        y--;
                    }
                    break;
                case 4:
                    if (m < 12) m++;
                    else if (y < 2100) {
                        m = 1;
                        y++;
                    }
                    break;
                case 5:
                    if (y > 1901) y--;
                    break;
                case 6:
                    if (y < 2100) y++;
                    break;
            }
            var sDate = (d ? d : today.getDate()) + '/' + m + '/' + y;
            window.location = fileName + '?' + sDate;
        }

        // Phi Tinh Lưu Niên
        function LuuNien(year) {
            var t = Math.floor(eval(year) % 9);
            if (t > 1)
                t = 11 - t;
            else
                t = 2 - t;
            return t;
        }

        $(document).ready(function() {
            init();
        })
    </SCRIPT>

    <center>
        <input type="hidden" name="ret">
        <TABLE cellpadding="0" cellspacing="0" border="0">

            <TR>
                <!-- The main calendar control -->
                <TD ALIGN=CENTER>
                    <TABLE ID="calendar" border=1 cellpadding=1 cellspacing=0>
                        <THEAD>
                            <TR>
                                <TD COLSPAN=7 ALIGN=CENTER class=calbase>
                                    <TABLE ID="calendar" class="calendar-inside" border=0 cellpadding=0 cellspacing=0>
                                        <TR>
                                            <TD>
                                                <SELECT ID="month" ONCHANGE="getCalendar()">
                                                    <SCRIPT LANGUAGE="JavaScript">
                                                        var mm;
                                                        if (i_day == 0 || i_mon == 0 || i_year == 0) mm = today.getMonth();
                                                        else mm = i_mon - 1;
                                                        for (var iLoop = 0; iLoop < 12; iLoop++)
                                                            document.write("<OPTION VALUE=" + (iLoop + 1) + " " + (iLoop == mm ? "Selected" : "") + ">" + "Tháng " + (iLoop + 1));
                                                    </SCRIPT>
                                                </SELECT>
                                            </TD>
                                            <TD>
                                                <SELECT ID="year" ONCHANGE="getCalendar()">
                                                    <SCRIPT LANGUAGE="JavaScript">
                                                        var yy;
                                                        if (i_day == 0 || i_mon == 0 || i_year == 0) yy = today.getFullYear();
                                                        else yy = i_year;
                                                        for (var iLoop = 1900; iLoop <= 2100; iLoop++)
                                                            document.write("<OPTION VALUE=" + iLoop + " " + (iLoop == yy ? "Selected" : "") + ">" + iLoop);
                                                    </SCRIPT>
                                                </SELECT>
                                            </TD>
                                        </TR>
                                        <TR>
                                            <!-- The control panel -->
                                            <TD ALIGN=center><a href=javascript:change(3) class=butn>
                                                    << </a>&nbsp; <a href=javascript:change(1) class=butn>
                                                        < </a>&nbsp; <a href=javascript:change(0) class=butn>*
                                                </a>&nbsp;
                                                <a href=javascript:change(2) class=butn>></a>&nbsp;
                                                <a href=javascript:change(4) class=butn>>></a>
                                            </TD>
                                            <TD ALIGN=center><a href=javascript:change(5) class=butn>
                                                    << </a>&nbsp; <a href=javascript:change(6) class=butn>>>
                                                </a>
                                            </TD>
                                        </TR>
                                    </TABLE>
                                </TD>
                            </TR>
                            <TR CLASS="days">
                                <SCRIPT LANGUAGE="JavaScript">
                                    var days = new Array("CN", "T2", "T3", "T4", "T5", "T6", "T7");
                                    document.write("<TD class=sunday align=center>" + days[0] + "</TD>");
                                    for (var iLoop = 1; iLoop < days.length - 1; iLoop++)
                                        document.write("<TD class=weekday align=center>" + days[iLoop] + "</TD>");
                                    document.write("<TD class=satday align=center>" + days[iLoop] + "</TD>");
                                </SCRIPT>
                            </TR>
                        </THEAD>

                        <TBODY border=1 cellspacing=0 cellpadding=0 ID="dayList" ALIGN=CENTER>
                            <SCRIPT LANGUAGE="JavaScript">
                                var mm;
                                var yy;
                                if (i_day == 0 || i_mon == 0 || i_year == 0) mm = today.getMonth();
                                else mm = i_mon - 1;
                                if (i_day == 0 || i_mon == 0 || i_year == 0) yy = today.getFullYear();
                                else yy = i_year;
                                var calObj = new Date(yy, mm, 1);
                                var startDay = calObj.getDay();
                                var dd = getDays(mm, yy);
                                var iRows = 6; // adjust to fit exactly
                                if ((startDay < 5) || (startDay == 5 && dd < 31)) iRows--;
                                if (startDay == 0 && dd == 28) iRows--;
                                for (var iWeeks = 0; iWeeks < iRows; iWeeks++) {
                                    document.write("<TR>");
                                    for (var iDays = 0; iDays < days.length; iDays++)
                                        document.write("<TD></TD>");
                                    document.write("</TR>");
                                }
                            </SCRIPT>
                        </TBODY>
                    </TABLE>

                </TD>
            </TR>

        </TABLE>

        <br>

        <TABLE ID="calday" border="1" cellpadding=1 cellspacing=0>
            <THEAD>
                <SCRIPT LANGUAGE="JavaScript">
                    lunar = new AmLich(i_day, i_mon, i_year);
                    var cY = CanChi(lunar.year - 1900 + 36);
                    var nY = CanChiNapAm(cY);
                    var cM = CanChi((i_year - 1900) * 12 + (i_mon - 1) + 12);
                    if (i_day >= lunar.t) cM = CanChi((i_year - 1900) * 12 + (i_mon - 1) + 13);
                    var nM = CanChiNapAm(cM);
                    var cD = CanChi(lunar.days);
                    var nD = CanChiNapAm(cD);
                    var thang = lunar.month + ' ' + (lunar.full ? 'đủ' : 'thiếu');
                    var s = '';
                    s = '<TR><TD Colspan=2><TABLE WIDTH=100% BORDER=0 CLASS=XEM1>' +
                        '<TR><TD ALIGN=CENTER COLSPAN=3><TABLE WIDTH=100% BORDER=0 CLASS=XEM1><TR>' +
                        '<TD WIDTH=50% ALIGN=CENTER>' +
                        '<I>Dương Lịch ngày</I><B>: ' + i_day + '/' + i_mon + '/' + i_year + '</B></TD>' +
                        '<TD WIDTH=50% ALIGN=CENTER><I>Âm Lịch ngày</I><B>: ' + lunar.day + '/' + lunar.month + '/' + lunar.year + '</B>' +
                        (lunar.isLeap ? ' <font color=red>nhuận</font>' : '') + '</TD></TR></TABLE></TD></TR>' +
                        '<TR><TD WIDTH=33% ALIGN=CENTER><I>Ngày</I> <B>' + cD + '</B><BR>' + nD +
                        '</TD><TD WIDTH=33% ALIGN=CENTER><I>Tháng</I> ' + thang + ' <I>kiên</I> <B>' + cM + '</B><BR>' + nM +
                        '</TD><TD WIDTH=33% ALIGN=CENTER><I>Năm</I> <B>' + cY + '</B><BR>' + nY + '</TD></TR></TABLE>' + '</TD></TR>';
                    document.write(s);
                </SCRIPT>
            </THEAD>

            <TBODY border=1 cellspacing=0 cellpadding=0 ALIGN=CENTER class=nhat>
                <SCRIPT LANGUAGE="JavaScript">
                    var iTruc = TrucKien(1, i_mon, i_year);
                    var iTinh = Tinh28Tu(i_year, i_mon);
                    var i;
                    var C_H = [0, 0, 1, 1, 0, 1, 1, 0, 1, 0, 0, 1, 0, 0, 0, 1, 0, 1, 1, 0, 0, 1, 0, 1, 1, 1, 0, 0];
                    // Luận Can Chi của ngày
                    var can = canVi(ThienCan(lunar.days));
                    var chi = chiVi(DiaChi(lunar.days));
                    var ss = 'Ngày: ' + CAN[can] + ' ' + CHI[chi]
                    cc = soCanChiVi(can, chi)
                    switch (cc) {
                        case 0:
                            ss += '<lỗi kỹ thuật!>';
                            break;
                        case 1:
                            ss += '; tức Can Chi tương đồng (' + ChiHanh[chi] + '), là ngày cát.';
                            break;
                        case 2:
                            ss += '; tức Can sinh Chi (' + CanHanh[can] + ', ' + ChiHanh[chi] + '), là ngày cát (bảo nhật).';
                            break;
                        case 3:
                            ss += '; tức Chi sinh Can (' + ChiHanh[chi] + ', ' + CanHanh[can] + '), là ngày cát (nghĩa nhật).';
                            break;
                        case 4:
                            ss += '; tức Can khắc Chi (' + CanHanh[can] + ', ' + ChiHanh[chi] + '), là ngày cát trung bình (chế nhật).';
                            break;
                        case 5:
                            ss += '; tức Chi khắc Can (' + ChiHanh[chi] + ', ' + CanHanh[can] + '), là ngày hung (phạt nhật).';
                            break;
                    }
                    var na = napAmVi(can, chi);
                    var kt = napAmKiTuoi(na);
                    var HK = napAmHanhKhac(can, chi);
                    var s = '<TR><TD><B>Ngũ hành</B></TD><TD>' + ss + '<BR><I>Nạp Âm</I>: <B>' +
                        '<a class=lnk0 href="javascript:void(0)">' + napAm5Hanh[na] + '</a></B> <I>kị tuổi</I>: '
                    var cc;
                    for (i = 0; i < kt.length; i++) {
                        cc = napAmCanChi(kt[i], CAN[can]);
                        s += '<a onMouseOver="tipNA(' + kt[i] + ')" onMouseOut="untip()" class=lnk3 href="javascript:void(0)">' + CAN[cc[0]] + " " + CHI[cc[1]] + '</a>';
                        s += ((i + 1) == kt.length ? '.<br>' : ', ');
                    }
                    s += 'Ngày thuộc hành ' + HANH[HK[0]] + ' <font color=red>khắc</font> hành ' + HANH[HK[1]] + ', đặc biệt tuổi: ';
                    var kt = napAmHop(na);
                    for (i = 0; i < kt.length; i++) {
                        cc = napAmCanChi(kt[i], CAN[can]);
                        s += '<a onMouseOver="tipNA(' + kt[i] + ')" onMouseOut="untip()" class=lnk3 href="javascript:void(0)">' + CAN[cc[0]] + " " + CHI[cc[1]] + '</a>';
                        s += ((i + 1) == kt.length ? ' ' : ', ');
                    }
                    if (i == 1) s += ' nhờ ' + HANH[HK[0]] + ' <font color=red>khắc</font> mà được lợi.'
                    else s += 'thuộc hành ' + HANH[HK[1]] + ' không sợ ' + HANH[HK[0]] + '.';

                    var KT = new Array();
                    KT.push('<font color=red><I>xung</I> ' + xungTuoi(lunar.days) + '</font>');
                    var hinh = tamHinh(lunar.days);
                    if (hinh != -1) KT.push('<I>hình</I> ' + CHI[hinh]);
                    var hinh6 = lucHinh(lunar.days);
                    if (hinh6 != -1 && hinh != hinh6) KT.push('<I>hình</I> ' + CHI[hinh6]);
                    KT.push('<I>hại</I> ' + lucHai(lunar.days));
                    var pha = tuongPha(lunar.days);
                    if (pha != -1) KT.push('<I>phá</I> ' + CHI[pha]);
                    KT.push('<I>tuyệt</I> ' + tuTuyet(lunar.days));
                    var h3 = chi3HopVi(chi);
                    s += '<BR>Ngày ' + CHI[chi] + ' <I>lục hợp</I> ' + CHI[chiViHop(chi)] +
                        ', <I>tam hợp</I> ' + CHI[h3[0]] + ' <I>và</I> ' + CHI[h3[1]] + ' <I>thành</I> ' + HANH[h3[2]] + ' cục; '
                    for (i = 0; i < KT.length; i++) // Kị tuổi
                        s += KT[i] + ((i + 1) < KT.length ? ', ' : '. ');

                    var s3 = tamSatMenh(lunar.days); // Tam Sát mệnh
                    if (s3.length) {
                        s += ' <font color=red>Tam Sát kị mệnh tuổi ';
                        for (i = 0; i < 3; i++) s += CHI[s3[i]] + ((i + 1) == 3 ? '.' : ', ');
                        s += '</font>'
                    }

                    s += '</TD></TR>';
                    document.write(s);
                    i = i_day - 1;
                    var nghiKiSu = iTrucNghiKi(TRUC12[iTruc[i]]);
                    s = '<TR><TD><B>Trực/Tú</B></TD><TD>Ngày có <I>Trực</I>: <B><a class=lnk0 href="javascript:void(0)">' + TRUC12[iTruc[i]] + '</a>' +
                        '</B> và <I>Sao</I>: <B><a class=lnk0 href="javascript:void(0)">' + TINH28[iTinh[i]] + '</a>' +
                        '</B> (' + (C_H[iTinh[i]] ? 'cát' : 'hung') + ') trong bộ Nhị Thập Bát Tú.</TD></TR>';
                    document.write(s);
                    var tiet = TietKhi(i_year, (i_mon - 1) * 2);
                    var khi = TietKhi(i_year, (i_mon - 1) * 2 + 1); // tiết khí
                    var itiet = i_mon - 1;
                    s = '<TR><TD><B>Tiết khí</B></TD><TD><I>Tiết</I> <B>' + TIET[itiet * 2] +
                        '</B> <I>khởi ngày</I> <B>' + tiet + '/' + i_mon + '/' + i_year + '</B>';
                    s += '; <I>Tiết khí</I> <B>' + TIET[itiet * 2 + 1] +
                        '</B> <I>khởi ngày</I> <B>' + khi + '/' + i_mon + '/' + i_year + '</B>';
                    s += '</TD></TR>';
                    document.write(s);
                    var x = "&nbsp;"
                    for (i in solarFest) {
                        if (solarFest[i].match(/^(\d{2})(.{2})([\s\*])(.+)$/)) {
                            if (lunar.sMonth == eval(RegExp.$1) && lunar.sDay == eval(RegExp.$2)) x = RegExp.$4;
                        }
                    }
                    for (i in lunarFest) {
                        if (lunarFest[i].match(/^(\d{2})(.{2})([\s\*])(.+)$/)) {
                            if (lunar.day == eval(RegExp.$1) && lunar.month == eval(RegExp.$2)) x = RegExp.$4;
                        }
                    }
                    s = '<TR><TD><B>Lễ/Tết</B></TD><TD><FONT COLOR=RED>' + x + '</FONT></TD></TR>';
                    document.write(s);
                    x = "&nbsp;"
                    //var CS = new Array(); // cát sự
                    var C2 = new Array(); // cát sự
                    //var HS = new Array(); // hung sự
                    var H2 = new Array(); // hung sự
                    var than = thuCatThan(lunar, iTruc[i_day - 1]);
                    if (than.length) {
                        than.sort();
                        x = '';
                        for (i = 0; i < than.length; i++) {
                            if (iCatNhat2(than[i]) == '*')
                                x += LC1(than[i]) + ((i + 1) < than.length ? ', ' : '.');
                            else
                                x += LC2(than[i]) + ((i + 1) < than.length ? ', ' : '.');
                            var c_su = iCatNhat3(than[i]);
                            if (c_su.length) {
                                //CS = storeIt(CS, c_su);
                                C2 = countTag(C2, c_su);
                            }
                        }
                        for (i = 0; i < than.length; i++) than.pop();
                        delete than[0];
                        delete than;
                    }
                    var c_than = '<TR><TD><B>Cát thần</B></TD><TD>' + x + '</FONT></TD></TR>';
                    var nghiSu = '';
                    var kiSu = '';
                    if (nghiKiSu != '') {
                        if (nghiKiSu.match(/^(.+)(\;\s)(.+)$/)) {
                            nghiSu = (RegExp.$1);
                            kiSu = (RegExp.$3);
                        }
                    }
                    if (nghiSu.length) {
                        //CS = storeIt(CS, nghiSu);
                        C2 = countTag(C2, nghiSu);
                    }

                    x = "&nbsp;"
                    than = thuHungThan(lunar, iTruc[i_day - 1]);
                    if (than.length) {
                        than.sort();
                        x = '';
                        for (i = 0; i < than.length; i++) {
                            if (iHungNhat2(than[i]) == '*')
                                x += LH1(than[i]) + ((i + 1) < than.length ? ', ' : '.');
                            else
                                x += LH2(than[i]) + ((i + 1) < than.length ? ', ' : '.');
                            var h_su = iHungNhat3(than[i]);
                            if (h_su.length) {
                                //HS = storeIt(HS, h_su);
                                H2 = countTag(H2, h_su);
                            }
                        }
                        for (i = 0; i < than.length; i++) than.pop();
                        delete than[0];
                        delete than;
                    }
                    var h_than = '<TR><TD><B>Hung thần</B></TD><TD><FONT COLOR=BROWN>' + x + '</FONT></TD></TR>';

                    if (kiSu.length) {
                        //HS = storeIt(HS, kiSu);
                        H2 = countTag(H2, kiSu);
                    }

                    compareTag(C2, H2);

                    document.write(c_than);
                    nghiSu = ''
                    nghiSu = tag2Str(C2, 'bách sự nghi dụng');
                    if (nghiSu != '') {
                        //var su=exp_sort(nghiSu);
                        s = '<TR><TD><B>Nghi</B></TD><TD><FONT COLOR=#003399>' + nghiSu + '</FONT></TD></TR>';
                        document.write(s);
                    }
                    document.write(h_than);
                    kiSu = ''
                    kiSu = tag2Str(H2, 'bách sự bất nghi');
                    if (kiSu != '') {
                        //su=exp_sort(kiSu);
                        s = '<TR><TD><B>Kị</B></TD><TD><FONT COLOR=#AA22CC>' + kiSu + '</FONT></TD></TR>';
                        document.write(s);
                    }
                    var banhto = iBanhToCan(CAN[can]) + '<br>' + iBanhToChi(CHI[chi]);
                    s = '<TR><TD><B>Bành Tổ Bách Kị Nhật</B></TD><TD><FONT COLOR=BROWN>' + banhto + '</FONT></TD></TR>';
                    document.write(s);

                    /*
                      compareTag(C2, H2);
                      for (i = 0; i < C2.length; i++) {
                        //if (C2[i].count > 1) alert('C: '+C2[i].name+' C='+C2[i].count)
                        alert('C: '+C2[i].name+' C='+C2[i].count)
                      }
                      for (i = 0; i < H2.length; i++) {
                        //if (H2[i].count > 1) alert('H: '+H2[i].name+' C='+H2[i].count)
                        alert('H: '+H2[i].name+' C='+H2[i].count)
                      }
                    */
                </SCRIPT>
            </TBODY>
        </TABLE>

        <br>
        <table align=center border=1 cellPadding=1 cellSpacing=0 class=thoi>
            <caption>
                <!-- Table Title -->
                <font color=blue face=Arial size=4>Giờ Tốt và Xấu Trong Ngày</font><br>
                <font color=blue face=Arial size=2>Thời <font color=green><B>Hoàng Đạo</B></font> và <font color=brown><B>Hắc
                            Đạo</B></font> phân biệt thời tinh khởi bằng 1 trong 2 màu này</font>
            </caption>
            <tr align=center>
                <td bgcolor=#DDFFDD width=45 align=center><I>Giờ</I></td>
                <td bgcolor=#DDFFDD><I>Can Chi</I></td>
                <td bgcolor=#DDFFDD colspan=2><I>Cát Hung Thần</I></td>
                <td bgcolor=#DDFFDD><I>Kết quả</I></td>
            </tr>
            <tr align=center>
                <td rowspan=3>23-1</td>
                <td rowspan=3 style='cursor:pointer' onMouseOver="mOvr2(event,0)" onMouseOut="untip()">
                    <font id=cc01>xx xx</font>
                </td>
                <td>
                    <font color=blue>Tinh</font>
                </td>
                <td>
                    <font id=tt01>xx xx</font>
                </td>
                <td rowspan=3>
                    <font id=kq01>xx xx</font>
                </td>
            </tr>
            <tr align=center>
                <td>
                    <font color=green>Nghi</font>
                </td>
                <td>
                    <font id=tn01>xx xx</font>
                </td>
            </tr>
            <tr align=center>
                <td>
                    <font color=red>Kị</font>
                </td>
                <td>
                    <font id=tk01>xx xx</font>
                </td>
            </tr>

            <tr align=center>
                <td rowspan=3>1-3</td>
                <td rowspan=3 style='cursor:pointer' onMouseOver="mOvr2(event,1)" onMouseOut="untip()">
                    <font id=cc02>xx xx</font>
                </td>
                <td>
                    <font color=blue>Tinh</font>
                </td>
                <td>
                    <font id=tt02>xx xx</font>
                </td>
                <td rowspan=3>
                    <font id=kq02>xx xx</font>
                </td>
            </tr>
            <tr align=center>
                <td>
                    <font color=green>Nghi</font>
                </td>
                <td>
                    <font id=tn02>xx xx</font>
                </td>
            </tr>
            <tr align=center>
                <td>
                    <font color=red>Kị</font>
                </td>
                <td>
                    <font id=tk02>xx xx</font>
                </td>
            </tr>

            <tr align=center>
                <td rowspan=3>3-5</td>
                <td rowspan=3 style='cursor:pointer' onMouseOver="mOvr2(event,2)" onMouseOut="untip()">
                    <font id=cc03>xx xx</font>
                </td>
                <td>
                    <font color=blue>Tinh</font>
                </td>
                <td>
                    <font id=tt03>xx xx</font>
                </td>
                <td rowspan=3>
                    <font id=kq03>xx xx</font>
                </td>
            </tr>
            <tr align=center>
                <td>
                    <font color=green>Nghi</font>
                </td>
                <td>
                    <font id=tn03>xx xx</font>
                </td>
            </tr>
            <tr align=center>
                <td>
                    <font color=red>Kị</font>
                </td>
                <td>
                    <font id=tk03>xx xx</font>
                </td>
            </tr>

            <tr align=center>
                <td rowspan=3>5-7</td>
                <td rowspan=3 style='cursor:pointer' onMouseOver="mOvr2(event,3)" onMouseOut="untip()">
                    <font id=cc04>xx xx</font>
                </td>
                <td>
                    <font color=blue>Tinh</font>
                </td>
                <td>
                    <font id=tt04>xx xx</font>
                </td>
                <td rowspan=3>
                    <font id=kq04>xx xx</font>
                </td>
            </tr>
            <tr align=center>
                <td>
                    <font color=green>Nghi</font>
                </td>
                <td>
                    <font id=tn04>xx xx</font>
                </td>
            </tr>
            <tr align=center>
                <td>
                    <font color=red>Kị</font>
                </td>
                <td>
                    <font id=tk04>xx xx</font>
                </td>
            </tr>

            <tr align=center>
                <td rowspan=3>7-9</td>
                <td rowspan=3 style='cursor:pointer' onMouseOver="mOvr2(event,4)" onMouseOut="untip()">
                    <font id=cc05>xx xx</font>
                </td>
                <td>
                    <font color=blue>Tinh</font>
                </td>
                <td>
                    <font id=tt05>xx xx</font>
                </td>
                <td rowspan=3>
                    <font id=kq05>xx xx</font>
                </td>
            </tr>
            <tr align=center>
                <td>
                    <font color=green>Nghi</font>
                </td>
                <td>
                    <font id=tn05>xx xx</font>
                </td>
            </tr>
            <tr align=center>
                <td>
                    <font color=red>Kị</font>
                </td>
                <td>
                    <font id=tk05>xx xx</font>
                </td>
            </tr>

            <tr align=center>
                <td rowspan=3>9-11</td>
                <td rowspan=3 style='cursor:pointer' onMouseOver="mOvr2(event,5)" onMouseOut="untip()">
                    <font id=cc06>xx xx</font>
                </td>
                <td>
                    <font color=blue>Tinh</font>
                </td>
                <td>
                    <font id=tt06>xx xx</font>
                </td>
                <td rowspan=3>
                    <font id=kq06>xx xx</font>
                </td>
            </tr>
            <tr align=center>
                <td>
                    <font color=green>Nghi</font>
                </td>
                <td>
                    <font id=tn06>xx xx</font>
                </td>
            </tr>
            <tr align=center>
                <td>
                    <font color=red>Kị</font>
                </td>
                <td>
                    <font id=tk06>xx xx</font>
                </td>
            </tr>

            <tr align=center>
                <td rowspan=3>11-13</td>
                <td rowspan=3 style='cursor:pointer' onMouseOver="mOvr2(event,6)" onMouseOut="untip()">
                    <font id=cc07>xx xx</font>
                </td>
                <td>
                    <font color=blue>Tinh</font>
                </td>
                <td>
                    <font id=tt07>xx xx</font>
                </td>
                <td rowspan=3>
                    <font id=kq07>xx xx</font>
                </td>
            </tr>
            <tr align=center>
                <td>
                    <font color=green>Nghi</font>
                </td>
                <td>
                    <font id=tn07>xx xx</font>
                </td>
            </tr>
            <tr align=center>
                <td>
                    <font color=red>Kị</font>
                </td>
                <td>
                    <font id=tk07>xx xx</font>
                </td>
            </tr>

            <tr align=center>
                <td rowspan=3>13-15</td>
                <td rowspan=3 style='cursor:pointer' onMouseOver="mOvr2(event,7)" onMouseOut="untip()">
                    <font id=cc08>xx xx</font>
                </td>
                <td>
                    <font color=blue>Tinh</font>
                </td>
                <td>
                    <font id=tt08>xx xx</font>
                </td>
                <td rowspan=3>
                    <font id=kq08>xx xx</font>
                </td>
            </tr>
            <tr align=center>
                <td>
                    <font color=green>Nghi</font>
                </td>
                <td>
                    <font id=tn08>xx xx</font>
                </td>
            </tr>
            <tr align=center>
                <td>
                    <font color=red>Kị</font>
                </td>
                <td>
                    <font id=tk08>xx xx</font>
                </td>
            </tr>

            <tr align=center>
                <td rowspan=3>15-17</td>
                <td rowspan=3 style='cursor:pointer' onMouseOver="mOvr2(event,8)" onMouseOut="untip()">
                    <font id=cc09>xx xx</font>
                </td>
                <td>
                    <font color=blue>Tinh</font>
                </td>
                <td>
                    <font id=tt09>xx xx</font>
                </td>
                <td rowspan=3>
                    <font id=kq09>xx xx</font>
                </td>
            </tr>
            <tr align=center>
                <td>
                    <font color=green>Nghi</font>
                </td>
                <td>
                    <font id=tn09>xx xx</font>
                </td>
            </tr>
            <tr align=center>
                <td>
                    <font color=red>Kị</font>
                </td>
                <td>
                    <font id=tk09>xx xx</font>
                </td>
            </tr>

            <tr align=center>
                <td rowspan=3>17-19</td>
                <td rowspan=3 style='cursor:pointer' onMouseOver="mOvr2(event,9)" onMouseOut="untip()">
                    <font id=cc10>xx xx</font>
                </td>
                <td>
                    <font color=blue>Tinh</font>
                </td>
                <td>
                    <font id=tt10>xx xx</font>
                </td>
                <td rowspan=3>
                    <font id=kq10>xx xx</font>
                </td>
            </tr>
            <tr align=center>
                <td>
                    <font color=green>Nghi</font>
                </td>
                <td>
                    <font id=tn10>xx xx</font>
                </td>
            </tr>
            <tr align=center>
                <td>
                    <font color=red>Kị</font>
                </td>
                <td>
                    <font id=tk10>xx xx</font>
                </td>
            </tr>

            <tr align=center>
                <td rowspan=3>19-21</td>
                <td rowspan=3 style='cursor:pointer' onMouseOver="mOvr2(event,10)" onMouseOut="untip()">
                    <font id=cc11>xx xx</font>
                </td>
                <td>
                    <font color=blue>Tinh</font>
                </td>
                <td>
                    <font id=tt11>xx xx</font>
                </td>
                <td rowspan=3>
                    <font id=kq11>xx xx</font>
                </td>
            </tr>
            <tr align=center>
                <td>
                    <font color=green>Nghi</font>
                </td>
                <td>
                    <font id=tn11>xx xx</font>
                </td>
            </tr>
            <tr align=center>
                <td>
                    <font color=red>Kị</font>
                </td>
                <td>
                    <font id=tk11>xx xx</font>
                </td>
            </tr>

            <tr align=center>
                <td rowspan=3>21-23</td>
                <td rowspan=3 style='cursor:pointer' onMouseOver="mOvr2(event,11)" onMouseOut="untip()">
                    <font id=cc12>xx xx</font>
                </td>
                <td>
                    <font color=blue>Tinh</font>
                </td>
                <td>
                    <font id=tt12>xx xx</font>
                </td>
                <td rowspan=3>
                    <font id=kq12>xx xx</font>
                </td>
            </tr>
            <tr align=center>
                <td>
                    <font color=green>Nghi</font>
                </td>
                <td>
                    <font id=tn12>xx xx</font>
                </td>
            </tr>
            <tr align=center>
                <td>
                    <font color=red>Kị</font>
                </td>
                <td>
                    <font id=tk12>xx xx</font>
                </td>
            </tr>
        </table>

        <br>
        <table align=center border=1 cellPadding=3 cellSpacing=0 class=sonhuong>
            <caption>
                <!-- Table Title -->
                <font color=blue face=Arial size=4>Khai Sơn Lập Hướng</font>
            </caption>
            <SCRIPT LANGUAGE="JavaScript">
                // An theo Hậu Thiên Bát Quái
                var PHUONG = new Array("Trung Cung", "Khảm (Bắc)", "Khôn (Tây Nam)", "Chấn (Đông)", "Tốn (Đông Nam)", "Trung ương", "Kiền (Tây Bắc)", "Đoài (Tây)", "Cấn (Đông Bắc)", "Ly (Nam)");
                var c = LuuNien(lunar.year); // Phi Tinh Lưu Niên
                var n = (lunar.year - 1900 + 36) % 12; // Chi Vị của năm
                var i;
                // Ngũ Hoàng
                if (c == 5) i = 0; // Trung cung
                else i = 10 - c;
                var Tiet = layTiet(lunar.sYear, lunar.sMonth, lunar.sDay);
                var N3 = tamSatLuuNien(TueChiVi(lunar.year));
                var n3 = tamSatPhuong(Tiet);
                var N5 = PHUONG[i] + '.</FONT> Nghi tĩnh.' + (i ? ' <FONT COLOR=BROWN>Bất nghi tu phương, lập hướng.</FONT>' : '');
                var Sat = ''
                Sat += ' <FONT COLOR=RED>' + PHUONG[N3[0]] + '</FONT> tức <FONT COLOR=RED>' + CHI[N3[1]] + ', ' + CHI[N3[2]] + ', ' + CHI[N3[3]] + '</FONT>; '
                Sat += ' Lưu Nguyệt tại cung <FONT COLOR=RED>' + PHUONG[n3[0]] + '</FONT> tức <FONT COLOR=RED>' + CHI[n3[1]] + ', ' + CHI[n3[2]] + ', ' + CHI[n3[3]] + '</FONT>. <FONT COLOR=BROWN>Kị động thổ hoặc tu tạo.</FONT>'
                Sat += '<ul>Tam Sát từ trái sang phải phân ra 3 cung:'
                Sat += '<li>Kiếp Sát: phạm nhằm chủ bị ăn cướp, mất cắp; hoặc gặp sự bị thương đau;'
                Sat += '<li>Tai Sát: phạm nhằm chủ có bệnh hoạn;'
                Sat += '<li>Tuế Sát: phạm nhằm con cháu trong nhà hay bị thương tật. Ngay cả súc vật cũng ảnh hưởng.</ul'

                var s = '<TR><TD rowspan=4><B>Sát<br>Phương<br>Năm ' + CHI[n] + '</B></TD>'
                s += '<TD>1</TD><TD width=80>Ngũ hoàng</TD><TD>Lưu niên tại cung <FONT COLOR=RED>' + N5 + '</TD></TR>';
                s += '<TR><TD>2</TD><TD>Tam Sát</TD><TD>Lưu niên tại cung ' + Sat + '</TD></TR>';
                document.write(s);
                // Tuế Phá
                i = n + 6;
                if (i > 11) i -= 12;
                Sat = '</font>. Phương ' + CHI[i] + ' là tọa bất khả hưng tạo. Phạm nhằm chủ tổn tài, sự vật hại trạch trường.'
                Sat += ' Tuy nhiên, tọa ' + CHI[n] + ' hướng ' + CHI[i] + ' thì lại cát.'
                s = '<TR><TD>3</TD><TD>Tuế Phá</TD><TD>Thái Tuế tại cung ' + CHI[n] + ' và cung xung là Tuế Phá tại cung <font color=red>' + CHI[i] + Sat + '</TD></TR>';
                document.write(s);
                var LS
                switch (n) {
                    case 0:
                    case 1:
                    case 11:
                        LS = 'Cấn (Đông Bắc)';
                        break;
                    case 2:
                    case 3:
                    case 4:
                        LS = 'Tốn (Đông Nam)';
                        break;
                    case 5:
                    case 6:
                    case 7:
                        LS = 'Khôn (Tây Nam)';
                        break;
                    case 8:
                    case 9:
                    case 10:
                        LS = 'Kiền (Tây Bắc)';
                        break;
                }
                Sat = '</FONT>. Cung này bất nghi hưng tạo trong năm ' + CHI[n] + '. Phạm nhằm chủ sinh ra nhiều chứng ôn tật.'
                s = '<TR><TD>4</TD><TD>Lực Sĩ</TD><TD>Thiên tử hộ vệ ngự lâm quân tại cung <font color=red>' + LS + Sat + '</TD></TR>';
                document.write(s);
                s = '<TR><TD rowspan=3><B>Hung Thần</B></TD>'
                s += '<TD>5</TD><TD>Tuế Hình</TD><TD>Năm ' + CHI[n] + ' tại cung <FONT COLOR=RED>' + CHI[chiViTamHinh(n)] + '.</FONT></TD></TR>';
                document.write(s);
                switch (c) {
                    case 1:
                        i = 6;
                        break;
                    case 2:
                        i = 0;
                        break;
                    case 3:
                        i = 4;
                        break;
                    case 4:
                        i = 3;
                        break;
                    case 5:
                        i = 2;
                        break;
                    case 6:
                        i = 1;
                        break;
                    case 7:
                        i = 9;
                        break;
                    case 8:
                        i = 8;
                        break;
                    case 9:
                        i = 7;
                        break;
                }
                s = '<TD>6</TD><TD>Nhị Hắc</TD><TD>Năm ' + CHI[n] + ' tại cung <FONT COLOR=RED>' + PHUONG[i] + '.</FONT></TD></TR>';
                document.write(s);
                i = n - 1;
                if (i < 0) i += 12;
                s = '<TD>7</TD><TD>Bệnh Phù</TD><TD>Năm ' + CHI[n] + ' tại cung <FONT COLOR=RED>' + CHI[i] + '.</FONT></TD></TR>';
                document.write(s);
            </SCRIPT>
        </table>

        <br>

    </center>

    <Script Language="JavaScript">
        function Cancel() {
            document.all.ret.value = "";
            window.close();
        }

        makeCalendar();
        layGio();
        // handle event
        if (tt_Style) {
            tt_Style.visibility = "hidden";
        }
    </script>
</section>
@endsection
