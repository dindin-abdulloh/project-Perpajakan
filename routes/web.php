<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;



Route::get('/', function () {
    return view('welcome');
});

// ADMIN CONTROLLER
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/data-wajib', [AdminController::class, 'dataWajib']);
Route::get('/admin/data-objek', [AdminController::class, 'dataObjek']);
Route::get('/admin/pesan', [AdminController::class, 'sms']);
Route::get('/admin/stts', [AdminController::class, 'stts']);
Route::get('/admin/laporan-belum-bayar', [AdminController::class, 'laporanBelumBayar']);
Route::get('/admin/laporan-bayar', [AdminController::class, 'laporanBayar']);


// USER
Route::get('/user', [UserController::class, 'home']);
Route::get('/sppt', [UserController::class, 'sppt']);
Route::get('/daftar-pembayaran', [UserController::class, 'daftarPembayaran']);
Route::get('/pbb', [UserController::class, 'pbb']);