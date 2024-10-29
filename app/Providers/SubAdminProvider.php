<?php

namespace App\Providers;

use App\Services\SubAdminServices;
use Illuminate\Support\ServiceProvider;

class SubAdminProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(SubAdminServices::class, function ($app) {
            return new SubAdminServices();
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
