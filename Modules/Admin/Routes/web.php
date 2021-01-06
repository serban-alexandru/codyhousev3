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

Route::middleware('auth', 'role:admin')->group(function(){

    Route::prefix('admin')->group(function() {

        Route::get('/', 'AdminController@index');

    });
});

Route::get('admin/settings',function(){
    return view('admin::partials\setting');
  });