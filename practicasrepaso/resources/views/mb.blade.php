@extends('layouts.plantilla1')

@section('titulo','Calculadora MB')

@section('contenido')
    
    <x-seleccionarCalculadora></x-seleccionarCalculadora>

    <div>
        <form method="POST" action="{{ route('convertirMb') }}">
            @csrf
            <label for="mb">MB:</label>
            <input type="number" step="any" name="mb" id="mb">
            <button type="submit">Convertir a GB</button>
        </form>
    
        @if (isset($resultado))
            <p>{{ $mb }} MB = {{ $resultado }} GB</p>
        @endif
    </div>
    

    @endsection

