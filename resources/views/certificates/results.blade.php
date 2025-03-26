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

        .certificate-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .certificate-card .card-body {
            padding: 20px;
        }

        .btn-certificate {
            padding: 8px 20px;
            border-radius: 6px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-certificate:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
    </style>

    <div class="form-wrapper">
        <div class="form-section">
            <div class="section-header">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <i class="fas fa-search"></i>
                        <h3>نتائج البحث</h3>
                    </div>
                    <a href="{{ route('certificates.index') }}" class="btn btn-light">
                        <i class="fas fa-arrow-right"></i> رجوع
                    </a>
                </div>
            </div>
            <div class="section-content">
                @foreach($certificates as $cert)
                    <div class="certificate-card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h5 class="mb-2">اسم المشارك: {{ $cert['name'] }}</h5>
                                    <p class="mb-0">عنوان الدورة: {{ $cert['title'] }}</p>
                                </div>
                                <div class="col-md-4 text-md-end mt-3 mt-md-0">
                                    <a href="{{ route('certificates.download', $cert['id']) }}"
                                        class="btn btn-certificate btn-success me-2">
                                        <i class="fas fa-download"></i> تحميل الشهادة
                                    </a>
                                    <a href="{{ route('certificates.order', $cert['id']) }}"
                                        class="btn btn-certificate btn-info">
                                        <i class="fas fa-file-pdf"></i> الأمر الإداري
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection