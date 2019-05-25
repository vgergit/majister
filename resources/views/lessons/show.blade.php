@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                      <h4>{{ $lesson->title}}</h4>
                </div>

                <div class="panel-body">
                    {{$lesson->content}}
                </div>
            </div>
        </div>
    </div>
    <hr>
    <hr>

    <div class="row justify-content-center">
        <div class="col-md-12">
            @foreach($lesson->comments as $comment)
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $comment->created_at->diffForHumans()}}</div>
                    <div class="panel-body">
                        {{$comment->content}}
                    </div>
                </div>
                <hr>
            @endforeach
        </div>
    </div>
</div>
@endsection
