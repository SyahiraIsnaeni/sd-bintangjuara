<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan;
use App\Models\KategoriKegiatan;
use Illuminate\Support\Str;
// use Iluminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
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
            'judul' => 'required|min:4',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->judul);
        $data['views'] = 0;
        $data['gambar_artikel'] = $request->file('gambar_artikel')->store('kegiatan');

        Kegiatan::create($data);

        Alert::success('Berhasil', 'Data Berhasil Tersimpan');
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
        if(empty($request->file('gambar_artikel'))) {
        $kegiatan = Kegiatan::find($id);
        $kegiatan->update([
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
            'delete' => 'Y'
        ]);

        Alert::error('Dihapus', 'Data Berhasil Terhapus');
        return redirect()->route('kegiatan.index');
    }
}
