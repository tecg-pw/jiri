<?php

namespace Jiri;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
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
    protected $table = 'projects';

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function implementations()
    {
        return $this->hasMany(Implementation::class);
    }

    public function events()
    {
        return $this->hasManyThrough(Event::class, Implementation::class);
    }
}
