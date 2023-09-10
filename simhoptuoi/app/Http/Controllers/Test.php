<?php

namespace App\Http\Controllers;

use App\Services\FunctionCommonService;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;

class Test extends Controller
{
    protected $functionCommonService;

    public function __construct(FunctionCommonService $functionCommonService)
    {
        $this->functionCommonService = $functionCommonService;
    }

    function getThongTinPhongThuyBangSdt(Request $request)
    {

        $sdt = $request->get('sdt') ?? '0393444030';

        $data = $this->functionCommonService->getThongTinPhongThuyBangSdt($sdt);

        dd($data);
    }

    function getListSimData(Request $request)
    {

        $data = $this->functionCommonService->getListSimData();

        dd($data);
    }

    function getDetailSimData(Request $request)
    {

        $sdt = $request->get('sdt') ?? '0944.394.194';

        $data = $this->functionCommonService->getDetailSimData($sdt);

        dd($data);
    }



    function test(Request $request)
    {
        $time1 = ['Giáp', 'Ất', 'Bính', 'Đinh', 'Mậu', 'Kỷ', 'Canh', 'Tân', 'Nhâm', 'Quý'];
        $time2 = ['Tý', 'Sửu', 'Dần', 'Mão', 'Thìn', 'Tỵ', 'Ngọ', 'Mùi', 'Thân', 'Dậu', 'Tuất', 'Hợi'];
        $time3 = [
            '23-1' => 'Tý',
            '1-3' => 'Sửu',
            '3-5' => 'Dần',
            '5-7' => 'Mão',
            '7-9' => 'Thìn',
            '9-11' => 'Tỵ',
            '11-13' => 'Ngọ',
            '13-15' => 'Mùi',
            '15-17' => 'Thân',
            '17-19' => 'Dậu',
            '19-21' => 'Tuất',
            '21-23' => 'Hợi',
        ];
        $week = ['Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7', 'C.Nhật'];


        $gio = '3';
        $phut = '32';
        $ngay = '27';
        $thang = '09';
        $nam = '1999';

        $date = Carbon::create($nam, $thang, $ngay, 0, 0, 0, 'Asia/Ho_Chi_Minh')->addDay();
        $dateStart = Carbon::create(1900, 1, 1, 0, 0, 0, 'Asia/Ho_Chi_Minh');


        $E23 = $dateStart->diffInDays($date); // số ngày từ 1/1/1900 đến ngày sinh

        $F16 = $week[(($E23-1) % 7)]; // thứ

        $G17 = $time1[((($E23*12) + intval(($gio/2) + 0.5) - 2) % 10)]; // Can giờ sinh

        $H17 = $time2[((($E23*12) + intval(($gio/2) + 0.5)) % 12)]; // Chi giờ sinh

        $C23 = $dateStart->diffInDays(clone $date->startOfMonth()->addDay());

        $F18 = null;

        dd($E23, $F16, $G17, $H17, $C23, $F18);

    }
}
