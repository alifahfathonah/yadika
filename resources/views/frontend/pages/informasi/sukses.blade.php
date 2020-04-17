@extends('layouts.frontend')
@section('content')
    <div class="row">
        <div class="col-lg-6 col-xl-6 col-6">
            <div class="card card-sukses" style="background-image:url({{asset('frontend/img/bg/sukses.png')}}); background-size: contain;">
                <div class="body-card">
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-6 col-6">
            <div class="card card-sukses">
                <div class="body-card">
                    <p style="font-size:20px; font-weight:bold; color:black; text-align:center;">PENDAFTARAN BERHASIL !!</p>
                    <p style="font-size:12px; color:black">Selanjutnya, kamu bisa membawa berkas-berkas yang wajib dibawa. Detail berkas yang wajib dibawa sudah kami kirimkan melalui email pendaftar.
                    <br>Terima Kasih, 
                    </p>
                    <div class="col text-center">
                        <a href="/" class="btn btn-success">Selesai</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    @include('frontend.partials.footer')
@endsection