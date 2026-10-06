<?php
require_once 'includes/config.php';
// require_once 'controller.php';


// Now $newsData contains the news data or null if an error occurred

$lang = $_SESSION['lang'];
$dir = $_SESSION['dir'];
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>" dir="<?php echo $dir; ?>">
<!-- <html lang="en" dir="ltr"> -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>جامعة وارث الانبياء</title>

    <!-- CSS Files -->
    <link href="s/common-7.5.css" rel="stylesheet">
    <link href="s/style.css" rel="stylesheet">
    <link href="s/newstyle.css" rel="stylesheet">
    <link rel="stylesheet" href="s/swiper-bundle.min.css">
    <link rel="stylesheet" href="styles/language-switcher.css">
    <link rel="stylesheet" href="styles/news-loader.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- JavaScript Files -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="s/jquery.meanmenu.js"></script>
    <script src="s/swiper-bundle.min.js"></script>
    <script src="s/theme.js"></script>
    <!-- <script src="/clc/request.js"></script> -->
</head>

<body>
    <header>
        <div class="scroll-area">
            <div class="top-wrap">
                <div class="go-top-btn-wraper">
                    <div class="go-top go-top-button">
                        <i>
                            <svg width="800px" height="800px" class="mx-1 s-20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">

                                <g id="SVGRepo_bgCarrier" stroke-width="0" />

                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                                <g id="SVGRepo_iconCarrier">
                                    <path d="M12 5V19M12 5L6 11M12 5L18 11" stroke="#fcfcfc" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </g>

                            </svg>
                        </i>
                        <i>
                            <svg width="800px" height="800px" class="mx-1 s-20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">

                                <g id="SVGRepo_bgCarrier" stroke-width="0" />

                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                                <g id="SVGRepo_iconCarrier">
                                    <path d="M12 5V19M12 5L6 11M12 5L18 11" stroke="#fcfcfc" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </g>

                            </svg>
                        </i>
                    </div>
                </div>
            </div>
        </div>

        <div id="sticky-header" class="techno_nav_manu">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2">
                        <div class="logo text-center">
                            <a class="logo_img" href="#" title="techno">
                                <img src="store/logo.svg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <nav class="techno_menu text-center">
                            <ul class="nav_scroll mb-0">
                                <li><a href="/#home">الرئيسية <span>
                                            <i>
                                                <svg width="800px" height="800px" viewBox="0 0 24 24" class="mx-1 s-20"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M5.70711 9.71069C5.31658 10.1012 5.31658 10.7344 5.70711 11.1249L10.5993 16.0123C11.3805 16.7927 12.6463 16.7924 13.4271 16.0117L18.3174 11.1213C18.708 10.7308 18.708 10.0976 18.3174 9.70708C17.9269 9.31655 17.2937 9.31655 16.9032 9.70708L12.7176 13.8927C12.3271 14.2833 11.6939 14.2832 11.3034 13.8927L7.12132 9.71069C6.7308 9.32016 6.09763 9.32016 5.70711 9.71069Z"
                                                        fill="#fcfcfc"></path>
                                                </svg>
                                            </i></span></a>
                                    <ul class="sub-menu">
                                        <li><a href="">الرئيسية1</a></li>
                                        <li><a href="">الرئيسية1</a></li>
                                        <li><a href="">الرئيسية1</a></li>
                                        <li><a href="">الرئيسية1</a></li>
                                        <li><a href="">الرئيسية1</a></li>
                                        <li><a href="">الرئيسية1</a></li>
                                        <li><a href="">الرئيسية1</a></li>
                                        <li><a href="">الرئيسية1</a></li>
                                        <li><a href="">الرئيسية1</a></li>
                                        <li><a href="">الرئيسية1</a></li>
                                    </ul>
                                </li>
                                <li><a href="/#Company">الاخبار والنشاطات <span>
                                            <i>
                                                <svg width="800px" height="800px" viewBox="0 0 24 24" class="mx-1 s-20"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M5.70711 9.71069C5.31658 10.1012 5.31658 10.7344 5.70711 11.1249L10.5993 16.0123C11.3805 16.7927 12.6463 16.7924 13.4271 16.0117L18.3174 11.1213C18.708 10.7308 18.708 10.0976 18.3174 9.70708C17.9269 9.31655 17.2937 9.31655 16.9032 9.70708L12.7176 13.8927C12.3271 14.2833 11.6939 14.2832 11.3034 13.8927L7.12132 9.71069C6.7308 9.32016 6.09763 9.32016 5.70711 9.71069Z"
                                                        fill="#fcfcfc"></path>
                                                </svg>
                                            </i></span></a>
                                    <ul class="sub-menu">
                                        <li><a href="">خبر1</a></li>
                                        <li><a href="|">خبر2</a></li>
                                        <li><a href="">نشاط</a></li>
                                        <li><a href="">خبر3</a></li>
                                        <li><a href="">خبر</a></li>
                                        <li><a href="">خبر</a></li>
                                        <li><a href="">خبر</a></li>
                                    </ul>
                                </li>
                                <li><a href=""> حول المركز <span>
                                            <i>
                                                <svg width="800px" height="800px" viewBox="0 0 24 24" class="mx-1 s-20"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M5.70711 9.71069C5.31658 10.1012 5.31658 10.7344 5.70711 11.1249L10.5993 16.0123C11.3805 16.7927 12.6463 16.7924 13.4271 16.0117L18.3174 11.1213C18.708 10.7308 18.708 10.0976 18.3174 9.70708C17.9269 9.31655 17.2937 9.31655 16.9032 9.70708L12.7176 13.8927C12.3271 14.2833 11.6939 14.2832 11.3034 13.8927L7.12132 9.71069C6.7308 9.32016 6.09763 9.32016 5.70711 9.71069Z"
                                                        fill="#fcfcfc"></path>
                                                </svg>
                                            </i></span></a>
                                    <ul class="sub-menu">
                                        <li><a href="/">الخدمات2</a></li>
                                        <li><a href="">الخدمات3</a></li>
                                    </ul>
                                </li>

                                <li><a href=""> الدورات التدريبية <span>
                                            <i>
                                                <svg width="800px" height="800px" viewBox="0 0 24 24" class="mx-1 s-20"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M5.70711 9.71069C5.31658 10.1012 5.31658 10.7344 5.70711 11.1249L10.5993 16.0123C11.3805 16.7927 12.6463 16.7924 13.4271 16.0117L18.3174 11.1213C18.708 10.7308 18.708 10.0976 18.3174 9.70708C17.9269 9.31655 17.2937 9.31655 16.9032 9.70708L12.7176 13.8927C12.3271 14.2833 11.6939 14.2832 11.3034 13.8927L7.12132 9.71069C6.7308 9.32016 6.09763 9.32016 5.70711 9.71069Z"
                                                        fill="#fcfcfc"></path>
                                                </svg>
                                            </i></span></a>
                                    <ul class="sub-menu">
                                        <li><a href="/">الخدمات2</a></li>
                                        <li><a href="">الخدمات3</a></li>
                                    </ul>
                                </li>
                                <li><a href="">منصة التعليم</a></li>
                                <li><a href=""> الخدمات الالكترونية<span>
                                            <i>
                                                <svg width="800px" height="800px" viewBox="0 0 24 24" class="mx-1 s-20"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M5.70711 9.71069C5.31658 10.1012 5.31658 10.7344 5.70711 11.1249L10.5993 16.0123C11.3805 16.7927 12.6463 16.7924 13.4271 16.0117L18.3174 11.1213C18.708 10.7308 18.708 10.0976 18.3174 9.70708C17.9269 9.31655 17.2937 9.31655 16.9032 9.70708L12.7176 13.8927C12.3271 14.2833 11.6939 14.2832 11.3034 13.8927L7.12132 9.71069C6.7308 9.32016 6.09763 9.32016 5.70711 9.71069Z"
                                                        fill="#fcfcfc"></path>
                                                </svg>
                                            </i></span></a>
                                    <ul class="sub-menu">
                                        <li><a href="/">الخدمات2</a></li>
                                        <li><a href="">الخدمات3</a></li>
                                    </ul>
                                </li>
                                <!-- <li><a href="">منصة التعليم</a></li> -->
                                <!-- <li><a href="">اخبار <span>
											<i>
												<svg width="800px" height="800px" viewBox="0 0 24 24" class="mx-1 s-20"
													fill="none" xmlns="http://www.w3.org/2000/svg">
													<path
														d="M5.70711 9.71069C5.31658 10.1012 5.31658 10.7344 5.70711 11.1249L10.5993 16.0123C11.3805 16.7927 12.6463 16.7924 13.4271 16.0117L18.3174 11.1213C18.708 10.7308 18.708 10.0976 18.3174 9.70708C17.9269 9.31655 17.2937 9.31655 16.9032 9.70708L12.7176 13.8927C12.3271 14.2833 11.6939 14.2832 11.3034 13.8927L7.12132 9.71069C6.7308 9.32016 6.09763 9.32016 5.70711 9.71069Z"
														fill="#fcfcfc"></path>
												</svg>
											</i></span></a>
									<ul class="sub-menu">
										<li><a href="/"> اخبار1</a></li>
										<li><a href="/">اخبار2 </a></li>
										<li><a href="">اخبار 3 </a></li>
										<li><a href="">اخبار </a></li>
									</ul>
								</li> -->
                                <!-- <li><a href=""> روابط <span>
											<i>
												<svg width="800px" height="800px" viewBox="0 0 24 24" class="mx-1 s-20"
													fill="none" xmlns="http://www.w3.org/2000/svg">
													<path
														d="M5.70711 9.71069C5.31658 10.1012 5.31658 10.7344 5.70711 11.1249L10.5993 16.0123C11.3805 16.7927 12.6463 16.7924 13.4271 16.0117L18.3174 11.1213C18.708 10.7308 18.708 10.0976 18.3174 9.70708C17.9269 9.31655 17.2937 9.31655 16.9032 9.70708L12.7176 13.8927C12.3271 14.2833 11.6939 14.2832 11.3034 13.8927L7.12132 9.71069C6.7308 9.32016 6.09763 9.32016 5.70711 9.71069Z"
														fill="#fcfcfc"></path>
												</svg>
											</i>
										</span></a>
									<ul class="sub-menu">
										<li><a href="/">روابط سريعة</a></li>
										<li><a href="/"> روابط 3</a></li>
									</ul>
								</li> -->
                                <li><a href="/">اتصل بنا</a></li>
                            </ul>

                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- techno Mobile Menu Area -->
        <div class="mobile-menu-area d-sm-block d-md-block d-lg-none ">
            <div class="mobile-menu">
                <nav class="techno_menu" style="display: block;">
                    <ul class="nav_scroll">
                        <li><a href="/#home">الرئيسية <span><i class=""></i></span></a>
                            <ul class="sub-menu">
                                <li><a href="/">فرع 1</a></li>
                                <li><a href="/">فرع 2</a></li>
                                <li><a href="/">فرع 3</a></li>
                                <li><a href="">فرع 4</a></li>
                                <li><a href="">فرع 5</a></li>
                                <li><a href=""> فرع 6</a></li>
                                <li><a href="">فرع 7</a></li>
                                <li><a href="">فرع 8</a></li>
                                <li><a href="">فرع 9</a></li>
                            </ul>
                        </li>
                        <li><a href="/#Company">الاخبار والنشاطات <span><i class=""></i></span></a>
                            <ul class="sub-menu">
                                <li><a href="/">نشاط1 &amp; ونشاط2</a></li>
                                <li><a href="">نشاط3 </a></li>
                                <li><a href="/">نشاط4</a></li>
                                <li><a href="/"> نشاط5</a></li>
                                <li><a href="/"> نشاط5</a></li>
                                <li><a href="/">نشاط5</a></li>
                            </ul>
                        </li>
                        <li><a href="">الدورات التدريبية <span><i class=""></i></span></a>
                            <ul class="sub-menu">
                                <li><a href="/">دورات</a></li>
                                <li><a href="/"> دورات</a></li>
                            </ul>
                        </li>
                        <li><a href="">حول المركز </a></li>
                        <li><a href="/#blog">الخمدمات الالكترونية <span><i class=""></i></span></a>
                            <ul class="sub-menu">
                                <li><a href="/">خدمات 1 </a></li>
                                <li><a href="/">خدمات2</a></li>
                                <li><a href="/">خدمات3</a></li>
                                <li><a href="/">خدمات 4 </a></li>
                            </ul>
                        </li>
                        <li><a href="/#about">منصة التعليم <span><i class=""></i></span></a>
                            <ul class="sub-menu">
                                <li><a href="/about.html">منصة 1</a></li>
                                <li><a href="/about-two.html"> منصة 2</a></li>
                            </ul>
                        </li>
                        <li><a href="">اتصل بنا</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="swiper mySwiper_new">
            <div class="swiper-wrapper">
                <div class="swiper-slide slider-area align-items-center d-flex">
                    <div class="container">
                        <div class="row d-flex align-items-center slider position-relative">
                            <div class="col-lg-7 col-md-6 col-sm-12">
                                <div class="slider-content text-right mb-4">
                                    <h4> // مركز التعليم المستمر </h4>

                                    <h1 class="fp160">وزير التعليم يوجه بمنح شكر وتقدير لحاصلي براءات اختراع دولية</h1>
                                    <p>وجه الدكتور نعيم العبودي، وزير التعليم العالي والبحث العلمي، بمنح كتاب شكر وتقدير
                                        لمنتسبي وزارته الذين حققوا براءات اختراع دولية مميزة.</p>
                                    <div class="slider-button">
                                        <a href="/#"> قسم الاخبار <i class="">
                                                <svg width="800px" height="800px" class="mx-1 s-20 slider-link-hover"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">

                                                    <g id="SVGRepo_bgCarrier" stroke-width="0" />

                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                        stroke-linejoin="round" />

                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M6 12H18M18 12L13 7M18 12L13 17" stroke=""
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </g>

                                                </svg>
                                            </i>
                                        </a>
                                        <a class="slider-button3" href="/#"> المزيد <i>
                                                <svg width="800px" style="transform: rotate(180deg);" height="800px"
                                                    class="mx-1 s-20" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">

                                                    <g id="SVGRepo_bgCarrier" stroke-width="0" />

                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                        stroke-linejoin="round" />

                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M6 12H18M18 12L13 7M18 12L13 17" stroke="#000000"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </g>

                                                </svg>
                                            </i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-6 col-sm-12">
                                <div class="dreamit-slider-thumb-1">
                                    <img class="w-100" src="store/img15.jpg" alt="#">
                                </div>
                            </div>

                            <div class="slider-socail-icon">
                                <a href="/#"><i><img class="s-20" src="./store/facebook.svg" alt=""></i></a>
                                <a href="/#"><i><img class="s-20" src="./store/insta.svg" alt=""></i></a>
                                <a href="/#"><i><img class="s-20" src="./store/twitter.svg" alt=""></i></a>
                                <a href="/#"><i><img class="s-20" src="./store/youtube.svg" alt=""></i></a>
                                <span class="follow-us">تابعنا على :</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide slider-area align-items-center d-flex">
                    <div class="container">
                        <div class="row d-flex align-items-center slider position-relative">
                            <div class="col-lg-7 col-md-6 col-sm-12">
                                <div class="slider-content text-right mb-4">
                                    <h4> // مركز التعليم المستمر </h4>
                                    <h1 class="fp200">تكريم طالبات جامعة وارث الأنبياء بحضور ممثل المرجعية الدينية
                                        العليا
                                    </h1>
                                    <p>
                                        أقامت شعبة الإعلام النسوي في العتبة الحسينية المقدسة حفل تكريم (الطالبة المثال
                                        في الجامعات العراقية)، حيث تم تكريم الطالبات المتميزات من جامعة وارث الأنبياء
                                        (عليه السلام)
                                    </p>
                                    <div class="slider-button">
                                        <a href="/#"> قسم الاخبار <i class="">
                                                <svg width="800px" height="800px" class="mx-1 s-20 slider-link-hover"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">

                                                    <g id="SVGRepo_bgCarrier" stroke-width="0" />

                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                        stroke-linejoin="round" />

                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M6 12H18M18 12L13 7M18 12L13 17" stroke=""
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </g>

                                                </svg>
                                            </i>
                                        </a>
                                        <a class="slider-button3" href="/#"> المزيد <i>
                                                <svg width="800px" style="transform: rotate(180deg);" height="800px"
                                                    class="mx-1 s-20" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">

                                                    <g id="SVGRepo_bgCarrier" stroke-width="0" />

                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                        stroke-linejoin="round" />

                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M6 12H18M18 12L13 7M18 12L13 17" stroke="#000000"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </g>

                                                </svg>
                                            </i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-6 col-sm-12">
                                <div class="dreamit-slider-thumb-1">
                                    <img class="w-100" src="store/img22.jpg" alt="">
                                </div>
                            </div>

                            <div class="slider-socail-icon">
                                <a href="/#"><i><img class="s-20" src="./store/facebook.svg" alt=""></i></a>
                                <a href="/#"><i><img class="s-20" src="./store/insta.svg" alt=""></i></a>
                                <a href="/#"><i><img class="s-20" src="./store/twitter.svg" alt=""></i></a>
                                <a href="/#"><i><img class="s-20" src="./store/youtube.svg" alt=""></i></a>
                                <span class="follow-us">تابعنا على :</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>

    <div class="service-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 padding-left">
                    <div class="dreamit-section-title text-right">
                        <h5> خدمات الطالب</h5>
                        <h2 class="py-3">خدمات الكترونية</h2>
                        <h2>اضافة الى <span> دورات للطلاب </span></h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 padding-left">
                    <div class="techno-sinlge-service-box">
                        <div class="techno-service-box-inner">
                            <div class="techno-service-content">
                                <div class="techno-service-icon">
                                    <i class="service-icon">
                                        <img src="./store/plan.svg" alt="">
                                    </i>
                                </div>
                                <div class="techno-service-title">
                                    <h3 class="fp100"> الخطة السنوية </h3>
                                    <p class="fp70">
                                        جميع الدورات التدريبية المقرر إنجازها ضمن الخطة السنوية للكليات وأقسام رئاسة
                                        الجامعة للعام الدراسي الحالي.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 padding-left">
                    <div class="techno-sinlge-service-box-1">
                        <div class="techno-service-box-inner">
                            <div class="techno-service-content">
                                <div class="techno-service-icon">
                                    <i class="service-icon">
                                        <img src="./store/training.svg" alt="">
                                    </i>
                                </div>
                                <div class="techno-service-title">
                                    <h3 class="fp100"> البرامج التدريبية للمركز</h3>
                                    <p class="fp70">
                                        مجموعة من البرامج والدورات التدريبية والتطويرية والتي بالإمكان تقديمها من قبل
                                        مركز التعليم المستمر ضمن مجموعة من الاختصاصات المتنوعة
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 padding-left">
                    <div class="techno-sinlge-service-box active">
                        <div class="techno-service-box-inner">
                            <div class="techno-service-content">
                                <div class="techno-service-icon">
                                    <i class="service-icon">
                                        <img src="./store/research.svg" alt="">
                                    </i>
                                </div>
                                <div class="techno-service-title">
                                    <h3 class="fp100"> الاستلال </h3>
                                    <p class="fp70">
                                        خدمة فحص استلال البحوث والأوراق العلمية والرسائل والأطاريح من خلال برنامج
                                        .(Turnitin) </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 padding-left">
                    <div class="techno-sinlge-service-box">
                        <div class="techno-service-box-inner">
                            <div class="techno-service-content">
                                <div class="techno-service-icon">
                                    <i class="service-icon">
                                        <img src="./store/calendar.svg" alt="">
                                    </i>
                                </div>
                                <div class="techno-service-title">
                                    <h3 class="fp100"> الجدول الالكتروني
                                    </h3>
                                    <p class="fp70">
                                        يتضمن جدول الدروس الأسبوعية، الامتحانات الشهرية، الامتحانات النهائية لجميع كليات
                                        الجامعة.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 padding-left">
                    <div class="techno-sinlge-service-box-1">
                        <div class="techno-service-box-inner">
                            <div class="techno-service-content">
                                <div class="techno-service-icon">
                                    <i class="service-icon">
                                        <img src="./store/e-learning.svg" alt="">
                                    </i>
                                </div>
                                <div class="techno-service-title">
                                    <h3 class="fp100"> منصة التعليم الالكتروني
                                    </h3>
                                    <p class="fp70">
                                        منصة إلكترونية تدعم وتسهم في تطوير وتسهيل كفاءة التعليم الإلكتروني في الجامعة
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 padding-left">
                    <div class="techno-sinlge-service-box2">
                        <div class="techno-service-box-inner">
                            <div class="service-button">
                                <a href="/#"> ارشيف الدورات <i>
                                        <svg style="transform: rotate(180deg);" width="800px" height="800px"
                                            class="mx-1 s-20" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">

                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>

                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                stroke-linejoin="round"></g>

                                            <g id="SVGRepo_iconCarrier">
                                                <path d="M6 12H18M18 12L13 7M18 12L13 17" stroke="#000000"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                            </g>

                                        </svg>
                                    </i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="blog_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div class="dreamit-section-title text-center style-two position-relative">
                        <h5><?php echo $lang === 'ar' ? 'اخر الاخبار' : 'Latest News'; ?></h5>
                        <h1 class="py-3"><?php echo $lang === 'ar' ? 'الاخبار والنشاطات' : 'News & Activities'; ?></h1>
                    </div>
                </div>
            </div>
            <div class="row news-container">
                <!-- سيتم تحميل الأخبار هنا -->
                <div class="col-12 text-center news-loading">جاري تحميل الأخبار...</div>
            </div>
            <?php
			if (!empty($_SESSION['newsdata'])) {
				$newsData = $_SESSION['newsdata'];
			} else {
				$newsData = []; // Set to an empty array if 'newsdata' is not set
			}
			?>
            <div class="row news-container ">
                <?php if (!empty($newsData['data'])): ?>
                <?php foreach (array_slice($newsData['data'], 0, 3) as $newsItem): ?>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single_blog">
                        <div class="single_blog_thumb">
                            <a href="detail.php?id=<?= urlencode($newsItem['id']) ?>">
                                <img src="<?= !empty($newsItem['photo']) ? "https://uowa.edu.iq/store/filestorage/file_" . $newsItem['photo'] : 'store/default-news.jpg' ?>"
                                    alt="<?= htmlspecialchars($newsItem['arttitle']) ?>">
                            </a>
                        </div>
                        <div class="single_blog_content">
                            <div class="post-categories">
                                <i class="far fa-calendar-alt"></i>
                                <?= date('F j, Y', strtotime($newsItem['created'])) ?>
                            </div>
                            <div class="blog_page_title">
                                <h4>
                                    <a href="detail.php?id=<?= urlencode($newsItem['id']) ?>">
                                        <?= htmlspecialchars(mb_substr(strip_tags($newsItem['arttitle']), 0, 50, 'UTF-8')) . '...' ?>
                                    </a>
                                </h4>

                            </div>
                            <div class="blog_button">
                                <a href="detail.php?id=<?= urlencode($newsItem['id']) ?>" class="read-more"
                                    onclick='showNewsDetails(<?= json_encode($newsItem, JSON_HEX_APOS | JSON_HEX_QUOT | JSON_UNESCAPED_UNICODE) ?>)'>
                                    <i class="fas fa-arrow-left"></i> اقرأ المزيد
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <?php else: ?>
                <div class="col-12 text-center">لا توجد أخبار متاحة</div>
                <?php endif; ?>
            </div>

        </div>
    </div>

    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 p-0" style="z-index: 1;">
                <div class="w-100 size-img-dean" style="background-image:url(./store/dean2.jpeg);
				 ">

                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 p-0">
                <div class="row bg-dean">
                    <div class="text-center position-relative comment-dean">
                        <div class="d-flex align-items-center">
                            <div class="d-flex justify-content-center align-items-center main-text-dean">
                                <div>
                                    <img src="./store/quote-right.svg" alt="">
                                </div>
                            </div>
                            <div class="d-flex align-items-center bg-text-dean">
                                <span class="fp60 px-2">عميد كلية الطب</span>
                                <span> - </span>
                                <span class="fp90 px-2"> علي عبد سعدون عبيد </span>
                            </div>
                        </div>
                        <p>
                            قال راعي مسيرة الإنسانية امامنا الحسين عليه السلام "اعلموا ان حوائج الناس اليكم من نعم الله
                            عليكم فلا تملوا النعم فتتحول الى غيركم " اقصر طريق الى الجنة وابعدها ايضا عنها هي الخدمة
                            الطبية. ...
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-middle">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="widget-widgets-company-info white">
                        <div class="techno-logo d-flex justify-content-center">
                            <a class="logo_img" href="#/index.html" title="techno">
                                <img src="./store/logo-footer.svg" alt="" style="width: 200px;">
                            </a>
                        </div>
                        <div class="company-info-desc">
                            <p>
                                مؤسسة تعليمية عراقية تقع في مدينة كربلاء المقدسة تأسست بهدف تقديم تعليم عالي الجودة
                                والتمسك بالتراث الديني
                            </p>
                        </div>
                        <div class="company_icon text-center">
                            <a href="#"><i>
                                    <img class="s-20 mb-1" src="./store/facebook.svg" alt="">
                                </i></a>
                            <a href="#"><i>
                                    <img class="s-20 mb-1" src="./store/insta.svg" alt="">
                                </i></a>
                            <a href="#"><i>
                                    <img class="s-20 mb-1" src="./store/twitter.svg" alt="">
                                </i></a>
                            <a href="#"><i>
                                    <img class="s-20 mb-1" src="./store/youtube.svg" alt="">
                                </i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-6">
                    <div class="widget widget-nav-menu">
                        <h4 class="widget-title pt-4 pt-sm-0"><span>عناوين </span>الموقع</h4>
                        <div class="menu-quick-link-content">
                            <ul class="menu">
                                <li><a href="#"> الرئيسية </a></li>
                                <li><a href="#"> اخبار الجامعة </a></li>
                                <li><a href="#"> تسجيل الدخول </a></li>
                                <li><a href="#">التعليم المستمر </a></li>
                                <li><a href="#"> معرض الصور </a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="widget-footer-title">
                        <h4 class="widget-title  pt-4 pt-sm-0"><span>روابط</span> سريعة </h4>
                    </div>
                    <div class="footer-recent-post">
                        <ul class="menu">
                            <li><a href="#"> التعليم الالكتروني </a></li>
                            <li><a href="#"> التعليم الجامعي </a></li>
                            <li><a href="#"> اخبار الموقع </a></li>
                            <li><a href="#"> خدمات الطالب </a></li>
                            <li><a href="#"> التعليم الالكتروني </a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-8">
                    <div id="footer-widget-address" class="d-flex flex-column">
                        <h4 class="widget-title"><span>اتصل </span>بنا</h4>
                        <div class="footer-inner">
                            <div class="footer-socail-icon">
                                <i>
                                    <img src="./store/phone.svg" class="s-20" alt="">
                                </i>
                            </div>
                            <div class="footer-socail-info">
                                <p>
                                    <span>0772647382</span>
                                </p>
                            </div>
                        </div>
                        <div class="footer-inner">
                            <div class="footer-socail-icon">
                                <i>
                                    <img src="./store/email.svg" class="s-20" alt="">
                                </i>
                            </div>
                            <div class="footer-socail-info">
                                <p>uowa@gmail.com</p>
                            </div>
                        </div>
                        <div class="footer-inner">
                            <div class="footer-socail-icon">
                                <i>
                                    <img src="./store/location.svg" class="s-20" alt="">
                                </i>
                            </div>
                            <div class="footer-socail-info2">
                                <p class="fp60"> كربلاء طريق بغداد - عمود 11 </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row footer-bottom">

                <div class="col-lg-2 col-md-2 d-lg-block d-md-block d-none">
                    <div class="footer-bottom-menu">
                        <p class="fp80 m-0">
                            <a class="text-white" href="#">الرئيسية</a>
                            <span> - </span>
                            <a class="text-white" href="#">الاخبار</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10 col-12">
                    <div class="footer-bottom-content">
                        <div class="footer-bottom-content-copy">
                            <p class="fp80 m-0">
                                Privacy Policy / @ <span> al warith website </span> - cmsmasters © 2024 / All Rights
                                Reserved
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Swiper JS -->
    <script src="store/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper(".mySwiper_new", {
        autoplay: {
            delay: 7000
        }
    });
    </script>
    <script src="s/jquery-3.2.1.min.js.download"></script>
    <script src="s/jquery.meanmenu.js.download"></script>
    <script src="s/theme.js.download"></script>
    <script src="/clc/request.js"></script>
    <script>
    $(window).on('scroll', function() {
        var scrolled = $(window).scrollTop();
        if (scrolled > 300) $('.go-top').addClass('active');
        if (scrolled < 300) $('.go-top').removeClass('active');
    });

    $('.go-top').on('click', function() {
        $("html, body").animate({
            scrollTop: "0"
        }, 1200);
    });
    </script>


    <script>
    document.querySelectorAll('.lang-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const lang = this.dataset.lang;

            fetch('switch_language.php', {
                    method: 'POST',
                    body: JSON.stringify({
                        lang: lang
                    }),
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
    </script>

    <button class="lang-switch" onclick="switchLanguage('<?php echo $lang === 'ar' ? 'en' : 'ar'; ?>')">
        <i class="fas fa-globe"></i>
        <span><?php echo $lang === 'ar' ? 'English' : 'العربية'; ?></span>
    </button>

    <script>
    function switchLanguage(lang) {
        fetch('switch_language.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    lang: lang
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    document.documentElement.dir = data.dir;
                    document.documentElement.lang = data.lang;
                    location.reload();
                }
            })
            .catch(error => console.error('Error:', error));
    }

    document.addEventListener('DOMContentLoaded', function() {
        const currentLang = document.documentElement.lang;
        document.querySelectorAll('.language-toggle button').forEach(btn => {
            btn.classList.remove('active');
            if (btn.onclick.toString().includes(currentLang)) {
                btn.classList.add('active');
            }
        });
    });

    // $(document).ready(function () {
    // 	// Define categories and their descriptions
    // 	const CATEGORIES = {
    // 		news: "الأخبار والنشاطات",
    // 		about_department: "عن المركز",
    // 		dep_structure: "هيكلية القسم",
    // 		department_vision: "رؤية ورسالة وأهداف المركز",
    // 		dep_speech: "كلمة رئيس القسم"
    // 	};

    // 	// Fetch data for a specific category from the internal controller
    // 	function fetchCategoryData(category, page = 1) {
    // 		const settings = {
    // 			url: "controller.php",
    // 			method: "POST",
    // 			timeout: 0,
    // 			headers: {
    // 				"Authorization": "Bearer 1551d88e36f2d38f6d750c26cb3c696cad5cd1809fdcfd9efd6f3698996cadb1",
    // 				"Content-Type": "application/json"
    // 			},
    // 			data: JSON.stringify({
    // 				dep_id: 5,
    // 				category: category,
    // 				page: page
    // 			})
    // 		};

    // 		$.ajax(settings)
    // 			.done(function (response) {
    // 				console.log(`Data fetched for category ${category}:`, response);
    // 				updateUIForCategory(category, response);
    // 			})
    // 			.fail(function (jqXHR, textStatus) {
    // 				console.error(`Failed to fetch ${category} data:`, textStatus);
    // 				showErrorMessage(category);
    // 			});
    // 	}

    // 	// Fetch external news data from an external API
    // 	function fetchExternalNewsData() {
    // 		var settings = {
    // 			url: "https://uowa.edu.iq/arabic/api/unidep-news?category=news&dep_id=5",
    // 			method: "GET",
    // 			timeout: 0,
    // 			headers: {
    // 				"Authorization": "Bearer 1551d88e36f2d38f6d750c26cb3c696cad5cd1809fdcfd9efd6f3698996cadb1",
    // 				"Cookie": "PHPSESSID=81no1ufqnoqbbgavo25jcn67cp"
    // 			}
    // 		};

    // 		$.ajax(settings).done(function (response) {
    // 			console.log("External news data fetched: ", response);
    // 			updateNewsSection(response);  // Update news section with external data
    // 		}).fail(function (jqXHR, textStatus) {
    // 			console.error("Failed to fetch external news data: ", textStatus);
    // 			showErrorMessage('news');
    // 		});
    // 	}

    // 	// Update UI based on category data
    // 	function updateUIForCategory(category, data) {
    // 		switch (category) {
    // 			case 'news':
    // 				updateNewsSection(data);
    // 				break;
    // 			case 'about_department':
    // 				updateAboutSection(data);
    // 				break;
    // 			case 'dep_structure':
    // 				updateStructureSection(data);
    // 				break;
    // 			case 'department_vision':
    // 				updateVisionSection(data);
    // 				break;
    // 			case 'dep_speech':
    // 				updateSpeechSection(data);
    // 				break;
    // 		}
    // 	}

    // 	// Define update functions for each section based on fetched data
    // 	// Example: Update news section
    // 	function updateNewsSection(data) {
    // 		const newsContainer = $('.news-container');
    // 		if (data.status === 'success' && data.data) {
    // 			newsContainer.empty();
    // 			data.data.forEach(item => {
    // 				const newsHtml = `
    // 			<div class="news-item" dir="ltr">
    // 				<h3>${item.title}</h3>
    // 				<p>${item.description}</p>
    // 				<span class="date">${item.date}</span>
    // 			</div>
    // 		`;
    // 				newsContainer.append(newsHtml);
    // 			});
    // 		} else {
    // 			newsContainer.html('<p>Error loading news. Please try again later.</p>');
    // 		}
    // 	}

    // 	// Additional update functions for other sections can be defined similarly

    // 	// Handle navigation menu clicks
    // 	$('.nav_scroll a').on('click', function (e) {
    // 		const category = $(this).data('category');
    // 		if (category && CATEGORIES.hasOwnProperty(category)) {
    // 			e.preventDefault();
    // 			if (category === 'news') {
    // 				fetchExternalNewsData();  // Fetch external data for news
    // 			} else {
    // 				fetchCategoryData(category);  // Fetch other categories normally
    // 			}
    // 		}
    // 	});

    // 	// Initially load default category data (news)
    // 	fetchExternalNewsData('news');
    // 	processDataByCategory(fetchExternalNewsData('news'))  // Now using external data for initial load
    // });

    // $(document).ready(function () {
    // 	const CATEGORIES = {
    // 		news: "الأخبار والنشاطات",
    // 		about_department: "عن المركز",
    // 		dep_structure: "هيكلية القسم",
    // 		department_vision: "رؤية ورسالة وأهداف المركز",
    // 		dep_speech: "كلمة رئيس القسم"
    // 	};

    // 	function fetchCategoryData(category, page = 1) {
    // 		$.ajax({
    // 			url: "controller.php",
    // 			method: "POST",
    // 			contentType: "application/json",
    // 			data: JSON.stringify({ dep_id: 5, category: category, page: page }),
    // 			success: function (response) {
    // 				console.log(`Data fetched for category ${category}:`, response);
    // 				updateUIForCategory(category, response);
    // 			},
    // 			error: function (jqXHR, textStatus) {
    // 				console.error(`Failed to fetch ${category} data:`, textStatus);
    // 				showErrorMessage(category);
    // 			}
    // 		});
    // 	}

    // 	function fetchExternalNewsData() {
    // 		$.ajax({
    // 			url: "https://uowa.edu.iq/arabic/api/unidep-news?category=news&dep_id=5",
    // 			method: "GET",
    // 			headers: {
    // 				"Authorization": "Bearer 1551d88e36f2d38f6d750c26cb3c696cad5cd1809fdcfd9efd6f3698996cadb1",
    // 				"Cookie": "PHPSESSID=81no1ufqnoqbbgavo25jcn67cp"
    // 			},
    // 			success: function (response) {
    // 				console.log("External news data fetched: ", response);
    // 				updateNewsSection(response);
    // 			},
    // 			error: function (jqXHR, textStatus) {
    // 				console.error("Failed to fetch external news data: ", textStatus);
    // 				showErrorMessage('news');
    // 			}
    // 		});
    // 	}

    // 	function updateUIForCategory(category, data) {
    // 		switch (category) {
    // 			case 'news':
    // 				updateNewsSection(data); break;
    // 			case 'about_department':
    // 				updateAboutSection(data); break;
    // 			case 'dep_structure':
    // 				updateStructureSection(data); break;
    // 			case 'department_vision':
    // 				updateVisionSection(data); break;
    // 			case 'dep_speech':
    // 				updateSpeechSection(data); break;
    // 		}
    // 	}

    // 	$('.nav_scroll a').on('click', function (e) {
    // 		const category = $(this).data('category');
    // 		if (category && CATEGORIES.hasOwnProperty(category)) {
    // 			e.preventDefault();
    // 			if (category === 'news') {
    // 				fetchExternalNewsData();
    // 			} else {
    // 				fetchCategoryData(category);
    // 			}
    // 		}
    // 	});

    // 	fetchExternalNewsData();  // Load default category data (news) on initial page load
    // });

    $(document).ready(function() {
        console.log('Document ready!');
        // تكوين المتغير العام للفئات
        const CATEGORIES = {
            news: {
                id: 'news',
                title: 'الاخبار و النشاطات',
                url: 'https://uowa.edu.iq/arabic/api/unidep-news?category=news&dep_id=5'
            },
            about_department: {
                id: 'about-department',
                title: 'عن المركز',
                url: 'https://uowa.edu.iq/arabic/api/unidep-about?dep_id=5'
            },
            dep_structure: {
                id: 'dep-structure',
                title: 'هيكلية القسم',
                url: 'https://uowa.edu.iq/arabic/api/unidep-structure?dep_id=5'
            },
            department_vision: {
                id: 'department-vision',
                title: 'رؤية ورسالة وأهداف المركز',
                url: 'https://uowa.edu.iq/arabic/api/unidep-vision?dep_id=5'
            },
            dep_speech: {
                id: 'dep-speech',
                title: 'كلمة رئيس القسم',
                url: 'https://uowa.edu.iq/arabic/api/unidep-speech?dep_id=5'
            }
        };

        // دالة جلب البيانات
        // function fetchData(category) {
        // 	const config = CATEGORIES[category];
        // 	if (!config) return;

        // 	$.ajax({
        // 		url: config.url,
        // 		method: 'GET',
        // 		headers: {
        // 			"Authorization": "Bearer 1551d88e36f2d38f6d750c26cb3c696cad5cd1809fdcfd9efd6f3698996cadb1"
        // 		},
        // 		success: function (response) {
        // 			console.log(`${config.title} data:`, response);
        // 			displayContent(category, response);
        // 		},
        // 		error: function (xhr, status, error) {
        // 			console.error(`Error fetching ${config.title}:`, error);
        // 		}
        // 	});
        // }

        // // دالة عرض المحتوى
        // function displayContent(category, data) {
        // 	const contentArea = $(`#${category}-content`);
        // 	if (!contentArea.length) return;

        // 	if (!data || !data.data) {
        // 		contentArea.html('<p>لا يوجد محتوى متاح</p>');
        // 		return;
        // 	}

        // 	switch (category) {
        // 		case 'news':
        // 			// displayNews(contentArea, data.data);
        // 			fetchNewsFromAPI(contentArea, data.data);
        // 			break;
        // 		default:
        // 			displayGenericContent(contentArea, data.data);
        // 	}
        // }

        // // عرض الأخبار
        // function displayNews(container, news) {
        // 	container.empty();
        // 	news.forEach(item => {
        // 		container.append(`
        // 	<div class="news-item">
        // 		<h3>${item.arttitle}</h3>
        // 		<div class="news-meta">
        // 			<span class="date">${item.created}</span>
        // 		</div>
        // 		<p>${item.content || item.content}</p>
        // 	</div>
        // `);
        // 	});
        // }

        // // عرض المحتوى العام
        // function displayGenericContent(container, content) {
        // 	container.html(content.description || content.content || '');
        // }

        // // معالجة النقر على الروابط
        // $('.nav_scroll a[data-category]').on('click', function (e) {
        // 	e.preventDefault();
        // 	const category = $(this).data('category');
        // 	if (CATEGORIES[category]) {
        // 		fetchData(category);
        // 		$('.nav_scroll a').removeClass('active');
        // 		$(this).addClass('active');
        // 	}
        // });

        // // تحميل الأخبار عند بدء التطبيق
        // fetchData('news');

        // دالة معالجة رابط الصورة
        // function getImageUrl(filename) {
        // 	if (!filename) return 'store/default-news.jpg';
        // 	return `https://uowa.edu.iq/store/filestorage/file_${filename}`;
        // }

        // let newsData = null;
        // const NEWS_LIMIT = 3; // عدد الأخبار التي نريد عرضها

        // function displayNews(data) {
        // 	const newsContainer = $('.news-container');
        // 	newsContainer.empty();

        // 	if (!data || !data.data || data.data.length === 0) {
        // 		newsContainer.html('<div class="col-12 text-center">لا توجد أخبار متاحة</div>');
        // 		return;
        // 	}

        // 	const newsToShow = data.data.slice(0, 3);

        // 		const newsHTML = `
        // 	<div class="row justify-content-center">
        // 		${newsToShow.map(news => `
        // 			<div class="col-lg-4 col-md-6 col-sm-12">
        // 				<div class="single_blog">
        // 					<div class="single_blog_thumb">
        // 						<a href="#">
        // 							<img src="https://uowa.edu.iq/store/filestorage/file_${news.photo}"
        // 								 alt="${news.arttitle.replace(/<[^>]*>/g, '').substring(0, 100) + '...'}"
        // 								 onerror="this.src='store/default-news.jpg'">
        // 						</a>
        // 					</div>
        // 					<div class="single_blog_content">
        // 						<div class="post-categories">
        // 							<i class="far fa-calendar-alt"></i> ${news.created || ''}
        // 						</div>
        // 						<div class="blog_page_title">
        // 							<h4><a href="#">${news.arttitle.replace(/<[^>]*>/g, '').substring(0, 50) + '...'}</a></h4>
        // 						</div>
        // 						<div class="blog_button">
        // 							<a href="#" class="read-more" onclick="showNewsDetails(${JSON.stringify(news).replace(/"/g, '&quot;')})">
        // 								<i class="fas fa-arrow-left"></i>
        // 								اقرأ المزيد
        // 							</a>
        // 						</div>
        // 					</div>
        // 				</div>
        // 			</div>
        // 		`).join('')}
        // 	</div>
        // 	${data.data.length > 3 ? `
        // 		<div class="text-center mt-4">
        // 			<a href="/all-news.php" class="view-all-news">
        // 				عرض جميع الأخبار <i class="fas fa-arrow-left"></i>
        // 			</a>
        // 		</div>
        // 	` : ''}
        // `;

        // 		newsContainer.html(newsHTML);
        // 	}

        // دالة عرض تفاصيل الخبر
        // 	window.showNewsDetails = function (news) {
        // 		const modal = `
        // 	<div class="modal fade" id="newsModal" tabindex="-1">
        // 		<div class="modal-dialog modal-lg">
        // 			<div class="modal-content">
        // 				<div class="modal-header">
        // 					<h5 class="modal-title">${news.arttitle}</h5>
        // 					<button type="button" class="close" data-dismiss="modal">×</button>
        // 				</div>
        // 				<div class="modal-body">
        // 					<img src="https://uowa.edu.iq/store/filestorage/file_${news.photo}"
        // 						 class="img-fluid mb-3"
        // 						 alt="${news.arttitle}"
        // 						 onerror="this.src='store/default-news.jpg'">
        // 					<div class="news-date">
        // 						<i class="far fa-calendar-alt"></i> ${news.created || ''}
        // 					</div>
        // 					<div class="news-content mt-3">
        // 						${news.content || ''}
        // 					</div>
        // 				</div>
        // 			</div>
        // 		</div>
        // 	</div>
        // `;

        // إضافة Modal للصفحة وعرضه
        // 	$(modal).modal('show').on('hidden.bs.modal', function () {
        // 		$(this).remove();
        // 	});
        // };

        // دالة جلب الأخبار
        // function fetchNews() {
        // 	$('.news-loading').show();

        // 	$.ajax({
        // 		url: 'https://uowa.edu.iq/arabic/api/unidep-news',
        // 		method: 'GET',
        // 		data: {
        // 			category: 'news',
        // 			dep_id: 5
        // 		},
        // 		headers: {
        // 			"Authorization": "Bearer 1551d88e36f2d38f6d750c26cb3c696cad5cd1809fdcfd9efd6f3698996cadb1"
        // 		},
        // 		success: function (response) {
        // 			$('.news-loading').hide();
        // 			displayNews(response);
        // 		},
        // 		error: function (xhr, status, error) {
        // 			console.error('Error:', error);
        // 			$('.news-loading').hide();
        // 			$('.news-container').html(
        // 				'<div class="col-12 text-center">حدث خطأ في تحميل الأخبار</div>'
        // 			);
        // 		}
        // 	});
        // }

        // fetchNews();
    });
    document.addEventListener('DOMContentLoaded', function() {
        function fetchNews() {
            $('.news-loading').show();
            fetch('/news/refresh', {
                    method: 'GET',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json'
                    }
                })
                .then(response => {
                    $('.news-loading').hide();
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.success) {
                        location.reload();
                    }
                })
                .catch(error => console.error('Error:', error));
        }

        fetchNews();
    });
    </script>

</body>

</html>
