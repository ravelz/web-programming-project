<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\factory as Faker;
use Illuminate\Support\Facades\DB;

class BookmarkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i = 0; $i <5; $i++){
            DB::table('bookmarks')->insert([
                'id_user' => "USR001",
                'id_article' => "ART00".$i+1,
                'created_at' => $faker->date,
                'updated_at' => $faker->date
            ]);
        }
    }
}
