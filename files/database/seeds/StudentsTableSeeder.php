<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Jiri\Student::create(['name' => 'Scott Jurek', 'email' => 'scott@jurek.com']);
        \Jiri\Student::create(['name' => 'Anton Krupicka', 'email' => 'anton@kupricka.com']);
        \Jiri\Student::create(['name' => 'Emelie Forsberg', 'email' => 'emelie@forsberg.com']);
        \Jiri\Student::create(['name' => 'Jim Walmsley', 'email' => 'jim@walmsley.com']);
        \Jiri\Student::create(['name' => 'Caroline Chevrot', 'email' => 'caroline@chevrot.com']);
        \Jiri\Student::create(['name' => 'Luis Alberto Hernando', 'email' => 'luis@hernando.com']);
        \Jiri\Student::create(['name' => 'François Dhaene', 'email' => 'francois@dhaene.com']);
        \Jiri\Student::create(['name' => 'Sébastien Chaigneau', 'email' => 'seb@chaigneau.com']);
        \Jiri\Student::create(['name' => 'Xavier Thévenard', 'email' => 'xavier@thevenard.com']);
        \Jiri\Student::create(['name' => 'Kilian Jornet', 'email' => 'kilian@jornet.com']);
        \Jiri\Student::create(['name' => 'Julien Chorier', 'email' => 'julien@chorier.com']);
        \Jiri\Student::create(['name' => 'Ryan Sandes', 'email' => 'ryan@sandes.com']);
        \Jiri\Student::create(['name' => 'Megan Kimmel', 'email' => 'megan@kimmel.com']);
        \Jiri\Student::create(['name' => 'Sage Canaday', 'email' => 'sage@canaday.com']);
        \Jiri\Student::create(['name' => 'Anna Frost', 'email' => 'anna@frosty.com']);
        \Jiri\Student::create(['name' => 'Nuria Picas', 'email' => 'nuria@picas.com']);
        \Jiri\Student::create(['name' => 'Alex Honnold', 'email' => 'alex@honnold.com']);
        \Jiri\Student::create(['name' => 'Stephanie Howe', 'email' => 'stephanie@howe.com']);
        \Jiri\Student::create(['name' => 'Max King', 'email' => 'max@king.com']);
        \Jiri\Student::create(['name' => 'Tim Tollefson', 'email' => 'tim@tollefson.com']);
        \Jiri\Student::create(['name' => 'Stella Petric', 'email' => 'stella@petric.com']);
        \Jiri\Student::create(['name' => 'Étienne Van Gasse', 'email' => 'etienne@vangasse.com']);
        \Jiri\Student::create(['name' => 'Nicola Bucci', 'email' => 'nicola@bucci.com']);
        \Jiri\Student::create(['name' => 'Janick Delva', 'email' => 'janick@delva.com']);
        \Jiri\Student::create(['name' => 'Mathieu Deville', 'email' => 'mathieu@deville.com']);
    }
}
