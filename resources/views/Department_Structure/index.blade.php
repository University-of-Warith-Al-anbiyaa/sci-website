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
        .structure-box {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            margin: 40px auto;
            max-width: 800px;
        }

        .structure-header {
            background: #2c3e50;
            color: white;
            padding: 25px;
            border-radius: 15px 15px 0 0;
            text-align: center;
            font-size: 28px;
            font-weight: bold;
            border-bottom: 5px solid #34495e;
        }

        .structure-content {
            padding: 30px 50px;
            background: #f8f9fa;
            border-radius: 0 0 15px 15px;
        }

        .divisions-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .division-item {
            background: #3498db;
            color: white;
            margin: 15px 0;
            padding: 15px 25px;
            border-radius: 10px;
            position: relative;
            padding-right: 40px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 3px 10px rgba(52, 152, 219, 0.2);
        }

        .division-item:hover {
            transform: translateX(10px);
            box-shadow: 0 5px 15px rgba(52, 152, 219, 0.3);
        }

        .division-item::before {
            content: '★';
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: rgba(255, 255, 255, 0.8);
        }

        [dir="ltr"] .division-item {
            padding-left: 40px;
            padding-right: 25px;
        }

        [dir="ltr"] .division-item::before {
            right: auto;
            left: 15px;
        }
    </style>

    @if(!empty($departments['data'][0]))
        @php
            $dept = $departments['data'][0];
            $content = html_entity_decode(strip_tags($dept['content']));
            $divisions = array_values(array_filter(array_map(function ($line) {
                return trim($line, " \t\n\r\0\x0B\xC2\xA0");
            }, explode("\n", $content)), function ($line) {
                return !empty($line) && $line !== "\xC2\xA0" && $line !== "\u{A0}";
            }));
        @endphp

        <div class="structure-box" style="margin-top: 8%;">
            <div class="structure-header">
                {{ $dept['arttitle'] }}
            </div>
            <div class="structure-content">
                <ul class="divisions-list">
                    @foreach($divisions as $division)
                        <li class="division-item">{{ $division }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @else
        <div class="alert alert-info text-center">
            {{ session('locale') === 'en' ? 'No department structure available' : 'لا يوجد هيكل تنظيمي متاح' }}
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