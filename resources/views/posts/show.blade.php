@extends('layout')
@section('title', 'Blogy - ' . $post->title)
@section('content')
    <section class="ml-auto w-2/3">
        <h1 class="my-6 text-4xl  font-bold text-slate-600">{{ $post->title }}</h1>
        <div class="max-w-2xl">
            <div class="flex flex-col gap-4 shadow-lg bg-slate-100 p-3 rounded-sm">
                {{-- <h1 class="mb-2 text-2xl font-semibold">{{ $post->title }}</h1> --}}
                <p class="text-lg">{{ $post->content }}</p>
                <div class="flex items-center gap-4">
                    @can('update', $post)
                        <a class="font-bold hover:underline hover:text-yellow-700" href="{{ route('posts.edit', [$post]) }}">Edit
                            Post
                        </a>
                    @endcan
                    @can('delete', $post)
                        <form method="POST" action="{{ route('posts.destroy', [$post]) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="w-44 rouned-sm px-4 font-bold py-2 hover:underline hover:text-red-700 text-slate-700">Delete
                                Post</button>
                        </form>
                    @endcan
                </div>
            </div>
        </div>
    </section>
@endsection
