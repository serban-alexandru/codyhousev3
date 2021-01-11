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
    'uses' => 'Auth\LoginController@ajaxShowForm'
]);

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/register/ajax',[
  'as'   => 'register.ajax',
  'uses' => 'Auth\RegisterController@ajaxShowForm'
]);

Route::get('/resetpassword',[
  'as'   => 'password.reset.ajax',
  'uses' => 'Auth\ForgotPasswordController@ajaxShowForm'
]);

Route::middleware('auth', 'role:admin')->group(function(){

  Route::prefix('admin')->group(function(){
    Route::get('users', 'UsersController@index');
    Route::get('users/adminsettings', 'UsersController@adminsettings');
    Route::get('users/add', 'UsersController@create');
    Route::post('users/store', 'UsersController@store');
    Route::get('users/edit/{id}', 'UsersController@edit');
    Route::post('users/update/{id}', 'UsersController@update');
    Route::get('users/update-coverphoto/{id}', [
      'as' => 'admin.update-coverphoto',
      'uses' => 'UsersController@getUpdateCoverPhoto'
    ]);
    Route::post('users/update-coverphoto/{id}', [
      'uses' => 'UsersController@postAjaxUpdateCoverPhotoAdmin'
    ]);
    Route::get('users/suspend/{id}', 'UsersController@suspend');
    Route::get('users/activate/{id}', 'UsersController@activate');
    Route::get('users/trash/{id}', 'UsersController@trash');
    Route::get('users/delete/{id}', 'UsersController@destroy');
    Route::get('users/empty-trash', 'UsersController@emptyTrash');
    Route::post('users/bulk-suspend', 'UsersController@bulkSuspend');
    Route::post('users/bulk-delete', 'UsersController@bulkDelete');
  });

});

Route::middleware('auth')->group(function(){
  Route::get('users/settings', 'UsersController@settings');
  Route::post('users/settings/save', 'UsersController@saveSettings');
  Route::post('users/settings/cover-photo/update/ajax', [
    'as' => 'cover-photo.update.ajax',
    'uses' => 'UsersController@postAjaxUpdateCoverPhoto'
  ]);
  Route::post('users/settings/avatar/delete/ajax', [
    'as' => 'avatar.delete.ajax',
    'uses' => 'UsersController@postAjaxDeleteAvatar'
  ]);
  Route::post('users/settings/cover-photo/delete/ajax', [
    'as' => 'cover-photo.delete.ajax',
    'uses' => 'UsersController@postAjaxDeleteCoverPhoto'
  ]);
});

/*Route::get('/dashboard',function(){
  return view('users::dashboard\index');
});*/

Route::group([
  'prefix' => 'site1',
  'middleware' => 'auth'
], function() {
  Route::get('/', 'DashboardPostsController@index');
  Route::get('/settings', 'DashboardPostsController@settings');

  Route::post('/store', [
    'as' => 'dashboard.store',
    'uses' => 'DashboardPostsController@store'
  ]);

  Route::get('{id}/fetch-data', [
    'as' => 'dashboard.fetch-data',
    'uses' => 'DashboardPostsController@fetchDataAjax'
  ]);

  Route::post('/update', [
    'as' => 'dashboard.update',
    'uses' => 'DashboardPostsController@ajaxUpdate'
  ]);

  Route::post('/delete', [
    'as' => 'dashboard.delete',
    'uses' => 'DashboardPostsController@delete'
  ]);

  Route::post('/delete-permanently', [
    'as' => 'dashboard.delete-permanently',
    'uses' => 'DashboardPostsController@deletePermanently'
  ]);

  Route::post('/delete/multiple', [
    'as' => 'dashboard.delete.multiple',
    'uses' => 'DashboardPostsController@deleteMultiple'
  ]);

  Route::post('/trash/empty', [
    'as' => 'dashboard.trash.empty',
    'uses' => 'DashboardPostsController@emptyTrash'
  ]);

  Route::post('/settings/store', [
      'as' => 'dashboard.settings.store',
      'uses' => 'DashboardPostsController@settingsStore'
  ]);

  Route::post('/settings/update', [
      'as' => 'dashboard.settings.update',
      'uses' => 'DashboardPostsController@settingsUpdate'
  ]);

  Route::get('/{id}/make-draft', [
      'as' => 'dashboard.make-draft',
      'uses' => 'DashboardPostsController@makePostDraft'
  ]);

  Route::get('/{id}/publish', [
      'as' => 'dashboard.publish',
      'uses' => 'DashboardPostsController@makePostPublish'
  ]);

  Route::get('/{id}/restore', [
      'as' => 'dashboard.restore',
      'uses' => 'DashboardPostsController@restore'
  ]);

});
