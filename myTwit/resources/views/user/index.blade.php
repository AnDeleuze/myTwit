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
        {{ $user->name }}
        <form action="/user/follow" method="post">
             / <input type="submit" value="followする">
            {{ csrf_field() }}
            <input type="hidden" name="to_follow_user_id" value="{{ $user->id }}">
        </form>
        <form action="/user/follow_request" method="post">
             / <input type="submit" value="followをお願いする">
            {{ csrf_field() }}
            <input type="hidden" name="from_follow_user_id" value="{{ $user->id }}">
        </form>
    </li>
    @endforeach
</ul>
