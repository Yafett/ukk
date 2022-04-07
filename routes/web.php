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

Route::middleware('role:admin')->get('/admin/dashboard/tambah', [App\Http\Controllers\KamarController::class, 'tambah'])->name('admin.dashboard.tambah');
Route::middleware('role:admin')->post('/admin/dashboard/tambah', [App\Http\Controllers\KamarController::class, 'store']);

Route::middleware('role:admin')->get('/admin/dashboard/edit/{id}', [App\Http\Controllers\KamarController::class, 'edit'])->name('admin.dashboard.edit');
Route::middleware('role:admin')->post('/admin/dashboard/edit/{id}', [App\Http\Controllers\KamarController::class, 'update']);

Route::middleware('role:admin')->get('/admin/dashboard/hapus/{id}', [App\Http\Controllers\KamarController::class, 'hapus'])->name('admin.dashboard.hapus');

Route::middleware('role:admin')->get('/admin/dashboard/lihat/{id}', [App\Http\Controllers\KamarController::class, 'lihat'])->name('admin.dashboard.lihat  ');

// fkamar
Route::middleware('role:admin')->get('/admin/fkamar/dashboard', [App\Http\Controllers\FasilitasKamarController::class, 'index'])->name('admin.fkamar.dashboard');

Route::middleware('role:admin')->get('/admin/fkamar/tambah', [App\Http\Controllers\FasilitasKamarController::class, 'tambah'])->name('admin.fkamar.tambah');
Route::middleware('role:admin')->post('/admin/fkamar/tambah', [App\Http\Controllers\FasilitasKamarController::class, 'store']);

Route::middleware('role:admin')->get('/admin/fkamar/edit/{id}', [App\Http\Controllers\FasilitasKamarController::class, 'edit'])->name('admin.fkamar.edit ');
Route::middleware('role:admin')->post('/admin/fkamar/edit/{id}', [App\Http\Controllers\FasilitasKamarController::class, 'update']);

Route::middleware('role:admin')->get('/admin/fkamar/hapus/{id}', [App\Http\Controllers\FasilitasKamarController::class, 'hapus'])->name('admin.fkamar.hapus ');

// fasilitas
Route::middleware('role:admin')->get('/admin/fasilitas/dashboard', [App\Http\Controllers\FasilitasController::class, 'index'])->name('admin.fasilitas.dashboard');

Route::middleware('role:admin')->get('/admin/fasilitas/tambah', [App\Http\Controllers\FasilitasController::class, 'tambah'])->name('admin.fasilitas.tambah');
Route::middleware('role:admin')->post('/admin/fasilitas/tambah', [App\Http\Controllers\FasilitasController::class, 'store']);

Route::middleware('role:admin')->get('/admin/fasilitas/edit/{id}', [App\Http\Controllers\FasilitasController::class, 'edit'])->name('admin.fasilitas.edit ');
Route::middleware('role:admin')->post('/admin/fasilitas/edit/{id}', [App\Http\Controllers\FasilitasController::class, 'update']);

Route::middleware('role:admin')->get('/admin/fasilitas/hapus/{id}', [App\Http\Controllers\FasilitasController::class, 'hapus'])->name('admin.fasilitas.hapus');

// resepsionis
Route::middleware('role:resepsionis')->get('/resepsionis/dashboard', [App\Http\Controllers\ResepsionisController::class, 'index'])->name('resepsionis.dashboard');
Route::middleware('role:resepsionis')->post('/resepsionis/dashboard/search', [App\Http\Controllers\ResepsionisController::class, 'search'])->name('resepsionis.search');
Route::middleware('role:resepsionis')->post('/resepsionis/dashboard/filter', [App\Http\Controllers\ResepsionisController::class, 'filter'])->name('resepsionis.filter');
Route::middleware('role:resepsionis')->post('/resepsionis/status/edit/{id}', [App\Http\Controllers\ResepsionisController::class, 'checkin'])->name('resepsionis.checkin');

Route::middleware('role:resepsionis')->get('/resepsionis/dashboard/hapus/{id}', [App\Http\Controllers\ResepsionisController::class, 'hapus'])->name('resepsionis.hapus');


// tamu
Route::middleware('role:tamu')->get('/tamu/check', [App\Http\Controllers\TamuController::class, 'index'])->name('tamu.check');
Route::middleware('role:tamu')->get('/cetak', [App\Http\Controllers\TamuController::class, 'cetak'])->name('tamu.cetak');
Route::middleware('role:tamu')->get('/home/fasilitas', [App\Http\Controllers\TamuController::class, 'fasilitas'])->name('tamu.fasilitas');
Route::middleware('role:tamu')->get('/home/kamar', [App\Http\Controllers\TamuController::class, 'kamar'])->name('tamu.kamar');
Route::get('/home/success', [App\Http\Controllers\TamuController::class, 'success'])->name('tamu.succ');
Route::get('/home/check', [App\Http\Controllers\TamuController::class, 'cetakhome'])->name('home.check');

Route::get('/home/check/{id}', [App\Http\Controllers\TamuController::class, 'cetaksatu'])->name('home.check.satu');
