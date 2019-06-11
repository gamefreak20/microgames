<?php

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
            'id' => 'fa0da26e-278b-4344-9e27-71c19c1b0f0f',
            'name' => 'Joey',
            'email' => 'joeystil3@gmail.com',
            'password' => '$2y$10$g4StazJW67wqAGFgj8jFW.PjmUG2t7mqMZK/86OsaykOFJYBUMg56',
        ]);

        DB::table('model_has_roles')->insert([
            'role_id' => '3',
            'model_type' => 'MicroGames\User',
            'model_id' => 'fa0da26e-278b-4344-9e27-71c19c1b0f0f',
        ]);
    }
}
