@extends('adminlte::page')

@section('title', 'PROFESORES')

@section('content_header')
    <h1>Registrar maestro</h1>
@stop

@section('content')
<form action="/maestros" method="POST">
@csrf
<div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="Nombre" name="Nombre" type="text" class="form-control" tabindex="1">
</div>
<div class="mb-3">
    <label for="" class="form-label">Especialidad</label>
    <input id="Especialidad" name="Especialidad" type="text" class="form-control" tabindex="2">
</div>
<div class="mb-3">
    <label for="" class="form-label">email</label>
    <input id="email" name="email" type="text" class="form-control" tabindex="3">
</div>
<a href="/maestros" class="btn btn-secondary" tabindex="5">Cancelar</a>
<button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop