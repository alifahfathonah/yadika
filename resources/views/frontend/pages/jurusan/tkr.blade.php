@extends('layouts.frontend')
@section('content')
<div class="panel panel-forum">
    <div class="panel-heading">
        <h4 class="panel-title text-center" style="color:black">TEKNIK OTOMOTIF</h4>
    </div>
    <div class="row">
        <div class="col-lg-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="slide">
                <div id="tkr" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        @foreach ($slider as $item)
                            <li data-target="#tkr" data-slide-to="{{$item->gambar}}" class="{{ $sliders->first ? 'active' : '' }}"></li>
                        @endforeach
                    </ol>
                
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="carousel-inner">
                            @foreach ($slider as $item)
                                <div class="item {{ $loop->first ? 'active' : '' }}">
                                    <img src="{{asset('frontend/slider/'. $item->gambar)}}">
                                </div>
                            @endforeach
                        </div>
                    </div>
                
                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#tkr" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#tkr" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="card">
                <div class="body-card">
                    <h4 class="text-center" style="color:slateblue; font-weight:bold">SEKILAS TENTANG TEKNIK OTOMOTIF</h4>
                    @if ($cek == !null)
                        @foreach ($isi as $item)
                            {!!$item->isi!!}
                        @endforeach
                    @else
                        Deskripsi Belum diisi !
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<div class="panel panel-forum">
    <div class="panel-heading">
        <h4 class="panel-title text-center" style="color:black">INFORMASI PENDAFTARAN</h4>
    </div>
    @include('frontend.pages.jurusan.info_pendaftaran')
</div>
@endsection
@section('footer')
    @include('frontend.partials.footer')
@endsection