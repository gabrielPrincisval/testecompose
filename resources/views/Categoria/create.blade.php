<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create</title>
</head>
<body>
    
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


{!! Form::open(['url' => '/categoria/create']) !!}
    


{{ Form::label('nome', 'Nome')}}
{{ Form::text('nome')}}
<br>

{{ Form::submit('Enviar') }}

{!!Form::close()!!}
</body>
</html>