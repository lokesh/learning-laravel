<?php

use Illuminate\Support\Facades\Route;

// Simple view
// ---
// Route::get('', function () {
//     return view('test');
// });


// View with param
// ---
// Route::get('/posts/{post}', function ($post) {
//     return view('welcome', [
//         'name' => $post
//     ]);
// });

Route::get('/', function () {
    return view('test');
});

Route::get('/posts', 'PostController@index');
Route::post('/posts', 'PostController@store');
Route::get('/posts/create', 'PostController@create');
Route::get('/posts/{post}', 'PostController@show');
Route::put('/posts/{post}', 'PostController@update');
Route::delete('/posts/{post}', 'PostController@destroy');
Route::get('/posts/{post}/edit', 'PostController@edit');

// Named routes
// ---
// Route::get('/posts/{post}', 'PostController@show')->name('post.show');
//
// <a href="{{ route('post.show', $post) }}" />
