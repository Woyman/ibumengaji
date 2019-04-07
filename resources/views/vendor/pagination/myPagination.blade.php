<div class="pagination">
  @if ($paginator->hasPages())
  <ul>
    <li><a href="{{ $paginator->previousPageUrl() }}">Prev</a></li>

    @foreach ($elements as $element)

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active" ><a href="#">{{ $page }}</a></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

    <li><a href="{{ $paginator->nextPageUrl() }}">Next</a></li>
  </ul>
  @endif
</div>