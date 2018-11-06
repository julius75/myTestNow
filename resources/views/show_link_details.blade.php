@extends('layouts.app')

@section('content')
    <h1>{{$post->title}}</h1>
    <div>
        {{$post->title}}
        {{--{{$post->applications_received_count}}--}}
    </div>
    <button type="button" class="btn btn-info">Apply here</button>
@endsection