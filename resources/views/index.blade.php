<x-app-layout>
    <div class="filters  flex space-x-6">
        <div class="w-1/3">
         <select name="category" id="category" class="w-full rounded-xl border-none px-4 py-2">
            <option value="Category One">Category One</option>
            <option value="Category Two">Category Two</option>
            <option value="Category Three">Category Three</option>
            <option value="Category Four">Category Four</option>
         </select>
    </div>
    <div class="w-1/3">
        <select name="other_filters" id="other_filters" class="w-full placeholder-text-gray-900 rounded-xl border-none px-4 py-2">
           <option value="Category One">Category One</option>
           <option value="Category Two">Category Two</option>
           <option value="Category Three">Category Three</option>
           <option value="Category Four">Category Four</option>
        </select>
   </div>
   <div class="w-2/3 relative" >
  
      
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
  <div class="border-r border-gray-100 px-5 py-8">
     <div class="text-center" >
        <div class="font-semibold text-2xl">12</div>
        <div class="text-gray-500">參加</div>

     </div>
     <div class="mt-8">
        <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400  
        font-bold text-xxs uppercase rounded-xl  transition duration-100 ease-in  px-4 py-3">+1</button>
     </div>
     
  </div>
  <div class="flex px-2 py-6">
    <a href="" class="flex-none">
        <img src="https://i02piccdn.sogoucdn.com/9b3d323198a80650" alt="avatar" class="w-14 h-14 rounded-xl">
    </a>
    <div class="mx-4">
         <h4 class="text-xl font-semibold">
             <a href="#" class="hover:underline">台灣玉山爬山</a>
         </h4>
         <div class="text-gray-600 mt-3 line-clamp-2">

            玉山（鄒語：Patungkuonʉ，音譯為八通關、八同關、八童關；布農語：Usaviah/Saviah/Savih/Tongku Saveq；卡那卡那富語：Tanungu'incu；排灣語：Kanasi；清代方志稱作玉山或雪山；十九世紀後半葉西方人稱 Mt. Morrison，漢字音譯摩里遜山、馬禮遜山、磨利生山等，日文音譯「モリソン山」；日治時名為新高山；戰後改為現名[4]:188）是臺灣的最高山，其最高峰玉山主峰海拔3,952.43±0.045公尺[1]，設有一等三角點，百岳之首，位於玉山山脈的核心，在嘉義縣阿里山鄉中山村、南投縣信義鄉東埔村與高雄市桃源區梅山里交界處。[5][6]為保護玉山及周邊極為珍貴的自然景觀生態及歷史文化資產，在1985年設立玉山國家公園。在百岳中，代表鄒與布農的玉山、賽夏與泰雅的雪山、布農的秀姑巒山、泰雅的南湖大山、排灣與魯凱與卑南的北大武山合稱「五嶽」，為臺灣最具代表性的五座高山。
         </div>
         <div class="flex items-center justify-between mt-6">
             <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                <div>34 分鐘前</div>
                <div>&bull;</div>
                <div>種類</div>
                <div>&bull;</div>
                <div class="text-gray-900">3評論</div>
             </div>
              <div class="flex items-center space-x-2">

                <div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">揪團中</div> 
             <button class=" relative bg-gray-100 hover:bg-gray-200 rounded-full transition duration-100 ease-in h-7 py-1 px-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                  </svg>
                  <ul class="absolute w-44 text-left font-semibold bg-white shadow-lg rounded-xl py-3 ml-8" >

                    <li><a href="" class="hover:bg-gray-100 block  transition duration-100 ease-in  px-5 py-3">fewfwjf</a></li>
                    <li><a href="" class="hover:bg-gray-100 block  transition duration-100 ease-in  px-5 py-3">刪除</a></li>
                  </ul>
             </button>
              </div>
         </div>
    </div>
 </div>
 </div>{{-- end idea-container --}}
</div>{{-- end idea-container --}}


<div class="ideas-container space-y-6 my-6">

    <div class="idea-container hover:shadow-md  transition duration-100 ease-in bg-white rounded-xl flex ">
     <div class="border-r border-gray-100 px-5 py-8">
        <div class="text-center" >
           <div class="font-semibold text-2xl">12</div>
           <div class="text-gray-500">參加</div>
   
        </div>
        <div class="mt-8">
           <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400  
           font-bold text-xxs uppercase rounded-xl  transition duration-100 ease-in  px-4 py-3">+1</button>
        </div>
        
     </div>
     <div class="flex px-2 py-6">
       <a href="" class="flex-none">
           <img src="https://i04piccdn.sogoucdn.com/d0e85da08e9e841d" alt="avatar" class="w-14 h-14 rounded-xl">
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
                   <div>50 分鐘前</div>
                   <div>&bull;</div>
                   <div>種類</div>
                   <div>&bull;</div>
                   <div class="text-gray-900">20評論</div>
                </div>
                 <div class="flex items-center space-x-2">
   
                   <div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">成團</div> 
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
   </div>{{-- end idea-container --}}

<div class="ideas-container space-y-6 my-6">

    <div class="idea-container hover:shadow-md  transition duration-100 ease-in bg-white rounded-xl flex ">
     <div class="border-r border-gray-100 px-5 py-8">
        <div class="text-center" >
           <div class="font-semibold text-2xl">5</div>
           <div class="text-gray-500">參加</div>
   
        </div>
        <div class="mt-8">
           <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400  
           font-bold text-xxs uppercase rounded-xl  transition duration-100 ease-in  px-4 py-3">+1</button>
        </div>
        
     </div>
     <div class="flex px-2 py-6">
       <a href="" class="flex-none">
           <img src="https://scontent.ftpe8-4.fna.fbcdn.net/v/t39.30808-6/278217986_10227073769180293_3974764083770939990_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=ye0_SRqzzw8AX9SHT9C&_nc_ht=scontent.ftpe8-4.fna&oh=00_AfCHLefc6QET29N0G7jMHtCVi5ICLfd31yPidsRURKzD9Q&oe=646D0F47" alt="avatar" class="w-14 h-14 rounded-xl">
       </a>
       <div class="mx-4">
            <h4 class="text-xl font-semibold">
                <a href="#" class="hover:underline">北歐徒步旅行</a>
            </h4>
            <div class="text-gray-600 mt-3 line-clamp-2">
   
               北歐有著歐洲最完好的自然保護區。如果你喜歡置身於大自然中，徒步探索美景，
               那麼就到芬蘭東北部的熊環線或是挪威尤通黑門國家公園內或是瑞典著名的國王之路體驗吧。
               冰島的徒步路線上的自然景色是獨一無二的，火山岩斜坡、冒著熱氣的水池、間歇性地熱噴泉等等，另徒步者難忘
            </div>
            <div class="flex items-center justify-between mt-6">
                <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                   <div>12 分鐘前</div>
                   <div>&bull;</div>
                   <div>種類</div>
                   <div>&bull;</div>
                   <div class="text-gray-900">5評論</div>
                </div>
                 <div class="flex items-center space-x-2">
   
                   <div class="  text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4 bg-red">揪團中</div> 
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
   </div>{{-- end idea-container --}}
   
   

 

</x-app-layout>
