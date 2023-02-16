<?php

namespace App\Http\Controllers;

use App\Models\KategoriKegiatan;
use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
// use Iluminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class KegiatanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $kegiatan = Kegiatan::all()->sortByDesc('updated_at');

        return view('backend.back.kegiatan.index', compact('kegiatan'));
    }

    public function create()
    {
        $kategori_kegiatan = KategoriKegiatan::all();

        return view('backend.back.kegiatan.create', compact('kategori_kegiatan'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'gambar_artikel' => 'required|image|mimes:jpeg,jpg,png',
        ]);

        $data = $request->all();
        if (is_null($data['nama_penulis']) || is_null($data['judul']) || is_null($data['body']) || is_null($data['kategori_kegiatan_id'])) {
            Alert::error('Gagal', 'Data Gagal Tersimpan. Periksa kembali data yang dimasukkan');

            return redirect()->route('kegiatan.create');
        } else {
            $data['slug'] = Str::slug($request->judul);
            $data['gambar_artikel'] = $request->file('gambar_artikel')->store('kegiatan');

            Kegiatan::create($data);
            Alert::success('Berhasil', 'Data Berhasil Tersimpan');
        }

        return redirect()->route('kegiatan.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $kegiatan = Kegiatan::find($id);
        $kategori_kegiatan = KategoriKegiatan::all();

        return view('backend.back.kegiatan.edit', compact('kegiatan', 'kategori_kegiatan'));
    }

    public function update(Request $request, $id)
    {
        if (empty($request->file('gambar_artikel'))) {
            $kegiatan = Kegiatan::find($id);
            $kegiatan->update([
                'nama_penulis' => $request->nama_penulis,
                'judul' => $request->judul,
                'body' => $request->body,
                'slug' => Str::slug($request->judul),
                'kategori_kegiatan_id' => $request->kategori_kegiatan_id,
                'is_active' => $request->is_active,
            ]);

            Alert::info('Diubah', 'Data Berhasil Terubah');

            return redirect()->route('kegiatan.index');
        } else {
            $kegiatan = Kegiatan::find($id);
            Storage::delete($kegiatan->gambar_artikel);
            $kegiatan->update([
                'nama_penulis' => $request->nama_penulis,
                'judul' => $request->judul,
                'body' => $request->body,
                'slug' => Str::slug($request->judul),
                'kategori_kegiatan_id' => $request->kategori_kegiatan_id,
                'is_active' => $request->is_active,
                'gambar_artikel' => $request->file('gambar_artikel')->store('kegiatan'),
            ]);

            Alert::info('Diubah', 'Data Berhasil Terubah');

            return redirect()->route('kegiatan.index');
        }
    }

    public function destroy($id)
    {
        $kegiatan = Kegiatan::find($id);
        $kegiatan->update([
            'delete' => 'Y',
        ]);

        Alert::success('Dihapus', 'Data Berhasil Terhapus');

        return redirect()->route('kegiatan.index');
    }
}
