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

    <div class="page-title-area bg-6">
        <div class="container">
            <div class="page-title-content">
                <h2>ورود کاربران</h2>
                <ul>
                    <li>
                        <a href="index_1.html">
                            صفحه اصلی
                        </a>
                    </li>
                    <li>صفحات</li>
                    <li>کاربران</li>
                    <li class="active">ورود کاربران</li>
                </ul>
            </div>
        </div>
    </div>


    <section class="user-area-all-style log-in-area ptb-100">
        <div class="container">
            <div class="section-title">
                <h2>ورود به حساب کاربری!</h2>
                <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده
                    است. چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-form-action">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="email" placeholder="نام کاربری" :value="old('email')" required>
                                    </div>
                                    <div>
                                        @error('email')
                                            <p>{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" type="password" name="password"
                                            placeholder="گذرواژه" required>
                                    </div>
                                    <div>
                                        @error('password')
                                            <p>{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 form-condition">
                                    <div class="agree-label">
                                        @if (Route::has('password.request'))
                                            <input type="checkbox" id="chb1">
                                            <label for="chb1">
                                                مرا به خاطر بسپار
                                            </label>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <a class="forget" href="{{ route('password.request') }}">فراموشی
                                        گذرواژه؟</a>
                                </div>
                                <div class="col-12">
                                    <button class="default-btn btn-two" type="submit">
                                        ورود
                                    </button>
                                </div>
                                <div class="col-12">
                                    <p class="account-desc">
                                        حساب کاربری ندارید؟
                                        <a href="{{ route('register') }}">ثبت نام</a>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="log-in-img"></div>
                </div>
            </div>
        </div>
    </section>


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
