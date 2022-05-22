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
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>تیکت های</strong> پشتیبانی
                            </h2>
                            @include('layouts.partials.alert-message')
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
                            <div class="row">
                                <div class="col-lg-2 col-sm-6">
                                    <div class="support-box text-center l-bg-red">
                                        <div class="icon m-b-10">
                                            <i class="material-icons">people</i>
                                        </div>
                                        <h3 class="m-b-0">کاربران</h3>
                                        <div class="icon m-t-20">
                                            <h3>123</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-6">
                                    <div class="support-box text-center l-bg-cyan">
                                        <div class="icon m-b-10">
                                            <i class="material-icons">insert_drive_file</i>
                                        </div>
                                        <h3 class="m-b-0">طرح‌ها</h3>
                                        <div class="icon m-t-20">
                                            <h3>123</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-6">
                                    <div class="support-box text-center l-bg-orange">
                                        <div class="icon m-b-10">
                                            <i class="material-icons">people</i>
                                        </div>
                                        <h3 class="m-b-0">معاونین</h3>
                                        <div class="icon m-t-20">
                                            <h3>123</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-6">
                                    <div class="support-box text-center green">
                                        <div class="icon m-b-10">
                                            <i class="material-icons">content_paste</i>
                                        </div>
                                        <h3 class="m-b-0">مطالب</h3>
                                        <div class="icon m-t-20">
                                            <h3>123</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-6">
                                    <div class="support-box text-center l-bg-cyan">
                                        <div class="icon m-b-10">
                                            <i class="material-icons">people</i>
                                        </div>
                                        <h3 class="m-b-0">کارشناس</h3>
                                        <div class="icon m-t-20">
                                            <h3>123</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-6">
                                    <div class="support-box text-center l-bg-purple">
                                        <div class="icon m-b-10">
                                            <i class="material-icons">public</i>
                                        </div>
                                        <h3 class="m-b-0">اخبار</h3>
                                        <div class="icon m-t-20">
                                            <h3>123</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">

                                <table id="tableExport"
                                    class="display table table-hover table-checkable order-column width-per-100">
                                    <div class="col-12 center">
                                        <button type="button" data-toggle="modal" data-target="#createUserModal"
                                            onclick="" class="btn btn-success">
                                            ایجاد کاربر جدید
                                        </button>
                                    </div>
                                    <thead>
                                        <tr>
                                            <th class="center">آیدی</th>
                                            <th class="center">نام ونام‌خانوادگی</th>
                                            <th class="center">ایمیل</th>
                                            <th class="center">شماره تماس</th>
                                            <th class="center">نقش</th>
                                            <th class="center">تاریخ</th>
                                            <th class="center">اقدام</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr id="user-{{$user->id}}">

                                                @if ($user->id)
                                                    <td class="center" id="user-id">{{ $user->id }}</td>
                                                @else
                                                    <td>خالی</td>
                                                @endif

                                                {{-- <td class="table-img center">
                                                    <img src="{{ asset('images/user.jpg') }}" alt>
                                                </td> --}}

                                                @if ($user->name)
                                                    <td class="center" id="user-name">{{ $user->name }}</td>
                                                @else
                                                    <td>خالی</td>
                                                @endif

                                                @if ($user->email)
                                                    <td class="center" id="user-email">{{ $user->email }}</td>
                                                @else
                                                    <td>خالی</td>
                                                @endif

                                                @if ($user->mobile)
                                                    <td class="center" id="user-mobile">{{ $user->mobile }}
                                                    </td>
                                                @else
                                                    <td>خالی</td>
                                                @endif

                                                @if ($user->getRolePersian())
                                                    <td class="center" id="user-role">
                                                        {{ $user->getRolePersian() }}</td>
                                                @else
                                                    <td>خالی</td>
                                                @endif

                                                @if ($user->getTimeRegister())
                                                    <td class="center" id="user-time">
                                                        {{ $user->getTimeRegister() }}</td>
                                                @else
                                                    <td>خالی</td>
                                                @endif


                                                <td class="center">
                                                    <button type="button" data-toggle="modal"
                                                        data-target="#updateUserModal" onclick=""
                                                        class="btn btn-tbl-edit">
                                                        <i class="material-icons">create</i>
                                                    </button>
                                                    <button onclick="DeleteUser()"
                                                        class="btn btn-tbl-delete delete" id="{{ $user->id }}">
                                                        <i class="material-icons">delete_forever</i>
                                                    </button>
                                                    <a href="{{ route('user.profile') }}" class="btn btn-tbl-edit">
                                                        <i class="material-icons">remove_red_eye</i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th class="center">آیدی</th>
                                            <th class="center">نام ونام‌خانوادگی</th>
                                            <th class="center">ایمیل</th>
                                            <th class="center">شماره تماس</th>
                                            <th class="center">نقش</th>
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
        <!-- #END# Basic Validation -->

    </section>

    <!-- add modal user -->
    <div class="modal fade" id="createUserModal" tabindex="-1" aria-labelledby="exampleModellable"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModallable">ایجاد کاربر جدید</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-lable="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form id="create-user-form" class="myform" action="">
                        @csrf
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>نام :</strong>
                                <input type="text" name="name" id="new-name" class="form-control myinput"
                                    placeholder="نام کاربری">

                            </div>
                            <p class="text-red" id="name-msg"></p>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>ایمیل:</strong>
                                <input type="text" name="email" id="new-email" class="form-control myinput"
                                    placeholder="ایمیل">

                            </div>
                            <p class="text-red" id="email-msg"></p>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>شماره تماس:</strong>
                                <input type="text" name="mobile" id="new-mobile" class="form-control myinput"
                                    placeholder="شماره تماس">

                            </div>
                                <p class="text-red" id="mobile-msg"></p>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>رمزعبور:</strong>
                                <input type="password" name="password" id="new-password" class="form-control myinput"
                                    placeholder="رمز عبور">

                            </div>
                                <p class="text-red" id="password-msg"></p>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" id="submit" onclick="CreateUser()" class="mybtn">ثبت
                                نام</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    {{-- update user modal box --}}

    <div class="modal fade" id="updateUserModal" tabindex="-1" aria-labelledby="exampleModellable"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModallable">بروز رسانی کاربر/h5>
                        <button type="button" class="close" data-dismiss="modal" aria-lable="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">

                    <form id="userformedite" action="" class="myform">
                        @csrf

                        <input type="hidden" id="id" name="id">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>نام :</strong>
                                <input type="text" name="name" id="name1" class="form-control myinput"
                                    placeholder="Name">

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>ایمیل:</strong>
                                <input type="text" name="email" id="email1" class="form-control myinput"
                                    placeholder="Email">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>رمزعبور:</strong>
                                <input type="password" name="password" id="password1" class="form-control myinput"
                                    placeholder="Password">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>شماره تماس:</strong>
                                <input type="text" name="phone_number" id="phone_number1" class="form-control myinput"
                                    placeholder="Phone">
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>نوع کاربری:</strong>

                                <select name="role" id=role class="form-control">
                                    <option value="1">test</option>
                                    <option value="2">test</option>
                                    <option value="3">test</option>
                                    {{-- <option value="user" {{$user->role=="user" ? 'selected' : ''}}>user</option>
                                <option value="modir" {{$user->role=="modir" ? 'selected' : ''}}>modir</option>
                                <option value="architect" {{$user->role=="architect" ? 'selected' : ''}}>architect</option>
                                <option value="admin" {{$user->role=="admin" ? 'selected' : ''}}>admin</option> --}}

                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" id="save" onclick="update()" class="mybtn">ثبت نام</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    @include('layouts.partials.dashboard-script-style')
    <script src="{{ asset('js/dashboard/user-ajax.js') }}"></script>
    {{-- <script src="{{ asset('js/dashboard/user-management-ajax.js') }}"></script> --}}
</body>

</html>
