<!DOCTYPE html>
<html lang="{{ session('locale') }}" dir="{{ session('locale') === 'en' ? 'ltr' : 'rtl' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>جامعة وارث الانبياء</title>

    <!-- CSS Files -->
    <link href="{{ asset('s/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('s/common-7.5.css') }}" rel="stylesheet">
    <link href="{{ asset('s/style.css') }}" rel="stylesheet">
    <link href="{{ asset('s/newstyle.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('s/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/language-switcher.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/news-loader.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- <link href="s/common-7.5.css" rel="stylesheet">
	<link href="s/style.css" rel="stylesheet">
	<link href="s/newstyle.css" rel="stylesheet">
	<link rel="stylesheet" href="s/swiper-bundle.min.css">
	<link rel="stylesheet" href="styles/language-switcher.css">
	<link rel="stylesheet" href="styles/news-loader.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"> -->

    <!-- JavaScript Files -->
    <script src="{{ asset('s/jquery.meanmenu.js') }}"></script>
    <script src="{{ asset('s/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('s/theme.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- <script src="s/jquery.meanmenu.js"></script>
    <script src="s/swiper-bundle.min.js"></script>
    <script src="s/theme.js"></script> -->
    <!-- <script src="/clc/request.js"></script> -->
</head>

<body>
    @include('partials.header')


    @yield('content')


    @include('partials.footer')

    <!-- Core Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    document.getElementById('langToggle').onclick = function(e) {
        e.preventDefault();
        const currentLang = this.getAttribute('data-current-lang');
        const newLang = currentLang === 'ar' ? 'en' : 'ar';

        fetch('/switch-language', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({ locale: newLang })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                location.reload();
            }
        })
        .catch(error => console.error('Error:', error));
    };
    </script>
    @stack('scripts')
</body>

</html>