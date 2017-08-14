@extends('layout.site')

@section('content')

    {{----------------- [ Header of Website ] ----------------}}
    <Header class="container-fluid">
        <div class="row">
            <div class="col-12 p-0" id="Header">
                <img class="img-fluid" src="{{asset('images/header.jpg')}}" alt="عکسی از رشت">
                <h1 class="header-mainTitle l-absolute">محلی برای مشاهده املاک و مستغلات</h1>
                <h2 class="header-subTitle l-absolute mt-sm-3 mt-md-3 mt-lg-0">جامع ترین وبسایت املاک رشت و دیگر شهرهای گیلان</h2>
                <p class="header-arrow text-center l-absolute hi-fontSize-13 mt-md-3"><i class="fa fa-chevron-down fa-3x white-text"></i></p>
            </div>
        </div>
        {{----------------- [ Main Big Filter ] ----------------}}
        <div class="container-fluid main-filter">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-8 col-md-11 col-sm-12 col-12 m-curved-bg gradient-background px-0" id="filters-row">
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
    </Header>

    {{----------------- [ Digital Marketing Section ] ----------------}}
    {{--<section class="l-digital-painting-section">--}}
        {{--<div class="container">--}}
            {{--<div class="row justify-content-center">--}}
                {{--<div class="col-5">--}}
                    {{--<img class="img-fluid" src="{{asset('images/digital-painting-lg.png')}}" alt="تصویر توضیحات پی خونه">--}}
                    {{--<h3 class="digitalPainting-title black-text-color hi-fontSize-23 text-center">خانه رویایی خود را در پی خونه بیابید</h3>--}}
                    {{--<h3 class="thin-title grey-text hi-fontSize-16 text-center mt-3">پی خونه ؛ سامانه ای مطابق با بروزترین فناوری‌های جهان</h3>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row justify-content-center">--}}
                {{--<div class="col-1">--}}
                    {{--<img class="painting-comma turnUpsideDown secondComma" src="{{asset('images/comma.png')}}">--}}
                {{--</div>--}}
                {{--<div class="col-6">--}}
                    {{--<h4 class="paragraph-lineHeight medium-title hi-fontSize-15 text-center mt-3">پی خونه سامانه ای برای خرید، اجاره خانه و ارائه اطلاعات ملکی در رشت است که با هدف افزایش اعتماد در خرید و اجاره ملک در رشت، بستر ارتباطی ایمن متقاضیان ملک و مشاوران املاک قابل اعتماد و حرفه ای در تمامی محله های رشت را توسعه داده است.</h4>--}}
                {{--</div>--}}
                {{--<div class="col-1">--}}
                    {{--<img class="painting-comma" src="{{asset('images/comma.png')}}">--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row justify-content-center mt-3">--}}
                {{--<div class="col-auto">--}}
                    {{--<div class="m-btn-gradientOutline gradient-background rounded">--}}
                        {{--<button class="white rounded l-fullWidth" id="hi">--}}
                            {{--<p class="gradient-text mb-0"><i class="fa fa-chevron-down gradient-text mr-2"></i>پی خونه رو تجربه کنید </p>--}}
                        {{--</button>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}


@endsection