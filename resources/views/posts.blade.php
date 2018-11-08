@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Forum Posts</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                            @if(count($posts)>=1)
                            @foreach($posts as $post)
                                <article>
                                    <h4>
                                    <a href="{{$post->path()}}">
                                   {{$post->title}}
                                    </a></h4>
                                    <div class="card-body">{{$post->description}}</div>
                                </article>
                                    <hr>
                                    <div>
                                    <button class="btn-btn-default">Subscribe</button>
                                    </div>
                            @endforeach
                            @else
                                <p>No Posts yet submitted</p>
                            @endif
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
