<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use RealRashid\SweetAlert\Facades\Alert;

class HistoryPengumumanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $pengumuman = Pengumuman::all()->sortByDesc('updated_at');

        return view('backend.back.history.pengumuman', compact('pengumuman'));
    }

    public function destroy($id)
    {
        $pengumuman = Pengumuman::find($id);
        $pengumuman->delete();

        Alert::success('Dihapus', 'Data Berhasil Terhapus');

        return redirect()->route('history-pengumuman.index');
    }

    public function edit($id)
    {
        $pengumuman = Pengumuman::find($id);
        $pengumuman->update([
            'delete' => 'N',
        ]);

        Alert::info('Dipulihkan', 'Data Berhasil Dipulihkan');

        return redirect()->route('history-pengumuman.index');
    }
}
