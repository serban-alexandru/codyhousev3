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
use Modules\Admin\Entities\Settings;

Route::middleware('auth', 'role:admin')->group(function(){

    Route::prefix('admin')->group(function() {
        // Share Site Setting Data
        $settings_data = Settings::getSiteSettings();
        View::share('settings_data', $settings_data);

        Route::get('/', 'AdminController@index');

        // Settings Page
        Route::get('settings', 'SettingsController@index');
        Route::post('settings/store', [
            'as' => 'settings.store',
            'uses' => 'SettingsController@store'
        ]);

        // Post Management Pages from /admin/dashboard
        Route::get('/dashboard', 'AdminController@index');
        Route::get('/dashboard/settings', 'AdminController@settings');
      
        Route::post('/dashboard/store', [
          'as' => 'admin.dashboard.store',
          'uses' => 'AdminController@store'
        ]);
      
        Route::get('/dashboard/{id}/fetch-data', [
          'as' => 'admin.dashboard.fetch-data',
          'uses' => 'AdminController@fetchDataAjax'
        ]);
      
        Route::post('/dashboard/update', [
          'as' => 'admin.dashboard.update',
          'uses' => 'AdminController@ajaxUpdate'
        ]);
      
        Route::post('/dashboard/delete', [
          'as' => 'admin.dashboard.delete',
          'uses' => 'AdminController@delete'
        ]);
      
        Route::post('/dashboard/delete-permanently', [
          'as' => 'admin.dashboard.delete-permanently',
          'uses' => 'AdminController@deletePermanently'
        ]);
      
        Route::post('/dashboard/delete/multiple', [
          'as' => 'admin.dashboard.delete.multiple',
          'uses' => 'AdminController@deleteMultiple'
        ]);
      
        Route::post('/dashboard/trash/empty', [
          'as' => 'admin.dashboard.trash.empty',
          'uses' => 'AdminController@emptyTrash'
        ]);
      
        Route::post('/dashboard/settings/store', [
            'as' => 'admin.dashboard.settings.store',
            'uses' => 'AdminController@settingsStore'
        ]);
      
        Route::post('/dashboard/settings/update', [
            'as' => 'admin.dashboard.settings.update',
            'uses' => 'AdminController@settingsUpdate'
        ]);
      
        Route::get('/dashboard/{id}/make-draft', [
            'as' => 'admin.dashboard.make-draft',
            'uses' => 'AdminController@makePostDraft'
        ]);
      
        Route::get('/dashboard/{id}/publish', [
            'as' => 'admin.dashboard.publish',
            'uses' => 'AdminController@makePostPublish'
        ]);
      
        Route::get('/dashboard/{id}/restore', [
            'as' => 'admin.dashboard.restore',
            'uses' => 'AdminController@restore'
        ]);        
    });
});
