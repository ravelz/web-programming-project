<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\factory as Faker;
use Illuminate\Support\Facades\DB;

class FollowerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::Create('id_ID');
        for($i=0; $i<10; $i++){
            $followA = DB::table('users')->where('id_user', '=', 'USR001')->limit(1)->get()->first()->id_user;
            $followB = DB::table('users')->where('id_user', '=', 'USR005')->get()->first()->id_user;

            DB::table("followers")->insert([
                'id_user_f' => $followB,
                'id_user_m' => $followA,
                'created_at' => $faker->date,
                'updated_at' => $faker->date
            ]);
        }
    }
}
