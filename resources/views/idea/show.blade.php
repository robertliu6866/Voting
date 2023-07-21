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
     
        <div class="flex flex-col md:flex-row flex-1 px-4 py-6">
            <div class="flex-none mx-2 md:mx-4">

                <a href="" >
                    <img src="{{$idea->user->getAvatar()}}" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
            </div>
          <div class="w-full mx-2 md:mx-4">
               <h4 class="text-xl font-semibold">
                   <a href="#" class="hover:underline">{{$idea->title}}</a>
               </h4>
               <div class="text-gray-600 mt-3 ">
      
                {{$idea->description}}
               </div>
               <div class="flex flex-col md:flex-row md:items-center justify-between mt-6">
                   <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                      <div class="hidden md:block font-bold text-gray-900">{{$idea->user->name}}</div>
                      <div class="hidden md:block">&bull;</div>
                      <div >{{ $idea->created_at->diffForHumans()}}</div>
                      <div>&bull;</div>
                      <div>{{$idea->category->name}}</div>
                      <div>&bull;</div>
                      <div class="text-gray-900">20評論</div>
                   </div>
                    <div
                    x-data ="{isOpen: false }"
                    class="flex items-center space-x-2 mt-4  md:mt-0  ">
      
                      <div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">細節</div> 
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

                    <div class="flex items-center md:hidden mt-4 md:mt-0">
                        <div class="bg-gray-100 text-center rounded-xl h-10 px-4 py-2 pr-8">
                            <div class="text-sm font-bold leading-none">12</div>
                            <div class="text-xxs font-semibold leading-none text-gray-400">山友</div>
                        </div>
                        <button
                            class="w-20 bg-gray-200 border border-gray-200 font-bold text-xxs uppercase rounded-xl hover:border-gray-400 transition duration-150 ease-in px-4 py-3 -mx-5"
                        >
                            ＋1
                        </button>
                    </div>

                  
                
               </div>
          </div>
       </div>
       </div>{{-- end idea-container --}}


      <div class="buttons-container flex items-center justify-between mt-6">
        <div class="flex flex-col md:flex-row items-center space-x-4 md:ml-6">
              <div 
              class="relative"
              x-data ="{isOpen: false }"
              >

                  <button
                   type="button"
                   @click="isOpen = !isOpen"
                   
                   class="flex items-center justify-center w-32  h-11 text-xs text-rose-50 
                  bg-green font-semibold rounded-xl border border-gray-200 hover:bg-green-hover 
                  transition duration-150 ease-in px-6 py-2">
                  
                  
                 回覆
                </button>
              

                <div 
                x-cloak
                x-show.transition.origin.top.left="isOpen"
                @click.away="isOpen = false"
                @keydown.escape.window="isOpen = false"
                
                class="absolute z-10 w-64 md:w-104 text-left font-semibold text-sm  
                bg-white  shadow-slate-400 rounded-xl mt-2">
                 <form action="" class="space-y-4 px-4 py-6" >
                 <div>
                   <textarea name="post_comment" id="post_cpmment" cols="30" rows="4"
                    class="w-full text-sm bg-gray-100 rounded-xl border-none placeholder-gray-900 px-4 py-2 " placeholder="給些建議吧！"></textarea>
                 </div>
                    <div class="flex  flex-col md:flex-row  items-center md:space-x-3">

                        <button 
                            type="button" class="flex items-center justify-center w-full md:w-1/2  h-11 text-xs text-rose-50 
                            bg-green font-semibold rounded-xl border border-gray-200 hover:bg-green-hover 
                            transition duration-150 ease-in px-6 py-2">
                            
                            
                           評論
                      </button>


                        
                <button type="button" class="flex items-center justify-center w-full md:w-32 h-11 text-xs  bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400  transition duration-150 ease-in px-6 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18.375 12.739l-7.693 7.693a4.5 4.5 0 01-6.364-6.364l10.94-10.94A3 3 0 1119.5 7.372L8.552 18.32m.009-.01l-.01.01m5.699-9.941l-7.81 7.81a1.5 1.5 0 002.112 2.13" />
                      </svg>
                      
                    <span class="ml-2 text-xs">檔案</span>
                </button>

             

                    </div>


                 </form>
                </div>
            </div>
        <div 
        class="relative"
        x-data ="{isOpen: false }"
        
        >
     

        <button
            type="button"
            @click="isOpen = !isOpen"
            class="flex items-center justify-center w-36 h-11 text-xs  bg-gray-200 
            font-semibold rounded-xl border border-gray-200 hover:border-gray-400  transition duration-150 ease-in px-6 py-2 mt-2 md:mt-0"
            >
                <span class="mr-1 text-sm">狀態</span>
                
                <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 ml-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
                
                
            </button>
            <div
            x-cloak
            x-show.transition.origin.top.left="isOpen"
            @click.away="isOpen = false"
            @keydown.escape.window="isOpen = false"
            class=" absolute z-20  w-64 md:w-76 text-left font-semibold text-sm  
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



    <div class="hidden md:flex items-center space-x-3 ">

    

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