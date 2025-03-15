<style>
    .techno_nav_manu {
        background: #0C244E !important;
        z-index: 444;
        position: relative;
        margin-bottom: -91px;
        border-bottom: 1px solid #807e94;
    }

</style>
@extends('layouts.main')

@section('content')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap');

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

    .news-header {
        position: relative;
        height: 500px;
    }

    .news-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .news-header:after {
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
        transform: translateX(app()->getLocale() === 'ar' ? 5px : -5px);
    }

    @media (max-width: 768px) {
        .news-header {
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
</style>

<div class="single-news-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="news-detail-card">
                    <div class="news-header">
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
