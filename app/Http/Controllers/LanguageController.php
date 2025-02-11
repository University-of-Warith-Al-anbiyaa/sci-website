<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LanguageController extends Controller
{
    public function switch(Request $request)
    {
        // Validate locale
        $locale = in_array($request->locale, ['en', 'ar']) ? $request->locale : 'en';
        
        // Store in session
        session()->put('locale', $locale);
        
        // Set application locale
        app()->setLocale($locale);
        
        // Set in config
        config(['app.locale' => $locale]);
        
        // Debug information
        logger("Switching to locale: " . $locale);
        logger("App locale after switch: " . app()->getLocale());
        
        return response()->json([
            'success' => true,
            'locale' => $locale,
            'dir' => $locale === 'ar' ? 'rtl' : 'ltr',
            'debug' => [
                'session_locale' => session('locale'),
                'app_locale' => app()->getLocale(),
                'config_locale' => config('app.locale')
            ]
        ]);
    }
}
