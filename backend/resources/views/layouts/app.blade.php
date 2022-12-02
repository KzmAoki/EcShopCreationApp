<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config("app.name") }}</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body>
    <header class="navbar navbar-dark bg-dark">
        <div class="container-md">
            <a href="/" class="navbar-brand">{{ config("app.name") }}</a>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a class="links-a" href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </header>
    <body>
        <div class="container-md py-4">
            @yield("content")
        </div>
    </body>
</body>
</html>
