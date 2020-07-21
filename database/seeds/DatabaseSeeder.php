<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(VideosTableSeeder::class);

        factory(App\Models\User::class, 5)->create()->each(function ($i) {
            $i->interests()
              ->saveMany(
                  factory(App\Models\Interest::class, rand(1, 5))->make()
              );
        });
    }
}
