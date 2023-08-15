<div 
x-data
@click="const target = $event.target.tagName.toLowerCase()
const ignores = ['button','svg','path','a', 'img']
const ideaLink = $event.target.closest('.idea-container').querySelector('.idea-link')

!ignores.includes(target) && ideaLink.click()"



class="idea-container hover:shadow-md  transition duration-100 ease-in bg-white rounded-xl flex ">
 <div class="hidden md:block border-r border-gray-100 px-5 py-8">
    <div class="text-center" >
       <div class="font-semibold text-2xl"> {{$votesCount}}</div>
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
        <img src="{{$idea->user->getAvatar()}}" alt="avatar" class="w-14 h-14 rounded-xl">
     </a>
  </div>
  
   <div class="w-full flex flex-col justify-between md:mx-4">
        <h4 class="text-xl font-semibold mt-2 mx-2 md:mt-0">
            <a href="{{route('idea.show',$idea)}}" class="idea-link hover:underline">{{$idea->title}}</a>
        </h4>
        <div class="text-gray-600 mt-3 line-clamp-2">

          {{$idea->description}}
        </div>

     
           <div class="flex flex-col md:flex-row md:items-center justify-between mt-6">
               <div class="flex items-center text-xs text-gray-400   font-semibold space-x-2">
               <div>{{$idea->created_at->diffForHumans()}}</div>
               <div>&bull;</div>
               <div>{{$idea->category->name}}</div>
               <div>&bull;</div>
               <div class="text-gray-900">3評論</div>
            </div>
             <div 

              x-data ="{isOpen: false }"
             
             class="flex items-center space-x-2 mt-4 md:mt-0">

               <div class=" {{$idea->status->classes}} text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">{{$idea->status->name}}</div> 
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
                 <div class="text-sm font-bold leading-none">{{$votesCount}}<</div>
                 <div class="text-xxs font-semibold leading-none text-gray-400">參加1</div>
              </div>
             

                  
              <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400  
              font-bold text-xxs uppercase rounded-xl  transition duration-100 ease-in  px-4 py-3 -mx-4">+1</button>
             </div>
        </div>
      
        
   </div>
</div>
</div>{{-- end idea-container --}}
