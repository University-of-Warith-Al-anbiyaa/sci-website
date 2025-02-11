<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;

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
        // Set default locale
        $locale = session('locale', config('app.locale', 'ar'));
        
        // Force locale setting
        App::setLocale($locale);
        
        // Set in config
        config(['app.locale' => $locale]);
    }
}
