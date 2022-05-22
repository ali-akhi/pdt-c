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

    <div class="page-title-area bg-15">
        <div class="container">
            <div class="page-title-content">
                <h2>درباره ما</h2>
                <ul>
                    <li>
                        <a href="index_1.html">
                            صفحه اصلی
                        </a>
                    </li>
                    <li>صفحات</li>
                    <li class="active">درباره ما</li>
                </ul>
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
    </div>


    <section class="about-area about-page pb-130">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="images/1_3.jpg" alt="Image">
                        <div class="shape-1">
                            <img src="images/shape-1.png" alt="Image">
                        </div>
                        <div class="shape-2">
                            <img src="images/shape-2.png" alt="Image">
                        </div>
                        <div class="shape-3">
                            <img src="images/shape-3.png" alt="Image">
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
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-area two ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-content ml-0">
                        <span class="top-title">درباره کرونا ویروس</span>
                        <h2>کرونا ویروس چگونه گسترش می یابد</h2>
                        <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد
                            صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40
                            سال استاندارد صنعت بوده است.</p>
                        <strong>بهترین راه برای جلوگیری از ابتلا به بیماری ، جلوگیری از قرار گرفتن در معرض این ویروس
                            است.</strong>
                        <ul>
                            <li>
                                <i class="flaticon-tick"></i>
                                سطوح لمس شده را تمیز و ضد عفونی کنید
                            </li>
                            <li>
                                <i class="flaticon-tick"></i>
                                از لمس کردن چشم ، بینی و دهان خودداری کنید
                            </li>
                            <li>
                                <i class="flaticon-tick"></i>
                                دستان خود را با ضد عفونی کننده دست تمیز کنید
                            </li>
                            <li>
                                <i class="flaticon-tick"></i>
                                هنگام سرفه و عطسه دهان خود را بگیرید
                            </li>
                            <li>
                                <i class="flaticon-tick"></i>
                                اگر بیمار هستید در خانه بمانید
                            </li>
                            <li>
                                <i class="flaticon-tick"></i>
                                در صورت بیماری از ماسک استفاده کنید
                            </li>
                            <li>
                                <i class="flaticon-tick"></i>
                                دهان و بینی خود را بگیرید
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-img two">
                        <img src="images/1_3.png" alt="Image">
                        <div class="shape-1">
                            <img src="images/2_2.png" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- start of team --}}
    @include('layouts.master.team')
    {{-- end of team --}}

    {{-- start of right about us --}}
    @include('layouts.partials.right-about-us')
    {{-- end of right about us --}}

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
        <div class="shape-wrap">
            <div class="shape-1">
                <img src="images/counter-shape.png" alt="Image">
            </div>
            <div class="shape-2">
                <img src="images/counter-shape.png" alt="Image">
            </div>
        </div>
    </section>


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
    @section('page-title', 'درباره‌ ما')

</body>

</html>
