<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>First Laravel Project @yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="{{url('css/style.css')}}">
        <link rel="stylesheet" href="{{url('css/style2.css')}}">
    </head>
    <body class="antialiased">
        <div class="relative py-4 px-6">
            <nav>
                <a href="{{ route('home.index')}}">Home</a>
                <a href="{{ route('home.about')}}">About</a>
                <a href="{{route('computer.index')}}">Computers</a>
                <a href="{{ route('home.content')}}">Contact</a>
            </nav>
        </div>
        <div class="relative flex items-top justify-center min-h-screen">
            @yield('content')
        </div>
    </body>
</html>
