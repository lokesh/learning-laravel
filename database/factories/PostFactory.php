<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Post::class, function (Faker $faker) {
    $title = $faker->sentence;

    return [
        'user_id' => factory(\App\User::class),
        'slug' => Str::slug($title, '-'),
        'title' => $title,
        'body' => $faker->paragraph,
        'published_at' => now(),
    ];
});
