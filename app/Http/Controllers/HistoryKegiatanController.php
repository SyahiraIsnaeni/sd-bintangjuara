<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;

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

        return redirect()->route('history-kegiatan.index')->with(['success'=> 'Data berhasil dihapus']);
    }
}
