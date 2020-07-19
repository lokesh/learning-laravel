@extends ('layout')

@section ('title', 'New post')

@section ('content')
    <h1>New post</h1>

    <form method="POST" action="/posts">
        @csrf
        <div class="control">
            <label for="name">Title</label>
            <input type="text" name="title" />
        </div>
        <div class="control">
            <label for="body">Post</label>
            <textarea name="body"></textarea>
        </div>
        <button type="submit">Create post</button>
    </form>
@endsection
