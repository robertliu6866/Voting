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
         <a href="#" class="text-emerald-500" >liu liu oudoor life</a>
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
               <p class="text-xs mt-4">讓大家知道發起一個自組團行程</p>

            </div>
            <form action="#" method="POST" class="  space-y-4 px-4 py-6">
               <div>
                <input type="text" class="text-sm w-full bg-gray-100 rounded-xl placeholder-gray-900 px-4 py-2 border-none "  placeholder= "地點"  >
               </div>
               <div>
                <select name="category_add" id="category_add" class="text-sm w-full rounded-xl  bg-gray-100 border-none px-4 py-2">
                        <option value="Category One">百岳</option>
                        <option value="Category Two">郊山</option>
                        <option value="Category Three">健行路線</option>
                        <option value="Category Four">越野跑</option>
                 </select>

               </div>
               <div>
         
                    <textarea class="w-full border-none bg-gray-100  rounded-xl  placeholder:\-gray-900 text-sm px-4 py-2" placeholder="細節" name="idea" id="idea" cols="30" rows="4"></textarea>
               </div>
               <div class="flex items-center justify-between space-x-3">
                
                <button type="button" class="flex items-center justify-center w-1/2 h-11 text-xs  bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400  transition duration-150 ease-in px-6 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18.375 12.739l-7.693 7.693a4.5 4.5 0 01-6.364-6.364l10.94-10.94A3 3 0 1119.5 7.372L8.552 18.32m.009-.01l-.01.01m5.699-9.941l-7.81 7.81a1.5 1.5 0 002.112 2.13" />
                      </svg>
                      
                    <span class="ml-2 text-xs">檔案</span>
                </button>

                <button type="sumit" class="flex items-center justify-center w-1/2 h-11 text-xs text-rose-50   bg-green font-semibold rounded-xl border border-gray-200 hover:bg-green-hover  transition duration-150 ease-in px-6 py-2">
                   
                      
                    <span class="ml-2 text-xs">送出</span>
                </button>
               </div>

            </form>
          </div>
     </div>
     <div class= "w-full px-2 md:px-0 md:w-175 ">
       <nav class="hidden md:flex items-center  justify-between text-xs">
                <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10 rounded-xl ">
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
       <livewire:scripts />
    </body>
</html>
