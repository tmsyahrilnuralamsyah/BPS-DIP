<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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

Route::get('/admin/login', [AdminController::class, 'showLogin'])->name('adminlogin');
Route::post('/admin/login', [AdminController::class, 'doLogin'])->name('adminlogin');
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('adminlogout');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admindashboard');
    Route::get('/admin/daftarSuratMasuk', [AdminController::class, 'daftarSuratMasuk'])->name('daftarsuratmasuk');
    Route::get('/admin/suratMasuk', [AdminController::class, 'suratMasuk'])->name('suratmasuk');
    Route::post('/admin/tambahSuratMasuk', [AdminController::class, 'tambahSuratMasuk'])->name('tambahsuratmasuk');
    Route::get('/admin/editSuratMasuk/{id}', [AdminController::class, 'editSuratMasuk'])->name('editsuratmasuk');
    Route::put('/admin/editSuratMasuk/{id}', [AdminController::class, 'editSuratMasuk2'])->name('editsuratmasuk');
    Route::delete('/admin/hapusSuratMasuk/{id}', [AdminController::class, 'hapusSuratMasuk'])->name('hapussuratmasuk');
    Route::get('/admin/daftarSuratMasuk/cari', [AdminController::class, 'cariSuratMasuk'])->name('carisuratmasuk');
    Route::get('/admin/cetak/{id}', [AdminController::class, 'cetakSuratMasuk'])->name('cetaksuratmasuk');

    Route::get('/admin/daftarSuratKeluar', [AdminController::class, 'daftarSuratKeluar'])->name('daftarsuratkeluar');
    Route::get('/admin/suratKeluar', [AdminController::class, 'suratKeluar'])->name('suratkeluar');
    Route::post('/admin/tambahSuratKeluar', [AdminController::class, 'tambahSuratKeluar'])->name('tambahsuratkeluar');
    Route::get('/admin/editSuratKeluar/{id}', [AdminController::class, 'editSuratKeluar'])->name('editsuratkeluar');
    Route::put('/admin/editSuratKeluar/{id}', [AdminController::class, 'editSuratKeluar2'])->name('editsuratkeluar');
    Route::delete('/admin/hapusSuratKeluar/{id}', [AdminController::class, 'hapusSuratKeluar'])->name('hapussuratkeluar');
    Route::get('/admin/daftarSuratKeluar/cari', [AdminController::class, 'cariSuratKeluar'])->name('carisuratkeluar');
});

Route::get('/user/login', [UserController::class, 'showUserLogin'])->name('userlogin');
Route::post('/user/login', [UserController::class, 'doUserLogin'])->name('userlogin');
Route::get('/user/lembar/{noTm}', [UserController::class, 'userLembar'])->name('userlembar');
Route::put('/user/lembar/{id}', [UserController::class, 'userLembar2'])->name('userlembar');
