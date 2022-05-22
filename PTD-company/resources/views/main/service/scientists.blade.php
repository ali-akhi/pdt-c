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

    <div class="main-banner-area-five">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="banner-text">
                                <span class="wow fadeInUp" data-wow-delay=".2s">خدمات پزشکی هوشمند</span>
                                <h1 class="wow fadeInUp" data-wow-delay=".4s">دریافت خدمات بهداشتی و درمانی از پزشکان
                                    با تجربه کلینیک کاورت</h1>
                                <p class="wow fadeInUp" data-wow-delay=".6s">لورم ایپسوم به سادگی ساختار چاپ و متن را
                                    در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است. به سادگی ساختار
                                    چاپ و متن را در بر می گیرد.</p>
                                <div class="banner-btn wow fadeInUp" data-wow-delay=".9s">
                                    <a href="appointment.html" class="default-btn">
                                        درخواست ملاقات
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 pr-0">
                            <div class="banner-img-wrap">
                                <div class="banner-img wow fadeInUp" data-wow-delay=".2s">
                                    <img src="images/banner-img_1.png" alt="Image">
                                </div>
                                <div class="shapes">
                                    <img src="images/shape-3_1.png" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape">
            <img src="images/shape-1_2.png" alt="Image">
        </div>
        <div class="shape-2">
            <img src="images/shape-2_1.png" alt="Image">
        </div>
    </div>


    <section class="search-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <form class="top-search-from">
                        <div class="row">
                            <div class="col-12">
                                <div class="searchs-wraps">
                                    <input type="text" class="form-control" id="Search"
                                        placeholder="جستجوی خود را شروع کنید">
                                    <button type="button" class="search-btn">
                                        <i class="bx bx-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-5 col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="Location"
                                        placeholder="جستجو پزشکان و کلینیک ها">
                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-6">
                                <div class="form-group">
                                    <select>
                                        <option value>متخصص قلب و عروق</option>
                                        <option value>متخصص مغز و اعصاب</option>
                                        <option value>متخصص پوست و مو</option>
                                        <option value>متخصص آلرژی</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <button type="button" class="find-btn">
                                    <i class="bx bx-left-arrow-alt"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="join-our-team">
                        <span>شما پزشک هستید؟</span>
                        <h3>به تیم ما بپیوندید</h3>
                        <a href="#" class="default-btn">
                            به عنوان یک پزشک بپیوندید
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="first-facility-emergency pt-100 pb-70">
        <div class="container">
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
        </div>
    </section>


    {{-- start of right about us  --}}
    @include('layouts.partials.right-about-us')
    {{-- end of right about us  --}}


    <section class="professionals-area pb-70">
        <div class="container">
            <div class="section-title">
                <span class="top-title">با متخصصین ما آشنا شوید</span>
                <h2>متخصصین دارای رتبه برتر</h2>
                <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده
                    است. چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-professionals">
                        <div class="professionals-img">
                            <img src="images/11.png" alt="Image">
                            <i class="bx bx-heart"></i>
                        </div>
                        <h3>دکتر جان اسمیت</h3>
                        <span>دکترای پزشکی</span>
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
                        <form>
                            <select>
                                <option value>متخصص قلب و عروق</option>
                                <option value>متخصص مغز و اعصاب</option>
                                <option value>متخصص پوست و مو</option>
                                <option value>متخصص آلرژی</option>
                            </select>
                        </form>
                        <div class="location">
                            <span>
                                <i class="bx bx-location-plus"></i>
                                ایران
                            </span>
                            <span class="right">
                                <i class="bx bx-notepad"></i>
                                در دسترس نیست
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-professionals">
                        <div class="professionals-img">
                            <img src="images/10.png" alt="Image">
                            <i class="bx bx-heart"></i>
                        </div>
                        <h3>دکتر جان اسمیت</h3>
                        <span>دکترای پزشکی</span>
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
                        <form>
                            <select>
                                <option value>متخصص قلب و عروق</option>
                                <option value>متخصص مغز و اعصاب</option>
                                <option value>متخصص پوست و مو</option>
                                <option value>متخصص آلرژی</option>
                            </select>
                        </form>
                        <div class="location">
                            <span>
                                <i class="bx bx-location-plus"></i>
                                ایران
                            </span>
                            <span class="right">
                                <i class="bx bx-notepad"></i>
                                در دسترس نیست
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                    <div class="single-professionals">
                        <div class="professionals-img">
                            <img src="images/12.png" alt="Image">
                            <i class="bx bx-heart"></i>
                        </div>
                        <h3>جان اسمیت</h3>
                        <span>دکترای پزشکی</span>
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
                        <form>
                            <select>
                                <option value>متخصص قلب و عروق</option>
                                <option value>متخصص مغز و اعصاب</option>
                                <option value>متخصص پوست و مو</option>
                                <option value>متخصص آلرژی</option>
                            </select>
                        </form>
                        <div class="location">
                            <span>
                                <i class="bx bx-location-plus"></i>
                                ایران
                            </span>
                            <span class="right">
                                <i class="bx bx-notepad"></i>
                                در دسترس نیست
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- start of team --}}
    @include('layouts.master.team')
    {{-- end of team --}}

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

    @section('page-title','محققان')

</body>

</html>
