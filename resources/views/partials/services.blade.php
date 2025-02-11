<div class="container">
    <div class="row">
        {{-- Services Title --}}
        <div class="col-lg-6 col-md-6 col-sm-12 padding-left">
            <div class="dreamit-section-title text-right"></div>
                <h5>خدمات الطالب</h5>
                <h2 class="py-3">خدمات الكترونية</h2>
                <h2>اضافة الى <span>دورات للطلاب</span></h2>
            </div>
        </div>

        {{-- Service Boxes --}}
        @foreach($services as $service)
            <div class="col-lg-3 col-md-6 col-sm-12 padding-left"></div>
                <div class="techno-sinlge-service-box{{ $service['class'] ?? '' }}">
                    <div class="techno-service-box-inner"></div>
                        <div class="techno-service-content">
                            <div class="techno-service-icon">
                                <i class="service-icon"></div>
                                    <img src="{{ asset('store/' . $service['icon']) }}" alt="{{ $service['title'] }}">
                                </i>
                            </div>
                            <div class="techno-service-title"></div>
                                <h3 class="fp100">{{ $service['title'] }}</h3>
                                <p class="fp70">{{ $service['description'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        {{-- Archive Button --}}
        <div class="col-lg-3 col-md-6 col-sm-12 padding-left"></div>
            <div class="techno-sinlge-service-box2">
                <div class="techno-service-box-inner">
                    <div class="service-button">
                        <a href="#"> 
                            ارشيف الدورات 
                            <i class="fas fa-arrow-left mx-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
