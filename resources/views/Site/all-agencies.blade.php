@extends('layout.site')
@section('title')
    همه آژانس های پی خونه | پی خونه
@endsection
@section('meta')
    <meta name="description" content="مشاورهای املاک در پی خونه ، آماده ارائه خدمات به مشتریان می باشند."/>
    <meta name="Keywords" content="آژانس های املاک پی خونه ، مشاور املاک ، مشاور املاک در گیلان"/>
@endsection
@section('content')
    <!--header img-->
    <div class="row mt-0 header-text-box">
        <img src="{{ asset('images/1280_Contact us header.jpg') }}"
             alt="خرید ملک در رشت"
             width="100%" class="header-z-index">
        <h1 class="header-caption text-center hi-fontSize-28">آژانس های همکار پی خونه</h1>
    </div>
    <br><br>
    <div class="container l-rtl">
        <div class="row justify-content-center">
            <div class="col-12 px-0">
                <ol class="breadcrumb m-breadcrumb">
                    <li class="breadcrumb-item m-breadcrumb-item"><a href="#">خانه</a></li>
                    <li class="breadcrumb-item m-breadcrumb-item"><a href="#">آژانس های املاک </a></li>
                    <li class="breadcrumb-item m-breadcrumb-item">-</li>
                </ol>
            </div>
        </div>
    </div>
    <br>
    <div class="container mb-5">
        <div class="row">
            <div class="contact-simpleBox p-lg-5 p-md-5 p-sm-5 p-3 l-rtl">
                <div class="row mt-3">
                    <div class="col-12">
                        <h5 class="text-center hi-fontSize-14">جستجوی نام آژانس املاک</h5>
                    </div>
                </div>
                <div class="row justify-content-center mt-2">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-8">
                        <form>
                            <div class="input-group all-agencies-inputGroup">
                                <input type="search" class="form-control all-agencies-inputSearch"
                                       aria-label="Search input" placeholder="جستجو کنید...">
                                <button type="button" class="btn all-agencies-btnSearch waves-effect waves-light">
                                    <i class="icon-search hi-fontSize-18"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <br>
                <div class="row">
                    @for ($i = 0; $i < 4; $i++)
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt-4">
                            @component('components.agencies-card')
                            @endcomponent
                        </div>
                    @endfor
                </div>
                <div class="row">
                    @for ($i = 0; $i < 4; $i++)
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt-4">
                            @component('components.agencies-card')
                            @endcomponent
                        </div>
                    @endfor
                </div>
                <div class="row">
                    @for ($i = 0; $i < 4; $i++)
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt-4">
                            @component('components.agencies-card')
                            @endcomponent
                        </div>
                    @endfor
                </div>
                <div class="row">
                    @for ($i = 0; $i < 4; $i++)
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt-4">
                            @component('components.agencies-card')
                            @endcomponent
                        </div>
                    @endfor
                </div>
                <br><br>
                <div class="container l-ltr mb-5 mt-4">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-5 col-sm-6 col-12 pl-lg-4 p-sm-0 p-0">
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
                                    <li class="page-item hidden-sm-down"><a class="page-link m-pagination-num" href="#">3</a>
                                    </li>
                                    <li class="page-item hidden-md-down"><a class="page-link m-pagination-num" href="#">4</a>
                                    </li>
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
            </div>
        </div>
    </div>
    <br><br>
@endsection
@section('contact')
    @include('includes.contact-banner')
@endsection
