@extends ('layout')

@section ('title')
    {{ $post-> title}}
@endsection

@section ('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>

    <a href="/posts/{{ $post->slug }}/edit">Edit</a>
@endsection
