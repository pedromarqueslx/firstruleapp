<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => str_random(10),
            'role_id' => 2,
            'is_active' => 1,
            'email'=> str_random(10).'@firstrule.pt',
            'password'=> bcrypt('secret'),
        ]);
    }
}
