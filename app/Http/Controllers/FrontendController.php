<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Kegiatan;
use App\Models\Pengumuman;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $pengumuman = Pengumuman::all();
        $berita = Berita::all();
        $artikel = Artikel::all();
        $kegiatan = Kegiatan::all();
        $galeri = Galeri::all();
        return view('backend.back.dashboard', compact('pengumuman','berita', 'artikel', 'kegiatan', 'galeri'));
    }
}
