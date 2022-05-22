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

    <div class="loader-wrapper">
        <div class="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>

    {{-- start of header --}}
    @include('layouts.master.header')
    {{-- end of header --}}

    <section class="hero-slider-area" dir="ltr">
        <div class="hero-slider-wrap owl-carousel owl-theme">
            <div class="slider-item slider-item-bg-1">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-9">
                                    <div class="slider-text one">
                                        <span class="top-title">مرکز سنجش و آزمایش</span>
                                        <h1>مرکز ارزیابی بیماری و کرونا ویروس</h1>
                                        <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40
                                            سال استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر
                                            می گیرد.</p>
                                        <div class="slider-btn">
                                            <a class="default-btn" href="appointment.html">
                                                قرار ملاقات
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <a href="https://www.youtube.com/watch?v=-rtuEgAHWw0"
                                        class="video-btn popup-youtube">
                                        <i class="flaticon-play-button-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item slider-item-bg-2">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-9">
                                    <div class="slider-text two">
                                        <span class="top-title">مرکز سنجش و آزمایش</span>
                                        <h1>راه آسان برای دریافت خدمات پزشکی کلینیک کاورت</h1>
                                        <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40
                                            سال استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر
                                            می گیرد.</p>
                                        <div class="slider-btn">
                                            <a class="default-btn" href="appointment.html">
                                                قرار ملاقات
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <a href="https://www.youtube.com/watch?v=-rtuEgAHWw0"
                                        class="video-btn popup-youtube">
                                        <i class="flaticon-play-button-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item slider-item-bg-3">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-9">
                                    <div class="slider-text two">
                                        <span class="top-title">مرکز سنجش و آزمایش</span>
                                        <h1>معاینه رایگان اطمینان از زندگی بهتر!</h1>
                                        <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40
                                            سال استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر
                                            می گیرد.</p>
                                        <div class="slider-btn">
                                            <a class="default-btn" href="appointment.html">
                                                قرار ملاقات
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <a href="https://www.youtube.com/watch?v=-rtuEgAHWw0"
                                        class="video-btn popup-youtube">
                                        <i class="flaticon-play-button-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="second-facility-area three mt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6 p-0">
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
                <div class="col-lg-4 col-sm-6 p-0">
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
                <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0 p-0">
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


    <section class="about-area-three pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-content">
                        <span class="top-title">آزمایش کرونا ویروس</span>
                        <h2>این کلینیک در حال آزمایش و درمان موارد کرونا ویروس است </h2>
                        <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد
                            صنعت بوده است. به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده
                            است.</p>
                        <ul>
                            <li>
                                <h3>معیارهای آزمایش:</h3>
                                <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال
                                    استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد.
                                    لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
                            </li>
                            <li>
                                <h3>آزمایش پرسنل با ریسک بالا:</h3>
                                <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال
                                    استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد.
                                    لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
                            </li>
                        </ul>
                        <a href="about.html" class="default-btn">
                            درباره ما
                        </a>
                    </div>
                </div>
                <div class="col-lg-6" dir="ltr">
                    <div class="about-img">
                        <div class="about-img-wrap owl-carousel owl-theme">
                            <div class="about-item">
                                <img src="images/1_8.jpg" alt="Image">
                            </div>
                            <div class="about-item">
                                <img src="{{ asset('images/2_6.jpg') }}" alt="Image">
                            </div>
                        </div>
                        <div class="shape-3">
                            <img src="{{ asset('images/shape-3.png') }}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="how-its-work ptb-100">
        <div class="container">
            <div class="section-title">
                <span class="top-title">کارها</span>
                <h2>چگونه کار می کند</h2>
                <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده
                    است. چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="how-its-work-content">
                        <div class="content-wrap">
                            <h3>درخواست ملاقات</h3>
                            <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده
                                است. لورم ایپسوم به سادگی متن را در بر می گیرد.</p>
                        </div>
                        <div class="content-wrap">
                            <h3>آماده برای آزمایش</h3>
                            <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده
                                است. لورم ایپسوم به سادگی متن را در بر می گیرد.</p>
                        </div>
                        <div class="content-wrap">
                            <h3>پذیرش در بیمارستان</h3>
                            <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده
                                است. لورم ایپسوم به سادگی متن را در بر می گیرد.</p>
                        </div>
                        <a href="#" class="default-btn">
                            جزئیات بیشتر
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="how-work-img">
                        <img src="{{ asset('images/works-img.png') }}" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="services-area-three pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span class="top-title">خدمات ما</span>
                <h2>خدمات بهداشتی ما</h2>
                <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده
                    است. چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-services">
                        <span class="flaticon-man"></span>
                        <h3>خدمات درمانی</h3>
                        <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد
                            صنعت بوده است.</p>
                        <a href="services-details.html" class="read-more">
                            بیشتر بخوانید
                            <i class="bx bx-plus"></i>
                        </a>
                        <div class="services-shape">
                            <img src="{{ asset('images/services-card-shape.png') }}" alt="Image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-services">
                        <span class="flaticon-liver"></span>
                        <h3>پیوند کبد</h3>
                        <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد
                            صنعت بوده است.</p>
                        <a href="services-details.html" class="read-more">
                            بیشتر بخوانید
                            <i class="bx bx-plus"></i>
                        </a>
                        <div class="services-shape">
                            <img src="{{ asset('images/services-card-shape.png') }}" alt="Image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-services">
                        <span class="flaticon-kidney"></span>
                        <h3>پیوند کلیه</h3>
                        <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد
                            صنعت بوده است.</p>
                        <a href="services-details.html" class="read-more">
                            بیشتر بخوانید
                            <i class="bx bx-plus"></i>
                        </a>
                        <div class="services-shape">
                            <img src="{{ asset('images/services-card-shape.png') }}" alt="Image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-services">
                        <span class="flaticon-heart"></span>
                        <h3>تنظیم قلب</h3>
                        <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد
                            صنعت بوده است.</p>
                        <a href="services-details.html" class="read-more">
                            بیشتر بخوانید
                            <i class="bx bx-plus"></i>
                        </a>
                        <div class="services-shape">
                            <img src="images/services-card-shape.png" alt="Image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-services">
                        <span class="flaticon-brain"></span>
                        <h3>مغز و اعصاب</h3>
                        <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد
                            صنعت بوده است.</p>
                        <a href="services-details.html" class="read-more">
                            بیشتر بخوانید
                            <i class="bx bx-plus"></i>
                        </a>
                        <div class="services-shape">
                            <img src="{{ asset('images/services-card-shape.png') }}" alt="Image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-services">
                        <span class="flaticon-walker"></span>
                        <h3>آسیب شناسی</h3>
                        <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد
                            صنعت بوده است.</p>
                        <a href="services-details.html" class="read-more">
                            بیشتر بخوانید
                            <i class="bx bx-plus"></i>
                        </a>
                        <div class="services-shape">
                            <img src="{{ asset('images/services-card-shape.png') }}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-1">
            <img src="{{ asset('images/shape-1_1.png') }}" alt="Image">
        </div>
        <div class="shape-2">
            <img src="{{ asset('images/shape-1_1.png') }}" alt="Image">
        </div>
        <div class="shape-3">
            <img src="{{ asset('images/shape-1_1.png') }}" alt="Image">
        </div>
        <div class="shape-4">
            <img src="{{ asset('images/shape-1_1.png') }}" alt="Image">
        </div>
    </section>


    <section class="doctors-area-two pt-100 pb-70">
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
                            <img src="{{ asset('images/4_1.jpg') }}" alt="Image">
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
                        <div class="doctors-content">
                            <h3>جان اسمیت</h3>
                            <span>متخصص قلب و عروق</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-doctors-two">
                        <div class="doctor-img">
                            <img src="{{ asset('images/5.jpg') }}" alt="Image">
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
                        <div class="doctors-content">
                            <h3>جان اسمیت</h3>
                            <span>متخصص قلب و عروق</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                    <div class="single-doctors-two">
                        <div class="doctor-img">
                            <img src="{{ asset('images/6.jpg') }}" alt="Image">
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
                        <div class="doctors-content">
                            <h3>جان اسمیت</h3>
                            <span>متخصص قلب و عروق</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="counter-area two pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter">
                        <h2>
                            <span class="odometer" data-count="434859">00</span>
                            <span class="target">+</span>
                        </h2>
                        <p>تایید شده</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter">
                        <h2>
                            <span class="odometer" data-count="147">00</span>
                            <span class="target">+</span>
                        </h2>
                        <p>در کشور</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter">
                        <h2>
                            <span class="odometer" data-count="20">00</span>
                            <span class="traget">%</span>
                        </h2>
                        <p>بازیابی</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter">
                        <h2>
                            <span class="odometer" data-count="80">00</span>
                            <span class="traget">%</span>
                        </h2>
                        <p>مهارت</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="assessment-center-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="assessment-img">
                        <img src="{{ asset('images/assessment-img.png') }}" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="emergency-contents">
                        <span class="top-title">مرکز ارزیابی</span>
                        <h2>چه کسی نباید از مرکز بازدید کند</h2>
                        <p>افرادی که علائم عفونت دستگاه تنفسی فوقانی را دارند (سرفه ، گلودرد ، سردرد ، دردهای عضلانی ،
                            خستگی ، آبریزش بینی و دردهای مفصلی) و ممکن است شامل این موارد نیز باشد.</p>
                        <ul>
                            <li>
                                کارکنان بهداشت باید سازمان خود را دنبال کنند.
                            </li>
                            <li>
                                افرادی که هیچ علائمی ندارند و به مسافرت نرفته اند
                            </li>
                            <li>
                                به مدت 14 روز در خانه بمانید
                            </li>
                            <li>
                                افرادی که هیچ گونه علائمی ندارند
                            </li>
                            <li>
                                حداقل به مدت 14 روز در خانه بمانید
                            </li>
                        </ul>
                        <a href="#" class="default-btn">
                            جزئیات بیشتر
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="emergency-department-area pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="emergency-contents">
                        <span class="top-title">بخش اورژانس</span>
                        <h2>چه کسانی باید به نزدیکترین بخش اورژانس مراجعه کنند</h2>
                        <p>افرادی که علائم عفونت دستگاه تنفسی فوقانی را دارند (سرفه ، گلودرد ، سردرد ، دردهای عضلانی ،
                            خستگی ، آبریزش بینی و دردهای مفصلی) و ممکن است شامل این موارد نیز باشد.</p>
                        <ul>
                            <li>
                                ضعفی که توانایی انجام فعالیتهای روزمره را مختل می کند
                            </li>
                            <li>
                                تنگی نفس هنگام راه رفتن ، ورزش یا استراحت
                            </li>
                            <li>
                                درد یا ناراحتی در قفسه سینه
                            </li>
                            <li>
                                بی حالی یا خواب آلودگی
                            </li>
                            <li>
                                سرگیجه و سردرد
                            </li>
                        </ul>
                        <a href="#" class="default-btn">
                            جزئیات بیشتر
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="assessments-img">
                        <img src="{{ asset('images/emergency-img.png') }}" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- start of  faq area --}}
    @include('layouts.master.faq-area')
    {{-- end of  faq area --}}


    <section class="emergency-department-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="emergency-contents">
                        <span class="top-title">پیشگیری</span>
                        <h2>چگونه از خود محافظت کنیم</h2>
                        <p>افرادی که علائم عفونت دستگاه تنفسی فوقانی را دارند (سرفه ، گلودرد ، سردرد ، دردهای عضلانی ،
                            خستگی ، آبریزش بینی و دردهای مفصلی) و همچنین ممکن است شامل</p>
                        <ul>
                            <li>
                                دستها را حداقل به مدت 15-20 ثانیه با آب و صابون بشویید.
                            </li>
                            <li>
                                از دست زدن به چشم ، بینی و دهان خودداری کنید.
                            </li>
                            <li>
                                از تماس نزدیک (در فاصله 1 متر) با افراد بیمار خودداری کنید.
                            </li>
                            <li>
                                هنگام سرفه و عطسه جلوی دهان و بینی خود را با دستمال بگیرید.
                            </li>
                            <li>
                                وقتی بیمار هستید در خانه بمانید.
                            </li>
                        </ul>
                        <a href="#" class="default-btn">
                            جزئیات بیشتر
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="assessments-img">
                        <img src="{{ asset('images/prevention-img.png') }}" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </section>


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
    @section('page-title', 'آزمایشگاه')
</body>

</html>
