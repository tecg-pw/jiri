<?php

namespace Jiri;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Jiri\Implementation
 *
 * @property-read \Jiri\Event $event
 * @property-read \Jiri\Project $project
 * @property-read \Illuminate\Database\Eloquent\Collection|\Jiri\Score[] $scores
 * @property-read \Jiri\Student $student
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\Jiri\Implementation onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Query\Builder|\Jiri\Implementation withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\Jiri\Implementation withoutTrashed()
 * @mixin \Eloquent
 * @property int $id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property \Carbon\Carbon|null $deleted_at
 * @property int $project_id
 * @property int $student_id
 * @property int $event_id
 * @property string|null $url_project
 * @property string|null $url_repo
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\Implementation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\Implementation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\Implementation whereEventId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\Implementation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\Implementation whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\Implementation whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\Implementation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\Implementation whereUrlProject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\Implementation whereUrlRepo($value)
 */
class Implementation extends Model
{
    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

    ];
    protected $table = 'implementations';

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function scores()
    {
        return $this->hasMany(Score::class);
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
