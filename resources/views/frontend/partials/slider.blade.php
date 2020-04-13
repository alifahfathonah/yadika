{{-- <div class="slide">
    <div id="sliderfoto" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            @foreach ($slider as $item)
                <li data-target="#sliderfoto" data-slide-to="{{$item->gambar}}" class="{{ $sliders->first ? 'active' : '' }}"></li>
            @endforeach
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            @foreach ($slider as $item)
                <div class="item {{ $loop->first ? 'active' : '' }}">
                    <img src="{{asset('frontend/slider/'. $item->gambar)}}">
                </div>
            @endforeach
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#sliderfoto" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#sliderfoto" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
        </a>
    </div>
</div> --}}