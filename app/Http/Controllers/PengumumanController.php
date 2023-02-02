<?php

namespace App\Http\Controllers;

use App\Models\KategoriPengumuman;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PengumumanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $pengumuman = Pengumuman::all();
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
            'judul' => 'required|min:4',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->judul);
        $data['views'] = 0;
        $data['gambar_pengumuman'] = $request->file('gambar_pengumuman')->store('pengumuman');

        Pengumuman::create($data);

        return redirect()->route('pengumuman.index')->with(['success'=> 'Data berhasil tersimpan']);
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
                'judul' => $request->judul,
                'body' => $request->body,
                'slug' => Str::slug($request->judul),
                'kategori_pengumuman_id' => $request->kategori_pengumuman_id,
                'is_active' => $request->is_active,
            ]);
            return redirect()->route('pengumuman.index')->with(['success'=> 'Data berhasil terupdate']);
        } else {
            $pengumuman = Pengumuman::find($id);
            Storage::delete($pengumuman->gambar_pengumuman);
            $pengumuman->update([
                'judul' => $request->judul,
                'body' => $request->body,
                'slug' => Str::slug($request->judul),
                'kategori_pengumuman_id' => $request->kategori_pengumuman_id,
                'is_active' => $request->is_active,
                'gambar_pengumuman' => $request->file('gambar_pengumuman')->store('pengumuman'),
            ]);
            return redirect()->route('pengumuman.index')->with(['success'=> 'Data berhasil terupdate']);
        }
    }

    public function destroy($id)
    {
        $pengumuman = Pengumuman::find($id);
        Storage::delete($pengumuman->gambar_pengumuman);
        $pengumuman->delete();

        return redirect()->route('pengumuman.index')->with(['success'=> 'Data berhasil dihapus']);
    }
}
