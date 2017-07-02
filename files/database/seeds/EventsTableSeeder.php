<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Jiri\Event::create([
            'course_name' => 'Design Web B2',
            'academic_year' => '2016 - 2017',
            'exam_session' => 1,
            'user_id' => 1
        ]);
        \Jiri\Event::create([
            'course_name' => 'Design Web B2',
            'academic_year' => '2016 - 2017',
            'exam_session' => 2,
            'user_id' => 1
        ]);
        \Jiri\Event::create([
            'course_name' => 'Projets Web B3',
            'academic_year' => '2016 - 2017',
            'exam_session' => 2,
            'user_id' => 2
        ]);
        \Jiri\Event::create([
            'course_name' => 'Projets Web B3',
            'academic_year' => '2017 - 2018',
            'exam_session' => 1,
            'user_id' => 2
        ]);
        \Jiri\Event::create([
            'course_name' => 'Projets Web B3',
            'academic_year' => '2017 - 2018',
            'exam_session' => 2,
            'user_id' => 2
        ]);
        \Jiri\Event::create([
            'course_name' => 'Design Web B2',
            'academic_year' => '2017 - 2018',
            'exam_session' => 1,
            'user_id' => 1
        ]);
        \Jiri\Event::create([
            'course_name' => 'Design Web B2',
            'academic_year' => '2017 - 2018',
            'exam_session' => 2,
            'user_id' => 1
        ]);
    }
}
