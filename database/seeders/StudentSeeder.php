<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 5; $i++) {
            $faker = Faker::create();
            DB::table('students')->insert([
                'name' => $faker->name(),
                'age'  => $i,
                'address' => $faker->address(),
                'hobby' => $faker->text()
            ]);
        }
    }
}
