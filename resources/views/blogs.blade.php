@extends('layout.main')

@section('content')

    @foreach($posts as $post)
    <a href="/post/{{$post["slug"]}}">
        <article class="shadow my-5 p-3 rounded">
            <h2>{{ $post["title"] }}</h2>
            <h5 class="leading">By : {{ $post["author"] }}</h5>
            <p>{{ $post["desc"] }}</p>
        </article>
    </a>

    @endforeach

@endsection