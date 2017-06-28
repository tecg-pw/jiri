<?php

namespace Jiri;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Jiri\Score
 *
 * @property-read \Jiri\Implementation $implementation
 * @property-read \Jiri\Meeting $meeting
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\Jiri\Score onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Query\Builder|\Jiri\Score withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\Jiri\Score withoutTrashed()
 * @mixin \Eloquent
 */
class Score extends Model
{
    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'score',
        'comment'
    ];
    protected $table = 'scores';

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function meeting()
    {
        return $this->belongsTo(Meeting::class);
    }

    public function implementation()
    {
        return $this->belongsTo(Implementation::class);
    }
}
