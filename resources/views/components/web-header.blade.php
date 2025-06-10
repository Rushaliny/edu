<header class="header">
    <div class="header-fixed">
        <nav class="navbar navbar-expand-lg header-nav scroll-sticky">
            <div class="container">
                <div class="navbar-header">
                    <a id="mobile_btn" href="javascript:void(0);">
                        <span class="bar-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </a>
                    <a href="{{ url('/') }}" class="navbar-brand logo">
                        <img src="{{ asset('web_assets/img/logo.png') }}" class="img-fluid" alt="Logo">
                    </a>
                </div>
                <div class="main-menu-wrapper">
                    <div class="menu-header">
                        <a href="{{ route('index') }}" class="menu-logo">
                            <img src="{{ asset('web_assets/img/logo.png') }}" class="img-fluid" alt="Logo">
                        </a>
                        <a id="menu_close" class="menu-close" href="javascript:void(0);">
                            <i class="fas fa-times"></i>
                        </a>
                    </div>

                </div>
                <ul class="nav header-navbar-rht">
                    <li class="nav-item">
                        <a class="nav-link header-sign" href="{{ route('login') }}">Signin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link header-login" href="{{ route('register') }}">Signup</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
