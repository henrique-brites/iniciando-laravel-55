<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar cliente</title>
</head>
<body>
<h1>Editar cliente</h1>
<form action="{{ "/admin/client/{$client->id}/editar" }}" method="post">
    {!! csrf_field() !!}
    <label for="name">Nome</label>
    <input type="text" name="name" id="name" value="{{ $client->name }}"/>
    <label for="email">E-mail</label>
    <input type="text" name="email" id="email" value="{{ $client->email }}"/>
    <button type="submit">Enviar</button>
</form>
</body>
</html>