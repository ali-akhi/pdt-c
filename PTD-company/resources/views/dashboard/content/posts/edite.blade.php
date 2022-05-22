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
                        <div class="header">
                            <h2>
                                <strong>ایجاد خبر</strong> جدید
                            </h2>
                        </div>
                        <div class="body">
                            <form id="form_validation" method="POST" action="" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group form-float col-6">
                                    <div class="form-line">
                                        <label class="form-label">عنوان</label>
                                        <input type="text" class="form-control" name="title" required>

                                    </div>

                                </div><br>
                                {{-- @error('title')
                        <p class="text-red">{{ $message }}</p>
                    @enderror --}}
                                <div class="form-group">
                                    <div class="form-line">
                                        <label for="exampleInputFile" class="form-label">آپلود بنر دوره</label>
                                        <input class="padding-footer" type="file" id="exampleInputFile">
                                        <span class="selectedFiles">فایلی انتخاب نشده است</span>
                                    </div>
                                </div>
                                {{-- <input type="text" class="form-control" name="slug" hidden>
                                <input type="number" class="form-control" name="user_id" hidden> --}}

                                {{-- @error('banner')
                        <p class="text-red">{{ $message }}</p>
                    @enderror --}}

                                {{-- @error('content')
                        <p class="text-red">{{ $message }}</p>
                    @enderror --}}


                                <div class="box box-info">
                                    <div class="box-header">
                                        <h3 class="box-title">ویرایشگر CK Editor
                                            <small>فارسی شده توسط علیرضا حسینی زاده</small>
                                        </h3>
                                        <!-- tools box -->
                                        <textarea placeholder="متن مقاله" class="text" name="content"></textarea>
                                        <!-- /. tools -->
                                    </div>
                                </div>
                                <br>
                                <div class="form-group form-float">
                                    <select class="select col-sm-4 form-control" name="categories">
                                        <option value="">ندارد</option>
                                        <option value="دسته ۱"></option>
                                    </select>

                                </div>
                                {{-- @error('categories')
                        <p class="text-red">{{ $message }}</p>
                    @enderror --}}
                                <br>
                                <button class="btn btn-primary waves-effect" type="submit">تایید</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->

    </section>
    @include('layouts.partials.dashboard-script-style')
    <script src="{{ asset('js/dashboard/ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.replace('content', {
            // Load the German interface.
            language: 'fa'
        });
    </script>
</body>

</html>
