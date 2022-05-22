@extends('layouts.partials.title')
<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- style links --}}
    @include('layouts.partials.main-style-link')
</head>

<body>
    {{-- loader --}}
    @include('components.loader')


    {{-- start of header --}}
    @include('layouts.master.header')
    {{-- end of header --}}


    <!-- Start Page Title Area -->
    <div class="page-title-area bg-7">
        <div class="container">
            <div class="page-title-content">
                <h2>ثبت نام</h2>
                <ul>
                    <li>
                        <a href="index_1.html">
                            صفحه اصلی
                        </a>
                    </li>
                    <li>صفحات</li>
                    <li>کاربران</li>
                    <li class="active">ثبت نام</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- End Page Title Area -->

    <!-- Start Sign Up Area -->
    <section class="user-area-all-style sign-up-area ptb-100">
        <div class="container">
            <div class="section-title">
                <h2>ایجاد یک حساب کاربری!</h2>
                <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده
                    است. چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-form-action">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="name" :value="old('name')"
                                            placeholder=" نام کاربری">
                                    </div>
                                    @error('name')
                                        <p>{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <input class="form-control" type="email" name="email" :value="old('email')"
                                            placeholder="آدرس ایمیل">
                                    </div>
                                    @error('email')
                                        <p>{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <input class="form-control" type="number" name="mobile" :value="old('mobile')"
                                            placeholder="شماره تماس">
                                    </div>
                                    @error('mobile')
                                        <p>{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <input class="form-control" type="password" name="password"
                                            placeholder="گذرواژه" required>
                                    </div>
                                    @error('password')
                                        <p>{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12 col-sm-12 ">
                                    <div class="form-group">
                                        <input class="form-control" type="password" name="password_confirmation"
                                            required" placeholder="تکرار گذرواژه">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 form-condition">
                                    <div class="agree-label">
                                        <input type="checkbox" id="chb1">
                                        <label for="chb1">
                                            با شرایط و ضوابط موافقم
                                            <a href="{{ route('terms') }}">حریم خصوصی</a>
                                        </label>
                                    </div>
                                    <div class="agree-label">
                                        <input type="checkbox" id="chb2">
                                        <label for="chb2">
                                            با شرایط و ضوابط موافقم
                                            <a href="{{ route('terms') }}">شرایط و ضوابط</a>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="default-btn btn-two" type="submit">
                                        ثبت نام
                                    </button>
                                </div>
                                <div class="col-12">
                                    <p class="account-desc">
                                        حساب کاربری دارید؟
                                        <a href="{{ route('login') }}"> ورود</a>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sign-in-img"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Sign Up Area -->

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
    @section('page-title', 'ورود')
</body>

</html>
