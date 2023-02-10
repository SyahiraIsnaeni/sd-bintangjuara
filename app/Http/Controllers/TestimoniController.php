<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class TestimoniController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $testimoni = Testimoni::all()->sortByDesc('updated_at');
        return view('backend.back.testimoni.index', compact('testimoni'));
    }

    public function create()
    {
        return view('backend.back.testimoni.create');
    }

    public function history()
    {

    }

    public function store(Request $request)
    {

        $data = $request->all();
        $data['foto'] = $request->file('foto')->store('testimoni');

        Testimoni::create($data);

        Alert::success('Berhasil', 'Data Berhasil Tersimpan');
        return redirect()->route('testimoni.index');
    }

    public function edit($id)
    {
        $testimoni = Testimoni::find($id);

        return view('backend.back.testimoni.edit', compact('testimoni'));
    }

    public function update(Request $request, $id)
    {
        if(empty($request->file('foto'))) {
            $testimoni = Testimoni::find($id);
            $testimoni->update([
                'nama' => $request->nama,
                'testimoni' => $request->testimoni
            ]);
            Alert::info('Diubah', 'Data Berhasil Terubah');
            return redirect()->route('testimoni.index');
        } else {
            $testimoni = Testimoni::find($id);
            Storage::delete($testimoni->foto);
            $testimoni->update([
                'nama' => $request->nama,
                'foto' => $request->file('foto')->store('testimoni'),
                'testimoni' => $request->testimoni
            ]);

            Alert::info('Diubah', 'Data Berhasil Terubah');
            return redirect()->route('testimoni.index');
        }
    }

    public function destroy($id)
    {
        $testimoni = Testimoni::find($id);
        $testimoni->delete();

        Alert::error('Dihapus', 'Data Berhasil Terhapus');
        return redirect()->route('testimoni.index');
    }
}
