<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        // Get locale from session or default to 'ar'
        $locale = session('locale', 'ar');
        
        // Force locale setting
        app()->setLocale($locale);
        
        // Set in config as well
        config(['app.locale' => $locale]);
        
        // Debug information
        logger("Current Locale: " . app()->getLocale());
        logger("Session Locale: " . session('locale'));
        
        return $next($request);
    }
}
