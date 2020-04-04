@extends('layouts.frontend')
@section('slide')
    @include('frontend.partials.slider')
@endsection
@section('content')
<div class="row">
    <div class="col-xl-6 col-lg-6 col-12">
        <div class="panel panel-forum">
            <div class="panel-heading">
                <h4 class="panel-title" style="color:black;">Informasi Sekolah</h4>
            </div>
                @include('frontend.partials.info_sekolah')
        </div>
    </div>
    <div class="col-xl-6 col-lg-6 col-12">
        <div class="panel panel-forum">
            <div class="panel-heading">
                 <h4 class="panel-title" style="color:black;">Mading Sekolah</h4>
            </div>
                @include('frontend.partials.mading')
        </div>
    </div>
</div>

<div class="panel panel-forum">
    <div class="panel-heading">
        <h4 class="panel-title text-center" style="color:black">Berita Sekolah</h4>
    </div>
    @include('frontend.partials.berita')
</div>

<div class="panel panel-forum">
    <div class="panel-heading">
        <h4 class="panel-title text-center" style="color:black">----- // SEKILAS TENTANG SMK YADIKA NATAR \\ -----</h4>
    </div>
    @include('frontend.partials.about')
</div>
@endsection
@section('footer')
    @include('frontend.partials.footer')
@endsection