<?php

namespace App\Providers;

use App\Services\Infrastructure\ConnectionService;
use App\Services\Infrastructure\ConnectionServiceInterface;
use App\Services\ResponseApiService;
use App\Services\ResponseApiServiceInterface;
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
        $this->app->bind(ResponseApiServiceInterface::class, ResponseApiService::class);
        $this->app->bind(ConnectionServiceInterface::class, ConnectionService::class);
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
