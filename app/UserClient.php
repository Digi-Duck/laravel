<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserClient extends Model
{
    //
    protected $fillable = ['user_id', 'phone', 'address'];
}
