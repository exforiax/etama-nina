<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Models\Berkas;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('/', [HomeController::class, 'index'])->name('home');

// User Route
Route::middleware(['auth'])->group(function () {
    Route::get('/berkas', [HomeController::class, 'tambah_berkas'])->name('berkas.create');
    Route::get('/upload-berkas-1', [HomeController::class, 'upload_satu'])->name('upload.satu');
    Route::post('/upload-berkas-1', [HomeController::class, 'store_satu'])->name('store.satu');
    Route::get('/upload-berkas-2', [HomeController::class, 'upload_dua'])->name('upload.dua');
    Route::post('/upload-berkas-2', [HomeController::class, 'store_dua'])->name('store.dua');
    Route::get('/upload-berkas-3', [HomeController::class, 'upload_tiga'])->name('upload.tiga');
    Route::post('/upload-berkas-3', [HomeController::class, 'store_tiga'])->name('store.tiga');
    // Route::post('/berkas', [HomeController::class, 'berkas_store'])->name('berkas.store');
    Route::get('/lacak', [HomeController::class, 'lacak'])->name('lacak');
    Route::get('/lacak/detail/{id}', [HomeController::class, 'lacak_detail'])->name('lacak.show');
    Route::get('/cetak-lacak/{id}', [HomeController::class, 'cetak_lacak'])->name('cetak.lacak');
});

// Admin Route
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('admin', [AdminController::class, 'index'])->name('admin.home');
    Route::get('admin/category', [AdminController::class, 'view_category'])->name('admin.category');
    Route::post('admin/create-category', [AdminController::class, 'add_category'])->name('admin.category.store');
    Route::delete('admin/delete-category/{id}', [AdminController::class, 'delete_category']);

    Route::get('admin/berkas-pendaftaran', [AdminController::class, 'view_pendaftaran'])->name('berkas.pendaftaran');
    Route::get('admin/berkas-pendaftaran/{id}', [AdminController::class, 'detail_pendaftaran'])->name('berkas.detail');
    Route::get('admin/berkas-ditolak', [AdminController::class, 'view_ditolak'])->name('berkas.ditolak');
    Route::put('admin/berkas/update/{id}', [AdminController::class, 'update_status'])->name('update.status');
    Route::delete('admin/delete-berkas/{id}', [AdminController::class, 'delete_berkas'])->name('delete.berkas');


    Route::get('diserahkan', [AdminController::class, 'view_diserahkan'])->name('berkas.diserahkan');
    Route::get('arsip', [AdminController::class, 'view_arsip'])->name('arsip');
    Route::post('arsip', [AdminController::class, 'arsip_store'])->name('arsip.store');
    Route::delete('arsip/delete/{id}', [AdminController::class, 'arsip_delete'])->name('arsip.delete');
    Route::get('download/{id}', [AdminController::class, 'download_dokumen'])->name('dokumen.download');
    // Route::get('admin/berkas/diverifikasi', [AdminController::class, 'show_verifikasi'])->name('show.verifikasi');
    // Route::get('admin/berkas/diserahkan', [AdminController::class, 'show_diserahkan'])->name('show.diserahkan');
    // Route::get('admin/berkas/ditolak', [AdminController::class, 'show_ditolak'])->name('show.ditolak');
    // Route::put('admin/berkas/ditolak/{id}', [AdminController::class, 'update_ditolak'])->name('update.ditolak');
    // Route::put('admin/berkas/diproses/{id}', [AdminController::class, 'update_proses'])->name('update.proses');
    // Route::put('admin/berkas/diverifikasi/{id}', [AdminController::class, 'update_verifikasi'])->name('update.verifikasi');

});
