<?php

use Illuminate\Database\Seeder;
use App\Videos;
class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Videos::truncate();
        $faker = \Faker\Factory::create();


        for ($i =0; $i < 100 ; $i++){
            Videos::create([
                'type'=>$faker->fileExtension,
                'title'=>$faker->title,
                'location'=>$faker->country,
                'language'=>$faker->languageCode,
                'synopsis'=>$faker->catchPhrase,
                'director'=>$faker->name,
                'playwright'=>$faker->name,
                'stage_manager'=>$faker->name,
                'crew'=>$faker->sentence,
                'cast'=>$faker->sentence,
                'media_link'=>$faker->imageUrl,
                'tags'=>$faker->sentence,
            ]);
        }
        
    }
}
