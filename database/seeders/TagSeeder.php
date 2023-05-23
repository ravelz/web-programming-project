<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\factory as Faker;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i = 0; $i<25; $i++){
            $thisDate = $faker->date;
            DB::table('tags')->insert([
                'id_tag' => $i + 1,
                'title_tag' => $faker->city,
                'created_at' => $thisDate,
                'updated_at' =>  $thisDate
            ]);
        }
    }
}
