@extends('layout.site')
@section('content')
    <!--header img-->
    <div class="row mt-0 header-text-box">
        <img src="{{ asset('images/header3.jpg') }}"
             alt="در حال بارگذاری" height="300px"
             width="100%" class="header-z-index">
        <h3 class="header-caption text-center">تماس با پی خونه</h3>
    </div>
    <!--breadcrumb-->
    <div class="container l-rtl pt-5">
        <div class="row justify-content-center">
            <div class="col-12 px-0">
                <ol class="breadcrumb m-breadcrumb">
                    <li class="breadcrumb-item m-breadcrumb-item"><a href="#">خانه</a></li>
                    <li class="breadcrumb-item m-breadcrumb-item"><a href="#">تماس با پی خونه</a></li>
                    <li class="breadcrumb-item m-breadcrumb-item">-</li>
                </ol>
            </div>
        </div>
    </div>
    <!--img with text-->
    <br>
    <div class="container">
        <div class="row">
            <div class="m-profileBox-sublayer mx-0">
                <div class="row">
                    <div class="m-profileBox-upperLayer mr-4 l-rtl p-4">
                        <div class="row justify-content-around">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12 py-5">
                                <p class="contact-extra-exp">"
                                    پی خونه آماده پاسخ گویی به سوالات و شنیدن پیشنهادات و انتقادات شماست
                                    "<br>
                                    چنانچه مشاور املاک هستید و قصد استفاده از خدمات پی خونه را دارید؛
                                    متقاضی ملک هستید و پیشنهاد و یا انتقادی دارید؛
                                    صاحب ملک هستید و قصد اجاره و یا فروش ملک خود را دارید؛
                                    لطفا با ما تماس بگیرید
                                    همکاران ما به صورت تمام وقت منتظر پاسخ گویی به شما هستند پی خونه منتظر انتقادات و
                                    پیشنهادادت شماست.</p>
                            </div>
                            <div class="col-lg-5 col-md-6 col-sm-12 col-12 px-5">
                                <img src="{{ asset('images/apartment.png') }}"
                                     alt="در حال بارگذاری" height="330px"
                                     width="100%" class="mx-auto d-block">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--title-->
    <br><br>
    <div class="row">
        <div class="col-12">
            <h4 class="text-center hi-fontSize-17">راه های ارتباط با ما</h4>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="contact-simpleBox px-5 pt-5 pb-5 l-rtl">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12 px-5">
                        <div class="contactIcon-scopes hi-icon-effect-9 hi-icon-effect-9b mx-auto d-block">
                            <a href="" class="hi-icon hi-icon-blue">
                                <img src="{{ asset('images/call.png') }}" alt="در حال بارگذاری"
                                     height="32px" width="32px" class="mx-auto d-block">
                            </a>
                        </div>
                        <h5 class="text-center pt-3 hi-fontSize-14">خط ویژه</h5>
                        <h6 class="text-center contactWay-title">۴۵۶ ۶۷۸۹ ۰۹۳۳ </h6>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12 px-5">
                        <div class="contactIcon-scopes hi-icon-effect-9 hi-icon-effect-9b mx-auto d-block">
                            <a href="" class="hi-icon hi-icon-yellow">
                                <img src="{{ asset('images/email.png') }}" alt="در حال بارگذاری"
                                     height="30px" width="40px" class="mx-auto d-block">
                            </a>
                        </div>
                        <h5 class="text-center pt-3 hi-fontSize-14">ایمیل</h5>
                        <h6 class="text-center contactWay-title">info@alounak.com</h6>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12 px-5">
                        <div class="contactIcon-scopes hi-icon-effect-9 hi-icon-effect-9b mx-auto d-block">
                            <a href="" class="hi-icon hi-icon-lightBlue">
                                <img src="{{ asset('images/telegram-icon.png') }}" alt="در حال بارگذاری"
                                     height="32px" width="35px" class="mx-auto d-block">
                            </a>
                        </div>
                        <h5 class="text-center pt-3 hi-fontSize-14">تلگرام</h5>
                        <h6 class="text-center contactWay-title">@peykhoone</h6>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12 px-5">
                        <div class="contactIcon-scopes hi-icon-effect-9 hi-icon-effect-9b mx-auto d-block">
                            <a href="" class="hi-icon hi-icon-purple">
                                <img src="{{ asset('images/instagram-icon.png') }}" alt="در حال بارگذاری"
                                     height="35px" width="35px" class="mx-auto d-block">
                            </a>
                        </div>
                        <h5 class="text-center pt-3 hi-fontSize-14">اینستاگرام</h5>
                        <h6 class="text-center contactWay-title">@peykhoone</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
    <div class="row">
        <div class="col-12">
            <h4 class="text-center hi-fontSize-18">با پی خونه در تماس باشید</h4>
        </div>
    </div>
    <br>
    <!--form-group-->
    <div class="container">
        <div class="row">
            <div class="contact-simpleBox l-rtl p-5">
                <div class="row justify-content-center">
                    <div class="col-8">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-12 px-4">
                                <div class="form-group">
                                    <label class="hi-fontSize-11 form-control-label" for="name">نام و نام
                                        خانوادگی</label>
                                    <input class="m-field form-control" id="name" aria-describedby="name"
                                           placeholder="نام خود را وارد کنید" tabindex="1">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-12 px-4">
                                <div class="form-group">
                                    <label class="hi-fontSize-11 form-control-label" for="email">ایمیل</label>
                                    <input class="m-field form-control" id="email" aria-describedby="name"
                                           placeholder="ایمیل خود را وارد کنید" tabindex="2">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 px-4">
                                <div class="form-group">
                                    <label class="hi-fontSize-11 form-control-label" for="message">پیام شما</label>
                                    <textarea class="m-field form-control" id="message" aria-describedby="name"
                                              placeholder="پیام خود را وارد کنید" tabindex="3" rows="7"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 px-4">
                                <button class="m-btn ocean px-3 pull-left mt-3">ارسال پیام</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br>


@endsection
@section('contact')
    @include('includes.contact-banner')
@endsection