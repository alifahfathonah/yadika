@extends('layouts.auth')
@section('content')
<div class="col-xl-10">
    <div class="card">
        <div class="card-body p-0">
            <div class="row">
                <div class="col-md-6 p-5">
                    <div class="mx-auto mb-5">
                        <a href="index.html">
                            <h4 class="d-inline align-middle ml-1 text-logo">SMK YADIKA NATAR - MASUK</h4>
                        </a>
                    </div>

                    <h6 class="h5 mb-0 mt-4">Selamat Datang !</h6>
                    <p class="text-muted mt-1 mb-4">Masukan Email dan Password Untuk Masuk.</p>

                    <form action="{{route('login')}}" method="POST" class="authentication-form">
                        @csrf
                        <div class="form-group">
                            <label class="form-control-label">Email Address</label>
                            <div class="input-group input-group-merge">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="icon-dual" data-feather="mail"></i>
                                    </span>
                                </div>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="smkyadika@gmail.com" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            </div>
                        </div>

                        <div class="form-group mt-4">
                            <label class="form-control-label">Password</label>
                            <div class="input-group input-group-merge">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="icon-dual" data-feather="lock"></i>
                                    </span>
                                </div>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" id="password"
                                    placeholder="Enter your password">
                            </div>
                        </div>


                        <div class="form-group mb-0 text-center">
                            <button class="btn btn-primary btn-block" type="submit"> Masuk
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 d-none d-md-inline-block">
                    <div class="auth-page-sidebar" style="background-size: cover; background-repeat: no-repeat; background-position: center; background-image: url('backend/images/auth-bg.png'); max-height:100%; max-width:100%">
                        <div class="overlay"></div>
                        <div class="auth-user-testimonial">
                            <p class="font-size-24 font-weight-bold text-white mb-1">NEVER GIVE UP</p>
                            <p class="lead">Orang yang ingin impiannya tercapai, harus menjaga diri agar tidak tertidur</p>
                            <p>- Andri Desmana</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div> <!-- end card-body -->
    </div>
    <!-- end card -->

    {{-- <div class="row mt-3">
        <div class="col-12 text-center">
            <p class="text-muted">Don't have an account? <a href="pages-register.html" class="text-primary font-weight-bold ml-1">Sign Up</a></p>
        </div> <!-- end col -->
    </div> --}}
    <!-- end row -->

</div> 
@endsection