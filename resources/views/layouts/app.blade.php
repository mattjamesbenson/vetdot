<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Ez List') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @vite('resources/scss/front.scss')
        @vite('resources/js/front.js')
</head>

<body>
    <div class="container-fluid h-100">
        @yield('content')
    </div>
</body>

</html>
