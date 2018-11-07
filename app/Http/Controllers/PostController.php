<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tags;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('store','index');
    }
    public function index($taggableSlug = null)
    {
        if($taggableSlug){
            $taggableId= Tags::where('slug',$taggableSlug)->first()->id;
            $posts = Post::where('tag_id', $taggableId)->latest()->get();
        }
        else{
            $posts=Post::latest()->get();
        }


        return view('posts',compact('posts'));
    }
public function post_details($id)
{
    $post = Post::find($id);
    return view('show_link_details')->with('post', $post);
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function apply()
    {
        return view('post_application');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description'=> 'required',
            'tag_id' => 'required|exists:tags,id',
        ]);
        $post = new Post;
        $post->user_id = auth()->id;
        $post->tag_id = $request->tag_id;
        $post->title = $request->title;
        $post->description= $request->description;
        $post->save();

        // Store data for only a single request and destory
        Session::flash( 'sucess', 'Post published.' );


        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($taggableId, Post $post)
    {
        return view('show_link_details',compact( 'post'));
    }

    public function edit(Post $post)
    {
        //
    }

    public function create()
    {
        return view('new_post');
    }
    public function update(Request $request, Post $post)
    {
        //
    }


//    public function destroy(Post $post)
//    {
//        //
//    }
}
