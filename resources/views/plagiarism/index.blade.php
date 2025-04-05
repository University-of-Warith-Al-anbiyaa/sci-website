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

        .conditions-list {
            list-style: none;
            padding: 0;
        }

        .conditions-list li {
            padding: 10px 0;
            border-bottom: 1px solid #eee;
            position: relative;
            padding-right: 25px;
            line-height: 1.6;
            margin-bottom: 12px;
        }

        .conditions-list li:last-child {
            border-bottom: none;
        }

        .conditions-list li:before {
            content: '•';
            color: #3498db;
            position: absolute;
            right: 0;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 20px;
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

        .intro-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #2c3e50;
            margin-bottom: 25px;
            text-align: justify;
        }

        .conditions-section {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .conditions-section h6 {
            color: #2c3e50;
            font-weight: 600;
            margin-bottom: 15px;
            line-height: 1.6;
        }

        @media (max-width: 768px) {
            .form-row {
                grid-template-columns: 1fr;
            }

            .form-wrapper {
                width: 95%;
            }
        }

        /* توحيد تصميم التوست */
        .toast-container {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 9999;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        /* تصميم أساسي لكل التوستات */
        .toast {
            background: #fff;
            border-radius: 8px;
            padding: 15px 20px;
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.15);
            display: flex;
            align-items: center;
            gap: 15px;
            max-width: 400px;
            min-width: 250px;
            animation: slideIn 0.4s ease-out, fadeOut 0.4s ease-in 4s forwards;
            position: relative;
            overflow: hidden;
        }

        /* إضافة خط جانبي يحدد نوع الرسالة */
        .toast.success {
            border-left: 6px solid #28a745;
        }

        .toast.error {
            border-left: 6px solid #dc3545;
        }

        .toast.warning {
            border-left: 6px solid #ff9800;
        }

        .toast.info {
            border-left: 6px solid #007bff;
        }

        /* لون النصوص حسب نوع الرسالة */
        .toast-header {
            font-weight: 600;
            font-size: 1rem;
            margin-bottom: 5px;
        }

        .toast.success .toast-header {
            color: #28a745;
        }

        .toast.error .toast-header {
            color: #dc3545;
        }

        .toast.warning .toast-header {
            color: #ff9800;
        }

        .toast.info .toast-header {
            color: #007bff;
        }

        /* لون النص الداخلي */
        .toast-body {
            color: #444;
            font-size: 0.9rem;
            line-height: 1.4;
        }

        /* زر الإغلاق */
        .toast-close {
            position: absolute;
            top: 10px;
            right: 10px;
            background: none;
            border: none;
            color: #888;
            font-size: 1.2rem;
            cursor: pointer;
            transition: color 0.2s;
        }

        .toast-close:hover {
            color: #333;
        }

        /* تأثير الظهور والانزلاق */
        @keyframes slideIn {
            from {
                transform: translateX(100%);
                opacity: 0;
            }

            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        /* تأثير الاختفاء بعد 4 ثوانٍ */
        @keyframes fadeOut {
            to {
                opacity: 0;
                transform: translateY(-10px);
            }
        }
    </style>

    <div class="form-wrapper">
        <!-- Instructions Section -->
        <div id="instructions" class="form-section">
            <div class="section-header">
                
                <h3><i class="fas fa-info-circle"></i>
                    شروط وتعليمات استمارة استلال بحث

                </h3>
            </div>
            <div class="section-content">
                <p class="intro-text">
                    إن خدمة فحص الاستلال المقدمة من المركز هي خدمة رسمية تخضع لجميع شروط وتعليمات الوزارة وتوجهات الجامعة في
                    ترصين حركة البحث العلمي وضبط إجراءات النشر، ويلتزم المركز بآلية عمل خاصة به لضمان نزاهة وانسيابية العمل
                    والمساواة بين الجميع.
                </p>

                <div class="conditions-section">
                    <h6>فحص الاستلال الالكتروني (Turnitin) للأبحاث والأوراق العلمية ورسائل الماجستير وأطاريح الدكتوراه من
                        خارج جامعة وارث الأنبياء (علية السلام)</h6>
                    <ul class="conditions-list">
                        <li>يتم ارسال الملف المراد عمل استلال الكتروني له (بصيغة وورد) على ان يكون ملف واحد فقط (غير مجزء)
                            وبدون مصادر البحث او الرسالة.</li>
                        <li>في حال وجود صور في الملف المطلوب استلاله يرجى حذفها من قبل الباحث (يتم تسليم ملف الوورد خاليا من
                            الصور).</li>
                        <li>اجور الاستلال الالكتروني تدفع لقسم الحسابات وهي (10 الاف دينار)</li>
                        <li>عند اتمام تقرير الاستلال الالكتروني من قبل المركز (بصيغة pdf) يتم ارساله الى البريد الالكتروني
                            الخاص بطالب الاستلال.</li>
                        <li>يتم ارسال تقرير الاستلال (من قبل اللجنة) الى الباحث المعني (خلال مدة لا تتجاوز ٣ ايام عمل).</li>
                    </ul>
                </div>

                <div class="conditions-section">
                    <h6>فحص الاستلال الالكتروني (Turnitin) للأبحاث والأوراق العلمية ورسائل الماجستير وأطاريح الدكتوراه
                        للتدريسيين والباحثين في جامعة وارث الأنبياء (عليه السلام)</h6>
                    <ul class="conditions-list">
                        <li>يتم ارسال الملف المراد عمل استلال الكتروني له (بصيغة وورد) على ان يكون ملف واحد فقط (غير مجزء) و
                            بدون مصادر البحث او الرسالة.</li>
                        <li>في حال وجود صور في الملف المطلوب استلاله يرجى حذفها من قبل الباحث (يتم تسليم ملف الوورد خاليا من
                            الصور).</li>
                        <li>يكون الاستلال مجاني</li>
                        <li>عند إتمام تقرير الاستلال الالكتروني من قبل المركز (بصيغة pdf) يتم ارساله الى البريد الالكتروني
                            الخاص بطالب الاستلال.</li>
                        <li>يتم ارسال تقرير الاستلال (من قبل اللجنة) الى الباحث المعني (خلال مدة لا تتجاوز ٣ أيام عمل).</li>
                    </ul>
                </div>

                <div class="text-center mt-4">
                    <button class="btn-submit" onclick="showForm()">موافق على التعليمات</button>
                </div>
            </div>
        </div>
        <div class="toast-container" id="toastContainer"></div>
        <!-- Application Form -->
        <div id="submitForm" class="form-section" style="display:none">
            <div class="section-header">
                
                <h3><i class="fas fa-file-alt"></i>
                    استمارة طلب فحص الاستلال

                </h3>
            </div>
            <div class="section-content">
                <button class="btn-submit btn-secondary mb-3" onclick="showInstructions()" style="background: #6c757d; color: white; border: none; border-radius: 8px; padding: 10px 20px; font-weight: 500; transition: all 0.3s ease;">
                    <i class="fas fa-arrow-right"></i> عرض التعليمات
                </button>

                <form action="{{ route('plagiarism.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="action" value="save-plag">

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label required">نوع الانتساب</label>
                            <select name="affiliation" class="form-select" id="affiliationSelect" required>
                                <option value="">-- اختر نوع الانتساب --</option>
                                <option value="uow">جامعة وارث الأنبياء</option>
                                <option value="other">خارج الجامعة</option>
                            </select>
                        </div>

                        <!-- UOW Code Field -->
                        <div class="form-group" id="codeField" style="display:none;">
                            <label class="form-label required">الرمز التعريفي</label>
                            <input type="text" name="code" class="form-control" pattern="[0-9]+"
                                title="الرجاء إدخال أرقام فقط">
                        </div>

                        <!-- External University Selection -->
                        <div class="form-group" id="universityField" style="display:none;">
                            <label class="form-label required">الجامعة</label>
                            <select name="selected_university" class="form-select" id="universitySelect">
                                <option value="">-- اختر الجامعة --</option>
                                @foreach($form_data['universities'] as $uni)
                                    <option value="{{ $uni['name'] }}">{{ $uni['name'] }}</option>
                                @endforeach
                                <option value="other">أخرى</option>
                            </select>
                        </div>

                        <!-- Other University Name Field -->
                        <div class="form-group" id="otherUniField" style="display:none;">
                            <label class="form-label required">اسم الجامعة</label>
                            <input type="text" name="current_uni" class="form-control">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label required">عنوان البحث</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label class="form-label required">الكلية</label>
                            <select name="collage" class="form-select" required>
                                @foreach($form_data['collages'] as $college)
                                    <option value="{{ $college['id'] }}">{{ $college['college'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label required">القسم</label>
                            <select name="department" class="form-select" required>
                                @foreach($form_data['departments'] as $dept)
                                    <option value="{{ $dept['department'] }}">{{ $dept['department'] }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label required">اسم الباحث</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label required">البريد الالكتروني</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label class="form-label required">رقم الهاتف</label>
                            <input type="text" name="phone" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label required">ملف البحث (Word أو PDF)</label>
                            <input type="file" name="doc_file" class="form-control" accept=".doc,.docx,.pdf" required>
                            <small class="text-muted">يمكنك رفع ملف بصيغة DOC أو DOCX أو PDF</small>
                        </div>

                        <div class="form-group">
                            <label class="form-label required">وصل الدفع (صورة)</label>
                            <input type="file" name="receipt_photo" class="form-control" accept=".jpg,.png" required>
                            <small class="text-muted">يمكنك رفع صورة بصيغة JPG أو PNG فقط</small>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="hidden" id="g-recaptcha-response" class="g-recaptcha-response"
                            name="g-recaptcha-response" required>
                        <div class="col-md-12 row justify-content-start px-3 mt-3">
                            <div id="request-submit-recaptcha"></div>
                            <div id="recaptcha-result"></div>
                        </div>
                    </div>
                    <button type="submit" class="btn-submit">
                        <i class="fas fa-paper-plane"></i> إرسال الطلب
                    </button>
                </form>
            </div>
        </div>
    </div>
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

            @if(session('warning'))
                toastr.warning("{{ session('warning') }}");
            @endif

            @if(session('info'))
                toastr.info("{{ session('info') }}");
            @endif
        });
    </script>


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

    <script>
        $(document).ready(function () {
            const affiliationSelect = $('#affiliationSelect');
            const codeField = $('#codeField');
            const universityField = $('#universityField');
            const otherUniField = $('#otherUniField');

            // Always required fields regardless of affiliation
            const commonRequired = ['title', 'college', 'department', 'doc_file'];

            // Fields required for external users
            const externalFields = {
                'name': 'اسم الباحث',
                'email': 'البريد الالكتروني',
                'phone': 'رقم الهاتف',
                'receipt_photo': 'وصل الدفع'
            };

            // Form validation based on affiliation
            $('form').on('submit', function (e) {
                e.preventDefault();
                let isValid = true;
                let errorMessage = '';

                // Validate common required fields first
                for (const field of commonRequired) {
                    if (!$(`[name="${field}"]`).val()) {
                        isValid = false;
                        errorMessage = `الرجاء إدخال ${$(`[name="${field}"]`).closest('.form-group').find('label').text()}`;
                        break;
                    }
                }

                // Get affiliation type
                const isUOW = affiliationSelect.val() === 'uow';

                if (isUOW) {
                    // UOW validation - only requires code
                    const code = $('input[name="code"]').val();
                    if (!code || !/^\d+$/.test(code)) {
                        isValid = false;
                        errorMessage = 'الرجاء إدخال رمز تعريفي صحيح';
                    } else {
                        isValid = true;
                        errorMessage = '';
                    }
                } else {
                    // External user validation
                    const selectedUni = $('#universitySelect').val();

                    if (!selectedUni) {
                        isValid = false;
                        errorMessage = 'الرجاء اختيار الجامعة';
                    } else if (selectedUni === 'other') {
                        // Validate new university name if "other" is selected
                        const newUniName = $('input[name="current_uni"]').val().trim();
                        if (!newUniName) {
                            isValid = false;
                            errorMessage = 'الرجاء إدخال اسم الجامعة';
                        }
                        else {
                            isValid = true;
                            errorMessage = '';
                        }
                    } else {
                            isValid = true;
                            errorMessage = '';
                        }

                    // Only validate external fields if affiliation is not UOW
                    if (isValid) {
                        for (const [field, label] of Object.entries(externalFields)) {
                            const value = $(`[name="${field}"]`).val();
                            if (!value) {
                                isValid = false;
                                errorMessage = `الرجاء إدخال ${label}`;
                                break;
                            } else {
                                isValid = true;
                                errorMessage = '';
                            }
                        }
                    }
                }

                // reCAPTCHA validation
                if (document.getElementById('g-recaptcha-response').value === '') {
                    isValid = false;
                    errorMessage = 'الرجاء التحقق من أنك لست روبوت';
                }

                if (!isValid) {
                    alert(errorMessage);
                    return false;
                } else {
                    isValid = true;
                    errorMessage = '';
                }

                // this.submit();
                $(this).off('submit').submit();
            });

            // Handle field visibility based on affiliation
            affiliationSelect.on('change', function () {
                const isUOW = $(this).val() === 'uow';

                // Reset fields
                codeField.hide().find('input').prop('required', false);
                universityField.hide().find('select').prop('required', false);
                otherUniField.hide().find('input').prop('required', false);

                if (isUOW) {
                    // Show only code field for UOW
                    codeField.show().find('input').prop('required', true);

                    // Hide external fields
                    Object.keys(externalFields).forEach(field => {
                        $(`[name="${field}"]`).prop('required', false).closest('.form-group').hide();
                    });
                } else {
                    // Show university selection and external fields
                    universityField.show().find('select').prop('required', true);

                    // Show and require external fields
                    Object.keys(externalFields).forEach(field => {
                        $(`[name="${field}"]`).prop('required', true).closest('.form-group').show();
                    });
                }
            });

            // Handle university selection
            $('#universitySelect').on('change', function () {
                const isOther = $(this).val() === 'other';
                otherUniField.toggle(isOther).find('input').prop('required', isOther);
            });
        });

        function showForm() {
            document.getElementById('instructions').style.display = 'none';
            document.getElementById('submitForm').style.display = 'block';
        }

        function showInstructions() {
            document.getElementById('instructions').style.display = 'block';
            document.getElementById('submitForm').style.display = 'none';
        }

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
        document.addEventListener('DOMContentLoaded', function () {
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