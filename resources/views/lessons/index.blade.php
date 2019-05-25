@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Lessons</div>

                <div class="panel-body">
                    @foreach ($lessons as $lesson)
                        <article>
                            <h4>
                                <a href="{{ $lesson->path()}}">
                                    {{ $lesson->title }}
                                </a>
                            </h4>
                            <div class="body">{{ $lesson->content }}</div>
                        </article>

                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
