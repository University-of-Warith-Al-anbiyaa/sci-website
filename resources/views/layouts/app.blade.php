<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', session('locale', 'ar')) }}" dir="{{ session('locale', 'ar') === 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>
    <style>
        .techno_nav_manu {
            background: #000 !important;
        }
        .nav_scroll > li > a {
            color: white !important;
        }
        main {
            margin-top: 0;
            position: relative;
            z-index: 1;
        }
        .page-header {
            position: relative;
            background: linear-gradient(135deg, #0C244E, #2a628f);
            color: white;
            padding: 80px 0;
            text-align: center;
            margin-top: 0;
        }
        .page-title {
            font-size: 36px;
            margin: 0;
            color: white;
        }
    </style>
</head>
<body>
    @include('partials.header')
    
    @if(request()->route()->getName() !== 'home')
        <div class="page-header"></div>
            <h1 class="page-title">@yield('page-title')</h1>
        </div>
    @endif

    <main>
        @yield('content')
    </main>

    @stack('scripts')
</body>
</html>
