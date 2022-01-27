@extends('layouts.app')

@section('content')
<div class="w-5/6 m-auto text-left">
    <div class="py-15">
        <h1 class="text-4xl text-teal-800">
            Create Article
        </h1>
    </div>
</div>
 
@if ($errors->any())
    <div class="w-5/6 m-auto">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="w-2/5 mb-3 text-gray-200 bg-red-500  p-6">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif

<div class="w-4/5 m-auto pt-20">
    <form 
        action="/article"
        method="POST"
        enctype="multipart/form-data">
        @csrf

        <input 
            type="text"
            name="title"
            placeholder="Title..."
            class="bg-transparent block border-b-2 w-full h-20 text-3xl  outline-none">

        <textarea 
            name="content"
            placeholder="Content..."
            class="py-20 bg-transparent block border-b-2 w-full h-60 text-3xl outline-none"></textarea>

        <div class="pt-15">
            <label class="w-44 flex flex-col items-center px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                <span class="m-1 leading-normal">
                    Select a file
                </span>
                <input 
                    type="file"
                    name="image"
                    class="hidden">
            </label>
        </div>

        <button    
            type="submit"
            class="uppercase mt-15 bg-gray-500 text-gray-100 text-lg font-bold py-4 px-8 rounded-3xl hover:bg-gray-900 hover:text-teal-700">
            Submit 
        </button>
    </form>
</div>

@endsection