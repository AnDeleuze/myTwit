<?php

namespace App\Repositories;

use App\Model\User;
use Illuminate\Database\Eloquent\Collection;

interface TweetRepositoryInterface
{
    public function make_timeline(User $user): ?Collection;
}
