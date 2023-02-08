<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HistoryKegiatanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $kegiatan = Kegiatan::all();
        return view('backend.back.history.kegiatan', compact('kegiatan'));
    }

    public function destroy($id)
    {
        $kegiatan = Kegiatan::find($id);
        $kegiatan->delete();

        Alert::error('Dihapus', 'Data Berhasil Terhapus');
        return redirect()->route('history-kegiatan.index');
    }
}
