<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class ArtikelController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $artikel = Artikel::all()->sortByDesc('updated_at');
        return view('backend.back.artikel.index', compact('artikel'));
    }

    public function create()
    {
        return view('backend.back.artikel.create');
    }

    public function history()
    {

    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required|min:4',
            'gambar_artikel' => 'required|image|mimes:jpeg,jpg,png',
        ]);

        $data = $request->all();
        if(is_null($data['judul']) || is_null($data['body'])){

            Alert::error('Gagal', 'Data Gagal Tersimpan. Periksa kembali data yang dimasukkan');
            return redirect()->route('artikel.create');
        }else{
            $data['slug'] = Str::slug($request->judul);
            $data['gambar_artikel'] = $request->file('gambar_artikel')->store('artikel');

            Artikel::create($data);

            Alert::success('Berhasil', 'Data Berhasil Tersimpan');
        }

        return redirect()->route('artikel.index');
    }

    public function edit($id)
    {
        $artikel = Artikel::find($id);

        return view('backend.back.artikel.edit', compact('artikel'));
    }

    public function update(Request $request, $id)
    {
        if(empty($request->file('gambar_artikel'))) {
            $artikel = Artikel::find($id);
            $artikel->update([
                'judul' => $request->judul,
                'body' => $request->body,
                'slug' => Str::slug($request->judul),
                'is_active' => $request->is_active,
            ]);
            Alert::info('Diubah', 'Data Berhasil Terubah');
            return redirect()->route('artikel.index');
        } else {
            $artikel = Artikel::find($id);
            Storage::delete($artikel->gambar_artikel);
            $artikel->update([
                'judul' => $request->judul,
                'body' => $request->body,
                'slug' => Str::slug($request->judul),
                'is_active' => $request->is_active,
                'gambar_artikel' => $request->file('gambar_artikel')->store('artikel'),
            ]);

            Alert::info('Diubah', 'Data Berhasil Terubah');
            return redirect()->route('artikel.index');
        }
    }

    public function destroy($id)
    {

        $artikel = Artikel::find($id);
        $artikel->update([
            'delete' => 'Y'
        ]);

        Alert::success('Dihapus', 'Data Berhasil Terhapus');
        return redirect()->route('artikel.index');
    }
}
