<?php

use Illuminate\Database\Seeder;

class ImplementationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($project_id = 1; $project_id <= 6; $project_id++) {
            for ($student_id = 1; $student_id <= 10; $student_id++) {
                Jiri\Implementation::create([
                    'project_id' => $project_id,
                    'student_id' => $student_id,
                    'url_project' => 'http://',
                    'url_repo' => 'http://www.github.com/',
                    'event_id' => 1
                ]);
            }
        }
        for ($project_id = 1; $project_id <= 6; $project_id++) {
            foreach ([2,5,8] as $student_id) {
                Jiri\Implementation::create([
                    'project_id' => $project_id,
                    'student_id' => $student_id,
                    'url_project' => 'http://',
                    'url_repo' => 'http://www.github.com/',
                    'event_id' => 2
                ]);
            }
        }
    }
}
