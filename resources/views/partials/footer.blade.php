
<style>
	.footer-middle { text-align: start; padding: 40px 0; }
	[dir="rtl"] .footer-middle { text-align: right; }
	.footer-middle .company-info-desc p { margin: 0 0 10px; }
	.footer-middle .techno-logo{ display:flex; justify-content:center; align-items:center; margin-bottom:12px; }
	.footer-middle .footer-logo{ width:200px; max-width:100%; height:auto; display:block; }
	.footer-middle .company_icon { display:flex; justify-content:center; gap:12px; margin-top:14px; }
	.footer-middle .footer-inner { display:flex; align-items:center; gap:10px; margin-bottom:10px; }
	.footer-middle .footer-socail-info p{ margin:0; }

	/* Contact block alignment */
	.footer-middle #footer-widget-address { text-align: left; }
	[dir="rtl"] .footer-middle #footer-widget-address { text-align: right; }
	.footer-middle #footer-widget-address .footer-inner { display:flex; align-items:center; gap:10px; margin-bottom:8px; }
	.footer-middle #footer-widget-address .footer-socail-icon { flex:0 0 auto; margin-inline-end:10px; }
	[dir="rtl"] .footer-middle #footer-widget-address .footer-socail-icon { margin-inline-start:10px; margin-inline-end:0; }
	.footer-middle #footer-widget-address .footer-socail-info,
	.footer-middle #footer-widget-address .footer-socail-info2 { flex:1; margin-top:0; }

	@media (max-width: 576px){
		.footer-middle { padding: 20px 0; }
		.footer-middle .techno-logo img{ width:150px; }
		.footer-middle .company-info-desc p{ font-size:14px; }
		.footer-bottom .footer-bottom-content-copy p{ font-size:13px; }
	}

	/* RTL adjustments for alignment on larger screens */
	[dir="rtl"] .footer-middle .company_icon { justify-content:center; }
	@media (min-width: 768px){
		[dir="ltr"] .footer-middle .company_icon { justify-content:flex-start; }
		[dir="rtl"] .footer-middle .company_icon { justify-content:flex-end; }
	}
	    [dir="rtl"] .footer-middle .company_icon {
        justify-content: right;
    }
	[dir="ltr"] .footer-middle .company_icon {
		justify-content: left;
	}

</style>

<div class="footer-middle col-12">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6 col-lg-4">
					<div class="widget-widgets-company-info white text-center text-sm-left">
						<div class="techno-logo d-flex justify-content-center">
								<a class="logo_img" href="{{ url('/') }}" title="techno">
									<img class="footer-logo" src="{{ asset('store/logo-footer.svg') }}" alt="logo">
								</a>
							</div>
						<div class="company-info-desc">
							<p>
								{{ session('locale') === 'en' ? 'Higher education, scientific research, technological development, continuing education, e-learning, and university education' : 'والتعليم العالي والبحث العلمي والتطوير التكنولوجي والتعليم المستمر والتعليم الالكتروني والتعليم الجامعي' }}
							</p>
						</div>
						<div class="company_icon">
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

				<div class="col-12 col-md-6 col-lg-3">
				<div class="widget widget-nav-menu">
                    <h4 class="widget-title pt-4 pt-sm-0"><span style="border-bottom : 1px solid #e29f5b">{{ session('locale') === 'en' ? 'Site Titles' : 'عناوين' }}</span>
				{{ session('locale') === 'en' ? 'list' : 'اساسية' }}</h4>
                    <div class="menu-quick-link-content">
                        <ul class="menu">
                            <li><a href="#">{{ session('locale') === 'en' ? 'About Scientific Affairs' : 'عن الشؤون العلمية' }}</a></li>
                            <li><a href="https://www.google.com">{{ session('locale') === 'en' ? 'Digital Repository' : 'المستودع الرقمي' }}</a></li>
							<li><a href="{{ route('news.index') }}">{{ session('locale') === 'en' ? 'Patents' : 'براءات الاختراع' }}</a></li>
                            <li><a href="#">{{ session('locale') === 'en' ? 'Warith Scientific Platform' : 'منصة وارث العلمية' }}</a></li>
                            <!-- <li><a href="#">{{ session('locale') === 'en' ? 'Continuous Education' : 'التعليم المستمر' }}</a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
				<div class="col-12 col-md-6 col-lg-2">
                <div class="widget-footer-title">
                    <h4 class="widget-title pt-4 pt-sm-0"><span style="border-bottom : 1px solid #e29f5b">{{ session('locale') === 'en' ? 'Quick' : 'روابط' }}</span> {{ session('locale') == 'en' ? 'Links' : 'سريعة' }}</h4>
                </div>
                <div class="footer-recent-post">
                    <ul class="menu">
                        <li><a href="#">{{ session('locale') === 'en' ? 'Research Units' : 'الوحدات البحثية' }}</a></li>
                        <li><a href="#">{{ session('locale') === 'en' ? 'Scientific Journals' : 'المجلات العلمية' }}</a></li>
                        <li><a href="#">{{ session('locale') === 'en' ? 'Conferences & Collaboration' : 'المؤتمرات والتعاون' }}</a></li>
                        <li><a href="#">{{ session('locale') === 'en' ? 'Scientific Promotions' : 'الترقيات العلمية' }}</a></li>
                    </ul>
                </div>
            </div>
				<div class="col-12 col-md-6 col-lg-3">
					<div id="footer-widget-address" class="d-flex flex-column">
					<h4 class="widget-title" ><span style="border-bottom : 1px solid #e29f5b">{{ session('locale') === 'en' ? 'Contact' : 'اتصل' }}</span> {{ session('locale') == 'en' ? 'Us' : 'بنا' }}</h4>

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
								<p>clc@uowa.edu.iq</p>
							</div>
						</div>
						<div class="footer-inner d-flex align-items-start">
							<div class="footer-socail-icon">
								<i>
									<img src="../store/location.svg" class="s-20" alt="">
								</i>
							</div>
							<div class="footer-socail-info2">
								<p class="fp60 mb-0" style="font-size:15px">
									{{ session('locale') === 'en' ? 'Iraq - Karbala Al-Muqaddasah / Baghdad - Karbala Road (Opposite Column 119)' : 'العراق - كربلاء المقدسة / طريق بغداد - كربلاء ( مقابل عمود 119)' }}
								</p>
							</div>
						</div>
						</div>
					</div>
			</div>
			<div class="row footer-bottom">

				<div class="col-lg-4 col-md-4 col-12 d-lg-block d-md-block d-none">
					<div class="footer-bottom-menu">
						<p class="fp80 m-0">
						<a class="text-white" href="https://uowa.edu.iq/arabic/privacypolicy">{{ session('locale') === 'en' ? 'Privacy Policy' : 'سياسة الخصوصية' }}</a>
                        <span class="separator"> - </span>
                        <a class="text-white" href="{{  route('contact.index') }}">{{ session('locale') === 'en' ? 'Contact Us' : 'اتصل بنا' }}</a>
						</p>
					</div>
				</div>
				<div class="col-lg-8 col-md-8 col-12 text-right">
					<div class="footer-bottom-content">
						<div class="footer-bottom-content-copy">
							<p class="fp80 m-0">
							<a href="https://uowa.edu.iq/"><span> {{ session('locale') === 'en' ? 'University of Warith Al-Anbiya' : 'جامعة وارث الانبياء (ع)' }} </span></a>  - <a href="/" class="text-white">{{ session('locale') === 'en' ? 'Continuing Education Center' : 'مركز التعليم المستمر' }} </a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

    <!-- Footer Area End -->


    <!-- All JS is here
