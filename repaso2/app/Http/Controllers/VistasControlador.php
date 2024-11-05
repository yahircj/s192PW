<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorLibro;
use Illuminate\Http\Request;

class VistasControlador extends Controller
{
    public function home(){
        return view('principal');
    }

    public function formulario(){
        return view('registroLibro');
    }
    
    public function registroLibro(validadorLibro $peticionValidada){

        $libro= $peticionValidada->input('txttitulo');

        session()->flash('exito','Libro '.$libro.' Guardado');
        return to_route('Libro');
    }
}
