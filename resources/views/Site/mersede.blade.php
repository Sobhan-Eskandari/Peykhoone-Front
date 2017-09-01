<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Hi Framework -->
    <link rel="stylesheet" href="{{asset('Hi_Framework/dist/Hi_Framework.css')}}">
    <!-- App Css -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color:#f7f7f7;">
<!--
<div class="container-fluid px-0 l-rtl">
    <nav class="navbar navbar-toggleable-md navbar-light py-0 m-navBar">
        <button class="navbar-toggler navbar-toggler-left mt-4 m-navBar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <!-- <span class="navbar-toggler-icon"></span>
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar top-bar"></span>
            <span class="icon-bar middle-bar"></span>
            <span class="icon-bar bottom-bar"></span>
        </button>
        <a class="navbar-brand pr-lg-5 mr-lg-5 m-navBar-brand" href="#">
            <img src="{{ asset('images/logo-mersede.png') }}" alt="در حال بارگذاری" height="77px"
                 width="120px"></a>

        <div class="collapse navbar-collapse cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left"
             id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link  m-navBar-link px-3 gradient-borderBottom m-navBar-activeLink" href="#">صفحه اصلی<span
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
-->
<hr>

{{--about us--}}
<!--<div class="container-fluid l-rtl">
    <div class="row px-lg-5 m-aboutUs justify-content-around">
        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 pr-lg-5">
            <h5 class="m-aboutUs-msg mr-lg-4">در پی خونه ما مشتاقانه منتظریم تا پاسخگوی سوالات شما باشیم،با ما در تماس
                باشید.</h5>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 pl-lg-5">
            <h6 class="m-aboutUs-tel ml-lg-5">
                <img src="{{ asset('images/Call-rhb.png') }}" alt="در حال بارگذاری" height="31px" width="31px">
                &nbsp;&nbsp;&nbsp;(۰۱۳) ۵۸۰ ۱۸۹۹
            </h6>
        </div>
    </div>
</div>-->
<hr>
{{--real state instance--}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-2 col-md-2 col-sm-3 col-8 text-center">
            <img src="{{ asset('images/partner-rhb.png') }}" alt="در حال بارگذاری" height="80px" width="120px">
        </div>
        <div class="col-lg-2 col-md-2 col-sm-3 col-8 text-center">
            <img src="{{ asset('images/partner-rhb.png') }}" alt="در حال بارگذاری" height="80px" width="120px">
        </div>
        <div class="col-lg-2 col-md-2 col-sm-3 col-8 text-center">
            <img src="{{ asset('images/partner-rhb.png') }}" alt="در حال بارگذاری" height="80px" width="120px">
        </div>
    </div>
</div>

<hr>

<div class="container">
    <div class="row">
        <div class="m-profileBox-sublayer mx-4 ">
            <div class="row">
                <div class="m-profileBox-upperLayer mr-4">
                </div>
            </div>
        </div>
    </div>
</div>

<hr>
<div class="container l-rtl">
    <div class="row justify-content-center">
        <div class="col-12 px-0">
            <ol class="breadcrumb m-breadcrumb">
                <li class="breadcrumb-item m-breadcrumb-item"><a href="#">خانه</a></li>
                <li class="breadcrumb-item m-breadcrumb-item"><a href="#">همه آژانس ها</a></li>
                <li class="breadcrumb-item m-breadcrumb-item">آژانس املاک محمود</li>
                <li class="breadcrumb-item m-breadcrumb-item">-</li>
            </ol>
        </div>
    </div>
</div>

<hr>
<!--facilities-->
<div class="container l-rtl">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-12 col-sm-12 col-12 py-3" style="border: 1px solid black;"></div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-12 py-5 px-5 m-list-home" style="border: 1px solid black;">
            <div class="row py-2 px-3">
                <div class="col-3 px-0">
                    <h5 class="text-right m-list-homeItem-r">
                        <span class="icon-location-pin hi-fontSize-18"></span>
                        &nbsp;آدرس
                    </h5>
                </div>
                <div class="col-9 px-0">
                    <h6 class="text-left m-list-homeItem-l">تهران، خیابان آزادی، بلوار شهید اکبری، پلاک 4، طبقه اول</h6>
                </div>
            </div>
            <div class="row py-2 px-3 m-list-homeItem">
                <div class="col-3 px-0">
                    <h5 class="text-right m-list-homeItem-r">
                        <span class="icon-tape-measure hi-fontSize-18"></span>
                        &nbsp;متراژ
                    </h5>
                </div>
                <div class="col-9 px-0">
                    <h6 class="text-left m-list-homeItem-l">230 متر</h6>
                </div>
            </div>
            <div class="row py-2 px-3 m-list-homeItem">
                <div class="col-3 px-0">
                    <h5 class="text-right m-list-homeItem-r">
                        <span class="icon-bed hi-fontSize-18"></span>
                        &nbsp;تعداد اتاق
                    </h5>
                </div>
                <div class="col-9 px-0">
                    <h6 class="text-left m-list-homeItem-l">3 خوابه</h6>
                </div>
            </div>
            <div class="row py-2 px-3 m-list-homeItem">
                <div class="col-3 px-0">
                    <h5 class="text-right m-list-homeItem-r">
                        <span class="icon-castle hi-fontSize-18"></span>
                        &nbsp;قدمت بنا
                    </h5>
                </div>
                <div class="col-9 px-0">
                    <h6 class="text-left m-list-homeItem-l">نوساز</h6>
                </div>
            </div>
        </div>
    </div>
</div>

<hr>
<div class="container-fluid px-lg-5 mx-lg-5 l-rtl">
    <div class="m-facilities-cardBox">
        <div class="row">
            <div class="col-12">
                <h5>
                    <span class="icon-checked-list hi-fontSize-24 m-facilities-iconTitle"></span>&nbsp;
                    <span class="m-facilities-title"> امکانات ملک</span>
                </h5>
            </div>
        </div>
        <hr class="mt-0 m-facilities-hr mb-4">
        <div class="row justify-content-center">
            @for ($i = 0; $i < 6; $i++)
                <div class="col-lg-2 col-md-3 col-sm-4 col-8  m-facilities-checkBox">
                    <div class="row px-2">
                        <div class="col-9">
                            <h6 class="mt-1 m-facilities-checkText">پنجره دو جداره</h6>
                        </div>
                        <div class="col-3 px-0">
                            <p class=""><span
                                        class="icon-round-done-button hi-fontSize-24 gradient-text m-facilities-checkbox"></span>
                            </p>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</div>

<div class="row mt-5">
    <div class="col-3 Topbar_dropdown l-rtl">
        <select class="example-getting-started" multiple="multiple">
            <option value="cheese">پیش فروش</option>
            <option value="tomatoes">اجاره</option>
        </select>
    </div>
</div>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-11 Topbar_dropdown l-rtl">
            <p class="hi-fontSize-13 teal-text mb-1 mt-1"><strong>نوع معامله</strong></p>
            <select class="example-getting-started" multiple="multiple">
                <option value="cheese">پیش فروش</option>
                <option value="tomatoes">اجاره</option>
            </select>


        <p class="hi-fontSize-13 teal-text mb-1 mt-4"><strong>نوع ملک</strong></p>
        <select class="example-getting-started" multiple="multiple">
            <option value="cheese">پیش فروش</option>
            <option value="tomatoes">اجاره</option>
        </select>

        <p class="hi-fontSize-13 teal-text mb-1 mt-4"><strong>تعداد اتاق خواب</strong></p>
        <select class="example-getting-started" multiple="multiple">
            <option value="cheese">پیش فروش</option>
            <option value="tomatoes">اجاره</option>
        </select>

        <p class="hi-fontSize-13 teal-text mb-1 mt-4"><strong>امکانات</strong></p>
        <select class="example-getting-started" multiple="multiple">
            <option value="cheese">پیش فروش</option>
            <option value="tomatoes">اجاره</option>
        </select>

        <hr>
        <p class="hi-fontSize-13 teal-text mb-1 mt-4"><strong>قیمت</strong></p>
        <div class="m-slider-place pt-4 pb-5">
            <div id="slider-step" class="noUi-target noUi-ltr noUi-horizontal"></div>
        </div>

        <hr>
        <p class="hi-fontSize-13 teal-text mb-1 mt-4"><strong>سن بنا</strong></p>
        <div class="m-slider-place pt-4 pb-5 px-4">
            <div id="senebana-slider" class="noUi-target noUi-ltr noUi-horizontal"></div>
        </div>

        <hr>
        <p class="hi-fontSize-13 teal-text mb-1 mt-4"><strong>متراژ</strong></p>
        <div class="m-slider-place pt-4 pb-5 px-4">
            {{--<div id="metraj-slider" class="noUi-target noUi-ltr noUi-horizontal"></div>--}}
        </div>

        <hr>
        <div class="container-fluid">
            <div class="row justify-content-around">
                <div class="col-12 col-md-6 p-0">
                    <button class="m-btn m-btn-gradient white-text hi-fontSize-12 px-3 m-0">اعمال فیلتر <i
                                class="fa fa-filter"></i></button>
                </div>
                <div class="col-12 col-md-6 p-0">
                    <button class="hi-button-simple grey-text hi-fontSize-12 px-2 py-2">پاک کردن فیلتر ها</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<hr>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link m-pagination-angleLink" href="#" aria-label="Previous">
                            <span aria-hidden="true" class="m-pagination-angle">&#xf053;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link m-pagination-num" href="#">1</a></li>
                    <li class="page-item"><a class="page-link m-pagination-num" href="#">2</a></li>
                    <li class="page-item"><a class="page-link m-pagination-num" href="#">3</a></li>
                    <li class="page-item"><a class="page-link m-pagination-num" href="#">4</a></li>
                    <li class="page-item"><a class="page-link m-pagination-num" href="#">...</a></li>
                    <li class="page-item"><a class="page-link m-pagination-num" href="#">20</a></li>
                    <li class="page-item">
                        <a class="page-link m-pagination-angleLink" href="#" aria-label="Next">
                            <span aria-hidden="true" class="m-pagination-angle">&#xf054;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<hr>

<div class="container l-rtl">
    <div class="row justify-content-end">
        <div class="col-9">
            <a href="#" class="m-horizental-card-hover">
                <div class="m-horizentalCard-box px-3 pt-2 pb-1 m-card">
                    <div class="row">
                        <div class="col-lg-2 col-md-12 col-sm-12 col-12 pt-2">

                            <img src="{{ asset('images/home-image.jpg') }}" alt="در حال بارگذاری"
                                 class="m-horizentalCard-img" height="100px" width="100px">
                        </div>
                        <div class="col-lg-10 col-md-11 col-sm-11 col-11 pr-lg-0">
                            <h5 class="m-horizentalCard-title mt-2">
                                <span class="icon-placeholder--round gradient-text hi-fontSize-17"></span>&nbsp;یوسف
                                آباد
                            </h5>
                            <h6 class="m-horizentalCard-exp mb-1">
                                <span class="icon-coins hi-fontSize-14"></span>
                                <span class="m-horizentalCard-price">  قیمت: سیصد و پنجاه میلیون تومان</span>
                            </h6>
                            <h6 class="m-horizentalCard-exp mb-1">
                                <span class="icon-location-pin hi-fontSize-14"></span>
                                <span class="">آدرس:تهران، خیابان آزادی، بلوار شهید اکبری، پلاک 4، طبقه اول، واحد 1</span>
                            </h6>
                            <h6 class="m-horizentalCard-exp mb-1">
                                <span class="icon-home hi-fontSize-14"></span>
                                <span class=""> آژانس املاک محمود</span>
                            </h6>
                        </div>
                    </div>
                    <hr class="mt-0 mb-1">
                    <div class="row">
                        <div class="col-lg-10 col-md-12 col-sm-12 col-12 px-3">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><h6 class="icon-bed hi-fontSize-14"></h6></li>
                                        <li class="list-inline-item"><h6
                                                    class="hi-fontSize-12  m-horizentalCard-moreExp">2 خوابه</h6></li>
                                    </ul>
                                </li>
                                |
                                <li class="list-inline-item">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><h6 class="icon-tape-measure hi-fontSize-14"></h6>
                                        </li>
                                        <li class="list-inline-item"><h6
                                                    class="hi-fontSize-12 m-horizentalCard-moreExp">230 متر</h6></li>
                                    </ul>
                                </li>
                                |
                                <li class="list-inline-item">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><h6 class="icon-parking hi-fontSize-14"></h6></li>
                                        <li class="list-inline-item"><h6
                                                    class="hi-fontSize-12 m-horizentalCard-moreExp">پارکینگ اختصاصی</h6>
                                        </li>
                                    </ul>
                                </li>
                                |
                                <li class="list-inline-item">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><h6 class="icon-time hi-fontSize-14"></h6></li>
                                        <li class="list-inline-item"><h6
                                                    class="hi-fontSize-12 m-horizentalCard-moreExp">3 ساعت پیش</h6></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6 pt-0">
                            <button class="btn m-btn m-btn-outline hvr-shutter-out-horizontal
                        m-horizentalCard-btn text-center px-2 mt-0 ml-lg-0 ml-md-3"
                                    type="submit">اطلاعات بیشتر
                            </button>
                        </div>
                    </div>
                </div>
            </a>
        </div>

    </div>
</div>

<hr>

<img src="{{ asset('') }}" alt="در حال بارگذاری" height="100%" width="100%">
<hr>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/libraries.js')}}"></script>
</body>
</html>
