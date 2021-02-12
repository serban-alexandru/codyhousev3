<?php

// enable shortcode globally
Shortcode::enable();

Route::get('/',function(){
  return view('/site1/index');
});

// Site 2

Route::get('/site2',function(){
  return view('templates.blog.site2.index');
});

Route::get('/site2/login',function(){
  return view('templates.blog.site2.pages.login');
});

Route::get('/site2/register',function(){
  return view('templates.blog.site2.pages.register');
});

// Editor JS

Route::group(['middleware' => 'auth'], function(){
  Route::post('editorjs/upload-image', [
      'as'   => 'editorjs.upload-image',
      'uses' => 'EditorjsController@uploadImage'
  ]);
});