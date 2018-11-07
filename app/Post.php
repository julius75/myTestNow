<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'decsription',
    ];

   public  function path(){
       return '/posts/'.$this->id;
   }

    public function tags()
    {
        return $this->morphToMany(Tags::class, 'taggable');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }


}
