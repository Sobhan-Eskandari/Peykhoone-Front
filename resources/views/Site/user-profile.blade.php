@extends('layout.dashboard')
@section('backColor', 'm-navBar-transparent')
@section('marginTop', 'mt-5 pt-1')
@section('header-img')
    @include('includes.header-img')
@endsection
@section('content')
    <!--title-->

    <div class="row px-5 justify-content-center">
        <div class="col-10">
            <div class="simple-shadow-box px-5">
                <!--title-->
                <div class="row px-4">
                    <div class="col-12">
                        <h5 class="text-center">رضا جدیدی</h5>
                    </div>
                </div>
                <!--hr-->
                <div class="row px-4">
                    <div class="col-12">
                        <hr class="m-userPro-color">
                    </div>
                </div>
                <!--fields-->
                <div class="row px-4 l-rtl justify-content-between">
                    <div class="col-2 pl-0">
                        <div class="form-group">
                            <label class="hi-fontSize-15 form-control-label" for="name">نام</label>
                            <input class="m-field form-control" id="name" aria-describedby="name"
                                   placeholder="نام خود را وارد کنید" tabindex="1">
                        </div>
                    </div>
                    <div class="col-2 px-0">
                        <div class="form-group">
                            <label class="hi-fontSize-15 form-control-label" for="name">نام خانوادگی</label>
                            <input class="m-field form-control" id="name" aria-describedby="name"
                                   placeholder="نام خانوادگی خود را وارد کنید" tabindex="2">
                        </div>
                    </div>
                    <div class="col-4 px-0">
                        <div class="form-group">
                            <label class="hi-fontSize-15 form-control-label" for="name">ایمیل</label>
                            <input class="m-field form-control" id="name" aria-describedby="name"
                                   placeholder="ایمیل خود را وارد کنید" tabindex="3">
                        </div>
                    </div>
                    <div class="col-2 pr-0">
                        <div class="form-group">
                            <label class="hi-fontSize-15 form-control-label" for="name">تلفن همراه</label>
                            <input class="m-field form-control" id="name" aria-describedby="name"
                                   placeholder="- - -" tabindex="4">
                        </div>
                    </div>
                </div>
                <!--hr-->
                <div class="row px-4">
                    <div class="col-12">
                        <hr class="m-userPro-color">
                    </div>
                </div>
                <!--fields-->
                <div class="row px-4 l-rtl justify-content-between">
                    <div class="col-2 pl-0 Topbar_dropdown l-rtl">
                        <p class="hi-fontSize-13 teal-text mb-1 mt-4"><strong>نوع ملک</strong></p>
                        <select class="example-getting-started" multiple="multiple">
                            <option value="cheese">پیش فروش</option>
                            <option value="tomatoes">اجاره</option>
                        </select>
                    </div>
                    <div class="col-2 px-0">
                        <div class="form-group">
                            <label class="hi-fontSize-15 form-control-label" for="name">نام خانوادگی</label>
                            <input class="m-field form-control" id="name" aria-describedby="name"
                                   placeholder="نام خانوادگی خود را وارد کنید" tabindex="2">
                        </div>
                    </div>
                    <div class="col-4 px-0">
                        <div class="form-group">
                            <label class="hi-fontSize-15 form-control-label" for="name">ایمیل</label>
                            <input class="m-field form-control" id="name" aria-describedby="name"
                                   placeholder="ایمیل خود را وارد کنید" tabindex="3">
                        </div>
                    </div>
                    <div class="col-2 pr-0">
                        <div class="form-group">
                            <label class="hi-fontSize-15 form-control-label" for="name">تلفن همراه</label>
                            <input class="m-field form-control" id="name" aria-describedby="name"
                                   placeholder="- - -" tabindex="4">
                        </div>
                    </div>
                </div>
                <!--hr-->
                <div class="row px-4">
                    <div class="col-12">
                        <hr class="m-userPro-color">
                    </div>
                </div>
                <div class="row px-4 l-rtl ">
                    <div class="col-2 pl-0">
                        <div class="form-group">
                            <label class="hi-fontSize-15 form-control-label" for="name">تلفن ثابت</label>
                            <input class="m-field form-control" id="name" aria-describedby="name"
                                   placeholder="شماره تلفن" tabindex="1">
                        </div>
                    </div>
                    <div class="col-1 px-3">
                        <div class="form-group pt-4">
                            <input class="m-field form-control mt-2" id="name" aria-describedby="name"
                                   placeholder="013" tabindex="2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script>
    // <!— Initialize the plugin: —>
    $('.example-getting-started').multiselect({
        nonSelectedText: 'انتخاب کنید',
        includeSelectAllOption: true,
        allSelectedText: 'همه‌‌ی موارد'
    });
</script>