<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <title>Laravel</title>
</head>
<body>
    @yield('content')

    <footer class="p-3 bg-light text-center">
        Copyright 2023 Pizza House
    </footer>
</body>
</html>