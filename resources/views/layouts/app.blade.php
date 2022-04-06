<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="bg-rose-100">
        <nav class="bg-stone-200 text-black flex justify-between mb-6 drop-shadow-md">
        <ul class="flex items-center">
            <li class="py-6 px-4 hover:bg-stone-100">
                <a href="{{ route('dashboard') }}" class="p-3">Dashboard</a>
            </li>
        </ul>
        <ul class="flex items-center">
            @auth
                <li class="hover:bg-stone-100">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="py-6 px-7">Logout</button>
                    </form>
                </li>
            @endauth
            @guest
                <li class="py-6 px-4 hover:bg-stone-100">
                    <a href="{{ route('login') }}" class="p-3">Login</a>
                </li>
                <li class="py-6 px-4 hover:bg-stone-100">
                    <a href="{{ route('register') }}" class="p-3">Register</a>
                </li>
            @endguest
        </ul>
        </nav>
        @yield('content')
    </body>
</html>