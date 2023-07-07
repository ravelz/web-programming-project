<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use App\Models\User;

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
            $lastIdUser = User::select('id_user')->orderBy('id_user','desc')->count();
            $idUser = (int)substr($lastIdUser , -3);
            $idUser = "USR".str_pad($idUser+1, 3, '0', STR_PAD_LEFT);
            DB::table('users')->insert([
                'id_user' => $idUser,
                'username' => $faker->userName,
                'name' => $faker->name,
                'email' => $faker->email,
                'aboutme' => $faker->realText($maxNbChars = 200, $indexSize = 2),
                'password' => bcrypt('Seeder123'),
                'role' => rand(1,3),
                'jml_followers' => $faker->numberBetween($min = 1000, $max = 9000),
                'created_at' => "2023-05-22 07:36:11",
                'updated_at' => "2023-05-22 07:36:11"
            ]);
        }
    }
}
