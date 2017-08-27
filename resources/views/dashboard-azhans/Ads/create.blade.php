@extends('layout.dashboard')

@section('backColor', 'm-navBar-transparent')
@section('marginTop', 'mt-5 pt-1')
@section('header-img')
    @include('includes.header-img')
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <ul class="stepper horizontal l-rtl">
                    <li class="step active">
                        <div class="step-title waves-effect">جزئیات</div>
                        <div class="step-content">
                            <div class="m-card-azhans pb-5">

                                {{----------- [ Title of Form  ] -----------}}
                               @component('components.azhans-form-title')
                                   @slot('title')نوع و هدف@endslot
                                @endcomponent

                                {{--------- [ Filedaie Noe va Hadafe Moamele  ] --------}}
                                <div class="container-fluid px-5 my-4">

                                    <div class="row">
                                        <div class="col-12">
                                            <p class="m-field-title"><span class="red-text">*</span> هدف</p>
                                            <div class="pure-radiobutton mt-4 l-fullWidth text-right">
                                                <input checked id="kharidVaPishkharid" name="radiobutton" type="radio">
                                                <label class="m-form-label" for="kharidVaPishkharid">فروش / پیش فروش</label>
                                            </div>
                                            <div class="pure-radiobutton mt-2 mb-3 l-fullWidth text-right">
                                                <input checked id="rahnoejare" name="radiobutton" type="radio">
                                                <label class="m-form-label" for="rahnoejare">رهن / اجاره</label>
                                            </div>
                                        </div>
                                    </div>

                                    {{----------- [ Noe va Daste bandie Melk - Modate Agahi  ] -----------}}
                                    <div class="row l-rtl Topbar_dropdown">
                                        <div class="col-md-3">
                                            <p class="m-field-title"><span class="red-text">*</span> نوع ملک</p>
                                            <select class="is-radio-dropdown">
                                                <option value="cheese">مسکونی</option>
                                                <option value="tomatoes">اجاره</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <p class="m-field-title"><span class="red-text">*</span> دسته بندی ملک</p>
                                            <select class="is-radio-dropdown">
                                                <option value="cheese">آپارتمان</option>
                                                <option value="tomatoes">اجاره</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <p class="m-field-title"><span class="red-text">*</span>مدت اعتبار آگهی</p>
                                            <select class="is-radio-dropdown">
                                                <option value="1">۱ ماه</option>
                                                <option value="2">۲ ماه</option>
                                                <option value="3">۳ ماه</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                {{----------- [ Title of Form  ] -----------}}
                                @component('components.azhans-form-title')
                                    @slot('title')مشخصات اصلی ملک@endslot
                                @endcomponent

                                {{--------- [ Filedaie Moshakhasate melk  ] --------}}
                                <div class="container-fluid px-5 mt-4">

                                    {{----------- [  Masahat Haie khoone  ] -----------}}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p class="m-field-title"><span class="red-text">*</span> مساحت ساخته شده(متر مربع)</p>
                                                <input class="m-field form-control" id="name" aria-describedby="name">
                                                <div class="form-control-feedback hi-fontSize-12">وارد کردن مساحت ساخت (زیربنا) الزامی است</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p class="m-field-title">مساحت زمین(متر مربع)</p>
                                                <input class="m-field form-control" id="name" aria-describedby="name">
                                            </div>
                                        </div>
                                    </div>

                                    {{----------- [ Tedade otagh - Tedade Parking  ] -----------}}
                                    <div class="row l-rtl Topbar_dropdown mt-4">
                                        <div class="col-md-3">
                                            <p class="m-field-title"><span class="red-text">*</span> تعداد اتاق</p>
                                            <select class="is-radio-dropdown">
                                                <option value="cheese">مسکونی</option>
                                                <option value="tomatoes">اجاره</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <p class="m-field-title">تعداد پارکینگ</p>
                                            <select class="is-radio-dropdown">
                                                <option value="cheese">آپارتمان</option>
                                                <option value="tomatoes">اجاره</option>
                                            </select>
                                        </div>
                                    </div>

                                    {{----------- [  Sale Sakht  ] -----------}}
                                    <div class="row mt-5">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p class="m-field-title"><span class="red-text">*</span>سال ساخت (هجری شمسی)</p>
                                                <input class="m-field form-control" id="name" aria-describedby="name">
                                                <div class="form-control-feedback hi-fontSize-12">سال ساخت ملک باید مشخص گردد. مثال: 1375</div>
                                            </div>
                                        </div>
                                    </div>

                                    {{----------- [  Vaziate Melk  ] -----------}}
                                    <div class="row mt-3">
                                        <div class="col-auto">
                                            <div class="pure-radiobutton mr-3 l-fullWidth text-right">
                                                <input checked id="rahnoejare" name="radiobutton" type="radio">
                                                <label class="m-form-label" for="rahnoejare">نوساز</label>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="pure-radiobutton mr-5 l-fullWidth text-right">
                                                <input checked id="rahnoejare" name="radiobutton" type="radio">
                                                <label class="m-form-label" for="rahnoejare">چند سال ساخت</label>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="pure-radiobutton mr-5 l-fullWidth text-right">
                                                <input checked id="rahnoejare" name="radiobutton" type="radio">
                                                <label class="m-form-label" for="rahnoejare">کلنگی</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-auto">
                                            <div class="pure-checkbox mr-3 l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">بازسازی شده</label>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="pure-radiobutton mr-5 l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">قابل سکونت</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{----------- [ Title of Form  ] -----------}}
                                @component('components.azhans-form-title')
                                    @slot('title')آدرس و موقعیت ملک@endslot
                                @endcomponent

                                {{--------- [ Filedaie Address va moghieate melk  ] --------}}
                                <div class="container-fluid px-5 my-4">

                                    {{----------- [ Noe va Daste bandie Melk - Modate Agahi  ] -----------}}
                                    <div class="row l-rtl Topbar_dropdown">
                                        <div class="col-md-3">
                                            <p class="m-field-title"><span class="red-text">*</span>استان</p>
                                            <select class="is-radio-dropdown">
                                                <option value="cheese">مسکونی</option>
                                                <option value="tomatoes">اجاره</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <p class="m-field-title"><span class="red-text">*</span>شهر</p>
                                            <select class="is-radio-dropdown">
                                                <option value="cheese">آپارتمان</option>
                                                <option value="tomatoes">اجاره</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <p class="m-field-title"><span class="red-text">*</span>محله</p>
                                            <select class="is-radio-dropdown">
                                                <option value="1">۱ ماه</option>
                                                <option value="2">۲ ماه</option>
                                                <option value="3">۳ ماه</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="step">
                        <div class="step-title waves-effect">ویژگی ها</div>
                        <div class="step-content">

                            <div class="step-actions">
                                <button class="waves-effect waves-dark btn next-step">CONTINUE</button>
                                <button class="waves-effect waves-dark btn-flat previous-step">BACK</button>
                            </div>
                        </div>
                    </li>
                    <li class="step">
                        <div class="step-title waves-effect">شرایط</div>
                        <div class="step-content">

                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection


@section('js_resources')

@endsection


