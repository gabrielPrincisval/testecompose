<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto</title>

{{-- STYLE --}}
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: sans-serif, serif;
    }
    table a{
        margin: 0 1.8rem;
        text-decoration: none;
        color: rgb(53, 53, 53);
        border: 1px solid rgb(53, 53, 53); 
        padding: 2px;
        transition: .5s;
    }
    table a:hover{
     background: blueviolet;
    }
    input[type='submit']{
        cursor: pointer;
    }
</style>
</head>
<body>


@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<script>
    function ConfirmDelete(){

        return confirm('Tem certeza que deseja excluir este registro?');
    }

</script>



<a href="{{ URL::to('produto/create')}}"> Criar</a>
<table class="table no-margin">
        <thead>
            <tr>
                <th>id</th>
                <th>categoria</th>
                <th>nome</th>
                <th>valor</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>   
        <tbody>
        @foreach ($produtos as $value)

        <tr>
            <td>{{$value->id}}</td>
            <td>{{ $value->categoria->nome }}</td>
            <td>{{ $value->nome }}</td>
            <td>{{$value->valor}}</td>
            <td><a href =   "{{ url('produto/' . $value->id  )}}"> Visualizar  </a> </td>
            <td> <a href =  "{{ url('produto/' . $value->id . '/edit' )}}"> Editar  </a>  </td>
           
            <td>
    
            {{Form::open(array('url' => 'produto/' . $value->id, 'onsubmit' => 'return ConfirmDelete()' )) }}
            {{Form::hidden('_method', 'DELETE') }}
            {{Form::submit('Excluir', array('class' => 'btn btn-danger' )) }}
            {{Form::close() }}
            </td>
     @endforeach

</tbody>

</table>



</body>
</html>