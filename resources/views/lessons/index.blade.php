@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Lessons</div>

                <div class="panel-body">
                    @foreach ($lessons as $lesson)
                    <div class="card">
                      <div class="row no-gutters">
                        <div class="col-auto">
                          <a href="{{ $lesson->path()}}">
                            <img src="/storage/images/{{ $lesson->thumbnail}}" class="img-fluid rounded" alt="">
                          </a>
                        </div>
                        <div class="col">
                          <div class="card-block px-2">
                            <h4>
                              <a href= "{{ $lesson->path()}}" class="card-title">
                                {{ $lesson->title }}
                              </a>
                            </h4>
                            <p class="card-text">{{ $lesson->content }}</p>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer w-100 text-muted">
                            {{ $lesson->created_at->diffForHumans()}} by
                            <a href="#">
                              {{ $lesson->teacher->name }}
                            </a>
                      </div>
                    </div>
                    <div class="mt-4" />
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
