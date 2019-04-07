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
            'name' => 'author-ibumengaji',
            'email' => 'author@ibumengaji.com',
            'password' => bcrypt('authoribumengaji123'),
        ]);
    }
}
