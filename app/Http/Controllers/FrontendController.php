<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Berita;
use App\Models\Fakta;
use App\Models\Galeri;
use App\Models\Guru;
use App\Models\Jumbotron;
use App\Models\Kegiatan;
use App\Models\Pengumuman;
use App\Models\Testimoni;
use App\Models\Waqaf;

class FrontendController extends Controller
{
    public function index()
    {
        $pengumuman = Pengumuman::where('is_active', '1')->limit(5)->orderByDesc('created_at')->get();
        $berita = Berita::where('is_active', '1')->limit(5)->orderByDesc('created_at')->get();
        $artikel = Artikel::where('is_active', '1')->limit(5)->orderByDesc('created_at')->get();
        $kegiatan = Kegiatan::where('is_active', '1')->limit(5)->orderByDesc('created_at')->get();
        $galeri = Galeri::limit(7)->orderByDesc('updated_at')->get();
        $jumbotron = Jumbotron::orderByDesc('updated_at')->get();
        $testimoni = Testimoni::where('is_active', '1')->orderByDesc('updated_at')->get();
        $fakta = Fakta::all();

        $kegiatanPrioritas = Kegiatan::where('is_active', '1')->limit(1)->orderByDesc('created_at')->get();
        $beritaPrioritas = Berita::where('is_active', '1')->limit(1)->orderByDesc('created_at')->get();
        $artikelPrioritas = Artikel::where('is_active', '1')->limit(1)->orderByDesc('created_at')->get();
        $pengumumanPrioritas = Pengumuman::where('is_active', '1')->limit(1)->orderByDesc('created_at')->get();

        return view('frontend.index', compact('pengumuman', 'berita', 'artikel',
            'kegiatan', 'galeri', 'kegiatanPrioritas', 'beritaPrioritas', 'artikelPrioritas',
            'pengumumanPrioritas', 'jumbotron', 'testimoni', 'fakta'));
    }

    public function artikel($slug)
    {
        $artikel = Artikel::where('slug', $slug)->first();
        $nextArtikel = Artikel::whereNotIn('slug', [$slug])->where('is_active', '1')->limit(3)->orderByDesc('created_at')->get();

        return view('frontend.artikel', compact('artikel', 'nextArtikel'));
    }

    public function daftarArtikel()
    {
        $artikel = Artikel::where('is_active', '1')->orderByDesc('created_at')->get();

        return view('frontend.daftarartikel', compact('artikel'));
    }

    public function berita($slug)
    {
        $berita = Berita::where('slug', $slug)->first();
        $nextBerita = Berita::whereNotIn('slug', [$slug])->where('is_active', '1')->limit(3)->orderByDesc('created_at')->get();

        return view('frontend.berita', compact('berita', 'nextBerita'));
    }

    public function daftarBerita()
    {
        $berita = Berita::where('is_active', '1')->orderByDesc('created_at')->get();

        return view('frontend.daftarberita', compact('berita'));
    }

    public function kegiatan($slug)
    {
        $kegiatan = Kegiatan::where('slug', $slug)->first();
        $nextKegiatan = Kegiatan::whereNotIn('slug', [$slug])->where('is_active', '1')->limit(3)->orderByDesc('created_at')->get();

        return view('frontend.kegiatan', compact('kegiatan', 'nextKegiatan'));
    }

    public function daftarKegiatan()
    {
        $kegiatan = Kegiatan::where('is_active', '1')->orderByDesc('created_at')->get();

        return view('frontend.daftarkegiatan', compact('kegiatan'));
    }

    public function pengumuman($slug)
    {
        $pengumuman = Pengumuman::where('slug', $slug)->first();
        $nextPengumuman = Pengumuman::whereNotIn('slug', [$slug])->where('is_active', '1')->limit(3)->orderByDesc('created_at')->get();

        return view('frontend.pengumuman', compact('pengumuman', 'nextPengumuman'));
    }

    public function daftarPengumuman()
    {
        $pengumuman = Pengumuman::where('is_active', '1')->orderByDesc('created_at')->get();

        return view('frontend.daftarpengumuman', compact('pengumuman'));
    }

    public function waqaf()
    {
        $waqaf = Waqaf::all();

        return view('frontend.waqaf', compact('waqaf'));
    }

    public function gallery()
    {
        $galeri3 = Galeri::whereRaw('MOD(id, 3) = 1')->orderByDesc('updated_at')->get();
        $galeri2 = Galeri::whereRaw('MOD(id, 3) = 2')->orderByDesc('updated_at')->get();
        $galeri1 = Galeri::whereRaw('MOD(id, 3) = 0')->orderByDesc('updated_at')->get();

        return view('frontend.gallery', compact('galeri1', 'galeri2', 'galeri3'));
    }

    public function profil()
    {
        $guru = Guru::limit(4)->orderByDesc('updated_at')->get();

        return view('frontend.profil', compact('guru'));
    }

    public function guru()
    {
        $guru4 = Guru::whereRaw('MOD(id, 4) = 1')->orderByDesc('updated_at')->get();
        $guru3 = Guru::whereRaw('MOD(id, 4) = 2')->orderByDesc('updated_at')->get();
        $guru2 = Guru::whereRaw('MOD(id, 4) = 3')->orderByDesc('updated_at')->get();
        $guru1 = Guru::whereRaw('MOD(id, 4) = 0')->orderByDesc('updated_at')->get();

        return view('frontend.guru', compact('guru1', 'guru2', 'guru3', 'guru4'));
    }

    public function postPengumuman()
    {
        $pengumuman = Pengumuman::where('is_active', '1')->limit(3)->orderByDesc('created_at')->get();

        return response()->json($pengumuman);
    }

    public function postBerita()
    {
        $berita = Berita::where('is_active', '1')->limit(3)->orderByDesc('created_at')->get();
        return response()->json($berita);
    }

    public function postArtikel()
    {
        $artikel = Artikel::where('is_active', '1')->limit(3)->orderByDesc('created_at')->get();

        return response()->json($artikel);
    }

    public function postKegiatan()
    {
        $kegiatan = Kegiatan::where('is_active', '1')->limit(3)->orderByDesc('created_at')->get();

        return response()->json($kegiatan);
    }

    public function postKegiatanPrioritas()
    {
        $kegiatanPrioritas = Kegiatan::where('is_active', '1')->limit(1)->orderByDesc('created_at')->get();

        return response()->json($kegiatanPrioritas);
    }

    public function postBeritaPrioritas()
    {
        $beritaPrioritas = Berita::where('is_active', '1')->limit(1)->orderByDesc('created_at')->get();
        return response()->json($beritaPrioritas);
    }

    public function postArtikelPrioritas()
    {
        $artikelPrioritas = Artikel::where('is_active', '1')->limit(1)->orderByDesc('created_at')->get();

        return response()->json($artikelPrioritas);
    }

    public function postPengumumanPrioritas()
    {
        $pengumumanPrioritas = Pengumuman::where('is_active', '1')->limit(1)->orderByDesc('created_at')->get();

        return response()->json($pengumumanPrioritas);
    }

}
