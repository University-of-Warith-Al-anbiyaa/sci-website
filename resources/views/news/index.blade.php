<?php
use Illuminate\Support\Str;
?>
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
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- @include('partials.slider') -->

    <div class="blog-area pd-top-120 pd-bottom-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div class="dreamit-section-title text-center style-two position-relative">
                        <h1 class="py-3">{{ app()->getLocale() === 'ar' ? 'جميع الأخبار' : 'All News' }}</h1>
                    </div>
                </div>
            </div>

            <style>
                .news-grid {
                    display: grid;
                    grid-template-columns: repeat(2, 1fr);
                    gap: 30px;
                    margin: 40px 0;
                }

                .news-card {
                    background: #fff;
                    border-radius: 15px;
                    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
                    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                    overflow: hidden;
                    position: relative;
                    height: 100%;
                    display: flex;
                    flex-direction: column;
                    border: 1px solid rgba(0,0,0,0.05);
                }

                .news-card:hover {
                    transform: translateY(-5px);
                    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
                }

                .news-thumb {
                    position: relative;
                    overflow: hidden;
                    height: 240px;
                    background: #f8f9fa;
                }

                .news-thumb:before {
                    content: '';
                    position: absolute;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    height: 60%;
                    background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);
                    z-index: 1;
                }

                .news-thumb img {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    transition: transform 1s cubic-bezier(0.165, 0.84, 0.44, 1);
                }

                .news-card:hover .news-thumb img {
                    transform: scale(1.08);
                }

                .news-content {
                    padding: 25px;
                    background: white;
                    position: relative;
                    margin: -40px 20px 20px;
                    border-radius: 12px;
                    box-shadow: 0 5px 15px rgba(0,0,0,0.08);
                    z-index: 2;
                    flex: 1;
                    display: flex;
                    flex-direction: column;
                }

                .news-date {
                    color: #0056b3;
                    font-size: 0.9rem;
                    font-weight: 500;
                    display: flex;
                    align-items: center;
                    gap: 6px;
                    margin-bottom: 12px;
                }

                .news-title {
                    font-size: 1.35rem;
                    font-weight: 700;
                    color: #1a1a1a;
                    margin-bottom: 15px;
                    line-height: 1.5;
                    display: -webkit-box;
                    -webkit-line-clamp: 2;
                    -webkit-box-orient: vertical;
                    overflow: hidden;
                }

                .news-title a {
                    color: inherit;
                    text-decoration: none;
                    transition: color 0.3s ease;
                }

                .news-title a:hover {
                    color: #0056b3;
                }

                .news-excerpt {
                    color: #555;
                    line-height: 1.7;
                    font-size: 1rem;
                    margin-bottom: 20px;
                    display: -webkit-box;
                    -webkit-line-clamp: 3;
                    -webkit-box-orient: vertical;
                    overflow: hidden;
                    flex: 1;
                }

                .news-link {
                    display: inline-flex;
                    align-items: center;
                    gap: 8px;
                    color: #0056b3;
                    font-weight: 600;
                    font-size: 1rem;
                    text-decoration: none;
                    padding: 8px 0;
                    position: relative;
                    transition: all 0.3s ease;
                }

                .news-link:after {
                    content: '';
                    position: absolute;
                    bottom: 0;
                    left: 0;
                    width: 0;
                    height: 2px;
                    background: #0056b3;
                    transition: width 0.3s ease;
                }

                .news-link:hover:after {
                    width: 100%;
                }

                .pagination {
                    margin-top: 50px;
                    gap: 8px;
                }

                .pagination .page-item .page-link {
                    border: none;
                    padding: 12px 18px;
                    color: #444;
                    font-weight: 600;
                    border-radius: 8px;
                    background: #f8f9fa;
                    transition: all 0.3s ease;
                    min-width: 45px;
                    text-align: center;
                }

                .pagination .page-item.active .page-link {
                    background: #0056b3;
                    color: white;
                }

                .pagination .page-item .page-link:hover:not(.active) {
                    background: #e9ecef;
                    color: #0056b3;
                }

                .dreamit-section-title h1 {
                    .news-content {
                        margin: -25px 12px 15px;
                        padding: 20px;
                    }
                }

                .dreamit-section-title {
                    margin-bottom: 50px;
                    position: relative;
                }

                .dreamit-section-title h1 {
                    font-size: 2.5rem;
                    font-weight: 800;
                    color: #2c3e50;
                    position: relative;
                    display: inline-block;
                    padding-bottom: 15px;
                }

                .dreamit-section-title h1:after {
                    content: '';
                    position: absolute;
                    bottom: 0;
                    left: 50%;
                    transform: translateX(-50%);
                    width: 80px;
                    height: 4px;
                    background: #3498db;
                    border-radius: 2px;
                }

                /* Updated pagination styles */
                .pagination {
                    display: flex;
                    justify-content: center;
                    gap: 5px;
                    margin-top: 40px;
                }

                .pagination .page-item .page-link {
                    border: none;
                    padding: 12px 20px;
                    color: #2c3e50;
                    font-weight: 600;
                    border-radius: 10px;
                    background: #f8f9fa;
                    transition: all 0.3s ease;
                }

                .pagination .page-item.active .page-link {
                    background: #3498db;
                    color: white;
                }

                .pagination .page-item .page-link:hover {
                    background: #e9ecef;
                    color: #3498db;
                }

                .pagination .page-item.active .page-link:hover {
                    background: #2980b9;
                    color: white;
                }

                /* New Pagination Styles */
                .pagination-wrapper {
                    margin-top: 60px;
                    text-align: center;
                }

                .page-info {
                    color: #666;
                    margin-bottom: 15px;
                    font-size: 0.95rem;
                }

                .pagination {
                    display: inline-flex;
                    background: white;
                    padding: 5px;
                    border-radius: 50px;
                    box-shadow: 0 3px 15px rgba(0,0,0,0.08);
                    margin: 0;
                }

                .pagination .page-item .page-link {
                    min-width: 40px;
                    height: 40px;
                    margin: 0 3px;
                    padding: 0;
                    border-radius: 50%;
                    line-height: 40px;
                    font-size: 1rem;
                    font-weight: 500;
                    color: #444;
                    background: transparent;
                    border: none;
                    transition: all 0.3s ease;
                }

                .pagination .page-item.active .page-link {
                    background: #0056b3;
                    color: white;
                    transform: scale(1.1);
                    box-shadow: 0 3px 10px rgba(0,86,179,0.3);
                }

                .pagination .page-item .page-link:hover:not(.active) {
                    background: #e9ecef;
                    color: #0056b3;
                    transform: scale(1.05);
                }

                .pagination .page-item.disabled .page-link {
                    color: #aaa;
                    pointer-events: none;
                }

                .page-nav-btn {
                    width: auto !important;
                    padding: 0 20px !important;
                    border-radius: 25px !important;
                    margin: 0 5px !important;
                    font-weight: 600 !important;
                }

                @media (max-width: 576px) {
                    .pagination {
                        flex-wrap: wrap;
                        justify-content: center;
                        padding: 10px;
                        gap: 5px;
                    }

                    .pagination .page-item .page-link {
                        min-width: 35px;
                        height: 35px;
                        line-height: 35px;
                        font-size: 0.9rem;
                    }

                    .page-nav-btn {
                        padding: 0 15px !important;
                    }
                }

                /* Add these new pagination styles */
                .pagination-container {
                    background: white;
                    padding: 30px;
                    border-radius: 15px;
                    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
                    margin-top: 30px;
                }

                ul.pagination li {
                    display: contents;
                    text-align: center;
                    background-color: rgb(248, 249, 250)
                }

                ul.pagination li a {
                    color: #2c3e50;
                    display: flex;
                    min-width: 32px;
                }

                .pagination {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    gap: 8px;
                }

                .page-items {
                    list-style: none;
                }

                .page-links {
                    min-width: 40px;
                    height: 40px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    padding: 0 15px;
                    border-radius: 50px;
                    border: 2px solid #e0e6ed;
                    color: #2c3e50;
                    font-weight: 500;
                    background: white;
                    transition: all 0.3s ease;
                    text-decoration: none;
                }

                .page-items.active .page-links {
                    background: linear-gradient(135deg, #3498db, #2980b9);
                    color: #2c3e50;
                    border-color: transparent;
                    box-shadow: 0 5px 15px rgba(52, 152, 219, 0.3);
                }

                .page-links:hover:not(.active) {
                    background: #f8f9fa;
                    border-color: #3498db;
                    transform: translateY(-2px);
                }

                .page-items.disabled .page-links {
                    opacity: 0.5;
                    pointer-events: none;
                }

                .pagination-info {
                    text-align: center;
                    margin-top: 15px;
                    color: #666;
                    font-size: 0.9rem;
                    padding: 10px;
                    background: #f8f9fa;
                    border-radius: 30px;
                    display: inline-block;
                    margin-left: auto;
                    margin-right: auto;
                }
            </style>

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="news-grid">
                        @if(!empty($news['data']))
                            @foreach($news['data'] as $newsItem)
                                <article class="news-card">
                                    <div class="news-thumb">
                                        <img src="{{ !empty($newsItem['photo']) ? 'https://uowa.edu.iq/store/filestorage/file_' . $newsItem['photo'] : 'store/default-news.jpg' }}"
                                            alt="{{ $newsItem['arttitle'] }}">
                                    </div>
                                    <div class="news-content">
                                        <div class="news-date">
                                            <i class="far fa-calendar-alt"></i>
                                            {{ date('F j, Y', strtotime($newsItem['created'])) }}
                                        </div>
                                        <h3 class="news-title">
                                            <a href="{{ route('news.show', $newsItem['id']) }}">
                                                {{ Str::limit(strip_tags($newsItem['arttitle']), 100) }}
                                            </a>
                                        </h3>
                                        <p class="news-excerpt">
                                            {{ Str::limit(strip_tags($newsItem['content']), 150) }}
                                        </p>
                                        <a href="{{ route('news.show', $newsItem['id']) }}" class="news-link">
                                            {{ app()->getLocale() === 'ar' ? 'اقرأ المزيد' : 'READ MORE' }}
                                            <i class="fas fa-arrow-{{ app()->getLocale() === 'ar' ? 'left' : 'right' }}"></i>
                                        </a>
                                    </div>
                                </article>
                            @endforeach
                        @else
                            <div class="col-12 text-center">
                                <p class="no-news">{{ app()->getLocale() === 'ar' ? 'لا توجد أخبار متاحة' : 'No news available' }}</p>
                            </div>
                        @endif
                    </div>

                    @if($pagination['last_page'] > 1)
                        <div class="pagination-container">
                            <nav aria-label="Page navigation">
                                <ul class="pagination">
                                    <!-- First Page -->
                                    <li class="page-items {{ $pagination['current_page'] == 1 ? 'disabled' : '' }}">
                                        <a class="page-links page-nav-arrow" href="{{ route('news.index', ['page' => 1]) }}" title="First Page">
                                            <i class="fas fa-angle-double-left"></i>
                                        </a>
                                    </li>

                                    <!-- Previous Page -->
                                    @if($pagination['current_page'] > 1)
                                        <li class="page-items">
                                            <a class="page-links page-nav-arrow" href="{{ route('news.index', ['page' => $pagination['current_page'] - 1]) }}">
                                                <i class="fas fa-angle-left"></i>
                                            </a>
                                        </li>
                                    @endif

                                    <!-- Page Numbers -->
                                    @php
                                        $start = max($pagination['current_page'] - 2, 1);
                                        $end = min($start + 4, $pagination['last_page']);
                                        $start = max(min($start, $end - 4), 1);
                                    @endphp

                                    @for($i = $start; $i <= $end; $i++)
                                        <li class="page-items {{ $pagination['current_page'] == $i ? 'active' : '' }}">
                                            <a class="page-links" href="{{ route('news.index', ['page' => $i]) }}">{{ $i }}</a>
                                        </li>
                                    @endfor

                                    <!-- Next Page -->
                                    @if($pagination['current_page'] < $pagination['last_page'])
                                        <li class="page-items">
                                            <a class="page-links page-nav-arrow" href="{{ route('news.index', ['page' => $pagination['current_page'] + 1]) }}">
                                                <i class="fas fa-angle-right"></i>
                                            </a>
                                        </li>
                                    @endif

                                    <!-- Last Page -->
                                    <li class="page-items {{ $pagination['current_page'] == $pagination['last_page'] ? 'disabled' : '' }}">
                                        <a class="page-links page-nav-arrow" href="{{ route('news.index', ['page' => $pagination['last_page']]) }}" title="Last Page">
                                            <i class="fas fa-angle-double-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="pagination-info">
                                {{ app()->getLocale() === 'ar' ? 'عرض ' : 'Showing ' }}
                                <strong>{{ ($pagination['current_page'] - 1) * 25 + 1 }}</strong>
                                {{ app()->getLocale() === 'ar' ? ' إلى ' : ' to ' }}
                                <strong>{{ min($pagination['current_page'] * 25, $pagination['total']) }}</strong>
                                {{ app()->getLocale() === 'ar' ? ' من ' : ' of ' }}
                                <strong>{{ $pagination['total'] }}</strong>
                                {{ app()->getLocale() === 'ar' ? ' سجل ' : ' records ' }}
                            </div>
                        </div>
                    @endif
                </div>


            </div>
        </div>
    </div>

    @include('partials.footer')
@endsection

@push('scripts')
    <script src="store/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper_new", {
            autoplay: {
                delay: 7000
            }
        });
    </script>
    <script src=""></script>

    <script src="{{ asset('s/jquery-3.2.1.min.js.download') }}"></script>
    <script src="{{ asset('s/jquery.meanmenu.js.download') }}"></script>
    <script src="{{ asset('s/theme.js.download') }}"></script>
    <!-- <script src="/clc/request.js"></script> -->

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
@endpush