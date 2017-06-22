<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Karl Mark Balagtey',
            'email' => 'karl.balagtey@gmail.com',
            'password' => bcrypt('Proverbs356#'),
        ]);
    }
}
