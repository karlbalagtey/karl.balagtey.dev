<?php

use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('techstacks')->insert([
            [
                'name' => 'Laravel',
                'value' => 50
            ],
            [
                'name' => 'REST API',
                'value' => 35
            ],
            [
                'name' => 'Bootstrap 4',
                'value' => 15
            ],
            [
                'name' => 'Responsive Design',
                'value' => 10
            ],
            [
                'name' => 'OAuth2',
                'value' => 70
            ],
            [
                'name' => 'MVC',
                'value' => 25
            ],
            [
                'name' => 'Laravel Socialite',
                'value' => 25
            ],
            [
                'name' => 'Composer',
                'value' => 70
            ],
            [
                'name' => 'Laravel Passport',
                'value' => 20
            ],
            [
                'name' => 'Git',
                'value' => 10
            ],
            [
                'name' => 'PHP',
                'value' => 40
            ],
            [
                'name' => 'HTML5',
                'value' => 30
            ],
            [
                'name' => 'CSS3',
                'value' => 30
            ],
            [
                'name' => 'Adobe Photoshop',
                'value' => 30
            ],
            [
                'name' => 'Adobe Illustrator',
                'value' => 30
            ],
            [
                'name' => 'Javascript',
                'value' => 30
            ],
            [
                'name' => 'jQuery',
                'value' => 30
            ],
            [
                'name' => 'VueJS',
                'value' => 30
            ],
            [
                'name' => 'NodeJS',
                'value' => 30
            ],
            [
                'name' => 'Webpack',
                'value' => 30
            ],
            [
                'name' => 'LAMP',
                'value' => 30
            ],
            [
                'name' => 'Linux',
                'value' => 30
            ]
        ]);
    }
}
