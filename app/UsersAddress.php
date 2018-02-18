<?php

namespace app;

use Illuminate\Database\Eloquent\Model;
use App\User as User;

class UsersAddress extends Model
{
    protected $table = 'users_address';
    protected $fillable = ['street_address', 'district', 'locale', 'uf', 'zip_code', 'number', 'complement'];

    public function user()
    {

        return $this->belongsTo('App\User', 'id', 'user_id');

    }
}
