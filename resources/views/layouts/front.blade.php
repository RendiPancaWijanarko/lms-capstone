<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- ===== BOX ICONS ===== -->
    <link
      href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css"
      rel="stylesheet"
    />

    <!-- swiper css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/libraries/swiper.css') }}" />

    {{-- SweetAlert2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/style.css') }}" />

    <title>Modern LMS Website</title>
  </head>
  <body>
    @include('layouts.navbar');

    <div class="dropdown" id="dropdown">
      <i class="bx bx-x dropdown-close" id="dropdown-close"></i>

      <a href="{{ route('courses.index') }}"><h2 class="dropdown-title-center">My Course</h2></a>
      <a href="#" onclick="getElementById('logout').submit()"><h2 class="dropdown-title-center">Logout</h2></a>
      <form id="logout" action="{{ route('logout') }}" method="post">
          @csrf
      </form>
    </div>

    <main class="main container">
     @yield('content')
    </main>

    <footer class="footer section">
      <div class="footer-container container grid">
        <div class="footer-content">
          <h3 class="footer-title">Our Information</h3>
          <ul class="footer-list">
            <li>+62 851 5891 1396</li>
            <li>Surabaya, Indonesia</li>
          </ul>
        </div>

        <div class="footer-content">
          <h3 class="footer-title">Menu</h3>
          <ul class="footer-links">
            <li>
                <a href="{{ route('welcome') }}">Home</a>
            </li>
            <li>
                <a href="{{ route('courses.index') }}">Course</a>
            </li>
            <li>
              <a href="#feedback-form" class="footer-link">Feedback</a>
            </li>
          </ul>
        </div>

        <div class="footer-content">
          <h3 class="footer-title">Account</h3>
          <ul class="footer-links">
            <li>
                <a href="{{ route('login') }}">Login</a>
            </li>
            <li>
                <a href="{{ route('register') }}">Register</a>
            </li>
            <li>
              <a href="#" class="footer-link">Faq</a>
            </li>
          </ul>
        </div>

        <div class="footer-content">
          <h3 class="footer-title">Social Media</h3>
          <ul class="footer-social">
            <a href="https://github.com/RendiPancaWijanarko" class="footer-social-link" target="_blank">
                <i class="bx bxl-github"></i>
            </a>
            <a href="https://linkedin.com/in/rendipancaa" class="footer-social-link" target="_blank">
                <i class="bx bxl-linkedin"></i>
            </a>
            <a href="https://instagram.com/rendypancaa" class="footer-social-link" target="_blank">
                <i class="bx bxl-instagram"></i>
            </a>
          </ul>
        </div>
      </div>

      <span class="footer-copy">&#169; 2023 <a href="https://rendipancawijanarko.github.io/FlyHigh/FlyHigh.html"><strong>FlyHigh Corp.</strong></a> All rights reserved.</span>
    </footer>

    <a href="#" class="scroll-up" id="scroll-up">
      <i class="bx bx-up-arrow-alt scroll-up-icon"></i>
    </a>

    <!-- swiper -->
    <script src="{{ asset('frontend/assets/libraries/swiper.js') }}"></script>
    <!--===== MAIN JS =====-->
    <script src="{{ asset('frontend/assets/main.js') }}"></script>
  </body>
</html>
