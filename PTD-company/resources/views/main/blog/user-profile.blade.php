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


    <div class="page-title-area bg-17">
        <div class="container">
            <div class="page-title-content">
                <h2>جزئیات پزشکان</h2>
                <ul>
                    <li>
                        <a href="index_1.html">
                            صفحه اصلی
                        </a>
                    </li>
                    <li>صفحات</li>
                    <li class="active">جزئیات پزشکان</li>
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


    <section class="doctors-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="doctors-sidebar">
                        <div class="doctors-img">
                            <img src="images/4_1.jpg" alt="Image">
                            <ul>
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
                                <li>
                                    <a href="#">
                                        <i class="bx bxl-youtube"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="availability">
                            <h3>
                                <i class="bx bx-time"></i>
                                دسترسی
                            </h3>
                            <ul>
                                <li>
                                    دوشنبه - چهارشنبه
                                    <span>9.00 - 20.00</span>
                                </li>
                                <li>
                                    یکشنبه
                                    <span>10.00 - 16.00</span>
                                </li>
                                <li>
                                    سه شنبه
                                    <span>9.30 - 18.00</span>
                                </li>
                                <li>
                                    چهارشنبه
                                    <span>تعطیل</span>
                                </li>
                            </ul>
                            <a href="#" class="default-btn mt-4">
                                درخواست ملاقات
                            </a>
                        </div>
                        <div class="client-area doctors-feedback">
                            <div class="client-wrap-two owl-carousel owl-theme">
                                <div class="single-client">
                                    <img src="images/1_1.jpg" alt="img">
                                    <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال
                                        استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد.
                                        لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
                                    <ul>
                                        <li>
                                            <i class="bx bxs-star"></i>
                                        </li>
                                        <li>
                                            <i class="bx bxs-star"></i>
                                        </li>
                                        <li>
                                            <i class="bx bxs-star"></i>
                                        </li>
                                        <li>
                                            <i class="bx bxs-star"></i>
                                        </li>
                                        <li>
                                            <i class="bx bxs-star"></i>
                                        </li>
                                    </ul>
                                    <h3>جان اسمیت</h3>
                                    <span>بازاریاب</span>
                                </div>
                                <div class="single-client">
                                    <img src="images/2.jpg" alt="img">
                                    <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال
                                        استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد.
                                        لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
                                    <ul>
                                        <li>
                                            <i class="bx bxs-star"></i>
                                        </li>
                                        <li>
                                            <i class="bx bxs-star"></i>
                                        </li>
                                        <li>
                                            <i class="bx bxs-star"></i>
                                        </li>
                                        <li>
                                            <i class="bx bxs-star"></i>
                                        </li>
                                        <li>
                                            <i class="bx bxs-star"></i>
                                        </li>
                                    </ul>
                                    <h3>جان اسمیت</h3>
                                    <span>بازاریاب</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="doctors-detailss">
                        <div class="doctors-history">
                            <h2>دکتر جان اسمیت</h2>
                            <span>متخصص قلب و عروق (جراحی کودکان)</span>
                            <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال
                                استاندارد صنعت بوده است. چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد
                                صنعت بوده است. لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت
                                بوده است.</p>
                            <div class="row borders">
                                <div class="col-lg-3 pl-0">
                                    <div class="left-title">
                                        <h3>تخصص</h3>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="right-title">
                                        <ul>
                                            <li>
                                                <i class="bx bxs-hand-left"></i>
                                                قلب و عروق
                                            </li>
                                            <li>
                                                <i class="bx bxs-hand-left"></i>
                                                پزشکی کودکان
                                            </li>
                                            <li>
                                                <i class="bx bxs-hand-left"></i>
                                                اورولوژی
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row borders">
                                <div class="col-lg-3 pl-0">
                                    <div class="left-title">
                                        <h3>تحصیلات</h3>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="right-title">
                                        <ul>
                                            <li>
                                                <i class="bx bxs-hand-left"></i>
                                                قلب و عروق
                                            </li>
                                            <li>
                                                <i class="bx bxs-hand-left"></i>
                                                دکترای پزشکی سال 1395
                                            </li>
                                            <li>
                                                <i class="bx bxs-hand-left"></i>
                                                برنامه جهت گیری سال 1393
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row borders">
                                <div class="col-lg-3 pl-0">
                                    <div class="left-title">
                                        <h3>تجربه</h3>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="right-title">
                                        <ul>
                                            <li>
                                                <i class="bx bxs-hand-left"></i>
                                                25 سال تجربه پزشکی
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row borders">
                                <div class="col-lg-3 pl-0">
                                    <div class="left-title">
                                        <h3>موقعیت</h3>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="right-title">
                                        <ul>
                                            <li>
                                                <i class="bx bxs-hand-left"></i>
                                                ایران، استان تهران، میدان آزادی
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row borders">
                                <div class="col-lg-3 pl-0">
                                    <div class="left-title">
                                        <h3>تلفن</h3>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="right-title">
                                        <ul>
                                            <li>
                                                <i class="bx bxs-hand-left"></i>
                                                021-12345678
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row borders">
                                <div class="col-lg-3 pl-0">
                                    <div class="left-title">
                                        <h3>ایمیل</h3>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="right-title">
                                        <ul>
                                            <li>
                                                <i class="bx bxs-hand-left"></i>
                                                <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="c9a1aca5a5a689aaa8bfa6bbbde7aaa6a4">[email&#160;protected]</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row borders">
                                <div class="col-lg-3 pl-0">
                                    <div class="left-title">
                                        <h3>وبسایت</h3>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="right-title">
                                        <ul>
                                            <li>
                                                <i class="bx bxs-hand-left"></i>
                                                <a href="#">www.cavort.com</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
    @section('page-title', 'پروفایل')
</body>

</html>
