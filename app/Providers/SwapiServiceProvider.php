<?php

namespace App\Providers;

use App\Services\Swapi;
use App\Services\Contracts\SwapiInterface;
use Illuminate\Support\ServiceProvider;

class SwapiServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(SwapiInterface::class, Swapi::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
