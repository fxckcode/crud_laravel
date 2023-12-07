<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index() 
    {
        return view('auth.register');
    }

    public function store(Request $request) {
        $this->validate($request, [
            "name" => 'required',
            "email" => 'required|email|unique:users,email',
            "password" => 'required|min:8|max:12'
        ]);

        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => $request->password
        ]);

        Auth::attempt($request->only('email', 'password'));

        return redirect()->route('home.index');
    
    }
}
