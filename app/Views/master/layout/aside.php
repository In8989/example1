<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="/master/main" class="app-brand-link">
            <span class="app-brand-text demo menu-text fw-bolder ms-2">관리자</span>
        </a>
        <a href="/master/login/logout">
            <span class="ms-5"><i class="bx bx-power-off me-2"></i></span>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->

        <li class="menu-item">
            <a href="/" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">사용자페이지로</div>
            </a>
        </li>

        <li class="menu-item <?php if (url_is('master/main*')) echo 'active' ?>">
            <a href="/master/main" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <li class="menu-item <?php if (url_is('master/member*')) echo 'active' ?>">
            <a href="/master/member" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Member</div>
            </a>
        </li>

        <li class="menu-item <?php if (url_is('master/company*')) echo 'active' ?>">
            <a href="/master/company" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Company</div>
            </a>
        </li>

        <li class="menu-item <?php if (url_is('master/boardconf*')) echo 'active' ?>">
            <a href="/master/boardconf" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Board Config</div>
            </a>
        </li>

        <li class="menu-item <?php if (url_is('master/category*')) echo 'active' ?>">
            <a href="/master/category" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Category</div>
            </a>
        </li>

        <li class="menu-item <?php if (url_is('master/product*')) echo 'active' ?>">
            <a href="/master/product" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Product</div>
            </a>
        </li>

        <!-- Layouts -->

    </ul>
</aside>
