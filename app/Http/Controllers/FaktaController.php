<?php

namespace App\Http\Controllers;

use App\Models\Fakta;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FaktaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $fakta = Fakta::all()->sortByDesc('updated_at');
        return view('backend.back.fakta.index', compact('fakta'));
    }

    public function create()
    {
        return view('backend.back.fakta.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        if(is_null($data['jumlah_siswa']) || is_null($data['jumlah_guru']) || is_null($data['tahun_berjalan'])){

            Alert::error('Gagal', 'Data Gagal Tersimpan. Periksa kembali data yang dimasukkan');
            return redirect()->route('fakta.create');
        }else{
            Fakta::create($data);

        }

        Alert::success('Berhasil', 'Data Berhasil Tersimpan');
        return redirect()->route('fakta.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $fakta = Fakta::find($id);

        return view('backend.back.fakta.edit', compact('fakta'));
    }

    public function update(Request $request, $id)
    {
        $fakta = Fakta::find($id);
        $fakta->update([
            'jumlah_siswa' => $request->jumlah_siswa,
            'jumlah_guru' => $request->jumlah_guru,
            'tahun_berjalan' => $request->tahun_berjalan,
        ]);

        Alert::info('Diubah', 'Data Berhasil Terubah');
        return redirect()->route('fakta.index');

    }

    public function destroy($id)
    {
        $fakta = Fakta::find($id);
        $fakta->delete();

        Alert::success('Dihapus', 'Data Berhasil Terhapus');
        return redirect()->route('fakta.index');
    }
}
