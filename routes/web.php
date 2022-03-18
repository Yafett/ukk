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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('tamu.home');

Route::middleware('role:admin')->get('/admin/dashboard',function(){
    return view('admin.dashboard');
})->name('admin.dashboard');


Route::middleware('role:resepsionis')->get('/resepsionis/dashboard',function(){
    return view('resep.dashboard');
})->name('resepsionis.dashboard');
