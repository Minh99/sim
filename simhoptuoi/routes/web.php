<?php

use App\Http\Controllers\BoiSim;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Sim;

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
})->name('home');

Route::get('/sim-hop-menh-kim', function () {
    return view('layouts.menu_pages.sim_menh_kim');
})->name('sim-hop-menh-kim');

Route::get('/sim-hop-menh-moc', function () {
    return view('layouts.menu_pages.sim_menh_moc');
})->name('sim-hop-menh-moc');

Route::get('/sim-hop-menh-thuy', function () {
    return view('layouts.menu_pages.sim_menh_thuy');
})->name('sim-hop-menh-thuy');

Route::get('/sim-hop-menh-hoa', function () {
    return view('layouts.menu_pages.sim_menh_hoa');
})->name('sim-hop-menh-hoa');

Route::get('/sim-hop-menh-tho', function () {
    return view('layouts.menu_pages.sim_menh_tho');
})->name('sim-hop-menh-tho');

// page nay có format khác
//Route::get('/sim-so-dep', function () {
//    return view('layouts.menu_pages.sim_so_dep');
//});

Route::get('/sim-thang-quan-tien-chuc', function () {
    return view('layouts.menu_pages.sim_thang_quan');
})->name('sim-thang-quan-tien-chuc');

Route::get('/sim-kich-tai-van', function () {
    return view('layouts.menu_pages.sim_tai_van');
})->name('sim-kich-tai-van');

Route::get('/sim-tinh-duyen-gia-dao', function () {
    return view('layouts.menu_pages.sim_tinh_duyen_gia_dao');
})->name('sim-tinh-duyen-gia-dao');

Route::get('/sim-xoa-giai-han', function () {
    return view('layouts.menu_pages.sim_xoa_giai_han');
})->name('sim-xoa-giai-han');

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


Route::get('/tin-tuc/{slug}', [NewsController::class, 'news'])->name('news-page');

Route::get('/tin-sim/{slug}', [NewsController::class, 'simNews'])->name('sim-news-page');









Route::get('/admin/home', function () {
    return view('layouts.admin.home');
})->name('admin.home');


Route::post('/sync', [App\Http\Controllers\GoogleSheetsController::class, 'sync'])->name('sync');
Route::get('/coming-soon', function () {
    return view('layouts.coming-soon');
})->name('coming-soon');




Route::match(['get', 'post'], '/boi-sim', [BoiSim::class, 'index'])->name('boi-sim');
Route::get('/chi-tiet-sim/{sdt}', [Sim::class, 'detail'])->name('detail-sim');
Route::match(['get', 'post'], '/checkout/{sdt}', [Sim::class, 'checkout'])->name('checkout');

// Route::get('/test1', [App\Http\Controllers\Test::class, 'getThongTinPhongThuyBangSdt'])->name('test1');
// Route::get('/test2', [App\Http\Controllers\Test::class, 'getListSimData'])->name('test2');
// Route::get('/test3', [App\Http\Controllers\Test::class, 'getDetailSimData'])->name('test3');
