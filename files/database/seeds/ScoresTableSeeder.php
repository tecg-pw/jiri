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
                                'comment' => null
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
