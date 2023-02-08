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
        return view('frontend.index', compact('pengumuman','berita', 'artikel', 'kegiatan', 'galeri'));
    }

    public function artikel()
    {
        $artikel = Artikel::all();
        return view('frontend.artikel', compact('artikel'));
    }

    public function daftarArtikel()
    {
        $artikel = Artikel::all();
        return view('frontend.daftarartikel', compact('artikel'));
    }

    public function berita()
    {
        $berita = Berita::all();
        return view('frontend.berita', compact('berita'));
    }

    public function daftarBerita()
    {
        $berita = Berita::all();
        return view('frontend.daftarberita', compact('berita'));
    }

    public function kegiatan()
    {
        $kegiatan = Kegiatan::all();
        return view('frontend.kegiatan', compact('kegiatan'));
    }

    public function daftarKegiatan()
    {
        $kegiatan = Kegiatan::all();
        return view('frontend.daftarkegiatan', compact('kegiatan'));
    }

    public function pengumuman()
    {
        $pengumuman = Pengumuman::all();
        return view('frontend.pengumuman', compact('pengumuman'));
    }

    public function daftarPengumuman()
    {
        $pengumuman = Pengumuman::all();
        return view('frontend.daftarpengumuman', compact('pengumuman'));
    }

}
