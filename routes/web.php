<?php

use App\Http\Controllers\ThuCungController;
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

Route::get('/tmp', function () {
    return view('layout');
});

Route::get('/ee', function () {
    return view('admin/layout');
});

Route::controller(App\http\Controllers\HomeController::class)->group(function(){
    Route::get('/index','index')->name('home');
    Route::get('/cart','cart')->name('cart');
    Route::get('/contact','contact')->name('contact');
    Route::get('/login','login')->name('login');
    Route::get('/logout','logout')->name('logout');
    Route::get('/checklogin','checklogin')->name('checklogin');
    Route::get('/checkout','checkout')->name('checkout');
    Route::get('/blog','blog')->name('blog');
    Route::get('/grid','grid')->name('grid');
    Route::get('/details/{id}','details')->name('details');

    Route::get('/Cac-Giong-Cho/{id?}','categoryType')->name('dogs');
    route::post('/tim-kiem','TimKiem')->name('search');

});

Route::controller(App\Http\Controllers\LoaiThuCungController::class)->group(function(){
    Route::get('/admin/loaithucung/index','index')->name('admin.loaithucung.index');
    Route::get('/admin/loaithucung/create','create')->name('admin.loaithucung.create');
    Route::post('/admin/loaithucung/store','store')->name('admin.loaithucung.store');
    Route::get('/admin/loaithucung/edit/{id}','edit')->name('admin.loaithucung.edit');
    Route::post('/admin/loaithucung/update/{id}','update')->name('admin.loaithucung.update');
    Route::get('/admin/loaithucung/delete/{id}','destroy')->name('admin.loaithucung.delete');
    Route::get('/admin/loaithucung/read/{id}', 'show')->name('admin.loaithucung.show');

});
Route::controller(App\Http\Controllers\GiongThuCungController::class)->group(function(){
    Route::get('/admin/giongthucung/index','index')->name('admin.giongthucung.index');
    Route::get('/admin/giongthucung/create','create')->name('admin.giongthucung.create');
    Route::post('/admin/giongthucung/store','store')->name('admin.giongthucung.store');
    Route::get('/admin/giongthucung/edit/{id}','edit')->name('admin.giongthucung.edit');
    Route::post('/admin/giongthucung/update/{id}','update')->name('admin.giongthucung.update');
    Route::get('/admin/giongthucung/delete/{id}','destroy')->name('admin.giongthucung.delete');
    Route::get('/admin/giongthucung/read/{id}', 'show')->name('admin.giongthucung.show');

});

Route::controller(App\Http\Controllers\ThuCungController::class)->middleware('auth')->group(function(){
    Route::get('/admin/thucung/index','index')->name('admin.thucung.index');
    Route::get('/admin/thucung/create','create')->name('admin.thucung.create');
    Route::post('/admin/thucung/store','store')->name('admin.thucung.store');
    Route::get('/admin/thucung/edit/{id}','edit')->name('admin.thucung.edit');
    Route::post('/admin/thucung/update/{id}','update')->name('admin.thucung.update');
    Route::get('/admin/thucung/delete/{id}','destroy')->name('admin.thucung.delete');
    Route::get('/admin/thucung/read/{id}', 'show')->name('admin.thucung.show');
});
Route::controller(App\Http\Controllers\NCCController::class)->group(function(){
    Route::get('/admin/NCC/index','index')->name('admin.NCC.index');
    Route::get('/admin/NCC/create','create')->name('admin.NCC.create');
    Route::post('/admin/NCC/store','store')->name('admin.NCC.store');
    Route::get('/admin/NCC/edit/{id}','edit')->name('admin.NCC.edit');
    Route::post('/admin/NCC/update/{id}','update')->name('admin.NCC.update');
    Route::get('/admin/NCC/delete/{id}','destroy')->name('admin.NCC.delete');
    Route::get('/admin/NCC/read/{id}', 'show')->name('admin.NCC.show');

});
Route::controller(App\Http\Controllers\NhanVienController::class)->group(function(){
    Route::get('/admin/NhanVien/index','index')->name('admin.NhanVien.index');
    Route::get('/admin/NhanVien/create','create')->name('admin.NhanVien.create');
    Route::post('/admin/NhanVien/store','store')->name('admin.NhanVien.store');
    Route::get('/admin/NhanVien/edit/{id}','edit')->name('admin.NhanVien.edit');
    Route::post('/admin/NhanVien/update/{id}','update')->name('admin.NhanVien.update');
    Route::get('/admin/NhanVien/delete/{id}','destroy')->name('admin.NhanVien.delete');
    Route::get('/admin/NhanVien/read/{id}', 'show')->name('admin.NhanVien.show');
});
Route::controller(App\Http\Controllers\HoaDonBanController::class)->group(function(){
    Route::get('/admin/HoaDonBan/index','index')->name('admin.HoaDonBan.index');
    Route::post('/admin/HoaDonBan/update/{id}','update')->name('admin.HoaDonBan.update');
    Route::get('/admin/HoaDonBan/delete/{id}','destroy')->name('admin.HoaDonBan.delete');
    Route::get('/admin/HoaDonBan/show/{id}', 'show')->name('admin.HoaDonBan.show');
});

Route::controller(App\Http\Controllers\CartController::class)->group(function(){
    Route::get('/cartList', 'cartList')->name('cart.list');
    Route::post('cart', 'addToCart')->name('cart.store');
    Route::post('update-cart', 'updateCart')->name('cart.update');
    Route::post('remove', 'removeCart')->name('cart.remove');
    Route::post('clear', 'clearAllCart')->name('cart.clear');
    Route::get('/checkout','checkoutget')->name('cart.checkoutget');
    Route::post('/checkout','checkoutpost')->name('cart.checkoutpost');
});
