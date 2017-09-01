@extends('layout.dashboard')
@section('backColor', 'm-navBar-black')
@section('content')
    <div class="row mt-5">
        <div class="col-12 mt-5 pt-5">
            <img src="{{asset('images/peyLogo.png')}}" width="109px" height="150px" class="mx-auto d-block">
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12">
            <h6 class="text-center hi-fontSize-14"><span class="m-smile">):</span> سایت به منظر تعمیرات از دسترس خارج شده است
                <br><br>
                لطفا زمان  دیگری امتحان کنید -
                <span class="m-error-name">خطای 503</span>
            </h6>
        </div>
    </div>
    <div class="row mt-3 mb-1">
        <div class="col-12 mx-auto text-center">
            <button class="btn m-simple-radiusBtn2 hi-fontSize-14 px-3 m-error-btn-zIndex">بازگشت به خانه</button>
        </div>
    </div>
    <div class="row m-error-backImg">
        <div class="col-12 px-0">
            <img src="{{asset('images/Group.png')}}" width="100%" height="100%" class="m-error-img-zIndex">
        </div>
    </div>
@endsection