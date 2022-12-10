

@if ($paginator->hasPages())
    <ul class="pagination toolbox-item">
        <li class="page-item disabled">
            <a class="page-link page-link-btn" href="#"><i class="icon-angle-left"></i></a>
        </li>

        {{--  --}}
        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
            <span aria-disabled="true">
                <span class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 cursor-default leading-5">{{ $element }}</span>
            </span>
        @endif

        {{-- Array Of Links --}}
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li class="page-item active">
                        <a class="page-link" href="#"> {{ $page }} <span class="sr-only">{{ $page }}</span></a>
                    </li>
                @else
                    <li class="page-item active">
                        <a href="{{ $url }}" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150" aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                            {{ $page }}
                        </a>
                    </li>
                @endif
            @endforeach
        @endif
        @endforeach
        {{--  --}}


        {{--  --}}
        @if ($paginator->hasMorePages())
        <li class="page-item">
            <a class="page-link page-link-btn" href="{{ $paginator->nextPageUrl() }}"><i class="icon-angle-right"></i></a>
        </li>
        @else
        <li class="page-item">
            <a class="page-link page-link-btn" href="{{ $paginator->nextPageUrl() }}"><i class="icon-angle-right"></i></a>
        </li>
        @endif
        {{--  --}}
    </ul>
@endif
