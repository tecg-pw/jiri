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
        \Jiri\Weight::create([
            'weight' => 3,
            'project_id' => 7,
            'event_id' => 3,
        ]);
        \Jiri\Weight::create([
            'weight' => 3,
            'project_id' => 8,
            'event_id' => 3,
        ]);
        \Jiri\Weight::create([
            'weight' => 4,
            'project_id' => 10,
            'event_id' => 3,
        ]);
    }
}
