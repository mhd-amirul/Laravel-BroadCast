<?php

namespace App\Providers;

use App\Services\api_auth as ServicesApi_auth;
use App\Services\Interfaces\api_auth;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(api_auth::class, ServicesApi_auth::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
