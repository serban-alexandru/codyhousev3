<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Shortcodes\{SiteTitleShortcode, PostTitleShortcode, TagTitleShortcode, MenuShortcode, UsernameShortcode, SocialIconsShortcode};
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
        Shortcode::register('menu', MenuShortcode::class);
        Shortcode::register('username', UsernameShortcode::class);
        Shortcode::register('socialicons', SocialIconsShortcode::class);
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
