<h2>投稿</h2>
<ul>
    @foreach ($tweets as $tweet)
        <li>{{ $tweet->content }} / {{ $tweet->created_at }}</li>
    @endforeach
</ul>
