<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->call(StudentsTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(MeetingsTableSeeder::class);
        $this->call(ImplementationsTableSeeder::class);
        $this->call(ScoresTableSeeder::class);
        $this->call(WeightsTableSeeder::class);
        $this->call(PerformancesTableSeeder::class);
    }
}
