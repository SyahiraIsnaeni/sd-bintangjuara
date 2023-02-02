<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
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
}
