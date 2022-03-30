<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Posty</title>
</head>
<body class="bg-gray-200">
<nav class="p-6 bg-white flex justify-between mb-6">
    <ul class="flex items-center">
        <li class="px-3"><a href="">Home</a></li>
        <li class="px-3"><a href="">Dashboard</a></li>
        <li class="px-3"><a href="">Post</a></li>
    </ul>

    <ul class="flex items-center">
        @auth
            <li class="px-3"><a href="">Jeff McHale</a></li>
            <li class="px-3"><a href="">Logout</a></li>
        @endauth

        @guest
            <li class="px-3"><a href="">Login</a></li>
            <li class="px-3"><a href="{{ route('register') }}">Register</a></li>
        @endguest
    </ul>
</nav>
    @yield('content')
</body>
</html>
