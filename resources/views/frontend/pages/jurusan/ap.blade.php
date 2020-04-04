@extends('layouts.frontend')
@section('content')
<div class="panel panel-forum">
    <div class="panel-heading">
        <h4 class="panel-title text-center" style="color:black">ADMINISTRASI PERKANTORAN</h4>
    </div>
    <div class="row">
        <div class="col-lg-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="slide">
                <div id="ap" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                    <li data-target="#ap" data-slide-to="0" class="active"></li>
                    <li data-target="#ap" data-slide-to="1"></li>
                    <li data-target="#ap" data-slide-to="2"></li>
                    </ol>
                
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                
                        <div class="item active">
                            <img src="https://cdn.pixabay.com/photo/2016/03/09/09/17/computer-1245714_960_720.jpg" alt="Los Angeles" style="width:100%;">
                        </div>
                    
                        <div class="item">
                            <img src="https://cdn.pixabay.com/photo/2016/02/19/11/19/computer-1209641_960_720.jpg" alt="Chicago" style="width:100%;">
                        </div>
                        
                        <div class="item">
                            <img src="https://cdn.pixabay.com/photo/2015/04/20/13/17/work-731198_960_720.jpg" alt="New York" style="width:100%;">
                        </div>
                
                    </div>
                
                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#ap" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#ap" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="card">
                <div class="body-card">
                    <h4 class="text-center" style="color:slateblue; font-weight:bold">SEKILAS TENTANG ADMINISTRASI PERKANTORAN</h4>
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