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


// public pages routes
Route::get('/about', function () {
    return 'This is notes route';
});

Route::get('/contact-us', function () {
    return 'This is contact-us route';
});

Route::put('/update', function () {
    return 'The user has been updated';
});