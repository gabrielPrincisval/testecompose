<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create</title>
</head>
<body>
    
{!! Form::open(['url' => '/poduto/create']) !!}
    //
{!! Form::close() !!}

{{echo Form::label('nome', 'Nome');}}
{{echo Form::text('nome');}}

{{echo Form::label('valor', 'Valor');}}
{{echo Form::text('valor');}}

echo Form::subimit('Click Me');
</body>
</html>