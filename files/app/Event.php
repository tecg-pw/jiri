<?php

namespace Jiri;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'course_name',
        'academic_year',
        'exam_session'
    ];
    protected $table = 'events';

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function meetings()
    {
        return $this->hasMany(Meeting::class);
    }

    public function implementations()
    {
        return $this->hasMany(Implementation::class, 'event_id');
    }

    public function weights()
    {
        return $this->hasMany(Weight::class, 'event_id');
    }

    public function projects()
    {
        return $this->belongsToMany(Project::class, 'weights');
    }

    public function performances()
    {
        return $this->hasMany(Performance::class);
    }

}
