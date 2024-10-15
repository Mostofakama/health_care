<?php

namespace App\Providers;

use App\Services\SubDistrictServices;
use Illuminate\Support\ServiceProvider;

class SubDistrictServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(SubDistrictServices::class, function ($app) {
            return new SubDistrictServices();
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
