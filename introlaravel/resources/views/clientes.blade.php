@extends('layouts.plantilla1')

@section('titulo', 'Clientes registrados')

@section('contenido')

    {{-- Inicia tarjetaCliente --}}
    <div class="container mt-5 col-md-8">
        @if (session('exito'))
            <script>
                Swal.fire({
                    title: "¡Buen trabajo!",
                    text: '{{ session("exito") }}',
                    icon: "info"
                });
            </script>
        @endif

        @foreach ($ConsultaClientes as $cliente)
            <div class="card text-justify font-monospace mb-3">

                <div class="card-header fs-5 text-primary">{{ $cliente->nombre }}</div>

                <div class="card-body">
                    <h5 class="fw-bold">{{ $cliente->correo }}</h5>
                    <h5 class="fw-medium">{{ $cliente->telefono }}</h5>
                    <p class="card-text fw-lighter">{{ $cliente->id }}</p>
                </div>

                <div class="card-footer text-muted d-flex justify-content-between">
                    <a href="{{ route('Actualizar', $cliente->id) }}" class="btn btn-primary">{{ __('Actualizar') }}</a>
                    <button class="btn btn-danger btn-sm" onclick="confirmar({{ $cliente->id }})">{{ __('Eliminar') }}</button>

                    <form id="deleteForm-{{ $cliente->id }}" action="{{ route('Eliminar', $cliente->id) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </div>

            </div>
        @endforeach
    </div>
    {{-- Finaliza tarjetaCliente --}}

    {{-- Script para SweetAlert2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmar(id) {
            Swal.fire({
                title: "¿Estás seguro?",
                text: "¡No podrás revertir esto!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Sí, eliminar",
                cancelButtonText: "No, cancelar",
                reverseButtons: true,
                customClass: {
                    confirmButton: "btn btn-success",
                    cancelButton: "btn btn-danger"
                },
                buttonsStyling: false
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById(`deleteForm-${id}`).submit();
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire({
                        title: "Cancelado",
                        text: "El cliente no fue eliminado.",
                        icon: "error"
                    });
                }
            });
        }
    </script>

@endsection
