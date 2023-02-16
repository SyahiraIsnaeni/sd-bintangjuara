<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Kegiatan;
use App\Models\Pengumuman;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $pengumuman = Pengumuman::all()->sortByDesc('updated_at');
        $berita = Berita::all()->sortByDesc('updated_at');
        $artikel = Artikel::all()->sortByDesc('updated_at');
        $kegiatan = Kegiatan::all()->sortByDesc('updated_at');
        $admin = User::all()->sortByDesc('updated_at');
        $galeri = Galeri::all()->sortByDesc('updated_at');

        $drafPengumuman = Pengumuman::where('is_active', '0')->get();
        $drafBerita = Berita::where('is_active', '0')->get();
        $drafKegiatan = Kegiatan::where('is_active', '0')->get();
        $drafArtikel = Artikel::where('is_active', '0')->get();

        return view('backend.back.dashboard', compact('pengumuman', 'berita', 'artikel', 'kegiatan', 'admin', 'galeri', 'drafBerita', 'drafPengumuman', 'drafArtikel', 'drafKegiatan'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
