@extends('layouts.frontend')
@section('content')
<div class="panel panel-forum" style="background-size: cover; background-repeat: no-repeat; background-position: center; background-image: url('frontend/img/bg/body.png'); max-height:100%; max-width:100%">
    <div class="panel-heading">
        <h4 class="panel-title text-center" style="color:black">VISI dan MISI</h4>
    </div>
    <div class="row">
        <div class="col-lg-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="card-pages">
                <h4 class="text-center" style="color:black; font-weight:bold"><u>VISI dan MISI</u></h4>
                @if ($cek == !null)
                    @foreach ($isi as $item)
                        {!!$item->isi!!}
                    @endforeach
                @else
                    Deskripsi Belum diisi !
                @endif
            </div>
        </div>
        <div class="col-lg-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="card-pages" style="background-size: cover; background-repeat: no-repeat; background-position: center; background-image: url('frontend/img/bg/visi_misi.png'); max-height:100%; max-width:100%">
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer')
    @include('frontend.partials.footer')
@endsection