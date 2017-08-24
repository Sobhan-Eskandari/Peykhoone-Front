@extends('layout.site')

@section('title')
    ملک مسکونی یوسف آباد , آژانس املاک مشاور املاک محمود | پی خونه
@endsection

@section('meta')
    <meta name="description" content="پی خونه دارای ۹ عکس از این آگهی با ارزش ۱۲۵ میلیون تومان و به مساحت ۱۲۰ متر واقع در خیابان لاکانی میباشد">
    <meta name="referrer" content="always">
@endsection

@section('bg-color')
    khakestari-bg
@endsection

@section('content')

    {{------------- [ Breadcrumb ] ------------}}
    <div class="container l-rtl pt-5 mt-5" id="is-navigated-homeInfo">
        <div class="row justify-content-center mt-3">
            <div class="col-12 px-0">
                <ol class="breadcrumb m-breadcrumb">
                    <li class="breadcrumb-item m-breadcrumb-item"><a href="#">خانه</a></li>
                    <li class="breadcrumb-item m-breadcrumb-item"><a href="#">تماس با پی خونه</a></li>
                    <li class="breadcrumb-item m-breadcrumb-item">-</li>
                </ol>
            </div>
        </div>
    </div>

    <section class="l-home-info" id="homeInfo">
        <div class="container-fluid">
            <div class="row l-rtl mt-3 is-justified-center">
                {{------------- [ Right Scroll Navigator ] ------------}}
                <div class="col-lg-1 col-xl-1 hidden-md-down" id="l-navigator">
                    <div class="m-card rounded-10 text-center">
                        <a id="navigate-to-homeInfo" data-scroll href="#is-navigated-homeInfo"><i class="icon-home hi-fontSize-20 py-2 l-fullWidth l-flex-center"></i></a>
                        <hr class="my-1">
                        <a id="navigate-to-moshakhast" data-scroll href="#is-navigated-moshakhasate-melk"><i class="icon-checked-list hi-fontSize-20 py-2 l-flex-center l-fullWidth"></i></a>
                        <hr class="my-1">
                        <a id="navigate-to-emkanat" data-scroll href="#is-navigated-emkanate-melk"><i class="icon-checked-list hi-fontSize-20 py-2 l-flex-center l-fullWidth"></i></a>
                        <hr class="my-1">
                        <a id="navigate-to-map" data-scroll href="#is-navigated-google-map"><i class="icon-placeholder hi-fontSize-20 py-2 l-flex-center l-fullWidth"></i></a>
                        <hr class="my-1">
                        <a id="navigate-to-moreHome" data-scroll href="#is-navigated-moreHome"><i class="icon-home hi-fontSize-20 py-2 l-flex-center l-fullWidth"></i></a>
                    </div>
                </div>
                {{------------- [ Main Ad Contnt ] ------------}}
                <div class="col-lg-10 col-11 pull-lg-1">
                    <div class="row m-card rounded-10 py-5 px-4 is-justified-center">
                        {{------------- [ Ad name and share and image ] ------------}}
                        <div class="col-lg-6 col-11 px-0">
                            <div class="container-fluid">
                                <div class="row justify-content-between">
                                    <div class="col-auto">
                                        <h1 class="hi-fontSize-35">ملک مسکونی یوسف آباد</h1>
                                    </div>
                                    <div class="col-auto">
                                        <button class="is-wave-animated-dark hi-button-simple grey lighten-4 black-text hi-fontSize-14 px-2"> اشتراک گذاری
                                            <i class="icon-share mr-1"></i>
                                        </button>
                                    </div>
                                </div>
                                {{---------- [ Gallery of images ] ---------}}
                                <div class="row mt-3">
                                    <div class="col-12 l-ltr p-0">
                                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                                                    <img class="d-block carousel-cell-image" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/tulip.jpg" alt="عکس ملک">
                                                </li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="1">
                                                    <img class="d-block carousel-cell-image" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/grapes.jpg" alt="عکس ملک">
                                                </li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="2">
                                                    <img class="d-block carousel-cell-image" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/raspberries.jpg" alt="عکس ملک">
                                                </li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="3">
                                                    <img class="d-block carousel-cell-image" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/tulip.jpg" alt="عکس ملک">
                                                </li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="4">
                                                    <img class="d-block carousel-cell-image" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/grapes.jpg" alt="عکس ملک">
                                                </li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="5">
                                                    <img class="d-block carousel-cell-image" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/raspberries.jpg" alt="عکس ملک">
                                                </li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="6">
                                                    <img class="d-block carousel-cell-image" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/tulip.jpg" alt="عکس ملک">
                                                </li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="7">
                                                    <img class="d-block carousel-cell-image" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/grapes.jpg" alt="عکس ملک">
                                                </li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="8">
                                                    <img class="d-block carousel-cell-image" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/raspberries.jpg" alt="عکس ملک">
                                                </li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="9">
                                                    <img class="d-block carousel-cell-image" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/tulip.jpg" alt="عکس ملک">
                                                </li>
                                            </ol>
                                            <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item carousel-cell active">
                                                    <img class="d-block carousel-cell-image" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/tulip.jpg" alt="عکس ملک">
                                                </div>
                                                <div class="carousel-item carousel-cell">
                                                    <img class="d-block carousel-cell-image" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/grapes.jpg" alt="عکس ملک">
                                                </div>
                                                <div class="carousel-item carousel-cell">
                                                    <img class="d-block carousel-cell-image" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/raspberries.jpg" alt="عکس ملک">
                                                </div>
                                                <div class="carousel-item carousel-cell">
                                                    <img class="d-block carousel-cell-image" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/tulip.jpg" alt="عکس ملک">
                                                </div>
                                                <div class="carousel-item carousel-cell">
                                                    <img class="d-block carousel-cell-image" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/grapes.jpg" alt="عکس ملک">
                                                </div>
                                                <div class="carousel-item carousel-cell">
                                                    <img class="d-block carousel-cell-image" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/raspberries.jpg" alt="عکس ملک">
                                                </div>
                                                <div class="carousel-item carousel-cell">
                                                    <img class="d-block carousel-cell-image" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/tulip.jpg" alt="عکس ملک">
                                                </div>
                                                <div class="carousel-item carousel-cell">
                                                    <img class="d-block carousel-cell-image" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/grapes.jpg" alt="عکس ملک">
                                                </div>
                                                <div class="carousel-item carousel-cell">
                                                    <img class="d-block carousel-cell-image" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/raspberries.jpg" alt="عکس ملک">
                                                </div>
                                                <div class="carousel-item carousel-cell">
                                                    <img class="d-block carousel-cell-image" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/tulip.jpg" alt="عکس ملک">
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev"  href="#carouselExampleIndicators" onclick="nextSlide()" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{---------- [ Home Info ] ---------}}
                        <div class="col-lg-6 col-12 mt-4 mt-lg-0 pt-5 pb-2 pr-lg-5 m-list-home">
                            {{---------- [ Home Cost ] ---------}}
                            <div class="row mt-5 mt-lg-3 justify-content-center align-items-center">
                                <div class="col-12">
                                    <div class="row ocean rounded-60 justify-content-center align-items-center">
                                        <div class="col-auto">
                                            <span class="icon-coins ml-2 white-text"></span>
                                        </div>
                                        <div class="col-auto">
                                            <h2 class="white-text text-center py-3 medium-title hi-fontSize-16 mb-0"> ۱ میلیون و ۵۰۰ هزار تومان </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{---------- [ Home Info ] ---------}}
                            <div class="row py-2 mt-2 px-4 justify-content-between">
                                <div class="col-auto">
                                    <h5 class="text-right m-list-homeItem-r">
                                        <span class="icon-location-pin"></span> آدرس
                                    </h5>
                                </div>
                                <div class="col-auto">
                                    <h6 class="text-left m-list-homeItem-l">تهران، خیابان آزادی، بلوار شهید اکبری، پلاک 4، طبقه اول</h6>
                                </div>
                            </div>
                            <div class="row py-2 px-4 justify-content-between m-list-homeItem">
                                <div class="col-auto">
                                    <h5 class="text-right m-list-homeItem-r">
                                        <span class="icon-tape-measure ml-2"></span>متراژ
                                    </h5>
                                </div>
                                <div class="col-auto">
                                    <h6 class="text-left m-list-homeItem-l">230 متر</h6>
                                </div>
                            </div>
                            <div class="row py-2 px-4 justify-content-between m-list-homeItem">
                                <div class="col-auto">
                                    <h5 class="text-right m-list-homeItem-r">
                                        <span class="icon-bed ml-2"></span>تعداد اتاق
                                    </h5>
                                </div>
                                <div class="col-auto">
                                    <h6 class="text-left m-list-homeItem-l">3 خوابه</h6>
                                </div>
                            </div>
                            <div class="row py-2 px-4 justify-content-between m-list-homeItem">
                                <div class="col-auto">
                                    <span class="icon-parking ml-2"></span>پارکینگ
                                </div>
                                <div class="col-auto">
                                    <h6 class="text-left m-list-homeItem-l">اختصاصی</h6>
                                </div>
                            </div>
                            <div class="row py-2 px-4 justify-content-between m-list-homeItem">
                                <div class="col-auto">
                                    <span class="icon-castle ml-2"></span>تعداد اتاق
                                </div>
                                <div class="col-auto">
                                    <h6 class="text-left m-list-homeItem-l">نوساز</h6>
                                </div>
                            </div>
                            {{---------- [ Moshaver Info ] ---------}}
                            <div class="row m-card rounded-8 mt-4 align-items-center">
                                <div class="col-2 col-md-2">
                                    <img alt="آژانس املاک مشاور املاک محمود" class="img-fluid" src="{{asset('images/partners/partner2.png')}}">
                                </div>
                                <div class="col-7 col-md-7 py-3">
                                    <h3 class="regular-title hi-fontSize-14">آژانس املاک مشاور املاک محمود</h3>
                                    <h3 class="regular-title hi-fontSize-14 mt-2"><i class="icon-phone-receiver"></i> تماس: ۰۹۳۳۷۶۸۹۴۶۵ </h3>
                                </div>
                                <div class="col-3 pl-0">
                                    <button type="submit" class="filter-search-btn hi-fontSize-14 py-3">پروفایل مشاور
                                        <i class="fa fa-long-arrow-left"></i>
                                    </button>
                                </div>
                            </div>

                            {{---------- [ Etelaate ezafie Agahi ] ---------}}
                            <div class="row mt-5">
                                <div class="col-12">
                                    <h4 class="hi-fontSize-15 pr-3"><strong>توضیحات مشاور</strong></h4>
                                    <p class="mt-0 m-tozihateMoshaver rounded-8 p-3">
                                        موقعیت جغرافیایی: شمالی | تعداد واحد در طبقه: 2 | تعداد طبقات: 6 | تعداد پارکینگ: 1 | وضعیت سکونت: تخلیه | نوع سند: شخصی | نما: ترکیبی | کابینت: MDF | کف پوش: سنگ
                                        موقعیت جغرافیایی: شمالی | تعداد واحد در طبقه: 2 | تعداد طبقات: 6 | تعداد پارکینگ: 1 | وضعیت سکونت: تخلیه | نوع سند: شخصی | نما: ترکیبی | کابینت: MDF | کف پوش: سنگ
                                        موقعیت جغرافیایی: شمالی | تعداد واحد در طبقه: 2 | تعداد طبقات: 6 | تعداد پارکینگ: 1 | وضعیت سکونت: تخلیه | نوع سند: شخصی | نما: ترکیبی | کابینت: MDF | کف پوش: سنگ
                                        موقعیت جغرافیایی: شمالی | تعداد واحد در طبقه: 2 | تعداد طبقات: 6 | تعداد پارکینگ: 1 | وضعیت سکونت: تخلیه | نوع سند: شخصی | نما: ترکیبی | کابینت: MDF | کف پوش: سنگ
                                        موقعیت جغرافیایی: شمالی | تعداد واحد در طبقه: 2 | تعداد طبقات: 6 | تعداد پارکینگ: 1 | وضعیت سکونت: تخلیه | نوع سند: شخصی | نما: ترکیبی | کابینت: MDF | کف پوش: سنگ
                                        موقعیت جغرافیایی: شمالی | تعداد واحد در طبقه: 2 | تعداد طبقات: 6 | تعداد پارکینگ: 1 | وضعیت سکونت: تخلیه | نوع سند: شخصی | نما: ترکیبی | کابینت: MDF | کف پوش: سنگ
                                        موقعیت جغرافیایی: شمالی | تعداد واحد در طبقه: 2 | تعداد طبقات: 6 | تعداد پارکینگ: 1 | وضعیت سکونت: تخلیه | نوع سند: شخصی | نما: ترکیبی | کابینت: MDF | کف پوش: سنگ
                                        موقعیت جغرافیایی: شمالی | تعداد واحد در طبقه: 2 | تعداد طبقات: 6 | تعداد پارکینگ: 1 | وضعیت سکونت: تخلیه | نوع سند: شخصی | نما: ترکیبی | کابینت: MDF | کف پوش: سنگ
                                    </p>
                                    <button class="hi-button-simple grey-text l-autoMargin l-fullWidth" id="showTozihateMoshaver"> مشاهده بیشتر <i class="fa fa-angle-down"></i> </button>
                                </div>
                            </div>
                            {{--Bekhatere navbare fix baiad balatar bashe sectione harekat--}}
                            {{--baraie navigatore samte rast--}}
                            <div id="is-navigated-moshakhasate-melk"></div>
                        </div>
                    </div>



                    {{------------- [ Moshakhasate Melk ] ------------}}
                    <div class="row mt-5">
                        <div class="col-12 px-0">
                            <div class="m-facilities-cardBox l-rtl">
                                <div class="row">
                                    <div class="col-12">
                                        <h4>
                                            <span class="icon-checked-list hi-fontSize-24 gradient-text"></span>
                                            <span class="m-facilities-title"> مشخصات ملک </span>
                                        </h4>
                                    </div>
                                </div>
                                <hr class="mt-0 m-facilities-hr">
                                @for ($j = 0; $j < 5; $j++)
                                    <div class="row justify-content-center mt-4">
                                        @for ($i = 0; $i < 6; $i++)
                                            <div class="col-lg-2 col-md-3 col-sm-4 col-8  m-facilities-checkBox">
                                                <h6 class="hi-fontSize-13 regular-title">واقع در طبقه : ۲</h6>
                                            </div>
                                        @endfor
                                    </div>
                                @endfor
                                {{--Bekhatere navbare fix baiad balatar bashe sectione harekat--}}
                                {{--baraie navigatore samte rast--}}
                                <div id="is-navigated-emkanate-melk"></div>
                            </div>
                        </div>
                    </div>

                    {{------------- [ Emkanate Melk ] ------------}}
                    <div class="row mt-5" id="l-emkanate-melk">
                        <div class="col-12 px-0">
                            <div class="m-facilities-cardBox l-rtl">
                                <div class="row">
                                    <div class="col-12">
                                        <h4>
                                            <span class="icon-checked-list hi-fontSize-24 gradient-text"></span>
                                            <span class="m-facilities-title"> امکانات ملک</span>
                                        </h4>
                                    </div>
                                </div>
                                <hr class="mt-0 m-facilities-hr">
                                @for ($j = 0; $j < 5; $j++)
                                    <div class="row justify-content-center mt-4">
                                        @for ($i = 0; $i < 6; $i++)
                                            <div class="col-lg-2 col-md-3 col-sm-4 col-8  m-facilities-checkBox">
                                                <div class="row">
                                                    <div class="col-9"><h6 class="mt-1 m-facilities-checkText medium-title">پنجره دو جداره</h6></div>
                                                    <div class="col-3 px-0">
                                                        <div class="round pull-right">
                                                            <img src="{{ asset('images/check-rhb.png') }}" alt="در حال بارگذاری" height="26px" width="26px">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endfor
                                    </div>
                                @endfor
                                {{--Bekhatere navbare fix baiad balatar bashe sectione harekat--}}
                                {{--baraie navigatore samte rast--}}
                                <div id="is-navigated-google-map"></div>
                            </div>
                        </div>
                    </div>

                    {{------------- [ Google Map Melk ] ------------}}
                    <div class="row mt-5" id="l-google-map">
                        <div class="col-12 px-0">
                            <div class="m-facilities-cardBox l-rtl px-0 pb-0">
                                <div class="row pr-4">
                                    <div class="col-12">
                                        <h4>
                                            <span class="icon-placeholder hi-fontSize-24 gradient-text"></span>
                                            <span class="m-facilities-title">موقعیت بر روی نقشه</span>
                                        </h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div id="google-map" class="google-map mt-3" style="height: 300px"></div>
                                    </div>
                                </div>
                                {{--Bekhatere navbare fix baiad balatar bashe sectione harekat--}}
                                {{--baraie navigatore samte rast--}}
                                <div id="is-navigated-moreHome"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="l-moreHome pb-5" id="more-home-section">
        <div class="container">
            <div class="row mt-5">
                <div class="col-12 px-0">
                    <div class="l-rtl px-0 pb-0">
                        <div class="row pr-4 mt-4">
                            <div class="col-12">
                                <h4>
                                    <span class="icon-icon hi-fontSize-24 gradient-text"></span>
                                    <span class="m-facilities-title">خانه‌های مشابه</span>
                                </h4>
                            </div>
                        </div>
                        <hr class="my-2 m-facilities-hr">
                        <div class="row mt-4 justify-content-center l-ltr">
                            @for($i = 0; $i < 4; $i++)
                                <div class="col-10 col-md-6 col-lg-3 my-4">
                                    @component('components.card')@endcomponent
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@section('js_resources')
    <script>
        function initMap() {
            var uluru = {lat: 48.8583739, lng: 2.2924872};
            var map = new google.maps.Map(document.getElementById('google-map'), {
                zoom: 14,
                center: uluru,
                scrollwheel: false
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });

            google.maps.event.addListener(map, 'idle', function () {
                google.maps.event.trigger(map, 'resize');
                google.maps.event.trigger(map, 'dblclick');
            });
            google.maps.event.trigger(map, 'resize');
        }

    </script>

    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDaKuMOTrKgymjzEvHe_Rz7SDzUIZnvNrQ&callback=initMap">
    </script>

@endsection

