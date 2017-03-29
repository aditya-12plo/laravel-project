<?php

namespace laravel;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Notifications\Notification;
use laravel\Notifications\MyResetPassword as ResetPasswordNotification;
use Illuminate\Notifications\Notifiable;
use Uuids;


class Admins extends Authenticatable
{
use Notifiable;

public $incrementing = false;
protected $table = 'admins';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'id','nama','email','tlp','foto', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function sendPasswordResetNotification($token)
{
    $this->notify(new ResetPasswordNotification($token));
}
}