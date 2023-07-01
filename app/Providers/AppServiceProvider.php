<?php

declare(strict_types=1);

namespace App\Providers;

use App\Models\Category;
use App\Models\Setting;
use App\Models\Shop;
use Exception;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        try {
            view()->share('settings', Setting::where('slug', 'base')->firstOrFail());
            view()->share('shops', Shop::all());
            view()->share('categories', Category::where('parent_id', null)->with('children')->get());
        } catch (Exception $e) {
            // Not found
        }
    }
}
