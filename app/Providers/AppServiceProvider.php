<?php

declare(strict_types=1);

namespace App\Providers;

use App\Models\Setting;
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
        } catch (Exception $e) {
            // Not found
        }
    }
}
