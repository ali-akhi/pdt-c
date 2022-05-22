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

    <div class="page-title-area bg-11">
        <div class="container">
            <div class="page-title-content">
                <h2>تماس با ما</h2>
                <ul>
                    <li>
                        <a href="index_1.html">
                            صفحه اصلی
                        </a>
                    </li>
                    <li>صفحات</li>
                    <li class="active">تماس با ما</li>
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


    <section class="contact-info-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 p-0">
                    <div class="single-contact-info">
                        <i class="bx bx-location-plus"></i>
                        <h3>موقعیت 1</h3>
                        <p>ایران، استان تهران، میدان آزادی</p>
                        <span>ایمیل: <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                data-cfemail="fb939e979794bb989a8d94898f">[email&#160;protected]</a></span>
                        <span>تلفن: 12345678-021</span>
                    </div>
                </div>
                <div class="col-lg-3 p-0">
                    <div class="single-contact-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.1583091352!2d-74.11976373946234!3d40.69766374859258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1588019781257!5m2!1sen!2sbd"
                            style="border:0;"></iframe>
                    </div>
                </div>
                <div class="col-lg-3 p-0">
                    <div class="single-contact-info">
                        <i class="bx bx-location-plus"></i>
                        <h3>موقعیت 2</h3>
                        <p>ایران، استان تهران، میدان آزادی</p>
                        <span>ایمیل: <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                data-cfemail="620a070e0e0d220103140d1016">[email&#160;protected]</a></span>
                        <span>تلفن: 12345678-021</span>
                    </div>
                </div>
                <div class="col-lg-3 p-0">
                    <div class="single-contact-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29624007.58460168!2d115.2297986315677!3d-24.992915938390162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2b2bfd076787c5df%3A0x538267a1955b1352!2sAustralia!5e0!3m2!1sen!2sbd!4v1588020297752!5m2!1sen!2sbd"
                            style="border:0;"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="main-contact-area contact ptb-100">
        <div class="container">
            <div class="section-title">
                <span class="top-title">تماس با ما</span>
                <h2>انتقادات و پیشنهادات خود را بیان کنید</h2>
                <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده
                    است. چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="contact-wrap contact-pages mb-0">
                        <div class="contact-form">
                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <label>نام</label>
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control" required
                                                data-error="لطفا نام خود را وارد کنید" placeholder="نام شما">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <label>ایمیل</label>
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control" required
                                                data-error="لطفا ایمیل خود را وارد کنید" placeholder="ایمیل شما">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <label>تلفن</label>
                                        <div class="form-group">
                                            <input type="text" name="phone_number" id="phone_number" required
                                                data-error="لطفا تلفن خود را وارد کنید" class="form-control"
                                                placeholder="تلفن شما">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <label>موضوع</label>
                                        <div class="form-group">
                                            <input type="text" name="msg_subject" id="msg_subject"
                                                class="form-control" required data-error="لطفا موضوع خود را وارد کنید"
                                                placeholder="موضوع شما">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <label>پیام</label>
                                        <div class="form-group">
                                            <textarea name="message" class="form-control textarea-hight" id="message" cols="30" rows="5" required
                                                data-error="پیام خود را بنویسید" placeholder="پیام شما"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="contact-num">
                                            <h3>موارد اضطراری</h3>
                                            <span><a href="tel:021-12345678">021-12345678</a></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <button type="submit" class="default-btn btn-two">
                                            ارسال پیام
                                        </button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </form>
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
    @section('page-title', 'تماس با ما')
</body>

</html>
