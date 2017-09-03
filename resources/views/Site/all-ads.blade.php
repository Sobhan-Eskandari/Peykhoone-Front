@extends('layout.site')

@section('title')
    آگهی خرید,فروش,رهن و اجاره خانه,ملک,آپارتمان,زمین و مستغلات|پی خونه
@endsection

@section('meta')
    <meta name="description"
          content="در پی خونه شما میتوانید آگهی‌های متوعی از املاک زمین آپارتمان و مستغلات را مشاهده و آگهی مورد نظرتون را به راحتی پیدا کنید.">
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
                                                    <p class="hi-fontSize-13 teal-text mb-1 mt-1"><strong>نوع
                                                            معامله</strong></p>
                                                    <select class="example-getting-started" multiple="multiple">
                                                        <option value="cheese">پیش فروش</option>
                                                        <option value="tomatoes">اجاره</option>
                                                    </select>

                                                    <p class="hi-fontSize-13 teal-text mb-1 mt-4"><strong>نوع
                                                            ملک</strong></p>
                                                    <select class="example-getting-started" multiple="multiple">
                                                        <option value="cheese">پیش فروش</option>
                                                        <option value="tomatoes">اجاره</option>
                                                    </select>

                                                    <p class="hi-fontSize-13 teal-text mb-1 mt-4"><strong>تعداد اتاق
                                                            خواب</strong></p>
                                                    <select class="example-getting-started" multiple="multiple">
                                                        <option value="cheese">پیش فروش</option>
                                                        <option value="tomatoes">اجاره</option>
                                                    </select>

                                                    <p class="hi-fontSize-13 teal-text mb-1 mt-4">
                                                        <strong>امکانات</strong></p>
                                                    <select class="example-getting-started" multiple="multiple">
                                                        <option value="cheese">پیش فروش</option>
                                                        <option value="tomatoes">اجاره</option>
                                                    </select>

                                                    <hr>
                                                    <p class="hi-fontSize-13 teal-text mb-1 mt-4"><strong>قیمت (میلیون
                                                            تومان)</strong></p>
                                                    <div class="m-slider-place pt-4 pb-5 px-4">
                                                        <div id="slider-step"
                                                             class="noUi-target noUi-ltr noUi-horizontal"></div>
                                                    </div>

                                                    <hr>
                                                    <p class="hi-fontSize-13 teal-text mb-1 mt-4"><strong>سن
                                                            بنا</strong></p>
                                                    <div class="m-slider-place pt-4 pb-5 px-4">
                                                        <div id="senebana-slider"
                                                             class="noUi-target noUi-ltr noUi-horizontal"></div>
                                                    </div>

                                                    <hr>
                                                    <p class="hi-fontSize-13 teal-text mb-1 mt-4"><strong>متراژ</strong>
                                                    </p>
                                                    <div class="m-slider-place pt-4 pb-5 px-4">
                                                        <div id="metraj-slider"
                                                             class="noUi-target noUi-ltr noUi-horizontal"></div>
                                                    </div>

                                                    <hr>
                                                    <div class="container-fluid">
                                                        <div class="row justify-content-around">
                                                            <div class="col-12 col-xl-6 p-0 ">
                                                                <button class="m-btn m-btn-gradient white-text hi-fontSize-12 px-3 m-0 l-fullWidth mb-2">
                                                                    اعمال فیلتر <i class="fa fa-filter"></i></button>
                                                            </div>
                                                            <div class="col-12 col-xl-6 p-0">
                                                                <button class="hi-button-simple grey-text hi-fontSize-12 px-2 py-2 l-fullWidth">
                                                                    پاک کردن فیلتر ها
                                                                </button>
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
                                                                <p class="thin-title hi-fontSize-13 mb-0 ml-2">مرتب سازی
                                                                    بر اساس:</p>
                                                            </div>
                                                            <div class="col-auto Topbar_dropdown m-narrow-dropDown l-rtl">
                                                                <select class="example-getting-started"
                                                                        multiple="multiple">
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
                                                                <p class="thin-title hi-fontSize-13 mb-0 ml-2">حالت
                                                                    نمایش:</p>
                                                            </div>
                                                            <div class="col-auto align-self-center">
                                                                <div class="btn-group" role="group"
                                                                     aria-label="Basic example">
                                                                    <button type="button" class="hi-button-btn1"><i
                                                                                class="fa fa-th teal-text"></i></button>
                                                                    <button type="button" class="hi-button-btn1"><i
                                                                                class="fa fa-th-list grey-text"></i>
                                                                    </button>
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
                                                <a href="#" class="m-horizental-card-hover">
                                                    <div class="m-horizentalCard-box px-3 pt-2 pb-1 m-card">
                                                        <div class="row">
                                                            <div class="col-lg-2 col-md-12 col-sm-12 col-12 pt-2">

                                                                <img src="{{ asset('images/home-image.jpg') }}"
                                                                     alt="در حال بارگذاری"
                                                                     class="m-horizentalCard-img" height="100px"
                                                                     width="100px">
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
                                                                            <li class="list-inline-item"><h6
                                                                                        class="icon-bed hi-fontSize-14"></h6>
                                                                            </li>
                                                                            <li class="list-inline-item"><h6
                                                                                        class="hi-fontSize-12  m-horizentalCard-moreExp">
                                                                                    2 خوابه</h6></li>
                                                                        </ul>
                                                                    </li>
                                                                    |
                                                                    <li class="list-inline-item">
                                                                        <ul class="list-inline">
                                                                            <li class="list-inline-item"><h6
                                                                                        class="icon-tape-measure hi-fontSize-14"></h6>
                                                                            </li>
                                                                            <li class="list-inline-item"><h6
                                                                                        class="hi-fontSize-12 m-horizentalCard-moreExp">
                                                                                    230 متر</h6></li>
                                                                        </ul>
                                                                    </li>
                                                                    |
                                                                    <li class="list-inline-item">
                                                                        <ul class="list-inline">
                                                                            <li class="list-inline-item"><h6
                                                                                        class="icon-parking hi-fontSize-14"></h6>
                                                                            </li>
                                                                            <li class="list-inline-item"><h6
                                                                                        class="hi-fontSize-12 m-horizentalCard-moreExp">
                                                                                    پارکینگ اختصاصی</h6>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    |
                                                                    <li class="list-inline-item">
                                                                        <ul class="list-inline">
                                                                            <li class="list-inline-item"><h6
                                                                                        class="icon-time hi-fontSize-14"></h6>
                                                                            </li>
                                                                            <li class="list-inline-item"><h6
                                                                                        class="hi-fontSize-12 m-horizentalCard-moreExp">
                                                                                    3 ساعت پیش</h6></li>
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
                                </div>
                            </div>

                            {{------------- [ Pagination ] ------------}}
                            <div class="row mt-5 justify-content-center l-ltr">
                                <div class="col-auto p-0">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <a class="page-link m-pagination-angleLink" href="#"
                                                   aria-label="Previous">
                                                    <span aria-hidden="true" class="m-pagination-angle">&#xf104;</span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link m-pagination-num" href="#">۱</a>
                                            </li>
                                            <li class="page-item"><a class="page-link m-pagination-num" href="#">۲</a>
                                            </li>
                                            <li class="page-item"><a class="page-link m-pagination-num" href="#">۳</a>
                                            </li>
                                            <li class="page-item"><a class="page-link m-pagination-num" href="#">۴</a>
                                            </li>
                                            <li class="page-item"><a class="page-link m-pagination-num" href="#">...</a>
                                            </li>
                                            <li class="page-item"><a class="page-link m-pagination-num" href="#">۵</a>
                                            </li>
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

