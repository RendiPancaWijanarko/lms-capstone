<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courseNames = [
            'Mathematics',
            'History',
            'Science',
            'English',
            'Art',
            'Computer Science',
            'Physical Education',
            'Music',
            'Geography',
            'Bahasa Indonesia',
        ];

        // Menambahkan data dummy dengan nama course yang berbeda
        foreach ($courseNames as $courseName) {
            DB::table('categories')->insert([
                'course_name' => $courseName,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
