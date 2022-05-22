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


    <div class="main-banner-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="banner-text">
                                <span class="wow fadeInUp" data-wow-delay=".2s">خدمات پزشکی هوشمند</span>
                                <h1 class="wow fadeInUp" data-wow-delay=".4s">ما به سلامتی شما متعهد هستیم</h1>
                                <p class="wow fadeInUp" data-wow-delay=".6s">لورم ایپسوم به سادگی ساختار چاپ و متن را
                                    در
                                    بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
                                @guest
                                    <div class="banner-btn wow fadeInUp" data-wow-delay=".9s">
                                        <a href="{{ route('login') }}" class="default-btn">
                                            ورود
                                        </a>
                                        <a href="{{ route('register') }}" class="default-btn mr-4">
                                            ثبت‌نام
                                        </a>
                                    </div>
                                @endguest
                                @auth

                                    <div class="banner-btn wow fadeInUp" data-wow-delay=".9s">
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                                <button type="submit" class="btn btn-primary">
                                                    خروج
                                                </button>
                                        </form>
                                    </div>
                                @endauth
                            </div>
                        </div>
                        <div class="col-lg-6 pr-0">
                            <div class="banner-img-wrap">
                                <div class="banner-img wow fadeInUp" data-wow-delay=".2s">
                                    <img src="{{ asset('images/1_5.png') }}" alt="Image">
                                </div>
                                <div class="banner-shape">
                                    <img src="{{ asset('images/banner-shape.png') }}" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="first-facility-area">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <div class="first-facility-item">
                                    <i class="flaticon-care"></i>
                                    <h3>خدمات ویژه</h3>
                                    <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="first-facility-item">
                                    <i class="flaticon-support"></i>
                                    <h3>پشتیبانی 24/7</h3>
                                    <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                                <div class="first-facility-item">
                                    <i class="flaticon-online-learning"></i>
                                    <h3>خدمات آنلاین</h3>
                                    <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد.</p>
                                </div>
                            </div>
                        </div>
                        <div class="shape">
                            <img src="{{ asset('images/1_1.png') }}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="second-facility-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="second-facility-item">
                        <img src="{{ asset('images/1.png') }}" alt="Image">
                        <h3>پزشکان با تجربه</h3>
                        <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد
                            صنعت بوده است.</p>
                        <a href="services-details.html" class="read-more">
                            بیشتر بخوانید
                            <i class="bx bx-plus"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="second-facility-item">
                        <img src="{{ asset('images/2.png') }}" alt="Image">
                        <h3>هلیکوپتر اضطراری</h3>
                        <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد
                            صنعت بوده است.</p>
                        <a href="services-details.html" class="read-more">
                            بیشتر بخوانید
                            <i class="bx bx-plus"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                    <div class="second-facility-item">
                        <img src="{{ asset('images/3.png') }}" alt="Image">
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


    <section class="about-area pb-130">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="images/1_3.jpg" alt="Image">
                        <div class="shape-1">
                            <img src="images/shape-1.png" alt="Image">
                        </div>
                        <div class="shape-2">
                            <img src="{{ asset('images/shape-2.png') }}" alt="Image">
                        </div>
                        <div class="shape-3">
                            <img src="{{ asset('images/shape-3.png') }}" alt="Image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <span class="top-title">درباره ما</span>
                        <h2>ارائه خدمات با کیفیت بهداشتی و درمانی کلینیک کاورت</h2>
                        <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد
                            صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40
                            سال استاندارد صنعت بوده است.</p>
                        <ul>
                            <li>
                                <i class="flaticon-tick"></i>
                                مهارت های علمی برای گرفتن نتیجه بهتر
                            </li>
                            <li>
                                <i class="flaticon-tick"></i>
                                یک محیط مناسب برای کار
                            </li>
                            <li>
                                <i class="flaticon-tick"></i>
                                پزشکان حرفه ای و با تجربه
                            </li>
                            <li>
                                <i class="flaticon-tick"></i>
                                آزمایشگاه دیجیتال
                            </li>
                            <li>
                                <i class="flaticon-tick"></i>
                                خدمات اضطراری
                            </li>
                        </ul>
                        <a href="about.html" class="default-btn">
                            درباره ما
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- start of services --}}
    @include('layouts.master.services')
    {{-- end of services --}}


    {{-- start of team --}}
    @include('layouts.master.team')
    {{-- end of team --}}

    <section class="our-work-area pt-100 pb-70" dir="ltr">
        <div class="container">
            <div class="section-title">
                <span class="top-title">کارهای ما</span>
                <h2>مراقبت های ویژه ما</h2>
                <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده
                    است. چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
            </div>
            <div class="work-wrap owl-carousel owl-theme">
                <div class="single-work">
                    <img src="{{ asset('images/1.jpg') }}" alt="Image">
                    <h3 class="work-title">
                        <i class="flaticon-kidney"></i>
                        تیم جراحی
                    </h3>
                    <div class="work-content-wrap">
                        <div class="work-content">
                            <h3>تیم جراحی</h3>
                            <p>لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است.</p>
                            <a href="#" class="read-more">
                                جزئیات
                                <i class="bx bx-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="single-work">
                    <img src="images/2_1.jpg" alt="Image">
                    <h3 class="work-title">
                        <i class="flaticon-doll"></i>
                        مراقبت از کودکان
                    </h3>
                    <div class="work-content-wrap">
                        <div class="work-content">
                            <h3>مراقبت از کودکان</h3>
                            <p>لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است.</p>
                            <a href="#" class="read-more">
                                جزئیات
                                <i class="bx bx-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="single-work">
                    <img src="{{ asset('') }}images/3.jpg" alt="Image">
                    <h3 class="work-title">
                        <i class="flaticon-cardiology"></i>
                        تیم قلب و عروق
                    </h3>
                    <div class="work-content-wrap">
                        <div class="work-content">
                            <h3>تیم قلب و عروق</h3>
                            <p>لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است.</p>
                            <a href="#" class="read-more">
                                جزئیات
                                <i class="bx bx-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="single-work">
                    <img src="images/4.jpg" alt="Image">
                    <h3 class="work-title">
                        <i class="flaticon-cardiology"></i>
                        آزمایشگاه کلینیک
                    </h3>
                    <div class="work-content-wrap">
                        <div class="work-content">
                            <h3>آزمایشگاه کلینیک</h3>
                            <p>لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است.</p>
                            <a href="#" class="read-more">
                                جزئیات
                                <i class="bx bx-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape">
            <img src="images/work-shape.png" alt="Image">
        </div>
    </section>


    {{-- start of main counter --}}
    @include('components.main-counter')
    {{-- end of main counter --}}

    {{-- start of mitting requst --}}
    @include('layouts.partials.project-form')
    {{-- end of mitting requst --}}


    <section class="prevention-area pt-100 pb-70">
        <div class="container-fluid">
            <div class="section-title">
                <span class="top-title">پیشگیری</span>
                <h2>چگونه از خود محافظت کنیم</h2>
                <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده
                    است. چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="prevention-wrap">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="single-prevention">
                                    <i class="flaticon-hand-wash"></i>
                                    <h3>دست هایتان را بشویید</h3>
                                    <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال
                                        استاندارد صنعت بوده است.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="single-prevention">
                                    <i class="flaticon-medical-mask"></i>
                                    <h3>از ماسک استفاده کنید</h3>
                                    <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال
                                        استاندارد صنعت بوده است.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="single-prevention">
                                    <i class="flaticon-stay-home"></i>
                                    <h3>در خانه بمانید</h3>
                                    <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال
                                        استاندارد صنعت بوده است.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="single-prevention">
                                    <i class="flaticon-alcohol-gel"></i>
                                    <h3>استفاده از ضد عفونی کننده</h3>
                                    <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال
                                        استاندارد صنعت بوده است.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="single-prevention">
                                    <i class="flaticon-protection"></i>
                                    <h3>از تماس نزدیک خودداری کنید</h3>
                                    <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال
                                        استاندارد صنعت بوده است.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="single-prevention">
                                    <i class="flaticon-washing-hands"></i>
                                    <h3>شستشوی دست ها</h3>
                                    <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال
                                        استاندارد صنعت بوده است.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="single-prevention">
                                    <i class="flaticon-protection-1"></i>
                                    <h3>صورت را لمس نکنید</h3>
                                    <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال
                                        استاندارد صنعت بوده است.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="single-prevention">
                                    <i class="flaticon-gloves"></i>
                                    <h3>از دستکش استفاده کنید</h3>
                                    <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال
                                        استاندارد صنعت بوده است.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="prevention-img">
                        <img src="images/prevention-img_1.png" alt="Image">
                        <div class="shape">
                            <img src="images/shape-2_2.png" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-1">
            <img src="images/shape-1_1.png" alt="Image">
        </div>
        <div class="shape-2">
            <img src="images/shape-1_1.png" alt="Image">
        </div>
        <div class="shape-3">
            <img src="images/shape-1_1.png" alt="Image">
        </div>
        <div class="shape-4">
            <img src="images/shape-1_1.png" alt="Image">
        </div>
    </section>

    {{-- start of client area --}}
    @include('layouts.master.client-area')
    {{-- end of client area --}}

    {{-- start of phone number banner --}}
    @include('components.call-us')
    {{-- end of phone number banner --}}

    {{-- start of blog news --}}
    @include('layouts.partials.blog-news')
    {{-- end of blog news --}}


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
    @section('page-title', 'خانه')
</body>

</html>
