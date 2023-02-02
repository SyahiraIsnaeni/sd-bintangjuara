<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $user = User::all();
        return view('backend.back.user.index', compact('user'));
    }
    public function create()
    {


    }

    public function store(Request $request)
    {

        $data = $request->all();
        $data['name'] = Str::slug($request->judul);
        $data['email'] = 0;
        $data['gambar_pengumuman'] = $request->file('gambar_pengumuman')->store('pengumuman');

        Pengumuman::create($data);

        return redirect()->route('pengumuman.index')->with(['success'=> 'Data berhasil tersimpan']);
    }

    public function show($id)
    {
        //
    }


    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('user.index')->with(['success'=> 'Data berhasil dihapus']);
    }
}

