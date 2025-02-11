<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Http;  // تصحيح هنا: تغيير النقطة إلى شرطة مائلة

class ApiServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('uowa.api', function ($app) {
            return Http::baseUrl(config('services.uowa.url'))
                ->withHeaders([
                    'Authorization' => 'Bearer ' . config('services.uowa.token'),
                    'Accept' => 'application/json',
                ])
                ->withQueryParameters([
                    'category' => 'news',
                    'dep_id' => 5
                ]);
        });
    }
}
