<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Shortcodes\{SiteTitleShortcode, PostTitleShortcode, TagTitleShortcode};
use Shortcode;

class ShortcodesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        Shortcode::register('sitetitle', SiteTitleShortcode::class);
        Shortcode::register('posttitle', PostTitleShortcode::class);
        Shortcode::register('tagtitle', TagTitleShortcode::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
