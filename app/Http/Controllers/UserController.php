<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home(){
        return view('home');
    }

    public function sppt(){
        return view('sppt');
    }

    public function daftarPembayaran(){
        return view('daftar-pembayaran');
    }

    public function pbb(){
        return view('pbb');
    }


}
