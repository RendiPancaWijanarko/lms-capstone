<?php

use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push('Home / admin / dashboard', route('admin.dashboard'));
});

Breadcrumbs::for('teachers.index', function ($trail) {
    $trail->parent('admin.dashboard');
    $trail->push('Teachers', route('teachers.index'));
});

Breadcrumbs::for('students.index', function ($trail) {
    $trail->parent('admin.dashboard');
    $trail->push('Students', route('students.index'));
});

Breadcrumbs::for('courses.index', function ($trail) {
    $trail->parent('admin.dashboard');
    $trail->push('Courses', route('courses.index'));
});
