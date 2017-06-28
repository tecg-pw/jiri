<?php

use Illuminate\Database\Seeder;

class ScoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         * //Léa Vérou cote le CV
        \Jiri\Score::create([
            'meeting_id' => 1,
            'implementation_id' => 1,
            'score' => 8
        ]);
        \Jiri\Score::create([
            'meeting_id' => 2,
            'implementation_id' => 2,
            'score' => 17
        ]);
        \Jiri\Score::create([
            'meeting_id' => 3,
            'implementation_id' => 3,
            'score' => 20
        ]);
        \Jiri\Score::create([
            'meeting_id' => 4,
            'implementation_id' => 5,
            'score' => 7.5
        ]);
        \Jiri\Score::create([
            'meeting_id' => 5,
            'implementation_id' => 7,
            'score' => 9
        ]);
        \Jiri\Score::create([
            'meeting_id' => 6,
            'implementation_id' => 8,
            'score' => 8
        ]);
        \Jiri\Score::create([
            'meeting_id' => 7,
            'implementation_id' => 9,
            'score' => 10
        ]);
        //Léa Vérou cote CSSZG
        \Jiri\Score::create([
            'meeting_id' => 8,
            'implementation_id' => 11,
            'score' => 8
        ]);
        \Jiri\Score::create([
            'meeting_id' => 9,
            'implementation_id' => 12,
            'score' => 15
        ]);
        \Jiri\Score::create([
            'meeting_id' => 10,
            'implementation_id' => 13,
            'score' => 19.5
        ]);
        \Jiri\Score::create([
            'meeting_id' => 11,
            'implementation_id' => 15,
            'score' => 7.5
        ]);
        \Jiri\Score::create([
            'meeting_id' => 12,
            'implementation_id' => 17,
            'score' => 9
        ]);
        \Jiri\Score::create([
            'meeting_id' => 13,
            'implementation_id' => 18,
            'score' => 0
        ]);
        \Jiri\Score::create([
            'meeting_id' => 14,
            'implementation_id' => 19,
            'score' => 12
        ]);*/
        if (($handle = fopen(database_path() . "/seeds/jury-dashboard.csv", "r")) !== false) {
            $table = [];
            while (($data = fgetcsv($handle, 1000, ";")) !== false) {
                $table[] = $data;
            }
            fclose($handle);

            $meeting_id = 0;
            $implementation_id = 0;
            $user = 0;
            $userCount = 11;
            $offset = 0;
            $numProjects = 6;
            while ($user < $userCount) {
                for ($student_id = 0; $student_id < count($table); $student_id++) {
                    if ($table[$student_id][$numProjects * $user] !== 'x') {
                        $meeting_id++;
                    }
                    $project = 0;
                    for ($j = $offset; $j < $offset + $numProjects; $j++, $project++) {
                        $implementation_id = $student_id + 1 + $project * 10;
                        if ($table[$student_id][$j] != 'x') {
                            if ($table[$student_id][$j] === '') {
                                $table[$student_id][$j] = null;
                            }
                            \Jiri\Score::create([
                                'score' => $table[$student_id][$j],
                                'meeting_id' => $meeting_id,
                                'implementation_id' => $implementation_id,
                                'comment' => ''
                            ]);
                        }
                    }
                }
                $user++;
                $offset += $numProjects;
            }

        }
    }
}
