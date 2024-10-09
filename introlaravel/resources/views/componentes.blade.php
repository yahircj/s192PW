@extends('layouts.plantilla1')

@section('titulo','Componentes')

@section('contenido')
    
    <x-Card encabezado="Componente" titulo="Dinamico" txtBoton="Presioname">Este es mi componente dinamico </x-Card>
    
    <x-Card encabezado="A" titulo="B" txtBoton="C"> Jajs este nomas estaba de paso</x-Card>

    <x-Alert tipo="dark">soy negro</x-Alert>
    <x-Alert tipo="primary">soy azul </x-Alert>
    <x-Alert tipo="danger">Soy rojo </x-Alert>
    @endsection
