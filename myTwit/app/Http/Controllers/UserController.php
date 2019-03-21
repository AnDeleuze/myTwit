<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Tweet;
use App\Model\User;
use App\Model\UserRelation;
use Illuminate\Support\Facades\Auth;
use App\Repositories\TweetRepository;

class UserController extends Controller
{
    public function index(Request $request, TweetRepository $tweetRepository) {
        $user = Auth::user();
        $user_id = Auth::id();
        // タイムラインを作る
        $tweets = $tweetRepository->make_timeline($user);
        // フォロー中のユーザー
        // フォローされているユーザー
        // 自分以外のユーザー
        $other_users = User::where('id', '<>', $user_id)->get(); // TODO; フォロー中のユーザーを対象外にする
        return view('user.index')->with(compact('tweets', 'other_users'));
    }

    public function follow(Request $request) {
        $user_id = Auth::id();
        $to_follow_user_id = $request->to_follow_user_id;

        UserRelation::create([
            'from_user_id' => $user_id,
            'to_user_id' => $to_follow_user_id,
        ]);

        return redirect()->route('user_home');
    }

    public function follow_request(Request $request) {
        $user_id = Auth::id();
        $from_follow_user_id = $request->from_follow_user_id;

        UserRelation::create([
            'from_user_id' => $from_follow_user_id,
            'to_user_id' => $user_id,
        ]);

        return redirect()->route('user_home');
    }
}
