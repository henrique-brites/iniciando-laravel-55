<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listar Clientes</title>
</head>
<body>
    <h1>Listar Clientes</h1>
    <a href="/admin/client/form-cadastrar">Novo cliente</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
            </tr>
        </thead>
        <tbody>
            @forelse($clients as $client)
                <tr>
                    <td>{{$client->id}}</td>
                    <td>{{$client->name}}</td>
                    <td>{{$client->email}}</td>
                </tr>
            @empty
                <tr style="text-align:center;">
                    <td colspan='3'>
                        Nenhuma cliente encontrado!!
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>