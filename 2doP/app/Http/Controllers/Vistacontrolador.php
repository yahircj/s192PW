<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validarCliente;

class Vistacontrolador extends Controller
{

    public function registrarClientes(validarCliente $peticionValidada){
            $cliente= $peticionValidada->input('txtcorreo');
    
            session()->flash('exito','Se guardo el usuario: Ivan Isay');
            return to_route('Registro');
        
    }
}
