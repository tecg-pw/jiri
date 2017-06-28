<?php

namespace Jiri;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
