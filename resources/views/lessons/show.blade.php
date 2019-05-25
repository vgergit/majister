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

    <div class="row justify-content-center">
        <div class="col-md-12">
            @foreach($lesson->comments as $comment)
                <div class="card">
                    <div class="card-header">
                      <div class="card-title">
                        <a href="#">  <!-- Link to profile -->
                          {{ $comment->owner->name }}
                        </a> said {{ $comment->created_at->diffForHumans()}} ...
                      </div>
                    </div>

                    <div class="card-body">
                        {{$comment->content}}
                    </div>
                </div>
                <div class="mt-3" />
            @endforeach
        </div>
    </div>
</div>
@endsection
