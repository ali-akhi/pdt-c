<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Atrio - Bootstrap 4 Admin Dashboard Template</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- style links -->
    @include('layouts.partials.dashboard-style-link')

</head>

<body class="light rtl">
    <script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
    {{-- @if (Session::get('success'))
        <script>
            Swal.fire({
                title: 'Error!',
                text: 'Do you want to continue',
                icon: 'error',
                confirmButtonText: 'Cool'
            })
        </script>
    @endif --}}

    @include('components.dashboard-preloader')

    @include('layouts.master.dashboard-top-nav')
    <!-- #Top Bar -->
    <div>
        <!-- Left Sidebar -->
        @include('layouts.master.dashboard-left-side-bar')
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        @include('layouts.master.dashboard-righ-side-bar')
        <!-- #END# Right Sidebar -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">داشبورد 2</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="index_1.html">
                                    <i class="fas fa-home"></i> خانه</a>
                            </li>
                            <li class="breadcrumb-item active">داشبورد 2</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Your content goes here  -->
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card project_widget shadow">
                        <div class="body">
                            <ul class="nav ">
                                {{-- @if ($user->profile) --}}
                                <h4>اطلاعات پروفایل شما ثبت‌ شده است.</h4>
                                <li class="nav-item">
                                    <a class="btn-hover btn-border-radius bg-green-active" href="">ویرایش
                                        اطلاعات</a>
                                </li>
                                {{-- @else --}}
                                <h4>هنوز اطلاعات پروفایل خود را تکمیل نکرده‌اید.</h4>
                                <li class="nav-item">
                                    <a class="btn-hover btn-border-radius bg-green-active" href=""
                                        data-toggle="tab">تکمیل
                                        اطلاعات</a>
                                </li>
                                {{-- @endif --}}

                            </ul>
                        </div>
                    </div>
                </div>

                {{-- @isset($user->profile) --}}
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="m-b-20">
                                <div class="contact-grid">
                                    <div class="profile-header bg-dark">
                                        <div class="user-name">
                                            رضا علیزاده
                                        </div>
                                        <div class="name-center">کارگر</div>
                                    </div>
                                    <img src="{{ asset('images/usrbig.jpg') }}" class="user-img" alt>
                                    <p>
                                        این متن یک بیوگرافی از کاربر است
                                    </p>
                                    <div>
                                        <span class="phone">
                                            <i class="material-icons">phone</i>۰۹۱۰۹۰۳۷۷۰۷</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <h5>۱۲</h5>
                                            <small>دنبال کردن</small>
                                        </div>
                                        <div class="col-4">
                                            <h5>۳۲۲</h5>
                                            <small>دنبال کننده</small>
                                        </div>
                                        <div class="col-4">
                                            <h5>565</h5>
                                            <small>پست</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <ul class="nav nav-tabs">
                                <li class="nav-item m-l-10">
                                    <a class="nav-link active" data-toggle="tab" href="#about">درباره</a>
                                </li>
                                <li class="nav-item m-l-10">
                                    <a class="nav-link" data-toggle="tab" href="#skills">مهارت ها</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane body active" id="about">
                                    <p class="text-default">این یک بیو است</p>
                                    <small class="text-muted">آدرس ایمیل: </small>
                                    <p>ali.alizade@gmail.com</p>
                                    <hr>
                                    <small class="text-muted">تلفن: </small>
                                    <p>09101234567</p>
                                    <hr>
                                    <small class="text-muted">شغل: </small>
                                    <p>کارگر</p>
                                    <hr>
                                    <small class="text-muted">نقش: </small>
                                    <p>معاون</p>
                                    <hr>
                                </div>
                                <div class="tab-pane body" id="skills">
                                    <ul class="list-unstyled">
                                        <li>
                                            <div>فتوشاپ</div>
                                            <div class="progress skill-progress m-t-20">
                                                <div class="progress-bar l-bg-green width-per-45" role="progressbar"
                                                    aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>وردپرس</div>
                                            <div class="progress skill-progress m-b-20">
                                                <div class="progress-bar l-bg-orange width-per-38" role="progressbar"
                                                    aria-valuenow="38" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>HTML</div>
                                            <div class="progress skill-progress m-b-20">
                                                <div class="progress-bar l-bg-cyan width-per-39" role="progressbar"
                                                    aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>آنگولار</div>
                                            <div class="progress skill-progress m-b-20">
                                                <div class="progress-bar l-bg-purple width-per-70" role="progressbar"
                                                    aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="project" aria-expanded="true">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="card project_widget">
                                        <div class="header">
                                            <h2>درباره</h2>
                                        </div>
                                        <div class="body">
                                            <div class="row">
                                                <div class="col-md-3 col-6 b-r">
                                                    <strong>نام کامل</strong>
                                                    <br>
                                                    <p class="text-muted">
                                                        علی آخی</p>
                                                </div>
                                                <div class="col-md-3 col-6 b-r">
                                                    <strong>موبایل</strong>
                                                    <br>
                                                    <p class="text-muted">۰۹۱۰۱۲۳۴۵۶۷</p>
                                                </div>
                                                <div class="col-md-3 col-6 b-r">
                                                    <strong>ایمیل</strong>
                                                    <br>
                                                    <p class="text-muted">test@gmail.com</p>
                                                </div>
                                                <div class="col-md-3 col-6">
                                                    <strong>شغل</strong>
                                                    <br>
                                                    <p class="text-muted">کارگر</p>
                                                </div>
                                            </div>
                                            <p class="m-t-30">توضیحات خام در مورد کاربر</p>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="card project_widget">
                                        <div class="header">
                                            <h2 class="header bg-green-active border-radius-per-10 ">بیوگرافی</h2>
                                        </div>
                                        <div class="body">
                                            <p class="m-t-30">متن بیوگرافی</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="card project_widget">
                                        <div class="header">
                                            <h2 class="header bg-green-active border-radius-per-10">تجربه من</h2>
                                        </div>
                                        <div class="body">
                                            <p class="m-t-30">این متن توضیح کاربر در مورد خودش است</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="timeline" aria-expanded="false">
                        </div>
                        <div role="tabpanel" class="tab-pane" id="usersettings" aria-expanded="false">
                            <div class="card">
                                <div class="header">
                                    <h2>
                                        <strong>تنظیمات</strong> امنیتی
                                    </h2>
                                </div>
                                <div class="body">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="نام کاربری">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="رمزعبور فعلی">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="رمزعبور جذید">
                                    </div>
                                    <button class="btn btn-info btn-round">ذخیره تغییرات</button>
                                </div>
                            </div>
                            <div class="card">
                                <div class="header">
                                    <h2>
                                        <strong>تنظیمات</strong> حساب
                                    </h2>
                                </div>
                                <div class="body">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="نام اصلی">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="نام خانوادگی">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="شهر">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="ایمیل">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="کشور">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea rows="4" class="form-control no-resize" placeholder="خط آدرس 1"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-check m-l-10">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" id="checkbox"
                                                            name="checkbox"> قابلیت مشاهده برای همه
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check m-l-10">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" id="checkbox1"
                                                            name="checkbox"> اعلان های کار جدید
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check m-l-10">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" id="checkbox2"
                                                            name="checkbox"> اعلان درخواست دوست جدید
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="btn btn-primary btn-round">ذخیره تغییرات</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- @endisset --}}

    </section>
    @include('layouts.partials.dashboard-script-style')
    {{-- <script src="{{ asset('js/dashboard/user-management-ajax.js') }}"></script> --}}
</body>

</html>
