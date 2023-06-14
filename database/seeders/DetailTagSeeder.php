<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\factory as Faker;
use Illuminate\Support\Facades\DB;

class DetailTagSeeder extends Seeder
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
            DB::table('detailtags')->insert([
                'id_article' => $i + 1,
                'id_tag' => $faker->city,
                'created_at' => $thisDate,
                'updated_at' =>  $thisDate
            ]);
        }
    }
}
