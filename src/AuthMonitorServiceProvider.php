<?php

namespace EllorinGene\AuthMonitor;

use Illuminate\Support\ServiceProvider;

class AuthMonitorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'data');

        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/elloringene/authmonitor')
        ],'views');

        $this->publishes([
            __DIR__.'/models' => base_path('app/Models')
        ],'models');

        $this->publishes([
            __DIR__ . '/migrations' => base_path('database/migrations')
        ],'migrations');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes.php';
        $this->app->make('EllorinGene\AuthMonitor\AuthMonitorController');
    }
}
