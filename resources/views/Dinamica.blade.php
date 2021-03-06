<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Dependientes</title>
</head>
<body>
    <div>
        <select name="" id="_categoria">
            @foreach($categorias as $item)
             <option  value="{{$item->id}}">{{$item->nombre}}</option>
            @endforeach
        </select>
        <select name="" id="_subcategoria"></select>
        <select name="" id="_empresa"></select> 
    </div>
    <script>
        const csrfToken=document.head.querySelector("[name~csrf-token][content]").content;
        document.getElementById('_categoria').addEventListener('change',(e)=>{
            fetch('subcategorias',{
                method: 'POST',
                body: JSON.stringify({texto : e.target.value}),
                headers:{
                    'Content-Type': 'application/json',
                    "X-CSRF-TOKEN": csrfToken
                }
            }).then(response=>{
                return response.json()
            }).then(data=>{
                var opciones="";
                for (let i in data.lista) {
                   opciones+='<option value="'+ data.lista[i].id+'">'+data.lista[i].id+'</option>';
                }
                document.getElementById("_subcategoria").innerHTML=opciones;
            }).catch(error=>console.error(error));
        })   
        </script>
</body>
</html>