<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4 position-absolute">
        <!-- Brand Logo -->
        <a href="{{ route('home') }}" class="brand-link">

            <span class="brand-text font-weight-light">{{  Config::get('settings.name') }} <span class="right badge badge-danger">Welcome</span></span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{ Auth::user()->avatar }}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="{{ route('profile.show') }}" class="d-block">{{ Auth::user()->name }}</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                    <li class="nav-item has-treeview ">
                        <a href="{{ route('home') }}" class="nav-link {{ is_active('home') }}">
                            <i class="nav-icon fas fa-home"></i>
                            <p>
                                {{ __('Home') }}
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('stream') }}" class="nav-link  {{ is_active('stream') }}">
                            <i class="nav-icon fas fa-play"></i>
                            <p>
                                {{ __('Stream') }}
                                <span class="right badge badge-danger">New</span>
                            </p>
                        </a>
                    </li>
                    @can('view_admin')
                        <li class="nav-header">@lang('menus.administration')</li>
                        <li class="nav-item">
                            <a href="{{ route('roles.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-lock"></i>
                                <p>
                                    @lang('roles.roles')
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('courses.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    @lang('course/fields.courses')
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('users.index') }}" class="nav-link {{ is_active('users.index') }}">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    {{ __('Users') }}
                                </p>
                            </a>
                        </li>
                    @endcan

                    @can('add_courses') <!-- teacher sidebar -->
                        <li class="nav-header">Teacher</li>
                        <li class="nav-item">
                            <a href="{{ route('courses.index') }}" class="nav-link {{ is_active('courses.index') }}">
                                <i class="nav-icon fas fa-chalkboard-teacher"></i>
                                <p>
                                    {{ __('Course') }}
                                </p>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="{{ route('detailKelas') }}" class="nav-link {{ is_active('kelas') }}">
                                <i class="nav-icon fas fa-chalkboard"></i>
                                 <p>
                                     {{ __('Class Name') }}
                                </p>
                             </a>
                        </li>
    
                        <li class="nav-item">
                            <a href="{{ route('detailLearning') }}" class="nav-link {{ is_active('learning') }}">
                                <i class="nav-icon fas fa-book-open"></i>
                                 <p>
                                     {{ __('Learning') }}
                                </p>
                             </a>
                        </li>
    
                        <li class="nav-item ">
                            <a href="{{ route('detailSchedule') }}" class="nav-link {{ is_active('schedule') }}">
                                <i class="nav-icon fas fa-calendar-alt"></i>
                                 <p>
                                     {{ __('Schedule') }}
                                </p>
                             </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link {{ is_active('attendances') }}">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    {{ __('Attendances') }}
                                </p>
                            </a>
                        </li>
                    @endcan

                    @can('view_courses') <!-- student sidebar -->
                        <li class="nav-header">Student</li>
                        <li class="nav-item">
                            <a href="{{ route('detailSchedule') }}" class="nav-link {{ is_active('schedule') }}">
                                <i class="nav-icon fas fa-calendar-alt"></i>
                                <p>
                                    {{ __('Schedule') }}
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('viewcourses.index') }}" class="nav-link {{ is_active('viewcourses.index') }}">
                                <i class="nav-icon fas fa-chalkboard"></i>
                                <p>
                                    {{ __('Course') }}
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('student.grade') }}" class="nav-link {{ is_active('student.grade') }}">
                                <i class="nav-icon fas fa-graduation-cap"></i>
                                <p>
                                    {{ __('Grade') }}
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('student.attendance') }}" class="nav-link {{ is_active('attendace') }}">
                                <i class="nav-icon fas fa-clipboard-check"></i>
                                <p>
                                    {{ __('Attendance') }}
                                </p>
                            </a>
                        </li>
                    @endcan

                    <li class="nav-header"></li>

                    <li class="nav-item">
                        <a class="nav-link"  href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="nav-icon fas fa-power-off red"></i>
                            <p>
                                {{ __('Logout') }}
                            </p>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
