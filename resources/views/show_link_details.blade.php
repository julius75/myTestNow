@extends('layouts.app')

@section('content')
    <h1>{{$post->title}}</h1>
    <div>
        {{$post->title}}
        {{--{{$post->applications_received_count}}--}}
    </div>
    <a href="/posts/{{$post->id}}/apply">
        <button type="button" class="btn btn-info">Apply here</button>
    </a>

@endsection