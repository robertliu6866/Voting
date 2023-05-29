<x-app-layout>
    <div>
        <a href="/" class="flex items-center font-semibold hover:underline">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
              </svg>
              
            <span class="ml-2">所有行程</span>
        </a>
    </div>

    <div class="idea-container  bg-white rounded-xl flex mt-4 ">
     
        <div class="flex px-4 py-6">
          <a href="" class="flex-none">
              <img src="https://megapx.dcard.tw/v1/images/cb290066-139d-428c-81eb-ba5bb4d39e41/responsive?width=640" alt="avatar" class="w-14 h-14 rounded-xl">
          </a>
          <div class="mx-4">
               <h4 class="text-xl font-semibold">
                   <a href="#" class="hover:underline">秀姑巒山</a>
               </h4>
               <div class="text-gray-600 mt-3 line-clamp-2">
      
                   秀姑巒山，布農族稱為馬霍拉斯山（巒社群布農語：Maqudas[2]:226[a]、Maduqlas[3]:62,75、郡社群布農語：Mahudas、東埔布農：Suhsuh[3]:61,74），[1][b]是台灣中央山脈中段最高山彙中心的一座高山，標高3,825公尺，為中央山脈最高峰，台灣第三高山，僅次於玉山和雪山[8]，山頂設有二等三角點1691號，國土測繪中心最新圖資標記基點西南方約80多公尺處最高峰標高3829公尺，[4][c]位於南投縣信義鄉東埔村與花蓮縣卓溪鄉立山村的交界，玉山國家公園範圍內。在著名的台灣百岳之中排名第6。秀姑巒山與百岳中的玉山、雪山、南湖大山、北大武山合稱「五嶽」，[14]為台灣最具代表性的五座高山，氣勢磅礡，雄霸一方。
               </div>
               <div class="flex items-center justify-between mt-6">
                   <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                      <div class="font-bold text-gray-900">liu liu</div>
                      <div>&bull;</div>
                      <div >50 分鐘前</div>
                      <div>&bull;</div>
                      <div>種類</div>
                      <div>&bull;</div>
                      <div class="text-gray-900">20評論</div>
                   </div>
                    <div class="flex items-center space-x-2">
      
                      <div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">細節</div> 
                   <button class=" relative bg-gray-100 hover:bg-gray-200 rounded-full transition duration-100 ease-in h-7 py-1 px-3">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                        </svg>
                     
                   </button>
                    </div>
               </div>
          </div>
       </div>
       </div>{{-- end idea-container --}}
      <div class="buttons-container flex items-center justify-between mt-6">
        <div class="flex items-center space-x-4 ml-6">

            <button type="button" class="flex items-center justify-center w-32  h-11 text-xs text-rose-50 
            bg-green font-semibold rounded-xl border border-gray-200 hover:bg-green-hover 
            transition duration-150 ease-in px-6 py-2">
            
            
            <span class="ml-2 text-xs">回覆</span>
        </button>
        
        <button type="button" class="flex items-center justify-center w-36 h-11 text-xs  bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400  transition duration-150 ease-in px-6 py-2">
            <span class="mr-1 text-xs">狀態</span>
            
            <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 ml-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
              </svg>
              
            
        </button>
    </div>
    <div class="flex items-center space-x-3 ">

    

        <div class="  bg-white font-semibold text-center rounded-xl  px-2  ">
            <div class="text-xl leading-snug ">12</div>
            <div class="text-gray-400 text-xs leading-none">已參加</div>


        </div>
        <button type="button" 
        class="flex items-center justify-center w-32 h-11 text-xs uppercase
          bg-gray-200 font-semibold rounded-xl border border-gray-200
           hover:border-gray-400  transition duration-150 ease-in px-6 py-2">
            <span class="mr-1 text-xs">參加</span>
            
        
            
        </button>
     

        </div>
    
      </div>{{-- end buttons-container--}}
      <div class="comments-container relative space-y-6 ml-22 pt-6 my-8 mt-1">

    <div class="comment-container relative  bg-white rounded-xl flex mt-4 ">
     
        <div class="flex px-4 py-6">
          <a href="" class="flex-none">
              <img src="https://megapx.dcard.tw/v1/images/03de33d1-fb08-4bf9-9701-37cfb5a2901d/responsive?width=1280" alt="avatar" class="w-14 h-14 rounded-xl">
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
       </div>{{-- end commoments-containe--}}

        <div class="is-admin comment-container  relative  bg-white rounded-xl flex mt-4 ">
     
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
                   <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
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