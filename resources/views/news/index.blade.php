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

    .pagination-container {
        text-align: center;
        background-color: #ffffffff !important;
    }

    .pagination .page-item {
        margin: 0 5px;
    }

    ul.pagination li {
        display: inline-block;
        text-align: center;
        background-color: #e8e5e5ff !important;
        border-radius: 50% !important;
    }

    .pagination .page-link {
        /* color: #000; Black text for non-active links */
        border: 1px solid #f8f9fa !important;
        /* Off-white border */
        background-color: transparent;
        padding: 8px 12px;
        font-size: 14px;
        transition: all 0.3s ease;
    }

    .pagination .page-link:hover {
        background-color: #ffa300;
        /* Hover background color */
        color: #fff;
        /* White text on hover */
        border-color: #ffa300;
    }

    .pagination .page-item.active .page-link {
        background-color: #ffa300;
        /* Active background color */
        border-color: #ffa300;
        /* Active border color */
        color: #fff;
        /* White text for active links */
    }

    .pagination .page-link.rounded-circle {
        border-radius: 50% !important;
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0;
    }

    /* قاعدة للأجهزة التي عرضها أقل من 990px */
    @media screen and (max-width: 990px) {
        .category-news-header {
            top: 0px !important;
        }

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

    /* Breadcrumb icon alignment */
    .breadcrumb-icon { font-size: 16px; line-height: 1; vertical-align: middle; }
    .border-bottom .ms-2 { display: inline-flex; align-items: center; }

    
</style>
@extends('layouts.main')

@section('content')
    <link rel="stylesheet" href="/css/vendor.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/responsive.css">
    <!-- @include('partials.slider') -->

    <header class="category-news-header  d-flex justify-content-center align-items-end"
        style="background:linear-gradient(180deg, rgba(0, 11, 31, .3), rgba(0, 11, 31, .3)), url('{{ asset('store/slider.jpg') }}'); top: 90; position: relative; z-index: 1;">
        <!-- <div class="col-12 bg-c-5 op9">
                                  <h1 class="c text-c-dark fmedium ">أخبار الجامعة</h1>
                                </div> -->
    </header>
    <div class="blog-area pd-top-120 pd-bottom-120">
        <div class="container">
            <!-- <div class="row">
                                            <div class="col-lg-12 col-sm-12">
                                                <div class="dreamit-section-title text-center style-two position-relative">
                                                    <h1 class="py-3">{{ app()->getLocale() === 'ar' ? 'جميع الأخبار' : 'All News' }}</h1>
                                                </div>
                                            </div>
                                        </div> -->
            <div class="container mt-9 mb-9">
                <div class="d-md-flex justify-content-between">
                    <section class="col-md-8 my-5" style="margin-left: 3rem;">
                        <!--  -->
                        <div class="border-bottom px-2 mb-4">
                            <div class="d-flex align-items-center ">
                                <div class="ms-2"><a class="text-c-dark" href="/arabic"> {{ session('locale') === 'en' ? 'Home' : 'الرئيسية' }}</a></div>
                                <div class="ms-2">
                                    <i class="fas {{ session('locale') === 'en' ? 'fa-angle-right' : 'fa-angle-left' }} breadcrumb-icon"></i>
                                </div>
                                <div class="ms-2 text-c-yellow2">{{ session('locale') === 'en' ? 'University News' : 'أخبار الجامعة' }}</div>
                            </div>
                        </div>
                        <!--  -->
                        <!--######## Card ########### -->

                        <!-- Dynamic News Cards -->
                        @foreach ($news['data'] as $newsItem)
                            <div class="news-card border-bottom py-3">
                                <div class="row align-items-center">
                                    <div class="col-md-4">
                                        <img src="{{ !empty($newsItem['photo']) ? 'https://uowa.edu.iq/store/filestorage/file_' . $newsItem['photo'] : 'store/default-news.jpg' }}"
                                            class="img-fluid rounded" alt="{{ $newsItem['arttitle'] }}">
                                    </div>
                                    <div class="col-md-8">
                                        <a href="{{ route('news.show', $newsItem['id']) }}">
                                            <h5 class="titles mb-2" style="font-size: 16px;">{{ $newsItem['arttitle'] }}</h5>
                                        </a>
                                        <p class="content mb-2">{{ Str::limit(strip_tags($newsItem['content']), 150) }}</p>
                                        <small class="text-muted">{{ $newsItem['created'] }}</small>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!-- Pagination -->
                        @if($pagination['last_page'] > 1)
                            <div class="pagination-container mt-4">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-center">
                                        {{-- First Page Link --}}
                                        <li class="page-item {{ $pagination['current_page'] == 1 ? 'disabled' : '' }}">
                                            <a class="page-link rounded-circle" href="{{ route('news.index', ['page' => 1]) }}"
                                                title="{{ session('locale') === 'ar' ? 'الصفحة الأولى' : 'First Page' }}">
                                                <i class="fas fa-angle-double-left"></i>
                                            </a>
                                        </li>

                                        {{-- Previous Page Link --}}
                                        @if($pagination['current_page'] > 1)
                                            <li class="page-item">
                                                <a class="page-link rounded-circle"
                                                    href="{{ route('news.index', ['page' => $pagination['current_page'] - 1]) }}"
                                                    title="{{ session('locale') === 'ar' ? 'السابق' : 'Previous' }}">
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
                                            <li class="page-item {{ $pagination['current_page'] == $i ? 'active' : '' }}">
                                                <a class="page-link rounded-circle"
                                                    href="{{ route('news.index', ['page' => $i]) }}">{{ $i }}</a>
                                            </li>
                                        @endfor

                                        {{-- Next Page Link --}}
                                        @if($pagination['current_page'] < $pagination['last_page'])
                                            <li class="page-item">
                                                <a class="page-link rounded-circle"
                                                    href="{{ route('news.index', ['page' => $pagination['current_page'] + 1]) }}"
                                                    title="{{ session('locale') === 'ar' ? 'التالي' : 'Next' }}">
                                                    <i class="fas fa-angle-right"></i>
                                                </a>
                                            </li>
                                        @endif

                                        {{-- Last Page Link --}}
                                        <li
                                            class="page-item {{ $pagination['current_page'] == $pagination['last_page'] ? 'disabled' : '' }}">
                                            <a class="page-link rounded-circle"
                                                href="{{ route('news.index', ['page' => $pagination['last_page']]) }}"
                                                title="{{ session('locale') === 'ar' ? 'الصفحة الأخيرة' : 'Last Page' }}">
                                                <i class="fas fa-angle-double-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        @endif
                    </section>

                    <br>
                    <br>

                    <!--  -->
                    <aside class="col-md-4" style="margin-top: 3rem;">
                        <!--  -->

                        <!--  -->

                        <!-- <div class="col-12">
                                <div class="aside-news">
                                    <a href="/arabic/news">
                                        <h5 class="fbold text-c-gindigoray aside-title">أخبار الكلية</h5>
                                    </a>
                                    @foreach ($news['collegenews'] as $collegenews)
                                        <div class="aside-news-card py-2">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <img src="{{ !empty($collegenews['photo']) ? 'https://uowa.edu.iq/store/filestorage/file_' . $collegenews['photo'] : 'store/default-news.jpg' }}"
                                                        class="image object-fit">
                                                </div>
                                                <div class="col-md-7">
                                                    <a href="{{ route('news.show', $collegenews['id']) }}">
                                                        <h5 class="titles" style="font-size: 16px;">{{ $collegenews['title'] }}</h5>
                                                    </a>
                                                    <small class="text-date">{{ $collegenews['created'] }}</small>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div> -->
                        <!--  -->


                        <!-- <br> -->
                        <!--  -->
                        <div class="col-12">
                            <div class="aside-news">
                                <a href="/arabic/ministrynews">
                                    <h5 class="fbold text-c-gindigoray aside-title"> {{ session('locale') === 'en' ? 'Ministry News' : 'اخبار الوزارة' }}</h5>
                                </a>
                                @foreach ($news['ministrynews'] as $ministrynews)
                                    <div class="aside-news-card py-2">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <img src="{{ !empty($ministrynews['photo']) ? 'https://uowa.edu.iq/store/filestorage/file_' . $ministrynews['photo'] : 'store/default-news.jpg' }}"
                                                    class="image object-fit">
                                            </div>
                                            <div class="col-md-7">
                                                <a href="{{ route('news.show', $ministrynews['id']) }}">
                                                    <h5 class="titles" style="font-size: 16px;">{{ $ministrynews['title'] }}
                                                    </h5>
                                                </a>
                                                <small class="text-date">{{ $ministrynews['date'] }}</small>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!--  -->
                        <br>
                        <!--  -->
                        <!-- <div class="col-12">
                                        <div class="aside-news">
                                            <a href="/arabic/gallery">
                                                <h5 class="fbold text-c-gindigoray aside-title"> المكتبة المرئية</h5>
                                            </a>
                                            <div class="row justify-content-start align-items-start">

                                                <div class="col-6 aside-news-lib">
                                                    <div class="aside-news-lib-image"
                                                        style="background: url(/store/filestorage/file_17526461990.jpg);"></div>
                                                </div>

                                                <div class="col-6 aside-news-lib">
                                                    <div class="aside-news-lib-image"
                                                        style="background: url(/store/filestorage/file_17526459720.jpg);"></div>
                                                </div>

                                                <div class="col-6 aside-news-lib">
                                                    <div class="aside-news-lib-image"
                                                        style="background: url(/store/filestorage/file_17514344562.jpg);"></div>
                                                </div>

                                                <div class="col-6 aside-news-lib">
                                                    <div class="aside-news-lib-image"
                                                        style="background: url(/store/filestorage/file_17508349500.jpg);"></div>
                                                </div>

                                            </div>

                                        </div>
                                    </div> -->
                        <!--  -->
                    </aside>
                    <!--  -->


                </div>

            </div>
        </div>
    </div>

@endsection

<script src="{{ asset('s/jquery-3.2.1.min.js.download') }}"></script>
	<script src="{{ asset('s/jquery.meanmenu.js.download') }}"></script>
	<script src="{{ asset('s/theme.js.download') }}"></script>
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