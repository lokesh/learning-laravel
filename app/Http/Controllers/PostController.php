<?php

namespace App\Http\Controllers;


// use DB;
use Illuminate\Support\Str;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::latest()->get()
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    /**
     * Show a view to create a new resource
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Persist the new resource
     */
    public function store()
    {
        $this->validatePost();

        // Refactor of code below
        Post::create([
            'title' => request('title'),
            'body' => request('body'),
            'slug' => Str::slug(request('title'), '-')
        ]);

        // $post = new Post();
        // $post->title = request('title');
        // $post->body = request('body');
        // $post->slug = Str::slug(request('title'), '-');
        // $post->save();

        return redirect('/posts');
    }

    /**
     * Show a view to edit a resource
     */
    public function edit(Post $post) {
        return view('posts.edit', ['post' => $post]);
    }

    /**
     * Persist the edited resource
     */
    public function update(Post $post)
    {
        // Refactor of code below
        $post->update($this->validatePost());

        // request()->validate([
        //     'title' => ['required', 'min:3'],
        //     'body' => 'required'
        // ]);

        // $post->title = request('title');
        // $post->body = request('body');
        // $post->save();

        return redirect('/posts/' . $post->slug);
    }

    public function destroy(Post $post) {
        $post->delete();

        return redirect('/posts/');
    }

    protected function validatePost()
    {
        return request()->validate([
            'title' => ['required', 'min:3'],
            'body' => 'required'
        ]);
    }
}
