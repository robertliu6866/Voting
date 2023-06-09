<x-app-layout>
    <div class="filters  flex  flex-col md:flex-row space-y-3 md:space-y-0 md:space-x-6">
        <div class="w-full md:w-1/3 ">
         <select name="category" id="category" class="w-full rounded-xl border-none px-4 py-2">
            <option value="Category One">Category One</option>
            <option value="Category Two">Category Two</option>
            <option value="Category Three">Category Three</option>
            <option value="Category Four">Category Four</option>
         </select>
    </div>
    <div class="w-full md:w-1/3">
        <select name="other_filters" id="other_filters" class="w-full placeholder-text-gray-900 rounded-xl border-none px-4 py-2">
           <option value="Category One">Category One</option>
           <option value="Category Two">Category Two</option>
           <option value="Category Three">Category Three</option>
           <option value="Category Four">Category Four</option>
        </select>
   </div>
   <div class="w-full md:w-2/3 relative" >
  
      
     <input type="search" placeholder="找想法..." class="w-full rounded-xl bg-white border-none px-4 py-2 pl-8">
     <div class="absolute top-0 flex items-center h-full ml-2">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-700">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
          </svg>
     </div>
</div> 

</div>{{-- end filters --}}

<div class="ideas-container space-y-6 my-6">

 <div class="idea-container hover:shadow-md  transition duration-100 ease-in bg-white rounded-xl flex ">
  <div class="hidden md:block border-r border-gray-100 px-5 py-8">
     <div class="text-center" >
        <div class="font-semibold text-2xl">12</div>
        <div class="text-gray-500">參加</div>

     </div>
     <div class="mt-8">
        <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400  
        font-bold text-xxs uppercase rounded-xl  transition duration-100 ease-in  px-4 py-3">+1</button>
     </div>
     
  </div>
  <div class="flex flex-col md:flex-row flex-1 px-2 py-6">
   <div class="flex-none  mx-2 md:mx-0 ">

      <a href="" >
         <img src="https://thumbor.ftacademy.cn/unsafe/530x298/picture/2/000183862_piclink.png" alt="avatar" class="w-14 h-14 rounded-xl">
      </a>
   </div>
   
    <div class="w-full flex flex-col justify-between md:mx-4">
         <h4 class="text-xl font-semibold mt-2 mx-2 md:mt-0">
             <a href="#" class="hover:underline">台灣玉山爬山</a>
         </h4>
         <div class="text-gray-600 mt-3 line-clamp-2">

            玉山（鄒語：Patungkuonʉ，音譯為八通關、八同關、八童關；布農語：Usaviah/Saviah/Savih/Tongku Saveq；卡那卡那富語：Tanungu'incu；排灣語：Kanasi；清代方志稱作玉山或雪山；十九世紀後半葉西方人稱 Mt. Morrison，漢字音譯摩里遜山、馬禮遜山、磨利生山等，日文音譯「モリソン山」；日治時名為新高山；戰後改為現名[4]:188）是臺灣的最高山，其最高峰玉山主峰海拔3,952.43±0.045公尺[1]，設有一等三角點，百岳之首，位於玉山山脈的核心，在嘉義縣阿里山鄉中山村、南投縣信義鄉東埔村與高雄市桃源區梅山里交界處。[5][6]為保護玉山及周邊極為珍貴的自然景觀生態及歷史文化資產，在1985年設立玉山國家公園。在百岳中，代表鄒與布農的玉山、賽夏與泰雅的雪山、布農的秀姑巒山、泰雅的南湖大山、排灣與魯凱與卑南的北大武山合稱「五嶽」，為臺灣最具代表性的五座高山。
         </div>

      
            <div class="flex flex-col md:flex-row md:items-center justify-between mt-6">
                <div class="flex items-center text-xs text-gray-400   font-semibold space-x-2">
                <div>34 分鐘前</div>
                <div>&bull;</div>
                <div>種類</div>
                <div>&bull;</div>
                <div class="text-gray-900">3評論</div>
             </div>
              <div 
               x-data ="{isOpen: false }"
              
              class="flex items-center space-x-2 mt-4 md:mt-0">

                <div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">揪團中</div> 
             <button
              @click="isOpen = !isOpen"
             class=" relative bg-gray-100 hover:bg-gray-200  border  
             rounded-full transition duration-100 ease-in h-7 py-1 px-3"
             >
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                  </svg>
                  <ul  
                  x-cloak
                  x-show.transition.origin.top.left="isOpen"
                  @click.away="isOpen = false"
                  @keydown.escape.window="isOpen = false"
                  class="  absolute w-44 text-left font-semibold bg-white shadow-lg 
                  rounded-xl py-3  md:ml-8 top-8 md:top-6 right-0 md:left-0 "
                  >

                    <li><a href="" class="hover:bg-gray-100 block  transition duration-100 ease-in  px-5 py-3">標記為垃圾郵件</a></li>
                    <li><a href="" class="hover:bg-gray-100 block  transition duration-100 ease-in  px-5 py-3">刪除</a></li>
                  </ul>
             </button>
              </div>

              <div class="flex items-center md:hidden mt-4 md:mt-0">
               <div class=" bg-gray-100 text-center rounded-xl h-10 px-4 py-2 pr-8 ">
                  <div class="text-sm font-bold leading-none">12</div>
                  <div class="text-xxs font-semibold leading-none text-gray-400">參加</div>
               </div>
              
 
                   
               <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400  
               font-bold text-xxs uppercase rounded-xl  transition duration-100 ease-in  px-4 py-3 -mx-4">+1</button>
              </div>
         </div>
       
         
    </div>
 </div>
 </div>{{-- end idea-container --}}
</div>{{-- end idea-container --}}


<div class="ideas-container space-y-6 my-6">

   <div class="idea-container hover:shadow-md  transition duration-100 ease-in bg-white rounded-xl flex ">
    <div class="hidden md:block border-r border-gray-100 px-5 py-8">
       <div class="text-center" >
          <div class="font-semibold text-2xl">12</div>
          <div class="text-gray-500">參加</div>
  
       </div>
       <div class="mt-8">
          <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400  
          font-bold text-xxs uppercase rounded-xl  transition duration-100 ease-in  px-4 py-3">+1</button>
       </div>
       
    </div>
    <div class="flex flex-col md:flex-row flex-1 px-2 py-6">
     <div class="flex-none  mx-2 md:mx-0 ">
  
        <a href="" >
           <img src="https://thumbor.ftacademy.cn/unsafe/250x141/picture/4/000183364_piclink.jpg" alt="avatar" class="w-14 h-14 rounded-xl">
        </a>
     </div>
     
      <div class="w-full flex flex-col justify-between md:mx-4">
           <h4 class="text-xl font-semibold mt-2 mx-2 md:mt-0">
               <a href="#" class="hover:underline">登富士山</a>
           </h4>
           <div class="text-gray-600 mt-3 line-clamp-2">
  
            每年都有 20 至 30 萬人前往 富士山 ，想征服這條日本知名的登山道。富士山的正式登山季節是七月初到 9 月初。大部分的人都會走知名的吉田路線。從富士斯巴魯線五合目開始，這裡有土產和飲食店，可在上山前做足準備。這是條挑戰性很高的登山路線，但是一旦登上山頂，看到眼前的風景，就會覺得一切都值得了。

            這可不是說走就可以走的行程。這種充滿挑戰的健行需要特殊裝備，因為即使是較短的路線，也要耗時約八小時。如果您有計畫，可以先預約沿路的小屋休息（不過在擁擠的公共房間裡，別期待能睡得太舒服）。這條路人潮也不少，所以可以的話盡量避開週末假日。           </div>
  
        
              <div class="flex flex-col md:flex-row md:items-center justify-between mt-6">
                  <div class="flex items-center text-xs text-gray-400   font-semibold space-x-2">
                  <div>34 分鐘前</div>
                  <div>&bull;</div>
                  <div>種類</div>
                  <div>&bull;</div>
                  <div class="text-gray-900">3評論</div>
               </div>
                <div 
                 x-data ="{isOpen: false }"
                
                class="flex items-center space-x-2 mt-4 md:mt-0">
  
                  <div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">揪團中</div> 
               <button
                @click="isOpen = !isOpen"
               class=" relative bg-gray-100 hover:bg-gray-200  border  
               rounded-full transition duration-100 ease-in h-7 py-1 px-3"
               >
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                    </svg>
                    <ul  
                    x-cloak
                    x-show.transition.origin.top.left="isOpen"
                    @click.away="isOpen = false"
                    @keydown.escape.window="isOpen = false"
                    class="  absolute w-44 text-left font-semibold bg-white shadow-lg 
                    rounded-xl py-3  md:ml-8 top-8 md:top-6 right-0 md:left-0 "
                    >
  
                      <li><a href="" class="hover:bg-gray-100 block  transition duration-100 ease-in  px-5 py-3">標記為垃圾郵件</a></li>
                      <li><a href="" class="hover:bg-gray-100 block  transition duration-100 ease-in  px-5 py-3">刪除</a></li>
                    </ul>
               </button>
                </div>
  
                <div class="flex items-center md:hidden mt-4 md:mt-0">
                 <div class=" bg-gray-100 text-center rounded-xl h-10 px-4 py-2 pr-8 ">
                    <div class="text-sm font-bold leading-none">12</div>
                    <div class="text-xxs font-semibold leading-none text-gray-400">參加</div>
                 </div>
                
   
                     
                 <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400  
                 font-bold text-xxs uppercase rounded-xl  transition duration-100 ease-in  px-4 py-3 -mx-4">+1</button>
                </div>
           </div>
         
           
      </div>
   </div>
   </div>{{-- end idea-container --}}
  </div>{{-- end idea-container --}}
  <div class="ideas-container space-y-6 my-6">

   <div class="idea-container hover:shadow-md  transition duration-100 ease-in bg-white rounded-xl flex ">
    <div class="hidden md:block border-r border-gray-100 px-5 py-8">
       <div class="text-center" >
          <div class="font-semibold text-2xl">12</div>
          <div class="text-gray-500">參加</div>
  
       </div>
       <div class="mt-8">
          <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400  
          font-bold text-xxs uppercase rounded-xl  transition duration-100 ease-in  px-4 py-3">+1</button>
       </div>
       
    </div>
    <div class="flex flex-col md:flex-row flex-1 px-2 py-6">
     <div class="flex-none  mx-2 md:mx-0 ">
  
        <a href="" >
           <img src="https://thumbor.ftacademy.cn/unsafe/250x141/picture/8/000183538_piclink.jpg" alt="avatar" class="w-14 h-14 rounded-xl">
        </a>
     </div>
     
      <div class="w-full flex flex-col justify-between md:mx-4">
           <h4 class="text-xl font-semibold mt-2 mx-2 md:mt-0">
               <a href="#" class="hover:underline">日本山區是健行者</a>
           </h4>
           <div class="text-gray-600 mt-3 line-clamp-2">
  
            所有日本大城市附近都有山，所以想要找機會探索山峰的人選擇很多。各種探索路線可以滿足各種健行水準的旅客，從悠閒漫步到更具挑戰性的攀登都有，供老練的健行者或登山者挑戰。

            除了探險的興奮感外，健行還能展露出日本另一面的美。山間健行可以見證不同自然現象，例如驚人的瀑布、冒煙的間歇泉、如水晶般澄澈的河流，以及令人屏息的美景。不同季節，景色變化極大。您可以看到秋天色彩繽紛的樹葉、冬天的白雪，和春天的花朵。           </div>
  
        
              <div class="flex flex-col md:flex-row md:items-center justify-between mt-6">
                  <div class="flex items-center text-xs text-gray-400   font-semibold space-x-2">
                  <div>34 分鐘前</div>
                  <div>&bull;</div>
                  <div>種類</div>
                  <div>&bull;</div>
                  <div class="text-gray-900">3評論</div>
               </div>
                <div 
                 x-data ="{isOpen: false }"
                
                class="flex items-center space-x-2 mt-4 md:mt-0">
  
                  <div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">揪團中</div> 
               <button
                @click="isOpen = !isOpen"
               class=" relative bg-gray-100 hover:bg-gray-200  border  
               rounded-full transition duration-100 ease-in h-7 py-1 px-3"
               >
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                    </svg>
                    <ul  
                    x-cloak
                    x-show.transition.origin.top.left="isOpen"
                    @click.away="isOpen = false"
                    @keydown.escape.window="isOpen = false"
                    class="  absolute w-44 text-left font-semibold bg-white shadow-lg 
                    rounded-xl py-3  md:ml-8 top-8 md:top-6 right-0 md:left-0 "
                    >
  
                      <li><a href="" class="hover:bg-gray-100 block  transition duration-100 ease-in  px-5 py-3">標記為垃圾郵件</a></li>
                      <li><a href="" class="hover:bg-gray-100 block  transition duration-100 ease-in  px-5 py-3">刪除</a></li>
                    </ul>
               </button>
                </div>
  
                <div class="flex items-center md:hidden mt-4 md:mt-0">
                 <div class=" bg-gray-100 text-center rounded-xl h-10 px-4 py-2 pr-8 ">
                    <div class="text-sm font-bold leading-none">12</div>
                    <div class="text-xxs font-semibold leading-none text-gray-400">參加</div>
                 </div>
                
   
                     
                 <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400  
                 font-bold text-xxs uppercase rounded-xl  transition duration-100 ease-in  px-4 py-3 -mx-4">+1</button>
                </div>
           </div>
         
           
      </div>
   </div>
   </div>{{-- end idea-container --}}
  </div>{{-- end idea-container --}}
   

 

</x-app-layout>
