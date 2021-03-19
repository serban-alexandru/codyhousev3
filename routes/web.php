<?php

// enable shortcode globally
Shortcode::enable();

$middleware = 'auth';
if (config('settings.need_verify_email') === true) {
  $middleware = ['auth','verified'];
}

Auth::routes(['verify' => true]);



// Site 2

Route::get('/',function(){
  return view('templates.blog.site2.index');
});

Route::get('/sticky',function(){
  return view('templates.blog.site2.pages.sticky-hamburger');
});


Route::get('/site2/login',function(){
  return view('templates.blog.site2.pages.login');
});

Route::get('/site2/register',function(){
  return view('templates.blog.site2.pages.register');
});

// Editor JS

Route::group(['middleware' => $middleware], function(){
  Route::post('editorjs/upload-image', [
      'as'   => 'editorjs.upload-image',
      'uses' => 'EditorjsController@uploadImage'
  ]);
});