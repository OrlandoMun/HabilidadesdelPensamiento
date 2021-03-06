@extends('adminlte::page')

@section('title', 'Dashboard')
<title>SELECT ANIDADO</title>
@section('content_header')
    <h1>Carreras y Materias</h1>
@stop

@section('content')
@livewire('index-component')
@stop

@section('css')
@livewireStyles
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
@stop

@section('js')
<script type="text/javacript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script> console.log('Hi!'); </script>
    @livewireScripts
<script >
    $('#submit').on('click', function(){ 
  if($('#region').text="Ingeniería en Software"){
alert('final');
  }
    });
</script>
@stop