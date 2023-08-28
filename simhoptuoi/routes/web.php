<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.home');
});

Route::get('/sim-hop-menh-kim', function () {
    return view('layouts.menu_pages.sim_menh_kim');
});

Route::get('/sim-hop-menh-hoa', function () {
    return view('layouts.menu_pages.sim_menh_hoa');
});

Route::get('/sim-hop-menh-moc', function () {
    return view('layouts.menu_pages.sim_menh_moc');
});

Route::get('/sim-hop-menh-thuy', function () {
    return view('layouts.menu_pages.sim_menh_thuy');
});

Route::get('/sim-hop-menh-tho', function () {
    return view('layouts.menu_pages.sim_menh_tho');
});

// page nay có format khác
Route::get('/sim-so-dep', function () {
    return view('layouts.menu_pages.sim_so_dep');
});

Route::get('/sim-kich-tai-van', function () {
    return view('layouts.menu_pages.sim_tai_van');
});

Route::get('/sim-thang-quan-tien-chuc', function () {
    return view('layouts.menu_pages.sim_thang_quan');
});

Route::get('/sim-tinh-duyen-gia-dao', function () {
    return view('layouts.menu_pages.sim_tinh_duyen_gia_dao');
});

Route::get('/sim-xoa-giai-han', function () {
    return view('layouts.menu_pages.sim_xoa_giai_han');
});

// những page này chưa có
Route::get('/sim-hop-tuoi_200x', function () {
    return view('layouts.menu_pages.sim_hop_tuoi_200x');
});

Route::get('/sim-hop-tuoi_199x', function () {
    return view('layouts.menu_pages.sim_hop_tuoi_199x');
});
Route::get('/sim-hop-tuoi_198x', function () {
    return view('layouts.menu_pages.sim_hop_tuoi_198x');
});
Route::get('/sim-hop-tuoi_197x', function () {
    return view('layouts.menu_pages.sim_hop_tuoi_197x');
});
Route::get('/sim-hop-tuoi_196x', function () {
    return view('layouts.menu_pages.sim_hop_tuoi_196x');
});
Route::get('/sim-hop-tuoi_195x', function () {
    return view('layouts.menu_pages.sim_hop_tuoi_195x');
});



Route::get('/read-sheet', [App\Http\Controllers\GoogleSheetsController::class, 'readSheet']);
Route::get('/sync-boi-sim', [App\Http\Controllers\GoogleSheetsController::class, 'downloadAndConvertToJSON']);
