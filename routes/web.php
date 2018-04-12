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
    return view('index');
});

//LOGIN
Route::get('/login', 'loginController@loginPageLoad')->name('login');
Route::post('/home','loginController@userCheck')->name('userCheck');

//Register
Route::get('/register','registerController@registerPageLoad')->name('register');
Route::post('/register','registerController@store')->name('registernew');