<?php

namespace App\Providers;

use App\Services\DivisionServices;
use Illuminate\Support\ServiceProvider;

class DivisionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(DivisionServices::class, function ($app) {
            return new DivisionServices();
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
