<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * We're overwriting this method as we're using the slug, not the id, from
     * the Post db table for our routes.
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
