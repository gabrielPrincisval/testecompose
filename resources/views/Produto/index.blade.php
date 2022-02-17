<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto</title>
</head>
<body>

<a href="{{ URL::to('produto/create')}}"> Criar</a>
<table class="table no-margin">
        <thead>
            <tr>
                <th>id</th>
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
            <td>{{ $value->nome }}</td>
            <td>{{$value->valor}}</td>
            <td></td>
            <td></td>
            <td></td>

        <p>O produto se chama {{ $value->nome }}</p>
    @endforeach

</tbody>

</table>



</body>
</html>