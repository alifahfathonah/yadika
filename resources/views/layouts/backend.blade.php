<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('frontend/img/icon/yadika.png')}}">

        <!-- plugins -->
        <link href="{{asset('backend/libs/flatpickr/flatpickr.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- Summernote css -->
        <link href="{{asset('backend/libs/summernote/summernote-bs4.css')}}" rel="stylesheet" />

        <!-- App css -->
        <link href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('backend/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('backend/css/app.css')}}" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>

    </head>

    <body class="left-side-menu-dark">
        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            <div class="navbar navbar-expand flex-column flex-md-row navbar-custom">
                <div class="container-fluid">
                    <!-- LOGO -->
                    <a href="/" class="navbar-brand mr-0 mr-md-2 logo">
                        <span class="logo-lg">
                            <img src="{{asset('frontend/img/icon/yadika.png')}}" alt="" height="24" />
                            <span class="d-inline h5 ml-1 text-logo">SMK YADIKA NATAR</span>
                        </span>
                        <span class="logo-sm">
                            <img src="{{asset('frontend/img/icon/yadika.png')}}" alt="" height="24">
                        </span>
                    </a>

                    <ul class="navbar-nav bd-navbar-nav flex-row list-unstyled menu-left mb-0">
                        <li class="">
                            <button class="button-menu-mobile open-left disable-btn">
                                <i data-feather="menu" class="menu-icon"></i>
                                <i data-feather="x" class="close-icon"></i>
                            </button>
                        </li>
                    </ul>
                    <?php
                        $notif = App\Models\pendaftaran::where('notif',0)->orderBy('id','desc')->get();
                        $belum = App\Models\pendaftaran::where('status','Belum')->get();
                    ?>
                    <ul class="navbar-nav flex-row ml-auto d-flex list-unstyled topnav-menu float-right mb-0">
                        <li class="dropdown notification-list" data-toggle="tooltip" data-placement="left"
                            title=" {{$notif->count()}} Calon Murid Baru">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                aria-expanded="false">
                                <i data-feather="bell"></i>
                                @if ($notif->count() >= 1)
                                <span class="noti-icon-badge"></span>                                    
                                @endif
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                                <!-- item-->
                                <div class="dropdown-item noti-title border-bottom">
                                    <h5 class="m-0 font-size-16">
                                        <span class="float-right">
                                        </span>Notification
                                    </h5>
                                </div>

                                <div class="slimscroll noti-scroll">
                                    @foreach ($notif as $item)
                                        <a href="javascript:void(0);" id="murid_baru" data-id="{{$item->id}}" class="dropdown-item notify-item border-bottom">
                                            <div class="notify-icon bg-primary"><i class="uil uil-user-plus"></i></div>
                                            <p class="notify-details">{{$item->nama}}<small class="text-muted">{{Carbon\carbon::parse($item->created_at)->diffForHumans()}}</small>
                                            </p>
                                        </a>
                                    @endforeach
                                </div>

                                <!-- All-->
                                {{-- <a href="{{$item->id}}"
                                    class="dropdown-item text-center text-primary notify-item notify-all border-top">
                                    View all
                                    <i class="fi-arrow-right"></i>
                                </a> --}}

                            </div>
                        </li>
                    </ul>
                </div>

            </div>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">
                <div class="media user-profile mt-2 mb-2">
                    <img src="{{asset('backend/images/users/avatar-7.jpg')}}" class="avatar-sm rounded-circle mr-2" alt="Shreyu" />
                    <img src="{{asset('backend/images/users/avatar-7.jpg')}}" class="avatar-xs rounded-circle mr-2" alt="Shreyu" />

                    <div class="media-body">
                        <h6 class="pro-user-name mt-0 mb-0">{{auth::user()->name}}</h6>
                        @if (auth::user()->auth == 1)
                            <span class="pro-user-desc">Kepala Sekolah</span>
                        @else
                            <span class="pro-user-desc">Guru</span>
                        @endif
                    </div>
                    <div class="dropdown align-self-center profile-dropdown-menu">
                        <a class="dropdown-toggle mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                            aria-expanded="false">
                            <span data-feather="chevron-down"></span>
                        </a>
                        <div class="dropdown-menu profile-dropdown">
                            <a href="pages-profile.html" class="dropdown-item notify-item">
                                <i data-feather="user" class="icon-dual icon-xs mr-2"></i>
                                <span>My Account</span>
                            </a>

                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i data-feather="settings" class="icon-dual icon-xs mr-2"></i>
                                <span>Settings</span>
                            </a>

                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i data-feather="help-circle" class="icon-dual icon-xs mr-2"></i>
                                <span>Support</span>
                            </a>

                            <a href="pages-lock-screen.html" class="dropdown-item notify-item">
                                <i data-feather="lock" class="icon-dual icon-xs mr-2"></i>
                                <span>Lock Screen</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
								document.getElementById('logout-form').submit();" class="dropdown-item notify-item">
                                <i data-feather="log-out" class="icon-dual icon-xs mr-2"></i>
                                <span>Logout</span>
							</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST">
									@csrf
								</form>
                        </div>
                    </div>
                </div>
                <div class="sidebar-content">
                    <!--- Sidemenu -->
                    <div id="sidebar-menu" class="slimscroll-menu">
                        <ul class="metismenu" id="menu-bar">
                            <li class="menu-title">Navigation</li>

                            <li>
                                <a href="{{url('home')}}">
                                    <i data-feather="home"></i>
                                    <span> Dashboard </span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i data-feather="users"></i>
                                    <span> Data Murid </span>
                                    <span class="menu-arrow"></span>
                                </a>

                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="#">Murid Aktif</a>
                                    </li>
                                    <li>
                                        <a href="#">Alumni</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);">
                                    <i data-feather="briefcase"></i>
                                    <span> Data Guru </span>
                                    <span class="menu-arrow"></span>
                                </a>
    
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="#">Guru Aktif</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="{{route('pengguna.index')}}" aria-expanded="false">
                                    <i data-feather="user-check"></i>
                                    <span> Pengguna </span>
                                </a>
                            </li>

                            <li>
                                <a href="{{url('calon-murid')}}" aria-expanded="false">
                                    <i data-feather="user-plus"></i>
                                    <span>Murid Baru</span> 
                                    @if ($belum->count() >= 1)
                                        <span class="badge badge badge-warning badge-pill float-right mr-2">Validasi {{$belum->count()}}</span>
                                    @else
                                        <span class="badge badge badge-info badge-pill float-right mr-2">{{$belum->count()}}</span>
                                    @endif
                                </a>
                            </li>

                            <li>
                                <a href="{{route('artikel.index')}}" aria-expanded="false">
                                    <i data-feather="book"></i>
                                    <span> Artikel/Berita</span>
                                </a>
                            </li>


                            <li class="menu-title">Pages</li>
                            <li>
                                <a href="javascript: void(0);">
                                    <i data-feather="grid"></i>
                                    <span> Program Keahlian </span>
                                    <span class="menu-arrow"></span>
                                </a>
    
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="{{url('pages-tkj')}}">Teknik Komputer & Jaringan</a>
                                    </li>
                                    <li>
                                        <a href="{{url('pages-tkr')}}">Teknik Otomotif</a>
                                    </li>
                                    <li>
                                        <a href="{{url('pages-ap')}}">Administrasi Perkantoran</a>
                                    </li>
                                    <li>
                                        <a href="{{url('pages-ak')}}">Akuntansi</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i data-feather="command"></i>
                                    <span> Civitas Akademik </span>
                                    <span class="menu-arrow"></span>
                                </a>
    
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="{{url('pages-sejarah-yadika')}}">Guru & Staf</a>
                                    </li>
                                    <li>
                                        <a href="{{url('pages-sejarah-smk')}}">Prestasi</a>
                                    </li>
                                    <li>
                                        <a href="{{url('pages-profile')}}">Organisasi</a>
                                    </li>
                                    <li>
                                        <a href="{{url('kepala-sekolah')}}">Ekstrakurikuler</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i data-feather="info"></i>
                                    <span> Informasi </span>
                                    <span class="menu-arrow"></span>
                                </a>
    
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="{{url('pages-ro')}}">Pendaftaran Online</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i data-feather="layers"></i>
                                    <span> Tentang Kami </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="{{url('pages-history')}}">Sejarah Yadika</a>
                                    </li>
                                    <li>
                                        <a href="{{url('pages-kepala-sekolah')}}">Kepala Sekolah</a>
                                    </li>
                                    <li>
                                        <a href="{{url('pages-visi-dan-misi')}}">Visi & Misi</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i data-feather="tv"></i>
                                    <span>Frontend</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="{{url('front-info')}}">Informasi Sekolah</a>
                                    </li>
                                    <li>
                                        <a href="{{url('front-mading')}}">Mading Sekolah</a>
                                    </li>
                                    <li>
                                        <a href="{{url('front-about')}}">About</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i data-feather="settings"></i>
                                    <span> Pengaturan </span>
                                    <span class="menu-arrow"></span>
                                </a>
    
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="{{url('pengaturan-slider')}}">Slider</a>
                                    </li>
                                    <li>
                                        <a href="{{url('pengaturan-status')}}">Status</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>
                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                2020 &copy; Build With <i class='uil uil-heart text-danger font-size-12'></i> - <a href="http://www.instagram.com/andridesmana" target="_blank">Andri Desmana</a>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="{{asset('backend/js/vendor.min.js')}}"></script>

        <!-- optional plugins -->
        <script src="{{asset('backend/libs/moment/moment.min.js')}}"></script>
        <script src="{{asset('backend/libs/apexcharts/apexcharts.min.js')}}"></script>
        <script src="{{asset('backend/libs/flatpickr/flatpickr.min.js')}}"></script>

        <!-- page js -->
        <script src="{{asset('backend/js/pages/dashboard.init.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('backend/js/app.min.js')}}"></script>
        {{-- <script src="{{asset('backend/js/pages/form-editor.init.js')}}"></script>   --}}
        
        <!--Summernote js-->
        <script src="{{asset('backend/libs/summernote/summernote-bs4.min.js')}}"></script>

        <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>

        <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
        <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };
        </script>
        <script>
            CKEDITOR.replace('my-editor', options);
        </script>
        <script type="text/javascript">
            $('#myTable').DataTable( {
                responsive: {
                    details: false
                }
            } );

            // Notification
            $(document).on('click','#murid_baru', function () {
                var id = $(this).attr('data-id');
                $.get(' {{Url("murid-baru-notification")}}', {'_token' : $('meta[name=csrf-token]').attr('content'),id:id}, function(resp){
                    // location.reload();
                    window.location = '/calon-murid';
                });
            });
        </script>
        @yield('scripts')
    </body>
</html>