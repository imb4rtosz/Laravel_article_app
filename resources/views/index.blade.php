@extends('layouts.app')

@section('content')

<div class ="background-image grid grid-cols-1 m-auto">
    <div class="flex text=blue-100 pt-10 ">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
            <h1 class="sm:text-white text-4xl  font-bold text-shadow-md pb-14">
                   Find the articles you are interested in
            </h1>
            <a href="/article"
            class="text-center bg-teal-700 text-gray-200 py-2 px-4 font-bold text-xl uppercase  hover:bg-gray-900 hover:text-teal-700">
                       Check current articles...
            </a>
        </div>
    </div>
</div>

<div class="sm:grid grid-cols-2 gap-15 w-5/6 mx-auto py-15">

    <div>
        <img src="https://cdn.pixabay.com/photo/2016/11/20/09/06/laptop-1842297_960_720.jpg"
           width="750"  alt="">
    </div>

    <div class="m-auto sm:m-auto text-left w-4/5 block">
        <h2 class="text-3xl font-extrabold text-teal-700">
             Do you want to share your story with others?
        </h2>
        <p class="py-8 text-teal-800 text-s">
            Place where you can read other people articles, and add yours.
                                 
        </p>

        <p class="font-extrabold text-teal-900 text-s pb-9">
            It's easy and free to post your thinking on any topic and connect with millions of readers.
        </p>
        <a 
        href="/article"
        class="uppercase bg-gray-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl hover:bg-gray-900 hover:text-teal-700">
        Find Out More
    </a>
    </div>

</div>


<div class="text-center p-15 bg-gray-900 text-white">
    

    <span class="font-bold block text-4xl py-1">
        Travels
    </span>
    <span class="font-bold block text-4xl py-1">
        New technologies
    </span>
    <span class="font-bold block text-4xl py-1">
        Sport
    </span>
    <span class="font-bold block text-4xl py-1">
        History
    </span>
</div>


    <h2 class=" text-center py-15 text-4xl font-bold py-10 text-teal-700">
        Recent Article
    </h2>

 

<div class="sm:grid grid-cols-2 w-4/5  gap-15 m-auto">
   
@if($post == true) 
    <div class="flex bg-gray-900 text-gray-100 pt-10">
         <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block"> 
            <span class="uppercase text-xs">
                {{ $post->title }} 
            </span>
            <h3 class="text-xl font-bold py-10">
                {{ $post->content }}  
            </h3>  
            <a 
              href="/article/{{ $post->slug }}"
              class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl hover:text-teal-700 hover:border-teal-700">
              Find Out More
            </a> 
        </div>
    </div>
    <div>
        <img src="{{ asset('images/' . $post->image_path) }}" alt="">
    </div>
 @else
    <div class="flex bg-gray-900 text-gray-100 pt-10">
         <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block"> 
            <span class="uppercase text-xs">
                Article title
            </span>

            <h3 class="text-xl font-bold py-10">
                Article content 
            </h3>

            <a 
                href="/article"
                class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl hover:text-teal-700 hover:border-teal-700">
                There are no articles yet
            </a>
        </div>
    </div>
    <div>
        <img src="https://cdn.pixabay.com/photo/2016/11/20/09/06/laptop-1842297_960_720.jpg" alt="">
    </div>
</div>
             
@endif
            
@endsection