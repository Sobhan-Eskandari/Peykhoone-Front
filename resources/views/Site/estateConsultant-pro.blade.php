@extends('layout.site')
@section('content')
    <!--header img-->
    <div class="row mt-0">
        <img src="{{ asset('images/header3.jpg') }}"
             alt="در حال بارگذاری" height="500px"
             width="100%" class="header-z-index">
    </div>
    <!--breadcrumb-->
    <div class="container l-rtl mt-4">
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
    <!--estate logo-->
    <div class="row justify-content-center">
        <div class="m-rounded-scope py-4  px-2">
            <img src="{{ asset('images/partners/partner5.png') }}"
                 alt="در حال بارگذاری" height="100px"
                 width="130px" class="d-block mx-auto m-rounded-stateImg">
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h6 class="text-center py-3">آژانس املاک محمود</h6>
        </div>
    </div>
    <!--estate info-->
    <div class="container l-rtl">
        <div class="row">
            <div class="m-profileBox-sublayer mx-4">
                <div class="row">
                    <div class="m-profileBox-upperLayer mr-4">
                        <div class="row m-realState-info">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-12 px-5 py-4">
                                <div class="row">
                                    <div class="col-1">
                                        <div class="m-icon-scoop pt-2">
                                            <img src="{{ asset('images/location1.png') }}"
                                                 alt="در حال بارگذاری" height="18px"
                                                 width="15px" class="mx-auto d-block">
                                        </div>
                                    </div>
                                    <div class="col-11 pt-1">
                                        <h6 class="m-realState-detailInfo">&nbsp;آدرس : تهران ،خیابان میرداماد،بازار
                                            کیش</h6>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-1">
                                        <div class="m-icon-scoop pt-2">
                                            <img src="{{ asset('images/svg/person1.svg') }}"
                                                 alt="در حال بارگذاری" height="18px"
                                                 width="15px" class="mx-auto d-block">
                                        </div>
                                    </div>
                                    <div class="col-11 pt-1">
                                        <h6 class="m-realState-detailInfo">&nbsp;مدیر آژانس: بیژن رضازاده</h6>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-1">
                                        <div class="m-icon-scoop pt-2">
                                            <img src="{{ asset('images/svg/hammer.svg') }}"
                                                 alt="در حال بارگذاری" height="18px"
                                                 width="15px" class="mx-auto d-block">
                                        </div>
                                    </div>
                                    <div class="col-11 pt-1">
                                        <h6 class="m-realState-detailInfo">&nbsp;سال تاسیس : ۱۳۸۷</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-12 px-5 py-4">
                                <div class="row">
                                    <div class="col-1">
                                        <div class="m-icon-scoop pt-2">
                                            <img src="{{ asset('images/svg/tel.svg') }}"
                                                 alt="در حال بارگذاری" height="18px"
                                                 width="15px" class="mx-auto d-block">
                                        </div>
                                    </div>
                                    <div class="col-11 pt-1">
                                        <h6 class="m-realState-detailInfo">&nbsp;شماره تماس : ۰۹۳۳۸۹۰۷۶۸۵</h6>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-1">
                                        <div class="m-icon-scoop pt-2">
                                            <img src="{{ asset('images/svg/person2.svg') }}"
                                                 alt="در حال بارگذاری" height="18px"
                                                 width="15px" class="mx-auto d-block">
                                        </div>
                                    </div>
                                    <div class="col-11 pt-1">
                                        <h6 class="m-realState-detailInfo">&nbsp;مشاوران آژانس : امیر حسینی - رضا فدایی
                                            - امیر جدیدی</h6>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-1">
                                        <div class="m-icon-scoop pt-2">
                                            <img src="{{ asset('images/svg/letter.svg') }}"
                                                 alt="در حال بارگذاری" height="18px"
                                                 width="15px" class="mx-auto d-block">
                                        </div>
                                    </div>
                                    <div class="col-11 pt-1">
                                        <h6 class="m-realState-detailInfo">&nbsp;ایمیل : Mahmood.mousavi@com</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--map-->
    <br><br>
    <div class="container l-rtl">
        <div class="row px-4">
            <div class="col-12 m-profileBox-upperLayer map-box" style="height: 200px;">
                <div class="row py-3 px-4">
                    <h6 class="m-estatePro-mapTitle">
                        <img src="{{ asset('images/map-nav.png') }}"
                             alt="در حال بارگذاری" height="19px"
                             width="19px">
                        موقعیت بر روی نقشه</h6>
                </div>
                <div class="row" style="height: 50px;">
                    <!--map-->
                </div>
            </div>
        </div>
    </div>
    <!--estate-->
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h5 class="text-center estatePro-cards-title">ملک های این آژانس</h5>
            </div>
        </div>
        <!--property category-->
        <br>
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                <div class="estate-category-box">
                    <ul class="estate-category">
                        <li class="estate-category-item"><a href="#" class="estate-category-link categoryItem-is-active">آپارتمان مسکونی</a></li>
                        <li class="estate-category-item"><a href="#" class="estate-category-link">آپارتمان اداری</a></li>
                        <li class="estate-category-item"><a href="#" class="estate-category-link">مستغلات</a></li>
                        <li class="estate-category-item"><a href="#" class="estate-category-link">کلنگی</a></li>
                        <li class="estate-category-item"><a href="#" class="estate-category-link">زمین</a></li>
                        <li class="estate-category-item"><a href="#" class="estate-category-link">تجاری</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <br>
    <!--Infinity Scrolling-->
    <div class="row px-5 infinity-scrolling-box">
        <div class="col-12 px-5 pt-5">
            <div class="row">
                @for ($i = 0; $i < 4; $i++)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 p-3">
                        @component('components.card') @endcomponent
                    </div>
                @endfor
            </div>
            <div class="row">
                @for ($i = 0; $i < 4; $i++)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 p-3">
                        @component('components.card') @endcomponent
                    </div>
                @endfor
            </div>
            <div class="row">
                @for ($i = 0; $i < 4; $i++)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 p-3">
                        @component('components.card') @endcomponent
                    </div>
                @endfor
            </div>
            <div class="row">
                @for ($i = 0; $i < 4; $i++)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 p-3">
                        @component('components.card') @endcomponent
                    </div>
                @endfor
            </div>
        </div>
    </div>



    <img src="{{ asset('images/') }}"
         alt="در حال بارگذاری" width="100%">
    <script>

    </script>
@endsection