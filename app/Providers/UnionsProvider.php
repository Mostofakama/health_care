<?php

namespace App\Providers;
use App\Services\UnionsServices;
use Illuminate\Support\ServiceProvider;

class UnionsProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(UnionsServices::class, function ($app) {
            return new UnionsServices();
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
