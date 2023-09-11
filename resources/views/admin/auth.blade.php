<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Administración - Acceso</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/admin.css')}}">
        <script type="text/javascript" src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
        @vite('resources/js/app.js')
    </head>
    <body>
        <div id="app">
            <admin-auth-component
                :action="'{{url('admin')}}'"
                :csrf="'{{csrf_token()}}'"
            ></admin-auth-component>
            @if (session('message'))
                <message-component
                    :message="'{{session('message')}}'"
                ></message-component>
            @endif
        </div>
    </body>
</html>
