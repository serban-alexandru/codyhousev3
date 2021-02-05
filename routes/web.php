<?php

// enable shortcode globally
Shortcode::enable();

Route::get('/',function(){
  return view('/site1/index');
});

Route::get('/about',function(){
  return view('site1.pages.about');
});

Route::get('/contact',function(){
  return view('site1.pages.contact');
});

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

Route::group(['middleware' => 'auth'], function(){
  Route::post('editorjs/upload-image', [
      'as'   => 'editorjs.upload-image',
      'uses' => 'EditorjsController@uploadImage'
  ]);
});