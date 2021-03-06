@extends('layouts.plantillabase')

@section('contenido')

<h2>Editar Registros</h2>
<form action="/maestros/{{$maestro->id}}" method="POST">
@csrf
@method('PUT')
    <div class="mb-3"> 
        <label for="" class="form-label">Nombre</label>
        <input id="Nombre" name="Nombre" type="text" class="form-control" value="{{$maestro->Nombre}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Especialidad</label>
        <input id="Especialidad" name="Especialidad" type="text" class="form-control" value="{{$maestro->Especialidad}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">email</label>
        <input id="email" name="email" type="text" class="form-control" value="{{$maestro->email}}">
    </div>
    <a href="/maestros" class="btn btn-secondary">Cancelar</a>
<button type="submit" class="btn btn-primary" >Guardar</button>
</form>
@endsection