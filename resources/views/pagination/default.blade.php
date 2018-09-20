@if ($paginator->hasPages())
<div class="styled-pagination">
    <ul class="clearfix">
        @if ($paginator->onFirstPage())
            <li class="prev disabled"><a href="#">
                <span class="fa fa-angle-left"></span> &nbsp;Anterios</a>
            </li>
        @else
            <li class="prev">
            <a href="{{ $paginator->previousPageUrl() }}">
                <span class="fa fa-angle-left"></span> &nbsp;Anterios
            </a>
            </li>
        @endif

        @foreach ($elements as $element)
            @if (is_string($element))
                <li><span class="gap">&bull; &bull; &bull;</span></li>
            @endif
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li><a href="#" class="active">{{ $page }}</a></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        @if ($paginator->hasMorePages())
            <li class="next">
                <a href="{{ $paginator->nextPageUrl() }}">Siguiente &nbsp;<span class="fa fa-angle-right"></span>
                </a>
            </li>
        @else
            <li class="next">
                <a href="#">Siguiente &nbsp;<span class="fa fa-angle-right"></span>
                </a>
            </li>
        @endif
    </ul>
</div>
@endif
