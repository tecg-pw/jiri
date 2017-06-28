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
