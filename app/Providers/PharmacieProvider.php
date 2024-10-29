<?php

namespace App\Providers;

use App\Services\PharmacieServices;
use Illuminate\Support\ServiceProvider;

class PharmacieProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(PharmacieServices::class, function ($app) {
            return new PharmacieServices();
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
