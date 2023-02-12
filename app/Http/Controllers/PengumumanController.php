<?php

namespace App\Http\Controllers;

use App\Models\KategoriPengumuman;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class PengumumanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $pengumuman = Pengumuman::all()->sortByDesc('updated_at');
        return view('backend.back.pengumuman.index', compact('pengumuman'));
    }

    public function create()
    {
        $kategori_pengumuman = KategoriPengumuman::all();
        return view('backend.back.pengumuman.create', compact('kategori_pengumuman'));

    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'gambar_pengumuman' => 'required|image|mimes:jpeg,jpg,png',
        ]);

        $data = $request->all();
        if(is_null($data['nama_penulis']) || is_null($data['judul']) || is_null($data['body']) || is_null($data['kategori_pengumuman_id'])){

            Alert::error('Gagal', 'Data Gagal Tersimpan. Periksa kembali data yang dimasukkan');
            return redirect()->route('pengumuman.create');
        }else{
            $data['slug'] = Str::slug($request->judul);
            $data['gambar_pengumuman'] = $request->file('gambar_pengumuman')->store('pengumuman');

            Pengumuman::create($data);
            Alert::success('Berhasil', 'Data Berhasil Tersimpan');
        }

        return redirect()->route('pengumuman.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $pengumuman = Pengumuman::find($id);
        $kategori_pengumuman = KategoriPengumuman::all();

        return view('backend.back.pengumuman.edit', compact('pengumuman', 'kategori_pengumuman'));
    }

    public function update(Request $request, $id)
    {
        if(empty($request->file('gambar_pengumuman'))) {
            $pengumuman = Pengumuman::find($id);
            $pengumuman->update([
                'nama_penulis' => $request->nama_penulis,
                'judul' => $request->judul,
                'body' => $request->body,
                'slug' => Str::slug($request->judul),
                'kategori_pengumuman_id' => $request->kategori_pengumuman_id,
                'is_active' => $request->is_active,
            ]);

            Alert::info('Diubah', 'Data Berhasil Terubah');
            return redirect()->route('pengumuman.index');
        } else {
            $pengumuman = Pengumuman::find($id);
            Storage::delete($pengumuman->gambar_pengumuman);
            $pengumuman->update([
                'nama_penulis' => $request->nama_penulis,
                'judul' => $request->judul,
                'body' => $request->body,
                'slug' => Str::slug($request->judul),
                'kategori_pengumuman_id' => $request->kategori_pengumuman_id,
                'is_active' => $request->is_active,
                'gambar_pengumuman' => $request->file('gambar_pengumuman')->store('pengumuman'),
            ]);

            Alert::info('Diubah', 'Data Berhasil Terubah');
            return redirect()->route('pengumuman.index');
        }
    }

    public function destroy($id)
    {
        $pengumuman = Pengumuman::find($id);
        $pengumuman->update([
            'delete' => 'Y'
        ]);

        Alert::success('Dihapus', 'Data Berhasil Terhapus');
        return redirect()->route('pengumuman.index');
    }
}
