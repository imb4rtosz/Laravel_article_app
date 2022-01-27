<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="bg-teal-900 py-6">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div class="relative">
                    <a href="{{ url('/') }}" class=" hover:text-gray-500 float-left text-3xl font-semibold text-gray-200 no-underline">
                        Article world
                    </a>
                </div>
                <nav class="space-x-4 text-gray-100 text-lg ">
                    <a class="no-underline hover:text-gray-500" href="/">Home</a>
                    <a class="no-underline hover:text-gray-500" href="/article">Article</a>

                    @guest
                        <a class="no-underline hover:text-gray-500" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="no-underline hover:text-gray-500" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                        <span>{{ Auth::user()->name }}</span>

                        <a href="{{ route('logout') }}"
                           class="no-underline hover:underline"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </nav>
            </div>
        </header>

        <div>
            @yield('content')
        </div>
        <div>
            @include('layouts.footer')
        </div>

    </div>
</body>
</html>
