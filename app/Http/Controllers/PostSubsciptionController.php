<?php

namespace App\Http\Controllers;

use App\Post;
use App\PostSubsciption;
use Illuminate\Http\Request;

class PostSubsciptionController extends Controller
{

    public function store($taggableId, Post $post)
    {
        $post->subscribe();

    }




}
