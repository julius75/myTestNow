<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $fillable = [
        'name',
    ];

    public function posts()
    {
        /**
         * Get all of the posts that are assigned this tag.
         */
//        return $this->morphedByMany(Post::class, 'taggable');
    }


}
