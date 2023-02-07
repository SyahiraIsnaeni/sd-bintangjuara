<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;

class HistoryPengumumanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $pengumuman = Pengumuman::all();
        return view('backend.back.history.pengumuman', compact('pengumuman'));
    }

    public function destroy($id)
    {
        $pengumuman = Pengumuman::find($id);
        $pengumuman->delete();

        return redirect()->route('history-pengumuman.index')->with(['success'=> 'Data berhasil dihapus']);
    }
}
