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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('Site.home');
});

Route::get('/sobhan', function () {
    return view('Site.sobhan2');
});

Route::get('/mersede', function () {
    return view('Site.mersede');
});

Route::get('/navside', function () {
    return view('Site.navside');
});

