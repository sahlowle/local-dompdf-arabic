<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>



        <style>
            body {
                font-family: 'DejaVu Sans', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <h1>
            <div class="mt-2  dark:text-gray-400 text-lg">
                {{ $text }}
            </div>
        </h1>
    </body>
</html>
