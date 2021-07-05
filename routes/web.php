<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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

Route::get('/admin/login', [BookController::class, 'login']);
Route::get('/admin/dashboard', [BookController::class, 'dashboard']);
Route::get('/admin/daftarSuratMasuk', [BookController::class, 'daftarSuratMasuk']);
Route::get('/admin/suratMasuk', [BookController::class, 'suratMasuk']);
Route::post('/admin/tambahSuratMasuk', [BookController::class, 'tambahSuratMasuk']);
Route::get('/admin/editSuratMasuk/{id}', [BookController::class, 'editSuratMasuk']);
Route::put('/admin/editSuratMasuk/{id}', [BookController::class, 'editSuratMasuk2']);
Route::get('/admin/hapusSuratMasuk/{id}', [BookController::class, 'hapusSuratMasuk']);
Route::get('/admin/daftarSuratMasuk/cari', [BookController::class, 'cariSuratMasuk']);



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
