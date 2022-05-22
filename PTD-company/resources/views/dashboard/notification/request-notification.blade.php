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
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
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
                                                    <div class="progress-bar l-bg-green width-per-87" role="progressbar"
                                                        aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
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
                                                    <div class="progress-bar l-bg-green width-per-62" role="progressbar"
                                                        aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
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
            </div>
        </div>
    </section>
    @include('layouts.partials.dashboard-script-style')
</body>

</html>
