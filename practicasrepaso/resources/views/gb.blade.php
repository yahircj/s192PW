@extends('layouts.plantilla1')

@section('titulo','Calculadora GB')

@section('contenido')
    
    <x-seleccionarCalculadora></x-seleccionarCalculadora>

    <div>
        <form method="POST" action="{{ route('convertirGb') }}">
            @csrf
            <label for="gb">GB:</label>
            <input type="number" step="any" name="gb" id="gb">
            <button type="submit">Convertir a MB</button>
        </form>
    
        @if (isset($resultado))
            <p>{{ $gb }} GB = {{ $resultado }} MB</p>
        @endif
    </div>
    

    @endsection

    