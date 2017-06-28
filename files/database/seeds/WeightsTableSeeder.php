<?php

use Illuminate\Database\Seeder;

class WeightsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Jiri\Weight::create([
            'weight' => 0.05,
            'project_id' => 1,
            'event_id' => 1,
        ]);
        \Jiri\Weight::create([
            'weight' => 0.05,
            'project_id' => 2,
            'event_id' => 1,
        ]);
        \Jiri\Weight::create([
            'weight' => 0.05,
            'project_id' => 3,
            'event_id' => 1,
        ]);
        \Jiri\Weight::create([
            'weight' => 0.2,
            'project_id' => 4,
            'event_id' => 1,
        ]);
        \Jiri\Weight::create([
            'weight' => 0.3,
            'project_id' => 5,
            'event_id' => 1,
        ]);
        \Jiri\Weight::create([
            'weight' => 0.05,
            'project_id' => 6,
            'event_id' => 1,
        ]);
    }
}
