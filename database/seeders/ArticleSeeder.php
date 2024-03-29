<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\factory as Faker;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
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
            DB::table('articles')->insert([
                'id_article' => 'ART'.str_pad($i+1, 3, '0', STR_PAD_LEFT),
                'judul' => $faker->city.$i+1,
                'tgl_publish' => $faker->date,
                'jml_comment' => $faker->numberBetween($min = 10, $max = 100),
                'id_user' => 'USR005',
                'membership' => '1',
                'deskripsi' => $faker->realText($maxNbChars = 200, $indexSize = 2),
                'jml_like' => $faker->numberBetween($min = 1, $max=1000),
                'created_at' => $faker->date,
                'updated_at' => $faker->date
            ]);
        }
    }
}
