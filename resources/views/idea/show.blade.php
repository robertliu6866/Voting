<x-app-layout>
    <div>
        <a href="/" class="flex items-center font-semibold hover:underline">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
              </svg>
              
            <span class="ml-2">所有行程</span>
        </a>
    </div>

    <livewire:idea-show 
    :idea="$idea" 
    :votesCount="$votesCount"
    />
    
    

      
      <div class="comments-container relative space-y-6 md:ml-22 pt-6 my-8 mt-1">

    <div class="comment-container relative  bg-white rounded-xl flex mt-4 ">
     
        <div class="flex flex-col md:flex-row px-4 py-6">
            <div class="flex-none">

                <a href="" >
                    <img src="https://megapx.dcard.tw/v1/images/03de33d1-fb08-4bf9-9701-37cfb5a2901d/responsive?width=1280" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
            </div>
          <div class="md:mx-4 w-full ">

               <div class="text-gray-600 mt-3 line-clamp-3">
        
                <p>有需要注意的事情否？</p>
               </div>

               <div class="flex flex-col md:flex-row md:items-center justify-between mt-6">
               {{-- <div class="flex items-center justify-between mt-6"> --}}
              
                <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                      <div class="hidden mb:block font-bold text-gray-900">Candy oo</div>
                      <div class="hidden mb:block ">&bull;</div>
                      <div >50 分鐘前</div>
                      <div>&bull;</div>
                    
                   </div>

                    <div 
                    x-data="{ isOpen: false }"
                    class="flex items-center space-x-2 mt-4 md:mt-0"
                     >
                     <div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">Open</div>
                    <button 
                    @click="isOpen = !isOpen"
                    class=" relative bg-gray-100 hover:bg-gray-200 rounded-full transition duration-100 ease-in h-7 py-1 px-3">
                       <svg xmlns="http://www.waq3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                           <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                         </svg>
 
                         <ul  
                         x-cloak
                   x-show.transition.origin.top.left="isOpen"
                   @click.away="isOpen = false"
                   @keydown.escape.window="isOpen = false"
                        
                         class="  absolute w-44 text-left font-semibold bg-white shadow-lg 
                         rounded-xl z-10 py-3 md:ml-8 top-8 md:top-6 right-0 md:left-0 "
                         >
       
                           <li><a href="" class="hover:bg-gray-100 block  transition duration-100 ease-in  px-5 py-3">標記為垃圾郵件</a></li>
                           <li><a href="" class="hover:bg-gray-100 block  transition duration-100 ease-in  px-5 py-3">刪除</a></li>
                         </ul>
                         
                      
                    </button>

                    </div>
                    </div>
               </div>
          </div>

       </div>
       </div>{{-- end commoments-containe--}}

        <div class="is-admin comment-container relative  bg-white rounded-xl flex mt-4 ">
     
        <div class="flex px-4 py-6">
            <div class="flex-none">

                <a href="">
                    <img src="https://s.yimg.com/ny/api/res/1.2/eOLwr11WmD2AGmXu0dCAqg--/YXBwaWQ9aGlnaGxhbmRlcjt3PTk2MDtoPTU0MA--/https://media.zenfs.com/ko/news_tvbs_com_tw_938/7336d5bb4c92b12e2685b4ab73578286" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
                <div class=" text-center font-bold text-blue  text-xxs uppercase mt-1">Uman</div>
                
            </div>
         
          <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                   <a href="#" class="hover:underline">秀姑巒山</a>
               </h4> 

               <div class="text-gray-600 mt-3">
        
                <p>  Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis
                     possimus aperiam molestias vero provident reprehenderit, odit ipsum 
                     libero? Quo beatae qui fugit sed quam voluptas velit cum quibusdam quae mollitia!</p>
               </div>
               <div class="flex items-center justify-between mt-6">
                   <div class="flex flex-col md:flex-row  md:items-center text-xs text-gray-400 font-semibold space-x-2">
                      <div class="font-bold text-blue">Candy oo</div>
                      <div>&bull;</div>
                      <div >50 分鐘前</div>
                      <div>&bull;</div>
                    
                   </div>
                    <div class="flex items-center space-x-2">
                     
                      
                   <button class=" relative bg-gray-100 hover:bg-gray-200 rounded-full transition duration-100 ease-in h-7 py-1 px-3">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                        </svg>
                     
                   </button>
                    </div>
               </div>
          </div>
       </div>
       </div>{{-- commemts-container--}}

       <div class=" comment-container relative  bg-white rounded-xl flex mt-4 ">
     
        <div class="flex px-4 py-6">
          <a href="" class="flex-none">
              <img src="https://s.yimg.com/ny/api/res/1.2/RQkiqGDRNQajPR5MT5sM4Q--/YXBwaWQ9aGlnaGxhbmRlcjt3PTk2MDtoPTEwOTE-/https://media.zenfs.com/ko/news_tvbs_com_tw_938/8c3eebc35aaeb213ceb391decf03af6e" alt="avatar" class="w-14 h-14 rounded-xl">
          </a>
          <div class="mx-4">

             {{-- <h4 class="text-xl font-semibold">
                   <a href="#" class="hover:underline">秀姑巒山</a>
               </h4> --}}

               <div class="text-gray-600 mt-3">
        
                <p>  Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis
                     possimus aperiam molestias vero provident reprehenderit, odit ipsum 
                     libero? Quo beatae qui fugit sed quam voluptas velit cum quibusdam quae mollitia!</p>
               </div>
               <div class="flex items-center justify-between mt-6">
                   <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                      <div class="font-bold text-gray-900">Candy oo</div>
                      <div>&bull;</div>
                      <div >50 分鐘前</div>
                      <div>&bull;</div>
                    
                   </div>
                    <div class="flex items-center space-x-2">
                     
                      
                   <button class=" relative bg-gray-100 hover:bg-gray-200 rounded-full transition duration-100 ease-in h-7 py-1 px-3">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                        </svg>
                     
                   </button>
                    </div>
               </div>
          </div>
       </div>


 </div>{{-- end commemts-container--}}

</x-app-layout>