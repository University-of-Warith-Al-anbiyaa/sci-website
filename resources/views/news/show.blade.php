<style>
    .techno_nav_manu {
        background: #2c3e50 !important;
        z-index: 444;
        position: relative;
        margin-bottom: -91px;
        border-bottom: 1px solid #807e94;
    }

    /* قاعدة للأجهزة التي عرضها أقل من 990px */
    @media screen and (max-width: 990px) {
        .category-news-header {
            top: 0px !important;
        }
    }

    @media only screen and (min-width: 320px) and (max-width: 599px) {
        .techno_nav_manu {
            display: none !important;
        }
        .sticky {
            display: none !important;
        }
    }

    @media screen and (max-width: 990px) {
        .techno_nav_manu {
            display: none !important;
        }
        .sticky {
            display: none !important;
        }
    }

    /* قاعدة للأجهزة التي عرضها أقل من 768px */
    @media screen and (max-width: 768px) {
        .category-news-header {
            top: 0px !important;
        }
    }
</style>

@extends('layouts.main')

@section('content')
<!-- <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/responsive.css') }}"> -->

<style>
    /* @import url('https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap'); */

    .single-news-area {
        padding: 60px 0;
        background: #f8f9fa;
        font-family: 'Tajawal', sans-serif;
    }

    .news-detail-card {
        background: #fff;
        border-radius: 25px;
        box-shadow: 0 15px 40px rgba(0,0,0,0.08);
        overflow: hidden;
        margin-top: 40px;
        transition: all 0.3s ease;
    }

    .news-header-image {
        position: relative;
        height: 500px;
        overflow: hidden;
    }

    .news-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .news-header-image:after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 200px;
        background: linear-gradient(to top, rgba(0,0,0,0.6), transparent);
    }

    .news-content {
        position: relative;
        margin-top: -100px;
        padding: 40px 60px;
        background: white;
        border-radius: 25px 25px 0 0;
        z-index: 2;
    }

    .news-meta {
        display: inline-flex;
        align-items: center;
        gap: 15px;
        background: #e8f5fe;
        padding: 10px 20px;
        border-radius: 50px;
        color: #3498db;
        font-size: 1rem;
        margin-bottom: 25px;
    }

    .news-meta i {
        font-size: 1.2rem;
    }

    .news-title {
        font-size: 2.8rem;
        color: #2c3e50;
        margin-bottom: 30px;
        line-height: 1.4;
        font-weight: 700;
    }

    .news-body {
        font-size: 1.2rem;
        line-height: 1.9;
        color: #444;
        margin-bottom: 40px;
    }

    .news-body p {
        margin-bottom: 20px;
    }

    .news-body img {
        width: 100%;
        height: auto;
        border-radius: 15px;
        margin: 30px 0;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }

    .back-btn {
        display: inline-flex;
        align-items: center;
        gap: 12px;
        padding: 15px 30px;
        background: linear-gradient(135deg, #3498db 0%, #2980b9 100%);
        color: white;
        border-radius: 50px;
        text-decoration: none;
        font-size: 1.1rem;
        font-weight: 500;
        transition: all 0.3s ease;
        margin-top: 20px;
    }

    .back-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(52, 152, 219, 0.3);
        color: white;
    }

    .back-btn i {
        transition: transform 0.3s ease;
    }

    .back-btn:hover i {
        transform: translateX({{ app()->getLocale() === 'ar' ? '5px' : '-5px' }});
    }

    @media (max-width: 768px) {
        .news-header-image {
            height: 300px;
        }
        
        .news-content {
            padding: 30px;
            margin-top: -50px;
        }
        
        .news-title {
            font-size: 2rem;
        }
        
        .news-body {
            font-size: 1.1rem;
        }
    }

    @media (max-width: 992px) {
        .news-header-image { 
            height: 400px; 
        }
        .news-content { 
            margin-top: 0; 
            padding: 24px; 
        }
    }
</style>

<header class="category-news-header d-flex justify-content-center align-items-end"
    style="background:linear-gradient(180deg, rgba(0, 11, 31, .3), rgba(0, 11, 31, .3)), url('{{ asset('store/slider.jpg') }}'); top: 90; position: relative; z-index: 1;">
</header>

<div class="single-news-area">
    <div class="container">
        <div class="border-bottom px-2 mb-4">
            <div class="d-flex align-items-start">
                <div class="ms-2"><a class="text-c-dark" href="/">{{ app()->getLocale() === 'ar' ? 'الرئيسية' : 'Home' }}</a></div>
                <div class="ms-2">
                    <i class="uowa-chevron-left"></i>
                </div>
                <div class="ms-2"><a class="text-c-dark" href="{{ route('news.index') }}">{{ app()->getLocale() === 'ar' ? 'أخبار الجامعة' : 'University News' }}</a></div>
                <div class="ms-2">
                    <i class="uowa-chevron-left"></i>
                </div>
                <div class="ms-2 text-c-yellow2">{{ app()->getLocale() === 'ar' ? 'تفاصيل الخبر' : 'News Details' }}</div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="news-detail-card">
                    <div class="news-header-image">
                        @if(!empty($newsItem['photos'][0]))
                            <img src="https://uowa.edu.iq/store/filestorage/file_{{ $newsItem['photos'][0] }}" 
                                 class="news-image" 
                                 alt="{{ $newsItem['data']['title'] }}">
                        @endif
                    </div>

                    <div class="news-content">
                        <div class="news-meta">
                            <i class="far fa-calendar-alt"></i>
                            <span>{{ date('F j, Y', strtotime($newsItem['data']['date'])) }}</span>
                        </div>

                        <h1 class="news-title">{{ $newsItem['data']['title'] }}</h1>
                        
                        <div class="news-body">
                            {!! $newsItem['data']['content'] !!}
                        </div>

                        <a href="{{ route('news.index') }}" class="back-btn">
                            <i class="fas fa-arrow-{{ app()->getLocale() === 'ar' ? 'right' : 'left' }}"></i>
                            {{ app()->getLocale() === 'ar' ? 'عودة إلى الأخبار' : 'Back to News' }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

<!-- @push('scripts')
    <script src="{{ asset('s/jquery-3.2.1.min.js.download') }}"></script>
    <script src="{{ asset('s/jquery.meanmenu.js.download') }}"></script>
    <script src="{{ asset('s/theme.js.download') }}"></script>

    <script>
        $(window).on('scroll', function () {
            var scrolled = $(window).scrollTop();
            if (scrolled > 300) $('.go-top').addClass('active');
            if (scrolled < 300) $('.go-top').removeClass('active');
        });

        $('.go-top').on('click', function () {
            $("html, body").animate({
                scrollTop: "0"
            }, 1200);
        });
    </script>
@endpush -->
