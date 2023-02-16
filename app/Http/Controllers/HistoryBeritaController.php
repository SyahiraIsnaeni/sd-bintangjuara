<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use RealRashid\SweetAlert\Facades\Alert;

class HistoryBeritaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $berita = Berita::all()->sortByDesc('updated_at');

        return view('backend.back.history.berita', compact('berita'));
    }

    public function destroy($id)
    {
        $berita = Berita::find($id);
        $berita->delete();

        Alert::success('Dihapus', 'Data Berhasil Terhapus');

        return redirect()->route('history-berita.index');
    }

    public function edit($id)
    {
        $berita = Berita::find($id);
        $berita->update([
            'delete' => 'N',
        ]);

        Alert::info('Dipulihkan', 'Data Berhasil Dipulihkan');

        return redirect()->route('history-berita.index');
    }
}
