<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Testing relationships

//Events
Route::get('/events', function () {
    return \Jiri\Event::all();
});
Route::get('/events/{event}', function (\Jiri\Event $event) {
    return $event;
});
Route::get('/events/{event}/projects', function (Request $request, \Jiri\Event $event) {
    // Let's try something fun and useful…
    // Let's return an event + its students and their performance for the event

    if ($request->has('embed')) {
        if ($request->input('embed') === 'weights') {
            return $event->with([
                'projects.weights' => function ($query) use ($event) {
                    $query->where('event_id', '=', $event->id);
                }
            ])->find($event->id);
        }
    } else {
        return $event->projects;
    }
});
Route::get('/events/{event}/meetings', function (\Jiri\Event $event) {
    return $event->meetings;
});
Route::get('/events/{event}/implementations', function (\Jiri\Event $event) {
    return $event->implementations;
});
Route::get('/events/{event}/weights', function (\Jiri\Event $event) {
    return $event->weights;
});
Route::get('/events/{event}/performances', function (\Jiri\Event $event) {
    return $event->performances;
});
Route::get('/events/{event}/students', function (Request $request, \Jiri\Event $event) {
    // Let's try something fun and useful…
    // Let's return an event + its students and their performance for the event

    if ($request->has('embed')) {
        if ($request->input('embed') === 'performances') {
            return $event->with([
                'students.performances' => function ($query) use ($event) {
                    $query->where('event_id', '=', $event->id);
                }
            ])->find($event->id);
        }
    } else {
        return $event->students;
    }
});
Route::get('/events/{event}/users', function (\Jiri\Event $event) {
    return $event->users;
});
Route::get('/events/{event}/owner', function (\Jiri\Event $event) {
    return $event->owner;
});


// Implementations
Route::get('/implementations', function () {
    return \Jiri\Implementation::all();
});
Route::get('/implementations/{implementation}', function (\Jiri\Implementation $implementation) {
    return $implementation;
});
Route::get('/implementations/{implementation}/project', function (\Jiri\Implementation $implementation) {
    return $implementation->project;
});
Route::get('/implementations/{implementation}/student', function (\Jiri\Implementation $implementation) {
    return $implementation->student;
});
Route::get('/implementations/{implementation}/scores', function (\Jiri\Implementation $implementation) {
    return $implementation->scores;
});
Route::get('/implementations/{implementation}/event', function (\Jiri\Implementation $implementation) {
    return $implementation->event;
});

// Meetings
Route::get('/meetings', function () {
    return \Jiri\Meeting::all();
});
Route::get('/meetings/{meeting}', function (\Jiri\Meeting $meeting) {
    return $meeting;
});
Route::get('/meetings/{meeting}/student', function (\Jiri\Meeting $meeting) {
    return $meeting->student;
});
Route::get('/meetings/{meeting}/user', function (\Jiri\Meeting $meeting) {
    return $meeting->user;
});
Route::get('/meetings/{meeting}/scores', function (\Jiri\Meeting $meeting) {
    return $meeting->scores;
});
Route::get('/meetings/{meeting}/event', function (\Jiri\Meeting $meeting) {
    return $meeting->event;
});

// Performances
Route::get('/performances', function () {
    return \Jiri\Performance::all();
});
Route::get('/performances/{performance}/student', function (\Jiri\Performance $performance) {
    return $performance->student;
});
Route::get('/performances/{performance}/event', function (\Jiri\Performance $performance) {
    return $performance->event;
});

//Projects
Route::get('/projects', function () {
    return \Jiri\Project::all();
});
Route::get('/projects/{project}', function (\Jiri\Project $project) {
    return $project;
});
Route::get('/projects/{project}/implementations', function (\Jiri\Project $project) {
    // Return the events in which the project has been used for evaluation
    return $project->implementations;
});
Route::get('/projects/{project}/events', function (\Jiri\Project $project) {
    // Return the events in which the project has been used for evaluation
    return $project->events;
});
Route::get('/projects/{project}/weights', function (\Jiri\Project $project) {
    // Return the events in which the project has been used for evaluation
    return $project->weights;
});

// Scores
Route::get('/scores', function () {
    return \Jiri\Score::all();
});
Route::get('/scores/{score}', function (\Jiri\Score $score) {
    // Return the events in which the project has been used for evaluation
    return $score;
});
Route::get('/scores/{score}/implementation', function (\Jiri\Score $score) {
    // Return the events in which the project has been used for evaluation
    return $score->implementation;
});
Route::get('/scores/{score}/meeting', function (\Jiri\Score $score) {
    // Return the events in which the project has been used for evaluation
    return $score->meeting;
});

// Students
Route::get('/students', function () {
    return \Jiri\Student::all();
});
Route::get('/students/{student}', function (\Jiri\Student $student) {
    return $student;
});
Route::get('/students/{student}/meetings', function (\Jiri\Student $student) {
    return $student->meetings;
});
Route::get('/students/{student}/performances', function (\Jiri\Student $student) {
    return $student->performances;
});
Route::get('/students/{student}/users', function (\Jiri\Student $student) {
    return $student->users;
});

// Users
Route::get('/users', function () {
    return \Jiri\User::all();
});
Route::get('/users/{user}', function (\Jiri\User $user) {
    return $user;
});
Route::get('/users/{user}/meetings', function (\Jiri\User $user) {
    return $user->meetings;
});
Route::get('/users/{user}/students', function (\Jiri\User $user) {
    return $user->students;
});
Route::get('/users/{user}/events', function (\Jiri\User $user) {
    return $user->events;
});


// Weights
Route::get('/weights', function () {
    return \Jiri\Weight::all();
});
Route::get('/weights/{weight}', function (\Jiri\Weight $weight) {
    return $weight;
});
Route::get('/weights/{weight}/event', function (\Jiri\Weight $weight) {
    return $weight->event;
});
Route::get('/weights/{weight}/project', function (\Jiri\Weight $weight) {
    return $weight->project;
});
