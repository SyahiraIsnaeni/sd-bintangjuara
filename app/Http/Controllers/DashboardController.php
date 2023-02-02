<?php

namespace App\Http\Controllers;

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
        $pengumuman = Pengumuman::all();
        $berita = Berita::all();
        $artikel = Artikel::all();
        $kegiatan = Kegiatan::all();
        $admin = User::all();
        return view('backend.back.dashboard', compact('pengumuman','berita', 'artikel', 'kegiatan', 'admin'));
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
