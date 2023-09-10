<?php

use App\Http\Controllers\BoiSim;
use App\Http\Controllers\MenuPageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Sim;
use App\Http\Controllers\FooterPageController;

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


Route::get('/sim/{slug}', [MenuPageController::class, 'index'])->name('menu-page');

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

Route::get('/xem-ngay-tot-xau', function () {
    return view('layouts.xem-ngay-tot-xau');
})->name('xem-ngay-tot-xau');

// pages in footer
Route::get('/mua-hang-va-thanh-toan', [FooterPageController::class, 'buyAndPayment'])
    ->name('mua-hang-va-thanh-toan');

Route::get('/chinh-sach-van-chuyen', [FooterPageController::class, 'deliveryPolicy'])
    ->name('chinh-sach-van-chuyen');

Route::get('/chinh-sach-doi-tra', [FooterPageController::class, 'returnPolicy'])
    ->name('chinh-sach-doi-tra');

Route::get('/chinh-sach-bao-hanh', [FooterPageController::class, 'warrantyPolicy'])
    ->name('chinh-sach-bao-hanh');

Route::get('/chinh-sach-bao-mat', [FooterPageController::class, 'securityPolicy'])
    ->name('chinh-sach-bao-mat');

Route::get('/dieu-khoan-va-dieu-kien', [FooterPageController::class, 'termsAndCondition'])
    ->name('dieu-khoan-va-dieu-kien');

// Route::get('/test1', [App\Http\Controllers\Test::class, 'getThongTinPhongThuyBangSdt'])->name('test1');
// Route::get('/test2', [App\Http\Controllers\Test::class, 'getListSimData'])->name('test2');
// Route::get('/test3', [App\Http\Controllers\Test::class, 'getDetailSimData'])->name('test3');
