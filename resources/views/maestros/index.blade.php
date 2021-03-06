@extends('adminlte::page')

@section('title', 'PROFESORES')

@section('Registro de maestros')
    <h1>CRUD Maestros</h1>
@stop

@section('content')

<a href="maestros/create" class="btn btn-primary mb-3">Registrar</a>


<table id="maestros" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-morado text-white">
        <tr>
           <th scope="col">Id</th> 
           <th scope="col">Nombre</th>
           <th scope="col">Especialidad</th> 
           <th scope="col">Email</th> 
           <th scope="col">Acciones</th> 
        </tr>
    </thead>
    <tbody>
        @foreach($maestros as $maestro)
<tr>
    <td>{{$maestro->id }}</td>
    <td>{{$maestro->Nombre }}</td>
    <td>{{$maestro->Especialidad }}</td>
    <td>{{$maestro->email }}</td>
    <td>
        <form action="{{ route ('maestros.destroy',$maestro->id)}}" method="POST">
        <a href="/maestros/{{$maestro->id}}/edit"class="btn btn-info">Editar</a>
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Borrar</button>
        </form>
    </td>
    
</tr>
        @endforeach
    </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js" rel="stylesheet">

    <link rel=stylesheet href="css/app.css">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
    $('#maestros').DataTable({
        "lengthMenu":[[5, 10, 50, -1],[5, 10, 50, "ALL"]]
        });
} );
</script>
<script src="js/app.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

@stop