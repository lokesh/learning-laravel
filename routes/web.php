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



// Route::get('/books', 'BookController@index');
// Route::get('/books/create', 'BookController@create');
// Route::get('/books/{book}', 'BookController@show');
// Route::get('/books/{book}/edit', 'BookController@edit');
// Route::post('/books', 'BookController@store');
// Route::put('/books/{book}', 'BookController@update');
// Route::delete('/books/{book}', 'BookController@destroy');
