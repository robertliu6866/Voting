<div>
    <nav class="hidden md:flex items-center  justify-between text-gray-400 text-xs">
        <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10 rounded-xl ">
            <li>
            <a wire:click.prevent="setStatus ('All')" href="" class="border-b-4 pb-3 @if ($status === 'All')  border-blue
            text-gray-900 @endif ">全部(99)</a>
        </li>
            <li>
            <a wire:click.prevent="setStatus ('諮詢')" href="" class=" transition duration-100 ease-in border-b-4 pb-3 hover:border-blue  @if ($status === '諮詢')  border-blue
            text-gray-900 @endif">諮詢 (50)</a>
        </li>
            <li>
            <a wire:click.prevent="setStatus ('揪團中')" href="" class=" transition duration-100 ease-in border-b-4 pb-3 hover:border-blue @if ($status === '揪團中')  border-blue
            text-gray-900 @endif ">揪團中 (50)</a>
        </li>

        </ul>


        <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
        <li>
            <a wire:click.prevent="setStatus ('快成團')" href="" class=" transition duration-100 ease-in border-b-4 pb-3 hover:border-blue @if ($status === '快成團')  border-blue
            text-gray-900 @endif">快成團(10)</a>
        </li>
        <li>
            <a wire:click.prevent="setStatus ('已成團')" href="" class=" transition duration-100 ease-in border-b-4 pb-3 hover:border-blue @if ($status === '已成團')  border-blue
            text-gray-900 @endif">已成團 (55)</a>
        </li>


        </ul>


</nav>
{{-- <div class="mt-8"></div>
{{$slot}}
</div> --}}

</div>
