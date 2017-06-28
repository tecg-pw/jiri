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
 * @property int $id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property \Carbon\Carbon|null $deleted_at
 * @property float $weight
 * @property int $project_id
 * @property int $event_id
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\Weight whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\Weight whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\Weight whereEventId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\Weight whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\Weight whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\Weight whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\Weight whereWeight($value)
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
