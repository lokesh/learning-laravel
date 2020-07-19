@extends ('layout')

@section ('title', 'Update post')

@section ('content')
    <h1>Update post</h1>

    <form method="POST" action="/posts/{{ $post->slug }}">
        @csrf
        @method('PUT')

        <div class="control @error('title') danger @enderror">
            <label for="name">Title</label>
            <input type="text" name="title" value="{{ $post->title }}" />
            @if ($errors->has('title'))
                {{ $errors->first('title') }}
            @endif
        </div>
        <div class="control @error('body') danger @enderror">
            <label for="body">Post</label>
            <textarea name="body">{{ $post->body }}</textarea>
            @error('body')
                {{ $errors->first('body') }}
            @enderror
        </div>
        <button type="submit">Update post</button>
    </form>
@endsection
