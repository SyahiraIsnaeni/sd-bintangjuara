<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriKegiatan;
use Illuminate\Support\Str;


class KategoriKegiatanController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $kategori_kegiatan = KategoriKegiatan::all();
        return view('backend.back.kategorikegiatan.index', compact('kategori_kegiatan'));
    }

    public function create()
    {
        return view('backend.back.kategorikegiatan.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_kategori' => 'required|min:4',
        ]);

        $kategori_kegiatan = KategoriKegiatan::create([
            'nama_kategori' => $request->nama_kategori,
            'slug' => Str::slug($request->nama_kategori)
        ]);

        return redirect()->route('kategorikegiatan.index')->with(['success'=> 'Data berhasil tersimpan']);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $kategori_kegiatan = KategoriKegiatan::find($id);

        return view('backend.back.kategorikegiatan.edit', compact('kategori_kegiatan'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama_kategori);

        $kategori_kegiatan = KategoriKegiatan::findOrFail($id);
        $kategori_kegiatan->update($data);

        return redirect()->route('kategorikegiatan.index')->with(['update'=> 'Data berhasil terupdate']);
    }

    public function destroy($id)
    {
        $kategori_kegiatan = KategoriKegiatan::find($id);
        $kategori_kegiatan->delete();

        return redirect()->route('kategorikegiatan.index')->with(['success'=> 'Data berhasil dihapus']);
    }
}
