<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    @vite(['themes/mp4/sass/app.scss', 'themes/mp4/js/app.js'], 'mp4')
</head>
<body>
    <div id="app">
        @include('layouts.navigation')

        <main class="py-4">
            {{ $slot }}
        </main>
    </div>
</body>
</html>