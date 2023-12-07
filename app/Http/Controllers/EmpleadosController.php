<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            "nombre" => 'required',
            "cedula" => 'required|integer',
            "direccion" => 'string',
            "telefono" => 'string'
        ]);

        Empleado::create([
            "nombre" => $request->nombre,
            "cedula" => $request->cedula,
            "direccion" => $request->direccion,
            "telefono" => $request->telefono
        ]);

        return redirect()->route('home.index');

    }

    public function edit(Request $request, Int $id) {
        $this->validate($request, [
            "nombre" => 'required',
            "cedula" => 'required|integer',
            "direccion" => 'string',
            "telefono" => 'string'
        ]);

        $empleado = Empleado::where('id', '=', $id)->first();
        $empleado->nombre = $request->nombre;
        $empleado->cedula = $request->cedula;
        $empleado->direccion = $request->direccion;
        $empleado->telefono = $request->telefono;

        $empleado->save();

        return redirect()->route('home.index');

    }

    public function delete(Int $id) {
        $empleado = Empleado::where('id', '=', $id)->first();
        $empleado->delete();

        return redirect()->route('home.index');
    }

}
