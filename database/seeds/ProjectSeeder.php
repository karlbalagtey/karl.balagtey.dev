<?php

use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            [
                'id' => 1,
                'title' => 'Kourse OVP',
                'urlToImage' => 'https://s3.eu-west-2.amazonaws.com/karl.balagtey.dev/projects/ovp.4ksoftware.io.png',
                'user_id' => 1,
                'duty1' => 'Laravel | MVC | PHP | RESTful API | OAuth2',
                'duty2' => 'Bootstrap | Responsive Design',
                'duty3' => 'Laravel Socialite | Laravel Passport',
                'skill1' => 60,
                'skill2' => 30,
                'skill3' => 20,
                'link' => 'ovp.4ksoftware.io',
                'description' => 'Kourse is an Online Video Platform that is designed to bring teachers and students together for online lessons'
            ],
            [
                'id' => 2,
                'title' => 'Crime Chase',
                'urlToImage' => 'https://s3.eu-west-2.amazonaws.com/karl.balagtey.dev/projects/crimechase.info.png',
                'user_id' => 1,
                'duty1' => 'Laravel | MVC | PHP | RESTful API | OAuth2',
                'duty2' => 'Bootstrap | Responsive Design',
                'duty3' => 'Google Maps Javascript API',
                'skill1' => 70,
                'skill2' => 25,
                'skill3' => 25,
                'link' => 'www.crimechase.info',
                'description' => 'A Geographic Information System based award winning app that won the Google Philippines Android Masters in 2015. I did both the Front End and the Back End'
            ],
            [
                'id' => 3,
                'title' => 'Complaint Compass',
                'urlToImage' => 'https://s3.eu-west-2.amazonaws.com/karl.balagtey.dev/projects/ccompass.4ksoftware.io.png',
                'user_id' => 1,
                'duty1' => 'Laravel | MVC | PHP | jQuery',
                'duty2' => 'Bootstrap | Responsive Design',
                'duty3' => 'Google Maps Javascript API',
                'skill1' => 70,
                'skill2' => 20,
                'skill3' => 10,
                'link' => 'ccompass.4ksoftware.io',
                'description' => 'Complaint Compass is a Complaint Management System designed for a generic telecommunications company'
            ],
            [
                'id' => 4,
                'title' => 'The Training Ground East London',
                'urlToImage' => 'https://s3.eu-west-2.amazonaws.com/karl.balagtey.dev/projects/thetraininggroundeastlondon.org.png',
                'user_id' => 1,
                'duty1' => 'Laravel | MVC | PHP | HTML5 ',
                'duty2' => 'CSS3 | Responsive Design',
                'duty3' => 'plyr.io javascript plugin',
                'skill1' => 40,
                'skill2' => 50,
                'skill3' => 20,
                'link' => 'www.thetraininggroundeastlondon.org',
                'description' => 'Content Management System that is mainly used as an Online Audio Platform for different users enrolled on certain courses.'
            ]
        ]);
    }
}
