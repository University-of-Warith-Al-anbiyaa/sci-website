<?php
use Illuminate\Support\Str;
?>
<style>
    .techno_nav_manu {
        background: #2c3e50 !important;
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
                    gap: 40px;
                    margin: 40px 0;
                }

                .news-card {
                    background: #fff;
                    border-radius: 20px;
                    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
                    transition: all 0.4s ease;
                    overflow: hidden;
                    position: relative;
                }

                .news-card:hover {
                    transform: translateY(-8px);
                    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
                }

                .news-thumb {
                    position: relative;
                    overflow: hidden;
                    height: 350px;
                }

                .news-thumb:before {
                    content: '';
                    position: absolute;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    height: 50%;
                    background: linear-gradient(to top, rgba(0, 0, 0, 0.6), transparent);
                    z-index: 1;
                }

                .news-thumb img {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    transition: transform 0.8s ease;
                }

                .news-card:hover .news-thumb img {
                    transform: scale(1.1) rotate(-2deg);
                }

                .news-content {
                    padding: 30px;
                    position: relative;
                    background: white;
                    margin-top: -50px;
                    margin-left: 20px;
                    margin-right: 20px;
                    border-radius: 15px;
                    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
                    z-index: 2;
                }

                .news-date {
                    color: #3498db;
                    font-size: 0.95rem;
                    margin-bottom: 15px;
                    display: flex;
                    align-items: center;
                    gap: 8px;
                    font-weight: 500;
                }

                .news-title {
                    font-size: 1.4rem;
                    font-weight: 700;
                    color: #2c3e50;
                    margin-bottom: 20px;
                    line-height: 1.6;
                    display: -webkit-box;
                    -webkit-line-clamp: 2;
                    -webkit-box-orient: vertical;
                    overflow: hidden;
                    transition: color 0.3s ease;
                }

                .news-title a:hover {
                    color: #3498db;
                }

                .news-excerpt {
                    color: #666;
                    margin-bottom: 25px;
                    line-height: 1.8;
                    font-size: 1.05rem;
                    display: -webkit-box;
                    -webkit-line-clamp: 3;
                    -webkit-box-orient: vertical;
                    overflow: hidden;
                }

                .news-link {
                    display: inline-flex;
                    align-items: center;
                    gap: 10px;
                    color: #3498db;
                    font-weight: 600;
                    font-size: 1.1rem;
                    transition: all 0.3s ease;
                    text-decoration: none;
                    padding: 10px 0;
                    position: relative;
                }

                .news-link:after {
                    content: '';
                    position: absolute;
                    bottom: 0;
                    left: 0;
                    width: 0;
                    height: 2px;
                    background: #3498db;
                    transition: width 0.3s ease;
                }

                .news-link:hover:after {
                    width: 100%;
                }

                .news-link:hover {
                    gap: 15px;
                    color: #2980b9;
                }

                .news-card {
                    animation: fadeInUp 0.6s ease backwards;
                }

                .news-card:nth-child(2) {
                    animation-delay: 0.2s;
                }

                @keyframes fadeInUp {
                    from {
                        opacity: 0;
                        transform: translateY(30px);
                    }

                    to {
                        opacity: 1;
                        transform: translateY(0);
                    }
                }

                @media (max-width: 992px) {
                    .news-grid {
                        grid-template-columns: 1fr;
                        gap: 30px;
                    }

                    .news-thumb {
                        height: 300px;
                    }

                    .news-content {
                        margin-top: -40px;
                        margin-left: 15px;
                        margin-right: 15px;
                        padding: 25px;
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
                                {{ app()->getLocale() === 'ar' ? 'لا توجد أخبار متاحة' : 'No news available' }}</div>
                        @endif
                    </div>

                    @if($pagination['last_page'] > 1)
                        <nav aria-label="Page navigation" class="mt-4">
                            <ul class="pagination justify-content-center">
                                {{-- Previous Page Link --}}
                                @if($pagination['current_page'] > 1)
                                    <li class="page-item">
                                        <a class="page-link"
                                            href="{{ route('news.index', ['page' => $pagination['current_page'] - 1]) }}"
                                            aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                @endif

                                {{-- Pagination Elements --}}
                                @for($i = 1; $i <= $pagination['last_page']; $i++)
                                    <li class="page-item {{ $pagination['current_page'] == $i ? 'active' : '' }}">
                                        <a class="page-link" href="{{ route('news.index', ['page' => $i]) }}">{{ $i }}</a>
                                    </li>
                                @endfor

                                {{-- Next Page Link --}}
                                @if($pagination['current_page'] < $pagination['last_page'])
                                    <li class="page-item">
                                        <a class="page-link"
                                            href="{{ route('news.index', ['page' => $pagination['current_page'] + 1]) }}"
                                            aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                @endif
                            </ul>
                        </nav>
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