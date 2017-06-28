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
