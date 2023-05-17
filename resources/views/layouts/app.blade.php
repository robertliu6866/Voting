<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel Voting</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=Open+Sans:400,500,600&display=swap" rel="stylesheet" />
        {{-- <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> --}}

    <!-- Style -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans bg-gray-background text-gray-900 text-sm ">
       <header class="  flex items-center justify-between px-8 py-4">
         <a href="#">liu oudoor</a>
         <div class="flex items-center">
            @if (Route::has('login'))
            <div class="px-6 py-4 mt-6">
                @auth
                
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a href="{{ route('logout') }}"  class="font-semibold text-gray-600 
                    hover:text-gray-900 dark:text-gray-400 dark:hover:text-white
                     focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </a>
                </form>

                    @else
                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    @endif
                @endauth
            </div>
        @endif
            <a href="#">
                <img src="https://img95.699pic.com/xsj/0f/ed/r5.jpg!/fh/300" class="w-20 h-20" alt="">
            

            </a>
         </div>
       </header>
    </body>
</html>
