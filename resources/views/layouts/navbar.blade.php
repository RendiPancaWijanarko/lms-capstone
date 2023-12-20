<header class="header" id="header">
    <div class="nav container">
        <a href="{{ route('welcome') }}" class="nav-logo">
            <img src="{{ asset('frontend/assets/images/LMS_logo.png') }}" alt="Modern LMS Logo"
                style="width: 50px; height: auto;">
            Modern LMS
        </a>

        <div class="nav-menu" id="nav-menu">
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('courses.index') }}" class="nav-link">Course</a>
                </li>
                @auth
                @if(auth()->user()->isAdmin())
                <li class="nav-item">
                    <a href="{{ route('admin.courses.index') }}" class="nav-link">Admin</a>
                </li>
                @endif
                @endauth
            </ul>

            @auth
            <ul class="nav-list nav-account" style="margin-top: 1rem">
                <li class="nav-item" style="width: 100%; text-align: center">
                    <a href="{{ route('courses.index') }}" class="button nav-link"
                        style="display: block; width: 100%">My Course</a>
                </li>
                <li class="nav-item" style="width: 100%; text-align: center">
                    <a href="#" class="button nav-link" onclick="getElementById('logout').submit()"
                        style="display: block; width: 100%">Logout</a>
                    <form id="logout" action="{{ route('logout') }}" method="post">
                        @csrf
                    </form>
                </li>
            </ul>
            @endauth

            @guest
            <ul class="nav-list nav-account" style="margin-top: 1rem">
                <li class="nav-item" style="width: 100%; text-align: center">
                    <a href="{{ route('login') }}" class="button nav-link"
                        style="display: block; width: 100%">Login</a>
                </li>
                <li class="nav-item" style="width: 100%; text-align: center">
                    <a href="{{ route('register') }}" class="button nav-link"
                        style="display: block; width: 100%">Register</a>
                </li>
            </ul>
            @endguest

            <div class="nav-close" id="nav-close">
                <i class="bx bx-x"></i>
            </div>
        </div>

        <div class="nav-btns">
            <i class="bx bx-moon change-theme" id="theme-button"></i>
            @guest
            <div class="btn-account">
                <a href="{{ route('login') }}" class="btn btn-login">Login</a>
                <a href="{{ route('register') }}" class="btn btn-register">Register</a>
            </div>
            @endguest
            @auth
            <div class="nav-user" id="nav-user">
                <i class="bx bx-user-circle"></i> <small> {{ auth()->user()->name }} </small>
                <i class="bx bx-chevron-down"></i>
            </div>
            @endauth

            <div class="nav-toggle" id="nav-toggle">
                <i class="bx bx-grid-alt"></i>
            </div>
        </div>
    </div>
</header>
