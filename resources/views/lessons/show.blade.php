@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <a href="#">{{$lesson->teacher->name}}</a> taught:
                      <h4>{{ $lesson->title}}</h4>
                </div>

                <div class="panel-body">
                    {{$lesson->content}}
                </div>
            </div>
        </div>
    </div>
    <hr>

    <div class="row justify-content-center">
        <div class="col-md-12">
            @foreach($lesson->comments as $comment)
              @include ('lessons.comment')
            @endforeach
        </div>
    </div>
</div>
@endsection
