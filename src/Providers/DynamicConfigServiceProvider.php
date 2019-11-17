<?php

namespace Vbogoev\DynamicConfig\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Vbogoev\DynamicConfig\Console\BasicSeedCommand;
use Vbogoev\DynamicConfig\Facades\DynamicConfig;
use Illuminate\Database\Eloquent\Factory as EloquentFactory;

class DynamicConfigServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands([
            BasicSeedCommand::class
        ]);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->registerPublishing();
        }

        $this->registerMigrations();
        $this->registerFacades();
        $this->registerRoutes();
        $this->registerViews();
        $this->registerFactories();
    }

    /**
     * Register the package's publishable resources.
     *
     * @return void
     */
    protected function registerPublishing()
    {
        $this->publishes([
            __DIR__.'/../../config/dynamic-config.php' => config_path('dynamic-config.php'),
        ], 'dynamic-config');
    }

    protected function registerRoutes()
    {
        Route::group($this->getRouteConfiguration(), function(){
            $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');
        });
    }

    protected function registerViews()
    {
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'dynamic-config');
    }

    protected function registerFacades()
    {
        $this->app->singleton('DynamicConfig', function ($app) {
            return new \Vbogoev\DynamicConfig\DynamicConfig();
        });
    }

    protected function registerMigrations()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
    }

    protected function getRouteConfiguration()
    {
        return DynamicConfig::getRouteOptions();
    }

    protected function registerFactories()
    {
        $this->app->make(EloquentFactory::class)->load(__DIR__ . '/../../database/factories');
    }
}
