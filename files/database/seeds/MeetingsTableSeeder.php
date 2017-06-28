<?php

use Illuminate\Database\Seeder;

class MeetingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Léa Vérou
        Jiri\Meeting::create([
            'user_id' => 3,
            'student_id' => 1,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 8.5
        ]);
        Jiri\Meeting::create([
            'user_id' => 3,
            'student_id' => 2,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 7
        ]);
        Jiri\Meeting::create([
            'user_id' => 3,
            'student_id' => 3,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 19.5
        ]);
        Jiri\Meeting::create([
            'user_id' => 3,
            'student_id' => 5,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 7.5
        ]);
        Jiri\Meeting::create([
            'user_id' => 3,
            'student_id' => 7,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 12
        ]);
        Jiri\Meeting::create([
            'user_id' => 3,
            'student_id' => 8,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 5
        ]);
        Jiri\Meeting::create([
            'user_id' => 3,
            'student_id' => 9,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 13
        ]);
        //Benjamin Decock
        Jiri\Meeting::create([
            'user_id' => 4,
            'student_id' => 2,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 6
        ]);
        Jiri\Meeting::create([
            'user_id' => 4,
            'student_id' => 3,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 18
        ]);
        Jiri\Meeting::create([
            'user_id' => 4,
            'student_id' => 4,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 11
        ]);
        Jiri\Meeting::create([
            'user_id' => 4,
            'student_id' => 5,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 7.5
        ]);
        Jiri\Meeting::create([
            'user_id' => 4,
            'student_id' => 6,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 10
        ]);
        Jiri\Meeting::create([
            'user_id' => 4,
            'student_id' => 8,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 4
        ]);
        Jiri\Meeting::create([
            'user_id' => 4,
            'student_id' => 10,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 17
        ]);

        // Tim Van Damme
        Jiri\Meeting::create([
            'user_id' => 5,
            'student_id' => 1,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 15
        ]);
        Jiri\Meeting::create([
            'user_id' => 5,
            'student_id' => 2,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => null
        ]);
        Jiri\Meeting::create([
            'user_id' => 5,
            'student_id' => 3,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 18
        ]);
        Jiri\Meeting::create([
            'user_id' => 5,
            'student_id' => 4,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => null
        ]);
        Jiri\Meeting::create([
            'user_id' => 5,
            'student_id' => 5,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => null
        ]);
        Jiri\Meeting::create([
            'user_id' => 5,
            'student_id' => 6,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 15.5
        ]);
        Jiri\Meeting::create([
            'user_id' => 5,
            'student_id' => 7,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 15
        ]);
        Jiri\Meeting::create([
            'user_id' => 5,
            'student_id' => 8,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 10
        ]);
        Jiri\Meeting::create([
            'user_id' => 5,
            'student_id' => 9,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => null
        ]);
        Jiri\Meeting::create([
            'user_id' => 5,
            'student_id' => 10,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => null
        ]);

        //Mike Monteiro
        Jiri\Meeting::create([
            'user_id' => 6,
            'student_id' => 1,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 9
        ]);
        Jiri\Meeting::create([
            'user_id' => 6,
            'student_id' => 2,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 7
        ]);
        Jiri\Meeting::create([
            'user_id' => 6,
            'student_id' => 3,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 13
        ]);
        Jiri\Meeting::create([
            'user_id' => 6,
            'student_id' => 4,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 10
        ]);
        Jiri\Meeting::create([
            'user_id' => 6,
            'student_id' => 5,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 7
        ]);
        Jiri\Meeting::create([
            'user_id' => 6,
            'student_id' => 6,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 12
        ]);
        Jiri\Meeting::create([
            'user_id' => 6,
            'student_id' => 7,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 11
        ]);
        Jiri\Meeting::create([
            'user_id' => 6,
            'student_id' => 8,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 4
        ]);
        Jiri\Meeting::create([
            'user_id' => 6,
            'student_id' => 9,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 10
        ]);
        Jiri\Meeting::create([
            'user_id' => 6,
            'student_id' => 10,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 9
        ]);

        //Mariam Faso
        Jiri\Meeting::create([
            'user_id' => 7,
            'student_id' => 1,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 15
        ]);
        Jiri\Meeting::create([
            'user_id' => 7,
            'student_id' => 2,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 0
        ]);
        Jiri\Meeting::create([
            'user_id' => 7,
            'student_id' => 3,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 16
        ]);
        Jiri\Meeting::create([
            'user_id' => 7,
            'student_id' => 4,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 12
        ]);
        Jiri\Meeting::create([
            'user_id' => 7,
            'student_id' => 5,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 14
        ]);
        Jiri\Meeting::create([
            'user_id' => 7,
            'student_id' => 6,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 16
        ]);
        Jiri\Meeting::create([
            'user_id' => 7,
            'student_id' => 7,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 15
        ]);
        Jiri\Meeting::create([
            'user_id' => 7,
            'student_id' => 8,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 0
        ]);
        Jiri\Meeting::create([
            'user_id' => 7,
            'student_id' => 9,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 14
        ]);
        Jiri\Meeting::create([
            'user_id' => 7,
            'student_id' => 10,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 14
        ]);

        //Vincent De Oliveira
        Jiri\Meeting::create([
            'user_id' => 8,
            'student_id' => 3,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 19
        ]);
        Jiri\Meeting::create([
            'user_id' => 8,
            'student_id' => 4,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 10
        ]);
        Jiri\Meeting::create([
            'user_id' => 8,
            'student_id' => 5,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 6
        ]);
        Jiri\Meeting::create([
            'user_id' => 8,
            'student_id' => 7,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 16
        ]);
        Jiri\Meeting::create([
            'user_id' => 8,
            'student_id' => 9,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 13
        ]);
        Jiri\Meeting::create([
            'user_id' => 8,
            'student_id' => 10,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 10
        ]);

        //Raphaël Goetter
        Jiri\Meeting::create([
            'user_id' => 9,
            'student_id' => 2,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 8
        ]);
        Jiri\Meeting::create([
            'user_id' => 9,
            'student_id' => 3,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 19
        ]);
        Jiri\Meeting::create([
            'user_id' => 9,
            'student_id' => 6,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 15
        ]);
        Jiri\Meeting::create([
            'user_id' => 9,
            'student_id' => 7,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 15
        ]);
        Jiri\Meeting::create([
            'user_id' => 9,
            'student_id' => 8,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 4
        ]);
        Jiri\Meeting::create([
            'user_id' => 9,
            'student_id' => 10,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 16
        ]);

        //Molly H
        Jiri\Meeting::create([
            'user_id' => 10,
            'student_id' => 1,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 15
        ]);
        Jiri\Meeting::create([
            'user_id' => 10,
            'student_id' => 2,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 8.2
        ]);
        Jiri\Meeting::create([
            'user_id' => 10,
            'student_id' => 5,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 13
        ]);
        Jiri\Meeting::create([
            'user_id' => 10,
            'student_id' => 6,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 14
        ]);
        Jiri\Meeting::create([
            'user_id' => 10,
            'student_id' => 8,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 7.25
        ]);
        Jiri\Meeting::create([
            'user_id' => 10,
            'student_id' => 10,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 13.5
        ]);

        //Andy Clarke
        Jiri\Meeting::create([
            'user_id' => 11,
            'student_id' => 1,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 13
        ]);
        Jiri\Meeting::create([
            'user_id' => 11,
            'student_id' => 2,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 7
        ]);
        Jiri\Meeting::create([
            'user_id' => 11,
            'student_id' => 3,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 17
        ]);
        Jiri\Meeting::create([
            'user_id' => 11,
            'student_id' => 4,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 7
        ]);
        Jiri\Meeting::create([
            'user_id' => 11,
            'student_id' => 7,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 14
        ]);
        Jiri\Meeting::create([
            'user_id' => 11,
            'student_id' => 9,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 14
        ]);

        //Taylor Otwell
        Jiri\Meeting::create([
            'user_id' => 12,
            'student_id' => 1,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => null
        ]);
        Jiri\Meeting::create([
            'user_id' => 12,
            'student_id' => 4,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 15
        ]);
        Jiri\Meeting::create([
            'user_id' => 12,
            'student_id' => 5,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 10
        ]);
        Jiri\Meeting::create([
            'user_id' => 12,
            'student_id' => 7,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 13
        ]);
        Jiri\Meeting::create([
            'user_id' => 12,
            'student_id' => 8,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 4
        ]);
        Jiri\Meeting::create([
            'user_id' => 12,
            'student_id' => 9,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 14
        ]);

        //Dan Cederholm
        Jiri\Meeting::create([
            'user_id' => 13,
            'student_id' => 1,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 10
        ]);
        Jiri\Meeting::create([
            'user_id' => 13,
            'student_id' => 3,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 16
        ]);
        Jiri\Meeting::create([
            'user_id' => 13,
            'student_id' => 4,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 12
        ]);
        Jiri\Meeting::create([
            'user_id' => 13,
            'student_id' => 6,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 11
        ]);
        Jiri\Meeting::create([
            'user_id' => 13,
            'student_id' => 9,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 8
        ]);
        Jiri\Meeting::create([
            'user_id' => 13,
            'student_id' => 10,
            'event_id' => 1,
            'start_time' => null,
            'end_time' => null,
            'general_evaluation' => 12
        ]);

    }
}
