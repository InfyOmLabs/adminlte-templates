<?php

namespace InfyOm\AdminLTETemplates;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
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
            __DIR__.'/../views/common' => resource_path('views/vendor/adminlte-templates/common'),
        ], 'adminlte-views');

        $this->publishes([
            __DIR__.'/../views/templates' => resource_path('views/vendor/adminlte-templates/templates'),
        ], 'adminlte-templates');

        Paginator::defaultView('adminlte-templates::common.paginator');
        Paginator::defaultSimpleView('adminlte-templates::common.simple_paginator');

        Blade::directive('ocb', function () {
            return '<?php echo "{{ " ?>';
        });

        Blade::directive('ccb', function () {
            return '<?php echo " }}" ?>';
        });
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
