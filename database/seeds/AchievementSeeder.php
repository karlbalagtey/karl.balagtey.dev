<?php

use Illuminate\Database\Seeder;

class AchievementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('achievements')->insert([
            [
                'user_id' => 1,
                'title' => 'Android Masters Champion 2015 by Google Philippines',
                'description' => 'Won the very first Android Masters Championship - Hosted by Google Philippines, 
                                the country’s first Android Masters is a collegiate inter-school Android app development 
                                challenge which encourages students to develop their creative app ideas and publish it to the Google Play Store.',
                'description1' => 'Out of 72, only 10 entries have made to the grand finals that was held in PLDT Innolab, Mandaluyong City last 
                                    October 23. Each of the finalists were given seven minutes to present their apps in front of distinguished 
                                    judges from the tech industry and eager audiences who was excited to see some of the greatest ideas come into reality.',
                'link' => 'http://cnnphilippines.com/lifestyle/2015/11/02/Android-Masters-Google-Crime-Chase-Space-Voyage.html'
            ],
            [
                'user_id' => 1,
                'title' => 'Made it to the Top 15 Innovative Apps award',
                'description' => 'HackFair 2015 is an interactive two-day event where thirty App/Website/IoT that were created using Google Technologies are 
                                given the opportunity to be featured. Apply to be one of the thirty teams/individuals to feature your app/website/IoT! 
                                Ideas can range from health, education, productivity, music, arts and culture, social impact, etc. Selected projects are 
                                invited for the exhibit and the mini-conference. ',
                'description1'=> null,
                'link' => 'https://hackfair.gdgph.org/'
            ]
        ]);
    }
}
