<?php

namespace App\Providers;

use App\Http\Business\ImovelBusiness;
use App\Http\Contracts\ImovelBusinessContract;
use App\Http\Contracts\ImovelRepositoryContract;
use App\Http\Repository\ImovelRepository;
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
        $this->app->bind(ImovelBusinessContract::class, ImovelBusiness::class);
        $this->app->bind(ImovelRepositoryContract::class, ImovelRepository::class);
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
