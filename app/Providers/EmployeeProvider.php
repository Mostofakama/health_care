<?php

namespace App\Providers;

use App\Services\EmployeeServices;
use Illuminate\Support\ServiceProvider;

class EmployeeProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(EmployeeServices::class, function ($app) {
            return new EmployeeServices();
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
