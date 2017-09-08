<?php

namespace InfyOm\AdminLTETemplates;

use Illuminate\Support\ServiceProvider;

class AdminLTETemplatesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../views', 'adminlte-templates');
        $this->publishes([
            __DIR__ . '/../views' => base_path('resources/views/vendor/adminlte-templates')
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
