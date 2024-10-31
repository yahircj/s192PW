@extends('layouts.plantilla1')

@section('contenido')
    
<div class="card">
    <h5 class="card-header">Registrar un libro</h5>
    <div class="card-body">
      <h5 class="card-title">Formulario</h5>
      <form>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">ISBN</label>
          <input type="text" class="form-control" name="txtisbn" value="{{ old('txtisbn') }}">>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">TITULO</label>
          <input type="text" class="form-control" name="txttitulo" value="{{ old('txttitulo') }}">>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">AUTOR</label>
          <input type="text" class="form-control" name="txtautor" value="{{ old('txtautor') }}">>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">PÁGINAS</label>
          <input type="text" class="form-control" name="txtpaginas" value="{{ old('txtpaginas') }}">>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">AÑO</label>
          <input type="text" class="form-control" name="txtano" value="{{ old('txtano') }}">>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">EDITORIAL</label>
          <input type="text" class="form-control" name="txteditorial" value="{{ old('txteditorial') }}">>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">EMAIL DE EDITORIAL</label>
          <input type="text" class="form-control" name="txtemail" value="{{ old('txtemail') }}">>
        </div>
      

      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>

@endsection