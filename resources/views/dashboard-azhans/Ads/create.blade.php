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
                <ul class="stepper horizontal l-rtl mix-container">
                    <li class="step active">
                        <div class="step-title waves-effect">جزئیات</div>
                        <div class="step-content">
                            <div class="m-card-azhans pb-4">

                                {{----------- [ Title of Form  ] -----------}}
                               @component('components.azhans-form-title')
                                   @slot('title')نوع و هدف@endslot
                                @endcomponent

                                {{--------- [ Filedaie Noe va Hadafe Moamele * هدف ] --------}}
                                <div class="container-fluid px-5 my-4">
                                    <div class="row">
                                        <div class="col-12">
                                            <p class="m-field-title"><span class="red-text">*</span> هدف</p>
                                            <div class="pure-radiobutton mt-4 l-fullWidth text-right">
                                                <input id="foroosh_pishforoosh" checked="checked" name="radiobutton" type="radio">
                                                <label class="m-form-label" for="foroosh_pishforoosh">فروش / پیش فروش</label>
                                            </div>
                                            <div class="pure-radiobutton mt-2 mb-3 l-fullWidth text-right">
                                                <input id="rahn_ejare" name="radiobutton" type="radio">
                                                <label class="m-form-label" for="rahn_ejare">رهن / اجاره</label>
                                            </div>
                                        </div>
                                    </div>

                                    {{----------- [ * نوع ملک - دسته بندی ملک - کاربری کنونی زمین - مدت اعتبار آگهی  ] -----------}}
                                    <div class="row l-rtl Topbar_dropdown">
                                        <div class="col-md-3 mix is-typeof-maskooni is-typeof-edari is-typeof-zamin is-typeof-tejari is-typeof-mostaghelat">
                                            <label for="noe_melk" class="m-field-title"><span class="red-text">*</span> نوع ملک</label>
                                            <select id="noe_melk" name="noe_melk" class="is-radio-dropdown">
                                                <option value="1">مسکونی (خانه)</option>
                                                <option value="2">اداری (دفترکار)</option>
                                                <option value="3">تجاری (مغازه)</option>
                                                <option value="4">زمین</option>
                                                <option value="5">مستغلات (کل ملک و زمین)</option>
                                            </select>
                                        </div>
                                        {{--done--}}
                                        <div class="col-md-3 mix is-typeof-maskooni is-typeof-edari" data-order="1">
                                            <label for="dastebandie_melk" class="m-field-title"><span class="red-text">*</span> دسته بندی ملک</label>
                                            <select id="dastebandie_melk" name="dastebandie_melk" class="is-radio-dropdown">
                                                <option value="cheese">یک واحد آپارتمانی</option>
                                                <option value="tomatoes">یک طبقه از خانه دو یا سه طبقه</option>
                                                <option value="cheese">ویلا</option>
                                            </select>
                                        </div>
                                        {{--done--}}
                                        <div class="col-md-3 mix is-typeof-mostaghelat" >
                                            <label for="dastebandie_mostaghelat" class="m-field-title"><span class="red-text">*</span> دسته بندی ملک</label>
                                            <select id="dastebandie_mostaghelat" name="dastebandie_mostaghelat" class="is-radio-dropdown">
                                                <option value="ac101">باغ - باغچه</option>
                                                <option value="ac1">کل آپارتمان یا مجتمع مسکونی یکجا</option>
                                                <option value="ac3">کل خانه ۲ یا ۳ طبقه با زمین یکجا</option>
                                                <option value="ac118">کل پاساژ یا مرکز خرید</option>
                                                <option value="ac102">انبار</option>
                                                <option value="ac103">پارکینگ</option>
                                                <option value="ac104">سوله</option>
                                                <option value="ac105">کارگاه</option>
                                                <option value="ac106">کارخانه</option>
                                                <option value="ac107">استخر</option>
                                                <option value="ac108">سالن ورزشی</option>
                                                <option value="ac109">سینما</option>
                                                <option value="ac110">تئاتر</option>
                                                <option value="ac111">سفره خانه</option>
                                                <option value="ac112">رستوران</option>
                                                <option value="ac113">پرورش دام</option>
                                                <option value="ac114">مرغداری</option>
                                                <option value="ac115">پرورش ماهی</option>
                                                <option value="ac116">هتل</option>
                                                <option value="ac117">مسافر خانه</option>
                                            </select>
                                        </div>
                                        {{--done--}}
                                        <div class="col-md-3 mix is-typeof-zamin" >
                                            <label for="karbarie_zamin" class="m-field-title"><span class="red-text">*</span>کاربری کنونی زمین</label>
                                            <select id="karbarie_zamin" name="karbarie_zamin" class="is-radio-dropdown">
                                                <option value="cheese">مسکونی</option>
                                                <option value="tomatoes">اداری</option>
                                                <option value="tomatoes">تجاری</option>
                                                <option value="tomatoes">صنعتی</option>
                                                <option value="tomatoes">تفریحی - ورزشی</option>
                                                <option value="tomatoes">آموزشی</option>
                                                <option value="tomatoes">توریستی</option>
                                                <option value="tomatoes">دامپروری</option>
                                                <option value="tomatoes">کشاورزی</option>
                                                <option value="tomatoes">باغشهر - مناسب برای شهرک سازی</option>
                                                <option value="tomatoes">خدماتی - رفاهی</option>
                                                <option value="tomatoes">انبار</option>
                                                <option value="tomatoes">پارکینگ</option>
                                                <option value="tomatoes">بایر</option>
                                            </select>
                                        </div>
                                        {{--done--}}
                                        <div class="col-md-3 mix is-typeof-edari is-typeof-mostaghelat is-typeof-tejari is-typeof-maskooni is-typeof-zamin" >
                                            <label for="modate_agahi" class="m-field-title"><span class="red-text">*</span>مدت اعتبار آگهی</label>
                                            <select name="modate_agahi" id="modate_agahi" class="is-radio-dropdown">
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

                                    {{----------- [  Masahat Haie khoone va sale sakht  ] -----------}}
                                    <div class="row mt-3 mix is-typeof-maskooni is-typeof-edari is-typeof-mostaghelat is-typeof-zamin">
                                        {{--done--}}
                                        <div class="col-md-5 mix is-typeof-maskooni is-typeof-edari" >
                                            <div class="form-group">
                                                <label for="masahate_sakhteShode" class="m-field-title"><span class="red-text">*</span> مساحت ساخته شده(متر مربع)</label>
                                                <input type="number" min="10" class="m-field form-control" id="masahate_sakhteShode" aria-describedby="masahate_sakhteShode">
                                                <div class="form-control-feedback hi-fontSize-12">وارد کردن مساحت ساخت (زیربنا) الزامی است</div>
                                            </div>
                                        </div>
                                        {{--done--}}
                                        <div class="col-md-4 mix is-typeof-mostaghelat" >
                                            <div class="form-group">
                                                <label for="masahate_kol" class="m-field-title"><span class="red-text">*</span>مساحت کل بنای ساخته شده (متر مربع)</label>
                                                <input class="m-field form-control" id="masahate_kol" aria-describedby="masahate_kol">
                                                <div class="form-control-feedback hi-fontSize-12">وارد کردن مساحت ساخت (زیربنا) الزامی است</div>
                                            </div>
                                        </div>
                                        {{--done--}}
                                        <div class="col-md-5 mix is-typeof-maskooni is-typeof-edari is-typeof-mostaghelat" >
                                            <div class="form-group">
                                                <label for="masahate_zamin" class="m-field-title">مساحت زمین(متر مربع)</label>
                                                <input type="number" min="10" class="m-field form-control" id="masahate_zamin" aria-describedby="masahate_zamin">
                                            </div>
                                        </div>
                                        {{--done--}}
                                        <div class="col-md-6 mix is-typeof-zamin" >
                                            <div class="form-group">
                                                <label for="masahate_zamin_eslah" class="m-field-title"><span class="red-text">*</span> *مساحت زمین پس از اصلاحی (متر مربع)</label>
                                                <input type="number" min="10" class="m-field form-control" id="masahate_zamin_eslah" aria-describedby="masahate_zamin_eslah">
                                            </div>
                                        </div>
                                    </div>

                                    {{----------- [  Masahat Haie khoone va sale sakht  ] -----------}}
                                    <div class="row mt-3 mix is-typeof-tejari" >
                                        {{--done--}}
                                        <div class="col-md-5 mix is-typeof-tejari">
                                            <div class="form-group">
                                                <label for="masahate_kaf" class="m-field-title">مساحت کف (متر مربع)</label>
                                                <input type="number" min="10" class="m-field form-control" id="masahate_kaf" aria-describedby="masahate_kaf">
                                                <div class="form-control-feedback hi-fontSize-12">وارد کردن مساحت ساخت (زیربنا) الزامی است</div>
                                            </div>
                                        </div>
                                        {{--done--}}
                                        <div class="col-md-5 mix is-typeof-tejari">
                                            <div class="form-group">
                                                <label for="masahate_balkon_nimtabaghe" class="m-field-title">مساحت بالکن (نیم طبقه)</label>
                                                <input type="number" min="10" class="m-field form-control" id="masahate_balkon_nimtabaghe" aria-describedby="masahate_balkon_nimtabaghe">
                                                <div class="form-control-feedback hi-fontSize-12">اگر مغازه دارای نیم طبقه بالکن است مساحت آن را به متر مربع در اینجا وارد نمایید.</div>
                                            </div>
                                        </div>
                                    </div>

                                    {{----------- [ Tedade otagh - Tedade Parking  ] -----------}}
                                    <div class="row l-rtl Topbar_dropdown mt-2 mix is-typeof-edari is-typeof-mostaghelat is-typeof-tejari is-typeof-maskooni">
                                        {{--done--}}
                                        <div class="col-md-4 mix is-typeof-edari" >
                                            <label for="mogheiate_sakhteman" class="m-field-title"><span class="red-text">*</span> موقعیت ساختمان</label>
                                            <select name="" id="mogheiate_sakhteman" class="is-radio-dropdown">
                                                <option value="cheese">ساختمان مسکونی با موقعیت اداری</option>
                                                <option value="tomatoes">ساختمان اداری با سند اداری</option>
                                            </select>
                                        </div>
                                        {{--done--}}
                                        <div class="col-md-3 mix is-typeof-tejari" >
                                            <label for="mogheiate_maghaze" class="m-field-title"><span class="red-text">*</span> موقعیت مغازه</label>
                                            <select name="" id="mogheiate_maghaze" class="is-radio-dropdown">
                                                <option value="cheese">مغازه کنار گذر</option>
                                                <option value="tomatoes">مغازه داخل پاساژ یا مرکز خرید</option>
                                            </select>
                                        </div>
                                        {{--done--}}
                                        <div class="col-md-3 mix is-typeof-tejari is-typeof-zamin is-typeof-mostaghelat" >
                                            <label for="tedade_bar" class="m-field-title">تعداد بر</label>
                                            <select name="tedade_bar" id="tedade_bar" class="is-radio-dropdown">
                                                <option value="cheese">۱ نبش</option>
                                                <option value="cheese">۲ نبش</option>
                                                <option value="cheese">۳ نبش</option>
                                                <option value="cheese">۴ نبش</option>
                                            </select>
                                        </div>
                                        {{--done--}}
                                        <div class="col-md-3 mix is-typeof-tejari" >
                                            <label for="tedade_dahane" class="m-field-title">تعداد دهنه</label>
                                            <select id="tedade_dahane" name="tedade_dahane" class="is-radio-dropdown">
                                                <option value="cheese">۱ دهنه</option>
                                                <option value="cheese">۲ دهنه</option>
                                                <option value="cheese">۳ دهنه</option>
                                                <option value="cheese">۴ دهنه</option>
                                                <option value="cheese">۵ دهنه</option>
                                                <option value="cheese">بیش از ۵ دهنه</option>
                                            </select>
                                        </div>
                                        {{--done--}}
                                        <div class="col-md-3 mix is-typeof-maskooni is-typeof-edari" >
                                            <label for="tedade_otagh" class="m-field-title"> تعداد اتاق</label>
                                            <select id="tedade_otagh" name="tedade_otagh" class="is-radio-dropdown">
                                                <option value="cheese">ندارد</option>
                                                <option value="tomatoes">۱ عدد</option>
                                                <option value="tomatoes">۲ عدد</option>
                                                <option value="tomatoes">۳ عدد</option>
                                                <option value="tomatoes">۴ عدد</option>
                                                <option value="tomatoes">۵ عدد</option>
                                                <option value="tomatoes">۶ عدد</option>
                                                <option value="tomatoes">۷ عدد</option>
                                                <option value="tomatoes">۸ عدد</option>
                                                <option value="tomatoes">۹ عدد</option>
                                                <option value="tomatoes">۱۰ عدد</option>
                                                <option value="tomatoes">بیش از ۱۰ عدد</option>
                                            </select>
                                        </div>
                                        {{--done--}}
                                        <div class="col-md-3 mix is-typeof-maskooni is-typeof-edari" >
                                            <label for="tedade_parking" class="m-field-title">تعداد پارکینگ</label>
                                            <select id="tedade_parking" name="tedade_parking" class="is-radio-dropdown">
                                                <option value="cheese">ندارد</option>
                                                <option value="tomatoes">۱ عدد</option>
                                                <option value="tomatoes">۲ عدد</option>
                                                <option value="tomatoes">۳ عدد</option>
                                                <option value="tomatoes">۴ عدد</option>
                                                <option value="tomatoes">۵ عدد</option>
                                                <option value="tomatoes">۶ عدد</option>
                                                <option value="tomatoes">۷ عدد</option>
                                                <option value="tomatoes">۸ عدد</option>
                                                <option value="tomatoes">۹ عدد</option>
                                                <option value="tomatoes">۱۰ عدد</option>
                                                <option value="tomatoes">بیش از ۱۰ عدد</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mt-4 mix is-typeof-maskooni is-typeof-edari is-typeof-mostaghelat">
                                        {{--done--}}
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="sal_sakht" class="m-field-title"><span class="red-text">*</span>سال ساخت (هجری شمسی)</label>
                                                <input type="number" min="0" class="m-field form-control" id="sal_sakht" aria-describedby="name">
                                                <div class="form-control-feedback hi-fontSize-12">سال ساخت ملک باید مشخص گردد. مثال: 1375</div>
                                            </div>
                                        </div>
                                    </div>

                                    {{----------- [ Tedade bar - toole bar  ] -----------}}
                                    <div class="row l-rtl Topbar_dropdown mix is-typeof-tejari is-typeof-zamin mt-3">
                                        {{--done--}}
                                        <div class="col-md-3 mix is-typeof-tejari is-typeof-zamin" >
                                            <label for="toole_bar" class="m-field-title">طول بر اصلی(به متر)</label>
                                            <input class="m-field form-control" id="toole_bar" aria-describedby="toole_bar">
                                        </div>
                                        {{--done--}}
                                        <div class="col-md-3 mix is-typeof-zamin" >
                                            <label for="tedade_bar_zamin" class="m-field-title">تعداد بر</label>
                                            <select name="tedade_bar_zamin" id="tedade_bar_zamin" class="is-radio-dropdown">
                                                <option value="cheese">۱ نبش</option>
                                                <option value="cheese">۲ نبش</option>
                                                <option value="cheese">۳ نبش</option>
                                                <option value="cheese">۴ نبش</option>
                                            </select>
                                        </div>
                                    </div>

                                    {{--------- [ Filedaie * نوع واگذاری  ] --------}} {{--done--}}
                                    <div class="row l-rtl Topbar_dropdown mt-4 mix is-typeof-tejari" >
                                        <div class="col-12 mb-2">
                                            <p class="m-field-title"><span class="red-text">*</span><strong> نوع واگذاری  </strong></p>
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

                                    {{----------- [ Mojaveze sakht  ] -----------}} {{--done--}}
                                    <div class="row mt-4 mix is-typeof-zamin" >
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

                                    {{----------- [  Vaziate Melk  ] -----------}} {{--done--}}
                                    <div class="row mt-2 mix is-typeof-maskooni is-typeof-edari is-typeof-mostaghelat" >
                                        <div class="col-auto">
                                            <div class="pure-radiobutton mr-3 l-fullWidth text-right">
                                                <input checked id="nosaz" name="radiobutton" type="radio">
                                                <label class="m-form-label" for="nosaz">نوساز</label>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="pure-radiobutton mr-5 l-fullWidth text-right">
                                                <input checked id="chansalsakht" name="radiobutton" type="radio">
                                                <label class="m-form-label" for="chansalsakht">چند سال ساخت</label>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="pure-radiobutton mr-5 l-fullWidth text-right">
                                                <input checked id="kolangi" name="radiobutton" type="radio">
                                                <label class="m-form-label" for="kolangi">کلنگی</label>
                                            </div>
                                        </div>
                                    </div>

                                    {{--Todo mostaghelat click shod ina zaher mishe--}}
                                    <div class="row mt-3 mix is-typeof-maskooni is-typeof-edari is-typeof-mostaghelat">
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
                                            <label for="ostan" class="m-field-title"><span class="red-text">*</span>استان</label>
                                            <select id="ostan" class="is-radio-dropdown">
                                                <option value="cheese">گیلان</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="shahr" class="m-field-title"><span class="red-text">*</span>شهر</label>
                                            <select id="shahr" class="is-radio-dropdown">
                                                <option value="tomatoes">رشت</option>
                                                <option value="tomatoes">لاهیجان</option>
                                                <option value="tomatoes">انزلی</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="mahale" class="m-field-title"><span class="red-text">*</span>محله</label>
                                            <select id="mahale" class="is-radio-dropdown">
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
                                                <label for="address" class="m-field-title"><span class="red-text">*</span>آدرس ملک</label>
                                                <input  class="m-field form-control" id="address" aria-describedby="address">
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
                    <li class="step">
                        <div class="step-title waves-effect">ویژگی ها</div>
                        <div class="step-content">

                            {{--------- [ مشخصات ملک  ] --------}}
                            <div class="m-card-azhans pb-4 mix is-typeof-mostaghelat is-typeof-tejari is-typeof-maskooni is-typeof-edari">
                                {{----------- [ Title of Form  ] -----------}}
                                @component('components.azhans-form-title')
                                    @slot('title')مشخصات ملک@endslot
                                @endcomponent

                                {{--------- [ Filedaie Moshakhasate Melk  ] --------}}
                                <div class="container-fluid px-5 my-4">

                                    {{--------- [ Filedaie موقعیت ملک  ] --------}} {{-- done--}}
                                    <div class="row l-rtl Topbar_dropdown mix is-typeof-maskooni is-typeof-edari" >
                                        <div class="col-12 mb-2">
                                            <p class="m-field-title"><strong>موقعیت ملک</strong></p>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="vaghe_darTabaghe" class="m-field-title">واقع در طبقه</label>
                                            <input type="number" min="0" class="m-field form-control" id="vaghe_darTabaghe" aria-describedby="vaghe_darTabaghe">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="kolle_tabaghat" class="m-field-title">تعداد کل طبقات</label>
                                            <input type="number" min="0" class="m-field form-control" id="kolle_tabaghat" aria-describedby="kolle_tabaghat">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="kolle_tabaghat" class="m-field-title">تعداد واحد در هر طبقه</label>
                                            <input type="number" min="0" class="m-field form-control" id="kolle_tabaghat" aria-describedby="kolle_tabaghat">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="tedade_kolle_vahedha" class="m-field-title">تعداد کل واحدها</label>
                                            <input type="number" min="0" class="m-field form-control" id="tedade_kolle_vahedha" aria-describedby="tedade_kolle_vahedha">
                                        </div>
                                        {{--TODO remove this vaghti zad tejari--}}
                                        <div class="col-12 mt-2">
                                            <div class="pure-checkbox l-fullWidth mt-2 text-right">
                                                <input id="rahnoejare" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="rahnoejare">واقع در مجتمع مسکونی</label>
                                            </div>
                                        </div>
                                    </div>

                                    {{--------- [ Filedaie امکانات واحد  ] --------}} {{-- done--}}
                                    <div class="row l-rtl Topbar_dropdown mt-4 mix is-typeof-maskooni is-typeof-edari" >
                                        <div class="col-12 mb-2">
                                            <p class="m-field-title"><strong>امکانات واحد</strong></p>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="tedade_anbari" class="m-field-title">تعداد انباری</label>
                                            <input type="number" min="0" class="m-field form-control" id="tedade_anbari" aria-describedby="tedade_anbari">
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="masahate_tabaghat" class="m-field-title">مساحت کل انباری</label>
                                                <input type="number" min="0" class="m-field form-control" id="masahate_tabaghat" aria-describedby="masahate_tabaghat">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="tedade_balkon" class="m-field-title">تعداد بالکن</label>
                                                <input type="number" min="0" class="m-field form-control" id="tedade_balkon" aria-describedby="tedade_balkon">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="masahate_balkon" class="m-field-title">مساحت کل بالکن</label>
                                                <input type="number" min="0" class="m-field form-control" id="masahate_balkon" aria-describedby="masahate_balkon">
                                            </div>
                                        </div>
                                    </div>

                                    {{--------- [ Filedaie شکل ساخت Agahi  ] --------}} {{-- done--}}
                                    <div class="row l-rtl Topbar_dropdown mt-4 mix is-typeof-maskooni is-typeof-edari" >
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

                                    {{--------- [ Filedaie فضای اصلی  ] --------}} {{-- done--}}
                                    <div class="row l-rtl Topbar_dropdown mt-4 mix is-typeof-tejari" >
                                        <div class="col-12 mb-2">
                                            <p class="m-field-title"><strong>فضای اصلی</strong></p>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="saghfe4metr" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="saghfe4metr">سقف بالای 4 متر</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="vitrin" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="vitrin">ویترین</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="decorasion_dakheli" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="decorasion_dakheli">دکوراسیون داخلی</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="pure-checkbox  l-fullWidth text-right">
                                                <input id="ghafasebandi" name="checkbox" type="checkbox">
                                                <label class="m-form-label" for="ghafasebandi">قفسه بندی</label>
                                            </div>
                                        </div>
                                    </div>

                                    {{--------- [ Filedaie نمای ملک  ] --------}} {{-- done--}}
                                    <div class="row l-rtl Topbar_dropdown mt-4 mix is-typeof-maskooni is-typeof-edari
                                    is-typeof-tejari is-typeof-mostaghelat" >
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

                                    {{--------- [ Filedaie اسکلت ساختمان  ] --------}} {{-- done--}}
                                    <div class="row l-rtl Topbar_dropdown mt-4 mix is-typeof-mostaghelat is-typeof-edari
                                    is-typeof-maskooni" >
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

                                    {{--------- [ Filedaie کف  ] --------}} {{-- done--}}
                                    <div class="row l-rtl Topbar_dropdown mt-4 mix is-typeof-maskooni is-typeof-edari is-typeof-tejari" >
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

                                    {{--------- [ Filedaie دیوار  ] --------}} {{-- done--}}
                                    <div class="row l-rtl Topbar_dropdown mt-4 mix is-typeof-mostaghelat is-typeof-maskooni is-typeof-edari" >
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

                                    {{--------- [ Filedaie دید و منظر  ] --------}} {{-- done--}}
                                    <div class="row l-rtl Topbar_dropdown mt-4 mix is-typeof-edari is-typeof-maskooni is-typeof-mostaghelat">
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

                                    {{--------- [ Filedaie نورگیر  ] --------}} {{-- done--}}
                                    <div class="row l-rtl Topbar_dropdown mt-4 mix is-typeof-maskooni is-typeof-edari" >
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

                                    {{--------- [ Filedaie سرویس بهداشتی  ] --------}} {{-- done--}}
                                    <div class="row l-rtl Topbar_dropdown mt-4 mix is-typeof-maskooni
                                    is-typeof-edari is-typeof-tejari" >
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

                                    {{--------- [ Filedaie نشیمن و پذیرایی  ] --------}} {{-- done--}}
                                    <div class="row l-rtl Topbar_dropdown mt-4 mix is-typeof-maskooni" >
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

                                    {{--------- [ Filedaie اتاق انتظار و پذیرایی  ] --------}} {{-- done--}}
                                    <div class="row l-rtl Topbar_dropdown mt-4 mix is-typeof-maskooni is-typeof-edari" >
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

                                    {{--------- [ Filedaie تجهیزات سرمایشی گرمایشی  ] --------}} {{-- done--}}
                                    <div class="row l-rtl Topbar_dropdown mt-4 mix is-typeof-maskooni is-typeof-edari
                                    is-typeof-tejari is-typeof-mostaghelat" >
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

                                    {{--------- [ Filedaie تجهیزات رفاهی  ] --------}} {{-- done--}}
                                    <div class="row l-rtl Topbar_dropdown mt-4 mix is-typeof-maskooni is-typeof-edari
                                    is-typeof-tejari is-typeof-mostaghelat" >
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

                                    {{--------- [ Filedaie تجهیزات ایمنی امنیتی  ] --------}} {{-- done--}}
                                    <div class="row l-rtl Topbar_dropdown mt-4 mix is-typeof-maskooni is-typeof-edari
                                    is-typeof-tejari is-typeof-mostaghelat" >
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

                                    {{--------- [ Filedaie امکانات ساختمان  ] --------}} {{-- done--}}
                                    <div class="row l-rtl Topbar_dropdown mt-4 mix is-typeof-maskooni is-typeof-edari
                                    is-typeof-mostaghelat" >
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

                                    {{--------- [ Filedaie امکانات ورزشی  ] --------}}  {{-- done--}}
                                    <div class="row l-rtl Topbar_dropdown mt-4 mix is-typeof-maskooni is-typeof-mostaghelat">
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

                                    {{--------- [ Filedaie اکاربری پیشنهادی  ] --------}} {{-- done--}}
                                    <div class="row l-rtl Topbar_dropdown mt-4 mix is-typeof-mostaghelat is-typeof-zamin" >
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

                                    {{--------- [ Filedaie دسترسی  ] --------}} {{-- done--}}
                                    <div class="row l-rtl Topbar_dropdown mt-4 mix is-typeof-mostaghelat is-typeof-zamin is-typeof-tejari" >
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

                                    {{--------- [ Filedaie تاسیسات  ] --------}} {{-- done--}}
                                    <div class="row l-rtl Topbar_dropdown mt-4 mix is-typeof-zamin is-typeof-maskooni is-typeof-edari
                                    is-typeof-mostaghelat is-typeof-tejari" >
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

                                    {{--------- [ Filedaie خط تلفن  ] --------}} {{-- done--}}
                                    <div class="row l-rtl Topbar_dropdown mt-4 mix is-typeof-zamin is-typeof-maskooni is-typeof-edari
                                    is-typeof-mostaghelat is-typeof-tejari" >
                                        <div class="col-3">
                                            <label for="khate_telephone" class="m-field-title">خط تلفن</label>
                                            <select id="khate_telephone" name="khate_telephone" class="is-radio-dropdown">
                                                <option value="cheese">ندارد</option>
                                                <option value="tomatoes">۱ خط</option>
                                                <option value="tomatoes">۲ خط</option>
                                                <option value="tomatoes">۳ خط</option>
                                                <option value="tomatoes">۴ خط</option>
                                                <option value="tomatoes">۵ خط</option>
                                                <option value="tomatoes">بیش از ۵ خط</option>
                                            </select>
                                        </div>
                                    </div>

                                    {{--------- [ Filedaie مشخصات سند  ] --------}}{{-- TODO faghat baraie foroshe na rahn--}}
                                    <div class="row l-rtl Topbar_dropdown mt-4 mix is-typeof-zamin is-typeof-maskooni is-typeof-edari
                                    is-typeof-mostaghelat is-typeof-tejari" >
                                        <div class="col-12 mb-2">
                                            <p class="m-field-title"><strong>مشخصات سند</strong></p>
                                        </div>
                                        <div class="col-3">
                                            <label for="mizane_malekiat" class="m-field-title">میزان مالکیت</label>
                                            <select id="mizane_malekiat" name="mizane_malekiat" class="is-radio-dropdown">
                                                <option value="cheese">نیم دانگ</option>
                                                <option value="tomatoes">۱/۵ دانگ</option>
                                                <option value="tomatoes">۲ دانگ</option>
                                                <option value="tomatoes">۲/۵ دانگ</option>
                                                <option value="tomatoes">۳ دانگ</option>
                                                <option value="tomatoes">۳/۵ دانگ</option>
                                                <option value="tomatoes">۴ دانگ</option>
                                                <option value="tomatoes">۴/۵ دانگ</option>
                                                <option value="tomatoes">۵ دانگ</option>
                                                <option value="tomatoes">۵/۵ دانگ</option>
                                                <option value="tomatoes">۶ دانگ</option>
                                            </select>
                                        </div>
                                        <div class="col-3">
                                            <label for="noe_malekiat" class="m-field-title">نوع مالکیت</label>
                                            <select id="noe_malekiat" name="noe_malekiat" class="is-radio-dropdown">
                                                <option value="cheese">سند رسمی (قطعی)</option>
                                                <option value="tomatoes">قولنامه‌ای</option>
                                                <option value="tomatoes">وکالتی</option>
                                                <option value="tomatoes">مبایعه نامه‌ای</option>
                                                <option value="tomatoes">قراردادی</option>
                                                <option value="tomatoes">بنچاق</option>
                                                <option value="tomatoes">صلح نامه</option>
                                                <option value="tomatoes">زمین شهری</option>
                                                <option value="tomatoes">برگه حاکم شرع</option>
                                                <option value="tomatoes">اوقاف</option>
                                                <option value="tomatoes">سازمانی</option>
                                                <option value="tomatoes">تعاونی</option>
                                                <option value="tomatoes">بنیاد شهید</option>
                                                <option value="tomatoes">شهرداری</option>
                                                <option value="tomatoes">صنایع دفاع</option>
                                                <option value="tomatoes">نامشخص</option>
                                            </select>
                                        </div>
                                        <div class="col-2 align-self-end">
                                            <div class="pure-checkbox  mr-3 l-fullWidth text-right">
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

                    <li class="step">
                        <div class="step-title waves-effect">شرایط</div>
                        <div class="step-content">
                            {{--------- [ قیمت و شرایط معامله  ] --------}}
                            <div class="m-card-azhans mt-4 pb-2">
                                {{----------- [ Title of Form  ] -----------}}
                                @component('components.azhans-form-title')
                                    @slot('title')قیمت و شرایط معامله@endslot
                                @endcomponent

                                {{--------- [ قیمت و شرایط معامله - 1   ] --------}}
                                <div class="container-fluid px-5 my-4" id="is-foroosh-pishforoosh-section">
                                    <div class="row l-rtl mt-4">
                                        <div class="col-6 mb-2">
                                            <div class="form-group">
                                                <label for="gheimate_nahaie_foroosh" class="m-field-title"><span class="red-text">*</span> قیمت نهایی فروش (تومان)</label>
                                                <input type="number" min="0" class="m-field form-control" id="gheimate_nahaie_foroosh" aria-describedby="name">
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
                                                <label for="saghfe_mablagh_moaveze" class="m-field-title"><span class="red-text">*</span>سقف مبلغ معاوضه (تومان)</label>
                                                <input type="number" min="0" class="m-field form-control" id="saghfe_mablagh_moaveze" aria-describedby="name">
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
                                                <label for="mablagh_pishpardakht" class="m-field-title"><span class="red-text">*</span>مبلغ پیش پرداخت (تومان)</label>
                                                <input type="number" min="0" class="m-field form-control" id="mablagh_pishpardakht" aria-describedby="mablagh_pishpardakht">
                                                <div class="form-control-feedback hi-fontSize-12">مبلغی را که خریدار در هنگام عقد قرارداد به صورت نقدی خواهد پرداخت را وارد نمایید</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 mt-2">
                                            <div class="form-group">
                                                <label for="zamane_tahvil" class="m-field-title"><span class="red-text">*</span>زمان تحویل (به ماه)</label>
                                                <input type="number" name="" min="1" class="m-field form-control" id="zamane_tahvil" aria-describedby="zamane_tahvil">
                                                <div class="form-control-feedback hi-fontSize-12">چند ماه دیگر این ملک آماده تحویل خواهد شد. مثال: 18</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 mt-2 Topbar_dropdown">
                                            <label for="mizane_sakht" class="m-field-title"><span class="red-text">*</span>میزان ساخت انجام شده</label>
                                            <select name="" id="mizane_sakht" class="is-radio-dropdown">
                                                <option value="cheese">۱۰ درصد</option>
                                                <option value="cheese">۲۰ درصد</option>
                                                <option value="cheese">۳۰ درصد</option>
                                                <option value="cheese">۴۰ درصد</option>
                                                <option value="cheese">۵۰ درصد</option>
                                                <option value="cheese">۶۰ درصد</option>
                                                <option value="cheese">۷۰ درصد</option>
                                                <option value="cheese">۸۰ درصد</option>
                                                <option value="cheese">۹۰ درصد</option>
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
                                                <label for="mizan_vam" class="m-field-title"><span class="red-text">*</span>میزان وام (تومان)</label>
                                                <input type="number" min="1000000" class="m-field form-control" id="mizan_vam" aria-describedby="mizan_vam">
                                                <div class="form-control-feedback hi-fontSize-12">مقدار وام را به تومان وارد نمایید. مثال: 20000000</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 mt-2">
                                            <div class="form-group">
                                                <label for="sood_vam" class="m-field-title"><span class="red-text">*</span>سود وام (درصد)</label>
                                                <input type="number" min="0" class="m-field form-control" id="sood_vam" aria-describedby="sood_vam">
                                                <div class="form-control-feedback hi-fontSize-12">مقدار سود سالیانه وام به درصد. مثال: 25</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 mt-2">
                                            <div class="form-group">
                                                <label for="tedade_aghsat" class="m-field-title"><span class="red-text">*</span>تعداد اقساط باقیمانده (عدد)</label>
                                                <input type="number" min="1" name="" class="m-field form-control" id="tedade_aghsat" aria-describedby="tedade_aghsat">
                                                <div class="form-control-feedback hi-fontSize-12">میزان اقساط باقی مانده: مثال 36</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 mt-2">
                                            <div class="form-group">
                                                <label for="mablagh_ghest" class="m-field-title"><span class="red-text">*</span>مبلغ هر قسط (تومان)</label>
                                                <input type="number" min="10000" class="m-field form-control" id="mablagh_ghest" aria-describedby="mablagh_ghest">
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
                                                <label for="mablagh_rahn" class="m-field-title"><span class="red-text">*</span>مبلغ رهن (تومان)</label>
                                                <input type="number" min="0" class="m-field form-control" id="mablagh_rahn" aria-describedby="mablagh_rahn">
                                                <div class="form-control-feedback hi-fontSize-12">مبلغ را که به عنوان ودیعه از طرف مستاجر در اختیار شماست. مثال: 20000000</div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                {{--------- [ قیمت و شرایط معامله - اجاره مرحله ۳ مسکونی   ] --------}}
                                <div class="container-fluid px-5 my-4" id="is-rahn-ejare-section">

                                    <div class="row l-rtl mt-4">
                                        <div class="col-6 mb-2">
                                            <div class="form-group">
                                                <label for="mablaghe_vadie" class="m-field-title"><span class="red-text">*</span> مبلغ ودیعه (تومان)</label>
                                                <input type="number" min="1000" class="m-field form-control" id="mablaghe_vadie" aria-describedby="mablaghe_vadie">
                                                <div class="form-control-feedback hi-fontSize-12">ذکر مبلغ ودیعه الزامی است. مثال: 50,000,000</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row l-rtl mt-4">
                                        <div class="col-6 mb-2">
                                            <div class="form-group">
                                                <label for="ejare_mahiane" class="m-field-title"><span class="red-text">*</span> مبلغ اجاره ماهیانه (تومان)</label>
                                                <input type="number" min="1000" class="m-field form-control" id="ejare_mahiane" aria-describedby="ejare_mahiane">
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
                                                <label for="name_moshaver" class="m-field-title khakestari-title">نام مشاور</label>
                                                <input name="name_moshaver" class="m-field form-control" id="name_moshaver" aria-describedby="name_moshaver">
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="telephon_sabet" class="m-field-title khakestari-title">تلفن ثابت</label>
                                                <input type="number" class="m-field form-control" id="telephon_sabet" aria-describedby="telephon_sabet">
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="mobile" class="m-field-title khakestari-title">تلفن همراه</label>
                                                <input type="number" class="m-field form-control" id="mobile" aria-describedby="mobile">
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <div class="form-group">
                                                <label for="nahve_bazdid" class="m-field-title khakestari-title">نحوه بازدید</label>
                                                <textarea name="nahve_bazdid" rows="7" class="m-field form-control" id="nahve_bazdid" aria-describedby="nahve_bazdid"></textarea>
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
    <script
            src="https://code.jquery.com/jquery-2.2.4.min.js"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
            crossorigin="anonymous"></script>

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

