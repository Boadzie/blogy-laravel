@extends('layout')
@section('title', 'Blogy - Login')
@section('content')
    <section class="ml-auto w-2/3">
        <h1 class="my-4 font-bold text-4xl text-slate-600">Login</h1>
        <form method="POST" class="flex flex-col gap-4 max-w-2xl" action="{{ route('login') }}">
            @csrf

            <input
                class="@error('email')
            ring-red-100
            @enderror ring-2 focus:outline-none p-3 rounded-sm "
                type="email" name="email" placeholder="abx@gmail.com..." />
            @error('email')
                <p class="bg-red-100 p-2 rounded-md text-red-600 ">{{ $message }}</p>
            @enderror
            <input
                class="@error('password')
            ring-red-100
            @enderror ring-2 focus:outline-none p-3 rounded-sm "
                type="password" name="password" placeholder="XXXXXXXXXX..." />
            @error('password')
                <p class="bg-red-100 p-2 rounded-md text-red-600 ">{{ $message }}</p>
            @enderror

            <button type="submit" class="w-44 rouned-sm px-4 py-2 bg-slate-700 text-white">Login</button>
        </form>
        {{-- If you already have an account <a href="{{ route('login') }}">Login</a> --}}
    </section>
@endsection
