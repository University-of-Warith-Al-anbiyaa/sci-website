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

<link rel="stylesheet" href="{{ asset('s/certificates.css') }}">

<div class="main-container">
    <div class="form-section">
        <div class="section-header">
            <i class="fas fa-award"></i>
            <h3> {{ session('locale') === 'en' ? 'Certificate Search System' : 'نظام البحث عن الشهادات' }}</h3>
        </div>

        <div class="section-content">
            <div class="intro-section">
                <div class="intro-icon">
                    <i class="fas fa-certificate"></i>
                </div>
                <h2 class="intro-title"> {{ session('locale') === 'en' ? 'Welcome to the Participation Certificates System' : 'مرحباً بك في نظام شهادات المشاركة' }}</h2>
                <p class="intro-text">
                        {{ session('locale') === 'en' ? 'Through this system, you can quickly and easily download your participation certificate' : '
                    من خلال هذا النظام يمكنك تحميل شهادة المشاركة الخاصة بك بسرعة وسهولة'}}
                </p>
            </div>

            <div class="instructions-box">
                <div class="instructions-title">
                    <i class="fas fa-info-circle"></i>
                   {{ session('locale') === 'en' ? 'Important Instructions' : 'تعليمات مهمة' }}
                </div>
                <ul class="instructions-list">
                    <li>{{ session('locale') === 'en' ? 'Enter the same full name used during activity registration' : 'ادخال نفس اسمك الثلاثي الذي استخدم عند التسجيل على النشاط' }}</li>
                    <li>{{ session('locale') === 'en' ? 'If you do not find the activity name, it means that the data for that activity has not arrived yet' : 'في حال لم تجد اسم النشاط فهذا يعني لم تصل بيانات ذلك النشاط بعد' }}</li>
                    <li>{{ session('locale') === 'en' ? 'Make sure to write the name correctly and in the same way it was written during registration' : 'تأكد من كتابة الاسم بشكل صحيح وبنفس طريقة كتابته عند التسجيل' }}</li>
                </ul>
            </div>

            <div class="search-container">
                <form id="searchForm" action="{{ route('certificates.search') }}" method="POST">
                    @csrf
                    <div class="search-input-wrapper">
                        <input type="text" 
                               class="search-input"
                               name="name" 
                               placeholder="{{ session('locale') === 'en' ? 'Enter your full name as registered on the certificate...' : 'ادخل اسمك الثلاثي كما هو مسجل في الشهادة...' }}"
                               required>
                        <i class="fas fa-search search-icon"></i>
                    </div>
                    <button type="submit" class="search-button">
                        <i class="fas fa-search"></i>
                        {{ session('locale') === 'en' ? 'Search Certificates' : 'بحث عن الشهادات' }}
                    </button>
                </form>
            </div>

            <div id="searchResults" class="search-results"></div>
        </div>
    </div>
</div>

<div class="toast-container" id="toastContainer"></div>
<script src="{{ asset('s/jquery-3.2.1.min.js.download') }}"></script>
	<script src="{{ asset('s/jquery.meanmenu.js.download') }}"></script>
	<script src="{{ asset('s/theme.js.download') }}"></script>
<script>
$(document).ready(function() {
    const searchForm = $('#searchForm');
    const resultsDiv = $('#searchResults');

    function formatDate(timestamp) {
        return new Date(timestamp * 1000).toLocaleDateString('ar-EG', {
            year: 'numeric',
            month: 'long',
            day: 'numeric'
        });
    }

    searchForm.on('submit', function(e) {
        e.preventDefault();
        
        $.ajax({
            url: $(this).attr('action'),
            method: 'POST',
            data: $(this).serialize(),
            beforeSend: function() {
                resultsDiv.html(`
                    <div class="text-center py-5">
                        <i class="fas fa-spinner fa-spin fa-2x"></i>
                        <p class="mt-2">{{ session('locale') === 'en' ? 'Searching...' : 'جاري البحث...' }}</p>
                    </div>
                `);
            },
            success: function(response) {
                if (response.certificates && response.certificates.length > 0) {
                    let html = '<div class="certificates-list">';
                    response.certificates.forEach(cert => {
                        html += `
                            <div class="certificate-card">
                                <div class="certificate-details">
                                    <h4 class="certificate-title">${cert.title}</h4>
                                    
                                    <div class="meta-grid">
                                        <div class="meta-item">
                                            <div class="meta-icon">
                                                <i class="fas fa-user"></i>
                                            </div>
                                            <div class="meta-text">
                                                <span class="meta-label">{{ session('locale') === 'en' ? 'Trainee Name' : 'اسم المتدرب' }}</span>
                                                <span class="meta-value">${cert.name}</span>
                                            </div>
                                        </div>
                                        
                                        <div class="meta-item">
                                            <div class="meta-icon">
                                                <i class="fas fa-calendar"></i>
                                            </div>
                                            <div class="meta-text">
                                                <span class="meta-label">{{ session('locale') === 'en' ? 'Course Date' : 'تاريخ الدورة' }}</span>
                                                <span class="meta-value">${cert.datestart}</span>
                                            </div>
                                        </div>

                                        <div class="meta-item">
                                            <div class="meta-icon">
                                                <i class="fas fa-clock"></i>
                                            </div>
                                            <div class="meta-text">
                                                <span class="meta-label">{{ session('locale') === 'en' ? 'Course Duration' : 'مدة الدورة' }}</span>
                                                <span class="meta-value">${cert.days} {{ session('locale') === 'en' ? 'days' : 'أيام' }}</span>
                                            </div>
                                        </div>

                                        <div class="meta-item">
                                            <div class="meta-icon">
                                                <i class="fas fa-certificate"></i>
                                            </div>
                                            <div class="meta-text">
                                                <span class="meta-label">{{ session('locale') === 'en' ? 'Certificate Type' : 'نوع الشهادة' }}</span>
                                                <span class="meta-value">${cert.type}</span>
                                            </div>
                                        </div>

                                        <div class="meta-item">
                                            <div class="meta-icon">
                                                <i class="fas fa-calendar-alt"></i>
                                            </div>
                                            <div class="meta-text">
                                                <span class="meta-label">{{ session('locale') === 'en' ? 'Creation Date' : 'تاريخ الإنشاء' }}</span>
                                                <span class="meta-value">${cert.created}</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="action-buttons">
                                        <a download="certificate" href="/certificates/download/${cert.eid}" 
                                           class="btn-download btn-certificate">
                                            <i class="fas fa-download"></i>
                                            {{ session('locale') === 'en' ? 'Download Certificate' : 'تحميل الشهادة' }}
                                        </a>
                                        <a href="https://uowa.edu.iq/store/filestorage/${cert.orders}" 
                                           target="_blank"
                                           class="btn-download btn-order">
                                            <i class="fas fa-file-pdf"></i>
                                            {{ session('locale') === 'en' ? 'Administrative Order' : 'الأمر الإداري' }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        `;
                    });
                    html += '</div>';
                    resultsDiv.html(html);
                    showToast('success', '{{ session('locale') === 'en' ? 'Results Found' : 'تم العثور على نتائج' }}', `{{ session('locale') === 'en' ? 'Found' : 'تم العثور على' }} ${response.certificates.length} {{ session('locale') === 'en' ? 'certificates' : 'شهادة' }}`);
                } else {
                    resultsDiv.html(`
                        <div class="alert alert-info">
                            <i class="fas fa-info-circle"></i>
                            {{ session('locale') === 'en' ? 'No certificates found with this name' : 'لم يتم العثور على أي شهادات بهذا الاسم' }}
                        </div>
                    `);
                    showToast('error', '{{ session('locale') === 'en' ? 'No Results Found' : 'لم يتم العثور على نتائج' }}', '{{ session('locale') === 'en' ? 'No certificates registered with this name' : 'لا توجد شهادات مسجلة بهذا الاسم' }}');
                }
            },
            error: function() {
                resultsDiv.html(`
                    <div class="alert alert-danger">
                        <i class="fas fa-exclamation-circle"></i>
                        {{ session('locale') === 'en' ? 'An error occurred while searching' : 'حدث خطأ أثناء البحث' }}
                    </div>
                `);
                showToast('error', '{{ session('locale') === 'en' ? 'Error' : 'خطأ' }}', '{{ session('locale') === 'en' ? 'An error occurred while processing the request' : 'حدث خطأ أثناء معالجة الطلب' }}');
            }
        });
    });
});

function showToast(type, title, message, details = null) {
    const toast = document.createElement('div');
    toast.className = 'toast';
    toast.style.borderRightColor = type === 'success' ? '#28a745' : '#dc3545';

    const closeBtn = document.createElement('button');
    closeBtn.className = 'toast-close';
    closeBtn.innerHTML = '×';
    closeBtn.onclick = () => toast.remove();

    let content = `
        <div class="toast-content">
            <div class="toast-header" style="color: ${type === 'success' ? '#28a745' : '#dc3545'}">
                ${title}
            </div>
            ${message ? `<div class="toast-body">${message}</div>` : ''}
    `;

    if (details) {
        content += `
            <div class="toast-details">
                <pre>${typeof details === 'object' ? JSON.stringify(details, null, 2) : details}</pre>
            </div>
        `;
    }

    content += '</div>';
    toast.innerHTML = content;
    toast.appendChild(closeBtn);

    const container = document.getElementById('toastContainer');
    container.appendChild(toast);

    // Auto remove after 5 seconds
    setTimeout(() => {
        toast.style.animation = 'slideOut 0.3s ease-out';
        setTimeout(() => toast.remove(), 300);
    }, 5000);
}

// Check for session messages on page load
document.addEventListener('DOMContentLoaded', function() {
    @if(session('success'))
        showToast(
            'success',
            '{{ session('success') }}',
            '@if(session('api_message')){{ session('api_message') }}@endif',
            @if(session('response'))@json(session('response'))@else null @endif
        );
    @endif

    @if(session('error'))
        showToast(
            'error',
            '{{ session('error') }}',
            '@if(session('api_message')){{ session('api_message') }}@endif',
            @if(session('response'))@json(session('response'))@else null @endif
        );
    @endif
});
</script>
@endsection
