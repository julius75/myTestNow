<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'decsription',
    ];

    /**
     * Get all of the tags for the post.
     */
    public function tags()
    {
        return $this->morphToMany(Tags::class, 'taggable');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
