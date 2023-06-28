<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    @vite('resources/js/app.js')
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Agdasima&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        html,
        body {
            font-family: 'Agdasima', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <nav>
        <div class="flex justify-between font-bold text-lg gap-2 bg-slate-600 text-white p-3">
            <div class="flex gap-4 items-start justify-start">
                <p
                    class="{{ request()->routeIs('home') ? 'bg-orange-500 px-2  rounded-sm text-white' : '' }} font-bold text-lg hover:blue-500">
                    <a href="{{ route('home') }}">Home</a>
                </p>
                <p
                    class="{{ request()->routeIs('about') ? 'bg-orange-500 px-2 rounded-sm text-white' : '' }} font-bold text-lg hover:blue-500">
                    <a href="{{ route('about') }}">About</a>
                </p>
            </div>
            <div class="flex gap-4  justify-end items-end">
                @auth
                    <p
                        class="{{ request()->routeIs('posts.create') ? 'bg-orange-500 px-2 rounded-sm text-white' : '' }} font-bold text-lg hover:blue-500">
                        <a href="{{ route('posts.create') }}">Create Post</a>
                    </p>
                    <p class="font-bold text-lg hover:blue-500">
                        <a href="{{ route('logout') }}">Logout</a>
                    </p>
                    <p class="font-bold text-lg hover:blue-500">
                        <span>@</span>{{ Auth::user()->name }}!
                    </p>
                @else
                    <p
                        class="{{ request()->routeIs('register') ? 'bg-orange-500 px-2 rounded-sm text-white' : '' }} font-bold text-lg hover:blue-500">
                        <a href="{{ route('register') }}">Register</a>
                    </p>
                    <p
                        class="{{ request()->routeIs('login') ? 'bg-orange-500 px-2 rounded-sm text-white' : '' }} font-bold text-lg hover:blue-500">
                        <a href="{{ route('login') }}">Login</a>
                    </p>
                @endauth
            </div>
        </div>
    </nav>
    <main class="">
        <div class="ml-auto w-2/3">
            @if (session('success'))
                <div class="mt-4 max-w-2xl rounded-md bg-green-100 p-2 text-slate-500">
                    {{ session('success') }}
                </div>
            @endif
        </div>
        {{-- @if ($errors->any())
            <div class="bg-red-100 rounded-md p-4 max-w-2xl text-red-500 mx-4 mt-4">
                 <p class="text-lg font-bold">The following errors occured: </p>
                 @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                 @endforeach
            </div>
        @endif --}}
        @yield('content');
    </main>

</body>

</html>
