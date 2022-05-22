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


            <div class="row clearfix">
                <!-- Basic Examples -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>پرسش و پاسخ</strong>
                                <small>راه حل های خود را از اینجا پیدا کنید.</small>
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
                            <div class="row clearfix">
                                <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
                                    <div class="panel-group" id="accordion_1" role="tablist"
                                        aria-multiselectable="true">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading" role="tab" id="headingOne_1">
                                                <h4 class="panel-title">
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion_1"
                                                        href="#collapseOne_1" aria-expanded="true"
                                                        aria-controls="collapseOne_1">
                                                        س1. لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و
                                                        با استفاده
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne_1" class="panel-collapse collapse in show"
                                                role="tabpanel" aria-labelledby="headingOne_1">
                                                <div class="panel-body">
                                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                                    استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در
                                                    ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                                                    کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی
                                                    در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را
                                                    می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی
                                                    الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد..
                                                </div>
                                                <div class="p-l-20 p-b-20">
                                                    <button type="button"
                                                        class="btn btn-success btn-circle waves-effect waves-circle waves-float">
                                                        <i class="material-icons">thumb_up</i>
                                                    </button>
                                                    <button type="button"
                                                        class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                                        <i class="material-icons">thumb_down</i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-primary">
                                            <div class="panel-heading" role="tab" id="headingThree_11">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse"
                                                        data-parent="#accordion_1" href="#collapseThree_2"
                                                        aria-expanded="false" aria-controls="collapseThree_1">
                                                        س2. لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و
                                                        با استفاده
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree_2" class="panel-collapse collapse" role="tabpanel"
                                                aria-labelledby="headingThree_1">
                                                <div class="panel-body">
                                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                                    استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در
                                                    ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                                                    کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی
                                                    در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را
                                                    می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی
                                                    الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.
                                                </div>
                                                <div class="p-l-20 p-b-20">
                                                    <button type="button"
                                                        class="btn btn-success btn-circle waves-effect waves-circle waves-float">
                                                        <i class="material-icons">thumb_up</i>
                                                    </button>
                                                    <button type="button"
                                                        class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                                        <i class="material-icons">thumb_down</i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-primary">
                                            <div class="panel-heading" role="tab" id="headingThree_1">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse"
                                                        data-parent="#accordion_1" href="#collapseThree_1"
                                                        aria-expanded="false" aria-controls="collapseThree_1">
                                                        س3. لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و
                                                        با استفاده
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree_1" class="panel-collapse collapse" role="tabpanel"
                                                aria-labelledby="headingThree_1">
                                                <div class="panel-body">
                                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                                    استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در
                                                    ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                                                    کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی
                                                    در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را
                                                    می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی
                                                    الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.
                                                </div>
                                                <div class="p-l-20 p-b-20">
                                                    <button type="button"
                                                        class="btn btn-success btn-circle waves-effect waves-circle waves-float">
                                                        <i class="material-icons">thumb_up</i>
                                                    </button>
                                                    <button type="button"
                                                        class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                                        <i class="material-icons">thumb_down</i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-primary">
                                            <div class="panel-heading" role="tab" id="headingOne_11">
                                                <h4 class="panel-title">
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion_1"
                                                        href="#collapseOne_3" aria-expanded="true"
                                                        aria-controls="collapseOne_3">
                                                        س4. لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و
                                                        با استفاده
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne_3" class="panel-collapse collapse " role="tabpanel"
                                                aria-labelledby="headingOne_1">
                                                <div class="panel-body">
                                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                                    استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در
                                                    ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                                                    کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی
                                                    در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را
                                                    می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی
                                                    الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.
                                                </div>
                                                <div class="p-l-20 p-b-20">
                                                    <button type="button"
                                                        class="btn btn-success btn-circle waves-effect waves-circle waves-float">
                                                        <i class="material-icons">thumb_up</i>
                                                    </button>
                                                    <button type="button"
                                                        class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                                        <i class="material-icons">thumb_down</i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-primary">
                                            <div class="panel-heading" role="tab" id="headingTwo_1">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse"
                                                        data-parent="#accordion_1" href="#collapseOne_4"
                                                        aria-expanded="false" aria-controls="collapseOne_4">
                                                        س5. لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و
                                                        با استفاده
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne_4" class="panel-collapse collapse" role="tabpanel"
                                                aria-labelledby="headingTwo_1">
                                                <div class="panel-body">
                                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                                    استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در
                                                    ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                                                    کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی
                                                    در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را
                                                    می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی
                                                    الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.
                                                </div>
                                                <div class="p-l-20 p-b-20">
                                                    <button type="button"
                                                        class="btn btn-success btn-circle waves-effect waves-circle waves-float">
                                                        <i class="material-icons">thumb_up</i>
                                                    </button>
                                                    <button type="button"
                                                        class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                                        <i class="material-icons">thumb_down</i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-primary">
                                            <div class="panel-heading" role="tab" id="headingTwo_11">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse"
                                                        data-parent="#accordion_1" href="#collapseOne_5"
                                                        aria-expanded="false" aria-controls="collapseOne_5">
                                                        س6. لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و
                                                        با استفاده
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne_5" class="panel-collapse collapse" role="tabpanel"
                                                aria-labelledby="headingTwo_1">
                                                <div class="panel-body">
                                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                                    استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در
                                                    ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                                                    کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی
                                                    در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را
                                                    می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی
                                                    الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.
                                                </div>
                                                <div class="p-l-20 p-b-20">
                                                    <button type="button"
                                                        class="btn btn-success btn-circle waves-effect waves-circle waves-float">
                                                        <i class="material-icons">thumb_up</i>
                                                    </button>
                                                    <button type="button"
                                                        class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                                        <i class="material-icons">thumb_down</i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-primary">
                                            <div class="panel-heading" role="tab" id="headingTwo_12">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse"
                                                        data-parent="#accordion_1" href="#collapseOne_6"
                                                        aria-expanded="false" aria-controls="collapseOne_6">
                                                        س7. لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و
                                                        با استفاده
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne_6" class="panel-collapse collapse" role="tabpanel"
                                                aria-labelledby="headingTwo_1">
                                                <div class="panel-body">
                                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                                    استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در
                                                    ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                                                    کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی
                                                    در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را
                                                    می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی
                                                    الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.
                                                </div>
                                                <div class="p-l-20 p-b-20">
                                                    <button type="button"
                                                        class="btn btn-success btn-circle waves-effect waves-circle waves-float">
                                                        <i class="material-icons">thumb_up</i>
                                                    </button>
                                                    <button type="button"
                                                        class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                                        <i class="material-icons">thumb_down</i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Basic Examples -->
            </div>  
        </div>

    </section>
    @include('layouts.partials.dashboard-script-style')
    {{-- <script src="{{ asset('js/dashboard/user-management-ajax.js') }}"></script> --}}
</body>

</html>
