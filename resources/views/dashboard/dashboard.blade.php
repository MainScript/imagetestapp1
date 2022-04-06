@extends('layouts.app')

@section('content')
    @auth
        <button class="fixed bottom-10 right-10 w-20 h-20 bg-rose-300 rounded-full font-medium w-full font-bold text-white text-5xl drop-shadow-md hover:bg-rose-250">
            <a href="{{ route('posts') }}" class="p-3">+</a>
        </button>
        @if($posts->count())
                @foreach($posts as $post)
                <div class="flex justify-center">
                    <div class="w-3/12 bg-white p-6 rounded-lg mb-4 flex justify-center drop-shadow-cm">
                        <div>
                            <div class="flex justify-center">
                                <p class="text-black font-bold mb-2 text-xl">{{ $post->title }}</p>
                            </div>
                            <div class="flex justify-center">
                                <img src="{{ $post->imageurl }}" alt="image" class="max-w-sm max-h-sm w-auto h-auto mb-2 rounded-lg">
                            </div>
                            <span class="text-gray-600 text-xs"> {{ $post->created_at->diffForHumans() }}</span>
                            <p class="text-gray-700"><span class="font-bold text-blue-600">@:{{ $post->user->username }}</span> {{ $post->body }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            @else
                <p class="text-center text-red-400 text-xl font-bold">No posts yet</p>
            @endif
    @endauth
@endsection