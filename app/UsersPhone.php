<?php

namespace app;

use Illuminate\Database\Eloquent\Model;
use App\User as User;
class UsersPhone extends Model
{
    protected $table='users_phone';
    protected $fillable=['ddi','ddd','number'];



    public  function  user(){

        return $this->belongsTo('App\User','id','user_id');

    }
}
