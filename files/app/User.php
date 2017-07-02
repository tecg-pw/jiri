<?php

namespace Jiri;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * Jiri\User
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\Jiri\Meeting[] $meetings
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\Jiri\User onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Query\Builder|\Jiri\User withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\Jiri\User withoutTrashed()
 * @property int $id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property \Carbon\Carbon|null $deleted_at
 * @property int $is_admin
 * @property string $name
 * @property string|null $company
 * @property string $email
 * @property string $password
 * @property string|null $remember_token
 * @property-read \Illuminate\Database\Eloquent\Collection|\Jiri\Student[] $students
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\User whereCompany($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\User whereIsAdmin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\User whereUpdatedAt($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\Jiri\Event[] $events
 */
class User extends Authenticatable
{
    use Notifiable;

    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'is_admin',
        'company'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $table = 'users';

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function meetings()
    {
        return $this->hasMany(Meeting::class);
    }

    public function students()
    {
        return $this->belongsToMany(Student::class, 'meetings');
    }

    public function events()
    {
        return $this->hasMany(Event::class, 'user_id');
    }
}
