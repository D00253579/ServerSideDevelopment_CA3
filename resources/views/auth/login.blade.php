<link rel="stylesheet" type="text/css" href="{{ url('css/MainStyles.css') }}">
<link href="{{ mix('css/app.css') }}" rel="stylesheet">


@extends('layouts.app')

@section('content')
<body style="background-image:url('Images/upImage.jpg')" class="bg-cover bg-fixed overflow-hidden">
<main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10 bg-lightBlue sm:rounded">
    
  <div class="flex bg-lightBlue sm:rounded">
        <div class="w-full sm:rounded">
            <section class="flex flex-col break-words bg-lightBlue border-double border-indigo-300 sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">
                <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md pl-8 flex justify-center">
                    <img src="Images/loginTitle.png" alt="Login Title Image" height="80" width="100">                    
                  </a>
                </header>

                <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="flex flex-wrap">
                        <label for="email" class="block text-darkBlue text-sm font-bold mb-2 sm:mb-4 font-serif">
                            {{ __('Email Address') }}:
                        </label>

                        <input id="email" type="email"
                            class="form-input w-full @error('email') border-red-500 @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <p class="alert-alert danger text-red text-center italic">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="password" class="block text-darkBlue text-sm font-bold mb-2 sm:mb-4 font-serif">
                            {{ __('Password') }}:
                        </label>

                        <input id="password" type="password"
                            class="form-input w-full @error('password') border-red-500 @enderror" name="password"
                            required>

                        @error('password')
                        <p class="alert-alert danger text-red text-center italic">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex items-center">
                        <label class="inline-flex items-center text-sm text-gray-700" for="remember">
                            <input type="checkbox" name="remember" id="remember" class="form-checkbox"
                                {{ old('remember') ? 'checked' : '' }}>
                            <span class="ml-2">{{ __('Remember Me') }}</span>
                        </label>

                        @if (Route::has('password.request'))
                        <a class="text-sm text-red hover:text-red whitespace-no-wrap no-underline hover:underline ml-auto"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                    </div>
                     <div class="flex flex-wrap">
                        <button type="submit" class="sparkle-button mt-8 font-serif text-white w-50 ml-40">
                            {{ __('Login') }}
                        </button>
                        @if (Route::has('register'))
                        <p class="w-full text-xs text-center text-gray-700 my-6 sm:text-sm sm:my-8">
                            {{ __("Don't have an account?") }}
                            <a class="text-red hover:text-blue-700 no-underline hover:underline" href="{{ route('register') }}">
                                {{ __('Register') }}
                            </a>
                        </p>
                        @endif
                    </div>
                </form>
            </section>
        </body>
        </div>
    </div>
</main>
@endsection
