<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PagesController@index');
Route::get('/mangas', 'PagesController@mangas');
Route::get('/blogpage', 'PagesController@blogpage');
Route::get('/venue', 'PagesController@venue');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');
Route::get('/profile', 'PagesController@profile');
Route::get('/admin2', 'PagesController@admin2');
Route::get('/adminlogin', 'PagesController@adminlogin');
Route::get('/blogadmin', 'PagesController@blogadmin');
Route::get('/useradmin', 'PagesController@useradmin');
Route::get('/home', 'HomeController');



Route::group(['middleware' => 'auth'], function(){
  Route::group(['middleware' => 'role:admin'], function(){

      Route::get('/admin/users/edit/{id}', 'UserController@edit');
      Route::post('/admin/users/update/{id}', 'UserController@update');

  });
});