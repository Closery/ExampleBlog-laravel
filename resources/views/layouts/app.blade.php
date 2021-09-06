<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Example Blog</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="bg-gray-300 dark:border-gray-600 dark:bg-gray-600">
        @include('layouts.header')

        @yield('content')

        @include('layouts.footer')
    </body>
</html>