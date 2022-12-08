<?php

use App\Http\Controllers\ControllerBaru;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\MahasiswaController;

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
    return view('welcome');
});

Route::get('depan', [LatihanController::class, 'index'] );

Route::get('urutan', [LatihanController::class, 'list'] );

Route::get('image', [LatihanController::class, 'gambar'] );

Route::get('koookok', [LatihanController::class, 'phpdasar'] );

Route::get('var', [ControllerBaru::class, 'CG'] );

Route::get('mooo', [ControllerBaru::class, 'tipedata'] );


Route::get('operate', [ControllerBaru::class, 'operator'] );


Route::get('formulir/luaran', [LatihanController::class, 'output']);

Route::get('daftar', [LatihanController::class, 'Registrasi'] );
Route::post('register/tampil', [LatihanController::class, 'tampil'] );

Route::get('nestedif', [ControllerBaru::class, 'nestedif'] );
Route::get('switchcase', [ControllerBaru::class, 'switchcase'] );


Route::get('booking', [ControllerBaru::class, 'booking'] );
Route::post('tampiltiket', [ControllerBaru::class, 'tampiltiket'] );


Route::resource('mahasiswa', MahasiswaController::class );
Route::get('mahasiswa/hapus/{id}',[MahasiswaController::class, 'destroy']);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
