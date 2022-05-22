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
                        <ul class="breadcrumb breadcrumb-style">
                            <li class="breadcrumb-item 	bcrumb-1">
                                <a href="index_7.html">
                                    <i class="material-icons">home</i>
                                    خانه</a>
                            </li>
                            <li class="breadcrumb-item active">تقویم</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>رویدادهای</strong> قابل جابجایی
                            </h2>
                        </div>
                        <div class="body">
                            <div id="external-events">
                                <form class="inline-form">
                                    <input type="text" value class="form-control" placeholder="عنوان رویداد ..."
                                        id="event_title">
                                    <button type="button" id="event_add"
                                        class="btn btn-primary waves-effect m-t-15">افزودن رویداد
                                    </button>
                                </form>
                                <div id="event_box" class="mg-bottom-10"></div>
                                <label>
                                    <input type="checkbox" id="drop-remove">
                                    <span>حذف پس از رها کردن</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>رویدادها</strong>
                            </h2>
                        </div>
                        <div class="body">
                            <div id="calendar"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.partials.dashboard-script-style')
    <script src="{{ asset('js/dashboard/calendar.js') }}"></script>

</body>

</html>
