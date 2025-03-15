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
    .contact-container {
        margin: 100px auto;
        width: 90%;
        max-width: 1200px;
    }

    .contact-header {
        background: #10316B !important;
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
        color: #10316B;
    }

    .form-control {
        border: 2px solid #e0e6ed;
        border-radius: 8px;
        padding: 10px 15px;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        border-color: #164392;
        box-shadow: 0 0 0 0.2rem rgba(22, 67, 146, 0.25);
    }

    .btn-submit {
        background: #10316B !important;
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
        box-shadow: 0 5px 15px rgba(16, 49, 107, 0.3);
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
        color: #10316B;
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

    html[dir="ltr"] .contact-info .info-item i {
        font-size: 24px;
        color: #164392;
        margin-right: 15px;
    }
    html[dir="rtl"] .contact-info .info-item i {
        font-size: 24px;
        color: #164392;
        margin-left: 15px;
    }

    .contact-info .info-item span {
        font-size: 1.1rem;
        color: #10316B;
        margin-left: 10px; /* Added margin to create space between icon and text */
    }

</style>

<div class="contact-container">
    <div class="contact-header">
        <h2>{{ session('locale') === 'ar' ? 'اتصل بنا' : 'Contact Us' }}</h2>
        <p>{{ session('locale') === 'ar' ? 'نحن هنا لمساعدتك. يرجى ملء النموذج أدناه وسنعود إليك في أقرب وقت ممكن.' : 'We are here to help you. Please fill out the form below and we will get back to you as soon as possible.' }}</p>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="contact-form">
                <form action="{{ route('contact.submit') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="form-label">{{ session('locale') === 'ar' ? 'الاسم الكامل' : 'Full Name' }}</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">{{ session('locale') === 'ar' ? 'البريد الإلكتروني' : 'Email' }}</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">{{ session('locale') === 'ar' ? 'رقم الهاتف' : 'Phone Number' }}</label>
                        <input type="text" name="phone" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">{{ session('locale') === 'ar' ? 'الرسالة' : 'Message' }}</label>
                        <textarea name="message" class="form-control" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn-submit">{{ session('locale') === 'ar' ? 'إرسال' : 'Submit' }}</button>
                </form>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="contact-info">
                <h3>{{ session('locale') === 'ar' ? 'معلومات الاتصال' : 'Contact Information' }}</h3>
                <div class="info-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>{{ session('locale') === 'ar' ? 'كربلاء طريق بغداد - عمود 119' : 'Karbala, Baghdad Road - Column 11' }}</span>
                </div>
                <div class="info-item">
                    <i class="fas fa-phone"></i>
                    <span>07734896226 - 07801003060 </span>
                </div>
                <div class="info-item">
                    <i class="fas fa-envelope"></i>
                    <span>clc@uowa.edu.iq</span>
                </div>
                <div class="info-item">
                    <i class="fas fa-clock"></i>
                    <span>{{ session('locale') === 'ar' ? 'ساعات العمل: السبت - الأربعاء: 8 صباحًا - 2 مساءً' : 'Working Hours: Saturday - Wednesday: 8 AM - 2 PM' }}</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
