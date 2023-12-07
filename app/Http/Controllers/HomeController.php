<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');    
    }

    public function index() {
        $empleados = Empleado::all();
        return view('home', ["empleados" => $empleados]);
    }

}
