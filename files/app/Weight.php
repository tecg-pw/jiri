<?php

namespace Jiri;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Jiri\Weight
 *
 * @property-read \Jiri\Event $event
 * @property-read \Jiri\Project $project
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\Jiri\Weight onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Query\Builder|\Jiri\Weight withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\Jiri\Weight withoutTrashed()
 * @mixin \Eloquent
 */
class Weight extends Model
{
    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'weight',
    ];
    protected $table = 'weights';

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
