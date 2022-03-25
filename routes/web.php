<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\FasilitasKamarController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResepsionisController;
use App\Http\Controllers\TamuController;
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
    return view('tamu.home');
});


Route::get('/tes', function () {
    return view('test');
});

Route::get('/checkout', function () {
    return view('tamu.checkout');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('tamu.home');
Route::post('/home', [App\Http\Controllers\ReservasiController::class, 'store'])->name('reservasi.store');


// administator
Route::middleware('role:admin')->get('/admin/dashboard', [App\Http\Controllers\KamarController::class, 'index'])->name('admin.dashboard');

Route::get('/admin/dashboard/tambah', [App\Http\Controllers\KamarController::class, 'tambah'])->name('admin.dashboard.tambah');
Route::post('/admin/dashboard/tambah', [App\Http\Controllers\KamarController::class, 'store']);

Route::get('/admin/dashboard/edit/{id}', [App\Http\Controllers\KamarController::class, 'edit'])->name('admin.dashboard.edit');
Route::post('/admin/dashboard/edit/{id}', [App\Http\Controllers\KamarController::class, 'update']);

Route::get('/admin/dashboard/hapus/{id}', [App\Http\Controllers\KamarController::class, 'hapus'])->name('admin.dashboard.hapus');

Route::get('/admin/dashboard/lihat/{id}', [App\Http\Controllers\KamarController::class, 'lihat'])->name('admin.dashboard.lihat  ');

// fkamar
Route::middleware('role:admin')->get('/admin/fkamar/dashboard', [App\Http\Controllers\FasilitasKamarController::class, 'index'])->name('admin.fkamar.dashboard');

Route::get('/admin/fkamar/tambah', [App\Http\Controllers\FasilitasKamarController::class, 'tambah'])->name('admin.fkamar.tambah');
Route::post('/admin/fkamar/tambah', [App\Http\Controllers\FasilitasKamarController::class, 'store']);

Route::get('/admin/fkamar/edit/{id}', [App\Http\Controllers\FasilitasKamarController::class, 'edit'])->name('admin.fkamar.edit ');
Route::post('/admin/fkamar/edit/{id}', [App\Http\Controllers\FasilitasKamarController::class, 'update']);

Route::get('/admin/fkamar/hapus/{id}', [App\Http\Controllers\FasilitasKamarController::class, 'hapus'])->name('admin.fkamar.hapus ');

// fasilitas
Route::middleware('role:admin')->get('/admin/fasilitas/dashboard', [App\Http\Controllers\FasilitasController::class, 'index'])->name('admin.fasilitas.dashboard');

Route::get('/admin/fasilitas/tambah', [App\Http\Controllers\FasilitasController::class, 'tambah'])->name('admin.fasilitas.tambah');
Route::post('/admin/fasilitas/tambah', [App\Http\Controllers\FasilitasController::class, 'store']);

Route::get('/admin/fasilitas/edit/{id}', [App\Http\Controllers\FasilitasController::class, 'edit'])->name('admin.fasilitas.edit ');
Route::post('/admin/fasilitas/edit/{id}', [App\Http\Controllers\FasilitasController::class, 'update']);

Route::get('/admin/fasilitas/hapus/{id}', [App\Http\Controllers\FasilitasController::class, 'hapus'])->name('admin.fasilitas.hapus');

// resepsionis
Route::middleware('role:resepsionis')->get('/resepsionis/dashboard', [App\Http\Controllers\ResepsionisController::class, 'index'])->name('resepsionis.dashboard');
Route::post('/resepsionis/dashboard/search', [App\Http\Controllers\ResepsionisController::class, 'search'])->name('resepsionis.search');
Route::post('/resepsionis/dashboard/filter', [App\Http\Controllers\ResepsionisController::class, 'filter'])->name('resepsionis.filter');

// tamu
Route::get('/tamu/check', [App\Http\Controllers\TamuController::class, 'index'])->name('tamu.check');
