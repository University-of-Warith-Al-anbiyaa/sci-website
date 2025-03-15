<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', session('locale', 'ar')) }}"
	dir="{{ session('locale', 'ar') === 'ar' ? 'rtl' : 'ltr' }}">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<header>
	<div class="scroll-area">
		<div class="top-wrap">
			<div class="go-top-btn-wraper">
				<div class="go-top go-top-button">
					<i>
						<svg width="800px" height="800px" class="mx-1 s-20" viewBox="0 0 24 24" fill="none"
							xmlns="http://www.w3.org/2000/svg">

							<g id="SVGRepo_bgCarrier" stroke-width="0" />

							<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

							<g id="SVGRepo_iconCarrier">
								<path d="M12 5V19M12 5L6 11M12 5L18 11" stroke="#fcfcfc" stroke-width="2"
									stroke-linecap="round" stroke-linejoin="round" />
							</g>

						</svg>
					</i>
					<i>
						<svg width="800px" height="800px" class="mx-1 s-20" viewBox="0 0 24 24" fill="none"
							xmlns="http://www.w3.org/2000/svg">

							<g id="SVGRepo_bgCarrier" stroke-width="0" />

							<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

							<g id="SVGRepo_iconCarrier">
								<path d="M12 5V19M12 5L6 11M12 5L18 11" stroke="#fcfcfc" stroke-width="2"
									stroke-linecap="round" stroke-linejoin="round" />
							</g>

						</svg>
					</i>
				</div>
			</div>
		</div>
	</div>

	<div id="sticky-header" class="techno_nav_manu">
		<div class="container-fluid px-4">
			<div class="row align-items-center">
				<div class="col-lg-2">
					<div class="logo-container d-flex align-items-center justify-content-between">
						<a class="logo_img" href="/" title="techno"style="--bs-gutter-x: 4.5rem;">
							<img src="store/logo.svg" alt="">
						</a>
						<button type="button" class="color-w lang-s d-none d-lg-block" data-current-lang="{{ session('locale') }}" id="langToggle" style="color: #fcfcfc;color: #fcfcfc;
    font-size: 12px;
    padding: 0px 16px;
    border-radius: 7px;
    transition: 0.3s;
    border: 2px solid #ffc451;
    line-height: 30px; background-color: transparent;">{{ session('locale') === 'ar' ? 'EN' : 'AR' }}</button>
						<!-- <button type="button" class="lang-switch" id="langToggle" data-current-lang="{{ session('locale') }}">
                            <i class="fas fa-globe"></i>
                            <span>{{ session('locale') === 'ar' ? 'EN' : 'AR' }}</span>
                        </button> -->
					</div>
				</div>
				<div class="col-lg-10">
					<nav class="techno_menu text-center">
						<ul class="nav_scroll mb-0">
							<li><a href="/"> {{session('locale') === 'en' ? 'Home' : 'الرئيسية'}} 
								   <!-- <span>
										<i>
											<svg width="800px" height="800px" viewBox="0 0 24 24" class="mx-1 s-20"
												fill="none" xmlns="http://www.w3.org/2000/svg">
												<path
													d="M5.70711 9.71069C5.31658 10.1012 5.31658 10.7344 5.70711 11.1249L10.5993 16.0123C11.3805 16.7927 12.6463 16.7924 13.4271 16.0117L18.3174 11.1213C18.708 10.7308 18.708 10.0976 18.3174 9.70708C17.9269 9.31655 17.2937 9.31655 16.9032 9.70708L12.7176 13.8927C12.3271 14.2833 11.6939 14.2832 11.3034 13.8927L7.12132 9.71069C6.7308 9.32016 6.09763 9.32016 5.70711 9.71069Z"
													fill="#fcfcfc"></path>
											</svg>
										</i>
									</span> -->
								</a>

							</li>
							<li><a href="/news">
									{{ session('locale') === 'en' ? 'News & Activities' : 'الاخبار والنشاطات' }}
									<!-- <span>
										<i>
											<svg width="800px" height="800px" viewBox="0 0 24 24" class="mx-1 s-20"
												fill="none" xmlns="http://www.w3.org/2000/svg">
												<path
													d="M5.70711 9.71069C5.31658 10.1012 5.31658 10.7344 5.70711 11.1249L10.5993 16.0123C11.3805 16.7927 12.6463 16.7924 13.4271 16.0117L18.3174 11.1213C18.708 10.7308 18.708 10.0976 18.3174 9.70708C17.9269 9.31655 17.2937 9.31655 16.9032 9.70708L12.7176 13.8927C12.3271 14.2833 11.6939 14.2832 11.3034 13.8927L7.12132 9.71069C6.7308 9.32016 6.09763 9.32016 5.70711 9.71069Z"
													fill="#fcfcfc"></path>
											</svg>
										</i>
									</span> -->
								</a>

							</li>
							<li><a href=""> {{ session('locale') === 'en' ? 'About the Center' : 'حول المركز' }} <span>
										<i>
											<svg width="800px" height="800px" viewBox="0 0 24 24" class="mx-1 s-20"
												fill="none" xmlns="http://www.w3.org/2000/svg">
												<path
													d="M5.70711 9.71069C5.31658 10.1012 5.31658 10.7344 5.70711 11.1249L10.5993 16.0123C11.3805 16.7927 12.6463 16.7924 13.4271 16.0117L18.3174 11.1213C18.708 10.7308 18.708 10.0976 18.3174 9.70708C17.9269 9.31655 17.2937 9.31655 16.9032 9.70708L12.7176 13.8927C12.3271 14.2833 11.6939 14.2832 11.3034 13.8927L7.12132 9.71069C6.7308 9.32016 6.09763 9.32016 5.70711 9.71069Z"
													fill="#fcfcfc"></path>
											</svg>
										</i></span></a>
								<ul class="sub-menu">
									<li><a href="{{ route('department.structure') }}">{{ session('locale') === 'en' ? 'Structure' : 'الهيكلية' }}</a></li>
									<li><a
											href="{{ route('department_vision') }}">{{ session('locale') === 'en' ? 'Vision & Goals' : 'رؤية و اهداف المركز' }}</a>
									</li>
									<li><a
											href="{{ route('department_mission') }}">{{ session('locale') === 'en' ? 'Head’s Message' : 'كلمة رئيس القسم' }}</a>
									</li>
									<li><a
											href="{{ route('department_goals') }}">{{ session('locale') === 'en' ? 'About the Center' : 'عن المركز' }}</a>
									</li>

								</ul>
							</li>

							<li><a href="#"> {{ session('locale') === 'en' ? 'Training Courses' : 'الدورات التدريبية' }}
									<span>
										<i>
											<svg width="800px" height="800px" viewBox="0 0 24 24" class="mx-1 s-20"
												fill="none" xmlns="http://www.w3.org/2000/svg">
												<path
													d="M5.70711 9.71069C5.31658 10.1012 5.31658 10.7344 5.70711 11.1249L10.5993 16.0123C11.3805 16.7927 12.6463 16.7924 13.4271 16.0117L18.3174 11.1213C18.708 10.7308 18.708 10.0976 18.3174 9.70708C17.9269 9.31655 17.2937 9.31655 16.9032 9.70708L12.7176 13.8927C12.3271 14.2833 11.6939 14.2832 11.3034 13.8927L7.12132 9.71069C6.7308 9.32016 6.09763 9.32016 5.70711 9.71069Z"
													fill="#fcfcfc"></path>
											</svg>
										</i>
									</span>
								</a>
								<ul class="sub-menu">
									<li><a
											href="{{ route('clc_annual_plan.index') }}">{{ session('locale') === 'en' ? 'Annual Plan' : 'الخطة السنوية' }}</a>
									</li>
									<li><a
											href="{{ route('program') }}">{{ session('locale') === 'en' ? 'Training Programs' : 'برامج المركز التدريبية' }}</a>
									</li>
									<li><a
											href="{{ route('create') }}">{{ session('locale') === 'en' ? 'Course Registration' : 'تسجيل دورة' }}</a>
									</li>

								</ul>
							</li>
							<li><a href=""> {{ session('locale') === 'en' ? 'E-Learning' : 'التعليم الإلكتروني' }}
									<span>
										<i>
											<svg width="800px" height="800px" viewBox="0 0 24 24" class="mx-1 s-20"
												fill="none" xmlns="http://www.w3.org/2000/svg">
												<path
													d="M5.70711 9.71069C5.31658 10.1012 5.31658 10.7344 5.70711 11.1249L10.5993 16.0123C11.3805 16.7927 12.6463 16.7924 13.4271 16.0117L18.3174 11.1213C18.708 10.7308 18.708 10.0976 18.3174 9.70708C17.9269 9.31655 17.2937 9.31655 16.9032 9.70708L12.7176 13.8927C12.3271 14.2833 11.6939 14.2832 11.3034 13.8927L7.12132 9.71069C6.7308 9.32016 6.09763 9.32016 5.70711 9.71069Z"
													fill="#fcfcfc"></path>
											</svg>
										</i></span></a>
								<ul class="sub-menu">
									<li><a
											href="https://uowa.edu.iq/arabic/dars">{{ session('locale') === 'en' ? 'Weekly Schedule' : 'الجدول الأسبوعي' }}</a>
									</li>
									<li><a
											href="https://uowa.edu.iq/arabic/exam/monthly">{{ session('locale') === 'en' ? 'Monthly Exam Schedule' : 'جدول الامتحانات الشهري' }}</a>
									</li>
									<li><a
											href="https://uowa.edu.iq/arabic/exam/final">{{ session('locale') === 'en' ? 'Final Exam Schedule' : 'جدول الامتحانات النهائي' }}</a>
									</li>
									<li><a
											href="https://uowa.edu.iq/arabic/guide">{{ session('locale') === 'en' ? 'Student E-Learning Guide' : 'دليل الطالب للتعلم الإلكتروني' }}</a>
									</li>
									<li><a
											href="https://elearning.uowa.edu.iq/">{{ session('locale') === 'en' ? 'E-Learning Platform' : 'منصة التعليم الإلكتروني' }}</a>
									</li>

								</ul>
							</li>
							<li><a href=""> {{ session('locale') === 'en' ? 'E-Services' : 'الخدمات الإلكترونية' }}
									<span>
										<i>
											<svg width="800px" height="800px" viewBox="0 0 24 24" class="mx-1 s-20"
												fill="none" xmlns="http://www.w3.org/2000/svg">
												<path
													d="M5.70711 9.71069C5.31658 10.1012 5.31658 10.7344 5.70711 11.1249L10.5993 16.0123C11.3805 16.7927 12.6463 16.7924 13.4271 16.0117L18.3174 11.1213C18.708 10.7308 18.708 10.0976 18.3174 9.70708C17.9269 9.31655 17.2937 9.31655 16.9032 9.70708L12.7176 13.8927C12.3271 14.2833 11.6939 14.2832 11.3034 13.8927L7.12132 9.71069C6.7308 9.32016 6.09763 9.32016 5.70711 9.71069Z"
													fill="#fcfcfc"></path>
											</svg>
										</i></span></a>
								<ul class="sub-menu">
									<li><a
											href="{{ route('plagiarism.index') }}">{{ session('locale') === 'en' ? 'Plagiarism Detection' : 'الاستلال الإلكتروني' }}</a>
									</li>
									<li><a href="{{ route('certificates.index') }}">{{ session('locale') === 'en' ? 'Certificates' : 'الشهادات' }}</a>
									</li>
								</ul>
							</li>
							<li><a href="{{ route('contact.index') }}">{{ session('locale') === 'en' ? 'Contact Us' : 'اتصل بنا' }}</a></li>
						</ul>

					</nav>
				</div>
			</div>
		</div>
	</div>
	<div class="mobile-menu-area d-sm-block d-md-block d-lg-none">
		<div class="mobile-menu">
			<nav class="techno_menu" style="display: block;">
				<ul class="nav_scroll">
					<li><a href="/#home">{{session('locale') === 'en' ? 'Home' : 'الرئيسية'}} <span><i
									class=""></i></span></a>
					</li>
					<li><a href="/#Company">
							{{ session('locale') === 'en' ? 'News & Activities' : 'الاخبار والنشاطات' }}<span>
								<span><i class=""></i></span></a>
					</li>
					<li><a href=""> {{ session('locale') === 'en' ? 'Training Courses' : 'الدورات التدريبية' }} <span><i
									class=""></i></span></a>
						<ul class="sub-menu">
							<li><a href="/">{{ session('locale') === 'en' ? 'Annual Plan' : 'الخطة السنوية' }}</a>
							</li>
							<li><a
									href="">{{ session('locale') === 'en' ? 'Training Programs' : 'برامج المركز التدريبية' }}</a>
							</li>
							<li><a href="">{{ session('locale') === 'en' ? 'Course Registration' : 'تسجيل دورة' }}</a>
							</li>
						</ul>
					</li>
					<li><a href=""> {{ session('locale') === 'en' ? 'About the Center' : 'حول المركز' }} </a>
						<ul class="sub-menu">
							<li><a href="{{ route('department.structure') }}">{{ session('locale') === 'en' ? 'Structure' : 'الهيكلية' }}</a></li>
							<li><a
									href="">{{ session('locale') === 'en' ? 'Vision & Goals' : 'رؤية و اهداف المركز' }}</a>
							</li>
							<li><a href="">{{ session('locale') === 'en' ? 'Head’s Message' : 'كلمة رئيس القسم' }}</a>
							</li>
							<li><a href="">{{ session('locale') === 'en' ? 'About the Center' : 'عن المركز' }}</a>
							</li>
						</ul>
					</li>

					<li><a href="/#blog"> {{ session('locale') === 'en' ? 'E-Services' : 'الخدمات الإلكترونية' }}
							<span><i class=""></i></span></a>
						<ul class="sub-menu">
							<li><a
									href="/">{{ session('locale') === 'en' ? 'Plagiarism Detection' : 'الاستلال الإلكتروني' }}</a>
							</li>
							<li><a href="">{{ session('locale') === 'en' ? 'Certificates' : 'الشهادات' }}</a></li>

						</ul>
					</li>
					<li><a href="">{{ session('locale') === 'en' ? 'Contact Us' : 'اتصل بنا' }} </a></li>
				</ul>
			</nav>
		</div>
	</div>
</header>