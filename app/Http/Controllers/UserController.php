<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

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
        $user = User::all();
        return view('backend.back.user.create', compact('user'));
    }

    public function store(Request $request)
    {

        $validate = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        return redirect()->route('admin.index')->with(['success'=> 'Data berhasil tersimpan']);
    }

    public function show($id)
    {
        //
    }


    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('admin.index')->with(['success'=> 'Data berhasil dihapus']);
    }
}

