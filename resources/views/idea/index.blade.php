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
{{-- @foreach ( $ideas as $idea )$ideas form ideacontroller裡面的變數--}}
<div class="ideas-container space-y-6 my-8">
   @foreach ( $ideas as $idea )
       


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
         <img src="https://mir-s3-cdn-cf.behance.net/project_modules/fs/cf80a1172132309.6479d3aa983f2.png" alt="avatar" class="w-14 h-14 rounded-xl">
      </a>
   </div>
   
    <div class="w-full flex flex-col justify-between md:mx-4">
         <h4 class="text-xl font-semibold mt-2 mx-2 md:mt-0">
             <a href="{{route('idea.show',$idea)}}" class="hover:underline">{{$idea->title}}</a>
         </h4>
         <div class="text-gray-600 mt-3 line-clamp-2">

           {{$idea->description}}
         </div>

      
            <div class="flex flex-col md:flex-row md:items-center justify-between mt-6">
                <div class="flex items-center text-xs text-gray-400   font-semibold space-x-2">
                <div>{{$idea->created_at->diffForHumans()}}</div>
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
 @endforeach

</div>{{-- end idea-container --}}



 

</x-app-layout>
