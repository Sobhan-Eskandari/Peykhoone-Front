<!doctype html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('meta')
    <title>@yield('title')</title>

    <!-- Hi Framework -->
    <link rel="stylesheet" href="{{asset('css/Hi_Framework.css')}}">
    <!-- App Css -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- Fontawesome Css -->
    <link rel="stylesheet" href="https://lib.arvancloud.com/ar/font-awesome/4.7.0/css/font-awesome.min.css">

    @yield('css_resources')

</head>
<body class="@yield('bg-color')">

{{--****************** Site Loading ********************--}}
<div class="container-fluid full-height-loading black-color" id="loading">
    <div class="row full-height-loading justify-content-center">
        <div class="col-12 col-lg-3 align-self-center">
            <img class="img-fluid" src="{{asset('images/peyLogo.png')}}">
            <div class="spinner">
                <div class="rect1"></div>
                <div class="rect2"></div>
                <div class="rect3"></div>
                <div class="rect4"></div>
                <div class="rect5"></div>
            </div>
        </div>
    </div>
</div>


<div id="content" style="display: none">

    @yield('content')


</div>

<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/libraries.js')}}"></script>

@yield('js_resources')

</body>
</html>
