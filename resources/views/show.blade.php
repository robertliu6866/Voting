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
              <img src="data:image/jpeg;base64,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" alt="avatar" class="w-14 h-14 rounded-xl">
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
              <div class="  relative">

                  <button type="button" class="flex items-center justify-center w-32  h-11 text-xs text-rose-50 
                  bg-green font-semibold rounded-xl border border-gray-200 hover:bg-green-hover 
                  transition duration-150 ease-in px-6 py-2">
                  
                  
                 回覆
                </button>

                <div class=" absolute z-10 w-104 text-left font-semibold text-sm  
                bg-white  shadow-slate-400 rounded-xl mt-2">
                 <form action="" class="space-y-4 px-4 py-6" >
                 <div>
                   <textarea name="post_comment" id="post_cpmment" cols="30" rows="4"
                    class="w-full text-sm bg-gray-100 rounded-xl border-none placeholder-gray-900 px-4 py-2 " placeholder="給些建議吧！"></textarea>
                 </div>
                    <div class="flex items-center space-x-3">

                        <button 
                            type="button" class="flex items-center justify-center w-1/2  h-11 text-xs text-rose-50 
                            bg-green font-semibold rounded-xl border border-gray-200 hover:bg-green-hover 
                            transition duration-150 ease-in px-6 py-2">
                            
                            
                           評論
                      </button>
                        
                <button type="button" class="flex items-center justify-center w-32 h-11 text-xs  bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400  transition duration-150 ease-in px-6 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18.375 12.739l-7.693 7.693a4.5 4.5 0 01-6.364-6.364l10.94-10.94A3 3 0 1119.5 7.372L8.552 18.32m.009-.01l-.01.01m5.699-9.941l-7.81 7.81a1.5 1.5 0 002.112 2.13" />
                      </svg>
                      
                    <span class="ml-2 text-xs">檔案</span>
                </button>

             

                    </div>


                 </form>
                </div>
            </div>
        <div class="relative">

            <button type="button" class="flex items-center justify-center w-36 h-11 text-xs  bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400  transition duration-150 ease-in px-6 py-2">
                <span class="mr-1 text-sm">狀態</span>
                
                <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 ml-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
                
                
            </button>
            <div class=" absolute z-20 w-76 text-left font-semibold text-sm  
            bg-white  shadow-slate-400 rounded-xl mt-2">
            <form action="#" class="space-y-4 px-4 py-6">
                <div class="space-y-2">
                    <div>
                        <label class="inline-flex items-center">
                            <input type="radio" class="bg-gray-200 text-gray-600 border-none" name="status" value="1" checked>
                            <span class="ml-2">Open</span>
                        </label>
                    </div>
                    <div>
                        <label class="inline-flex items-center">
                            <input type="radio" class="bg-gray-200 text-purple border-none" name="status" value="2">
                            <span class="ml-2">Considering</span>
                        </label>
                    </div>
                    <div>
                        <label class="inline-flex items-center">
                            <input type="radio" class="bg-gray-200 text-yellow border-none" name="status" value="3">
                            <span class="ml-2">In Progress</span>
                        </label>
                    </div>
                    <div>
                        <label class="inline-flex items-center">
                            <input type="radio" class="bg-gray-200 text-green border-none" name="status" value="3">
                            <span class="ml-2">Implemented</span>
                        </label>
                    </div>
                    <div>
                        <label class="inline-flex items-center">
                            <input type="radio" class="bg-gray-200 text-red border-none" name="status" value="3">
                            <span class="ml-2">Closed</span>
                        </label>
                    </div>
                </div>

                <div>
                    <textarea name="update_comment" id="update_comments" cols="30" rows="3" class="w-full text-sm bg-gray-100 rounded-xl placeholder-gray-900 border-none px-4 py-2" placeholder="
                    添加更新評論(可選)"></textarea>
                </div>

                <div class="flex items-center justify-between space-x-3">
                    <button
                        type="button"
                        class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3"
                    >
                        <svg class="text-gray-600 w-4 transform -rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                        </svg>
                        <span class="ml-1">Attach</span>
                    </button>
                    <button
                        type="submit"
                        class="flex items-center justify-center w-1/2 h-11 text-xs bg-blue text-white font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3"
                    >
                        <span class="ml-1">Update</span>
                    </button>
                </div>

                <div>
                    <label class="font-normal inline-flex items-center">
                        <input type="checkbox" name="notify_voters" class="rounded bg-gray-200" checked="">
                        <span class="ml-2">通知所有參與者</span>
                    </label>
                </div>
            </form>
        </div>
        </div>
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