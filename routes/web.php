<?php

// Show post
Route::get('post/{slug}/{id}', [
  'as' => 'post.show',
  'uses' => 'PagesController@showPost'
]);



Route::get('/site1', 'PagesController@index');

Route::get('/',function(){
  return view('/index');
});

Route::get('/site1/blog',function(){
  return view('site1.pages.blog');
});

Route::get('/site1/profile',function(){
  return view('site1.pages.profile');
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
  return view('site2.index');
});
