<?php

namespace App\Providers;

use App\Pagination\CustomPaginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // $this->app->alias(CustomPaginator::class, LengthAwarePaginator::class);
        // $this->app->alias(CustomPaginator::class, LengthAwarePaginatorContract::class);

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
