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
    return view('home');
});
Route::get('/about ', function () {
    return view('about');
});
Route::get('/service ', function () {
    return view('service');
});
Route::get('admin/home ', function () {
    return view('admin.layout.default');
});
Route::get('/add ', 'OurController@add' );

Route::post('/store ', 'OurController@store' );

Route::get('/list ', 'OurController@list' );
Route::get('/edit/{id} ', 'OurController@edit' );
//Route::post('/update/{id} ', 'OurController@update' );
Route::get('login','OurController@login');
Route::post('loginpost','OurController@postlogin')->name('post_login');
Route::get('dashboard','OurController@dashboard')->name('dashboard');
Route::get('test','OurController@test');
   
