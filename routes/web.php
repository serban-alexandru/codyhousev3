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

Route::get('/', 'Site1Controller@index');
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

Route::get('/site1',function(){
    return view('site1.index');
  });

  Route::get('/site1/blog',function(){
    return view('site1.pages.blog');
  });

  Route::get('/site1/profile',function(){
    return view('site1.pages.profile');
  });

  Route::get('/site1/editprofile',function(){
    return view('site1.pages.editprofile');
  });

  Route::get('/site1/home',function(){
    return view('site1.home');
  });

  Route::get('/site2',function(){
    return view('site2.index');
  });
