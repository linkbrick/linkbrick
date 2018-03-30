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
            'name' => 'Ashley',
            'email' => 'ashley@linkbrick.com',
            'password' => bcrypt('secret')
        ]);

        DB::table('users')->insert([
            'name' => 'Jane Ong',
            'email' => 'janeong@linkbrick.com',
            'password' => bcrypt('secret')
        ]);

        DB::table('users')->insert([
            'name' => 'Jason Ong',
            'email' => 'jason.ong@linkbrick.com',
            'password' => bcrypt('secret')
        ]);

        DB::table('users')->insert([
            'name' => 'Eng',
            'email' => 'eng@linkbrick.com',
            'password' => bcrypt('secret')
        ]);

        DB::table('users')->insert([
            'name' => 'Information',
            'email' => 'info@linkbrick.com',
            'password' => bcrypt('secret')
        ]);

    }
}
