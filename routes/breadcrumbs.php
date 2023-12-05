<?php

use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

// BC ADMIN
Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push('Home', route('home'));
    $trail->push('admin');
    $trail->push('dashboard', route('admin.dashboard'));
});

// BC ADMIN/TEACHER
Breadcrumbs::for('teachers.index', function ($trail) {
    $trail->parent('admin.dashboard');
    $trail->push('teachers', route('teachers.index'));
});

// BC ADMIN/STUDENT
Breadcrumbs::for('students.index', function ($trail) {
    $trail->parent('admin.dashboard');
    $trail->push('students', route('students.index'));
});

// BC ADMIN/COURSE
Breadcrumbs::for('courses.index', function ($trail) {
    $trail->parent('admin.dashboard');
    $trail->push('courses', route('courses.index'));
});
