@extends('layouts.frontend')
@section('content')
    <div class="card card-berita">
        <div class="body-card">
            <h2 class="text-center">PENDAFTARAN BERHASIL !! </h2>
            <h4 class="text-center">Selanjutnya, kamu bisa membawa berkas-berkas yang wajib dibawa. Detail berkas yang wajib dibawa sudah kami kirimkan melalui email pendaftar, <br>Terima Kasih <i class='uil uil-heart text-danger font-size-12'></i></h4> <br>

            <center><a href="/" class="btn btn-success">Selesai</a></center>
            <br>    
        </div>
    </div>
@endsection
@section('footer')
    @include('frontend.partials.footer')
@endsection