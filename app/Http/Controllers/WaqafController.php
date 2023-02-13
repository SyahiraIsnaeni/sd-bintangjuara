<?php

namespace App\Http\Controllers;

use App\Models\Waqaf;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class WaqafController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $waqaf = Waqaf::all()->sortByDesc('updated_at');
        return view('backend.back.waqaf.index', compact('waqaf'));
    }

    public function create()
    {
        return view('backend.back.waqaf.create');
    }

    public function store(Request $request)
    {

        $data = $request->all();
        $waqaf = Waqaf::all();
        if($waqaf->count('id') == 1){
            Alert::error('Gagal', 'Tidak Dapat Menambahkan Data Lebih Dari Satu');
            return redirect()->route('waqaf.index');
        }else{
            if(is_null($data['nama_bank']) || is_null($data['nama_rekening']) || is_null($data['nomor_rekening']) || is_null($data['total_kebutuhan']) || is_null($data['dana_terkumpul']) || is_null($data['total_kekurangan'])){

                Alert::error('Gagal', 'Data Gagal Tersimpan. Periksa kembali data yang dimasukkan');
                return redirect()->route('waqaf.create');
            }else{
                Waqaf::create($data);

                Alert::success('Berhasil', 'Data Berhasil Tersimpan');
            }
        }

        return redirect()->route('waqaf.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $waqaf = Waqaf::find($id);

        return view('backend.back.waqaf.edit', compact('waqaf'));
    }

    public function update(Request $request, $id)
    {
        $waqaf = Waqaf::find($id);
        $waqaf->update([
            'nama_bank' => $request->nama_bank,
            'nama_rekening' => $request->nama_rekening,
            'nomor_rekening' => $request->nomor_rekening,
            'total_kebutuhan' => $request->total_kebutuhan,
            'dana_terkumpul' => $request->dana_terkumpul,
            'total_kekurangan' => $request->total_kekurangan,
        ]);

        Alert::info('Diubah', 'Data Berhasil Terubah');
        return redirect()->route('waqaf.index');

    }

    public function destroy($id)
    {
        $waqaf = Waqaf::find($id);
        $waqaf->delete();

        Alert::success('Dihapus', 'Data Berhasil Terhapus');
        return redirect()->route('waqaf.index');
    }
}
