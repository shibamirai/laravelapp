@if ($paginator->hasPages())
    <nav>
        <div>
            <span>
                @if ($paginator->onFirstPage())
                    <span>←</span>
                @else
                    <a href="{{ $paginator->previousPageUrl() }}">←</a>
                @endif

                @foreach ($elements as $element)
                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <span>{{ $page }}</span>
                            @else
                                <a href="{{ $url }}">{{ $page }}</a>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                @if ($paginator->hasMorePages())
                    <a href="{{ $paginator->nextPageUrl() }}">→</a>
                @else
                    <span>→</span>
                @endif
            </span>
        </div>
    </nav>
@endif
