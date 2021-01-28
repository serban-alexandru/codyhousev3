<?php

// enable shortcode globally
Shortcode::enable();

// Show post
Route::get('post/{slug}/{id}', [
  'as' => 'post.show',
  'uses' => 'PagesController@showPost'
]);



Route::get('/site1', 'PagesController@index');

Route::get('/',function(){
  return view('/site1/index');
});


Route::get('/about',function(){
  return view('site1.pages.about');
});

Route::get('/contact',function(){
  return view('site1.pages.contact');
});

Route::get('/profile', [
  'as'   => 'pages.profile',
  'uses' => 'PagesController@profile'
]);

Route::get('/profile/{username}', [
  'as'   => 'pages.profile.user',
  'uses' => 'PagesController@profile'
]);

Route::get('/site1/post',function(){
  return view('site1.pages.post');
});

Route::get('/site1/tag',function(){
  return view('site1.pages.tag');
});

Route::get('/site1/user-controlpanel',function(){
  return view('site1.pages.user-controlpanel');
});

Route::get('/site1/home',function(){
  return view('site1.home');
});

Route::get('/site2',function(){
  return view('templates.blog.site2.index');
});

Route::group([
  'prefix' => '{locale}',
  'where'  => ['locale' => '[a-zA-Z]{2}']
], function(){
  Route::get('{slug}', [
    'as'   => 'pages.post',
    'uses' => 'PagesController@post'
  ]);
});

Route::group(['middleware' => 'auth'], function(){
  Route::post('editorjs/upload-image', [
      'as'   => 'editorjs.upload-image',
      'uses' => 'EditorjsController@uploadImage'
  ]);
});