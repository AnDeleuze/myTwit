<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserRelation extends Model
{
    public $fillable = ['from_user_id', 'to_user_id'];
}
