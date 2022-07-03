<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Super Gestão - @yield('titulo')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
    <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}"/>
</head>
<body>

    @include('app.layouts._partials.topo')

    @yield('conteudo')
    
</body>
</html>