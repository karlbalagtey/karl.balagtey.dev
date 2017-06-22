<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(InformationSeeder::class);
        $this->call(ProjectSeeder::class);
        $this->call(AchievementSeeder::class);
        $this->call(SkillSeeder::class);
        $this->call(TechnologySeeder::class);
        $this->call(ProjectTechstackSeeder::class);
        $this->call(InterestSeeder::class);
    }
}
