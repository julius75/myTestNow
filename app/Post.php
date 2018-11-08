<?php

namespace App;
use App\Notifications\SlackNotification;
use\App\Tags;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Post extends Model

{
    use Notifiable;

    protected static function boot()
    {
        parent::boot();
        self::created( function ($model){
            $model->notify(new SlackNotification());
        });
    }


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

    public function routeNotificationForSlack($driver)
    {
        return config('app.slack_webhook');
       // return "https://hooks.slack.com/services/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";
    }

}
