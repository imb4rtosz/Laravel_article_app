@extends('layouts.app')

@section('content')
<div class="w-5/6 m-auto text-left">
    <div class="py-15">
        <h1 class="text-4xl text-teal-800">
            {{ $post->title }}
        </h1>
    </div>
</div>

<div class="w-4/5 m-auto pt-20">
    <span class="text-gray-900">
        By <span class="font-bold italic text-gray-700 ">{{ $post->user->name }}</span>,<br>
        Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
    </span>

    <p class="text-xl text-gray-800 pt-8 pb-10 leading-8 font-light">
        {{ $post->content }}
    </p>
</div>

@endsection 