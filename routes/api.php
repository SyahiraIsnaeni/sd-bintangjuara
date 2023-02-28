<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/post-pengumuman', [\App\Http\Controllers\FrontendController::class, 'postPengumuman']);
Route::get('/post-berita', [\App\Http\Controllers\FrontendController::class, 'postBerita']);
Route::get('/post-artikel', [\App\Http\Controllers\FrontendController::class, 'postArtikel']);
Route::get('/post-kegiatan', [\App\Http\Controllers\FrontendController::class, 'postKegiatan']);
Route::get('/post-pengumuman-prioritas', [\App\Http\Controllers\FrontendController::class, 'postPengumumanPrioritas']);
Route::get('/post-berita-prioritas', [\App\Http\Controllers\FrontendController::class, 'postBeritaPrioritas']);
Route::get('/post-artikel-prioritas', [\App\Http\Controllers\FrontendController::class, 'postArtikelPrioritas']);
Route::get('/post-kegiatan-prioritas', [\App\Http\Controllers\FrontendController::class, 'postKegiatanPrioritas']);
Route::get('/post-artikel-detail/{slug}', [\App\Http\Controllers\FrontendController::class, 'artikelJson']);
Route::get('/post-berita-detail/{slug}', [\App\Http\Controllers\FrontendController::class, 'beritaJson']);
Route::get('/post-kegiatan-detail/{slug}', [\App\Http\Controllers\FrontendController::class, 'kegiatanJson']);
Route::get('/post-pengumuman-detail/{slug}', [\App\Http\Controllers\FrontendController::class, 'pengumumanJson']);
Route::get('/artikel-detail/{slug}', [\App\Http\Controllers\FrontendController::class, 'artikel'])->name('detail-artikel');
Route::get('/berita-detail/{slug}', [\App\Http\Controllers\FrontendController::class, 'berita'])->name('detail-berita');
Route::get('/kegiatan-detail/{slug}', [\App\Http\Controllers\FrontendController::class, 'kegiatan'])->name('detail-kegiatan');
Route::get('/pengumuman-detail/{slug}', [\App\Http\Controllers\FrontendController::class, 'pengumuman'])->name('detail-pengumuman');
