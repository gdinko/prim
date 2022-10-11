<?php

namespace Gdinko\Prim;

use Gdinko\Prim\Commands\PrimApiStatusCommand;
use Illuminate\Support\ServiceProvider;

class PrimServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadMigrationsFrom(
            __DIR__ . '/../database/migrations'
        );

        $this->loadRoutesFrom(
            __DIR__ . '/../routes/api-prim.php'
        );

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/prim.php' => config_path('prim.php'),
            ], 'prim-config');

            $this->publishes([
                __DIR__ . '/../database/migrations/' => database_path('migrations'),
            ], 'prim-migrations');

            $this->publishes([
                __DIR__ . '/Models/' => app_path('Models'),
            ], 'prim-models');

            $this->publishes([
                __DIR__ . '/Commands/' => app_path('Console/Commands'),
            ], 'prim-commands');

            // Registering package commands.
            $this->commands([
                PrimApiStatusCommand::class,
            ]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__ . '/../config/prim.php', 'prim');

        // Register the main class to use with the facade
        $this->app->singleton('prim', function () {
            return new Prim();
        });
    }
}
