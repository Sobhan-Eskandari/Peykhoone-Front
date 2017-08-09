<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Hi Framework -->
    <link rel="stylesheet" href="{{asset('Hi_Framework/dist/Hi_Framework.css')}}">
    <!-- App Css -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body>
<div class="container-fluid px-0 l-rtl">

    <nav class="navbar navbar-toggleable-md navbar-light bg-faded py-0 m-navBar">
        <button class="navbar-toggler navbar-toggler-left mt-4 m-navBar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand pr-lg-5 mr-lg-5 m-navBar-brand" href="#">
            <img src="{{ asset('images/logo.png') }}" alt="در حال بارگذاری" height="77px"
                 width="120px"></a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link  m-navBar-link px-3" href="#">صفحه اصلی<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link m-navBar-link  px-3" href="#">املاک</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link m-navBar-link  px-3" href="#">آژانس های املاک</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  m-navBar-link  px-3" href="#">درباره ما</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  m-navBar-link  px-3" href="#">تماس با ما</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0 pl-0 pl-lg-5 ml-0 ml-lg-2" >
                <div class="row mx-auto text-center" style="float: left;">
                    <button class="btn btn-primary my-2 my-sm-0 mx-2 m-navBar-btn text-center" type="submit">ثبت آگهی
                        +
                    </button>
                    <button class="btn btn-outline-primary my-2 my-sm-0 mx-2 m-navBar-btn text-center" type="submit">ثبت
                        نام | ورود
                    </button>
                </div>
            </form>
        </div>
    </nav>
</div>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
