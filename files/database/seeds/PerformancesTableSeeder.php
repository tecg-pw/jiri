<?php

use Illuminate\Database\Seeder;

class PerformancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Jiri\Performance::create([
            'manual_score' => 12.5,
            'student_id' => 1,
            'event_id' => 1
        ]);
        \Jiri\Performance::create([
            'manual_score' => 5,
            'student_id' => 2,
            'event_id' => 1
        ]);
        \Jiri\Performance::create([
            'manual_score' => 16.5,
            'student_id' => 3,
            'event_id' => 1
        ]);
        \Jiri\Performance::create([
            'manual_score' => 10.5,
            'student_id' => 4,
            'event_id' => 1
        ]);
        \Jiri\Performance::create([
            'manual_score' => 8,
            'student_id' => 5,
            'event_id' => 1
        ]);
        \Jiri\Performance::create([
            'manual_score' => 12.1,
            'student_id' => 6,
            'event_id' => 1
        ]);
        \Jiri\Performance::create([
            'manual_score' => 13,
            'student_id' => 7,
            'event_id' => 1
        ]);
        \Jiri\Performance::create([
            'manual_score' => 4,
            'student_id' => 8,
            'event_id' => 1
        ]);
        \Jiri\Performance::create([
            'manual_score' => 12,
            'student_id' => 9,
            'event_id' => 1
        ]);
        \Jiri\Performance::create([
            'manual_score' => 14,
            'student_id' => 10,
            'event_id' => 1
        ]);
    }
}
