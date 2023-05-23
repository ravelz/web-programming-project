<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create('id_ID');
        for($i = 0; $i<10; $i++){
            DB::table('users')->insert([
                'id_user' => 'USR'.$i+2,
                'username' => $faker->userName,
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('Seeder123'),
                'role' => rand(1,2),
                'jml_followers' => $faker->numberBetween($min = 1000, $max = 9000),
                'created_at' => "2023-05-22 07:36:11",
                'updated_at' => "2023-05-22 07:36:11"
            ]);
        }
    }
}
