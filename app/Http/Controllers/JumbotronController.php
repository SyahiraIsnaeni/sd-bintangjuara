<?php

namespace App\Http\Controllers;

use App\Models\Jumbotron;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class JumbotronController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $jumbotron = Jumbotron::all()->sortByDesc('updated_at');
        return view('backend.back.jumbotron.index', compact('jumbotron'));
    }

    public function create()
    {
        return view('backend.back.jumbotron.create');
    }

    public function history()
    {

    }

    public function store(Request $request)
    {

        $data = $request->all();
        $data['foto'] = $request->file('foto')->store('jumbotron');

        Jumbotron::create($data);

        Alert::success('Berhasil', 'Data Berhasil Tersimpan');
        return redirect()->route('jumbotron.index');
    }

    public function destroy($id)
    {
        $jumbotron = Jumbotron::find($id);
        $jumbotron->delete();

        Alert::error('Dihapus', 'Data Berhasil Terhapus');
        return redirect()->route('jumbotron.index');
    }
}
