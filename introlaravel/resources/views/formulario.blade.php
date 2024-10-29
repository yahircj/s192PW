@extends('layouts.plantilla1')

@section('titulo','Registrarse')

@section('contenido')
    


{{-- inicia Tarjeta con formulario --}}
    <div class="container mt-5 col-md-6">

        @if (session('exito'))
        <x-alert tipo="info">{{session('exito')}}</x-alert>
        @endif

        @session('exito')
        <x-alert tipo="danger"> {{ $value }} </x-alert>
        @endsession

       
          @session('exito')
            <script>
               Swal.fire({
                  title: "Good job!",
                    text: '{{$value}}',
                    icon: "info"
                });
            </script>
          @endsession

        <div class="card font-monospace">
            <div class="card-header fs-5 text-center text-primary">
                {{__('Registro Clientes')}}
            </div>
            <div class="card-body text-justify">


                <form action="/enviarCliente" method="POST">

                    @csrf

                    <div class="mb-3">
                        <label for="nombre" class="form-label">{{__('Nombre')}}: </label>
                        <input type="text" class="form-control" name="txtnombre" value="{{ old('txtnombre') }}"> 
                        <small class="fst-italicW text-danger"class="fst-italic" text="danger">{{ $errors->first('txtnombre') }}</small>
                    </div>
                    <div class="mb-3">
                        <label for="apellido" class="form-label">{{__('Apellido')}}: </label>
                        <input type="text" class="form-control" name="txtapellido" value="{{ old('txtapellido') }}">
                        <small class="fst-italicW text-danger">{{ $errors->first('txtapellido') }}</small>
                    </div>
                    <div class="mb-3">
                        <label for="correo" class="form-label">{{__('Correo')}}: </label>
                        <input type="text" class="form-control" name="txtcorreo" value="{{ old('txtcorreo') }}">
                        <small class="fst-italicW text-danger">{{ $errors->first('txtcorreo') }}</small>
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">{{__('Telefono')}}</label>
                        <input type="text" class="form-control" name="txttelefono" value="{{ old('txttelefono') }}">
                        <small class="fst-italicW text-danger">{{ $errors->first('txttelefono') }}</small>
                    </div>
                    <div class="card-footer text-muted">
                        <div class="d-grname gap-2 mt-2 mb-1">
                            <button type="submit" class="btn btn-success btn-sm">{{__('Guardar Clientes')}}</button>
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>

    @endsection
