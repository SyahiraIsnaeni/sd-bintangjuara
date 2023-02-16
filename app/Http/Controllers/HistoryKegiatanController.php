<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use RealRashid\SweetAlert\Facades\Alert;

class HistoryKegiatanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $kegiatan = Kegiatan::all()->sortByDesc('updated_at');

        return view('backend.back.history.kegiatan', compact('kegiatan'));
    }

    public function destroy($id)
    {
        $kegiatan = Kegiatan::find($id);
        $kegiatan->delete();

        Alert::success('Dihapus', 'Data Berhasil Terhapus');

        return redirect()->route('history-kegiatan.index');
    }

    public function edit($id)
    {
        $kegiatan = Kegiatan::find($id);
        $kegiatan->update([
            'delete' => 'N',
        ]);

        Alert::info('Dipulihkan', 'Data Berhasil Dipulihkan');

        return redirect()->route('history-kegiatan.index');
    }
}
