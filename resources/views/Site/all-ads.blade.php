@extends('layout.site')

@section('title')
    پی خونه | سامانه آگهی خرید و فروش خونه , ملک , آپارتمان , زمین و مستغلات در گیلان
@endsection

@section('meta')
    <meta name="description" content="A page's description, usually one or two sentences."/>
@endsection

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-0 m-small-header">
                {{--makane navbar--}}
            </div>
        </div>
    </div>

    {{------------- [ Breadcrumb Section ] ------------}}
    @include('includes.breadcrumb')

    <div class="container mb-5 mt-3">
        <div class="row l-rtl">
            <div class="col-12 p-0">
                <div class="container-fluid p-0">
                    <div class="row">
                        {{------------- [ Filters Column ] ------------}}
                        <div class="col-3">
                            <div class="col-12 m-curved-bg gradient-background pt-2 px-0">
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
                                                    <div class="noUi-target noUi-ltr noUi-horizontal metraj-slider"></div>
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
                                </div>
                            </div>
                        </div>

                        {{------------- [ Ads Column ] ------------}}
                        <div class="col-9">
                            <div class="row px-3">
                                <div class="col-12 m-curved-bg gradient-background rounded-8 pr-1 px-0">
                                    <div class="m-gradient-placeholder l-fullPage rounded-8 py-2">
                                        <div class="container-fluid">
                                            <div class="row justify-content-between">
                                                <div class="col-auto">
                                                    <div class="container-fluid">
                                                        <div class="row px-3">
                                                            <div class="col-auto">
                                                                <p class="thin-title hi-fontSize-13">مرتب سازی بر اساس:</p>
                                                            </div>
                                                            <div class="col-auto Topbar_dropdown l-rtl">
                                                                <select class="example-getting-started" multiple="multiple">
                                                                    <option value="cheese">پیش فروش</option>
                                                                    <option value="tomatoes">اجاره</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-auto">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{------------- [ Cards ] ------------}}
                            <div class="row mt-3">
                                <div class="col-12">
                                    <div class="container-fluid p-0">
                                        <div class="row mt-2">
                                            @for($i = 0; $i < 3; $i++)
                                                <div class="col-4 l-ltr">
                                                    @component('components.card')@endcomponent
                                                </div>
                                            @endfor
                                        </div>
                                        <div class="row mt-4">
                                            @for($i = 0; $i < 3; $i++)
                                                <div class="col-4 l-ltr">
                                                    @component('components.card')@endcomponent
                                                </div>
                                            @endfor
                                        </div>
                                        <div class="row mt-4">
                                            @for($i = 0; $i < 3; $i++)
                                                <div class="col-4 l-ltr">
                                                    @component('components.card')@endcomponent
                                                </div>
                                            @endfor
                                        </div>
                                        <div class="row mt-4">
                                            @for($i = 0; $i < 3; $i++)
                                                <div class="col-4 l-ltr">
                                                    @component('components.card')@endcomponent
                                                </div>
                                            @endfor
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

