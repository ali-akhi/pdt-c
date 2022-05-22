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
                                <h4 class="page-title">پشتیبانی</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="index_1.html">
                                    <i class="fas fa-home"></i> خانه</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="#" onClick="return false;">برنامه ها</a>
                            </li>
                            <li class="breadcrumb-item active">پشتیبانی</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>تیکت های</strong> پشتیبانی
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
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
                            <div class="row">
                                <div class="col-lg-3 col-sm-6">
                                    <div class="support-box text-center l-bg-red">
                                        <div class="icon m-b-10">
                                            <div class="chart chart-bar">6,4,8,6,8,10,5,6,7,9,5,6,4,8,6,8,10,5,6,7,9,5</div>
                                        </div>
                                        <div class="text m-b-10">مجموع تیکت</div>
                                        <h3 class="m-b-0">1512
                                            <i class="material-icons">trending_up</i>
                                        </h3>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="support-box text-center l-bg-cyan">
                                        <div class="icon m-b-10">
                                            <span class="chart chart-line">9,4,6,5,6,4,7,3</span>
                                        </div>
                                        <div class="text m-b-10">پاسخ</div>
                                        <h3 class="m-b-0">1236
                                            <i class="material-icons">trending_up</i>
                                        </h3>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="support-box text-center l-bg-orange">
                                        <div class="icon m-b-10">
                                            <div class="chart chart-pie">30, 35, 25, 8</div>
                                        </div>
                                        <div class="text m-b-10">برطرف کردن</div>
                                        <h3 class="m-b-0">1107
                                            <i class="material-icons">trending_down</i>
                                        </h3>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="support-box text-center green">
                                        <div class="icon m-b-10">
                                            <div class="chart chart-bar">4,6,-3,-1,2,-2,4,3,6,7,-2,3,4,6,-3,-1,2,-2,4,3,6,7,-2,3</div>
                                        </div>
                                        <div class="text m-b-10">در انتظار</div>
                                        <h3 class="m-b-0">167
                                            <i class="material-icons">trending_down</i>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table id="tableExport" class="display table table-hover table-checkable order-column width-per-100">
                                    <thead>
                                        <tr>
                                            <th class="center">کاربر</th>
                                            <th class="center">باز شده توسط</th>
                                            <th class="center">ایمیل</th>
                                            <th class="center">موضوع</th>
                                            <th class="center">وضعیت</th>
                                            <th class="center">اختصاص به</th>
                                            <th class="center">تاریخ</th>
                                            <th class="center">اقدام</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="table-img center">
                                                <img src="{{ asset('images/user.jpg') }}" alt>
                                            </td>
                                            <td class="center">آرش خادملو</td>
                                            <td class="center">test@example.com</td>
                                            <td class="center">تصویر مناسب نیست</td>
                                            <td class="center">
                                                <div class="badge col-green">بسته شده</div>
                                            </td>
                                            <td class="center">آرش خادملو</td>
                                            <td class="center">27/05/2016</td>
                                            <td class="center">
                                                <a href="#" class="btn btn-tbl-edit">
                                                    <i class="material-icons">create</i>
                                                </a>
                                                <a href="#" class="btn btn-tbl-delete">
                                                    <i class="material-icons">delete_forever</i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th class="center">کاربر</th>
                                            <th class="center">باز شده توسط</th>
                                            <th class="center">ایمیل</th>
                                            <th class="center">موضوع</th>
                                            <th class="center">وضعیت</th>
                                            <th class="center">اختصاص به</th>
                                            <th class="center">تاریخ</th>
                                            <th class="center">اقدام</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.partials.dashboard-script-style')
    {{-- <script src="{{ asset('js/dashboard/user-management-ajax.js') }}"></script> --}}
</body>

</html>
