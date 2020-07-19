@extends ('layout')

@section ('title', 'Update post')

@section ('content')
    <h1>Update post</h1>

    <form method="POST" action="/posts/{{ $post->slug }}">
        @csrf
        @method('PUT')

        <input type="hidden" name="id" value="{{ $post->id }}" />
        <div class="control">
            <label for="name">Title</label>
            <input type="text" name="title" value="{{ $post->title }}" />
        </div>
        <div class="control">
            <label for="body">Post</label>
            <textarea name="body">{{ $post->body }}</textarea>
        </div>
        <button type="submit">Update post</button>
    </form>
@endsection
