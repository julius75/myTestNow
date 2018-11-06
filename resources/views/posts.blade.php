@extends('layouts.app')

@section('content')
        <!DOCTYPE html>
<html>
<head>
</head>
<body>

@if(count($posts)>=1)
    @foreach($posts as $post)
        <div class="well">
                <h3> <u>Title</u>: {{$post->title}}</h3>
            <a href="/posts/{{$post->id}}">
                <h3><u>descriptions</u>: {{$post->description}}</h3>
            </a> </h3>
            <small> dated:{{$post->updated_at}}</small>
        </div>
    @endforeach
@else
    <p>No Posts yet submitted</p>
@endif

{!! $posts->links() !!}

</body>
</html>


</body>
</html>
@endsection