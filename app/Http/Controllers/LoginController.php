<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() 
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            "email" => 'required|email',
            "password" => 'required|min:8|max:12'
        ]);

        Auth::attempt($request->only('email', 'password'));

        return redirect()->route('home.index');
    }
}
