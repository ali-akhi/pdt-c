@include('layouts.partials.dashboard-style-link')

<body class="light rtl">
    @include('components.dashboard-preloader')
    @include('layouts.master.dashboard-top-nav')
    <div>
        <!-- Left Sidebar -->
        @include('layouts.master.dashboard-left-side-bar')
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        @include('layouts.master.dashboard-righ-side-bar')
        <!-- #END# Right Sidebar -->
    </div>
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    داشبرد
                    <small>کنترل پنل</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href=""><i class="fa fa-dashboard"></i> پنل</a></li>
                    <li class="active">داشبرد</li>
                    </li>
                    <li class="active">مدیریت کاربران</li>
                </ol>
            </section>

            <section class="content">
                <!-- Small boxes (Stat box) -->
                <!-- TO DO List -->
                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-11 col-lg-11">
                        <div class="card">
                            <div class="body">
                                <div id="message">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table
                                            class="table table-hover js-basic-example contact_list table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="center">آیدی</th>
                                                    <th class="center">نام تگ</th>
                                                    <th class="center">به انگلیسی</th>
                                                    <th class="center">اقدامات</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>
                                    {{ csrf_field() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.right col -->
            <!-- left col -->
        </div>
        <!-- /.row (main row) -->سمانه
        سمانه
        </section>
        <!-- /.content -->
    </div>


    @include('layouts.partials.dashboard-script-style')

    <script src="{{ asset('js/dashboard/user-management-ajax.js') }}"></script>
</body>
