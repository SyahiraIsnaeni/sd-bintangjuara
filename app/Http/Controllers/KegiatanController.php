<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan;
use App\Models\KategoriKegiatan;
use Illuminate\Support\Str;
// use Iluminate\Support\Facades\Auth;

class KegiatanController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $kegiatan = Kegiatan::all();
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

        return redirect()->route('kegiatan.index')->with(['success'=> 'Data berhasil tersimpan']);
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
