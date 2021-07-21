<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;

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

Route::group(['middleware' => 'guest'], function () {
    Route::get('/admin/login', [AdminController::class, 'showLogin'])->name('adminlogin');
    Route::post('/admin/login', [AdminController::class, 'doLogin'])->name('adminlogin');
});
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('adminlogout');

Route::get('/admin/dashboard', [BookController::class, 'dashboard'])->name('admindashboard');
Route::get('/admin/daftarSuratMasuk', [BookController::class, 'daftarSuratMasuk'])->name('daftarsuratmasuk');
Route::get('/admin/suratMasuk', [BookController::class, 'suratMasuk'])->name('suratmasuk');
Route::post('/admin/tambahSuratMasuk', [BookController::class, 'tambahSuratMasuk'])->name('tambahsuratmasuk');
Route::get('/admin/editSuratMasuk/{id}', [BookController::class, 'editSuratMasuk'])->name('editsuratmasuk');
Route::put('/admin/editSuratMasuk/{id}', [BookController::class, 'editSuratMasuk2'])->name('editsuratmasuk');
Route::get('/admin/hapusSuratMasuk/{id}', [BookController::class, 'hapusSuratMasuk'])->name('hapussuratmasuk');
Route::get('/admin/daftarSuratMasuk/cari', [BookController::class, 'cariSuratMasuk'])->name('carisuratmasuk');
Route::get('/admin/cetak/{id}', [BookController::class, 'cetakSuratMasuk'])->name('cetaksuratmasuk');

Route::get('/admin/daftarSuratKeluar', [BookController::class, 'daftarSuratKeluar'])->name('daftarsuratkeluar');
Route::get('/admin/suratKeluar', [BookController::class, 'suratKeluar'])->name('suratkeluar');
Route::post('/admin/tambahSuratKeluar', [BookController::class, 'tambahSuratKeluar'])->name('tambahsuratkeluar');
Route::get('/admin/editSuratKeluar/{id}', [BookController::class, 'editSuratKeluar'])->name('editsuratkeluar');
Route::put('/admin/editSuratKeluar/{id}', [BookController::class, 'editSuratKeluar2'])->name('editsuratkeluar');
Route::get('/admin/hapusSuratKeluar/{id}', [BookController::class, 'hapusSuratKeluar'])->name('hapussuratkeluar');
Route::get('/admin/daftarSuratKeluar/cari', [BookController::class, 'cariSuratKeluar'])->name('carisuratkeluar');

Route::get('/user/login', [UserController::class, 'showUserLogin'])->name('userlogin');
Route::post('/user/login', [UserController::class, 'doUserLogin'])->name('userlogin');
Route::get('/user/lembar/{noTm}', [UserController::class, 'userLembar'])->name('userlembar');
Route::put('/user/lembar/{id}', [UserController::class, 'userLembar2'])->name('userlembar');
