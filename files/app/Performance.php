<?php

namespace Jiri;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Jiri\Performance
 *
 * @property-read \Jiri\Event $event
 * @property-read \Jiri\Student $student
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\Jiri\Performance onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Query\Builder|\Jiri\Performance withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\Jiri\Performance withoutTrashed()
 * @mixin \Eloquent
 * @property int $id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property \Carbon\Carbon|null $deleted_at
 * @property float|null $calculated_score
 * @property float|null $manual_score
 * @property int $event_id
 * @property int $student_id
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\Performance whereCalculatedScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\Performance whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\Performance whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\Performance whereEventId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\Performance whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\Performance whereManualScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\Performance whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\Performance whereUpdatedAt($value)
 */
class Performance extends Model
{
    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'calculated_score',
        'manual_score'
    ];
    protected $table = 'performances';

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
