@extends('layout.dashboard')
@section('backColor', 'm-navBar-transparent')
@section('marginTop', 'mt-5 pt-1')
@section('header-img')
    @include('includes.header-img')
@endsection
@section('content')
    <!--title-->

    <div class="row justify-content-center mb-5 px-lg-5 px-md-5 px-sm-3 px-1">
        <div class="col-10">
            <div class="simple-shadow-box px-lg-5 px-md-5 px-sm-2 px-1 pt-5">
                <!--upload file-->
                   <div class="row px-lg-4 px-md-4 px-sm-4 px-0  ">
                    <div class="col-4"></div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12 l-rtl">
                                <div class="row justify-content-center">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                        <form action="/file-upload"
                                              class="dropzone m-dropzon-rounded mx-lg-auto"
                                              id="my-awesome-dropzone">
                                        </form>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 hidden-sm-down">
                                        <div class="m-tooltip mt-4">
                                            <i class="icon-i m-tooltip-icon mx-1"></i>
                                            <span class="m-tooltiptext hi-fontSize-10">تصویر با حداکثر اندازه300در300</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--title-->
                <div class="row px-4">
                    <div class="col-12">
                        <h5 class="text-center pt-4">رضا جدیدی</h5>
                    </div>
                </div>
                <!--hr-->
                <div class="row px-4">
                    <div class="col-12">
                        <hr class="m-userPro-color my-4">
                    </div>
                </div>
                <!--fields-->
                <div class="row px-4 l-rtl justify-content-between">
                    <div class="col-lg-2 col-md-6 col-sm-12 col-12 pl-lg-0">
                        <div class="form-group">
                            <label class="hi-fontSize-15 form-control-label" for="name">نام</label>
                            <input class="m-field form-control" id="name" aria-describedby="name"
                                   placeholder="نام خود را وارد کنید" tabindex="1">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 col-12 px-lg-0">
                        <div class="form-group">
                            <label class="hi-fontSize-15 form-control-label" for="family">نام خانوادگی</label>
                            <input class="m-field form-control" id="family" aria-describedby="family"
                                   placeholder="نام خانوادگی خود را وارد کنید" tabindex="2">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12 px-lg-0">
                        <div class="form-group">
                            <label class="hi-fontSize-15 form-control-label" for="email">ایمیل</label>
                            <input class="m-field form-control" id="email" aria-describedby="email"
                                   placeholder="ایمیل خود را وارد کنید" tabindex="3">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 col-12 pr-lg-0">
                        <div class="form-group">
                            <label class="hi-fontSize-15 form-control-label" for="tel">تلفن همراه</label>
                            <input class="m-field form-control" id="tel" aria-describedby="tel"
                                   placeholder="- - -" tabindex="4">
                        </div>
                    </div>
                </div>
                <!--hr-->
                <div class="row px-4">
                    <div class="col-12">
                        <hr class="m-userPro-color my-4">
                    </div>
                </div>
                <!--fields-->
                <div class="row px-4 l-rtl justify-content-between">
                    <div class="col-lg-2 col-md-6 col-sm-12 col-12 pl-lg-0 Topbar_dropdown">
                        <label class="hi-fontSize-15 form-control-label" for="province">استان</label>
                        <select class="userProvince px-0" multiple="multiple" id="province" tabindex="5">
                            <option value="cheese">گیلان</option>
                            <option value="tomatoes">مازندران</option>
                            <option value="mozarella">گلستان</option>
                        </select>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 col-12 px-lg-0 Topbar_dropdown">
                        <label class="hi-fontSize-15 form-control-label" for="city">شهر</label>
                        <select class="userCity" multiple="multiple" id="city" tabindex="6">
                            <option value="cheese">رشت</option>
                            <option value="tomatoes">انزلی</option>
                            <option value="mozarella">لاهیجان</option>
                        </select>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12 px-lg-0">
                        <div class="form-group">
                            <label class="hi-fontSize-15 form-control-label" for="address">آدرس</label>
                            <input class="m-field form-control" id="address" aria-describedby="address"
                                   placeholder="خیابان ولیعصر بالاتر از پارک وی" tabindex="7">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 col-12 pr-lg-0">
                        <div class="form-group">
                            <label class="hi-fontSize-15 form-control-label" for="code">کد پستی</label>
                            <input class="m-field form-control" id="code" aria-describedby="code"
                                   placeholder="567890876544" tabindex="8">
                        </div>
                    </div>
                </div>
                <!--hr-->
                <div class="row px-4">
                    <div class="col-12">
                        <hr class="m-userPro-color my-4">
                    </div>
                </div>
                <!--fields-->
                <div class="row px-4 l-rtl ">
                    <div class="col-lg-2 col-md-6 col-sm-12 col-12 pl-lg-0">
                        <div class="form-group">
                            <label class="hi-fontSize-15 form-control-label" for="telephone">تلفن ثابت</label>
                            <input class="m-field form-control" id="telephone" aria-describedby="telephone"
                                   placeholder="شماره تلفن" tabindex="9">
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-6 col-sm-12 col-12 px-3">
                        <div class="form-group pt-4">
                            <input class="m-field form-control mt-2" id="cityCode" aria-describedby="name"
                                   placeholder="013" tabindex="10">
                        </div>
                    </div>
                </div>
                <br>
                <!--button-->
                <div class="row px-4 l-rtl">
                    <div class="col-12">
                        <button class="btn waves-effect waves-light hi-fontSize-15 px-4 m-userPro-btn" tabindex="11">ذخیره</button>
                    </div>
                </div>
                <br><br>
            </div>
        </div>
    </div>
    {{--<img src="{{asset('images/60.png')}}">--}}
    <br><br><br>
@endsection
