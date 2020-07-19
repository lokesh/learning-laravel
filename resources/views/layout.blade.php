<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Whelp')</title>

        <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
    </head>
    <body>
        <a href="/">Home</a> —
        <a href="/posts">Posts</a> —
        <a href="/posts/create">New post</a>

        @yield ('content')

        <script src="{{ mix('js/app.js') }}"></script>

    </body>
</html>
