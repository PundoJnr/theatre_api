<?php

use Illuminate\Database\Seeder;
use App\Models;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Video::truncate();

        $faker = \Faker\Factory::create();

        for ($i =0; $i < 100 ; $i++){
            Video::create([
                'type'=>$faker->fileExtension,
                'title'=>$faker->name,
                'location'=>$faker->locale,
                'language'=>$faker->name,
                'synopsis'=>$faker->name,
                'director'=>$faker->name,
                'playwright'=>$faker->name,
                'stage_manager'=>$faker->name,
                'crew'=>$faker->names,
                'cast'=>$faker->names,
            ]);
        }
    }
}
