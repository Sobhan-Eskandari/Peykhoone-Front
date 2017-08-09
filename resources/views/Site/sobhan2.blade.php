<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Hi Framework -->
    <link rel="stylesheet" href="{{asset('css/Hi_Framework.css')}}">
    <!-- App Css -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body>

<button class="m-btn m-btn-outline hvr-shutter-out-horizontal">ثبت نام | ورود</button>

<button class="m-btn m-btn-gradient"> + ثبت آگهی </button>

<button class="m-btn ocean"> تماس با پی خونه </button>

<button class="m-btn ocean rounded hvr-icon-back pl-4 pr-3"> مشاهده همه </button>

<button class="m-btn m-btn-appdl warm-grey"><i class="fa fa-apple"></i> دریافت از اپل استور </button>

{{--<p class="m-btn-gradientOutline rounded"><i class="fa fa-chevron-down"></i> پی خونه رو تجربه کنید  </p>--}}

<footer class="container-fluid" id="l-footer">
    <div class="row py-4">
        <div class="col-12 col-sm-10 col-md-6 col-lg-2 align-self-center text-center p-3">
            <img class="m-footer-logo" src="{{asset('images/logo.png')}}">
        </div>

        <div class="col-6 col-sm-6  col-md-6 col-lg-2 align-self-center">
            <ul class="l-horizental-list m-horizental-list">
                <li><a href="#">درباره ما</a> </li>
                <li><a href="#">تماس با ما</a> </li>
                <li><a href="#">قوانین و مقررات</a> </li>
                <li><a href="#">راهنمای سایت</a> </li>
                <li><a href="#">دانلود برنامه</a> </li>
            </ul>
        </div>

        <div class="col-6 col-sm-6  col-md-4 col-lg-2 align-self-center">
            <ul class="l-horizental-list m-horizental-category">
                <li><a href="#">درباره ما</a> </li>
                <li><a href="#">تماس با ما</a> </li>
                <li><a href="#">قوانین و مقررات</a> </li>
                <li><a href="#">راهنمای سایت</a> </li>
                <li><a href="#">دانلود برنامه</a> </li>
            </ul>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-2 align-self-center">
            <ul class="l-horizental-list m-horizental-category m-horizental-SN">
                <li class="gradient-borderBottom"><a href="#">شبکه‌های اجتماعی</a> </li>
                <li><a href="#">Telegram<p class="m-Sn-icon m-telegram-icon pull-left"></p> </a> </li>
                <li><a href="#">Instagram<p class="m-Sn-icon m-instagram-icon pull-left"></p> </a> </li>
                <li><a href="#">Twitter<p class="m-Sn-icon m-twitter-icon pull-left"></p> </a> </li>
                <li><a href="#">Facebook<p class="m-Sn-icon m-facebook-icon pull-left"></p> </a> </li>
            </ul>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3 align-self-center">
            <p class="gradient-borderBottom white-text pb-2">درباره پی خونه</p>
            <p class="m-footer-about p-0"> پی خونه سامانه ای برای خرید، اجاره خانه و ارائه اطلاعات ملکی در رشت است که با هدف افزایش اعتماد در خرید و اجاره ملک در رشت، بستر ارتباطی ایمن متقاضیان ملک و مشاوران املاک قابل اعتماد و حرفه ای در تمامی محله های رشت را توسعه داده است.</p>
        </div>
    </div>
    <div class="row black-darker py-2">
        <div class="col-11 text-center align-self-center">
            <p class="white-text hi-fontSize-12 mb-0">C) 2017  <a href="#"><span class="teal-text">Horoofnegar Team Design</span></a>. All  Right Reserved)</p>
        </div>
        <div class="col-1 align-self-center">
            <button class="hi-button-btn1 white-text hi-fontSize-25"><i class="fa fa-chevron-up"></i> </button>
        </div>
    </div>
</footer>



<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/libraries.js')}}"></script>
<script src="https://use.fontawesome.com/7cd1915430.js"></script>

</body>
</html>
