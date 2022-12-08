<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerBaru extends Controller
{
    public function CG()
    {
        return view ('variabel');
    }
    public function tipedata()
    {
        return view ('tipedata');
    }
    public function operator()
    {
        return view ('operator');
    }
    public function nestedif()
    {
        $nama = "Rizki";
        $nilai = 85;
        return view('/ifelse/nestedifelse',compact('nama','nilai'));
    }
    public function switchcase()
    {
        $jurusan = '11';
        return view ('/switchcase/switchcase',compact('jurusan'));
    }
    public function booking()
    {
        return view('booking');
    }
    public function tampiltiket(Request $request)
    {
        $nama = $request->input('nama');
        $studio = $request->input('studio');
        $kelas = $request->input('kelas');
        $jmltiket = $request->input('jmltiket');
        //Mencari Nama Bintang Tamu
        if ($studio=="Studio 1")
        {
             $bt="Opick";
        }
        elseif ($studio=="Studio 2")
        {
             $bt="Raihan";
        }
        //Mencari Harga
        if($kelas=='VIP'){
            $harga=500000;
        }
        elseif($kelas=='Festival')
        {
            $harga=250000;
        }
        $total=$harga*$jmltiket;
        return view('tampiltiket', compact('nama','studio','bt','kelas','harga','jmltiket','total'));
    }
}

