<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem Vindo!</title>
    <style>
        .d-block{
            display:block;

        }
    </style>
</head>
<body>
    <h1>Bem vindo!</h1>
    <form action="{{ route('devolva') }}" method="POST">
        @csrf
        <div class="d-block">
            <label>Nome:</label><input type="text" name="Nome">
        </div>
        <div class="d-block">
            <label>Idade:</label><input type="text" name="Idade">
        </div>
        <div class="d-block">
            <button type="submit">Enviar</button>
        </div>
    </form>
</body>
</html>