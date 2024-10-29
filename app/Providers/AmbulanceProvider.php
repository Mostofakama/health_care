<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AmbulanceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(AmbulanceServices::class, function ($app) {
            return new AmbulanceServices();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
