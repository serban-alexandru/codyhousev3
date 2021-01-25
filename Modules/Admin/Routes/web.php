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
    });
});
