<?php

namespace App\Providers;

use App\Services\api_auth as ServicesApi_auth;
use App\Services\api_chat as ServicesApi_chat;
use App\Services\Interfaces\api_auth;
use App\Services\Interfaces\api_chat;
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
        $this->app->bind(api_chat::class, ServicesApi_chat::class);
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
