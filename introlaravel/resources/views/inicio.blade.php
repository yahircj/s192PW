<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    @vite(['resources/js/app.js'])

    <style>
        body, html{
            height: 100%;
        }
        .full-height{
            height: 100vh;
        }
    </style>
</head>
<body>
    
    <div class="a-flex flex-column justify-content-center align-items-center text-center full-height">
        
        <h1 class="display-1">Bienvenido Turista! </h1>
        <p>Presiona el botón para inciar...</p>

        <a href="{{route('formulario')}}" class="btn btn-primary">Ir al Registro</a>
        {{-- <a href="/formulario" class="btn btn-danger">Ir al registro </a> --}}
    </div>
</body>
</html>