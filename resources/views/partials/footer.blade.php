
<style>
	.footer-middle { text-align: start; }
	[dir="rtl"] .footer-middle { text-align: right; }
	.footer-middle .company-info-desc p { margin: 0 0 10px; }
</style>

<div class="footer-middle">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="widget-widgets-company-info white">
						<div class="techno-logo d-flex justify-content-center">
							<a class="logo_img" href="{{ url('/') }}" title="techno">
								<img src="{{ asset('store/logo-footer.svg') }}" alt="" style="width: 200px;">
							</a>
						</div>
						<div class="company-info-desc">
							<p>
								{{ session('locale') === 'en' ? 'Higher education, scientific research, technological development, continuing education, e-learning, and university education' : 'والتعليم العالي والبحث العلمي والتطوير التكنولوجي والتعليم المستمر والتعليم الالكتروني والتعليم الجامعي' }}
							</p>
						</div>
						<div class="company_icon text-center">
							<a href="#"><i>
									<img class="s-20 mb-1" src="{{ asset('store/facebook.svg') }}" alt="">
								</i></a>
							<a href="#"><i>
									<img class="s-20 mb-1" src="{{ asset('store/insta.svg') }}" alt="">
								</i></a>
							<a href="#"><i>
									<img class="s-20 mb-1" src="{{ asset('store/twitter.svg') }}" alt="">
								</i></a>
							<a href="#"><i>
									<img class="s-20 mb-1" src="{{ asset('store/youtube.svg') }}" alt="">
								</i></a>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-6 col-6">
                <div class="widget widget-nav-menu">
                    <h4 class="widget-title pt-4 pt-sm-0"><span>{{ session('locale') === 'en' ? 'Site Titles' : 'عناوين' }}</span></h4>
                    <div class="menu-quick-link-content">
                        <ul class="menu">
                            <li><a href="#">{{ session('locale') === 'en' ? 'Home' : 'الرئيسية' }}</a></li>
                            <li><a href="#">{{ session('locale') === 'en' ? 'University News' : 'اخبار الجامعة' }}</a></li>
                            <li><a href="#">{{ session('locale') === 'en' ? 'Login' : 'تسجيل الدخول' }}</a></li>
                            <li><a href="#">{{ session('locale') === 'en' ? 'Continuous Education' : 'التعليم المستمر' }}</a></li>
                            <li><a href="#">{{ session('locale') === 'en' ? 'Photo Gallery' : 'معرض الصور' }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
				<div class="col-lg-3 col-md-6 col-6">
                <div class="widget-footer-title">
                    <h4 class="widget-title pt-4 pt-sm-0"><span>{{ session('locale') === 'en' ? 'Quick' : 'روابط' }}</span> {{ session('locale') == 'en' ? 'Links' : 'سريعة' }}</h4>
                </div>
                <div class="footer-recent-post">
                    <ul class="menu">
                        <li><a href="#">{{ session('locale') === 'en' ? 'E-Learning' : 'التعليم الالكتروني' }}</a></li>
                        <li><a href="#">{{ session('locale') === 'en' ? 'University Education' : 'التعليم الجامعي' }}</a></li>
                        <li><a href="#">{{ session('locale') === 'en' ? 'Site News' : 'اخبار الموقع' }}</a></li>
                        <li><a href="#">{{ session('locale') === 'en' ? 'Student Services' : 'خدمات الطالب' }}</a></li>
                        <li><a href="#">{{ session('locale') === 'en' ? 'E-Learning' : 'التعليم الالكتروني' }}</a></li>
                    </ul>
                </div>
            </div>
				<div class="col-lg-3 col-md-6 col-8">
					<div id="footer-widget-address" class="d-flex flex-column">
					<h4 class="widget-title"><span>{{ session('locale') === 'en' ? 'Contact' : 'اتصل' }}</span> {{ session('locale') == 'en' ? 'Us' : 'بنا' }}</h4>

						<div class="footer-inner">
							<div class="footer-socail-icon">
								<i>
									<img src="../store/phone.svg" class="s-20" alt="">
								</i>
							</div>
							<div class="footer-socail-info">
								<p>
									<span>0772647382</span>
								</p>
							</div>
						</div>
						<div class="footer-inner">
							<div class="footer-socail-icon">
								<i>
									<img src="../store/email.svg" class="s-20" alt="">
								</i>
							</div>
							<div class="footer-socail-info">
								<p>uowa@gmail.com</p>
							</div>
						</div>
						<div class="footer-inner">
							<div class="footer-socail-icon">
								<i>
									<img src="../store/location.svg" class="s-20" alt="">
								</i>
							</div>
							<div class="footer-socail-info2">
							<p class="fp60" style="font-size:15px">{{ session('locale') === 'en' ? 'Karbala, Baghdad Road - Column 11' : 'كربلاء طريق بغداد - عمود 11' }}

							</p>

							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row footer-bottom">

				<div class="col-lg-2 col-md-2 d-lg-block d-md-block d-none">
					<div class="footer-bottom-menu">
						<p class="fp80 m-0">
						<a class="text-white" href="#">{{ session('locale') === 'en' ? 'Home' : 'الرئيسية' }}</a>
                        <span class="separator"> - </span>
                        <a class="text-white" href="#">{{ session('locale') === 'en' ? 'News' : 'الاخبار' }}</a>
						</p>
					</div>
				</div>
				<div class="col-lg-10 col-md-10 col-12">
					<div class="footer-bottom-content">
						<div class="footer-bottom-content-copy">
							<p class="fp80 m-0">
							{{ session('locale') === 'en' ? 'Privacy Policy' : 'سياسة الخصوصية' }} / @ <span> {{ session('locale') === 'en' ? 'warith website' : 'موقع الوارث' }} </span> - {{ session('locale') === 'en' ? 'cmsmasters' : 'cmsmasters' }} © 2024 / {{ session('locale') == 'en' ? 'All Rights Reserved' : 'جميع الحقوق محفوظة' }}
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

    <!-- Footer Area End -->

    
    <!-- All JS is here
     