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
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\JumbotronController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\WaqafController;
use App\Http\Controllers\FaktaController;

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


Route::group(['middleware' => 'revalidate'], function(){
//    Route::get('/', function () {
//        return view('auth.login');
//    });
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
    Route::resource('testimoni', TestimoniController::class);
    Route::resource('jumbotron', JumbotronController::class);
    Route::resource('guru', GuruController::class);
    Route::resource('waqaf', WaqafController::class);
    Route::resource('fakta', FaktaController::class);
    Route::resource('history-kegiatan', HistoryKegiatanController::class);
    Route::resource('history-artikel', HistoryArtikelController::class);
    Route::resource('history-berita', HistoryBeritaController::class);
    Route::resource('history-pengumuman', HistoryPengumumanController::class);
});

Route::get('/index', [\App\Http\Controllers\FrontendController::class, 'index']);
Route::get('/detail-artikel/{slug}', [\App\Http\Controllers\FrontendController::class, 'artikel'])->name('detail-artikel');
Route::get('/detail-berita/{slug}', [\App\Http\Controllers\FrontendController::class, 'berita'])->name('detail-berita');
Route::get('/detail-kegiatan/{slug}', [\App\Http\Controllers\FrontendController::class, 'kegiatan'])->name('detail-kegiatan');
Route::get('/detail-pengumuman/{slug}', [\App\Http\Controllers\FrontendController::class, 'pengumuman'])->name('detail-pengumuman');
Route::get('/daftar-artikel', [\App\Http\Controllers\FrontendController::class, 'daftarArtikel']);
Route::get('/daftar-berita', [\App\Http\Controllers\FrontendController::class, 'daftarBerita']);
Route::get('/daftar-kegiatan', [\App\Http\Controllers\FrontendController::class, 'daftarKegiatan']);
Route::get('/daftar-pengumuman', [\App\Http\Controllers\FrontendController::class, 'daftarPengumuman']);
Route::get('/detail-waqaf', [\App\Http\Controllers\FrontendController::class, 'waqaf']);
Route::get('/kontak', function () {
    return view('frontend.kontak');
});

Route::get('/welcome', function () {
    return view('welcome');
});
