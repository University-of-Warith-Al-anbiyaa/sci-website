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
						<a class="logo_img" href="/" title="techno" style="--bs-gutter-x: 4.5rem;">
							<img src="{{ asset('store/logo.svg') }}" alt="">
						</a>
						<button type="button" class="color-w lang-s d-none d-lg-block"
							data-current-lang="{{ session('locale') }}" id="langToggle"
							style="color: #fcfcfc;color: #fcfcfc;
			                            font-size: 12px;
			                            padding: 0px 16px;
			                            border-radius: 7px;
			                            transition: 0.3s;
			                            border: 2px solid #ffc451;
			                            line-height: 30px; background-color: transparent;">{{ session()->has('locale') ? (session('locale') === 'ar' ? 'EN' : 'AR') : 'EN' }}
						                </button>
						<!-- Mobile language toggle placed beside logo (visible on small screens) -->
						<!-- <button type="button" class="color-w lang-s-mobile d-block d-lg-none ms-2"
							data-current-lang="{{ session('locale') }}" id="langToggleMobile"
							onclick="document.getElementById('langToggle').click()">
							{{ session()->has('locale') ? (session('locale') === 'ar' ? 'EN' : 'AR') : 'EN' }}
						</button> -->
						<!-- <button type="button" class="lang-switch" id="langToggle" data-current-lang="{{ session('locale') }}">
                            <i class="fas fa-globe"></i>
                            <span>{{ session('locale') === 'ar' ? 'EN' : 'AR' }}</span>
                        </button> -->
					</div>
				</div>
				<div class="col-lg-10">
					<nav class="techno_menu text-center">
						@include('partials.navbar-links', ['listClass' => 'nav_scroll mb-0'])
						@if (false)
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
							<li><a href="#"> {{ session('locale') === 'en' ? 'About the Center' : 'حول المركز' }} <span>
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
											href="{{ route('department.structure') }}">{{ session('locale') === 'en' ? 'Structure' : 'الهيكلية' }}</a>
									</li>
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
										</i></span></a>
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
							<li><a href="#"> {{ session('locale') === 'en' ? 'E-Learning' : 'التعليم الإلكتروني' }}
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
											href="https://uowa.edu.iq/arabic/clc/guide">{{ session('locale') === 'en' ? 'Student E-Learning Guide' : 'دليل الطالب للتعلم الإلكتروني' }}</a>
									</li>
									<li><a
											href="https://elearning.uowa.edu.iq/">{{ session('locale') === 'en' ? 'E-Learning Platform' : 'منصة التعليم الإلكتروني' }}</a>
									</li>

								</ul>
							</li>
							<li><a href="#"> {{ session('locale') === 'en' ? 'E-Services' : 'الخدمات الإلكترونية' }}
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
									<li><a
											href="{{ route('certificates.index') }}">{{ session('locale') === 'en' ? 'Certificates' : 'الشهادات' }}</a>
									</li>
								</ul>
							</li>
							<li><a
									href="{{ route('contact.index') }}">{{ session('locale') === 'en' ? 'Contact Us' : 'اتصل بنا' }}</a>
							</li>
						</ul>
						@endif
					</nav>
				</div>
			</div>
		</div>
	</div>
	<div class="mobile-menu-area d-sm-block d-md-block d-lg-none">
		<div class="mobile-menu">
			<nav class="techno_menu" style="display: block;">
				@include('partials.navbar-links', ['listClass' => 'nav_scroll'])
				@if (false)
				<ul class="nav_scroll">
					<li><a href="/">{{session('locale') === 'en' ? 'Home' : 'الرئيسية'}} <span><i
									class=""></i></span></a>
					</li>
					<li><a href="/news">
							{{ session('locale') === 'en' ? 'News & Activities' : 'الاخبار والنشاطات' }}<span>
								<span><i class=""></i></span></a>
					</li>
					<li><a href="#"> {{ session('locale') === 'en' ? 'About the Center' : 'حول المركز' }} </a>
						<ul class="sub-menu">
							<li><a
									href="{{ route('department.structure') }}">{{ session('locale') === 'en' ? 'Structure' : 'الهيكلية' }}</a>
							</li>
							<li><a
									href="{{ route('department_vision') }}">{{ session('locale') === 'en' ? 'Vision & Goals' : 'رؤية و اهداف المركز' }}</a>
							</li>
							<li><a href="{{ route('department_mission') }}">{{ session('locale') === 'en' ? 'Head’s Message' : 'كلمة رئيس القسم' }}</a>
							</li>
							<li><a href="{{ route('department_goals') }}">{{ session('locale') === 'en' ? 'About the Center' : 'عن المركز' }}</a>
							</li>
						</ul>
					</li>
					<li><a href="#"> {{ session('locale') === 'en' ? 'Training Courses' : 'الدورات التدريبية' }} 
						<span><i
									class=""></i></span></a>
						<ul class="sub-menu">
							<li><a href="{{ route('clc_annual_plan.index') }}">{{ session('locale') === 'en' ? 'Annual Plan' : 'الخطة السنوية' }}</a>
							</li>
							<li><a
									href="{{ route('program') }}">{{ session('locale') === 'en' ? 'Training Programs' : 'برامج المركز التدريبية' }}</a>
							</li>
							<li><a href="{{ route('create') }}">{{ session('locale') === 'en' ? 'Course Registration' : 'تسجيل دورة' }}</a>
							</li>
						</ul>
					</li>
					
					<li><a href="#"> {{ session('locale') === 'en' ? 'E-Learning' : 'التعليم الإلكتروني' }}

							<span><i class=""></i></span></a>
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
									href="https://uowa.edu.iq/arabic/clc/guide">{{ session('locale') === 'en' ? 'Student E-Learning Guide' : 'دليل الطالب للتعلم الإلكتروني' }}</a>
							</li>
							<li><a
									href="https://elearning.uowa.edu.iq/">{{ session('locale') === 'en' ? 'E-Learning Platform' : 'منصة التعليم الإلكتروني' }}</a>
							</li>
						</ul>
					</li>

					<li><a href="#"> {{ session('locale') === 'en' ? 'E-Services' : 'الخدمات الإلكترونية' }}
							<span><i class=""></i></span></a>
						<ul class="sub-menu">
							<li><a
									href="{{ route('plagiarism.index') }}">{{ session('locale') === 'en' ? 'Plagiarism Detection' : 'الاستلال الإلكتروني' }}</a>
							</li>
							<li><a href="{{ route('certificates.index') }}">{{ session('locale') === 'en' ? 'Certificates' : 'الشهادات' }}</a></li>

						</ul>
					</li>
					<li><a href="{{ route('contact.index') }}">{{ session('locale') === 'en' ? 'Contact Us' : 'اتصل بنا' }} </a></li>
				</ul>
				@endif
			</nav>
			<!-- Mobile language toggle button -->
			
		</div>
	</div>

	<!-- Mobile floating language toggle (draggable & clickable) -->
	<style>
		.mobile-lang-toggle {
			display: none;
			position: fixed;
			bottom: 80px;
			right: 16px;
			width: 48px;
			height: 48px;
			border-radius: 50%;
			background: #0c244e; /* same as header */
			color: #ffffff; /* inner text white */
			border: 2px solid #ffc451; /* golden frame */
			box-shadow: 0 6px 18px rgba(0,0,0,0.18);
			z-index: 99999;
			align-items: center;
			justify-content: center;
			font-weight: 700;
			font-size: 14px;
			cursor: grab;
			user-select: none;
			-webkit-user-select: none;
			touch-action: none;
		}

		.mobile-lang-toggle.dragging { cursor: grabbing; }

		@media (max-width: 990px) {
			.mobile-lang-toggle { display: flex; }
		}
	</style>

	<div id="mobileLangToggle" class="mobile-lang-toggle" data-current-lang="{{ session('locale') }}" title="{{ session('locale') === 'ar' ? 'EN' : 'AR' }}">
		{{ session()->has('locale') ? (session('locale') === 'ar' ? 'EN' : 'AR') : 'EN' }}
	</div>

</header>

<script>
// Mobile floating language toggle: drag + click to switch
(function(){
	var el = document.getElementById('mobileLangToggle');
	if(!el) return;

	var isPointerDown = false;
	var startX=0, startY=0, elX=0, elY=0;
	var storageKey = 'mobileLangTogglePos';

	// restore position
	try{
		var pos = JSON.parse(localStorage.getItem(storageKey));
		if(pos && typeof pos.x === 'number' && typeof pos.y === 'number'){
			el.style.right = 'auto';
			el.style.left = (pos.x) + 'px';
			el.style.top = (pos.y) + 'px';
			el.style.bottom = 'auto';
			el.style.position = 'fixed';
		}
	}catch(e){}

	function pointerDown(e){
		isPointerDown = true;
		el.classList.add('dragging');
		var p = (e.touches && e.touches[0]) || e;
		startX = p.clientX;
		startY = p.clientY;
		var rect = el.getBoundingClientRect();
		elX = rect.left;
		elY = rect.top;
		e.preventDefault();
	}

	function pointerMove(e){
		if(!isPointerDown) return;
		var p = (e.touches && e.touches[0]) || e;
		var dx = p.clientX - startX;
		var dy = p.clientY - startY;
		var newX = elX + dx;
		var newY = elY + dy;
		var margin = 8;
		newX = Math.max(margin, Math.min(window.innerWidth - el.offsetWidth - margin, newX));
		newY = Math.max(margin, Math.min(window.innerHeight - el.offsetHeight - margin, newY));
		el.style.left = newX + 'px';
		el.style.top = newY + 'px';
		el.style.right = 'auto';
		el.style.bottom = 'auto';
	}

	function pointerUp(e){
		if(!isPointerDown) return;
		isPointerDown = false;
		el.classList.remove('dragging');
		try{
			var rect = el.getBoundingClientRect();
			localStorage.setItem(storageKey, JSON.stringify({ x: rect.left, y: rect.top }));
		}catch(e){}
	}

	var moved = false;
	el.addEventListener('pointerdown', function(e){ moved=false; pointerDown(e); });
	el.addEventListener('pointermove', function(e){ moved=true; pointerMove(e); });
	el.addEventListener('pointerup', function(e){ pointerUp(e); if(!moved){ toggleLang(); } });
	el.addEventListener('pointercancel', pointerUp);

	el.addEventListener('touchstart', function(e){ moved=false; pointerDown(e); });
	el.addEventListener('touchmove', function(e){ moved=true; pointerMove(e); });
	el.addEventListener('touchend', function(e){ pointerUp(e); if(!moved){ toggleLang(); } });

	function toggleLang(){
		var current = el.getAttribute('data-current-lang') || document.documentElement.lang || 'ar';
		var newLang = current === 'ar' ? 'en' : 'ar';
		var token = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
		if(!token){ window.location.reload(); return; }
		fetch('/switch-language', {
			method: 'POST',
			headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': token },
			body: JSON.stringify({ locale: newLang })
		}).then(function(res){ return res.json(); }).then(function(data){ if(data && data.success){ location.reload(); } else { location.reload(); } }).catch(function(){ location.reload(); });
	}
})();
</script>
