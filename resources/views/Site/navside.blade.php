<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Pushy - Off-Canvas Navigation Menu</title>
    <meta name="description" content="Pushy is an off-canvas navigation menu for your website.">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <!-- Pushy CSS -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- jQuery -->
</head>
<body>

<header class="push">
    <div class="container-fluid px-0 l-rtl hidden-md-down">
        <nav class="navbar navbar-toggleable-md navbar-light py-1 m-navBar ">
            <a class="navbar-brand pr-lg-5 mr-lg-4 m-navBar-brand pl-lg-4 " href="#">
                <img src="{{ asset('images/peyLogo.png') }}" alt="در حال بارگذاری" height="70px"
                     width="60px"></a>

            <div class="collapse navbar-collapse cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left"
                 id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link  m-navBar-link px-3 gradient-borderBottom m-navBar-activeLink" href="#">صفحه
                            اصلی<span
                                    class="sr-only">(current)</span></a>
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
                        <button class="btn btn-primary m-btn m-btn-gradient my-2 my-sm-0 mx-2 m-navBar-btn text-center"
                                type="submit">ثبت آگهی
                            +
                        </button>
                        <button class="btn btn-outline-primary m-btn m-btn-outline hvr-shutter-out-horizontal my-2 my-sm-0 mx-2 m-navBar-btn text-center"
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
            <li class="pushy-link text-right"><a href="#">
                    <img src="{{ asset('images/Close.png') }}" alt="در حال بارگذاری" height="20px"
                         width="20px" class="my-4 mr-1">
                </a></li>
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
            <div class="col-1 px-0"><a href="#" class="social-icon"><img src="{{ asset('images/Telegram.png') }}"
                                                                         alt="در حال بارگذاری" height="25px"
                                                                         width="25px"></a></div>
            <div class="col-1 pl-3 pr-2"><a href="#" class="social-icon"><img src="{{ asset('images/Facebook.png') }}"
                                                                              alt="در حال بارگذاری" height="25px"
                                                                              width="25px"></a></div>
            <div class="col-1 px-3">
                <a href="#" class="social-icon"><img src="{{ asset('images/Twitter.png') }}"
                                                     alt="در حال بارگذاری" height="25px"
                                                     width="25px"></a>
            </div>
            <div class="col-1 px-3">
                <a href="#" class="social-icon"><img src="{{ asset('images/Instagram.png') }}"
                                                     alt="در حال بارگذاری" height="25px"
                                                     width="25px"></a>
            </div>
        </div>


    </div>
</nav>

<!-- Site Overlay -->
<div class="site-overlay hidden-lg-up">
</div>

<!-- Your Content -->
<div id="container" class="container-fluid">
    <!-- Menu Button -->
    <div class="row hidden-lg-up l-rtl">
        <button class="menu-btn">
            <i class="fa fa-bars fa-2x" aria-hidden="true"></i>
        </button>
    </div>
    <hr>
    <div class="row">
        <div class="col-6">
            <h4 class="text-right">hello</h4>
        </div>
        <div class="col-6">
            <h4 class="text-left">hello</h4>
        </div>
    </div>
</div>

<footer class="site-footer push text-center">This is a footer</footer>

<!-- Pushy JS -->
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/libraries.js')}}"></script>

</body>
</html>
