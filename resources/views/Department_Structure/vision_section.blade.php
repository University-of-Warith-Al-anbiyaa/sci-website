<style>
    .techno_nav_manu {
        background: #2c3e50  !important;
        z-index: 444;
        position: relative;
        margin-bottom: -91px;
        border-bottom: 1px solid #807e94;
    }
</style>

@extends('layouts.main')

@section('content')
    <style>
        .message-wrapper {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            padding: 80px 20px;
            margin-top: 100px;
        }

        .message-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 300px 1fr;
            gap: 30px;
            position: relative;
        }

        .admin-profile {
            background: #2c3e50;
            border-radius: 20px;
            padding: 30px;
            text-align: center;
            position: sticky;
            top: 100px;
            height: fit-content;
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        }

        .admin-image {
            width: 200px;
            height: 200px;
            border-radius: 20px;
            margin: -80px auto 20px;
            border: 8px solid #fff;
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
            object-fit: cover;
            background: #fff;
            transition: transform 0.3s ease;
        }

        .admin-image:hover {
            transform: scale(1.05);
        }

        .admin-info {
            color: white;
            padding: 20px 0;
        }

        .admin-name {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .admin-position {
            font-size: 16px;
            opacity: 0.9;
            color: #3498db;
        }

        .message-content {
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }

        .message-header {
            margin-bottom: 30px;
            position: relative;
            padding-bottom: 20px;
        }

        .message-header::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 80px;
            height: 4px;
            background: #3498db;
            border-radius: 2px;
        }

        .message-title {
            font-size: 32px;
            color: #2c3e50;
            margin-bottom: 10px;
        }

        .message-subtitle {
            color: #666;
            font-size: 18px;
        }

        .message-body {
            font-size: 18px;
            line-height: 1.8;
            color: #444;
            position: relative;
            padding: 30px;
            background: #f8f9fa;
            border-radius: 15px;
            border-right: 4px solid #3498db;
        }

        .quote-icon {
            position: absolute;
            top: -15px;
            right: 30px;
            font-size: 60px;
            color: #3498db;
            opacity: 0.2;
        }

        @media (max-width: 992px) {
            .message-container {
                grid-template-columns: 1fr;
            }

            .admin-profile {
                position: relative;
                top: 0;
                margin-top: 60px;
            }
        }
    </style>

    <div class="message-wrapper">
        <div class="message-container">
            <div class="admin-profile">
                <img src="{{ asset('store/img15.jpg') }}" alt="Admin" class="admin-image">
                <div class="admin-info">
                    <div class="admin-name">{{ $admin_name ?? 'د. محمد الموسوي' }}</div>
                    <div class="admin-position">{{ $position ?? 'مدير مركز التعليم المستمر' }}</div>
                </div>
            </div>

            <div class="message-content">
                <div class="message-header">
                    <h1 class="message-title">{{ app()->getLocale() === 'ar' ? 'كلمة المسؤول' : "Administrator's Message" }}</h1>
                    <div class="message-subtitle">{{ app()->getLocale() === 'ar' ? 'مركز التعليم المستمر' : 'Continuing Education Center' }}</div>
                </div>

                <div class="message-body">
                    <i class="fas fa-quote-right quote-icon"></i>
                    {!! $message ?? 'يسعى مركز التعليم المستمر في جامعة وارث الأنبياء إلى تقديم أفضل الخدمات التعليمية والتدريبية لتلبية احتياجات المجتمع وتطوير المهارات المهنية والعلمية.' !!}
                </div>
            </div>
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
