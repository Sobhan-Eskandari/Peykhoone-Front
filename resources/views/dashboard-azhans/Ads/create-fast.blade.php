{{--4-آگهی فوری--}}
@extends('layout.dashboard')
@section('backColor', 'm-navBar-transparent')
@section('marginTop', 'mt-5 pt-1')
@section('header-img')
    @include('includes.header-img')
@endsection
@section('content')
    <!--section 1-->
    <form>
        <div class="container px-lg-5 px-md-5 px-sm-2 px-2">
            <div class="simple-shadow-box-two">
                <div class="row l-rtl pt-1">
                    <div class="col-12">
                        @component('components.azhans-form-title')
                            @slot('title')نوع و هدف@endslot
                        @endcomponent
                    </div>
                </div>
                <div class="row l-rtl p-4">
                    <!--estate's kind -->
                    <div class="col-lg-3 col-md-4 col-sm-12 col-12 Topbar_dropdown pl-lg-5">
                        <label class="hi-fontSize-16" for="stateKind"><span class="m-star-color">*&nbsp;</span>نوع
                            ملک</label>
                        <select class="stateKind" id="stateKind" multiple="multiple" tabindex="1">
                            <option value="cheese">رشت</option>
                            <option value="tomatoes">انزلی</option>
                            <option value="mozarella">لاهیجان</option>
                        </select>
                    </div>
                    <!--category of estate-->
                    <div class="col-lg-3 col-md-4 col-sm-12 col-12 Topbar_dropdown pl-lg-5">
                        <label class="hi-fontSize-16" for="stateCategory"><span class="m-star-color">*&nbsp;</span>دسته
                            بندی ملک</label>
                        <select class="stateCategory" id="stateCategory" multiple="multiple" tabindex="2">
                            <option value="cheese">رشت</option>
                            <option value="tomatoes">انزلی</option>
                            <option value="mozarella">لاهیجان</option>
                        </select>
                    </div>
                    <!--estate goal-->
                    <div class="col-lg-3 col-md-4 col-sm-12 col-12 Topbar_dropdown pl-lg-5">
                        <label class="hi-fontSize-16" for="stateGoal"><span
                                    class="m-star-color">*&nbsp;</span>هدف</label>
                        <select class="stateGoal" id="stateGoal" multiple="multiple" tabindex="3">
                            <option value="cheese">رشت</option>
                            <option value="tomatoes">انزلی</option>
                            <option value="mozarella">لاهیجان</option>
                        </select>
                    </div>
                </div>
                <div class="row l-rtl pt-1">
                    <div class="col-12">
                        @component('components.azhans-form-title')
                            @slot('title')آدرس@endslot
                        @endcomponent
                    </div>
                </div>
                <div class="row l-rtl p-4">
                    <!--province of estate-->
                    <div class="col-lg-3 col-md-4 col-sm-12 col-12 Topbar_dropdown pl-lg-5">
                        <label class="hi-fontSize-16" for="stateProvince"><span class="m-star-color">*&nbsp;</span>استان</label>
                        <select class="stateProvince" id="stateProvince" multiple="multiple" tabindex="4">
                            <option value="cheese">رشت</option>
                            <option value="tomatoes">انزلی</option>
                            <option value="mozarella">لاهیجان</option>
                        </select>
                    </div>
                    <!--city of estate-->
                    <div class="col-lg-3 col-md-4 col-sm-12 col-12 Topbar_dropdown pl-lg-5">
                        <label class="hi-fontSize-16" for="stateCity"><span
                                    class="m-star-color">*&nbsp;</span>شهر</label>
                        <select class="stateCity" id="stateCity" multiple="multiple" tabindex="5">
                            <option value="cheese">رشت</option>
                            <option value="tomatoes">انزلی</option>
                            <option value="mozarella">لاهیجان</option>
                        </select>
                    </div>
                    <!--more detail address-->
                    <div class="col-lg-3 col-md-4 col-sm-12 col-12 Topbar_dropdown pl-lg-5">
                        <label class="hi-fontSize-16" for="stateDistrict"><span class="m-star-color">*&nbsp;</span>محله</label>
                        <select class="stateDistrict" id="stateDistrict" multiple="multiple" tabindex="6">
                            <option value="cheese">رشت</option>
                            <option value="tomatoes">انزلی</option>
                            <option value="mozarella">لاهیجان</option>
                        </select>
                    </div>
                </div>
                <div class="row l-rtl p-4">
                    <!--address-->
                    <div class="col-lg-9 col-md-12 col-sm-12 col-12 pl-lg-5">
                        <div class="form-group">
                            <label class="hi-fontSize-16" for="adr"><span class="m-star-color">*&nbsp;</span>آدرس
                                ملک</label>
                            <input class="m-field form-control" id="adr" aria-describedby="name" tabindex="7">
                            <p class="hi-fontSize-13 m-input-exp">درج آدرس پستی ملک تا سرحد خیابان فرعی و یا کوچه الزامی
                                است
                                (مثال: میدان رز - خیابان مریم - کوچه سوم).</p>
                        </div>
                    </div>
                </div>
                <!--checkbox(show address)-->
                <div class="row l-rtl px-4">
                    <div class="col-12">
                        <div class="m-ads-checkbox checkbox-theme-gray">
                            <div class="pure-checkbox  l-fullWidth text-right">
                                <input id="address" name="checkbox" type="checkbox" tabindex="8">
                                <label class="m-form-label black-text" for="address">آدرس ذکر شده در بالا را به عموم
                                    نمایش
                                    ندهید</label>
                            </div>
                        </div>
                    </div>
                </div>
                <!--map banner-->
                <div class="row l-rtl p-4">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-12 pl-lg-5">
                        <div class="m-map-banner">
                            <h6 class="hi-fontSize-15 hi-font-light">
                                <i class="icon-placeholder hi-fontSize-20"></i>&nbsp;&nbsp;
                                با کلیک کردن روی نقشه موقعیت دقیق ملک را ثبت کنید
                            </h6>
                        </div>
                    </div>
                </div>
                <!--map-->
                <div class="row px-4 l-rtl pb-4">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-12 pl-lg-5">
                        <div class="simple-shadow-box">
                            <div class="row" style="height: 300px">
                                <div class="col-12">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--checkbox(show exact address-->
                <div class="row l-rtl px-4 pb-5 mb-5">
                    <div class="col-12">
                        <div class="m-ads-checkbox checkbox-theme-gray">
                            <div class="pure-checkbox  l-fullWidth text-right">
                                <input id="statePlaceholder" name="checkbox" type="checkbox" tabindex="9">
                                <label class="m-form-label black-text" for="statePlaceholder"> محل مشخص شده ملک در نقشه
                                    بالا
                                    را به صورت حدودی به عموم نمایش دهید!</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--section2-->
        <div class="container px-lg-5 px-md-5 px-sm-2 px-2">
            <div class="simple-shadow-box-two pb-5">
                <div class="row l-rtl pt-1">
                    <div class="col-12">
                        @component('components.azhans-form-title')
                            @slot('title')جزییات املاک@endslot
                        @endcomponent
                    </div>
                </div>
                <div class="row l-rtl p-4">
                    <!--explanation of estate-->
                    <div class="col-lg-9 col-md-12 col-sm-12 col-12 pl-lg-5">
                        <div class="form-group">
                            <label class="hi-fontSize-16" for="message">توضیحات</label>
                            <textarea class="m-field form-control" id="message" aria-describedby="name"
                                      placeholder="توضیحات ملک را وارد کنید" tabindex="10" rows="8"></textarea>
                        </div>
                    </div>
                </div>
                <!--form and input-->
                <div class="row l-rtl px-4">
                    <!--space of estate-->
                    <div class="col-lg-3 col-md-4 col-sm-12 col-12 Topbar_dropdown pl-lg-5">
                        <div class="form-group">
                            <label class="hi-fontSize-15" for="meter"><span class="m-star-color">*&nbsp;</span>مساحت
                                ساخته
                                شده(متر مربع)</label>
                            <input class="m-field form-control" id="meter" aria-describedby="name" tabindex="11">
                        </div>
                    </div>
                    <!--price of estate-->
                    <div class="col-lg-3 col-md-4 col-sm-12 col-12 Topbar_dropdown pl-lg-5">
                        <label class="hi-fontSize-15" for="money"><span class="m-star-color">*&nbsp;</span>قیمت نهایی
                            فروش (تومان)</label>
                        <input class="m-field form-control" id="money" aria-describedby="name" tabindex="12">
                    </div>
                    <!--time of advertising-->
                    <div class="col-lg-3 col-md-4 col-sm-12 col-12 Topbar_dropdown pl-lg-5">
                        <label class="hi-fontSize-15" for="stateTime"><span class="m-star-color">*&nbsp;</span>مدت
                            اعتبار آگهی</label>
                        <select class="stateTime" id="stateTime" multiple="multiple" tabindex="13">
                            <option value="cheese">رشت</option>
                            <option value="tomatoes">انزلی</option>
                            <option value="mozarella">لاهیجان</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <!--section 3-->
        <div class="container px-lg-5 px-md-5 px-sm-2 px-2 py-5">
            <div class="simple-shadow-box-two pb-5">
                <div class="row l-rtl pt-1 pb-4">
                    <div class="col-12">
                        @component('components.azhans-form-title')
                            @slot('title')امکانات ملک@endslot
                        @endcomponent
                    </div>
                </div>
                <!--checkboxes of facilities-->
                <div class="row l-rtl px-4 py-2">
                    @for ($i = 0; $i < 6; $i++)
                        <div class="col-lg-2 col-md-4 col-sm-6 col-12 m-ads-checkbox checkbox-theme-gray">
                            <div class="pure-checkbox  l-fullWidth text-right">
                                <input id="stateElevator" name="checkbox" type="checkbox" tabindex="14">
                                <label class="m-form-label" for="stateElevator">آسانسور</label>
                            </div>
                        </div>
                    @endfor
                </div>
                <div class="row l-rtl px-4 py-2">
                    @for ($i = 0; $i < 6; $i++)
                        <div class="col-lg-2 col-md-4 col-sm-6 col-12 m-ads-checkbox checkbox-theme-gray">
                            <div class="pure-checkbox  l-fullWidth text-right">
                                <input id="stateElevator" name="checkbox" type="checkbox" tabindex="15">
                                <label class="m-form-label" for="stateElevator">آسانسور</label>
                            </div>
                        </div>
                    @endfor
                </div>
                <div class="row l-rtl px-4 py-2">
                    @for ($i = 0; $i < 3; $i++)
                        <div class="col-lg-2 col-md-4 col-sm-6 col-12 m-ads-checkbox checkbox-theme-gray">
                            <div class="pure-checkbox  l-fullWidth text-right">
                                <input id="stateElevator" name="checkbox" type="checkbox" tabindex="16">
                                <label class="m-form-label" for="stateElevator">آسانسور</label>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
        <!--section 4-->
        <div class="container px-lg-5 px-md-5 px-sm-2 px-2">
            <div class="simple-shadow-box-two pb-5">
                <div class="row l-rtl pt-1 pb-4">
                    <div class="col-12">
                        @component('components.azhans-form-title')
                            @slot('title')مشخصات آگهی دهنده@endslot
                        @endcomponent
                    </div>
                </div>
                <div class="row l-rtl px-4">
                    <!--name of consultant-->
                    <div class="col-lg-3 col-md-4 col-sm-12 col-12 pl-lg-5">
                        <label class="hi-fontSize-16" for="name">نام مشاور</label>
                        <input class="m-field form-control" id="name" aria-describedby="name" tabindex="17">
                    </div>
                    <!--land line phone-->
                    <div class="col-lg-3 col-md-4 col-sm-12 col-12 pl-lg-5">
                        <label class="hi-fontSize-16" for="tel">تلفن ثابت</label>
                        <input class="m-field form-control" id="tel" aria-describedby="name" tabindex="18">
                    </div>
                    <!--mobile number-->
                    <div class="col-lg-3 col-md-4 col-sm-12 col-12 pl-lg-5">
                        <label class="hi-fontSize-16" for="mobile">تلفن همراه</label>
                        <input class="m-field form-control" id="mobile" aria-describedby="name" tabindex="19">
                    </div>
                </div>
                <div class="row l-rtl p-4">
                    <!--ways of visiting-->
                    <div class="col-lg-9 col-md-12 col-sm-12 col-12 pl-lg-5">
                        <div class="form-group">
                            <label class="hi-fontSize-16" for="message">نحوه بازدید</label>
                            <textarea class="m-field form-control" id="message" aria-describedby="name"
                                      tabindex="20" rows="8"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--submit button-->
        <div class="container px-lg-5 px-md-5 px-sm-2 px-2 py-4 l-rtl mb-5">
            <div class="row mb-5">
                <div class="col-12">
                    <button class="btn m-simple-radiusBtn2 hi-fontSize-14 mt-4 m-btn-loading-fast mr-4" tabindex="21"
                            type="submit">ثبت و بارگذاری
                    </button>
                </div>
            </div>
        </div>
    </form>
    <br>
    <br>
    {{--<img src="{{asset('images/1.png')}}" width="100%" height="100%">--}}
@endsection