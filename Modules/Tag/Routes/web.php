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

Route::prefix('admin')->group(function() {
    Route::get('tag', 'TagController@index')->name('tag.index');
    Route::get('tag/create', 'TagController@create');
    Route::post('tag/store', 'TagController@store')->name('tag.store');
    Route::get('tag/edit/{id}', 'TagController@edit')->name('tag.edit');
    Route::get('tag/trash/{id}', 'TagController@trash')->name('tag.trash');
    Route::get('tag/delete/{id}', 'TagController@destroy')->name('tag.delete');
    Route::get('tag/empty-trash', 'TagController@emptyTrash')->name('tag.empty-trash');
    Route::post('tag/bulk-trash', 'TagController@bulkTrash')->name('tag.bulk-trash');
    Route::post('tag/bulk-delete', 'TagController@bulkDelete')->name('tag.bulk-delete');
});
