@include('layouts.partials.dashboard-style-link')

<body class="light rtl">
    @include('components.dashboard-preloader')
    @include('layouts.master.dashboard-top-nav')
    <link rel="stylesheet" href="{{ asset('vendor/sweetalert/sweetalert.all.js') }}">
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
                                <h4 class="page-title">مدیریت کاربران عادی</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="index_1.html">
                                    <i class="fas fa-home"></i> خانه</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="#" onClick="return false;">برنامه ها</a>
                            </li>
                            <li class="breadcrumb-item active">مدیریت کاربران عادی</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body">
                    <div class="table-responsive">
                        <div class="box-header">
                            <i class="ion ion-clipboard"></i>

                            <h3 class="box-title ">لیست دسته بندی</h3>
                        </div>
                        <div id="message">
                            @include('layouts.partials.alert-message')
                        </div>
                        <table class="table">
                            <thead role="rowgroup">

                                <tr role="row" class="title-row">
                                    <th>شناسه</th>
                                    <th>عنوان دسته بندی</th>
                                    <th>عملیات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr role="row" class="">
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>
                                            <form method="POST" class="delete-form"
                                                action="{{ route('categories.delete', $category->id) }}">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn bg-light-blue btn-circle waves-effect waves-circle waves-float"><i
                                                    class="material-icons">delete</i></button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">ایجاد دسته بندی جدید</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" method="POST" action="{{ route('categories.store') }}">
                        @csrf
                        @method('POST')
                        <div class="box-body">
                            <div class="form-group">

                                <div class="col-sm-6">
                                    <input type="text" name="name" class="form-control" id="inputEmail3"
                                        placeholder="دسته بندی">
                                </div>
                            </div><br>
                            <div class="form-group">

                                <div class="col-sm-6">
                                    <input type="text" name="slug" class="form-control" id="inputPassword3"
                                        placeholder="دسته بندی به انگلیسی">
                                </div>
                            </div><br>
                            <div class="form-group">
                                <select class="select col-sm-4 form-control" name="cate_id">
                                    <option value="">دسته والد</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>

                            </div><br>
                            <button class="btn btn-primary">اضافه کردن</button><br>
                        </div>
                        <!-- /.box-body -->

                        <!-- /.box-footer -->
                    </form>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.partials.dashboard-script-style')
</body>
