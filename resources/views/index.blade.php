<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite('resources/js/app.js')
    </head>
    <body>
       <div id="app">
           @foreach ($phones as $phone)
               <phone-card-component
                   :name="'{{$phone['name']}}'"
                   :photo="'{{$phone['photoUrl']}}'"
                   :price="'{{$phone['price']}}'"
                   :description="'{{$phone['description']}}'"
               ></phone-card-component>
           @endforeach
       </div>
    </body>
</html>
