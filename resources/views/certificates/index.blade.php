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
/* Main Container Styles */
.main-container {
    margin: 100px auto 40px;
    width: 90%;
    max-width: 1200px;
}

/* Form Section Styles */
.form-section {
    background: white;
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    margin-bottom: 30px;
    overflow: hidden;
}

.section-header {
    background: linear-gradient(135deg, #2c3e50 0%, #3498db 100%);
    color: white;
    padding: 25px 30px;
    display: flex;
    align-items: center;
    gap: 15px;
}

.section-header i {
    font-size: 24px;
}

.section-header h3 {
    margin: 0;
    font-size: 1.4rem;
    font-weight: 600;
}

.section-content {
    padding: 30px;
}

/* Introduction Section */
.intro-section {
    text-align: center;
    margin-bottom: 40px;
    padding: 20px;
}

.intro-icon {
    width: 80px;
    height: 80px;
    background: #e8f5fe;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
    color: #3498db;
    font-size: 32px;
}

.intro-title {
    font-size: 1.8rem;
    color: #2c3e50;
    margin-bottom: 15px;
}

.intro-text {
    color: #666;
    font-size: 1.1rem;
    max-width: 600px;
    margin: 0 auto;
    line-height: 1.6;
}

/* Instructions Box */
.instructions-box {
    background: #f8f9fa;
    border: 2px solid #e0e6ed;
    border-radius: 12px;
    padding: 25px;
    margin-bottom: 30px;
}

.instructions-title {
    display: flex;
    align-items: center;
    gap: 10px;
    color: #2c3e50;
    font-size: 1.2rem;
    margin-bottom: 20px;
}

.instructions-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.instructions-list li {
    position: relative;
    padding: 12px 35px 12px 0;
    border-bottom: 1px dashed #e0e6ed;
    color: #666;
}

.instructions-list li:last-child {
    border-bottom: none;
}

.instructions-list li:before {
    content: '✓';
    position: absolute;
    right: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 25px;
    height: 25px;
    background: #e8f5fe;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #3498db;
    font-size: 14px;
}

/* Search Box */
.search-container {
    background: white;
    border-radius: 12px;
    padding: 30px;
    margin-bottom: 30px;
}

.search-input-wrapper {
    position: relative;
    max-width: 700px;
    margin: 0 auto 20px;
}

.search-input {
    width: 100%;
    height: 60px;
    padding: 0 60px 0 20px;
    border: 2px solid #e0e6ed;
    border-radius: 30px;
    font-size: 1.1rem;
    text-align: right;
    transition: all 0.3s ease;
    background: #f8f9fa;
}

.search-input:focus {
    background: white;
    border-color: #3498db;
    box-shadow: 0 0 0 4px rgba(52, 152, 219, 0.1);
}

.search-icon {
    position: absolute;
    right: 20px;
    top: 50%;
    transform: translateY(-50%);
    color: #95a5a6;
    font-size: 20px;
    pointer-events: none;
}

.search-button {
    display: block;
    width: 200px;
    margin: 20px auto 0;
    padding: 12px;
    border: none;
    border-radius: 25px;
    background: linear-gradient(135deg, #3498db 0%, #2980b9 100%);
    color: white;
    font-size: 1.1rem;
    cursor: pointer;
    transition: all 0.3s ease;
}

.search-button:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(52, 152, 219, 0.3);
}

/* Results Section */
.search-results {
    margin-top: 30px;
}

.certificate-card {
    background: #fff;
    border-radius: 15px;
    box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    padding: 20px;
    margin-bottom: 15px;
    border: 2px solid #e0e6ed;
    transition: all 0.3s ease;
}

.certificate-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.certificate-details {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.certificate-title {
    font-size: 1.2rem;
    color: #2c3e50;
    font-weight: 600;
    margin-bottom: 10px;
}

.meta-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 15px;
    margin: 15px 0;
}

.meta-item {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 8px;
    background: #f8f9fa;
    border-radius: 8px;
}

.meta-icon {
    width: 35px;
    height: 35px;
    background: #e8f5fe;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #3498db;
}

.meta-text {
    display: flex;
    flex-direction: column;
}

.meta-label {
    font-size: 0.8rem;
    color: #666;
}

.meta-value {
    font-size: 0.95rem;
    color: #2c3e50;
    font-weight: 500;
}

.action-buttons {
    display: flex;
    gap: 10px;
    margin-top: 15px;
}

.btn-download {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 8px 20px;
    border-radius: 8px;
    border: none;
    cursor: pointer;
    transition: all 0.3s ease;
    font-weight: 500;
}

.btn-certificate {
    background: #3498db;
    color: white;
}

.btn-order {
    background: #2ecc71;
    color: white;
}
</style>

<div class="main-container">
    <div class="form-section">
        <div class="section-header">
            <i class="fas fa-award"></i>
            <h3>نظام البحث عن الشهادات</h3>
        </div>

        <div class="section-content">
            <div class="intro-section">
                <div class="intro-icon">
                    <i class="fas fa-certificate"></i>
                </div>
                <h2 class="intro-title">مرحباً بك في نظام شهادات المشاركة</h2>
                <p class="intro-text">
                    من خلال هذا النظام يمكنك تحميل شهادة المشاركة الخاصة بك بسرعة وسهولة
                </p>
            </div>

            <div class="instructions-box">
                <div class="instructions-title">
                    <i class="fas fa-info-circle"></i>
                    تعليمات مهمة
                </div>
                <ul class="instructions-list">
                    <li>ادخال نفس اسمك الثلاثي الذي استخدم عند التسجيل على النشاط</li>
                    <li>في حال لم تجد اسم النشاط فهذا يعني لم تصل بيانات ذلك النشاط بعد</li>
                    <li>تأكد من كتابة الاسم بشكل صحيح وبنفس طريقة كتابته عند التسجيل</li>
                </ul>
            </div>

            <div class="search-container">
                <form id="searchForm" action="{{ route('certificates.search') }}" method="POST">
                    @csrf
                    <div class="search-input-wrapper">
                        <input type="text" 
                               class="search-input"
                               name="name" 
                               placeholder="ادخل اسمك الثلاثي كما هو مسجل في الشهادة..."
                               required>
                        <i class="fas fa-search search-icon"></i>
                    </div>
                    <button type="submit" class="search-button">
                        <i class="fas fa-search"></i>
                        بحث عن الشهادات
                    </button>
                </form>
            </div>

            <div id="searchResults" class="search-results"></div>
        </div>
    </div>
</div>

<div class="toast-container" id="toastContainer"></div>

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
                        <p class="mt-2">جاري البحث...</p>
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
                                                <span class="meta-label">اسم المتدرب</span>
                                                <span class="meta-value">${cert.name}</span>
                                            </div>
                                        </div>
                                        
                                        <div class="meta-item">
                                            <div class="meta-icon">
                                                <i class="fas fa-calendar"></i>
                                            </div>
                                            <div class="meta-text">
                                                <span class="meta-label">تاريخ الدورة</span>
                                                <span class="meta-value">${cert.datestart}</span>
                                            </div>
                                        </div>

                                        <div class="meta-item">
                                            <div class="meta-icon">
                                                <i class="fas fa-clock"></i>
                                            </div>
                                            <div class="meta-text">
                                                <span class="meta-label">مدة الدورة</span>
                                                <span class="meta-value">${cert.days} أيام</span>
                                            </div>
                                        </div>

                                        <div class="meta-item">
                                            <div class="meta-icon">
                                                <i class="fas fa-certificate"></i>
                                            </div>
                                            <div class="meta-text">
                                                <span class="meta-label">نوع الشهادة</span>
                                                <span class="meta-value">${cert.type}</span>
                                            </div>
                                        </div>

                                        <div class="meta-item">
                                            <div class="meta-icon">
                                                <i class="fas fa-calendar-alt"></i>
                                            </div>
                                            <div class="meta-text">
                                                <span class="meta-label">تاريخ الإنشاء</span>
                                                <span class="meta-value">${cert.created}</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="action-buttons">
                                        <a download="certificate" href="/certificates/download/${cert.eid}" 
                                           class="btn-download btn-certificate">
                                            <i class="fas fa-download"></i>
                                            تحميل الشهادة
                                        </a>
                                        <a href="https://uowa.edu.iq/store/filestorage/${cert.filename}" 
                                           target="_blank"
                                           class="btn-download btn-order">
                                            <i class="fas fa-file-pdf"></i>
                                            الأمر الإداري 
                                        </a>
                                    </div>
                                </div>
                            </div>
                        `;
                    });
                    html += '</div>';
                    resultsDiv.html(html);
                    showToast('success', 'تم العثور على نتائج', `تم العثور على ${response.certificates.length} شهادة`);
                } else {
                    resultsDiv.html(`
                        <div class="alert alert-info">
                            <i class="fas fa-info-circle"></i>
                            لم يتم العثور على أي شهادات بهذا الاسم
                        </div>
                    `);
                    showToast('error', 'لم يتم العثور على نتائج', 'لا توجد شهادات مسجلة بهذا الاسم');
                }
            },
            error: function() {
                resultsDiv.html(`
                    <div class="alert alert-danger">
                        <i class="fas fa-exclamation-circle"></i>
                        حدث خطأ أثناء البحث
                    </div>
                `);
                showToast('error', 'خطأ', 'حدث خطأ أثناء معالجة الطلب');
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
