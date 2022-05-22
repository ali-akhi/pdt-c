<aside id="leftsidebar" class="sidebar">
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li>
                <div class="sidebar-profile clearfix">
                    <div class="profile-img">
                        <img src="{{ asset('images/user.jpg') }}" alt="profile">
                    </div>
                    <div class="profile-info">
                        <h3>آرش خادملو</h3>
                        <p>خوش آمدید !</p>
                    </div>
                </div>
            </li>
            <li class="active">
                <a href="#" onClick="return false;" class="active-style">
                    <span>داشبورد</span>
                </a>
            </li>
            <li>
                <a href="#" onClick="return false;" class="menu-toggle">
                    <i class="menu-icon ti-shopping-cart-full"></i>
                    <span>اطلاعیه‌ها</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="products.html">درخواست‌ها</a>
                    </li>
                    <li>
                        <a href="product-detail.html">پیام‌ها</a>
                    </li>
                    <li>
                        <a href="cart.html">کامنت‌ها</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" onClick="return false;" class="menu-toggle">
                    <i class="menu-icon ti-crown"></i>
                    <span>مدیریت محتوا</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="">مطالب</a>
                    </li>
                    <li>
                        <a href="{{ route('projects') }}">طرح‌ها</a>
                    </li>
                    <li>
                        <a href="{{ route('news') }}">اخبار</a>
                    </li>
                    <li>
                        <a href="{{ route('comment') }}">کامنت‌ها</a>
                    </li>
                    <li>
                        <a href="{{ route('tags') }}">برچسب‌‌</a>
                    </li>
                    <li>
                        <a href="{{ route('category') }}">دسته‌بندی‌</a>
                    </li>
                    <li>
                        <a href="{{ route('message') }}">پیام‌ها</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" onClick="return false;" class="menu-toggle">
                    <i class="menu-icon ti-magnet"></i>
                    <span>‌‌مدیریت نقش‌ها</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="{{ route('user.index') }}">کاربران</a>
                    </li>
                    <li>
                        <a href="animations.html">معاونین</a>
                    </li>
                    <li>
                        <a href="badges.html">داوران</a>
                    </li>
                    <li>
                        <a href="modal.html">نویسندگان</a>
                    </li>
                    <li>
                        <a href="buttons.html">کاربران ویژه</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" onClick="return false;" class="menu-toggle">
                    <i class="menu-icon ti-face-smile"></i>
                    <span>گزارشات</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="material-icons.html">آیکون های متریال</a>
                    </li>
                    <li>
                        <a href="font-awesome.html">فونت Awesome</a>
                    </li>
                    <li>
                        <a href="simple-line-icons.html">آیکون های خط ساده</a>
                    </li>
                    <li>
                        <a href="themify.html">آیکون های Themify</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" onClick="return false;" class="menu-toggle">
                    <i class="menu-icon ti-layout"></i>
                    <span>تجزیه و تحلیل</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="basic-form-elements.html">فرم پایه</a>
                    </li>
                    <li>
                        <a href="advanced-form-elements.html">فرم پیشرفته</a>
                    </li>
                    <li>
                        <a href="form-examples.html">مثال های فرم</a>
                    </li>
                    <li>
                        <a href="form-validation.html">اعتبار سنجی فرم</a>
                    </li>
                    <li>
                        <a href="form-wizard.html">فرم جادویی</a>
                    </li>
                    <li>
                        <a href="editors.html">ویرایشگرها</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" onClick="return false;" class="menu-toggle">
                    <i class="menu-icon ti-menu-alt"></i>
                    <span>مدیریت قالب</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="normal-tables.html">جداول معمولی</a>
                    </li>
                    <li>
                        <a href="advance-tables.html">جداول داده پیشرفته</a>
                    </li>
                    <li>
                        <a href="export-table.html">جدول خروجی</a>
                    </li>
                    <li>
                        <a href="child-row-table.html">جدول ردیف کودک</a>
                    </li>
                    <li>
                        <a href="group-table.html">گروه بندی</a>
                    </li>
                    <li>
                        <a href="editable-table.html">جداول قابل ویرایش</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="calendar.html">
                    <i class="menu-icon ti-calendar"></i>
                    <span>تقویم</span>
                </a>
            </li>
            <li>
                <a href="{{ route('reminder') }}">
                    <i class="menu-icon ti-check-box"></i>
                    <span>زمانبندی برنامه‌ها</span>
                </a>
            </li>
            <li>
                <a href="portfolio.html">
                    <i class="menu-icon ti-briefcase"></i>
                    <span>سوابق</span>
                </a>
            </li>

        </ul>
    </div>
    <!-- #Menu -->
</aside>
