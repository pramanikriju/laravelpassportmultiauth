<?php

namespace rijupramanik\LaravelPassportMultiAuth;

use Illuminate\Support\ServiceProvider;

class LaravelPassportMultiAuthServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'rijupramanik');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'rijupramanik');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/laravelpassportmultiauth.php', 'laravelpassportmultiauth');

        // Register the service the package provides.
        $this->app->singleton('laravelpassportmultiauth', function ($app) {
            return new LaravelPassportMultiAuth;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['laravelpassportmultiauth'];
    }
    
    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/laravelpassportmultiauth.php' => config_path('laravelpassportmultiauth.php'),
        ], 'laravelpassportmultiauth.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/rijupramanik'),
        ], 'laravelpassportmultiauth.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/rijupramanik'),
        ], 'laravelpassportmultiauth.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/rijupramanik'),
        ], 'laravelpassportmultiauth.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
