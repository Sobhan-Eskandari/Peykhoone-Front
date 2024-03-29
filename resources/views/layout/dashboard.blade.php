<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="author" content="پی خونه">
    <title>داشبرد آژانس پی خونه</title>
    <meta name="title" content="داشبرد آژانس پی خونه">

    <!-- Hi Framework -->
    <link rel="stylesheet" href="{{asset('css/Hi_Framework.css')}}">
    <!-- App Css -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- Fontawesome Css -->
    <link rel="stylesheet" href="https://lib.arvancloud.com/ar/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Dashboard Azhans Css -->
    <link rel="stylesheet" href="{{asset('css/dashboard-azhans.css')}}">

    @yield('css_resources')
</head>

<body class="@yield('bg-color')">

{{--****************** Site Loading ********************--}}
<div class="container-fluid full-height-loading black-color" id="loading">
    <div class="row full-height-loading justify-content-center">
        <div class="col-12 col-lg-3 align-self-center">
            <img alt="پی خونه" class="img-fluid" src="{{asset('images/peyLogo.png')}}">
            <div class="spinner">
                <div class="rect1"></div>
                <div class="rect2"></div>
                <div class="rect3"></div>
                <div class="rect4"></div>
                <div class="rect5"></div>
            </div>
        </div>
    </div>
</div>

<div id="content" style="display: none">

    <header class="push m-dashboard-header">
        <div class="container-fluid px-0 l-rtl hidden-md-down">
            <nav class="navbar navbar-toggleable-md navbar-light py-1 m-navBar @yield('backColor') @yield('marginTop') dashboard-nav">
                <div class="collapse navbar-collapse cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left m-dashboard-navbar-padding"
                     id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto pt-3 pb-2">
                        <li class="nav-item">
                            <a class="nav-link  m-navBar-link px-3 gradient-borderBottom m-navBar-activeLink" href="#">صفحه
                                اصلی<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link m-navBar-link  px-3 " href="#">املاک</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link m-navBar-link  px-3" href="#">آژانس های املاک</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  m-navBar-link px-3" href="#">درباره ما</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  m-navBar-link px-3" href="#">تماس با ما</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <div class="row mx-auto text-center">
                            <div class="col-6 pt-3">
                                <button class="m-btn m-btn-gradient gradient-background-horizental my-2 my-sm-0 mx-2 m-dashboard-navBar-btn text-center"
                                        type="submit">ثبت آگهی +
                                </button>
                            </div>
                            <div class="col-6">
                                <div class="dropdown">
                                    <a href="https://example.com" id="dropdownMenuLink"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('images/Avatar.png') }}" alt="پروفایل" height="64px"
                                             width="64px">
                                        <i class="icon-more white-text" aria-hidden="true"></i>
                                    </a>
                                    <div class="dropdown-menu m-dashboad-nav-dropdown"
                                         aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item text-center px-1 hi-fontSize-12 m-dashboad-nav-dropItem"
                                           href="#">
                                            <i class="icon-user"></i>
                                            <span> پروفایل من</span>
                                        </a>
                                        <hr class="my-1 mx-2">
                                        <a class="dropdown-item text-center px-1 hi-fontSize-12 m-dashboad-nav-dropItem"
                                           href="#">
                                            <i class="icon-power"></i>
                                            <span>خروج از حساب</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </nav>
        </div>
    </header>
    <!-- Pushy Menu -->
    <nav class="pushy pushy-right hidden-lg-up" data-focus="#first-link">
        <div class="pushy-content">
            <ul>
                <li class="pushy-link text-right">
                    <a href="#">
                        <img src="{{ asset('images/Close.png') }}" alt="در حال بارگذاری" height="20px" width="20px"
                             class="my-4 mr-1">
                    </a>
                </li>
                <li class="text-right mb-4 l-rtl">
                    <div class="dropdown">
                        <a href="https://example.com" id="dropdownMenuLink"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{ asset('images/Avatar.png') }}" alt="پروفایل" height="50px"
                                 width="50px">&nbsp;&nbsp;<span class="hi-fontSize-11 white-text">سبحان اسکندری</span>&nbsp;
                            <i class="icon-expand-button white-text hi-fontSize-11" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu m-dashboad-nav-dropdown pushy-dropDown"
                             aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item text-center px-1 hi-fontSize-12 m-dashboad-nav-dropItem black-text"
                               href="#">
                                <i class="icon-user"></i>
                                <span> پروفایل من</span>
                            </a>
                            <hr class="my-1 mx-2">
                            <a class="dropdown-item text-center px-1 hi-fontSize-12 m-dashboad-nav-dropItem black-text"
                               href="#">
                                <i class="icon-power"></i>
                                <span>خروج از حساب</span>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="pushy-link text-right mb-4">
                    <button class="btn btn-primary m-btn m-btn-gradient my-2 my-sm-0 m-navBar-btn text-center mr-5"
                            type="submit">ثبت آگهی
                        +
                    </button>
                </li>
                <li class="pushy-link text-right"><a href="#" class="pushy-a">صفحه اصلی</a>
                    <hr class="pushy-link-home my-0 mr-5">
                </li>
                <li class="pushy-link text-right"><a href="#" class="pushy-a">املاک</a></li>
                <li class="pushy-link text-right"><a href="#" class="pushy-a">آژانس های املاک</a></li>
                <li class="pushy-link text-right"><a href="#" class="pushy-a">درباره ما</a></li>
                <li class="pushy-link text-right"><a href="#" class="pushy-a">تماس با ما</a></li>
            </ul>
        </div>
    </nav>

    <!-- Site Overlay -->
    <div class="site-overlay hidden-lg-up"></div>

    <!-- Your Content -->
    <div class="container-fluid" id="content">
        <!-- Menu Button -->
        <div class="row hidden-lg-up l-rtl">
            <button class="menu-btn">
                <i class="icon-menu-3line menu-btn-iconFont hi-fontSize-26 @yield('menu-btn-color')" aria-hidden="true"></i>
            </button>
        </div>
        <!--header img-->

    @yield('header-img')
    <!--your main content-->
        @yield('content')

    </div>
</div>


<!-- Pushy JS -->

<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/azhans-dashboard.js')}}"></script>
@yield('js_resources')

</body>
</html>
