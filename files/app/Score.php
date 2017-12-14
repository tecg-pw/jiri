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
 * @property int $id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property \Carbon\Carbon|null $deleted_at
 * @property int $meeting_id
 * @property int $implementation_id
 * @property float|null $score
 * @property string|null $comment
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\Score whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\Score whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\Score whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\Score whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\Score whereImplementationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\Score whereMeetingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\Score whereScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\Score whereUpdatedAt($value)
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
