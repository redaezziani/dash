<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
            
        </title>
        @vite('resources/css/app.css')
    </head>
    <body class=" flex justify-center items-center h-screen ">
        <h1>
            <span class="font-figtree text-6xl text-blue-500">Vite</span>
            <span class="font-figtree text-6xl text-red-500">Laravel</span>
        </h1>
    </body>
</html>
