<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\Book2Controller;

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

Route::get('/admin/daftarSuratMasuk', [BookController::class, 'daftarSuratMasuk']);
Route::get('/admin/suratMasuk', [BookController::class, 'suratMasuk']);
Route::post('/admin/tambahSuratMasuk', [BookController::class, 'tambahSuratMasuk']);
Route::get('/admin/editSuratMasuk/{id}', [BookController::class, 'editSuratMasuk']);
Route::put('/admin/editSuratMasuk/{id}', [BookController::class, 'editSuratMasuk2']);
Route::get('/admin/hapusSuratMasuk/{id}', [BookController::class, 'hapusSuratMasuk']);
Route::get('/admin/daftarSuratMasuk/cari', [BookController::class, 'cariSuratMasuk']);
Route::get('/admin/cetak/{id}', [BookController::class, 'cetakSuratMasuk']);

Route::get('/admin/daftarSuratKeluar', [Book2Controller::class, 'daftarSuratKeluar']);
Route::get('/admin/suratKeluar', [Book2Controller::class, 'suratKeluar']);
Route::post('/admin/tambahSuratKeluar', [Book2Controller::class, 'tambahSuratKeluar']);
Route::get('/admin/editSuratKeluar/{id}', [Book2Controller::class, 'editSuratKeluar']);
Route::put('/admin/editSuratKeluar/{id}', [Book2Controller::class, 'editSuratKeluar2']);
Route::get('/admin/hapusSuratKeluar/{id}', [Book2Controller::class, 'hapusSuratKeluar']);
Route::get('/admin/daftarSuratKeluar/cari', [Book2Controller::class, 'cariSuratKeluar']);

Route::get('/user/login', function () {
    return view('user.login');
});

Route::get('/user/lembar', function () {
    return view('user.lembar');
});
