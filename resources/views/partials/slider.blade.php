<div class="swiper mySwiper_new">
		<div class="swiper-wrapper">
			<?php
$newsDataslider = !empty($slider) ? $slider : [];
        ?>
			<?php if (!empty($newsDataslider)): ?>
			<?php foreach (array_slice($newsDataslider, 0, 10) as $newsItem): ?>
			<div class="swiper-slide slider-area align-items-center d-flex">
				<div class="container">
					<div class="row d-flex align-items-center slider position-relative">
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="slider-content text-right mb-4">
								<h4>{{ session('locale') === 'en' ? 'Continuing Education Center' : 'مركز التعليم المستمر' }}
								</h4>
								<h1 class="fp160"><?= htmlspecialchars($newsItem['title']) ?></h1>
								<p>
									<?= strip_tags($newsItem['content'], '<b><i><p>') ?>
								</p>
								<div class="slider-button">
									<a href="{{ route('news.index') }}"> قسم الأخبار <i>
											<svg width="800px" height="800px" class="mx-1 s-20 slider-link-hover"
												viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
												<g id="SVGRepo_iconCarrier">
													<path d="M6 12H18M18 12L13 7M18 12L13 17" stroke=""
														stroke-linecap="round" stroke-linejoin="round" />
												</g>
											</svg>
										</i></a>
									<a class="slider-button3" href="{{ route('news.show', $newsItem['id']) }}"> 
									{{ session('locale') === 'ar' ? ' عرض الخبر' : 'view New' }} <i>
											<svg width="800px" style="transform: rotate(180deg);" height="800px"
												class="mx-1 s-20" viewBox="0 0 24 24" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<g id="SVGRepo_iconCarrier">
													<path d="M6 12H18M18 12L13 7M18 12L13 17" stroke="#000000"
														stroke-linecap="round" stroke-linejoin="round" />
												</g>
											</svg>
										</i></a>
								</div>
							</div>
						</div>
						<div class="col-lg-5 col-md-6 col-sm-12">
							<div class="dreamit-slider-thumb-1">
								<img class="w-100"
									src="<?= !empty($newsItem['photo']) ? "https://uowa.edu.iq/store/filestorage/file_" . htmlspecialchars($newsItem['photo']) : 'store/default-news.jpg' ?>"
									alt="خبر">
							</div>
						</div>
						<div class="slider-socail-icon">
							<a href="/#"><i><img class="s-20" src="./store/facebook.svg" alt=""></i></a>
							<a href="/#"><i><img class="s-20" src="./store/insta.svg" alt=""></i></a>
							<a href="/#"><i><img class="s-20" src="./store/twitter.svg" alt=""></i></a>
							<a href="/#"><i><img class="s-20" src="./store/youtube.svg" alt=""></i></a>
							<span class="follow-us">
								{{ session('locale') === 'en' ? 'Follow us on:' : 'تابعنا على :' }}
							</span>
						</div>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
			<?php else: ?>
			<!-- Default Slide if No Data Found -->
			<div class="swiper-slide slider-area align-items-center d-flex">
				<div class="container">
					<div class="row d-flex align-items-center slider position-relative">
						<div class="col-lg-7 col-md-6 col-sm-12">
							<div class="slider-content text-right mb-4">
								<h4>{{ session('locale') === 'en' ? 'Continuing Education Center' : 'مركز التعليم المستمر' }}
								</h4>
								<h1 class="fp160">
									{{ session('locale') === 'en' ? 'No News Available' : 'لا توجد أخبار متاحة' }}
								</h1>
								<p>{{ session('locale') === 'en' ? 'Please check back later for the latest updates.' : 'يرجى التحقق لاحقًا للحصول على آخر التحديثات.' }}
								</p>
								<div class="slider-button">
									<a href="/#">
										{{ session('locale') === 'en' ? 'Visit News Section' : 'زيارة قسم الأخبار' }}
										<i>
											<svg width="800px" height="800px" class="mx-1 s-20 slider-link-hover"
												viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
												<g id="SVGRepo_iconCarrier">
													<path d="M6 12H18M18 12L13 7M18 12L13 17" stroke=""
														stroke-linecap="round" stroke-linejoin="round" />
												</g>
											</svg>
										</i></a>
								</div>
							</div>
						</div>
						<div class="col-lg-5 col-md-6 col-sm-12">
							<div class="dreamit-slider-thumb-1">
								<img class="w-100" src="store/default-news.jpg" alt="Default News">
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php endif; ?>
		</div>
	</div>