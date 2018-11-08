<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public function verifyUser()
    {
        return $this->hasOne('App\VerifyUser');
    }

    public function routeNotificationForSlack($driver)
    {
        return 'https://hooks.slack.com/services/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';
    }
}
