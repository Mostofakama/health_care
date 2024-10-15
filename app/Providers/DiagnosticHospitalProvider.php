<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\DiagnosticHospitalServices;

class DiagnosticHospitalProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(DiagnosticHospitalServices::class, function ($app) {
            return new DiagnosticHospitalServices();
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
