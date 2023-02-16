<?php

namespace App\Http\Controllers;

use App\Models\KategoriBerita;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class KategoriBeritaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $kategori_berita = KategoriBerita::all();

        return view('backend.back.kategoriberita.index', compact('kategori_berita'));
    }

    public function create()
    {
        return view('backend.back.kategoriberita.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_kategori' => 'required|min:4',
        ]);

        $kategori_berita = KategoriBerita::create([
            'nama_kategori' => $request->nama_kategori,
            'slug' => Str::slug($request->nama_kategori),
        ]);

        Alert::success('Berhasil', 'Data Berhasil Tersimpan');

        return redirect()->route('kategoriberita.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $kategori_berita = KategoriBerita::find($id);

        return view('backend.back.kategoriberita.edit', compact('kategori_berita'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama_kategori);

        $kategori_berita = KategoriBerita::findOrFail($id);
        $kategori_berita->update($data);

        Alert::info('Diubah', 'Data Berhasil Terubah');

        return redirect()->route('kategoriberita.index');
    }

    public function destroy($id)
    {
        $kategori_berita = KategoriBerita::find($id);
        $kategori_berita->delete();

        Alert::success('Dihapus', 'Data Berhasil Terhapus');

        return redirect()->route('kategoriberita.index');
    }
}
