<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class card extends Component
{
    public $encabezado;
    public $titulo;
    public $txtBoton;
        
    public function __construct($encabezado, $titulo, $txtBoton)
    {

        $this->encabezado = $encabezado;
        $this->titulo = $titulo;
        $this->txtBoton = $txtBoton;

    }

    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
