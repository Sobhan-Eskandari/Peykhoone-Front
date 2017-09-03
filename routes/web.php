<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    return view('Site.all-ads');
});

Route::get('/home', function () {
    return view('Site.home');
});

Route::get('/ads', function () {
    return view('Site.all-ads');
});

Route::get('/ad', function () {
    return view('Site.adpage');
});

Route::get('/layout', function () {
    return view('layout.site');
});

Route::get('/sobhan', function () {
    return view('Site.sobhan2');
});

Route::get('/mersede', function () {
    return view('Site.mersede');
});

Route::get('/menu', function () {
    return view('layout.nav-menu');
});
Route::get('/estatePro', function () {
    return view('site.estateConsultant-pro');
});
Route::get('/contact', function () {
    return view('site.contactUs');
});
Route::get('/about', function () {
    return view('site.aboutUs');
});
Route::get('/single', function () {
    return view('site.singlePage');
});
Route::get('/agencies', function () {
    return view('site.all-agencies');
});


//--------------------------------------------------------------------------
Route::get('/dashboard/azhans/ad/create', function () {
    return view('dashboard-azhans.Ads.create');
});
Route::get('/dashboard/ad/create', function () {
    return view('dashboard-azhans.ads.create');
});
Route::get('/dashboard', function () {
    return view('layout.dashboard');
});
Route::get('/user-profile', function () {
    return view('dashboard-azhans.profile.user-profile');
});
Route::get('/first-ad', function () {
    return view('dashboard-azhans.profile.index');
});
Route::get('/confirm', function () {
    return view('dashboard-azhans.Ads.confirmation');
});
Route::get('/400', function () {
    return view('dashboard-azhans.errors.400');
});
Route::get('/403', function () {
    return view('dashboard-azhans.errors.403');
});
Route::get('/404', function () {
    return view('dashboard-azhans.errors.404');
});
Route::get('/500', function () {
    return view('dashboard-azhans.errors.500');
});
Route::get('/503', function () {
    return view('dashboard-azhans.errors.503');
});
Route::get('/504', function () {
    return view('dashboard-azhans.errors.504');
});
Route::get('/fast', function () {
    return view('dashboard-azhans.Ads.create-fast');
});
Route::get('/dashboard/ads', function () {
    return view('dashboard-azhans.ads.index');
});