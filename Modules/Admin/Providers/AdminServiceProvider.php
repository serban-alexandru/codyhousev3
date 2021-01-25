<?php

namespace Modules\Admin\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * @var string $moduleName
     */
    protected $moduleName = 'Admin';

    /**
     * @var string $moduleNameLower
     */
    protected $moduleNameLower = 'admin';

    /**
     * The default google fonts list to be used on settings page
     * @var array $gFonts
     */
    public const GOOGLE_FONTS = array (
        'Alegreya',
        'Alegreya Sans',
        'Anonymous Pro',
        'Archivo Narrow',
        'Arvo',
        'BioRhyme',
        'Cabin',
        'Cardo',
        'Chivo',
        'Cormorant',
        'Crimson Text',
        'Eczar',
        'Fira Sans',
        'IBM Plex Sans',
        'Inconsolata',
        'Inknut Antiqua',
        'Inter',
        'Karla',
        'Lato',
        'Libre Baskerville',
        'Libre Franklin',
        'Lora',
        'Merriweather',
        'Montserrat',
        'Neuton',
        'Open Sans',
        'Oswald',
        'PT Sans',
        'PT Serif',
        'Playfair Display',
        'Poppins',
        'Proza Libre',
        'Raleway',
        'Roboto',
        'Roboto Condensed',
        'Roboto Slab',
        'Rubik',
        'Source Sans Pro',
        'Source Serif Pro',
        'Space Mono',
        'Spectral',
        'Work Sans'    
    );
    
    /**
     * Primary Font
     * @var string $primary_font
     */
    public const PRIMARY_FONT = 'Roboto Slab';

    /**
     * Secondary Font
     * @var string $secondary_font
     */
    public const SECONDARY_FONT = 'Inter';

    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerTranslations();
        $this->registerConfig();
        $this->registerViews();
        $this->registerFactories();
        $this->loadMigrationsFrom(module_path($this->moduleName, 'Database/Migrations'));
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->publishes([
            module_path($this->moduleName, 'Config/config.php') => config_path($this->moduleNameLower . '.php'),
        ], 'config');
        $this->mergeConfigFrom(
            module_path($this->moduleName, 'Config/config.php'), $this->moduleNameLower
        );
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $viewPath = resource_path('views/modules/' . $this->moduleNameLower);

        $sourcePath = module_path($this->moduleName, 'Resources/views');

        $this->publishes([
            $sourcePath => $viewPath
        ], ['views', $this->moduleNameLower . '-module-views']);

        $this->loadViewsFrom(array_merge($this->getPublishableViewPaths(), [$sourcePath]), $this->moduleNameLower);
    }

    /**
     * Register translations.
     *
     * @return void
     */
    public function registerTranslations()
    {
        $langPath = resource_path('lang/modules/' . $this->moduleNameLower);

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, $this->moduleNameLower);
        } else {
            $this->loadTranslationsFrom(module_path($this->moduleName, 'Resources/lang'), $this->moduleNameLower);
        }
    }

    /**
     * Register an additional directory of factories.
     *
     * @return void
     */
    public function registerFactories()
    {
        if (! app()->environment('production') && $this->app->runningInConsole()) {
            app(Factory::class)->load(module_path($this->moduleName, 'Database/factories'));
        }
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }

    private function getPublishableViewPaths(): array
    {
        $paths = [];
        foreach (\Config::get('view.paths') as $path) {
            if (is_dir($path . '/modules/' . $this->moduleNameLower)) {
                $paths[] = $path . '/modules/' . $this->moduleNameLower;
            }
        }
        return $paths;
    }
}
