<?php

use Illuminate\Database\Seeder;

class InformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('information')->insert([
            'user_id' => 1,
            'paragraph1' => 'Enjoys learning new technologies and constantly thinking of a project that aims to solve issues.',
            'paragraph2' => "Technical Specialties:
                    Laravel, Lumen (PHP Framework), REST API’s, Android (JAVA),
                    Bootstrap, Bulma (CSS Frameworks), HTML, CSS, jQuery, JSON. I am also currently learning
                    Vue JS (Javascript Framework) and Test Driven Development using PHPUnit integrated in Laravel.",
        ]);
    }
}
