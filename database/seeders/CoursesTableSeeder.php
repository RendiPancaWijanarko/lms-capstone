<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Course;

class CoursesTableSeeder extends Seeder
{
    public function run()
    {
        // Contoh data courses
        $courses = [
            [
                'name' => 'SQL',
                'description' => 'This is the SQL Course',
                'teacher_id' => 1,
                'started_at' => now(),
                'finished_at' => now()->addDays(10),
                'status' => 'enabled',
            ],
            [
                'name' => 'UI/UX Design',
                'description' => 'This is the UI/UX Design Course',
                'teacher_id' => 2,
                'started_at' => now(),
                'finished_at' => now()->addDays(7),
                'status' => 'enabled',
            ],
            [
                'name' => 'Android Development',
                'description' => 'This is the Android Development Course',
                'teacher_id' => 3,
                'started_at' => now(),
                'finished_at' => now()->addDays(14),
                'status' => 'enabled',
            ],
        ];

        // Masukkan data ke dalam tabel
        Course::insert($courses);
    }
}
