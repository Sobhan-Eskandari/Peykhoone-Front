@extends('layout.site')

@section('title')
آگهی خرید,فروش,رهن و اجاره خانه,ملک,آپارتمان,زمین و مستغلات|پی خونه
@endsection

@section('meta')
    <meta name="description" content="در پی خونه شما میتوانید آگهی‌های متوعی از املاک زمین آپارتمان و مستغلات را مشاهده و آگهی مورد نظرتون را به راحتی پیدا کنید.">
@endsection

@section('bg-color')
    khakestari-bg
@endsection

@section('content')

    <div class="row">
        <div class="col-12 p-0">
            <img class="img-fluid l-fullWidth" src="{{asset('images/1280_All Ads header.jpg')}}">
            <h1 class="white-text text-center m-header-title hi-fontSize-30">آگهی‌های یافت شده</h1>
            {{--ghabl az search--}}
            {{--<h1 class="white-text text-center m-header-title hi-fontSize-30">با پی خونه هدفمند ملک انتخاب کنید</h1>--}}
        </div>
    </div>

    {{------------- [ Breadcrumb Section ] ------------}}
    @include('includes.breadcrumb')

    <div class="container mb-5 mt-3 is-changedto-fluid">
        <div class="row l-rtl">
            <div class="col-12 p-0">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        {{------------- [ Filters Column ] ------------}}
                        <div class="col-lg-3 col-md-4 col-sm-8 mb-4 px-4">
                            <div class="row justify-content-center">
                                <div class="col-9 col-sm-12 m-curved-bg gradient-background-horizental pt-2 px-0">
                                    <div class="m-gradient-placeholder l-fullPage py-3">
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
                                                    <p class="hi-fontSize-13 teal-text mb-1 mt-4"><strong>قیمت (میلیون تومان)</strong></p>
                                                    <div class="m-slider-place pt-4 pb-5 px-4">
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
                                                        <div id="metraj-slider" class="noUi-target noUi-ltr noUi-horizontal"></div>
                                                    </div>

                                                    <hr>
                                                    <div class="container-fluid">
                                                        <div class="row justify-content-around">
                                                            <div class="col-12 col-xl-6 p-0 ">
                                                                <button class="m-btn m-btn-gradient white-text hi-fontSize-12 px-3 m-0 l-fullWidth mb-2">اعمال فیلتر <i class="fa fa-filter"></i> </button>
                                                            </div>
                                                            <div class="col-12 col-xl-6 p-0">
                                                                <button class="hi-button-simple grey-text hi-fontSize-12 px-2 py-2 l-fullWidth">پاک کردن فیلتر ها</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{------------- [ Ads Column ] ------------}}
                        <div class="col-lg-9 col-md-8">
                            <div class="row px-3 justify-content-center">
                                <div class="col-10 col-sm-12 m-curved-bg gradient-background rounded-8 pr-1 px-0">
                                    <div class="m-gradient-placeholder l-fullPage rounded-8 py-2">
                                        <div class="container-fluid">
                                            <div class="row justify-content-between">
                                                {{------------- [ Sorting The Cards ] ------------}}
                                                <div class="col-auto">
                                                    <div class="container-fluid pl-0">
                                                        <div class="row px-3">
                                                            <div class="col-auto align-self-center">
                                                                <p class="thin-title hi-fontSize-13 mb-0 ml-2">مرتب سازی بر اساس:</p>
                                                            </div>
                                                            <div class="col-auto Topbar_dropdown m-narrow-dropDown l-rtl">
                                                                <select class="example-getting-started" multiple="multiple">
                                                                    <option value="cheese">پیش فروش</option>
                                                                    <option value="tomatoes">اجاره</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{------------- [ Switch between view Card and List ] ------------}}
                                                <div class="col-auto">
                                                    <div class="container-fluid l-fullHeight">
                                                        <div class="row l-fullHeight px-3 align-items-center">
                                                            <div class="col-auto align-self-center">
                                                                <p class="thin-title hi-fontSize-13 mb-0 ml-2">حالت نمایش:</p>
                                                            </div>
                                                            <div class="col-auto align-self-center">
                                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                                    <button type="button" class="hi-button-btn1"><i class="fa fa-th teal-text"></i> </button>
                                                                    <button type="button" class="hi-button-btn1"><i class="fa fa-th-list grey-text"></i> </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{------------- [ Ads Cards ] ------------}}
                            <div class="row mt-3 justify-content-center">
                                <div class="col-10 col-sm-12">
                                    <div class="container-fluid p-0">
                                        <div class="row" id="row1">
                                            <div class="col-lg-4 col-sm-6 my-3 l-ltr">
                                                @component('components.card')
                                                    @slot('type')
                                                        normal
                                                    @endslot
                                                @endcomponent
                                            </div>
                                            <div class="col-lg-4 col-sm-6 my-3 l-ltr">
                                                @component('components.card')
                                                    @slot('type')
                                                        normal
                                                    @endslot
                                                @endcomponent
                                            </div>
                                            <div class="col-lg-4 col-sm-6 my-3 l-ltr is-last-card">
                                                @component('components.card')
                                                    @slot('type')
                                                        normal
                                                    @endslot
                                                @endcomponent
                                            </div>
                                        </div>
                                        <div class="row" id="row2">
                                            <div class="col-lg-4 col-sm-6 my-3 l-ltr">
                                                @component('components.card')
                                                    @slot('type')
                                                        normal
                                                    @endslot
                                                @endcomponent
                                            </div>
                                            <div class="col-lg-4 col-sm-6 my-3 l-ltr">
                                                @component('components.card')
                                                    @slot('type')
                                                        normal
                                                    @endslot
                                                @endcomponent
                                            </div>
                                            <div class="col-lg-4 col-sm-6 my-3 l-ltr">
                                                @component('components.card')
                                                    @slot('type')
                                                        normal
                                                    @endslot
                                                @endcomponent
                                            </div>
                                        </div>
                                        <div class="row" id="row3">
                                            <div class="col-lg-4 col-sm-6 my-3 l-ltr">
                                                @component('components.card')
                                                    @slot('type')
                                                        normal
                                                    @endslot
                                                @endcomponent
                                            </div>
                                            <div class="col-lg-4 col-sm-6 my-3 l-ltr">
                                                @component('components.card')
                                                    @slot('type')
                                                        normal
                                                    @endslot
                                                @endcomponent
                                            </div>
                                            <div class="col-lg-4 col-sm-6 my-3 l-ltr is-last-card">
                                                @component('components.card')
                                                    @slot('type')
                                                        normal
                                                    @endslot
                                                @endcomponent
                                            </div>
                                        </div>
                                        <div class="row" id="row4">
                                            <div class="col-lg-4 col-sm-6 my-3 l-ltr">
                                                @component('components.card')
                                                    @slot('type')
                                                        normal
                                                    @endslot
                                                @endcomponent
                                            </div>
                                            <div class="col-lg-4 col-sm-6 my-3 l-ltr">
                                                @component('components.card')
                                                    @slot('type')
                                                        normal
                                                    @endslot
                                                @endcomponent
                                            </div>
                                            <div class="col-lg-4 col-sm-6 my-2 l-ltr">
                                                @component('components.card')
                                                    @slot('type')
                                                        normal
                                                    @endslot
                                                @endcomponent
                                            </div>
                                        </div>
                                        {{------------- [ Horizental Cards ] ------------}}
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="m-horizentalCard-box px-3 pt-2 pb-1">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-12 col-sm-12 col-12">

                                                            <img src="{{ asset('images/home-image.jpg') }}" alt="در حال بارگذاری"
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
                                                                قیمت: سیصد و پنجاه میلیون تومان
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
                                </div>
                            </div>

                            {{------------- [ Pagination ] ------------}}
                            <div class="row mt-5 justify-content-center l-ltr">
                                <div class="col-auto p-0">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <a class="page-link m-pagination-angleLink" href="#" aria-label="Previous">
                                                    <span aria-hidden="true" class="m-pagination-angle">&#xf104;</span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link m-pagination-num" href="#">۱</a></li>
                                            <li class="page-item"><a class="page-link m-pagination-num" href="#">۲</a></li>
                                            <li class="page-item"><a class="page-link m-pagination-num" href="#">۳</a></li>
                                            <li class="page-item"><a class="page-link m-pagination-num" href="#">۴</a></li>
                                            <li class="page-item"><a class="page-link m-pagination-num" href="#">...</a></li>
                                            <li class="page-item"><a class="page-link m-pagination-num" href="#">۵</a></li>
                                            <li class="page-item">
                                                <a class="page-link m-pagination-angleLink" href="#" aria-label="Next">
                                                    <span aria-hidden="true" class="m-pagination-angle">&#xf105;</span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{------------- [ Contactus Banner Section ] ------------}}
    @include('includes.contact-banner')

@endsection

