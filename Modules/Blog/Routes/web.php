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

$middleware = ['auth', 'role:admin'];
if (config('settings.need_verify_email') === true) {
  $middleware = ['auth', 'verified', 'role:admin'];
}

Route::middleware($middleware)->group(function(){

    Route::prefix('admin')->group(function(){
      Route::get('blog', 'BlogController@index');
      Route::get('blog/add', 'BlogController@create');
      Route::post('blog/store', 'BlogController@store');
      Route::get('blog/edit/{id}', 'BlogController@edit');
      Route::post('blog/update/{id}', 'BlogController@update');
      Route::get('blog/delete/{id}', 'BlogController@destroy');
    });

});