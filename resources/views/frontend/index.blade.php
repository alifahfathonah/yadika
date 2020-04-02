@extends('layouts.frontend')
@section('content')

<div class="panel panel-forum">
    <div class="panel-heading">
        <h4 class="panel-title text-center" style="color:black">----- //\\ -----</h4>
    </div>
    @include('frontend.partials.about')
</div>

<div class="row">
    <div class="col-xl-6 col-lg-6 col-12">
        <div class="panel panel-forum">
            <div class="panel-heading">
                <h4 class="panel-title" style="color:black;">Informasi Sekolah</h4>
            </div>
                @include('frontend.partials.info')
        </div>
    </div>
    <div class="col-xl-6 col-lg-6 col-12">
        <div class="panel panel-forum">
            <div class="panel-heading">
                <h4 class="panel-title" style="color:black;">Informasi Pendaftaran</h4>
            </div>
                @include('frontend.partials.pendaftaran')
        </div>
    </div>
</div>
<div class="panel panel-forum">
    <div class="panel-heading">
        <h4 class="panel-title text-center" style="color:black">Berita Sekolah</h4>
    </div>
    @include('frontend.partials.berita')
</div>
@endsection
@section('footer')
    @include('frontend.partials.footer')
@endsection