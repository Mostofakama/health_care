<?php

namespace App\Providers;

use App\Services\DoctorServices;
use Illuminate\Support\ServiceProvider;

class DoctorProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(DoctorServices::class, function ($app) {
            return new DoctorServices();
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
