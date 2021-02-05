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

        $font_logo = Settings::getLogoFontInfo();
        View::share('font_logo', $font_logo);
        $font_primary = Settings::getPrimaryFontInfo();
        View::share('font_primary', $font_primary);
        $font_secondary = Settings::getSecondaryFontInfo();
        View::share('font_secondary', $font_secondary);

        Route::get('/', 'AdminController@index');

        // Settings Page
        Route::get('settings', 'SettingsController@index');
        Route::post('settings/store', [
            'as' => 'settings.store',
            'uses' => 'SettingsController@store'
        ]);
    });
});
