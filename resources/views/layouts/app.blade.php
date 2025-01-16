<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Aulas Laravel')</title>

    @vite('resources/css/app.css') {{-- Adiciona o arquivo CSS compilado pelo Vite --}}
</head>
<body>
    @yield('content')
    @vite('resources/js/app.js') {{-- Adiciona o arquivo JS compilado pelo Vite --}}
</body>
</html>