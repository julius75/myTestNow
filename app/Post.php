<?php

namespace App;
use\App\Tags;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'decsription',
    ];

   public  function path(){
       return "/posts/{$this->tag->slug}/{$this->id}";
   }

//    public function tags()
//    {
//        return $this->morphToMany(Tags::class, 'taggable');
//    }

    public function tag()
    {
        return $this->belongsTo(Tags::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


}
