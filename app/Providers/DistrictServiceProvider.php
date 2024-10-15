<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class DistrictServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(DistrictServices::class, function ($app) {
            return new DistrictServices();
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
