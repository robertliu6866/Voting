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
         <a href="#" class="text-emerald-500" >liu liu oudoor life</a>
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
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                  </svg>
            
            

            </a>
         </div>
       </header>
       <main class="container mx-auto max-w-custom flex" >

     <div class="w-70 mr-5">
        Lorem ipsum dolor sit n at quidem  accusantium officia ipsum ab. Hic facilis facere blanditiis quaerat voluptate laudantium, assumenda quo vero inventore nesciunt perferendis ea illum quas delectus ipsam amet deleniti molestiae excepturi similique quidem accusamus. Quae voluptas quam, nisi officiis, reiciendis tempora consectetur pariatur beatae suscipit dolore optio corrupti molestiae adipisci distinctio illum et iure corporis eos animi quisquam odio asperiores.
     </div>
     <div class= " w-175 ">
       <nav class="flex items-center  justify-between text-xs">
                <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10 ">
                    <li>
                    <a href="" class="border-b-4 pb-3 border-blue">所有想法(99)</a>
                </li>
                    <li>
                    <a href="" class="text-gray-400 transition duration-100 ease-in border-b-4 pb-3 hover:border-blue">諮詢 (50)</a>
                </li>
                    <li>
                    <a href="" class="text-gray-400 transition duration-100 ease-in border-b-4 pb-3 hover:border-blue">進行中 (50)</a>
                </li>

                </ul>


                <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                <li>
                    <a href="" class="border-b-4 pb-3 border-blue">履行(10)</a>
                </li>
                <li>
                    <a href="" class="text-gray-400 transition duration-100 ease-in border-b-4 pb-3 hover:border-blue">已結束 (55)</a>
                </li>


                </ul>


       </nav>
       <div class="mt-8"></div>
       {{$slot}}
     </div>
       </main>
    </body>
</html>
