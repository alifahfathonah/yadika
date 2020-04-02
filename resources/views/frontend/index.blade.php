@extends('layouts.frontend')
@section('content')
<div class="row">
    <div class="col-xl-6 col-lg-6 col-12">
        <div class="panel panel-forum">
            <div class="panel-heading">
                <h4 class="panel-title">Informasi Sekolah</h4>
            </div>
                @include('frontend.partials.info')
        </div>
    </div>
    <div class="col-xl-6 col-lg-6 col-12">
        <div class="panel panel-forum">
            <div class="panel-heading">
                <h4 class="panel-title">Informasi Pendaftaran</h4>
            </div>
                @include('frontend.partials.pendaftaran')
        </div>
    </div>
</div>
<div class="panel panel-forum">
    <div class="panel-heading">
        <h4 class="panel-title">Berita Terbaru</h4>
    </div>
    @include('frontend.partials.berita')
</div>
@endsection
@section('footer')
    @include('frontend.partials.footer')
@endsection