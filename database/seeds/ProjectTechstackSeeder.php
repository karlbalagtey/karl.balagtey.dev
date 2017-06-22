<?php

use Illuminate\Database\Seeder;

class ProjectTechstackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('project_techstack')->insert([
            [
                'project_id' => 1,
                'techstack_id' => 1,
                'value' => 70,
            ],
            [
                'project_id' => 1,
                'techstack_id' => 2,
                'value' => 80,
            ],
            [
                'project_id' => 1,
                'techstack_id' => 3,
                'value' => 10,
            ],
            [
                'project_id' => 1,
                'techstack_id' => 4,
                'value' => 45,
            ],
            [
                'project_id' => 1,
                'techstack_id' => 5,
                'value' => 20,
            ],
            [
                'project_id' => 1,
                'techstack_id' => 6,
                'value' => 30,
            ],
            [
                'project_id' => 2,
                'techstack_id' => 1,
                'value' => 70,
            ],
            [
                'project_id' => 2,
                'techstack_id' => 2,
                'value' => 80,
            ],
            [
                'project_id' => 2,
                'techstack_id' => 3,
                'value' => 10,
            ],
            [
                'project_id' => 2,
                'techstack_id' => 4,
                'value' => 45,
            ],
            [
                'project_id' => 2,
                'techstack_id' => 5,
                'value' => 20,
            ],
            [
                'project_id' => 2,
                'techstack_id' => 6,
                'value' => 30,
            ],
            [
                'project_id' => 3,
                'techstack_id' => 1,
                'value' => 70,
            ],
            [
                'project_id' => 3,
                'techstack_id' => 2,
                'value' => 80,
            ],
            [
                'project_id' => 3,
                'techstack_id' => 3,
                'value' => 10,
            ],
            [
                'project_id' => 3,
                'techstack_id' => 4,
                'value' => 45,
            ],
            [
                'project_id' => 3,
                'techstack_id' => 5,
                'value' => 20,
            ],
            [
                'project_id' => 3,
                'techstack_id' => 6,
                'value' => 30,
            ],
            [
                'project_id' => 4,
                'techstack_id' => 1,
                'value' => 70,
            ],
            [
                'project_id' => 4,
                'techstack_id' => 2,
                'value' => 80,
            ],
            [
                'project_id' => 4,
                'techstack_id' => 3,
                'value' => 10,
            ],
            [
                'project_id' => 4,
                'techstack_id' => 4,
                'value' => 45,
            ],
            [
                'project_id' => 4,
                'techstack_id' => 5,
                'value' => 20,
            ],
            [
                'project_id' => 4,
                'techstack_id' => 6,
                'value' => 30,
            ]
        ]);
    }
}
