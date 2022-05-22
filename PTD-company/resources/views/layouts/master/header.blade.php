<header class="header-area fixed-top">
    <div class="nav-area">
        <div class="navbar-area">

            <div class="mobile-nav">
                <a href="index_1.html" class="logo">
                    <img src="images/logo.png" alt="Logo">
                </a>
            </div>

            <div class="main-nav">
                <nav class="navbar navbar-expand-md navbar-light">
                    <div class="container">
                        <a class="navbar-brand" href="index_1.html">
                            <img src="images/logo.png" alt="Logo">
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a href="{{ route('home') }}" class="nav-link dropdown-toggle active">
                                        خانه
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">
                                        تحقیقات
                                        <i class="bx bx-plus"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{ route('scientists') }}" class="nav-link">محققان</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('researchs') }}" class="nav-link">تحقیقات</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('projects') }}" class="nav-link">طرح‌ها</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('appointment') }}" class="nav-link">ثبت طرح</a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">
                                        آزمایشگاه
                                        <i class="bx bx-plus"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{ route('users') }}" class="nav-link">کارمند‌ها</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="route('lab')" class="nav-link">طرح‌ها</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('users') }}" class="nav-link dropdown-toggle">
                                        تیم شرکت
                                        <i class="bx bx-plus"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{ route('users') }}" class="nav-link">کارآموزان</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('users') }}" class="nav-link">پژوهشگران</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('users') }}" class="nav-link">مربیان</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('users') }}" class="nav-link">مدیران</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('blog') }}" class="nav-link dropdown-toggle">
                                        وبلاگ
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('contact') }}" class="nav-link">تماس با ما</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('faq') }}" class="nav-link">سوالات</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('about') }}" class="nav-link">درباره ما</a>
                                </li>
                            </ul>
                            @auth
                                <div class="others-option">
                                    <div class="subscribe">
                                        <a href="{{ route('profile') }}" class="default-btn">
                                            پروفایل
                                        </a>
                                    </div>
                                </div>
                            @endauth


                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>

</header>
