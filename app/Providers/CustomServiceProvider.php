<?php

namespace App\Providers;

use App\Services\BaseService;
use App\Services\BaseServiceInterface;
use App\Services\ListingCategories\ListingCategoriesService;
use App\Services\ListingCategories\ListingCategoriesServiceInterface;
use App\Services\Listings\ListingsService;
use App\Services\Listings\ListingsServiceInterface;
use App\Services\Users\UsersService;
use App\Services\Users\UsersServiceInterface;
use Illuminate\Support\ServiceProvider;

class CustomServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(BaseServiceInterface::class, BaseService::class);
        $this->app->bind(UsersServiceInterface::class, UsersService::class);
        $this->app->bind(ListingsServiceInterface::class, ListingsService::class);
        $this->app->bind(ListingCategoriesServiceInterface::class, ListingCategoriesService::class);
    }
}
