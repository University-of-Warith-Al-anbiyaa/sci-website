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
        .courses-wrapper {
            margin: 100px auto 40px;
            max-width: 1400px;
            padding: 0 20px;
        }

        @media (max-width: 768px) {
            .courses-wrapper {
                font-size: 14px !important;
            }
        }

        .courses-header {
            background: linear-gradient(135deg, #2c3e50 0%, #3498db 100%);
            padding: 30px;
            border-radius: 15px;
            margin-bottom: 30px;
            color: white;
            text-align: center;
        }

        .table-container {
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .courses-table {
            width: 100%;
            border-collapse: collapse;
        }

        .courses-table th {
            background: #2c3e50;
            color: white;
            padding: 15px;
            text-align: center;
            font-weight: 500;
        }

        .courses-table td {
            padding: 12px 15px;
            border-bottom: 1px solid #eee;
            text-align: center;
        }

        .courses-table tbody tr:hover {
            background: #f8f9fa;
        }

        .status-badge {
            padding: 5px 10px;
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

        .category-badge {
            padding: 4px 8px;
            border-radius: 15px;
            font-size: 0.85rem;
            background: #3498db;
            color: white;
        }

        .beneficiary-list {
            display: flex;
            gap: 5px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .beneficiary-item {
            background: #f0f2f5;
            padding: 3px 8px;
            border-radius: 12px;
            font-size: 0.85rem;
        }

        .filters {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }

        .filter-btn {
            padding: 8px 15px;
            border: none;
            border-radius: 20px;
            background: #f8f9fa;
            color: #2c3e50;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .filter-btn.active {
            background: #3498db;
            color: white;
        }

        @media (max-width: 1024px) {
            .courses-table {
                display: block;
                overflow-x: auto;
            }
        }

        /* Add these new pagination styles */
        .pagination-container {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin-top: 30px;
        }

        ul.pagination li {
            display: contents;
            text-align: center;
            background-color: rgb(248, 249, 250)
        }

        ul.pagination li a {
            color: #2c3e50;
            display: flex;
            min-width: 32px;
        }

        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 8px;
        }

        .page-items {
            list-style: none;
        }

        .page-links {
            min-width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0 15px;
            border-radius: 50px;
            border: 2px solid #e0e6ed;
            color: #2c3e50;
            font-weight: 500;
            background: white;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .page-items.active .page-links {
            background: linear-gradient(135deg, #3498db, #2980b9);
            color: #2c3e50;
            border-color: transparent;
            box-shadow: 0 5px 15px rgba(52, 152, 219, 0.3);
        }

        .page-links:hover:not(.active) {
            background: #f8f9fa;
            border-color: #3498db;
            transform: translateY(-2px);
        }

        .page-items.disabled .page-links {
            opacity: 0.5;
            pointer-events: none;
        }

        .pagination-info {
            text-align: center;
            margin-top: 15px;
            color: #666;
            font-size: 0.9rem;
            padding: 10px;
            background: #f8f9fa;
            border-radius: 30px;
            display: inline-block;
            margin-left: auto;
            margin-right: auto;
        }

        /* Navigation arrows styling */
        .page-nav-arrow {
            font-size: 1.2rem;
            padding: 0;
            width: 40px;
            height: 40px;
        }

        .page-nav-arrow i {
            margin: 0;
            line-height: 1;
        }

        .page-nav-arrow:hover {
            background: #3498db;
            color: white;
            border-color: #3498db;
        }

        .header-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .archive-btn {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 10px 20px;
            background: linear-gradient(135deg, #34495e 0%, #95a5a6 100%);
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            font-weight: 500;
        }

        .archive-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(52, 73, 94, 0.3);
            color: white;
        }

        .archive-btn i {
            font-size: 1.2em;
        }
    </style>

    <div class="courses-wrapper">
        <div class="courses-header">
            <div class="header-actions">
                <h1>{{ app()->getLocale() === 'ar' ? 'الخطة السنوية للدورات التدريبية' : 'Annual Training Courses Plan' }}</h1>
                <a href="{{ route('archive') }}" class="archive-btn">
                    <i class="fas fa-archive"></i>
                    {{ app()->getLocale() === 'ar' ? 'الأرشيف' : 'Archive' }}
                </a>
            </div>
        </div>

        <div class="filters">
            <button class="filter-btn active" data-category="all">الكل</button>
            <button class="filter-btn" data-category="هندسية">هندسية</button>
            <button class="filter-btn" data-category="طبية">طبية</button>
            <button class="filter-btn" data-category="ادارية ومالية">إدارية ومالية</button>
            <button class="filter-btn" data-category="اكاديمية">أكاديمية</button>
            <button class="filter-btn" data-category="تقنية">تقنية</button>
            <button class="filter-btn" data-category="انسانية">إنسانية</button>
        </div>

        <div class="table-container">
            <table class="courses-table">
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
                    @foreach($clc_annual_plan['data'] as $course)
                        <tr data-category="{{ $course['category'] }}">
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
                                <span
                                    class="status-badge {{ $course['service'] === 'yes' ? 'status-active' : 'status-pending' }}">
                                    {{ $course['service'] === 'yes' ? 'متاح' : 'قريباً' }}
                                </span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Updated Pagination Section -->
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
        document.addEventListener('DOMContentLoaded', function () {
            const filterBtns = document.querySelectorAll('.filter-btn');
            const rows = document.querySelectorAll('.courses-table tbody tr');

            filterBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    const category = btn.dataset.category;

                    filterBtns.forEach(b => b.classList.remove('active'));
                    btn.classList.add('active');

                    rows.forEach(row => {
                        if (category === 'all' || row.dataset.category === category) {
                            row.style.display = '';
                        } else {
                            row.style.display = 'none';
                        }
                    });
                });
            });
        });
    </script>
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
