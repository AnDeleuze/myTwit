<h2>投稿</h2>
<ul>
    @foreach ($tweets as $tweet)
        <li>{{ $tweet->content }} / {{ $tweet->created_at }}</li>
    @endforeach
</ul>

<h2>おすすめユーザー</h2>
<ul>
    @foreach ($other_users as $user)
    <li>
        <form action="/user/follow" method="post">
            {{ $user->name }} / <input type="submit" value="follow">
            {{ csrf_field() }}
            <input type="hidden" name="to_follow_user_id" value="{{ $user->id }}">
        </form>
    </li>
    @endforeach
</ul>
