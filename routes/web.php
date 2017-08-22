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
    return view('Site.adpage');
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

