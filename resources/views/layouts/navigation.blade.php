<!-- Header area start -->
<header>
    <div id="header-sticky" class="header__area header-transparent is-border-bottom">
        <div class="container">
            <div class="mega__menu-wrapper p-relative">
                <div class="header__main">
                    <div class="header__left">
                        <div class="header__logo">
                            <a href="index.html">
                                <img class="logo__white" src="{{ Vite::asset('resources/imgs/logo/logo.svg') }}" alt="logo not found">
                            </a>
                        </div>
                    </div>
                    <div class="header__middle">
                        <div class="mean__menu-wrapper d-none d-md-block">
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul class="onepage-menu">
                                        <li><a href="{{ route('home') }}">Home</a></li>
                                        <li><a href="{{ route('about') }}">About</a></li>
                                        <li><a href="{{ route('service') }}">Services</a></li>
                                        <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                                        <li><a href="{{ route('blog') }}">Blog</a>
                                        <li><a href="{{ route('contact') }}">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                                <!-- for wp -->
                                <div class="header__hamburger ml-20 d-none">
                                    <button type="button" class="hamburger-btn offcanvas-open-btn">
                                        <span>01</span>
                                        <span>01</span>
                                        <span>01</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header__right">
                        <div class="header__action d-flex align-items-center">
                            <div class="header__btn-wrap d-none d-sm-inline-flex d-inline-flex align-items-center gap-5">
                                <a class="bd-btn is-btn-anim bordered-blue" href="{{ route('contact') }}">
                                    <span class="bd-btn-inner">
    <span class="bd-btn-normal">Contact me</span>
                                    <span class="bd-btn-hover">Contact me</span>
                                    <i class="contentHidden"></i>
                                    </span>
                                </a>



                            </div>
                            <div class="header__hamburger ml-20 d-lg-none">
                                <div class="sidebar__toggle">
                                    <a class="bar-icon" href="javascript:void(0)">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                            <!-- for wp -->
                            <div class="header__hamburger ml-20 d-none">
                                <button type="button" class="hamburger-btn offcanvas-open-btn">
                                    <span>01</span>
                                    <span>01</span>
                                    <span>01</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header area end -->