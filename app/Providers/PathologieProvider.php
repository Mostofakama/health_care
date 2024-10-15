<?php

namespace App\Providers;

use App\Services\PathologieServices;
use Illuminate\Support\ServiceProvider;

class PathologieProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(PathologieServices::class, function ($app) {
            return new PathologieServices();
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
