<style>
    .techno_nav_manu {
        background: #2c3e50 !important;
        z-index: 444;
        position: relative;
        margin-bottom: -91px;
        border-bottom: 1px solid #807e94;
    }
</style>
@extends('layouts.main')

@section('content')
    <style>
        .about-hero {
            /* background: linear-gradient(135deg, #2c3e50 0%, #3498db 100%); */
            background: linear-gradient(135deg, #0c244e 0%, #0c244e 100%);
            min-height: 60vh;
            /* display: flex; */
            align-items: center;
            position: relative;
            overflow: hidden;
            margin-top: 91px;
        }

        .hero-pattern {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('data:image/svg+xml,<svg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"><path d="M30 0L60 30L30 60L0 30L30 0Z" fill="rgba(255,255,255,0.05)"/></svg>');
            background-size: 30px 30px;
        }

        .hero-content {
            position: relative;
            z-index: 1;
            text-align: center;
            color: white;
            padding: 80px 20px;
        }

        .hero-title {
            font-size: 3.5rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        .hero-subtitle {
            font-size: 1.5rem;
            opacity: 0.9;
        }

        .features-section {
            margin-top: -50px;
            padding: 0 20px;
            position: relative;
            z-index: 2;
        }

        .features-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        .feature-box {
            background: white;
            border-radius: 20px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transform: translateY(0);
            transition: all 0.3s ease;
        }

        .feature-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
        }

        .feature-icon {
            width: 90px;
            height: 90px;
            /* background: linear-gradient(45deg, #3498db, #2ecc71); */
            background: linear-gradient(45deg, #c4bc7d, #ffc451);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: -60px auto 20px;
            color: white;
            font-size: 2.5rem;
            box-shadow: 0 5px 15px rgba(52, 152, 219, 0.3);
        }

        .main-content {
            max-width: 1200px;
            margin: 60px auto;
            padding: 0 20px;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .info-card {
            background: white;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            position: relative;
            overflow: hidden;
            text-align: justify;
        }

        .info-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            /* background: linear-gradient(90deg, #3498db, #2ecc71); */
            background: linear-gradient(45deg, #c4bc7d, #ffc451);
        }

        .stats-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 40px;
            background: white;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        }

        .stat-item {
            text-align: center;
            padding: 20px;
            border-radius: 15px;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            transition: transform 0.3s ease;
        }

        .stat-item:hover {
            transform: translateY(-5px);
        }

        .stat-number {
            font-size: 3rem;
            font-weight: bold;
            /* background: linear-gradient(45deg, #3498db, #2ecc71); */
            background: linear-gradient(45deg, #c4bc7d, #ffc451);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 10px;
        }

        .stat-label {
            color: #2c3e50;
            font-size: 1.1rem;
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }

            .features-container {
                gap: 50px;
            }
        }
    </style>

    <!-- Hero Section -->
    <div class="about-hero">
        <div class="hero-pattern"></div>
        <div class="hero-content">
            <h1 class="hero-title">
                {{ $about_content->arttitle ?? session('locale') === 'ar' ? 'مركز التعليم المستمر' : 'Continuing Education Center' }}
            </h1>
            <p class="hero-subtitle">
                {{ session('locale') === 'ar' ? 'نحو مستقبل تعليمي أفضل' : 'Towards a Better Educational Future' }}
            </p>
        </div>
    </div>
    <!-- Features Section -->
    <section class="features-section">
        <div class="features-container">
            <div class="feature-box">
                <div class="feature-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h3>{{ session('locale') === 'ar' ? 'تعليم متميز' : 'Excellence in Education' }}</h3>
                <p>{{ session('locale') === 'ar' ? 'برامج تعليمية عالية الجودة' : 'High-quality educational programs' }}
                </p>
            </div>

            <div class="feature-box">
                <div class="feature-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3>{{ session('locale') === 'ar' ? 'كادر متخصص' : 'Expert Staff' }}</h3>
                <p>{{ session('locale') === 'ar' ? 'خبراء ومتخصصون في مجالاتهم' : 'Experts in their fields' }}</p>
            </div>

            <div class="feature-box">
                <div class="feature-icon">
                    <i class="fas fa-certificate"></i>
                </div>
                <h3>{{ session('locale') === 'ar' ? 'شهادات معتمدة' : 'Certified Programs' }}</h3>
                <p>{{ session('locale') === 'ar' ? 'شهادات معترف بها دولياً' : 'Internationally recognized certificates' }}
                </p>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <div class="main-content">
        <div class="info-grid">
            <div class="info-card">
                <h2>{{ session('locale') === 'ar' ? 'من نحن' : 'Who We Are' }}</h2>
                <p>{!! $about_content ?? session('locale') === 'ar' ? 'محتوى عن المركز...' : 'About content...' !!}</p>
            </div>

            <div class="info-card">
                <h2>{{ session('locale') === 'ar' ? 'رؤيتنا' : 'Our Vision' }}</h2>
                <p>{{ session('locale') === 'ar' ? 'نسعى لتحقيق التميز في التعليم المستمر وتطوير المهارات المهنية' : 'We strive for excellence in continuing education and professional development' }}
                </p>
            </div>
        </div>

        <div class="main-content">
            <div class="info-grid">
                <div class="info-card">
                    <h2>{{ $about_department['arttitle'] }}</h2>
                    <p>{!! $about_department['content']  !!}</p>
                </div>
            </div>
        </div>

        <!-- <div class="info-grid" style="margin-top: 40px;">
                <div class="info-card">
                <h2>{{ session('locale') === 'ar' ? 'رسالتنا' : 'Our Mission' }}</h2>
                <p>{{ session('locale') === 'ar' ? 'تقديم برامج تعليمية مبتكرة تلبي احتياجات المجتمع وتساهم في تطوير الأفراد' : 'To provide innovative educational programs that meet community needs and contribute to individual development' }}
                </p>
                </div>

                <div class="info-card">
                <h2>{{ session('locale') === 'ar' ? 'قيمنا' : 'Our Values' }}</h2>
                <p>{{ session('locale') === 'ar' ? 'التميز، الابتكار، الشمولية، والتعاون' : 'Excellence, Innovation, Inclusivity, and Collaboration' }}
                </p>
                </div>
            </div> -->

        <!-- Strategic Plan Section -->
        <div class="info-grid" style="margin-top: 40px;">
            <div class="info-card" style="grid-column: 1 / -1;">
                <h2>{{ session('locale') === 'ar' ? 'الخطة الاستراتيجية' : 'Strategic Plan' }}</h2>
                <p>{{ session('locale') === 'ar' ? 'اطلع على الخطة الاستراتيجية لمركز التعليم المستمر' : 'View the Strategic Plan for the Continuing Education Center' }}
                </p>
                <div style="text-align: center; margin-top: 20px;">
                    <a href="{{ asset('pdf/الخطة الاستراتيجية.pdf') }}" target="_blank" class="btn btn-yellow"
                        style="display: inline-block; padding: 12px 30px; background: linear-gradient(45deg, #ffc451, #ffc451); color: white; text-decoration: none; border-radius: 25px; font-weight: bold; transition: transform 0.3s ease;">
                        <i class="fas fa-file-pdf"></i>
                        {{ session('locale') === 'ar' ? 'تحميل الخطة الاستراتيجية' : 'Download Strategic Plan' }}
                    </a>
                </div>
            </div>
        </div>

        <!-- <div class="stats-container">
                <div class="stat-item">
                    <div class="stat-number">1000+</div>
                    <div class="stat-label">{{ session('locale') === 'ar' ? 'طالب' : 'Students' }}</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">50+</div>
                    <div class="stat-label">{{ session('locale') === 'ar' ? 'برنامج' : 'Programs' }}</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">25+</< /div>
                        <div class="stat-label">{{ session('locale') === 'ar' ? 'مدرب' : 'Trainers' }}</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">15+</div>
                        <div class="stat-label">{{ session('locale') === 'ar' ? 'سنة خبرة' : 'Years' }}</div>
                    </div>
                </div> -->
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