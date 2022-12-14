<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hexlet Blog - @yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="csrf-param" content="_token" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}"></script> -->
    </head>
    <header>
        <div><a href="{{ route('index') }}">Главная</a></div>
        <div><a href="{{ route('articles.index') }}">Статьи</a></div>
        <div><a href="{{ route('page.index') }}">О блоге</a></div>
    </header>
    <body>
        @include('flash::message')
        <div class="container mt-4">
            <h1>@yield('header')</h1>
            <div>
                @yield('content')
            </div>
        </div>
    </body>
</html>