@extends('layouts.app')

@section('content')
<div class="w-5/6 m-auto text-center">
    <div class="py-15 border-b border-gray-400">
        <h1 class="text-6xl text-teal-800">
           Article
        </h1>
    </div>
</div>

@if (session()->has('message'))
    <div class="w-5/6 m-auto m-7 p-2">
        <p class="w-1/4 mb-3 text-gray-200 bg-teal-700 p-5">
            {{ session()->get('message') }}
        </p>
    </div>
@endif

@if (Auth::check())
    <div class="pt-15 w-5/6 m-auto">
        <a 
            href="/article/create"
            class="uppercase mt-15 bg-gray-500 text-gray-100 text-lg font-bold py-4 px-8 rounded-3xl hover:bg-gray-900 hover:text-teal-700">
            Create post
        </a>
    </div>
@endif

@foreach ($posts as $post)
    <div class="sm:grid grid-cols-2 gap-15 w-5/6 mx-auto py-20 border-b border-gray-400">
        <div>
            <img src="{{ asset('images/' . $post->image_path) }}" alt="">
        </div>
        <div>
            <h2 class="text-teal-800 font-bold text-4xl pb-5">
                {{ $post->title }}
            </h2>

            <span class="text-gray-500">
                By <span class="font-bold italic text-teal-800">{{ $post->user->name }}</span>,<br>
                 Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
            </span>

            <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                {{ $post->content}}
            </p>

            <a href="/article/{{ $post->slug }}" class="uppercase mt-15 bg-gray-500 text-gray-100 text-lg font-semibold py-4 px-8 rounded-3xl hover:bg-gray-900 hover:text-teal-700">
                Keep Reading
            </a>

            @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
             <div class="relative">
               <span class="float-right ">
                    <a 
                        href="/article/{{ $post->slug }}/edit"
                        class="uppercase  bg-blue-400 text-gray-100 text-base font-normal py-3 px-3 rounded-2xl hover:bg-blue-800 hover:text-gray-200">
                        Edit
                    </a>
                
                     <form 
                        action="/article/{{ $post->slug }}"
                        method="POST">
                        @csrf
                        @method('delete')

                        <button
                            class="uppercase  mt-6 bg-red-400 text-gray-100 text-base font-normal py-3 px-3 rounded-2xl hover:bg-red-800 hover:text-gray-200"
                            type="submit">
                            Delete
                        </button>

                    </form>
                </span>
            </div>   
            @endif
        </div>
    </div>    
@endforeach

@endsection