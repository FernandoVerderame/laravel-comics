<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ env('APP_NAME', 'DC Comics') }} | @yield('title')</title>

    <link rel="icon" href="{{ Vite::asset('resources/img/favicon.ico') }}" type="images/ico">

    {{-- Import Vite & co --}}
    @vite('resources/js/app.js')

    {{-- CDNS --}}
    @yield('cdns')

</head>
<body>

    @include('includes.header')

</body>
</html>