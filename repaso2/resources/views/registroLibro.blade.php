@extends('layouts.plantilla1')

@section('contenido')
    
<div class="card">
  <h5 class="card-header">{{__('Registrar un libro')}}</h5>
  <div class="card-body">
    <h5 class="card-title">{{__('Formulario')}}</h5>

    @session('exito')
    <script>
       Swal.fire({
          title: "",
            text: '{{$value}}',
            icon: "info"
        });
    </script>
  @endsession


    <form action="/libro" method="POST">

      @csrf

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">{{__('ISBN')}}</label>
        <input type="text" class="form-control" name="txtisbn" value="{{ old('txtisbn') }}">
        <small class="fst-italicW text-danger"class="fst-italic" text="danger">{{ $errors->first('txtisbn') }}</small>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">{{__('TITULO')}}</label>
        <input type="text" class="form-control" name="txttitulo" value="{{ old('txttitulo') }}">
        <small class="fst-italicW text-danger"class="fst-italic" text="danger">{{ $errors->first('txttitulo') }}</small>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">{{__('AUTOR')}}</label>
        <input type="text" class="form-control" name="txtautor" value="{{ old('txtautor') }}">
        <small class="fst-italicW text-danger"class="fst-italic" text="danger">{{ $errors->first('txtautor') }}</small>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">{{__('PÁGINAS')}}</label>
        <input type="text" class="form-control" name="txtpaginas" value="{{ old('txtpaginas') }}">
        <small class="fst-italicW text-danger"class="fst-italic" text="danger">{{ $errors->first('txtpaginas') }}</small>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">{{__('AÑO')}}</label>
        <input type="text" class="form-control" name="txtano" value="{{ old('txtano') }}">
        <small class="fst-italicW text-danger"class="fst-italic" text="danger">{{ $errors->first('txtano') }}</small>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">{{__('EDITORIAL')}}</label>
        <input type="text" class="form-control" name="txteditorial" value="{{ old('txteditorial') }}">
        <small class="fst-italicW text-danger"class="fst-italic" text="danger">{{ $errors->first('txteditorial') }}</small>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">{{__('EMAIL DE EDITORIAL')}}</label>
        <input type="text" class="form-control" name="txtemail" value="{{ old('txtemail') }}">
        <small class="fst-italicW text-danger"class="fst-italic" text="danger">{{ $errors->first('txtemail') }}</small>
      </div>
      <div class="card-footer text-muted">
        <div class="d-grname gap-2 mt-2 mb-1">
            <button type="submit" class="btn btn-success btn-sm">{{__('Registrar Libro')}}</button>
        </div>
    </div>
    </form>
  </div>
</div>

@endsection