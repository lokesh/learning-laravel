@extends ('layout')

@section ('title', 'New post')

@section ('content')
    <h1>New post</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="/posts">
        @csrf
        <div class="control @error('title') danger @enderror" >
            <label for="name">Title</label>
            <input
                type="text"
                name="title"
                value="{{ old('title') }}"
            />
        </div>

        @if ($errors->has('title'))
            {{ $errors->first('title') }}
        @endif

        <div class="control @error('body') danger @enderror" >
            <label for="body">Post</label>
            <textarea
                name="body"
            >
                {{ old('body') }}
            </textarea>
        </div>

        @error('body')
            {{ $errors->first('body') }}
        @enderror
        <button type="submit">Create post</button>
    </form>
@endsection
