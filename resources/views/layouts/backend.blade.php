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
                
                        <!-- products -->
                        {{-- <div class="row">
                            <div class="col-xl-5">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title mt-0 mb-0 header-title">Sales By Category</h5>
                                        <div id="sales-by-category-chart" class="apex-charts mb-0 mt-4" dir="ltr"></div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                            <div class="col-xl-7">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="" class="btn btn-primary btn-sm float-right">
                                            <i class='uil uil-export ml-1'></i> Export
                                        </a>
                                        <h5 class="card-title mt-0 mb-0 header-title">Recent Orders</h5>

                                        <div class="table-responsive mt-4">
                                            <table class="table table-hover table-nowrap mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Product</th>
                                                        <th scope="col">Customer</th>
                                                        <th scope="col">Price</th>
                                                        <th scope="col">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>#98754</td>
                                                        <td>ASOS Ridley High</td>
                                                        <td>Otto B</td>
                                                        <td>$79.49</td>
                                                        <td><span class="badge badge-soft-warning py-1">Pending</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>#98753</td>
                                                        <td>Marco Lightweight Shirt</td>
                                                        <td>Mark P</td>
                                                        <td>$125.49</td>
                                                        <td><span class="badge badge-soft-success py-1">Delivered</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>#98752</td>
                                                        <td>Half Sleeve Shirt</td>
                                                        <td>Dave B</td>
                                                        <td>$35.49</td>
                                                        <td><span class="badge badge-soft-danger py-1">Declined</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>#98751</td>
                                                        <td>Lightweight Jacket</td>
                                                        <td>Shreyu N</td>
                                                        <td>$49.49</td>
                                                        <td><span class="badge badge-soft-success py-1">Delivered</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>#98750</td>
                                                        <td>Marco Shoes</td>
                                                        <td>Rik N</td>
                                                        <td>$69.49</td>
                                                        <td><span class="badge badge-soft-danger py-1">Declined</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div> <!-- end table-responsive-->
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div> --}}
                        <!-- end row -->

                        <!-- widgets -->
                        {{-- <div class="row">
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body pt-2">
                                        <h5 class="mb-4 header-title">Top Performers</h5>
                                        <div class="media border-top pt-3">
                                            <img src="assets/images/users/avatar-7.jpg" class="avatar rounded mr-3"
                                                alt="shreyu">
                                            <div class="media-body">
                                                <h6 class="mt-1 mb-0 font-size-15">Shreyu N</h6>
                                                <h6 class="text-muted font-weight-normal mt-1 mb-3">Senior Sales Guy</h6>
                                            </div>
                                            <div class="dropdown align-self-center float-right">
                                                <a href="#" class="dropdown-toggle arrow-none text-muted" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i class="uil uil-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="uil uil-edit-alt mr-2"></i>Edit</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="uil uil-exit mr-2"></i>Remove from Team</a>
                                                    <div class="dropdown-divider"></div>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item text-danger"><i
                                                            class="uil uil-trash mr-2"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media mt-1 border-top pt-3">
                                            <img src="assets/images/users/avatar-9.jpg" class="avatar rounded mr-3"
                                                alt="shreyu">
                                            <div class="media-body">
                                                <h6 class="mt-1 mb-0 font-size-15">Greeva Y</h6>
                                                <h6 class="text-muted font-weight-normal mt-1 mb-3">Social Media Campaign</h6>
                                            </div>
                                            <div class="dropdown align-self-center float-right">
                                                <a href="#" class="dropdown-toggle arrow-none text-muted" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i class="uil uil-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="uil uil-edit-alt mr-2"></i>Edit</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="uil uil-exit mr-2"></i>Remove from Team</a>
                                                    <div class="dropdown-divider"></div>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item text-danger"><i
                                                            class="uil uil-trash mr-2"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media mt-1 border-top pt-3">
                                            <img src="assets/images/users/avatar-4.jpg" class="avatar rounded mr-3"
                                                alt="shreyu">
                                            <div class="media-body">
                                                <h6 class="mt-1 mb-0 font-size-15">Nik G</h6>
                                                <h6 class="text-muted font-weight-normal mt-1 mb-3">Inventory Manager</h6>
                                            </div>
                                            <div class="dropdown align-self-center float-right">
                                                <a href="#" class="dropdown-toggle arrow-none text-muted" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i class="uil uil-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="uil uil-edit-alt mr-2"></i>Edit</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="uil uil-exit mr-2"></i>Remove from Team</a>
                                                    <div class="dropdown-divider"></div>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item text-danger"><i
                                                            class="uil uil-trash mr-2"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media mt-1 border-top pt-3">
                                            <img src="assets/images/users/avatar-1.jpg" class="avatar rounded mr-3"
                                                alt="shreyu">
                                            <div class="media-body">
                                                <h6 class="mt-1 mb-0 font-size-15">Hardik G</h6>
                                                <h6 class="text-muted font-weight-normal mt-1 mb-3">Sales Person</h6>
                                            </div>
                                            <div class="dropdown align-self-center float-right">
                                                <a href="#" class="dropdown-toggle arrow-none text-muted" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i class="uil uil-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="uil uil-edit-alt mr-2"></i>Edit</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="uil uil-exit mr-2"></i>Remove from Team</a>
                                                    <div class="dropdown-divider"></div>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item text-danger"><i
                                                            class="uil uil-trash mr-2"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="media mt-1 border-top pt-3">
                                            <img src="assets/images/users/avatar-5.jpg" class="avatar rounded mr-3"
                                                alt="shreyu">
                                            <div class="media-body">
                                                <h6 class="mt-1 mb-0 font-size-15">Stive K</h6>
                                                <h6 class="text-muted font-weight-normal mt-1 mb-1">Sales Person</h6>
                                            </div>
                                            <div class="dropdown align-self-center float-right">
                                                <a href="#" class="dropdown-toggle arrow-none text-muted" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i class="uil uil-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="uil uil-edit-alt mr-2"></i>Edit</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="uil uil-exit mr-2"></i>Remove from Team</a>
                                                    <div class="dropdown-divider"></div>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item text-danger"><i
                                                            class="uil uil-trash mr-2"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body pt-2 pb-3">
                                        <a href="task-list.html" class="btn btn-primary btn-sm mt-2 float-right">
                                            View All
                                        </a>
                                        <h5 class="mb-4 header-title">Tasks</h5>
                                        <div class="slimscroll" style="max-height: 390px;">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="task1">
                                                        <label class="custom-control-label" for="task1">
                                                            Draft the new contract document for
                                                            sales team
                                                        </label>
                                                        <p class="font-size-13 text-muted">Due on 24 Aug, 2019</p>
                                                    </div> <!-- end checkbox -->
                                                </div>
                                            </div>
    
                                            <div class="row mt-2">
                                                <div class="col">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="task2">
                                                        <label class="custom-control-label" for="task2">
                                                            iOS App home page
                                                        </label>
                                                        <p class="font-size-13 text-muted">Due on 23 Aug, 2019</p>
                                                    </div> <!-- end checkbox -->
                                                </div>
                                            </div>
    
                                            <div class="row mt-2">
                                                <div class="col">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="task3">
                                                        <label class="custom-control-label" for="task3">
                                                            Write a release note for Shreyu
                                                        </label>
                                                        <p class="font-size-13 text-muted">Due on 22 Aug, 2019</p>
                                                    </div> <!-- end checkbox -->
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="task4">
                                                        <label class="custom-control-label" for="task4">
                                                            Invite Greeva to a project shreyu admin
                                                        </label>
                                                        <p class="font-size-13 text-muted">Due on 21 Aug, 2019</p>
                                                    </div> <!-- end checkbox -->
                                                </div>
                                            </div>
    
                                            <div class="row mt-2">
                                                <div class="col">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="task5">
                                                        <label class="custom-control-label" for="task5">
                                                            Enable analytics tracking for main website
                                                        </label>
                                                        <p class="font-size-13 text-muted">Due on 20 Aug, 2019</p>
                                                    </div> <!-- end checkbox -->
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="task6">
                                                        <label class="custom-control-label" for="task6">
                                                            Invite user to a project
                                                        </label>
                                                        <p class="font-size-13 text-muted">Due on 18 Aug, 2019</p>
                                                    </div> <!-- end checkbox -->
                                                </div>
                                            </div>
    
                                            <div class="row mt-2">
                                                <div class="col">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="task7">
                                                        <label class="custom-control-label" for="task7">
                                                            Write a release note
                                                        </label>
                                                        <p class="font-size-13 text-muted">Due on 14 Aug, 2019</p>
                                                    </div> <!-- end checkbox -->
                                                </div>
                                            </div>
                                        </div>
                                
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body pt-2">
                                        <div class="dropdown mt-2 float-right">
                                            <a href="#" class="dropdown-toggle arrow-none text-muted" data-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="uil uil-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item"><i
                                                        class="uil uil-refresh mr-2"></i>Refresh</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item"><i
                                                        class="uil uil-user-plus mr-2"></i>Add Member</a>
                                                <div class="dropdown-divider"></div>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item text-danger"><i
                                                        class="uil uil-exit mr-2"></i>Exit</a>
                                            </div>
                                        </div>
                                        <h5 class="mb-4 header-title">Recent Conversation</h5>
                                        <div class="chat-conversation">
                                            <ul class="conversation-list slimscroll" style="max-height: 328px;">
                                                <li class="clearfix">
                                                    <div class="chat-avatar">
                                                        <img src="assets/images/users/avatar-9.jpg" alt="Female">
                                                        <i>10:00</i>
                                                    </div>
                                                    <div class="conversation-text">
                                                        <div class="ctext-wrap">
                                                            <i>Greeva</i>
                                                            <p>
                                                                Hello!
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="clearfix odd">
                                                    <div class="chat-avatar">
                                                        <img src="assets/images/users/avatar-7.jpg" alt="Male">
                                                        <i>10:01</i>
                                                    </div>
                                                    <div class="conversation-text">
                                                        <div class="ctext-wrap">
                                                            <i>Shreyu</i>
                                                            <p>
                                                                Hi, How are you? What about our next meeting?
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="clearfix">
                                                    <div class="chat-avatar">
                                                        <img src="assets/images/users/avatar-9.jpg" alt="female">
                                                        <i>10:01</i>
                                                    </div>
                                                    <div class="conversation-text">
                                                        <div class="ctext-wrap">
                                                            <i>Greeva</i>
                                                            <p>
                                                                Yeah everything is fine
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="clearfix odd">
                                                    <div class="chat-avatar">
                                                        <img src="assets/images/users/avatar-7.jpg" alt="male">
                                                        <i>10:02</i>
                                                    </div>
                                                    <div class="conversation-text">
                                                        <div class="ctext-wrap">
                                                            <i>Shreyu</i>
                                                            <p>
                                                                Awesome! let me know if we can talk in 20 min
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <form class="needs-validation" novalidate name="chat-form" id="chat-form">
                                                <div class="row">
                                                    <div class="col">
                                                        <input type="text" class="form-control chat-input"
                                                            placeholder="Enter your text" required>
                                                        <div class="invalid-feedback">
                                                            Please enter your messsage
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <button type="submit"
                                                            class="btn btn-danger chat-send btn-block waves-effect waves-light">Send</button>
                                                    </div>
                                                </div>
                                            </form>

                                        </div> <!-- end .chat-conversation-->
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <!-- end row -->
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