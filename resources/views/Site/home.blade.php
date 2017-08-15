@extends('layout.site')

@section('title')
    پی خونه | سامانه آگهی خرید و فروش خونه , ملک , آپارتمان , زمین و مستغلات در گیلان
@endsection

@section('meta')
    <meta name="description" content="A page's description, usually one or two sentences."/>
@endsection

@section('content')

    {{----------------- [ Header of Website ] ----------------}}
    <Header class="container-fluid" id="topOfSite">
        <div class="row">
            <div class="col-12 p-0" id="Header">
                <img class="img-fluid l-fullWidth" src="{{asset('images/header3.jpg')}}" alt="عکسی از رشت">
                <h1 class="header-mainTitle l-absolute">محلی برای مشاهده املاک و مستغلات</h1>
                <h2 class="header-subTitle l-absolute mt-sm-3 mt-md-3 mt-lg-0">جامع ترین وبسایت املاک رشت و دیگر شهرهای گیلان</h2>
                <p class="header-arrow text-center l-absolute hi-fontSize-13 mt-md-3"><i class="fa fa-chevron-down fa-3x white-text"></i></p>
            </div>
        </div>
    </Header>

    {{----------------- [ Main Big Filter ] ----------------}}
    <div class="container-fluid main-filter">
        <form>
            <div class="row justify-content-center">
                {{----------------- [ Filters Section ] ----------------}}
                <div class="col-lg-10 col-xl-8 col-md-11 col-sm-12 col-10 m-curved-bg gradient-background px-0" id="filters-row">
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

            {{----------------- [ Filters Options Row ] ----------------}}
            <div class="row justify-content-center"  id="filters-tray" style="margin-top: -124px">
                <div class="col-lg-10 col-xl-8 col-md-11 col-sm-12 col-11 m-curved-bg gray px-0" id="filters-tray-row">
                    <div class="m-filters-placeholder gray">
                        <div class="container-fluid l-fullHeight">

                            {{----------------- [ Noe Moamele Filter ] ----------------}}
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

                            {{----------------- [ Noe Melk Filter ] ----------------}}
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

                            {{----------------- [ Tedade Khab Filter ] ----------------}}
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

                {{----------------- [ Costs Filter Slider ] ----------------}}
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

                {{----------------- [ Metraj Filter Slider ] ----------------}}
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
        </form>
    </div>

    {{----------------- [ Digital Painting Section ] ----------------}}
    <section class="l-digital-painting-section">
        <div class="container">
            {{----------------- [ About Peykhoone image and title ] ----------------}}
            <div class="row justify-content-center">
                <div class="col-sm-9 col-lg-6 col-xl-5">
                    <img class="img-fluid" src="{{asset('images/digital-painting-lg.png')}}" alt="تصویر توضیحات پی خونه">
                    <h3 class="digitalPainting-title black-text-color hi-fontSize-23 text-center">خانه رویایی خود را در پی خونه بیابید</h3>
                    <h3 class="thin-title grey-text hi-fontSize-16 text-center mt-3">پی خونه ؛ سامانه ای مطابق با بروزترین فناوری‌های جهان</h3>
                </div>
            </div>
            {{----------------- [ About Peykhoone TExt ] ----------------}}
            <div class="row justify-content-center">
                <div class="col-2 col-sm-1">
                    <img  class="painting-comma turnUpsideDown secondComma" src="{{asset('images/comma.png')}}">
                </div>
                <div class="col-8 col-sm-10 col-lg-7 col-xl-6">
                    <h4 class="paragraph-lineHeight medium-title hi-fontSize-15 text-center mt-3">پی خونه سامانه ای برای خرید، اجاره خانه و ارائه اطلاعات ملکی در رشت است که با هدف افزایش اعتماد در خرید و اجاره ملک در رشت، بستر ارتباطی ایمن متقاضیان ملک و مشاوران املاک قابل اعتماد و حرفه ای در تمامی محله های رشت را توسعه داده است.</h4>
                </div>
                <div class="col-2 col-sm-1">
                    <img alt="درباره پی خونه" class="painting-comma" src="{{asset('images/comma.png')}}">
                </div>
            </div>
            {{----------------- [ Move to App download section ] ----------------}}
            <div class="row justify-content-center mt-3">
                <div class="col-auto">
                    <div class="m-btn-gradientOutline gradient-background rounded">
                        <button class="white rounded l-fullWidth" id="tajrobePeykhoone">
                            <a class="gradient-text mb-0" data-scroll href="#appSection"><i class="fa fa-chevron-down gradient-text mr-2"></i>پی خونه رو تجربه کنید </a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{----------------- [ Last Ads section ] ----------------}}
    <section class="l-lastAds-Secton">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-10 col-sm-12 text-right">
                    <h2 class="gradient-borderBottom hi-fontSize-25 pb-3">آخرین آگهی‌ها</h2>
                    {{------------- [ Row of Ads Card ] ------------}}
                    <div class="row mt-3">
                        @for($i = 0; $i < 4; $i++)
                        <div class="col-12 col-md-6 col-lg-3 my-3">
                            @component('components.card')@endcomponent
                        </div>
                        @endfor
                    </div>
                    {{------------- [ Row of Ads Card ] ------------}}
                    <div class="row mt-3">
                        @for($i = 0; $i < 4; $i++)
                            <div class="col-12 col-md-6 col-lg-3 my-3">
                               @component('components.card')@endcomponent
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
            {{------------- [ Show more home ] ------------}}
            <div class="row justify-content-center mt-4">
                <div class="col-auto">
                    <a href="#"><button class="m-btn m-btn-gradient">مشاهده بیشتر</button></a>
                </div>
            </div>
        </div>
    </section>

    {{------------- [ Download Peykhoone App Section ] ------------}}
    <section class="l-appDownload" id="appSection">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-xl-5 col-md-8">
                    {{------------- [  Peykhoone App Image ] ------------}}
                    <img class="img-fluid" src="{{asset('images/mobile.png')}}">
                </div>
                <div class="col-lg-7 col-xl-7 col-md-11">
                    {{------------- [ About Peykhoone App ] ------------}}
                    <h2 class="text-right mt-5 hi-lineHeight-45">همین حالا اپلیکیشن پی خونه را دانلود کنید</h2>
                    <p class="hi-lineHeight-40 medium-title text-right hi-fontSize-22 mt-5">به سادگی می توانید اپلیکیشن پی خونه را روی تلفن همراه خود تجربه نمایید. برای این کار می توانید اپلیکیشن پی خونه را از مارکت‌های معتبر ایرانی و بین المللی ( گوگل پلی استور - اپل اپ استور - کافه بازار ) دریافت نمایید. خوشحال می‌شویم با نظرات و پیشنهادات خود و اعطای امتیاز به اپلیکیشن پی خونه در مارکت‌ها، ما را در بهبود و توسعه پی خونه همراهی نمایید.</p>
                    {{------------- [ Download Peykhoone App Links ] ------------}}
                    <div class="row justify-content-end">
                        <div class="col-md-6 col-md-5 col-xl-4">
                            <a href="www.google.com"><button class="m-btn m-btn-appdl warm-grey mb-3 mb-md-0"><i class="fa fa-apple hi-fontSize-22 mr-2"></i> دریافت از اپل استور </button></a>
                        </div>
                        <div class="col-md-6 col-md-5 col-xl-4">
                            <a href="www.google.com"><button class="m-btn m-btn-appdl green lighten-2"><i class="fa hi-fontSize-22 fa-android mr-2"></i> دریافت با لینک مستقیم </button></a>
                        </div>
                    </div>
                    <div class="row justify-content-end mt-4">
                        <div class="col-md-6 col-md-5 col-xl-4">
                            <a href="www.google.com">
                                <div class="m-btn m-btn-appdl purple darken-1 mb-3 mb-md-0 l-flex-center">
                                    <div class="googleplay-icon"></div>  دریافت از گوگل پلی
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-md-5 col-xl-4">
                            <a href="www.google.com">
                                <div class="m-btn m-btn-appdl blue lighten-2 mb-3 mb-md-0 l-flex-center">
                                    <div class="bazar-icon"></div>  دریافت از بازار
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{------------- [ Azhanshaie Hamkar Section ] ------------}}
    <section class="l-azhanseHamkar my-3">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-10 col-sm-12 text-right">
                    <h2 class="gradient-borderBottom hi-fontSize-25 pb-3">آژانس های همکار ما</h2>

                    {{------------- [ Carousel Azhansaie Hamkar ] ------------}}
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-10">
                            <!-- Flickity HTML init -->
                            <div class="carousel mt-5" data-flickity>
                                @for($j = 0; $j < 3; $j++)
                                    <div class="m-carousel-cell">
                                        @for($i = 0; $i < 3; $i++)
                                            <div class="row mb-3">
                                            <div class="col-4 col-md-2 mb-4">
                                                <img alt="مشاوراملاک ۱" src="{{asset('images/partners/partner1.png')}}">
                                            </div>
                                            <div class="col-4 col-md-2">
                                                <img alt="مشاوراملاک ۲" src="{{asset('images/partners/partner2.png')}}">
                                            </div>
                                            <div class="col-4 col-md-2 mb-4">
                                                <img alt="مشاوراملاک ۳" src="{{asset('images/partners/partner3.png')}}">
                                            </div>
                                            <div class="col-4 col-md-2">
                                                <img alt="مشاوراملاک ۴" src="{{asset('images/partners/partner4.png')}}">
                                            </div>
                                            <div class="col-4 col-md-2 mb-4">
                                                <img alt="مشاوراملاک ۵" src="{{asset('images/partners/partner5.png')}}">
                                            </div>
                                            <div class="col-4 col-md-2">
                                                <img alt="مشاوراملاک ۶" src="{{asset('images/partners/partner6.png')}}">
                                            </div>
                                        </div>
                                        @endfor
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{------------- [ Contactus Banner Section ] ------------}}
    @include('includes.contact-banner')

@endsection

@section('js_resources')
    <script type="application/ld+json">
        {
          "@context": "http://schema.org",
          "@type": "Organization",
          "name": "پی خونه",
          "url": "http://www.peykhoone.ir",
          "logo": "http://www.example.com/images/logo.png",
          "sameAs": [
            "http://www.facebook.com/your-profile",
            "http://instagram.com/yourProfile",
            "http://www.linkedin.com/in/yourprofile",
            "http://plus.google.com/your_profile"
          ],
          "contactPoint": [{
            "@type": "ContactPoint",
            "telephone": "+989334440677",
            "contactType": "ارتباط با مشتریان"
          },{
            "@type": "ContactPoint",
            "telephone": "+989334440677",
            "contactType": "ارتباط با مشتریان"
          }]
        },
        {
          "@type": "WebSite",
          "name": "پی خونه",
          "alternateName": "Peykhoone",
          "url": "http://www.peykhoone.com"
        }

</script>
@endsection
