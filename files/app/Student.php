<?php

namespace Jiri;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Jiri\Student
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\Jiri\Implementation[] $implementations
 * @property-read \Illuminate\Database\Eloquent\Collection|\Jiri\Meeting[] $meetings
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\Jiri\Student onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Query\Builder|\Jiri\Student withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\Jiri\Student withoutTrashed()
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\Jiri\Performance[] $performances
 */
class Student extends Model
{
    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];
    protected $table = 'students';

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function meetings()
    {
        return $this->hasMany(Meeting::class);
    }

    public function implementations()
    {
        return $this->hasMany(Implementation::class);
    }

    public function performances()
    {
        return $this->hasMany(Performance::class);
    }
}
