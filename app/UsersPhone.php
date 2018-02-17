<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class UsersPhone extends Model
{
    protected $table='users_phone';
    protected $fillable=['ddi','ddd','number'];
}
