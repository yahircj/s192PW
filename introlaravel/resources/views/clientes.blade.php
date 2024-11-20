@extends('layouts.plantilla1')

@section('titulo', 'Cleintes registrados')

@section('contenido')

    {{-- Inicia tarjetaCliente --}}
    <div class="container mt-5 col-md-8">
        @session('exito')
        <script>
           Swal.fire({
              title: "Good job!",
                text: '{{$value}}',
                icon: "info"
            });
        </script>
      @endsession
        @foreach ($ConsultaClientes as $cliente)
            <div class="card text-justify font-monospace">

                <div class="card-header fs-5 text-primary">{{ $cliente->nombre }}</div>

                <div class="card-body">
                    <h5 class="fw-bold">{{ $cliente->correo }}</h5>
                    <h5 class="fw-medium">{{ $cliente->telefono }}</h5>
                    <p class="card-text fw-lighter">{{ $cliente->id }}</< /p>

                </div>


                <div class="card-footer text-muted">
                    <a href="{{ route('Actualizar', $cliente->id) }}" class="btn btn-primary">{{ __('Actualizar') }}</a>
                    <form action="{{ route('Eliminar', $cliente->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">{{ __('Eliminar') }}</button>
                    </form>
                </div>

            </div>
        @endforeach
    </div>
    {{-- Finaliza tarjetaCliente --}}


@endsection
