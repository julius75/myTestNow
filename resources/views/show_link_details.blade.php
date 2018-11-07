@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{$post->title}}</div>
                    <div class="card-body">
                            </div>
                                <article>
                                    <h4>{{$post->description}}</h4>
                                </article>
                                <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

{{--@foreach($posts as $post)--}}
{{--<div class="well">--}}
{{--<h3> <u>Title</u>: {{$post->title}}</h3>--}}
{{--<a href="/posts/{{$post->id}}">--}}
{{--<h3><u>descriptions</u>: {{$post->description}}</h3>--}}
{{--</a> </h3>--}}
{{--<small> dated:{{$post->updated_at}}</small>--}}
{{--</div>--}}
{{--@endforeach--}}


{{--{!! $posts->links() !!}--}}

{{--@extends('layouts.app')--}}

{{--@section('content')--}}
    {{--<h1>{{$post->title}}</h1>--}}
    {{--<div>--}}
        {{--{{$post->title}}--}}
        {{--{{$post->applications_received_count}}--}}
    {{--</div>--}}
    {{--<a href="/posts/{{$post->id}}/apply">--}}
        {{--<button type="button" class="btn btn-info">Apply here</button>--}}
    {{--</a>--}}
