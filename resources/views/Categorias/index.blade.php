<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto</title>
</head>
<body>


@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif


<a href="{{ URL::to('categorias/create')}}"> Criar</a>
<table class="table no-margin">
        <thead>
            <tr>
                 <th>nome</th>
                
            </tr>
        </thead>   
      
        


</table>