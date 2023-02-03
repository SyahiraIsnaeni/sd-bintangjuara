<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ArtikelController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $artikel = Artikel::all();
        return view('backend.back.artikel.index', compact('artikel'));
    }

    public function create()
    {
        return view('backend.back.artikel.create');
    }

    public function history()
    {
        return view('backend.back.artikel.history', compact('artikel'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required|min:4',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->judul);
        $data['views'] = 0;
        $data['delete'] = 'N';
        $data['gambar_artikel'] = $request->file('gambar_artikel')->store('artikel');

        Artikel::create($data);

        return redirect()->route('artikel.index')->with(['success'=> 'Data berhasil tersimpan']);
    }

    public function show($id)
    {
        //
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
            return redirect()->route('artikel.index')->with(['success'=> 'Data berhasil terupdate']);
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
            return redirect()->route('artikel.index')->with(['success'=> 'Data berhasil terupdate']);
        }
    }

    public function destroy($id)
    {
//
//        $artikel = Artikel::find($id);
//        $artikel->update([
//            'judul' => 'N'
//        ]);
//
//        return redirect()->route('artikel.history')->with(['success'=> 'Data berhasil dihapus']);
        $artikel = Artikel::find($id);
        Storage::delete($artikel->gambar_artikel);
        $artikel->delete();

        return redirect()->route('artikel.index')->with(['success'=> 'Data berhasil dihapus']);
    }
}
