<?php

namespace Jiri;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Jiri\Meeting
 *
 * @property-read \Jiri\Event $event
 * @property-read \Illuminate\Database\Eloquent\Collection|\Jiri\Score[] $scores
 * @property-read \Jiri\Student $student
 * @property-read \Jiri\User $user
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\Jiri\Meeting onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Query\Builder|\Jiri\Meeting withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\Jiri\Meeting withoutTrashed()
 * @mixin \Eloquent
 */
class Meeting extends Model
{
    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'start_time',
        'end_time'
    ];
    protected $table = 'meetings';

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
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
