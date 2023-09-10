<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administración - @yield('title')</title>
    @vite('resources/js/app.js')
</head>
<body>
<div id="app">
    @yield('content')

    @if (session('message'))
        <message-component
            :message="'{{session('message')}}'"
        ></message-component>
    @endif
</div>
</body>
</html>
