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
                    <li class="step">
                        <div class="step-title waves-effect">جزئیات</div>
                        <div class="step-content">
                            <div class="m-card-azhans pb-4">

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
                                            <p class="m-field-title"><span class="red-text">*</span>کاربری کنونی زمین</p>
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

                                    {{----------- [ Tedade otagh - Tedade Parking  ] -----------}}
                                    <div class="row l-rtl Topbar_dropdown mt-4">
                                        <div class="col-md-3">
                                            <p class="m-field-title"><span class="red-text">*</span> موقعیت ساختمان</p>
                                            <select class="is-radio-dropdown">
                                                <option value="cheese">مسکونی</option>
                                                <option value="tomatoes">اجاره</option>
                                            </select>
                                        </div>
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

                                    {{----------- [  Masahat Haie khoone va sale sakht  ] -----------}}
                                    <div class="row mt-5">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p class="m-field-title"><span class="red-text">*</span> مساحت ساخته شده(متر مربع)</p>
                                                <input class="m-field form-control" id="name" aria-describedby="name">
                                                <div class="form-control-feedback hi-fontSize-12">وارد کردن مساحت ساخت (زیربنا) الزامی است</div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p class="m-field-title"><span class="red-text">*</span>مساحت کل بنای ساخته شده (متر مربع)</p>
                                                <input class="m-field form-control" id="name" aria-describedby="name">
                                                <div class="form-control-feedback hi-fontSize-12">وارد کردن مساحت ساخت (زیربنا) الزامی است</div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p class="m-field-title">مساحت زمین(متر مربع)</p>
                                                <input class="m-field form-control" id="name" aria-describedby="name">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p class="m-field-title"><span class="red-text">*</span>سال ساخت (هجری شمسی)</p>
                                                <input class="m-field form-control" id="name" aria-describedby="name">
                                                <div class="form-control-feedback hi-fontSize-12">سال ساخت ملک باید مشخص گردد. مثال: 1375</div>
                                            </div>
                                        </div>
                                    </div>

                                    {{----------- [  Masahat Haie khoone va sale sakht  ] -----------}}
                                    <div class="row mt-5">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p class="m-field-title">مساحت کف (متر مربع)</p>
                                                <input class="m-field form-control" id="name" aria-describedby="name">
                                                <div class="form-control-feedback hi-fontSize-12">وارد کردن مساحت ساخت (زیربنا) الزامی است</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p class="m-field-title">مساحت بالکن (نیم طبقه)</p>
                                                <input class="m-field form-control" id="name" aria-describedby="name">
                                                <div class="form-control-feedback hi-fontSize-12">اگر مغازه دارای نیم طبقه بالکن است مساحت آن را به متر مربع در اینجا وارد نمایید.</div>
                                            </div>
                                        </div>
                                    </div>

                                    {{----------- [ Tedade bar - toole bar  ] -----------}}
                                    <div class="row l-rtl Topbar_dropdown mt-3">
                                        <div class="col-md-3">
                                            <p class="m-field-title">تعداد بر</p>
                                            <select class="is-radio-dropdown">
                                                <option value="cheese">مسکونی</option>
                                                <option value="tomatoes">اجاره</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <p class="m-field-title">تعداد دهنه</p>
                                            <select class="is-radio-dropdown">
                                                <option value="cheese">مسکونی</option>
                                                <option value="tomatoes">اجاره</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <p class="m-field-title"><span class="red-text">*</span> موقعیت ساختمان</p>
                                            <select class="is-radio-dropdown">
                                                <option value="cheese">مسکونی</option>
                                                <option value="tomatoes">اجاره</option>
                                            </select>
                                        </div>

                                        <div class="col-md-3">
                                            <p class="m-field-title">طول بر اصلی(به متر)</p>
                                            <input class="m-field form-control" id="name" aria-describedby="name">
                                        </div>
                                    </div>

                                    {{--------- [ Filedaie * نوع واگذاری  ] --------}}
                                    <div class="row l-rtl Topbar_dropdown mt-4">
                                        <div class="col-12 mb-2">
                                            <p class="m-field-title"><strong>نوع واگذاری</strong></p>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">مالکیت</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">سرقفلی</label>
                                            </div>
                                        </div>
                                    </div>

                                    {{----------- [ Mojaveze sakht  ] -----------}}
                                    <div class="row mt-4">
                                        <div class="col-auto">
                                            <div class="pure-checkbox mr-3 l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare"> دارای جواز ساخت</label>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="pure-radiobutton mr-5 l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare"> قابل تجمیع</label>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="pure-radiobutton mr-5 l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">قابل تفکیک</label>
                                            </div>
                                        </div>
                                    </div>

                                    {{----------- [  Vaziate Melk  ] -----------}}
                                    <div class="row mt-4">
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

                                    {{----------- [ Ostano shahro mahale Agahi  ] -----------}}
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

                                    {{----------- [  Address Melk  ] -----------}}
                                    <div class="row mt-5">
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <p class="m-field-title"><span class="red-text">*</span>آدرس ملک</p>
                                                <input class="m-field form-control" id="name" aria-describedby="name">
                                                <div class="form-control-feedback hi-fontSize-12">درج آدرس پستی ملک تا سرحد خیابان فرعی و یا کوچه الزامی است (مثال: میدان رز - خیابان مریم - کوچه سوم).</div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="pure-checkbox l-fullWidth mt-2 text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">آدرس ذکر شده در بالا را به عموم نمایش ندهید</label>
                                            </div>
                                        </div>
                                    </div>

                                    {{----------- [  Map Section  ] -----------}}
                                    <div class="row mt-5">
                                        <div class="col-md-9 align-self-center">
                                            <p class="white-text mb-0 py-2 px-3 ocean rounded-6"><span class="icon-placeholder"></span> با کلیک کردن روی نقشه موقعیت دقیق ملک را ثبت کنید</p>
                                        </div>
                                        <div class="col-9">
                                            <div id="google-map-rounded" class="google-map mt-3" style="height: 300px"></div>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <div class="pure-checkbox l-fullWidth mt-2 text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare"> محل مشخص شده ملک در نقشه بالا را به صورت حدودی به عموم نمایش دهید!</label>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="container-fluid px-5">
                                    <div class="row">
                                        <div class="col-12">
                                            <button class="is-wave-animated m-btn ocean next-step px-3">  ثبت و مرحله بعد <i class="fa fa-chevron-left"></i> </button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </li>
                    <li class="step ">
                        <div class="step-title waves-effect">ویژگی ها</div>
                        <div class="step-content">

                            {{--------- [ مشخصات ملک  ] --------}}
                            <div class="m-card-azhans pb-4">
                                {{----------- [ Title of Form  ] -----------}}
                                @component('components.azhans-form-title')
                                    @slot('title')مشخصات ملک@endslot
                                @endcomponent

                                {{--------- [ Filedaie Moshakhasate Melk  ] --------}}
                                <div class="container-fluid px-5 my-4">

                                    {{--------- [ Filedaie موقعیت ملک  ] --------}}
                                    <div class="row l-rtl Topbar_dropdown">
                                        <div class="col-12 mb-2">
                                            <p class="m-field-title"><strong>موقعیت ملک</strong></p>
                                        </div>
                                        <div class="col-md-3">
                                            <p class="m-field-title khakestari-title">واقع در طبقه</p>
                                            <select class="is-radio-dropdown">
                                                <option value="cheese">مسکونی</option>
                                                <option value="tomatoes">اجاره</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <p class="m-field-title khakestari-title">تعداد کل طبقات</p>
                                            <select class="is-radio-dropdown">
                                                <option value="cheese">آپارتمان</option>
                                                <option value="tomatoes">اجاره</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <p class="m-field-title khakestari-title">تعداد واحد در هر طبقه</p>
                                            <select class="is-radio-dropdown">
                                                <option value="1">۱ ماه</option>
                                                <option value="2">۲ ماه</option>
                                                <option value="3">۳ ماه</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <p class="m-field-title khakestari-title">تعداد کل واحدها</p>
                                            <select class="is-radio-dropdown">
                                                <option value="1">۱ ماه</option>
                                                <option value="2">۲ ماه</option>
                                                <option value="3">۳ ماه</option>
                                            </select>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <div class="pure-checkbox l-fullWidth mt-2 text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">واقع در مجتمع مسکونی</label>
                                            </div>
                                        </div>
                                    </div>

                                    {{--------- [ Filedaie امکانات واحد  ] --------}}
                                    <div class="row l-rtl Topbar_dropdown mt-4">
                                        <div class="col-12 mb-2">
                                            <p class="m-field-title"><strong>امکانات واحد</strong></p>
                                        </div>
                                        <div class="col-md-3">
                                            <p class="m-field-title khakestari-title">تعداد انباری</p>
                                            <select class="is-radio-dropdown">
                                                <option value="cheese">مسکونی</option>
                                                <option value="tomatoes">اجاره</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <p class="m-field-title khakestari-title">مساحت کل انباری</p>
                                                <input class="m-field form-control" id="name" aria-describedby="name">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <p class="m-field-title khakestari-title">تعداد بالکن</p>
                                            <select class="is-radio-dropdown">
                                                <option value="1">۱ ماه</option>
                                                <option value="2">۲ ماه</option>
                                                <option value="3">۳ ماه</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <p class="m-field-title khakestari-title">مساحت کل بالکن</p>
                                                <input class="m-field form-control" id="name" aria-describedby="name">
                                            </div>
                                        </div>
                                    </div>

                                    {{--------- [ Filedaie شکل ساخت Agahi  ] --------}}
                                    <div class="row l-rtl Topbar_dropdown mt-4">
                                        <div class="col-12 mb-2">
                                            <p class="m-field-title"><strong>شکل ساخت</strong></p>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-radiobutton  l-fullWidth text-right">
                                                <input checked id="kharidVaPishkharid" name="radiobutton" type="radio">
                                                <label class="m-form-label" for="kharidVaPishkharid">فلت</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-radiobutton  l-fullWidth text-right">
                                                <input checked id="kharidVaPishkharid" name="radiobutton" type="radio">
                                                <label class="m-form-label" for="kharidVaPishkharid">دوبلکس</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-radiobutton l-fullWidth text-right">
                                                <input checked id="kharidVaPishkharid" name="radiobutton" type="radio">
                                                <label class="m-form-label" for="kharidVaPishkharid">تریبلکس</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-radiobutton l-fullWidth text-right">
                                                <input checked id="kharidVaPishkharid" name="radiobutton" type="radio">
                                                <label class="m-form-label" for="kharidVaPishkharid">پنت هاوس</label>
                                            </div>
                                        </div>
                                    </div>

                                    {{--------- [ Filedaie نمای ملک  ] --------}}
                                    <div class="row l-rtl Topbar_dropdown mt-4">
                                        <div class="col-12 mb-2">
                                            <p class="m-field-title"><strong>نمای ملک</strong></p>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">سنگ</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">آجر</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">سیمان</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">شیشه</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">چوب</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">کامپوزیت</label>
                                            </div>
                                        </div>
                                        <div class="col-2 mt-3">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">نورپردازی</label>
                                            </div>
                                        </div>
                                    </div>

                                    {{--------- [ Filedaie اسکلت ساختمان  ] --------}}
                                    <div class="row l-rtl Topbar_dropdown mt-4">
                                        <div class="col-12 mb-2">
                                            <p class="m-field-title"><strong>اسکلت ساختمان</strong></p>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">بتنی</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">فلزی</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">آجری</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">چوبی</label>
                                            </div>
                                        </div>
                                    </div>

                                    {{--------- [ Filedaie کف  ] --------}}
                                    <div class="row l-rtl Topbar_dropdown mt-4">
                                        <div class="col-12 mb-2">
                                            <p class="m-field-title"><strong>کف</strong></p>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">سنگ</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">سرامیک</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">پارکت</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">کفپوش</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">موکت</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">موزاییک</label>
                                            </div>
                                        </div>
                                        <div class="col-2 mt-3">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">سیمان</label>
                                            </div>
                                        </div>
                                        <div class="col-2 mt-3">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">کف پله دار</label>
                                            </div>
                                        </div>
                                    </div>

                                    {{--------- [ Filedaie دیوار  ] --------}}
                                    <div class="row l-rtl Topbar_dropdown mt-4">
                                        <div class="col-12 mb-2">
                                            <p class="m-field-title"><strong>دیوار</strong></p>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">رنگ</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">سنگ</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">کاشی/ سرامیک</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">کاغذ دیواری</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">چوب / دیوارکوب</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">سیمان</label>
                                            </div>
                                        </div>
                                        <div class="col-2 mt-3">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">گچ</label>
                                            </div>
                                        </div>
                                        <div class="col-2 mt-3">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">آجر</label>
                                            </div>
                                        </div>
                                    </div>

                                    {{--------- [ Filedaie دید و منظر  ] --------}}
                                    <div class="row l-rtl Topbar_dropdown mt-4">
                                        <div class="col-12 mb-2">
                                            <p class="m-field-title"><strong>دید و منظر</strong></p>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">شهر</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">اتوبان</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">خیابان</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">کوچه</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">دریا</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">جنگل</label>
                                            </div>
                                        </div>
                                        <div class="col-2 mt-3">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">کوه</label>
                                            </div>
                                        </div>
                                        <div class="col-2 mt-3">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">باغ</label>
                                            </div>
                                        </div>
                                    </div>

                                    {{--------- [ Filedaie نورگیر  ] --------}}
                                    <div class="row l-rtl Topbar_dropdown mt-4">
                                        <div class="col-12 mb-2">
                                            <p class="m-field-title"><strong>نورگیر</strong></p>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">شمال</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">جنوب</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">شرق</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">غرب</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{--------- [ امکانات ملک  ] --------}}
                            <div class="m-card-azhans mt-4 pb-4">
                                {{----------- [ Title of Form  ] -----------}}
                                @component('components.azhans-form-title')
                                    @slot('title')امکانات ملک@endslot
                                @endcomponent

                                {{--------- [ Filedaie Moshakhasate Melk  ] --------}}
                                <div class="container-fluid px-5 my-4">

                                    {{--------- [ Filedaie سرویس بهداشتی  ] --------}}
                                    <div class="row l-rtl Topbar_dropdown mt-4">
                                        <div class="col-12 mb-2">
                                            <p class="m-field-title"><strong>سرویس بهداشتی</strong></p>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">ایرانی</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">فرنگی</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">حمام</label>
                                            </div>
                                        </div>
                                    </div>

                                    {{--------- [ Filedaie نشیمن و پذیرایی  ] --------}}
                                    <div class="row l-rtl Topbar_dropdown mt-4">
                                        <div class="col-12 mb-2">
                                            <p class="m-field-title"><strong>نشیمن و پذیرایی</strong></p>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">شومینه</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">سقف بالای ۴ متر</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">مبله</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">آشپزخانه</label>
                                            </div>
                                        </div>
                                    </div>

                                    {{--------- [ Filedaie اتاق انتظار و پذیرایی  ] --------}}
                                    <div class="row l-rtl Topbar_dropdown mt-4">
                                        <div class="col-12 mb-2">
                                            <p class="m-field-title"><strong>اتاق انتظار و پذیرایی</strong></p>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">سقف بالای ۴ متر</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">مبله</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">آشپزخانه</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">آبدارخانه</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">غذاخوری</label>
                                            </div>
                                        </div>
                                    </div>

                                    {{--------- [ Filedaie تجهیزات سرمایشی گرمایشی  ] --------}}
                                    <div class="row l-rtl Topbar_dropdown mt-4">
                                        <div class="col-12 mb-2">
                                            <p class="m-field-title"><strong>تجهیزات سرمایشی گرمایشی</strong></p>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">کولر آبی</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">کولرگازی/ اسپلیت</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">بخاری</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">پکیج / رادیاتور</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">موکت</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">دیگ/ رادیاتور</label>
                                            </div>
                                        </div>
                                        <div class="col-2 mt-3">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">چیلر / فن کوئل</label>
                                            </div>
                                        </div>
                                        <div class="col-2 mt-3">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">آبگرمکن خورشیدی</label>
                                            </div>
                                        </div>
                                        <div class="col-2 mt-3">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">هوا ساز</label>
                                            </div>
                                        </div>
                                    </div>

                                    {{--------- [ Filedaie تجهیزات رفاهی  ] --------}}
                                    <div class="row l-rtl Topbar_dropdown mt-4">
                                        <div class="col-12 mb-2">
                                            <p class="m-field-title"><strong>تجهیزات رفاهی</strong></p>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">آسانسور</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">درب پارکینگ ریموت دار</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">شوتینگ زباله</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">آنتن مرکزی</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">اینترنت پر سرعت</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">شبکه داخلی</label>
                                            </div>
                                        </div>
                                    </div>

                                    {{--------- [ Filedaie تجهیزات ایمنی امنیتی  ] --------}}
                                    <div class="row l-rtl Topbar_dropdown mt-4">
                                        <div class="col-12 mb-2">
                                            <p class="m-field-title"><strong>تجهیزات ایمنی امنیتی</strong></p>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">دزدگیر</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">دوربین مدار بسته</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">آیفون تصویری</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">درب ضد سرقت</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">دریا</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">سیستم اعلام آتش</label>
                                            </div>
                                        </div>
                                        <div class="col-2 mt-3">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">سیستم اطفاء حریق</label>
                                            </div>
                                        </div>
                                    </div>

                                    {{--------- [ Filedaie امکانات ساختمان  ] --------}}
                                    <div class="row l-rtl Topbar_dropdown mt-4">
                                        <div class="col-12 mb-2">
                                            <p class="m-field-title"><strong>امکانات ساختمان</strong></p>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">حیاط</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">حیاط خلوت</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">فضای سبز</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">سرایداری</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">نگهبانی</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">لابی</label>
                                            </div>
                                        </div>
                                        <div class="col-2 mt-3">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">سالن اجتماعات</label>
                                            </div>
                                        </div>
                                        <div class="col-2 mt-3">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">باغ</label>
                                            </div>
                                        </div>
                                        <div class="col-2 mt-3">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">آلاچیق</label>
                                            </div>
                                        </div>
                                        <div class="col-2 mt-3">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">آب نما</label>
                                            </div>
                                        </div>
                                        <div class="col-2 mt-3">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">بام سبز</label>
                                            </div>
                                        </div>
                                        <div class="col-2 mt-3">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">باربیکیو</label>
                                            </div>
                                        </div>
                                    </div>

                                    {{--------- [ Filedaie امکانات ورزشی  ] --------}}
                                    <div class="row l-rtl Topbar_dropdown mt-4">
                                        <div class="col-12 mb-2">
                                            <p class="m-field-title"><strong>امکانات ورزشی</strong></p>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">استخر</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">سونا</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">جکوزی</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">بیلیارد</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">فوتبال</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">بسکتبال</label>
                                            </div>
                                        </div>
                                        <div class="col-2 mt-3">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">والیبال</label>
                                            </div>
                                        </div>
                                        <div class="col-2 mt-3">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">اسکواش</label>
                                            </div>
                                        </div>
                                        <div class="col-2 mt-3">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">تنیس</label>
                                            </div>
                                        </div>
                                        <div class="col-2 mt-3">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">پینگ پنگ</label>
                                            </div>
                                        </div>
                                        <div class="col-2 mt-3">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">سالن بدن سازی</label>
                                            </div>
                                        </div>
                                        <div class="col-2 mt-3">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">زمین بازی کودکان</label>
                                            </div>
                                        </div>
                                    </div>

                                    {{--------- [ Filedaie اکاربری پیشنهادی  ] --------}}
                                    <div class="row l-rtl Topbar_dropdown mt-4">
                                        <div class="col-12 mb-2">
                                            <p class="m-field-title"><strong>کاربری پیشنهادی</strong></p>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">مسکونی</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">اداری</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">تجاری</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">صنعتی</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">تفریحی - ورزشی</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">آموزشی</label>
                                            </div>
                                        </div>
                                        <div class="col-2 mt-3">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">توریستی</label>
                                            </div>
                                        </div>
                                        <div class="col-2 mt-3">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">دامپروری</label>
                                            </div>
                                        </div>
                                        <div class="col-2 mt-3">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">کشاورزی</label>
                                            </div>
                                        </div>
                                        <div class="col-2 mt-3">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">باغشهر - شهرک سازی</label>
                                            </div>
                                        </div>
                                        <div class="col-2 mt-3">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">خدماتی رفاهی</label>
                                            </div>
                                        </div>
                                        <div class="col-2 mt-3">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">انبار</label>
                                            </div>
                                        </div>
                                        <div class="col-2 mt-3">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">پارکینگ</label>
                                            </div>
                                        </div>
                                    </div>

                                    {{--------- [ Filedaie دسترسی  ] --------}}
                                    <div class="row l-rtl Topbar_dropdown mt-4">
                                        <div class="col-12 mb-2">
                                            <p class="m-field-title"><strong>دسترسی</strong></p>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">بزرگراه</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">خیابان اصلی</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">خیابان فرعی</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">میدان</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">کوچه</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">بن بست</label>
                                            </div>
                                        </div>
                                        <div class="col-3 mt-3">
                                            <div class="form-group">
                                                <p class="m-field-title khakestari-title">عرض گذر اصلی</p>
                                                <input class="m-field form-control" id="name" aria-describedby="name">
                                            </div>
                                        </div>
                                    </div>

                                    {{--------- [ Filedaie تتاسیسات  ] --------}}
                                    <div class="row l-rtl Topbar_dropdown mt-4">
                                        <div class="col-12 mb-2">
                                            <p class="m-field-title"><strong>تاسیسات</strong></p>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">آب شهری</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">برق</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">گاز</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">ژنراتور برق</label>
                                            </div>
                                        </div>
                                    </div>

                                    {{--------- [ Filedaie خط تلفن  ] --------}}
                                    <div class="row l-rtl Topbar_dropdown mt-4">
                                        <div class="col-3">
                                            <p class="m-field-title">خط تلفن</p>
                                            <select class="is-radio-dropdown">
                                                <option value="cheese">مسکونی</option>
                                                <option value="tomatoes">اجاره</option>
                                            </select>
                                        </div>
                                    </div>

                                    {{--------- [ Filedaie مشخصات سند  ] --------}}
                                    <div class="row l-rtl Topbar_dropdown mt-4">
                                        <div class="col-12 mb-2">
                                            <p class="m-field-title"><strong>مشخصات سند</strong></p>
                                        </div>
                                        <div class="col-3">
                                            <p class="m-field-title">میزان مالکیت</p>
                                            <select class="is-radio-dropdown">
                                                <option value="cheese">مسکونی</option>
                                                <option value="tomatoes">اجاره</option>
                                            </select>
                                        </div>
                                        <div class="col-3">
                                            <p class="m-field-title">نوع مالکیت</p>
                                            <select class="is-radio-dropdown">
                                                <option value="cheese">مسکونی</option>
                                                <option value="tomatoes">اجاره</option>
                                            </select>
                                        </div>
                                        <div class="col-2 align-self-center">
                                            <div class="pure-checkbox mr-3 l-fullWidth text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">سند در دست اقدام</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{--------- [ توضیحات ملک  ] --------}}
                            <div class="m-card-azhans mt-4 pb-2">
                                {{----------- [ Title of Form  ] -----------}}
                                @component('components.azhans-form-title')
                                    @slot('title')توضیحات ملک@endslot
                                @endcomponent

                                {{--------- [ توضیحات ملک  ] --------}}
                                <div class="container-fluid px-5 my-4">
                                    <div class="row l-rtl mt-4">
                                        <div class="col-9 mb-2">
                                            <div class="form-group">
                                                <p class="m-field-title khakestari-title">توضیحات کامل در مورد ملک</p>
                                                <textarea rows="7" class="m-field form-control" id="name" aria-describedby="name"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{--------- [ Continue to next page  ] --------}}
                            <div class="container-fluid mt-4">
                                <div class="row">
                                    <div class="col-12">
                                        <button class="is-wave-animated m-btn  ocean next-step px-3">  ثبت و مرحله بعد <i class="fa fa-chevron-left"></i> </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="step active">
                        <div class="step-title waves-effect">شرایط</div>
                        <div class="step-content">
                            {{--------- [ قیمت و شرایط معامله  ] --------}}
                            <div class="m-card-azhans mt-4 pb-2">
                                {{----------- [ Title of Form  ] -----------}}
                                @component('components.azhans-form-title')
                                    @slot('title')قیمت و شرایط معامله@endslot
                                @endcomponent

                                {{--------- [ قیمت و شرایط معامله - 1   ] --------}}
                                <div class="container-fluid px-5 my-4">
                                    <div class="row l-rtl mt-4">
                                        <div class="col-6 mb-2">
                                            <div class="form-group">
                                                <p class="m-field-title"><span class="red-text">*</span> قیمت نهایی فروش (تومان)</p>
                                                <input type="text" class="m-field form-control" id="name" aria-describedby="name">
                                                <div class="form-control-feedback hi-fontSize-12">وارد کردن مبلغ نهایی فروش الزامی است. نباید مبلغ وام و یا رهن از این مبلغ کسر گردد.
                                                    در صورتی که این مبلغ صحیح وارد نشود، آگهی نمایش داده نخواهد شد. مثال: 150,000,000</div>
                                            </div>
                                        </div>
                                    </div>

                                    {{--------- [ معاوضه ملک  ] --------}}
                                    <div class="row l-rtl mt-4">
                                        <div class="col-md-12">
                                            <div class="pure-checkbox l-fullWidth text-right">
                                                <input checked id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">معاوضه</label>
                                            </div>
                                        </div>
                                        <div class="col-6 mt-2">
                                            <div class="form-group">
                                                <p class="m-field-title"><span class="red-text">*</span>سقف مبلغ معاوضه (تومان)</p>
                                                <input type="text" class="m-field form-control" id="name" aria-describedby="name">
                                                <div class="form-control-feedback hi-fontSize-12">حداکثر قیمت ملکی که میخواهید با آن معاوضه نمایید.</div>
                                            </div>
                                        </div>
                                    </div>

                                    {{--------- [ پیش فروش ملک  ] --------}}
                                    <div class="row l-rtl mt-4">
                                        <div class="col-md-12">
                                            <div class="pure-checkbox l-fullWidth text-right">
                                                <input checked id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">پیش فروش</label>
                                            </div>
                                        </div>
                                        <div class="col-6 mt-2">
                                            <div class="form-group">
                                                <p class="m-field-title"><span class="red-text">*</span>مبلغ پیش پرداخت (تومان)</p>
                                                <input type="text" class="m-field form-control" id="name" aria-describedby="name">
                                                <div class="form-control-feedback hi-fontSize-12">مبلغی را که خریدار در هنگام عقد قرارداد به صورت نقدی خواهد پرداخت را وارد نمایید</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 mt-2">
                                            <div class="form-group">
                                                <p class="m-field-title"><span class="red-text">*</span>زمان تحویل (به ماه)</p>
                                                <input type="number" class="m-field form-control" id="name" aria-describedby="name">
                                                <div class="form-control-feedback hi-fontSize-12">چند ماه دیگر این ملک آماده تحویل خواهد شد. مثال: 18</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 mt-2 Topbar_dropdown">
                                            <p class="m-field-title"><span class="red-text">*</span>میزان ساخت انجام شده</p>
                                            <select class="is-radio-dropdown">
                                                <option value="cheese">مسکونی</option>
                                                <option value="tomatoes">اجاره</option>
                                            </select>
                                        </div>
                                    </div>

                                    {{--------- [ دارای وام  ] --------}}
                                    <div class="row l-rtl mt-4">
                                        <div class="col-md-12">
                                            <div class="pure-checkbox l-fullWidth text-right">
                                                <input checked id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">دارای وام</label>
                                            </div>
                                        </div>
                                        <div class="col-6 mt-2">
                                            <div class="form-group">
                                                <p class="m-field-title"><span class="red-text">*</span>میزان وام (تومان)</p>
                                                <input type="text" class="m-field form-control" id="name" aria-describedby="name">
                                                <div class="form-control-feedback hi-fontSize-12">مقدار وام را به تومان وارد نمایید. مثال: 20000000</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 mt-2">
                                            <div class="form-group">
                                                <p class="m-field-title"><span class="red-text">*</span>سود وام (درصد)</p>
                                                <input type="number" class="m-field form-control" id="name" aria-describedby="name">
                                                <div class="form-control-feedback hi-fontSize-12">مقدار سود سالیانه وام به درصد. مثال: 25</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 mt-2">
                                            <div class="form-group">
                                                <p class="m-field-title"><span class="red-text">*</span>تعداد اقساط باقیمانده (عدد)</p>
                                                <input type="number" class="m-field form-control" id="name" aria-describedby="name">
                                                <div class="form-control-feedback hi-fontSize-12">میزان اقساط باقی مانده: مثال 36</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 mt-2">
                                            <div class="form-group">
                                                <p class="m-field-title"><span class="red-text">*</span>مبلغ هر قسط (تومان)</p>
                                                <input type="number" class="m-field form-control" id="name" aria-describedby="name">
                                                <div class="form-control-feedback hi-fontSize-12">مبلغ هر قسط را به تومان وارد نمایید. مثال: 700000</div>
                                            </div>
                                        </div>
                                    </div>

                                    {{--------- [ فروش با مستاجر  ] --------}}
                                    <div class="row l-rtl mt-4">
                                        <div class="col-md-12">
                                            <div class="pure-checkbox l-fullWidth text-right">
                                                <input checked id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">فروش با مستاجر</label>
                                            </div>
                                        </div>
                                        <div class="col-6 mt-2">
                                            <div class="form-group">
                                                <p class="m-field-title"><span class="red-text">*</span>مبلغ رهن (تومان)</p>
                                                <input type="text" class="m-field form-control" id="name" aria-describedby="name">
                                                <div class="form-control-feedback hi-fontSize-12">مبلغ را که به عنوان ودیعه از طرف مستاجر در اختیار شماست. مثال: 20000000</div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                {{--------- [ قیمت و شرایط معامله - اجاره مرحله ۳ مسکونی   ] --------}}
                                <div class="container-fluid px-5 my-4">

                                    <div class="row l-rtl mt-4">
                                        <div class="col-6 mb-2">
                                            <div class="form-group">
                                                <p class="m-field-title"><span class="red-text">*</span> مبلغ ودیعه (تومان)</p>
                                                <input type="text" class="m-field form-control" id="name" aria-describedby="name">
                                                <div class="form-control-feedback hi-fontSize-12">ذکر مبلغ ودیعه الزامی است. مثال: 50,000,000</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row l-rtl mt-4">
                                        <div class="col-6 mb-2">
                                            <div class="form-group">
                                                <p class="m-field-title"><span class="red-text">*</span> مبلغ اجاره ماهیانه (تومان)</p>
                                                <input type="text" class="m-field form-control" id="name" aria-describedby="name">
                                                <div class="form-control-feedback hi-fontSize-12">برای رهن کامل عدد صفر وارد نمایید</div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            {{--------- [ بارگذاری تصاویر  ] --------}}
                            <div class="m-card-azhans mt-4 pb-2">
                                {{----------- [ Title of Form  ] -----------}}
                                @component('components.azhans-form-title')
                                    @slot('title')بارگذاری تصاویر@endslot
                                @endcomponent

                                {{--------- [  بارگذاری تصاویر  ] --------}}
                                <div class="container-fluid px-5 my-4">

                                </div>
                            </div>

                            {{--------- [ مشخصات آگهی دهنده ] --------}}
                            <div class="m-card-azhans mt-4 pb-2">
                                {{----------- [ Title of Form  ] -----------}}
                                @component('components.azhans-form-title')
                                    @slot('title')مشخصات آگهی دهنده@endslot
                                @endcomponent

                                {{--------- [  مشخصات آگهی دهنده  ] --------}}
                                <div class="container-fluid px-5 my-4">
                                    <div class="row l-rtl mt-4">
                                        <div class="col-3">
                                            <div class="form-group">
                                                <p class="m-field-title khakestari-title">نام مشاور</p>
                                                <input class="m-field form-control" id="name" aria-describedby="name">
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <p class="m-field-title khakestari-title">تلفن ثابت</p>
                                                <input class="m-field form-control" id="name" aria-describedby="name">
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <p class="m-field-title khakestari-title">تلفن همراه</p>
                                                <input class="m-field form-control" id="name" aria-describedby="name">
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <div class="form-group">
                                                <p class="m-field-title khakestari-title">نحوه بازدید</p>
                                                <textarea rows="7" class="m-field form-control" id="name" aria-describedby="name"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            {{--------- [ Continue to next page  ] --------}}
                            <div class="container-fluid mt-4">
                                <div class="row">
                                    <div class="col-12 p-0">
                                        <button class="is-wave-animated hi-fontSize-15 m-btn cyan hi-shadow-1 next-step px-4"> ثبت و بارگذاری </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection


@section('js_resources')
    <script>
        function initMap() {
            var uluru = {lat: 48.8583739, lng: 2.2924872};
            var map = new google.maps.Map(document.getElementById('google-map-rounded'), {
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

