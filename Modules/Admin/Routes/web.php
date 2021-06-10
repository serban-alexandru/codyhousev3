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

Route::get('/admin/contact',function(){
    return view('admin::contact.index');
  });

Route::get('/admin/scraper',function(){
    return view('admin::scraper.index');
  });

use Illuminate\Support\Facades\Schema;
use Modules\Admin\Entities\Settings;

$middleware = 'auth';
if (config('settings.need_verify_email') === true) {
  $middleware = ['auth','verified'];
}

Route::middleware($middleware, 'role:admin')->group(function(){

    Route::prefix('admin')->group(function() {
        if (Schema::hasTable('settings')) {
            // Share Site Setting Data
            $settings_data = Settings::getSiteSettings();
            View::share('settings_data', $settings_data);

            $font_logo = Settings::getLogoFontInfo();
            View::share('font_logo', $font_logo);
            $font_primary = Settings::getPrimaryFontInfo();
            View::share('font_primary', $font_primary);
            $font_secondary = Settings::getSecondaryFontInfo();
            View::share('font_secondary', $font_secondary);
        }
        
        Route::get('/', 'PostBoxController@index');

        // Post Box Module
        Route::get('loadbox/{type}', 'PostBoxController@ajaxLoadBox');
        Route::post('/store', [
            'as' => 'postbox.store',
            'uses' => 'PostBoxController@store'
        ]);

        // Settings Page
        Route::get('settings', 'SettingsController@index');
        Route::post('settings/store', [
            'as' => 'settings.store',
            'uses' => 'SettingsController@store'
        ]);
    });
});
