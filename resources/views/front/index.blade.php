@extends('layouts.main')




@section('content')

@include('partials.slider')

<div class="service-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 padding-left">
				<div class="dreamit-section-title text-right">
					<h5>{{ session('locale') === 'en' ? 'Scientific Research' : 'البحث العلمي' }}</h5>
					<h2 class="py-3">{{ session('locale') === 'en' ? 'Scientific Research Sections' : 'أقسام البحث العلمي' }}</h2>
				</div>
			</div>

			<!-- Research Units -->
			<div class="col-lg-3 col-md-6 col-sm-12 padding-left">
				<div class="techno-sinlge-service-box">
					<div class="techno-service-box-inner">
						<a href="#" style="color: black;">
						<div class="techno-service-content">
							<div class="techno-service-icon">
								<i class="service-icon">
									<img src="{{ asset('store/research.svg') }}" alt="">
								</i>
							</div>
							<div class="techno-service-title">
								<h3 class="fp100">{{ session('locale') === 'en' ? 'Research Units' : 'الوحدات البحثية' }}</h3>
								<p class="fp70">
									{{ session('locale') === 'en' ? 'Explore the university research centers and units.' : 'تعرف على المراكز والوحدات البحثية في الجامعة.' }}
								</p>
							</div>
						</div>
						</a>
					</div>
				</div>
			</div>

			<!-- Statistics and Rankings -->
			<div class="col-lg-3 col-md-6 col-sm-12 padding-left">
				<div class="techno-sinlge-service-box-1">
					<div class="techno-service-box-inner">
						<a href="#" style="color: black;">
						<div class="techno-service-content">
							<div class="techno-service-icon">
								<i class="service-icon">
									<img src="{{ asset('store/calendar.svg') }}" alt="">
								</i>
							</div>
							<div class="techno-service-title">
								<h3 class="fp100">
									{{ session('locale') === 'en' ? 'Statistics & Rankings' : 'الإحصاءات والتصنيفات' }}
								</h3>
								<p class="fp70">
									{{ session('locale') === 'en' ? 'View research statistics and university rankings.' : 'اطلع على إحصاءات البحث العلمي وتصنيفات الجامعة.' }}
								</p>
							</div>
						</div>
						</a>
					</div>
				</div>
			</div>

			<!-- Scientific Services and Platforms -->
			<div class="col-lg-3 col-md-6 col-sm-12 padding-left">
				<div class="techno-sinlge-service-box">
					<div class="techno-service-box-inner">
						<a href="#" style="color: black;">
						<div class="techno-service-content">
							<div class="techno-service-icon">
								<i class="service-icon">
									<img src="{{ asset('store/e-learning.svg') }}" alt="">
								</i>
							</div>
							<div class="techno-service-title">
								<h3 class="fp100">{{ session('locale') === 'en' ? 'Scientific Services & Platforms' : 'الخدمات والمنصات العلمية' }}</h3>
								<p class="fp70">
									{{ session('locale') === 'en' ? 'Access scientific services and research platforms.' : 'الوصول إلى الخدمات العلمية والمنصات البحثية.' }}
								</p>
							</div>
						</div>
						</a>
					</div>
				</div>
			</div>

			<!-- Instructions and Guides -->
			<div class="col-lg-3 col-md-6 col-sm-12 padding-left">
				<div class="techno-sinlge-service-box-1">
					<div class="techno-service-box-inner">
						<a href="#" style="color: black;">
						<div class="techno-service-content">
							<div class="techno-service-icon">
								<i class="service-icon">
									<img src="{{ asset('store/plan.svg') }}" alt="">
								</i>
							</div>
							<div class="techno-service-title">
								<h3 class="fp100">
									{{ session('locale') === 'en' ? 'Instructions & Guides' : 'التعليمات والأدلة' }}
								</h3>
								<p class="fp70">
									{{ session('locale') === 'en' ? 'Find research instructions, requirements, and guides.' : 'اطلع على تعليمات البحث العلمي ومتطلباته وأدلته.' }}
								</p>
							</div>
						</div>
						</a>
					</div>
				</div>
			</div>

			<!-- Plagiarism Check -->
			<div class="col-lg-3 col-md-6 col-sm-12 padding-left">
				<div class="techno-sinlge-service-box active">
					<div class="techno-service-box-inner">
						<a href="{{ route('plagiarism.index') }}" style="color: black;">
						<div class="techno-service-content">
							<div class="techno-service-icon">
								<i class="service-icon">
									<img src="{{ asset('store/research.svg') }}" alt="">
								</i>
							</div>
							<div class="techno-service-title">
								<h3 class="fp100">
									{{ session('locale') === 'en' ? 'Plagiarism Check' : 'الاستلال' }}
								</h3>
								<p class="fp70">
									{{ session('locale') === 'en' ? 'Research and academic papers plagiarism check service through Turnitin.' : 'خدمة فحص استلال البحوث والأوراق العلمية والرسائل والأطاريح من خلال برنامج Turnitin.' }}
								</p>
							</div>
						</div>
						</a>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

<div class="blog_area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-sm-12">
				<div class="dreamit-section-title text-center style-two position-relative">
					<h5><?php echo session('locale') === 'en' ? 'Latest News' :'اخر الاخبار' ; ?></h5>
					<h1 class="py-3">
						<?php echo session('locale') === 'en' ? 'News & Activities' : 'الاخبار والنشاطات'; ?>
					</h1>
				</div>
			</div>
		</div>
		<!-- <div class="row news-container"> -->
		<!-- سيتم تحميل الأخبار هنا -->
		<!-- <div class="col-12 text-center news-loading">جاري تحميل الأخبار...</div> -->
		<!-- </div> -->
		<?php
if (!empty($news)) {
	$newsData = $news;
} else {
	$newsData = [];
}
			?>
		<div class="row news-container ">
			<?php if (!empty($newsData['data'])): ?>
			<?php foreach (array_slice($newsData['data'], 0, 3) as $newsItem): ?>
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="single_blog">
					<div class="single_blog_thumb">
						<a href="detail.php?id=<?= urlencode($newsItem['id']) ?>">
							<img src="<?= !empty($newsItem['photo']) ? "https://uowa.edu.iq/store/filestorage/file_" . $newsItem['photo'] : 'store/default-news.jpg' ?>"
								alt="<?= htmlspecialchars($newsItem['arttitle']) ?>">
						</a>
					</div>
					<div class="single_blog_content">
						<div class="post-categories">
							<i class="far fa-calendar-alt"></i>
							<?= date('F j, Y', strtotime($newsItem['created'])) ?>
						</div>
						<div class="blog_page_title">
							<h4>
								<a href="detail.php?id=<?= urlencode($newsItem['id']) ?>">
									<?= htmlspecialchars(mb_substr(strip_tags($newsItem['arttitle']), 0, 50, 'UTF-8')) . '...' ?>
								</a>
							</h4>

						</div>
						<div class="blog_button">
							<a href="{{ route('news.show', $newsItem['id']) }}" class="read-more"
								onclick='showNewsDetails(<?= json_encode($newsItem, JSON_HEX_APOS | JSON_HEX_QUOT | JSON_UNESCAPED_UNICODE) ?>)'>
								<i class="fas fa-arrow-left"></i> <?php echo session('locale') === 'en' ? 'Read More' : 'اقرأ المزيد'; ?>
							</a>
						</div>

					</div>
				</div>
			</div>
			<?php endforeach; ?>
			@if(count($news['data']) > 3)
				<div class="col-12 text-center mt-4">
					<a href="{{ route('news.index') }}" class="btn btn-primary view-all-news">
						<?php echo session('locale') === 'en' ? 'View All News' : 'عرض جميع الأخبار'; ?>
						<i class="fas fa-arrow-left mr-2"></i>
					</a>
				</div>
			@endif
			<?php else: ?>
			<div class="col-12 text-center"> <?php echo session('locale') === 'en' ? 'No news available' : 'لا توجد أخبار متاحة'; ?></div>
			<?php endif; ?>
		</div>

	</div>
</div>

<!-- <div class="container-fluid p-0">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-12 p-0" style="z-index: 1;">
			<div class="w-100 size-img-dean" style="background-image:url(./store/dean2.jpeg);
				 height: 99%;">

			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 p-0">
			<div class="row bg-dean" style="height: 99%;">
				<div class="text-center position-relative comment-dean">
					<div class="d-flex align-items-center">
						<div class="d-flex justify-content-center align-items-center main-text-dean">
							<div>
								<img src="./store/quote-right.svg" alt="">
							</div>
						</div>
						<div class="d-flex align-items-center bg-text-dean">
							<span class="fp60 px-2">عميد كلية الطب</span>
							<span> - </span>
							<span class="fp90 px-2"> علي عبد سعدون عبيد </span>
						</div>
					</div>
					<p>
						قال راعي مسيرة الإنسانية امامنا الحسين عليه السلام "اعلموا ان حوائج الناس اليكم من نعم الله
						عليكم فلا تملوا النعم فتتحول الى غيركم " اقصر طريق الى الجنة وابعدها ايضا عنها هي الخدمة
						الطبية. ...
					</p>
				</div>
			</div>
		</div>
	</div>
</div> -->
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