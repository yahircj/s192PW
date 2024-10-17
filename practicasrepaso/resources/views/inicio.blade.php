<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite(['resources/js/app.js'])

</head>
<body style="background-color: #546858;">
    <div class="container">
        <p><span id="fecha"></span></p>
        <br>
         <div style="text-align: center;">
            <h1> Universidad Politécnica de Querétaro </h1>
             <br>
             <br>
             <br>
             <br>
            <img src="{{ asset('images/upqlogo.png') }}" alt="Upq-logo" width="300">
            <br>
            <br>
            <br>
            <br>
            <h1> <p class="subrayado">Programación web</p></h1>
            <br>
            <br>
            <h3>Contreras Jonathan Yahir</h3>
            <h3>122043995</h3>
            <h3>122043995@upq.edu.mx</h3>
            <h3>S-192</h3>
            <br>
            <a href="{{route('rep')}}" class="btn btn-warning">Repasos</a>
        </div>
    </div>
</body>
<script>
    const fecha = new Date();
    const fechaFormateada = fecha.toLocaleDateString('es-ES', {
        day: 'numeric',
        month: 'numeric',
        year: 'numeric'
    });

    document.getElementById('fecha').textContent = fechaFormateada;
</script>
</html>
