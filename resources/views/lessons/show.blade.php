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
</div>
@endsection
