@extends('layouts.app')
@section('content')
    <div class="container" style="background-color: whitesmoke">
        <form action="{{route('store')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-6">
                    <h5 style="text-decoration: underline;">Details</h5>
                <div class="col-md-6">

                    <div class="form-group">
                        <label for="introduction">Introduction</label>
                        <input type="" class="form-control"  name="introduction" required>
                    </div>

                    <div class="form-group">
                        <label for="resume">Resume</label>
                        <input type="file" class="form-control-file" name="resume">
                    </div>

                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>

            {{--@include('layouts.errors')--}}


        </form>

    </div>
@endsection
