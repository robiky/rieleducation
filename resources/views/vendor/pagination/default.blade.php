 @if ($paginator->hasPages())
    <nav class="courses-pagination mt-50" role="navigation">


        {{-- Pagination Elements --}}
        @foreach ($elements as $element)

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())

                        <li class="page-item"><a class="active" href="#">{{ $page }}</a></li>
                    @else

                        <li class="page-item"><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach


    </nav>
@endif
