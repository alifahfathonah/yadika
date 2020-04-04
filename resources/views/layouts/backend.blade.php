<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Dashboard - SMK YADIKA NATAR</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('frontend/img/icon/yadika.png')}}">

        <!-- plugins -->
        <link href="{{asset('backend/libs/flatpickr/flatpickr.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('backend/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('backend/css/app.min.css')}}" rel="stylesheet" type="text/css" />

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

                    <ul class="navbar-nav flex-row ml-auto d-flex list-unstyled topnav-menu float-right mb-0">
                        <li class="dropdown notification-list" data-toggle="tooltip" data-placement="left"
                            title="8 new unread notifications">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                aria-expanded="false">
                                <i data-feather="bell"></i>
                                <span class="noti-icon-badge"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                                <!-- item-->
                                <div class="dropdown-item noti-title border-bottom">
                                    <h5 class="m-0 font-size-16">
                                        <span class="float-right">
                                            <a href="" class="text">
                                                <small>Clear All</small>
                                            </a>
                                        </span>Notification
                                    </h5>
                                </div>

                                <div class="slimscroll noti-scroll">

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item border-bottom">
                                        <div class="notify-icon bg-primary"><i class="uil uil-user-plus"></i></div>
                                        <p class="notify-details">New user registered.<small class="text-muted">5 hours ago</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item border-bottom">
                                        <div class="notify-icon">
                                            <img src="assets/images/users/avatar-1.jpg" class="img-fluid rounded-circle" alt="" />
                                        </div>
                                        <p class="notify-details">Karen Robinson</p>
                                        <p class="text-muted mb-0 user-msg">
                                            <small>Wow ! this admin looks good and awesome design</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item border-bottom">
                                        <div class="notify-icon">
                                            <img src="assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" />
                                        </div>
                                        <p class="notify-details">Cristina Pride</p>
                                        <p class="text-muted mb-0 user-msg">
                                            <small>Hi, How are you? What about our next meeting</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item border-bottom active">
                                        <div class="notify-icon bg-success"><i class="uil uil-comment-message"></i> </div>
                                        <p class="notify-details">Jaclyn Brunswick commented on Dashboard<small class="text-muted">1
                                                min
                                                ago</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item border-bottom">
                                        <div class="notify-icon bg-danger"><i class="uil uil-comment-message"></i></div>
                                        <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">4 days
                                                ago</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-primary">
                                            <i class="uil uil-heart"></i>
                                        </div>
                                        <p class="notify-details">Carlos Crouch liked
                                            <b>Admin</b>
                                            <small class="text-muted">13 days ago</small>
                                        </p>
                                    </a>
                                </div>

                                <!-- All-->
                                <a href="javascript:void(0);"
                                    class="dropdown-item text-center text-primary notify-item notify-all border-top">
                                    View all
                                    <i class="fi-arrow-right"></i>
                                </a>

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

                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i data-feather="log-out" class="icon-dual icon-xs mr-2"></i>
                                <span>Logout</span>
                            </a>
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
                                        <a href="email-inbox.html">Murid Aktif</a>
                                    </li>
                                    <li>
                                        <a href="email-read.html">Alumni</a>
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
                                        <a href="project-list.html">Guru Aktif</a>
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
                                    <span> Calon Murid Baru </span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i data-feather="grid"></i>
                                    <span> Pages </span>
                                    <span class="menu-arrow"></span>
                                </a>
    
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="{{url('pages-sejarah-yadika')}}">Sejarah Yadika</a>
                                    </li>
                                    <li>
                                        <a href="{{url('pages-sejarah-smk')}}">Sejarah SMK</a>
                                    </li>
                                    <li>
                                        <a href="{{url('pages-profile')}}">Profile</a>
                                    </li>
                                    <li>
                                        <a href="{{url('kepala-sekolah')}}">Kepala Sekolah</a>
                                    </li>
                                    <li>
                                        <a href="{{url('visi-misi')}}">Visi & Misi</a>
                                    </li>
                                    <li>
                                        <a href="{{url('guru-staf')}}">Guru & Staf</a>
                                    </li>
                                    <li>
                                        <a href="{{url('program-studi')}}">Program Studi</a>
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
                                2020 &copy; Build With <i class='uil uil-heart text-danger font-size-12'></i> - <a href="www.twitter.com/andri_desmana" target="_blank">Andri Desmana</a>
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

        <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>

        <script type="text/javascript">
            $('#myTable').DataTable( {
                responsive: {
                    details: false
                }
            } );
        </script>
        @yield('scripts')
    </body>
</html>