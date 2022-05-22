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


    <div class="page-title-area bg-19">
        <div class="container">
            <div class="page-title-content">
                <h2>وقت ملاقات</h2>
                <ul>
                    <li>
                        <a href="index_1.html">
                            صفحه اصلی
                        </a>
                    </li>
                    <li>صفحات</li>
                    <li class="active">وقت ملاقات</li>
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


    <section class="second-facility-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="second-facility-item">
                        <img src="images/1.png" alt="Image">
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
                        <img src="images/2.png" alt="Image">
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
                        <img src="images/3.png" alt="Image">
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


    <section class="appointment-area jarallax" data-jarallax="{" speed": 0.3}">
        <div class="container">
            <div class="appointment-here-form m-auto">
                <span class="top-title">درخواست ملاقات</span>
                <h2>ما برای شما اینجا هستیم</h2>
                <form>
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <label>نام شما</label>
                            <div class="form-group">
                                <input type="text" class="form-control" id="Name" placeholder="نام خود را وارد کنید">
                                <i class="flaticon-account"></i>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <label>ایمیل شما</label>
                            <div class="form-group">
                                <input type="text" class="form-control" id="Email"
                                    placeholder="ایمیل خود را وارد کنید">
                                <i class="flaticon-email"></i>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <label>تلفن شما</label>
                            <div class="form-group">
                                <input type="text" class="form-control" id="Phone"
                                    placeholder="تلفن خود را وارد کنید">
                                <i class="flaticon-smartphone"></i>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <label>انتخاب خدمات</label>
                            <div class="form-group">
                                <select>
                                    <option value>انتخاب خدمات</option>
                                    <option value>مغز و اعصاب</option>
                                    <option value>مراقبت کودکان</option>
                                    <option value>آسیب شناسی</option>
                                    <option value>رادیولوژی</option>
                                    <option value>چشم پزشکی</option>
                                    <option value>مراقبت ویژه</option>
                                </select>
                                <i class="flaticon-heart"></i>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6" id="date4">
                            <label>تاریخ</label>
                            <div class="form-group">
                                <div class="input-group date">
                                    <input type="text" id="inputDate4" class="form-control" placeholder="تاریخ">
                                    <span class="input-group-addon">
                                    </span>
                                </div>
                                <i class="flaticon-appointment"></i>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <label>زمان</label>
                            <div class="form-group">
                                <select>
                                    <option value>انتخاب زمان</option>
                                    <option value="2">09.00 صبح تا 10.00 صبح</option>
                                    <option value="0">10.00 صبح تا 11.00 صبح</option>
                                    <option value="3">11.00 صبح تا 12.00 شب</option>
                                    <option value="4">12.00 شب تا 01.00 شب</option>
                                    <option value="5">01.00 شب تا 03.00 شب</option>
                                    <option value="6">04.00 شب تا 06.00 شب</option>
                                    <option value="7">07.00 شب تا 10.00 شب</option>
                                    <option value="8">10.00 شب تا 11.00 شب</option>
                                </select>
                                <i class="flaticon-clock"></i>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <label>پیام</label>
                            <div class="form-group">
                                <textarea name="message" class="form-control" id="Message" cols="30" rows="8" placeholder="پیام شما"></textarea>
                                <i class="flaticon-edit"></i>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="default-btn">ارسال درخواست</button>
                        </div>
                    </div>
                </form>
                <div class="shape">
                    <img src="images/appointment-shape.png" alt="Image">
                </div>
            </div>
        </div>
    </section>



    {{-- start of main counter --}}
    @include('components.main-counter')
    {{-- end of main counter --}}

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
    @section('page-title', 'طرح‌ها')
</body>

</html>
