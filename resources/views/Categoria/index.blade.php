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

<script>
    function ConfirmDelete(){

        return confirm('Tem certeza que deseja excluir este registro?');
    }

</script>



<a href="{{ URL::to('produto/create')}}"> Criar</a>
<table class="table no-margin">
        <thead>
            <tr>
                <th>nome</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>   
        <tbody>
        @foreach ($categoria as $value)

        <tr>
            

        <td></td>

</tbody>

</table>



</body>
</html>