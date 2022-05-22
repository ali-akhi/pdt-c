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
                <div class="col-xs-12 col-sm-12 col-md-11 col-lg-11">
                    <div class="card">
                        <div class="body">
                            <div id="message">
                                <div class="alert alert-danger">
                                    <ul>
                                        <li>خطای دسترسی</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table
                                        class="table table-hover js-basic-example contact_list table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="center">آیدی</th>
                                                <th class="center">نام کاربری</th>
                                                <th class="center">ایمیل</th>
                                                <th class="center">شماره تماس</th>
                                                <th class="center">نقش</th>
                                                <th class="center">اقدامات</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
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
