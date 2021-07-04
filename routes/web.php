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
    return view('welcome');
});

Route::get('/admin/login', function () {
    return view('admin.login');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/admin/suratMasuk', function () {
    return view('admin.suratMasuk');
});

Route::get('/admin/daftarSuratMasuk', function () {
    return view('admin.daftarSuratMasuk');
});

Route::get('/admin/editSuratMasuk', function () {
    return view('admin.editSuratMasuk');
});

Route::get('/admin/suratKeluar', function () {
    return view('admin.suratKeluar');
});

Route::get('/admin/daftarSuratKeluar', function () {
    return view('admin.daftarSuratKeluar');
});

Route::get('/admin/editSuratKeluar', function () {
    return view('admin.editSuratKeluar');
});

Route::get('/admin/cetak', function () {
    return view('admin.cetak');
});

Route::get('/user/login', function () {
    return view('user.login');
});

Route::get('/user/lembar', function () {
    return view('user.lembar');
});
