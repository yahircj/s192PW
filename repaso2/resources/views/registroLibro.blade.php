@extends('layouts.plantilla1')

@section('contenido')
    
<div class="card">
    <h5 class="card-header">Registrar un libro</h5>
    <div class="card-body">
      <h5 class="card-title">Formulario</h5>
      <form>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>

      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>

@endsection