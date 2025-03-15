@extends('layouts.main')




@section('content')

@include('partials.slider')

<div class="service-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 padding-left">
				<div class="dreamit-section-title text-right">
					<h5>{{ session('locale') === 'en' ? 'Student Services' : 'خدمات الطالب' }}</h5>
					<h2 class="py-3">{{ session('locale') === 'en' ? 'E-Services' : 'خدمات الكترونية' }}</h2>
					<h2>{{ session('locale') === 'en' ? 'In addition to' : 'اضافة الى' }}
						<span>{{ session('locale') === 'en' ? 'Courses for Students' : 'دورات للطلاب' }}</span>
					</h2>
				</div>
			</div>

			<!-- Annual Plan -->
			<div class="col-lg-3 col-md-6 col-sm-12 padding-left">
				<div class="techno-sinlge-service-box">
					<div class="techno-service-box-inner">
						<div class="techno-service-content">
							<div class="techno-service-icon">
								<i class="service-icon">
									<img src="./store/plan.svg" alt="">
								</i>
							</div>
							<div class="techno-service-title">
								<h3 class="fp100">{{ session('locale') === 'en' ? 'Annual Plan' : 'الخطة السنوية' }}
								</h3>
								<p class="fp70">
									{{ session('locale') === 'en' ?
	'All training courses planned within the annual plan for colleges and university presidency departments for the current academic year.'
	:
	'جميع الدورات التدريبية المقرر إنجازها ضمن الخطة السنوية للكليات وأقسام رئاسة الجامعة للعام الدراسي الحالي.' }}
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Training Programs -->
			<div class="col-lg-3 col-md-6 col-sm-12 padding-left">
				<div class="techno-sinlge-service-box-1">
					<div class="techno-service-box-inner">
						<div class="techno-service-content">
							<div class="techno-service-icon">
								<i class="service-icon">
									<img src="./store/training.svg" alt="">
								</i>
							</div>
							<div class="techno-service-title">
								<h3 class="fp100">
									{{ session('locale') === 'en' ? 'Training Programs' : 'البرامج التدريبية للمركز' }}
								</h3>
								<p class="fp70">
									{{ session('locale') === 'en' ?
	'A set of training and development programs that can be provided by the Continuing Education Center within a variety of specializations.'
	:
	'مجموعة من البرامج والدورات التدريبية والتطويرية والتي بالإمكان تقديمها من قبل مركز التعليم المستمر ضمن مجموعة من الاختصاصات المتنوعة.' }}
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Plagiarism Check -->
			<div class="col-lg-3 col-md-6 col-sm-12 padding-left">
				<div class="techno-sinlge-service-box active">
					<div class="techno-service-box-inner">
						<div class="techno-service-content">
							<div class="techno-service-icon">
								<i class="service-icon">
									<img src="./store/research.svg" alt="">
								</i>
							</div>
							<div class="techno-service-title">
								<h3 class="fp100">{{ session('locale') === 'en' ? 'Plagiarism Check' : 'الاستلال' }}
								</h3>
								<p class="fp70">
									{{ session('locale') === 'en' ?
	'Research and academic papers plagiarism check service through Turnitin.'
	:
	'خدمة فحص استلال البحوث والأوراق العلمية والرسائل والأطاريح من خلال برنامج Turnitin.' }}
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Electronic Schedule -->
			<div class="col-lg-3 col-md-6 col-sm-12 padding-left">
				<div class="techno-sinlge-service-box">
					<div class="techno-service-box-inner">
						<div class="techno-service-content">
							<div class="techno-service-icon">
								<i class="service-icon">
									<img src="./store/calendar.svg" alt="">
								</i>
							</div>
							<div class="techno-service-title">
								<h3 class="fp100">
									{{ session('locale') === 'en' ? 'Electronic Schedule' : 'الجدول الالكتروني' }}
								</h3>
								<p class="fp70">
									{{ session('locale') === 'en' ?
	'Includes weekly class schedules, monthly exams, and final exams for all university colleges.'
	:
	'يتضمن جدول الدروس الأسبوعية، الامتحانات الشهرية، الامتحانات النهائية لجميع كليات الجامعة.' }}
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- E-Learning Platform -->
			<div class="col-lg-3 col-md-6 col-sm-12 padding-left">
				<div class="techno-sinlge-service-box-1">
					<div class="techno-service-box-inner">
						<div class="techno-service-content">
							<div class="techno-service-icon">
								<i class="service-icon">
									<img src="./store/e-learning.svg" alt="">
								</i>
							</div>
							<div class="techno-service-title">
								<h3 class="fp100">
									{{ session('locale') === 'en' ? 'E-Learning Platform' : 'منصة التعليم الالكتروني' }}
								</h3>
								
								<p class="fp70">
									{{ session('locale') === 'en' ?
	'An online platform that supports and enhances the efficiency of e-learning at the university.'
	:
	'منصة إلكترونية تدعم وتسهم في تطوير وتسهيل كفاءة التعليم الإلكتروني في الجامعة.' }}
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Course Archive -->
			<div class="col-lg-3 col-md-6 col-sm-12 padding-left">
				<div class="techno-sinlge-service-box2">
					<div class="techno-service-box-inner">
						<div class="service-button">
							<a href="/#">
								{{ session('locale') === 'en' ? 'Course Archive' : 'ارشيف الدورات' }}
								<i>
									<svg style="transform: rotate(180deg);" width="800px" height="800px"
										class="mx-1 s-20" viewBox="0 0 24 24" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<g id="SVGRepo_iconCarrier">
											<path d="M6 12H18M18 12L13 7M18 12L13 17" stroke="#000000"
												stroke-linecap="round" stroke-linejoin="round"></path>
										</g>
									</svg>
								</i>
							</a>
						</div>
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
					<h5>{{ session('locale') === 'en' ? 'Latest News' : 'اخر الاخبار' }}</h5>
						
					<h1 class="py-3">
						{{ session('locale') === 'en' ? 'News & Activities' : 'الاخبار والنشاطات'  }}
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
							<a href="detail.php?id=<?= urlencode($newsItem['id']) ?>" class="read-more"
								onclick='showNewsDetails(<?= json_encode($newsItem, JSON_HEX_APOS | JSON_HEX_QUOT | JSON_UNESCAPED_UNICODE) ?>)'>
								<i class="fas fa-arrow-left"></i> {{ session('locale') === 'en' ? 'Read More' : 'اقرأ المزيد' }}
							</a>
						</div>

					</div>
				</div>
			</div>
			<?php endforeach; ?>
			@if(count($news['data']) > 3)
				<div class="col-12 text-center mt-4">
					<a href="{{ route('news.index') }}" class="view-all-news">
						{{ session('locale') === 'en' ? 'View All News' : 'عرض جميع الأخبار' }}
						<i class="fas fa-arrow-right mr-2"></i>
					</a>
				</div>
			@endif
			<?php else: ?>
			<div class="col-12 text-center">
				{{ session('locale') === 'en' ? 'No news available' : 'لا توجد أخبار متاحة' }}
			</div></div>
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