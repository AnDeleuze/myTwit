<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    public $guarded = ['id'];

    static public function find_following_tweets(User $user) {
        return $user->following_tweets()->get();
    }
}
