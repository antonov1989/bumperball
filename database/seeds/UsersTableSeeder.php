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
            [
                'name'     => 'pushok',
                'email'    => 'pushokwhite@gmail.com',
                'password' => bcrypt('password'),
                'isAdmin'  => 1,
            ],
            [
                'name'     => 'bandit',
                'email'    => 'ruslannaeltok@gmail.com',
                'password' => bcrypt('password'),
                'isAdmin'  => 1,
            ]
        ]);
    }
}
