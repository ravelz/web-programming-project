<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\factory as Faker;
use Illuminate\Support\Facades\DB;
use App\Models\Article;
use App\Models\Tag;

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
                'id_article' => Article::inRandomOrder()->first()->id_article,
                'id_tag' => Tag::inRandomOrder()->first()->id_tag,
                'created_at' => $thisDate,
                'updated_at' =>  $thisDate
            ]);
        }
    }
}
