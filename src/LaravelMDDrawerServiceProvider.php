<?php

namespace Aliabdulaziz\LaravelMDDrawer;

use Illuminate\Support\ServiceProvider;

class LaravelMDDrawerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Load Views
        $this->loadViewsFrom(__DIR__.'/views', 'laravelmddrawer');

        // Publish Views
        $this->publishes([
        __DIR__.'/views' => resource_path('views/vendor/laravelmddrawer'),
        ], 'views');

        // Publish Assets
        $this->publishes([
            __DIR__.'/assets/dist' => public_path('vendor/laravelmddrawer'),
        ], 'assets');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}