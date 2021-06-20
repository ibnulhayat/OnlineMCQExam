<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('page_title')</title>
    <link href="{{asset('assets/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/css/theme.css')}}" rel="stylesheet" media="all">

</head>

<body>
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="{{asset('assets/images/icon/logo.png')}}" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <a href="{{url('admin/dashboard')}}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            </li>

                            <li>
                                <a href="{{url('admin/category')}}">
                                    <i class="fas fa-tachometer-alt"></i>Category</a>
                                </li>

                                <li>
                                    <a href="{{url('admin/coupon')}}">
                                        <i class="fas fa-tachometer-alt"></i>Coupon</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </header>
                    <!-- END HEADER MOBILE-->

                    <!-- MENU SIDEBAR-->
                    <aside class="menu-sidebar d-none d-lg-block">
                        <div class="logo">
                            <a href="#">
                                <img src="{{asset('assets/images/icon/logo-mini.png')}}" alt="Cool Admin" />
                            </a>
                        </div>
                        <div class="menu-sidebar__content js-scrollbar1">
                            <nav class="navbar-sidebar">
                                <ul class="list-unstyled navbar__list">
                                    <li class="@yield('dashboard_select')">
                                        <a href="{{url('dashboard')}}"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
                                    </li>

                                    <li class="@yield('category_select')">
                                        <a href="{{url('user-list')}}"><i class="fas fa-list"></i>User List</a>
                                    </li>

                                    <li class="@yield('coupon_select')">
                                        <a href="{{url('admin/coupon')}}"><i class="fas fa-tag"></i>Coupon</a>
                                    </li>
                                    <li class="@yield('size_select')">
                                        <a href="{{url('admin/size')}}"><i class="fas fa-window-maximize"></i>Size</a>
                                    </li>

                                    <li class="@yield('color_select')">
                                        <a href="{{url('color')}}"><i class="fas fa-window-maximize"></i>Color</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </aside>
                    <!-- END MENU SIDEBAR-->

                    <!-- PAGE CONTAINER-->
                    <div class="page-container">
                        <!-- HEADER DESKTOP-->
                        <header class="header-desktop">
                            <div class="section__content section__content--p30">
                                <div class="container-fluid">
                                    <div class="header-wrap">
                                        <form class="form-header" action="" method="POST">

                                        </form>
                                        <div class="top_nav">
                                            <div class="nav_menu">

                                             <nav class="nav navbar-nav">

                                               <li class="nav-item dropdown open" style="padding-left: 15px;">

                                                <a type="button"  href="{{url('logout')}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a>

                                                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">

                                                </div>
                                            </li>

                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                    <!-- END HEADER DESKTOP-->

                    <!-- MAIN CONTENT-->
                    <div class="main-content">
                        <div class="section__content section__content--p30">
                            <div class="container-fluid">
                                @section('container')
                                @show
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END PAGE CONTAINER-->

            </div>


            <script src="{{asset('assets/vendor/jquery-3.2.1.min.js')}}"></script>
            <script src="{{asset('assets/vendor/bootstrap-4.1/popper.min.js')}}"></script>
            <script src="{{asset('assets/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
            <script src="{{asset('assets/vendor/wow/wow.min.js')}}"></script>
            <script src="{{asset('assets/js/main.js')}}"></script>
        </body>
        </html>
