<?php

namespace App\Repositories;

use DB;
use App\Model\User;
use App\Model\UserRelation;
use App\Model\Tweet;
use Illuminate\Database\Eloquent\Collection;

class TweetRepository implements TweetRepositoryInterface
{
    public function make_timeline(User $user): ?Collection
    {
        $user_relation = new UserRelation();
        $follow_user_ids = $user_relation->where('from_user_id', $user->id)->get()->pluck('to_user_id')->toArray();
        array_push($follow_user_ids, $user->id);

        $tweet = new Tweet();
        $tweets = $tweet->whereIn('user_id', $follow_user_ids)->orderBy('created_at', 'desc')->get();
        return $tweets;
    }
}
