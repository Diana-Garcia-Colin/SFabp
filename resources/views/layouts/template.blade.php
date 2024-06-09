<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Meta -->
        <meta name="description" content="Admin Templates & Dashboard UI Kits">
        <meta name="author" content="Bootstrap Gallery" />
        <link rel="canonical" href="https://www.bootstrap.gallery/">
        <meta property="og:url" content="https://www.bootstrap.gallery">
        <meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
        <meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
        <meta property="og:type" content="Website">
        <meta property="og:site_name" content="Bootstrap Gallery">
        <link rel="shortcut icon" href="{{asset('img/favicon.svg')}}" />

        <!-- Title -->
        <title>Sinfonia de Fragancias</title>


        <!-- *************
            ************ Common Css Files *************
        ************ -->
        <!-- Bootstrap css -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

        <!-- Icomoon Font Icons css -->
        <link rel="stylesheet" href="{{asset('fonts/style.css')}}">

        <!-- Main css -->
        <link rel="stylesheet" href="{{asset('css/main.min.css')}}">


        <!-- *************
            ************ Vendor Css Files *************
        ************ -->
        <!-- DateRange css -->
        <link rel="stylesheet" href="{{asset('vendor/daterange/daterange.css')}}" />

    </head>

    <body>

        <!-- Page wrapper start -->
        <div class="page-wrapper">

            <!-- Sidebar wrapper start -->
            <nav id="sidebar" class="sidebar-wrapper">
                <!-- Sidebar brand start  -->
                <div class="sidebar-brand">
                    <a href="index.html" class="logo">
                        <img src="{{asset('img/logo.svg')}}" alt="Bootstrap Admin Dashboard" />
                    </a>
                    <a href="index.html" class="logo-sm">
                        <img src="{{asset('img/logo-sm.svg')}}" alt="Bootstrap Admin Dashboard" />
                    </a>
                </div>
                <!-- Sidebar brand end  -->

                <!-- Sidebar content start -->
                <div class="sidebar-content">

                    <!-- sidebar menu start -->
                    <div class="sidebar-menu">
                        <ul>
                            <li class="header-menu">Sinfonia de Fragancias</li>
                            <li class="header-menu">General</li>
                         
                            <li>
                                <a href="{{url('personas')}}">
                                    <i class="icon-user"></i>
                                    <span class="menu-text">Personas</span>
                                </a>
                            </li>
                         
                            <li>
                                <a href="{{url('lotes')}}">
                                    <i class="icon-list1"></i>
                                    <span class="menu-text">Lotes</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('productos')}}">
                                    <i class="icon-price-tag"></i>
                                    <span class="menu-text">Productos</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('cantidades')}}">
                                    <i class="icon-trending-up"></i>
                                    <span class="menu-text">Cantidades</span>
                                </a>
                            </li>
                       
                           
                            <li>
                                <a href="coming-soon.html">
                                    <i class="icon-schedule"></i>
                                    <span class="menu-text">Coming Soon</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- sidebar menu end -->

                </div>
                <!-- Sidebar content end -->
            </nav>
            <!-- Sidebar wrapper end -->

            <!-- Page content start  -->
            <div class="page-content">

                <!-- Header start -->
                <header class="header">
                    <div class="toggle-btns">
                        <a id="toggle-sidebar" href="#">
                            <i class="icon-list"></i>
                        </a>
                        <a id="pin-sidebar" href="#">
                            <i class="icon-list"></i>
                        </a>
                    </div>
                    <div class="header-items">
                        <!-- Custom search start -->
                        <div class="custom-search">
                            <input type="text" class="search-query" placeholder="Search here ...">
                            <i class="icon-search1"></i>
                        </div>
                        <!-- Custom search end -->

                        <!-- Header actions start -->
                        <ul class="header-actions">
                            <li class="dropdown">
                                <a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
                                    <i class="icon-box"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right lrg" aria-labelledby="notifications">
                                    <div class="dropdown-menu-header">
                                        Tasks (05)
                                    </div>
                                    <ul class="header-tasks">
                                        <li>
                                            <p>#48 - Dashboard UI<span>90%</span></p>
                                            <div class="progress">
                                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                                    aria-valuemax="100" style="width: 90%">
                                                    <span class="sr-only">90% Complete (success)</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <p>#95 - Alignment Fix<span>60%</span></p>
                                            <div class="progress">
                                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                                    aria-valuemax="100" style="width: 60%">
                                                    <span class="sr-only">60% Complete (success)</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <p>#7 - Broken Button<span>40%</span></p>
                                            <div class="progress">
                                                <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                                    aria-valuemax="100" style="width: 40%">
                                                    <span class="sr-only">40% Complete (success)</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
                                    <i class="icon-bell"></i>
                                    <span class="count-label">8</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right lrg" aria-labelledby="notifications">
                                    <div class="dropdown-menu-header">
                                        Notifications (40)
                                    </div>
                                    <ul class="header-notifications">
                                        <li>
                                            <a href="#">
                                                <div class="user-img away">
                                                    <img src="img/user10.png" alt="Bootstrap Admin Panel">
                                                </div>
                                                <div class="details">
                                                    <div class="user-title">Abbott</div>
                                                    <div class="noti-details">Membership has been ended.</div>
                                                    <div class="noti-date">Today, 07:30 pm</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="user-img busy">
                                                    <img src="img/user10.png" alt="Admin Panel">
                                                </div>
                                                <div class="details">
                                                    <div class="user-title">Braxten</div>
                                                    <div class="noti-details">Approved new design.</div>
                                                    <div class="noti-date">Today, 12:00 am</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="user-img online">
                                                    <img src="img/user6.png" alt="Admin Template">
                                                </div>
                                                <div class="details">
                                                    <div class="user-title">Larkyn</div>
                                                    <div class="noti-details">Check out every table in detail.</div>
                                                    <div class="noti-date">Today, 04:00 pm</div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
                                    <span class="user-name">Zyan Ferris</span>
                                    <span class="avatar">ZF<span class="status busy"></span></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userSettings">
                                    <div class="header-profile-actions">
                                        <div class="header-user-profile">
                                            <div class="header-user">
                                                <img src="img/user.png" alt="Admin Template">
                                            </div>
                                            <h5>Zyan Ferris</h5>
                                            <p>Admin</p>
                                        </div>
                                        <a href="user-profile.html"><i class="icon-user1"></i> My Profile</a>
                                        <a href="account-settings.html"><i class="icon-settings1"></i> Account Settings</a>
                                        <a href="login.html"><i class="icon-log-out1"></i> Sign Out</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <!-- Header actions end -->
                    </div>
                </header>
                <!-- Header end -->

                <!-- Page header start -->
                <div class="page-header">
                    <ol class="breadcrumb">
                        
                        <a href="{{ route('home') }}" class="btn btn-primary">Home</a>

                    </ol>

                    <ul class="app-actions">
                        <li>
                            <a href="#" id="reportrange">
                                <span class="range-text"></span>
                                <i class="icon-chevron-down"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Print">
                                <i class="icon-print"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download CSV">
                                <i class="icon-cloud_download"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Page header end -->

                <!-- Main container start -->
                <div class="main-container">

                    <!-- Row starts -->
                    <div class="row gutters">
                        <div class="col-sm-12">
                            <div class="card">
                                @yield("content")
                            </div>
                        </div>
                    </div>
                    <!-- Row ends -->

                </div>
                <!-- Main container end -->

            </div>
            <!-- Page content end -->

        </div>
        <!-- Page wrapper end -->

        <!--**************************
            **************************
                **************************
                            Required JavaScript Files
                **************************
            **************************
        **************************-->
        <!-- Required jQuery first, then Bootstrap Bundle JS -->
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('js/moment.js')}}"></script>


        <!-- *************
            ************ Vendor Js Files *************
        ************* -->
        <!-- Slimscroll JS -->
        <script src="{{asset('vendor/slimscroll/slimscroll.min.js')}}"></script>
        <script src="{{asset('vendor/slimscroll/custom-scrollbar.js')}}"></script>

        <!-- Daterange -->
        <script src="{{asset('vendor/daterange/daterange.js')}}"></script>
        <script src="{{asset('vendor/daterange/custom-daterange.js')}}"></script>


        <!-- Main JS -->
        <script src="{{asset('js/main.js')}}"></script>

    </body>

</html>