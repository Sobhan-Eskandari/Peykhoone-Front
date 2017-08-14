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
<nav class="pushy pushy-left hidden-lg-up" data-focus="#first-link">
    <div class="pushy-content">
        <ul>
            <li class="pushy-link text-center"><a href="#">صفحه اصلی</a></li>
            <li class="pushy-link text-center"><a href="#">املاک</a></li>
            <li class="pushy-link text-center"><a href="#">آژانس های املاک</a></li>
            <li class="pushy-link text-center"><a href="#">درباره ما</a></li>
            <li class="pushy-link text-center"><a href="#">تماس با ما</a></li>
            <li class="pushy-link text-center">
                <form class="form-inline pl-0 pl-lg-5 ml-0 ml-lg-2 pushy-button">
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
            </li>
        </ul>
    </div>
</nav>

<!-- Site Overlay -->
<div class="site-overlay hidden-lg-up">
</div>

<!-- Your Content -->
<div id="container">
    <!-- Menu Button -->
    <div class="container-fluid hidden-lg-up">
        <button class="menu-btn">
            <i class="fa fa-bars fa-2x" aria-hidden="true"></i>
        </button>
    </div>
    <p class="text-right">hello</p>
    <p class="text-left">hello</p>
</div>

<footer class="site-footer push text-center">This is a footer</footer>

<!-- Pushy JS -->
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/libraries.js')}}"></script>

</body>
</html>
