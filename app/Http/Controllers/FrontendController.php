<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Jumbotron;
use App\Models\Kegiatan;
use App\Models\Pengumuman;
use App\Models\Testimoni;
use App\Models\Fakta;
use App\Models\Waqaf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function index()
    {
        $pengumuman = Pengumuman::where('is_active', '1')->limit(5)->orderByDesc('updated_at')->get();
        $berita = Berita::where('is_active', '1')->limit(5)->orderByDesc('updated_at')->get();
        $artikel = Artikel::where('is_active', '1')->limit(5)->orderByDesc('updated_at')->get();
        $kegiatan = Kegiatan::where('is_active', '1')->limit(5)->orderByDesc('updated_at')->get();
        $galeri = Galeri::limit(5)->orderByDesc('updated_at')->get();
        $jumbotron = Jumbotron::orderByDesc('updated_at')->get();
        $testimoni = Testimoni::where('is_active', '1')->orderByDesc('updated_at')->get();
        $fakta = Fakta::all();

        $kegiatanPrioritas = Kegiatan::where('is_active', '1')->limit(1)->orderByDesc('updated_at')->get();
        $beritaPrioritas = Berita::where('is_active', '1')->limit(1)->orderByDesc('updated_at')->get();
        $artikelPrioritas = Artikel::where('is_active', '1')->limit(1)->orderByDesc('updated_at')->get();
        $pengumumanPrioritas = Pengumuman::where('is_active', '1')->limit(1)->orderByDesc('updated_at')->get();
        return view('frontend.index', compact('pengumuman','berita', 'artikel',
            'kegiatan', 'galeri', 'kegiatanPrioritas', 'beritaPrioritas', 'artikelPrioritas',
            'pengumumanPrioritas', 'jumbotron', 'testimoni', 'fakta'));
    }

    public function artikel($slug)
    {
        $artikel = Artikel::where('slug', $slug)->first();
        $nextArtikel = Artikel::whereNotIn('slug', [$slug])->where('is_active', '1')->limit(3)->orderByDesc('updated_at')->get();
        return view('frontend.artikel', compact('artikel', 'nextArtikel'));
    }

    public function daftarArtikel()
    {
        $artikel = Artikel::where('is_active', '1')->orderByDesc('updated_at')->get();
        return view('frontend.daftarartikel', compact('artikel'));
    }

    public function berita($slug)
    {
        $berita = Berita::where('slug', $slug)->first();
        $nextBerita = Berita::whereNotIn('slug', [$slug])->where('is_active', '1')->limit(3)->orderByDesc('updated_at')->get();
        return view('frontend.berita', compact('berita', 'nextBerita'));
    }

    public function daftarBerita()
    {
        $berita = Berita::where('is_active', '1')->orderByDesc('updated_at')->get();
        return view('frontend.daftarberita', compact('berita'));
    }

    public function kegiatan($slug)
    {
        $kegiatan = Kegiatan::where('slug', $slug)->first();
        $nextKegiatan = Kegiatan::whereNotIn('slug', [$slug])->where('is_active', '1')->limit(3)->orderByDesc('updated_at')->get();
        return view('frontend.kegiatan', compact('kegiatan', 'nextKegiatan'));
    }

    public function daftarKegiatan()
    {
        $kegiatan = Kegiatan::where('is_active', '1')->orderByDesc('updated_at')->get();
        return view('frontend.daftarkegiatan', compact('kegiatan'));
    }

    public function pengumuman($slug)
    {
        $pengumuman = Pengumuman::where('slug', $slug)->first();
        $nextPengumuman = Pengumuman::whereNotIn('slug', [$slug])->where('is_active', '1')->limit(3)->orderByDesc('updated_at')->get();
        return view('frontend.pengumuman', compact('pengumuman', 'nextPengumuman'));
    }

    public function daftarPengumuman()
    {
        $pengumuman = Pengumuman::where('is_active', '1')->orderByDesc('updated_at')->get();
        return view('frontend.daftarpengumuman', compact('pengumuman'));
    }

    public function waqaf()
    {
        $waqaf = Waqaf::all();
        return view('frontend.waqaf', compact('waqaf'));
    }

}
