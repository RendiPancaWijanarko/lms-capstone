<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;


class TeachersTableSeeder extends Seeder
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
        for ($i = 1; $i <= 53; $i++) {
            DB::table('teachers')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'phone' => $faker->randomNumber(9, true), // Angka acak dengan 9 digit
                'category_id' => $faker->numberBetween(1, 10), // Ganti dengan rentang sesuai kebutuhan
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
