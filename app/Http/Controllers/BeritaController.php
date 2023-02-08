<?php

namespace App\Http\Controllers;

use App\Models\KategoriBerita;
use App\Models\Berita;
use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class BeritaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $berita = Berita::all();
        return view('backend.back.berita.index', compact('berita'));
    }

    public function create()
    {
        $kategori_berita = KategoriBerita::all();
        return view('backend.back.berita.create', compact('kategori_berita'));

    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required|min:4',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->judul);
        $data['views'] = 0;
        $data['gambar_berita'] = $request->file('gambar_berita')->store('berita');

        Berita::create($data);

        Alert::success('Berhasil', 'Data Berhasil Tersimpan');
        return redirect()->route('berita.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $berita = Berita::find($id);
        $kategori_berita = KategoriBerita::all();

        return view('backend.back.berita.edit', compact('berita', 'kategori_berita'));
    }

    public function update(Request $request, $id)
    {
        if(empty($request->file('gambar_berita'))) {
            $berita = Berita::find($id);
            $berita->update([
                'judul' => $request->judul,
                'body' => $request->body,
                'slug' => Str::slug($request->judul),
                'kategori_berita_id' => $request->kategori_berita_id,
                'is_active' => $request->is_active,
            ]);

            Alert::info('Diubah', 'Data Berhasil Terubah');
            return redirect()->route('berita.index');
        } else {
            $berita = Berita::find($id);
            Storage::delete($berita->gambar_berita);
            $berita->update([
                'judul' => $request->judul,
                'body' => $request->body,
                'slug' => Str::slug($request->judul),
                'kategori_berita_id' => $request->kategori_berita_id,
                'is_active' => $request->is_active,
                'gambar_berita' => $request->file('gambar_berita')->store('berita'),
            ]);

            Alert::info('Diubah', 'Data Berhasil Terubah');
            return redirect()->route('berita.index');
        }
    }

    public function destroy($id)
    {
        $berita = Berita::find($id);
        $berita->update([
            'delete' => 'Y'
        ]);

        Alert::error('Dihapus', 'Data Berhasil Terhapus');
        return redirect()->route('berita.index');
    }
}
