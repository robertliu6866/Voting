
    <form wire:submit.prevent="createIdea" action="#" method="POST" class="  space-y-4 px-4 py-6">
        <div>
         <input wire:model.defer="title" type="text" class="text-sm w-full bg-gray-100 rounded-xl placeholder-gray-900 px-4 py-2 border-none "  placeholder= "地點"  required >
       @error('title')
       <p class="text-red-text-xs mt-1">{{ $message  }}</p>
        @enderror

        </div>
        <div>
         <select wire:model.defer="category" name="category_add" id="category_add" class="text-sm w-full rounded-xl  bg-gray-100 border-none px-4 py-2">
            @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
                  
              @endforeach   
                
          </select>

        </div>
        @error('category')
        <p class="text-red-text-xs mt-1">{{ $message  }}</p>
         @enderror
 
        <div>
  
             <textarea wire:model.defer="description" class="w-full border-none bg-gray-100 
              rounded-xl  placeholder-gray-900 text-sm px-4 py-2" placeholder="細節" name="idea" id="idea" cols="30"
               rows="4"  required></textarea>

               @error('description')
               <p class="text-red-text-xs mt-1">{{ $message  }}</p>
                @enderror
        
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

        <div>
          @if(session('success_message'))
      <div 
      x-data="{ isVisible: true }"
      x-init="
      setTimeout(() => {
          isVisible = false
      }, 5000 )
      "
      x-show.transition.duration.1000ms = "isVisible"
      class="text-center text-green mt-4">

        {{session('success_message')}}
      </div>
            @endif
        </div>

     
     </form>
