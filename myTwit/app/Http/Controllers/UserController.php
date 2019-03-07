<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tweet;

class UserController extends Controller
{
    public function index() {
        // 自分の投稿
        $posts = Tweet::where('user_id', 1)->get();
        // フォロー中のユーザー
        // フォローされているユーザー
        return view('user.index');
    }
}
