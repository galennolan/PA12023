<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function index()
        {
            return view ('awal');
        }
    public function list()
        {
            return view ('list');
        }
    public function gambar()
        {
            return view ('gambar');
        }
    public function phpdasar()
        {
            return view ('php');
        }
    public function formulir()
        {
            return view ('forminput');
        }
    public function output(Request $request)
        {
            $nim = $request->input('nim');
            $nama = $request->input('nama');
            $alamat= $request->input('alamat');
            return "Nim :" .$nim."<br>Nama: " .$nama. " <br>alamat" .$alamat;
        }
    public function Registrasi()
        {
            return view ('inputmahasiswa');
        }
    public function tampil(Request $request)
        {
        $nim = $request->input('nim');
        $nama = $request->input('nama');
        $tmplahir = $request->input('tmplhr');
        $tgllahir = $request->input('tgllhr');
        $jk = $request->input('jk');
        $kerja = $request->input('kerja');
        $email = $request->input('email');
        $hobi1 = $request->input('hobi1');
        $hobi2 = $request->input('hobi2');
        $hobi3 = $request->input('hobi3');
        $hobi4 = $request->input('hobi4');
        
        return "<h2>Biodata Mahasiswa</h2><hr> Nim : ".$nim.
        "<br>Nama : ".$nama.
        "<br>Tempat Lahir : ".$tmplahir.
        "<br>Tanggal Lahir : ".$tgllahir.
        "<br>Jenis Kelamin : ".$jk.
        "<br>Pekerjaan : ".$kerja.
        "<br>Amail : ".$email.
        "<br>Hobi : ".$hobi1.",". $hobi2."," .$hobi3.",". $hobi4.
        "<hr><a href='/register'>Kembali";
        }
}
