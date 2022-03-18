<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KamarController;


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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('tamu.home');

// administator
Route::middleware('role:admin')->get('/admin/dashboard', [App\Http\Controllers\KamarController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/dashboard/tambah', [App\Http\Controllers\KamarController::class, 'tambah'])->name('admin.dashboard.tambah');
Route::post('/admin/dashboard/tambah', [App\Http\Controllers\KamarController::class, 'store']);

Route::get('/admin/dashboard/edit/{id}', [App\Http\Controllers\KamarController::class, 'edit'])->name('admin.dashboard.edit ');
Route::post('/admin/dashboard/edit/{id}', [App\Http\Controllers\KamarController::class, 'update']);

Route::get('/admin/dashboard/hapus/{id}', [App\Http\Controllers\KamarController::class, 'hapus'])->name('admin.dashboard.hapus ');

Route::middleware('role:resepsionis')->get('/resepsionis/dashboard',function(){
    return view('resep.dashboard');
})->name('resepsionis.dashboard');
