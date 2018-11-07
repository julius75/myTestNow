<?php

namespace App\Http\Controllers;

use App\Application;
use App\Post;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $application=new Application();
//        $request->validate([
//            'title'=>'string|required',
//            'resume'=>'required',
//        ]);
        $save=new Application(Request::all());
            if($save){
                flash('Proposal successfully submitted')->success()->important();
                return back();
            }
            flash('An error occurred while trying to submit the proposal! Please try again')->error()->important();
            return back();


    }
    public function addApplication(Post $post){
        $post->addApplication([
            'introduction'=> request('introduction'),
            'user_id'=> auth()->id,
            'resume'=>request('resume'),

        ]);

        return back();

    }


    public function show(Application $application)
    {
        //
    }


    public function edit(Application $application)
    {
        //
    }


    public function update(Request $request, Application $application)
    {
        //
    }


    public function destroy(Application $application)
    {
        //
    }
}
