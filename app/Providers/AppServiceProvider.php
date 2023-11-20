<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Database\Query\Builder;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Builder::macro('whereLike', function ($column, $search) {
            return $this->where($column, 'LIKE', "%{$search}%");
        });
        Builder::macro('orWhereLike', function ($column, $search) {
            return $this->orWhere($column, 'LIKE', "%{$search}%");
        });

        Paginator::useBootstrapFive();
    }
}
