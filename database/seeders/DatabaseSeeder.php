<?php

namespace Database\Seeders;

use App\Models\Infraestrutura;
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
        //\App\Models\Infraestrutura::factory(10)->create();
        //\App\Models\Municipio::factory(10)->create();
        //\App\Models\Role::factory(2)->create();
        \App\Models\User::factory(10)->create();

/*        \App\Models\User::factory(10)->create()->each(function($user){
                $user->infraestruturas()->save(\App\Models\Infraestrutura::factory()->make());
        });*/

    }
}
