<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Gunakan Faker untuk menghasilkan data dummy
        $faker = Faker::create();

        // Loop untuk membuat 53 data dummy
        for ($i = 1; $i <= 491; $i++) {
            DB::table('students')->insert([
                'name' => $faker->name,
                'username' => $faker->username,
                'email' => $faker->email,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }

}
