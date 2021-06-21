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
    return view('home-user');
});

// ADMIN
Route::get('/admin', function () {
    return view('admin/home');
});

Route::get('/admin/data-wajib', function () {
    return view('admin/data-wajib');
});

Route::get('/admin/data-objek', function () {
    return view('admin/data-objek');
});

Route::get('/admin/sms', function () {
    return view('admin/sms');
});

Route::get('/admin/stts', function () {
    return view('admin/stts');
});

Route::get('/admin/laporan-belum-bayar', function () {
    return view('admin/laporan-belum-bayar');
});
Route::get('/admin/laporan-bayar', function () {
    return view('admin/laporan-bayar');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');