@foreach ($items as $item)
    @if ($loop->first)
        <div class="col-xl-2 col-lg-3 col-md-3 col-sm-5">
        @else
        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
    @endif
            <div class="single-footer-caption mb-50">
                <div class="footer-tittle">
                    <h4>{{ $item->title }}</h4>
                    <ul>
                        @foreach ($item->children as $subitem)
                            <li><a href="#">{{ $subitem->title }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
@endforeach
