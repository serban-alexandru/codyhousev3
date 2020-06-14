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

Auth::routes();

Route::get('/login/ajax',[
    'as'   => 'login.ajax',
    'uses' => '\Modules\Users\Http\Controllers\Auth\LoginController@ajaxShowForm'
]);

Route::get('/logout', '\Modules\Users\Http\Controllers\Auth\LoginController@logout');

Route::get('/register/ajax',[
  'as'   => 'register.ajax',
  'uses' => '\Modules\Users\Http\Controllers\Auth\RegisterController@ajaxShowForm'
]);

Route::get('/resetpassword',[
  'as'   => 'password.reset.ajax',
  'uses' => '\Modules\Users\Http\Controllers\Auth\ForgotPasswordController@ajaxShowForm'
]);
