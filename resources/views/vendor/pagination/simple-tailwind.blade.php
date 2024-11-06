@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-between">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white/10 cursor-default leading-5 rounded-md select-none">
                &larr; Previous
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-white/10 leading-5 rounded-md hover:text-gray-500 focus:outline-none transition ease-in-out duration-150">
                &larr; Previous
            </a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-white/10 leading-5 rounded-md hover:text-gray-500 focus:outline-none transition ease-in-out duration-150">
                Next &rarr;
            </a>
        @else
            <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white/10 cursor-default leading-5 rounded-md select-none">
                Next &rarr;
            </span>
        @endif
    </nav>
@endif
