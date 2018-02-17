<?php

namespace app;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\UsersPhone as Phone;
use App\UsersAddress as Address;
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

    public function phone()
    {
        return $this->hasMany('App\UsersPhone','user_id','id');

    }

    public function address()
    {
        return $this->hasMany('App\UsersAddress','user_id','id');

    }
}
