<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="author" content="پی خونه">
    {{--<meta itemprop="name" content="Zillow Real Estate, Rentals, and Mortgage">--}}
    {{--<meta itemprop="description" content="The most trafficked website about home sales and rentals, with real estate values for almost every U.S. home. 1,000,000 listings that you won't find on MLS.">--}}
    {{--<link rel="start" title="Zillow home" href="/"> ?--}}
    <meta name="theme-color" content="#007991">
    <meta name="referrer" content="always">

    <title>@yield('title')</title>
    <meta name="title" content=">@yield('title')">
    @yield('meta')

    <!-- Hi Framework -->
    <link rel="stylesheet" href="{{asset('css/Hi_Framework.css')}}">
    <!-- App Css -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- Fontawesome Css -->
    <link rel="stylesheet" href="https://lib.arvancloud.com/ar/font-awesome/4.7.0/css/font-awesome.min.css">

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

    <header class="push">
        <div class="container-fluid px-0 l-rtl hidden-md-down">
            <nav class="navbar navbar-toggleable-md navbar-light py-1 m-navBar fixed-top m-navBar-black">
                <a class="navbar-brand pr-lg-5 mr-lg-4 m-navBar-brand pl-lg-4 " href="#">
                    <img src="{{ asset('images/peyLogo.png') }}" alt="در حال بارگذاری" height="70px" width="60px">
                </a>

                <div class="collapse navbar-collapse cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
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
                    <form class="form-inline my-2 my-lg-0 pl-0 pl-lg-5 ml-0 ml-lg-2">
                        <div class="row mx-auto text-center">
                            <button class="m-btn m-btn-gradient my-2 my-sm-0 mx-2 m-navBar-btn text-center"
                                    type="submit">ثبت آگهی
                                +
                            </button>
                            <button class="btn m-btn m-btn-outline hvr-shutter-out-horizontal my-2 my-sm-0 mx-2 m-navBar-btn text-center"
                                    type="submit">ثبت
                                نام | ورود
                            </button>
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
                        <img src="{{ asset('images/Close.png') }}" alt="در حال بارگذاری" height="20px" width="20px" class="my-4 mr-1">
                    </a>
                </li>
                <li class="pushy-link text-right">
                    <button class="btn btn-primary m-btn m-btn-gradient my-2 my-sm-0 m-navBar-btn text-center mr-5"
                            type="submit">ثبت آگهی
                        +
                    </button>
                </li>
                <li class="pushy-link text-right mb-4 mt-3">
                    <button class="btn m-btn m-btn-outline hvr-shutter-out-horizontal my-2 my-sm-0 m-navBar-btn text-center mr-5"
                            type="submit">ثبت
                        نام | ورود
                    </button>
                </li>
                <li class="pushy-link text-right"><a href="#" class="pushy-a">صفحه اصلی</a>
                    <hr class="pushy-link-home my-0 mr-5">
                </li>
                <li class="pushy-link text-right"><a href="#" class="pushy-a">املاک</a></li>
                <li class="pushy-link text-right"><a href="#" class="pushy-a">آژانس های املاک</a></li>
                <li class="pushy-link text-right"><a href="#" class="pushy-a">درباره ما</a></li>
                <li class="pushy-link text-right"><a href="#" class="pushy-a">تماس با ما</a></li>
                <li class="my-5"></li>
                <li class="pushy-link text-right">
                    <hr class="pushy-seprate mb-0 mx-5">
                    <a href="#" class="pushy-a">...در تماس باشید</a></li>
                <li class="pushy-link text-right"><a href="#" class="pushy-a">013 478 84 84</a></li>
            </ul>
            <div class="row l-rtl mx-0 justify-content-start">
                <div class="col-1 px-0">
                    <a href="#" class="social-icon" >
                    <p class="text-center social-icon-scoop-telegram" style="">
                       <i class="icon-telegram-icon-logo hi-fontSize-16">
                       </i>
                    </p>
                    </a>
                </div>
                <div class="col-1 pl-3 pr-2">
                    <a href="#" class="social-icon">
                      <i class="icon-facebook-logo-button hi-fontSize-26"  style="color: white;"></i>
                    </a>
                </div>
                <div class="col-1 px-3">
                    <a href="#" class="social-icon">
                        <i class="icon-twitter-logo-button hi-fontSize-26"  style="color: white;"></i>
                    </a>
                </div>
                <div class="col-1 px-3">
                    <a href="#" class="social-icon">
                        <i class="icon-instagram-logo hi-fontSize-26"  style="color: white;"></i>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Site Overlay -->
    <div class="site-overlay hidden-lg-up"></div>

    <!-- Your Content -->
    <div class="container-fluid" id="content">
        <!-- Menu Button -->
        <div class="row hidden-lg-up l-rtl">
            <button class="menu-btn">
                <i class="icon-menu-3line menu-btn-iconFont hi-fontSize-26" aria-hidden="true"></i>
            </button>
        </div>

        <!--your main content-->
        @yield('content')

    </div>

    @yield('contact')
    <footer class="container-fluid" id="l-footer">
        <div class="row py-4">
            {{------------ [ pey khoone logo place ] ------------}}
            <div class="col-12 col-sm-10 col-md-6 col-lg-2 align-self-center text-center p-3">
                <img class="m-footer-logo p-2" alt="لوگوی پی‌ خونه" src="{{asset('images/peyLogo.png')}}">
            </div>

            {{------------ [ Contactus List ] ------------}}
            <div class="col-6 col-sm-6  col-md-6 col-lg-2 align-self-center">
                <ul class="l-horizental-list m-horizental-list">
                    <li><a href="#">درباره ما</a> </li>
                    <li><a href="#">تماس با ما</a> </li>
                    <li><a href="#">قوانین و مقررات</a> </li>
                    <li><a href="#">راهنمای سایت</a> </li>
                    <li><a href="#">دانلود برنامه</a> </li>
                </ul>
            </div>

            {{------------ [ Categories List ] ------------}}
            <div class="col-6 col-sm-6  col-md-4 col-lg-2 align-self-center">
                <ul class="l-horizental-list m-horizental-category">
                    <li><a href="#">درباره ما</a> </li>
                    <li><a href="#">تماس با ما</a> </li>
                    <li><a href="#">قوانین و مقررات</a> </li>
                    <li><a href="#">راهنمای سایت</a> </li>
                    <li><a href="#">دانلود برنامه</a> </li>
                </ul>
            </div>

            {{------------ [ Social netwrok List ] ------------}}
            <div class="col-12 col-sm-6 col-md-4 col-lg-2 align-self-center">
                <ul class="l-horizental-list m-horizental-category m-horizental-SN">
                    <li class="gradient-borderBottom"><a href="#">شبکه‌های اجتماعی</a> </li>
                    {{------------ [ Telegram Icon ] ------------}}
                    <li>
                        <a href="#">
                            <div class="container-fluid l-fullWidth">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-auto">
                                        <p>Telegram</p>
                                    </div>
                                    <div class="col-auto">
                                        <p class="text-center social-icon-scoop-telegram" style="">
                                            <i class="icon-telegram-icon-logo hi-fontSize-16 l-flex-center"></i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    {{------------ [ Instagram Icon ] ------------}}
                    <li>
                        <a href="#">
                            <div class="container-fluid l-fullWidth">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-auto">
                                        <p>Instagram</p>
                                    </div>
                                    <div class="col-auto">
                                        <p class="icon-instagram-logo pull-left hi-fontSize-30"></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    {{------------ [ Twitter Icon ] ------------}}
                    <li>
                        <a href="#">
                            <div class="container-fluid l-fullWidth">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-auto">
                                        <p>Twitter</p>
                                    </div>
                                    <div class="col-auto">
                                        <p class="icon-twitter-logo-button pull-left hi-fontSize-30"></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    {{------------ [ Facebook Icon ] ------------}}
                    <li>
                        <a href="#">
                            <div class="container-fluid l-fullWidth">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-auto">
                                        <p>Facebook</p>
                                    </div>
                                    <div class="col-auto">
                                        <p class="icon-facebook-logo-button pull-left hi-fontSize-30"></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>

            {{------------ [ About Pey khoone Section ] ------------}}
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 align-self-center">
                <p class="gradient-borderBottom white-text pb-2 mt-3">درباره پی خونه</p>
                <p class="m-footer-about p-0"> پی خونه سامانه ای برای خرید، اجاره خانه و ارائه اطلاعات ملکی در رشت است که با هدف افزایش اعتماد در خرید و اجاره ملک در رشت، بستر ارتباطی ایمن متقاضیان ملک و مشاوران املاک قابل اعتماد و حرفه ای در تمامی محله های رشت را توسعه داده است.</p>
            </div>
        </div>
        {{------------ [ Copyright Section ] ------------}}
        <div class="row black-darker py-2">
            {{------------ [ Copyright Text ] ------------}}
            <div class="col-11 text-center align-self-center">
                <p class="white-text hi-fontSize-12 mb-0">C) 2017  <a href="#"><span class="teal-text">Horoofnegar Team Design</span></a>. All  Right Reserved)</p>
            </div>
            {{------------ [ Up to top Button ] ------------}}
            <div class="col-1 align-self-center p-0">
                <a data-scroll href="#content" id="goUpBtn"><button class="hi-button-btn1 white-text hi-fontSize-25"><i class="fa fa-chevron-up"></i> </button></a>
            </div>
        </div>
    </footer>

</div>

<!-- Pushy JS -->
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/libraries.js')}}"></script>

@yield('js_resources')

</body>
</html>
