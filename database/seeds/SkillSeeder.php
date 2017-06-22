<?php

use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            [
                'project_id' => 1,
                'name' => 'PHP, Design Pattern',
                'value' => 50
            ],
            [
                'project_id' => 1,
                'name' => 'HTML5, CSS3, Design',
                'value' => 35
            ],
            [
                'project_id' => 1,
                'name' => 'Git, Staging, Testing',
                'value' => 15
            ],
            [
                'project_id' => 1,
                'name' => 'Linux, SSH, VPS, Plesk',
                'value' => 10
            ],
            [
                'project_id' => 2,
                'name' => 'PHP',
                'value' => 70
            ],
            [
                'project_id' => 2,
                'name' => 'HTML5, CSS3, Design',
                'value' => 25
            ],
            [
                'project_id' => 2,
                'name' => 'Git, SSH, VPS',
                'value' => 25
            ],
            [
                'project_id' => 3,
                'name' => 'PHP',
                'value' => 70
            ],
            [
                'project_id' => 3,
                'name' => 'HTML5, CSS3, Design',
                'value' => 20
            ],
            [
                'project_id' => 3,
                'name' => 'Git, SSH, VPS',
                'value' => 10
            ],
            [
                'project_id' => 4,
                'name' => 'PHP',
                'value' => 40
            ],
            [
                'project_id' => 4,
                'name' => 'HTML5, CSS3, Design',
                'value' => 30
            ],
            [
                'project_id' => 4,
                'name' => 'Git, SSH, VPS',
                'value' => 30
            ],
        ]);
    }
}
