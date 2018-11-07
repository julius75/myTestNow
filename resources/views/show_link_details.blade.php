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

        @if(auth()->check())
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                    </div>
                    <article>
                        <h4 class="text-lg-center">Application for the post</h4>
                        <hr>
                        <div>
                            {{--<a href="{{$post->path()}}/apply">--}}
                            <button type="button" class="btn btn-info btn-block">Click to Apply</button>
                            </a>
                        </div>
                    </article>

                </div>

            </div>
        </div>
            @else
        <p class="text-sm-center"><a href="{{route('login')}}">Create account to apply</a></p>
            @endif
        </div>
@endsection

