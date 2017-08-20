@extends('layout.site')

@section('title')
    پی خونه | تایتل کارت , نام آژانس
@endsection

@section('meta')
    <meta name="description" content="Zillow has 9 photos of this $175671 3 bed, 1.0 bath, sqft single family home located at 2640 Pioneer Ave # 2 built in. MLS #."></meta>
@endsection

@section('bg-color')
    khakestari-bg
@endsection

@section('content')

    {{------------- [ Breadcrumb ] ------------}}
    @include('includes.breadcrumb')

    <section class="l-home-info">
        <div class="container-fluid">
            <div class="row l-rtl mt-3">
                {{------------- [ Right Scroll Navigator ] ------------}}
                <div class="col-1" id="l-navigator">
                    <div class="m-card rounded-10 text-center">
                        <i class="fa fa-home hi-fontSize-23 mt-3 gradient-text"></i>
                        <hr class="my-1">
                        <div class="m-Sn-icon openPost-emkanat-icon"></div>
                        <hr class="my-1">
                        <div class="m-Sn-icon openPost-map-icon"></div>
                        <hr class="my-1">
                        <div class="m-Sn-icon openPost-home-icon"></div>
                    </div>
                </div>
                {{------------- [ Main Ad Contnt ] ------------}}
                <div class="col-10">

                    <div class="row m-card rounded-10 py-5 px-4">
                        {{------------- [ Ad name and share and image ] ------------}}
                        <div class="col-6 px-0">
                            <div class="container-fluid">
                                <div class="row justify-content-between">
                                    <div class="col-auto">
                                        <h1 class="hi-fontSize-35">ملک مسکونی یوسف آباد</h1>
                                    </div>
                                    <div class="col-auto">
                                        <button class="is-wave-animated-dark hi-button-simple grey lighten-4 black-text hi-fontSize-14 px-2"> اشتراک گذاری
                                            <i class="fa fa-share-alt mr-1"></i>
                                        </button>
                                    </div>
                                </div>
                                {{---------- [ Gallery of images ] ---------}}
                                <div class="row mt-3">
                                    <div class="col-12 l-ltr p-0">
                                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item carousel-cell active">
                                                    <img class="d-block carousel-cell-image" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/tulip.jpg" alt="First slide">
                                                </div>
                                                <div class="carousel-item carousel-cell">
                                                    <img class="d-block carousel-cell-image" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/grapes.jpg" alt="Second slide">
                                                </div>
                                                <div class="carousel-item carousel-cell">
                                                    <img class="d-block carousel-cell-image" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/raspberries.jpg" alt="Third slide">
                                                </div>
                                                <div class="carousel-item carousel-cell">
                                                    <img class="d-block carousel-cell-image" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/touch-screen.jpg" alt="Third slide">
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
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
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12 py-5 pr-5 m-list-home">
                            <div class="row mt-3">
                                <div class="col-12">
                                    <p class="ocean white-text rounded-60 text-center py-3 medium-title"><img class="hi-size-2 ml-2" src="{{asset('/images/coins.svg')}}"> ۱ میلیون و ۶۰۰ هزار تومان</p>
                                </div>
                            </div>
                            <div class="row py-2 px-3">
                                <div class="col-3">
                                    <h5 class="text-right m-list-homeItem-r">
                                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                             width="15px" height="17px" viewBox="0 0 104.000000 128.000000"
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
                                        </svg>&nbsp;&nbsp;آدرس
                                    </h5>
                                </div>
                                <div class="col-9">
                                    <h6 class="text-left m-list-homeItem-l">تهران، خیابان آزادی، بلوار شهید اکبری، پلاک 4، طبقه اول</h6>
                                </div>
                            </div>
                            <div class="row py-2 px-3 m-list-homeItem">
                                <div class="col-3">
                                    <h5 class="text-right m-list-homeItem-r">
                                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                             width="16px" height="16px" viewBox="0 0 128.000000 108.000000"
                                             preserveAspectRatio="xMidYMid meet">
                                            <g transform="translate(0.000000,108.000000) scale(0.100000,-0.100000)"
                                               fill="#000000" stroke="none">
                                                <path d="M331 1069 c-154 -14 -262 -59 -308 -128 -23 -34 -23 -36 -23 -401 0
-365 0 -367 23 -401 48 -72 150 -112 325 -129 59 -5 288 -10 508 -10 328 0
404 3 413 14 8 9 11 114 9 367 l-3 354 -207 3 -208 2 0 58 c0 93 -10 131 -44
164 -82 82 -280 126 -485 107z m293 -69 c182 -46 229 -124 113 -190 -75 -43
-171 -62 -312 -61 -239 0 -416 82 -361 166 21 32 103 73 180 90 97 21 288 19
380 -5z m-408 -282 c75 -20 105 -22 547 -26 l467 -4 0 -314 0 -314 -85 0 -85
0 0 214 c0 172 -3 215 -14 219 -32 12 -36 -16 -36 -225 l0 -208 -175 0 -175 0
0 254 c0 140 -3 261 -6 270 -8 21 -40 21 -48 0 -3 -9 -6 -130 -6 -270 l0 -254
-139 0 c-76 0 -153 3 -170 6 l-31 7 0 241 c0 132 -3 251 -6 264 -7 25 -39 30
-48 6 -3 -9 -6 -123 -6 -255 0 -158 -4 -239 -10 -239 -22 0 -109 51 -124 72
-14 19 -16 66 -16 325 l0 302 44 -25 c23 -13 79 -34 122 -46z"/>
                                            </g>
                                        </svg>&nbsp;&nbsp;متراژ
                                    </h5>
                                </div>
                                <div class="col-9">
                                    <h6 class="text-left m-list-homeItem-l">230 متر</h6>
                                </div>
                            </div>
                            <div class="row py-2 px-3 m-list-homeItem">
                                <div class="col-3">
                                    <h5 class="text-right m-list-homeItem-r">
                                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                             width="15px" height="15px" viewBox="0 0 128.000000 118.000000"
                                             preserveAspectRatio="xMidYMid meet">
                                            <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)"
                                               fill="#000000" stroke="none">
                                                <path d="M185 1160 c-72 -35 -75 -49 -75 -297 l0 -218 -37 -20 c-69 -38 -73
-57 -73 -345 0 -258 4 -286 36 -273 9 3 14 22 14 54 l0 49 590 0 590 0 0 -49
c0 -32 5 -51 14 -54 32 -13 36 15 36 272 0 290 -4 310 -72 346 l-38 20 0 218
c0 249 -3 262 -75 297 -39 19 -63 20 -456 20 -394 0 -416 -1 -454 -20z m910
-65 c25 -24 25 -24 25 -240 l0 -215 -94 0 -94 0 14 40 c12 35 12 50 -1 105
-22 96 -40 132 -77 155 -30 18 -50 20 -228 20 -257 0 -266 -5 -305 -175 -13
-55 -13 -70 -1 -105 l14 -40 -94 0 -94 0 0 215 c0 216 0 216 25 240 l24 25
431 0 431 0 24 -25z m-250 -207 c41 -36 69 -164 45 -208 -17 -32 -67 -40 -250
-40 -183 0 -233 8 -250 40 -24 44 4 172 45 208 25 21 34 22 205 22 171 0 180
-1 205 -22z m352 -322 c27 -24 28 -26 28 -133 l0 -108 -585 0 -585 0 0 108 c0
107 1 109 28 133 l28 24 529 0 529 0 28 -24z m31 -348 l-3 -53 -585 0 -585 0
-3 53 -3 52 591 0 591 0 -3 -52z"/>
                                            </g>
                                        </svg>&nbsp;&nbsp;تعداد اتاق
                                    </h5>
                                </div>
                                <div class="col-9">
                                    <h6 class="text-left m-list-homeItem-l">3 خوابه</h6>
                                </div>
                            </div>
                            <div class="row py-2 px-3 m-list-homeItem">
                                <div class="col-3">
                                    <h5 class="text-right m-list-homeItem-r">
                                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                             width="16px" height="16px" viewBox="0 0 128.000000 128.000000"
                                             preserveAspectRatio="xMidYMid meet">
                                            <g transform="translate(0.000000,128.000000) scale(0.100000,-0.100000)"
                                               fill="#000000" stroke="none">
                                                <path d="M350 1220 c0 -53 -2 -60 -20 -60 -18 0 -20 -7 -20 -65 l0 -65 30 0
c28 0 30 -2 30 -40 l0 -40 -60 0 -60 0 0 -60 0 -60 -40 0 -40 0 0 60 0 60 -85
0 -85 0 0 -125 c0 -118 1 -125 20 -125 20 0 20 -7 20 -350 l0 -350 600 0 600
0 0 350 c0 343 0 350 20 350 19 0 20 7 20 125 l0 125 -85 0 -85 0 0 -60 0 -60
-40 0 -40 0 0 60 0 60 -60 0 -60 0 0 40 c0 38 2 40 30 40 l30 0 0 65 c0 58 -2
65 -20 65 -18 0 -20 7 -20 60 l0 60 -85 0 -85 0 0 -60 c0 -53 -2 -60 -20 -60
-18 0 -20 7 -20 60 l0 60 -80 0 -80 0 0 -60 c0 -53 -2 -60 -20 -60 -18 0 -20
7 -20 60 l0 60 -85 0 -85 0 0 -60z m580 -130 c0 -20 -7 -20 -290 -20 -283 0
-290 0 -290 20 0 20 7 20 290 20 283 0 290 0 290 -20z m-60 -80 c0 -17 -7 -20
-45 -20 -38 0 -45 -3 -45 -20 0 -17 7 -20 45 -20 38 0 45 -3 45 -20 0 -18 -7
-20 -65 -20 -58 0 -65 -2 -65 -20 0 -18 7 -20 66 -20 l65 0 -3 -42 c-3 -43 -3
-43 -46 -46 -34 -3 -43 -7 -40 -20 2 -12 15 -18 46 -20 l42 -3 0 -165 0 -164
-65 0 c-58 0 -65 -2 -65 -20 0 -18 7 -20 65 -20 58 0 65 -2 65 -20 0 -13 -7
-20 -20 -20 -13 0 -20 -7 -20 -20 0 -13 7 -20 20 -20 17 0 20 -7 20 -39 0 -40
0 -40 -42 -43 -31 -2 -44 -8 -46 -20 -3 -13 6 -17 40 -20 35 -2 43 -7 43 -23
0 -16 -8 -21 -43 -23 -34 -3 -43 -7 -40 -20 2 -12 15 -18 46 -20 34 -3 42 -7
42 -23 0 -18 -9 -19 -230 -19 l-230 0 0 39 c0 40 0 40 43 43 34 2 42 7 42 23
0 16 -8 21 -42 23 -46 3 -61 29 -23 39 11 3 20 14 20 24 0 12 -7 19 -20 19
-16 0 -20 7 -20 30 0 29 2 30 45 30 38 0 45 3 45 20 0 17 -7 20 -45 20 l-45 0
0 214 0 215 43 3 c34 2 42 7 42 23 0 16 -8 21 -42 23 -35 3 -43 7 -43 23 0 12
7 19 20 19 13 0 20 7 20 20 0 13 -7 20 -20 20 -18 0 -20 7 -20 60 l0 60 230 0
c223 0 230 -1 230 -20z m-500 -390 l0 -80 -40 0 c-33 0 -40 -3 -40 -20 0 -17
7 -20 40 -20 36 0 40 -2 40 -25 0 -18 -5 -25 -20 -25 -13 0 -20 -7 -20 -20 0
-13 7 -20 20 -20 19 0 20 -7 20 -100 l0 -100 -40 0 c-33 0 -40 -3 -40 -20 0
-17 7 -20 40 -20 36 0 40 -2 40 -25 0 -18 -5 -25 -20 -25 -13 0 -20 -7 -20
-20 0 -13 7 -20 20 -20 13 0 20 -7 20 -20 0 -19 -7 -20 -145 -20 l-145 0 0 40
c0 33 3 40 20 40 15 0 20 7 20 25 0 19 -5 25 -21 25 -14 0 -19 5 -17 17 2 13
15 19 46 21 34 3 43 7 40 20 -2 12 -15 18 -46 20 l-42 3 0 100 c0 92 1 99 20
99 15 0 20 7 20 25 0 18 -5 25 -20 25 -13 0 -20 7 -20 20 0 17 7 20 46 20 38
0 45 3 42 18 -2 12 -15 18 -46 20 l-42 3 0 60 0 59 145 0 145 0 0 -80z m830
41 c0 -40 0 -40 -42 -43 -31 -2 -44 -8 -46 -20 -3 -15 4 -18 42 -18 39 0 46
-3 46 -20 0 -13 -7 -20 -20 -20 -13 0 -20 -7 -20 -19 0 -10 9 -21 20 -24 19
-5 20 -14 20 -187 0 -173 -1 -182 -20 -187 -11 -3 -20 -14 -20 -24 0 -12 7
-19 20 -19 13 0 20 -7 20 -20 0 -19 -7 -20 -145 -20 l-145 0 0 40 0 40 50 0
c47 0 50 2 50 25 0 23 -3 25 -50 25 -43 0 -50 3 -50 20 0 13 7 20 20 20 13 0
20 7 20 20 0 13 -7 20 -20 20 -18 0 -20 7 -20 80 l0 80 40 0 c33 0 40 3 40 20
0 17 -7 20 -40 20 l-40 0 0 125 0 125 145 0 145 0 0 -39z"/>
                                                <path d="M540 665 l0 -165 100 0 100 0 0 165 0 165 -100 0 -100 0 0 -165z
m160 -5 l0 -120 -60 0 -60 0 0 120 0 120 60 0 60 0 0 -120z"/>
                                            </g>
                                        </svg>&nbsp;&nbsp;قدمت بنا
                                    </h5>
                                </div>
                                <div class="col-9">
                                    <h6 class="text-left m-list-homeItem-l">نوساز</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{------------- [ Moshakhase Melk ] ------------}}
                    <div class="row mt-5">
                        <div class="col-12 px-0">
                            <div class="m-facilities-cardBox l-rtl">
                                <div class="row">
                                    <div class="col-12">
                                        <h5>
                                            <img src="{{ asset('images/list-rhb.png') }}" alt="در حال بارگذاری" height="23px" width="18px">&nbsp;
                                            <span class="m-facilities-title"> امکانات ملک</span>
                                        </h5>
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
                            </div>
                        </div>

                    </div>

                    {{------------- [ Google Map Melk ] ------------}}
                    <div class="row mt-5">
                        <div class="col-12 px-0">
                            <div class="m-facilities-cardBox l-rtl px-0 pb-0">
                                <div class="row pr-4">
                                    <div class="col-12">
                                        <h5>
                                            <img src="{{ asset('images/list-rhb.png') }}" alt="در حال بارگذاری" height="23px" width="18px">&nbsp;
                                            <span class="m-facilities-title">موقعیت بر روی نقشه</span>
                                        </h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div id="google-map" class="google-map mt-3" style="height: 300px"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="l-moreHome pb-5">
        <div class="container">
            <div class="row mt-5">
                <div class="col-12 px-0">
                    <div class="l-rtl px-0 pb-0">
                        <div class="row pr-4 mt-4">
                            <div class="col-12">
                                <h5>
                                    <img src="{{ asset('images/list-rhb.png') }}" alt="در حال بارگذاری" height="23px" width="18px">&nbsp;
                                    <span class="m-facilities-title">خانه‌های مشابه</span>
                                </h5>
                            </div>
                        </div>
                        <hr class="my-2 m-facilities-hr">
                        <div class="row mt-4 justify-content-center l-ltr">
                            @for($i = 0; $i < 4; $i++)
                                <div class="col-10 col-md-6 col-lg-3">
                                    @component('components.card')@endcomponent
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="container my-5" id="gall">
        <div class="row">
            <div class="col-6">



            </div>
        </div>
    </div>

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

            });
            google.maps.event.trigger(map, 'resize');
        }

    </script>

    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDaKuMOTrKgymjzEvHe_Rz7SDzUIZnvNrQ&callback=initMap">
    </script>

@endsection

