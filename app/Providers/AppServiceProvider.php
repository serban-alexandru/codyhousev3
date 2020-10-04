<?php

namespace App\Providers;

use Modules\Post\Entities\Post;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->share('posts_count', Post::count());
        view()->share('posts_count_deleted', Post::where('is_deleted', 1)->count());
    }
}
