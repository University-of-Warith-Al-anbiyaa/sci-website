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
        .archive-wrapper {
            margin: 100px auto 40px;
            max-width: 1400px;
            padding: 0 20px;
        }

        .archive-header {
            background: linear-gradient(135deg, #2c3e50 0%, #3498db 100%);
            padding: 40px;
            border-radius: 15px;
            margin-bottom: 30px;
            color: white;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .archive-header::before {
            content: '★';
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 24px;
            opacity: 0.3;
        }

        .archive-title {
            font-size: 32px;
            margin-bottom: 10px;
        }

        .archive-subtitle {
            opacity: 0.8;
        }

        .table-container {
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            overflow: hidden;
        }

        .archive-table {
            width: 100%;
            border-collapse: collapse;
        }

        .archive-table th {
            background: #2c3e50;
            color: white;
            padding: 15px;
            text-align: center;
            font-weight: 500;
        }

        .archive-table td {
            padding: 12px 15px;
            border-bottom: 1px solid #eee;
            text-align: center;
        }

        .archive-table tr {
            background: #f8f9fa;
        }

        .archive-table tr:hover {
            background: #fff;
        }

        .archive-badge {
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.85rem;
            background: #95a5a6;
            color: white;
        }

        .category-badge {
            padding: 4px 12px;
            border-radius: 15px;
            font-size: 0.85rem;
            background: #7f8c8d;
            color: white;
        }

        .beneficiary-list {
            display: flex;
            gap: 5px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .beneficiary-item {
            background: #ecf0f1;
            padding: 3px 10px;
            border-radius: 12px;
            font-size: 0.85rem;
            color: #34495e;
        }

        .year-filter {
            margin-bottom: 20px;
            text-align: center;
        }

        .year-btn {
            padding: 8px 20px;
            margin: 0 5px;
            border: none;
            border-radius: 20px;
            background: #ecf0f1;
            color: #34495e;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .year-btn.active {
            background: #34495e;
            color: white;
        }

        .completed-badge {
            background: #7f8c8d;
            color: white;
            padding: 5px 10px;
            border-radius: 15px;
            font-size: 0.8rem;
        }

        .archive-info {
            text-align: center;
            margin-top: 20px;
            color: #7f8c8d;
            font-size: 0.9rem;
        }

        @media (max-width: 1024px) {
            .archive-table {
                display: block;
                overflow-x: auto;
            }
        }
    </style>

    <div class="archive-wrapper">
        <div class="archive-header">
            <h1 class="archive-title">{{ app()->getLocale() === 'ar' ? 'أرشيف الدورات التدريبية' : 'Training Courses Archive' }}</h1>
            <div class="archive-subtitle">{{ app()->getLocale() === 'ar' ? 'سجل الدورات السابقة' : 'Past Courses Record' }}</div>
        </div>

        <!-- <div class="year-filter">
            <button class="year-btn active">الكل</button>
            <button class="year-btn">2023</button>
            <button class="year-btn">2022</button>
            <button class="year-btn">2021</button>
        </div> -->

        <div class="table-container">
            <table class="archive-table">
                <thead>
                    <tr>
                        <th>العنوان</th>
                        <th>القسم</th>
                        <th>التصنيف</th>
                        <th>المستفيدون</th>
                        <th>تاريخ الإقامة</th>
                        <th>المدة</th>
                        <th>المحاضر</th>
                        <th>الحالة</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($archive['data'] as $course)
                        <tr>
                            <td style="text-align: right;">{{ $course['title'] }}</td>
                            <td>{{ $course['department'] }}</td>
                            <td><span class="category-badge">{{ $course['category'] }}</span></td>
                            <td>
                                <div class="beneficiary-list">
                                    @foreach($course['beneficiary'] as $beneficiary)
                                        <span class="beneficiary-item">{{ $beneficiary }}</span>
                                    @endforeach
                                </div>
                            </td>
                            <td>{{ $course['date'] }}</td>
                            <td>{{ $course['duration'] }} أيام</td>
                            <td>{{ $course['h_name'] }}</td>
                            <td>
                                <span class="completed-badge">تم إنجازها</span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="archive-info">
            إجمالي الدورات المنجزة: {{ count($archive['data']) }} دورة
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const yearBtns = document.querySelectorAll('.year-btn');
            const tableRows = document.querySelectorAll('.archive-table tbody tr');

            yearBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    yearBtns.forEach(b => b.classList.remove('active'));
                    btn.classList.add('active');

                    const year = btn.textContent;
                    if(year === 'الكل') {
                        tableRows.forEach(row => row.style.display = '');
                    } else {
                        tableRows.forEach(row => {
                            const date = row.children[4].textContent;
                            if(date.includes(year)) {
                                row.style.display = '';
                            } else {
                                row.style.display = 'none';
                            }
                        });
                    }
                });
            });
        });
    </script>
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
