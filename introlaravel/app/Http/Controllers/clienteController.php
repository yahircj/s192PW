<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Http\Requests\validadorClientes;

class clienteController extends Controller
{
    /**
     * Consulta el crud.
     */
    public function index()
    {
        $ConsultaClientes = DB::table('clientes')->get();
        return view('clientes', compact('ConsultaClientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(validadorClientes $request)
    {
        DB::table('clientes')->insert([
            "nombre" => $request->input('txtnombre'),
            "apellido" => $request->input('txtapellido'),
            "correo" => $request->input('txtcorreo'),
            "telefono" => $request->input('txttelefono'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        $usuario = $request->input('txtnombre');

        session()->flash('exito', 'usuari@ guardado: ' . $usuario);
        return to_route('formulario');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * VISTA
     */

    public function edit(string $id)
    {
        return view('FormularioUpdate');
    }

    /**
     * aCTUALIZAR
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Elminar un registro.
     */
    public function destroy(string $id)
    {
        $nombre = DB::table('clientes')->where('id', $id)->value('nombre');

        $deleted = DB::table('clientes')->where('id', $id)->delete();

        session()->flash('exito', 'usuari@ ' . $nombre . ' eliminado correctamente');
        return to_route('clientes');
    }
}
