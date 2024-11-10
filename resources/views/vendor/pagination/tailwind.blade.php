@if ($paginator->hasPages())
<ul class="pagination flex items-center justify-center flex-wrap gap-16">
    @if ($paginator->onFirstPage())
        <li class="page-item disabled">
            <a class="page-link h-64 w-64 flex items-center justify-center text-xxl rounded-8 font-[500] text-neutral-400 bg-gray-100 border border-gray-200 cursor-default" href="#">
                <i class="ph-bold ph-arrow-left"></i>
            </a>
        </li>
    @else
        <li class="page-item">
            <a href="{{ $paginator->previousPageUrl() }}" class="page-link h-64 w-64 flex items-center justify-center text-xxl rounded-8 font-[500] text-neutral-600 border border-gray-100 hover:text-neutral-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-500">
                <i class="ph-bold ph-arrow-left"></i>
            </a>
        </li>
    @endif

    @foreach ($elements as $element)
        @if (is_string($element))
            <li class="page-item disabled">
                <a class="page-link h-64 w-64 flex items-center justify-center text-md rounded-8 font-[500] text-neutral-400 bg-gray-100 border border-gray-200 cursor-default" href="#">{{ $element }}</a>
            </li>
        @endif

        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li class="page-item active">
                        <a class="page-link   
 h-64 w-64 flex items-center justify-center text-md rounded-8 font-[500] text-neutral-600 bg-neutral-200 border border-neutral-300" href="#">{{ $page }}</a>
                    </li>
                @else
                    <li class="page-item">
                        <a href="{{ $url }}" class="page-link h-64 w-64 flex items-center justify-center text-md rounded-8 font-[500] text-neutral-600 border border-gray-100 hover:text-neutral-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-500">{{ $page }}</a>
                    </li>
                @endif
            @endforeach
        @endif
    @endforeach

    @if ($paginator->hasMorePages())
        <li class="page-item">
            <a href="{{ $paginator->nextPageUrl() }}" class="page-link   
 h-64 w-64 flex items-center justify-center text-xxl rounded-8 font-[500] text-neutral-600 border border-gray-100 hover:text-neutral-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-500">
                <i class="ph-bold ph-arrow-right"></i>
            </a>
        </li>
    @else
        <li class="page-item disabled">
            <a class="page-link h-64 w-64 flex items-center justify-center text-xxl rounded-8 font-[500] text-neutral-400 bg-gray-100 border border-gray-200 cursor-default" href="#">
                <i class="ph-bold ph-arrow-right"></i>
            </a>
        </li>
    @endif
</ul>
@endif