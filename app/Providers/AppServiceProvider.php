<?php

namespace App\Providers;

use App\Models\Product;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        View::composer('custom_layout.header', function ($view) {
            $headerProducts = Product::with([
                'category',
                'brand',
            ])
                ->where('is_active', true)
                ->latest()
                ->get();

            $view->with('headerProducts', $headerProducts);
        });
    }
}
