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
      
        <!doctype html>
  
    <!-- Style -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <livewire:styles />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
     
    </head>
    <body class="font-sans bg-gray-background text-gray-900 text-sm ">
       <header class="  flex  flex-col md:flex-row items-center justify-between px-8 py-4">
           <a href="/" class="text-emerald-500" >liu liu oudoor life</a>
          
           <div>

               <a href="/" class="text-emerald-500" >切換地區</a>
               
            </div>
           
         <div class="flex  items-center mt-2 md:mt-0">
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


       <main class="container mx-auto max-w-custom flex flex-col md:flex-row" >
  
     <div class="w-70 mx-auto md:mx-0 md:mr-5 ">


          <div 
           
         
          class=" bg-white md:sticky md:top-8 border-2 rounded-xl mt-16">
            <div class="text-center px-6 py-2 pt-6">
             <h3 class="font-semibold text-base"> 許願行程</h3>
               <p class="text-xs mt-4">
                @auth
                讓大家知道發起一個自組團行程
                @else
                   登入後新增想法
                @endauth

            </p>

            </div>

            @auth
            <livewire:create-idea />
            
            @else
            <div class="my-6 text-center ">
                <a
                href="{{ route('login') }}"
                
                class="inline-block justify-center w-1/2 h-11 text-xs text-rose-50  
                 bg-green font-semibold rounded-xl border border-gray-200 hover:bg-green-hover 
                  transition duration-150 ease-in px-6 py-2"
                  >
                  <span class="ml-2 text-xs">登入</span>
                   
                      
                </a>
                <a
                href="{{ route('register') }}"
                
                class="inline-block justify-center w-1/2 h-11 text-xs text-rose-50  
                 bg-green font-semibold rounded-xl border border-gray-200 hover:bg-green-hover 
                  transition duration-150 ease-in px-6 py-2 mt-4"
                  >
                  <span class="ml-2 text-xs ">註冊</span>
                   
                      
                </a>

            </div>
            @endauth


          </div>
     </div>

     <div class= "w-full px-2 md:px-0 md:w-175 ">

             
    <livewire:status-filters />
       
        <div class="mt-8"></div>
        {{$slot}}
      </div>


   
       </main>
       <livewire:scripts />
    </body>
</html>
