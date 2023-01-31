<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriKegiatan;
use Illuminate\Support\Str;


class KategoriKegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori_kegiatan = KategoriKegiatan::all();
        return view('backend.back.kategorikegiatan.index', compact('kategori_kegiatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.back.kategorikegiatan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_kategori' => 'required|min:4',
        ]);

        $kategori_kegiatan = KategoriKegiatan::create([
            'nama_kategori' => $request->nama_kategori,
            'slug' => Str::slug($request->nama_kategori)
        ]);

        return redirect()->route('kategorikegiatan.index')->with(['success'=> 'Data berhasil tersimpan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori_kegiatan = KategoriKegiatan::find($id);

        return view('backend.back.kategorikegiatan.edit', compact('kategori_kegiatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama_kategori);

        $kategori_kegiatan = KategoriKegiatan::findOrFail($id);
        $kategori_kegiatan->update($data);

        return redirect()->route('kategorikegiatan.index')->with(['update'=> 'Data berhasil terupdate']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori_kegiatan = KategoriKegiatan::find($id);
        $kategori_kegiatan->delete();

        return redirect()->route('kategorikegiatan.index')->with(['success'=> 'Data berhasil dihapus']);
    }
}
