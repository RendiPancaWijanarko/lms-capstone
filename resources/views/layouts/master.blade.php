<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>{{  Config::get('settings.name') }} | {{  Config::get('settings.description') }}</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel='icon' href='/LMS-logo-_Capstone-Project_.ico' type='image/x-icon' >

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('styles')
    @include('includes.analytics')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper " id="app">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light border-bottom">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('home') }}" class="nav-link {{ is_active('home') }}">
                    <i class="nav-icon fas fa-home"></i> {{ __('Home') }}
                </a>
            </li>

            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('stream') }}" class="nav-link  {{ is_active('stream') }}">
                    <i class="nav-icon fas fa-play"></i>
                    {{ __('Stream') }}
                    <span class="right badge badge-danger">New</span>
                </a>
            </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>

    </nav>
    <!-- /.navbar -->

    @include('layouts.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">@yield('title')</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                @include('sweetalert::alert')
                @include('flash::message')
                <div class="row">
                    @yield('content')
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
            {{  Config::get('settings.name') }}
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; {{ \Carbon\Carbon::now()->year }} <a href="https://rendipancawijanarko.github.io/FlyHigh/FlyHigh.html">FlyHigh Corp.</a>.</strong> All rights reserved.
    </footer>
</div>
<!-- ./wrapper -->


<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
@yield('scripts')
</body>
</html>
