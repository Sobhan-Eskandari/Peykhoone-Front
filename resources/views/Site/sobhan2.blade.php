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

{{--<button class="m-btn m-btn-outline hvr-shutter-out-horizontal">ثبت نام | ورود</button>--}}

{{--<button class="m-btn m-btn-gradient"> + ثبت آگهی </button>--}}

{{--<button class="m-btn ocean"> تماس با پی خونه </button>--}}

{{--<button class="m-btn ocean rounded hvr-icon-back pl-4 pr-3"> مشاهده همه </button>--}}

{{--<button class="m-btn m-btn-appdl warm-grey"><i class="fa fa-apple"></i> دریافت از اپل استور </button>--}}

{{--<p class="m-btn-gradientOutline rounded"><i class="fa fa-chevron-down"></i> پی خونه رو تجربه کنید  </p>--}}

<footer class="container-fluid" id="l-footer">
    {{--<div class="row py-4">--}}
        {{------------ [ pey khoone logo place ] ------------}}
        {{--<div class="col-12 col-sm-10 col-md-6 col-lg-2 align-self-center text-center p-3">--}}
            {{--<img class="m-footer-logo" alt="لوگوی پی‌ خونه" src="{{asset('images/logo.png')}}">--}}
        {{--</div>--}}

        {{------------ [ Contactus List ] ------------}}
        {{--<div class="col-6 col-sm-6  col-md-6 col-lg-2 align-self-center">--}}
            {{--<ul class="l-horizental-list m-horizental-list">--}}
                {{--<li><a href="#">درباره ما</a> </li>--}}
                {{--<li><a href="#">تماس با ما</a> </li>--}}
                {{--<li><a href="#">قوانین و مقررات</a> </li>--}}
                {{--<li><a href="#">راهنمای سایت</a> </li>--}}
                {{--<li><a href="#">دانلود برنامه</a> </li>--}}
            {{--</ul>--}}
        {{--</div>--}}

        {{------------ [ Categories List ] ------------}}
        {{--<div class="col-6 col-sm-6  col-md-4 col-lg-2 align-self-center">--}}
            {{--<ul class="l-horizental-list m-horizental-category">--}}
                {{--<li><a href="#">درباره ما</a> </li>--}}
                {{--<li><a href="#">تماس با ما</a> </li>--}}
                {{--<li><a href="#">قوانین و مقررات</a> </li>--}}
                {{--<li><a href="#">راهنمای سایت</a> </li>--}}
                {{--<li><a href="#">دانلود برنامه</a> </li>--}}
            {{--</ul>--}}
        {{--</div>--}}

        {{------------ [ Social netwrok List ] ------------}}
        {{--<div class="col-12 col-sm-6 col-md-4 col-lg-2 align-self-center">--}}
            {{--<ul class="l-horizental-list m-horizental-category m-horizental-SN">--}}
                {{--<li class="gradient-borderBottom"><a href="#">شبکه‌های اجتماعی</a> </li>--}}
                {{--<li><a href="#">Telegram<p class="m-Sn-icon m-telegram-icon pull-left"></p> </a> </li>--}}
                {{--<li><a href="#">Instagram<p class="m-Sn-icon m-instagram-icon pull-left"></p> </a> </li>--}}
                {{--<li><a href="#">Twitter<p class="m-Sn-icon m-twitter-icon pull-left"></p> </a> </li>--}}
                {{--<li><a href="#">Facebook<p class="m-Sn-icon m-facebook-icon pull-left"></p> </a> </li>--}}
            {{--</ul>--}}
        {{--</div>--}}

        {{------------ [ About Pey khoone Section ] ------------}}
        {{--<div class="col-12 col-sm-6 col-md-4 col-lg-3 align-self-center">--}}
            {{--<p class="gradient-borderBottom white-text pb-2">درباره پی خونه</p>--}}
            {{--<p class="m-footer-about p-0"> پی خونه سامانه ای برای خرید، اجاره خانه و ارائه اطلاعات ملکی در رشت است که با هدف افزایش اعتماد در خرید و اجاره ملک در رشت، بستر ارتباطی ایمن متقاضیان ملک و مشاوران املاک قابل اعتماد و حرفه ای در تمامی محله های رشت را توسعه داده است.</p>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{------------ [ Copyright Section ] ------------}}
    {{--<div class="row black-darker py-2">--}}
        {{------------ [ Copyright Text ] ------------}}
        {{--<div class="col-11 text-center align-self-center">--}}
            {{--<p class="white-text hi-fontSize-12 mb-0">C) 2017  <a href="#"><span class="teal-text">Horoofnegar Team Design</span></a>. All  Right Reserved)</p>--}}
        {{--</div>--}}
        {{------------ [ Up to top Button ] ------------}}
        {{--<div class="col-1 align-self-center">--}}
            {{--<button class="hi-button-btn1 white-text hi-fontSize-25"><i class="fa fa-chevron-up"></i> </button>--}}
        {{--</div>--}}
    {{--</div>--}}
</footer>

{{--************ [ Ads Card ] **************--}}
<div class="container mt-5">
    {{--<div class="row justify-content-center">--}}
        {{--<div class="col-auto">--}}
            {{--<!-- Nav tabs -->--}}
            {{--<div class="m-card rounded-10 m-filter-others px-3">--}}
                {{--<ul class="others others-tabs" role="tablist">--}}
                    {{--<li class="others-item">--}}
                        {{--<a class="others-link active" data-toggle="tab" href="#home" role="tab">آپارتمان مسکونی</a>--}}
                    {{--</li>--}}
                    {{--<li class="others-item">--}}
                        {{--<a class="others-link" data-toggle="tab" href="#profile" role="tab">آپارتمان اداری</a>--}}
                    {{--</li>--}}
                    {{--<li class="others-item">--}}
                        {{--<a class="others-link" data-toggle="tab" href="#messages" role="tab">مستغلات</a>--}}
                    {{--</li>--}}
                    {{--<li class="others-item">--}}
                        {{--<a class="others-link" data-toggle="tab" href="#settings" role="tab">کلنگی</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<!-- Tab panes -->--}}
    <div class="tab-content">
        <div class="tab-pane fade show active" id="home" role="tabpanel">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3 my-3">
                    <a href="#" class="is-hovered-adCard">
                        <div class="m-card">
                             Card Infos
                            <img class="img-fluid l-topCornered m-card-image" src="{{asset('images/home-image.jpg')}}">
                            <p class="text-center mt-2 mb-2"><strong>یوسف آباد</strong></p>
                            <p class="text-center hi-fontSize-12">متراژ : ۲۳۰ متر</p>
                            <p class="text-center hi-fontSize-15 home-cost">قیمت : ۳۵۰ میلیون تومان</p>
                            cart azhans name and bishtar bedanid
                            <div class="container-fluid">
                                <div class="row pt-2 pb-1 align-items-center">
                                    <div class="col-4 pl-0">
                                        <div data-balloon="آزانس املاک محمود" data-balloon-pos="top" class="m-card-azhansName" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></div>
                                    </div>
                                    <div class="col-7 text-right pr-0">
                                        <span class="m-card-moreInfo p-2 hvr-shutter-out-vertical">اطلاعات بیشتر</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        {{--<div class="tab-pane fade" id="profile" role="tabpanel">--}}
            {{--<div class="row">--}}
                {{--<div class="col-12 col-md-6 col-lg-3 my-3">--}}
                    {{--<a href="#" class="is-hovered-adCard">--}}
                        {{--<div class="m-card">--}}
                             {{--Card Infos--}}
                            {{--<img class="img-fluid l-topCornered m-card-image" src="{{asset('images/home-image.jpg')}}">--}}
                            {{--<p class="text-center mt-2 mb-2"><strong>یوسف آباد</strong></p>--}}
                            {{--<p class="text-center hi-fontSize-12">متراژ : ۲۳۰ متر</p>--}}
                            {{--<p class="text-center hi-fontSize-15 home-cost">قیمت : ۳۵۰ میلیون تومان</p>--}}
                            {{--cart azhans name and bishtar bedanid--}}
                            {{--<div class="container-fluid">--}}
                                {{--<div class="row pt-2 pb-1 align-items-center">--}}
                                    {{--<div class="col-4 pl-0">--}}
                                        {{--<div data-balloon="آزانس املاک محمود" data-balloon-pos="top" class="m-card-azhansName" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-7 text-right pr-0">--}}
                                        {{--<span class="m-card-moreInfo p-2 hvr-shutter-out-vertical">اطلاعات بیشتر</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                {{--</div>--}}
                {{--<div class="col-12 col-md-6 col-lg-3 my-3">--}}
                    {{--<a href="#" class="is-hovered-adCard">--}}
                        {{--<div class="m-card">--}}
                             {{--Card Infos--}}
                            {{--<img class="img-fluid l-topCornered m-card-image" src="{{asset('images/home-image.jpg')}}">--}}
                            {{--<p class="text-center mt-2 mb-2"><strong>یوسف آباد</strong></p>--}}
                            {{--<p class="text-center hi-fontSize-12">متراژ : ۲۳۰ متر</p>--}}
                            {{--<p class="text-center hi-fontSize-15 home-cost">قیمت : ۳۵۰ میلیون تومان</p>--}}
                            {{--cart azhans name and bishtar bedanid--}}
                            {{--<div class="container-fluid">--}}
                                {{--<div class="row pt-2 pb-1 align-items-center">--}}
                                    {{--<div class="col-4 pl-0">--}}
                                        {{--<div data-balloon="آزانس املاک محمود" data-balloon-pos="top" class="m-card-azhansName" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-7 text-right pr-0">--}}
                                        {{--<span class="m-card-moreInfo p-2 hvr-shutter-out-vertical">اطلاعات بیشتر</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="tab-pane fade" id="messages" role="tabpanel">--}}
            {{--<div class="row">--}}
                {{--<div class="col-12 col-md-6 col-lg-3 my-3">--}}
                    {{--<a href="#" class="is-hovered-adCard">--}}
                        {{--<div class="m-card">--}}
                             {{--Card Infos--}}
                            {{--<img class="img-fluid l-topCornered m-card-image" src="{{asset('images/home-image.jpg')}}">--}}
                            {{--<p class="text-center mt-2 mb-2"><strong>یوسف آباد</strong></p>--}}
                            {{--<p class="text-center hi-fontSize-12">متراژ : ۲۳۰ متر</p>--}}
                            {{--<p class="text-center hi-fontSize-15 home-cost">قیمت : ۳۵۰ میلیون تومان</p>--}}
                            {{--cart azhans name and bishtar bedanid--}}
                            {{--<div class="container-fluid">--}}
                                {{--<div class="row pt-2 pb-1 align-items-center">--}}
                                    {{--<div class="col-4 pl-0">--}}
                                        {{--<div data-balloon="آزانس املاک محمود" data-balloon-pos="top" class="m-card-azhansName" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-7 text-right pr-0">--}}
                                        {{--<span class="m-card-moreInfo p-2 hvr-shutter-out-vertical">اطلاعات بیشتر</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                {{--</div>--}}
                {{--<div class="col-12 col-md-6 col-lg-3 my-3">--}}
                    {{--<a href="#" class="is-hovered-adCard">--}}
                        {{--<div class="m-card">--}}
                             {{--Card Infos--}}
                            {{--<img class="img-fluid l-topCornered m-card-image" src="{{asset('images/home-image.jpg')}}">--}}
                            {{--<p class="text-center mt-2 mb-2"><strong>یوسف آباد</strong></p>--}}
                            {{--<p class="text-center hi-fontSize-12">متراژ : ۲۳۰ متر</p>--}}
                            {{--<p class="text-center hi-fontSize-15 home-cost">قیمت : ۳۵۰ میلیون تومان</p>--}}
                            {{--cart azhans name and bishtar bedanid--}}
                            {{--<div class="container-fluid">--}}
                                {{--<div class="row pt-2 pb-1 align-items-center">--}}
                                    {{--<div class="col-4 pl-0">--}}
                                        {{--<div data-balloon="آزانس املاک محمود" data-balloon-pos="top" class="m-card-azhansName" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-7 text-right pr-0">--}}
                                        {{--<span class="m-card-moreInfo p-2 hvr-shutter-out-vertical">اطلاعات بیشتر</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                {{--</div>--}}
                {{--<div class="col-12 col-md-6 col-lg-3 my-3">--}}
                    {{--<a href="#" class="is-hovered-adCard">--}}
                        {{--<div class="m-card">--}}
                             {{--Card Infos--}}
                            {{--<img class="img-fluid l-topCornered m-card-image" src="{{asset('images/home-image.jpg')}}">--}}
                            {{--<p class="text-center mt-2 mb-2"><strong>یوسف آباد</strong></p>--}}
                            {{--<p class="text-center hi-fontSize-12">متراژ : ۲۳۰ متر</p>--}}
                            {{--<p class="text-center hi-fontSize-15 home-cost">قیمت : ۳۵۰ میلیون تومان</p>--}}
                            {{--cart azhans name and bishtar bedanid--}}
                            {{--<div class="container-fluid">--}}
                                {{--<div class="row pt-2 pb-1 align-items-center">--}}
                                    {{--<div class="col-4 pl-0">--}}
                                        {{--<div data-balloon="آزانس املاک محمود" data-balloon-pos="top" class="m-card-azhansName" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-7 text-right pr-0">--}}
                                        {{--<span class="m-card-moreInfo p-2 hvr-shutter-out-vertical">اطلاعات بیشتر</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="tab-pane fade" id="settings" role="tabpanel">--}}
            {{--<div class="row">--}}
                {{--<div class="col-12 col-md-6 col-lg-3 my-3">--}}
                    {{--<a href="#" class="is-hovered-adCard">--}}
                        {{--<div class="m-card">--}}
                             {{--Card Infos--}}
                            {{--<img class="img-fluid l-topCornered m-card-image" src="{{asset('images/home-image.jpg')}}">--}}
                            {{--<p class="text-center mt-2 mb-2"><strong>یوسف آباد</strong></p>--}}
                            {{--<p class="text-center hi-fontSize-12">متراژ : ۲۳۰ متر</p>--}}
                            {{--<p class="text-center hi-fontSize-15 home-cost">قیمت : ۳۵۰ میلیون تومان</p>--}}
                            {{--cart azhans name and bishtar bedanid--}}
                            {{--<div class="container-fluid">--}}
                                {{--<div class="row pt-2 pb-1 align-items-center">--}}
                                    {{--<div class="col-4 pl-0">--}}
                                        {{--<div data-balloon="آزانس املاک محمود" data-balloon-pos="top" class="m-card-azhansName" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-7 text-right pr-0">--}}
                                        {{--<span class="m-card-moreInfo p-2 hvr-shutter-out-vertical">اطلاعات بیشتر</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                {{--</div>--}}
                {{--<div class="col-12 col-md-6 col-lg-3 my-3">--}}
                    {{--<a href="#" class="is-hovered-adCard">--}}
                        {{--<div class="m-card">--}}
                             {{--Card Infos--}}
                            {{--<img class="img-fluid l-topCornered m-card-image" src="{{asset('images/home-image.jpg')}}">--}}
                            {{--<p class="text-center mt-2 mb-2"><strong>یوسف آباد</strong></p>--}}
                            {{--<p class="text-center hi-fontSize-12">متراژ : ۲۳۰ متر</p>--}}
                            {{--<p class="text-center hi-fontSize-15 home-cost">قیمت : ۳۵۰ میلیون تومان</p>--}}
                            {{--cart azhans name and bishtar bedanid--}}
                            {{--<div class="container-fluid">--}}
                                {{--<div class="row pt-2 pb-1 align-items-center">--}}
                                    {{--<div class="col-4 pl-0">--}}
                                        {{--<div data-balloon="آزانس املاک محمود" data-balloon-pos="top" class="m-card-azhansName" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-7 text-right pr-0">--}}
                                        {{--<span class="m-card-moreInfo p-2 hvr-shutter-out-vertical">اطلاعات بیشتر</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                {{--</div>--}}
                {{--<div class="col-12 col-md-6 col-lg-3 my-3">--}}
                    {{--<a href="#" class="is-hovered-adCard">--}}
                        {{--<div class="m-card">--}}
                             {{--Card Infos--}}
                            {{--<img class="img-fluid l-topCornered m-card-image" src="{{asset('images/home-image.jpg')}}">--}}
                            {{--<p class="text-center mt-2 mb-2"><strong>یوسف آباد</strong></p>--}}
                            {{--<p class="text-center hi-fontSize-12">متراژ : ۲۳۰ متر</p>--}}
                            {{--<p class="text-center hi-fontSize-15 home-cost">قیمت : ۳۵۰ میلیون تومان</p>--}}
                            {{--cart azhans name and bishtar bedanid--}}
                            {{--<div class="container-fluid">--}}
                                {{--<div class="row pt-2 pb-1 align-items-center">--}}
                                    {{--<div class="col-4 pl-0">--}}
                                        {{--<div data-balloon="آزانس املاک محمود" data-balloon-pos="top" class="m-card-azhansName" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-7 text-right pr-0">--}}
                                        {{--<span class="m-card-moreInfo p-2 hvr-shutter-out-vertical">اطلاعات بیشتر</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                {{--</div>--}}
                {{--<div class="col-12 col-md-6 col-lg-3 my-3">--}}
                    {{--<a href="#" class="is-hovered-adCard">--}}
                        {{--<div class="m-card">--}}
                             {{--Card Infos--}}
                            {{--<img class="img-fluid l-topCornered m-card-image" src="{{asset('images/home-image.jpg')}}">--}}
                            {{--<p class="text-center mt-2 mb-2"><strong>یوسف آباد</strong></p>--}}
                            {{--<p class="text-center hi-fontSize-12">متراژ : ۲۳۰ متر</p>--}}
                            {{--<p class="text-center hi-fontSize-15 home-cost">قیمت : ۳۵۰ میلیون تومان</p>--}}
                            {{--cart azhans name and bishtar bedanid--}}
                            {{--<div class="container-fluid">--}}
                                {{--<div class="row pt-2 pb-1 align-items-center">--}}
                                    {{--<div class="col-4 pl-0">--}}
                                        {{--<div data-balloon="آزانس املاک محمود" data-balloon-pos="top" class="m-card-azhansName" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-7 text-right pr-0">--}}
                                        {{--<span class="m-card-moreInfo p-2 hvr-shutter-out-vertical">اطلاعات بیشتر</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
</div>

{{--************ [ Double Range Slider ] **************--}}
<div class="row justify-content-center">
    {{--<div class="col-3">--}}
        {{--<div class="m-slider-place">--}}
            {{--<div id="slider-step" class="noUi-target noUi-ltr noUi-horizontal"></div>--}}
        {{--</div>--}}
    {{--</div>--}}
</div>

<div class="container">

    {{--************ [ Fields ] **************--}}
    {{--<div class="row">--}}
        {{--<div class="col-auto l-rtl">--}}
            {{--<div class="form-group has-danger">--}}
                {{--<label class="hi-fontSize-13 form-control-label" for="name">نام و نام خانوادگی</label>--}}
                {{--<input class="m-field form-control" id="name" aria-describedby="name" placeholder="نام و نام خانوادگی خود را به فارسی وارد کنید">--}}
                {{--<div class="form-control-feedback hi-fontSize-12">لطفا نام را به فارسی بنویسید</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--************ [ Dropdown ] **************--}}
    {{--<div class="row">--}}
        {{--<div class="col-2">--}}
            {{--<div class="Topbar_dropdown posts_dropdown dropdown">--}}
                {{--<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                    {{--همه ی زمان ها--}}
                {{--</button>--}}
                {{--<div  class="dropdown-menu hi-shadow-2" aria-labelledby="dropdownMenuButton">--}}
                    {{--<a class="dropdown-item text-right py-1" href="#"> پروفایل من</a>--}}
                    {{--<a class="dropdown-item text-right py-1" href="#"> مدیران</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--************ [ Dropdown ] **************--}}
    {{--<div class="row mt-5">--}}
        {{--<div class="col-3 Topbar_dropdown l-rtl">--}}
            {{--<select id="example-getting-started" multiple="multiple">--}}
                {{--<option value="cheese">پیش فروش</option>--}}
                {{--<option value="tomatoes">اجاره</option>--}}
            {{--</select>--}}
        {{--</div>--}}
    </div>
</div>

<div class="container-fluid">
    <div class="row justify-content-center mt-5">
        <div class="col-lg-10 col-xl-8 col-md-11 col-sm-12 col-11 m-curved-bg gradient-background px-0" id="filters-row" style="margin-top: 465px">
            <div class="m-gradient-placeholder">
                <div class="container-fluid l-fullHeight">
                    <div class="row l-fullHeight">
                        <div class="col-12 col-sm-2 p-0">
                            <button type="submit" class="filter-search-btn">جست و جو
                                <i class="fa fa-long-arrow-left"></i>
                            </button>
                        </div>
                        <div class="col-12 col-sm-2 p-0">
                            <div class="m-filters-btn" id="filters-cost-btn">
                                <p class="filter-type"> : قیمت مد نظر شما</p>
                                <p class="filter-selected">از ۱۰۰ تا ۳۰۰ میلیون</p>
                                <i class="fa fa-chevron-down"></i>
                            </div>
                        </div>
                        <div class="col-12 col-sm-2 p-0">
                            <div class="m-filters-btn" id="filters-metr-btn">
                                <p class="filter-type"> : متراژ ملک</p>
                                <p class="filter-selected"><span id="metraj-place"></span> متر </p>
                                <i class="fa fa-chevron-down"></i>
                            </div>
                        </div>
                        <div class="col-12 col-sm-2 p-0">
                            <div class="m-filters-btn" id="filters-room-btn">
                                <p class="filter-type"> : تعداد اتاق</p>
                                <p class="filter-selected" id="tedadekhab-filter-text">۱ خوابه</p>
                                <i class="fa fa-chevron-down"></i>
                            </div>
                        </div>
                        <div class="col-12 col-sm-2 p-0">
                            <div class="m-filters-btn" id="filters-noemelk-btn">
                                <p class="filter-type"> : نوع ملک مد نظر شما</p>
                                <p class="filter-selected" id="noemelk-filter-text"> آپارتمان مسکونی</p>
                                <i class="fa fa-chevron-down"></i>
                            </div>
                        </div>
                        <div class="col-12 col-sm-2 p-0">
                            <div class="m-filters-btn" id="filters-moamele-btn">
                                <p class="filter-type"> : نوع معامله</p>
                                <p class="filter-selected" id="noemoamele-filter-text">خرید و پیش خرید</p>
                                <i class="fa fa-chevron-down"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center"  id="filters-tray" style="margin-top: -124px">

        <div class="col-lg-10 col-xl-8 col-md-11 col-sm-12 col-11 m-curved-bg gray px-0" id="filters-tray-row">
            <div class="m-filters-placeholder gray">
                <div class="container-fluid l-fullHeight">

                    <div class="row l-fullHeight" id="noemoamele-filters">
                        <div class="col-12 pr-4">
                            <div class="pure-checkbox my-4 l-fullWidth text-right">
                                <input checked id="kharidVaPishkharid" name="checkbox" type="checkbox">
                                <label for="kharidVaPishkharid">خرید و پیش خرید</label>
                            </div>
                            <div class="pure-checkbox my-2 l-fullWidth text-right">
                                <input id="rahnVaEjare" name="checkbox" type="checkbox">
                                <label for="rahnVaEjare">رهن و اجاره</label>
                            </div>
                        </div>
                    </div>

                    <div class="row l-fullHeight align-items-center justify-content-end" id="noemelk-filters">
                        <div class="col-auto mx-4">
                            <div class="pure-checkbox my-3 l-fullWidth text-right">
                                <input id="zamin" name="zamin" type="checkbox">
                                <label for="zamin">زمین</label>
                            </div>
                            <div class="pure-checkbox l-fullWidth text-right">
                                <input id="tejari" name="tejari" type="checkbox">
                                <label for="tejari">تجاری</label>
                            </div>
                        </div>

                        <div class="col-auto mx-4">
                            <div class="pure-checkbox my-3 l-fullWidth text-right">
                                <input id="villa" name="villa" type="checkbox">
                                <label for="villa">ویلا</label>
                            </div>
                            <div class="pure-checkbox l-fullWidth text-right">
                                <input id="penthouse"  name="penthouse" type="checkbox">
                                <label for="penthouse">پنت هاوس</label>
                            </div>
                        </div>

                        <div class="col-auto mx-4">
                            <div class="pure-checkbox my-3 l-fullWidth text-right">
                                <input id="mostaghelat"  name="mostaghelat" type="checkbox">
                                <label for="mostaghelat">مستغلات</label>
                            </div>
                            <div class="pure-checkbox l-fullWidth text-right">
                                <input id="kolangi"  name="kolangi" type="checkbox">
                                <label for="kolangi">کلنگی</label>
                            </div>
                        </div>

                        <div class="col-auto mx-4">
                            <div class="pure-checkbox my-3 l-fullWidth text-right">
                                <input id="apart-maskooni" checked name="checkbox" type="checkbox">
                                <label for="apart-maskooni">آپارتمان مسکونی</label>
                            </div>
                            <div class="pure-checkbox l-fullWidth text-right">
                                <input id="apart-edari" name="checkbox" type="checkbox">
                                <label for="apart-edari">آپارتمان اداری</label>
                            </div>
                        </div>
                    </div>

                    <div class="row l-fullHeight align-items-center justify-content-start l-rtl" id="tedadekhab-filters">
                        <div class="col-auto mx-4">
                            <div class="pure-checkbox my-3 l-fullWidth text-right">
                                <input id="one-room" checked name="one-room" type="checkbox">
                                <label for="one-room">۱ خوابه</label>
                            </div>
                            <div class="pure-checkbox l-fullWidth text-right">
                                <input id="two-room" name="two-room" type="checkbox">
                                <label for="two-room">۲ خوابه</label>
                            </div>
                        </div>

                        <div class="col-auto mx-4">
                            <div class="pure-checkbox my-3 l-fullWidth text-right">
                                <input id="three-room" name="three-room" type="checkbox">
                                <label for="three-room">۳ خوابه</label>
                            </div>
                            <div class="pure-checkbox l-fullWidth text-right">
                                <input id="four-room" name="four-room" type="checkbox">
                                <label for="four-room">۴ خوابه</label>
                            </div>
                        </div>

                        <div class="col-auto mx-4">
                            <div class="pure-checkbox my-3 l-fullWidth text-right">
                                <input id="five-room"  name="five-room" type="checkbox">
                                <label for="five-room">۵ خوابه</label>
                            </div>
                            <div class="pure-checkbox l-fullWidth text-right">
                                <input id="5more-room"  name="5more-room" type="checkbox">
                                <label for="5more-room">بیشتر از ۵ خواب</label>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-4 col-xl-3 col-md-5 col-sm-8 col-11 m-curved-bg gray px-0" id="costs-tray-row">
            <div class="m-filters-placeholder gray">
                <div class="container-fluid l-fullHeight">
                    <div class="row l-fullHeight align-items-center justify-content-center">
                        <div class="col-10 mx-4">
                            <p class="hi-fontSize-12 mb-2 text-right">بازه قیمت را مشخص کنید</p>
                            <div class="m-slider-place white pt-4 pb-5">
                                <div id="slider-step" class="noUi-target noUi-ltr noUi-horizontal"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-xl-3 col-md-5 col-sm-8 col-11 m-curved-bg gray px-0" id="metraj-tray-row">
            <div class="m-filters-placeholder gray">
                <div class="container-fluid l-fullHeight">
                    <div class="row l-fullHeight align-items-center justify-content-center">
                        <div class="col-10 mx-4">
                            <p class="hi-fontSize-12 mb-2 text-right">بازه متراژ را مشخص کنید</p>
                            <div class="m-slider-place white pt-4 pb-5">
                                <div id="metraj-slider" class="noUi-target noUi-ltr noUi-horizontal"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>


<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/libraries.js')}}"></script>
<script src="https://use.fontawesome.com/7cd1915430.js"></script>

</body>
</html>
