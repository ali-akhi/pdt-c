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



            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="card">
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover js-basic-example contact_list">
                                    <thead>
                                        <tr>
                                            <th>شناسه</th>
                                            <th>عنوان کار نیک</th>
                                            <th>دسته بندی</th>
                                            <th>تعداد لایک</th>
                                            <th>قبول شده توسط</th>
                                            <th>تاریخ ثبت</th>
                                            <th>اقدام</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="table-img">
                                                <img src="{{ asset('images/12.png') }}" width="40px" height="40px"
                                                    alt>
                                            </td>
                                            <td>عنوان ۱</td>
                                            <td>دسته‌بندی۲</td>
                                            <td>۳۲</td>
                                            <td>
                                                وضعیت اولیه
                                            </td>
                                            <td>
                                                ۳روز قبل
                                            </td>
                                            <td>
                                                <a href="" class="btn tblActnBtn">
                                                    <i class="material-icons">remove_red_eye</i>
                                                </a>
                                                <a href="" class="btn tblActnBtn">
                                                    <i class="material-icons">delete</i>
                                                </a>
                                                {{-- <form action="" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn tblActnBtn">
                                                        <i class="material-icons">delete</i>
                                                    </button>
                                                </form> --}}
                                                <a href="" class="btn tblActnBtn">
                                                    <i class="material-icons">edit</i>
                                                </a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <a class="btn btn-success" href="{{ route('creat-news') }}"><i class="fa fa-plus"></i></a>

                        </div>

                    </div>

                </div>
                {{-- <div class="col-lg-12 col-md-12" >
        <div class="pagination-area">
            {{ $posts->links() }}
        </div>
    </div> --}}
            </div>
            <!-- #END# Basic Validation -->

    </section>
    @include('layouts.partials.dashboard-script-style')
</body>

</html>
