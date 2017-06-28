<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Jiri\Project::create([
            'name' => 'CV à la manière de…',
        ]);
        \Jiri\Project::create([
            'name' => 'CSS Zen Garden',
        ]);
        \Jiri\Project::create([
            'name' => 'Exposition d’un artiste',
        ]);
        \Jiri\Project::create([
            'name' => 'Portfolio',
        ]);
        \Jiri\Project::create([
            'name' => 'Mariam Faso',
        ]);
        \Jiri\Project::create([
            'name' => 'Design Mobile Quick',
        ]);
        \Jiri\Project::create([
            'name' => 'Centre de santé d’Angleur',
        ]);
        \Jiri\Project::create([
            'name' => 'Espace P',
        ]);
        \Jiri\Project::create([
            'name' => 'Pré-production du PFE',
        ]);
    }
}
