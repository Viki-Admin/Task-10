<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="wrapper">
        <header>
            <nav>
                <ul>
                    @if(Auth::check())

                    <a href="{{route('home')}}"><h1>Home</h1></a>
                    <a href="{{route('libreri')}}"><h1>Libreli</h1></a>
                    <a href="{{route('profil',Auth::user()->id)}}"><h1>Profil</h1></a>
                    <a href="{{route('logout')}}"><h1>Exit</h1></a>

                    @else

                    <a href="{{route('home')}}"><h1>Home</h1></a>

                    @endif
                </ul>
            </nav>
        </header>