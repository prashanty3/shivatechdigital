<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        //
        // Share settings with all website views
        if (class_exists(\App\Models\Setting::class)) {
            View::composer('website.*', function ($view) {
                try {
                    $settings = \App\Models\Setting::getSettings();
                    $view->with('settings', $settings);
                } catch (\Exception $e) {
                    $view->with('settings', null);
                }
            });
        }
    }
}
