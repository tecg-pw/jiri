<?php

namespace Jiri;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Jiri\Project
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\Jiri\Event[] $events
 * @property-read \Illuminate\Database\Eloquent\Collection|\Jiri\Implementation[] $implementations
 * @property-read \Illuminate\Database\Eloquent\Collection|\Jiri\Weight[] $weights
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\Jiri\Project onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Query\Builder|\Jiri\Project withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\Jiri\Project withoutTrashed()
 * @mixin \Eloquent
 * @property int $id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property \Carbon\Carbon|null $deleted_at
 * @property string $name
 * @property string|null $description
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\Project whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\Project whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\Project whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\Project whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\Project whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\Project whereUpdatedAt($value)
 */
class Project extends Model
{
    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description'
    ];
    protected $table = 'projects';

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function implementations()
    {
        return $this->hasMany(Implementation::class);
    }

    public function events()
    {
        return $this->belongsToMany(Event::class, 'weights');
    }

    public function weights()
    {
        return $this->hasMany(Weight::class, 'project_id');
    }
}
