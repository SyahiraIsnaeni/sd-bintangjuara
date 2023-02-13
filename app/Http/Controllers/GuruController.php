<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;

class GuruController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $guru = Guru::all()->sortByDesc('updated_at');
        return view('backend.back.guru.index', compact('guru'));
    }

    public function create()
    {
        return view('backend.back.guru.create');

    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'foto' => 'required|image|mimes:jpeg,jpg,png',
        ]);

        $data = $request->all();
        if(is_null($data['nama']) || is_null($data['jabatan']) || is_null($data['nip'])){

            Alert::error('Gagal', 'Data Gagal Tersimpan. Periksa kembali data yang dimasukkan');
            return redirect()->route('guru.create');
        }else{
            $data['foto'] = $request->file('foto')->store('guru');

            Guru::create($data);

            Alert::success('Berhasil', 'Data Berhasil Tersimpan');
        }

        return redirect()->route('guru.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $guru = Guru::find($id);

        return view('backend.back.guru.edit', compact('guru'));
    }

    public function update(Request $request, $id)
    {
        $guru = Guru::find($id);
        if(is_null($guru['nama']) || is_null($guru['jabatan']) || is_null($guru['nip'])){

            Alert::error('Gagal', 'Data Gagal Tersimpan. Periksa kembali data yang dimasukkan');
            return redirect()->route('guru.edit');
        }else{
            if(empty($request->file('foto'))) {
                $guru->update([
                    'nama' => $request->nama,
                    'jabatan' => $request->jabatan,
                    'nip' => $request->nip,
                ]);

                Alert::info('Diubah', 'Data Berhasil Terubah');
                return redirect()->route('guru.index');
            } else {
                Storage::delete($guru->foto);
                $guru->update([
                    'nama' => $request->nama,
                    'jabatan' => $request->jabatan,
                    'nip' => $request->nip,
                    'foto' => $request->file('foto')->store('guru'),
                ]);

                Alert::info('Diubah', 'Data Berhasil Terubah');
                return redirect()->route('guru.index');
            }
        }

    }

    public function destroy($id)
    {
        $guru = Guru::find($id);
        $guru->delete();

        Alert::success('Dihapus', 'Data Berhasil Terhapus');
        return redirect()->route('guru.index');
    }
}
