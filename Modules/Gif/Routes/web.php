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
$middleware = 'auth';
if (config('settings.need_verify_email') === true) {
  $middleware = ['auth','verified'];
}

Route::middleware($middleware, 'role:admin')->group(function(){
    Route::group([
        'prefix' => 'admin',
        'middleware' => 'auth'
    ], function() {
        Route::get('gifs', 'GifController@index');
        Route::get('gifs/settings', 'GifController@settings');

        Route::post('gifs/store', [
            'as' => 'admin.gifs.store',
            'uses' => 'GifController@store'
        ]);

        Route::get('gifs/{id}/fetch-data', [
            'as' => 'admin.gifs.fetch-data',
            'uses' => 'GifController@fetchDataAjax'
        ]);

        Route::post('gifs/update', [
            'as' => 'admin.gifs.update',
            'uses' => 'GifController@ajaxUpdate'
        ]);

        Route::post('gifs/delete', [
            'as' => 'admin.gifs.delete',
            'uses' => 'GifController@delete'
        ]);

        Route::post('gifs/delete-permanently', [
            'as' => 'admin.gifs.delete-permanently',
            'uses' => 'GifController@deletePermanently'
        ]);

        Route::post('gifs/delete/multiple', [
            'as' => 'admin.gifs.delete.multiple',
            'uses' => 'GifController@deleteMultiple'
        ]);

        Route::post('gifs/trash/empty', [
            'as' => 'admin.gifs.trash.empty',
            'uses' => 'GifController@emptyTrash'
        ]);

        Route::post('gifs/settings/store', [
            'as' => 'admin.gifs.settings.store',
            'uses' => 'GifController@settingsStore'
        ]);

        Route::post('gifs/settings/update', [
            'as' => 'admin.gifs.settings.update',
            'uses' => 'GifController@settingsUpdate'
        ]);

        Route::get('gifs/{id}/make-draft', [
            'as' => 'admin.gifs.make-draft',
            'uses' => 'GifController@makeGifDraft'
        ]);

        Route::get('gifs/{id}/publish', [
            'as' => 'admin.gifs.publish',
            'uses' => 'GifController@makeGifPublish'
        ]);

        Route::get('gifs/{id}/restore', [
            'as' => 'admin.gifs.restore',
            'uses' => 'GifController@restore'
        ]);

        Route::post('gifs/reject', [
            'as' => 'admin.gifs.reject',
            'uses' => 'GifController@makeGifReject'
        ]);        
    });
});

Route::get('/gif-archive', function() {
    return view('gif::archive.gif-archive');
});

$middleware1 = ['web', 'auth'];
if (config('settings.need_verify_email') === true) {
  $middleware1 = ['web', 'auth', 'verified'];
}

Route::group([
	'prefix' => 'laravel-filemanager',
	'middleware' => $middleware1
], function () {
	\UniSharp\LaravelFilemanager\Lfm::routes();
});
