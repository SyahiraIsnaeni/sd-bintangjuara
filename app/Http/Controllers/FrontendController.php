<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Kegiatan;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function index()
    {
        $pengumuman = Pengumuman::limit(5)->orderByDesc('updated_at')->get();
        $berita = Berita::limit(5)->orderByDesc('updated_at')->get();
        $artikel = Artikel::limit(5)->orderByDesc('updated_at')->get();
        $kegiatan = Kegiatan::limit(5)->orderByDesc('updated_at')->get();
        $galeri = Galeri::limit(5)->orderByDesc('updated_at')->get();

        $kegiatanPrioritas = Kegiatan::limit(1)->orderByDesc('updated_at')->get();
        $beritaPrioritas = Berita::limit(1)->orderByDesc('updated_at')->get();
        $artikelPrioritas = Artikel::limit(1)->orderByDesc('updated_at')->get();
        $pengumumanPrioritas = Pengumuman::limit(1)->orderByDesc('updated_at')->get();
        return view('frontend.index', compact('pengumuman','berita', 'artikel', 'kegiatan', 'galeri', 'kegiatanPrioritas', 'beritaPrioritas', 'artikelPrioritas', 'pengumumanPrioritas'));
    }

    public function artikel($slug)
    {
        $artikel = Artikel::where('slug', $slug)->first();
        return view('frontend.artikel', ['artikel' => $artikel]);
    }

    public function daftarArtikel()
    {
        $artikel = Artikel::all()->sortByDesc('updated_at');
        return view('frontend.daftarartikel', compact('artikel'));
    }

    public function berita($slug)
    {
        $berita = Berita::where('slug', $slug)->first();
        return view('frontend.berita', ['berita' => $berita]);
    }

    public function daftarBerita()
    {
        $berita = Berita::all()->sortByDesc('updated_at');
        return view('frontend.daftarberita', compact('berita'));
    }

    public function kegiatan($slug)
    {
        $kegiatan = Kegiatan::where('slug', $slug)->first();
        return view('frontend.kegiatan', ['kegiatan' => $kegiatan]);
    }

    public function daftarKegiatan()
    {
        $kegiatan = Kegiatan::all()->sortByDesc('updated_at');
        return view('frontend.daftarkegiatan', compact('kegiatan'));
    }

    public function pengumuman($slug)
    {
        $pengumuman = Pengumuman::where('slug', $slug)->first();
        return view('frontend.pengumuman', ['pengumuman' => $pengumuman]);
    }

    public function daftarPengumuman()
    {
        $pengumuman = Pengumuman::all()->sortByDesc('updated_at');
        return view('frontend.daftarpengumuman', compact('pengumuman'));
    }

}
