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
        .program-wrapper {
            margin: 100px auto 40px;
            max-width: 1400px;
            padding: 0 20px;
        }

        .program-header {
            background: linear-gradient(135deg, #2c3e50 0%, #2c3e50 100%);
            padding: 40px;
            border-radius: 15px;
            margin-bottom: 30px;
            color: white;
            text-align: center;
            position: relative;
            box-shadow: 0 5px 15px rgba(44, 62, 80, 0.2);
        }

        .table-container {
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            overflow: hidden;
        }

        .program-table {
            width: 100%;
            border-collapse: collapse;
        }

        .program-table th {
            background: #2c3e50;
            color: white;
            padding: 15px;
            text-align: center;
            font-weight: 500;
            white-space: nowrap;
        }

        .program-table td {
            padding: 12px 15px;
            border-bottom: 1px solid #eee;
            text-align: center;
            vertical-align: middle;
        }

        .program-table tr:hover {
            background: #f8f9fa;
        }

        .category-badge {
            padding: 4px 12px;
            border-radius: 15px;
            font-size: 0.85rem;
            background: #2c3e50;
            color: white;
            display: inline-block;
        }

        .beneficiary-list {
            display: flex;
            gap: 5px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .beneficiary-tag {
            background: #f0f2f5;
            padding: 3px 10px;
            border-radius: 12px;
            font-size: 0.85rem;
        }

        .status-badge {
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 500;
        }

        .status-active {
            background: #2ecc71;
            color: white;
        }

        .status-pending {
            background: #f1c40f;
            color: white;
        }

        .filters-section {
            background: white;
            padding: 20px;
            border-radius: 15px;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }

        .filter-buttons {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .filter-btn {
            padding: 8px 20px;
            border: 2px solid #e0e6ed;
            border-radius: 25px;
            background: white;
            color: #2c3e50;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .filter-btn.active {
            background: #2c3e50;
            color: white;
            border-color: #2c3e50;
        }

        @media (max-width: 1024px) {
            .program-table {
                display: block;
                overflow-x: auto;
            }
        }

        .program-card-header {
            background: #2c3e50;
        }

        .page-items.active .page-links {
            background: #2c3e50;
            border-color: #2c3e50;
            box-shadow: 0 5px 15px rgba(44, 62, 80, 0.3);
        }
    </style>

    <div class="program-wrapper">
        <div class="program-header">
            <h1>{{ app()->getLocale() === 'ar' ? 'البرامج والدورات التدريبية' : 'Training Programs & Courses' }}</h1>
            <p>{{ app()->getLocale() === 'ar' ? 'تطوير المهارات وبناء القدرات' : 'Skills Development & Capacity Building' }}</p>
        </div>

        <div class="filters-section">
            <div class="filter-buttons">
                <button class="filter-btn active" data-category="all">الكل</button>
                <button class="filter-btn" data-category="هندسية">هندسية</button>
                <button class="filter-btn" data-category="طبية">طبية</button>
                <button class="filter-btn" data-category="ادارية ومالية">إدارية ومالية</button>
                <button class="filter-btn" data-category="اكاديمية">أكاديمية</button>
                <button class="filter-btn" data-category="تقنية">تقنية</button>
                <button class="filter-btn" data-category="انسانية">إنسانية</button>
            </div>
        </div>

        <div class="table-container">
            <table class="program-table">
                <thead>
                    <tr>
                        <th>العنوان</th>
                        <th>القسم</th>
                        <th>التصنيف</th>
                        <th>المستفيدون</th>
                        <th>التاريخ</th>
                        <th>المدة</th>
                        <th>المحاضر</th>
                        <th>الحالة</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($program['data'] as $item)
                        <tr data-category="{{ $item['category'] }}">
                            <td style="text-align: right;">{{ $item['title'] }}</td>
                            <td>{{ $item['department'] }}</td>
                            <td><span class="category-badge">{{ $item['category'] }}</span></td>
                            <td>
                                <div class="beneficiary-list">
                                    @foreach($item['beneficiary'] as $beneficiary)
                                        <span class="beneficiary-tag">{{ $beneficiary }}</span>
                                    @endforeach
                                </div>
                            </td>
                            <td>{{ $item['date'] }}</td>
                            <td>{{ $item['duration'] }} أيام</td>
                            <td>{{ $item['h_name'] }}</td>
                            <td>
                                <span class="status-badge {{ $item['service'] === 'yes' ? 'status-active' : 'status-pending' }}">
                                    {{ $item['service'] === 'yes' ? 'متاح' : 'قريباً' }}
                                </span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        @if(isset($clc_annual_plan['pagination']) && $clc_annual_plan['pagination']['last_page'] > 1)
            <div class="pagination-container">
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <!-- First Page -->
                        <li class="page-items {{ $clc_annual_plan['pagination']['current_page'] == 1 ? 'disabled' : '' }}">
                            <a class="page-links page-nav-arrow" href="{{ request()->fullUrlWithQuery(['page' => 1]) }}"
                                title="الصفحة الأولى">
                                <i class="fas fa-angle-double-right"></i>
                            </a>
                        </li>

                        <!-- Previous Page -->
                        @if($clc_annual_plan['pagination']['current_page'] > 1)
                            <li class="page-items">
                                <a class="page-links page-nav-arrow"
                                    href="{{ request()->fullUrlWithQuery(['page' => $clc_annual_plan['pagination']['current_page'] - 1]) }}">
                                    <i class="fas fa-angle-right"></i>
                                </a>
                            </li>
                        @endif

                        <!-- Page Numbers -->
                        @php
                            $start = max($clc_annual_plan['pagination']['current_page'] - 2, 1);
                            $end = min($start + 4, $clc_annual_plan['pagination']['last_page']);
                            $start = max(min($start, $end - 4), 1);
                        @endphp

                        @for($i = $start; $i <= $end; $i++)
                            <li class="page-items {{ $clc_annual_plan['pagination']['current_page'] == $i ? 'active' : '' }}">
                                <a class="page-links" href="{{ request()->fullUrlWithQuery(['page' => $i]) }}">{{ $i }}</a>
                            </li>
                        @endfor

                        <!-- Next Page -->
                        @if($clc_annual_plan['pagination']['current_page'] < $clc_annual_plan['pagination']['last_page'])
                            <li class="page-items">
                                <a class="page-links page-nav-arrow"
                                    href="{{ request()->fullUrlWithQuery(['page' => $clc_annual_plan['pagination']['current_page'] + 1]) }}">
                                    <i class="fas fa-angle-left"></i>
                                </a>
                            </li>
                        @endif

                        <!-- Last Page -->
                        <li
                            class="page-items {{ $clc_annual_plan['pagination']['current_page'] == $clc_annual_plan['pagination']['last_page'] ? 'disabled' : '' }}">
                            <a class="page-links page-nav-arrow"
                                href="{{ request()->fullUrlWithQuery(['page' => $clc_annual_plan['pagination']['last_page']]) }}"
                                title="الصفحة الأخيرة">
                                <i class="fas fa-angle-double-left"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="pagination-info">
                    عرض
                    <strong>{{ ($clc_annual_plan['pagination']['current_page'] - 1) * 25 + 1 }}</strong>
                    إلى
                    <strong>{{ min($clc_annual_plan['pagination']['current_page'] * 25, $clc_annual_plan['pagination']['total']) }}</strong>
                    من
                    <strong>{{ $clc_annual_plan['pagination']['total'] }}</strong>
                    سجل
                </div>
            </div>
        @endif

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filterBtns = document.querySelectorAll('.filter-btn');
            const programCards = document.querySelectorAll('.program-card');

            filterBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    const category = btn.dataset.category;
                    
                    filterBtns.forEach(b => b.classList.remove('active'));
                    btn.classList.add('active');

                    programCards.forEach(card => {
                        if (category === 'all' || card.dataset.category === category) {
                            card.style.display = '';
                        } else {
                            card.style.display = 'none';
                        }
                    });
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