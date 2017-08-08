<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Hi Framework -->
    <link rel="stylesheet" href="{{asset('css/Hi_Framework.css')}}">
    <!-- App Css -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body>

<button class="m-btn m-btn-outline hvr-shutter-out-horizontal">ثبت نام | ورود</button>

<button class="m-btn m-btn-gradient"> + ثبت آگهی </button>

<button class="m-btn ocean"> تماس با پی خونه </button>

<button class="m-btn ocean rounded hvr-icon-back pl-4 pr-3"> مشاهده همه </button>

<button class="m-btn m-btn-appdl warm-grey"><i class="fa fa-apple"></i> دریافت از اپل استور </button>

{{--<p class="m-btn-gradientOutline rounded"><i class="fa fa-chevron-down"></i> پی خونه رو تجربه کنید  </p>--}}

<footer class="container-fluid" id="l-footer" style="height: 200px">
    <div class="row">
        <div class="col-lg-auto">

        </div>
    </div>
</footer>

{{--background-image: url("/images/home.jpg");--}}
{{--height: 4000px;--}}
{{--background-size: cover;--}}
{{--background-position-y: -3230px;--}}
{{--overflow-y: scroll;--}}

<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/libraries.js')}}"></script>
<script src="https://use.fontawesome.com/7cd1915430.js"></script>

</body>
</html>
