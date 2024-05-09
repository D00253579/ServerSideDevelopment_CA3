<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Disney Studios</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ url('css/MainStyles.css') }}">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>
        <div class="relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0">
        
                <nav class="bg-indigo-300 w-full h-20 hidden fixed top-0 right-0 px-6 py-4 sm:block sm:justify-between items-center">
                    <div class="flex items-center">
                        <div>
                    <img src="Images\DisneyIcon.png" width="100" height="40" alt="Logo">
                        </div>
                        <div>
                          <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                    <img src="Images\DisneyTitle.png" width="250" height="100" alt="Disney Title">
                          </a>
                        </div>   
                    <div class="ml-72 space-x-16">
                        <a href="{{ url('/') }}" class="text-2xl text-white font-serif">Home</a>
                        <a href="{{ url('/characters') }}" class="text-2xl text-white font-serif">Characters</a> 
                            <a href="{{ url('/studios') }}" class="text-2xl text-white font-serif">Studios</a>
                </div>
            
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block bg-indigo-300">
                  {{-- Check if user is authenticated --}}
                    @auth
                    <span>{{ Auth::user()->name }}</span>

                        <a href="{{ route('logout') }}"
                           class="no-underline hover:underline sm:block bg-indigo-300"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('LOGOUT') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                        @else
                        <a href="{{ route('login') }}" class="text-base text-darkBlue font-serif">LOGIN</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-base text-darkBlue font-serif">REGISTER</a>
                        @endif
                    @endauth
                </div>
            @endif
            </nav>

            <body class="antialiased">
                <div class="grid-cols-2 grid grid-rows-10">
                @foreach ($studios as $studio)
                <div class="text-center">
                <div>
                    <img src="{{ asset('Images/' . $studio->image_path) }}" alt="" height="500" width="500" class="rounded-md">
                </div>
                <p class="text-lg text-darkBlue font-serif uppercase underline">{{ $studio->studioName }}</p>
                <h3 class="text-base font-serif">Founded In: {{ $studio->founded }}</h3>
                <h3 class="text-base font-serif">Studio President: {{ $studio->president }}</h3>
                <h4 class="text-base font-serif">Location: {{ $studio ->location }}</h4>
                 {{--Checking if user exists and checking if user is an admin  --}}
                @if (isset(Auth::user()->id) && Auth::user()->isAdmin==1)
                 <a class="editButton" href="/studios/{{ $studio->studioName }}/edit">Edit</a>   
                @endif   
                </div> 
                </div>
                @endforeach
            </div>
        </div>
    </body>
</html>
