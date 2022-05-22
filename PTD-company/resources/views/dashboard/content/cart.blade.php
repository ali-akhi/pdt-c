<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Atrio - Bootstrap 4 Admin Dashboard Template</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Plugins Core Css -->
    <link href="css/app.min.css" rel="stylesheet">
    <link href="css/materialize-rtl.min.css" rel="stylesheet">
    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">
    <!-- You can choose a theme from css/styles instead of get all themes -->
    <link href="css/all-themes.css" rel="stylesheet">
</head>

<body class="light rtl">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30">
                <img class="loading-img-spin" src="images/loading.png" alt="admin">
            </div>
            <p>لطفا صبر کنید...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="#" onClick="return false;" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="#" onClick="return false;" class="bars"></a>
                <a class="navbar-brand" href="index_2.html">
                    <img src="images/logo.png" alt>
                    <span class="logo-name">آتریو</span>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <a href="#" onClick="return false;" class="sidemenu-collapse">
                            <i class="nav-hdr-btn ti-align-left"></i>
                        </a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <!-- Full Screen Button -->
                    <li class="fullscreen">
                        <a href="javascript:;" class="fullscreen-btn">
                            <i class="nav-hdr-btn ti-fullscreen"></i>
                        </a>
                    </li>
                    <!-- #END# Full Screen Button -->
                    <!-- #START# Notifications-->
                    <li class="dropdown">
                        <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="nav-hdr-btn ti-bell"></i>
                       		<span class="notify"></span>
                            <span class="heartbeat"></span>
                        </a>
                        <ul class="dropdown-menu pullDown">
                            <li class="header">اطلاعیه ها</li>
                            <li class="body">
                                <ul class="menu">
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <span class="table-img msg-user">
                                                <img src="images/user1.jpg" alt>
                                            </span>
                                            <span class="menu-info">
                                                <span class="menu-title">آرش خادملو</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 14 دقیقه پیش
                                                </span>
                                                <span class="menu-desc">لطفا ایمیل خود را چک کنید.</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <span class="table-img msg-user">
                                                <img src="images/user2.jpg" alt>
                                            </span>
                                            <span class="menu-info">
                                                <span class="menu-title">آرش خادملو</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 22 دقیقه پیش
                                                </span>
                                                <span class="menu-desc">لطفا ایمیل خود را چک کنید.</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <span class="table-img msg-user">
                                                <img src="images/user3.jpg" alt>
                                            </span>
                                            <span class="menu-info">
                                                <span class="menu-title">آرش خادملو</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 3 ساعت پیش
                                                </span>
                                                <span class="menu-desc">لطفا ایمیل خود را چک کنید.</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <span class="table-img msg-user">
                                                <img src="images/user4.jpg" alt>
                                            </span>
                                            <span class="menu-info">
                                                <span class="menu-title">آرش خادملو</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 3 ساعت پیش
                                                </span>
                                                <span class="menu-desc">لطفا ایمیل خود را چک کنید.</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <span class="table-img msg-user">
                                                <img src="images/user5.jpg" alt>
                                            </span>
                                            <span class="menu-info">
                                                <span class="menu-title">آرش خادملو</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 3 ساعت پیش
                                                </span>
                                                <span class="menu-desc">لطفا ایمیل خود را چک کنید.</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <span class="table-img msg-user">
                                                <img src="images/user6.jpg" alt>
                                            </span>
                                            <span class="menu-info">
                                                <span class="menu-title">آرش خادملو</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 3 ساعت پیش
                                                </span>
                                                <span class="menu-desc">لطفا ایمیل خود را چک کنید.</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <span class="table-img msg-user">
                                                <img src="images/user7.jpg" alt>
                                            </span>
                                            <span class="menu-info">
                                                <span class="menu-title">آرش خادملو</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> دیروز
                                                </span>
                                                <span class="menu-desc">لطفا ایمیل خود را چک کنید.</span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#" onClick="return false;">مشاهده تمام اطلاعیه ها</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Notifications-->
                    <li class="dropdown user_profile">
                        <div class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{ asset('images/user.jpg') }}" alt="user">
                        </div>
                        <ul class="dropdown-menu pullDown">
                            <li class="body">
                                <ul class="user_dw_menu">
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <i class="material-icons">person</i>پروفایل
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <i class="material-icons">feedback</i>بازخورد
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <i class="material-icons">help</i>راهنما
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <i class="material-icons">power_settings_new</i>خروج
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Tasks -->
                    <li class="pull-right">
                        <a href="#" onClick="return false;" class="js-right-sidebar" data-close="true">
                            <i class="nav-hdr-btn ti-layout-grid2"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <div>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li>
                        <div class="sidebar-profile clearfix">
                            <div class="profile-img">
                                <img src="images/usrbig.jpg" alt="profile">
                            </div>
                            <div class="profile-info">
                                <h3>آرش خادملو</h3>
                                <p>خوش آمدید !</p>
                            </div>
                        </div>
                    </li>
                    <li class="header">-- اصلی</li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i class="menu-icon ti-home"></i>
                            <span>خانه</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="index_1.html">داشبورد 1</a>
                            </li>
                            <li>
                                <a href="dashboard2.html">داشبورد 2</a>
                            </li>
                            <li>
                                <a href="dashboard3.html">داشبورد 3</a>
                            </li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i class="menu-icon ti-shopping-cart-full"></i>
                            <span>فروشگاه</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="products.html">محصولات</a>
                            </li>
                            <li>
                                <a href="product-detail.html">جزئیات محصول</a>
                            </li>
                            <li class="active">
                                <a href="cart.html">سبد خرید</a>
                            </li>
                            <li>
                                <a href="product-list.html">فهرست محصول</a>
                            </li>
                            <li>
                                <a href="invoice.html">صورت حساب</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i class="menu-icon ti-crown"></i>
                            <span>ابزارک ها</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="chart-widget.html">ابزارک نمودار</a>
                            </li>
                            <li>
                                <a href="data-widget.html">ابزارک داده</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i class="menu-icon ti-magnet"></i>
                            <span>رابط کاربری</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="alerts.html">هشدارها</a>
                            </li>
                            <li>
                                <a href="animations.html">انیمیشن ها</a>
                            </li>
                            <li>
                                <a href="badges.html">نشان ها</a>
                            </li>
                            <li>
                                <a href="modal.html">مودال</a>
                            </li>
                            <li>
                                <a href="buttons.html">دکمه ها</a>
                            </li>
                            <li>
                                <a href="collapse.html">سقوط</a>
                            </li>
                            <li>
                                <a href="dialogs.html">دیالوگ ها</a>
                            </li>
                            <li>
                                <a href="cards.html">کارت ها</a>
                            </li>
                            <li>
                                <a href="labels.html">برچسب ها</a>
                            </li>
                            <li>
                                <a href="list-group.html">گروه فرست</a>
                            </li>
                            <li>
                                <a href="media-object.html">شی رسانه</a>
                            </li>
                            <li>
                                <a href="notifications.html">اطلاعیه ها</a>
                            </li>
                            <li>
                                <a href="preloaders.html">پیش بارگذارها</a>
                            </li>
                            <li>
                                <a href="progressbars.html">نوارهای پیشرفت</a>
                            </li>
                            <li>
                                <a href="range-sliders.html">اسلایدرهای محدوده</a>
                            </li>
                            <li>
                                <a href="sortable-nestable.html">قابل مرتب شدن و ناپایداری</a>
                            </li>
                            <li>
                                <a href="tabs.html">زبانه ها</a>
                            </li>
                            <li>
                                <a href="waves.html">امواج</a>
                            </li>
                            <li>
                                <a href="typography.html">تایپوگرافی</a>
                            </li>
                            <li>
                                <a href="helper-classes.html">کلاس های کمکی</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i class="menu-icon ti-face-smile"></i>
                            <span>آیکون ها</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="material-icons.html">آیکون های متریال</a>
                            </li>
                            <li>
                                <a href="font-awesome.html">فونت Awesome</a>
                            </li>
                            <li>
                                <a href="simple-line-icons.html">آیکون های خط ساده</a>
                            </li>
                            <li>
                                <a href="themify.html">آیکون های Themify</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i class="menu-icon ti-layout"></i>
                            <span>فرم ها</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="basic-form-elements.html">فرم پایه</a>
                            </li>
                            <li>
                                <a href="advanced-form-elements.html">فرم پیشرفته</a>
                            </li>
                            <li>
                                <a href="form-examples.html">مثال های فرم</a>
                            </li>
                            <li>
                                <a href="form-validation.html">اعتبار سنجی فرم</a>
                            </li>
                            <li>
                                <a href="form-wizard.html">فرم جادویی</a>
                            </li>
                            <li>
                                <a href="editors.html">ویرایشگرها</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i class="menu-icon ti-menu-alt"></i>
                            <span>جداول</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="normal-tables.html">جداول معمولی</a>
                            </li>
                            <li>
                                <a href="advance-tables.html">جداول داده پیشرفته</a>
                            </li>
                            <li>
                                <a href="export-table.html">جدول خروجی</a>
                            </li>
                            <li>
                                <a href="child-row-table.html">جدول ردیف کودک</a>
                            </li>
                            <li>
                                <a href="group-table.html">گروه بندی</a>
                            </li>
                            <li>
                                <a href="editable-table.html">جداول قابل ویرایش</a>
                            </li>
                        </ul>
                    </li>
                    <li class="header">-- برنامه ها</li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i class="menu-icon ti-email"></i>
                            <span>ایمیل</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="inbox.html">صندوق ورودی</a>
                            </li>
                            <li>
                                <a href="compose.html">نوشتن</a>
                            </li>
                            <li>
                                <a href="view-mail.html">خواندن ایمیل</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="chat.html">
                            <i class="menu-icon ti-comment"></i>
                            <span>چت</span>
                        </a>
                    </li>
                    <li>
                        <a href="calendar.html">
                            <i class="menu-icon ti-calendar"></i>
                            <span>تقویم</span>
                        </a>
                    </li>
                    <li>
                        <a href="task.html">
                            <i class="menu-icon ti-check-box"></i>
                            <span>نوار وظیفه</span>
                        </a>
                    </li>
                    <li>
                        <a href="portfolio.html">
                            <i class="menu-icon ti-briefcase"></i>
                            <span>نمونه کارها</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i class="menu-icon ti-vector"></i>
                            <span>سایر</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="dragdrop.html">کشیدن و رها کردن</a>
                            </li>
                            <li>
                                <a href="contact_list.html">فهرست تماس</a>
                            </li>
                            <li>
                                <a href="contact_grid.html">گرید تماس</a>
                            </li>
                            <li>
                                <a href="support.html">پشتیبانی</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i class="menu-icon ti-stats-up"></i>
                            <span>نمودارها</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="amchart.html">نمودار AM</a>
                            </li>
                            <li>
                                <a href="echart.html">نمودار E</a>
                            </li>
                            <li>
                                <a href="apexcharts.html">نمودارهای Apex</a>
                            </li>
                            <li>
                                <a href="morris.html">موریس</a>
                            </li>
                            <li>
                                <a href="chartjs.html">نمودار JS</a>
                            </li>
                            <li>
                                <a href="sparkline.html">اسپارک لاین</a>
                            </li>
                            <li>
                                <a href="jquery-knob.html">جی کوئری Knoob</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i class="menu-icon ti-map-alt"></i>
                            <span>نقشه ها</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="google.html">نقشه گوگل</a>
                            </li>
                            <li>
                                <a href="jqvmap.html">نقشه وکتور</a>
                            </li>
                            <li>
                                <a href="datamap.html">نقشه داده</a>
                            </li>
                        </ul>
                    </li>
                    <li class="header">-- اضافی</li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i class="menu-icon ti-split-v"></i>
                            <span>خط زمانی</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="timeline.html">خط زمانی 1</a>
                            </li>
                            <li>
                                <a href="timeline2.html">خط زمانی 2</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i class="menu-icon ti-image"></i>
                            <span>رسانهها</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="image-gallery.html">گالری تصویر</a>
                            </li>
                            <li>
                                <a href="carousel.html">اسلایدر Carousel</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i class="menu-icon ti-user"></i>
                            <span>احراز هویت</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="login-register.html">ورود و ثبت نام</a>
                            </li>
                            <li>
                                <a href="sign-in.html">ورود</a>
                            </li>
                            <li>
                                <a href="sign-up.html">ثبت نام</a>
                            </li>
                            <li>
                                <a href="forgot-password.html">فراموشی رمزعبور</a>
                            </li>
                            <li>
                                <a href="locked.html">قفل شده</a>
                            </li>
                            <li>
                                <a href="404.html">404 - یافت نشد</a>
                            </li>
                            <li>
                                <a href="500.html">500 - خطای سرور</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i class="menu-icon ti-receipt"></i>
                            <span>صفحات اضافی</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="profile.html">پروفایل</a>
                            </li>
                            <li>
                                <a href="pricing.html">قیمت گذاری</a>
                            </li>
                            <li>
                                <a href="faqs.html">پرسش و پاسخ</a>
                            </li>
                            <li>
                                <a href="blank.html">صفحه خالی</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i class="menu-icon ti-angle-double-down"></i>
                            <span>منوی چندسطحی</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="#" onClick="return false;">
                                    <span>آیتم منو</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" onClick="return false;">
                                    <span>آیتم منو - 2</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" onClick="return false;" class="menu-toggle">
                                    <span>سطح - 2</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <span>آیتم منو</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;" class="menu-toggle">
                                            <span>سطح - 3</span>
                                        </a>
                                        <ul class="ml-menu">
                                            <li>
                                                <a href="#" onClick="return false;">
                                                    <span>سطح - 4</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <hr>
                        <div class="leftSideProgress">
                            <div class="progress-list">
                                <div class="details">
                                    <div class="title">استفاده از دیسک</div>
                                </div>
                                <div class="status">
                                    <span>52</span>%
                                </div>
                                <div class="progress-s progress">
                                    <div class="progress-bar progress-bar-success width-per-52" role="progressbar" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="leftSideProgress">
                            <div class="progress-list m-b-10">
                                <div class="details">
                                    <div class="title">بارگذاری سرور</div>
                                </div>
                                <div class="status">
                                    <span>79</span>%
                                </div>
                                <div class="progress-s progress">
                                    <div class="progress-bar progress-bar-warning width-per-79" role="progressbar" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation">
                    <a href="#skins" data-toggle="tab" class="active">پوسته ها</a>
                </li>
                <li role="presentation">
                    <a href="#settings" data-toggle="tab">تنظیمات</a>
                </li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane in active in active stretchLeft" id="skins">
                    <div class="demo-skin">
                        <div class="rightSetting">
                            <p>تنظیمات عمومی</p>
                            <ul class="setting-list list-unstyled m-t-20">
                                <li>
                                    <div class="form-check">
                                        <div class="form-check m-l-10">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value checked> ذخیره تاریخچه
                                                <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <div class="form-check m-l-10">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value checked> نمایش وضعیت
                                                <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <div class="form-check m-l-10">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value checked> ثبت مسئله خودکار
                                                <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <div class="form-check m-l-10">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value checked> نمایش وضعیت به همه
                                                <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="rightSetting">
                            <p>رنگ منو نوار کناری</p>
                            <button type="button" class="btn btn-sidebar-light btn-border-radius p-l-20 p-r-20">روشن</button>
                            <button type="button" class="btn btn-sidebar-dark btn-default btn-border-radius p-l-20 p-r-20">تاریک</button>
                        </div>
                        <div class="rightSetting">
                            <p>رنگ قالب</p>
                            <button type="button" class="btn btn-theme-light btn-border-radius p-l-20 p-r-20">روشن</button>
                            <button type="button" class="btn btn-theme-dark btn-default btn-border-radius p-l-20 p-r-20">تاریک</button>
                        </div>
                        <div class="rightSetting">
                            <p>پوسته ها</p>
                            <ul class="demo-choose-skin choose-theme list-unstyled">
                                <li data-theme="black" class="actived">
                                    <div class="black-theme"></div>
                                </li>
                                <li data-theme="white">
                                    <div class="white-theme white-theme-border"></div>
                                </li>
                                <li data-theme="purple">
                                    <div class="purple-theme"></div>
                                </li>
                                <li data-theme="blue">
                                    <div class="blue-theme"></div>
                                </li>
                                <li data-theme="cyan">
                                    <div class="cyan-theme"></div>
                                </li>
                                <li data-theme="green">
                                    <div class="green-theme"></div>
                                </li>
                                <li data-theme="orange">
                                    <div class="orange-theme"></div>
                                </li>
                            </ul>
                        </div>
                        <div class="rightSetting">
                            <p>فضای دیسک</p>
                            <div class="sidebar-progress">
                                <div class="progress m-t-20">
                                    <div class="progress-bar l-bg-cyan shadow-style width-per-45" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="progress-description">
                                    <small>26% باقی مانده</small>
                                </span>
                            </div>
                        </div>
                        <div class="rightSetting m-b-15">
                            <p>بارگذاری سرور</p>
                            <div class="sidebar-progress">
                                <div class="progress m-t-20">
                                    <div class="progress-bar l-bg-orange shadow-style width-per-63" role="progressbar" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="progress-description">
                                    <small>بسیار بارگذاری شده</small>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane stretchRight" id="settings">
                    <div class="demo-settings">
                        <p>تنظیمات عمومی</p>
                        <ul class="setting-list">
                            <li>
                                <span>گزارش استفاده از پانل</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox" checked>
                                        <span class="lever switch-col-green"></span>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <span>تغییر مسیر ایمیل</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox">
                                        <span class="lever switch-col-blue"></span>
                                    </label>
                                </div>
                            </li>
                        </ul>
                        <p>تنظیمات سیستم</p>
                        <ul class="setting-list">
                            <li>
                                <span>اطلاعیه ها</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox" checked>
                                        <span class="lever switch-col-purple"></span>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <span>به روز رسانی خودکار</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox" checked>
                                        <span class="lever switch-col-cyan"></span>
                                    </label>
                                </div>
                            </li>
                        </ul>
                        <p>تنظیمات حساب</p>
                        <ul class="setting-list">
                            <li>
                                <span>آفلاین</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox" checked>
                                        <span class="lever switch-col-red"></span>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <span>مجوز محل سکونت</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox">
                                        <span class="lever switch-col-lime"></span>
                                    </label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">سبد خرید</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="index_1.html">
                                    <i class="fas fa-home"></i> خانه</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="#" onClick="return false;">فروشگاه</a>
                            </li>
                            <li class="breadcrumb-item active">سبد خرید</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="card-body ">
                            <div class="wrapper wrapper-content animated fadeInRight">
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="ibox">
                                            <div class="ibox-title">
                                                <span class="pull-right">(<strong>3</strong>) آیتم</span>
                                                <h5>اقلام در سبد خرید شما</h5>
                                            </div>
                                            <div class="ibox-content">
                                                <div class="table-responsive">
                                                    <table class="table shoping-cart-table">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="cart-product-imitation">
                                                                        <img src="images/p9.jpg" alt>
                                                                    </div>
                                                                </td>
                                                                <td class="desc">
                                                                    <h3>
                                                                        <a href="#" class="text-navy">
                                                                            فندک پرمیوم
                                                                        </a>
                                                                    </h3>
                                                                    <p class="small">
                                                                        <strong>رنگ:</strong> مشکی
                                                                    </p>
                                                                    <p class="small">
                                                                        <strong>فروشنده:</strong> تکنولوژی اطلاعات
                                                                    </p>
                                                                    <div class="small m-b-none">
                                                                        <p>تحویل در چهارشنبه، 14 مرداد | رایگان</p>
                                                                    </div>
                                                                    <div class="m-t-sm">
                                                                        <a href="#" class="text-muted"><i class="fa fa-gift"></i>
                                                                            اضافه کردن بسته هدیه</a>
                                                                        |
                                                                        <a href="#" class="text-muted"><i class="fa fa-trash"></i>
                                                                            حذف آیتم</a>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    180000تومان
                                                                    <span class="small text-muted text-price">230000تومان</span>
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" placeholder="1">
                                                                </td>
                                                                <td>
                                                                    <h4>
                                                                        180000تومان
                                                                    </h4>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="ibox-content">
                                                <div class="table-responsive">
                                                    <table class="table shoping-cart-table">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="cart-product-imitation">
                                                                        <img src="images/p8.jpg" alt>
                                                                    </div>
                                                                </td>
                                                                <td class="desc">
                                                                    <h3>
                                                                        <a href="#" class="text-navy">
                                                                            عینک آفتابی
                                                                        </a>
                                                                    </h3>
                                                                    <p class="small">
                                                                        <strong>رنگ:</strong> مشکی
                                                                    </p>
                                                                    <p class="small">
                                                                        <strong>فروشنده:</strong> تکنولوژی اطلاعات
                                                                    </p>
                                                                    <div class="small m-b-none">
                                                                        <p>تحویل در چهارشنبه، 14 مرداد | رایگان</p>
                                                                    </div>
                                                                    <div class="m-t-sm">
                                                                        <a href="#" class="text-muted"><i class="fa fa-gift"></i>
                                                                            اضافه کردن بسته هدیه</a>
                                                                        |
                                                                        <a href="#" class="text-muted"><i class="fa fa-trash"></i>
                                                                            حذف آیتم</a>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    12000تومان
                                                                    <span class="small text-muted text-price">13000تومان</span>
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" placeholder="1">
                                                                </td>
                                                                <td>
                                                                    <h4>
                                                                        12000تومان
                                                                    </h4>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="ibox-content">
                                                <div class="table-responsive">
                                                    <table class="table shoping-cart-table">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="cart-product-imitation">
                                                                        <img src="images/p3.jpg" alt>
                                                                    </div>
                                                                </td>
                                                                <td class="desc">
                                                                    <h3>
                                                                        <a href="#" class="text-navy">
                                                                            صندلی چوبی
                                                                        </a>
                                                                    </h3>
                                                                    <p class="small">
                                                                        <strong>رنگ:</strong> مشکی
                                                                    </p>
                                                                    <p class="small">
                                                                        <strong>فروشنده:</strong> تکنولوژی اطلاعات
                                                                    </p>
                                                                    <div class="small m-b-none">
                                                                        <p>تحویل در چهارشنبه، 14 مرداد | رایگان</p>
                                                                    </div>
                                                                    <div class="m-t-sm">
                                                                        <a href="#" class="text-muted"><i class="fa fa-gift"></i>
                                                                            اضافه کردن بسته هدیه</a>
                                                                        |
                                                                        <a href="#" class="text-muted"><i class="fa fa-trash"></i>
                                                                            حذف آیتم</a>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    28000تومان
                                                                    <span class="small text-muted text-price">33000تومان</span>
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" placeholder="1">
                                                                </td>
                                                                <td>
                                                                    <h4>
                                                                        28000تومان
                                                                    </h4>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="ibox-content">
                                                <button type="button" class="btn btn-info btn-border-radius waves-effect pull-right"><i class="fa fa fa-shopping-cart"></i> پرداخت</button>
                                                <button type="button" class="btn btn-danger btn-border-radius waves-effect"><i class="fa fa-arrow-left"></i> ادامه خرید</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="ibox">
                                            <div class="ibox-title">
                                                <h5>خلاصه سبد خرید</h5>
                                            </div>
                                            <div class="ibox-content">
                                                <span>
                                                    مجموع
                                                </span>
                                                <h2 class="font-bold">
                                                    58000تومان
                                                </h2>
                                                <hr>
                                                <div class="m-t-sm">
                                                    <div class="pull-left m-r-10">
                                                        <button type="button" class="btn btn-info btn-border-radius waves-effect pull-right"><i class="fa fa fa-shopping-cart"></i> پرداخت</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ibox">
                                            <div class="ibox-title">
                                                <h5>پشتیبانی</h5>
                                            </div>
                                            <div class="ibox-content text-center">
                                                <h3><i class="fa fa-phone"></i> +00 123 456 789</h3>
                                                <span class="small">
                                                    لطفا اگر سوالی دارید با ما تماس بگیرید ما 24 ساعته در دسترس هستیم.
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="js/app.min.js"></script>
    <!-- Custom Js -->
    <script src="js/admin.js"></script>
</body>

</html>
