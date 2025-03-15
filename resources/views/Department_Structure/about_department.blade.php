<style>
    .techno_nav_manu {
        background: #0C244E !important;
        z-index: 444;
        position: relative;
        margin-bottom: -91px;
        border-bottom: 1px solid #807e94;
    }
</style>

@extends('layouts.main')

@section('content')
    <style>
        .vision-container {
            margin: 100px auto 40px;
            max-width: 1000px;
            padding: 0 20px;
        }

        .vision-card {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            margin-bottom: 30px;
            overflow: hidden;
        }

        .vision-header {
            background: #2c3e50;
            color: white;
            padding: 25px;
            text-align: center;
            position: relative;
        }

        .vision-title {
            font-size: 24px;
            font-weight: bold;
            margin: 0;
        }

        .vision-content {
            padding: 30px;
            background: #f8f9fa;
        }

        .content-block {
            background: #fff;
            border-right: 4px solid #3498db;
            margin: 15px 0;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.05);
            transition: transform 0.3s ease;
        }

        .content-block:hover {
            transform: translateX(10px);
        }

        .content-block i {
            color: #3498db;
            margin-left: 15px;
        }

        .goals-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            padding: 20px;
        }

        .goal-card {
            background: #3498db;
            color: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .goal-card:hover {
            transform: translateY(-5px);
        }

        .icon-circle {
            width: 60px;
            height: 60px;
            background: rgba(255,255,255,0.2);
            border-radius: 50%;
            margin: 0 auto 15px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .motto {
            text-align: center;
            margin-top: 30px;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 10px;
            font-weight: bold;
            color: #2c3e50;
        }
    </style>

    @if(!empty($about_department['data'][0]))
        @php
            $vision = $about_department['data'][0];
            $content = $vision['content'];
        @endphp

        <div class="vision-container">
            <!-- Title Card -->
            <div class="vision-card">
                <div class="vision-header">
                    <h1 class="vision-title">{{ $vision['arttitle'] }}</h1>
                </div>
            </div>

            <!-- Mission Card -->
            <div class="vision-card">
                <div class="vision-header">
                    <h2 class="vision-title"> {{ $vision['ctitle'] }} </h2>
                </div>
                <div class="vision-content">
                    <div class="content-block">
                        <i class="fas fa-scroll"></i>
                        <div style="text-align: justify; line-height: 1.6;">{!! $content !!}</div>
                    </div>
                </div>
            </div>

            <!-- Vision Card -->
            <!-- <div class="vision-card">
                <div class="vision-header">
                    <h2 class="vision-title">رؤية المركز</h2>
                </div>
                <div class="vision-content">
                    <div class="content-block">
                        <i class="fas fa-eye"></i>
                        التميز والعمل الجماعي في تقديم التعليم و التعلم عالي المستوى ذات فائدة طويلة المدى ومدى الحياة.
                    </div>
                </div>
            </div> -->

            <!-- Goals Card -->
            <!-- <div class="vision-card">
                <div class="vision-header">
                    <h2 class="vision-title">الأهداف الإستراتيجية للمركز</h2>
                </div>
                <div class="vision-content">
                    <div class="goals-grid">
                        <div class="goal-card">
                            <div class="icon-circle">
                                <i class="fas fa-handshake fa-2x"></i>
                            </div>
                            <p>تقوية وتعزيز الاندماج في المجتمع من خلال تأسيس شراكات إستراتيجية مختلفة مع الجهات الحكومية والأهلية.</p>
                        </div>
                        
                        <div class="goal-card">
                            <div class="icon-circle">
                                <i class="fas fa-certificate fa-2x"></i>
                            </div>
                            <p>تأهيل وتمكين شرائح وأفراد المجتمع من خلال الدورات التدريبية والاختبارات المعترف بها محليا ودوليَّا.</p>
                        </div>

                        <div class="goal-card">
                            <div class="icon-circle">
                                <i class="fas fa-graduation-cap fa-2x"></i>
                            </div>
                            <p>رفع المستوى العلمي والأكاديمي والمهني لجميع موظفي جامعة وارث الأنبياء</p>
                        </div>
                    </div>
                    <div class="motto">
                        <i class="fas fa-star"></i>
                        <strong>نسعى دائما للتحول من الروتين للإنجاز</strong>
                    </div>
                </div>
            </div> -->
        </div>
    @else
        <div class="alert alert-info text-center mt-5">
            {{ app()->getLocale() === 'ar' ? 'لا توجد بيانات متاحة' : 'No data available' }}
        </div>
    @endif
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
