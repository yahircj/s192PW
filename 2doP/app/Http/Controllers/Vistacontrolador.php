<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validarCliente;

class Vistacontrolador extends Controller
{

    public function registrarClientes(validarCliente $peticionValidada){
            $cliente= $peticionValidada->input('txtcorreo');
    
            session()->flash('exito','Libro '.$cliente.' Guardado');
            return to_route('registrar');
        
    }
}
