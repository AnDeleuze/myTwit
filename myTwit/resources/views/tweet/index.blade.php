@extends('layouts.app')

@section('content')
    <div id="tweet">
        <tweet-component></tweet-component>
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/tweet.js') }}" defer></script>
@endsection
