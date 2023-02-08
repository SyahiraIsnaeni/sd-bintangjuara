<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HistoryArtikelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $artikel = Artikel::all();
        return view('backend.back.history.artikel', compact('artikel'));
    }

    public function destroy($id)
    {
        $artikel = Artikel::find($id);
        $artikel->delete();

        Alert::error('Dihapus', 'Data Berhasil Terhapus');
        return redirect()->route('history-artikel.index');
    }
}
