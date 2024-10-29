<?php

namespace App\Providers;

use App\Services\GalleryServices;
use Illuminate\Support\ServiceProvider;

class GalleryProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(GalleryServices::class, function ($app) {
            return new GalleryServices();
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
