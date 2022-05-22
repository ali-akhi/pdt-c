<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Atrio - Bootstrap 4 Admin Dashboard Template</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- style links -->
    @include('layouts.partials.dashboard-style-link')

</head>

<body class="light rtl">
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
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="banner-card total-card">
                        <div class="card-block">
                            <div class="text-center p-t-20">
                                <h3>مجموع فروش</h3>
                                <p class="m-0">4000</p>
                            </div>
                        </div>
                        <canvas id="banner-chart1"></canvas>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="banner-card total-card">
                        <div class="card-block">
                            <div class="text-center p-t-20">
                                <h3>بازدید کنندگان</h3>
                                <p class="m-0">3345</p>
                            </div>
                        </div>
                        <canvas id="banner-chart2"></canvas>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="banner-card total-card">
                        <div class="card-block">
                            <div class="text-center p-t-20">
                                <h3>سفارشات</h3>
                                <p class="m-0">2364</p>
                            </div>
                        </div>
                        <canvas id="banner-chart3"></canvas>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="banner-card total-card">
                        <div class="card-block">
                            <div class="text-center p-t-20">
                                <h3>سود</h3>
                                <p class="m-0">75999 تومان</p>
                            </div>
                        </div>
                        <canvas id="banner-chart4"></canvas>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <!-- Bar chart with line -->
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>نمودار</strong> میانگین</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown"
                                        role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="#" onClick="return false;">اقدام</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">اقدامی دیگر</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">چیز دیگری اینجا</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div id="echart_sonar" class="chartsh"></div>
                        </div>
                    </div>
                </div>
                <!-- line chart -->
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="plain-card">
                        <div class="card-inner">
                            <h6 class="tx-primary m-b-10">گزارش فروش</h6>
                            <div class="row">
                                <div class="col col-block">
                                    <label class="font-14">امروز</label>
                                    <p>1,898</p>
                                </div>
                                <div class="col col-block">
                                    <label class="font-14">این هفته</label>
                                    <p>32,112</p>
                                </div>
                                <div class="col col-block">
                                    <label class="font-14">این ماه</label>
                                    <p>72,067</p>
                                </div>
                            </div>
                            <div class="progress shadow-style">
                                <div class="progress-bar l-bg-cyan width-per-70" role="progressbar" aria-valuenow="62"
                                    aria-valuemin="0" aria-valuemax="100">70%</div>
                            </div>
                        </div>
                    </div>
                    <div class="plain-card">
                        <div class="card-inner">
                            <h6 class="tx-primary m-b-10">گزارش فروش</h6>
                            <div class="row">
                                <div class="col col-block">
                                    <label class="font-14">امروز</label>
                                    <p>1,898</p>
                                </div>
                                <div class="col col-block">
                                    <label class="font-14">این هفته</label>
                                    <p>32,112</p>
                                </div>
                                <div class="col col-block">
                                    <label class="font-14">این ماه</label>
                                    <p>72,067</p>
                                </div>
                            </div>
                            <div class="progress shadow-style">
                                <div class="progress-bar l-bg-purple width-per-70" role="progressbar" aria-valuenow="62"
                                    aria-valuemin="0" aria-valuemax="100">70%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>سفارشات</strong> اخیر
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown"
                                        role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="#" onClick="return false;">اقدام</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">اقدامی دیگر</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">چیز دیگری اینجا</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="tableBody">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>نام</th>
                                            <th>آیتم</th>
                                            <th>وضعیت</th>
                                            <th>مقدار</th>
                                            <th>پیشرفت</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="table-img">
                                                <img src="{{ asset('images/user.jpg') }}" alt>
                                            </td>
                                            <td>آرش خادلو</td>
                                            <td>آیفون ایکس</td>
                                            <td>
                                                <span class="label bg-green shadow-style">قرار داده شده</span>
                                            </td>
                                            <td>2</td>
                                            <td>
                                                <div class="progress shadow-style">
                                                    <div class="progress-bar l-bg-green width-per-62" role="progressbar"
                                                        aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="table-img">
                                                <img src="{{ asset('images/user.jpg') }}" alt>
                                            </td>
                                            <td>آرش خادملو</td>
                                            <td>پیکسل 2</td>
                                            <td>
                                                <span class="label l-bg-purple shadow-style">ارسال شده</span>
                                            </td>
                                            <td>1</td>
                                            <td>
                                                <div class="progress shadow-style">
                                                    <div class="progress-bar l-bg-purple width-per-40"
                                                        role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="table-img">
                                                <img src="images/user.jpg" alt>
                                            </td>
                                            <td>آرش خادملو</td>
                                            <td>وان پلاس</td>
                                            <td>
                                                <span class="label l-bg-orange shadow-style">در انتظار</span>
                                            </td>
                                            <td>2</td>
                                            <td>
                                                <div class="progress shadow-style">
                                                    <div class="progress-bar l-bg-orange width-per-72"
                                                        role="progressbar" aria-valuenow="72" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="table-img">
                                                <img src="{{ asset('images/user.jpg') }}" alt>
                                            </td>
                                            <td>ارش خادملو</td>
                                            <td>Galaxy</td>
                                            <td>
                                                <span class="label l-bg-cyan shadow-style">تحویل داده شده</span>
                                            </td>
                                            <td>3</td>
                                            <td>
                                                <div class="progress shadow-style">
                                                    <div class="progress-bar l-bg-cyan width-per-95" role="progressbar"
                                                        aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="table-img">
                                                <img src="{{ asset('images/user.jpg') }}" alt>
                                            </td>
                                            <td>آرش خادملو</td>
                                            <td>موتو زد2</td>
                                            <td>
                                                <span class="label bg-green shadow-style">قرار داده شده</span>
                                            </td>
                                            <td>4</td>
                                            <td>
                                                <div class="progress shadow-style">
                                                    <div class="progress-bar l-bg-green width-per-87"
                                                        role="progressbar" aria-valuenow="87" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="table-img">
                                                <img src="{{ asset('images/user.jpg') }}" alt>
                                            </td>
                                            <td>آرش خادملو</td>
                                            <td>نوکیا</td>
                                            <td>
                                                <span class="label bg-green shadow-style">قرار داده شده</span>
                                            </td>
                                            <td>6</td>
                                            <td>
                                                <div class="progress shadow-style">
                                                    <div class="progress-bar l-bg-green width-per-62"
                                                        role="progressbar" aria-valuenow="62" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->
                <!-- Browser Usage -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>درآمد</strong> کل
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown"
                                        role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="#" onClick="return false;">اقدام</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">اقدامی دیگر</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">چیز دیگری اینجا</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="body text-center">
                                <h4 class="m-b-20">تعداد بازدیدکنندگان</h4>
                                <h6 class="m-b-30">5,98,345</h6>
                                <div class="icon m-t-25">
                                    <div class="chart chart-bar2">
                                        6,4,8,6,8,10,5,6,7,9,5,6,4,8,6,8,10,5,6,7,9,5,10,5,6,7,9,5,6,4,8,6,8</div>
                                </div>
                                <h4 class="m-t-30">میزان رضایتمندی</h4>
                                <h6 class="displayblock m-t-10">36% میانگین</h6>
                                <canvas id="banner-chart5"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Browser Usage -->
            </div>
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>نظرات </strong>جدید
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown"
                                        role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="#" onClick="return false;">اقدام</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">اقدامی دیگر</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">چیز دیگری اینجا</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="recent-comment">
                                <div class="notice-board">
                                    <div class="table-img">
                                        <img class="notice-object" src="{{ asset('images/user.jpg') }}" alt="...">
                                    </div>
                                    <div class="notice-body">
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ.</p>
                                        <small class="text-muted">آرش خادملو | 1 سات پیش</small>
                                    </div>
                                </div>
                                <div class="notice-board">
                                    <div class="table-img">
                                        <img class="notice-object" src="{{ asset('images/user.jpg') }}" alt="...">
                                    </div>
                                    <div class="notice-body">
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ.</p>
                                        <small class="text-muted">آرش خادملو | دیروز</small>
                                    </div>
                                </div>
                                <div class="notice-board">
                                    <div class="table-img">
                                        <img class="notice-object" src="{{ asset('images/user.jpg') }}" alt="...">
                                    </div>
                                    <div class="notice-body">
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ.</p>
                                        <small class="text-muted">آرش خادملو | 10-02-2018 10:25</small>
                                    </div>
                                </div>
                                <div class="notice-board no-border">
                                    <div class="table-img">
                                        <img class="notice-object" src="{{ asset('images/user.jpg') }}" alt="...">
                                    </div>
                                    <div class="notice-body">
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ.</p>
                                        <small class="text-muted">آرش خادملو | 15-03-2018 09:15</small>
                                    </div>
                                </div>
                                <div class="notice-board no-border">
                                    <div class="table-img">
                                        <img class="notice-object" src="{{ asset('images/user.jpg') }}" alt="...">
                                    </div>
                                    <div class="notice-body">
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ.</p>
                                        <small class="text-muted">آرش خادملو | 11-04-2018 11:07</small>
                                    </div>
                                </div>
                                <div class="notice-board">
                                    <div class="table-img">
                                        <img class="notice-object" src="{{ asset('images/user.jpg') }}" alt="...">
                                    </div>
                                    <div class="notice-body">
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ.</p>
                                        <small class="text-muted">آرش خادملو | 1 سات پیش</small>
                                    </div>
                                </div>
                                <div class="notice-board">
                                    <div class="table-img">
                                        <img class="notice-object" src="{{ asset('images/user.jpg') }}" alt="...">
                                    </div>
                                    <div class="notice-body">
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ.</p>
                                        <small class="text-muted">آرش خادملو | دیروز</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="chat">
                            <div class="chat-header clearfix">
                                <img src="{{ asset('images/user.jpg') }}" alt="avatar">
                                <div class="chat-about">
                                    <div class="chat-with">آرش خادملو</div>
                                    <div class="chat-num-messages">3 پیام جدید</div>
                                </div>
                            </div>
                            <div class="chat-history" id="chat-conversation">
                                <ul>
                                    <li class="clearfix">
                                        <div class="message-data text-right">
                                            <span class="message-data-time">10:10 صبح، امروز
                                            </span>
                                            &nbsp; &nbsp;
                                            <span class="message-data-name">آرش</span>
                                            <i class="zmdi zmdi-circle me"></i>
                                        </div>
                                        <div class="message other-message float-right"> سلام آیدن، چطوری؟ پروژه چگونه
                                            می آید؟ </div>
                                    </li>
                                    <li>
                                        <div class="message-data">
                                            <span class="message-data-name">
                                                <i class="zmdi zmdi-circle online"></i>
                                                آیدین</span>
                                            <span class="message-data-time">10:10 صبح، امروز</span>
                                        </div>
                                        <div class="message my-message">
                                            <p>آیا ما امروز ملاقات می کنیم؟ پروژه در حال حاضر به پایان رسیده است و من
                                                نتایجی برای نشان دادن شما دارم.</p>
                                            <div class="row">
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="message-data">
                                            <span class="message-data-name">
                                                <i class="zmdi zmdi-circle online"></i>
                                                آیدین</span>
                                            <span class="message-data-time">10:10 صبح، امروز</span>
                                        </div>
                                        <div class="message my-message">
                                            <p>آیا ما امروز ملاقات می کنیم؟ پروژه در حال حاضر به پایان رسیده است و من
                                                نتایجی برای نشان دادن شما دارم.</p>
                                            <div class="row">
                                            </div>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="message-data text-right">
                                            <span class="message-data-time">10:10 صبح، امروز
                                            </span>
                                            &nbsp; &nbsp;
                                            <span class="message-data-name">آرش</span>
                                            <i class="zmdi zmdi-circle me"></i>
                                        </div>
                                        <div class="message other-message float-right"> سلام آیدن، چطوری؟ پروژه چگونه
                                            می آید؟ </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="chat-message clearfix">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control"
                                            placeholder="متن را اینجا وارد کنید ..">
                                    </div>
                                </div>
                                <div class="chat-upload">
                                    <a href="#">
                                        <i class="material-icons">attach_file</i>
                                    </a>
                                    <a href="#">
                                        <i class="material-icons">insert_emoticon</i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    @include('layouts.partials.dashboard-script-style')
</body>

</html>
