<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <!-- Hi Framework -->
    <link rel="stylesheet" href="{{asset('css/Hi_Framework.css')}}">
    <!-- App Css -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <!-- Fontawesome Css -->
    <link rel="stylesheet" href="https://lib.arvancloud.com/ar/font-awesome/4.7.0/css/font-awesome.min.css">


    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import Materialize-Stepper CSS (after importing materialize.css) -->

    <!-- Dashboard Azhans Css -->
    <link rel="stylesheet" href="{{asset('css/dashboard-azhans.css')}}">
</head>

<body>

<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-6">
            <ul class="stepper horizontal l-rtl">
                <li class="step active">
                    <div class="step-title waves-effect">تصاویر</div>
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
                    <div class="step-title waves-effect">جزئیات</div>
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


<!-- jQuery -->
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>--}}
<!-- Materializecss compiled and minified JavaScript -->
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>--}}
<!--Import Materialize-Stepper JavaScript -->
<script src="{{asset('js/azhans-dashboard.js')}}"></script>


</body>

</html>