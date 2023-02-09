<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use App\Models\Pengumuman;
use App\Models\Berita;
use App\Models\Artikel;
use App\Models\Kegiatan;
use App\Models\User;

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

        return view('backend.back.dashboard', compact('pengumuman','berita', 'artikel', 'kegiatan', 'admin', 'galeri'));
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
