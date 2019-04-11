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
         DB::table('users')->insert([
            'name' => 'hand',
            'email' => 'proyectos@handcd.com',
            'password' => bcrypt('Lapatita9'),
        ]);		
    }
}
