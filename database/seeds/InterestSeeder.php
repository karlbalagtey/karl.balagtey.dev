<?php

use Illuminate\Database\Seeder;

class InterestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('interests')->insert([
            [
                'user_id' => 1,
                'title' => 'Sports',
                'link' => 'karl.balagtey@gmail.com',
                'description' => bcrypt('Proverbs356#'),
            ],
            [
                'user_id' => 1,
                'title' => 'Karl Mark Balagtey',
                'link' => 'karl.balagtey@gmail.com',
                'description' => bcrypt('Proverbs356#'),
            ],
            [
                'user_id' => 1,
                'title' => 'Karl Mark Balagtey',
                'link' => 'karl.balagtey@gmail.com',
                'description' => bcrypt('Proverbs356#'),
            ]
        ]);
    }
}
