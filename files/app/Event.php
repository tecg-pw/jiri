<?php

namespace Jiri;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Jiri\Event
 *
 * @property int $id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property \Carbon\Carbon|null $deleted_at
 * @property string $course_name
 * @property string $academic_year
 * @property int $exam_session
 * @property-read \Illuminate\Database\Eloquent\Collection|\Jiri\Implementation[] $implementations
 * @property-read \Illuminate\Database\Eloquent\Collection|\Jiri\Meeting[] $meetings
 * @property-read \Illuminate\Database\Eloquent\Collection|\Jiri\Performance[] $performances
 * @property-read \Illuminate\Database\Eloquent\Collection|\Jiri\Project[] $projects
 * @property-read \Illuminate\Database\Eloquent\Collection|\Jiri\Weight[] $weights
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\Jiri\Event onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\Event whereAcademicYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\Event whereCourseName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\Event whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\Event whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\Event whereExamSession($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\Event whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\Event whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Jiri\Event withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\Jiri\Event withoutTrashed()
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\Jiri\Student[] $students
 * @property-read \Illuminate\Database\Eloquent\Collection|\Jiri\User[] $users
 */
class Event extends Model
{
    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'course_name',
        'academic_year',
        'exam_session'
    ];
    protected $table = 'events';

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function meetings()
    {
        return $this->hasMany(Meeting::class);
    }

    public function implementations()
    {
        return $this->hasMany(Implementation::class, 'event_id');
    }

    public function weights()
    {
        return $this->hasMany(Weight::class, 'event_id');
    }

    public function projects()
    {
        return $this->belongsToMany(Project::class, 'weights');
    }

    public function performances()
    {
        return $this->hasMany(Performance::class);
    }

    public function students()
    {
        return $this->belongsToMany(Student::class, 'meetings')->distinct('student_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'meetings')->distinct('user_id');
    }

}
