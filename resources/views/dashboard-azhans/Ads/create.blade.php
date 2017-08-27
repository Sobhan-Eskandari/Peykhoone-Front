@extends('layout.dashboard')

@section('backColor', 'm-navBar-transparent')
@section('marginTop', 'mt-5 pt-1')
@section('header-img')
    @include('includes.header-img')
@endsection

@section('content')
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-6">
                <ul class="stepper horizontal l-rtl">
                    <li class="step active">
                        <div class="step-title waves-effect">جزئیات</div>
                        <div class="step-content">
                            <div class="row">
                                <div class="input-field col s12">
                                    <h2>hi</h2>
                                </div>
                            </div>
                            <div class="step-actions">
                                <button class="btn next-step">CONTINUE</button>
                                <button class="btn previous-step">BACK</button>
                            </div>
                        </div>
                    </li>
                    <li class="step">
                        <div class="step-title waves-effect">ویژگی ها</div>
                        <div class="step-content">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="password" name="password" type="password" class="validate" required>
                                    <label for="password">Your password</label>
                                </div>
                            </div>
                            <div class="step-actions">
                                <button class="waves-effect waves-dark btn next-step">CONTINUE</button>
                                <button class="waves-effect waves-dark btn-flat previous-step">BACK</button>
                            </div>
                        </div>
                    </li>
                    <li class="step">
                        <div class="step-title waves-effect">شرایط</div>
                        <div class="step-content">
                            Finish!
                            <div class="step-actions">
                                <button class="waves-effect waves-dark btn" type="submit">SUBMIT</button>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection


@section('js_resources')
<script src="{{asset('js/azhans-dashboard.js')}}"></script>
@endsection


