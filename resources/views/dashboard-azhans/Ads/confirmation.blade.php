@extends('layout.dashboard')
@section('backColor', 'm-navBar-transparent')
@section('marginTop', 'mt-5 pt-1')
@section('header-img')
    @include('includes.header-img')
@endsection
@section('content')
    <div class="row justify-content-center mb-5 pb-5">
        <div class="col-lg-6 col-md-8 col-sm-10 col-12 pt-3 mb-5">
            <div class="simple-shadow-box-two p-5 mt-5">
                <div class="row">
                    <div class="col-12">
                        <h6 class="text-center m-checked-round-icon pb-0"><i class="icon-round-done-button"></i></h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h1 class="text-center hi-fontSize-22 m-confirmation-title">آگهی با موفقیت ارسال شد</h1>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <h5 class="text-center hi-fontSize-14 hi-font-medium">برای بازگشت روی دکمه زیر کلیک کنید</h5>
                    </div>
                </div>
                <div class="row mt-4 mb-1">
                    <div class="col-12 mx-auto text-center">
                        <button class="btn m-simple-radiusBtn hi-fontSize-13 px-4">بازگشت</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--<img src="{{asset('images/88.png')}}" width="100%" height="100%" style="border: 1px solid rebeccapurple">--}}
@endsection