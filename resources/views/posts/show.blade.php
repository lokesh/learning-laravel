@extends ('layout')

@section ('title')
    {{ $post-> title}}
@endsection

@section ('content')
    <h1>{{ $post->title }}</h1>
    <h3>{{ $post->user->name }}</h3>
    <p>{{ $post->body }}</p>

    <a href="/posts/{{ $post->slug }}/edit">Edit</a>
    <br />
    <br />
    <form action="/posts/{{ $post->slug }}" method="post">
       @csrf
       @method('DELETE')
       <input type="submit" value="Delete" />
    </form>
@endsection
