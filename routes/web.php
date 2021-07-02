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
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/suratMasuk', function () {
    return view('suratMasuk');
});

Route::get('/daftarSuratMasuk', function () {
    return view('daftarSuratMasuk');
});

Route::get('/editSuratMasuk', function () {
    return view('editSuratMasuk');
});

Route::get('/suratKeluar', function () {
    return view('suratKeluar');
});

Route::get('/daftarSuratKeluar', function () {
    return view('daftarSuratKeluar');
});

Route::get('/editSuratKeluar', function () {
    return view('editSuratKeluar');
});

Route::get('/cetak', function () {
    return view('cetak');
});
