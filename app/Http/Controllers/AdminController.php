<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin/home');
    }

    public function dataWajib(){
        return view('admin/data-wajib');
    }

    public function dataObjek(){
        return view('admin/data-objek');
    }

    public function sms(){
        return view('admin/sms');
    }

    public function stts(){
        return view('admin/stts');
    }

    public function laporanBelumBayar(){
        return view('admin/laporan-belum-bayar');
    }

    public function laporanBayar(){
        return view('admin/laporan-bayar');
    }
}
