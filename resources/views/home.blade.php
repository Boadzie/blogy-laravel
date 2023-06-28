@extends('layout')
@section('title', 'Blogy - Home')
@section('content')
    <section class="container mx-auto px-4">
        <h1 class="my-4 text-4xl font-bold text-slate-700">Posts</h1>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-3">
            @forelse ($posts as $post)
                <div class="shadow-lg bg-slate-100 p-3 rounded-sm">
                    <a href="{{ route('posts.show', [$post]) }}"
                        class="text-blue-700 mb-2 text-2xl font-semibold">{{ $post->title }}</a>
                    <br />
                    <small class="mb-2">Posted by: <span class="font-bold">{{ $post->user->name }}</span></small>
                    <p class="">{{ Str::limit($post->content, 350) }}</p>
                </div>
            @empty
                <h4 class="text-3xl text-red-700 ">No post to show</h4>
            @endforelse
        </div>
    </section>
@endsection
