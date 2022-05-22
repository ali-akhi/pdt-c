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
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>اعتبار سنجی</strong> پایه
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
                            <form id="form_validation" method="POST" action="">
                                @csrf
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="name" required>
                                        <label class="form-label">نام</label>
                                    </div>

                                </div>
                                @error('name')
                                    <p class="text-red">{{ $message }}</p>
                                @enderror

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="fname" required>
                                        <label class="form-label">نام خانوادگی</label>
                                    </div>
                                </div>
                                @error('fname')
                                    <p class="text-red">{{ $message }}</p>
                                @enderror

                                <div class="form-group form-float col-6">
                                    <div class="form-line">
                                        <select class="form-control" name="diploma" required>
                                            <option value="" disabled selected>مدرک تحصیلی خود را انتخاب کنید</option>
                                            <option value="1">دیپلم</option>
                                            <option value="2">کاردانی</option>
                                            <option value="3">کارشناسی</option>
                                            <option value="4">کارشناسی‌ارشد</option>
                                            <option value="5">دکترا</option>
                                        </select>
                                    </div>
                                </div>
                                @error('city')
                                    <p class="text-red">{{ $message }}</p>
                                @enderror

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="uni" required>
                                        <label class="form-label">دانشگاه محل تحصیل</label>
                                    </div>
                                </div>
                                @error('uni')
                                    <p class="text-red">{{ $message }}</p>
                                @enderror

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="uni" required>
                                        <label class="form-label">مهارت</label>
                                    </div>
                                </div>
                                @error('uni')
                                    <p class="text-red">{{ $message }}</p>
                                @enderror

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="n_code" required>
                                        <label class="form-label">کد ملی</label>
                                    </div>
                                </div>
                                @error('n_code')
                                    <p class="text-red">{{ $message }}</p>
                                @enderror


                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="input-field col s12">
                                            <input type="text" class="form-control" name="bio" data-length="10"
                                                required>
                                            <label for="input_text">بیوگرافی</label>
                                        </div>
                                    </div>
                                    @error('bio')
                                        <p class="text-red">{{ $message }}</p>
                                    @enderror

                                    <div class="col-sm-6">
                                        <div class="input-field col s12">
                                            <input type="text" id="textarea2" name="about_me" class="form-control"
                                                data-length="120">
                                            <label for="textarea2">درباب کار نیک</label>
                                        </div>
                                    </div>
                                    @error('about_me')
                                        <p class="text-red">{{ $message }}</p>
                                    @enderror

                                    <div class="form-group form-float col-6">
                                        <div class="form-line">
                                            <select class="form-control" name="diploma" required>
                                                <option value="" disabled selected>وضعیت تحصیل
                                                </option>
                                                <option value="1">در حال تحصیل</option>
                                                <option value="2">فارغ‌التحصیل</option>
                                            </select>
                                        </div>
                                    </div>
                                    @error('city')
                                        <p class="text-red">{{ $message }}</p>
                                    @enderror

                                    <div class="form-group form-float col-6">
                                        <div class="form-line">
                                            <select class="form-control" name="diploma" required>
                                                <option value="" disabled selected>جنسیت
                                                </option>
                                                <option value="1">زن</option>
                                                <option value="2">مرد</option>
                                            </select>
                                        </div>
                                    </div>
                                    @error('city')
                                        <p class="text-red">{{ $message }}</p>
                                    @enderror


                                    <input type="number" id="textarea2" name="user_id" class="form-control" value="0"
                                        hidden>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea cols="5" rows="3" class="form-control no-resize" name="article" data-length="320"></textarea>
                                        <label class="form-label">درباره من</label>
                                    </div>
                                </div>
                                @error('article')
                                    <p class="text-red">{{ $message }}</p>
                                @enderror

                                <div class="form-group">
                                    <label for="exampleInputFile" class="padding-footer">آپلود بنر دوره</label>
                                    <input class="padding-footer" type="file" id="exampleInputFile" name="profile_photo">
                                    <span class="selectedFiles">فایلی انتخاب نشده است</span>
                                </div>
                                @error('profile_photo')
                                    <p class="text-red">{{ $message }}</p>
                                @enderror


                                <button class="btn btn-primary waves-effect" type="submit">تایید</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->

    </section>
    @include('layouts.partials.dashboard-script-style')
    {{-- <script>
        function getCities(th) {

            selected_city = $('#city').attr('data-selected') || null;


            $('#city').html('').fadeIn(800).append('<option value="0">لطفا کمی صبر کنید ...</option>');

            $.ajax({
                type: "GET",
                url: $(th).data('action') + $(th).val(),
                dataType: 'json',
                success: function(data) {
                    var cities = $.parseJSON(data);

                    $('#city').html('').fadeIn(800).append('<option value="0">انتخاب شهر</option>');
                    $.each(cities, function(i, city) {
                        if (selected_city == city.id) $('#city').append('<option value="' + city.id +
                            '" selected>' + city.name + '</option>');
                        else $('#city').append('<option value="' + city.id + '">' + city.name +
                            '</option>');
                    });
                },
                error: function(data) {
                    console.log('province_city.js#getCities function error: #line : 30');
                }
            });


            return false; // avoid to execute the actual submit of the form.
        }

        /**
         * Load cities on state change
         */
        $(document).on('change', '#province', function(e) {
            getCities(this);
        });
    </script> --}}
</body>

</html>
