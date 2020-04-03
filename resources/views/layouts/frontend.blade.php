<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Official Website SMK YADIKA NATAR</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<link rel="icon" href="{{asset('frontend/img/icon/yadika.png')}}">
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="{{asset('frontend/plugins/bootstrap3/css/bootstrap.min.css')}}" rel="stylesheet" />
	<link href="{{asset('frontend/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
	<link href="{{asset('frontend/plugins/animate/animate.min.css')}}" rel="stylesheet" />
	<link href="{{asset('frontend/css/forum/style.css')}}" rel="stylesheet" />
	<link href="{{asset('frontend/css/forum/style-responsive.min.css')}}" rel="stylesheet" />
	<link href="{{asset('frontend/css/forum/theme/default.css')}}" id="theme" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->
	<link href="{{asset('backend/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
	<!-- ================== BEGIN BASE JS ================== -->
    <script src="{{asset('frontend/plugins/pace/pace.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('frontend/css/frontend.css')}}">
	<!-- ================== END BASE JS ================== -->
</head>
<body>
    <!-- begin #header -->
    <div id="header" class="header navbar navbar-default navbar-fixed-top">
        <!-- begin container -->
        <div class="container">
            <!-- begin navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="/" class="navbar-brand">
                    <img src="{{asset('frontend/img/icon/yadika.png')}}">
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- begin #header-navbar -->
            <div class="collapse navbar-collapse" id="header-navbar">
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="/"><b>Home</b></a></li>
                    <li class="dropdown">
                        <a href="javascript:;" data-toggle="dropdown"><b>Tentang Kami</b> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="">Sejarah Yadika</a></li>
                            <li><a href="">Sejarah SMK</a></li>
                            <li><a href="">Profile</a></li>
                            <li><a href="">Kepala Sekolah</a></li>
                            <li><a href="">Visi dan Misi</a></li>
                            <li><a href="">Tujuan</a></li>
                            <li><a href="">Yayasan</a></li>
                            <li><a href="">Guru dan Staf</a></li>
                            <li><a href="">Prestasi</a></li>
                            <li><a href="">Organisasi</a></li>
                            <li><a href="">Ekstrakurikuler</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" data-toggle="dropdown"><b>Program Keahlian</b> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="">Teknik Komputer & Jaringan</a></li>
                            <li><a href="">Otomotif</a></li>
                            <li><a href="">Administrasi Perkantoran</a></li>
                            <li><a href="">Akuntansi</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" data-toggle="dropdown"><b>Informasi</b> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('pendaftaran-online')}}">Pendaftaran Online</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    {{-- <li><a href="{{route('register')}}">Daftar Akun</a></li> --}}
                    @auth
                        <li><a href="">{{auth::user()->name}}</a></li>
                        <li><a href="">Keluar</a></li>
                    @else
                        <li><a href="{{route('login')}}"><b>Masuk</b></a></li>
                    @endauth
                </ul>
            </div>
            <!-- end #header-navbar -->
        </div>
        <!-- end container -->
    </div>
    <!-- end #header -->
    
    <!-- begin search-banner -->
    {{-- <div class="search-banner has-bg">
        <!-- begin bg-cover -->
        <div class="bg-cover">
            <img src="{{asset('frontend/img/cover/cover-1.jpg')}}"/>
        </div>
        <!-- end bg-cover -->
        <!-- begin container -->
        <div class="container">
            <h2 style="text-align:center">OFFICIAL WEBSITE SMK YADIKA NATAR</h2>
            <h5 style="text-align:center">Sekolah Unggul dan Berprestasi</h5>
        </div>
        <!-- end container -->
    </div> --}}
    @yield('slide')
    <!-- end search-banner -->
    
    <!-- begin content -->
    <div class="content">
        <!-- begin container -->
        <div class="container-fluid">
            @yield('content')
        </div>
        <!-- end container -->
    </div>
    <!-- end content -->
    
    <!-- begin #footer -->
    <div id="footer" class="footer">
        <!-- begin container -->
        @yield('footer')
        <!-- end container -->
    </div>
    <!-- end #footer -->
    <!-- begin #footer-copyright -->
    <div id="footer-copyright" class="footer-copyright">
        <div class="container-fluid">
            &copy; 2020 Build With <i class='uil uil-heart text-danger font-size-12'></i> - Andri Desmana
        </div>
    </div>
    <!-- end #footer-copyright -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{asset('frontend/plugins/jquery/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('frontend/plugins/bootstrap3/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('frontend/plugins/js-cookie/js.cookie.js')}}"></script>
	<script src="{{asset('frontend/js/forum/apps.min.js')}}"></script>
	<!-- ================== END BASE JS ================== -->
	
	<script>    
	    $(document).ready(function() {
	        App.init();
	    });
	</script>
</body>
</html>
