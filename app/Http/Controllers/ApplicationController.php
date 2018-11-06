<?php

namespace App\Http\Controllers;

use App\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

//        if ($request->input){
//            $application->save();
//            flash('Proposal successfully saved as draft')->success()->important();
//            return back();

//        }else{
//            $application->title=$request->input('title');
//            $application->resume=$request->input('resume');
//            $application->save();
//            flash('Proposal successfully submitted')->success()->important();
//            return back();

       // }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function show(Application $application)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function edit(Application $application)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Application $application)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function destroy(Application $application)
    {
        //
    }
}
