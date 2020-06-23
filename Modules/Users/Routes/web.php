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

Route::group(['middleware' => 'auth'], function(){
  Route::group(['middleware' => 'role:admin'], function(){

    Route::get('admin/users', 'UsersController@index');
    Route::get('admin/users/edit/{id}', 'UsersController@edit');
    Route::post('admin/users/update/{id}', 'UsersController@update');
    Route::get('admin/users/suspend/{id}', 'UsersController@suspend');
    Route::get('admin/users/activate/{id}', 'UsersController@activate');
    Route::get('admin/users/trash/{id}', 'UsersController@trash');
    Route::get('admin/users/delete/{id}', 'UsersController@destroy');
    Route::get('admin/users/delete/{id}', 'UsersController@destroy');
    Route::get('admin/users/empty-trash', 'UsersController@emptyTrash');
    Route::post('admin/users/bulk-suspend', 'UsersController@bulkSuspend');
    Route::post('admin/users/bulk-delete', 'UsersController@bulkDelete');

  });
});