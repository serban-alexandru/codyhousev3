<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/gif', function (Request $request) {
    return $request->user();
});

Route::get('gifs/page/{id}', 'GifController@ajaxShowGifs');
Route::get('gif/{gif_id}/{pagenum}', 'GifController@ajaxInfiniteLoadGif');
