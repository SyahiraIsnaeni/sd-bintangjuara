<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Galeri;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GaleriController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $galeri = Galeri::all();
        return view('backend.back.galeri.index', compact('galeri'));
    }

    public function create()
    {
        return view('backend.back.galeri.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'judul_gambar' => 'required|min:4',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->judul_gambar);
        $data['gambar_galeri'] = $request->file('gambar_galeri')->store('galeri');

        Galeri::create($data);

        return redirect()->route('galeri.index')->with(['success'=> 'Data berhasil tersimpan']);
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

        return redirect()->route('galeri.index')->with(['success'=> 'Data berhasil dihapus']);
    }
}
