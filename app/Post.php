<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    /*
    Avoid using request params in mass to generate an item. Someone could append
    additional data and override fields that shouldn't be set.

    E.g.
    Post::create(request()->all())

    If there is a form to update a customer's username, they could pass
    additional data such as their subscribtion status.
    [ 'username' => 'newname', 'subscriber' => true]

    To prevent this, specific the specific fields that are whitelisted for usage
    with the create() method. Or, disable the security feature by setting
    $guarded to an empty array and avoid using request()->all()
     */


    // protected $fillable = ['title', 'body', 'slug'];
    protected $guarded = [];

    /**
     * We're overwriting this method as we're using the slug, not the id, from
     * the Post db table for our routes.
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
