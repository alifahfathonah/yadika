@extends('layouts.frontend')
@section('content')
    <div class="row ">
        <div class="col-lg-8 col-xl-8 col-12">
            <div class="card card-berita">
                <div class="card-body">
                    <h3 class="judul">{{$show->title}}</h3>
                    <span style="padding-left:15px">
                      Posted By <b>Andri</b> | <b>Berita</b> | {{Carbon\carbon::parse($show->created_at)->format('d-m-Y')}}
                    </span>
                    <p class="isi-berita"> {!! $show->isi !!}</p>
                    <span style="padding-left:15px">
                        Share 
                        <a href=""><i class="fa fa-instagram"></i></a> 
                        <a href=""><i class="fa fa-facebook"></i></a> 
                        <a href=""><i class="fa fa-whatsapp"></i></a>
                    </span>
                </div>
                <br>
            </div> <br>     

            {{-- Berita Terkait --}}
                <div class="panel panel-forum">
                    <div class="panel-heading">
                        <h4 class="panel-title text-center" style="color:black; font-weight:bold">Berita Terkait</h4>
                    </div>
                    @include('frontend.partials.berita.terkait') <br>
                </div>
            {{-- End --}}
        </div>
        <br>
        <div class="col-lg-4 col-xl-4 col-12">
            <div class="card card-1 ">
                <div class="card-body">
                    <h4>Info Sekolah</h4>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-xl-4 col-12">
            <div class="card card-1 ">
                <div class="card-body">
                    <h4>Info Sekolah</h4>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    @include('frontend.partials.footer')
@endsection