// AmLich
// Prepared by Harry Tran (a.k.a Thiên Y) in USA (email: thien.y@operamail.com)

//***************************************************************************** 
//                                   Nhật kì tư liệu 
//*****************************************************************************


var amLich = new Array(
    0x04bd8, 0x04ae0, 0x0a570, 0x054d5, 0x0d260, 0x0d950, 0x16554, 0x056a0, 0x09ad0, 0x055d2,
    0x04ae0, 0x0a5b6, 0x0a4d0, 0x0d250, 0x1d255, 0x0b540, 0x0d6a0, 0x0ada2, 0x095b0, 0x14977,
    0x04970, 0x0a4b0, 0x0b4b5, 0x06a50, 0x06d40, 0x1ab54, 0x02b60, 0x09570, 0x052f2, 0x04970,
    0x06566, 0x0d4a0, 0x0ea50, 0x06e95, 0x05ad0, 0x02b60, 0x186e3, 0x092e0, 0x1c8d7, 0x0c950,
    0x0d4a0, 0x1d8a6, 0x0b550, 0x056a0, 0x1a5b4, 0x025d0, 0x092d0, 0x0d2b2, 0x0a950, 0x0b557,
    0x06ca0, 0x0b550, 0x15355, 0x04da0, 0x0a5d0, 0x14573, 0x052b0, 0x0a9a8, 0x0e950, 0x06aa0,
    0x0aea6, 0x0ab50, 0x04b60, 0x0aae4, 0x0a570, 0x05260, 0x0f263, 0x0d950, 0x05b57, 0x056a0,
    0x096d0, 0x04dd5, 0x04ad0, 0x0a4d0, 0x0d4d4, 0x0d250, 0x0d558, 0x0b540, 0x0b5a0, 0x195a6,
    0x095b0, 0x049b0, 0x0a974, 0x0a4b0, 0x0b27a, 0x06a50, 0x06d40, 0x0af46, 0x0ab60, 0x09570,
    0x04af5, 0x04970, 0x064b0, 0x074a3, 0x0ea50, 0x06b58, 0x055c0, 0x0ab60, 0x096d5, 0x092e0,
    0x0c960, 0x0d954, 0x0d4a0, 0x0da50, 0x07552, 0x056a0, 0x0abb7, 0x025d0, 0x092d0, 0x0cab5,
    0x0a950, 0x0b4a0, 0x0baa4, 0x0ad50, 0x055d9, 0x04ba0, 0x0a5b0, 0x15176, 0x052b0, 0x0a930,
    0x07954, 0x06aa0, 0x0ad50, 0x05b52, 0x04b60, 0x0a6e6, 0x0a4e0, 0x0d260, 0x0ea65, 0x0d530,
    0x05aa0, 0x076a3, 0x096d0, 0x04bd7, 0x04ad0, 0x0a4d0, 0x1d0b6, 0x0d250, 0x0d520, 0x0dd45,
    0x0b5a0, 0x056d0, 0x055b2, 0x049b0, 0x0a577, 0x0a4b0, 0x0aa50, 0x1b255, 0x06d20, 0x0ada0,
    0x04b63, 0x0937f, 0x049f8, 0x04970, 0x064b0, 0x068a6, 0x0ea5f, 0x06b20, 0x0a6c4, 0x0aaef,
    0x092e0, 0x0d2e3, 0x0c960, 0x0d557, 0x0d4a0, 0x0da50, 0x05d55, 0x056a0, 0x0a6d0, 0x055d4,
    0x052d0, 0x0a9b8, 0x0a950, 0x0b4a0, 0x0b6a6, 0x0ad50, 0x055a0, 0x0aba4, 0x0a5b0, 0x052b0,
    0x0b273, 0x06930, 0x07337, 0x06aa0, 0x0ad50, 0x04b55, 0x04b6f, 0x0a570, 0x054e4, 0x0d260,
    0x0e968, 0x0d520, 0x0daa0, 0x06aa6, 0x056df, 0x04ae0, 0x0a9d4, 0x0a4d0, 0x0d150, 0x0f252,
    0x0d520);

//== y là năm Âm Lịch
function lunarYearDays(y) {
    var i, sum = 348;
    for (i = 0x8000; i > 0x8; i >>= 1) sum += (amLich[y - 1900] & i) ? 1 : 0;
    return (sum + leapDays(y));
}

//== y là năm Âm Lịch, trở về tháng 29 hay 30 ngày
function leapDays(y) {
    if (leapMonth(y)) return ((amLich[y - 1900] & 0x10000) ? 30 : 29);
    else return (0);
}

//== y là năm Âm Lịch
function leapMonth(y) {
    return (amLich[y - 1900] & 0xf);
}

//== y là năm Âm Lịch, m là tháng Âm Lịch
function monthDays(y, m) {
    return ((amLich[y - 1900] & (0x10000 >> m)) ? 30 : 29);
}

//== Input Solar Date Format; return Lunar Date Object
function LunarDate(day, month, year) {
    if (year < 1900) year = 1900;
    else if (year > 2100) year = 2100;
    var SolarDate = year + "/" + month + "/" + day;
    var objDate = new Date(SolarDate);
    var i, leap = 0,
        temp = 0;
    var offset = (Date.UTC(objDate.getFullYear(), objDate.getMonth(), objDate.getDate()) - Date.UTC(1900, 0, 31)) / 86400000;

    this.dd = offset + 40; // The total days in a cycle
    this.mm = 14; // The total months in a cycle

    for (i = 1900; i < 2100 && offset > 0; i++) {
        temp = lunarYearDays(i);
        offset -= temp;
        this.mm += 12;
    }

    if (offset < 0) {
        offset += temp;
        i--;
        this.mm -= 12;
    }

    this.year = i; // The total years in a cycle that starts since 1864
    this.yy = i - 1864;

    leap = leapMonth(i);
    this.isLeap = false;

    for (i = 1; i < 13 && offset > 0; i++) {
        if (leap > 0 && i == (leap + 1) && this.isLeap == false) {
            --i;
            this.isLeap = true;
            temp = leapDays(this.year);
        } else {
            temp = monthDays(this.year, i);
        }

        if (this.isLeap == true && i == (leap + 1)) this.isLeap = false;

        offset -= temp;
        if (this.isLeap == false) this.mm++;
    }

    if (offset == 0 && leap > 0 && i == leap + 1) {
        if (this.isLeap)
            this.isLeap = false;
        else {
            this.isLeap = true;
            --i;
            --this.mm;
        }
    }

    if (offset < 0) {
        offset += temp;
        --i;
        --this.mm;
    }
    this.day = offset + 1;
    this.month = i;
}

function TueCanVi(lunaryear) {
    return (lunaryear + 6) % 10;
}

function TueChiVi(lunaryear) {
    return (lunaryear + 8) % 12;
}

var CAN = new Array("Giáp", "Ất", "Bính", "Đinh", "Mậu", "Kỷ", "Canh", "Tân", "Nhâm", "Quý");
var CHI = new Array("Tý", "Sửu", "Dần", "Mão", "Thìn", "Tỵ", "Ngọ", "Mùi", "Thân", "Dậu", "Tuất", "Hợi");
// Năm Mậu Quý khởi tháng, ngày Giáp Kỷ khởi giờ
var can12 = new Array("Giáp", "Ất", "Bính", "Đinh", "Mậu", "Kỷ", "Canh", "Tân", "Nhâm", "Quý", "Giáp", "Ất");
// Năm Giáp Kỷ khởi tháng, ngày Ất Canh khởi giờ
var can24 = new Array("Bính", "Đinh", "Mậu", "Kỷ", "Canh", "Tân", "Nhâm", "Quý", "Giáp", "Ất", "Bính", "Đinh");
// Năm Ất Canh khởi tháng, ngày Bính Tân khởi giờ
var can36 = new Array("Mậu", "Kỷ", "Canh", "Tân", "Nhâm", "Quý", "Giáp", "Ất", "Bính", "Đinh", "Mậu", "Kỷ");
// Năm Bính Tân khởi tháng, ngày Đinh Nhâm khởi giờ
var can48 = new Array("Canh", "Tân", "Nhâm", "Quý", "Giáp", "Ất", "Bính", "Đinh", "Mậu", "Kỷ", "Canh", "Tân");
// Năm Đinh Nhâm khởi tháng, ngày Mậu Quý khởi giờ
var can64 = new Array("Nhâm", "Quý", "Giáp", "Ất", "Bính", "Đinh", "Mậu", "Kỷ", "Canh", "Tân", "Nhâm", "Quý");

// Lấy can giờ, nhập vào can ngày và giờ (0-11)
function ThoiCan(NhatCan, gio) {
    if (gio >= 12) gio -= 12;
    if ((NhatCan.charAt(0) == 'G') || (NhatCan.charAt(0) == 'K'))
        return can12[gio];
    else if ((NhatCan.charAt(0) == 'Ấ') || (NhatCan.charAt(0) == 'C'))
        return can24[gio];
    else if ((NhatCan.charAt(0) == 'B') || (NhatCan.charAt(0) == 'T'))
        return can36[gio];
    else if ((NhatCan.charAt(0) == 'Đ') || (NhatCan.charAt(0) == 'N'))
        return can48[gio];
    else if ((NhatCan.charAt(0) == 'M') || (NhatCan.charAt(0) == 'Q'))
        return can64[gio];
}

// Lấy can tháng, nhập vào can năm và tháng (0-11)
function NguyetCan(TueCan, thang) {
    if (thang >= 12) thang -= 12;
    if ((TueCan.charAt(0) == 'G') || (TueCan.charAt(0) == 'K'))
        return can24[thang];
    else if ((TueCan.charAt(0) == 'Ấ') || (TueCan.charAt(0) == 'C'))
        return can36[thang];
    else if ((TueCan.charAt(0) == 'B') || (TueCan.charAt(0) == 'T'))
        return can48[thang];
    else if ((TueCan.charAt(0) == 'Đ') || (TueCan.charAt(0) == 'N'))
        return can64[thang];
    else if ((TueCan.charAt(0) == 'M') || (TueCan.charAt(0) == 'Q'))
        return can12[thang];
}

function TueCan(lunaryear) {
    return CAN[TueCanVi(lunaryear)];
}

function TueChi(lunaryear) {
    return CHI[TueChiVi(lunaryear)];
}

//== Nhập tổng số ngày từ AL (al.dd), phản hồi can Giáp nếu CanVi là 0
function ThienCan(num) {
    return (CAN[num % 10]);
}

//== Nhập tổng số ngày từ AL (al.dd), phản hồi chi Tý nếu ChiVi là 0
function DiaChi(num) {
    return (CHI[num % 12]);
}

function canVi(can) {
    for (var i = 0; i < CAN.length; i++)
        if (can == CAN[i]) break;
    return i;
}

function chiVi(chi) {
    for (var i = 0; i < CHI.length; i++)
        if (chi == CHI[i]) break;
    return i;
}

var TIET = new Array(
    "Tiểu Hàn", "Đại Hàn", "Lập Xuân", "Vũ Thủy", "Kinh Trập", "Xuân Phân", "Thanh Minh", "Cốc Vũ",
    "Lập Hạ", "Tiểu Mãn", "Mang Chủng", "Hạ Chí", "Tiểu Thử", "Đại Thử", "Lập Thu", "Xử Thử",
    "Bạch Lộ", "Thu Phân", "Hàn Lộ", "Sương Giáng", "Lập Đông", "Tiểu Tuyết", "Đại Tuyết", "Đông Chí");
var TIET24 = [0, 21208, 42467, 63836, 85337, 107014, 128867, 150921, 173149, 195551, 218072, 240693, 263343, 285989, 308563, 331033, 353350, 375494, 397447, 419210, 440795, 462224, 483532, 504758];

//== y là năm, n là số thứ tự (0-23) để lấy Tiết
function TietKhi(y, n) {
    if (y < 1900) y = 1900;
    else if (y > 2100) y = 2100;
    if (n < 0) n = 0;
    else if (n > 23) n = 23;
    var offDate = new Date((31556925974.7 * (y - 1900) + TIET24[n] * 60000) + Date.UTC(1900, 0, 6, 2, 5));
    return offDate.getUTCDate();
}

// year là năm Dương Lịch
function isLeapYear(year) {
    return ((0 == (year % 4)) && ((0 != (year % 100)) || (0 == (year % 400))));
    // is it leap year ? returns a boolean
    // ie, if the year divides by 4, but not by 100 except when it divides by
    // 400, it is leap year
}

// Tổng số ngày. mon [1...12]
function TongSoNgay(year, mon) {
    var mdays = new Array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
    var nd = mdays[mon - 1];
    if (mon == 2 && isLeapYear(year)) nd++;
    return nd;
}

var TRUC12 = new Array(
    "Kiến", "Trừ", "Mãn", "Bình", "Định", "Chấp", "Phá", "Nguy", "Thành", "Thu", "Khai", "Bế");

var TINH28 = new Array(
    "Hư", "Nguy", "Thất", "Bích", "Khuê", "Lâu", "Vị", "Mão", "Tất", "Chủy", "Sâm", "Tỉnh", "Quỷ", "Liễu",
    "Tinh", "Trương", "Dực", "Chẩn", "Giác", "Cang", "Đê", "Phòng", "Tâm", "Vĩ", "Cơ", "Đẩu", "Ngưu", "Nữ");

// lấy Trực (Trực Kiến): dd/mm/yy là ngày Dương Lịch
function TrucKien(dd, mm, yy) {
    var amLich = new LunarDate(dd, mm, yy);
    var t = TietKhi(yy, (mm - 1) * 2);
    var oTiet = new LunarDate(t, mm, yy); // Tiết lệnh
    var tiet = mm - 1;
    if (tiet == 0) tiet = 12;
    var kien = (tiet + 1) % 12; // Trực "Kiến" tùy theo mỗi tiết, tháng 1 "Kiến" tại ngày Dần
    var dd = 0,
        i = 0;
    var oTruc = new Array(); // Vector: Trực trong 1 tháng DL

    var T = tiet * 2;
    if (T >= 24) T = 0;

    for (i = 0; i < CHI.length; i++) {
        dd = oTiet.dd + i;
        if (DiaChi(dd) == CHI[kien]) break;
    }
    if (i >= CHI.length) return "";

    var k, n, d = t - 1;
    for (k = 1; k < t; k++) {
        n = i + (d - k);
        if (n >= 12) n -= 12;
        oTruc.push((12 - n) % 12);
    }
    var dm = TongSoNgay(yy, mm) - d;
    for (k = 0; k < dm; k++)
        oTruc.push(((12 - i) + k) % 12);

    delete amLich;
    delete oTiet;
    return oTruc;
}

// lấy Nhị Thập Bát Tú cho nguyên tháng dự muốn
function Tinh28Tu(yy, mm) {
    var amLich = new LunarDate(1, mm, yy);
    var dm = TongSoNgay(yy, mm);
    var oTu = new Array(); // 28 Tú
    for (var i = 0; i < dm; i++)
        oTu.push(((amLich.dd + i) + 12) % 28);
    delete amLich;
    return oTu;
}

// AmLich