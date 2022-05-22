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
    @include('components.loader')
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
            <div class="row clearfix">
                <!-- Task Info -->
                <div class="row clearfix">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
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
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
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

                <!-- #END# Task Info -->
            </div>
        </div>
    </section>
    @include('layouts.partials.dashboard-script-style')
</body>

</html>
