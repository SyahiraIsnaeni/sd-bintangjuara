<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriKegiatanController;
use App\Http\Controllers\KategoriBeritaController;
use App\Http\Controllers\KategoriPengumumanController;
use App\Http\Controllers\KegiatanController;

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

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('kategorikegiatan', KategoriKegiatanController::class);
Route::resource('kategoriberita', KategoriBeritaController::class);
Route::resource('kategoripengumuman', KategoriPengumumanController::class);
Route::resource('kegiatan', KegiatanController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
