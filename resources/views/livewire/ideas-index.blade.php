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
、
<div class="w-full md:w-2/3 relative" >

  
 <input type="search" placeholder="找想法..." class="w-full rounded-xl bg-white border-none px-4 py-2 pl-8">
 <div class="absolute top-0 flex items-center h-full ml-2">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-700">
        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
      </svg>
 </div>
</div> 

</div>
<div class="ideas-container space-y-6 my-8">
   
{{-- key="$idea->id"：這個屬性設置每個子組件的唯一鍵（key），確保每個子組件都有獨一無二的鍵。這是為了讓 Livewire 知道如何有效地更新 DOM --}}
@foreach ($ideas as $idea)
   <livewire:idea-index 

 :key="$idea->id"
 :idea="$idea"
 :votesCount="$idea->votes_count"
 />  
@endforeach





</div>{{-- end idea-container --}}

<div class="my-8">
{{$ideas->links()}}

</div>
