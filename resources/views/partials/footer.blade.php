<div class="footer-middle">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="widget-widgets-company-info white">
						<div class="techno-logo d-flex justify-content-center">
							<a class="logo_img" href="#/index.html" title="techno">
								<img src="../store/logo-footer.svg" alt="" style="width: 200px;">
							</a>
						</div>
						<div class="company-info-desc">
							<p>
								{{ session('locale') === 'ar' ? 'والتعليم العالي والبحث العلمي والتطوير التكنولوجي والتعليم المستمر والتعليم الالكتروني والتعليم الجامعي' : 'Higher education, scientific research, technological development, continuing education, e-learning, and university education' }}
							</p>
						</div>
						<div class="company_icon text-center">
							<a href="#"><i>
									<img class="s-20 mb-1" src="../store/facebook.svg" alt="">
								</i></a>
							<a href="#"><i>
									<img class="s-20 mb-1" src="../store/insta.svg" alt="">
								</i></a>
							<a href="#"><i>
									<img class="s-20 mb-1" src="../store/twitter.svg" alt="">
								</i></a>
							<a href="#"><i>
									<img class="s-20 mb-1" src="../store/youtube.svg" alt="">
								</i></a>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-6 col-6">
                <div class="widget widget-nav-menu">
                    <h4 class="widget-title pt-4 pt-sm-0"><span>{{ session('locale') === 'ar' ? 'عناوين' : 'Site Titles' }}</span></h4>
                    <div class="menu-quick-link-content">
                        <ul class="menu">
                            <li><a href="#">{{ session('locale') === 'ar' ? 'الرئيسية' : 'Home' }}</a></li>
                            <li><a href="#">{{ session('locale') === 'ar' ? 'اخبار الجامعة' : 'University News' }}</a></li>
                            <li><a href="#">{{ session('locale') === 'ar' ? 'تسجيل الدخول' : 'Login' }}</a></li>
                            <li><a href="#">{{ session('locale') === 'ar' ? 'التعليم المستمر' : 'Continuous Education' }}</a></li>
                            <li><a href="#">{{ session('locale') === 'ar' ? 'معرض الصور' : 'Photo Gallery' }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
				<div class="col-lg-3 col-md-6 col-6">
                <div class="widget-footer-title">
                    <h4 class="widget-title pt-4 pt-sm-0"><span>{{ session('locale') === 'ar' ? 'روابط' : 'Quick' }}</span> {{ session('locale') == 'ar' ? 'سريعة' : 'Links' }}</h4>
                </div>
                <div class="footer-recent-post">
                    <ul class="menu">
                        <li><a href="#">{{ session('locale') === 'ar' ? 'التعليم الالكتروني' : 'E-Learning' }}</a></li>
                        <li><a href="#">{{ session('locale') === 'ar' ? 'التعليم الجامعي' : 'University Education' }}</a></li>
                        <li><a href="#">{{ session('locale') === 'ar' ? 'اخبار الموقع' : 'Site News' }}</a></li>
                        <li><a href="#">{{ session('locale') === 'ar' ? 'خدمات الطالب' : 'Student Services' }}</a></li>
                        <li><a href="#">{{ session('locale') === 'ar' ? 'التعليم الالكتروني' : 'E-Learning' }}</a></li>
                    </ul>
                </div>
            </div>
				<div class="col-lg-3 col-md-6 col-8">
					<div id="footer-widget-address" class="d-flex flex-column">
					<h4 class="widget-title"><span>{{ session('locale') === 'ar' ? 'اتصل' : 'Contact' }}</span> {{ session('locale') == 'ar' ? 'بنا' : 'Us' }}</h4>

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
							<p class="fp60" style="font-size:15px">{{ session('locale') === 'ar' ? 'كربلاء طريق بغداد - عمود 11' : 'Karbala, Baghdad Road - Column 11' }}

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
						<a class="text-white" href="#">{{ session('locale') === 'ar' ? 'الرئيسية' : 'Home' }}</a>
                        <span class="separator"> - </span>
                        <a class="text-white" href="#">{{ session('locale') === 'ar' ? 'الاخبار' : 'News' }}</a>
						</p>
					</div>
				</div>
				<div class="col-lg-10 col-md-10 col-12">
					<div class="footer-bottom-content">
						<div class="footer-bottom-content-copy">
							<p class="fp80 m-0">
							{{ session('locale') === 'ar' ? 'سياسة الخصوصية' : 'Privacy Policy' }} / @ <span> al warith website </span> - cmsmasters © 2024 / {{ session('locale') == 'ar' ? 'جميع الحقوق محفوظة' : 'All Rights Reserved' }}
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

    <!-- Footer Area End -->

    
    <!-- All JS is here
     