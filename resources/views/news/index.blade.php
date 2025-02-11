<?php
use Illuminate\Support\Str;
?>

@extends('layouts.main')

@section('content')

@include('partials.slider')

<div class="blog_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="dreamit-section-title text-center style-two position-relative">
                    <h1 class="py-3">{{ app()->getLocale() === 'ar' ? 'جميع الأخبار' : 'All News' }}</h1>
                </div>
            </div>
        </div>
        
        <div class="row news-container">
            @if(!empty($news['data']))
                @foreach($news['data'] as $newsItem)
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="single_blog">
                            <div class="single_blog_thumb">
                                <a href="{{ route('news.show', $newsItem['id']) }}">
                                    <img src="{{ !empty($newsItem['photo']) ? 'https://uowa.edu.iq/store/filestorage/file_' . $newsItem['photo'] : 'store/default-news.jpg' }}"
                                         alt="{{ $newsItem['arttitle'] }}">
                                </a>
                            </div>
                            <div class="single_blog_content">
                                <div class="post-categories">
                                    <i class="far fa-calendar-alt"></i>
                                    {{ date('F j, Y', strtotime($newsItem['created'])) }}
                                </div>
                                <div class="blog_page_title">
                                    <h4>
                                        <a href="{{ route('news.show', $newsItem['id']) }}">
                                            {{ Str::limit(strip_tags($newsItem['arttitle']), 50) }}
                                        </a>
                                    </h4>
                                </div>
                                <div class="blog_button">
                                    <a href="{{ route('news.show', $newsItem['id']) }}" class="read-more">
                                        <i class="fas fa-arrow-left"></i> اقرأ المزيد
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-12 text-center">لا توجد أخبار متاحة</div>
            @endif
        </div>

        @if($pagination['last_page'] > 1)
            <div class="row">
                <div class="col-12">
                    <nav aria-label="Page navigation" class="mt-4">
                        <ul class="pagination justify-content-center">
                            {{-- Previous Page Link --}}
                            @if($pagination['current_page'] > 1)
                                <li class="page-item">
                                    <a class="page-link" href="{{ route('news.index', ['page' => $pagination['current_page'] - 1]) }}" aria-label="Previous">
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
                                    <a class="page-link" href="{{ route('news.index', ['page' => $pagination['current_page'] + 1]) }}" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>
        @endif
    </div>
</div>
@include('partials.footer')
@endsection

@push('scripts')
<!-- <script>
    var swiper = new Swiper(".mySwiper_new", {
        autoplay: { delay: 7000 }
    });
</script> -->

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
    

	<!-- <script src="s/jquery.meanmenu.js.download"></script>
	<script src="s/theme.js.download"></script>
	<script src="/clc/request.js"></script> -->
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


	<!-- <script>
		document.querySelectorAll('.lang-btn').forEach(btn => {
			btn.addEventListener('click', function () {
				const lang = this.dataset.lang;

				fetch('switch_language.php', {
					method: 'POST',
					body: JSON.stringify({ lang: lang }),
					headers: {
						'Content-Type': 'application/json'
					}
				})
					.then(response => response.json())
					.then(data => {
						if (data.success) {
							document.documentElement.lang = data.lang;
							document.documentElement.dir = data.dir;
							location.reload();
						}
					});
			});
		});
	</script> -->
    

@endpush

