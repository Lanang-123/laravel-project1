@extends('layout.main')

@section('content')
    <article>
        <h2>{{ $post["title"] }}</h2>
        <h5>{{ $post["author"] }}</h5>
        <p>{{ $post["desc"] }}</p>
    </article>

    <a href="/post">Back to Posts</a>
@endsection