<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'Member',
            'guard_name' => 'web',
        ]);
        DB::table('roles')->insert([
            'name' => 'Creator',
            'guard_name' => 'web',
        ]);
        DB::table('roles')->insert([
            'name' => 'Admin',
            'guard_name' => 'web',
        ]);
    }
}
