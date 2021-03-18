<?php

namespace Database\Seeders;

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
        factory(App\Models\User::class, 10)->create()->each(function($user){

            $user->posts()->save(factory(App\Models\Post::class)->make());

        });

       //  \App\Models\User::factory(10)->create();
    }
}
