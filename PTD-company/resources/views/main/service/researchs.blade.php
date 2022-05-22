@extends('layouts.partials.title')
<!doctype html>
<html lang="fa">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords"
        content="HTML5,CSS3,HTML,Template,multi-page,Cavort - Medical Health Multi-Niche Template Collections">
    <meta name="description" content="Cavort - Medical Health Multi-Niche Template Collections">
    <meta name="author" content="Barat Hadian">

    {{-- style links --}}
    @include('layouts.partials.main-style-link')
</head>

<body>

    {{-- loader --}}
    @include('components.loader')

    {{-- start of header --}}
    @include('layouts.master.header')
    {{-- end of header --}}


    <section class="hero-slider-area hero-slider-area-seven" dir="ltr">
        <div class="hero-slider-wrap owl-carousel owl-theme">
            <div class="slider-item slider-item-bg-4">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="slider-text one">
                                <span class="top-title">به کاورت خوش آمدید</span>
                                <h1>مرکز تحقیقات و آزمایشگاه پیشرفته کلینیک کاورت</h1>
                                <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال
                                    استاندارد صنعت بوده است. چاپ و متن را در بر می گیرد. 40 سال استاندارد صنعت بوده است.
                                </p>
                                <div class="slider-btn">
                                    <a class="default-btn" href="appointment.html">
                                        قرار ملاقات
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item slider-item-bg-5">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="slider-text two">
                                <span class="top-title">به کاورت خوش آمدید</span>
                                <h1>مرکز تحقیقات و آزمایشگاه پیشرفته کلینیک کاورت</h1>
                                <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال
                                    استاندارد صنعت بوده است. چاپ و متن را در بر می گیرد. 40 سال استاندارد صنعت بوده است.
                                </p>
                                <div class="slider-btn">
                                    <a class="default-btn" href="appointment.html">
                                        قرار ملاقات
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="second-facility-area seven pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6 p-0">
                    <div class="second-facility-item">
                        <img src="{{ asset('images/4_1.png') }}" alt="Image">
                        <h3>خدمات آزمایشگاهی</h3>
                        <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد
                            صنعت بوده است.</p>
                        <a href="services-details.html" class="read-more">
                            بیشتر بخوانید
                            <i class="bx bx-plus"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 p-0">
                    <div class="second-facility-item">
                        <img src="{{ asset('images/5_1.png') }}" alt="Image">
                        <h3>اعتبار سنجی آزمایشگاهی</h3>
                        <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد
                            صنعت بوده است.</p>
                        <a href="services-details.html" class="read-more">
                            بیشتر بخوانید
                            <i class="bx bx-plus"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0 p-0">
                    <div class="second-facility-item">
                        <img src="{{ asset('images/6_1.png') }}" alt="Image">
                        <h3>فناوری پیشرفته</h3>
                        <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد
                            صنعت بوده است.</p>
                        <a href="services-details.html" class="read-more">
                            بیشتر بخوانید
                            <i class="bx bx-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="about-area-seven bg-color ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-content">
                        <h2>ما از آخرین فناوری روز دنیا استفاده می کنیم</h2>
                        <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد
                            صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40
                            سال استاندارد صنعت بوده است.</p>
                        <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد
                            صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40
                            سال استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم
                            ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
                        <ul class="ml-0">
                            <li>
                                <i class="bx bx-check"></i>
                                تحقیقات شیمیایی
                            </li>
                            <li>
                                <i class="bx bx-check"></i>
                                آزمایش آسیب شناسی
                            </li>
                            <li>
                                <i class="bx bx-check"></i>
                                آماده سازی نمونه
                            </li>
                            <li>
                                <i class="bx bx-check"></i>
                                آزمایشگاه های بهداشتی
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <i class="bx bx-check"></i>
                                میکروسکوپ پیشرفته
                            </li>
                            <li>
                                <i class="bx bx-check"></i>
                                رباتیک پیشرفته
                            </li>
                            <li>
                                <i class="bx bx-check"></i>
                                آزمایش محیط زیست
                            </li>
                            <li>
                                <i class="bx bx-check"></i>
                                آسیب شناسی آناتومیک
                            </li>
                        </ul>
                        <div class="about-btn">
                            <a href="about.html" class="default-btn">
                                درباره ما
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="{{ asset('images/about-img_3.jpg') }}" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="counter-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter">
                        <i class="flaticon-man"></i>
                        <h2>
                            <span class="odometer" data-count="540">00</span>
                            <span class="target">+</span>
                        </h2>
                        <p>پزشک با تجربه</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter">
                        <i class="flaticon-tick"></i>
                        <h2>
                            <span class="odometer" data-count="990">00</span>
                            <span class="target">+</span>
                        </h2>
                        <p>موفقیت</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter">
                        <i class="flaticon-trophy"></i>
                        <h2>
                            <span class="odometer" data-count="3500">00</span>
                            <span class="traget">+</span>
                        </h2>
                        <p>حضور جهانی</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter">
                        <i class="flaticon-experience"></i>
                        <h2>
                            <span class="odometer" data-count="54">00</span>
                            <span class="traget">+</span>
                        </h2>
                        <p>تجربه</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="services-area-seven bg-color pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span class="top-title">خدمات ما</span>
                <h2>ارائه خدمات ویژه و با کیفیت</h2>
                <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده
                    است. چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-services">
                        <img src="{{ asset('images/1_12.jpg') }}" alt="Image">
                        <div class="services-content">
                            <h3>آزمایش آسیب شناسی</h3>
                            <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال
                                استاندارد صنعت بوده است.</p>
                            <a href="services-details.html" class="read-more">
                                بیشتر بخوانید
                                <i class="bx bx-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-services">
                        <img src="{{ asset('images/2_10.jpg') }}" alt="Image">
                        <div class="services-content">
                            <h3>تحقیقات شیمیایی</h3>
                            <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال
                                استاندارد صنعت بوده است.</p>
                            <a href="services-details.html" class="read-more">
                                بیشتر بخوانید
                                <i class="bx bx-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                    <div class="single-services">
                        <img src="{{ asset('images/3_7.jpg') }}" alt="Image">
                        <div class="services-content">
                            <h3>فناوری پیشرفته</h3>
                            <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال
                                استاندارد صنعت بوده است.</p>
                            <a href="services-details.html" class="read-more">
                                بیشتر بخوانید
                                <i class="bx bx-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="doctors-area-two seven pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span class="top-title">پزشکان ما</span>
                <h2>پزشکان با تجربه ما</h2>
                <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده
                    است. چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-doctors-two">
                        <div class="doctor-img">
                            <img src="{{ asset('images/13.jpg') }}" alt="Image">
                            <div class="doctors-content">
                                <h3>جان اسمیت</h3>
                                <span>متخصص قلب و عروق</span>
                                <ul class="doctors-link">
                                    <li>
                                        <a href="#">
                                            <i class="bx bxl-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="bx bxl-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="bx bxl-pinterest-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="bx bxl-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-doctors-two">
                        <div class="doctor-img">
                            <img src="{{ asset('images/14.jpg') }}" alt="Image">
                            <div class="doctors-content">
                                <h3>جان اسمیت</h3>
                                <span>متخصص قلب و عروق</span>
                                <ul class="doctors-link">
                                    <li>
                                        <a href="#">
                                            <i class="bx bxl-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="bx bxl-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="bx bxl-pinterest-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="bx bxl-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                    <div class="single-doctors-two">
                        <div class="doctor-img">
                            <img src="{{ asset('images/15.jpg') }}" alt="Image">
                            <div class="doctors-content">
                                <h3>جان اسمیت</h3>
                                <span>متخصص قلب و عروق</span>
                                <ul class="doctors-link">
                                    <li>
                                        <a href="#">
                                            <i class="bx bxl-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="bx bxl-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="bx bxl-pinterest-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="bx bxl-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- start of  faq area --}}
    @include('layouts.master.faq-area')
    {{-- end of  faq area --}}


    {{-- start of mitting request --}}
    @include('layouts.partials.project-form')
    {{-- end of mitting request --}}


   {{-- start of client area --}}
   @include('layouts.master.client-area')
   {{-- end of client area --}}


    {{-- start of newspaper --}}
    @include('components.news-paper')
    {{-- start of newspaper --}}



    <!-- start of footer -->
    @include('layouts.master.footer')
    <!-- end of footer -->

    <!-- start of end-footer -->
    @include('layouts.partials.end-footer')
    <!-- end of end-footer -->

    {{-- start of go to top --}}
    @include('components.go-top')
    {{-- end of go to top --}}

    {{-- script links --}}
    @include('layouts.partials.main-script-link')

    @section('page-title', 'تحقیقات')
</body>

</html>
