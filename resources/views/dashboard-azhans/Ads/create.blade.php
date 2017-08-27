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

