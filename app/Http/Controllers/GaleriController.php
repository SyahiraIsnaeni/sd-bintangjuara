<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class GaleriController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $galeri = Galeri::all()->sortByDesc('updated_at');

        return view('backend.back.galeri.index', compact('galeri'));
    }

    public function create()
    {
        return view('backend.back.galeri.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'judul_gambar' => 'required|min:3',
            'gambar_galeri' => 'required|image|mimes:jpeg,jpg,png',
        ]);

        $data = $request->all();

        if (is_null($data['judul_gambar'])) {
            Alert::error('Gagal', 'Data Gagal Tersimpan. Periksa kembali data yang dimasukkan');

            return redirect()->route('galeri.create');
        } else {
            $data['slug'] = Str::slug($request->judul_gambar);
            $data['gambar_galeri'] = $request->file('gambar_galeri')->store('galeri');

            Galeri::create($data);

            Alert::success('Berhasil', 'Data Berhasil Tersimpan');
        }

        return redirect()->route('galeri.index');
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
        $galeri = Galeri::find($id);
        Storage::delete($galeri->gambar_galeri);
        $galeri->delete();

        Alert::success('Dihapus', 'Data Berhasil Terhapus');

        return redirect()->route('galeri.index');
    }
}
