<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Tweet;

class UserController extends Controller
{
    public function index() {
        // 自分の投稿
        $tweets = Tweet::where('user_id', 1)->get();
        // フォロー中のユーザー
        // フォローされているユーザー
        return view('user.index')->with(compact('tweets'));
    }
}
