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
                        <h1 class="py-3">{{ session('locale') === 'ar' ? 'جميع الأخبار' : 'All News' }}</h1>
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
            background-color: rgb(6, 24, 42)
        }

        ul.pagination li a {
            color: #2c3e50;
            display: flex;
            min-width: 32px;
            border-radius: 50px !important;
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
            /* background: #f8f9fa; */
            background: var(--main-color);
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

        /* Navigation arrows styling */
        .page-nav-arrow {
            font-size: 1.2rem;
            padding: 0;
            width: 40px;
            height: 40px;
        }

        .page-nav-arrow i {
            margin: 0;
            line-height: 1;
        }

        .page-nav-arrow:hover {
            background: #3498db;
            color: white;
            border-color: #3498db;
        }

        .header-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .archive-btn {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 10px 20px;
            background: linear-gradient(135deg, #34495e 0%, #95a5a6 100%);
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            font-weight: 500;
        }

        .archive-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(52, 73, 94, 0.3);
            color: white;
        }

        .archive-btn i {
            font-size: 1.2em;
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
                                            {{ session('locale') === 'ar' ? 'اقرأ المزيد' : 'READ MORE' }}
                                            <i class="fas fa-arrow-{{ session('locale') === 'ar' ? 'left' : 'right' }}"></i>
                                        </a>
                                    </div>
                                </article>
                            @endforeach
                        @else
                            <div class="col-12 text-center">
                                {{ session('locale') === 'ar' ? 'لا توجد أخبار متاحة' : 'No news available' }}
                            </div>
                        @endif
                    </div>

                    @if($pagination['last_page'] > 1)
                        <div class="pagination-container">
                            <nav aria-label="Page navigation" class="mt-4">
                                <ul class="pagination">
                                    {{-- First Page Link --}}
                                    <li class="page-items {{ $pagination['current_page'] == 1 ? 'disabled' : '' }}">
                                        <a class="page-links page-nav-arrow" href="{{ route('news.index', ['page' => 1]) }}" title="First Page">
                                            <i class="fas fa-angle-double-left"></i>
                                        </a>
                                    </li>

                                    {{-- Previous Page Link --}}
                                    @if($pagination['current_page'] > 1)
                                        <li class="page-items">
                                            <a class="page-links page-nav-arrow" href="{{ route('news.index', ['page' => $pagination['current_page'] - 1]) }}" title="Previous">
                                                <i class="fas fa-angle-left"></i>
                                            </a>
                                        </li>
                                    @endif

                                    {{-- Pagination Elements --}}
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

                                    {{-- Next Page Link --}}
                                    @if($pagination['current_page'] < $pagination['last_page'])
                                        <li class="page-items">
                                            <a class="page-links page-nav-arrow" href="{{ route('news.index', ['page' => $pagination['current_page'] + 1]) }}" title="Next">
                                                <i class="fas fa-angle-right"></i>
                                            </a>
                                        </li>
                                    @endif

                                    {{-- Last Page Link --}}
                                    <li class="page-items {{ $pagination['current_page'] == $pagination['last_page'] ? 'disabled' : '' }}">
                                        <a class="page-links page-nav-arrow" href="{{ route('news.index', ['page' => $pagination['last_page']]) }}" title="Last Page">
                                            <i class="fas fa-angle-double-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="pagination-info">
                                {{ session('locale') === 'ar' ? 'عرض ' : 'Showing ' }}
                                <strong>{{ ($pagination['current_page'] - 1) * $pagination['per_page'] + 1 }}</strong>
                                {{ session('locale') === 'ar' ? ' إلى ' : ' to ' }}
                                <strong>{{ min($pagination['current_page'] * $pagination['per_page'], $pagination['total']) }}</strong>
                                {{ session('locale') === 'ar' ? ' من ' : ' of ' }}
                                <strong>{{ $pagination['total'] }}</strong>
                                {{ session('locale') === 'ar' ? ' سجل ' : ' records ' }}
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