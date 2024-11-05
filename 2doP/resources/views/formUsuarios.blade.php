<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>  
</head>
<body>

    <h1 class="text-center text-primary mt-5 mb-4">Registro de usuarios</h1>

    <div class="container  col-md-4">
        @session('exito')
        <script>
           Swal.fire({
              title: "Respuesta del servidor!",
                text: '{{$value}}',
                icon: "info"
            });
        </script>
      @endsession

    <form action="/registrarCliente" method="POST">

        @csrf

        <div class="mb-3">
            <label  class="form-label">Correo: </label>
            <input type="text" class="form-control" name="txtcorreo" value="{{ old('txtcorreo') }}" >
            <small class="fst-italicW text-danger"class="fst-italic" text="danger">{{ $errors->first('txtcorreo') }}</small>
       
        </div>

        <div class="mb-3">
            <label class="form-label">Contraseña: </label>
            <input type="text" class="form-control" name="txtcontrasena" value="{{ old('txtcontrasena') }}" >
            <small class="fst-italicW text-danger"class="fst-italic" text="danger">{{ $errors->first('txtcontrasena') }}</small>
       
        </div>                

        <div class="mb-3">
            <label  class="form-label">Edad: </label>
            <input type="text" class="form-control" name="txtedad"  value="{{ old('txtedad') }}" >
            <small class="fst-italicW text-danger"class="fst-italic" text="danger">{{ $errors->first('txtedad') }}</small>

        </div>



        <button type="" class="btn btn-danger "> Guardar Usuario</button>


</div>


</body>
</html>