@extends ('layout')

@section ('title', 'Posts')

@section ('content')
    @foreach ($posts as $post)
        <h1>
            <a href="/posts/{{ $post->slug }}">
                {{ $post->title }}
            </a>
        </h1>
        <p>{{ $post->body }}</p>
    @endforeach
@endsection
