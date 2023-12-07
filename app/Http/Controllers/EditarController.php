<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EditarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Int $id) 
    {
        $empleado = Empleado::where('id', '=', $id)->first();
        return view('editar', ["empleado" => $empleado]);
    }
}
