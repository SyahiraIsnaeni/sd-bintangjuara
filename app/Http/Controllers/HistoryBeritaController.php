<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class HistoryBeritaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $berita = Berita::all();
        return view('backend.back.history.berita', compact('berita'));
    }

    public function destroy($id)
    {
        $berita = Berita::find($id);
        $berita->delete();

        return redirect()->route('history-berita.index')->with(['success'=> 'Data berhasil dihapus']);
    }
}
