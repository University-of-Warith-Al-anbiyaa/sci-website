@extends('layouts.main')

@section('content')
    <style>
        .techno_nav_manu {
            background: #2c3e50 !important;
            z-index: 444;
            position: relative;
            margin-bottom: -91px;
            border-bottom: 1px solid #807e94;
        }

        .form-wrapper {
            margin: 100px auto 40px;
            width: 80%;
            max-width: 1200px;
        }

        .intro-section {
            background: linear-gradient(135deg, #2c3e50 0%, #3498db 100%);
            padding: 40px;
            border-radius: 20px;
            color: white;
            margin-bottom: 30px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .intro-title {
            font-size: 32px;
            margin-bottom: 15px;
            font-weight: bold;
        }

        .intro-text {
            font-size: 18px;
            opacity: 0.9;
            padding: 30px;
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

        .required::after {
            content: '*';
            color: #e74c3c;
            margin-right: 5px;
        }

        .affiliate-section {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .radio-group {
            display: flex;
            gap: 20px;
            margin: 10px 0;
        }

        .radio-label {
            display: flex;
            align-items: center;
            gap: 5px;
            cursor: pointer;
        }

        .btn-submit {
            background: linear-gradient(135deg, #3498db 0%, #2980b9 100%);
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
            box-shadow: 0 5px 15px rgba(52, 152, 219, 0.3);
        }

        .category-other {
            display: none;
        }

        .category-other.show {
            display: block;
        }

        .price-input {
            display: none;
        }

        .price-input.show {
            display: block;
        }

        .beneficiary-select-wrapper {
            position: relative;
            margin-bottom: 20px;
        }

        .beneficiary-input {
            padding: 15px;
            border-radius: 10px;
            border: 2px solid #e0e6ed;
            background: white;
            min-height: 60px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .beneficiary-input:hover {
            border-color: #3498db;
        }

        .selected-beneficiaries {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-bottom: 10px;
        }

        .beneficiary-tag {
            background: #3498db;
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 8px;
            animation: slidein 0.3s ease;
        }

        @keyframes slidein {
            from {
                transform: translateY(-10px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .beneficiary-tag .remove-btn {
            background: rgba(255, 255, 255, 0.2);
            border: none;
            color: white;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .beneficiary-tag .remove-btn:hover {
            background: rgba(255, 255, 255, 0.4);
            transform: scale(1.1);
        }

        .beneficiary-dropdown {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            margin-top: 5px;
            z-index: 1000;
            max-height: 200px;
            overflow-y: auto;
            display: none;
        }

        .beneficiary-dropdown.show {
            display: block;
            animation: dropdown 0.3s ease;
        }

        @keyframes dropdown {
            from {
                transform: translateY(-10px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .beneficiary-option {
            padding: 12px 15px;
            cursor: pointer;
            transition: all 0.2s ease;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .beneficiary-option:hover {
            background: #f8f9fa;
        }

        .beneficiary-option.selected {
            background: #e8f5fe;
            color: #3498db;
        }

        .beneficiary-option i {
            opacity: 0;
            transition: all 0.2s ease;
        }

        .beneficiary-option.selected i {
            opacity: 1;
            color: #3498db;
        }

        .placeholder {
            color: #999;
            pointer-events: none;
        }

        .conditions-section {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
        }

        .conditions-list {
            list-style: none;
            padding: 0;
        }

        .conditions-list li {
            padding: 10px 0;
            border-bottom: 1px solid #eee;
            position: relative;
            padding-right: 20px;
        }

        .conditions-list li:before {
            content: '•';
            color: #3498db;
            position: absolute;
            right: 0;
        }

        .notification-text {
            margin-top: 15px;
            padding: 10px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            font-size: 0.9rem;
        }

        .deadline-notice {
            background: #fff3cd;
            color: #856404;
            padding: 10px 15px;
            border-radius: 8px;
            margin-top: 20px;
            text-align: center;
        }

        .two-columns {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        @media (max-width: 768px) {
            .two-columns {
                grid-template-columns: 1fr;
            }
        }

        .steps-wrapper {
            display: none;
        }

        .steps-wrapper.active {
            display: block;
            animation: fadeIn 0.5s ease;
        }

        .steps-nav {
            display: flex;
            justify-content: center;
            margin-bottom: 30px;
            gap: 10px;
        }

        .step-btn {
            padding: 10px 20px;
            background: #f8f9fa;
            border: 2px solid #e0e6ed;
            border-radius: 50px;
            color: #2c3e50;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .step-btn.active {
            background: #3498db;
            color: white;
            border-color: #3498db;
        }

        .step-btn.completed {
            background: #2ecc71;
            color: white;
            border-color: #2ecc71;
        }

        .step-title {
            font-size: 24px;
            color: #2c3e50;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #3498db;
        }

        .navigation-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
            gap: 15px;
        }

        .nav-btn {
            padding: 12px 25px;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
            font-weight: 500;
        }

        .prev-btn {
            background: #95a5a6;
            color: white;
        }

        .next-btn {
            background: #3498db;
            color: white;
        }

        .nav-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .step-animation {
            animation: slideIn 0.3s ease-out;
        }

        .field-animation {
            animation: fadeUp 0.4s ease-out;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(30px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .form-progress {
            position: relative;
            display: flex;
            justify-content: space-between;
            margin-bottom: 30px;
            counter-reset: step;
        }

        .progress-step {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background: #f8f9fa;
            border: 2px solid #e0e6ed;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            transition: all 0.3s ease;
        }

        .progress-step::before {
            counter-increment: step;
            content: counter(step);
        }

        .progress-step.active {
            background: #3498db;
            color: white;
            border-color: #3498db;
        }

        .progress-step.completed {
            background: #2ecc71;
            color: white;
            border-color: #2ecc71;
        }

        .progress-step.completed::before {
            content: '✓';
        }

        .progress-line {
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 2px;
            background: #e0e6ed;
            z-index: -1;
            transform: translateY(-50%);
        }

        .progress-line-fill {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            background: #3498db;
            transition: width 0.3s ease;
        }

        .form-section {
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            overflow: hidden;
        }

        .section-header {
            background: linear-gradient(135deg, #2c3e50 0%, #3498db 100%);
            color: white;
            padding: 20px 30px;
            font-size: 1.1rem;
            font-weight: 500;
        }

        .section-content {
            padding: 25px;
            background: #fff;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 20px;
        }

        @media (max-width: 768px) {
            .form-row {
                grid-template-columns: 1fr;
            }
        }

        .select2-container {
            width: 100% !important;
        }

        .select2-container .select2-selection--single,
        .select2-container .select2-selection--multiple {
            height: auto;
            padding: 8px;
            border: 2px solid #e0e6ed;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            background: #3498db;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 20px;
            margin: 4px;
        }

        .select2-container--default .select2-selection__choice__remove {
            color: white;
            margin-right: 5px;
        }

        .select2-container--default .select2-search--dropdown .select2-search__field {
            padding: 8px;
            border: 1px solid #e0e6ed;
            border-radius: 4px;
        }

        .select2-container--default .select2-results__option--highlighted[aria-selected] {
            background-color: #3498db;
        }

        .price-wrapper {
            position: relative;
        }

        .price-wrapper .currency-label {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #666;
            font-size: 14px;
        }

        .price-wrapper input {
            padding-left: 70px;
            /* Space for currency label */
        }

        .beneficiary-chips {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            padding: 10px;
            border: 2px solid #e0e6ed;
            border-radius: 8px;
            min-height: 50px;
        }

        .beneficiary-chip {
            background: #3498db;
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            gap: 8px;
            animation: chipIn 0.3s ease;
        }

        @keyframes chipIn {
            from {
                transform: scale(0.8);
                opacity: 0;
            }

            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        .chip-remove {
            background: rgba(255, 255, 255, 0.2);
            border: none;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .chip-remove:hover {
            background: rgba(255, 255, 255, 0.4);
        }

        .beneficiary-section {
            background: #fff;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .beneficiary-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
            gap: 15px;
            margin-top: 15px;
        }

        .beneficiary-item {
            background: #f8f9fa;
            border: 2px solid #e0e6ed;
            border-radius: 12px;
            padding: 15px;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 10px;
            user-select: none;
        }

        .beneficiary-item:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(52, 152, 219, 0.1);
            border-color: #3498db;
        }

        .beneficiary-item.selected {
            background: #3498db;
            color: white;
            border-color: #3498db;
            animation: selectPulse 0.3s ease;
        }

        .beneficiary-icon {
            width: 24px;
            height: 24px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .beneficiary-item.selected .beneficiary-icon {
            background: rgba(255, 255, 255, 0.3);
        }

        .beneficiary-name {
            font-size: 0.9rem;
            font-weight: 500;
        }

        @keyframes selectPulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }

            100% {
                transform: scale(1);
            }
        }

        .selected-count {
            background: #2ecc71;
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            margin-top: 15px;
        }

        .clear-selections {
            background: #e74c3c;
            color: white;
            border: none;
            padding: 5px 15px;
            border-radius: 20px;
            cursor: pointer;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            margin-right: 10px;
        }

        .clear-selections:hover {
            background: #c0392b;
        }

        .certificate-types {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .certificate-type {
            flex: 1;
            min-width: 120px;
            position: relative;
            cursor: pointer;
        }

        .certificate-type input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0;
        }

        .certificate-label {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 15px;
            background: #f8f9fa;
            border: 2px solid #e0e6ed;
            border-radius: 10px;
            transition: all 0.3s ease;
            text-align: center;
        }

        .certificate-type input:checked+.certificate-label {
            background: #3498db;
            color: white;
            border-color: #3498db;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(52, 152, 219, 0.2);
        }

        .certificate-icon {
            font-size: 24px;
            margin-bottom: 8px;
        }

        .certificate-name {
            font-size: 14px;
            font-weight: 500;
        }

        @keyframes certificateSelect {
            0% {
                transform: scale(0.95);
            }

            50% {
                transform: scale(1.05);
            }

            100% {
                transform: scale(1);
            }
        }

        .certificate-type input:checked+.certificate-label {
            animation: certificateSelect 0.3s ease;
        }

        .is-invalid {
            border-color: #dc3545 !important;
            box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, .25) !important;
        }

        .help-text {
            display: block;
            margin-top: 5px;
            font-size: 0.875rem;
        }

        .api-response,
        .exception-details {
            margin-top: 15px;
            padding: 10px;
            background: rgba(0, 0, 0, 0.05);
            border-radius: 5px;
        }

        .api-response pre,
        .exception-details pre {
            white-space: pre-wrap;
            word-wrap: break-word;
            padding: 10px;
            background: white;
            border-radius: 4px;
            max-height: 300px;
            overflow-y: auto;
        }

        .toast-container {
            position: fixed;
            top: 20px;
            left: 20px;
            z-index: 9999;
        }

        .toast {
            background: white;
            border-right: 4px solid #28a745;
            border-radius: 4px;
            padding: 15px 20px;
            margin-bottom: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            display: flex;
            align-items: flex-start;
            max-width: 350px;
            animation: slideIn 0.3s ease-out;
        }

        .toast-header {
            font-weight: 600;
            color: #28a745;
            margin-bottom: 5px;
        }

        .toast-body {
            color: #666;
            font-size: 0.9rem;
        }

        .toast-details {
            background: #f8f9fa;
            border-radius: 4px;
            padding: 8px;
            margin-top: 8px;
            font-size: 0.8rem;
            max-height: 100px;
            overflow-y: auto;
        }

        @keyframes slideIn {
            from {
                transform: translateX(-100%);
                opacity: 0;
            }

            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes slideOut {
            to {
                transform: translateX(-100%);
                opacity: 0;
            }
        }

        .toast-close {
            background: none;
            border: none;
            color: #999;
            font-size: 1.2rem;
            padding: 0;
            margin-right: 10px;
            cursor: pointer;
            align-self: flex-start;
        }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <div class="form-wrapper">
        <div class="form-section">
            <div class="section-header">
                <i class="fas fa-info-circle"></i>
                <h2>{{ $form_data['name_page'] ?? 'تسجيل دورة جديدة' }}</h2>
            </div>
            <div class="section-content">
                @if(!empty($form_data['notification']))
                    <div class="alert alert-info">{{ $form_data['notification_home'] }}</div>
                @endif


                @if(!empty($form_data['condition']))
                    <div class="conditions-box">
                        <h3> {{ session('locale') === 'ar' ? 'شروط التقديم' : 'Application Conditions' }}:</h3>
                        <ul class="conditions-list">
                            @foreach($form_data['condition'] as $condition)
                                <li>{{ $condition }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

            </div>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                <h4>{{ session('success') }}</h4>
                @if(session('api_message'))
                    <p>{{ session('api_message') }}</p>
                @endif

            </div>
        @endif


        @if(session('error'))
            <div class="alert alert-danger">
                <h4>{{ session('error') }}</h4>
                @if(session('api_message'))
                    <p>{{ session('api_message') }}</p>
                @endif

            </div>
        @endif


        <form action="{{ route('clc_annual_plan.store') }}" method="POST" id="courseForm">
            @csrf
            <input type="hidden" name="action" value="save-course">

            <div class="form-section">
                <div class="section-header">
                    <i class="fas fa-file-alt"></i>
                    <h3> {{ session('locale') === 'ar' ? 'المعلومات الأساسية' : 'Basic Information' }}</h3>
                </div>
                <div class="section-content">
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label required">{{ session('locale') === 'ar' ? 'عنوان الدورة' : 'Course Title' }}</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label required">{{ session('locale') === 'ar' ? 'الانتماء' : 'Affiliate' }}</label>
                            <select name="affiliate" class="form-select" id="affiliateSelect" required>
                                <option value="" selected disabled>--   {{ session('locale') === 'ar' ? 'اختر نوع الانتماء' : 'Select Affiliate Type' }} --</option>
                                <option value="uowa">  {{ session('locale') === 'ar' ? 'جامعة وارث الأنبياء' : 'UOWA University' }}</option>
                                <option value="other">{{ session('locale') === 'ar' ? 'خارج الجامعة' : 'Outside University' }}</option>
                            </select>
                        </div>
                    </div>

                    <div id="externalFields" style="display: none;">
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label required">{{ session('locale') === 'ar' ? 'الجامعة' : 'University' }}</label>
                                <input list="universityOptions" name="university" id="universityInput" class="form-control"
                                    placeholder="{{ session('locale') === 'ar' ? 'اختر أو اكتب الجامعة' : 'Select or type university' }}" required>

                                <datalist id="universityOptions">
                                    @foreach($form_data['universities'] as $university)
                                        <option value="{{ $university['name'] }}"></option>
                                    @endforeach
                                    <option value="other">{{ session('locale') === 'ar' ? 'أخرى' : 'Other' }}</option>
                                </datalist>

                                <div class="form-group">
                                    <input type="checkbox" id="universitySelect" name="other_university_checkbox" value="1">
                                    <label for="universitySelect">{{ session('locale') === 'ar' ? 'اسم جامعة أخرى' : 'Other University Name' }}</label>
                                </div>

                                <div class="form-group" id="otherUniversityField" style="display: none;">
                                    <label class="form-label required">{{ session('locale') === 'ar' ? 'اسم الجامعة' : 'University Name' }}</label>
                                    <input type="text" name="other_university" class="form-control"
                                        placeholder="{{ session('locale') === 'ar' ? 'ادخل اسم الجامعة' : 'Enter University Name' }}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="affiliateFields"></div>
                </div>
            </div>

            <div class="form-section">
                <div class="section-header">
                    <i class="fas fa-book"></i>
                    <h3>{{ session('locale') === 'ar' ? 'تفاصيل الدورة' : 'Course Details' }}</h3>
                </div>
                <div class="section-content">
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label required">{{ session('locale') === 'ar' ? 'التصنيف' : 'Category' }}</label>
                            <select name="category" class="form-control" id="categorySelect" required>
                                @foreach($form_data['category'] as $category)
                                    <option value="{{ $category }}">{{ $category }}</option>
                                @endforeach
                                <option value="other">{{ session('locale') === 'ar' ? 'أخرى' : 'Other' }}</option>
                            </select>
                        </div>

                        <div class="form-group category-other" id="newCategoryDiv" style="display: none;">
                            <label class="form-label required">{{ session('locale') === 'ar' ? 'تصنيف جديد' : 'New Category' }}</label>
                            <input type="text" name="newcate" class="form-control">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label required"> {{ session('locale') === 'ar' ? 'نوع الدورة' : 'Course Type' }}</label>
                            <div class="radio-group">
                                <label class="radio-label">
                                    <input type="radio" name="type" value="free" checked> {{ session('locale') === 'ar' ? 'مجانية' : 'Free' }}
                                </label>
                                <label class="radio-label">
                                    <input type="radio" name="type" value="notfree"> {{ session('locale') === 'ar' ? 'مدفوعة' : 'Paid' }}
                                </label>
                            </div>
                        </div>

                        <div class="form-group price-input" id="priceDiv" style="display: none;">
                            <label class="form-label required">{{ session('locale') === 'ar' ? 'مبلغ الاشتراك' : 'Subscription Amount' }}</label>
                            <div class="price-wrapper">
                                <input type="number" name="price" class="form-control" placeholder="{{ session('locale') === 'ar' ? 'أدخل المبلغ' : 'Enter Amount' }}">
                                <span class="currency-label">د.ع</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label required">{{ session('locale') === 'ar' ? 'المدة (أيام)' : 'Duration (Days)' }}</label>
                            <input type="number" name="duration" class="form-control" required min="3" value="3">
                        </div>

                        <div class="form-group">
                            <label class="form-label required">{{ session('locale') === 'ar' ? 'حالة الخدمة' : 'Service Status' }}</label>
                            <select name="service" class="form-control" required>
                                <option value="yes">{{ session('locale') === 'ar' ? 'نعم' : 'Yes' }}</option>
                                <option value="no">{{ session('locale') === 'ar' ? 'لا' : 'No' }}</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label required">{{ session('locale') === 'ar' ? 'الفئات المستفيدة' : 'Beneficiary Categories' }}</label>
                        <div class="beneficiary-section">
                            <div class="beneficiary-grid">
                                @php
                                    $beneficiaries = [
                                        'الاطباء' => 'user-md',
                                        'المهندسين' => 'hard-hat',
                                        'التدريسيين' => 'chalkboard-teacher',
                                        'الاداريين' => 'user-tie',
                                        'القانونيين' => 'balance-scale',
                                        'التقنيين' => 'tools',
                                        'الخريجين' => 'user-graduate',
                                        'الممرضين' => 'user-nurse',
                                        'الطلبة' => 'user-friends',
                                        'طلبة المرحلة الاولى' => 'user',
                                        'طلبة المرحلة الاخيرة' => 'user-clock',
                                        'رؤساء الاقسام العلمية' => 'users-cog'
                                    ];
                                @endphp

                                @foreach($beneficiaries as $name => $icon)
                                    <div class="beneficiary-item" data-value="{{ $name }}">
                                        <div class="beneficiary-icon">
                                            <i class="fas fa-{{ $icon }}"></i>
                                        </div>
                                        <span class="beneficiary-name">{{ $name }}</span>
                                    </div>
                                @endforeach
                            </div>

                            <div class="beneficiary-controls">
                                <span class="selected-count">
                                    <i class="fas fa-check-circle"></i>
                                    <span id="selectedCount">0</span> {{ session('locale') === 'ar' ? 'فئات محددة' : 'Selected Categories' }}
                                </span>
                                <button type="button" class="clear-selections" id="clearSelections">
                                    <i class="fas fa-times"></i> {{ session('locale') === 'ar' ? 'مسح التحديد' : 'Clear Selections' }}
                                </button>
                            </div>
                        </div>
                        <input type="hidden" name="beneficiary" id="selectedBeneficiaries">
                    </div>

                    <div class="form-group">
                        <label class="form-label required">{{ session('locale') === 'ar' ? 'نوع الشهادة' : 'Certificate Type' }}</label>
                        <div class="certificate-types">
                            <label class="certificate-type">
                                <input type="radio" name="certificate_type" value="مشاركة" required>
                                <div class="certificate-label">
                                    <i class="fas fa-certificate certificate-icon"></i>
                                    <span class="certificate-name">{{ session('locale') === 'ar' ? 'مشاركة' : 'Participation' }}</span>
                                </div>
                            </label>

                            <label class="certificate-type">
                                <input type="radio" name="certificate_type" value="اجتياز" required>
                                <div class="certificate-label">
                                    <i class="fas fa-award certificate-icon"></i>
                                    <span class="certificate-name">{{ session('locale') === 'ar' ? 'اجتياز' : 'Passing' }}</span>
                                </div>
                            </label>

                            <label class="certificate-type">
                                <input type="radio" name="certificate_type" value="تقديرية" required>
                                <div class="certificate-label">
                                    <i class="fas fa-medal certificate-icon"></i>
                                    <span class="certificate-name">{{ session('locale') === 'ar' ? 'تقديرية' : 'Appreciation' }}</span>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <input type="hidden" id="g-recaptcha-response" class="g-recaptcha-response" name="g-recaptcha-response"
                    required>
                <div class="col-md-12 row justify-content-start px-3 mt-3">
                    <div id="request-submit-recaptcha"></div>
                    <div id="recaptcha-result"></div>
                </div>
                <button type="submit" class="btn-submit">
                    <i class="fas fa-save"></i> {{ session('locale') === 'ar' ? 'حفظ' : 'Save' }}
                </button>
            </div>



        </form>
    </div>

    <div class="toast-container" id="toastContainer"></div>

    <script type="text/javascript">
        var grecaptcha;
        var verifyCallback = function (response) {
            // $('#recaptcha-result').html('you are a human');
        };
        var onloadCallback = function () {
            grecaptcha.render('request-submit-recaptcha', {
                'sitekey': '6LfmENIbAAAAABjxTKzUCDf0__juDtp_fCawFrqR',
                'callback': verifyCallback,
                'theme': 'light'
            });
        };
    </script>
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>

    <!-- <script src="https://www.google.com/recaptcha/api.js?render=6Lck-xspAAAAAHmoSr01uz3kcnUpI1i2X16d_Sdj"></script> -->
    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        $(document).ready(function () {
            @if(session('success'))
                toastr.success("{{ session('success') }}");
            @endif
            @if(session('error'))
                toastr.error("{{ session('error') }}");
            @endif
            });
    </script>

    <script>
        $(document).ready(function () {
            const affiliateSelect = $('#affiliateSelect');
            const fieldsContainer = $('#affiliateFields');
            const externalFields = $('#externalFields');
            const universitySelect = $('#universitySelect');
            const otherUniversityField = $('#otherUniversityField');
            const categorySelect = $('#categorySelect');
            const newCategoryField = $('#newCategoryDiv');
            const typeRadios = $('input[name="type"]');
            const priceField = $('#priceDiv');
            const beneficiaryItems = $('.beneficiary-item');
            const selectedBeneficiaries = new Set();
            const selectedInput = $('#selectedBeneficiaries');
            const selectedCountEl = $('#selectedCount');
            const clearBtn = $('#clearSelections');
            

            // Form validation configuration
            const validationRules = {
                requiredFields: {
                    all: ['affiliate', 'title', 'category', 'type', 'service', 'duration', 'beneficiary[]'],
                    external: ['name', 'email', 'phone', 'prof', 'work'],
                    uowa: ['name'], // user code
                    paid: ['price']
                },
                patterns: {
                    email: /^[^\s@]+@[^\s@]+\.[^\s@]+$/,
                    phone: /^[0-9]{10,}$/,
                    userCode: /^[0-9]+$/
                }
            };

            // Handle affiliate change
            affiliateSelect.on('change', function () {
                const isUOWA = $(this).val() === 'uowa';
                fieldsContainer.empty();

                if (isUOWA) {
                    externalFields.hide();
                    universitySelect.prop('required', false);

                    fieldsContainer.html(`
                                    <div class="form-group">
                                        <label class="form-label required">{{ session('locale') === 'ar' ? 'الرمز التعريفي' : 'User Code' }}</label>
                                        <input type="text" name="name" class="form-control" required 
                                               pattern="[0-9]+" title="{{ session('locale') === 'ar' ? 'الرجاء إدخال الرمز التعريفي بشكل صحيح' : 'Please enter a valid user code' }}">
                                    </div>
                                `);
                } else {
                    externalFields.show();
                    universitySelect.prop('required', true);

                    fieldsContainer.html(`
                                    <div class="form-row">
                                        <div class="form-group">
                                            <label class="form-label required">{{ session('locale') === 'ar' ? 'الاسم الكامل' : 'Full Name' }}</label>
                                            <input type="text" name="name" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label required">{{ session('locale') === 'ar' ? 'البريد الإلكتروني' : 'Email' }}</label>
                                            <input type="email" name="email" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group">
                                            <label class="form-label required">{{ session('locale') === 'ar' ? 'رقم الهاتف' : 'Phone Number' }}</label>
                                            <input type="tel" name="phone" class="form-control" required 
                                                   pattern="[0-9]{10,}" title="{{ session('locale') === 'ar' ? 'الرجاء إدخال رقم هاتف صحيح' : 'Please enter a valid phone number' }}">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label required">{{ session('locale') === 'ar' ? 'المهنة' : 'Profession' }}</label>
                                            <input type="text" name="prof" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label required">{{ session('locale') === 'ar' ? 'مكان العمل' : 'Workplace' }}</label>
                                        <input type="text" name="work" class="form-control" required>
                                    </div>
                                `);
                }
            });

            // Handle university selection change
            universitySelect.on('change', function () {
                const selectedValue = $(this).val();
                if (selectedValue === 'other') {
                    otherUniversityField.show();
                    otherUniversityField.find('input').prop('required', true);
                } else {
                    otherUniversityField.hide();
                    otherUniversityField.find('input').prop('required', false);
                }
            });

            // Handle category change
            categorySelect.on('change', function () {
                const isOther = $(this).val() === 'other'; // Ensure the value matches exactly
                alert(isOther);
                if (isOther) {
                    newCategoryField.show().find('input').prop('required', true);
                } else {
                    newCategoryField.hide().find('input').prop('required', false);
                }
            });

            // Handle course type change
            typeRadios.on('change', function () {
                const isPaid = $(this).val() === 'notfree';
                priceField.toggle(isPaid).find('input').prop('required', isPaid);
            });

            // Beneficiary selection handling
            function updateBeneficiarySelection() {
                selectedInput.val(Array.from(selectedBeneficiaries).join(','));
                selectedCountEl.text(selectedBeneficiaries.size);
            }

            beneficiaryItems.on('click', function () {
                const value = $(this).data('value');
                if ($(this).hasClass('selected')) {
                    $(this).removeClass('selected');
                    selectedBeneficiaries.delete(value);
                } else {
                    $(this).addClass('selected');
                    selectedBeneficiaries.add(value);
                }
                updateBeneficiarySelection();
            });

            clearBtn.on('click', function () {
                beneficiaryItems.removeClass('selected');
                selectedBeneficiaries.clear();
                updateBeneficiarySelection();
            });

            // Form submission validation 11111
            $('#courseForm').on('submit', function (e) {
                e.preventDefault();
                let isValid = true;
                let errorMessage = '';

                // Validate required fields based on context
                function validateField(name, value, label) {
                    if (!value || value.length === 0) {
                        isValid = false;
                        errorMessage = ` {{ session('locale') === 'ar' ? 'الرجاء إدخال' : 'Please enter'}} ${label}`;
                        return false;
                    }
                    return true;
                }

                // Validate basic required fields
                validationRules.requiredFields.all.forEach(field => {
                    const value = $(`[name="${field}"]`).val();
                    validateField(field, value, $(`label[for="${field}"]`).text());
                });

                // Additional validation based on affiliate type
                const isUOWA = affiliateSelect.val() === 'uowa';
                if (isUOWA) {
                    // Validate user code
                    const userCode = $('input[name="name"]').val();
                    if (!validationRules.patterns.userCode.test(userCode)) {
                        isValid = false;
                        errorMessage = `{{ session('locale') === 'ar' ? 'الرجاء إدخال رمز تعريفي صحيح' : 'Please enter a valid user code' }}`;
                    } else {
                        isValid = true;
                        errorMessage = '';
                    }
                } else {
                    // Validate external user fields
                    validationRules.requiredFields.external.forEach(field => {
                        const value = $(`input[name="${field}"]`).val();
                        if (!validateField(field, value, $(`label[for="${field}"]`).text())) {
                            return;
                        }

                        // Additional pattern validation
                        if (field === 'email' && !validationRules.patterns.email.test(value)) {
                            isValid = false;
                            errorMessage = `{{ session('locale') === 'ar' ? 'الرجاء إدخال بريد إلكتروني صحيح' : 'Please enter a valid email address' }}`;
                        } else if (field === 'phone' && !validationRules.patterns.phone.test(value)) {
                            isValid = false;
                            errorMessage = `{{ session('locale') === 'ar' ? 'الرجاء إدخال رقم هاتف صحيح' : 'Please enter a valid phone number' }}`;
                        } else {
                            isValid = true;
                            errorMessage = '';
                        }
                    });
                }

                // Category validation
                if (categorySelect.val() === 'other' && !$('input[name="newcate"]').val().trim()) {
                    isValid = false;
                    errorMessage = `{{ session('locale') === 'ar' ? 'الرجاء إدخال التصنيف الجديد' : 'Please enter a new category' }}`;
                }

                // Type and price validation
                if ($('input[name="type"]:checked').val() === 'notfree') {
                    const price = $('input[name="price"]').val();
                    if (!price || price <= 0) {
                        isValid = false;
                        errorMessage = `{{ session('locale') === 'ar' ? 'الرجاء إدخال مبلغ صحيح' : 'Please enter a valid amount' }}`;
                    }
                }

                // Beneficiary validation
                if (selectedBeneficiaries.size === 0) {
                    isValid = false;
                    errorMessage = `{{ session('locale') === 'ar' ? 'الرجاء اختيار الفئات المستفيدة' : 'Please select the beneficiary categories' }}`;
                }

                // reCAPTCHA validation
                if (document.getElementById('g-recaptcha-response').value === '') {
                    isValid = false;
                    errorMessage = `{{ session('locale') === 'ar' ? 'الرجاء التحقق من أنك لست روبوت' : 'Please verify that you are not a robot' }}`;
                }

                if (!isValid) {
                    alert(errorMessage);
                    return false;
                } else {
                    isValid = true;
                    errorMessage = '';
                }

                // Add hidden field for form action
                if (!$('input[name="action"]').length) {
                    $(this).append('<input type="test" name="action" value="save-course">');
                }

                // this.submit();
                $(this).off('submit').submit();

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

        // Replace existing session alerts with toast notifications
        document.addEventListener('DOMContentLoaded', function () {
            @if(session('success'))
                showToast(
                    'success',
                    '{{ session('success') }}',
                    '@if(session('api_message')){{ session('api_message') }}@endif',
                    @if(session('response'))@json(session('response'))@elsenull @endif
                        );
            @endif

            @if(session('error'))
                showToast(
                    'error',
                    '{{ session('error') }}',
                    '@if(session('api_message')){{ session('api_message') }}@endif',
                    @if(session('debug'))@json(session('debug'))@elsenull @endif
                        );
            @endif
            });
    </script>


    <script>
        $(document).ready(function () {
            const universityInput = $('#universityInput');
            const otherUniversityField = $('#otherUniversityField');

            // Handle university selection change
            universityInput.on('input', function () {        //     // Ensure title is required and validated regardless of affiliation
                const selectedValue = $(this).val().trim().toLowerCase();
                if (selectedValue === 'other') {
                    otherUniversityField.show();
                    otherUniversityField.find('input').prop('required', true);'';
                } else {
                    otherUniversityField.hide();        //         // Validate title first
                    otherUniversityField.find('input').prop('required', false);name="title"]').val();
                }
            });
        });الرجاء إدخال عنوان الدورة';
    </script>
@endsection

@push('scripts')
    <script src="store/swiper-bundle.min.js"></script>
        //         // Rest of validation logic
    <!-- Initialize Swiper --> based on context
    <script>
        var swiper = new Swiper(".mySwiper_new", {
            autoplay: {
                delay: 7000الرجاء إدخال ${label}`;
            }
        });
    </script>eturn true;
    <script src="{{ asset('s/jquery-3.2.1.min.js.download') }}"></script>
    <script src="{{ asset('s/jquery.meanmenu.js.download') }}"></script>
    <script src="{{ asset('s/theme.js.download') }}"></script>        //         // Validate basic required fields
l.forEach(field => {
    <script>
        $(window).on('scroll', function () {{field}"]`).text());
            var scrolled = $(window).scrollTop();
            if (scrolled > 300) $('.go-top').addClass('active');
            if (scrolled < 300) $('.go-top').removeClass('active');        //         // Additional validation based on affiliate type
        });

        $('.go-top').on('click', function () {te user code
            $("html, body").animate({nput[name="name"]').val();
                scrollTop: "0"rCode)) {
            }, 1200);
        });الرجاء إدخال رمز تعريفي صحيح';
    </script>
@endpush