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
    .error-container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh; /* Full viewport height */
        text-align: center;
        padding: 20px;
        animation: fadeIn 1s ease-out;
        background: #f8f9fa;
    }

    .error-title {
        font-size: 3rem;
        color: #e74c3c;
        font-weight: bold;
        margin-bottom: 20px;
        animation: bounceIn 1s ease-out;
    }

    .error-message {
        font-size: 1.2rem;
        color: #555;
        margin-top: 10px;
        margin-bottom: 30px;
        line-height: 1.8;
        animation: fadeIn 1.5s ease-out;
    }

    .error-button {
        display: inline-block;
        padding: 12px 25px;
        background: linear-gradient(135deg, #3498db, #2980b9);
        color: white;
        text-decoration: none;
        border-radius: 50px;
        font-size: 1rem;
        font-weight: bold;
        transition: all 0.3s ease;
        animation: fadeIn 2s ease-out;
    }

    .error-button:hover {
        background: linear-gradient(135deg, #2980b9, #1a6ca8);
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(41, 128, 185, 0.3);
    }

    .error-icon {
        font-size: 5rem;
        color: #e74c3c;
        margin-bottom: 20px;
        animation: pulse 1.5s infinite;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    @keyframes bounceIn {
        0% {
            transform: scale(0.5);
            opacity: 0;
        }
        60% {
            transform: scale(1.2);
            opacity: 1;
        }
        100% {
            transform: scale(1);
        }
    }

    @keyframes pulse {
        0% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.1);
        }
        100% {
            transform: scale(1);
        }
    }
</style>

<div class="error-container">
    <div class="error-icon">
        <i class="fas fa-exclamation-triangle"></i>
    </div>
    <h1 class="error-title">
        {{ session('locale') === 'ar' ? 'حدث خطأ ما!' : 'Something went wrong!' }}
    </h1>
    <p class="error-message">
        {{ session('locale') === 'ar' ? 'واجهنا خطأ أثناء تحميل الصفحة. يرجى المحاولة لاحقاً.' : 'We encountered an error while loading the page. Please try again later.' }}
    </p>
    <a href="{{ route('home') }}" class="error-button">
        {{ session('locale') === 'ar' ? 'العودة إلى الصفحة الرئيسية' : 'Go Back to Home' }}
    </a>
</div>
@endsection
