<style>
    .techno_nav_manu {
        background: #2c3e50 !important;
        z-index: 444;
        position: relative;
        max-width: 100% !important;
        margin-bottom: -91px;
        border-bottom: 1px solid #807e94;
    }
 .techno_nav_manu .px-4 {
    padding-right: 1.2rem !important;
    padding-left: 1.8rem !important;
}
</style>

@extends('layouts.main')

@section('content')

   
<style>
    .contact-container {
        margin: 100px auto;
        width: 90%;
        max-width: 1200px;
    }

    .contact-header {
        background: #2c3e50 !important;
        color: white;
        padding: 40px;
        border-radius: 15px;
        text-align: center;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        margin-bottom: 30px;
    }

    .contact-header h2 {
        font-size: 2.5rem;
        margin-bottom: 10px;
    }

    .contact-header p {
        font-size: 1.2rem;
        opacity: 0.9;
    }

    .contact-form {
        background: white;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        padding: 30px;
        margin-bottom: 30px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-label {
        font-weight: 500;
        margin-bottom: 8px;
        color: #2c3e50;
    }

    .form-control {
        border: 2px solid #e0e6ed;
        border-radius: 8px;
        padding: 10px 15px;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        border-color: #3498db;
        box-shadow: 0 0 0 0.2rem rgba(52, 152, 219, 0.25);
    }

    .btn-submit {
        background: #2c3e50 !important;
        color: white;
        border: none;
        border-radius: 8px;
        padding: 12px 30px;
        font-weight: 500;
        transition: all 0.3s ease;
        width: 100%;
        margin-top: 20px;
    }

    .btn-submit:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(44, 62, 80, 0.3);
    }

    .contact-info {
        background: #f8f9fa;
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    }

    .contact-info h3 {
        font-size: 1.8rem;
        margin-bottom: 20px;
        color: #2c3e50;
    }

    .contact-info p {
        font-size: 1.1rem;
        color: #666;
        line-height: 1.6;
    }

    .contact-info .info-item {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
    }

    /* Keep icon/text sizes unchanged; only adjust spacing/alignment */
    .contact-info .info-item i { color: #3498db; margin-inline-end: 12px; }
    [dir="rtl"] .contact-info .info-item i { margin-inline-start: 12px; margin-inline-end: 0; }
    .contact-info .info-item span { color: #2c3e50; }

    /* Footer-style contact alignment (used in this page) */
    #footer-widget-address .footer-inner { display:flex; align-items:center; gap:10px; }
    #footer-widget-address .footer-socail-icon { flex: 0 0 auto; }
    #footer-widget-address .footer-socail-info,
    #footer-widget-address .footer-socail-info2 { flex: 1; }
    /* Standardize vertical spacing between contact items */
    #footer-widget-address .footer-inner { margin-bottom: 14px; }
    #footer-widget-address .footer-socail-info p { margin: 0; }

   

    @media only screen and (min-width: 320px) and (max-width: 599px) {
    .techno_nav_manu {
        display: none !important;
    }
    .sticky {
    display: none !important;
}
}

    @media screen and (max-width: 990px) {
        .contact-container { margin: 60px 20px; }
    }
</style>


<div class="contact-container">
    <div class="contact-header">
        <h2>{{ session('locale') === 'en' ? 'Contact Us' : 'اتصل بنا' }}</h2>
        <p>{{ session('locale') === 'en' ? 'We are here to help you. Please fill out the form below and we will get back to you as soon as possible.' : 'نحن هنا لمساعدتك. يرجى ملء النموذج أدناه وسنعود إليك في أقرب وقت ممكن.' }}</p>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="contact-form">
                <form action="{{ route('contact.submit') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="form-label">{{ session('locale') === 'en' ? 'Full Name' : 'الاسم الكامل' }}</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">{{ session('locale') === 'en' ? 'Email' : 'البريد الإلكتروني' }}</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">{{ session('locale') === 'en' ? 'Phone Number' : 'رقم الهاتف' }}</label>
                        <input type="text" name="phone" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">{{ session('locale') === 'en' ? 'Message' : 'الرسالة' }}</label>
                        <textarea name="message" class="form-control" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn-submit">{{ session('locale') === 'en' ? 'Submit' : 'إرسال' }}</button>
                </form>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="contact-info" id="footer-widget-address">
                <h3 class="widget-title"><span style="border-bottom : 1px solid #e29f5b">{{ session('locale') === 'en' ? 'Contact' : 'اتصل' }}</span> {{ session('locale') == 'en' ? 'Us' : 'بنا' }}</h3>

                <div class="footer-inner">
                    <div class="footer-socail-icon">
                        <i>
                            <img src="{{ asset('store/phone.svg') }}" class="s-20" alt="">
                        </i>
                    </div>
                    <div class="footer-socail-info">
                        <p><span>0772647382</span></p>
                    </div>
                </div>
                <div class="footer-inner">
                    <div class="footer-socail-icon">
                        <i>
                            <img src="{{ asset('store/email.svg') }}" class="s-20" alt="">
                        </i>
                    </div>
                    <div class="footer-socail-info">
                        <p>clc@uowa.edu.iq</p>
                    </div>
                </div>
                <div class="footer-inner d-flex align-items-start">
                    <div class="footer-socail-icon">
                        <i>
                            <img src="{{ asset('store/location.svg') }}" class="s-20" alt="">
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
</div>
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
