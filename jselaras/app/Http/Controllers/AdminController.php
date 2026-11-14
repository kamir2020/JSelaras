<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Hash;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users',compact('users'));
    }

    public function create()
    {
        return view('admin.create_user');
    }

    public function store(Request $request)
    {

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'role'=>$request->role
        ]);

        return redirect()->route('users.index');
    }
}
