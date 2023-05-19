<x-app-layout>
    <div class="filters flex space-x-6">
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

 <div class="idea-container bg-white rounded-xl flex ">
  <div class="border-r border-gray-100 px-5 py-8">
     <div class="text-center" >
        <div class="font-semibold text-2xl">12</div>
        <div class="text-gray-500">Votes</div>

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
         <div class="text-gray-600 mt-3">

            北歐有著歐洲最完好的自然保護區。如果你喜歡置身於大自然中，徒步探索美景，
            那麼就到芬蘭東北部的熊環線或是挪威尤通黑門國家公園內或是瑞典著名的國王之路體驗吧。
            冰島的徒步路線上的自然景色是獨一無二的，火山岩斜坡、冒著熱氣的水池、間歇性地熱噴泉等等，另徒步者難忘
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

                <div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">瞧瞧</div> 
             <button class=" bg-gray-100 hover:bg-gray-200 rounded-full transition duration-100 ease-in h-7 py-2 px-3">
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
