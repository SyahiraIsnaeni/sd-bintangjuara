<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriKegiatanController;
use App\Http\Controllers\KategoriBeritaController;
use App\Http\Controllers\KategoriPengumumanController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\HistoryKegiatanController;
use App\Http\Controllers\HistoryArtikelController;
use App\Http\Controllers\HistoryBeritaController;
use App\Http\Controllers\HistoryPengumumanController;

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
Route::resource('berita', BeritaController::class);
Route::resource('pengumuman', PengumumanController::class);
Route::resource('artikel', ArtikelController::class);
Route::resource('admin', UserController::class);
Route::resource('galeri', GaleriController::class);
Route::resource('history-kegiatan', HistoryKegiatanController::class);
Route::resource('history-artikel', HistoryArtikelController::class);
Route::resource('history-berita', HistoryBeritaController::class);
Route::resource('history-pengumuman', HistoryPengumumanController::class);
Route::get('/index', [\App\Http\Controllers\FrontendController::class, 'index']);
