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

        public function show($slug)
        {
            return view('posts.show', [
                'post' => Post::where('slug', $slug)->firstOrFail()
            ]);
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
            $post = new Post();

            $post->title = request('title');
            $post->body = request('body');
            $post->slug = Str::slug(request('title'), '-');

            $post->save();

            return redirect('/posts');
        }

        /**
         * Show a view to edit a resource
         */
        public function edit($slug) {
            return view('posts.edit', [
                'post' => Post::where('slug', $slug)->firstOrFail()
            ]);
        }

        /**
         * Persist the edited resource
         */
        public function update($slug)
        {
            $post = Post::where('slug', $slug)->firstOrFail();
            $post->title = request('title');
            $post->body = request('body');
            $post->save();

            return redirect('/posts/' . $post->slug);
        }

        public function destroy() {

        }
}
