<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Tweet;
use App\Model\User;
use App\Model\UserRelation;

class UserController extends Controller
{
    public function index() {
        $user_id = 1;
        // 自分の投稿
        $tweets = Tweet::where('user_id', $user_id)->get();
        // フォロー中のユーザー
        // フォローされているユーザー
        // 自分以外のユーザー
        $other_users = User::where('id', '<>', $user_id)->get(); // TODO; フォロー中のユーザーを対象外にする
        return view('user.index')->with(compact('tweets', 'other_users'));
    }

    public function follow(Request $request) {
        $user_id = 1;
        $to_follow_user_id = $request->to_follow_user_id;

        UserRelation::create([
            'from_user_id' => $user_id,
            'to_user_id' => $to_follow_user_id,
        ]);

        return redirect()->route('user_home');
    }
}
