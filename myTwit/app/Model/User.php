<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'code', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function following_tweets() {
        return $this->hasManyThrough(
            'App\Model\Tweet', // アクセスしたいモデル名
            'App\Model\UserRelation', // 仲介モデル名
            'from_user_id', // 仲介モデルの外部キー
            'user_id', // アクセスしたいモデルの外部キー
            'id', // 元テーブルのローカルキー
            'to_user_id' // 仲介するモデルのローカルキー
        );
    }
}
