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
                                <a href="{{url('encargados')}}">
                                    <i class="icon-user-check"></i>
                                    <span class="menu-text">Encargados</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{url('clientes')}}">
                                    <i class="icon-user1"></i>
                                    <span class="menu-text">Clientes</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{url('proveedores')}}">
                                    <i class="icon-shopping-cart1"></i>
                                    <span class="menu-text">Proveedores</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{url('registrospv')}}">
                                    <i class="icon-local_library"></i>
                                    <span class="menu-text">Registros Punto de Ventas</span>
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