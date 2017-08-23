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
                              <p class=""><span class="icon-round-done-button hi-fontSize-24 gradient-text m-facilities-checkbox"></span></p>
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
                        <button class="m-btn m-btn-gradient white-text hi-fontSize-12 px-3 m-0">اعمال فیلتر <i class="fa fa-filter"></i> </button>
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
    <div class="row">
        <div class="col-3"></div>
        <div class="col-9">
            <div class="m-horizentalCard-box px-3 pt-2 pb-1">
                <div class="row">
                    <div class="col-lg-2 col-md-12 col-sm-12 col-12">
                        <img src="{{ asset('images/home.rhb.jpg') }}" alt="در حال بارگذاری"
                             class="m-horizentalCard-img" height="100px" width="100px">
                    </div>
                    <div class="col-lg-10 col-md-11 col-sm-11 col-11">
                        <h6 class="m-horizentalCard-title mt-2">
                            <img src="{{ asset('images/Location.png') }}" alt="در حال بارگذاری" height="17px" width="17px">
                            یوسف آباد
                        </h6>
                        <p class="m-horizentalCard-exp">
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                 width="15px" height="15px" viewBox="0 0 128.000000 128.000000"
                                 preserveAspectRatio="xMidYMid meet">
                                <metadata>
                                    Created by potrace 1.15, written by Peter Selinger 2001-2017
                                </metadata>
                                <g transform="translate(0.000000,128.000000) scale(0.100000,-0.100000)"
                                   fill="#000000" stroke="none">
                                    <path d="M412 1209 c-217 -14 -346 -42 -388 -84 -22 -22 -24 -33 -24 -115 0
-103 8 -117 86 -150 l44 -19 0 -79 0 -79 -41 -12 c-23 -7 -52 -23 -65 -36 -22
-22 -24 -33 -24 -115 0 -83 2 -93 25 -115 13 -14 28 -25 32 -25 4 0 7 -37 5
-82 -3 -97 7 -123 61 -151 204 -105 830 -105 1035 1 50 26 62 53 62 146 0 77
-1 79 -35 112 -34 32 -35 35 -35 107 l0 74 45 17 c70 27 85 53 85 152 0 96
-16 124 -85 147 l-40 14 -5 99 c-5 97 -5 99 -37 120 -85 57 -418 92 -701 73z
m459 -54 c192 -25 268 -56 217 -88 -82 -52 -260 -80 -513 -81 -214 0 -347 17
-455 56 -71 27 -84 36 -69 54 50 61 541 96 820 59z m332 -301 c15 -9 27 -21
24 -27 -6 -19 -74 -47 -171 -70 -81 -19 -120 -21 -351 -21 -232 0 -270 2 -353
21 -90 22 -190 59 -181 68 3 2 45 -3 94 -11 262 -44 691 -17 813 51 30 17 79
12 125 -11z m-1038 -223 c9 -15 114 -52 193 -67 180 -34 474 -38 654 -8 59 10
8 -13 -67 -29 -183 -41 -466 -46 -673 -12 -103 17 -198 47 -221 70 -13 13 -9
17 30 34 48 23 75 26 84 12z m990 -254 c25 -19 13 -32 -49 -56 -123 -46 -207
-56 -466 -56 -259 0 -343 10 -466 56 -60 23 -83 43 -32 28 142 -41 446 -60
633 -40 123 13 262 43 303 66 34 18 53 19 77 2z"/>
                                </g>
                            </svg>
                            <span class="m-horizentalCard-price">  قیمت: سیصد و پنجاه میلیون تومان</span>

                            <br>
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                 width="13px" height="13px" viewBox="0 0 104.000000 128.000000"
                                 preserveAspectRatio="xMidYMid meet">
                                <g transform="translate(0.000000,128.000000) scale(0.100000,-0.100000)"
                                   fill="#000000" stroke="none">
                                    <path d="M396 1265 c-171 -44 -318 -188 -370 -364 -20 -69 -21 -190 0 -266 20
-79 97 -224 170 -321 65 -87 221 -245 283 -289 l41 -28 41 28 c62 44 218 202
283 289 73 97 150 242 170 321 21 76 20 197 0 266 -48 164 -177 298 -339 354
-69 24 -205 28 -279 10z m259 -82 c149 -48 267 -182 296 -338 35 -187 -67
-404 -301 -638 -64 -64 -123 -117 -130 -117 -19 0 -203 184 -259 258 -183 244
-224 439 -130 624 30 58 112 142 173 176 109 61 231 73 351 35z"/>
                                    <path d="M463 1080 c-139 -28 -240 -132 -262 -269 -22 -137 47 -272 174 -339
44 -24 61 -27 145 -27 84 0 101 3 145 27 214 113 239 408 47 549 -70 51 -169
75 -249 59z m138 -80 c51 -14 118 -76 145 -134 77 -166 -43 -356 -226 -356
-169 0 -287 162 -240 331 13 48 79 122 132 148 47 23 128 28 189 11z"/>
                                </g>
                            </svg>
                            آدرس:تهران، خیابان آزادی، بلوار شهید اکبری، پلاک 4، طبقه اول، واحد 1
                            <br>
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                 width="15px" height="15px" viewBox="0 0 128.000000 116.000000"
                                 preserveAspectRatio="xMidYMid meet">
                                <g transform="translate(0.000000,116.000000) scale(0.100000,-0.100000)"
                                   fill="#000000" stroke="none">
                                    <path d="M320 925 c-168 -123 -309 -231 -315 -239 -12 -19 16 -52 37 -44 7 3
143 101 302 217 158 116 292 211 296 211 4 0 138 -95 296 -211 159 -116 295
-214 302 -217 18 -6 46 23 40 40 -7 18 -623 468 -640 468 -7 -1 -150 -102
-318 -225z"/>
                                    <path d="M152 628 c-17 -17 -17 -589 0 -606 17 -17 359 -17 376 0 8 8 12 64
12 185 0 218 14 253 100 253 86 0 100 -35 100 -253 0 -121 4 -177 12 -185 17
-17 359 -17 376 0 9 9 12 90 12 304 0 254 -2 293 -16 305 -11 9 -20 10 -32 2
-15 -9 -17 -41 -20 -282 l-2 -271 -130 0 -130 0 0 143 c0 167 -10 209 -59 258
-65 65 -157 65 -222 0 -49 -49 -59 -91 -59 -258 l0 -143 -130 0 -130 0 0 268
c0 268 -3 292 -35 292 -6 0 -16 -5 -23 -12z"/>
                                </g>
                            </svg>
                            آژانس املاک محمود
                        </p>
                    </div>
                </div>
                <hr class="my-0">
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-6 col-6 px-3">
                        <p class="m-horizentalCard-moreExp mb-0 pt-2">
                            <span>دوخوابه</span>&nbsp;<span>|</span>&nbsp;
                            <span>230 متر</span>&nbsp;<span>|</span>&nbsp;
                            <span>پارکینگ اختصاصی</span>&nbsp;<span>|</span>&nbsp;
                            <span>سه ساعت پیش</span>
                        </p>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm6 col-6 pt-0">
                        <button class="btn m-btn m-btn-outline hvr-shutter-out-horizontal m-horizentalCard-btn text-center px-2 mt-1"
                                type="submit">اطلاعات بیشتر
                        </button>
                    </div>
                </div>
            </div>
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
