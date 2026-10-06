<div class="swiper mySwiper_new">
	<div class="swiper-wrapper">
		<div class="swiper-slide slider-area align-items-center d-flex">
			<div class="container">
				<div class="row d-flex align-items-center slider position-relative">
					<div class="col-12">
						<div class="slider-content text-right mb-4">
							<h4>{{ session('locale') === 'en' ? 'Scientific Affairs Website' : 'موقع الشؤون العلمية' }}</h4>
							<p>
								{{ session('locale') === 'en'
									? 'The Scientific Affairs website is the unified gateway for everything related to scientific research, postgraduate studies, and promotions'
									: 'موقع الشؤون العلمية هو البوابة الموحدة لكل ما يخص البحث العلمي والدراسات العليا والترقيات' }}<br>
								{{ session('locale') === 'en'
									? 'publishing, and conferences, accompanying researchers from idea to publication and ranking.'
									: 'والنشر والمؤتمرات، ويرافق الباحث من الفكرة حتى النشر والتصنيف' }}
							</p>
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
	</div>
</div>
