<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Disney Magic') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('css/MainStyles.css') }}">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="bg-blue-900 py-6">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div>
                    <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                        {{ config('app.name', 'Disney Magic') }}


                    </a>
                </div>
                <nav class="bg-indigo-300 w-full h-20 hidden fixed top-0 right-0 px-6 py-4 sm:block sm:justify-between items-center">
                    <div class="flex items-center">
                        <div>
                    <img src="Images\DisneyIcon.png" width="100" height="40" alt="Logo">
                        </div>
                        <div>
                    <img src="Images\DisneyTitle.png" width="250" height="100" alt="Disney Title">
    
                        </div> 
    
                    @guest
                        <a class="no-underline hover:underline hidden fixed top-0 right-0 px-28 py-4 sm:block bg-indigo-300" href="{{ route('login') }}">{{ __('LOGIN') }}</a>
                        @if (Route::has('register'))
                            <a class="no-underline hover:underline hidden fixed top-0 right-8 py-4 sm:block bg-indigo-300" href="{{ route('register') }}">{{ __('REGISTER') }}</a>
                        @endif
                    @else
                        <span>{{ Auth::user()->name }}</span>

                        <a href="{{ route('logout') }}"
                           class="no-underline hover:underline sm:block bg-indigo-300"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('LOGOUT') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </nav>
            </div>
        </header>

        @yield('content')
    </div>
</body>
</html>
