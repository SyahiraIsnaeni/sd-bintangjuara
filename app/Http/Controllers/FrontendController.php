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
        $pengumuman = Pengumuman::all()->sortByDesc('updated_at');
        $berita = Berita::all()->sortByDesc('updated_at');
        $artikel = Artikel::all()->sortByDesc('updated_at');
        $kegiatan = Kegiatan::all()->sortByDesc('updated_at');
        $galeri = Galeri::all()->sortByDesc('updated_at');

        $kegiatanPrioritas = Kegiatan::whereId(1)->get();
        return view('frontend.index', compact('pengumuman','berita', 'artikel', 'kegiatan', 'galeri', 'kegiatanPrioritas'));
    }

    public function artikel()
    {
        $artikel = Artikel::all()->sortByDesc('updated_at');
        return view('frontend.artikel', compact('artikel'));
    }

    public function daftarArtikel()
    {
        $artikel = Artikel::all()->sortByDesc('updated_at');
        return view('frontend.daftarartikel', compact('artikel'));
    }

    public function berita()
    {
        $berita = Berita::all()->sortByDesc('updated_at');
        return view('frontend.berita', compact('berita'));
    }

    public function daftarBerita()
    {
        $berita = Berita::all()->sortByDesc('updated_at');
        return view('frontend.daftarberita', compact('berita'));
    }

    public function kegiatan()
    {
        $kegiatan = Kegiatan::all()->sortByDesc('updated_at');
        return view('frontend.kegiatan', compact('kegiatan'));
    }

    public function daftarKegiatan()
    {
        $kegiatan = Kegiatan::all()->sortByDesc('updated_at');
        return view('frontend.daftarkegiatan', compact('kegiatan'));
    }

    public function pengumuman()
    {
        $pengumuman = Pengumuman::all()->sortByDesc('updated_at');
        return view('frontend.pengumuman', compact('pengumuman'));
    }

    public function daftarPengumuman()
    {
        $pengumuman = Pengumuman::all()->sortByDesc('updated_at');
        return view('frontend.daftarpengumuman', compact('pengumuman'));
    }

}
