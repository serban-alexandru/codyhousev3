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
  return view('index');
});


Route::get('/site2/login',function(){
  return view('components.auth.login');
});

Route::get('/site2/register',function(){
  return view('components.auth.register');
});

// Editor JS

Route::group(['middleware' => $middleware], function(){
  Route::post('editorjs/upload-image', [
      'as'   => 'editorjs.upload-image',
      'uses' => 'EditorjsController@uploadImage'
  ]);
});

Route::group([
  'prefix' => '{locale}',
  'where'  => ['locale' => '[a-zA-Z]{2}']
], function(){
  Route::get('{slug}', [
    'as'   => 'single-view',
    'uses' => '\Modules\Users\Http\Controllers\SingleViewController@singleView'
  ]);
});

Route::group([
  'prefix' => '{theme}/{locale}',
  'where'  => ['theme' => 'site1|site2', 'locale' => '[a-zA-Z]{2}']
], function(){
  Route::get('{slug}', [
    'as'   => 'theme.pages.post',
    'uses' => '\Modules\Users\Http\Controllers\SingleViewController@singleViewbyTheme'
  ]);
});
