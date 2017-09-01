{{--3-اولین آگهی--}}
@extends('layout.dashboard')
@section('backColor', 'm-navBar-transparent')
@section('marginTop', 'mt-5 pt-1')
@section('header-img')
    @include('includes.header-img')
@endsection
@section('content')
    <div class="px-2 container l-rtl">
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6 col-sm-6 col-6 l-rtl px-lg-4 px-md-4 px-sm-4 px-1">
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
            <div class="col-lg-2 col-md-12 col-sm-12 col-12 pt-lg-0 pt-md-4 pt-sm-4 pt-4">
                <div class="m-simple-multiselected-btn text-center">
                    <select id="example-getting-started l-rtl" multiple="multiple" class="buy-presell-btn">
                        <option value="خرید">خرید</option>
                        <option value="پیش فروش">پیش فروش</option>
                        <option value="معاوضه">ماوضه</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-2 col-md-12 col-sm-12 col-12 py-lg-0 py-md-4 py-sm-4 py-4">
                <div class="m-simple-multiselected-btn text-center">
                    <select id="example-getting-started l-rtl" multiple="multiple" class="state-kind-btn">
                        <option value="خرید">آپارتمان</option>
                        <option value="پیش فروش">ویلایی</option>
                        <option value="معاوضه">هم کف</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-1 col-md-12 col-sm-12 col-12 px-lg-0 pt-2 ">
                <div class="m-ads-checkbox checkbox-theme-blue ">
                    <div class="pure-checkbox  l-fullWidth text-center">
                        <input id="confirmation" name="checkbox" type="checkbox">
                        <label class="m-form-label" for="confirmation">تایید شده</label>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-12 col-sm-12 col-12 pt-2">
                <div class="m-ads-checkbox checkbox-theme-yellow">
                    <div class="pure-checkbox  l-fullWidth text-center mr-lg-0 mr-md-2 mr-sm-2 mr-2">
                        <input id="pending" name="checkbox" type="checkbox">
                        <label class="m-form-label" for="pending">در حال بررسی</label>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 col-md-12 col-sm-12 col-12 px-lg-0 pt-2">
                <div class="m-ads-checkbox checkbox-theme-red">
                    <div class="pure-checkbox  l-fullWidth text-center">
                        <input id="notConfirmation" name="checkbox" type="checkbox">
                        <label class="m-form-label" for="notConfirmation">تایید نشده</label>
                    </div>
                </div>
            </div>
        </div>
        <!--img back-->
        <div class="row justify-content-center textBtnBoxOnImg">
            <div class="col-lg-4 col-md-6 col-sm-8 col-10">
                <div class="row">
                    <div class="col-12">
                        <img src="{{asset('images/digital-painting.png')}}"
                             width="100%" height="100%" class="m-ads-background-img"></div>
                </div>
                <div class="text-btn-onImg">
                    <div class="row">
                        <div class="col-12">
                            <h6 class="text-center">برای بارگذاری اولین آگهی خود کلیک کنید <span
                                        class="m-smile">:)</span></h6>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-12 mx-auto text-center">
                            <button class="btn hi-fontSize-14 m-btn-makeAdv waves-light waves-effect">ایجاد آگهی +
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
    {{--<img src="{{asset('images/')}}" width="100%" height="100%">--}}
@endsection