<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página principal do sistema</title>
</head>
<body>
    <!-- Links - menu lateral //  -->
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/welcome">Sobre</a></li>
        <li><a href="/listar">Listar pessoas</a></li>
    </ul>
    <!-- Conteúdo -- parte central // -->
    @yield('conteudo')
</body>
</html>