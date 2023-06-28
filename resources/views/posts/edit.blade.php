@extends('layout')
@section('title', 'Update' . $post->title)
@section('content')
    <section class="ml-auto w-2/3">
        <h1 class="my-4 font-bold text-4xl text-slate-600">Update - {{ $post->title }}</h1>
        <form method="POST" class="flex flex-col gap-4 max-w-2xl" action="{{ route('posts.update', [$post]) }}">
            @csrf
            @method('PUT')
            <input
                class="@error('title')
            ring-red-100
        @enderror ring-2 focus:outline-none p-3 rounded-sm "
                type="text" name="title" placeholder="Title..." value="{{ old('title', $post->title) }}" />
            @error('title')
                <p class="bg-red-100 p-2 rounded-md text-red-600 ">{{ $message }}</p>
            @enderror
            <textarea class="@error('content')
        ring-red-100
            @enderror ring-2 focus:outline-none p-3 rounded-sm "
                type="text" name="content" placeholder="Content...">{{ old('content', $post->content) }}</textarea>
            @error('content')
                <p class="text-red-600 p-2 rounded-md bg-red-100 ">{{ $message }}</p>
            @enderror
            <button type="submit" class="w-44 rouned-sm px-4 py-2 bg-slate-700 text-white">Update Post</button>
        </form>
    </section>
@endsection
